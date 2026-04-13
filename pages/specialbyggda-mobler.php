<?php
$page_depth     = 'sub';
$active_page    = '';
$active_sidebar = 'specialbyggda-mobler';
$root           = '../';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aros Snickeri - Specialbyggda Möbler</title>
  <link rel="icon" type="image/png" href="../aros-snickeri.png">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/service-detail.css">
  <meta name="description" content="Aros Snickeri tillverkar specialbyggda möbler efter dina önskemål – unika, måttanpassade möbler för hem, företag och offentlig miljö. Välj material, form och funktion för din skräddarsydda möbel!">
</head>

<body>

  <?php include __DIR__ . '/../pages/header.php'; ?>

  <main class="service-detail-layout">

    <?php include __DIR__ . '/../pages/sidebar.php'; ?>

    <div class="service-detail-content">

      <div class="detail-hero">
        <img src="../img/specialbyggda-mobler.webp" alt="Specialbyggda möbler">
      </div>

      <article class="detail-article">

        <h1>Specialbyggda möbler</h1>
        <p class="lead-text">
          Aros Snickeri tillverkar måttanpassade och specialbyggda möbler såsom sideboards, köksbord,
          skrivbord och skänkar utifrån bilder, ritningar eller befintliga förlagor.
        </p>

        <h2>Helt efter dina önskemål</h2>
        <p>
          Med en specialbyggd möbel behöver du inte begränsas av standardmått och material. Vi kan skräddarsy
          och måttanpassa exempelvis bokhyllor, sideboards, soffbord, köksbord till såväl offentlig miljö som
          privata hem. Har du bara en bild, ritning eller idé så kan vi skapa specialtillverkade möbler helt
          efter dina önskemål gällande mått, form, materialkombination samt konstruktion.
        </p>
        <p>
          Vi kan erbjuda ett flertal olika träslag och ytbehandlingar och alla våra produkter tillverkas i
          möbeltorrt virke av mycket hög kvalitet. Det gör att våra möbler inte ändrar form eller spricker
          med tiden.
        </p>

        <div class="detail-cta">
          <h2>Vill du veta mer?</h2>
          <p>
            <a href="../pages/kontakt.php" class="cta-link">Kontakta oss</a> gärna om du har en idé eller ett projekt
            som du vill diskutera så hjälper vi dig gärna att ta fram en lösning som passar just dina behov.
          </p>
        </div>

      </article>
    </div>

  </main>

  <?php include __DIR__ . '/footer.php'; ?>

  <script src="../scr/header.js"></script>
  <script src="../scr/scrollToTop.js"></script>
  <script type="module" src="../scr/main.js"></script>
</body>

</html>