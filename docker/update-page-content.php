<?php
/**
 * WP-CLI eval-file script: push full HTML content into topic pages.
 * Usage: wp eval-file /tmp/update-page-content.php
 */
if (!defined('ABSPATH')) {
  exit;
}

$base = home_url('/');

$pages = [
  'stoimost-importa-avto' => [
    'excerpt' => 'Главная ошибка при покупке авто за границей — считать только цену лота. Ниже показали полную структуру расходов, чтобы вы могли заранее оценить реальный бюджет сделки.',
    'content' => '
<div class="topic-main">
  <article class="topic-card topic-section">
    <h2 class="h3">Из чего складывается цена под ключ</h2>
    <ul class="topic-list">
      <li>Стоимость автомобиля на аукционе или у дилера.</li>
      <li>Комиссия площадки и услуги выкупа.</li>
      <li>Международная логистика и страхование.</li>
      <li>Таможенные платежи и оформление в РФ.</li>
      <li>Доставка по России до вашего города.</li>
    </ul>
  </article>

  <article class="topic-card topic-section">
    <h2 class="h3">Пример расчета стоимости импорта</h2>
    <table class="topic-table">
      <thead>
        <tr>
          <th>Статья расходов</th>
          <th>Пример</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Цена автомобиля</td>
          <td>2 100 000 руб.</td>
        </tr>
        <tr>
          <td>Логистика и порт</td>
          <td>320 000 руб.</td>
        </tr>
        <tr>
          <td>Таможня и сборы</td>
          <td>410 000 руб.</td>
        </tr>
        <tr>
          <td>Оформление и сопровождение</td>
          <td>120 000 руб.</td>
        </tr>
        <tr>
          <td><strong>Итог под ключ</strong></td>
          <td><strong>2 950 000 руб.</strong></td>
        </tr>
      </tbody>
    </table>
    <p class="body" style="margin-top: 16px;">Цифры ориентировочные: итог зависит от страны покупки, курса валют, объема двигателя и текущих ставок логистики.</p>
  </article>

  <article class="topic-card topic-section">
    <h2 class="h3">Как избежать скрытых расходов</h2>
    <ul class="topic-list">
      <li>Запрашивайте полный расчет до выкупа автомобиля.</li>
      <li>Фиксируйте этапы и условия оплаты в договоре.</li>
      <li>Проверяйте, включена ли доставка по РФ в смету.</li>
      <li>Уточняйте сценарий при изменении курса валют.</li>
    </ul>
    <a class="topic-cta" href="/#cta">Получить точный расчет под ключ</a>
  </article>
</div>

<aside class="topic-aside">
  <div class="topic-card">
    <h2 class="h3">Другие полезные страницы</h2>
    <div class="topic-links">
      <a href="/sroki-dostavki-avto/">Сроки доставки авто</a>
      <a href="/rastamozhka-avto-dokumenty/">Растаможка и документы</a>
      <a href="/avto-iz-korei/">Авто из Кореи</a>
      <a href="/avto-iz-kitaya/">Авто из Китая</a>
      <a href="/avto-iz-ssha/">Авто из США</a>
    </div>
  </div>
</aside>
',
  ],

  'sroki-dostavki-avto' => [
    'excerpt' => 'Срок поставки складывается из нескольких этапов: выкуп, отгрузка, морской путь, таможня и доставка по России. Здесь собраны средние сроки и ключевые риски задержек.',
    'content' => '
<div class="topic-main">
  <article class="topic-card topic-section">
    <h2 class="h3">Средние сроки по странам</h2>
    <table class="topic-table">
      <thead>
        <tr>
          <th>Страна</th>
          <th>Средний срок</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Корея</td>
          <td>4–6 недель</td>
        </tr>
        <tr>
          <td>Китай</td>
          <td>3–5 недель</td>
        </tr>
        <tr>
          <td>США</td>
          <td>6–9 недель</td>
        </tr>
      </tbody>
    </table>
  </article>

  <article class="topic-card topic-section">
    <h2 class="h3">Этапы доставки автомобиля</h2>
    <ul class="topic-list">
      <li>Подтверждение и выкуп автомобиля.</li>
      <li>Подготовка документов и отправка в порт.</li>
      <li>Международная перевозка до РФ.</li>
      <li>Таможенное оформление и выпуск.</li>
      <li>Передача авто или доставка по России.</li>
    </ul>
  </article>

  <article class="topic-card topic-section">
    <h2 class="h3">Что влияет на сроки</h2>
    <ul class="topic-list">
      <li>Загрузка портов и рейсовые окна.</li>
      <li>Сезонный спрос на перевозку.</li>
      <li>Скорость обработки документов.</li>
      <li>Таможенные процедуры и проверки.</li>
    </ul>
    <a class="topic-cta" href="/#cta">Узнать срок для вашей модели</a>
  </article>
</div>

<aside class="topic-aside">
  <div class="topic-card">
    <h2 class="h3">Другие полезные страницы</h2>
    <div class="topic-links">
      <a href="/stoimost-importa-avto/">Стоимость импорта авто</a>
      <a href="/rastamozhka-avto-dokumenty/">Растаможка и документы</a>
      <a href="/avto-iz-korei/">Авто из Кореи</a>
      <a href="/avto-iz-kitaya/">Авто из Китая</a>
      <a href="/avto-iz-ssha/">Авто из США</a>
    </div>
  </div>
</aside>
',
  ],

  'rastamozhka-avto-dokumenty' => [
    'excerpt' => 'На этой странице разобрали документы и порядок действий, чтобы автомобиль можно было законно поставить на учет в России без лишних задержек.',
    'content' => '
<div class="topic-main">
  <article class="topic-card topic-section">
    <h2 class="h3">Базовый пакет документов</h2>
    <ul class="topic-list">
      <li>Документы на автомобиль от продавца/аукциона.</li>
      <li>Транспортные документы по перевозке.</li>
      <li>Таможенная декларация и подтверждение платежей.</li>
      <li>Документы для дальнейшей регистрации в РФ.</li>
    </ul>
  </article>

  <article class="topic-card topic-section">
    <h2 class="h3">Этапы таможенного оформления</h2>
    <ul class="topic-list">
      <li>Проверка корректности документов до отправки.</li>
      <li>Подача декларации и расчет обязательных платежей.</li>
      <li>Проверка и выпуск автомобиля таможней.</li>
      <li>Передача полного комплекта документов клиенту.</li>
    </ul>
  </article>

  <article class="topic-card topic-section">
    <h2 class="h3">Частые ошибки</h2>
    <ul class="topic-list">
      <li>Покупка авто без предварительной проверки документов.</li>
      <li>Неполная смета по таможенным расходам.</li>
      <li>Ошибки в данных, которые затягивают выпуск.</li>
    </ul>
    <a class="topic-cta" href="/#cta">Проверить документы до выкупа</a>
  </article>
</div>

<aside class="topic-aside">
  <div class="topic-card">
    <h2 class="h3">Другие полезные страницы</h2>
    <div class="topic-links">
      <a href="/stoimost-importa-avto/">Стоимость импорта авто</a>
      <a href="/sroki-dostavki-avto/">Сроки доставки авто</a>
      <a href="/avto-iz-korei/">Авто из Кореи</a>
      <a href="/avto-iz-kitaya/">Авто из Китая</a>
      <a href="/avto-iz-ssha/">Авто из США</a>
    </div>
  </div>
</aside>
',
  ],

  'avto-iz-korei' => [
    'excerpt' => 'Корея часто становится лучшим выбором для тех, кто ищет ликвидный автомобиль с понятной историей и хорошим состоянием при адекватном бюджете.',
    'content' => '
<div class="topic-main">
  <article class="topic-card topic-section">
    <h2 class="h3">Плюсы импорта из Кореи</h2>
    <ul class="topic-list">
      <li>Большой выбор автомобилей с прозрачной историей.</li>
      <li>Аккуратная эксплуатация и понятное обслуживание.</li>
      <li>Хороший баланс цены и состояния.</li>
    </ul>
  </article>

  <article class="topic-card topic-section">
    <h2 class="h3">Какие авто чаще привозят</h2>
    <ul class="topic-list">
      <li>Седаны и кроссоверы массового сегмента.</li>
      <li>Автомобили с небольшим пробегом.</li>
      <li>Модели с богатыми комплектациями.</li>
    </ul>
  </article>

  <article class="topic-card topic-section">
    <h2 class="h3">Как проходит сделка</h2>
    <ul class="topic-list">
      <li>Подбор вариантов и проверка состояния.</li>
      <li>Согласование и выкуп автомобиля.</li>
      <li>Доставка, растаможка, передача клиенту.</li>
    </ul>
    <a class="topic-cta" href="/#cta">Подобрать авто из Кореи</a>
  </article>
</div>

<aside class="topic-aside">
  <div class="topic-card">
    <h2 class="h3">Другие полезные страницы</h2>
    <div class="topic-links">
      <a href="/stoimost-importa-avto/">Стоимость импорта авто</a>
      <a href="/sroki-dostavki-avto/">Сроки доставки авто</a>
      <a href="/rastamozhka-avto-dokumenty/">Растаможка и документы</a>
      <a href="/avto-iz-kitaya/">Авто из Китая</a>
      <a href="/avto-iz-ssha/">Авто из США</a>
    </div>
  </div>
</aside>
',
  ],

  'avto-iz-kitaya' => [
    'excerpt' => 'Китайский рынок подходит тем, кто ищет современные комплектации, новые модели и электромобили по конкурентной цене.',
    'content' => '
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
    <a class="topic-cta" href="/#cta">Подобрать авто из Китая</a>
  </article>
</div>

<aside class="topic-aside">
  <div class="topic-card">
    <h2 class="h3">Другие полезные страницы</h2>
    <div class="topic-links">
      <a href="/stoimost-importa-avto/">Стоимость импорта авто</a>
      <a href="/sroki-dostavki-avto/">Сроки доставки авто</a>
      <a href="/rastamozhka-avto-dokumenty/">Растаможка и документы</a>
      <a href="/avto-iz-korei/">Авто из Кореи</a>
      <a href="/avto-iz-ssha/">Авто из США</a>
    </div>
  </div>
</aside>
',
  ],

  'avto-iz-ssha' => [
    'excerpt' => 'США — направление для тех, кто ищет экономию и широкий выбор. Ключевая задача — правильно оценить состояние лота и полную стоимость до покупки.',
    'content' => '
<div class="topic-main">
  <article class="topic-card topic-section">
    <h2 class="h3">Преимущества рынка США</h2>
    <ul class="topic-list">
      <li>Большой выбор моделей и комплектаций.</li>
      <li>Потенциально заметная экономия бюджета.</li>
      <li>Понятные аукционные механики покупки.</li>
    </ul>
  </article>

  <article class="topic-card topic-section">
    <h2 class="h3">На что обращать внимание</h2>
    <ul class="topic-list">
      <li>История автомобиля и тип повреждений.</li>
      <li>Оценка стоимости восстановления.</li>
      <li>Суммарные расходы: выкуп, доставка, таможня, оформление.</li>
    </ul>
  </article>

  <article class="topic-card topic-section">
    <h2 class="h3">Как снизить риски</h2>
    <ul class="topic-list">
      <li>Проверять документы до ставки на лот.</li>
      <li>Считать полную смету, а не только цену покупки.</li>
      <li>Не выкупать авто без финального согласования.</li>
    </ul>
    <a class="topic-cta" href="/#cta">Подобрать авто из США</a>
  </article>
</div>

<aside class="topic-aside">
  <div class="topic-card">
    <h2 class="h3">Другие полезные страницы</h2>
    <div class="topic-links">
      <a href="/stoimost-importa-avto/">Стоимость импорта авто</a>
      <a href="/sroki-dostavki-avto/">Сроки доставки авто</a>
      <a href="/rastamozhka-avto-dokumenty/">Растаможка и документы</a>
      <a href="/avto-iz-korei/">Авто из Кореи</a>
      <a href="/avto-iz-kitaya/">Авто из Китая</a>
    </div>
  </div>
</aside>
',
  ],
];

$updated = 0;
$errors  = 0;

foreach ($pages as $slug => $data) {
  $page = get_page_by_path($slug);
  if (!$page) {
    WP_CLI::warning("Page not found: $slug");
    $errors++;
    continue;
  }

  $result = wp_update_post([
    'ID'           => $page->ID,
    'post_content' => trim($data['content']),
    'post_excerpt' => $data['excerpt'],
  ], true);

  if (is_wp_error($result)) {
    WP_CLI::error("Failed to update $slug: " . $result->get_error_message(), false);
    $errors++;
  } else {
    WP_CLI::success("Updated: $slug (ID {$page->ID})");
    $updated++;
  }
}

WP_CLI::line("Done: $updated updated, $errors errors.");
