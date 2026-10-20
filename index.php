<?php
$pageTitle = 'Coaching 360 Growth Lab USA — Grow Your Coaching Business. Reach More Clients. Scale Smarter.';
$pageDescription = 'Coaching 360 Growth Lab helps coaches across the United States build stronger brands, generate qualified leads, automate client acquisition, and create scalable growth systems.';
$basePath = '';

require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     1. HERO SECTION: Modern Visual Agency Composite & Acquisition Pipeline (Awwwards Grade)
     ========================================================================== -->
<section class="hero position-relative overflow-hidden pt-3 pb-5 section-ambient-glow bg-dot-matrix">
  <div class="container pb-lg-4">
    <div class="row align-items-center g-4 g-lg-5">
      <!-- Left Content Column -->
      <div class="col-lg-6">
        <div class="hero-kicker mb-3 d-inline-flex flex-wrap align-items-center gap-2">
          <span class="badge bg-primary px-3 py-2 rounded-pill fw-bold">
            <i class="bi bi-rocket-takeoff-fill me-1"></i> USA Coaching Growth Platform
          </span>
          <span class="text-muted small fw-semibold">Turn Expertise Into a Scalable Practice</span>
        </div>

        <h1 class="display-4 fw-extrabold text-dark letter-spacing-tight mb-3">
          Grow Your Coaching Business. <span class="text-gradient">Reach More Clients.</span> Scale Smarter.
        </h1>

        <p class="lead text-secondary mt-3 mb-4 fs-5" style="line-height: 1.7;">
          Coaching 360 Growth Lab is the premier commercial growth agency for coaches across the United States. We engineer high-converting sales funnels, dominate Google Local SEO, and automate client acquisition so you never have to chase clients again.
        </p>

        <!-- Primary & Secondary CTAs -->
        <div class="hero-actions d-flex flex-wrap align-items-center gap-3">
          <a class="btn btn-primary btn-lg rounded-pill px-4 py-3 fw-bold shadow-brand" href="#consultation">
            <span>Get Your Free Growth Consultation</span>
            <i class="bi bi-arrow-right ms-2"></i>
          </a>
          <a class="btn btn-outline-dark btn-lg rounded-pill px-4 py-3 fw-bold" href="solutions.php">
            <i class="bi bi-compass-fill text-primary me-2"></i>Explore Growth Solutions
          </a>
        </div>

        <!-- Social Proof Bar -->
        <div class="d-flex flex-wrap align-items-center gap-3 mt-4 pt-3 border-top">
          <div class="d-flex text-warning fs-5">
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
            <i class="bi bi-star-fill"></i>
          </div>
          <span class="text-dark small fw-bold">
            4.95/5 Rating &bull; Trusted by 1,200+ Coaches Across the United States
          </span>
          <div class="w-100 d-flex flex-wrap gap-3 mt-1">
            <span class="small text-muted"><i class="bi bi-shield-check text-success me-1"></i> 100% US-Based Team</span>
            <span class="small text-muted"><i class="bi bi-check-circle-fill text-primary me-1"></i> GoHighLevel Certified</span>
            <span class="small text-muted"><i class="bi bi-lock-fill text-secondary me-1"></i> Non-Disclosure Protected</span>
          </div>
        </div>
      </div>

      <!-- Right Visual Column: High-End Agency Composite & Integrated Pipeline -->
      <div class="col-lg-6">
        <div class="hero-visual-composite">
          <!-- Main Photography Frame with Floating Glass Badges -->
          <div class="hero-composite-frame position-relative">
            <img 
              src="<?= $basePath ?>assets/images/coaching-hero.jpg" 
              alt="Executive Coaching Strategy Session with High-Ticket Clients" 
              class="img-fluid"
              loading="eager"
              fetchpriority="high"
              decoding="async"
            >
            <div class="hero-composite-overlay"></div>

            <!-- Floating Glass KPI Badge 1: Leads Growth -->
            <div class="hero-kpi-chip kpi-chip-leads">
              <div class="kpi-chip-icon icon-green">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <div>
                <div class="kpi-chip-val text-success">+184% Inbound Leads</div>
                <div class="kpi-chip-lbl">Pre-Qualified Prospects</div>
              </div>
            </div>

            <!-- Floating Glass KPI Badge 2: Retainer Closed -->
            <div class="hero-kpi-chip kpi-chip-revenue d-none d-sm-flex">
              <div class="kpi-chip-icon icon-purple">
                <i class="bi bi-trophy-fill"></i>
              </div>
              <div>
                <div class="kpi-chip-val text-dark">$18,500 Retainer</div>
                <div class="kpi-chip-lbl">High-Ticket Client Closed</div>
              </div>
            </div>

            <!-- Floating Glass KPI Badge 3: Discovery Calls -->
            <div class="hero-kpi-chip kpi-chip-calls">
              <div class="kpi-chip-icon icon-blue">
                <i class="bi bi-calendar-check-fill"></i>
              </div>
              <div>
                <div class="kpi-chip-val text-primary">32 Booked Calls</div>
                <div class="kpi-chip-lbl">Auto-Synced via GHL CRM</div>
              </div>
            </div>
          </div>

          <!-- Integrated Horizontal 6-Stage Client Scale Pipeline Strip -->
          <div class="hero-pipeline-strip">
            <div class="pipeline-strip-header">
              <div class="pipeline-strip-title">
                <i class="bi bi-cpu-fill text-primary"></i>
                <span>The 360° Client Acquisition Engine</span>
              </div>
              <div class="d-flex align-items-center gap-2">
                <span class="status-pulse-dot"></span>
                <span class="badge bg-success-subtle text-success rounded-pill px-2 py-1 fw-bold" style="font-size: 0.7rem;">Live Pipeline</span>
              </div>
            </div>

            <!-- 6 Flow Stages -->
            <div class="pipeline-strip-flow">
              <div class="pipeline-stage-item">
                <span class="stage-step-num">STAGE 01</span>
                <strong class="stage-step-title">Coach</strong>
                <span class="stage-step-sub">Offer & Niche</span>
              </div>
              <div class="pipeline-stage-item">
                <span class="stage-step-num">STAGE 02</span>
                <strong class="stage-step-title">Marketing</strong>
                <span class="stage-step-sub">SEO & Ads</span>
              </div>
              <div class="pipeline-stage-item stage-active">
                <span class="stage-step-num">STAGE 03</span>
                <strong class="stage-step-title text-primary">Leads</strong>
                <span class="stage-step-sub">Vetted Inbound</span>
              </div>
              <div class="pipeline-stage-item">
                <span class="stage-step-num">STAGE 04</span>
                <strong class="stage-step-title">Calls</strong>
                <span class="stage-step-sub">Auto-Booked</span>
              </div>
              <div class="pipeline-stage-item">
                <span class="stage-step-num">STAGE 05</span>
                <strong class="stage-step-title">Clients</strong>
                <span class="stage-step-sub">High-Ticket</span>
              </div>
              <div class="pipeline-stage-item stage-finish">
                <span class="stage-step-num">OUTCOME</span>
                <strong class="stage-step-title">Scale</strong>
                <span class="stage-step-sub">Predictable</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     2. TRUST PILLARS SECTION: Balanced 4x2 Clean Value Grid
     ========================================================================== -->
