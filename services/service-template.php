<?php
$basePath = '../';
require_once __DIR__ . '/../includes/data.php';

if (!isset($serviceSlug)) {
    $serviceSlug = clean_slug($_GET['slug'] ?? 'lead-generation', 'lead-generation');
}

$service = serviceBySlug($serviceSlug, $services);

if (!$service) {
    header("Location: ../services.php");
    exit;
}

$overview = $service['overview'] ?? $service['summary'] ?? $service['tagline'];
$deliverables = $service['deliverables'] ?? [
    'Turnkey Conversion Infrastructure & Integration',
    'Full Direct-Response Copywriting & Asset Suite',
    'Calendar Booking Machine & Automated Reminders',
    'Live Executive Lead Attribution & ROI Dashboard'
];
$benefits = $service['benefits'] ?? [
    'A predictable, scalable calendar of qualified discovery calls every single week',
    'Significantly reduced Cost Per Acquisition (CPA) through conversion-tested funnels',
    'Empowered coaching team focused exclusively on high-value conversations and closing',
    'Complete transparency through executive reporting dashboards with real-time attribution'
];
$processSteps = $service['process_steps'] ?? [
    ['step' => '01', 'stage' => 'Days 1–3', 'title' => 'Diagnostic & Market Audit', 'desc' => 'We analyze your target coaching niche, current bottlenecks, and client acquisition leaks.'],
    ['step' => '02', 'stage' => 'Days 4–9', 'title' => 'System & Technical Architecture', 'desc' => 'We engineer the landing pages, CRM pipelines, and automated workflows.'],
    ['step' => '03', 'stage' => 'Days 10–14', 'title' => 'Campaign & Funnel Launch', 'desc' => 'We activate traffic, tracking, and lead qualification mechanisms.'],
    ['step' => '04', 'stage' => 'Day 15+', 'title' => 'Optimization & Ongoing Scale', 'desc' => 'We continually monitor performance, test copy, and scale discovery bookings.']
];
$targetAudience = $service['target_audience'] ?? 'Executive, Business, Life, Health, Career, and Financial Coaches seeking predictable growth and operational leverage.';
$whyChoose = $service['why_choose'] ?? [
    'Dedicated 100% US-based team of coaching growth specialists',
    'Turnkey technical execution across websites, funnels, GHL, and AI',
    'Focus on actual qualified revenue and pipeline value — not vanity clicks',
    'Strict confidentiality and proven track record with 250+ coaching practices'
];

$pageTitle = $service['title'] . ' | Coaching 360 Growth Lab USA';
$pageDescription = $service['tagline'];

require_once __DIR__ . '/../includes/header.php';
?>

<!-- ==========================================================================
     1. DEDICATED SERVICE HERO SECTION (Awwwards Grade)
     ========================================================================== -->
