<?php
require_once __DIR__ . '/includes/data.php';

$slug = clean_slug($_GET['slug'] ?? 'client-acquisition-accelerator', 'client-acquisition-accelerator');
$program = getProgramBySlug($slug, $growth_programs);

if (!$program) {
    $program = $growth_programs[0];
}

$pageTitle = $program['title'] . ' | Coaching 360 Growth Lab USA';
$pageDescription = $program['tagline'];
$basePath = '';

require_once __DIR__ . '/includes/header.php';
?>

<!-- Breadcrumbs -->
<section class="py-3 bg-light border-bottom">
  <div class="container">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0 small">
        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none text-muted"><i class="bi bi-house-door me-1"></i>Home</a></li>
        <li class="breadcrumb-item"><a href="courses.php" class="text-decoration-none text-muted">Programs & Accelerators</a></li>
        <li class="breadcrumb-item active fw-bold text-primary" aria-current="page"><?= htmlspecialchars($program['title']) ?></li>
      </ol>
    </nav>
  </div>
</section>

<!-- Program Hero (Awwwards Grade) -->
<section class="service-detail-hero section-ambient-glow position-relative overflow-hidden">
  <div class="container">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-lg-7">
        <div class="d-inline-flex align-items-center gap-2 mb-3">
          <span class="service-pill-tag">
            <i class="bi <?= htmlspecialchars($program['icon']) ?>"></i>
            <?= htmlspecialchars($program['badge']) ?>
          </span>
          <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill fw-bold">
            <i class="bi bi-check-circle-fill me-1"></i> Applications Open
          </span>
        </div>

        <h1 class="display-5 fw-extrabold text-dark letter-spacing-tight mb-3">
          <?= htmlspecialchars($program['title']) ?>
        </h1>

        <p class="lead text-secondary mb-4 fs-5" style="line-height: 1.6;">
          <?= htmlspecialchars($program['tagline']) ?>
        </p>

        <!-- Program Meta Box -->
        <div class="row g-2 g-sm-3 mb-4 py-3 bg-white rounded-4 border shadow-xs px-2">
          <div class="col-4 text-center py-1 border-end">
            <div class="small text-muted fw-semibold" style="font-size: 0.72rem;">DURATION</div>
            <div class="fs-5 fw-bold text-dark font-manrope"><?= htmlspecialchars($program['duration']) ?></div>
          </div>
          <div class="col-4 text-center py-1 border-end">
            <div class="small text-muted fw-semibold" style="font-size: 0.72rem;">FORMAT</div>
            <div class="fs-5 fw-bold text-dark font-manrope"><?= htmlspecialchars($program['format']) ?></div>
          </div>
          <div class="col-4 text-center py-1">
            <div class="small text-muted fw-semibold" style="font-size: 0.72rem;">LEVEL</div>
            <div class="fs-5 fw-bold text-dark font-manrope"><?= htmlspecialchars($program['level']) ?></div>
          </div>
        </div>

        <div class="d-flex flex-wrap align-items-center gap-3 pt-2">
          <a href="#apply-section" class="btn btn-primary btn-lg rounded-pill px-4 py-3 shadow-brand fw-bold">
            <span>Apply for Next Cohort</span>
            <i class="bi bi-arrow-down-circle ms-2"></i>
          </a>
          <a href="consultation.php" class="btn btn-outline-dark btn-lg rounded-pill px-4 py-3 fw-bold">
            <i class="bi bi-calendar2-check text-primary me-1"></i> Book Diagnostic Call
          </a>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="service-hero-visual">
          <div class="service-hero-img-wrap">
            <img src="<?= $basePath ?><?= htmlspecialchars($program['image']) ?>" alt="<?= htmlspecialchars($program['title']) ?>" class="img-fluid" loading="eager" decoding="async">
          </div>
          <div class="service-floating-stat-box">
            <div class="service-floating-icon">
              <i class="bi <?= htmlspecialchars($program['icon']) ?>"></i>
            </div>
            <div>
              <div class="fw-bold text-dark">Practitioner Mentorship</div>
              <div class="text-muted small">Live Weekly Cohort Reviews & 1-on-1 Implementation</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Syllabus & Outcomes -->
<section class="py-5 bg-white border-bottom">
  <div class="container py-lg-4">
    <div class="row g-5">
      <!-- Left: Curriculum -->
      <div class="col-lg-7">
        <span class="service-pill-tag mb-2">Curriculum Roadmap</span>
        <h2 class="display-6 fw-bold text-dark mb-4">Complete Program Syllabus</h2>

        <div class="d-flex flex-column gap-3">
          <?php foreach ($program['curriculum'] as $idx => $mod): ?>
            <div class="p-3 p-md-4 bg-light rounded-4 border d-flex align-items-start gap-3">
              <div class="badge bg-primary text-white rounded-pill px-3 py-2 fw-bold">
                <?= $idx + 1 ?>
              </div>
              <div>
                <h6 class="fw-bold text-dark mb-0 fs-6"><?= htmlspecialchars($mod) ?></h6>
                <small class="text-muted">Includes live step-by-step implementation templates, SOPs, and CRM snapshots.</small>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Right: Tangible Outcomes & Application -->
      <div class="col-lg-5" id="apply-section">
        <div class="p-4 p-md-5 bg-light rounded-4 border shadow-xs mb-4">
          <h4 class="fw-bold text-dark mb-3">Key Outcomes You Will Achieve</h4>
          <ul class="service-feature-checklist mb-4">
            <?php foreach ($program['outcomes'] as $out): ?>
              <li><?= htmlspecialchars($out) ?></li>
            <?php endforeach; ?>
          </ul>

          <div class="p-3 bg-white rounded-3 border mb-4">
            <div class="d-flex align-items-center gap-2 text-success fw-bold small mb-1">
              <i class="bi bi-shield-check fs-5"></i> 100% Satisfaction Guarantee
            </div>
            <p class="small text-muted mb-0">
              If within the first 14 days you do not feel this accelerator will produce at least a 3x return on your practice, we will refund 100% of your investment.
            </p>
          </div>

          <a href="consultation.php?program=<?= urlencode($program['slug']) ?>" class="btn btn-primary btn-lg w-100 rounded-pill py-3 fw-bold shadow-brand">
            <span>Apply for This Accelerator</span>
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
