<?php
$breadcrumbs = [
  ['label' => 'Главная', 'url' => '/'],
  ['label' => 'Импорт авто из Китая', 'url' => null],
];
?>
<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php
      $siteScheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
      $siteHost = $_SERVER['HTTP_HOST'] ?? 'example.com';
      $path = '/avto-iz-kitaya.php';
      $canonicalUrl = $siteScheme . '://' . $siteHost . $path;
      $pageTitle = 'Импорт авто из Китая в Россию под ключ';
      $pageDescription = 'Импорт авто из Китая: новые модели, гибриды и электромобили. Рассказываем про стоимость, сроки поставки и ключевые этапы покупки под ключ.';
    ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'sections/shared/seo-meta.php'; ?>

    <?php include 'sections/shared/head-styles.php'; ?>
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
        <h1 class="h1 topic-title">Импорт авто из Китая в Россию</h1>
        <p class="body topic-subtitle">Китайский рынок подходит тем, кто ищет современные комплектации, новые модели и электромобили по конкурентной цене.</p>
      </div>
    </header>

    <main class="container-site topic-layout">
      <div class="topic-main">
        <article class="topic-card topic-section">
          <h2 class="h3">Плюсы покупки авто из Китая</h2>
          <ul class="topic-list">
            <li>Широкий выбор новых автомобилей и гибридов.</li>
            <li>Богатые комплектации в базовых версиях.</li>
            <li>Хорошее соотношение цены и технологий.</li>
          </ul>
        </article>

        <article class="topic-card topic-section">
          <h2 class="h3">Что важно проверить до выкупа</h2>
          <ul class="topic-list">
            <li>Спецификацию и комплектацию по VIN/серии.</li>
            <li>Сроки производства и поставки.</li>
            <li>Наличие необходимых документов для РФ.</li>
          </ul>
        </article>

        <article class="topic-card topic-section">
          <h2 class="h3">Для кого это направление</h2>
          <ul class="topic-list">
            <li>Для тех, кто рассматривает новые авто.</li>
            <li>Для покупателей гибридов и электромобилей.</li>
            <li>Для тех, кто хочет современную комплектацию в рамках бюджета.</li>
          </ul>
          <a class="topic-cta" href="/index.php#cta">Подобрать авто из Китая</a>
        </article>
      </div>

      <aside class="topic-aside">
        <div class="topic-card">
          <h2 class="h3">Другие полезные страницы</h2>
          <div class="topic-links">
            <a href="/stoimost-importa-avto.php">Стоимость импорта авто</a>
            <a href="/sroki-dostavki-avto.php">Сроки доставки авто</a>
            <a href="/rastamozhka-avto-dokumenty.php">Растаможка и документы</a>
            <a href="/avto-iz-korei.php">Авто из Кореи</a>
            <a href="/avto-iz-ssha.php">Авто из США</a>
          </div>
        </div>
      </aside>
    </main>
    <?php include 'sections/cta/index.php'; ?>
    <?php include 'sections/shared/footer.php'; ?>
  </body>
</html>
