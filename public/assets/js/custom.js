// Smooth Scroll Animations
document.addEventListener("DOMContentLoaded", function () {
  // Intersection Observer for scroll animations
  const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px",
  };

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("animated");
        entry.target.style.opacity = "1";
        entry.target.style.transform = "translateY(0)";
      }
    });
  }, observerOptions);

  // Observe all elements with animate-on-scroll class
  document.querySelectorAll(".animate-on-scroll").forEach((el) => {
    observer.observe(el);
  });

  // Header scroll effect
  let lastScroll = 0;
  const header = document.querySelector("header");

  window.addEventListener("scroll", () => {
    const currentScroll = window.pageYOffset;
    const headerHeight = header.offsetHeight;

    if (currentScroll > headerHeight) {
      header.classList.add("scrolled");
    } else {
      header.classList.remove("scrolled");
    }

    lastScroll = currentScroll;
  });

  // Smooth reveal animations for sections
  const sections = document.querySelectorAll("section");
  const sectionObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.style.opacity = "1";
          entry.target.style.transform = "translateY(0)";
        }
      });
    },
    { threshold: 0.1 }
  );

  sections.forEach((section) => {
    section.style.opacity = "0";
    section.style.transform = "translateY(30px)";
    section.style.transition = "all 0.8s ease-out";
    sectionObserver.observe(section);
  });

  // Phone mockup hover effects
  const phoneMockups = document.querySelectorAll(".phone-mockup");
  phoneMockups.forEach((phone) => {
    phone.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-10px) scale(1.02)";
    });
    phone.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0) scale(1)";
    });
  });

  // Button ripple effect
  const buttons = document.querySelectorAll("button, .btn-primary");
  buttons.forEach((button) => {
    button.addEventListener("click", function (e) {
      const ripple = document.createElement("span");
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;

      ripple.style.width = ripple.style.height = size + "px";
      ripple.style.left = x + "px";
      ripple.style.top = y + "px";
      ripple.classList.add("ripple");

      this.appendChild(ripple);

      setTimeout(() => {
        ripple.remove();
      }, 600);
    });
  });

  // Counter animation for numbers
  const counters = document.querySelectorAll(".counter");
  const counterObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (
          entry.isIntersecting &&
          !entry.target.classList.contains("counted")
        ) {
          const counter = entry.target;
          const target = parseInt(counter.getAttribute("data-target"));
          const duration = 2000;
          const increment = target / (duration / 16);
          let current = 0;

          const updateCounter = () => {
            current += increment;
            if (current < target) {
              counter.textContent = Math.floor(current).toLocaleString();
              requestAnimationFrame(updateCounter);
            } else {
              counter.textContent = target.toLocaleString();
            }
          };

          counter.classList.add("counted");
          updateCounter();
        }
      });
    },
    { threshold: 0.5 }
  );

  counters.forEach((counter) => {
    counterObserver.observe(counter);
  });

  // Progress bar animation
  const progressBars = document.querySelectorAll(".progress-bar");
  const progressObserver = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const progressBar = entry.target;
          const width = progressBar.getAttribute("data-width");
          setTimeout(() => {
            progressBar.style.width = width + "%";
          }, 200);
        }
      });
    },
    { threshold: 0.5 }
  );

  progressBars.forEach((bar) => {
    progressObserver.observe(bar);
  });

  // Parallax effect for hero sections
  window.addEventListener("scroll", () => {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll(".parallax");

    parallaxElements.forEach((element) => {
      const speed = element.getAttribute("data-speed") || 0.5;
      element.style.transform = `translateY(${scrolled * speed}px)`;
    });
  });

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute("href"));
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        });
      }
    });
  });

  // Add loading animation
  window.addEventListener("load", () => {
    document.body.classList.add("loaded");
  });

  // Stagger animation for list items
  const listItems = document.querySelectorAll(".stagger-item");
  listItems.forEach((item, index) => {
    item.style.opacity = "0";
    item.style.transform = "translateY(20px)";
    item.style.transition = `all 0.5s ease ${index * 0.1}s`;

    const listObserver = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
          }
        });
      },
      { threshold: 0.1 }
    );

    listObserver.observe(item);
  });
});

