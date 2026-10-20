<?php
$pageTitle = 'Growth & Marketing Services for Coaches | Coaching 360 Growth Lab USA';
$pageDescription = 'Everything your coaching business needs to scale: B2B/B2C Lead Generation, GoHighLevel Setup, High-Converting Web Development, SEO, AI Automation, and Paid Ads.';
$basePath = '';

require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- ==========================================================================
     1. SERVICES HUB HERO: High-Impact Commercial Infrastructure Platform
     ========================================================================== -->
<section class="services-hub-hero section-ambient-glow position-relative overflow-hidden pt-4 pb-5 bg-white border-bottom">
  <div class="container text-center pb-lg-4 position-relative" style="z-index: 2;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="mb-3 d-inline-block">
      <ol class="breadcrumb justify-content-center small text-muted mb-0">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted">Home</a></li>
        <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">Services</li>
      </ol>
    </nav>

    <!-- Authority Kicker Pill -->
    <div class="d-flex flex-wrap justify-content-center align-items-center gap-2 mb-3">
      <span class="service-pill-tag">
        <span class="award-pulse-dot"></span> Complete Commercial Infrastructure
      </span>
      <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold fs-xs text-uppercase tracking-wider">
        <i class="bi bi-cpu-fill me-1"></i> 12 Specialized Growth Engines
      </span>
    </div>

    <!-- Main Heading -->
    <h1 class="display-4 fw-extrabold text-dark letter-spacing-tight mb-3 max-w-900 mx-auto">
      Everything Your Coaching Business Needs to <span class="text-gradient">Scale Faster</span>
    </h1>

    <p class="lead text-secondary max-w-750 mx-auto fs-5 mb-4" style="line-height: 1.75;">
      From qualified lead generation and GoHighLevel CRM setup to high-converting websites and Google SEO dominance — explore our 12 specialized growth engines engineered exclusively for US coaching practices.
    </p>

    <!-- Primary Actions -->
    <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 mb-5">
      <a href="consultation.php" class="btn btn-primary btn-lg rounded-pill px-4 py-3 fw-bold shadow-brand">
        <span>Get Your Free Growth Consultation</span>
        <i class="bi bi-arrow-right ms-2"></i>
      </a>
      <a href="#services-grid" class="btn btn-outline-dark btn-lg rounded-pill px-4 py-3 fw-bold">
        <i class="bi bi-grid-3x3-gap-fill text-primary me-2"></i>Explore All 12 Engines
      </a>
    </div>

    <!-- Unified Impact Stats Bar -->
    <div class="about-stats-container max-w-1000 mx-auto">
      <div class="row g-3 g-md-4 text-center justify-content-center align-items-center">
        <div class="col-6 col-md-3">
          <div class="p-2">
            <div class="display-6 fw-extrabold text-primary font-manrope mb-1">350k+</div>
            <div class="small text-muted fw-bold text-uppercase letter-spacing-wider" style="font-size: 0.72rem;">Coaching Leads</div>
            <div class="text-secondary small mt-1">Generated via paid & organic</div>
          </div>
        </div>

        <div class="col-6 col-md-3 border-start-md">
          <div class="p-2">
            <div class="display-6 fw-extrabold text-primary font-manrope mb-1">150+</div>
            <div class="small text-muted fw-bold text-uppercase letter-spacing-wider" style="font-size: 0.72rem;">GHL Stacks</div>
            <div class="text-secondary small mt-1">Turnkey CRM deployments</div>
          </div>
        </div>

        <div class="col-6 col-md-3 border-start-md">
          <div class="p-2">
            <div class="display-6 fw-extrabold text-primary font-manrope mb-1">4.8x</div>
            <div class="small text-muted fw-bold text-uppercase letter-spacing-wider" style="font-size: 0.72rem;">Average Client ROI</div>
            <div class="text-secondary small mt-1">Across Meta & Google ads</div>
          </div>
        </div>

        <div class="col-6 col-md-3 border-start-md">
          <div class="p-2">
            <div class="display-6 fw-extrabold text-primary font-manrope mb-1">$48M+</div>
            <div class="small text-muted fw-bold text-uppercase letter-spacing-wider" style="font-size: 0.72rem;">Pipeline Generated</div>
            <div class="text-secondary small mt-1">Direct coaching client revenue</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     2. INTERACTIVE ALL 12 SERVICES GRID WITH REAL-TIME SEARCH & FILTER
     ========================================================================== -->
