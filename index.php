<?php
require 'includes/data.php';
$pageTitle = 'Coaching 360 Growth Lab — Learn. Grow. Lead.';
require 'includes/header.php';
?>

<!-- Hero Section -->
<section class="hero">
  <div class="container">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <div class="hero-kicker mb-3">Learn · Grow · Lead</div>
        <h1>Coaching 360 <span class="text-gradient">Growth Lab</span></h1>
        <p class="lead mt-3">
          A comprehensive learning and professional development platform connecting knowledge, healthcare education, leadership and community impact.
        </p>

        <div class="hero-actions">
          <a class="btn btn-primary btn-lg rounded-pill px-4 py-3" href="courses.php">
            Explore Our Programs <i class="bi bi-arrow-right ms-2"></i>
          </a>
          <a class="btn btn-outline-dark btn-lg rounded-pill px-4 py-3" href="#pathways">
            <i class="bi bi-play-circle me-2"></i>Explore pathways
          </a>
        </div>

        <div class="hero-proof">
          <div class="avatars">
            <span style="background-image: url('https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=120&q=80');"></span>
            <span style="background-image: url('https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=120&q=80');"></span>
            <span style="background-image: url('https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=120&q=80');"></span>
            <span style="background-image: url('https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=120&q=80');"></span>
          </div>
          <small>
            Flexible learning for professionals,<br>
            students and lifelong learners
          </small>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="hero-visual">
          <div class="orb one">
            <img src="https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=900&q=80" alt="Knowledge and learning">
          </div>
          <div class="orb two">
            <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=900&q=80" alt="Healthcare education">
          </div>
          <div class="orb three">
            <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1000&q=80" alt="Community learning">
          </div>
          <div class="scribble">
            Knowledge<br>
            Skills<br>
            Leadership<br>
            <b>A Brighter Tomorrow</b>
          </div>
          <div class="glass-chip chip1">One connected learning platform</div>
          <div class="glass-chip chip2">
            <i class="bi bi-award me-2 text-warning"></i>Flexible professional learning
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Division Cards -->
<section class="section division-pathways" id="pathways">
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <a href="courses.php" class="h-100 d-flex flex-column text-decoration-none">
          <div class="division-card green">
            <div class="division-icon">
              <i class="bi bi-lightbulb"></i>
            </div>
            <h3>Knowledge & Ethics</h3>
            <p class="text-secondary">
              Explore values-informed learning across science, medicine, ethics, history and contemporary professional questions.
            </p>
            <strong class="mt-auto">Explore courses <i class="bi bi-arrow-right"></i></strong>
          </div>
        </a>
      </div>

      <div class="col-lg-4">
        <a href="courses.php" class="h-100 d-flex flex-column text-decoration-none">
          <div class="division-card blue">
            <div class="division-icon">
              <i class="bi bi-heart-pulse"></i>
            </div>
            <h3>Healthcare & Clinical Learning</h3>
            <p class="text-secondary">
              Develop practical healthcare knowledge, clinical capabilities, leadership skills and continuing professional expertise.
            </p>
            <strong class="mt-auto">Explore courses <i class="bi bi-arrow-right"></i></strong>
          </div>
        </a>
      </div>

      <div class="col-lg-4">
        <a href="courses.php" class="h-100 d-flex flex-column text-decoration-none">
          <div class="division-card purple">
            <div class="division-icon">
              <i class="bi bi-people"></i>
            </div>
            <h3>Leadership & Community Impact</h3>
            <p class="text-secondary">
              Build communication, leadership, professional and community development skills for meaningful impact.
            </p>
            <strong class="mt-auto">Explore courses <i class="bi bi-arrow-right"></i></strong>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Stats Band (Blue Section) -->
<section class="section stats-section py-0">
  <div class="container">
    <div class="stat-band">
      <div class="row text-center g-4 position-relative">
        <div class="col-6 col-lg-3 stat-item">
          <div class="stat-icon mb-3"><i class="bi bi-mortarboard fs-3"></i></div>
          <div class="stat-num" data-count="<?= count($courses) ?>" data-suffix="+"><?= count($courses) ?>+</div>
          <div class="stat-label">Courses to explore</div>
        </div>
        <div class="col-6 col-lg-3 stat-item">
          <div class="stat-icon mb-3"><i class="bi bi-people fs-3"></i></div>
          <div class="stat-num" data-count="<?= count($instructors) ?>" data-suffix="+"><?= count($instructors) ?>+</div>
          <div class="stat-label">Instructors to learn from</div>
        </div>
        <div class="col-6 col-lg-3 stat-item">
          <div class="stat-icon mb-3"><i class="bi bi-diagram-3 fs-3"></i></div>
          <div class="stat-num" data-count="3" data-suffix="">3</div>
          <div class="stat-label">Connected learning pathways</div>
        </div>
        <div class="col-6 col-lg-3 stat-item">
          <div class="stat-icon mb-3"><i class="bi bi-clock-history fs-3"></i></div>
          <div class="stat-num" data-count="100" data-suffix="%">100%</div>
          <div class="stat-label">Flexible self-paced study</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Learning Steps -->
