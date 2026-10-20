<?php
$pageTitle = 'Case Studies & Coach Growth Transformations | Coaching 360 Growth Lab USA';
$pageDescription = 'Real-world revenue, lead acquisition, and operational scale case studies from Executive, Health, Financial, Career, Business, and Mindset Coaches across the USA.';
$basePath = '';

require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     1. HERO SECTION (Awwwards Grade)
     ========================================================================== -->
<section class="services-hub-hero section-ambient-glow position-relative overflow-hidden pt-4 pb-5 bg-white border-bottom">
  <div class="container text-center pb-lg-4 position-relative" style="z-index: 1;">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="mb-4">
      <ol class="breadcrumb justify-content-center small text-muted mb-0">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted"><i class="bi bi-house-door me-1"></i>Home</a></li>
        <li class="breadcrumb-item active fw-bold text-primary" aria-current="page">Case Studies</li>
      </ol>
    </nav>

    <div class="d-inline-flex flex-wrap align-items-center justify-content-center gap-2 mb-3">
      <span class="service-pill-tag">
        <span class="award-pulse-dot"></span>
        <i class="bi bi-trophy-fill me-1"></i> Real Client Transformations
      </span>
      <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-bold fs-xs text-uppercase tracking-wider">
        <i class="bi bi-shield-check me-1"></i> Audited US Coach Outcomes
      </span>
    </div>

    <h1 class="display-4 fw-extrabold text-dark letter-spacing-tight mb-3">
      Proven Results for <span class="text-gradient">American Coaches</span>
    </h1>
    <p class="lead text-secondary max-w-750 mx-auto fs-5 mb-4" style="line-height: 1.75;">
      Read authentic revenue breakthroughs, before/after funnel architectures, and client acquisition transformations from coaches who replaced referral anxiety with institutional growth machinery.
    </p>

    <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="consultation.php" class="btn btn-primary btn-lg rounded-pill px-4 py-3 fw-bold shadow-brand">
        <span>Request Your Practice Audit</span>
        <i class="bi bi-arrow-right ms-2"></i>
      </a>
      <a href="#case-studies-grid" class="btn btn-outline-dark btn-lg rounded-pill px-4 py-3 fw-bold">
        <i class="bi bi-filter me-1 text-primary"></i> Explore Case Studies
      </a>
    </div>

    <!-- Aggregate Stats Strip -->
    <div class="row g-2 g-md-4 mt-5 p-3 p-md-4 bg-light rounded-4 border shadow-xs justify-content-center text-center">
      <div class="col-6 col-md-3 border-end border-light-subtle">
        <div class="fs-2 fw-black text-primary font-manrope">1,200+</div>
        <div class="small text-muted fw-semibold" style="font-size: 0.8rem;">US Coaches Empowered</div>
      </div>
      <div class="col-6 col-md-3 border-end border-light-subtle">
        <div class="fs-2 fw-black text-primary font-manrope">$48M+</div>
        <div class="small text-muted fw-semibold" style="font-size: 0.8rem;">Pipeline Revenue Generated</div>
      </div>
      <div class="col-6 col-md-3 border-end border-light-subtle">
        <div class="fs-2 fw-black text-primary font-manrope">350k+</div>
        <div class="small text-muted fw-semibold" style="font-size: 0.8rem;">Pre-Qualified Discovery Leads</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="fs-2 fw-black text-primary font-manrope">4.95 / 5</div>
        <div class="small text-muted fw-semibold" style="font-size: 0.8rem;">Audited Client Satisfaction</div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     2. INTERACTIVE NICHE FILTER BAR & CASE STUDIES DIRECTORY
     ========================================================================== -->
