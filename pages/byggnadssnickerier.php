<?php
$page_depth    = 'sub';
$active_page   = '';
$active_sidebar = 'byggnadssnickerier';
$root          = '../';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aros Snickeri - Byggnadssnickerier</title>
  <link rel="icon" type="image/x-icon" href="../favicon.ico">
  <link rel="icon" type="image/png" href="../aros-snickeri.png">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/service-detail.css">
  <meta name="description" content="Aros Snickeri erbjuder skräddarsydda byggnadssnickerier i Uppsala – fönster, dörrar, glaspartier, lister och bänkskivor i högsta kvalitet. Vi hjälper dig med både nyproduktion och reproduktion efter dina önskemål.">
</head>

<body>

  <?php include '../pages/header.php'; ?>

  <main class="service-detail-layout">

    <?php include '../pages/sidebar.php'; ?>

    <div class="service-detail-content">

      <div class="detail-hero">
        <img src="../img/byggnadssnickerier.webp" alt="Byggnadssnickerier - Fönster och dörrar">
      </div>

      <article class="detail-article">

        <h1>Byggnadssnickerier</h1>
        <p class="lead-text">
          Vi kan utifrån bilder, ritningar eller befintliga förlagor tillverka det mesta inom byggnadssnickerier
          såsom fönster, dörrar, glaspartier, luckor samt lister och smygar.
        </p>

        <h2>Omsorgsfulla ny- och reproduktioner</h2>
        <p>
          Vi tillverkar det mesta inom byggnadssnickerier såsom fönster, dörrar, glaspartier, luckor samt lister
          och smygar. Vi kan även hjälpa dig med omsorgsfulla ny- och reproduktioner av dörrar och fönster till
          gamla och nya byggnader. Har du bara en bild, ritning eller förlaga så hjälper vi dig att tillverka de
          byggnadssnickerier du behöver.
        </p>
        <p>
          Alla våra snickerier tillverkas i möbeltorrt snickerivirke och håller oavsett produkt möbelkvalitet.
        </p>

        <h2>Fönster och dörrar</h2>
        <p>
          Aros Snickeri har en bred kompetens inom byggnadssnickerier och vi kan erbjuda exempelvis fönster,
          luckor samt ytter- och innerdörrar efter din egen ritning eller enligt specialdesign av arkitekt eller
          formgivare.
        </p>
        <p>
          De snickerier vi tillverkar kan naturligtvis anpassas till dagens krav på funktionalitet och säkerhet.
        </p>

        <h2>Glaspartier</h2>
        <p>
          Vi kan erbjuda special- och måttbeställda glaspartier för hem, kontor och offentlig miljö.
        </p>
        <p>
          Vi tillverkar efter dina idéer eller befintlig förlaga och kan tack vare ett stort nätverk med flertalet
          duktiga samarbetspartners erbjuda en komplett produkt.
        </p>

        <h2>Lister och smygar</h2>
        <p>
          Vi har egen tillverkning av golv- och taklister samt dörr- och fönsterfoder och kan erbjuda kopior av
          befintliga profiler efter ritning eller förlaga.
        </p>

        <h2>Bänkskivor</h2>
        <p>
          Vi erbjuder inredningar och måttbeställda bänkskivor i Corian®, Staron och olika trämaterial till hem
          och offentliga miljöer. Kompositskivorna Corian® och Staron är hållbara material som kan skarvas utan
          synliga skarvar, med en mycket lång livslängd.
        </p>
        <p>
          <a href="mattbestallda-bankskivor.php" class="cta-link">Läs mer om måttbeställda bänkskivor</a>
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

  <?php include '../pages/footer.php'; ?>

  <script src="../scr/header.js"></script>
  <script src="../scr/scrollToTop.js"></script>
  <script type="module" src="../scr/main.js"></script>
</body>

</html>