<section id="services-grid" class="py-5 bg-light bg-dot-matrix">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-4">
      <span class="service-pill-tag mb-2">Specialized Capabilities</span>
      <h2 class="display-6 fw-bold text-dark mb-2">Our 12 Specialized Growth Services</h2>
      <p class="text-muted lead fs-6">
        Filter by functional discipline below or search directly for the specific capability your coaching business needs.
      </p>
    </div>

    <!-- Search Input Wrapper -->
    <div class="search-input-wrapper max-w-500 mx-auto mb-4 position-relative">
      <i class="bi bi-search"></i>
      <input 
        type="text" 
        id="servicesSearchInput" 
        class="form-control form-control-lg rounded-pill" 
        placeholder="Search services (e.g. Lead Gen, SEO, GoHighLevel, AI)..."
        aria-label="Search services"
      >
    </div>

    <!-- Filter Nav Strip -->
    <div class="service-filter-bar mb-4 pb-2 d-flex align-items-center justify-content-center gap-2 overflow-x-auto scrollbar-none">
      <button type="button" class="service-filter-pill active" data-filter="all">
        <span class="pill-dot"></span> All 12 Engines <span class="filter-count">12</span>
      </button>
      <button type="button" class="service-filter-pill" data-filter="leads">
        <i class="bi bi-funnel-fill me-1 text-primary"></i> Client Acquisition <span class="filter-count">3</span>
      </button>
      <button type="button" class="service-filter-pill" data-filter="crm">
        <i class="bi bi-cpu-fill me-1 text-primary"></i> Automation & CRM <span class="filter-count">4</span>
      </button>
      <button type="button" class="service-filter-pill" data-filter="web">
        <i class="bi bi-globe-americas me-1 text-primary"></i> Web & Google SEO <span class="filter-count">4</span>
      </button>
      <button type="button" class="service-filter-pill" data-filter="strategy">
        <i class="bi bi-rocket-takeoff-fill me-1 text-primary"></i> Strategic Growth <span class="filter-count">1</span>
      </button>
    </div>

    <!-- 12 Services Cards Grid -->
    <div class="row g-4" id="servicesCardsContainer">
      <?php 
      $categoryMap = [
        'lead-generation' => 'leads',
        'paid-advertising' => 'leads',
        'social-media-marketing' => 'leads',
        'gohighlevel' => 'crm',
        'crm-automation' => 'crm',
        'ai-automation' => 'crm',
        'n8n-automation' => 'crm',
        'reputation-management' => 'crm',
        'website-development' => 'web',
        'sales-funnels' => 'web',
        'seo-for-coaches' => 'web',
        'local-seo' => 'web',
        'coaching-business-growth' => 'strategy'
      ];

      $categoryLabels = [
        'leads' => 'Client Acquisition',
        'crm' => 'Automation & CRM',
        'web' => 'Web & Google SEO',
        'strategy' => 'Strategic Growth'
      ];

      foreach ($services as $index => $svc): 
        $catClass = $categoryMap[$svc['slug']] ?? 'leads';
        $catName = $categoryLabels[$catClass] ?? 'Core Service';
        $slideNum = str_pad($index + 1, 2, '0', STR_PAD_LEFT);
      ?>
        <div class="col-md-6 col-lg-4 service-filter-item" data-category="<?= htmlspecialchars($catClass) ?>">
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

    <!-- Empty State for Search -->
    <div id="noServicesFound" class="d-none text-center py-5">
      <div class="fs-1 text-muted mb-2"><i class="bi bi-search"></i></div>
      <h4 class="fw-bold text-dark mb-1">No Services Match Your Search</h4>
      <p class="text-muted small mb-3">Try searching for keywords like "SEO", "Leads", "CRM", "Ads", or "Automation".</p>
      <button type="button" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-bold" onclick="document.getElementById('servicesSearchInput').value = ''; document.getElementById('servicesSearchInput').dispatchEvent(new Event('input'));">
        Reset Search Filter
      </button>
    </div>
  </div>
</section>

<!-- ==========================================================================
     3. THE 360° SYSTEMS FLYWHEEL: Interconnected Architecture
     ========================================================================== -->
