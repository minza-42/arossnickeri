const slides = document.querySelectorAll(".slide");
let currentSlide = 0;

function nextSlide() {
  // Ta bort "active" från nuvarande bild
  slides[currentSlide].classList.remove("active");

  // Räkna ut nästa bild (börja om på 0 om vi är vid slutet)
  currentSlide = (currentSlide + 1) % slides.length;

  // Lägg till "active" på nästa bild
  slides[currentSlide].classList.add("active");
}

// Byt bild var 5:e sekund (5000 millisekunder)
setInterval(nextSlide, 5000);