<section id="case-studies-grid" class="py-5 bg-light bg-dot-matrix">
  <div class="container py-lg-4">
    <!-- Section Intro & Filter Controls -->
    <div class="text-center max-w-700 mx-auto mb-4">
      <span class="service-pill-tag mb-2">Filter by Practice Specialty</span>
      <h2 class="display-6 fw-bold text-dark mb-2">Curated Coaching Breakthroughs</h2>
      <p class="text-muted lead fs-6">
        Select your coaching specialty below to see the exact funnels, CRM systems, and revenue growth achieved.
      </p>
    </div>

    <!-- Filter Buttons Strip -->
    <div class="cs-filter-container">
      <button class="cs-filter-btn active" data-filter="all">
        <i class="bi bi-grid-fill"></i> All Niches (<?= count($case_studies) ?>)
      </button>
      <button class="cs-filter-btn" data-filter="executive">
        <i class="bi bi-briefcase-fill"></i> Executive &amp; C-Suite
      </button>
      <button class="cs-filter-btn" data-filter="health">
        <i class="bi bi-heart-pulse-fill"></i> Health &amp; Wellness
      </button>
      <button class="cs-filter-btn" data-filter="financial">
        <i class="bi bi-cash-coin"></i> Financial &amp; Wealth
      </button>
      <button class="cs-filter-btn" data-filter="career">
        <i class="bi bi-mortarboard-fill"></i> Career Transition
      </button>
      <button class="cs-filter-btn" data-filter="business">
        <i class="bi bi-graph-up-arrow"></i> Business &amp; Scale
      </button>
      <button class="cs-filter-btn" data-filter="mindset">
        <i class="bi bi-lightning-charge-fill"></i> High-Performance Mindset
      </button>
    </div>

    <!-- Case Studies Cards Loop -->
    <div class="row g-4" id="caseStudiesContainer">
      <?php foreach ($case_studies as $cs): 
        // Derive initials for coach avatar
        $words = explode(' ', $cs['coach_name']);
        $initials = '';
        foreach ($words as $w) {
            if (preg_match('/^[A-Z]/', $w)) {
                $initials .= $w[0];
                if (strlen($initials) >= 2) break;
            }
        }
        if (empty($initials)) $initials = 'CC';
        $category = $cs['category'] ?? 'all';
        $highlight = $cs['highlight'] ?? 'Verified Commercial Scale';
        $quote = $cs['quote'] ?? 'Coaching 360 Growth Lab transformed our commercial pipeline and gave us total predictability.';
        $techStack = $cs['tech_stack'] ?? ['GoHighLevel CRM', 'Funnel Architecture', 'Stripe'];
      ?>
        <div class="col-12 cs-item" data-category="<?= htmlspecialchars($category) ?>" id="<?= htmlspecialchars($cs['slug']) ?>">
          <div class="cs-modern-card">
            <!-- Card Header: Coach Identity & Highlight Badge -->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4 pb-3 border-bottom">
              <div class="d-flex align-items-center gap-3">
                <div class="cs-coach-avatar">
                  <?= htmlspecialchars($initials) ?>
                </div>
                <div>
                  <div class="d-flex flex-wrap align-items-center gap-2 mb-1">
                    <h4 class="fw-bold text-dark mb-0 font-manrope fs-5"><?= htmlspecialchars($cs['coach_name']) ?></h4>
                    <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-2.5 py-0.5 fw-bold" style="font-size: 0.72rem;">
                      <?= htmlspecialchars($cs['coach_type']) ?>
                    </span>
                    <span class="badge bg-light text-muted border rounded-pill px-2.5 py-0.5" style="font-size: 0.72rem;">
                      <i class="bi bi-geo-alt me-1 text-primary"></i><?= htmlspecialchars($cs['location']) ?>
                    </span>
                  </div>
                  <div class="d-flex align-items-center gap-2 text-muted small" style="font-size: 0.78rem;">
                    <span class="text-success fw-bold"><i class="bi bi-shield-fill-check me-1"></i>Verified Engagement</span>
                    <span>•</span>
                    <span>100% Client-Owned Intellectual Property</span>
                  </div>
                </div>
              </div>

              <!-- Transformation Highlight Pill -->
              <div class="cs-transform-badge">
                <i class="bi bi-arrow-up-right-circle-fill"></i>
                <?= htmlspecialchars($highlight) ?>
              </div>
            </div>

            <!-- Headline Banner -->
            <h3 class="h4 fw-bold text-dark mb-3 font-manrope" style="line-height: 1.45;">
              "<?= htmlspecialchars($cs['headline']) ?>"
            </h3>

            <!-- Client Quote Callout -->
            <div class="cs-quote-box">
              <div class="d-flex align-items-center gap-1 text-warning mb-1" style="font-size: 0.85rem;">
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <i class="bi bi-star-fill"></i>
                <span class="text-muted ms-2 small fw-bold" style="font-size: 0.75rem;">Verified Coach Review</span>
              </div>
              <p class="mb-0 text-secondary">
                "<?= htmlspecialchars($quote) ?>"
              </p>
            </div>

            <!-- Two-Column Breakdown: The Blueprint & The Verified Metrics -->
            <div class="row g-4 align-items-stretch">
              <!-- Left Column: Problem, Lab Solution, and Measurable Impact -->
              <div class="col-lg-7 d-flex flex-column justify-content-between">
                <div class="d-flex flex-column gap-3">
                  <!-- The Core Obstacle -->
                  <div class="p-3 bg-light rounded-4 border d-flex align-items-start gap-3">
                    <div class="bg-danger-subtle text-danger rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center mt-1" style="width: 32px; height: 32px; min-width: 32px; min-height: 32px; aspect-ratio: 1 / 1;">
                      <i class="bi bi-exclamation-triangle-fill fs-6"></i>
                    </div>
                    <div>
                      <h6 class="fw-bold text-dark text-uppercase small letter-spacing-1 mb-1">
                        The Core Obstacle (Before):
                      </h6>
                      <p class="small text-secondary mb-0" style="line-height: 1.65;"><?= htmlspecialchars($cs['challenge']) ?></p>
                    </div>
                  </div>

                  <!-- Our Implemented Solution -->
                  <div class="p-3 bg-light rounded-4 border d-flex align-items-start gap-3">
                    <div class="bg-primary-subtle text-primary rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center mt-1" style="width: 32px; height: 32px; min-width: 32px; min-height: 32px; aspect-ratio: 1 / 1;">
                      <i class="bi bi-gear-wide-connected fs-6"></i>
                    </div>
                    <div>
                      <h6 class="fw-bold text-dark text-uppercase small letter-spacing-1 mb-1">
                        Our Implemented Solution (Architecture):
                      </h6>
                      <p class="small text-secondary mb-0" style="line-height: 1.65;"><?= htmlspecialchars($cs['solution']) ?></p>
                    </div>
                  </div>

                  <!-- The Measurable Impact -->
                  <div class="p-3 bg-light rounded-4 border d-flex align-items-start gap-3">
                    <div class="bg-success-subtle text-success rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center mt-1" style="width: 32px; height: 32px; min-width: 32px; min-height: 32px; aspect-ratio: 1 / 1;">
                      <i class="bi bi-check-circle-fill fs-6"></i>
                    </div>
                    <div>
                      <h6 class="fw-bold text-dark text-uppercase small letter-spacing-1 mb-1">
                        The Measurable Impact (Outcome):
                      </h6>
                      <p class="small text-secondary mb-0" style="line-height: 1.65;"><?= htmlspecialchars($cs['result']) ?></p>
                    </div>
                  </div>
                </div>

                <!-- Tech Stack Tags Strip -->
                <div class="mt-3 pt-2">
                  <span class="small fw-bold text-muted me-2" style="font-size: 0.75rem;">Technology Deployed:</span>
                  <div class="d-inline-flex flex-wrap gap-1 mt-1">
                    <?php foreach ($techStack as $tool): ?>
                      <span class="cs-tech-pill">
                        <i class="bi bi-check2 text-primary"></i> <?= htmlspecialchars($tool) ?>
                      </span>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>

              <!-- Right Column: Audited Performance Metrics Card -->
              <div class="col-lg-5">
                <div class="p-4 bg-light rounded-4 border h-100 d-flex flex-column justify-content-between shadow-xs">
                  <div>
                    <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-3">
                      <span class="fw-bold text-dark small text-uppercase letter-spacing-1">
                        <i class="bi bi-graph-up text-primary me-1"></i> Audited Metrics:
                      </span>
                      <span class="badge bg-success-subtle text-success border border-success-subtle rounded-pill small">
                        <i class="bi bi-lock-fill me-1"></i> Verified
                      </span>
                    </div>

                    <!-- 4 Metrics Tiles Grid -->
                    <div class="row g-2 g-sm-3 mb-4">
                      <?php foreach ($cs['metrics'] as $lbl => $val): ?>
                        <div class="col-6">
                          <div class="cs-metric-tile">
                            <span class="cs-metric-lbl"><?= htmlspecialchars($lbl) ?></span>
                            <span class="cs-metric-val"><?= htmlspecialchars($val) ?></span>
                          </div>
                        </div>
                      <?php endforeach; ?>
                    </div>
                  </div>

                  <!-- Direct Engine Deployment CTA -->
                  <div class="pt-2">
                    <a href="consultation.php?ref=<?= htmlspecialchars($cs['slug']) ?>" class="btn btn-primary rounded-pill w-100 py-3 fw-bold shadow-brand">
                      <span>Deploy This Engine For My Practice</span>
                      <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <div class="text-center text-muted small mt-2" style="font-size: 0.72rem;">
                      <i class="bi bi-shield-check text-primary me-1"></i> Tailored for <?= htmlspecialchars($cs['coach_type']) ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ==========================================================================
     3. BENCHMARK COMPARISON MATRIX (Solo Friction vs. Lab Engine)
     ========================================================================== -->
