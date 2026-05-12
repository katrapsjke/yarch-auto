<?php
if (!defined('ABSPATH')) {
  exit;
}

// Resolve current post
$postId = get_queried_object_id();
if (!$postId && is_front_page()) {
  $postId = (int) get_option('page_on_front');
}
$post = $postId ? get_post($postId) : null;
if ($post) {
  global $post;
  setup_postdata($post);
}

// SEO metadata
$pageTitle       = $postId ? get_the_title($postId) : get_bloginfo('name');
$rawExcerpt      = $post ? trim(wp_strip_all_tags((string) $post->post_excerpt)) : '';
$rawContent      = $post ? (string) $post->post_content : '';
$plainContent    = trim(wp_strip_all_tags(strip_shortcodes($rawContent)));
$pageDescription = $rawExcerpt ?: wp_trim_words($plainContent, 30, '...') ?: get_bloginfo('description');
$canonicalUrl    = $postId ? get_permalink($postId) : home_url('/');
$seoImage        = ($postId ? get_the_post_thumbnail_url($postId, 'full') : '') ?: yarch_asset_url('/sections/cases/images/kia_k5.jpg');

// Structured data
$structuredData = [[
  '@context'    => 'https://schema.org',
  '@type'       => 'WebPage',
  'name'        => $pageTitle,
  'url'         => $canonicalUrl,
  'inLanguage'  => 'ru-RU',
  'description' => $pageDescription,
]];

if (!is_front_page()) {
  $structuredData[] = [
    '@context' => 'https://schema.org',
    '@type'    => 'BreadcrumbList',
    'itemListElement' => [
      ['@type' => 'ListItem', 'position' => 1, 'name' => 'Главная',   'item' => home_url('/')],
      ['@type' => 'ListItem', 'position' => 2, 'name' => $pageTitle, 'item' => $canonicalUrl],
    ],
  ];
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include get_template_directory() . '/sections/shared/seo-meta.php'; ?>
    <?php include get_template_directory() . '/sections/shared/head-styles.php'; ?>
    <?php foreach ($structuredData as $schema): ?>
      <script type="application/ld+json"><?php echo wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
    <?php endforeach; ?>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(is_front_page() ? '' : 'topic-page'); ?>>
    <?php include get_template_directory() . '/sections/shared/header.php'; ?>

    <?php if (is_front_page()): ?>
      <?php include get_template_directory() . '/sections/hero/index.php'; ?>
      <?php include get_template_directory() . '/sections/pain/index.php'; ?>
      <?php include get_template_directory() . '/sections/solution/index.php'; ?>
      <?php include get_template_directory() . '/sections/cases/index.php'; ?>
      <?php include get_template_directory() . '/sections/countries/index.php'; ?>
      <?php include get_template_directory() . '/sections/seo/index.php'; ?>
      <?php include get_template_directory() . '/sections/faq/index.php'; ?>
      <?php include get_template_directory() . '/sections/cta/index.php'; ?>
    <?php else: ?>
      <?php
      $breadcrumbs = [
        ['label' => 'Главная', 'url' => home_url('/')],
        ['label' => $pageTitle, 'url' => null],
      ];
      include get_template_directory() . '/sections/shared/breadcrumbs.php';
      ?>

      <header class="topic-hero">
        <div class="container-site">
          <h1 class="h1 topic-title"><?php echo esc_html($pageTitle); ?></h1>
          <?php if ($rawExcerpt): ?>
            <p class="body topic-subtitle"><?php echo esc_html($rawExcerpt); ?></p>
          <?php endif; ?>
        </div>
      </header>

      <main class="container-site topic-layout">
        <?php if ($post) { the_content(); } ?>
      </main>

      <?php include get_template_directory() . '/sections/cta/index.php'; ?>
    <?php endif; ?>

    <?php if ($post) { wp_reset_postdata(); } ?>

    <?php include get_template_directory() . '/sections/shared/footer.php'; ?>
    <?php wp_footer(); ?>
  </body>
</html>
