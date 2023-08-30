<?php require $_SERVER['DOCUMENT_ROOT'].'/head_no.php'; ?>

<title>Деталировка корпусной мебели online на сайте ZakazMebeli.pro</title>
<meta name="description" content="Автоматический расчёт деталировки Вашей мебели. Просто вводите Ваши данные (габариты, форму, наполнение, фурнитуру и т.п.) и получаете на выходе полный расчёт всего необходимого со всеми размерами." />
<meta name="keywords" content="деталировка, расчет, рассчет, корпусная мебель, кухня" />

<meta property="og:image:height" content="261" />
<meta property="og:image:width" content="498" />
<meta property="og:url" content="https://zakazmebeli.pro/detailing/" />
<meta property="og:image" content="https://zakazmebeli.pro/detailing/images/og-image.jpg" />
<meta property="og:description" content="Автоматический расчёт деталировки мебели. Просто вводите ваши данные (габариты, форму, наполнение, фурнитуру...) и получаете на выходе полный расчёт всего необходимого со всеми размерами." />
<meta property="og:title" content="Деталировка корпусной мебели online" />

<?php require $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>

<h1>Программа автоматического расчёта деталей (деталировки) корпусной мебели</h1>
<p class="detailing-p">Добро пожаловать в программу автоматического расчёта деталировки корпусной мебели. С её помощью Вы сможете быстро, легко и точно рассчитать всё необходимое для заказа распила и сборки мебели по Вашему проекту.</p>
<?php
if ($browser !== "Chrome") {
	echo '<p class="detailing-p red icon-attention-1">Браузер, которым Вы сейчас пользуетесь, не поддерживает все функции, необходимые для корректной работы программы расчёта. Воспользуйтесь другим браузером, например последней версией <a href="http://www.google.ru/intl/ru/chrome/" class="detailing-p-link" target="_blank" rel="nofollow">Google Chrome</a>.</p>';
}
?>
<div class="more-block">
	<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
	<h2>Возможности программы деталировки</h2>
	<p class="detailing-p">В текущей версии программы можно рассчитать деталировку кухни, с фасадами на петлях и выдвижными ящиками на шариковых направляющих.</p>
	<p class="detailing-p logos">
		<a href="http://www.blum.com/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Blum_logo.webp" alt="Blum" class="logos-images" />
			<span class="at"><img src="/img/flags/100x100_at.webp" alt="флаг" /></span></a>
		<a href="http://www.hettich.com/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Hettich_logo.webp" alt="Hettich" class="logos-images" />
			<span class="de"><img src="/img/flags/100x100_de.webp" alt="флаг" /></span></a>
		<a href="http://www.gtv.com.pl/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/GTV_logo.webp" alt="GTV" class="logos-images" />
			<span class="pl"><img src="/img/flags/100x100_pl.webp" alt="флаг" /></span></a>
		<a href="http://www.boyard.biz/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Boyard_logo.webp" alt="Boyard" class="logos-images" />
			<span class="ru"><img src="/img/flags/100x100_ru.webp" alt="флаг" /></span></a>
		<a href="http://www.rejs.eu/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Rejs_logo.webp" alt="Rejs" class="logos-images" />
			<span class="pl"><img src="/img/flags/100x100_pl.webp" alt="флаг" /></span></a>
		<a href="http://www.camar.it/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Camar_logo.webp" alt="Camar" class="logos-images" />
			<span class="it"><img src="/img/flags/100x100_it.webp" alt="флаг" /></span></a>
		<a href="http://www.egger.com/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Egger_logo.webp" alt="Egger" class="logos-images" />
			<span class="at"><img src="/img/flags/100x100_at.webp" alt="флаг" /></span></a>
		<a href="http://kronospan-express.com/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Kronospan_logo.webp" alt="Kronospan" class="logos-images" />
			<span class="at"><img src="/img/flags/100x100_at.webp" alt="флаг" /></span></a>
		<a href="http://juan.pl/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Juan_logo.webp" alt="Juan" class="logos-images" />
			<span class="pl"><img src="/img/flags/100x100_pl.webp" alt="флаг" /></span></a>
	</p>
	<p class="detailing-p note">* Флаги, размещённые на логотипах производителей, отображают страну - родину бренда, и могут отличаться от страны производства продукции под этим брендом.</p>
	<h2>Что ещё программа деталировки будет уметь?</h2>
	<p class="detailing-p">Ведётся работа над алгоритмами расчёта использования и других видов направляющих и прочей фурнитуры от <a href="http://www.blum.com/" class="detailing-p-link" target="_blank" rel="nofollow">Blum</a>, <a href="http://www.hettich.com/" class="detailing-p-link" target="_blank" rel="nofollow">Hettich</a>, <a href="http://www.gtv.com.pl/" class="detailing-p-link" target="_blank" rel="nofollow">GTV</a>, <a href="http://www.boyard.biz/" class="detailing-p-link" target="_blank" rel="nofollow">Boyard</a>, <a href="http://www.rejs.eu/" class="detailing-p-link" target="_blank" rel="nofollow">Rejs</a>, <a href="http://www.camar.it/" class="detailing-p-link" target="_blank" rel="nofollow">Camar</a>.</p>
	<p class="detailing-p">Планируется добавление каталогов декоров производителей листовых материалов (<a href="http://www.egger.com/" class="detailing-p-link" target="_blank" rel="nofollow">Egger</a>, <a href="http://kronospan-express.com/" class="detailing-p-link" target="_blank" rel="nofollow">Kronospan</a>, <a href="http://juan.pl/" class="detailing-p-link" target="_blank" rel="nofollow">Juan</a> и других), чтобы можно было получить визуальное представление о том, как будет выглядеть проектируемая мебель. Сейчас "поиграть" с цветом можно, используя разноцветные кнопки, расположенные в верхней части экрана.</p>
	<p class="detailing-p">Планируется дополнить эту программу расчётом карты распила и присадки (сверловки) элементов мебели.</p>
	<p class="detailing-p">Ну и, конечно же, будут добавлены алгоритмы расчёта шкафа-купе и другой корпусной мебели.</p>
	<h2>Работа с программой</h2>
	<p class="detailing-p">Программа рассчитана на работу в интернет-браузере Google Chrome, или его аналогах.</p>
<?php
if ($browser == "Chrome") {
	echo '<p class="detailing-p icon-check green">Браузер, которым Вы сейчас пользуетесь, подходит.</p>';
}
?>
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
if ($_REQUEST["MBLvid000"] == "bathroom") {$b05 = " checked";} elseif ($_SESSION["MBLvid000"] == "bathroom") {$b05 = " checked";}
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
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MBLvid000" value="bathroom" type="radio" class="radio-button<?php echo $b05; ?>" disabled />
			<img src="/detailing/images/MBLvid000_5.png" alt="санузел" class="radio-image" />
			<span class="detailing-form-input-span">санузел</span>
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
	case "bathroom":
		echo '<p class="red">Next step</p>';
		break; */
}
?>

<?php require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>