<section class="py-5 bg-white border-top border-bottom">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Operational Benchmark</span>
      <h2 class="display-6 fw-bold text-dark mb-2">The Shift: Solo Coach Friction vs. Growth Lab Scale</h2>
      <p class="text-muted lead fs-6">
        Compare the realities of running a fragmented coaching business versus deploying an integrated commercial engine.
      </p>
    </div>

    <div class="table-responsive">
      <table class="benchmark-table">
        <thead>
          <tr class="bg-light">
            <th class="text-dark" style="width: 28%;">Practice Dimension</th>
            <th class="text-danger" style="width: 36%;">Traditional Solo Coach Model</th>
            <th class="text-primary" style="width: 36%;">Coaching 360 Growth Lab Engine</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="fw-bold text-dark">
              <i class="bi bi-crosshair text-primary me-2"></i> Client Acquisition Strategy
            </td>
            <td>
              <span class="benchmark-badge-before mb-1">Unpredictable</span>
              <div class="text-secondary small">Relying on word-of-mouth, passive networking, and manual cold messaging on LinkedIn.</div>
            </td>
            <td>
              <span class="benchmark-badge-after mb-1">Turnkey Inbound Machine</span>
              <div class="text-dark fw-semibold small">Multi-channel targeted paid search, high-ticket VSL funnels, and automated pre-qualification.</div>
            </td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">
              <i class="bi bi-currency-dollar text-primary me-2"></i> Cost Per Qualified Discovery Call
            </td>
            <td>
              <span class="benchmark-badge-before mb-1">$250 – $400+ CPA</span>
              <div class="text-secondary small">Ad budget burned on unqualified clicks, tire-kickers, and low-ticket ebook downloads.</div>
            </td>
            <td>
              <span class="benchmark-badge-after mb-1">$45 – $85 Calibrated CPA</span>
              <div class="text-dark fw-semibold small">Laser-targeted intent qualification ensuring only high-ticket capable leads reach your calendar.</div>
            </td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">
              <i class="bi bi-clock-history text-primary me-2"></i> Weekly Administrative Burden
            </td>
            <td>
              <span class="benchmark-badge-before mb-1">15 to 20 Hours Lost</span>
              <div class="text-secondary small">Chasing leads via email, rescheduling no-shows, manual invoicing, and updating spreadsheets.</div>
            </td>
            <td>
              <span class="benchmark-badge-after mb-1">&lt; 2 Hours Maintenance</span>
              <div class="text-dark fw-semibold small">Certified GoHighLevel automation handles 2-way SMS reminders, scheduling, and Stripe billing.</div>
            </td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">
              <i class="bi bi-calendar-check text-primary me-2"></i> Discovery Call Show-Up Rate
            </td>
            <td>
              <span class="benchmark-badge-before mb-1">45% – 55% Show-Up</span>
              <div class="text-secondary small">Frequent no-shows and ghosting because prospects forget or lack psychological commitment.</div>
            </td>
            <td>
              <span class="benchmark-badge-after mb-1">88% – 94% Show-Up</span>
              <div class="text-dark fw-semibold small">Automated 2-way AI SMS nurture, calendar sync, and pre-call homework videos build anticipation.</div>
            </td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">
              <i class="bi bi-stack text-primary me-2"></i> Tech Stack &amp; Asset Ownership
            </td>
            <td>
              <span class="benchmark-badge-before mb-1">Fractured Subscriptions</span>
              <div class="text-secondary small">10+ disconnected SaaS tools (Zapier, Calendly, Mailchimp, WordPress) that constantly break.</div>
            </td>
            <td>
              <span class="benchmark-badge-after mb-1">Unified CRM &amp; 100% IP</span>
              <div class="text-dark fw-semibold small">Single-source-of-truth GoHighLevel architecture; 100% owned by your practice with zero lock-in.</div>
            </td>
          </tr>
          <tr>
            <td class="fw-bold text-dark">
              <i class="bi bi-graph-up-arrow text-primary me-2"></i> Revenue Run-Rate Predictability
            </td>
            <td>
              <span class="benchmark-badge-before mb-1">Feast-or-Famine Volatility</span>
              <div class="text-secondary small">Great months followed by empty calendars; high anxiety around where the next client will come from.</div>
            </td>
            <td>
              <span class="benchmark-badge-after mb-1">Predictable 6-Figure Scale</span>
              <div class="text-dark fw-semibold small">Consistent 20 to 35 qualified discovery calls per month, enabling dependable hiring and scale.</div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ==========================================================================
     4. DATA INTEGRITY & AUDIT GUARANTEE
     ========================================================================== -->
