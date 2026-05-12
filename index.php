<!DOCTYPE html>
<html lang="ru">
  <head>
    <?php
      $siteScheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
      $siteHost = $_SERVER['HTTP_HOST'] ?? 'example.com';
      $canonicalUrl = $siteScheme . '://' . $siteHost . '/';
      $pageTitle = 'Импорт авто под ключ в Россию из Кореи, Китая и США';
      $pageDescription = 'Импорт автомобилей под ключ в Россию: подбор, проверка, аукцион, доставка, растаможка и оформление. Рассчитайте полную стоимость авто за 15 минут.';
      $ogImageUrl = $siteScheme . '://' . $siteHost . '/sections/cases/images/kia_k5.jpg';

      $structuredData = [
        [
          '@context' => 'https://schema.org',
          '@type' => 'WebSite',
          'name' => 'Импорт авто под ключ в Россию',
          'url' => $canonicalUrl,
          'inLanguage' => 'ru-RU'
        ],
        [
          '@context' => 'https://schema.org',
          '@type' => 'Organization',
          'name' => 'Импорт авто под ключ в Россию',
          'url' => $canonicalUrl
        ],
        [
          '@context' => 'https://schema.org',
          '@type' => 'Service',
          'name' => 'Импорт авто в Россию под ключ',
          'description' => 'Подбор и проверка авто, покупка на аукционах и у дилеров, доставка, растаможка и передача автомобиля в России.',
          'areaServed' => [
            '@type' => 'Country',
            'name' => 'Russia'
          ],
          'provider' => [
            '@type' => 'Organization',
            'name' => 'Импорт авто под ключ в Россию',
            'url' => $canonicalUrl
          ]
        ]
      ];
    ?>

    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include 'sections/shared/seo-meta.php'; ?>

    <?php include 'sections/shared/head-styles.php'; ?>

    <?php foreach ($structuredData as $schema): ?>
      <script type="application/ld+json"><?php echo json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
    <?php endforeach; ?>

  </head>
  <body>
    <?php include 'sections/shared/header.php'; ?>
    <?php include 'sections/hero/index.php'; ?>
    <?php include 'sections/pain/index.php'; ?>
    <?php include 'sections/solution/index.php'; ?>
    <?php include 'sections/cases/index.php'; ?>
    <?php include 'sections/countries/index.php'; ?>
    <?php include 'sections/seo/index.php'; ?>
    <?php include 'sections/faq/index.php'; ?>
    <?php include 'sections/cta/index.php'; ?>

    <script src="js/solution-steps.js" defer></script>

    </body>
</html>