<section class="py-5 bg-white border-top border-bottom">
  <div class="container">
    <div class="text-center max-w-700 mx-auto mb-4">
      <span class="service-pill-tag mb-2">Built for Coaches &bull; Designed for Scale</span>
      <h2 class="h3 fw-bold text-dark mb-1">The 8 Pillars of Coaching Business Growth</h2>
      <p class="text-muted small mb-0">Our integrated platform powers every commercial dimension of your coaching enterprise</p>
    </div>

    <!-- Balanced 4x2 Grid (2-Cols Mobile, 4-Cols Desktop) -->
    <div class="row row-cols-2 row-cols-lg-4 g-2 g-md-3">
      <div class="col">
        <div class="trust-pillar-card">
          <div class="trust-icon-wrap"><i class="bi bi-compass"></i></div>
          <h5 class="trust-pillar-title">Offer Strategy</h5>
          <p class="trust-pillar-sub">High-ticket offer positioning and packaging for C-suite and executive clients.</p>
        </div>
      </div>
      <div class="col">
        <div class="trust-pillar-card">
          <div class="trust-icon-wrap"><i class="bi bi-megaphone"></i></div>
          <h5 class="trust-pillar-title">Multi-Channel Ads</h5>
          <p class="trust-pillar-sub">High-ROI targeted campaigns across Google Search, Meta video, and LinkedIn.</p>
        </div>
      </div>
      <div class="col">
        <div class="trust-pillar-card">
          <div class="trust-icon-wrap"><i class="bi bi-graph-up-arrow"></i></div>
          <h5 class="trust-pillar-title">Lead Generation</h5>
          <p class="trust-pillar-sub">Predictable inflow of pre-qualified leads filtered through custom application funnels.</p>
        </div>
      </div>
      <div class="col">
        <div class="trust-pillar-card">
          <div class="trust-icon-wrap"><i class="bi bi-gear-wide-connected"></i></div>
          <h5 class="trust-pillar-title">GoHighLevel CRM</h5>
          <p class="trust-pillar-sub">Complete turnkey GHL setup, automated pipelines, 2-way SMS, and calendar sync.</p>
        </div>
      </div>
      <div class="col">
        <div class="trust-pillar-card">
          <div class="trust-icon-wrap"><i class="bi bi-robot"></i></div>
          <h5 class="trust-pillar-title">AI Automation</h5>
          <p class="trust-pillar-sub">24/7 AI lead nurturing, instant speed-to-lead response, and zero no-shows.</p>
        </div>
      </div>
      <div class="col">
        <div class="trust-pillar-card">
          <div class="trust-icon-wrap"><i class="bi bi-search"></i></div>
          <h5 class="trust-pillar-title">Google Local SEO</h5>
          <p class="trust-pillar-sub">Dominate the Google 3-Pack and rank #1 when clients search for coaching in your city.</p>
        </div>
      </div>
      <div class="col">
        <div class="trust-pillar-card">
          <div class="trust-icon-wrap"><i class="bi bi-star"></i></div>
          <h5 class="trust-pillar-title">Reputation Systems</h5>
          <p class="trust-pillar-sub">Automated review generation to build undeniable social proof and 5-star authority.</p>
        </div>
      </div>
      <div class="col">
        <div class="trust-pillar-card">
          <div class="trust-icon-wrap"><i class="bi bi-award"></i></div>
          <h5 class="trust-pillar-title">Scalable Practice</h5>
          <p class="trust-pillar-sub">Scale your revenue past $25,000–$50,000/mo without trading more hours for dollars.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     3. HIGH-IMPACT ANIMATED STAT BAND: Real Track Record & Authority
     ========================================================================== -->
