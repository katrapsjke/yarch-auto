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
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta property="og:type" content="website" />
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:url" content="<?php echo htmlspecialchars($canonicalUrl, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta property="og:image" content="<?php echo htmlspecialchars($ogImageUrl, ENT_QUOTES, 'UTF-8'); ?>" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="twitter:description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImageUrl, ENT_QUOTES, 'UTF-8'); ?>" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Manrope:wght@600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Design system -->
    <link rel="stylesheet" href="css/variables.css" />
    <link rel="stylesheet" href="css/typography,css" />
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/components.css" />

    <!-- Page styles -->
    <link rel="stylesheet" href="css/sections.css" />
    <link rel="stylesheet" href="css/topic-pages.css" />

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
