<?php
require_once __DIR__ . '/includes/data.php';

$slug = clean_slug($_GET['slug'] ?? 'business-coaches', 'business-coaches');
$niche = getIndustryBySlug($slug, $industries);

if (!$niche) {
    // Default fallback
    $niche = [
        'slug' => 'business-coaches',
        'name' => 'Business Coaches',
        'category_key' => 'business-professional',
        'category_name' => 'Business & Professional Coaching',
        'category_icon' => 'bi-briefcase-fill',
        'tagline' => 'Scale B2B revenue and build automated client acquisition systems.'
    ];
}

$pageTitle = 'Growth & Client Acquisition for ' . $niche['name'] . ' | Coaching 360 Growth Lab USA';
$pageDescription = 'Discover how Coaching 360 Growth Lab helps ' . $niche['name'] . ' across the USA generate qualified high-ticket leads, dominate Google search, and automate client booking.';
$basePath = '';

// Find sister niches in the same category
$sisterNiches = [];
if (isset($niche['category_key']) && isset($industries[$niche['category_key']]['niches'])) {
    foreach ($industries[$niche['category_key']]['niches'] as $sNiche) {
        if ($sNiche['slug'] !== $niche['slug']) {
            $sisterNiches[] = $sNiche;
        }
    }
}

// Select a relevant case study for proof
$selectedCase = $case_studies[0]; // David Sterling
if ($niche['category_key'] === 'health-wellness') {
    $selectedCase = $case_studies[1]; // Elena Rostova
} elseif ($niche['category_key'] === 'financial' || $niche['category_key'] === 'relationship-family') {
    $selectedCase = $case_studies[2]; // Marcus Holloway
}

require_once __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     1. INDUSTRY HERO SECTION (Awwwards Grade)
     ========================================================================== -->
