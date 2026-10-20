<?php
$pageTitle = 'Coaching Growth Resources, Playbooks & Insights | Coaching 360 Growth Lab USA';
$pageDescription = 'Actionable marketing guides, client acquisition playbooks, GoHighLevel automation tutorials, and scaling strategies for US coaches.';
$basePath = '';

require_once __DIR__ . '/includes/data.php';
require_once __DIR__ . '/includes/header.php';

$articles = [
    [
        'slug' => 'predictable-lead-generation-guide-coaches',
        'title' => 'The Complete Guide to Predictable Lead Generation for US Coaches',
        'category' => 'Lead Generation',
        'read_time' => '7 min read',
        'image' => 'assets/images/service-lead-gen.jpg',
        'summary' => 'How top coaches escape the feast-or-famine referral trap and build high-converting inbound discovery pipelines on autopilot.'
    ],
    [
        'slug' => 'packaging-high-ticket-coaching-programs',
        'title' => 'How to Structure and Sell $10,000+ High-Ticket Coaching Programs',
        'category' => 'Offer Strategy',
        'read_time' => '9 min read',
        'image' => 'assets/images/service-business-growth.jpg',
        'summary' => 'Stop selling single hours. Here is the exact framework to package your methodology into high-margin transformation retainers.'
    ],
    [
        'slug' => 'google-local-seo-ranking-map-pack-coaches',
        'title' => 'How to Rank in the Google Local 3-Pack for Coaching in Your City',
        'category' => 'SEO & Local Search',
        'read_time' => '6 min read',
        'image' => 'assets/images/service-sales-funnels.jpg',
        'summary' => 'A step-by-step Google Business Profile and citation strategy to attract high-earning local clients without paying for ads.'
    ],
    [
        'slug' => 'gohighlevel-automation-tech-stack-coaches',
        'title' => 'Why GoHighLevel is the Ultimate Operating System for Modern Coaches',
        'category' => 'CRM & Automation',
        'read_time' => '8 min read',
        'image' => 'assets/images/service-ghl.jpg',
        'summary' => 'How to consolidate 7 expensive software subscriptions into one high-speed client booking and retention machine.'
    ],
    [
        'slug' => 'slash-discovery-call-no-shows-sms-automation',
        'title' => 'How 2-Way SMS and AI Workflows Slash Appointment No-Shows by 65%',
        'category' => 'AI & Workflows',
        'read_time' => '5 min read',
        'image' => 'assets/images/service-marketing-automation.jpg',
        'summary' => 'The psychological reminder sequences that consistently raise discovery call attendance rates past 85%.'
    ],
    [
        'slug' => 'social-selling-dm-funnel-coaches',
        'title' => 'The Inbound DM Social Selling Playbook for LinkedIn & Instagram',
        'category' => 'Social Media',
        'read_time' => '6 min read',
        'image' => 'assets/images/coaching-workshop.jpg',
        'summary' => 'How to turn post engagement and profile visits into high-ticket discovery conversations without sounding salesy.'
    ]
];
?>

<!-- Resources Hero -->
<section class="services-hub-hero">
  <div class="container text-center">
    <span class="service-pill-tag mb-3">
      <i class="bi bi-journal-text"></i> Growth Playbooks & Insights
    </span>
    <h1 class="display-4 fw-extrabold text-dark letter-spacing-tight mb-3">
      Coaching Business Growth Resources
    </h1>
    <p class="lead text-secondary max-w-700 mx-auto fs-5 mb-0" style="line-height: 1.7;">
      Battle-tested playbooks, client acquisition breakdowns, CRM automation workflows, and scaling strategies written for American coaches.
    </p>
  </div>
</section>

<!-- Articles Grid -->
<section class="py-5 bg-light">
  <div class="container py-lg-4">
    <div class="row g-4">
      <?php foreach ($articles as $art): ?>
        <div class="col-md-6 col-lg-4">
          <div class="service-hub-card h-100">
            <div class="service-card-media" style="height: 200px;">
              <img src="<?= $basePath ?><?= htmlspecialchars($art['image']) ?>" alt="<?= htmlspecialchars($art['title']) ?>" loading="eager" decoding="async">
              <span class="service-card-badge"><?= htmlspecialchars($art['category']) ?></span>
            </div>
            <div class="service-card-body">
              <div class="text-muted small mb-2"><i class="bi bi-clock me-1"></i><?= htmlspecialchars($art['read_time']) ?></div>
              <h5 class="fw-bold text-dark mb-2">
                <a href="blog-detail.php?slug=<?= htmlspecialchars($art['slug']) ?>" class="text-decoration-none text-dark hover-primary">
                  <?= htmlspecialchars($art['title']) ?>
                </a>
              </h5>
              <p class="text-secondary small mb-4" style="line-height: 1.6;">
                <?= htmlspecialchars($art['summary']) ?>
              </p>
              <div class="mt-auto">
                <a href="blog-detail.php?slug=<?= htmlspecialchars($art['slug']) ?>" class="btn btn-outline-primary btn-sm rounded-pill w-100 fw-bold">
                  Read Playbook <i class="bi bi-arrow-right ms-1"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Strategy CTA -->
<section class="py-5 bg-white border-top">
  <div class="container text-center max-w-700 mx-auto">
    <h2 class="display-6 fw-bold text-dark mb-3">Need Hands-On Implementation?</h2>
    <p class="text-muted fs-6 mb-4">
      Don't spend hundreds of hours trying to DIY complex funnels, CRM systems, and ads. We build the entire machine for you.
    </p>
    <a href="consultation.php" class="btn btn-primary btn-lg rounded-pill px-5 fw-bold shadow-brand">
      Get a Free Growth Consultation <i class="bi bi-arrow-right ms-2"></i>
    </a>
  </div>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
