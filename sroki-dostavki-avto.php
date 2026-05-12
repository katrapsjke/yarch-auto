<?php
$breadcrumbs = [
  ['label' => 'Главная', 'url' => '/'],
  ['label' => 'Сроки доставки авто в Россию', 'url' => null],
];
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php
      $siteScheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
      $siteHost = $_SERVER['HTTP_HOST'] ?? 'example.com';
      $path = '/sroki-dostavki-avto.php';
      $canonicalUrl = $siteScheme . '://' . $siteHost . $path;
      $pageTitle = 'Сроки доставки авто в Россию из Кореи, Китая и США';
      $pageDescription = 'Реальные сроки доставки авто в Россию: этапы логистики, средняя длительность по странам и факторы, которые влияют на итоговые даты получения автомобиля.';
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
    <link rel="stylesheet" href="css/sections.css" />
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
        <span class="topic-kicker">Логистика и этапы</span>
        <h1 class="h1 topic-title">Сроки доставки авто в Россию</h1>
        <p class="body topic-subtitle">Срок поставки складывается из нескольких этапов: выкуп, отгрузка, морской путь, таможня и доставка по России. Здесь собраны средние сроки и ключевые риски задержек.</p>
      </div>
    </header>

    <main class="container-site topic-layout">
      <div class="topic-main">
        <article class="topic-card topic-section">
          <h2 class="h3">Средние сроки по странам</h2>
          <table class="topic-table">
            <thead>
              <tr>
                <th>Страна</th>
                <th>Средний срок</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Корея</td>
                <td>4-6 недель</td>
              </tr>
              <tr>
                <td>Китай</td>
                <td>3-5 недель</td>
              </tr>
              <tr>
                <td>США</td>
                <td>6-9 недель</td>
              </tr>
            </tbody>
          </table>
        </article>

        <article class="topic-card topic-section">
          <h2 class="h3">Этапы доставки автомобиля</h2>
          <ul class="topic-list">
            <li>Подтверждение и выкуп автомобиля.</li>
            <li>Подготовка документов и отправка в порт.</li>
            <li>Международная перевозка до РФ.</li>
            <li>Таможенное оформление и выпуск.</li>
            <li>Передача авто или доставка по России.</li>
          </ul>
        </article>

        <article class="topic-card topic-section">
          <h2 class="h3">Что влияет на сроки</h2>
          <ul class="topic-list">
            <li>Загрузка портов и рейсовые окна.</li>
            <li>Сезонный спрос на перевозку.</li>
            <li>Скорость обработки документов.</li>
            <li>Таможенные процедуры и проверки.</li>
          </ul>
          <a class="topic-cta" href="/index.php#cta">Узнать срок для вашей модели</a>
        </article>
      </div>

      <aside class="topic-aside">
        <div class="topic-card">
          <h2 class="h3">Другие полезные страницы</h2>
          <div class="topic-links">
            <a href="/stoimost-importa-avto.php">Стоимость импорта авто</a>
            <a href="/rastamozhka-avto-dokumenty.php">Растаможка и документы</a>
            <a href="/avto-iz-korei.php">Авто из Кореи</a>
            <a href="/avto-iz-kitaya.php">Авто из Китая</a>
            <a href="/avto-iz-ssha.php">Авто из США</a>
          </div>
        </div>
      </aside>
    </main>
    <?php include 'sections/cta/index.php'; ?>
    <?php include 'sections/shared/footer.php'; ?>
  </body>
</html>
