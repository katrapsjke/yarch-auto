<?php

$linksConfig = require __DIR__ . '/config/links.php';

$siteScheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$siteHost = $_SERVER['HTTP_HOST'] ?? 'example.com';
$baseUrl = $siteScheme . '://' . $siteHost;

header('Content-Type: application/xml; charset=UTF-8');

$urls = [];
$urls[] = [
  'loc' => $baseUrl . $linksConfig['home']['url'],
  'changefreq' => $linksConfig['home']['changefreq'],
  'priority' => $linksConfig['home']['priority'],
];

foreach ($linksConfig['import_pages'] as $page) {
  $urls[] = [
    'loc' => $baseUrl . $page['url'],
    'changefreq' => $page['changefreq'],
    'priority' => $page['priority'],
  ];
}

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($urls as $url): ?>
  <url>
    <loc><?php echo htmlspecialchars($url['loc'], ENT_QUOTES | ENT_XML1, 'UTF-8'); ?></loc>
    <changefreq><?php echo htmlspecialchars($url['changefreq'], ENT_QUOTES | ENT_XML1, 'UTF-8'); ?></changefreq>
    <priority><?php echo htmlspecialchars($url['priority'], ENT_QUOTES | ENT_XML1, 'UTF-8'); ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