<section class="py-5 bg-white">
  <div class="container">
    <div class="stat-band">
      <div class="stat-band-header">
        <div class="stat-band-eyebrow">
          <span class="live-pulse-dot"></span>
          <span>Verified National Track Record</span>
        </div>
        <h2 class="stat-band-heading">Proven Commercial Impact for US Coaches</h2>
        <p class="stat-band-sub">
          We don't measure success by vanity metrics. We measure our impact by revenue accelerated, pipeline value created, and hours saved.
        </p>
      </div>

      <div class="row g-3 g-md-4">
        <div class="col-6 col-lg-3">
          <div class="stat-pod" style="--pod-glow: rgba(56, 189, 248, 0.35);">
            <div class="stat-icon-wrap">
              <div class="stat-icon" style="--icon-gradient: linear-gradient(135deg, #38bdf8, #0284c7); --icon-glow: rgba(56, 189, 248, 0.5);">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
            </div>
            <div class="stat-num" data-count="350" data-suffix="k+">350k+</div>
            <div class="stat-label" style="color: #cbd5e1; font-weight: 600; font-size: 0.88rem;">Qualified Leads Generated</div>
          </div>
        </div>

        <div class="col-6 col-lg-3">
          <div class="stat-pod" style="--pod-glow: rgba(16, 185, 129, 0.35);">
            <div class="stat-icon-wrap">
              <div class="stat-icon" style="--icon-gradient: linear-gradient(135deg, #34d399, #059669); --icon-glow: rgba(16, 185, 129, 0.5);">
                <i class="bi bi-currency-dollar"></i>
              </div>
            </div>
            <div class="stat-num" data-count="48" data-prefix="$" data-suffix="M+">$48M+</div>
            <div class="stat-label" style="color: #cbd5e1; font-weight: 600; font-size: 0.88rem;">Coaching Pipeline Created</div>
          </div>
        </div>

        <div class="col-6 col-lg-3">
          <div class="stat-pod" style="--pod-glow: rgba(168, 85, 247, 0.35);">
            <div class="stat-icon-wrap">
              <div class="stat-icon" style="--icon-gradient: linear-gradient(135deg, #c084fc, #7e22ce); --icon-glow: rgba(168, 85, 247, 0.5);">
                <i class="bi bi-gear-wide-connected"></i>
              </div>
            </div>
            <div class="stat-num" data-count="150" data-suffix="+">150+</div>
            <div class="stat-label" style="color: #cbd5e1; font-weight: 600; font-size: 0.88rem;">Turnkey GHL Stacks Built</div>
          </div>
        </div>

        <div class="col-6 col-lg-3">
          <div class="stat-pod" style="--pod-glow: rgba(251, 191, 36, 0.35);">
            <div class="stat-icon-wrap">
              <div class="stat-icon" style="--icon-gradient: linear-gradient(135deg, #fbbf24, #d97706); --icon-glow: rgba(251, 191, 36, 0.5);">
                <i class="bi bi-trophy-fill"></i>
              </div>
            </div>
            <div class="stat-num" data-count="4.8" data-suffix="x">4.8x</div>
            <div class="stat-label" style="color: #cbd5e1; font-weight: 600; font-size: 0.88rem;">Average Client Return on Ad Spend</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     4. WHO WE HELP: Growth Solutions for Every Type of Coach (12 Niches)
     ========================================================================== -->
<section class="py-5 bg-light">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Specialized Niche Expertise</span>
      <h2 class="display-6 fw-bold text-dark">Growth Solutions for Every Type of Coach</h2>
      <p class="text-secondary lead fs-6">
        Coaching isn’t one-size-fits-all. We engineer customized client acquisition funnels calibrated to your exact coaching discipline and target demographic.
      </p>
    </div>

    <!-- 12 Top Coaching Sectors Grid -->
    <div class="row g-3 g-md-4">
      <?php 
      $sampleNiches = [
        ['name' => 'Business Coaches', 'slug' => 'business-coaches', 'icon' => 'bi-briefcase-fill', 'desc' => 'Fill your calendar with founders and CEOs needing strategic B2B scaling.'],
        ['name' => 'Executive Coaches', 'slug' => 'executive-coaches', 'icon' => 'bi-award-fill', 'desc' => 'High-stakes C-Suite advisory and leadership influence positioning.'],
        ['name' => 'Life Coaches', 'slug' => 'life-coaches', 'icon' => 'bi-heart-pulse-fill', 'desc' => 'High-converting social funnels for mindset, purpose, and life transition.'],
        ['name' => 'Career Coaches', 'slug' => 'career-coaches', 'icon' => 'bi-ladder', 'desc' => 'Attract ambitious professionals targeting 6-figure and 7-figure promotions.'],
        ['name' => 'Health & Wellness', 'slug' => 'health-coaches', 'icon' => 'bi-activity', 'desc' => 'Meta video funnels for holistic wellness and weight transformation.'],
        ['name' => 'Fitness Coaches', 'slug' => 'fitness-coaches', 'icon' => 'bi-lightning-charge-fill', 'desc' => 'High-ticket coaching programs for busy executives and athletes.'],
        ['name' => 'Relationship Coaches', 'slug' => 'relationship-coaches', 'icon' => 'bi-people-fill', 'desc' => 'Attract committed couples and singles seeking transformative connection.'],
        ['name' => 'Financial Coaches', 'slug' => 'financial-coaches', 'icon' => 'bi-currency-dollar', 'desc' => 'Local SEO and Google Search dominance for wealth and cash flow coaching.'],
        ['name' => 'Leadership Coaches', 'slug' => 'leadership-coaches', 'icon' => 'bi-shield-check', 'desc' => 'Corporate training and executive communication advisory funnels.'],
        ['name' => 'Education & Academic', 'slug' => 'academic-coaches', 'icon' => 'bi-mortarboard-fill', 'desc' => 'Capture parents seeking Ivy League college admissions and study mastery.'],
        ['name' => 'Sales Coaches', 'slug' => 'sales-coaches', 'icon' => 'bi-graph-up-arrow', 'desc' => 'Outbound pipeline systems for commercial deal closers and sales reps.'],
        ['name' => 'Mindset & EQ Coaches', 'slug' => 'mindset-coaches', 'icon' => 'bi-patch-check-fill', 'desc' => 'Cognitive rewiring and peak performance client attraction engines.']
      ];
      foreach ($sampleNiches as $niche): ?>
        <div class="col-md-6 col-lg-3">
          <a href="industry.php?slug=<?= htmlspecialchars($niche['slug']) ?>" class="text-decoration-none">
            <div class="niche-preview-card">
              <div class="niche-icon-wrap">
                <i class="bi <?= htmlspecialchars($niche['icon']) ?>"></i>
              </div>
              <h5 class="niche-preview-title"><?= htmlspecialchars($niche['name']) ?></h5>
              <p class="niche-preview-desc"><?= htmlspecialchars($niche['desc']) ?></p>
              <span class="niche-preview-action">
                View Growth Strategy <i class="bi bi-arrow-right"></i>
              </span>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center mt-5">
      <a href="industries.php" class="btn btn-outline-primary btn-lg rounded-pill px-5 fw-bold">
        <span>View All 60+ Coaching Industries We Serve</span>
        <i class="bi bi-arrow-right ms-2"></i>
      </a>
    </div>
  </div>
</section>

<!-- ==========================================================================
     5. PROBLEM SECTION: Great Coaches Shouldn't Struggle to Find Clients
     ========================================================================== -->
