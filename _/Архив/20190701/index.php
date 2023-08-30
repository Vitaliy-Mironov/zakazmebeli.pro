<?php
ini_set('session.gc_maxlifetime', 86400); // время жизни сессии == сутки
ini_set('session.cookie_lifetime', 0);
session_set_cookie_params(0);

ini_set('session.save_path', $_SERVER['DOCUMENT_ROOT'].'/detailing/sessions/');

session_start();
?>
<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="utf-8" />
<meta name="robots" content="noindex" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="Vitaliy Mironov, telegram: @MIRONOV_VITALIY" />
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
<meta name="keywords" content="деталировка, деталировка кухни, деталировка мебели, деталировка корпусной мебели, деталировка корпусной мебели online, помощь в деталировке мебели, расчет кухни, расчет корпусной мебели" />
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
if (empty($_SESSION["colortheme"])) {$_SESSION["colortheme"] = "Tomato";}
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
require 'header.php';
?>
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
<div class="qr"><img src="/detailing/images/QR.svg" alt="QR" /></div>
<h1>Online деталировка корпусной мебели</h1>
<p class="detailing-p">Добро пожаловать в программу автоматического расчёта деталировки корпусной мебели. С её помощью Вы сможете быстро, легко и точно рассчитать всё необходимое для заказа распила и сборки Вашей мебели.</p>
<div class="more-block">
	<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
	<h2>Возможности программы деталировки</h2>
	<p class="detailing-p">В текущей версии программы можно рассчитать деталировку кухни, с фасадами на петлях и выдвижными ящиками на шариковых направляющих.</p>
	<h2>Что ещё программа деталировки будет уметь?</h2>
	<p class="detailing-p">Ведётся работа над алгоритмами расчёта использования и других видов направляющих и прочей фурнитуры от Blum, Hettich, GTV, Boyard, Rejs.</p>
	<p class="detailing-p logos">
		<a href="https://www.blum.com/" class="logos-link" target="_blank" rel="nofollow"><img src="/detailing/images/Blum_logo.webp" alt="Blum" class="logos-images" /></a>
		<a href="https://www.hettich.com/" class="logos-link" target="_blank" rel="nofollow"><img src="/detailing/images/Hettich_logo.webp" alt="Hettich" class="logos-images" /></a>
		<a href="https://www.gtv.com.pl/" class="logos-link" target="_blank" rel="nofollow"><img src="/detailing/images/GTV_logo.webp" alt="GTV" class="logos-images" /></a>
		<a href="https://www.boyard.biz/" class="logos-link" target="_blank" rel="nofollow"><img src="/detailing/images/Boyard_logo.webp" alt="Boyard" class="logos-images" /></a>
		<a href="http://www.rejs.eu/" class="logos-link" target="_blank" rel="nofollow"><img src="/detailing/images/Rejs_logo.webp" alt="Rejs" class="logos-images" /></a>
		<a href="https://www.egger.com/" class="logos-link" target="_blank" rel="nofollow"><img src="/detailing/images/Egger_logo.webp" alt="Egger" class="logos-images" /></a>
	</p>
	<p class="detailing-p">Возможно, будут добавлены каталоги цветов производителей листовых материалов (Egger, Krono и других), чтобы можно было получить визуальное представление о том, как будет выглядеть проектируемая мебель. Сейчас "поиграть" с цветом можно, используя разноцветные кнопки, расположенные в верхней части экрана.</p>
	<p class="detailing-p">Планируется дополнить эту программу расчётом карты распила и присадки (сверловки) элементов мебели.</p>
	<p class="detailing-p">Ну и, конечно же, будут добавлены алгоритмы расчёта шкафа-купе и другой корпусной мебели.</p>
	<h2>Работа с программой</h2>
	<p class="detailing-p">Чтобы программа рассчитала деталировку необходимой Вам мебели, Вам нужно пошагово ответить на некоторое количество вопросов. На основании Ваших ответов, программа выдаст результат.</p>
	<p class="detailing-p">Варианты ответов, отмеченные Вами, либо установленные программой по умолчанию, будут <u>подчёркнуты</u>.</p>
	<p class="detailing-p">Варианты ответов, находящиеся в стадии разработки и тестирования, отмечены <span class="disabled-span">серым цветом</span> и пока не доступны для выбора.</p>
	<p class="detailing-p">Если Вы нажали "Применить", а следующий блок не загрузился, - значит не был выбран никакой вариант. Повторите действие.</p>
	<p class="detailing-p">Всё просто и интуитивно понятно. Итак, смелее! Поехали!</p>
