<?php
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
if ($currentPath === '/index.php') {
  $currentPath = '/';
}

$navLinks = [
  ['href' => '/', 'label' => 'Главная'],
  ['href' => '/stoimost-importa-avto.php', 'label' => 'Стоимость'],
  ['href' => '/sroki-dostavki-avto.php', 'label' => 'Сроки доставки'],
  ['href' => '/rastamozhka-avto-dokumenty.php', 'label' => 'Растаможка'],
  ['href' => '/avto-iz-korei.php', 'label' => 'Корея'],
  ['href' => '/avto-iz-kitaya.php', 'label' => 'Китай'],
  ['href' => '/avto-iz-ssha.php', 'label' => 'США'],
];
?>
<header class="site-header">
  <div class="container-site site-header__inner">
    <a class="site-header__logo" href="/">Импорт авто под ключ</a>

    <nav class="site-header__nav" aria-label="Основная навигация">
      <?php foreach ($navLinks as $link): ?>
        <?php $isActive = $currentPath === $link['href']; ?>
        <a
          class="site-header__nav-link<?php echo $isActive ? ' is-active' : ''; ?>"
          href="<?php echo htmlspecialchars($link['href'], ENT_QUOTES, 'UTF-8'); ?>"
          <?php if ($isActive): ?>aria-current="page"<?php endif; ?>
        >
          <?php echo htmlspecialchars($link['label'], ENT_QUOTES, 'UTF-8'); ?>
        </a>
      <?php endforeach; ?>
    </nav>

    <a class="site-header__cta btn-primary" href="/#cta">Рассчитать стоимость</a>
  </div>
</header>