<section class="py-5 bg-white border-top border-bottom">
  <div class="container py-lg-4">
    <div class="row align-items-center g-4 g-lg-5">
      <!-- Left Column: Problem Manifesto -->
      <div class="col-lg-5">
        <span class="service-pill-tag mb-2" style="background: rgba(220, 38, 38, 0.08); color: #dc2626; border-color: rgba(220, 38, 38, 0.2);">
          The Core Challenge
        </span>
        <h2 class="display-6 fw-bold text-dark mb-3">
          Great Coaches Shouldn't Struggle to Find Clients
        </h2>
        <p class="text-secondary mb-4 fs-6" style="line-height: 1.7;">
          You spent years mastering your craft, getting certified, and delivering life-changing results for your clients. But running a coaching practice requires an entirely separate skill: <strong>systematic, predictable client acquisition.</strong>
        </p>

        <div class="p-4 bg-light rounded-4 border mb-4">
          <div class="d-flex align-items-center gap-2 mb-2">
            <i class="bi bi-quote fs-3 text-primary"></i>
            <span class="fw-bold text-dark">The Harsh Reality:</span>
          </div>
          <p class="small text-muted mb-0" style="line-height: 1.6;">
            Most coaches spend 70% of their working hours stressed about where their next client is coming from—relying on word-of-mouth or sending cold DMs. <strong>We build the machine so you can focus 100% on transformational coaching.</strong>
          </p>
        </div>

        <a href="#consultation" class="btn btn-primary rounded-pill px-4 py-2 fw-bold shadow-xs">
          <span>Claim Your Free Marketing Audit</span>
          <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>

      <!-- Right Column: 6 Clear Challenge Cards -->
      <div class="col-lg-7">
        <div class="row g-3">
          <div class="col-md-6">
            <div class="problem-card">
              <div class="problem-icon-wrap"><i class="bi bi-exclamation-octagon-fill"></i></div>
              <h6>Inconsistent Inbound Leads</h6>
              <p>Unpredictable "feast or famine" cycles leaving your discovery calendar empty for weeks at a time.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="problem-card">
              <div class="problem-icon-wrap"><i class="bi bi-eye-slash-fill"></i></div>
              <h6>Weak Online Authority</h6>
              <p>Outdated websites that fail to communicate high-ticket value or build instant trust with prospects.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="problem-card">
              <div class="problem-icon-wrap"><i class="bi bi-search"></i></div>
              <h6>Invisible on Google</h6>
              <p>Buried on page 4 of Google while lower-quality competitors capture all local high-intent coaching inquiries.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="problem-card">
              <div class="problem-icon-wrap"><i class="bi bi-arrow-repeat"></i></div>
              <h6>Manual Follow-Up Burnout</h6>
              <p>Wasting 15+ hours weekly chasing leads by hand, typing manual SMS, and dealing with discovery no-shows.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="problem-card">
              <div class="problem-icon-wrap"><i class="bi bi-credit-card-2-front"></i></div>
              <h6>Fragmented Software Stack</h6>
              <p>Paying $500+/mo for 7 disconnected software subscriptions that don't sync or talk to each other.</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="problem-card">
              <div class="problem-icon-wrap"><i class="bi bi-cash-stack"></i></div>
              <h6>Wasted Ad Spend</h6>
              <p>Burning ad budgets on boosted social posts without a qualified direct-response conversion funnel.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     6. 4-STEP PROCESS: How We Scale Your Coaching Practice
     ========================================================================== -->
<section class="py-5 bg-light border-bottom">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Our Proprietary Operating System</span>
      <h2 class="display-6 fw-bold text-dark">How We Scale Your Coaching Practice</h2>
      <p class="text-secondary lead fs-6">
        From offer positioning to automated client delivery, our 4-step framework takes the guesswork out of coaching business growth.
      </p>
    </div>

    <div class="row g-4">
      <!-- Step 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="process-step-card">
          <span class="process-num-badge">STEP 01</span>
          <h5 class="process-step-title">Diagnostic & Offer Blueprint</h5>
          <p class="process-step-desc">
            We audit your current revenue bottlenecks, niche positioning, and pricing model to construct a compelling high-ticket offer.
          </p>
          <ul class="process-step-highlights">
            <li><i class="bi bi-check-circle-fill"></i> Ideal Client Profile (ICP)</li>
            <li><i class="bi bi-check-circle-fill"></i> Competitive Market Audit</li>
            <li><i class="bi bi-check-circle-fill"></i> High-Ticket Value Proposition</li>
          </ul>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="process-step-card">
          <span class="process-num-badge">STEP 02</span>
          <h5 class="process-step-title">Funnel & Authority Build</h5>
          <p class="process-step-desc">
            We engineer high-converting landing pages, video sales letters, and client qualification questionnaires that filter tire-kickers.
          </p>
          <ul class="process-step-highlights">
            <li><i class="bi bi-check-circle-fill"></i> Direct-Response Copywriting</li>
            <li><i class="bi bi-check-circle-fill"></i> Custom Brand & UI Design</li>
            <li><i class="bi bi-check-circle-fill"></i> Vetting & Application Forms</li>
          </ul>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="process-step-card">
          <span class="process-num-badge">STEP 03</span>
          <h5 class="process-step-title">Turnkey CRM & Automation</h5>
          <p class="process-step-desc">
            Full GoHighLevel infrastructure buildout: automated 2-way SMS, email nurture sequences, and seamless calendar integrations.
          </p>
          <ul class="process-step-highlights">
            <li><i class="bi bi-check-circle-fill"></i> Speed-to-Lead SMS & Email</li>
            <li><i class="bi bi-check-circle-fill"></i> Automated Calendar Sync</li>
            <li><i class="bi bi-check-circle-fill"></i> 5-Star Review Automations</li>
          </ul>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="process-step-card">
          <span class="process-num-badge">STEP 04</span>
          <h5 class="process-step-title">Traffic Launch & Scale</h5>
          <p class="process-step-desc">
            We activate Google Local SEO, high-intent Google search ads, and Meta video funnels to reliably fill your discovery calendar.
          </p>
          <ul class="process-step-highlights">
            <li><i class="bi bi-check-circle-fill"></i> Multi-Channel Ad Campaigns</li>
            <li><i class="bi bi-check-circle-fill"></i> Google Local 3-Pack Dominance</li>
            <li><i class="bi bi-check-circle-fill"></i> Continuous ROI Optimization</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Timeline Callout Banner -->
    <div class="p-4 bg-white rounded-4 border mt-5 d-flex flex-wrap align-items-center justify-content-between gap-3 shadow-xs">
      <div class="d-flex align-items-center gap-3">
        <div class="fs-2 text-primary"><i class="bi bi-lightning-charge-fill"></i></div>
        <div>
          <h6 class="fw-bold text-dark mb-0">Average Time to First Booked Inbound Call: 10–14 Days</h6>
          <small class="text-muted">Our dedicated US team handles the complete setup so you stay focused on your clients.</small>
        </div>
      </div>
      <a href="#consultation" class="btn btn-primary rounded-pill px-4 py-2 fw-bold shadow-xs">
        <span>Schedule Strategy Session</span>
        <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>
  </div>
