<?php
require_once(__DIR__.'/assets/configs/config.php');
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="./assets/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/style.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">

	<title><?= $title?></title>
</head>
<body>

<header class="header">
	<div class="container header__wrap">
		<div class="header__logo">
			<span class="text_accent line-break">Оффициальный</span>
			сервис <?= $brand_name;?>
		</div>
		<div class="header__contacts">
			<div class="header__contacts-block">
				<svg class="header__contacts-block-icon">
					<use xlink:href="./assets/stack/sprite.svg#call"></use>
				</svg>
				<div class="header__contacts-block-label">Наш телефон:</div>
				<a href="tel: <?= $phone_link?>" class="header__contacts-block-info"><?= $phone_format?></a>
			</div>
			<div class="header__contacts-block">
				<svg class="header__contacts-block-icon">
					<use xlink:href="./assets/stack/sprite.svg#clock"></use>
				</svg>
				<div class="header__contacts-block-label">Мы работаем:</div>
				<div class="header__contacts-block-info">Ежедневно: 8:00 — 23:00</div>
			</div>
		</div>
		<button class="button button_accent header__button">Вызвать мастера</button>
	</div>
</header>

<section class="promo">
	<div class="container promo__wrap">
		<h1 class="promo__title">
			Ремонт бытовой
			<span class="line-break"></span>
			техники <span class="text_accent text_bold"><?= $brand_name?></span>
			<span class="line-break"></span>
			в Санкт-Петербурге
		</h1>
		<div class="promo__subtitle">Оффициальный представитель <?= $brand_name?> в СПб</div>
		<button class="button button_accent promo__button">Заказать ремонт</button>
		<div class="promo__footfeature">
			<svg class="promo__footfeature-icon">
				<use xlink:href="./assets/stack/sprite.svg#truck"></use>
			</svg>

			Бесплатный выезд мастера
		</div>
		<picture>
			<source srcset="./assets/images/webp/promo-collage.webp" type="image/webp">
			<img src="./assets/images/promo-collage.png" alt="Ремонт бытовой техники <?= $brand_name?> в СПб" class="promo__collage">
		</picture>
	</div>
</section>

<section class="steps">
	<div class="container steps__wrap">
		<div class="steps__block">
			<div class="steps__block-count">01</div>
			<div class="steps__block-text">
				Оставляете заявку на сайте или по телефону
			</div>
		</div>
		<div class="steps__block">
			<div class="steps__block-count">02</div>
			<div class="steps__block-text">
				В течение <span class="text_accent">5 минут</span> с Вами связывается Ваш мастер и конслультирует по поломке
			</div>
		</div>
		<div class="steps__block">
			<div class="steps__block-count">03</div>
			<div class="steps__block-text">
				В течение <span class="text_accent">20 минут</span> Ваш мастер будет у вас со всем нужным оборудованием
			</div>
		</div>
		<div class="steps__block">
			<div class="steps__block-count">04</div>
			<div class="steps__block-text">
				После ремонта Вы получаете комплект документов с гарантией на ремонт
			</div>
		</div>
	</div>
</section>

<section class="devices">
	<div class="container devices__wrap">
		<h2 class="section__title">Виды обслуживаемой техники <?= $brand_name?></h2>
		<div class="devices__cards">
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold line-break">Стиральные</span> машины</div>
				<button class="button button_accent devices__card-button">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/washing-machine.webp" type="image/webp">
					<img src="./assets/images/washing-machine.jpg" alt="Ремонт бытовой техники <?=$brand_name?> в СПб" class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold line-break">Посудомоечные</span> машины</div>
				<button class="button button_accent devices__card-button">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/dishwasher.webp" type="image/webp">
					<img src="./assets/images/dishwasher.jpg" alt="Ремонт бытовой техники <?=$brand_name?> в СПб" class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold line-break">Варочные</span> панели</div>
				<button class="button button_accent devices__card-button">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/hob.webp" type="image/webp">
					<img src="./assets/images/hob.jpg" alt="Ремонт бытовой техники <?=$brand_name?> в СПб" class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold line-break">Духовые</span>шкафы</div>
				<button class="button button_accent devices__card-button">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/oven-cabinet.webp" type="image/webp">
					<img src="./assets/images/oven-cabinet.jpg" alt="Ремонт бытовой техники <?=$brand_name?> в СПб" class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold line-break">Сушильные</span> машины</div>
				<button class="button button_accent devices__card-button">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/drying-machine.webp" type="image/webp">
					<img src="./assets/images/drying-machine.jpg" alt="Ремонт бытовой техники <?=$brand_name?> в СПб" class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold line-break">Микроволновые</span> печи</div>
				<button class="button button_accent devices__card-button">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/microoven.webp" type="image/webp">
					<img src="./assets/images/microoven.jpg" alt="Ремонт бытовой техники <?=$brand_name?> в СПб" class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold">Кофемашины</span></div>
				<button class="button button_accent devices__card-button">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/coffee-machine.webp" type="image/webp">
					<img src="./assets/images/coffee-machine.jpg" alt="Ремонт бытовой техники <?=$brand_name?> в СПб" class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold">Холодильники</span></div>
				<button class="button button_accent devices__card-button">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/fridge.webp" type="image/webp">
					<img src="./assets/images/fridge.jpg" alt="Ремонт бытовой техники <?=$brand_name?> в СПб" class="devices__card-img">
				</picture>
			</div>
			<div class="devices__card">
				<div class="devices__card-title"><span class="text_bold">Вытяжки</span></div>
				<button class="button button_accent devices__card-button">Вызвать мастера</button>
				<picture>
					<source srcset="./assets/images/webp/range-hood.webp" type="image/webp">
					<img src="./assets/images/range-hood.jpg" alt="Ремонт бытовой техники <?=$brand_name?> в СПб" class="devices__card-img">
				</picture>
			</div>
		</div>
	</div>
</section>
</body>
</html>