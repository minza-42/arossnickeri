<?php
$page_depth  = 'root';
$active_page = 'hem';
$root        = '';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aros Snickeri</title>
  <link rel="icon" type="image/png" href="aros-snickeri.png">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/startpage.min.css">
  <link rel="stylesheet" href="css/responsive.min.css">
  <link rel="preload" as="image" href="img/background.webp">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
  <meta name="description" content="Aros Snickeri AB – Specialsnickeriet i Uppsala. Vi tillverkar platsanpassade inredningar och möbler för företag, offentliga miljöer och privata hem. Kvalitet, noggrannhet och flexibilitet i över 35 år.">
</head>

<body>

  <?php include 'includes/header.php'; ?>

  <section class="hero-section">
    <div class="slideshow-container">
      <img src="img/background.webp" class="slide active" alt="Miljöbild 1" width="1400" height="500">
      <img src="img/resturant-counter.webp" class="slide" alt="Miljöbild 2" width="1400" height="500">
    </div>
    <div class="hero-overlay" aria-hidden="false">
      <div class="hero-text">
        <span class="tagline">Specialsnickeri · Uppsala · Sedan 1988</span>
        <h1>Hantverk som<br><em>håller i generationer</em></h1>
        <p>Platsanpassade inredningar och möbler för företag, offentliga miljöer och privata hem.</p>
        <a href="pages/kontakt.php" class="hero-cta">
          Kontakta oss <span class="arrow">→</span>
        </a>
      </div>
    </div>
  </section>

  <section class="specialty-section">
    <span class="section-label">Aros Snickeri</span>
    <h2>Specialsnickeriet i Uppsala</h2>
    <div class="section-divider"></div>
    <p>Vi är specialister på inredningar till offentliga miljöer och företag.</p>
  </section>

  <section class="info-section">
    <a class="column column-link" href="includes/vad-vi-gor.php">
      <div class="icon"><img src="img/svg/trolley.svg" alt="Varukorg" width="80" height="80"></div>
      <h3>Produkter</h3>
      <p>
        Aros Snickeri tillverkar platsanpassade inredningar och möbler för företag,
        offentliga miljöer och privata hem. Med gedigen erfarenhet och fokus på kvalitet
        tar vi fram lösningar som passar varje projekt – från idé och design till färdig
        och monterad produkt.
      </p>
      <span class="read-more">Vad vi kan göra →</span>
    </a>

    <a class="column column-link" href="includes/om-oss.php">
      <div class="icon"><img src="img/svg/hardware.svg" alt="Globe" width="80" height="80"></div>
      <h3>Om Aros Snickeri</h3>
      <p>
        Aros Snickeri har byggt unika möbler och inredningar i över 35 år.
        Med lång erfarenhet och stor passion för hantverk skapar vi lösningar
        anpassade efter varje kunds behov. För oss är kvalitet, noggrannhet
        och flexibilitet ledorden i vår verksamhet – från idé till färdig produkt.
      </p>
      <span class="read-more">Om Aros Snickeri →</span>
    </a>
  </section>

  <section class="about-section-home">
    <img src="img/aros-loggor.png" alt="Våra kunder" class="client-logos" width="500" height="120">
    <div class="about-text">
      <h2>Aros Snickeri</h2>
      <p>Vi arbetar med beställningssnickerier inom byggnadssnickerier, offentlig miljö samt platsanpassad inredning
        såsom trappor, receptionsdiskar, bänkskivor, bokhyllor och möbler.</p>
      <p>Vi har en toppmodern och välutrustad maskinpark med bland annat datorstyrda maskiner, vilket öppnar upp
        möjligheten för att tillverka större serier.</p>
      <p>Även om vår maskinpark till stor del är datoriserad lever det traditionella hantverket kvar och genomsyrar alla
        våra snickerier.</p>
      <a href="includes/om-oss.php" class="read-more">Mer om oss →</a>
    </div>
  </section>

  <?php include 'includes/footer.php'; ?>

  <script src="scr/scrollToTop.min.js" defer></script>
  <script src="scr/header.min.js" defer></script>
  <script src="scr/main.min.js" defer></script>
</body>

</html>