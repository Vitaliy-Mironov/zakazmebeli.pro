<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="utf-8" />
<meta name="robots" content="noindex" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="Vitaliy Mironov, mironov@n1.by" />
<meta name="copyright" content="Mironov V.A." />

<meta name="yandex-verification" content="" />
<meta name="google-site-verification" content="" />

<!--
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
<link rel="manifest" href="/site.webmanifest" />
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
<meta name="apple-mobile-web-app-title" content="ZakazMebeli" />
<meta name="application-name" content="ZakazMebeli" />
<meta name="msapplication-TileColor" content="#da532c" />
<meta name="theme-color" content="#ffa500" />
-->
<link rel="shortcut icon" href="/favicon.ico" type="image/ico" />
<title>Деталировка корпусной мебели online</title>
<meta name="description" content="Быстрый автоматический расчёт деталировки мебели. Просто вводите ваши данные (габариты, форму, наполнение, фурнитуру и т.п.) и получаете на выходе полный расчёт всего необходимого со всеми размерами." />
<!--
<meta property="og:image:height" content="261" />
<meta property="og:image:width" content="498" />
<meta property="og:url" content="https://zakazmebeli.pro/detailing/" />
<meta property="og:image" content="https://zakazmebeli.pro/detailing/images/og-image.jpg" />
<meta property="og:description" content="Быстрый автоматический расчёт деталировки мебели. Просто вводите ваши данные (габариты, форму, наполнение, фурнитуру...) и получаете на выходе полный расчёт всего необходимого со всеми размерами." />
<meta property="og:title" content="Деталировка корпусной мебели online" />
-->
<?php
// установка пользовательской цветовой схемы
if (empty($_SESSION["colortheme"])) {$_SESSION["colortheme"] = "LightSteelBlue";}
if (!empty($_GET["colortheme"])) {$_SESSION["colortheme"] = $_GET["colortheme"];}
	$colortheme = $_SESSION["colortheme"];
// подключение стилей
	require 'styles.php';
?>
</head>
<body>
<?php
// сброс сессии
$unsess = $_POST["unsess"];
if (!empty($unsess)) {
	session_unset();
}
?>
<header>
<div class="header-container"></div>
</header>
<div class="main">
<div class="main-container">
<form class="detailing-form colortheme">
	<button name="colortheme" value="#645452" type="submit" formaction="" formmethod="get" class="detailing-button" style="background-color: #645452;"></button>
	<button name="colortheme" value="LightSlateGray" type="submit" formaction="" formmethod="get" class="detailing-button" style="background-color: LightSlateGray;"></button>
	<button name="colortheme" value="LightSteelBlue" type="submit" formaction="" formmethod="get" class="detailing-button" style="background-color: LightSteelBlue;"></button>
	<button name="colortheme" value="LimeGreen" type="submit" formaction="" formmethod="get" class="detailing-button" style="background-color: LimeGreen;"></button>
	<button name="colortheme" value="DarkTurquoise" type="submit" formaction="" formmethod="get" class="detailing-button" style="background-color: DarkTurquoise;"></button>
	<button name="colortheme" value="BlueViolet" type="submit" formaction="" formmethod="get" class="detailing-button" style="background-color: BlueViolet;"></button>
	<button name="colortheme" value="Fuchsia" type="submit" formaction="" formmethod="get" class="detailing-button" style="background-color: Fuchsia;"></button>
	<button name="colortheme" value="Crimson" type="submit" formaction="" formmethod="get" class="detailing-button" style="background-color: Crimson;"></button>
	<button name="colortheme" value="Tomato" type="submit" formaction="" formmethod="get" class="detailing-button" style="background-color: Tomato;"></button>
	<button name="colortheme" value="Gold" type="submit" formaction="" formmethod="get" class="detailing-button" style="background-color: Gold;"></button>
	<button name="colortheme" value="Wheat" type="submit" formaction="" formmethod="get" class="detailing-button" style="background-color: Wheat;"></button>
</form>

