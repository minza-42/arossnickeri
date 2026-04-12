<?php
// sidebar.php – sidnavigation för tjänstesidor i /html/
// $active_sidebar sätts av varje sida, t.ex. 'byggnadssnickerier'
if (!isset($active_sidebar)) $active_sidebar = '';

$links = [
  'offentliga-miljoer'       => 'Offentlig miljö',
  'byggnadssnickerier'       => 'Byggnadssnickerier',
  'specialbyggda-mobler'     => 'Specialbyggda möbler',
  'mattbestallda-bankskivor' => 'Måttbeställda bänkskivor',
  'inomhustrappor'           => 'Inomhustrappor',
  'platsbyggda-bokhyllor'    => 'Platsbyggda bokhyllor',
  'mobeltorrt-snickerivirke' => 'Möbeltorrt snickerivirke',
];
?>

<!-- Sidebar Navigation (desktop) -->
<aside class="sidebar">
  <nav class="sidebar-nav">
    <ul>
      <?php foreach ($links as $slug => $label): ?>
        <li>
          <a href="<?= $slug ?>.php" <?= ($active_sidebar === $slug) ? ' class="active"' : '' ?>>
            <?= htmlspecialchars($label) ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>
  </nav>
</aside>

<!-- Sidebar Hamburger Menu (mobile) -->
<button class="sidebar-menu-toggle" aria-label="Öppna sidomeny" aria-expanded="false">
  <span class="hamburger-line"></span>
  <span class="hamburger-line"></span>
  <span class="hamburger-line"></span>
</button>
<nav class="sidebar-mobile-navigation" aria-label="Sidonavigation mobil" hidden>
  <ul>
    <?php foreach ($links as $slug => $label): ?>
      <li>
        <a href="<?= $slug ?>.php" <?= ($active_sidebar === $slug) ? ' class="active"' : '' ?>>
          <?= htmlspecialchars($label) ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</nav>