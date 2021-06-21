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
</body>
</html>