</section>

<!-- ==========================================================================
     7. SERVICES SECTION: Everything Your Coaching Business Needs to Grow (Award-Winning Interactive Slider)
     ========================================================================== -->
<section id="services" class="services-slider-section py-5 position-relative overflow-hidden">
  <!-- Subtle ambient decorative glow elements -->
  <div class="services-slider-glow services-slider-glow-1" aria-hidden="true"></div>
  <div class="services-slider-glow services-slider-glow-2" aria-hidden="true"></div>

  <div class="container py-lg-4 position-relative" style="z-index: 2;">
    <!-- Section Header Deck -->
    <div class="row align-items-end justify-content-between mb-4 g-4">
      <div class="col-lg-7">
        <div class="d-inline-flex align-items-center gap-2 mb-3">
          <span class="service-pill-tag">
            <span class="award-pulse-dot"></span> Complete Commercial Infrastructure
          </span>
          <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-2.5 py-1 fw-bold fs-xs text-uppercase tracking-wider">
            12 Growth Engines
          </span>
        </div>
        <h2 class="display-6 fw-extrabold text-dark letter-spacing-tight mb-2">
          Everything Your Coaching Business Needs to <span class="text-gradient">Grow</span>
        </h2>
        <p class="text-secondary mb-0 fs-6 max-w-650" style="line-height: 1.6;">
          We provide the complete technical, creative, and strategic growth stack engineered exclusively for US coaching practices.
        </p>
      </div>

      <!-- Controls Deck (Counter, Arrows, Autoplay, Link) -->
      <div class="col-lg-5 text-lg-end">
        <div class="d-flex align-items-center justify-content-between justify-content-lg-end gap-2 gap-sm-3 mt-3 mt-lg-0">
          <!-- Slide Counter -->
          <div class="service-slider-counter d-flex align-items-center gap-1 font-manrope">
            <span class="service-counter-current text-primary fw-extrabold fs-5" id="servicesCounterCurrent">01</span>
            <span class="service-counter-divider text-muted opacity-50 fs-6">/</span>
            <span class="service-counter-total text-muted fw-bold fs-6" id="servicesCounterTotal">12</span>
          </div>

          <!-- Slider Action Controls -->
          <div class="service-slider-nav-btns d-flex align-items-center gap-2">
            <button type="button" class="btn-slider-nav btn-slider-prev" id="servicesSliderPrev" aria-label="Previous service slide">
              <i class="bi bi-arrow-left"></i>
            </button>
            <button type="button" class="btn-slider-nav btn-slider-next" id="servicesSliderNext" aria-label="Next service slide">
              <i class="bi bi-arrow-right"></i>
            </button>
            <button type="button" class="btn-slider-nav btn-slider-toggle" id="servicesSliderToggle" aria-label="Pause slideshow" title="Pause / Play Slideshow">
              <i class="bi bi-pause-fill"></i>
            </button>
          </div>

          <!-- Direct Link to All Services -->
          <a href="services.php" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-bold d-none d-md-inline-flex align-items-center gap-2">
            <span>Explore All 12</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Category Filter Tabs (Award-Winning Interactive Navigation) -->
    <div class="service-filter-bar mb-4 pb-2 d-flex align-items-center gap-2 overflow-x-auto scrollbar-none">
      <button type="button" class="service-filter-pill active" data-filter="all">
        <span class="pill-dot"></span> All 12 Engines <span class="filter-count">12</span>
      </button>
      <button type="button" class="service-filter-pill" data-filter="acquisition">
        <i class="bi bi-funnel-fill me-1 text-primary"></i> Client Acquisition <span class="filter-count">3</span>
      </button>
      <button type="button" class="service-filter-pill" data-filter="tech">
        <i class="bi bi-cpu-fill me-1 text-primary"></i> Automation & AI <span class="filter-count">4</span>
      </button>
      <button type="button" class="service-filter-pill" data-filter="authority">
        <i class="bi bi-globe-americas me-1 text-primary"></i> Authority & SEO <span class="filter-count">4</span>
      </button>
      <button type="button" class="service-filter-pill" data-filter="strategy">
        <i class="bi bi-rocket-takeoff-fill me-1 text-primary"></i> Strategic Scaling <span class="filter-count">1</span>
      </button>
    </div>

    <!-- Swiper Slider Container -->
    <div class="swiper services-swiper">
      <div class="swiper-wrapper">
        <?php 
          $categoryMap = [
            'lead-generation' => 'acquisition',
            'paid-advertising' => 'acquisition',
            'social-media-marketing' => 'acquisition',
            'crm-automation' => 'tech',
            'ai-automation' => 'tech',
            'gohighlevel' => 'tech',
            'n8n-automation' => 'tech',
            'website-development' => 'authority',
            'seo-for-coaches' => 'authority',
            'local-seo' => 'authority',
            'reputation-management' => 'authority',
            'coaching-business-growth' => 'strategy'
          ];

          $categoryLabels = [
            'acquisition' => 'Client Acquisition',
            'tech' => 'Automation & AI',
            'authority' => 'Authority & SEO',
            'strategy' => 'Strategic Growth'
          ];

          foreach ($services as $index => $svc): 
            $catSlug = $categoryMap[$svc['slug']] ?? 'acquisition';
            $catName = $categoryLabels[$catSlug] ?? 'Core Service';
            $slideNum = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
        ?>
          <div class="swiper-slide service-slide-item" data-category="<?= htmlspecialchars($catSlug) ?>" data-slide-index="<?= $index ?>">
            <div class="service-hub-card h-100">
              <div class="service-card-media">
                <img src="<?= $basePath ?><?= htmlspecialchars($svc['image']) ?>" alt="<?= htmlspecialchars($svc['title']) ?>" loading="eager" decoding="async">
                <div class="service-media-overlay"></div>
                <span class="service-card-badge">
                  <span class="badge-dot"></span> <?= htmlspecialchars($svc['badge']) ?>
                </span>
                <span class="service-card-number">#<?= $slideNum ?></span>
                <div class="service-card-icon-pill">
                  <i class="bi <?= htmlspecialchars($svc['icon']) ?>"></i>
                </div>
              </div>

              <div class="service-card-body">
                <div class="service-category-tag mb-1 text-uppercase fw-bold fs-xs text-primary letter-spacing-wider">
                  <?= htmlspecialchars($catName) ?>
                </div>

                <h5 class="fw-bold text-dark mb-2">
                  <a href="services/<?= htmlspecialchars($svc['slug']) ?>.php" class="service-title-link">
                    <span><?= htmlspecialchars($svc['short_title']) ?></span>
                    <i class="bi bi-arrow-up-right fs-6 text-primary"></i>
                  </a>
                </h5>

                <p class="text-secondary small mb-3 service-tagline">
                  <?= htmlspecialchars($svc['tagline']) ?>
                </p>

                <ul class="service-feature-checklist mb-4">
                  <?php foreach (array_slice($svc['key_features'], 0, 3) as $feat): ?>
                    <li><?= htmlspecialchars($feat) ?></li>
                  <?php endforeach; ?>
                </ul>

                <div class="service-stat-banner mb-3">
                  <?php 
                    $statKeys = array_keys($svc['stats']);
                    $firstKey = $statKeys[0] ?? '4.2x';
                    $firstVal = $svc['stats'][$firstKey] ?? 'ROI';
                  ?>
                  <div>
                    <div class="service-stat-number font-manrope"><?= htmlspecialchars($firstKey) ?></div>
                    <div class="service-stat-label"><?= htmlspecialchars($firstVal) ?></div>
                  </div>
                  <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-2.5 py-1 small fw-semibold">
                    Target Outcome
                  </span>
                </div>

                <div class="d-flex flex-column gap-2 mt-auto">
                  <a href="services/<?= htmlspecialchars($svc['slug']) ?>.php" class="btn btn-primary rounded-pill py-2.5 fw-bold shadow-xs service-cta-btn">
                    <span><?= htmlspecialchars($svc['cta_text']) ?></span>
                    <i class="bi bi-arrow-right ms-1 cta-arrow"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Slider Dynamic Progress Bar & Interactive Footer Track -->
    <div class="service-slider-footer mt-4 pt-2">
      <!-- Glow Progress Track -->
      <div class="service-slider-progress-track mb-3" aria-hidden="true">
        <div class="service-slider-progress-fill" id="servicesProgressFill"></div>
      </div>

      <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 text-secondary small">
        <div class="d-flex align-items-center gap-2 slider-drag-hint">
          <i class="bi bi-arrows-expand text-primary fs-6" style="transform: rotate(45deg);"></i>
          <span>Drag, swipe, or use keyboard arrow keys to browse 12 engines</span>
        </div>

        <div class="swiper-pagination services-swiper-pagination"></div>

        <div class="d-md-none w-100 mt-2">
          <a href="services.php" class="btn btn-outline-primary rounded-pill w-100 py-2.5 fw-bold text-center d-flex align-items-center justify-content-center gap-2">
            <span>Explore All 12 Services</span>
            <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     8. FEATURED COACHING GROWTH PROGRAMS & ACCELERATORS (Classes for Coaches)
     ========================================================================== -->
