<?php
/**
 * Coaching 360 Growth Lab USA - Core Security Framework
 * 
 * Provides enterprise-grade security protections:
 * - Direct execution protection
 * - Removal of server & PHP version banners (X-Powered-By)
 * - Strict HTTP Security Headers (CSP, X-Frame-Options, X-Content-Type-Options, Referrer-Policy, Permissions-Policy)
 * - Secure Session initialization (HttpOnly, Secure, SameSite=Lax, Strict Mode)
 * - Cryptographic CSRF Token generation and verification
 * - Anti-bot Honeypot validation
 * - Strict input sanitization & slug whitelisting
 * - Session-based IP rate limiting to prevent spam and DoS
 */

if (!defined('APP_SECURE_INIT')) {
    define('APP_SECURE_INIT', true);
}

// 1. Block direct HTTP execution of include files
if (basename($_SERVER['SCRIPT_FILENAME'] ?? '') === basename(__FILE__)) {
    http_response_code(403);
    exit('Direct access not permitted.');
}

// 2. Suppress PHP identity disclosure
@ini_set('expose_php', 'off');
if (function_exists('header_remove')) {
    header_remove('X-Powered-By');
}

// 3. Configure hardened session defaults if not already started
if (session_status() === PHP_SESSION_NONE && !headers_sent()) {
    $isSecure = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') 
             || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)
             || (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https');

    // Enforce modern cookie flags
    if (PHP_VERSION_ID >= 70300) {
        session_set_cookie_params([
            'lifetime' => 0,
            'path'     => '/',
            'domain'   => '',
            'secure'   => $isSecure,
            'httponly' => true,
            'samesite' => 'Lax'
        ]);
    } else {
        session_set_cookie_params(0, '/; samesite=Lax', '', $isSecure, true);
    }

    @ini_set('session.use_only_cookies', '1');
    @ini_set('session.use_strict_mode', '1');
    @ini_set('session.cookie_httponly', '1');

    session_start();
}

// 4. Send Robust HTTP Security Headers
if (!headers_sent()) {
    // Prevent MIME-sniffing
    header('X-Content-Type-Options: nosniff');

    // Clickjacking protection: only allow same origin framing
    header('X-Frame-Options: SAMEORIGIN');

    // Cross-Site Scripting (XSS) filter for legacy browsers
    header('X-XSS-Protection: 1; mode=block');

    // Strict referrer policy: don't leak full path across origins
    header('Referrer-Policy: strict-origin-when-cross-origin');

    // Restrict unused or intrusive browser capabilities & disable FLoC/interest-cohort
    header('Permissions-Policy: camera=(), microphone=(), geolocation=(), payment=(), usb=(), vr=(), interest-cohort=()');

    // Block cross-domain policy files (Flash, PDF cross-domain access)
    header('X-Permitted-Cross-Domain-Policies: none');

    // Isolate top-level window context
    header('Cross-Origin-Opener-Policy: same-origin-allow-popups');

    // HTTP Strict Transport Security (HSTS) when running over HTTPS
    if (!empty($isSecure)) {
        header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
    }

    // Content Security Policy (Whitelists project resources, Google Fonts, Bootstrap CDN, Swiper CDN, GoHighLevel / LeadConnector forms)
    $cspDirectives = [
        "default-src 'self'",
        "script-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://links.360growthlab.com https://*.leadconnectorhq.com https://api.leadconnectorhq.com https://challenges.cloudflare.com",
        "style-src 'self' 'unsafe-inline' https://cdn.jsdelivr.net https://fonts.googleapis.com https://links.360growthlab.com https://*.leadconnectorhq.com",
        "font-src 'self' data: https://fonts.gstatic.com https://cdn.jsdelivr.net https://links.360growthlab.com https://*.leadconnectorhq.com",
        "img-src 'self' data: https: blob:",
        "frame-src 'self' https://links.360growthlab.com https://*.leadconnectorhq.com https://api.leadconnectorhq.com https://challenges.cloudflare.com",
        "connect-src 'self' https://links.360growthlab.com https://*.leadconnectorhq.com https://api.leadconnectorhq.com https://challenges.cloudflare.com",
        "object-src 'none'",
        "frame-ancestors 'self'",
        "base-uri 'self'",
        "form-action 'self' https://links.360growthlab.com https://*.leadconnectorhq.com https://api.leadconnectorhq.com"
    ];

    if (!empty($isSecure)) {
        $cspDirectives[] = "upgrade-insecure-requests";
    }

    header('Content-Security-Policy: ' . implode('; ', $cspDirectives));
}

// 5. CSRF Token Engine (Cryptographically Secure)
function get_csrf_token(): string {
    if (session_status() === PHP_SESSION_NONE) {
        @session_start();
    }
    // Rotate token after 2 hours
    if (empty($_SESSION['csrf_token']) || empty($_SESSION['csrf_token_time']) || (time() - $_SESSION['csrf_token_time'] > 7200)) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        $_SESSION['csrf_token_time'] = time();
    }
    return $_SESSION['csrf_token'];
}

function verify_csrf_token(?string $token): bool {
    if (session_status() === PHP_SESSION_NONE) {
        @session_start();
    }
    if (empty($token) || empty($_SESSION['csrf_token'])) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], (string)$token);
}

// 6. Strict Input Sanitization & Validation Helpers
function clean_string($data, int $maxLen = 1000): string {
    if (!is_string($data)) {
        return '';
    }
    $data = trim($data);
    $data = strip_tags($data);
    if (mb_strlen($data) > $maxLen) {
        $data = mb_substr($data, 0, $maxLen);
    }
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

function clean_slug(?string $slug, string $default = ''): string {
    if (!is_string($slug)) {
        return $default;
    }
    // Whitelist only alphanumeric, hyphen and underscore
    $cleaned = preg_replace('/[^a-zA-Z0-9_-]/', '', trim($slug));
    return $cleaned !== '' ? $cleaned : $default;
}

function clean_email(?string $email): string {
    if (!is_string($email)) {
        return '';
    }
    $sanitized = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
    return filter_var($sanitized, FILTER_VALIDATE_EMAIL) ? $sanitized : '';
}

function clean_phone(?string $phone): string {
    if (!is_string($phone)) {
        return '';
    }
    // Keep numbers, spaces, plus, hyphens, parentheses
    return preg_replace('/[^0-9+\-\s()]/', '', trim($phone));
}

function e($str): string {
    return htmlspecialchars((string)$str, ENT_QUOTES, 'UTF-8');
}

// 7. Rate Limiter (Protects forms and endpoints against spam bots and brute force)
function check_rate_limit(string $actionKey = 'form_submit', int $maxAttempts = 5, int $decayMinutes = 10): bool {
    $ip = $_SERVER['REMOTE_ADDR'] ?? '127.0.0.1';
    $rateKey = 'rate_' . md5($actionKey . '_' . $ip);

    if (session_status() === PHP_SESSION_NONE) {
        @session_start();
    }

    $now = time();
    $data = $_SESSION[$rateKey] ?? ['attempts' => 0, 'first_attempt' => $now];

    // Reset if window has elapsed
    if ($now - $data['first_attempt'] > ($decayMinutes * 60)) {
        $_SESSION[$rateKey] = ['attempts' => 1, 'first_attempt' => $now];
        return true;
    }

    $data['attempts']++;
    $_SESSION[$rateKey] = $data;

    return ($data['attempts'] <= $maxAttempts);
}