</div>

<?php
// записываем в сессию
if (!empty($_POST["MBLvid000"])) {$_SESSION["MBLvid000"] = $_POST["MBLvid000"];}
// устанавливаем checked на выбор пользователя
if ($_REQUEST["MBLvid000"] == "kitchen") {$b01 = " checked";} elseif ($_SESSION["MBLvid000"] == "kitchen") {$b01 = " checked";}
if ($_REQUEST["MBLvid000"] == "table") {$b02 = " checked";} elseif ($_SESSION["MBLvid000"] == "table") {$b02 = " checked";}
if ($_REQUEST["MBLvid000"] == "casecompartment") {$b03 = " checked";} elseif ($_SESSION["MBLvid000"] == "casecompartment") {$b03 = " checked";}
if ($_REQUEST["MBLvid000"] == "commode") {$b04 = " checked";} elseif ($_SESSION["MBLvid000"] == "commode") {$b04 = " checked";}
// счётчик fieldset > legend
$formcount = 1;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="instruction-checkbox" />
			<p class="instruction-p">Выберете нужный вариант и жмите "Применить". Программа обработает отправленные Вами данные, и, на их основании, предложит следующий шаг...</p>
			<p class="instruction-p">На данный момент возможен только вариант выбора "кухня". Выбор другого вида мебели будет доступен позже.</p>
			<?php require 'editban.php'; ?>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Вид мебели</legend>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MBLvid000" value="kitchen" type="radio" class="radio-button<?php echo $b01; ?>" />
			<img src="/detailing/images/MBLvid000_1.png" alt="кухня" class="radio-image" />
			<span class="detailing-form-input-span">кухня</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MBLvid000" value="table" type="radio" class="radio-button<?php echo $b02; ?>" disabled />
			<img src="/detailing/images/MBLvid000_2.png" alt="стол" class="radio-image" />
			<span class="detailing-form-input-span">стол</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MBLvid000" value="casecompartment" type="radio" class="radio-button<?php echo $b03; ?>" disabled />
			<img src="/detailing/images/MBLvid000_3.png" alt="шкаф-купе" class="radio-image" />
			<span class="detailing-form-input-span">шкаф-купе</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MBLvid000" value="commode" type="radio" class="radio-button<?php echo $b04; ?>" disabled />
			<img src="/detailing/images/MBLvid000_4.png" alt="комод" class="radio-image" />
			<span class="detailing-form-input-span">комод</span>
		</label>
	</fieldset>
	<a id="MBLvid000"></a>
	<button type="submit" formaction="#MBLvid000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MBLvid000"]) {
	case "kitchen":
		require 'kitchen_00100.php';
		break;
	/* case "casecompartment":
	case "table":
	case "commode":
		echo '<p class="red">Next step</p>';
		break; */
}
?>
<?php echo "\n"; ?>
<?php // тестовый блок. удалить, после настройки.
echo '<p class="test">id '.session_id().'</p>'."\n"; // вывод идентификатора сессии
echo '<p class="test">'.$_SERVER['HTTP_USER_AGENT'].'</p>'."\n"; // вывод данных о браузере пользователя
foreach ($_SESSION as $key => $name) {echo '<p class="test">'.$key.' '.$name.'</p>'."\n";} // вывод переменных сессии
unset($key); // разрыв ссылки на последний элемент
unset($name); // разрыв ссылки на последний элемент
?>
<form class="detailing-form meter">
	<button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="detailing-button cleaning-button" onkeydown="if(event.keyCode==13){return false;}"></button>
</form>
</div>
</div>
<?php require 'footer.php'; ?>
</body>
</html>