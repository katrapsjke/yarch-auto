<?php if (!empty($breadcrumbs)): ?>
<nav class="breadcrumbs" aria-label="Хлебные крошки">
  <div class="container-site">
    <ol class="breadcrumbs__list" itemscope itemtype="https://schema.org/BreadcrumbList">
      <?php foreach ($breadcrumbs as $i => $crumb): ?>
        <li class="breadcrumbs__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <?php if (!empty($crumb['url'])): ?>
            <a class="breadcrumbs__link" href="<?php echo htmlspecialchars($crumb['url'], ENT_QUOTES, 'UTF-8'); ?>" itemprop="item">
              <span itemprop="name"><?php echo htmlspecialchars($crumb['label'], ENT_QUOTES, 'UTF-8'); ?></span>
            </a>
          <?php else: ?>
            <span class="breadcrumbs__current" itemprop="name" aria-current="page"><?php echo htmlspecialchars($crumb['label'], ENT_QUOTES, 'UTF-8'); ?></span>
          <?php endif; ?>
          <meta itemprop="position" content="<?php echo $i + 1; ?>" />
          <?php if ($i < count($breadcrumbs) - 1): ?>
            <span class="breadcrumbs__sep" aria-hidden="true">&#8594;</span>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</nav>
<?php endif; ?>
