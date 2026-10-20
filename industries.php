<?php
$pageTitle = 'Target Coaching Industries & Niches | Coaching 360 Growth Lab USA';
$pageDescription = 'Specialized client acquisition and marketing systems for Business, Life, Health, Relationship, Financial, and Academic Coaches across the United States.';
$basePath = '';

require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';

// Calculate total niches dynamically
$totalNiches = 0;
foreach ($industries as $cat) {
    $totalNiches += count($cat['niches']);
}

// Category tags mapping for card visual richness
$categoryTags = [
    'business-professional' => ['B2B Funnels', 'High-Ticket', 'LinkedIn Outbound'],
    'life-personal' => ['Direct-Response Web', 'Mindset Funnel', 'Meta Ads'],
    'health-wellness' => ['HIPAA-Ready CRM', 'Application Funnel', 'SMS AI'],
    'relationship-family' => ['Private Practice SEO', 'Google 3-Pack', 'Automated Booking'],
    'financial' => ['Affluent ICP Targeting', 'Webinars', 'High-Trust Positioning'],
    'education-student' => ['Parent Funnels', 'Admissions Authority', 'Local Search']
];
?>

<!-- ==========================================================================
     1. INDUSTRIES HUB HERO: High-Impact Specialization Platform
     ========================================================================== -->
<section class="services-hub-hero section-ambient-glow position-relative overflow-hidden pt-4 pb-5 bg-white border-bottom">
  <div class="container text-center pb-lg-4 position-relative" style="z-index: 2;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="mb-3 d-inline-block">
      <ol class="breadcrumb justify-content-center small text-muted mb-0">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted">Home</a></li>
        <li class="breadcrumb-item active text-primary fw-bold" aria-current="page">Coaching Industries</li>
      </ol>
    </nav>

    <!-- Authority Kicker Pill -->
    <div class="d-flex flex-wrap justify-content-center align-items-center gap-2 mb-3">
      <span class="service-pill-tag">
        <span class="award-pulse-dot"></span> Specialized Coaching Sectors
      </span>
      <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold fs-xs text-uppercase tracking-wider">
        <i class="bi bi-award-fill me-1"></i> <?= $totalNiches ?>+ Coaching Niches Served Across USA
      </span>
    </div>

    <!-- Main Heading -->
    <h1 class="display-4 fw-extrabold text-dark letter-spacing-tight mb-3 max-w-950 mx-auto">
      Growth Solutions for <span class="text-gradient">Every Coaching Practice</span>
    </h1>

    <p class="lead text-secondary max-w-750 mx-auto fs-5 mb-4" style="line-height: 1.75;">
      From C-Suite executive coaches in New York to holistic functional medicine practitioners in California, we engineer bespoke client generation engines calibrated to your unique target audience, authority positioning, and high-ticket methodology.
    </p>

    <!-- Primary Actions -->
    <div class="d-flex flex-wrap justify-content-center align-items-center gap-3 mb-5">
      <a href="consultation.php" class="btn btn-primary btn-lg rounded-pill px-4 py-3 fw-bold shadow-brand">
        <span>Get Your Free Growth Consultation</span>
        <i class="bi bi-arrow-right ms-2"></i>
      </a>
      <a href="#niches-directory" class="btn btn-outline-dark btn-lg rounded-pill px-4 py-3 fw-bold">
        <i class="bi bi-grid-3x3-gap-fill text-primary me-2"></i>Explore All <?= $totalNiches ?> Niches
      </a>
    </div>

    <!-- Unified Impact Stats Bar -->
    <div class="about-stats-container max-w-1000 mx-auto">
      <div class="row g-3 g-md-4 text-center justify-content-center align-items-center">
        <div class="col-6 col-md-3">
          <div class="p-2">
            <div class="display-6 fw-extrabold text-primary font-manrope mb-1"><?= count($industries) ?></div>
            <div class="small text-muted fw-bold text-uppercase letter-spacing-wider" style="font-size: 0.72rem;">Core Sectors</div>
            <div class="text-secondary small mt-1">From Business to Health</div>
          </div>
        </div>

        <div class="col-6 col-md-3 border-start-md">
          <div class="p-2">
            <div class="display-6 fw-extrabold text-primary font-manrope mb-1"><?= $totalNiches ?>+</div>
            <div class="small text-muted fw-bold text-uppercase letter-spacing-wider" style="font-size: 0.72rem;">Niche Blueprints</div>
            <div class="text-secondary small mt-1">Calibrated client engines</div>
          </div>
        </div>

        <div class="col-6 col-md-3 border-start-md">
          <div class="p-2">
            <div class="display-6 fw-extrabold text-primary font-manrope mb-1">4.8x</div>
            <div class="small text-muted fw-bold text-uppercase letter-spacing-wider" style="font-size: 0.72rem;">Average ROAS</div>
            <div class="text-secondary small mt-1">Across niche ad funnels</div>
          </div>
        </div>

        <div class="col-6 col-md-3 border-start-md">
          <div class="p-2">
            <div class="display-6 fw-extrabold text-primary font-manrope mb-1">$48M+</div>
            <div class="small text-muted fw-bold text-uppercase letter-spacing-wider" style="font-size: 0.72rem;">Client Revenue</div>
            <div class="text-secondary small mt-1">Closed by partner coaches</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     2. INTERACTIVE NICHE DIRECTORY WITH LIVE SEARCH & CATEGORY JUMP TABS
     ========================================================================== -->
