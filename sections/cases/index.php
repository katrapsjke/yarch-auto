<!-- ===== SECTION: CASES ===== -->
<link rel="stylesheet" href="sections/cases/css/styles.css">
<section class="section section-cases" id="cases">
  <div class="container-site">

    <!-- Header with title, subtitle, and carousel controls -->
    <div class="cases-header">
      <div class="cases-header__content">
        <h2 class="h2">
          Примеры привезённых <span class="text-gradient">автомобилей</span>
        </h2>
        <p class="body cases-header__subtitle">
          Показываем реальные сделки: сколько стоил автомобиль в России и за какую цену мы привезли его клиенту
        </p>
      </div>

      <!-- Carousel navigation -->
      <div class="cases-nav">
        <button class="cases-nav__btn cases-nav__btn--prev" aria-label="Previous case">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 18l-6-6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <button class="cases-nav__btn cases-nav__btn--next" aria-label="Next case">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
      </div>
    </div>

    <!-- Cases carousel grid -->
    <div class="cases-carousel">
      <div class="cases-carousel__grid">

        <?php
        $cases = [
          [
            'country' => 'Из Кореи',
            'flag_src' => 'images/korea-flag.svg',
            'car_name' => 'Kia K5 2022',
            'image_src' => 'sections/cases/images/kia_k5.jpg',
            'price_russia' => '3 200 000 ₽',
            'price_brought' => '2 450 000 ₽',
            'savings' => '750 000 ₽',
            'mileage' => '38 000 км',
            'delivery_time' => '5 недель',
          ],
          [
            'country' => 'Из США',
            'flag_src' => 'images/usa-flag.svg',
            'car_name' => 'BMW 5 Series 2021',
            'image_src' => 'sections/cases/images/bmw_5_series.png',
            'price_russia' => '5 800 000 ₽',
            'price_brought' => '4 600 000 ₽',
            'savings' => '1 200 000 ₽',
            'mileage' => '52 000 км',
            'delivery_time' => '6 недель',
          ],
          [
            'country' => 'Из Китая',
            'flag_src' => 'images/china-flag.svg',
            'car_name' => 'Toyota Camry 2023',
            'image_src' => 'sections/cases/images/toyota_сamry.png',
            'price_russia' => '3 900 000 ₽',
            'price_brought' => '3 050 000 ₽',
            'savings' => '850 000 ₽',
            'mileage' => '12 000 км',
            'delivery_time' => '4 недели',
          ],
        ];

        foreach ($cases as $case) {
          extract($case);
          include 'card.php';
        }
        ?>

      </div>
    </div>

    <!-- Bottom CTA section -->
    <div class="cases-cta">
      <div class="cases-cta__content">
        <div class="cases-cta__icon" aria-hidden="true">
          <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
            <circle cx="32" cy="32" r="28" stroke="#9747FF" stroke-width="2" opacity="0.2"/>
            <path d="M24 36h16M28 28h8M26 44h12" stroke="#9747FF" stroke-width="2.4" stroke-linecap="round"/>
            <circle cx="32" cy="20" r="3" stroke="#9747FF" stroke-width="2"/>
          </svg>
        </div>
        <div class="cases-cta__text">
          <h3 class="cases-cta__title">Хотите так же?</h3>
          <p class="cases-cta__subtitle">
            Подберём лучший вариант под ваш бюджет и привезём автомобиль под ключ
          </p>
        </div>
      </div>

      <button class="btn-primary cases-cta__btn">
        Рассчитать стоимость
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M4 10h12M12 6l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </div>

  </div>
</section>