<section class="section learning-steps">
  <div class="container">
    <div class="text-start mb-5" data-reveal>
      <div class="eyebrow">From interest to impact</div>
      <h2 class="section-title mt-2">A clear path to meaningful growth</h2>
      <p class="section-intro">
        Build knowledge with a learning experience that connects your goals to practical next steps.
      </p>
    </div>

    <div class="row g-4">
      <div class="col-md-4" data-reveal>
        <div class="feature-block">
          <div class="feature-icon">
            <i class="bi bi-compass"></i>
          </div>
          <h5>Choose your direction</h5>
          <p class="text-secondary mb-0">
            Start with the pathway that fits your interests: knowledge and ethics, healthcare, or community leadership.
          </p>
        </div>
      </div>

      <div class="col-md-4" data-reveal>
        <div class="feature-block">
          <div class="feature-icon">
            <i class="bi bi-journal-richtext"></i>
          </div>
          <h5>Learn with purpose</h5>
          <p class="text-secondary mb-0">
            Follow focused courses led by experienced educators, with clear lessons and flexible study time.
          </p>
        </div>
      </div>

      <div class="col-md-4" data-reveal>
        <div class="feature-block">
          <div class="feature-icon">
            <i class="bi bi-arrow-up-right-circle"></i>
          </div>
          <h5>Put insight into practice</h5>
          <p class="text-secondary mb-0">
            Take what you learn into your studies, professional work, and the communities you serve.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Platform Benefits -->
<section class="section section-soft">
  <div class="container">
    <div class="text-center mb-5" data-reveal>
      <div class="eyebrow">Built for meaningful growth</div>
      <h2 class="section-title mt-2">Why Coaching 360 Growth Lab?</h2>
      <p class="section-intro mx-auto">
        One connected platform that makes high-quality learning practical, flexible and relevant across multiple professional and personal growth pathways.
      </p>
    </div>

    <div class="row g-4 text-center">
      <div class="col-sm-6 col-lg-3">
        <div class="feature-block">
          <div class="feature-icon">
            <i class="bi bi-grid-1x2"></i>
          </div>
          <h5>Diverse Learning Pathways</h5>
          <p class="text-secondary mb-0">
            Explore focused subjects without leaving one unified learning experience.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="feature-block">
          <div class="feature-icon">
            <i class="bi bi-person-badge"></i>
          </div>
          <h5>Expert Instructors</h5>
          <p class="text-secondary mb-0">
            Learn from scholars, clinicians, educators and experienced professionals.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="feature-block">
          <div class="feature-icon">
            <i class="bi bi-clock-history"></i>
          </div>
          <h5>Flexible Learning</h5>
          <p class="text-secondary mb-0">
            Study at your own pace, from anywhere.
          </p>
        </div>
      </div>

      <div class="col-sm-6 col-lg-3">
        <div class="feature-block">
          <div class="feature-icon">
            <i class="bi bi-patch-check"></i>
          </div>
          <h5>Career & Skill Growth</h5>
          <p class="text-secondary mb-0">
            Practical learning designed to move people forward.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Featured Courses Carousel -->
<section class="section featured-learning">
  <div class="container">
    <div class="d-flex align-items-end justify-content-between gap-3 mb-4" data-reveal>
      <div>
        <div class="eyebrow">Explore what’s new</div>
        <h2 class="section-title">Featured Courses</h2>
        <p class="section-intro mb-0 mt-2">Ideas and practical skills for the work you want to do.</p>
      </div>
      <a href="courses.php" class="fw-bold text-primary">
        View all courses <i class="bi bi-arrow-right"></i>
      </a>
    </div>

    <div
      id="featuredCourseCarousel"
      class="carousel slide course-carousel"
      data-bs-interval="6500"
      data-bs-pause="false"
      data-bs-wrap="true"
      aria-label="Featured courses"
    >
      <div class="carousel-inner">
        <?php foreach (array_chunk(array_slice($courses, 0, 6), 2) as $slideIndex => $courseGroup): ?>
          <div class="carousel-item <?= $slideIndex === 0 ? 'active' : '' ?>">
            <div class="row g-4">
              <?php foreach ($courseGroup as $c): ?>
                <div class="col-md-6">
                  <a href="course-detail.php?slug=<?= $c['slug'] ?>">
                    <article class="course-card">
                      <img src="<?= $c['image'] ?>" alt="<?= htmlspecialchars($c['title']) ?>">
                      <div class="body">
                        <span class="badge-soft"><?= $c['category'] ?></span>
                        <h5 class="mt-3 mb-2"><?= $c['title'] ?></h5>
                        <div class="rating">
                          ★★★★★ <span class="text-secondary"><?= $c['rating'] ?></span>
                        </div>
                        <div class="course-meta mt-3">
                          <span><i class="bi bi-journal-text"></i> <?= $c['lessons'] ?> lessons</span>
                          <span><i class="bi bi-clock"></i> <?= $c['hours'] ?> hours</span>
                        </div>
                      </div>
                    </article>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="course-carousel-controls d-flex justify-content-end align-items-center gap-3 mt-4">
        <div class="carousel-indicators position-static m-0">
          <?php foreach (array_chunk(array_slice($courses, 0, 6), 2) as $slideIndex => $courseGroup): ?>
            <button
              type="button"
              data-bs-target="#featuredCourseCarousel"
              data-bs-slide-to="<?= $slideIndex ?>"
              class="<?= $slideIndex === 0 ? 'active' : '' ?>"
              <?= $slideIndex === 0 ? 'aria-current="true"' : '' ?>
              aria-label="Slide <?= $slideIndex + 1 ?>"
            ></button>
          <?php endforeach; ?>
        </div>

        <button
          class="btn carousel-toggle"
          type="button"
          data-carousel-toggle
          aria-label="Pause course carousel"
          aria-pressed="false"
          title="Pause carousel"
        >
          <i class="bi bi-pause-fill" aria-hidden="true"></i>
        </button>

        <button
          class="btn"
          type="button"
          data-bs-target="#featuredCourseCarousel"
          data-bs-slide="prev"
          aria-label="Previous courses"
        >
          <i class="bi bi-arrow-left"></i>
        </button>

        <button
          class="btn"
          type="button"
          data-bs-target="#featuredCourseCarousel"
          data-bs-slide="next"
          aria-label="Next courses"
        >
          <i class="bi bi-arrow-right"></i>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- Instructors Section -->