<section class="service-detail-hero section-ambient-glow position-relative overflow-hidden pt-4 pb-5 bg-white border-bottom">
  <div class="container position-relative" style="z-index: 2;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb small text-muted mb-0">
        <li class="breadcrumb-item"><a href="../index.php" class="text-decoration-none text-muted"><i class="bi bi-house-door me-1"></i>Home</a></li>
        <li class="breadcrumb-item"><a href="../services.php" class="text-decoration-none text-muted">Services</a></li>
        <li class="breadcrumb-item active fw-bold text-primary" aria-current="page"><?= htmlspecialchars($service['short_title']) ?></li>
      </ol>
    </nav>

    <div class="row align-items-center g-4 g-lg-5">
      <!-- Left Column: Copy & Value Proposition -->
      <div class="col-lg-7">
        <div class="d-inline-flex flex-wrap align-items-center gap-2 mb-3">
          <span class="service-pill-tag">
            <span class="award-pulse-dot"></span>
            <i class="bi <?= htmlspecialchars($service['icon']) ?> me-1"></i>
            <?= htmlspecialchars($service['badge']) ?>
          </span>
          <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold fs-xs text-uppercase tracking-wider">
            <i class="bi bi-shield-check me-1"></i> Turnkey US Implementation
          </span>
        </div>

        <h1 class="display-5 fw-extrabold text-dark letter-spacing-tight mb-3">
          <?= htmlspecialchars($service['title']) ?>
        </h1>

        <p class="lead text-secondary mb-4 fs-5" style="line-height: 1.75;">
          <?= htmlspecialchars($service['tagline']) ?>
        </p>

        <!-- Stats Bar -->
        <div class="row g-2 g-sm-3 mb-4 py-3 bg-white rounded-4 border shadow-xs px-2 text-center">
          <?php foreach ($service['stats'] as $num => $label): ?>
            <div class="col-6 col-sm-3 py-1 border-end border-light-subtle last-no-border">
              <div class="fs-4 fw-extrabold text-primary font-manrope"><?= htmlspecialchars($num) ?></div>
              <div class="small text-muted fw-semibold" style="font-size: 0.72rem;"><?= htmlspecialchars($label) ?></div>
            </div>
          <?php endforeach; ?>
        </div>

        <!-- Action CTAs -->
        <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
          <a href="#service-booking-section" class="btn btn-primary btn-lg rounded-pill px-4 py-3 shadow-brand fw-bold">
            <span><?= htmlspecialchars($service['cta_text']) ?></span>
            <i class="bi bi-arrow-right ms-2"></i>
          </a>
          <a href="#how-it-works" class="btn btn-outline-dark btn-lg rounded-pill px-4 py-3 fw-bold">
            <i class="bi bi-play-circle me-1 text-primary"></i> How It Works
          </a>
        </div>

        <div class="d-flex align-items-center gap-3 mt-4 text-muted small">
          <div class="d-flex text-warning">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <span><strong>4.98/5 Rating</strong> from 250+ scaling coaching businesses nationwide</span>
        </div>
      </div>

      <!-- Right Column: Visual Composite -->
      <div class="col-lg-5">
        <div class="service-hero-visual">
          <div class="service-hero-img-wrap">
            <img src="<?= $basePath ?><?= htmlspecialchars($service['image']) ?>" alt="<?= htmlspecialchars($service['title']) ?>" class="img-fluid" loading="eager" fetchpriority="high" decoding="async">
          </div>
          <div class="service-floating-stat-box">
            <div class="service-floating-icon">
              <i class="bi <?= htmlspecialchars($service['icon']) ?>"></i>
            </div>
            <div>
              <div class="fw-bold text-dark font-manrope fs-6">Institutional Execution</div>
              <div class="text-muted small" style="font-size: 0.78rem;">Guaranteed Milestones • Dedicated USA Strategists</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     STICKY IN-PAGE SUB-NAVIGATION STRIP
     ========================================================================== -->
<nav class="service-subnav-strip" aria-label="Service Section Navigation">
  <div class="container d-flex align-items-center justify-content-between">
    <div class="service-subnav-links">
      <a href="#overview" class="service-subnav-link active"><i class="bi bi-compass"></i> Overview</a>
      <a href="#bottlenecks" class="service-subnav-link"><i class="bi bi-exclamation-triangle"></i> Bottlenecks</a>
      <a href="#deliverables" class="service-subnav-link"><i class="bi bi-box-seam"></i> Deliverables</a>
      <a href="#capabilities" class="service-subnav-link"><i class="bi bi-cpu"></i> Capabilities</a>
      <a href="#outcomes" class="service-subnav-link"><i class="bi bi-graph-up"></i> Outcomes &amp; ROI</a>
      <a href="#how-it-works" class="service-subnav-link"><i class="bi bi-diagram-3"></i> Roadmap</a>
      <a href="#target-audience" class="service-subnav-link"><i class="bi bi-people"></i> Fit &amp; Scope</a>
      <a href="#faqs" class="service-subnav-link"><i class="bi bi-question-circle"></i> FAQs</a>
    </div>
    <div class="d-none d-lg-block">
      <a href="#service-booking-section" class="btn btn-primary btn-sm rounded-pill btn-cta-subnav shadow-xs">
        <span><?= htmlspecialchars($service['cta_text']) ?></span>
        <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>
  </div>
