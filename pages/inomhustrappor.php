<?php
$page_depth     = 'sub';
$active_page    = '';
$active_sidebar = 'inomhustrappor';
$root           = '../';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aros Snickeri - Inomhustrappor</title>
  <link rel="icon" type="image/png" href="../aros-snickeri.png">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/service-detail.css">
  <meta name="description" content="Aros Snickeri tillverkar måttbeställda inomhustrappor i trä och smide – unika trappor för hem och offentlig miljö, anpassade efter dina önskemål och ritningar. Hög kvalitet och personlig service i Uppsala.">
</head>

<body>

  <?php include '../pages/header.php'; ?>

  <main class="service-detail-layout">

    <?php include '../pages/sidebar.php'; ?>

    <div class="service-detail-content">

      <div class="detail-hero">
        <img src="../img/trappor_header.webp" alt="Måttbeställda inomhustrappor">
      </div>

      <article class="detail-article">

        <h1>Måttbeställda trappor i trä och smide</h1>
        <p class="lead-text">
          Konstruktion och tillverkning av trappor kräver kunskap både inom material och design. Aros Snickeri
          konstruerar och specialbygger måttbeställda trappor i träslag som furu, ek, ask och valnöt, även i
          kombination med smide och glas.
        </p>

        <h2>Trappans design</h2>
        <p>
          Trappor tillverkas i regel i ett antal grundformer som brukar benämnas utifrån vilken form de har,
          exempelvis rak, L-form eller U-form. Vad som avgör designen kan vara planlösning och arkitektur men
          ibland kan det vara eget tycke och smak eller hemmets karaktär som blir avgörande. Aros Snickeri kan
          bygga trappor i samråd med arkitekt utifrån befintliga ritningar eller ta fram egna ritningar och bygga
          en trapp helt efter dina önskemål.
        </p>

        <h2>Träslag för trappor</h2>
        <p>
          Att designa en trappa är en process där man skall försöka sammanfoga personlig design med funktion till
          en fungerande enhet. I designen är valet av träslag en viktig komponent och trappen kan byggas i exempelvis
          furu, ek, ask eller valnöt som i sin tur kan varieras i oändlighet genom olika ytbehandlingar.
        </p>

        <h2>Trappor för offentliga miljöer</h2>
        <p>
          Aros Snickeri erbjuder projektering, konstruktion, tillverkning och montering av unika trappor och räcken
          för offentlig miljö såsom restauranger, hotell, butiker eller kontor. Vi levererar kompletta produkter och
          lösningar av hög kvalitet, konstruerade efter gällande säkerhets- och byggnormer.
        </p>
        <p>
          Vi är vana att hantera stora projekt och tillverkar allt i vårt eget snickeri. Efter många år i branschen
          har vi även ett stort nätverk med flertalet duktiga samarbetspartners vilket gör att vi kan hantera hela
          produktionen även om designen innefattar andra material som exempelvis Corian®, akryl, glas eller metall.
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