<section id="niches-directory" class="py-5 bg-light bg-dot-matrix">
  <div class="container py-lg-4">
    <div class="text-center max-w-750 mx-auto mb-4">
      <span class="service-pill-tag mb-2">Specialized Directory</span>
      <h2 class="display-6 fw-bold text-dark mb-2">Explore All <?= $totalNiches ?> Specialized Coaching Niches</h2>
      <p class="text-muted lead fs-6">
        Search for your exact coaching specialty or jump directly to your core discipline below.
      </p>
    </div>

    <!-- Real-time Niche Search Bar -->
    <div class="search-input-wrapper max-w-550 mx-auto mb-4 position-relative">
      <i class="bi bi-search"></i>
      <input 
        type="text" 
        id="nicheSearchInput" 
        class="form-control form-control-lg rounded-pill" 
        placeholder="Search your coaching niche (e.g. Executive, Health, Mindset, Sales)..."
        aria-label="Search coaching niches"
      >
      <button 
        type="button" 
        id="clearSearchBtn" 
        class="btn btn-link text-muted position-absolute end-0 top-50 translate-middle-y me-3 p-0 d-none" 
        style="text-decoration: none;"
        aria-label="Clear search"
      >
        <i class="bi bi-x-circle-fill fs-5"></i>
      </button>
    </div>

    <!-- Live Match Count Pill -->
    <div class="text-center mb-4">
      <span id="nicheMatchCount" class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-3 py-1.5 fw-bold fs-xs">
        Showing all <?= $totalNiches ?> niches
      </span>
    </div>

    <!-- Category Filter / Jump Tabs -->
    <div class="industries-filter-strip mb-5">
      <button type="button" class="industry-filter-btn active" data-filter="all">
        <i class="bi bi-grid-fill text-primary"></i> All Sectors <span class="badge-count"><?= $totalNiches ?></span>
      </button>
      <?php foreach ($industries as $cKey => $cVal): ?>
        <button type="button" class="industry-filter-btn" data-filter="<?= htmlspecialchars($cKey) ?>">
          <i class="bi <?= htmlspecialchars($cVal['category_icon']) ?> text-primary"></i> 
          <?= htmlspecialchars($cVal['category_name']) ?> 
          <span class="badge-count"><?= count($cVal['niches']) ?></span>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Categories & Cards Directory -->
    <div id="nichesContainer">
      <?php foreach ($industries as $catKey => $cat): 
        $catCount = count($cat['niches']);
        $tags = $categoryTags[$catKey] ?? ['Client Acquisition', 'CRM Automations', 'High-Ticket'];
      ?>
        <div class="mb-5 pb-4 border-bottom last-no-border niche-category-block" id="cat-<?= htmlspecialchars($catKey) ?>" data-category="<?= htmlspecialchars($catKey) ?>">
          <!-- Category Header -->
          <div class="niche-category-header">
            <div class="niche-category-icon-box shadow-sm">
              <i class="bi <?= htmlspecialchars($cat['category_icon']) ?>"></i>
            </div>
            <div>
              <div class="d-flex align-items-center gap-2 flex-wrap mb-1">
                <h3 class="fw-extrabold text-dark mb-0 font-manrope fs-4"><?= htmlspecialchars($cat['category_name']) ?></h3>
                <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill px-2.5 py-1 small fw-bold">
                  <?= $catCount ?> Specialized Niches
                </span>
              </div>
              <p class="text-muted small mb-0 max-w-750"><?= htmlspecialchars($cat['description']) ?></p>
            </div>
          </div>

          <!-- Niche Cards Grid -->
          <div class="row g-3 g-md-4 mt-1">
            <?php foreach ($cat['niches'] as $niche): ?>
              <div class="col-md-6 col-lg-4 niche-card-wrapper" data-category="<?= htmlspecialchars($catKey) ?>">
                <a href="industry.php?slug=<?= htmlspecialchars($niche['slug']) ?>" class="text-decoration-none h-100 d-block">
                  <div class="niche-preview-card">
                    <div>
                      <div class="niche-card-header">
                        <span class="niche-card-category-badge">
                          <i class="bi <?= htmlspecialchars($cat['category_icon']) ?>"></i>
                          <?= htmlspecialchars($cat['category_name']) ?>
                        </span>
                        <div class="niche-card-arrow-wrap">
                          <i class="bi bi-arrow-up-right"></i>
                        </div>
                      </div>

                      <h4 class="niche-card-title"><?= htmlspecialchars($niche['name']) ?></h4>

                      <p class="niche-card-desc">
                        <?= htmlspecialchars($niche['tagline']) ?>
                      </p>

                      <div class="niche-pill-tags">
                        <?php foreach ($tags as $tag): ?>
                          <span class="niche-pill-tag">
                            <i class="bi bi-check2 text-primary me-0.5"></i> <?= htmlspecialchars($tag) ?>
                          </span>
                        <?php endforeach; ?>
                      </div>
                    </div>

                    <div class="niche-preview-action">
                      <span>Explore Client Engine</span>
                      <i class="bi bi-chevron-right fs-xs"></i>
                    </div>
                  </div>
                </a>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Empty State for Search -->
    <div id="noNichesFound" class="d-none text-center py-5">
      <div class="fs-1 text-muted mb-3"><i class="bi bi-search"></i></div>
      <h4 class="fw-bold text-dark mb-1">No Coaching Niches Match Your Search</h4>
      <p class="text-muted small mb-4 max-w-500 mx-auto">
        We couldn't find a niche matching your query. We design custom systems for all unlisted specialties.
      </p>
      <div class="d-flex justify-content-center gap-3">
        <button type="button" id="resetSearchBtn" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-bold">
          <i class="bi bi-arrow-counterclockwise me-1"></i> Reset Search Filter
        </button>
        <a href="consultation.php" class="btn btn-primary rounded-pill px-4 py-2 fw-bold">
          Request Custom Niche Setup
        </a>
      </div>
    </div>

    <!-- Specialized & Custom Coaching Niches Callout -->
    <div class="mt-5">
      <div class="custom-niche-card">
        <div class="row align-items-center position-relative" style="z-index: 2;">
          <div class="col-lg-8 mb-4 mb-lg-0 text-center text-lg-start">
            <span class="badge bg-white-20 text-white rounded-pill px-3 py-1.5 fw-bold text-uppercase tracking-wider fs-xs mb-3 border border-white-30">
              <i class="bi bi-stars text-warning me-1"></i> Custom & Emerging Disciplines
            </span>
            <h3 class="fw-extrabold text-white display-6 mb-3 font-manrope">
              Don't See Your Exact Coaching Specialization Listed?
            </h3>
            <p class="text-white-80 lead fs-6 mb-0 max-w-750" style="line-height: 1.7;">
              Coaching 360 Growth Lab designs scalable, customized marketing funnels and GoHighLevel client acquisition systems for any coaching specialty, including spiritual coaching, grief recovery, voice & accent coaching, neurodivergent (ADHD) guides, and emerging wellness practices.
            </p>
          </div>
          <div class="col-lg-4 text-center text-lg-end">
            <a href="consultation.php" class="btn btn-light btn-lg rounded-pill px-4 py-3 fw-bold shadow-lg text-primary hover-scale">
              <span>Book Custom Niche Consultation</span>
              <i class="bi bi-arrow-right ms-2 text-primary"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     3. THE 4-STAGE NICHE CALIBRATION ARCHITECTURE
     ========================================================================== -->
