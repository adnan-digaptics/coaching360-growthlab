<?php
/**
 * Coaching 360 Growth Lab USA - Secure Lead Ingestion API
 * 
 * Security Features:
 * - Method whitelisting (POST only)
 * - Cryptographic CSRF verification
 * - Bot honeypot check
 * - IP-based session rate limiting
 * - Sanitization of all input fields
 * - Email validation
 * - Secure data persistence in restricted data/ store
 */

require_once __DIR__ . '/../includes/security.php';

header('Content-Type: application/json; charset=UTF-8');

// 1. Only allow POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Method Not Allowed']);
    exit;
}

// 2. Anti-Bot Honeypot trap
if (!empty($_POST['company_trap']) || !empty($_POST['website_hp'])) {
    // Silently succeed so the spam bot believes submission worked
    echo json_encode(['success' => true, 'message' => 'Thank you! Your request has been received.']);
    exit;
}

// 3. CSRF Verification
$token = $_POST['csrf_token'] ?? $_SERVER['HTTP_X_CSRF_TOKEN'] ?? '';
if (!verify_csrf_token($token)) {
    http_response_code(403);
    echo json_encode(['success' => false, 'error' => 'Invalid or expired security token. Please refresh the page and try again.']);
    exit;
}

// 4. Rate Limiting (5 submissions per 10 minutes)
if (!check_rate_limit('lead_submission', 5, 10)) {
    http_response_code(429);
    echo json_encode(['success' => false, 'error' => 'Too many requests. Please wait a few minutes before submitting again.']);
    exit;
}

// 5. Input Extraction and Strict Sanitization
$fullName      = clean_string($_POST['full_name'] ?? $_POST['name'] ?? '', 100);
$email         = clean_email($_POST['email'] ?? '');
$phone         = clean_phone($_POST['phone'] ?? '');
$company       = clean_string($_POST['company'] ?? $_POST['company_website'] ?? $_POST['website'] ?? '', 150);
$serviceSlug   = clean_string($_POST['service_slug'] ?? $_POST['service'] ?? $_POST['selected_service'] ?? '', 100);
$serviceTitle  = clean_string($_POST['service_title'] ?? '', 150);
$serviceName   = clean_string($_POST['service_name'] ?? '', 150);
$serviceId     = clean_string($_POST['service_id'] ?? '', 100);
$industrySlug  = clean_string($_POST['industry_slug'] ?? $_POST['industry'] ?? $_POST['niche_slug'] ?? '', 100);
$industryName  = clean_string($_POST['industry_name'] ?? $_POST['niche_name'] ?? '', 150);
$industryTitle = clean_string($_POST['industry_title'] ?? '', 150);
$industryId    = clean_string($_POST['industry_id'] ?? '', 100);
$pageUrl       = clean_string($_POST['page_url'] ?? '', 255);
$niche         = clean_string($_POST['niche'] ?? $_POST['coaching_niche'] ?? (!empty($industryName) ? $industryName : (!empty($serviceName) ? $serviceName : '')), 120);
$revenue       = clean_string($_POST['revenue'] ?? '', 60);
$goal          = clean_string($_POST['goal'] ?? (!empty($industryName) ? 'Growth Consultation: ' . $industryName : (!empty($serviceTitle) ? 'Service Consultation: ' . $serviceTitle : '')), 120);
$message       = clean_string($_POST['message'] ?? $_POST['bottleneck'] ?? '', 2000);
$sourcePage    = clean_string($_POST['source_page'] ?? $_SERVER['HTTP_REFERER'] ?? 'Website Form', 200);

// Basic required validation
if (empty($email)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'error' => 'Please provide a valid email address.']);
    exit;
}

if (empty($fullName)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'error' => 'Please provide your full name.']);
    exit;
}

// 6. Secure Persistence
$leadRecord = [
    'id'             => bin2hex(random_bytes(8)),
    'timestamp'      => date('c'),
    'ip_hash'        => hash('sha256', ($_SERVER['REMOTE_ADDR'] ?? '127.0.0.1') . 'salt_c360_growth'),
    'full_name'      => $fullName,
    'email'          => $email,
    'phone'          => $phone,
    'company'        => $company,
    'niche'          => $niche,
    'service_slug'   => $serviceSlug,
    'service_name'   => $serviceName,
    'service_title'  => $serviceTitle,
    'service_id'     => $serviceId,
    'industry_slug'  => $industrySlug,
    'industry_name'  => $industryName,
    'industry_title' => $industryTitle,
    'industry_id'    => $industryId,
    'revenue'        => $revenue,
    'goal'           => $goal,
    'message'        => $message,
    'source_page'    => $sourcePage,
    'page_url'       => $pageUrl
];

$dataFile = __DIR__ . '/../data/leads.json';
$existingLeads = [];

if (file_exists($dataFile)) {
    $content = @file_get_contents($dataFile);
    if (!empty($content)) {
        $decoded = @json_decode($content, true);
        if (is_array($decoded)) {
            $existingLeads = $decoded;
        }
    }
}

// Append new lead and save
$existingLeads[] = $leadRecord;
@file_put_contents($dataFile, json_encode($existingLeads, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX);

// 7. Successful Response
if (!empty($industryName)) {
    $confirmMsg = "Thank you! Our senior growth strategist specializing in {$industryName} will review your submission and contact you within 2 hours.";
} elseif (!empty($serviceTitle)) {
    $confirmMsg = "Thank you! Your consultation request for {$serviceTitle} has been securely submitted. Our senior advisory team will contact you shortly.";
} else {
    $confirmMsg = "Thank you! Your growth diagnostic request has been securely submitted. Our senior advisory team will contact you shortly.";
}

echo json_encode([
    'success'        => true,
    'message'        => $confirmMsg,
    'service_slug'   => $serviceSlug,
    'service_title'  => $serviceTitle,
    'industry_slug'  => $industrySlug,
    'industry_name'  => $industryName
]);