</nav>

<!-- ==========================================================================
     2. DETAILED SERVICE OVERVIEW & ENGINE SPECIFICATIONS
     ========================================================================== -->
<section id="overview" class="py-5 bg-white border-bottom">
  <div class="container py-lg-4">
    <div class="row g-4 g-lg-5 align-items-stretch">
      <!-- Left Column: Executive Strategic Blueprint -->
      <div class="col-lg-7 d-flex flex-column justify-content-between">
        <div>
          <span class="service-pill-tag mb-2">Executive Strategic Blueprint</span>
          <h2 class="display-6 fw-bold text-dark mb-3 font-manrope">Why This Growth Engine Matters For Your Practice</h2>
          <p class="fs-5 text-secondary mb-4" style="line-height: 1.8;">
            <?= htmlspecialchars($overview) ?>
          </p>
          <div class="d-flex flex-column gap-3 mb-4">
            <div class="p-3 bg-light rounded-4 border d-flex align-items-start gap-3">
              <div class="bg-primary text-white rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center mt-1" style="width: 32px; height: 32px; min-width: 32px; min-height: 32px; aspect-ratio: 1 / 1;">
                <i class="bi bi-bullseye fs-6"></i>
              </div>
              <div>
                <h6 class="fw-bold text-dark mb-1">Direct-Response Conversion Psychology</h6>
                <p class="text-secondary small mb-0">Engineered around how high-ticket coaching clients actually decide, evaluate credentials, and commit to investment.</p>
              </div>
            </div>
            <div class="p-3 bg-light rounded-4 border d-flex align-items-start gap-3">
              <div class="bg-primary text-white rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center mt-1" style="width: 32px; height: 32px; min-width: 32px; min-height: 32px; aspect-ratio: 1 / 1;">
                <i class="bi bi-diagram-3-fill fs-6"></i>
              </div>
              <div>
                <h6 class="fw-bold text-dark mb-1">End-to-End System Synchronization</h6>
                <p class="text-secondary small mb-0">Eliminates siloed apps by unifying lead acquisition, calendar booking, 2-way SMS follow-up, and real-time CRM updates.</p>
              </div>
            </div>
            <div class="p-3 bg-light rounded-4 border d-flex align-items-start gap-3">
              <div class="bg-primary text-white rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center mt-1" style="width: 32px; height: 32px; min-width: 32px; min-height: 32px; aspect-ratio: 1 / 1;">
                <i class="bi bi-shield-lock-fill fs-6"></i>
              </div>
              <div>
                <h6 class="fw-bold text-dark mb-1">100% Client Ownership Guarantee</h6>
                <p class="text-secondary small mb-0">Every asset, funnel, database record, and workflow we construct belongs entirely to your coaching business with zero vendor lock-in.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Column: Engine Specifications Card -->
      <div class="col-lg-5">
        <div class="engine-spec-card">
          <div class="d-flex align-items-center justify-content-between mb-3 border-bottom pb-3">
            <div>
              <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2.5 py-1 rounded-pill fw-bold fs-xs text-uppercase">
                Engine Spec Sheet
              </span>
              <h5 class="fw-bold text-dark mb-0 mt-2 font-manrope"><?= htmlspecialchars($service['short_title']) ?></h5>
            </div>
            <div class="text-end">
              <span class="badge bg-success-subtle text-success border border-success-subtle px-2.5 py-1 rounded-pill fw-bold small">
                <i class="bi bi-circle-fill fs-xxs me-1"></i> Active Deployment
              </span>
            </div>
          </div>

          <div class="spec-row">
            <span class="spec-label"><i class="bi bi-stopwatch text-primary"></i> Launch Velocity</span>
            <span class="spec-val">10 – 14 Business Days</span>
          </div>
          <div class="spec-row">
            <span class="spec-label"><i class="bi bi-crosshair text-primary"></i> Target Outcome</span>
            <span class="spec-val">Predictable Discovery Calls</span>
          </div>
          <div class="spec-row">
            <span class="spec-label"><i class="bi bi-person-badge text-primary"></i> Dedicated Talent</span>
            <span class="spec-val">Lead Strategist &amp; Tech Architect</span>
          </div>
          <div class="spec-row">
            <span class="spec-label"><i class="bi bi-stack text-primary"></i> Core Architecture</span>
            <span class="spec-val">GHL, Meta, Google, GA4, Zapier</span>
          </div>
          <div class="spec-row">
            <span class="spec-label"><i class="bi bi-database-check text-primary"></i> IP &amp; Asset Rights</span>
            <span class="spec-val text-success">100% Client Owned</span>
          </div>
          <div class="spec-row">
            <span class="spec-label"><i class="bi bi-shield-check text-primary"></i> Accountability</span>
            <span class="spec-val">Weekly Sprint &amp; SLA Backed</span>
          </div>

          <div class="pt-3">
            <a href="#service-booking-section" class="btn btn-outline-primary w-100 rounded-pill fw-bold py-2.5">
              <i class="bi bi-calendar2-check me-2"></i> Book Architecture Diagnostic
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     3. PROBLEMS THIS SERVICE SOLVES (CRITICAL BOTTLENECKS)
     ========================================================================== -->
