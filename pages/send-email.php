<?php
// Säkerhetsinställningar
header('Content-Type: text/html; charset=UTF-8');

// Kontrollera att formuläret skickats via POST
if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: kontakt.php");
    exit;
}

// Sanitera och validera indata
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Hämta formulärdata
$namn      = sanitize_input($_POST['namn'] ?? '');
$epost     = sanitize_input($_POST['epost'] ?? '');
$telefon   = sanitize_input($_POST['telefon'] ?? '');
$meddelande = sanitize_input($_POST['meddelande'] ?? '');

// Validering
$errors = [];

if (empty($namn)) {
    $errors[] = "Namn är obligatoriskt";
}

if (empty($epost)) {
    $errors[] = "E-post är obligatoriskt";
} elseif (!filter_var($epost, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Ogiltig e-postadress";
}

if (empty($meddelande)) {
    $errors[] = "Meddelande är obligatoriskt";
}

// Om det finns fel, gå tillbaka till formuläret
if (!empty($errors)) {
    header("Location: kontakt.php?error=" . urlencode(implode(", ", $errors)));
    exit;
}

// E-postinställningar
$to      = "info@arossnickeri.se";
$subject = "Nytt meddelande från kontaktformulär - Aros Snickeri";

// E-postinnehåll (HTML-format)
$email_content = "
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
        <div class='header'>
            <h2>Nytt meddelande från kontaktformuläret</h2>
        </div>
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
        </div>
    </div>
</body>
</html>
";

// E-posthuvuden
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= "From: " . $epost . "\r\n";
$headers .= "Reply-To: " . $epost . "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

// Skicka e-post
$mail_sent = mail($to, $subject, $email_content, $headers);

if ($mail_sent) {
    header("Location: tack.php?namn=" . urlencode($namn));
    exit;
} else {
    header("Location: kontakt.php?error=" . urlencode("Ett fel uppstod. Försök igen eller kontakta oss direkt via telefon."));
    exit;
}
