<?php
require '../furniture/data.php';

$courseRUB = 0.033; // курс российского рубля
$courseUSD = 2.15; // курс доллара
$courseEUR = 2.35; // курс евро
$markup = 2.0; // розничная наценка

function card($code) {
	global $courseRUB; // курс российского рубля
	global $courseUSD; // курс доллара
	global $courseEUR; // курс евро
	global $markup; // розничная наценка
	
	global $furniture_name; // наименование
	global $furniture_form; // форма
	global $furniture_plus; // дополнительный параметр
	global $furniture_brand; // бренд
	global $furniture_code; // артикул
	global $furniture_texture; // текстура
	global $furniture_barcode; // штрихкод
	global $furniture_unit; // единица измерения
	global $furniture_price; // цена
	global $furniture_currency; // валюта
	global $furniture_image; // изображение
	global $furniture_logo; // логотип производителя
	global $furniture_pdf; // инструкция по монтажу
	global $furniture_web; // страница товара на сайте производителя
	global $furniture_advantage; // преимущества
	global $furniture_length; // длина, мм
	global $furniture_width; // ширина, мм
	global $furniture_height; // высота, мм
	global $furniture_thickness; // толщина, мм
	global $furniture_weight; // вес, кг
	global $furniture_load; // допустимая нагрузка, кг
	global $furniture_emission; // класс эмиссии
	
	$imgalt = $furniture_name[$code].' '.$furniture_form[$code].' '.$furniture_plus[$code].' '.$furniture_brand[$code].' '.$furniture_code[$code];
	switch ($furniture_currency[$code]) {
		case "BYN":
			$price = $furniture_price[$code];
			break;
		case "RUB":
			$price = $furniture_price[$code] * $courseRUB;
			break;
		case "USD":
			$price = $furniture_price[$code] * $courseUSD;
			break;
		case "EUR":
			$price = $furniture_price[$code] * $courseEUR;
			break;
	}
	switch ($furniture_brand[$code]) {
		case "GTV":
		case "Rejs":
		case "Juan":
			$country = '/img/flags/100x100_pl.webp'; $countryalt = 'Польша';
			break;
		case "Blum":
		case "Egger":
		case "Kronospan":
			$country = '/img/flags/100x100_at.webp'; $countryalt = 'Австрия';
			break;
		case "Boyard":
			$country = '/img/flags/100x100_ru.webp'; $countryalt = 'Россия';
			break;
		case "Hettich":
			$country = '/img/flags/100x100_de.webp'; $countryalt = 'Германия';
			break;
		case "Camar":
		case "FGV":
			$country = '/img/flags/100x100_it.webp'; $countryalt = 'Италия';
			break;
	}
	// расшифровка текстур
	if ($furniture_brand[$code] == 'Egger') {
		switch ($furniture_texture[$code]) {
			case "HG":
				$texture = 'Высокий глянец';
				break;
			case "PG":
				$texture = 'PerfectSense Gloss';
				break;
			case "PM":
				$texture = 'PerfectSense Matt';
				break;
			case "SM":
				$texture = 'Матовый шёлк';
				break;
			case "ST2":
				$texture = 'Мягкий жемчуг';
				break;
			case "ST9":
				$texture = 'Мягкий матовый';
				break;
			case "ST10":
				$texture = 'Шероховатые глубокие поры';
				break;
			case "ST15":
				$texture = 'Мягкий вельвет';
				break;
			case "ST16":
				$texture = 'Матекс оштукатуренный';
				break;
			case "ST12":
				$texture = 'Поры матовые';
				break;
			case "ST22":
				$texture = 'Линейные глубокие поры';
				break;
			case "ST28":
				$texture = 'Филвуд натуральный';
				break;
			case "ST29":
				$texture = 'Филвуд амбианс';
				break;
			case "ST33":
				$texture = 'Филвуд ремесленный';
				break;
			case "ST36":
				$texture = 'Филвуд шероховатый';
				break;
			case "ST37":
				$texture = 'Филвуд рифт';
				break;
			case "ST38":
				$texture = 'Филвуд хвойный';
				break;
			case "ST76":
				$texture = 'Матекс шероховатый матовый';
				break;
			case "ST82":
				$texture = 'Матекс гранит';
				break;
			case "ST86":
				$texture = 'Глубокие горизонтальные древесные поры';
				break;
			case "ST87":
				$texture = 'Матекс керамика';
				break;
			case "ST89":
				$texture = 'Матекс горная порода';
				break;
		}
	}
	$retail = $price * $markup;
	
	if (!empty($furniture_texture[$code])) {
		$codefull = $furniture_code[$code].' '.$furniture_texture[$code];
	} else {
		$codefull = $furniture_code[$code];
	}

	echo '<div class="furniture-card">'."\n";
	echo '	<p class="detailing-p furniture-title">'.$furniture_name[$code].' '.$furniture_form[$code].' '.$furniture_plus[$code].'<br />'.$furniture_brand[$code].' '.$codefull.'</p>'."\n"; // полное наименование
	echo '	<div class="furniture-image-block">'."\n";
	if (!empty($furniture_image[$code])) {
	echo '		<img src="'.$furniture_image[$code].'" alt="'.$imgalt.'" class="furniture-image" />'."\n"; // изображение
	} else {
	echo '		<img src="/img/no-image.png" alt="'.$imgalt.'" class="furniture-image" />'."\n"; // альтернативное изображение
	}
	if (!empty($furniture_logo[$code])) {
	echo '		<img src="'.$furniture_logo[$code].'" alt="'.$furniture_brand[$code].' logo" class="furniture-logo" />'."\n"; // логотип производителя
	}
	if (!empty($country)) {
	echo '		<img src="'.$country.'" alt="'.$countryalt.'" class="furniture-country" />'."\n"; // родина бренда
	}
	if (!empty($furniture_barcode[$code])) {
	echo '		<div class="furniture-barcode">'.$furniture_barcode[$code].'</div>'."\n"; // штрихкод
	}
	echo '	</div>'."\n";
	echo '	<div class="detailing-p furniture-cost">'.round($retail, 2).' руб./'.$furniture_unit[$code].'</div>'."\n"; // розничная цена с округлением до Х.ХХ за единицу измерения
	echo '	<div class="furniture-advantage-block">'."\n";
	if (!empty($furniture_length[$code])) {
	echo '		<div class="furniture-length icon-right-open-mini">Длина: '.$furniture_length[$code].' мм</div>'."\n"; // длина
	}
	if (!empty($furniture_width[$code])) {
	echo '		<div class="furniture-width icon-right-open-mini">Ширина: '.$furniture_width[$code].' мм</div>'."\n"; // ширина
	}
	if (!empty($furniture_height[$code])) {
	echo '		<div class="furniture-height icon-right-open-mini">Высота: '.$furniture_height[$code].' мм</div>'."\n"; // высота
	}
	if (!empty($furniture_thickness[$code])) {
	echo '		<div class="furniture-thickness icon-right-open-mini">Толщина: '.$furniture_thickness[$code].' мм</div>'."\n"; // толщина
	}
	if (!empty($furniture_load[$code])) {
	echo '		<div class="furniture-load icon-right-open-mini">Нагрузка: '.$furniture_load[$code].' кг</div>'."\n"; // допустимая нагрузка
	}
	if (!empty($furniture_weight[$code])) {
	echo '		<div class="furniture-weight icon-right-open-mini">Вес: '.$furniture_weight[$code].' кг</div>'."\n"; // вес
	}
	if (!empty($furniture_emission[$code])) {
	echo '		<div class="furniture-emission icon-check">Класс эмиссии: '.$furniture_emission[$code].'</div>'."\n"; // класс эмиссии
	}
	if (!empty($furniture_advantage[$code])) {
	echo '		<div class="furniture-advantage icon-check">'.$furniture_advantage[$code].'</div>'."\n"; // преимущества
	}
	if (!empty($texture)) {
	echo '		<div class="furniture-advantage icon-check">Структура: '.$texture.'</div>'."\n"; // описание текстуры
	}
	echo '	</div>'."\n";
	echo '	<div class="furniture-advantage-block">'."\n";
	if (!empty($furniture_pdf[$code])) {
	echo '		<div class="furniture-pdf icon-file-pdf"><a href="'.$furniture_pdf[$code].'" target="_blank">Техническая информация</a></div>'."\n"; // инструкция
	}
	if (!empty($furniture_web[$code])) {
	echo '		<div class="furniture-web icon-file-code"><a href="'.$furniture_web[$code].'" target="_blank" rel="nofollow">На сайте производителя</a></div>'."\n"; // страница товара на сайте производителя
	}
	echo '	</div>'."\n";
	echo '</div>'."\n";
}
?>

<?php
card('Egger-H3430-ST22');
card('ZM-ECHC09ZEO');
card('PK-L-H45-400');
card('PK-L-H45-500');
card('PK-L-H45-550');
card('UA-00-337160');
card('UA-00-337320');
card('Leva-703');
?>