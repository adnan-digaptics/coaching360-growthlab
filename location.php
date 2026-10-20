<?php
require_once __DIR__ . '/includes/data.php';

$citySlug = clean_slug($_GET['city'] ?? 'new-york', 'new-york');
$location = getLocationBySlug($citySlug, $top_locations);

if (!$location) {
    $location = [
        'slug' => 'new-york',
        'city' => 'New York',
        'state' => 'NY',
        'metro' => 'New York Metro Area',
        'coaches_served' => '240+'
    ];
}

$pageTitle = 'Coaching Client Acquisition & SEO in ' . $location['city'] . ', ' . $location['state'] . ' | Coaching 360 Growth Lab USA';
$pageDescription = 'Scale your coaching business in ' . $location['city'] . '. Dominate Google Local 3-Pack, launch high-converting sales funnels, and generate qualified clients across ' . $location['metro'] . '.';
$basePath = '';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Location Breadcrumb Strip -->
<section class="py-3 bg-light border-bottom">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 small">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted"><i class="bi bi-house-door me-1"></i>Home</a></li>
        <li class="breadcrumb-item text-muted">US Markets</li>
        <li class="breadcrumb-item active fw-bold text-primary" aria-current="page"><?= htmlspecialchars($location['city']) ?>, <?= htmlspecialchars($location['state']) ?></li>
      </ol>
    </nav>
  </div>
</section>

<!-- Location Hero (Awwwards Grade) -->
<section class="service-detail-hero section-ambient-glow position-relative overflow-hidden">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-lg-7">
        <span class="service-pill-tag mb-3">
          <i class="bi bi-geo-alt-fill text-danger"></i> Local Market Authority &bull; <?= htmlspecialchars($location['metro']) ?>
        </span>
        <h1 class="display-4 fw-extrabold text-dark letter-spacing-tight mb-3">
          Coaching Client Acquisition in <span class="text-gradient"><?= htmlspecialchars($location['city']) ?>, <?= htmlspecialchars($location['state']) ?></span>
        </h1>
        <p class="lead text-secondary mb-4 fs-5" style="line-height: 1.7;">
          High-earning executives, entrepreneurs, and families in <?= htmlspecialchars($location['metro']) ?> are actively searching Google for trusted coaches right now. We build the client acquisition engine that places your coaching practice at the very top.
        </p>

        <div class="row g-2 g-sm-3 mb-4 py-3 bg-white rounded-4 border shadow-xs px-2 text-center">
          <div class="col-4 border-end">
            <div class="fs-4 fw-black text-primary font-manrope">#1</div>
            <div class="small text-muted" style="font-size: 0.72rem;">Google Local 3-Pack</div>
          </div>
          <div class="col-4 border-end">
            <div class="fs-4 fw-black text-primary font-manrope"><?= htmlspecialchars($location['coaches_served']) ?></div>
            <div class="small text-muted" style="font-size: 0.72rem;">Coaches Served</div>
          </div>
          <div class="col-4">
            <div class="fs-4 fw-black text-primary font-manrope">24/7</div>
            <div class="small text-muted" style="font-size: 0.72rem;">Inbound Pipeline</div>
          </div>
        </div>

        <div class="d-flex flex-wrap gap-3">
          <a href="#consultation" class="btn btn-primary btn-lg rounded-pill px-4 py-3 fw-bold shadow-brand">
            <span>Get a Free Growth Consultation</span>
            <i class="bi bi-arrow-down-circle ms-2"></i>
          </a>
          <a href="services/local-seo.php" class="btn btn-outline-secondary btn-lg rounded-pill px-4 py-3 fw-bold">
            Explore Local SEO Services
          </a>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="p-4 p-md-5 bg-white rounded-4 border shadow-lg">
          <h5 class="fw-bold text-dark mb-3">How We Scale Coaches in <?= htmlspecialchars($location['city']) ?>:</h5>
          <ul class="service-feature-checklist mb-4">
            <li>Google Business Profile (GBP) Local 3-Pack Optimization</li>
            <li>Geo-Targeted City Landing Pages across <?= htmlspecialchars($location['metro']) ?></li>
            <li>Targeted Meta & Google Ads for High-Income Zip Codes</li>
            <li>Automated 5-Star Local Google Review Collection</li>
            <li>GoHighLevel CRM with Sub-60s Local SMS Follow-Up</li>
          </ul>
          <div class="p-3 bg-light rounded-3 text-center">
            <span class="small fw-bold text-primary">
              <i class="bi bi-shield-check me-1"></i> Dedicated US Regional Strategy
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Other Cities Grid -->
<section class="py-5 bg-white border-top border-bottom">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-4">
      <span class="service-pill-tag mb-2">Nationwide Coverage</span>
      <h3 class="fw-bold text-dark">We Help Coaches Scale Across All 50 States</h3>
      <p class="text-muted small">Select another major US metropolitan coaching market:</p>
    </div>

    <div class="row g-2 g-md-3 justify-content-center text-center">
      <?php foreach ($top_locations as $loc): ?>
        <div class="col-6 col-md-3 col-lg-2">
          <a href="location.php?city=<?= htmlspecialchars($loc['slug']) ?>" class="p-3 bg-light rounded-3 border d-block text-decoration-none transition-hover <?= $loc['slug'] === $location['slug'] ? 'border-primary bg-primary-subtle' : '' ?>">
            <div class="fw-bold text-dark small"><?= htmlspecialchars($loc['city']) ?></div>
            <small class="text-muted" style="font-size: 0.72rem;"><?= htmlspecialchars($loc['state']) ?></small>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- In-Page Consultation -->
