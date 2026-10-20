<?php
$pageTitle = 'Coaching Growth Programs & Accelerators | Coaching 360 Growth Lab USA';
$pageDescription = 'High-impact coaching business accelerators, GoHighLevel masterclasses, and client acquisition bootcamps for US coaching practices.';
$basePath = '';

require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';
?>

<!-- Programs Hub Hero (Awwwards Grade) -->
<section class="services-hub-hero section-ambient-glow position-relative overflow-hidden pt-3 pb-5 bg-white border-bottom">
  <div class="container text-center pb-lg-4 position-relative" style="z-index: 1;">
    <div class="d-inline-flex align-items-center gap-2 mb-3">
      <span class="service-pill-tag">
        <i class="bi bi-mortarboard-fill"></i> Practice Scaling Accelerators
      </span>
      <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-bold">
        <i class="bi bi-broadcast me-1"></i> Live US Cohorts
      </span>
    </div>

    <h1 class="display-4 fw-extrabold text-dark letter-spacing-tight mb-3">
      Coaching Business <span class="text-gradient">Growth Accelerators</span>
    </h1>
    <p class="lead text-secondary max-w-700 mx-auto fs-5 mb-4" style="line-height: 1.7;">
      Intensive, implementation-focused cohorts and masterclasses designed to build your client pipeline, master GoHighLevel automation, package high-ticket offers, and scale past $25,000–$50,000/month.
    </p>

    <div class="d-flex flex-wrap justify-content-center gap-3">
      <a href="consultation.php" class="btn btn-primary btn-lg rounded-pill px-4 py-3 fw-bold shadow-brand">
        <span>Apply for Next Cohort</span>
        <i class="bi bi-arrow-right ms-2"></i>
      </a>
      <a href="services.php" class="btn btn-outline-secondary btn-lg rounded-pill px-4 py-3 fw-bold">
        <i class="bi bi-rocket-takeoff-fill text-primary me-2"></i>Explore 100% Done-For-You Services
      </a>
    </div>

    <!-- Proof Strip -->
    <div class="row g-2 g-md-4 mt-5 p-3 p-md-4 bg-light rounded-4 border shadow-xs justify-content-center text-center">
      <div class="col-6 col-md-3 border-end">
        <div class="fs-2 fw-black text-primary font-manrope">6 Flags</div>
        <div class="small text-muted fw-semibold">Specialized Scaling Tracks</div>
      </div>
      <div class="col-6 col-md-3 border-end">
        <div class="fs-2 fw-black text-primary font-manrope">15 Seats</div>
        <div class="small text-muted fw-semibold">Max Coaches Per Cohort</div>
      </div>
      <div class="col-6 col-md-3 border-end">
        <div class="fs-2 fw-black text-primary font-manrope">100%</div>
        <div class="small text-muted fw-semibold">Turnkey Templates & Stacks</div>
      </div>
      <div class="col-6 col-md-3">
        <div class="fs-2 fw-black text-primary font-manrope">1-on-1</div>
        <div class="small text-muted fw-semibold">Senior US Mentor Review</div>
      </div>
    </div>
  </div>
</section>

<!-- Programs Grid -->
<section class="py-5 bg-light bg-dot-matrix">
  <div class="container py-lg-4">
    <div class="text-center max-w-700 mx-auto mb-5">
      <span class="service-pill-tag mb-2">Curated Practice Accelerators</span>
      <h2 class="display-6 fw-bold text-dark">Active Coaching Growth Accelerators</h2>
      <p class="text-secondary lead fs-6">
        Hands-on execution cohorts combining proven funnel architectures, turnkey software builds, and 1-on-1 strategic mentorship.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($growth_programs as $prog): ?>
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
                <span><i class="bi bi-clock me-1 text-primary"></i><?= htmlspecialchars($prog['duration']) ?></span>
                <span>&bull;</span>
                <span><i class="bi bi-laptop me-1 text-primary"></i><?= htmlspecialchars($prog['format']) ?></span>
              </div>
              <h5 class="fw-bold text-dark mb-2">
                <a href="course-detail.php?slug=<?= htmlspecialchars($prog['slug']) ?>" class="text-decoration-none text-dark hover-primary">
                  <?= htmlspecialchars($prog['title']) ?>
                </a>
              </h5>
              <p class="text-secondary small mb-3" style="line-height: 1.55;">
                <?= htmlspecialchars($prog['tagline']) ?>
              </p>

              <h6 class="fw-bold text-dark small text-uppercase mb-2">Curriculum Highlights:</h6>
              <ul class="service-feature-checklist mb-4">
                <?php foreach (array_slice($prog['curriculum'], 0, 3) as $c): ?>
                  <li><?= htmlspecialchars($c) ?></li>
                <?php endforeach; ?>
              </ul>

              <div class="d-flex flex-column gap-2 mt-auto">
                <a href="course-detail.php?slug=<?= htmlspecialchars($prog['slug']) ?>" class="btn btn-primary rounded-pill py-2 fw-bold shadow-xs">
                  <span>View Program Syllabus</span>
                  <i class="bi bi-arrow-right ms-1"></i>
                </a>
                <a href="consultation.php?program=<?= urlencode($prog['slug']) ?>" class="btn btn-outline-secondary btn-sm rounded-pill py-2 fw-semibold">
                  <i class="bi bi-calendar-check me-1"></i> Check Cohort Availability
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Done-For-You vs Accelerator Callout -->
<section class="py-5 bg-white border-top border-bottom">
  <div class="container py-lg-4">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-lg-6">
        <span class="service-pill-tag mb-2">Tailored Engagement Model</span>
        <h2 class="display-6 fw-bold text-dark mb-3">Done-With-You or 100% Done-For-You?</h2>
        <p class="text-secondary fs-6 mb-4" style="line-height: 1.75;">
          Whether you want your internal team trained to manage your commercial growth, or you prefer our full-service US team to build and manage your complete GoHighLevel, funnel, and ad infrastructure, we have a model that fits your operational goals.
        </p>
        <div class="row g-3">
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border h-100">
              <h6 class="fw-bold mb-1 text-dark"><i class="bi bi-mortarboard text-primary me-2"></i>Growth Accelerators</h6>
              <p class="small text-muted mb-0">Cohort learning, templates, weekly group coaching, and syllabus for do-it-with-you scale.</p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="p-3 bg-light rounded-3 border h-100">
              <h6 class="fw-bold mb-1 text-dark"><i class="bi bi-rocket-takeoff text-primary me-2"></i>Turnkey Agency</h6>
              <p class="small text-muted mb-0">100% done-for-you technical build, ad management, funnels, and Google SEO dominance.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="p-4 p-md-5 bg-light rounded-4 border text-center shadow-xs">
          <div class="fs-1 text-primary mb-2"><i class="bi bi-compass-fill"></i></div>
          <h4 class="fw-bold text-dark mb-2">Not Sure Which Track Is Right?</h4>
          <p class="small text-muted mb-4">
            Schedule a 30-minute growth diagnostic session. We will evaluate your current practice revenue, capacity, and goals to recommend the ideal path.
          </p>
          <a href="consultation.php" class="btn btn-primary rounded-pill px-4 py-3 fw-bold shadow-brand w-100">
            <span>Schedule Growth Consultation</span>
            <i class="bi bi-arrow-right ms-2"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