<section class="section section-soft">
  <div class="container">
    <div class="row align-items-end mb-4" data-reveal>
      <div class="col-lg-8">
        <div class="eyebrow">Learn from experience</div>
        <h2 class="section-title mt-2">Meet your instructors</h2>
        <p class="section-intro mb-0">
          Explore guidance from educators across healthcare, ethics and community development.
        </p>
      </div>
      <div class="col-lg-4 text-lg-end mt-3 mt-lg-0">
        <a href="instructors.php" class="fw-bold text-primary">
          Meet all instructors <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>

    <div class="row g-4">
      <?php foreach (array_slice($instructors, 0, 3) as $instructor): ?>
        <div class="col-md-4" data-reveal>
          <article class="profile-card">
            <img src="<?= $instructor['image'] ?>" alt="<?= htmlspecialchars($instructor['name']) ?>">
            <div class="pt-3">
              <h5 class="mb-1"><?= $instructor['name'] ?></h5>
              <p class="text-secondary mb-0"><?= $instructor['role'] ?></p>
            </div>
          </article>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- FAQ Accordion -->
<section class="section">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-4" data-reveal>
        <div class="eyebrow">Good to know</div>
        <h2 class="section-title mt-2">Questions, answered.</h2>
        <p class="section-intro">
          A few quick details to help you choose your next learning step.
        </p>
        <a href="contact.php" class="btn btn-outline-dark px-4 py-2">
          Ask us a question <i class="bi bi-arrow-right ms-2"></i>
        </a>
      </div>

      <div class="col-lg-8" data-reveal>
        <div class="accordion growth-faq" id="learningFaq">
          <div class="accordion-item">
            <h3 class="accordion-header">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#faqPathways"
                aria-expanded="true"
                aria-controls="faqPathways"
              >
                What can I learn here?
              </button>
            </h3>
            <div id="faqPathways" class="accordion-collapse collapse show" data-bs-parent="#learningFaq">
              <div class="accordion-body">
                Explore courses across knowledge and ethics, healthcare and clinical learning, and leadership and community impact.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#faqSchedule"
                aria-expanded="false"
                aria-controls="faqSchedule"
              >
                Can I learn at my own pace?
              </button>
            </h3>
            <div id="faqSchedule" class="accordion-collapse collapse" data-bs-parent="#learningFaq">
              <div class="accordion-body">
                Yes. Courses are designed for flexible study, so you can plan learning around your work and other commitments.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#faqStart"
                aria-expanded="false"
                aria-controls="faqStart"
              >
                How do I choose a course?
              </button>
            </h3>
            <div id="faqStart" class="accordion-collapse collapse" data-bs-parent="#learningFaq">
              <div class="accordion-body">
                Browse all courses by subject, then open a course to review its level, lessons and estimated learning hours.
              </div>
            </div>
          </div>

          <div class="accordion-item">
            <h3 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#faqWho"
                aria-expanded="false"
                aria-controls="faqWho"
              >
                Who is the platform for?
              </button>
            </h3>
            <div id="faqWho" class="accordion-collapse collapse" data-bs-parent="#learningFaq">
              <div class="accordion-body">
                The learning pathways welcome students, professionals and lifelong learners looking to deepen knowledge or build practical skills.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="section pt-0">
  <div class="container">
    <div class="cta-panel" data-reveal>
      <div class="row align-items-center position-relative z-1">
        <div class="col-lg-8">
          <div class="eyebrow text-white-50">Start your next chapter</div>
          <h2 class="display-5 fw-bold mt-2">One platform. More ways to grow.</h2>
          <p class="mb-0 text-white-50">
            Discover courses that match your goals and build a learning path around your work, interests and impact.
          </p>
        </div>
        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
          <a href="signup.php" class="btn btn-light btn-lg rounded-pill px-4 py-3">
            Create account
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
