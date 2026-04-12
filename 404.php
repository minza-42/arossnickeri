<?php
$page_depth = 'root';
$root       = '';
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidan hittades inte - Aros Snickeri</title>
  <link rel="icon" type="image/png" href="aros-snickeri.png">
  <link rel="stylesheet" href="css/404.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato:wght@300;400;700&display=swap"
    rel="stylesheet">
</head>

<body>

  <div class="error-container">
    <img src="img/arossnickeri-logo.webp" alt="Aros Snickeri Logotyp" class="logo">

    <div class="error-code">404</div>

    <h1>Sidan hittades inte</h1>
    <p>Tyvärr kunde vi inte hitta sidan du söker. Den kan ha flyttats, tagits bort eller så har länken blivit felaktig.
    </p>

    <div class="error-actions">
      <a href="index.php" class="btn btn-primary">
        Till startsidan <span class="arrow">→</span>
      </a>
    </div>

    <div class="helpful-links">
      <h3>Populära sidor</h3>
      <div class="links-grid">
        <div class="link-item"><a href="html/om-oss.php">Om oss</a></div>
        <div class="link-item"><a href="html/vad-vi-gor.php">Vad vi gör</a></div>
        <div class="link-item"><a href="pages/kontakt.php">Kontakt</a></div>
        <div class="link-item"><a href="html/offentliga-miljoer.php">Offentliga miljöer</a></div>
      </div>
    </div>
  </div>

</body>

</html>