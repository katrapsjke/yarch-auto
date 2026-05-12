<?php
$currentPath = untrailingslashit(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
if ($currentPath === '') {
  $currentPath = '/';
}

$navLinks = [
  ['slug' => '', 'label' => 'Главная'],
  ['slug' => 'stoimost-importa-avto', 'label' => 'Стоимость'],
  ['slug' => 'sroki-dostavki-avto', 'label' => 'Сроки доставки'],
  ['slug' => 'rastamozhka-avto-dokumenty', 'label' => 'Растаможка'],
  ['slug' => 'avto-iz-korei', 'label' => 'Корея'],
  ['slug' => 'avto-iz-kitaya', 'label' => 'Китай'],
  ['slug' => 'avto-iz-ssha', 'label' => 'США'],
];
?>
<header class="site-header">
  <div class="container-site site-header__inner">
    <a class="site-header__logo" href="<?php echo esc_url(home_url('/')); ?>">Импорт авто под ключ</a>

    <nav class="site-header__nav" aria-label="Основная навигация">
      <?php foreach ($navLinks as $link): ?>
        <?php
          $href = yarch_page_url($link['slug']);
          $linkPath = untrailingslashit(parse_url($href, PHP_URL_PATH) ?: '/');
          if ($linkPath === '') {
            $linkPath = '/';
          }
          $isActive = $currentPath === $linkPath;
        ?>
        <a
          class="site-header__nav-link<?php echo $isActive ? ' is-active' : ''; ?>"
          href="<?php echo esc_url($href); ?>"
          <?php if ($isActive): ?>aria-current="page"<?php endif; ?>
        >
          <?php echo esc_html($link['label']); ?>
        </a>
      <?php endforeach; ?>
    </nav>

    <a class="site-header__cta btn-primary" href="<?php echo esc_url(home_url('/#cta')); ?>">Рассчитать стоимость</a>
  </div>
</header>