<h1>Online деталировка корпусной мебели</h1>
<p class="detailing-p">Добро пожаловать в программу автоматического расчёта деталировки корпусной мебели. С её помощью Вы сможете быстро, легко и точно рассчитать всё необходимое для заказа распила и сборки Вашей мебели.</p>
<div class="more-block">
	<input type="checkbox" class="more-link" />
	<h2>Возможности программы деталировки</h2>
	<p class="detailing-p">В текущей версии программы можно рассчитать деталировку кухни, с фасадами на петлях и выдвижными ящиками на шариковых направляющих.</p>
	<h2>Что ещё программа деталировки будет уметь?</h2>
	<p class="detailing-p">Ведётся работа над алгоритмами расчёта использования и других видов направляющих и прочей фурнитуры от Blum, Hettich, GTV, Boyard, Rejs.</p>
	<p class="detailing-p logos">
		<img src="/detailing/images/Blum_logo.webp" alt="Blum_logo" class="logos-images" />
		<img src="/detailing/images/Hettich_logo.webp" alt="Hettich_logo" class="logos-images" />
		<img src="/detailing/images/GTV_logo.webp" alt="GTV_logo" class="logos-images" />
		<img src="/detailing/images/Boyard_logo.webp" alt="Boyard_logo" class="logos-images" />
		<img src="/detailing/images/Rejs_logo.webp" alt="Rejs_logo" class="logos-images" />
		<img src="/detailing/images/Egger_logo.webp" alt="Egger_logo" class="logos-images" />
	</p>
	<p class="detailing-p">Возможно, будут добавлены каталоги цветов производителей листовых материалов (Egger, Krono и других), чтобы можно было получить визуальное представление о том, как будет выглядеть проектируемая мебель. Сейчас "поиграть" с цветом можно, используя разноцветные кнопки, расположенные в верхней части экрана.</p>
	<p class="detailing-p">Планируется дополнить эту программу расчётом карты распила и присадки (сверловки) элементов мебели.</p>
	<p class="detailing-p">Ну и, конечно же, будут добавлены алгоритмы расчёта шкафа-купе и другой корпусной мебели.</p>
	<h2>Работа с программой</h2>
	<p class="detailing-p">Чтобы программа рассчитала деталировку необходимой Вам мебели, Вам нужно пошагово ответить на некоторое количество вопросов. На основании Ваших ответов, программа выдаст результат.</p>
	<p class="detailing-p">Варианты ответов, отмеченные Вами, будут <u>подчёркнуты</u>.</p>
	<p class="detailing-p">Варианты ответов, находящиеся в стадии разработки и тестирования, отмечены <span class="disabled-span">серым цветом</span> и пока не доступны для выбора.</p>
	<p class="detailing-p">Если Вы нажали "Применить", а следующий блок не загрузился, - значит не был выбран никакой вариант. Повторите действие.</p>
	<p class="detailing-p">Всё просто и интуитивно понятно. Итак, смелее! Поехали!</p>
</div>

<?php
if (!empty($_POST["MBLvid000"])) {$_SESSION["MBLvid000"] = $_POST["MBLvid000"];} // записываем в сессию

$formcount = 1;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">Выберете нужный вариант и жмите "Применить". Программа обработает отправленные Вами данные, и, на их основании, предложит следующий шаг...</p>
			<p class="detailing-form-note-p">На данный момент возможен только вариант выбора "кухня". Выбор другого вида мебели будет доступен позже.</p>
			<p class="detailing-form-note-p red hidden-message">Доступно редактирование только последнего шага. Для предотвращения ошибок в расчётах, этот блок уже недоступен для изменения. Можно только <button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="detailing-textbutton-cleaning">очистить всё</button> и начать заново.</p>
		</div>
		<legend class="detailing-form-fieldset-legend"><?php echo $formcount.'. '; ?>Вид мебели</legend>
		<label class="detailing-form-input-label">
			<input name="MBLvid000" value="кухня" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["MBLvid000"] == "кухня") {echo ' checked';} elseif ($_SESSION["MBLvid000"] == "кухня") {echo ' checked';} ?>" />
			<img src="/detailing/images/MBLvid000_1.png" alt="кухня" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">кухня</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MBLvid000" value="стол" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["MBLvid000"] == "стол") {echo ' checked';} elseif ($_SESSION["MBLvid000"] == "стол") {echo ' checked';} ?>" disabled />
			<img src="/detailing/images/MBLvid000_2.png" alt="стол" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">стол</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MBLvid000" value="шкаф-купе" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["MBLvid000"] == "шкаф-купе") {echo ' checked';} elseif ($_SESSION["MBLvid000"] == "шкаф-купе") {echo ' checked';} ?>" disabled />
			<img src="/detailing/images/MBLvid000_3.png" alt="шкаф-купе" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">шкаф-купе</span>
		</label>
	</fieldset>
	<a id="MBLvid000"></a>
	<button type="submit" formaction="#MBLvid000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
switch ($_SESSION["MBLvid000"]) {
	case "кухня":
		require 'kitchen_step_00200.php';
		break;
	/* case "стол":
		echo '<p class="red">Next step</p>';
		break;
	case "шкаф-купе":
		echo '<p class="red">Next step</p>';
		break; */
}
?>
<?php echo "\n"; ?>
<form class="detailing-form meter">
	<button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="detailing-button detailing-button-cleaning"></button>
</form>
<?php
echo '<hr />'."\n";
foreach ($_SESSION as $key => $name) {echo '<p class="test">'.$key.' '.$name.'</p>'."\n";} // вывод переменных сессии
unset($key);// разрыв ссылки на последний элемент
unset($name);// разрыв ссылки на последний элемент
?>
</div>
</div>
<footer>
<div class="footer-container"></div>
</footer>
</body>
</html>