<!-- ===== SECTION: SEO ===== -->
<?php $linksConfig = require __DIR__ . '/../../config/links.php'; ?>
<link rel="stylesheet" href="sections/seo/css/styles.css">
<section class="section section-seo" id="seo">
  <div class="container-site">
    <div class="seo-layout">

      <div class="seo-content">
        <h2 class="seo-title"><span class="text-gradient">Импорт авто</span><br>в Россию <span class="text-gradient">под ключ</span></h2>

        <p class="seo-subtitle">
          Подбираем и проверяем автомобили из Кореи, Китая и США, рассчитываем бюджет, организуем доставку и растаможку до передачи авто клиенту.
        </p>

        <div class="seo-divider" aria-hidden="true"></div>

        <div class="seo-text">
          <p><strong>Импорт автомобилей под ключ в Россию</strong> позволяет купить автомобиль по прозрачной цене и с понятной историей, без переплаты за посредников на локальном рынке. Мы сопровождаем сделку от подбора модели до выдачи автомобиля: проверка состояния, выкуп, доставка, таможенное оформление и передача клиенту.</p>

          <p>Для каждой страны поставки учитываем специфику рынка: авто с пробегом из Кореи, новые автомобили и электромобили из Китая, аукционные автомобили из США. До выкупа формируем детальный расчёт стоимости под ключ: цена авто, логистика, таможенные платежи, оформление и сопутствующие расходы. Вы заранее понимаете итоговый бюджет и сроки.</p>

          <p>Ключ к безопасному импорту авто - системная проверка на каждом этапе. Мы проверяем историю автомобиля, пробег, юридическую чистоту, техническое состояние и комплект документов, чтобы снизить риски покупки за границей. В результате вы получаете автомобиль, который соответствует бюджету, задаче и ожиданиям по срокам поставки.</p>
        </div>
      </div>

      <div class="seo-media" role="img" aria-label="Импорт автомобилей в Россию под ключ"></div>

    </div>

    <div class="seo-subsections">
      <article class="seo-subsection">
        <img class="seo-subsection__flag" src="images/korea-flag.svg" alt="Флаг Кореи">
        <h3 class="seo-subsection__title text-gradient">Авто из Кореи</h3>
        <p class="seo-subsection__text">Импорт авто из Кореи выбирают за хорошее состояние, прозрачную историю обслуживания и выгодные цены на популярные седаны и кроссоверы с небольшим пробегом.</p>
      </article>

      <article class="seo-subsection">
        <img class="seo-subsection__flag" src="images/china-flag.svg" alt="Флаг Китая">
        <h3 class="seo-subsection__title text-gradient">Авто из Китая</h3>
        <p class="seo-subsection__text">Импорт авто из Китая подходит тем, кто ищет новые автомобили, гибриды и электромобили с современными технологиями и сильными комплектациями по конкурентной цене.</p>
      </article>

      <article class="seo-subsection">
        <img class="seo-subsection__flag" src="images/usa-flag.svg" alt="Флаг США">
        <h3 class="seo-subsection__title text-gradient">Авто из США</h3>
        <p class="seo-subsection__text">Импорт автомобилей из США интересен тем, кто хочет получить максимальную экономию на аукционах. Мы оцениваем состояние, историю и полную стоимость восстановления, доставки и оформления.</p>
      </article>
    </div>

    <div class="seo-cluster card">
      <h3 class="seo-cluster__title">Подробные страницы по импорту авто</h3>
      <p class="seo-cluster__subtitle">Выберите тему, чтобы изучить расчёты, сроки, документы и особенности покупки по странам.</p>
      <div class="seo-cluster__links">
        <?php foreach ($linksConfig['import_pages'] as $page): ?>
          <a href="<?php echo htmlspecialchars($page['url'], ENT_QUOTES, 'UTF-8'); ?>" class="seo-cluster__link"><?php echo htmlspecialchars($page['cluster_label'], ENT_QUOTES, 'UTF-8'); ?></a>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
<!-- ===== /SECTION: SEO ===== -->
