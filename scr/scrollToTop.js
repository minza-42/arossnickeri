// scrollToTop.js
// Gör "Scroll to top"-knappen funktionell på alla sidor

document.addEventListener("DOMContentLoaded", function () {
  const btn = document.getElementById("backToTop");
  if (!btn) return;

  // Visa knappen när man scrollar ner
  window.addEventListener("scroll", function () {
    if (window.scrollY > 200) {
      btn.style.display = "block";
    } else {
      btn.style.display = "none";
    }
  });

  // Scrolla till toppen vid klick
  btn.addEventListener("click", function () {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });

  // Startläge: dold
  btn.style.display = "none";
});
