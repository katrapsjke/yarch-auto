<?php
$linksConfig = require __DIR__ . '/../../config/links.php';
$currentSlug = 'rastamozhka-avto-dokumenty';
$currentUrl = $linksConfig['import_pages'][$currentSlug]['url'];
$breadcrumbs = [
  ['label' => 'Главная', 'url' => '/'],
  ['label' => 'Растаможка авто и документы', 'url' => null],
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
      $pageTitle = 'Растаможка авто в России: документы и этапы';
      $pageDescription = 'Какие документы нужны для растаможки авто, как проходит таможенное оформление и что важно проверить до покупки автомобиля за границей.';
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
        <span class="topic-kicker">Юридическая часть</span>
        <h1 class="h1 topic-title">Растаможка авто и документы для регистрации</h1>
        <p class="body topic-subtitle">На этой странице разобрали документы и порядок действий, чтобы автомобиль можно было законно поставить на учет в России без лишних задержек.</p>
      </div>
    </header>

    <main class="container-site topic-layout">
      <div class="topic-main">
        <article class="topic-card topic-section">
          <h2 class="h3">Базовый пакет документов</h2>
          <ul class="topic-list">
            <li>Документы на автомобиль от продавца/аукциона.</li>
            <li>Транспортные документы по перевозке.</li>
            <li>Таможенная декларация и подтверждение платежей.</li>
            <li>Документы для дальнейшей регистрации в РФ.</li>
          </ul>
        </article>

        <article class="topic-card topic-section">
          <h2 class="h3">Этапы таможенного оформления</h2>
          <ul class="topic-list">
            <li>Проверка корректности документов до отправки.</li>
            <li>Подача декларации и расчет обязательных платежей.</li>
            <li>Проверка и выпуск автомобиля таможней.</li>
            <li>Передача полного комплекта документов клиенту.</li>
          </ul>
        </article>

        <article class="topic-card topic-section">
          <h2 class="h3">Частые ошибки</h2>
          <ul class="topic-list">
            <li>Покупка авто без предварительной проверки документов.</li>
            <li>Неполная смета по таможенным расходам.</li>
            <li>Ошибки в данных, которые затягивают выпуск.</li>
          </ul>
          <a class="topic-cta" href="/#cta">Проверить документы до выкупа</a>
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