<section class="py-5 bg-light border-top border-bottom">
  <div class="container py-lg-4">
    <div class="row align-items-end justify-content-between mb-5 g-3">
      <div class="col-lg-7">
        <span class="service-pill-tag mb-2">Cohort Accelerators & Masterclasses</span>
        <h2 class="display-6 fw-bold text-dark mb-2">Featured Practice Scaling Programs</h2>
        <p class="text-secondary mb-0 fs-6">
          Prefer hands-on training for your team? Explore our structured cohorts and intensive masterclasses designed for active coaches.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <a href="courses.php" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-bold">
          View All Programs <i class="bi bi-arrow-right ms-1"></i>
        </a>
      </div>
    </div>

    <div class="row g-4">
      <?php foreach (array_slice($growth_programs, 0, 3) as $prog): ?>
        <div class="col-md-6 col-lg-4">
          <div class="service-hub-card h-100">
            <div class="service-card-media">
              <img src="<?= $basePath ?><?= htmlspecialchars($prog['image']) ?>" alt="<?= htmlspecialchars($prog['title']) ?>" loading="eager" decoding="async">
              <span class="service-card-badge"><?= htmlspecialchars($prog['badge']) ?></span>
              <div class="service-card-icon-pill">
                <i class="bi <?= htmlspecialchars($prog['icon']) ?>"></i>
              </div>
            </div>
            <div class="service-card-body">
              <div class="d-flex align-items-center gap-2 mb-2 text-muted small">
                <span><i class="bi bi-clock text-primary me-1"></i><?= htmlspecialchars($prog['duration']) ?></span>
                <span>&bull;</span>
                <span><i class="bi bi-laptop text-primary me-1"></i><?= htmlspecialchars($prog['format']) ?></span>
              </div>
              <h5 class="fw-bold text-dark mb-2">
                <a href="course-detail.php?slug=<?= htmlspecialchars($prog['slug']) ?>" class="text-decoration-none text-dark hover-primary">
                  <?= htmlspecialchars($prog['title']) ?>
                </a>
              </h5>
              <p class="text-secondary small mb-3" style="line-height: 1.55;">
                <?= htmlspecialchars($prog['tagline']) ?>
              </p>
              <ul class="service-feature-checklist mb-4">
                <?php foreach (array_slice($prog['curriculum'], 0, 3) as $c): ?>
                  <li><?= htmlspecialchars($c) ?></li>
                <?php endforeach; ?>
              </ul>
              <div class="d-flex flex-column gap-2 mt-auto">
                <a href="course-detail.php?slug=<?= htmlspecialchars($prog['slug']) ?>" class="btn btn-primary rounded-pill py-2 fw-bold shadow-xs">
                  <span>View Syllabus & Cohorts</span>
                  <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     9. VERIFIED CASE STUDIES & COACH TRANSFORMATIONS
     ========================================================================== -->
