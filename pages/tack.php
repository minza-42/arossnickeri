<?php
$page_depth  = 'sub';
$active_page = 'kontakt';
$root        = '../';

// Hämta namn från querystring (skickas av kontakt.php)
$namn = !empty($_GET['namn']) ? htmlspecialchars($_GET['namn']) : '';
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tack för ditt meddelande - Aros Snickeri</title>
  <link rel="icon" type="image/png" href="../aros-snickeri.png">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/tack.css">
  <meta name="description" content="Tack för ditt meddelande till Aros Snickeri! Vi återkommer så snart som möjligt.">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>

  <?php include '../pages/header.php'; ?>

  <main>
    <div class="thank-you-container">

      <div class="success-icon">
        <svg viewBox="0 0 24 24">
          <polyline points="20 6 9 17 4 12"></polyline>
        </svg>
      </div>

      <h1>Tack<?= $namn ? ', ' . $namn : '' ?> för ditt meddelande!</h1>
      <p class="lead-text">
        Vi har tagit emot ditt meddelande och återkommer till dig så snart som möjligt.
      </p>

      <div class="info-box">
        <h3>Vad händer nu?</h3>
        <p><strong>✓</strong> Ditt meddelande har skickats till info@arossnickeri.se</p>
        <p><strong>✓</strong> Vi svarar vanligtvis inom 48 timmar på vardagar</p>
        <p><strong>✓</strong> Brådskande ärende? Ring oss direkt på <a href="tel:018100180">018-100 180</a></p>
      </div>

      <div class="button-group">
        <a href="../index.php" class="btn btn-primary">Till startsidan</a>
        <a href="vad-vi-gor.php" class="btn btn-secondary">Våra tjänster</a>
      </div>

    </div>
  </main>

  <?php include '../pages/footer.php'; ?>

  <script src="../scr/header.js"></script>
  <script type="module" src="../scr/main.js"></script>
</body>

</html>