<section class="service-detail-hero section-ambient-glow position-relative overflow-hidden pt-4 pb-5 bg-white border-bottom">
  <div class="container position-relative" style="z-index: 2;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb small text-muted mb-0">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted"><i class="bi bi-house-door me-1"></i>Home</a></li>
        <li class="breadcrumb-item"><a href="industries.php" class="text-decoration-none text-muted">Coaching Industries</a></li>
        <li class="breadcrumb-item text-muted"><?= htmlspecialchars($niche['category_name']) ?></li>
        <li class="breadcrumb-item active fw-bold text-primary" aria-current="page"><?= htmlspecialchars($niche['name']) ?></li>
      </ol>
    </nav>

    <div class="row align-items-center g-4 g-lg-5">
      <!-- Left Column: Copy & Value Proposition -->
      <div class="col-lg-7">
        <div class="d-inline-flex flex-wrap align-items-center gap-2 mb-3">
          <span class="service-pill-tag">
            <span class="award-pulse-dot"></span>
            <i class="bi <?= htmlspecialchars($niche['category_icon']) ?> me-1"></i>
            <?= htmlspecialchars($niche['category_name']) ?>
          </span>
          <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold fs-xs text-uppercase tracking-wider">
            <i class="bi bi-award-fill me-1"></i> Niche Growth Architecture
          </span>
        </div>

        <h1 class="display-5 fw-extrabold text-dark letter-spacing-tight mb-3">
          Turnkey Client Acquisition for <span class="text-gradient"><?= htmlspecialchars($niche['name']) ?></span>
        </h1>

        <p class="lead text-secondary mb-4 fs-5" style="line-height: 1.75;">
          <?= htmlspecialchars($niche['tagline']) ?> We engineer predictable client generation engines, high-converting websites, and automated GoHighLevel systems built exclusively around the buyer psychology of <?= strtolower(htmlspecialchars($niche['name'])) ?>.
        </p>

        <!-- Stats Bar -->
        <div class="row g-2 g-sm-3 mb-4 py-3 bg-white rounded-4 border shadow-xs px-2 text-center">
          <div class="col-6 col-sm-3 py-1 border-end border-light-subtle">
            <div class="fs-4 fw-extrabold text-primary font-manrope">4.8x</div>
            <div class="small text-muted fw-semibold" style="font-size: 0.72rem;">Avg Return on Spend</div>
          </div>
          <div class="col-6 col-sm-3 py-1 border-end border-light-subtle">
            <div class="fs-4 fw-extrabold text-primary font-manrope">14-25</div>
            <div class="small text-muted fw-semibold" style="font-size: 0.72rem;">Discovery Calls/mo</div>
          </div>
          <div class="col-6 col-sm-3 py-1 border-end border-light-subtle">
            <div class="fs-4 fw-extrabold text-primary font-manrope">Sub-60s</div>
            <div class="small text-muted fw-semibold" style="font-size: 0.72rem;">Speed-to-Lead</div>
          </div>
          <div class="col-6 col-sm-3 py-1">
            <div class="fs-4 fw-extrabold text-primary font-manrope">100%</div>
            <div class="small text-muted fw-semibold" style="font-size: 0.72rem;">Dedicated USA Team</div>
          </div>
        </div>

        <!-- Action CTAs -->
        <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
          <a href="#consultation" class="btn btn-primary btn-lg rounded-pill px-4 py-3 shadow-brand fw-bold">
            <span>Get Free <?= htmlspecialchars($niche['name']) ?> Consultation</span>
            <i class="bi bi-arrow-right ms-2"></i>
          </a>
          <a href="#what-we-install" class="btn btn-outline-dark btn-lg rounded-pill px-4 py-3 fw-bold">
            <i class="bi bi-layers-half me-1 text-primary"></i> Explore The Stack
          </a>
        </div>
      </div>

      <!-- Right Column: Installed Stack Module Card -->
      <div class="col-lg-5" id="what-we-install">
        <div class="industry-stack-card">
          <div class="d-flex align-items-center gap-3 mb-3 pb-3 border-bottom">
            <div class="bg-primary text-white rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center shadow-xs" style="width: 44px; height: 44px; min-width: 44px; min-height: 44px; aspect-ratio: 1 / 1;">
              <i class="bi <?= htmlspecialchars($niche['category_icon']) ?> fs-5"></i>
            </div>
            <div>
              <h5 class="fw-bold text-dark mb-0 font-manrope">What We Install for <?= htmlspecialchars($niche['name']) ?></h5>
              <small class="text-muted">Turnkey Commercial Machinery</small>
            </div>
          </div>

          <ul class="industry-module-list">
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span>High-Converting Direct-Response Web Portal</span>
            </li>
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span>Predictable Inbound Discovery Call Funnels</span>
            </li>
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span>Certified GoHighLevel CRM & SMS Speed-to-Lead</span>
            </li>
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span>Google Local 3-Pack & Organic SEO Dominance</span>
            </li>
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span>Automated 5-Star Google Review Generation Machine</span>
            </li>
            <li>
              <i class="bi bi-check-circle-fill"></i>
              <span>High-Ticket Offer Packaging ($3,000 to $15,000+)</span>
            </li>
          </ul>

          <div class="p-2.5 bg-light rounded-3 text-center">
            <small class="text-muted fw-bold d-block">
              <i class="bi bi-shield-check text-primary me-1"></i> 100% Customized Roadmap • Zero Cookie-Cutter Templates
            </small>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     2. PAIN POINTS & GROWTH BARRIERS FOR THIS NICHE
     ========================================================================== -->
<section class="py-5 bg-light bg-dot-matrix">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Targeted Strategy</span>
      <h2 class="display-6 fw-bold text-dark mb-2">Why Most <?= htmlspecialchars($niche['name']) ?> Struggle to Scale</h2>
      <p class="text-muted lead fs-6">
        The most common commercial obstacles faced by <?= strtolower(htmlspecialchars($niche['name'])) ?> across the United States, and how our architecture resolves them.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-4">
        <div class="problem-card">
          <div class="problem-icon-wrap">
            <i class="bi bi-calendar-x-fill"></i>
          </div>
          <h5 class="fw-bold text-dark mb-2 font-manrope">Unpredictable Discovery Pipeline</h5>
          <p class="text-secondary small mb-0" style="line-height: 1.65;">
            Relying solely on sporadic referrals creates stressful revenue droughts where months go by without a new high-paying client enrollment.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="problem-card">
          <div class="problem-icon-wrap">
            <i class="bi bi-tag-fill"></i>
          </div>
          <h5 class="fw-bold text-dark mb-2 font-manrope">Undercharging for Coaching</h5>
          <p class="text-secondary small mb-0" style="line-height: 1.65;">
            Selling single sessions or low-ticket hourly blocks traps you on a hamster wheel where you can never scale your practice without burning out.
          </p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="problem-card">
          <div class="problem-icon-wrap">
            <i class="bi bi-laptop"></i>
          </div>
          <h5 class="fw-bold text-dark mb-2 font-manrope">Low-Converting Online Brand</h5>
          <p class="text-secondary small mb-0" style="line-height: 1.65;">
            A weak website that looks like a basic digital resume fails to instill the executive trust needed to command $5,000+ coaching retainers.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     3. THE 4-STAGE NICHE SCALING BLUEPRINT
     ========================================================================== -->
