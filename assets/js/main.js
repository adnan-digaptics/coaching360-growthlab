/**
 * Coaching 360 Growth Lab — Main Application Script
 * - GSAP & ScrollTrigger Animations
 * - Dynamic Blue Section (.stat-band) Animated Counter
 * - Smooth Navbar Scroll Behavior
 * - Course Carousel Controls
 * - Live Course Search Filter
 */

(function () {
  "use strict";

  function initApp() {
    // ----------------------------------------------------
    // 1. Navbar Glass Scroll Effect
    // ----------------------------------------------------
    const nav = document.querySelector(".nav-glass");
    if (nav) {
      const handleScroll = () => {
        nav.classList.toggle("is-scrolled", window.scrollY > 18);
      };
      handleScroll();
      window.addEventListener("scroll", handleScroll, { passive: true });
    }

    // ----------------------------------------------------
    // 2. GSAP & ScrollTrigger Setup
    // ----------------------------------------------------
    const hasGsap = typeof window.gsap !== "undefined";
    const hasScrollTrigger = typeof window.ScrollTrigger !== "undefined";

    if (hasGsap && hasScrollTrigger) {
      gsap.registerPlugin(ScrollTrigger);
    }

    // ----------------------------------------------------
    // 3. Blue Section (.stat-band) Animated Counter
    // ----------------------------------------------------
    const statBand = document.querySelector(".stat-band");
    if (statBand) {
      const statItems = statBand.querySelectorAll(".stat-item");
      const statNumbers = statBand.querySelectorAll(".stat-num[data-count]");

      let counterStarted = false;

      const triggerCounterAnimation = () => {
        if (counterStarted) return;
        counterStarted = true;

        statNumbers.forEach((el, index) => {
          const target = parseFloat(el.getAttribute("data-count")) || 0;
          const suffix = el.getAttribute("data-suffix") || "";
          const prefix = el.getAttribute("data-prefix") || "";
          const duration = 2.0;

          if (hasGsap) {
            const counterObj = { count: 0 };
            gsap.to(counterObj, {
              count: target,
              duration: duration,
              delay: 0.1 + index * 0.1,
              ease: "power2.out",
              onUpdate: () => {
                el.textContent = prefix + Math.round(counterObj.count) + suffix;
              },
              onComplete: () => {
                el.textContent = prefix + target + suffix;
              },
            });
          } else {
            // Fallback counter
            let current = 0;
            const steps = 30;
            const increment = target / steps;
            const stepInterval = Math.max(
              Math.floor((duration * 1000) / steps),
              35,
            );
            const timer = setInterval(() => {
              current += increment;
              if (current >= target) {
                el.textContent = prefix + target + suffix;
                clearInterval(timer);
              } else {
                el.textContent = prefix + Math.round(current) + suffix;
              }
            }, stepInterval);
          }
        });
      };

      if (hasGsap && hasScrollTrigger) {
        // Entrance animation for the blue container
        gsap.from(statBand, {
          scrollTrigger: {
            trigger: statBand,
            start: "top 85%",
            once: true,
            onEnter: triggerCounterAnimation,
          },
          y: 45,
          opacity: 0,
          scale: 0.97,
          duration: 0.9,
          ease: "power3.out",
        });

        // Stagger animation for the 4 stat items inside
        if (statItems.length) {
          gsap.from(statItems, {
            scrollTrigger: {
              trigger: statBand,
              start: "top 85%",
              once: true,
            },
            y: 30,
            opacity: 0,
            duration: 0.75,
            stagger: 0.12,
            delay: 0.1,
            ease: "power3.out",
          });
        }
      } else if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver(
          (entries) => {
            if (entries.some((entry) => entry.isIntersecting)) {
              observer.disconnect();
              triggerCounterAnimation();
            }
          },
          { threshold: 0.15 },
        );
        observer.observe(statBand);
      } else {
        triggerCounterAnimation();
      }
    }

    // ----------------------------------------------------
    // 4. GSAP Page Animations
    // ----------------------------------------------------
    if (hasGsap) {
      // 4.1 Navbar entrance
      gsap.from(".nav-glass", {
        y: -40,
        opacity: 0,
        duration: 0.75,
        ease: "power3.out",
      });

      // 4.2 Hero section entrance
      if (document.querySelector(".hero")) {
        const heroTl = gsap.timeline({ defaults: { ease: "power3.out" } });

        heroTl
          .from(".hero-kicker", { y: 20, opacity: 0, duration: 0.6 }, 0.1)
          .from(".hero h1", { y: 32, opacity: 0, duration: 0.8 }, 0.2)
          .from(".hero p.lead", { y: 24, opacity: 0, duration: 0.7 }, 0.35)
          .from(
            ".hero-actions .btn",
            { y: 20, opacity: 0, duration: 0.6, stagger: 0.1 },
            0.45,
          )
          .from(".hero-proof", { y: 20, opacity: 0, duration: 0.6 }, 0.55);

        gsap.from(".hero-visual .orb", {
          scale: 0.65,
          opacity: 0,
          duration: 1.1,
          stagger: 0.14,
          ease: "back.out(1.4)",
          delay: 0.25,
        });

        gsap.from(".hero-visual .glass-chip, .hero-visual .scribble", {
          y: 22,
          opacity: 0,
          duration: 0.8,
          stagger: 0.12,
          ease: "power3.out",
          delay: 0.55,
        });
      }

      // 4.3 Division cards (Pathways)
      if (hasScrollTrigger && document.querySelector(".division-pathways")) {
        gsap.from(".division-pathways .division-card", {
          scrollTrigger: {
            trigger: ".division-pathways",
            start: "top 85%",
            once: true,
          },
          y: 35,
          opacity: 0,
          duration: 0.75,
          stagger: 0.12,
          ease: "power3.out",
        });
      }

      // 4.4 Learning steps
      if (hasScrollTrigger && document.querySelector(".learning-steps")) {
        gsap.from(".learning-steps .feature-block", {
          scrollTrigger: {
            trigger: ".learning-steps",
            start: "top 82%",
            once: true,
          },
          y: 30,
          opacity: 0,
          duration: 0.75,
          stagger: 0.12,
          ease: "power3.out",
        });
      }

      // 4.5 Why Coaching 360 blocks
      if (
        hasScrollTrigger &&
        document.querySelector(".section-soft .feature-block")
      ) {
        gsap.from(".section-soft .feature-block", {
          scrollTrigger: {
            trigger: ".section-soft",
            start: "top 82%",
            once: true,
          },
          y: 30,
          opacity: 0,
          duration: 0.7,
          stagger: 0.1,
          ease: "power3.out",
        });
      }

      // 4.6 Featured learning carousel container (never hide inactive slides!)
      if (hasScrollTrigger && document.querySelector(".featured-learning")) {
        gsap.from(".featured-learning .course-carousel", {
          scrollTrigger: {
            trigger: ".featured-learning",
            start: "top 85%",
            once: true,
          },
          y: 30,
          opacity: 0,
          duration: 0.8,
          ease: "power2.out",
        });
      }

      // 4.7 Instructors profile cards
      if (hasScrollTrigger && document.querySelector(".profile-card")) {
        gsap.from(".profile-card", {
          scrollTrigger: {
            trigger: ".profile-card",
            start: "top 88%",
            once: true,
          },
          y: 25,
          opacity: 0,
          duration: 0.7,
          stagger: 0.1,
          ease: "power2.out",
        });
      }

      // 4.8 FAQ accordion
      if (
        hasScrollTrigger &&
        document.querySelector(".growth-faq .accordion-item")
      ) {
        gsap.from(".growth-faq .accordion-item", {
          scrollTrigger: {
            trigger: "#learningFaq",
            start: "top 85%",
            once: true,
          },
          y: 20,
          opacity: 0,
          duration: 0.6,
          stagger: 0.08,
          ease: "power2.out",
        });
      }

      // 4.9 CTA Panel
      if (hasScrollTrigger && document.querySelector(".cta-panel")) {
        gsap.from(".cta-panel", {
          scrollTrigger: {
            trigger: ".cta-panel",
            start: "top 85%",
            once: true,
          },
          y: 35,
          opacity: 0,
          scale: 0.98,
          duration: 0.85,
          ease: "power3.out",
        });
      }

      // 4.10 Section header reveals
      if (hasScrollTrigger) {
        gsap.utils.toArray("[data-reveal]").forEach((el) => {
          if (
            el.closest(".hero") ||
            el.closest(".division-pathways") ||
            el.classList.contains("stat-band") ||
            el.classList.contains("cta-panel")
          ) {
            return;
          }
          gsap.from(el, {
            scrollTrigger: {
              trigger: el,
              start: "top 88%",
              once: true,
            },
            y: 24,
            opacity: 0,
            duration: 0.7,
            ease: "power3.out",
          });
        });
      }
    }

    // ----------------------------------------------------
    // 5. Featured Course Carousel Control
    // ----------------------------------------------------
    const featuredCarousel = document.querySelector("#featuredCourseCarousel");
    if (featuredCarousel && window.bootstrap) {
      const carousel = bootstrap.Carousel.getOrCreateInstance(
        featuredCarousel,
        {
          interval: 6500,
          pause: false,
          wrap: true,
        },
      );
      const toggle = featuredCarousel.querySelector("[data-carousel-toggle]");
      let paused = false;

      const updateToggle = () => {
        if (!toggle) return;
        toggle.setAttribute("aria-pressed", paused ? "true" : "false");
        toggle.setAttribute(
          "aria-label",
          paused ? "Play course carousel" : "Pause course carousel",
        );
        toggle.setAttribute(
          "title",
          paused ? "Play carousel" : "Pause carousel",
        );
        toggle.innerHTML = `<i class="bi ${paused ? "bi-play-fill" : "bi-pause-fill"}" aria-hidden="true"></i>`;
      };

      if (toggle) {
        toggle.addEventListener("click", () => {
          paused = !paused;
          if (paused) carousel.pause();
          else carousel.cycle();
          updateToggle();
        });
      }

      featuredCarousel.addEventListener("mouseenter", () => carousel.pause());
      featuredCarousel.addEventListener("mouseleave", () => {
        if (!paused) carousel.cycle();
      });
    }

    // ----------------------------------------------------
    // 6. Live Course Filter Search
    // ----------------------------------------------------
    const search = document.querySelector("#courseSearch");
    if (search) {
      search.addEventListener("input", (e) => {
        const q = e.target.value.toLowerCase().trim();
        document.querySelectorAll("[data-course-card]").forEach((c) => {
          c.style.display = c.innerText.toLowerCase().includes(q) ? "" : "none";
        });
        if (hasScrollTrigger) {
          ScrollTrigger.refresh();
        }
      });
    }

    // ----------------------------------------------------
    // 7. Refresh ScrollTrigger after window load
    // ----------------------------------------------------
    window.addEventListener("load", () => {
      if (hasScrollTrigger) {
        ScrollTrigger.refresh();
      }
    });
  }

  // Safe DOM ready execution
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initApp);
  } else {
    initApp();
  }
})();