<section class="py-5 bg-white border-top border-bottom position-relative">
  <div class="container py-lg-4">
    <div class="text-center max-w-800 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Bespoke Methodology</span>
      <h2 class="display-6 fw-bold text-dark mb-3">How We Calibrate Growth for Your Specific Niche</h2>
      <p class="text-secondary mb-0 fs-6" style="line-height: 1.75;">
        Every coaching sector has distinct buyer psychology, objections, and price points. We never deploy generic templates; each client acquisition engine is calibrated to your ideal client profile.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="flywheel-step-card h-100">
          <div class="flywheel-step-number">01</div>
          <div class="flywheel-icon-wrap mb-3">
            <i class="bi bi-person-bounding-box"></i>
          </div>
          <h5 class="fw-bold text-dark mb-2">ICP Demographic Profiling</h5>
          <p class="small text-secondary mb-0">
            We extract your high-ticket client's exact emotional pain points, career stakes, or health plateaus to craft messaging that commands instant authority.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="flywheel-step-card h-100">
          <div class="flywheel-step-number">02</div>
          <div class="flywheel-icon-wrap mb-3">
            <i class="bi bi-box-seam-fill"></i>
          </div>
          <h5 class="fw-bold text-dark mb-2">High-Ticket Offer Packaging</h5>
          <p class="small text-secondary mb-0">
            We transform commoditized single sessions into an irresistible $3k to $15k transformation program with clear milestones and deliverables.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="flywheel-step-card h-100">
          <div class="flywheel-step-number">03</div>
          <div class="flywheel-icon-wrap mb-3">
            <i class="bi bi-crosshair2"></i>
          </div>
          <h5 class="fw-bold text-dark mb-2">Targeted Inbound Channels</h5>
          <p class="small text-secondary mb-0">
            We launch the exact channel suited to your audience: LinkedIn for executives, Meta for personal growth, or Google Local 3-Pack for private clinics.
          </p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="flywheel-step-card h-100">
          <div class="flywheel-step-number">04</div>
          <div class="flywheel-icon-wrap mb-3">
            <i class="bi bi-robot"></i>
          </div>
          <h5 class="fw-bold text-dark mb-2">24/7 AI Qualification & CRM</h5>
          <p class="small text-secondary mb-0">
            Certified GoHighLevel automation, sub-60-second SMS responses, and intelligent calendar screening maximize your discovery call show-up rate past 85%.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     4. ENTERPRISE ACCREDITATIONS & TRUST STRIP
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
     5. HIGH-IMPACT WORKSHOP & CONSULTATION CTA
     ========================================================================== -->
