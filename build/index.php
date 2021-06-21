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

</body>
</html>