<section id="bottlenecks" class="py-5 bg-light bg-dot-matrix">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Friction Elimination</span>
      <h2 class="display-6 fw-bold text-dark mb-2">The Critical Bottlenecks We Eliminate</h2>
      <p class="text-muted lead fs-6">
        Most coaching businesses plateau not because their methodology lacks depth, but because their commercial machinery has costly leaks. Here is what we resolve:
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($service['problems_solved'] as $index => $problem): ?>
        <div class="col-md-6 col-lg-4">
          <div class="problem-card">
            <div class="problem-icon-wrap">
              <i class="bi bi-exclamation-triangle-fill"></i>
            </div>
            <h5 class="fw-bold text-dark mb-2 font-manrope">Growth Barrier #<?= $index + 1 ?></h5>
            <p class="text-secondary small mb-0" style="line-height: 1.65;">
              <?= htmlspecialchars($problem) ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     4. TANGIBLE DELIVERABLES & SYSTEM ASSETS
     ========================================================================== -->
<section id="deliverables" class="py-5 bg-white border-top border-bottom">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Concrete System Assets</span>
      <h2 class="display-6 fw-bold text-dark mb-2">Tangible Deliverables We Build For You</h2>
      <p class="text-muted lead fs-6">
        Every asset is engineered for long-term equity, predictable bookings, and complete operational independence.
      </p>
    </div>

    <div class="row g-4">
      <?php 
      $delivIcons = ['bi-box-seam', 'bi-file-earmark-code', 'bi-calendar-check', 'bi-speedometer2', 'bi-kanban', 'bi-shield-check'];
      foreach ($deliverables as $delivIdx => $deliverable): 
        $delivIcon = $delivIcons[$delivIdx % count($delivIcons)];
      ?>
        <div class="col-md-6 col-lg-3">
          <div class="deliverable-card">
            <div class="deliverable-icon-wrap">
              <i class="bi <?= $delivIcon ?>"></i>
            </div>
            <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill small mb-2 align-self-start fw-bold" style="font-size: 0.72rem;">
              Deliverable #0<?= $delivIdx + 1 ?>
            </span>
            <h5 class="fw-bold text-dark mb-2 font-manrope fs-6"><?= htmlspecialchars($deliverable) ?></h5>
            <p class="text-secondary small mb-3 flex-grow-1" style="line-height: 1.6;">
              Engineered, stress-tested, and fully integrated with zero technical overhead required from your coaching team.
            </p>
            <div class="pt-2 border-top border-light-subtle d-flex align-items-center justify-content-between">
              <span class="small text-muted" style="font-size: 0.75rem;"><i class="bi bi-check2-circle text-success me-1"></i> Turnkey Handover</span>
              <span class="badge bg-light text-secondary border rounded-pill small" style="font-size: 0.7rem;">100% Yours</span>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     5. KEY FEATURES & TECHNICAL CAPABILITIES
     ========================================================================== -->