<section class="py-5 bg-white position-relative">
  <div class="container py-lg-4">
    <div class="about-cta-card text-center text-white position-relative overflow-hidden p-4 p-md-5 rounded-5 shadow-2xl">
      <div class="position-relative" style="z-index: 2;">
        <span class="badge bg-white-20 text-white rounded-pill px-3 py-1.5 fw-bold text-uppercase tracking-wider fs-xs mb-3 border border-white-30">
          <i class="bi bi-lightning-charge-fill text-warning me-1"></i> Zero-Risk Niche Growth Strategy
        </span>
        <h2 class="display-5 fw-extrabold mb-3 text-white font-manrope">
          Ready to Build a High-Ticket Client Engine for Your Practice?
        </h2>
        <p class="lead text-white-80 max-w-750 mx-auto mb-4 fs-6" style="line-height: 1.75;">
          Join 250+ certified coaches across the United States who have replaced volatile word-of-mouth with institutional-grade client generation and GoHighLevel automation.
        </p>
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-3">
          <a href="consultation.php" class="btn btn-light btn-lg rounded-pill px-5 py-3 fw-bold text-primary shadow-brand hover-scale">
            <span>Book Your Free Niche Consultation</span>
            <i class="bi bi-arrow-right ms-2 text-primary"></i>
          </a>
          <a href="case-studies.php" class="btn btn-outline-light btn-lg rounded-pill px-4 py-3 fw-bold">
            <i class="bi bi-graph-up-arrow me-2"></i>Explore Verified Case Studies
          </a>
        </div>
        <div class="mt-4 pt-2 d-flex flex-wrap justify-content-center align-items-center gap-4 text-white-70 fs-xs">
          <span><i class="bi bi-check-circle-fill text-accent-green me-1"></i> Free 30-Minute Growth Audit</span>
          <span><i class="bi bi-check-circle-fill text-accent-green me-1"></i> Custom GHL Snapshot Demo</span>
          <span><i class="bi bi-check-circle-fill text-accent-green me-1"></i> No Long-Term Contracts</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ==========================================================================
     6. REAL-TIME SEARCH & FILTER SCRIPT
     ========================================================================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  const searchInput = document.getElementById('nicheSearchInput');
  const clearBtn = document.getElementById('clearSearchBtn');
  const matchCount = document.getElementById('nicheMatchCount');
  const noNichesFound = document.getElementById('noNichesFound');
  const resetSearchBtn = document.getElementById('resetSearchBtn');
  const filterBtns = document.querySelectorAll('.industry-filter-btn');
  const catBlocks = document.querySelectorAll('.niche-category-block');
  const cards = document.querySelectorAll('.niche-card-wrapper');
  
  const totalCardsCount = cards.length;
  let activeFilter = 'all';

  function applyFilters() {
    const q = (searchInput?.value || '').toLowerCase().trim();
    let visibleCount = 0;

    // Toggle clear button
    if (clearBtn) {
      if (q.length > 0) {
        clearBtn.classList.remove('d-none');
      } else {
        clearBtn.classList.add('d-none');
      }
    }

    // Filter cards
    cards.forEach(card => {
      const cardCat = card.getAttribute('data-category');
      const title = card.querySelector('.niche-card-title')?.innerText.toLowerCase() || '';
      const desc = card.querySelector('.niche-card-desc')?.innerText.toLowerCase() || '';
      const badge = card.querySelector('.niche-card-category-badge')?.innerText.toLowerCase() || '';

      const matchesCategory = (activeFilter === 'all' || cardCat === activeFilter);
      const matchesQuery = (!q || title.includes(q) || desc.includes(q) || badge.includes(q));

      if (matchesCategory && matchesQuery) {
        card.style.display = 'block';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });

    // Update Category Blocks Visibility
    catBlocks.forEach(block => {
      const blockCat = block.getAttribute('data-category');
      const categoryMatches = (activeFilter === 'all' || blockCat === activeFilter);
      const visibleChildCards = block.querySelectorAll('.niche-card-wrapper:not([style*="display: none"])');

      if (categoryMatches && visibleChildCards.length > 0) {
        block.style.display = 'block';
      } else {
        block.style.display = 'none';
      }
    });

    // Update Counter Text
    if (matchCount) {
      if (!q && activeFilter === 'all') {
        matchCount.innerText = `Showing all ${totalCardsCount} niches`;
      } else {
        matchCount.innerText = `Found ${visibleCount} of ${totalCardsCount} niches`;
      }
    }

    // Empty state
    if (noNichesFound) {
      if (visibleCount === 0) {
        noNichesFound.classList.remove('d-none');
      } else {
        noNichesFound.classList.add('d-none');
      }
    }
  }

  // Search input event
  if (searchInput) {
    searchInput.addEventListener('input', applyFilters);
  }

  // Clear button click
  if (clearBtn) {
    clearBtn.addEventListener('click', function() {
      searchInput.value = '';
      applyFilters();
      searchInput.focus();
    });
  }

  // Reset button click
  if (resetSearchBtn) {
    resetSearchBtn.addEventListener('click', function() {
      if (searchInput) searchInput.value = '';
      activeFilter = 'all';
      filterBtns.forEach(btn => {
        if (btn.getAttribute('data-filter') === 'all') {
          btn.classList.add('active');
        } else {
          btn.classList.remove('active');
        }
      });
      applyFilters();
    });
  }

  // Category filter buttons
  filterBtns.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      activeFilter = this.getAttribute('data-filter');

      applyFilters();

      // If a specific category was clicked and it's visible, smoothly scroll to it
      if (activeFilter !== 'all') {
        const targetBlock = document.getElementById('cat-' + activeFilter);
        if (targetBlock && targetBlock.style.display !== 'none') {
          targetBlock.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      }
    });
  });
});
</script>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