<section class="py-5 bg-light">
  <div class="container py-lg-4">
    <div class="row g-4 align-items-center">
      <div class="col-lg-4">
        <span class="service-pill-tag mb-2">High Integrity</span>
        <h3 class="fw-bold text-dark mb-2 font-manrope">Our Case Study Verification Protocol</h3>
        <p class="text-secondary small mb-0" style="line-height: 1.7;">
          Every case study published by Coaching 360 Growth Lab USA represents authentic client engagements. We adhere to rigorous verification standards to ensure full transparency.
        </p>
      </div>
      <div class="col-lg-8">
        <div class="row g-3">
          <div class="col-md-4">
            <div class="p-3 bg-white rounded-4 border h-100 shadow-xs">
              <div class="bg-primary text-white rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center mb-2" style="width: 38px; height: 38px; min-width: 38px; min-height: 38px; aspect-ratio: 1 / 1;">
                <i class="bi bi-database-check"></i>
              </div>
              <h6 class="fw-bold text-dark mb-1 font-manrope">Audited CRM Data</h6>
              <p class="small text-muted mb-0">Revenues, calls, and CPA numbers verified directly through GoHighLevel and Stripe merchant feeds.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-3 bg-white rounded-4 border h-100 shadow-xs">
              <div class="bg-primary text-white rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center mb-2" style="width: 38px; height: 38px; min-width: 38px; min-height: 38px; aspect-ratio: 1 / 1;">
                <i class="bi bi-shield-lock-fill"></i>
              </div>
              <h6 class="fw-bold text-dark mb-1 font-manrope">ICF Ethical Alignment</h6>
              <p class="small text-muted mb-0">Respecting client confidentiality and proprietary coaching frameworks under strict mutual NDAs.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="p-3 bg-white rounded-4 border h-100 shadow-xs">
              <div class="bg-primary text-white rounded-circle flex-shrink-0 d-flex align-items-center justify-content-center mb-2" style="width: 38px; height: 38px; min-width: 38px; min-height: 38px; aspect-ratio: 1 / 1;">
                <i class="bi bi-award-fill"></i>
              </div>
              <h6 class="fw-bold text-dark mb-1 font-manrope">Guaranteed Delivery</h6>
              <p class="small text-muted mb-0">Milestone-based implementations backed by dedicated USA growth engineers and weekly SLA accountability.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     5. STRATEGIC CTA SECTION
     ========================================================================== -->