<section class="py-5 bg-white border-bottom">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Real Transformations</span>
      <h2 class="display-6 fw-bold text-dark">Proven Results for American Coaches</h2>
      <p class="text-secondary lead fs-6">
        See how coaching practices in Chicago, San Diego, and Dallas scaled with Coaching 360 Growth Lab systems.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach (array_slice($case_studies, 0, 3) as $cs): ?>
        <div class="col-lg-4">
          <div class="p-4 bg-light rounded-4 border h-100 d-flex flex-column shadow-xs">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-1 fw-bold"><?= htmlspecialchars($cs['coach_type']) ?></span>
              <small class="text-muted fw-bold"><i class="bi bi-geo-alt me-1"></i><?= htmlspecialchars($cs['location']) ?></small>
            </div>
            <h5 class="fw-bold text-dark mb-2"><?= htmlspecialchars($cs['coach_name']) ?></h5>
            <p class="text-secondary small mb-3 fw-medium" style="line-height: 1.55;">
              "<?= htmlspecialchars($cs['headline']) ?>"
            </p>

            <!-- Metrics Box -->
            <div class="p-3 bg-white rounded-3 border mb-4 mt-auto">
              <div class="row g-2">
                <?php foreach (array_slice($cs['metrics'], 0, 2) as $mLabel => $mVal): ?>
                  <div class="col-6">
                    <div class="small text-muted" style="font-size: 0.72rem;"><?= htmlspecialchars($mLabel) ?></div>
                    <div class="fw-bold text-primary font-manrope fs-6"><?= htmlspecialchars($mVal) ?></div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>

            <div>
              <a href="case-studies.php#<?= htmlspecialchars($cs['slug']) ?>" class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-bold">
                Read Full Case Study <i class="bi bi-arrow-right ms-1"></i>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     10. TOP US METRO MARKETS & REGIONAL COVERAGE
     ========================================================================== -->
<section class="py-5 bg-light border-bottom">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Nationwide Footprint</span>
      <h2 class="display-6 fw-bold text-dark">Serving Coaches Across All 50 States</h2>
      <p class="text-secondary lead fs-6">
        Whether you deliver corporate executive coaching in Manhattan or virtual life coaching from Austin, our geo-targeted systems dominate your market.
      </p>
    </div>

    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-6 g-3 text-center">
      <?php foreach (array_slice($top_locations, 0, 6) as $loc): ?>
        <div class="col">
          <a href="location.php?city=<?= htmlspecialchars($loc['slug']) ?>" class="text-decoration-none">
            <div class="p-3 bg-white rounded-4 border h-100 shadow-xs hover-primary transition">
              <div class="fs-4 text-primary mb-1"><i class="bi bi-geo-alt-fill"></i></div>
              <h6 class="fw-bold text-dark mb-0 small"><?= htmlspecialchars($loc['city']) ?></h6>
              <span class="badge bg-light text-muted border rounded-pill mt-2" style="font-size: 0.7rem;"><?= htmlspecialchars($loc['coaches_served']) ?> Coaches</span>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     11. FREQUENTLY ASKED QUESTIONS (FAQ) ACCORDION
     ========================================================================== -->
<section class="py-5 bg-white border-bottom">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Clarity & Confidence</span>
      <h2 class="display-6 fw-bold text-dark">Frequently Asked Questions</h2>
      <p class="text-secondary lead fs-6">
        Everything you need to know about our client acquisition systems, GoHighLevel setup, and growth partnership.
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-9">
        <div class="growth-faq accordion" id="growthFaqAccordion">
          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading1">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="true" aria-controls="faqCollapse1">
                How quickly will I start getting booked discovery calls on my calendar?
              </button>
            </h2>
            <div id="faqCollapse1" class="accordion-collapse collapse show" aria-labelledby="faqHeading1" data-bs-parent="#growthFaqAccordion">
              <div class="accordion-body">
                Our custom client acquisition funnels and GoHighLevel CRM infrastructure typically launch within 10 to 14 business days. Most coaching clients begin seeing qualified discovery appointments on their calendar within 48 to 72 hours of ad and funnel activation.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading2">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2">
                How do you ensure leads are qualified for high-ticket coaching?
              </button>
            </h2>
            <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#growthFaqAccordion">
              <div class="accordion-body">
                We never use generic contact forms. We implement mandatory multi-step application filters before anyone can schedule on your Zoom calendar. We screen for budget, revenue/income, urgency of problem, commitment level, and willingness to invest in premium coaching.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading3">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3">
                Do you set up GoHighLevel from scratch or work with my existing tools?
              </button>
            </h2>
            <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#growthFaqAccordion">
              <div class="accordion-body">
                Both. If you don't have GoHighLevel, we provide a turnkey, pre-configured sub-account complete with pipelines, email/SMS nurture sequences, calendar booking, and 5-star review collection. If you already have GHL, ActiveCampaign, or Calendly, we integrate and optimize your existing stack seamlessly.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading4">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4">
                Does this work for both B2B executive coaches and B2C life/health coaches?
              </button>
            </h2>
            <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#growthFaqAccordion">
              <div class="accordion-body">
                Yes. For B2B executive, leadership, sales, and business coaches, we deploy high-authority Google Search and LinkedIn outbound engines. For life, health, relationship, and mindset coaches, we leverage direct-response Meta/Instagram video funnels and Google Local SEO.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading5">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5">
                Are there long-term contracts or lock-in commitments?
              </button>
            </h2>
            <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#growthFaqAccordion">
              <div class="accordion-body">
                No. We believe in earning your business every single month through measurable pipeline performance. You own 100% of your website, funnels, CRM data, ad accounts, and client lists from day one.
              </div>
            </div>
          </div>

          <!-- FAQ 6 -->
          <div class="accordion-item">
            <h2 class="accordion-header" id="faqHeading6">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6">
                What is the difference between Done-For-You Services and Accelerators?
              </button>
            </h2>
            <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#growthFaqAccordion">
              <div class="accordion-body">
                Done-For-You Services are full-agency execution where our US team builds, launches, and runs your ads, funnels, and CRM for you. Accelerators are intensive cohort programs where we coach you and your team with step-by-step masterclasses, templates, and weekly live reviews.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     12. FREE GROWTH CONSULTATION & MARKETING AUDIT INTAKE
     ========================================================================== -->
