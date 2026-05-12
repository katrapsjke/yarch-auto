<?php
$linksConfig = require __DIR__ . '/../../config/links.php';
$currentSlug = 'avto-iz-ssha';
$currentUrl = $linksConfig['import_pages'][$currentSlug]['url'];
$breadcrumbs = [
  ['label' => 'Главная', 'url' => '/'],
  ['label' => 'Импорт авто из США', 'url' => null],
];
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php
      $siteScheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
      $siteHost = $_SERVER['HTTP_HOST'] ?? 'example.com';
      $path = $currentUrl;
      $canonicalUrl = $siteScheme . '://' . $siteHost . $path;
      $pageTitle = 'Импорт авто из США в Россию под ключ';
      $pageDescription = 'Импорт авто из США: аукционы, широкий выбор моделей и потенциальная экономия. Как оценить состояние лота, рассчитать полную стоимость и снизить риски.';
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include '../../sections/shared/seo-meta.php'; ?>

    <?php include '../../sections/shared/head-styles.php'; ?>
    <?php
    $breadcrumbSchema = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => []];
    foreach ($breadcrumbs as $i => $crumb) {
      $breadcrumbSchema['itemListElement'][] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $crumb['label'], 'item' => empty($crumb['url']) ? $canonicalUrl : ($siteScheme . '://' . $siteHost . $crumb['url'])];
    }
    ?>
    <script type="application/ld+json"><?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
  </head>
  <body class="topic-page">
    <?php include '../../sections/shared/header.php'; ?>
    <?php include '../../sections/shared/breadcrumbs.php'; ?>
    <header class="topic-hero">
      <div class="container-site">
        <span class="topic-kicker">Направление поставки</span>
        <h1 class="h1 topic-title">Импорт авто из США в Россию</h1>
        <p class="body topic-subtitle">США — направление для тех, кто ищет экономию и широкий выбор. Ключевая задача — правильно оценить состояние лота и полную стоимость до покупки.</p>
      </div>
    </header>

    <main class="container-site topic-layout">
      <div class="topic-main">
        <article class="topic-card topic-section">
          <h2 class="h3">Преимущества рынка США</h2>
          <ul class="topic-list">
            <li>Большой выбор моделей и комплектаций.</li>
            <li>Потенциально заметная экономия бюджета.</li>
            <li>Понятные аукционные механики покупки.</li>
          </ul>
        </article>

        <article class="topic-card topic-section">
          <h2 class="h3">На что обращать внимание</h2>
          <ul class="topic-list">
            <li>История автомобиля и тип повреждений.</li>
            <li>Оценка стоимости восстановления.</li>
            <li>Суммарные расходы: выкуп, доставка, таможня, оформление.</li>
          </ul>
        </article>

        <article class="topic-card topic-section">
          <h2 class="h3">Как снизить риски</h2>
          <ul class="topic-list">
            <li>Проверять документы до ставки на лот.</li>
            <li>Считать полную смету, а не только цену покупки.</li>
            <li>Не выкупать авто без финального согласования.</li>
          </ul>
          <a class="topic-cta" href="/#cta">Подобрать авто из США</a>
        </article>
      </div>

      <aside class="topic-aside">
        <div class="topic-card">
          <h2 class="h3">Другие полезные страницы</h2>
          <div class="topic-links">
            <?php foreach ($linksConfig['import_pages'] as $slug => $page): ?>
              <?php if ($slug === $currentSlug) { continue; } ?>
              <a href="<?php echo htmlspecialchars($page['url'], ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($page['related_label'], ENT_QUOTES, 'UTF-8'); ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      </aside>
    </main>
    <?php include '../../sections/cta/index.php'; ?>
    <?php include '../../sections/shared/footer.php'; ?>
  </body>
</html>
