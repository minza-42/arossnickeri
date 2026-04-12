<?php
$page_depth     = 'sub';
$active_page    = '';
$active_sidebar = 'offentliga-miljoer';
$root           = '../';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aros Snickeri - Offentliga Miljöer</title>
  <link rel="icon" type="image/png" href="../aros-snickeri.png">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/service-detail.css">
  <meta name="description" content="Aros Snickeri ritar och bygger platsanpassade inredningar för offentlig miljö – kontor, butiker, restauranger och hotell i Uppsala. Hög detaljkvalitet och helhetslösningar efter dina önskemål.">
</head>

<body>

  <?php include '../includes/header.php'; ?>

  <main class="service-detail-layout">

    <?php include '../includes/sidebar.php'; ?>

    <div class="service-detail-content">

      <div class="detail-hero">
        <img src="../img/offentliga-miljö.webp" alt="Offentliga miljöer - Plook reception">
      </div>

      <article class="detail-article">

        <h1>Inredningar för företag och offentlig miljö</h1>
        <p class="lead-text">
          Aros Snickeri ritar och bygger platsanpassade inomhusmiljöer och inredningar för offentlig miljö
          såsom kontor, butiker, restauranger och hotell.
        </p>

        <h2>Hela produktionen</h2>
        <p>
          Vi är vana att hantera stora projekt och tillverkar allt från unika inredningsdetaljer till hela
          inredningar i vårt eget snickeri. Efter många år i branschen har vi även ett stort nätverk med
          flertalet duktiga samarbetspartners vilket gör att vi kan hantera hela produktionen även om designen
          innefattar andra material som exempelvis Corian, akryl, glas eller metall.
        </p>

        <h2>Platsanpassade inredningar</h2>
        <p>
          Aros Snickeri har en bred kompetens och vi kan erbjuda exempelvis receptionsdiskar, montrar, bord
          och bänkar efter din egen ritning eller enligt specialdesign av arkitekt eller formgivare. Vi arbetar
          med både små och stora aktörer och vi arbetar nära vår uppdragsgivare oavsett om det är slutkund
          eller på uppdrag av inredare eller arkitekt.
        </p>

        <h2>Hög detaljkvalitet</h2>
        <p>
          Alla produkter som lämnar vårt snickeri håller en mycket hög detaljkvalitet vilket uppskattas av
          våra kunder. Du hittar våra inredningar i många offentliga miljöer i Uppsala såsom restauranger,
          butiker och hotell.
        </p>

        <div class="detail-cta">
          <h2>Vill du veta mer?</h2>
          <p>
            <a href="../pages/kontakt.php" class="cta-link">Kontakta oss</a> gärna om har en idé eller ett projekt
            som du vill diskutera så hjälper vi dig gärna att ta fram en lösning som passar just dina behov.
          </p>
        </div>

      </article>
    </div>

  </main>

  <?php include '../includes/footer.php'; ?>

  <script src="../scr/header.js"></script>
  <script src="../scr/scrollToTop.js"></script>
  <script type="module" src="../scr/main.js"></script>
</body>

</html>