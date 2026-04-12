<?php
// footer.php – används av alla sidor
// $root sätts av anropande sida ('' för root, '../' för undersidor)
if (!isset($root)) $root = '../';
?>
<footer>
  <div class="footer-content">
    <div class="footer-left">
      <h2>Kontakt</h2>
      <h3>Aros Snickeri AB</h3>
      <p>Anna Fabrisgata 12a<br>754 54 Uppsala</p>

      <div class="footer-contact">
        <img src="<?= $root ?>img/svg/phone.svg" alt="Telefon">
        <a href="tel:018100180">018-100 180</a>
      </div>
      <div class="footer-contact">
        <img src="<?= $root ?>img/svg/mail.svg" alt="E-post">
        <a href="mailto:info@arossnickeri.se">info@arossnickeri.se</a>
      </div>

      <h3>Öppetider</h3>
      <p>Måndag - Fredag 07.00 - 16.00<br>Lunchstängt 11.00 - 11.45</p>

      <div class="footer-contact">
        <a href="https://www.google.com/maps/search/?api=1&query=Aros+Snickeri+AB,+Anna+Fabris+gata+12a,+754+54+Uppsala"
          target="_blank" rel="noopener noreferrer">Karta och vägbeskrivning</a>
        <img src="<?= $root ?>img/svg/map-pin.svg" alt="Karta">
      </div>
    </div>

    <div class="footer-right">
      <h2>Om oss</h2>
      <nav class="footer-nav">
        <ul>
          <li><a href="<?= $root ?>includes/om-oss.php">Om oss</a></li>
          <li><a href="<?= $root ?>includes/vad-vi-gor.php">Snickeri och maskinpark</a></li>
          <li><a href="<?= $root ?>pages/kontakt.php">Kontakt</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="footer-bottom">
    <p>© Aros Snickeri AB - Specialsnickeriet i Uppsala</p>
  </div>
</footer>

<button id="backToTop" aria-label="Scroll to top" title="Scroll to top">
  <img src="<?= $root ?>img/svg/arrow-up.svg" alt="Scroll to top" width="28" height="28" style="pointer-events:none;" />
</button>