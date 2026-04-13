<?php
$page_depth     = 'sub';
$active_page    = '';
$active_sidebar = 'platsbyggda-bokhyllor';
$root           = '../';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aros Snickeri - Platsbyggda Bokhyllor</title>
  <link rel="icon" type="image/png" href="../aros-snickeri.png">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/service-detail.css">
  <meta name="description" content="Aros Snickeri tillverkar platsbyggda bokhyllor och hyllsystem efter dina önskemål – måttanpassade lösningar för hem och offentlig miljö. Välj träslag, form och design för en unik bokhylla i högsta kvalitet.">
</head>

<body>

  <?php include '../pages/header.php'; ?>

  <main class="service-detail-layout">

    <?php include '../pages/sidebar.php'; ?>

    <div class="service-detail-content">

      <div class="detail-hero">
        <img src="../img/bokhylla-header.webp" alt="Platsbyggda bokhyllor">
      </div>

      <article class="detail-article">

        <h1>Platsbyggda bokhyllor</h1>
        <p class="lead-text">
          Aros Snickeri tillverkar måttanpassade och platsbyggda bokhyllor, hyllsystem och walk in closets
          utifrån bild, ritning eller befintlig förlaga.
        </p>

        <h2>Helt efter dina önskemål</h2>
        <p>
          Vi har under åren tillverkat såväl fristående som platsbyggda bokhyllor för både privata hem och
          offentlig miljö. Har du en idé så hjälper vi dig gärna med ett designförslag eller kompletterar med
          smarta lösningar.
        </p>
        <p>
          Med en platsbyggd bokhylla behöver du inte begränsas av standardmått och material. Vi tillverkar och
          platsbygger bokhyllor till både offentlig miljö och privata hem, helt efter kundens önskemål. Har du
          bara en bild, ritning eller idé så kan vi tillverka och platsbygga din bokhylla efter önskemål om mått,
          form, materialkombination samt konstruktion.
        </p>
        <p>
          Vi kan erbjuda ett flertal olika träslag och ytbehandlingar. Alla våra bokhyllor tillverkas i möbeltorrt
          virke av mycket hög kvalitet vilket gör att de inte ändrar form eller spricker med tiden.
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

  <?php include '../pages/footer.php'; ?>

  <script src="../scr/header.js"></script>
  <script src="../scr/scrollToTop.js"></script>
  <script type="module" src="../scr/main.js"></script>
</body>

</html>