<section id="capabilities" class="py-5 bg-light border-bottom">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Core Architecture</span>
      <h2 class="display-6 fw-bold text-dark mb-2">Key Features & Technical Capabilities</h2>
      <p class="text-muted lead fs-6">
        Engineered with institutional rigor, data transparency, and modern growth tooling.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($service['key_features'] as $index => $feature): ?>
        <div class="col-md-6 col-lg-4">
          <div class="feature-box-card">
            <div class="feature-box-icon">
              <i class="bi bi-cpu-fill"></i>
            </div>
            <h5 class="fw-bold text-dark mb-2 font-manrope"><?= htmlspecialchars($feature) ?></h5>
            <p class="text-secondary small mb-0" style="line-height: 1.6;">
              Architected, integrated, and actively monitored by Coaching 360 Growth Lab USA specialists with zero guesswork.
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     6. MEASURABLE OUTCOMES & BALANCE SHEET IMPACT
     ========================================================================== -->
<section id="outcomes" class="py-5 bg-white border-bottom">
  <div class="container py-lg-4">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-lg-5">
        <span class="service-pill-tag mb-2">Tangible ROI</span>
        <h2 class="display-6 fw-bold text-dark mb-3 font-manrope">Measurable Outcomes For Your Practice</h2>
        <p class="text-secondary mb-4 fs-6" style="line-height: 1.75;">
          We measure our success exclusively by your enterprise velocity: qualified discovery calls generated, show-up rates elevated, and revenue accelerated.
        </p>
        <div class="p-4 bg-light rounded-4 border shadow-xs">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="bg-primary text-white rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 44px; height: 44px; min-width: 44px; min-height: 44px; aspect-ratio: 1 / 1;">
              <i class="bi bi-shield-check fs-5"></i>
            </div>
            <div>
              <h6 class="fw-bold mb-0 text-dark">USA Growth Lab Guarantee</h6>
              <small class="text-muted">Structured milestone deliverables &amp; weekly accountability</small>
            </div>
          </div>
          <p class="small text-muted mb-0" style="line-height: 1.6;">
            Our frameworks have delivered over 350,000 qualified leads, 150+ custom GHL configurations, and 4.8x average client ROI across USA coaching practices.
          </p>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="row g-3">
          <?php foreach ($benefits as $idx => $benefit): ?>
            <div class="col-12">
              <div class="p-3 p-md-4 bg-light rounded-4 border d-flex align-items-start gap-3 shadow-xs">
                <div class="bg-success-subtle text-success rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center mt-1" style="width: 36px; height: 36px; min-width: 36px; min-height: 36px; aspect-ratio: 1 / 1;">
                  <i class="bi bi-check-lg fw-bold fs-5"></i>
                </div>
                <div>
                  <h5 class="fw-bold text-dark mb-1 font-manrope">Strategic Outcome #<?= $idx + 1 ?></h5>
                  <p class="text-secondary mb-0 fs-6"><?= htmlspecialchars($benefit) ?></p>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     7. THE 4-STAGE EXECUTION BLUEPRINT
     ========================================================================== -->
<section id="how-it-works" class="py-5 bg-light border-bottom">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Proven Roadmap</span>
      <h2 class="display-6 fw-bold text-dark mb-2">How The Deployment Process Works</h2>
      <p class="text-muted lead fs-6">
        A seamless 4-stage execution model designed to audit, build, launch, and scale your coaching acquisition machinery.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($processSteps as $step): ?>
        <div class="col-md-6 col-lg-3">
          <div class="process-step-card">
            <div class="d-flex align-items-center justify-content-between mb-2">
              <div class="process-step-num"><?= htmlspecialchars($step['step']) ?></div>
              <div class="roadmap-badge"><i class="bi bi-clock"></i> <?= htmlspecialchars($step['stage'] ?? ('Phase ' . $step['step'])) ?></div>
            </div>
            <h5 class="fw-bold text-dark mb-2 font-manrope"><?= htmlspecialchars($step['title']) ?></h5>
            <p class="text-secondary small mb-0" style="line-height: 1.65;">
              <?= htmlspecialchars($step['desc']) ?>
            </p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     8. IDEAL CLIENT PROFILE & WHY CHOOSE US
     ========================================================================== -->
