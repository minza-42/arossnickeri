// ============================================
// HEADER FUNCTIONALITY
// ============================================

class HeaderManager {
  constructor() {
    this.header = document.querySelector(".main-header");
    this.mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
    this.mobileNavigation = document.querySelector(".mobile-navigation");
    this.body = document.body;

    this.init();
  }

  init() {
    this.setupScrollEffect();
    this.setupMobileMenu();
    this.setupActiveNavigation();
  }

  // Lägg till skugga på header vid scroll
  setupScrollEffect() {
    let lastScroll = 0;

    window.addEventListener("scroll", () => {
      const currentScroll = window.pageYOffset;

      if (currentScroll > 50) {
        this.header.classList.add("scrolled");
      } else {
        this.header.classList.remove("scrolled");
      }

      lastScroll = currentScroll;
    });
  }

  // Mobile menu toggle
  setupMobileMenu() {
    if (!this.mobileMenuToggle || !this.mobileNavigation) return;

    this.mobileMenuToggle.addEventListener("click", () => {
      this.toggleMobileMenu();
    });

    // Stäng menyn när man klickar på en länk
    const mobileLinks = this.mobileNavigation.querySelectorAll("a");
    mobileLinks.forEach((link) => {
      link.addEventListener("click", () => {
        this.closeMobileMenu();
      });
    });

    // Stäng menyn med Escape-tangenten
    document.addEventListener("keydown", (e) => {
      if (
        e.key === "Escape" &&
        this.mobileNavigation.getAttribute("hidden") === null
      ) {
        this.closeMobileMenu();
      }
    });
  }

  toggleMobileMenu() {
    const isExpanded =
      this.mobileMenuToggle.getAttribute("aria-expanded") === "true";

    if (isExpanded) {
      this.closeMobileMenu();
    } else {
      this.openMobileMenu();
    }
  }

  openMobileMenu() {
    this.mobileMenuToggle.setAttribute("aria-expanded", "true");
    this.mobileMenuToggle.setAttribute("aria-label", "Stäng meny");
    this.mobileNavigation.removeAttribute("hidden");
    this.body.style.overflow = "hidden"; // Förhindra scrolling
  }

  closeMobileMenu() {
    this.mobileMenuToggle.setAttribute("aria-expanded", "false");
    this.mobileMenuToggle.setAttribute("aria-label", "Öppna meny");
    this.mobileNavigation.setAttribute("hidden", "");
    this.body.style.overflow = ""; // Återställ scrolling
  }

  // Markera aktiv sida i navigationen
  setupActiveNavigation() {
    const currentPage = window.location.pathname;
    const navLinks = document.querySelectorAll(
      ".navigation a, .mobile-navigation a",
    );

    navLinks.forEach((link) => {
      const linkPath = new URL(link.href).pathname;

      // Jämför sökvägar och markera aktiv länk
      if (
        currentPage === linkPath ||
        (currentPage.endsWith("/") &&
          linkPath === currentPage + "index.html") ||
        (linkPath.endsWith("/") && currentPage === linkPath + "index.html")
      ) {
        link.classList.add("active");
      }
    });
  }
}

// Initiera header när DOM är redo
document.addEventListener("DOMContentLoaded", () => {
  new HeaderManager();
});

// Export för module användning
export default HeaderManager;
