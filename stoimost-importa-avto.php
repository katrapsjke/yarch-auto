<?php
$breadcrumbs = [
  ['label' => 'Главная', 'url' => '/'],
  ['label' => 'Стоимость импорта авто под ключ', 'url' => null],
];
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php
      $siteScheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
      $siteHost = $_SERVER['HTTP_HOST'] ?? 'example.com';
      $path = '/stoimost-importa-avto.php';
      $canonicalUrl = $siteScheme . '://' . $siteHost . $path;
      $pageTitle = 'Стоимость импорта авто под ключ в Россию';
      $pageDescription = 'Разбираем стоимость импорта авто под ключ: из чего складывается цена, какие расходы обязательны и как заранее рассчитать бюджет без скрытых платежей.';
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
        <span class="topic-kicker">Гид по цене</span>
        <h1 class="h1 topic-title">Стоимость импорта авто под ключ в Россию</h1>
        <p class="body topic-subtitle">Главная ошибка при покупке авто за границей - считать только цену лота. Ниже показали полную структуру расходов, чтобы вы могли заранее оценить реальный бюджет сделки.</p>
      </div>
    </header>

    <main class="container-site topic-layout">
      <div class="topic-main">
        <article class="topic-card topic-section">
          <h2 class="h3">Из чего складывается цена под ключ</h2>
          <ul class="topic-list">
            <li>Стоимость автомобиля на аукционе или у дилера.</li>
            <li>Комиссия площадки и услуги выкупа.</li>
            <li>Международная логистика и страхование.</li>
            <li>Таможенные платежи и оформление в РФ.</li>
            <li>Доставка по России до вашего города.</li>
          </ul>
        </article>

        <article class="topic-card topic-section">
          <h2 class="h3">Пример расчета стоимости импорта</h2>
          <table class="topic-table">
            <thead>
              <tr>
                <th>Статья расходов</th>
                <th>Пример</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Цена автомобиля</td>
                <td>2 100 000 руб.</td>
              </tr>
              <tr>
                <td>Логистика и порт</td>
                <td>320 000 руб.</td>
              </tr>
              <tr>
                <td>Таможня и сборы</td>
                <td>410 000 руб.</td>
              </tr>
              <tr>
                <td>Оформление и сопровождение</td>
                <td>120 000 руб.</td>
              </tr>
              <tr>
                <td><strong>Итог под ключ</strong></td>
                <td><strong>2 950 000 руб.</strong></td>
              </tr>
            </tbody>
          </table>
          <p class="body" style="margin-top: 16px;">Цифры ориентировочные: итог зависит от страны покупки, курса валют, объема двигателя и текущих ставок логистики.</p>
        </article>

        <article class="topic-card topic-section">
          <h2 class="h3">Как избежать скрытых расходов</h2>
          <ul class="topic-list">
            <li>Запрашивайте полный расчет до выкупа автомобиля.</li>
            <li>Фиксируйте этапы и условия оплаты в договоре.</li>
            <li>Проверяйте, включена ли доставка по РФ в смету.</li>
            <li>Уточняйте сценарий при изменении курса валют.</li>
          </ul>
          <a class="topic-cta" href="/index.php#cta">Получить точный расчет под ключ</a>
        </article>
      </div>

      <aside class="topic-aside">
        <div class="topic-card">
          <h2 class="h3">Другие полезные страницы</h2>
          <div class="topic-links">
            <a href="/sroki-dostavki-avto.php">Сроки доставки авто</a>
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
