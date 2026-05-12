<?php
$currentPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$linksConfig = require __DIR__ . '/../../config/links.php';
// Normalize path: remove trailing slashes (except for root) and .php extension
$currentPath = rtrim($currentPath, '/');
if ($currentPath === '' || $currentPath === '/index.php') {
  $currentPath = '/';
} elseif (substr($currentPath, -4) === '.php') {
  $currentPath = substr($currentPath, 0, -4);
}

$navLinks = [['href' => $linksConfig['home']['url'], 'label' => 'Главная']];
foreach ($linksConfig['import_pages'] as $page) {
  $navLinks[] = ['href' => $page['url'], 'label' => $page['nav_label']];
}
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
