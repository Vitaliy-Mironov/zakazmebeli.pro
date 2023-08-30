<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="utf-8" />
<meta name="robots" content="noindex" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="Vitaliy Mironov, mironov@n1.by" />
<meta name="copyright" content="Mironov V.A." />
<link rel="shortcut icon" href="/icon.ico" type="image/ico" />
<title>ZakazMebeli.pro | Деталировка v1.0</title>
<meta name="description" content="Быстрый автоматический расчёт деталировки мебели. Просто введите ваши данные (габариты, форму, наполнение, фурнитуру и т.п.) и получите на выходе полный расчёт всего необходимого со всеми размерами." />
<?php
// установка пользовательской цветовой схемы
if (empty($_SESSION["colortheme"])) {$_SESSION["colortheme"] = "Tomato";}
if (!empty($_POST["colortheme"])) {$_SESSION["colortheme"] = $_POST["colortheme"];}
	$colortheme = $_SESSION["colortheme"];
?>
<style>
* {margin: 0; padding: 0;}
html {overflow-y: scroll;}
body {display: block; margin: 0 auto; width: 1000px; font-family: Verdana, sans-serif;}
h1 {font-weight: normal; padding: 40px 10px 10px 10px; color: <?php echo $colortheme; ?>;}
h2 {font-weight: normal; padding: 10px;}
p {font-size: 16px; padding: 10px;}
.detailing-p {font-size: 16px; padding: 10px;}
.detailing-p-span {}
.detailing-p-link {color: blue; text-decoration: none;}
.detailing-p-link:hover {text-decoration: underline;}
.detailing-form {margin: 0 10px; text-align: center;}
.detailing-form-fieldset {display: block; width: 100%; border: 1px solid black; border-radius: 20px; text-align: center; padding-top: 10px; padding-bottom: 30px;}
.detailing-form-fieldset-legend {margin: 0 auto; color: <?php echo $colortheme; ?>; background-color: white; border: 1px solid black; border-radius: 20px; padding: 10px;}
.detailing-form-input-label {position: relative; display: inline-block; width: 250px; height: 250px; background-color: <?php echo $colortheme; ?>; border-radius: 50%;}
.detailing-form-input-image {width: 250px; height: 250px; box-shadow: 0 0 1px 1px white; border-radius: 50%;} 
.detailing-form-input-span {display: inline-block; width: 100%; position: absolute; bottom: 10px; left: 0px; text-align: center; color: black; background-color: white; border-radius: 10px; box-shadow: 0 0 1px 1px #999; cursor: pointer; transition: 0.5s;}
.detailing-form-input-radio:disabled ~ .detailing-form-input-span,
.detailing-form-input-radio:disabled ~ .detailing-form-input-span:hover {color: #aaa; background-color: #ccc;}
.detailing-form-input-radio {display: none;}
.detailing-form-input-radio ~ .detailing-form-input-span:hover,
.detailing-form-input-radio:checked ~ .detailing-form-input-span {color: white; background-color: black; transition: 0.5s;}
.checked ~ .detailing-form-input-span {color: black; text-decoration: underline; transition: 0.5s;}
.detailing-form-button {position: relative; top: -20px; font-size: 16px; background-color: white; border: 1px solid black; border-radius: 20px; padding: 10px; cursor: pointer; outline: none; transition: 0.5s;}
.detailing-form-button:hover {color: white; background-color: black; outline: none; transition: 0.5s;}
.detailing-form-note {position: relative; top: -50px; text-align: left;}
.detailing-form-note-p {display: none;}
.detailing-form-note-p:first-of-type {margin-top: 20px;}
.detailing-form-note-checkbox,
.detailing-form-note-checkbox::-ms-check {position: relative; left: 40px; display: inline-block; outline: none; padding: 10px;}
.detailing-form-note-checkbox::before,
.detailing-form-note-checkbox::-ms-check::before {position: relative; left: -20px; top: -3px; display: inline-block; width: 20px; height: 20px; background-color: white; border: 1px solid <?php echo $colortheme; ?>; border-radius: 50%; cursor: pointer; outline: none; color: <?php echo $colortheme; ?>; text-align: center; font-size: 16px; padding: 10px; font-weight: bold; content: "i"; transition: 0.5s;}
.detailing-form-note-checkbox:checked::before,
.detailing-form-note-checkbox::-ms-check:checked::before {content: "x"; font-weight: normal; transition: 0.5s;}
.detailing-form-note-checkbox:checked:hover::before,
.detailing-form-note-checkbox:hover::before,
.detailing-form-note-checkbox::-ms-check:checked:hover::before,
.detailing-form-note-checkbox::-ms-check:hover::before {background-color: <?php echo $colortheme; ?>; color: white; transition: 0.5s;}
.detailing-form-note-checkbox:checked ~ .detailing-form-note-p,
.detailing-form-note-checkbox::-ms-check:checked ~ .detailing-form-note-p {display: block;}
.detailing-button {font-size: 16px; padding: 10px; border: 1px solid white; border-radius: 20px; cursor: pointer; background-color: #eee;}
.detailing-button[name="colortheme"] {display: inline-block; margin: 0 5px;}
.detailing-button:hover {outline: none; background-color: #ddd;}
.detailing-button-cleaning {position: fixed; bottom: 10px; left: 10px; }
.detailing-button-cleaning:hover {background-color: red; color: white;}
.colortheme {display: block; width: 1000px; margin: 0 0px; padding: 10px 0; position: fixed; z-index: 100; background: rgba(255, 255, 255, 0.8); text-align: center;}
.hidden {display: none;}
.test {display: none; color: #399; font-family: 'Courier New', monospace; font-size: 12px;}
@media screen and (max-width:1000px) {
	body {width: 100%;}
	.colortheme {width: 100%;}
	.detailing-form-input-label {width: 150px; height: 150px;}
	.detailing-form-input-image {width: 150px; height: 150px;}
}
@media print {
	.detailing-form {page-break-after: always;}
	.colortheme {display:none;}
	.detailing-form-button[type="submit"] {display:none;}
}
</style>
</head>
<body>
<?php
// сброс сессии
$unsess = $_POST["unsess"];
if (!empty($unsess)) {
	session_unset();
}
?>
<form class="detailing-form colortheme">
	<button name="colortheme" value="LimeGreen" type="submit" formaction="" formmethod="post" class="detailing-button" style="background-color: LimeGreen;"></button>
	<button name="colortheme" value="LightSlateGray" type="submit" formaction="" formmethod="post" class="detailing-button" style="background-color: LightSlateGray;"></button>
	<button name="colortheme" value="DarkTurquoise" type="submit" formaction="" formmethod="post" class="detailing-button" style="background-color: DarkTurquoise;"></button>
	<button name="colortheme" value="BlueViolet" type="submit" formaction="" formmethod="post" class="detailing-button" style="background-color: BlueViolet;"></button>
	<button name="colortheme" value="Fuchsia" type="submit" formaction="" formmethod="post" class="detailing-button" style="background-color: Fuchsia;"></button>
	<button name="colortheme" value="Crimson" type="submit" formaction="" formmethod="post" class="detailing-button" style="background-color: Crimson;"></button>
	<button name="colortheme" value="Tomato" type="submit" formaction="" formmethod="post" class="detailing-button" style="background-color: Tomato;"></button>
	<button name="colortheme" value="Gold" type="submit" formaction="" formmethod="post" class="detailing-button" style="background-color: Gold;"></button>
	<button name="colortheme" value="Wheat" type="submit" formaction="" formmethod="post" class="detailing-button" style="background-color: Wheat;"></button>
</form>
<h1>Деталировка v1.0 (beta)</h1>
<!-- <p class="detailing-p">Text <span class="detailing-p-span">span</span>, <a href="#nogo" class="detailing-p-link">link</a>.</p> -->
<p class="detailing-p">Добро пожаловать в программу автоматического расчёта деталировки корпусной мебели. С её помощью Вы сможете быстро, легко и точно рассчитать всё необходимое для самостоятельного заказа распила и сборки кухни. В дальнейшем будут добавлены расчёты шкафа-купе и другой домашней мебели.</p>
<h2>Что умеет программа деталировки?</h2>
<p class="detailing-p">В текущей версии программы можно рассчитать деталировку кухни с линейным, параллельным, или островным расположением модулей, с фасадами на петлях и выдвижными ящиками на шариковых направляющих.</p>
<h2>Что ещё программа деталировки будет уметь?</h2>
<p class="detailing-p">Ведётся работа над алгоритмами расчёта и других вариантов расположения кухонных модулей (угловое, П- и G-образное). Будет добавлена возможность выбора других видов направляющих и прочей фурнитуры от Blum, Hettich, GTV, Boyard, Rejs.</p>
<p class="detailing-p">Возможно, будут добавлены каталоги цветов производителей листовых материалов (Egger, Krono и других), чтобы можно было получить визуальное представление о том, как будет выглядеть проектируемая мебель.</p>
<p class="detailing-p">Планируется дополнить эту программу расчётом карты распила и присадки (сверловки) элементов мебели.</p>
<p class="detailing-p">Ну и, конечно же, будут добавлены алгоритмы расчёта шкафа-купе и другой корпусной мебели.</p>
<h2>Работа с программой</h2>
<p class="detailing-p">Чтобы программа рассчитала деталировку необходимой Вам мебели, Вам нужно пошагово ответить на некоторое количество вопросов. На основании Ваших ответов, программа выдаст результат.</p>
<p class="detailing-p">Варианты ответов, отмеченные Вами, будут <u>подчёркнуты</u>.</p>
<p class="detailing-p">Варианты ответов, находящиеся в стадии разработки и тестирования, отмечены серым цветом и пока не доступны для выбора.</p>
<p class="detailing-p">Если Вы нажали "Применить", а следующий блок не загрузился, - значит не был выбран никакой вариант. Повторите действие.</p>
<p class="detailing-p">Итак, смелее! Поехали!</p>

<?php
if (!empty($_POST["MBLvid000"])) {$_SESSION["MBLvid000"] = $_POST["MBLvid000"];} // записываем в сессию
echo '<p class="test">$_SESSION["MBLvid000"] == <span>'.$_SESSION["MBLvid000"].'</span></p>'."\n";
?>
<form class="detailing-form">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">Здесь, как и в дальнейшем, всё просто и интуитивно понятно: выбираем нужный вариант и жмём "Применить". Программа обработает отправленные Вами данные, и, на их основании, предложит следующий шаг... и так далее по цепочке.</p>
		</div>
		<legend class="detailing-form-fieldset-legend">Вид мебели</legend>
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
		require 'MODrsp000.php';
		break;
	/*case "стол":
		require '';
		break;*/
	/*case "шкаф-купе":
		require '';
		break;*/
}
?>
<?php echo "\n"; ?>
<form class="detailing-form">
	<button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="detailing-button detailing-button-cleaning"></button>
</form>

</body>
</html>