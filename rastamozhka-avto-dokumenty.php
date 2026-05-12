<?php
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
      $path = '/rastamozhka-avto-dokumenty.php';
      $canonicalUrl = $siteScheme . '://' . $siteHost . $path;
      $pageTitle = 'Растаможка авто в России: документы и этапы';
      $pageDescription = 'Какие документы нужны для растаможки авто, как проходит таможенное оформление и что важно проверить до покупки автомобиля за границей.';
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/variables.css" />
    <link rel="stylesheet" href="css/typography,css" />
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/components.css" />
    <link rel="stylesheet" href="css/topic-pages.css" />
    <?php
    $breadcrumbSchema = ['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => []];
    foreach ($breadcrumbs as $i => $crumb) {
      $breadcrumbSchema['itemListElement'][] = ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $crumb['label'], 'item' => empty($crumb['url']) ? $canonicalUrl : ($siteScheme . '://' . $siteHost . $crumb['url'])];
    }
    ?>
    <script type="application/ld+json"><?php echo json_encode($breadcrumbSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
  </head>
  <body class="topic-page">
    <?php include 'sections/shared/header.php'; ?>
    <?php include 'sections/shared/breadcrumbs.php'; ?>
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
          <a class="topic-cta" href="/index.php#cta">Проверить документы до выкупа</a>
        </article>
      </div>

      <aside class="topic-aside">
        <div class="topic-card">
          <h2 class="h3">Другие полезные страницы</h2>
          <div class="topic-links">
            <a href="/stoimost-importa-avto.php">Стоимость импорта авто</a>
            <a href="/sroki-dostavki-avto.php">Сроки доставки авто</a>
            <a href="/avto-iz-korei.php">Авто из Кореи</a>
            <a href="/avto-iz-kitaya.php">Авто из Китая</a>
            <a href="/avto-iz-ssha.php">Авто из США</a>
          </div>
        </div>
      </aside>
    </main>
    <?php include 'sections/shared/footer.php'; ?>
  </body>
</html>