<section class="py-5 bg-white border-top border-bottom">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Proven Roadmap</span>
      <h2 class="display-6 fw-bold text-dark mb-2">Our 4-Stage Scaling Framework</h2>
      <p class="text-muted lead fs-6">
        How we take <?= strtolower(htmlspecialchars($niche['name'])) ?> from erratic word-of-mouth to institutional-grade growth.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="process-step-card">
          <div class="process-step-num">01</div>
          <h5 class="fw-bold text-dark mb-2 font-manrope">High-Ticket Offer Packaging</h5>
          <p class="text-secondary small mb-0" style="line-height: 1.65;">
            We restructure your coaching into a high-value $3k to $15k transformation program with guaranteed deliverables.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="process-step-card">
          <div class="process-step-num">02</div>
          <h5 class="fw-bold text-dark mb-2 font-manrope">Conversion Website & Funnel</h5>
          <p class="text-secondary small mb-0" style="line-height: 1.65;">
            We build a direct-response web portal that pre-qualifies visitors and books calls on your calendar 24/7.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="process-step-card">
          <div class="process-step-num">03</div>
          <h5 class="fw-bold text-dark mb-2 font-manrope">Targeted Inbound Channels</h5>
          <p class="text-secondary small mb-0" style="line-height: 1.65;">
            We launch targeted Google Search ads, SEO, and social funnels to drive pre-qualified traffic actively looking for your expertise.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="process-step-card">
          <div class="process-step-num">04</div>
          <h5 class="fw-bold text-dark mb-2 font-manrope">GoHighLevel & AI Automation</h5>
          <p class="text-secondary small mb-0" style="line-height: 1.65;">
            Instant speed-to-lead follow-up, automated SMS reminders, and review generation on 24/7 autopilot.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     4. VERIFIED CLIENT TRANSFORMATION SPOTLIGHT
     ========================================================================== -->
<section class="py-5 bg-light">
  <div class="container py-lg-4">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-lg-5">
        <span class="service-pill-tag mb-2">Verified Proof</span>
        <h2 class="display-6 fw-bold text-dark mb-3 font-manrope">Real Practice Transformation</h2>
        <p class="text-secondary mb-4 fs-6" style="line-height: 1.75;">
          See how our client acquisition systems engineered specifically for <?= strtolower(htmlspecialchars($niche['category_name'])) ?> delivered measurable, repeatable revenue growth.
        </p>

        <div class="d-flex flex-column gap-2 mb-4">
          <?php foreach ($selectedCase['metrics'] as $mLabel => $mVal): ?>
            <div class="p-2.5 px-3 bg-white rounded-3 border d-flex justify-content-between align-items-center shadow-xs">
              <span class="small fw-semibold text-muted"><?= htmlspecialchars($mLabel) ?></span>
              <span class="fw-extrabold text-primary font-manrope"><?= htmlspecialchars($mVal) ?></span>
            </div>
          <?php endforeach; ?>
        </div>

        <a href="case-studies.php" class="btn btn-outline-primary rounded-pill px-4 py-2.5 fw-bold">
          Explore All Case Studies <i class="bi bi-arrow-right ms-1"></i>
        </a>
      </div>

      <div class="col-lg-7">
        <div class="p-4 p-md-5 bg-white rounded-4 border shadow-sm">
          <div class="d-flex align-items-center gap-3 mb-3">
            <div class="bg-primary text-white rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center shadow-xs" style="width: 48px; height: 48px; min-width: 48px; min-height: 48px; aspect-ratio: 1 / 1;">
              <i class="bi bi-quote fs-4"></i>
            </div>
            <div>
              <h5 class="fw-bold text-dark mb-0 font-manrope"><?= htmlspecialchars($selectedCase['coach_name']) ?></h5>
              <small class="text-muted"><?= htmlspecialchars($selectedCase['coach_type']) ?> • <?= htmlspecialchars($selectedCase['location']) ?></small>
            </div>
          </div>

          <h4 class="fw-bold text-dark mb-3 font-manrope" style="line-height: 1.45;">
            "<?= htmlspecialchars($selectedCase['headline']) ?>"
          </h4>

          <div class="mb-3">
            <span class="badge bg-danger-subtle text-danger px-2.5 py-1 rounded-pill small fw-bold mb-2">The Bottleneck</span>
            <p class="text-secondary small mb-0" style="line-height: 1.65;"><?= htmlspecialchars($selectedCase['challenge']) ?></p>
          </div>

          <div>
            <span class="badge bg-success-subtle text-success px-2.5 py-1 rounded-pill small fw-bold mb-2">The Outcome</span>
            <p class="text-secondary small mb-0" style="line-height: 1.65;"><?= htmlspecialchars($selectedCase['result']) ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     5. ENTERPRISE ACCREDITATIONS & TRUST STRIP
     ========================================================================== -->