// Add ripple effect CSS dynamically
const style = document.createElement("style");
style.textContent = `
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.6);
        transform: scale(0);
        animation: ripple-animation 0.6s ease-out;
        pointer-events: none;
    }
    
    @keyframes ripple-animation {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
    
    button, .btn-primary {
        position: relative;
        overflow: hidden;
    }
`;
document.head.appendChild(style);

// Mobile Menu Toggle (only for non-dashboard pages)
// Check if we're on dashboard by looking for dashboard-specific elements
(function() {
  // Only run if not on dashboard page (dashboard handles its own mobile menu)
  const isDashboardPage = document.getElementById("sidebar-md") || 
                          window.location.pathname.includes("dashboard");
  
  if (!isDashboardPage) {
    const mobileMenuBtnEl = document.getElementById("mobile-menu-btn");
    const mobileMenuEl = document.getElementById("mobile-menu");

    if (mobileMenuBtnEl && mobileMenuEl) {
      mobileMenuBtnEl.addEventListener("click", () => {
        mobileMenuEl.classList.toggle("hidden");
        const icon = mobileMenuBtnEl.querySelector("i");
        if (icon) {
          if (mobileMenuEl.classList.contains("hidden")) {
            icon.classList.remove("fa-times");
            icon.classList.add("fa-bars");
          } else {
            icon.classList.remove("fa-bars");
            icon.classList.add("fa-times");
          }
        }
      });

      // Close mobile menu when clicking on a link
      const mobileLinks = mobileMenuEl.querySelectorAll("a");
      mobileLinks.forEach((link) => {
        link.addEventListener("click", () => {
          mobileMenuEl.classList.add("hidden");
          const icon = mobileMenuBtnEl.querySelector("i");
          if (icon) {
            icon.classList.remove("fa-times");
            icon.classList.add("fa-bars");
          }
        });
      });
    }
  }
})();

// Language Popup Functionality
document.addEventListener("DOMContentLoaded", function () {
  const languageBtn = document.getElementById("language-btn");
  const languageDropdown = document.getElementById("language-dropdown");
  const currentLang = document.getElementById("current-lang");
  const mobileLanguageBtn = document.getElementById("mobile-language-btn");
  const mobileCurrentLang = document.getElementById("mobile-current-lang");

  // Get saved language or default to EN
  let selectedLang = localStorage.getItem("selectedLanguage") || "EN";

  // Update current language display
  if (currentLang) currentLang.textContent = selectedLang;
  if (mobileCurrentLang) mobileCurrentLang.textContent = selectedLang;

  // Update checkmarks
  document.querySelectorAll(".language-option").forEach((option) => {
    const lang = option.getAttribute("data-lang");
    const check = option.querySelector("[data-check]");
    if (check && check.getAttribute("data-check") === selectedLang) {
      check.classList.remove("hidden");
    } else if (check) {
      check.classList.add("hidden");
    }
  });

  // Desktop language dropdown
  if (languageBtn && languageDropdown) {
    languageBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      languageDropdown.classList.toggle("hidden");
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", (e) => {
      if (
        !languageBtn.contains(e.target) &&
        !languageDropdown.contains(e.target)
      ) {
        languageDropdown.classList.add("hidden");
      }
    });

    // Language selection
    document.querySelectorAll(".language-option").forEach((option) => {
      option.addEventListener("click", (e) => {
        e.preventDefault();
        const lang = option.getAttribute("data-lang");
        selectedLang = lang;
        localStorage.setItem("selectedLanguage", lang);

        // Update displays
        currentLang.textContent = lang;
        if (mobileCurrentLang) mobileCurrentLang.textContent = lang;

        // Update checkmarks
        document.querySelectorAll("[data-check]").forEach((check) => {
          if (check.getAttribute("data-check") === lang) {
            check.classList.remove("hidden");
          } else {
            check.classList.add("hidden");
          }
        });

        languageDropdown.classList.add("hidden");
      });
    });
  }

  // Pricing Auto-scroll
  const pricingLink = document.querySelector('a[href="#pricing"]');
  if (pricingLink) {
    pricingLink.addEventListener("click", function (e) {
      e.preventDefault();
      const pricingSection = document.getElementById("pricing");
      if (pricingSection) {
        const headerOffset = 80;
        const elementPosition = pricingSection.getBoundingClientRect().top;
        const offsetPosition =
          elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });
      }
    });
  }
});