<section id="target-audience" class="py-5 bg-white border-bottom">
  <div class="container py-lg-4">
    <div class="row g-4 g-lg-5">
      <!-- Who It's For -->
      <div class="col-lg-6">
        <div class="bg-light p-4 p-md-5 rounded-4 border h-100 shadow-xs">
          <div class="d-inline-flex align-items-center gap-2 text-primary fw-bold text-uppercase small mb-3">
            <i class="bi bi-person-check-fill"></i> Ideal Client Profile
          </div>
          <h3 class="fw-bold text-dark mb-3 font-manrope">Who This Service Is Engineered For</h3>
          <p class="text-secondary mb-4 fs-6">
            <?= htmlspecialchars($targetAudience) ?>
          </p>
          <ul class="service-feature-checklist">
            <li>Coaches looking for consistent, predictable monthly discovery calls</li>
            <li>Practices tired of fragmented software tools, broken Zapier triggers, and manual follow-ups</li>
            <li>Founders and sales leaders who value high-integrity, data-backed execution</li>
            <li>Teams ready to delegate technical execution to seasoned US-based operators</li>
          </ul>
        </div>
      </div>

      <!-- Why Choose Us -->
      <div class="col-lg-6">
        <div class="bg-light p-4 p-md-5 rounded-4 border h-100 shadow-xs">
          <div class="d-inline-flex align-items-center gap-2 text-success fw-bold text-uppercase small mb-3">
            <i class="bi bi-trophy-fill"></i> The Growth Lab Edge
          </div>
          <h3 class="fw-bold text-dark mb-3 font-manrope">Why Partner with Coaching 360 Growth Lab</h3>
          <p class="text-secondary mb-3">
            We are not a generic digital agency delivering cookie-cutter templates. We operate as your dedicated commercial growth partner.
          </p>
          <div class="d-flex flex-column gap-3">
            <?php foreach ($whyChoose as $reason): ?>
              <div class="d-flex align-items-start gap-2">
                <i class="bi bi-patch-check-fill text-primary flex-shrink-0 mt-1"></i>
                <span class="text-dark fw-semibold small"><?= htmlspecialchars($reason) ?></span>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     9. INTERACTIVE FAQS SECTION
     ========================================================================== -->
<section id="faqs" class="py-5 bg-light border-bottom">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Clarity & Answers</span>
      <h2 class="display-6 fw-bold text-dark mb-2">Frequently Asked Questions</h2>
      <p class="text-muted lead fs-6">
        Common questions about timelines, technology integrations, deliverables, and expectations.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="accordion service-faq-accordion" id="serviceFaqAccordion">
          <?php foreach ($service['faqs'] as $qIndex => $faq): ?>
            <div class="accordion-item">
              <h2 class="accordion-header" id="heading<?= $qIndex ?>">
                <button
                  class="accordion-button <?= $qIndex !== 0 ? 'collapsed' : '' ?>"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapse<?= $qIndex ?>"
                  aria-expanded="<?= $qIndex === 0 ? 'true' : 'false' ?>"
                  aria-controls="collapse<?= $qIndex ?>"
                >
                  <span class="me-2 text-primary fw-bold">Q<?= $qIndex + 1 ?>:</span> <?= htmlspecialchars($faq['q']) ?>
                </button>
              </h2>
              <div
                id="collapse<?= $qIndex ?>"
                class="accordion-collapse collapse <?= $qIndex === 0 ? 'show' : '' ?>"
                aria-labelledby="heading<?= $qIndex ?>"
                data-bs-parent="#serviceFaqAccordion"
              >
                <div class="accordion-body">
                  <?= htmlspecialchars($faq['a']) ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     9. ENTERPRISE ACCREDITATIONS & TRUST STRIP
     ========================================================================== -->