<section class="py-5 bg-white border-top border-bottom position-relative">
  <div class="container py-lg-4">
    <div class="text-center max-w-800 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Interconnected Architecture</span>
      <h2 class="display-6 fw-bold text-dark mb-3">How All 12 Growth Services Connect Together</h2>
      <p class="text-secondary mb-0 fs-6" style="line-height: 1.75;">
        Instead of disconnected vendors pointing fingers, Coaching 360 Growth Lab deploys an interconnected client acquisition flywheel. Marketing attracts attention, funnels convert visitors, GoHighLevel captures leads, AI and SMS nurture prospects in seconds, and high-ticket sales scripts convert them into paying clients.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="p-4 bg-light rounded-4 border h-100 text-center shadow-xs">
          <div class="bg-primary text-white rounded-circle flex-shrink-0 d-inline-flex mb-3 shadow-xs" style="width: 56px; height: 56px; min-width: 56px; min-height: 56px; aspect-ratio: 1 / 1; align-items: center; justify-content: center;">
            <i class="bi bi-megaphone-fill fs-4"></i>
          </div>
          <h5 class="fw-bold text-dark mb-2 font-manrope">1. Inbound Attraction</h5>
          <p class="text-secondary small mb-0" style="line-height: 1.55;">
            Google Search SEO dominance, high-ROAS Meta video funnels, and thought-leadership content capturing high-intent coaching prospects.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="p-4 bg-light rounded-4 border h-100 text-center shadow-xs">
          <div class="bg-success text-white rounded-circle flex-shrink-0 d-inline-flex mb-3 shadow-xs" style="width: 56px; height: 56px; min-width: 56px; min-height: 56px; aspect-ratio: 1 / 1; align-items: center; justify-content: center;">
            <i class="bi bi-funnel-fill fs-4"></i>
          </div>
          <h5 class="fw-bold text-dark mb-2 font-manrope">2. Conversion Funnels</h5>
          <p class="text-secondary small mb-0" style="line-height: 1.55;">
            Direct-response Video Sales Letters, multi-step qualification filters, and Frictionless 1-click booking pages that eliminate tire-kickers.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="p-4 bg-light rounded-4 border h-100 text-center shadow-xs">
          <div class="bg-warning text-white rounded-circle flex-shrink-0 d-inline-flex mb-3 shadow-xs" style="width: 56px; height: 56px; min-width: 56px; min-height: 56px; aspect-ratio: 1 / 1; align-items: center; justify-content: center;">
            <i class="bi bi-cpu-fill fs-4"></i>
          </div>
          <h5 class="fw-bold text-dark mb-2 font-manrope">3. CRM & AI Speed</h5>
          <p class="text-secondary small mb-0" style="line-height: 1.55;">
            Sub-60s automated SMS and email greetings, calendar reminder sequences raising show-up rates past 85%, and instant deal tracking.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="p-4 bg-light rounded-4 border h-100 text-center shadow-xs">
          <div class="bg-info text-white rounded-circle flex-shrink-0 d-inline-flex mb-3 shadow-xs" style="width: 56px; height: 56px; min-width: 56px; min-height: 56px; aspect-ratio: 1 / 1; align-items: center; justify-content: center;">
            <i class="bi bi-award-fill fs-4"></i>
          </div>
          <h5 class="fw-bold text-dark mb-2 font-manrope">4. Retainer Scaling</h5>
          <p class="text-secondary small mb-0" style="line-height: 1.55;">
            High-ticket $3k–$25k offer restructuring, automated 5-star review generation, past-client reactivation, and predictable practice expansion.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     4. INSTITUTIONAL ACCREDITATION & TRUST STRIP: Official Standards
     ========================================================================== -->
<section class="py-5 bg-light border-bottom">
  <div class="container py-lg-4">
    <div class="accreditation-trust-strip">
      <div class="row align-items-center g-4">
        <div class="col-lg-5">
          <span class="badge bg-primary text-white rounded-pill px-3 py-1 fw-bold fs-xs text-uppercase tracking-wider mb-2">
            Certified Growth Partners
          </span>
          <h3 class="fw-bold text-dark mb-2 font-manrope">Enterprise Partnerships & Tech Compliance</h3>
          <p class="text-secondary small mb-0" style="line-height: 1.65;">
            Our growth architects maintain official developer certifications across premier tech ecosystems, ensuring your client data, deliverability, and advertising are strictly compliant.
          </p>
        </div>

        <div class="col-lg-7">
          <div class="row g-3">
            <div class="col-6 col-sm-4">
              <div class="p-3 bg-white rounded-3 border text-center h-100 shadow-xs">
                <i class="bi bi-gear-wide-connected text-primary fs-3 d-block mb-1"></i>
                <div class="fw-bold text-dark small">GoHighLevel</div>
                <div class="text-muted" style="font-size: 0.7rem;">Certified Partner</div>
              </div>
            </div>
            <div class="col-6 col-sm-4">
              <div class="p-3 bg-white rounded-3 border text-center h-100 shadow-xs">
                <i class="bi bi-google text-primary fs-3 d-block mb-1"></i>
                <div class="fw-bold text-dark small">Google Ads</div>
                <div class="text-muted" style="font-size: 0.7rem;">Certified Search Partner</div>
              </div>
            </div>
            <div class="col-6 col-sm-4">
              <div class="p-3 bg-white rounded-3 border text-center h-100 shadow-xs">
                <i class="bi bi-meta text-primary fs-3 d-block mb-1"></i>
                <div class="fw-bold text-dark small">Meta Media</div>
                <div class="text-muted" style="font-size: 0.7rem;">Certified Media Buyer</div>
              </div>
            </div>
            <div class="col-6 col-sm-4">
              <div class="p-3 bg-white rounded-3 border text-center h-100 shadow-xs">
                <i class="bi bi-chat-dots-fill text-success fs-3 d-block mb-1"></i>
                <div class="fw-bold text-dark small">A2P 10DLC</div>
                <div class="text-muted" style="font-size: 0.7rem;">Carrier Approved</div>
              </div>
            </div>
            <div class="col-6 col-sm-4">
              <div class="p-3 bg-white rounded-3 border text-center h-100 shadow-xs">
                <i class="bi bi-shield-lock-fill text-primary fs-3 d-block mb-1"></i>
                <div class="fw-bold text-dark small">NDA Protected</div>
                <div class="text-muted" style="font-size: 0.7rem;">Confidentiality Standard</div>
              </div>
            </div>
            <div class="col-6 col-sm-4">
              <div class="p-3 bg-white rounded-3 border text-center h-100 shadow-xs">
                <i class="bi bi-flag-fill text-danger fs-3 d-block mb-1"></i>
                <div class="fw-bold text-dark small">100% US Based</div>
                <div class="text-muted" style="font-size: 0.7rem;">Dedicated Local Team</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     5. HIGH-CONVERTING WORKSHOP CTA: Request Growth Diagnostic
     ========================================================================== -->
