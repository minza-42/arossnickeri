document.addEventListener("DOMContentLoaded", function () {
  let currentSlide = 0;
  const slides = document.querySelectorAll(".slide");
  const prevBtn = document.querySelector(".slide-btn.prev");
  const nextBtn = document.querySelector(".slide-btn.next");
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
});
