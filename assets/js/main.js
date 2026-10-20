/**
 * Coaching in USA — Main Application Script
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
    const siteHeader = document.querySelector(".site-header");
    if (nav || siteHeader) {
      const handleScroll = () => {
        const scrolled = window.scrollY > 18;
        if (nav) nav.classList.toggle("is-scrolled", scrolled);
        if (siteHeader) siteHeader.classList.toggle("is-scrolled", scrolled);
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

          const isDecimal = target % 1 !== 0;

          if (hasGsap) {
            const counterObj = { count: 0 };
            gsap.to(counterObj, {
              count: target,
              duration: duration,
              delay: 0.1 + index * 0.1,
              ease: "power2.out",
              onUpdate: () => {
                const currentFormatted = isDecimal
                  ? counterObj.count.toFixed(1)
                  : Math.round(counterObj.count);
                el.textContent = prefix + currentFormatted + suffix;
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
                const currentFormatted = isDecimal
                  ? current.toFixed(1)
                  : Math.round(current);
                el.textContent = prefix + currentFormatted + suffix;
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
    // ----------------------------------------------------
    // 4. GSAP Page Animations (Fail-Safe & Non-Destructive)
    // ----------------------------------------------------
    if (hasGsap) {
      // 4.1 Navbar entrance
      if (document.querySelector(".nav-glass")) {
        gsap.from(".nav-glass", {
          y: -30,
          opacity: 0,
          duration: 0.6,
          ease: "power2.out",
          clearProps: "all"
        });
      }

      // 4.2 Hero section entrance
      if (document.querySelector(".hero")) {
        const heroTl = gsap.timeline({ defaults: { ease: "power2.out" } });

        if (document.querySelector(".hero-kicker")) {
          heroTl.from(".hero-kicker", { y: 15, opacity: 0, duration: 0.5, clearProps: "all" }, 0.05);
        }
        if (document.querySelector(".hero h1")) {
          heroTl.from(".hero h1", { y: 20, opacity: 0, duration: 0.6, clearProps: "all" }, 0.15);
        }
        if (document.querySelector(".hero p.lead")) {
          heroTl.from(".hero p.lead", { y: 15, opacity: 0, duration: 0.5, clearProps: "all" }, 0.25);
        }
        if (document.querySelector(".hero-actions")) {
          heroTl.from(".hero-actions", { y: 15, opacity: 0, duration: 0.5, clearProps: "all" }, 0.35);
        }
      }

      // 4.3 Hero Visual Composite & Badges
      if (document.querySelector(".hero-visual-composite")) {
        gsap.from(".hero-composite-frame", {
          y: 20,
          opacity: 0,
          duration: 0.7,
          ease: "power2.out",
          delay: 0.2,
          clearProps: "all"
        });

        if (document.querySelector(".hero-kpi-chip")) {
          gsap.from(".hero-kpi-chip", {
            y: 15,
            opacity: 0,
            duration: 0.5,
            stagger: 0.1,
            ease: "power2.out",
            delay: 0.4,
            clearProps: "all"
          });
        }
      }

      // Ensure all cards and sections are immediately and permanently visible
      // (Never leave any content hidden at opacity: 0)
      const allCards = document.querySelectorAll(
        ".trust-pillar-card, .niche-preview-card, .problem-card, .process-step-card, .service-hub-card, .stat-band, .accordion-item"
      );
      allCards.forEach(card => {
        card.style.opacity = "1";
        card.style.visibility = "visible";
      });
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
      // Check URL query param ?search=... on initial page load
      const urlParams = new URLSearchParams(window.location.search);
      const initialQuery = urlParams.get("search");
      if (initialQuery) {
        search.value = initialQuery;
        const q = initialQuery.toLowerCase().trim();
        document.querySelectorAll("[data-course-card]").forEach((c) => {
          c.style.display = c.innerText.toLowerCase().includes(q) ? "" : "none";
        });
      }

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
    // 8. Award-Winning Services Interactive Slider (Swiper 11)
    // ----------------------------------------------------
    const servicesSliderEl = document.querySelector(".services-swiper");
    if (servicesSliderEl && window.Swiper) {
      const swiperWrapper = servicesSliderEl.querySelector(".swiper-wrapper");
      const currentCounter = document.getElementById("servicesCounterCurrent");
      const totalCounter = document.getElementById("servicesCounterTotal");
      const progressFill = document.getElementById("servicesProgressFill");
      const toggleBtn = document.getElementById("servicesSliderToggle");
      const filterPills = document.querySelectorAll(".service-filter-bar .service-filter-pill");
      const prevBtn = document.getElementById("servicesSliderPrev");
      const nextBtn = document.getElementById("servicesSliderNext");

      // Cache all 12 original slides in their initial order
      const allOriginalSlides = Array.from(swiperWrapper.querySelectorAll(".swiper-slide"));
      const totalSlides = allOriginalSlides.length;

      if (totalCounter) {
        totalCounter.textContent = String(totalSlides).padStart(2, "0");
      }

      // Initialize Swiper
      const servicesSwiper = new Swiper(servicesSliderEl, {
        slidesPerView: 1.15,
        spaceBetween: 16,
        speed: 550,
        grabCursor: true,
        watchSlidesProgress: true,
        observer: true,
        observeParents: true,
        observeSlideChildren: true,
        updateOnWindowResize: true,
        keyboard: {
          enabled: true,
          onlyInViewport: true,
        },
        navigation: {
          nextEl: "#servicesSliderNext",
          prevEl: "#servicesSliderPrev",
        },
        pagination: {
          el: ".services-swiper-pagination",
          clickable: true,
        },
        autoplay: {
          delay: 4500,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        touchRatio: 1.1,
        resistance: true,
        resistanceRatio: 0.85,
        breakpoints: {
          320: {
            slidesPerView: 1.08,
            spaceBetween: 14,
          },
          480: {
            slidesPerView: 1.18,
            spaceBetween: 16,
          },
          640: {
            slidesPerView: 1.6,
            spaceBetween: 18,
          },
          768: {
            slidesPerView: 2.15,
            spaceBetween: 22,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 24,
          },
          1360: {
            slidesPerView: 3.25,
            spaceBetween: 28,
          },
        },
        on: {
          init: function () {
            updateSliderUI(this);
          },
          slideChange: function () {
            updateSliderUI(this);
          },
        },
      });

      function updateSliderUI(swiperInstance) {
        if (!swiperInstance) return;
        const currentSlides = swiperWrapper.querySelectorAll(".swiper-slide");
        const count = currentSlides.length;
        if (count === 0) return;

        const activeIdx = swiperInstance.realIndex !== undefined ? swiperInstance.realIndex : (swiperInstance.activeIndex || 0);

        // 1. Update slide counter
        if (currentCounter) {
          const displayIdx = Math.min(activeIdx + 1, count);
          currentCounter.textContent = String(displayIdx).padStart(2, "0");
        }
        if (totalCounter) {
          totalCounter.textContent = String(count).padStart(2, "0");
        }

        // 2. Update dynamic progress bar
        if (progressFill) {
          if (count <= 1) {
            progressFill.style.width = "100%";
          } else {
            const pct = Math.min(100, Math.max(12, ((activeIdx + 1) / count) * 100));
            progressFill.style.width = `${pct}%`;
          }
        }

        // 3. Update Prev / Next button disabled state
        if (prevBtn && nextBtn) {
          if (count <= 1) {
            prevBtn.classList.add("disabled");
            nextBtn.classList.add("disabled");
            prevBtn.setAttribute("disabled", "true");
            nextBtn.setAttribute("disabled", "true");
          } else {
            prevBtn.removeAttribute("disabled");
            nextBtn.removeAttribute("disabled");
            const isBeginning = activeIdx === 0;
            const isEnd = swiperInstance.isEnd || (activeIdx >= count - 1);
            prevBtn.classList.toggle("disabled", isBeginning);
            nextBtn.classList.toggle("disabled", isEnd);
          }
        }
      }

      // Autoplay Toggle Play/Pause
      let isPlaying = true;
      if (toggleBtn) {
        toggleBtn.addEventListener("click", () => {
          if (isPlaying) {
            servicesSwiper.autoplay.stop();
            toggleBtn.innerHTML = '<i class="bi bi-play-fill" aria-hidden="true"></i>';
            toggleBtn.setAttribute("title", "Resume Slideshow");
            toggleBtn.setAttribute("aria-label", "Resume Slideshow");
            isPlaying = false;
          } else {
            servicesSwiper.autoplay.start();
            toggleBtn.innerHTML = '<i class="bi bi-pause-fill" aria-hidden="true"></i>';
            toggleBtn.setAttribute("title", "Pause Slideshow");
            toggleBtn.setAttribute("aria-label", "Pause Slideshow");
            isPlaying = true;
          }
        });
      }

      // Category Filter Handling (Real Live Filtering of Slides)
      let currentActiveFilter = "all";

      filterPills.forEach((pill) => {
        pill.addEventListener("click", () => {
          const filter = pill.getAttribute("data-filter") || "all";
          if (currentActiveFilter === filter) return; // already active

          currentActiveFilter = filter;
          filterPills.forEach((p) => p.classList.remove("active"));
          pill.classList.add("active");

          // Determine matching slides
          let matchingSlides = [];
          if (filter === "all") {
            matchingSlides = allOriginalSlides;
          } else {
            matchingSlides = allOriginalSlides.filter(
              (s) => s.getAttribute("data-category") === filter
            );
          }

          // Populate Swiper Wrapper with only matching slides
          swiperWrapper.innerHTML = "";
          matchingSlides.forEach((slide) => {
            slide.classList.remove("slide-dimmed");
            slide.classList.remove("service-slide-enter");
            swiperWrapper.appendChild(slide);
            requestAnimationFrame(() => {
              slide.classList.add("service-slide-enter");
            });
          });

          // Reset Swiper to slide 0 and update internal geometry
          servicesSwiper.slideTo(0, 0);
          servicesSwiper.update();

          // Refresh UI counters, progress bar and nav state
          updateSliderUI(servicesSwiper);

          // Autoplay control
          if (matchingSlides.length <= 1) {
            servicesSwiper.autoplay.stop();
            if (toggleBtn) {
              toggleBtn.style.opacity = "0.4";
              toggleBtn.style.pointerEvents = "none";
            }
          } else {
            if (toggleBtn) {
              toggleBtn.style.opacity = "1";
              toggleBtn.style.pointerEvents = "auto";
            }
            if (isPlaying) {
              servicesSwiper.autoplay.start();
            }
          }
        });
      });
    }

    // ----------------------------------------------------
    // 9. Refresh ScrollTrigger after window load
    // ----------------------------------------------------
    window.addEventListener("load", () => {
      if (hasScrollTrigger) {
        ScrollTrigger.refresh();
      }
    });

    // ----------------------------------------------------
    // 10. Smooth Anchor Navigation with Offset (Zero Wheel Lag)
    // ----------------------------------------------------
    document.querySelectorAll('a[href^="#"]:not([href="#"]):not([data-bs-toggle]):not([data-bs-slide])').forEach((anchor) => {
      anchor.addEventListener("click", function (e) {
        const targetId = this.getAttribute("href");
        try {
          const targetEl = document.querySelector(targetId);
          if (targetEl) {
            e.preventDefault();
            const headerOffset = 80;
            const elementPosition = targetEl.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

            window.scrollTo({
              top: offsetPosition,
              behavior: "smooth",
            });
          }
        } catch (err) {
          // Ignore invalid selector
        }
      });
    });
  }

  // Safe DOM ready execution
  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initApp);
  } else {
    initApp();
  }
})();