<section class="py-5 position-relative overflow-hidden text-white" style="background: linear-gradient(135deg, #09132b 0%, #0d1e44 100%);">
  <div class="position-absolute top-0 start-0 w-100 h-100 opacity-15" style="background-image: url('assets/images/coaching-workshop.jpg'); background-size: cover; background-position: center; filter: grayscale(100%); pointer-events: none;"></div>

  <div class="container py-lg-5 position-relative text-center max-w-850 mx-auto" style="z-index: 2;">
    <span class="badge bg-primary text-white rounded-pill px-3 py-2 fw-bold text-uppercase letter-spacing-wider mb-3 shadow-brand">
      <i class="bi bi-calendar-check-fill me-1"></i> Free 30-Minute Growth Audit
    </span>

    <h2 class="display-5 fw-extrabold text-white mb-3 font-manrope">
      Ready to Build Your Turnkey Coaching Machine?
    </h2>

    <p class="lead text-light opacity-90 fs-6 mb-4 max-w-700 mx-auto" style="line-height: 1.75;">
      Schedule a complimentary 30-minute growth diagnostic session with a senior US growth architect. We'll identify your single biggest bottleneck and map out your exact system to scale.
    </p>

    <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 mb-4">
      <a href="consultation.php" class="btn btn-primary btn-lg rounded-pill px-5 py-3 fw-bold shadow-brand">
        <span>Claim My Free Growth Consultation</span>
        <i class="bi bi-arrow-right ms-2"></i>
      </a>
      <a href="tel:8005553600" class="btn btn-outline-light btn-lg rounded-pill px-4 py-3 fw-bold">
        <i class="bi bi-telephone-fill me-2"></i>(800) 555-3600
      </a>
    </div>

    <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 gap-md-4 text-light opacity-75 small">
      <span><i class="bi bi-check-circle-fill text-success me-1"></i> 100% Free Strategy Session</span>
      <span>&bull;</span>
      <span><i class="bi bi-shield-check text-primary me-1"></i> Strictly Protected Under NDA</span>
      <span>&bull;</span>
      <span><i class="bi bi-lightning-charge-fill text-warning me-1"></i> Actionable Roadmap Included</span>
    </div>
  </div>
</section>

<!-- Combined Live Filter & Search Logic -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const filterBtns = document.querySelectorAll('.service-filter-pill');
  const items = document.querySelectorAll('.service-filter-item');
  const searchInput = document.getElementById('servicesSearchInput');
  const emptyState = document.getElementById('noServicesFound');

  let activeCategory = 'all';

  function applyFilters() {
    const q = (searchInput?.value || '').toLowerCase().trim();
    let visibleCount = 0;

    items.forEach(item => {
      const itemCat = item.getAttribute('data-category');
      const text = item.innerText.toLowerCase();

      const matchesCategory = (activeCategory === 'all' || itemCat === activeCategory);
      const matchesSearch = (!q || text.includes(q));

      if (matchesCategory && matchesSearch) {
        item.style.display = '';
        item.style.opacity = '1';
        visibleCount++;
      } else {
        item.style.display = 'none';
      }
    });

    if (emptyState) {
      if (visibleCount === 0) {
        emptyState.classList.remove('d-none');
      } else {
        emptyState.classList.add('d-none');
      }
    }
  }

  filterBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      activeCategory = this.getAttribute('data-filter') || 'all';
      applyFilters();
    });
  });

  if (searchInput) {
    searchInput.addEventListener('input', applyFilters);
  }
});
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
