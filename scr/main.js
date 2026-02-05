document.addEventListener("DOMContentLoaded", function () {
  // --- BILDSPEL FUNKTIONALITET ---
  const slides = document.querySelectorAll(".slide");
  const prevBtn = document.querySelector(".slide-btn.prev");
  const nextBtn = document.querySelector(".slide-btn.next");

  if (slides.length > 0 && prevBtn && nextBtn) {
    let currentSlide = 0;
    let slideInterval;

    function showSlide(index) {
      slides.forEach((slide) => slide.classList.remove("active"));
      slides[index].classList.add("active");
    }

    function showNextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide(currentSlide);
    }

    function showPrevSlide() {
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      showSlide(currentSlide);
    }

    function startSlideInterval() {
      slideInterval = setInterval(showNextSlide, 10000); // Byt bild var 10:e sekund
    }

    function resetSlideInterval() {
      clearInterval(slideInterval);
      startSlideInterval();
    }

    // Starta automatiskt bildspel
    startSlideInterval();

    // Event listeners för knappar
    prevBtn.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      console.log("Prev button clicked");
      showPrevSlide();
      resetSlideInterval();
    });

    nextBtn.addEventListener("click", function (e) {
      e.preventDefault();
      e.stopPropagation();
      console.log("Next button clicked");
      showNextSlide();
      resetSlideInterval();
    });

    // Touch support för mobil
    let touchStartX = 0;
    let touchEndX = 0;

    const slideContainer = document.querySelector(".slideshow-container");

    slideContainer.addEventListener(
      "touchstart",
      function (e) {
        touchStartX = e.changedTouches[0].screenX;
      },
      { passive: true },
    );

    slideContainer.addEventListener(
      "touchend",
      function (e) {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
      },
      { passive: true },
    );

    function handleSwipe() {
      if (touchEndX < touchStartX - 50) {
        // Swipe left - visa nästa
        showNextSlide();
        resetSlideInterval();
      }
      if (touchEndX > touchStartX + 50) {
        // Swipe right - visa föregående
        showPrevSlide();
        resetSlideInterval();
      }
    }
  }

  // --- BACK TO TOP KNAPP FUNKTIONALITET ---
  const backToTopButton = document.getElementById("backToTop");

  if (backToTopButton) {
    // Visa/dölj knappen när användaren scrollar
    window.addEventListener("scroll", () => {
      if (window.pageYOffset > 300) {
        backToTopButton.classList.add("show");
      } else {
        backToTopButton.classList.remove("show");
      }
    });

    // Scrolla tillbaka till toppen när knappen klickas
    backToTopButton.addEventListener("click", () => {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }
});