<section id="consultation" class="py-5 bg-light">
  <div class="container py-lg-4">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-lg-5">
        <span class="service-pill-tag mb-2">Local Market Audit</span>
        <h2 class="display-6 fw-bold text-dark mb-3">
          Schedule Your Free <?= htmlspecialchars($location['city']) ?> Coaching Audit
        </h2>
        <p class="text-secondary mb-4 fs-6" style="line-height: 1.7;">
          Let's review your local Google Maps positioning, competitors in <?= htmlspecialchars($location['city']) ?>, and current client acquisition leaks.
        </p>
      </div>

      <div class="col-lg-7">
        <div class="service-booking-card">
          <h4 class="fw-bold text-dark mb-1">Request Local Market Consultation</h4>
          <p class="text-muted small mb-4">Targeting <?= htmlspecialchars($location['metro']) ?></p>

          <form onsubmit="event.preventDefault(); document.getElementById('cityFormSuccess').classList.remove('d-none'); this.classList.add('d-none');">
            <input type="hidden" name="location" value="<?= htmlspecialchars($location['slug']) ?>">

            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label small fw-bold text-dark">Your Name *</label>
                <input type="text" class="form-control" placeholder="e.g. John Doe" required>
              </div>
              <div class="col-md-6">
                <label class="form-label small fw-bold text-dark">Business Email *</label>
                <input type="email" class="form-control" placeholder="e.g. john@coaching.com" required>
              </div>
              <div class="col-md-6">
                <label class="form-label small fw-bold text-dark">Phone / WhatsApp *</label>
                <input type="tel" class="form-control" placeholder="+1 (555) 000-0000" required>
              </div>
              <div class="col-md-6">
                <label class="form-label small fw-bold text-dark">Coaching Niche *</label>
                <input type="text" class="form-control" placeholder="e.g. Executive, Health, Life, Career" required>
              </div>
              <div class="col-12">
                <label class="form-label small fw-bold text-dark">Current Monthly Coaching Revenue</label>
                <select class="form-select">
                  <option value="under-5k">Under $5k / mo</option>
                  <option value="5k-15k" selected>$5k – $15k / mo</option>
                  <option value="15k-30k">$15k – $30k / mo</option>
                  <option value="30k-plus">$30k+ / mo</option>
                </select>
              </div>
              <div class="col-12 pt-2">
                <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill py-3 fw-bold shadow-brand">
                  <span>Schedule Free <?= htmlspecialchars($location['city']) ?> Audit</span>
                  <i class="bi bi-arrow-right ms-2"></i>
                </button>
              </div>
            </div>
          </form>

          <div id="cityFormSuccess" class="alert alert-success d-none text-center p-4 rounded-4" role="alert">
            <div class="fs-1 text-success mb-2"><i class="bi bi-check-circle-fill"></i></div>
            <h4 class="fw-bold mb-1">Local Diagnostic Requested!</h4>
            <p class="mb-3 small text-secondary">
              Thank you! Our regional growth specialist for <?= htmlspecialchars($location['city']) ?> will review your local market footprint and reach out within 2 hours.
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
