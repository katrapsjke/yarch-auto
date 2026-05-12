<?php
$breadcrumbs = [
  ['label' => 'Главная', 'url' => '/'],
  ['label' => 'Импорт авто из Кореи', 'url' => null],
];
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php
      $siteScheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
      $siteHost = $_SERVER['HTTP_HOST'] ?? 'example.com';
      $path = '/avto-iz-korei.php';
      $canonicalUrl = $siteScheme . '://' . $siteHost . $path;
      $pageTitle = 'Импорт авто из Кореи в Россию под ключ';
      $pageDescription = 'Импорт авто из Кореи: какие модели чаще выбирают, в чем преимущества корейского рынка и как проходит покупка с проверкой и доставкой в Россию.';
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
        <span class="topic-kicker">Направление поставки</span>
        <h1 class="h1 topic-title">Импорт авто из Кореи в Россию</h1>
        <p class="body topic-subtitle">Корея часто становится лучшим выбором для тех, кто ищет ликвидный автомобиль с понятной историей и хорошим состоянием при адекватном бюджете.</p>
      </div>
    </header>

    <main class="container-site topic-layout">
      <div class="topic-main">
        <article class="topic-card topic-section">
          <h2 class="h3">Плюсы импорта из Кореи</h2>
          <ul class="topic-list">
            <li>Большой выбор автомобилей с прозрачной историей.</li>
            <li>Аккуратная эксплуатация и понятное обслуживание.</li>
            <li>Хороший баланс цены и состояния.</li>
          </ul>
        </article>

        <article class="topic-card topic-section">
          <h2 class="h3">Какие авто чаще привозят</h2>
          <ul class="topic-list">
            <li>Седаны и кроссоверы массового сегмента.</li>
            <li>Автомобили с небольшим пробегом.</li>
            <li>Модели с богатыми комплектациями.</li>
          </ul>
        </article>

        <article class="topic-card topic-section">
          <h2 class="h3">Как проходит сделка</h2>
          <ul class="topic-list">
            <li>Подбор вариантов и проверка состояния.</li>
            <li>Согласование и выкуп автомобиля.</li>
            <li>Доставка, растаможка, передача клиенту.</li>
          </ul>
          <a class="topic-cta" href="/index.php#cta">Подобрать авто из Кореи</a>
        </article>
      </div>

      <aside class="topic-aside">
        <div class="topic-card">
          <h2 class="h3">Другие полезные страницы</h2>
          <div class="topic-links">
            <a href="/stoimost-importa-avto.php">Стоимость импорта авто</a>
            <a href="/sroki-dostavki-avto.php">Сроки доставки авто</a>
            <a href="/rastamozhka-avto-dokumenty.php">Растаможка и документы</a>
            <a href="/avto-iz-kitaya.php">Авто из Китая</a>
            <a href="/avto-iz-ssha.php">Авто из США</a>
          </div>
        </div>
      </aside>
    </main>
    <?php include 'sections/shared/footer.php'; ?>
  </body>
</html>
