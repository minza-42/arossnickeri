<?php
$page_depth     = 'sub';
$active_page    = '';
$active_sidebar = 'mobeltorrt-snickerivirke';
$root           = '../';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aros Snickeri - Möbeltorrt Snickerivirke</title>
  <link rel="icon" type="image/png" href="../aros-snickeri.png">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/service-detail.css">
  <meta name="description" content="Aros Snickeri erbjuder möbeltorrt snickerivirke av högsta kvalitet – ädelträ, MDF och plywood för snickerier och möbeltillverkning. Formstabilt virke, långsam torkning och personlig service i Uppsala.">
</head>

<body>

  <?php include '../pages/header.php'; ?>

  <main class="service-detail-layout">

    <?php include '../pages/sidebar.php'; ?>

    <div class="service-detail-content">

      <div class="detail-hero">
        <img src="../img/virke-header.webp" alt="Möbeltorrt snickerivirke">
      </div>

      <article class="detail-article">

        <h1>Möbeltorrt snickerivirke</h1>
        <p class="lead-text">
          Aros Snickeri kan erbjuda snickerivirke av hög kvalitet som torkats långsamt till möbeltorrt. Vi har
          ett begränsat lager av möbeltorrt snickerivirke såsom ädelträ samt bänkskivor och skivmaterial i MDF
          och plywood.
        </p>

        <h2>Snickerivirke av hög kvalitet</h2>
        <p>
          För att få snickerivirke av hög kvalitet måste det torkas långsamt tills det blir möbeltorrt. Skillnaden
          mellan vanligt virke och ett möbeltorrt virke är att det möbeltorra virket blir mycket formstabilt vilket
          i sin tur ger snickerier som inte spricker eller rör sig.
        </p>
        <p>
          Förutom att vi tillverkar alla våra snickeriprodukter av möbeltorrt snickerivirke, kan vi även erbjuda
          det till försäljning. Vi har ett begränsat lager av möbeltorrt virke såsom ädelträ samt bänkskivor och
          skivmaterial av MDF och plywood av hög kvalitet.
        </p>
        <p>
          Har vi inte det du behöver tar vi även hem material på beställning.
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