<section class="py-4 bg-light border-bottom">
  <div class="container">
    <div class="accreditation-trust-strip">
      <div class="row align-items-center g-3 text-center text-lg-start">
        <div class="col-lg-3">
          <span class="small fw-bold text-muted text-uppercase letter-spacing-1 d-block">
            <i class="bi bi-shield-check text-primary me-1"></i> Industry Standards
          </span>
          <span class="fw-extrabold text-dark font-manrope fs-6">
            Engineered For Compliance
          </span>
        </div>
        <div class="col-lg-9">
          <div class="d-flex flex-wrap justify-content-center justify-content-lg-between align-items-center gap-3">
            <div class="trust-seal-item d-flex align-items-center gap-2">
              <i class="bi bi-award-fill text-primary fs-5"></i>
              <span class="small fw-bold text-secondary">ICF Ethical Alignment</span>
            </div>
            <div class="trust-seal-item d-flex align-items-center gap-2">
              <i class="bi bi-gear-wide-connected text-primary fs-5"></i>
              <span class="small fw-bold text-secondary">Certified GoHighLevel Partner</span>
            </div>
            <div class="trust-seal-item d-flex align-items-center gap-2">
              <i class="bi bi-meta text-primary fs-5"></i>
              <span class="small fw-bold text-secondary">Official Meta Business Partner</span>
            </div>
            <div class="trust-seal-item d-flex align-items-center gap-2">
              <i class="bi bi-google text-primary fs-5"></i>
              <span class="small fw-bold text-secondary">Google Premier Partner</span>
            </div>
            <div class="trust-seal-item d-flex align-items-center gap-2">
              <i class="bi bi-chat-dots-fill text-primary fs-5"></i>
              <span class="small fw-bold text-secondary">A2P 10DLC SMS Verified</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     10. STRONG CTA & CONTACT / BOOKING FORM SECTION
     ========================================================================== -->
<section id="service-booking-section" class="py-5 bg-white position-relative">
  <div class="container py-lg-4">
    <div class="row align-items-center g-4 g-lg-5">
      <!-- Left Pitch -->
      <div class="col-lg-5">
        <span class="service-pill-tag mb-2">Priority Engagement</span>
        <h2 class="display-6 fw-bold text-dark mb-3 font-manrope">
          Ready to Deploy <?= htmlspecialchars($service['short_title']) ?>?
        </h2>
        <p class="text-secondary mb-4 fs-6" style="line-height: 1.75;">
          Schedule your 30-minute growth diagnostic session. Our senior architects will evaluate your current commercial bottlenecks and present a custom roadmap.
        </p>

        <div class="d-flex flex-column gap-3 mb-4">
          <div class="d-flex align-items-center gap-3">
            <div class="bg-primary text-white rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; min-width: 40px; min-height: 40px; aspect-ratio: 1 / 1;">
              <i class="bi bi-clock-history"></i>
            </div>
            <div>
              <div class="fw-bold text-dark">Fast Turnaround</div>
              <small class="text-muted">Audit completed within 24 to 48 hours</small>
            </div>
          </div>
          <div class="d-flex align-items-center gap-3">
            <div class="bg-primary text-white rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; min-width: 40px; min-height: 40px; aspect-ratio: 1 / 1;">
              <i class="bi bi-shield-lock-fill"></i>
            </div>
            <div>
              <div class="fw-bold text-dark">Zero Obligation</div>
              <small class="text-muted">Strict confidentiality and actionable takeaways</small>
            </div>
          </div>
          <div class="d-flex align-items-center gap-3">
            <div class="bg-primary text-white rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px; min-width: 40px; min-height: 40px; aspect-ratio: 1 / 1;">
              <i class="bi bi-headset"></i>
            </div>
            <div>
              <div class="fw-bold text-dark">Direct Architect Consultation</div>
              <small class="text-muted">Speak directly with seasoned US growth strategists</small>
            </div>
          </div>
        </div>

        <div class="p-3 bg-light rounded-3 border">
          <small class="text-muted d-block mb-1">Prefer direct inquiry?</small>
          <a href="mailto:growth@coaching360usa.com" class="fw-bold text-primary text-decoration-none me-3">
            <i class="bi bi-envelope me-1"></i> growth@coaching360usa.com
          </a>
          <a href="tel:+18005553600" class="fw-bold text-secondary text-decoration-none">
            <i class="bi bi-telephone me-1"></i> +1 (800) 555-3600
          </a>
        </div>
      </div>

      <!-- Right Form: Standalone Reusable Global Service Inquiry Component -->
      <div class="col-lg-7">
        <?php
        $formService = $service;
        require __DIR__ . '/../components/service-inquiry-form.php';
        ?>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     11. OTHER SERVICES QUICK STRIP (SISTER ENGINES)
     ========================================================================== -->