<section id="consultation" class="py-5 bg-light">
  <div class="container py-lg-4">
    <div class="row align-items-center g-4 g-lg-5">
      <!-- Left Column: Strategy Invitation -->
      <div class="col-lg-5">
        <span class="service-pill-tag mb-2">No-Obligation Strategy Session</span>
        <h2 class="display-6 fw-bold text-dark mb-3">
          Get Your Free Growth Consultation & Marketing Audit
        </h2>
        <p class="text-secondary mb-4 fs-6" style="line-height: 1.7;">
          Let's review your current coaching pricing, website, Google rankings, and client pipeline. We'll identify your single biggest bottleneck and show you the exact system to fix it.
        </p>
        <div class="d-flex flex-column gap-3 mb-4">
          <div class="d-flex align-items-center gap-3">
            <i class="bi bi-check-circle-fill text-success fs-5 flex-shrink-0"></i>
            <span class="small fw-semibold text-dark">No high-pressure sales pitch — 100% actionable commercial strategy</span>
          </div>
          <div class="d-flex align-items-center gap-3">
            <i class="bi bi-check-circle-fill text-success fs-5 flex-shrink-0"></i>
            <span class="small fw-semibold text-dark">Customized growth blueprint calibrated to your specific coaching niche</span>
          </div>
          <div class="d-flex align-items-center gap-3">
            <i class="bi bi-check-circle-fill text-success fs-5 flex-shrink-0"></i>
            <span class="small fw-semibold text-dark">Strictly confidential under NDA with dedicated USA specialists</span>
          </div>
        </div>

        <div class="p-3 bg-white rounded-3 border d-inline-flex align-items-center gap-3 shadow-xs">
          <div class="fs-3 text-primary"><i class="bi bi-telephone-fill"></i></div>
          <div>
            <div class="small text-muted">Prefer to talk directly?</div>
            <a href="tel:8005553600" class="fw-bold text-dark text-decoration-none fs-6">(800) 555-3600</a>
          </div>
        </div>
      </div>

      <!-- Right Column: Elevated Diagnostic Form -->
      <div class="col-lg-7">
        <div class="service-booking-card">
          <h4 class="fw-bold text-dark mb-1">Request Your Free Consultation</h4>
          <p class="text-muted small mb-4">Fill out the brief diagnostic below and our senior growth team will contact you within 2 hours</p>

          <form class="secure-lead-form" method="POST" action="api/submit-lead.php">
            <input type="hidden" name="csrf_token" value="<?= get_csrf_token() ?>">
            <input type="hidden" name="source_page" value="Home Diagnostic Form">
            <!-- Anti-Bot Honeypot -->
            <div style="display:none !important;" aria-hidden="true">
              <input type="text" name="company_trap" tabindex="-1" autocomplete="off">
            </div>

            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label small fw-bold text-dark">Your Full Name *</label>
                <input type="text" name="full_name" class="form-control" placeholder="e.g. Sarah Jenkins" required maxlength="100">
              </div>
              <div class="col-md-6">
                <label class="form-label small fw-bold text-dark">Business Email *</label>
                <input type="email" name="email" class="form-control" placeholder="e.g. sarah@jenkinsadvisory.com" required maxlength="120">
              </div>
              <div class="col-md-6">
                <label class="form-label small fw-bold text-dark">Phone Number *</label>
                <input type="tel" name="phone" class="form-control" placeholder="+1 (555) 000-0000" required maxlength="30">
              </div>
              <div class="col-md-6">
                <label class="form-label small fw-bold text-dark">Coaching Niche / Specialty *</label>
                <input type="text" name="niche" class="form-control" placeholder="e.g. Executive, Life, Business, Health" required maxlength="100">
              </div>
              <div class="col-md-6">
                <label class="form-label small fw-bold text-dark">Current Monthly Revenue</label>
                <select name="revenue" class="form-select">
                  <option value="under-5k">Under $5k / mo</option>
                  <option value="5k-15k" selected>$5k – $15k / mo</option>
                  <option value="15k-30k">$15k – $30k / mo</option>
                  <option value="30k-plus">$30k+ / mo</option>
                </select>
              </div>
              <div class="col-md-6">
                <label class="form-label small fw-bold text-dark">Primary Growth Goal</label>
                <select name="goal" class="form-select">
                  <option value="leads" selected>Get More High-Ticket Leads</option>
                  <option value="website">New High-Converting Website</option>
                  <option value="automation">CRM & GoHighLevel Automation</option>
                  <option value="seo">Rank #1 on Google Local / SEO</option>
                  <option value="scaling">Scale to $25k+/mo Without Burnout</option>
                </select>
              </div>
              <div class="col-12">
                <label class="form-label small fw-bold text-dark">What is your biggest business bottleneck right now?</label>
                <textarea name="bottleneck" class="form-control" rows="3" placeholder="Briefly describe what is holding your coaching practice back from scaling..." maxlength="1500"></textarea>
              </div>
              <div class="col-12 pt-2">
                <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill py-3 fw-bold shadow-brand btn-submit-lead">
                  <span>Claim My Free Growth Consultation</span>
                  <i class="bi bi-arrow-right ms-2"></i>
                </button>
              </div>
            </div>
            <div class="form-error-feedback alert alert-danger d-none mt-3 py-2 px-3 small rounded-3" role="alert"></div>
          </form>

          <!-- Success Alert -->
          <div id="consultSuccess" class="alert alert-success d-none text-center p-4 rounded-4" role="alert">
            <div class="fs-1 text-success mb-2"><i class="bi bi-check-circle-fill"></i></div>
            <h4 class="fw-bold mb-1">Consultation Request Confirmed!</h4>
            <p class="mb-0 small text-secondary">
              Thank you! Our senior coaching growth team is reviewing your details. We will reach out within 2 hours with available strategy time slots.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