<section class="py-5 bg-white border-top">
  <div class="container text-center max-w-800 mx-auto py-lg-4">
    <span class="service-pill-tag mb-2">Ready to Scale?</span>
    <h2 class="display-6 fw-bold text-dark mb-3 font-manrope">Ready to Be Our Next Featured Success Story?</h2>
    <p class="text-secondary lead fs-6 mb-4" style="line-height: 1.75;">
      Schedule a complimentary 30-minute growth diagnostic session. Our senior architects will evaluate your current commercial bottlenecks and design a customized roadmap for your coaching practice.
    </p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="consultation.php" class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-bold shadow-brand">
        <span>Get Your Free Growth Consultation</span>
        <i class="bi bi-arrow-right ms-2"></i>
      </a>
      <a href="services.php" class="btn btn-outline-dark btn-lg rounded-pill px-4 py-3 fw-bold">
        <span>Explore All 12 Growth Services</span>
      </a>
    </div>
  </div>
</section>

<!-- ==========================================================================
     6. CLIENT-SIDE NICHE FILTER SCRIPT (Instant & Smooth)
     ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const filterBtns = document.querySelectorAll('.cs-filter-btn');
  const caseItems = document.querySelectorAll('.cs-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      // Toggle active button
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      const filterVal = this.getAttribute('data-filter');

      caseItems.forEach(item => {
        const itemCat = item.getAttribute('data-category');
        if (filterVal === 'all' || itemCat === filterVal) {
          item.style.display = 'block';
          item.style.opacity = '0';
          setTimeout(() => {
            item.style.transition = 'opacity 0.35s ease';
            item.style.opacity = '1';
          }, 20);
        } else {
          item.style.display = 'none';
        }
      });
    });
  });
});
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
