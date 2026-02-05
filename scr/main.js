document.addEventListener("DOMContentLoaded", function () {
  // --- BILDSPEL FUNKTIONALITET ---
  const slides = document.querySelectorAll(".slide");
  const prevBtn = document.querySelector(".slide-btn.prev");
  const nextBtn = document.querySelector(".slide-btn.next");

  if (slides.length > 0) {
    let currentSlide = 0;
    let slideInterval;

    function showNextSlide() {
      slides[currentSlide].classList.remove("active");
      currentSlide = (currentSlide + 1) % slides.length;
      slides[currentSlide].classList.add("active");
    }

    function showPrevSlide() {
      slides[currentSlide].classList.remove("active");
      currentSlide = (currentSlide - 1 + slides.length) % slides.length;
      slides[currentSlide].classList.add("active");
    }

    function startSlideInterval() {
      slideInterval = setInterval(showNextSlide, 10000); // Byt bild var 10:e sekund
    }

    function resetSlideInterval() {
      clearInterval(slideInterval);
      startSlideInterval();
    }

    startSlideInterval();

    if (prevBtn && nextBtn) {
      prevBtn.addEventListener("click", () => {
        showPrevSlide();
        resetSlideInterval();
      });
      nextBtn.addEventListener("click", () => {
        showNextSlide();
        resetSlideInterval();
      });
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