<section id="sister-engines" class="py-5 bg-light border-top">
  <div class="container py-lg-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
      <div>
        <h4 class="fw-bold mb-0 text-dark font-manrope">Explore Interconnected Growth Engines</h4>
        <small class="text-muted">Scale your practice with our full-stack coaching infrastructure</small>
      </div>
      <a href="../services.php" class="btn btn-outline-primary btn-sm rounded-pill px-3 fw-bold">
        View All 12 Engines <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

    <div class="row g-3">
      <?php 
      $count = 0;
      foreach ($services as $other): 
        if ($other['slug'] === $service['slug']) continue; 
        if (++$count > 4) break;
      ?>
        <div class="col-md-6 col-lg-3">
          <a href="<?= htmlspecialchars($other['slug']) ?>.php" class="text-decoration-none h-100 d-block">
            <div class="related-sister-card">
              <div>
                <div class="text-primary fs-3 mb-2"><i class="bi <?= htmlspecialchars($other['icon']) ?>"></i></div>
                <h6 class="mb-1 font-manrope"><?= htmlspecialchars($other['short_title']) ?></h6>
                <p class="small text-muted mb-3" style="font-size: 0.8rem; line-height: 1.5;"><?= htmlspecialchars($other['tagline']) ?></p>
              </div>
              <span class="small fw-bold text-primary">
                Learn More <i class="bi bi-chevron-right fs-xs"></i>
              </span>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Active Section Subnav ScrollSpy Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const navLinks = document.querySelectorAll('.service-subnav-link');
  if (!navLinks.length) return;

  const sections = [];
  navLinks.forEach(link => {
    const targetId = link.getAttribute('href');
    if (targetId && targetId.startsWith('#')) {
      const section = document.querySelector(targetId);
      if (section) {
        sections.push({ el: section, link: link });
      }
    }
  });

  if ('IntersectionObserver' in window && sections.length > 0) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          navLinks.forEach(l => l.classList.remove('active'));
          const current = sections.find(s => s.el === entry.target);
          if (current) {
            current.link.classList.add('active');
            // Safely center active link in mobile subnav strip without hijacking main window scroll
            const linksContainer = document.querySelector('.service-subnav-links');
            if (linksContainer && window.innerWidth < 992) {
              const linkLeft = current.link.offsetLeft;
              const linkWidth = current.link.offsetWidth;
              const containerWidth = linksContainer.offsetWidth;
              linksContainer.scrollTo({
                left: linkLeft - (containerWidth / 2) + (linkWidth / 2),
                behavior: 'smooth'
              });
            }
          }
        }
      });
    }, {
      rootMargin: '-15% 0px -70% 0px',
      threshold: 0
    });

    sections.forEach(s => observer.observe(s.el));
  }
});
</script>

<?php
require_once __DIR__ . '/../includes/footer.php';
?>

