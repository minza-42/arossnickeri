<?php
$page_depth  = 'sub';
$active_page = 'kontakt';
$root        = '../';

// ============================================================
//  E-POSTHANTERING – körs direkt när formuläret skickas
// ============================================================
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Sanitering
  function sanitize_input($data)
  {
    return htmlspecialchars(stripslashes(trim($data)));
  }

  $namn       = sanitize_input($_POST['namn']       ?? '');
  $epost      = sanitize_input($_POST['epost']      ?? '');
  $telefon    = sanitize_input($_POST['telefon']    ?? '');
  $meddelande = sanitize_input($_POST['meddelande'] ?? '');

  // Validering
  $errors = [];
  if (empty($namn))      $errors[] = "Namn är obligatoriskt";
  if (empty($epost))     $errors[] = "E-post är obligatoriskt";
  elseif (!filter_var($epost, FILTER_VALIDATE_EMAIL)) $errors[] = "Ogiltig e-postadress";
  if (empty($meddelande)) $errors[] = "Meddelande är obligatoriskt";

  // Hantera bilduppladdning
  $attachments = [];
  $allowed_types = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
  $max_file_size = 10 * 1024 * 1024; // 10 MB per bild

  if (!empty($_FILES['bilder']['name'][0])) {
    foreach ($_FILES['bilder']['tmp_name'] as $i => $tmp_name) {
      if ($_FILES['bilder']['error'][$i] !== UPLOAD_ERR_OK) continue;
      if ($_FILES['bilder']['size'][$i] > $max_file_size) {
        $errors[] = "Bilden \"" . htmlspecialchars($_FILES['bilder']['name'][$i]) . "\" är för stor (max 10 MB)";
        continue;
      }
      $finfo     = finfo_open(FILEINFO_MIME_TYPE);
      $mime_type = finfo_file($finfo, $tmp_name);
      finfo_close($finfo);
      if (!in_array($mime_type, $allowed_types)) {
        $errors[] = "Filtypen för \"" . htmlspecialchars($_FILES['bilder']['name'][$i]) . "\" stöds inte (JPG, PNG, GIF, WEBP tillåtet)";
        continue;
      }
      $attachments[] = [
        'tmp_name' => $tmp_name,
        'name'     => $_FILES['bilder']['name'][$i],
        'mime'     => $mime_type,
      ];
    }
  }

  if (empty($errors)) {
    $to      = "info@arossnickeri.se";
    $subject = "Nytt meddelande från kontaktformulär - Aros Snickeri";

    $html_body = "
    <!DOCTYPE html>
    <html lang='sv'>
    <head>
      <meta charset='UTF-8'>
      <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; }
        .header { background-color: #c7081b; color: white; padding: 20px; text-align: center; }
        .content { background-color: white; padding: 30px; margin-top: 20px; border-radius: 5px; }
        .field { margin-bottom: 20px; }
        .label { font-weight: bold; color: #c7081b; display: block; margin-bottom: 5px; }
        .value { padding: 10px; background-color: #f5f5f5; border-left: 3px solid #c7081b; }
      </style>
    </head>
    <body>
      <div class='container'>
        <div class='header'><h2>Nytt meddelande från kontaktformuläret</h2></div>
        <div class='content'>
          <div class='field'>
            <span class='label'>Namn:</span>
            <div class='value'>" . htmlspecialchars($namn) . "</div>
          </div>
          <div class='field'>
            <span class='label'>E-post:</span>
            <div class='value'>" . htmlspecialchars($epost) . "</div>
          </div>
          <div class='field'>
            <span class='label'>Telefon:</span>
            <div class='value'>" . (!empty($telefon) ? htmlspecialchars($telefon) : 'Ej angiven') . "</div>
          </div>
          <div class='field'>
            <span class='label'>Meddelande:</span>
            <div class='value'>" . nl2br(htmlspecialchars($meddelande)) . "</div>
          </div>
          " . (!empty($attachments) ? "<div class='field'><span class='label'>Bilagor:</span><div class='value'>" . count($attachments) . " bild(er) bifogad(e)</div></div>" : "") . "
        </div>
      </div>
    </body>
    </html>";

    $boundary = md5(uniqid(time()));

    if (!empty($attachments)) {
      // Multipart e-post med bilagor
      $headers  = "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";
      $headers .= "From: " . $epost . "\r\n";
      $headers .= "Reply-To: " . $epost . "\r\n";
      $headers .= "X-Mailer: PHP/" . phpversion();

      $body  = "--{$boundary}\r\n";
      $body .= "Content-Type: text/html; charset=UTF-8\r\n";
      $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
      $body .= chunk_split(base64_encode($html_body)) . "\r\n";

      foreach ($attachments as $att) {
        $file_data = file_get_contents($att['tmp_name']);
        $body .= "--{$boundary}\r\n";
        $body .= "Content-Type: " . $att['mime'] . "; name=\"" . $att['name'] . "\"\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n";
        $body .= "Content-Disposition: attachment; filename=\"" . $att['name'] . "\"\r\n\r\n";
        $body .= chunk_split(base64_encode($file_data)) . "\r\n";
      }
      $body .= "--{$boundary}--";

      $mail_sent = mail($to, $subject, $body, $headers);
    } else {
      // Vanlig HTML-e-post utan bilagor
      $headers  = "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html; charset=UTF-8\r\n";
      $headers .= "From: " . $epost . "\r\n";
      $headers .= "Reply-To: " . $epost . "\r\n";
      $headers .= "X-Mailer: PHP/" . phpversion();

      $mail_sent = mail($to, $subject, $html_body, $headers);
    }

    if ($mail_sent) {
      header("Location: tack.php?namn=" . urlencode($namn));
      exit;
    } else {
      $error_message = "Ett fel uppstod. Försök igen eller kontakta oss direkt via telefon.";
    }
  } else {
    $error_message = implode(", ", $errors);
  }
} elseif (!empty($_GET['error'])) {
  $error_message = htmlspecialchars($_GET['error']);
}
?>
<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aros Snickeri - Kontakt</title>
  <link rel="icon" type="image/png" href="../aros-snickeri.png">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="../css/kontakt.css">
  <meta name="description" content="Kontakta Aros Snickeri i Uppsala – vi hjälper dig med frågor, offert eller rådgivning kring specialsnickerier, möbler och inredningar. Välkommen att höra av dig!">
  <style>
    .form-hint {
      display: block;
      margin-top: 5px;
      font-size: 0.85em;
      color: #666;
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>

  <?php include '../pages/header.php'; ?>

  <main class="kontakt-layout">

    <section class="map-section">
      <div class="map-container">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2008.6891234567!2d17.6789012!3d59.8567890!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465fcbf123456789%3A0x1234567890abcdef!2sAnna%20Fabrisgata%2012a%2C%20754%2054%20Uppsala!5e0!3m2!1ssv!2sse!4v1234567890123!5m2!1ssv!2sse"
          width="100%" height="100%" style="border:0;display:block;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>
      </div>
    </section>

    <div class="kontakt-content">

      <div class="kontakt-left">
        <div class="kontakt-info">
          <h2>Hör gärna av dig</h2>
          <p>Tveka inte att höra av dig om du vill ha mer information eller har frågor av något slag.</p>

          <div class="info-item">
            <img src="../img/svg/phone.svg" alt="Telefon">
            <div><a href="tel:018100180">018-100 180</a></div>
          </div>

          <div class="info-item">
            <img src="../img/svg/mail.svg" alt="E-post">
            <div><a href="mailto:info@arossnickeri.se">info@arossnickeri.se</a></div>
          </div>

          <div class="info-item">
            <img src="../img/svg/map-pin-black.svg" alt="Karta-pin">
            <div><strong>Anna Fabrisgata 12a, 754 54 Uppsala</strong></div>
          </div>

          <div class="info-item">
            <img src="../img/svg/map-pin-black.svg" alt="Parkering">
            <div>
              <strong>Parkering</strong>
              <p>Gratis parkering finns vid verkstaden</p>
            </div>
          </div>

          <div class="social-media-section">
            <h3>Följ oss</h3>
            <div class="social-links">
              <a href="https://www.instagram.com/arossnickeri" target="_blank" rel="noopener noreferrer"
                class="social-link" aria-label="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                  <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                </svg>
                <span>Instagram</span>
              </a>
              <a href="https://www.linkedin.com/company/arossnickeri" target="_blank" rel="noopener noreferrer"
                class="social-link" aria-label="LinkedIn">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                  <rect x="2" y="9" width="4" height="12"></rect>
                  <circle cx="4" cy="4" r="2"></circle>
                </svg>
                <span>LinkedIn</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="kontakt-right">
        <div class="kontakt-right-inner">

          <?php if ($error_message): ?>
            <div class="form-error" role="alert">
              <p><?= $error_message ?></p>
            </div>
          <?php endif; ?>

          <form class="kontakt-form" action="kontakt.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
              <label for="namn">Namn *</label>
              <input type="text" id="namn" name="namn" required
                value="<?= htmlspecialchars($_POST['namn'] ?? '') ?>">
            </div>

            <div class="form-group">
              <label for="epost">E-post *</label>
              <input type="email" id="epost" name="epost" required
                value="<?= htmlspecialchars($_POST['epost'] ?? '') ?>">
            </div>

            <div class="form-group">
              <label for="telefon">Telefon</label>
              <input type="tel" id="telefon" name="telefon"
                value="<?= htmlspecialchars($_POST['telefon'] ?? '') ?>">
            </div>

            <div class="form-group">
              <label for="meddelande">Meddelande *</label>
              <textarea id="meddelande" name="meddelande" rows="6" required><?= htmlspecialchars($_POST['meddelande'] ?? '') ?></textarea>
            </div>

            <div class="form-group">
              <label for="bilder">Bilder (valfritt)</label>
              <input type="file" id="bilder" name="bilder[]" multiple
                accept="image/jpeg,image/png,image/gif,image/webp">
              <small class="form-hint">Du kan bifoga upp till 5 bilder (JPG, PNG, GIF, WEBP – max 10 MB per bild)</small>
            </div>

            <button type="submit" class="submit-btn">
              Skicka <span class="arrow">&rarr;</span>
            </button>

          </form>
        </div>
      </div>

    </div>

  </main>

  <?php include '../pages/footer.php'; ?>

  <script src="../scr/header.js"></script>
  <script src="../scr/scrollToTop.js"></script>
  <script type="module" src="../scr/main.js"></script>
  <script>
    document.getElementById('bilder').addEventListener('change', function() {
      if (this.files.length > 5) {
        alert('Du kan bifoga max 5 bilder åt gången.');
        this.value = '';
      }
    });
  </script>
</body>

</html>