<?php
// header.php – används av sidor i /html/ och /pages/
// $active_page kan sättas av varje sida för att markera aktiv länk
// $page_depth: 'sub' = sidor i html/ eller pages/ (relativa sökvägar med ../)
//              'root' = index.php i rooten
if (!isset($page_depth)) $page_depth = 'sub';
$root = ($page_depth === 'root') ? '' : '../';
?>
<header class="main-header">
  <div class="header-wrapper">

    <nav class="navigation" aria-label="Huvudnavigation">
      <ul>
        <li><a href="<?= $root ?>index.php" <?= (isset($active_page) && $active_page === 'hem') ? ' class="active"' : '' ?>>Hem</a></li>
        <li><a href="<?= $root ?>includes/om-oss.php" <?= (isset($active_page) && $active_page === 'om-oss') ? ' class="active"' : '' ?>>Om oss</a></li>
        <li><a href="<?= $root ?>includes/vad-vi-gor.php" <?= (isset($active_page) && $active_page === 'vad-vi-gor') ? ' class="active"' : '' ?>>Vad vi gör</a></li>
        <li><a href="<?= $root ?>pages/kontakt.php" <?= (isset($active_page) && $active_page === 'kontakt') ? ' class="active"' : '' ?>>Kontakt</a></li>
      </ul>
    </nav>

    <div class="logo-container">
      <a href="<?= $root ?>index.php" title="Hem" aria-label="Aros Snickeri Startsida">
        <img src="<?= $root ?>img/arossnickeri-logo.webp" alt="Aros Snickeri Logotyp">
      </a>
    </div>

    <div class="contact-info">
      <div class="contact-item">
        <img src="<?= $root ?>img/svg/phone.svg" alt="" aria-hidden="true">
        <a href="tel:018100180">018-100 180</a>
      </div>
      <div class="contact-item">
        <img src="<?= $root ?>img/svg/mail.svg" alt="" aria-hidden="true">
        <a href="mailto:info@arossnickeri.se">info@arossnickeri.se</a>
      </div>
    </div>

    <button class="mobile-menu-toggle" aria-label="Öppna meny" aria-expanded="false">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>

  </div>

  <nav class="mobile-navigation" aria-label="Mobilnavigation" hidden>
    <ul>
      <li><a href="<?= $root ?>index.php">Hem</a></li>
      <li><a href="<?= $root ?>includes/om-oss.php">Om oss</a></li>
      <li><a href="<?= $root ?>includes/vad-vi-gor.php">Vad vi gör</a></li>
      <li><a href="<?= $root ?>pages/kontakt.php">Kontakt</a></li>
    </ul>
  </nav>
</header>