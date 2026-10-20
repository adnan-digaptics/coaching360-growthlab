<?php
require_once __DIR__ . '/security.php';

if (!isset($pageTitle)) {
    $pageTitle = 'Coaching 360 Growth Lab | Helping US Coaches Generate Qualified Leads & Scale';
}
if (!isset($pageDescription)) {
    $pageDescription = 'Coaching 360 Growth Lab is the premier growth, marketing, and client acquisition platform for coaching professionals and practices across the United States.';
}
$currentPage = basename($_SERVER['PHP_SELF']);
$basePath = $basePath ?? '';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDescription) ?>">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,600&family=Manrope:wght@500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 CSS & Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

  <!-- Swiper 11 CSS (Touch & Drag Slider Engine) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="<?= $basePath ?>assets/css/style.css?v=<?= filemtime(__DIR__ . '/../assets/css/style.css') ?>">
</head>
<body>
  <!-- Header Wrapper -->
  <header class="site-header">
    <!-- Top Trust Bar -->
    <div class="top-announcement-bar d-none d-lg-block">
      <div class="container d-flex align-items-center justify-content-between">
        <div class="topbar-left d-flex align-items-center gap-2">
          <span class="topbar-pill">
            <span class="topbar-pulse"></span>
            Built for US Coaches
          </span>
          <span class="topbar-text">Helping coaches turn expertise into scalable client pipelines</span>
        </div>
        <div class="topbar-right d-flex align-items-center gap-2 gap-xl-3">
          <span class="topbar-info"><i class="bi bi-shield-check text-primary"></i> 100% US-Based Team</span>
          <span class="topbar-divider d-none d-xl-inline-block"></span>
          <span class="topbar-info d-none d-xl-inline-flex"><i class="bi bi-telephone-fill text-primary"></i> (800) 555-3600</span>
          <span class="topbar-divider"></span>
          <a href="<?= $basePath ?>consultation.php" class="topbar-action-link fw-bold text-primary">
            Request Marketing Audit <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="navbar navbar-expand-lg nav-glass">
      <div class="container">
        <!-- Brand Lockup -->
        <a class="navbar-brand brand-lockup" href="<?= $basePath ?>index.php">
          <span class="brand-mark"></span>
          <span class="brand-text">
            <strong>Coaching 360</strong>
            <small>GROWTH LAB</small>
          </span>
        </a>

        <!-- Mobile Toggler -->
        <button
          class="navbar-toggler border-0 shadow-none collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mainNav"
          aria-controls="mainNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="toggler-icon-bar"></span>
          <span class="toggler-icon-bar"></span>
          <span class="toggler-icon-bar"></span>
        </button>

        <!-- Navbar Menu Items -->
        <div class="collapse navbar-collapse" id="mainNav">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link <?= $currentPage === 'index.php' ? 'active' : '' ?>" href="<?= $basePath ?>index.php">
                <span>Home</span>
              </a>
            </li>

            <!-- Services Dropdown (All 12 Growth Services) -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle <?= (strpos($_SERVER['PHP_SELF'], 'service') !== false || $currentPage === 'services.php') ? 'active' : '' ?>"
                href="<?= $basePath ?>services.php"
                id="servicesDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span>Services</span>
                <span class="nav-counter-pill">12</span>
              </a>
              <div class="dropdown-menu dropdown-menu-end shadow-lg border-0 services-dropdown-menu p-3" aria-labelledby="servicesDropdown">
                <div class="d-flex justify-content-between align-items-center pb-2 mb-2 border-bottom">
                  <span class="text-uppercase fw-bold text-muted small letter-spacing-1">Growth & Marketing Services</span>
                  <a href="<?= $basePath ?>services.php" class="small fw-bold text-primary text-decoration-none">View All 12 Services <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="row g-2 services-grid-row">
                  <div class="col-12 col-lg-6">
                    <a class="dropdown-item d-flex align-items-start gap-2 p-2 rounded-2" href="<?= $basePath ?>services/lead-generation.php">
                      <i class="bi bi-graph-up-arrow text-primary fs-5 mt-1"></i>
                      <div>
                        <div class="fw-bold text-dark small">Lead Generation</div>
                        <small class="text-muted" style="font-size: 0.75rem;">Predictable client pipelines</small>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-start gap-2 p-2 rounded-2" href="<?= $basePath ?>services/seo-for-coaches.php">
                      <i class="bi bi-search text-primary fs-5 mt-1"></i>
                      <div>
                        <div class="fw-bold text-dark small">SEO for Coaches</div>
                        <small class="text-muted" style="font-size: 0.75rem;">Organic Google search ranking</small>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-start gap-2 p-2 rounded-2" href="<?= $basePath ?>services/website-development.php">
                      <i class="bi bi-laptop text-primary fs-5 mt-1"></i>
                      <div>
                        <div class="fw-bold text-dark small">Website Development</div>
                        <small class="text-muted" style="font-size: 0.75rem;">High-converting coaching sites</small>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-start gap-2 p-2 rounded-2" href="<?= $basePath ?>services/crm-automation.php">
                      <i class="bi bi-cpu-fill text-primary fs-5 mt-1"></i>
                      <div>
                        <div class="fw-bold text-dark small">CRM & Automation</div>
                        <small class="text-muted" style="font-size: 0.75rem;">Pipeline & follow-up systems</small>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-start gap-2 p-2 rounded-2" href="<?= $basePath ?>services/ai-automation.php">
                      <i class="bi bi-robot text-primary fs-5 mt-1"></i>
                      <div>
                        <div class="fw-bold text-dark small">AI Automation</div>
                        <small class="text-muted" style="font-size: 0.75rem;">24/7 AI lead qualification</small>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-start gap-2 p-2 rounded-2" href="<?= $basePath ?>services/gohighlevel.php">
                      <i class="bi bi-gear-wide-connected text-primary fs-5 mt-1"></i>
                      <div>
                        <div class="fw-bold text-dark small">GoHighLevel Setup</div>
                        <small class="text-muted" style="font-size: 0.75rem;">Certified GHL implementation</small>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-lg-6 border-start-lg ps-lg-2">
                    <a class="dropdown-item d-flex align-items-start gap-2 p-2 rounded-2" href="<?= $basePath ?>services/n8n-automation.php">
                      <i class="bi bi-diagram-3-fill text-primary fs-5 mt-1"></i>
                      <div>
                        <div class="fw-bold text-dark small">n8n Automation</div>
                        <small class="text-muted" style="font-size: 0.75rem;">Open-source custom workflows</small>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-start gap-2 p-2 rounded-2" href="<?= $basePath ?>services/social-media-marketing.php">
                      <i class="bi bi-share-fill text-primary fs-5 mt-1"></i>
                      <div>
                        <div class="fw-bold text-dark small">Social Media Marketing</div>
                        <small class="text-muted" style="font-size: 0.75rem;">LinkedIn, IG & YouTube authority</small>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-start gap-2 p-2 rounded-2" href="<?= $basePath ?>services/paid-advertising.php">
                      <i class="bi bi-megaphone-fill text-primary fs-5 mt-1"></i>
                      <div>
                        <div class="fw-bold text-dark small">Paid Advertising</div>
                        <small class="text-muted" style="font-size: 0.75rem;">Meta, Google & YouTube Ads</small>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-start gap-2 p-2 rounded-2" href="<?= $basePath ?>services/reputation-management.php">
                      <i class="bi bi-star-fill text-primary fs-5 mt-1"></i>
                      <div>
                        <div class="fw-bold text-dark small">Reputation Management</div>
                        <small class="text-muted" style="font-size: 0.75rem;">Automated 5-star Google reviews</small>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-start gap-2 p-2 rounded-2" href="<?= $basePath ?>services/local-seo.php">
                      <i class="bi bi-geo-alt-fill text-primary fs-5 mt-1"></i>
                      <div>
                        <div class="fw-bold text-dark small">Local SEO & GBP</div>
                        <small class="text-muted" style="font-size: 0.75rem;">Google 3-Pack local rankings</small>
                      </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-start gap-2 p-2 rounded-2" href="<?= $basePath ?>services/coaching-business-growth.php">
                      <i class="bi bi-award-fill text-primary fs-5 mt-1"></i>
                      <div>
                        <div class="fw-bold text-dark small">Coaching Business Growth</div>
                        <small class="text-muted" style="font-size: 0.75rem;">High-ticket offers & strategy</small>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </li>

            <!-- Coaching Industries Dropdown -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle <?= (strpos($_SERVER['PHP_SELF'], 'industr') !== false) ? 'active' : '' ?>"
                href="<?= $basePath ?>industries.php"
                id="industriesDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <span>Industries</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 industries-dropdown-menu" aria-labelledby="industriesDropdown">
                <li class="dropdown-header pb-2 mb-1 border-bottom">
                  <span class="text-uppercase fw-bold text-muted small">Specialized Coaching Sectors</span>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= $basePath ?>industry.php?slug=business-coaches">
                    <i class="bi bi-briefcase text-primary"></i>
                    <div>
                      <div class="fw-bold text-dark small">Business & Professional Coaching</div>
                      <small class="text-muted" style="font-size: 0.72rem;">Executive, Leadership, Sales & Career</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= $basePath ?>industry.php?slug=life-coaches">
                    <i class="bi bi-heart-pulse text-primary"></i>
                    <div>
                      <div class="fw-bold text-dark small">Life & Personal Development</div>
                      <small class="text-muted" style="font-size: 0.72rem;">Mindset, Confidence & Transformation</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= $basePath ?>industry.php?slug=health-coaches">
                    <i class="bi bi-activity text-primary"></i>
                    <div>
                      <div class="fw-bold text-dark small">Health & Wellness Coaching</div>
                      <small class="text-muted" style="font-size: 0.72rem;">Fitness, Nutrition & Stress Management</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= $basePath ?>industry.php?slug=relationship-coaches">
                    <i class="bi bi-people text-primary"></i>
                    <div>
                      <div class="fw-bold text-dark small">Relationship & Family Coaching</div>
                      <small class="text-muted" style="font-size: 0.72rem;">Marriage, Dating & Parenting</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= $basePath ?>industry.php?slug=financial-coaches">
                    <i class="bi bi-currency-dollar text-primary"></i>
                    <div>
                      <div class="fw-bold text-dark small">Financial Coaching</div>
                      <small class="text-muted" style="font-size: 0.72rem;">Money, Wealth & Retirement</small>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="<?= $basePath ?>industry.php?slug=academic-coaches">
                    <i class="bi bi-mortarboard text-primary"></i>
                    <div>
                      <div class="fw-bold text-dark small">Education & Student Coaching</div>
                      <small class="text-muted" style="font-size: 0.72rem;">College Admission & Test Prep</small>
                    </div>
                  </a>
                </li>
                <li class="mt-2 pt-2 border-top">
                  <a class="dropdown-item text-center fw-bold text-primary bg-primary-subtle py-2 rounded-2" href="<?= $basePath ?>industries.php">
                    View All 60+ Coaching Niches <i class="bi bi-arrow-right ms-1"></i>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link <?= ($currentPage === 'courses.php' || $currentPage === 'course-detail.php') ? 'active' : '' ?>" href="<?= $basePath ?>courses.php">
                <span>Programs</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?= $currentPage === 'solutions.php' ? 'active' : '' ?>" href="<?= $basePath ?>solutions.php">
                <span>Solutions</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?= $currentPage === 'case-studies.php' ? 'active' : '' ?>" href="<?= $basePath ?>case-studies.php">
                <span>Case Studies</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?= $currentPage === 'about.php' ? 'active' : '' ?>" href="<?= $basePath ?>about.php">
                <span>About</span>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link <?= $currentPage === 'contact.php' ? 'active' : '' ?>" href="<?= $basePath ?>contact.php">
                <span>Contact</span>
              </a>
            </li>
          </ul>

          <!-- Nav Primary CTA -->
          <div class="nav-actions d-flex align-items-center ms-lg-2 ms-xl-3 mt-3 mt-lg-0">
            <a class="btn btn-brand-nav" href="<?= $basePath ?>consultation.php">
              <i class="bi bi-lightning-charge-fill me-1"></i>
              <span>Free Consultation</span>
              <i class="bi bi-arrow-right ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main>