<section class="py-4 bg-white border-top border-bottom">
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
     6. CONSULTATION BOOKING FORM FOR THIS NICHE
     ========================================================================== -->
<section id="consultation" class="py-5 bg-light">
  <div class="container py-lg-4">
    <div class="row align-items-center g-4 g-lg-5">
      <!-- Left Column -->
      <div class="col-lg-5">
        <span class="service-pill-tag mb-2">Priority Engagement</span>
        <h2 class="display-6 fw-bold text-dark mb-3 font-manrope">
          Scale Your <?= htmlspecialchars($niche['name']) ?> Practice
        </h2>
        <p class="text-secondary mb-4 fs-6" style="line-height: 1.75;">
          Schedule your free 30-minute growth diagnostic session. We will evaluate your current client acquisition bottlenecks and present a tailored blueprint for your specialty.
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
              <div class="fw-bold text-dark">Strict NDA Confidentiality</div>
              <small class="text-muted">100% confidential advisory with dedicated US specialists</small>
            </div>
          </div>
        </div>

        <div class="p-3 bg-white rounded-3 border shadow-xs">
          <small class="text-muted d-block mb-1">Prefer direct inquiry?</small>
          <a href="mailto:growth@coaching360usa.com" class="fw-bold text-primary text-decoration-none me-3">
            <i class="bi bi-envelope me-1"></i> growth@coaching360usa.com
          </a>
          <a href="tel:+18005553600" class="fw-bold text-secondary text-decoration-none">
            <i class="bi bi-telephone me-1"></i> +1 (800) 555-3600
          </a>
        </div>
      </div>

      <!-- Right Form: Standalone Reusable Global Industry Inquiry Component -->
      <div class="col-lg-7">
        <?php
        $formNiche = $niche;
        require __DIR__ . '/components/industry-inquiry-form.php';
        ?>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     7. SISTER NICHES NAVIGATION IN SAME DISCIPLINE
     ========================================================================== -->
<?php if (!empty($sisterNiches)): ?>
<section class="py-5 bg-white border-top">
  <div class="container py-lg-4">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
      <div>
        <h4 class="fw-bold mb-0 text-dark font-manrope">Related <?= htmlspecialchars($niche['category_name']) ?> Niches</h4>
        <small class="text-muted">Explore growth engines for complementary coaching specialties</small>
      </div>
      <a href="industries.php" class="btn btn-outline-primary btn-sm rounded-pill px-3 fw-bold">
        View All 52 Niches <i class="bi bi-arrow-right ms-1"></i>
      </a>
    </div>

    <div class="row g-3">
      <?php 
      $sCount = 0;
      foreach ($sisterNiches as $sNiche): 
        if (++$sCount > 4) break;
      ?>
        <div class="col-md-6 col-lg-3">
          <a href="industry.php?slug=<?= htmlspecialchars($sNiche['slug']) ?>" class="text-decoration-none h-100 d-block">
            <div class="related-sister-card">
              <div>
                <div class="text-primary fs-3 mb-2"><i class="bi <?= htmlspecialchars($niche['category_icon']) ?>"></i></div>
                <h6 class="mb-1 font-manrope"><?= htmlspecialchars($sNiche['name']) ?></h6>
                <p class="small text-muted mb-3" style="font-size: 0.8rem; line-height: 1.5;"><?= htmlspecialchars($sNiche['tagline']) ?></p>
              </div>
              <span class="small fw-bold text-primary">
                Explore Engine <i class="bi bi-chevron-right fs-xs"></i>
              </span>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
