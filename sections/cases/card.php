<?php
// Case card template - receives parameters:
// $country, $flag_src, $car_name, $image_src
// $price_russia, $price_brought, $savings
// $mileage, $delivery_time
?>

<article class="case-card">
  <div class="case-card__header">
    <div class="case-badge">
      <img class="case-badge__icon" src="<?= $flag_src ?>">
      <span class="case-badge__text"><?= $country ?></span>
    </div>
  </div>

  <div class="case-card__image">
    <img src="<?= $image_src ?>" alt="<?= $car_name ?>" loading="lazy">
  </div>

  <div class="case-card__body">
    <h3 class="case-card__title"><?= $car_name ?></h3>

    <!-- Pricing info -->
    <div class="case-card__pricing">
      <div class="pricing-row">
        <div class="pricing-item">
          <span class="pricing-label">В России</span>
          <span class="pricing-value"><?= $price_russia ?></span>
        </div>
        <div class="pricing-item">
          <span class="pricing-label">Привезли</span>
          <span class="pricing-value"><?= $price_brought ?></span>
        </div>
        <div class="pricing-item">
          <span class="pricing-label">Экономия</span>
          <span class="pricing-value pricing-value--savings"><?= $savings ?></span>
        </div>
      </div>
    </div>

    <!-- Specs -->
    <div class="case-card__specs">
      <div class="spec-item">
        <img src="images/odometer.svg">
        <div class="spec-item__content">
          <span class="spec-label">Пробег</span>
          <span class="spec-value"><?= $mileage ?></span>
        </div>
      </div>
      <div class="spec-item">
        <img src="images/calendar.svg">
        <div class="spec-item__content">
          <span class="spec-label">Срок доставки</span>
          <span class="spec-value"><?= $delivery_time ?></span>
        </div>
      </div>
    </div>
  </div>
</article>
