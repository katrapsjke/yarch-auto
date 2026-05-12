<?php $linksConfig = require __DIR__ . '/../../config/links.php'; ?>
<footer class="site-footer">
  <div class="container-site site-footer__inner">
    <div class="site-footer__brand">
      <a class="site-footer__logo" href="/">Импорт авто под ключ</a>
      <p class="site-footer__tagline">Подбор, доставка и таможенное оформление автомобилей из Кореи, Китая и США.</p>
      <a class="site-footer__back-cta" href="/#cta">Получить расчёт под ключ &rarr;</a>
    </div>

    <nav class="site-footer__nav" aria-label="Навигация по страницам">
      <?php foreach ($linksConfig['import_pages'] as $page): ?>
        <a href="<?php echo htmlspecialchars($page['url'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($page['footer_label'], ENT_QUOTES, 'UTF-8'); ?></a>
      <?php endforeach; ?>
    </nav>
  </div>
</footer>
