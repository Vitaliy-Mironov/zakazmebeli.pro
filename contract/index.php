<?php require $_SERVER['DOCUMENT_ROOT'].'/head.php'; ?>

<title>Договор на изготовление мебели на сайте ZakazMebeli.pro</title>
<meta name="description" content="Ознакомительный образец договора на изготовление корпусной мебели, заключаемого между исполнителем (ИП Миронов В. А.) и заказчиком." />
<meta name="keywords" content="договор, мебель" />

<?php require $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>

<?php
date_default_timezone_set("Europe/Minsk");
// день заключения договора
if (!empty($_POST["contractday"])) {$_SESSION["contractday"] = $_POST["contractday"]; $contractday = $_SESSION["contractday"];} else {$contractday = date("d");}
// месяц заключения договора
if (!empty($_POST["contractmonth"])) {$_SESSION["contractmonth"] = $_POST["contractmonth"]; $contractmonth = $_SESSION["contractmonth"];} else {$contractmonth = date("m");}
switch ($contractmonth) {
	case "1":
	$contractmonthword = "Января";
	break;
	case "2":
	$contractmonthword = "Февраля";
	break;
	case "3":
	$contractmonthword = "Марта";
	break;
	case "4":
	$contractmonthword = "Апреля";
	break;
	case "5":
	$contractmonthword = "Мая";
	break;
	case "6":
	$contractmonthword = "Июня";
	break;
	case "7":
	$contractmonthword = "Июля";
	break;
	case "8":
	$contractmonthword = "Августа";
	break;
	case "9":
	$contractmonthword = "Сентября";
	break;
	case "10":
	$contractmonthword = "Октября";
	break;
	case "11":
	$contractmonthword = "Ноября";
	break;
	case "12":
	$contractmonthword = "Декабря";
	break;
}
// год заключения договора
if (!empty($_POST["contractyear"])) {$_SESSION["contractyear"] = $_POST["contractyear"]; $contractyear = $_SESSION["contractyear"];} else {$contractyear = date("y");}
// фамилия
if (!empty($_POST["zakfam"])) {$_SESSION["zakfam"] = $_POST["zakfam"]; $zakfam = $_SESSION["zakfam"];} else {$zakfam = "_ _ _ _ _ _ _ _ _ _ _ _";}
// имя
if (!empty($_POST["zakima"])) {$_SESSION["zakima"] = $_POST["zakima"]; $zakima = $_SESSION["zakima"];} else {$zakima = "_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _";}
// отчество
if (!empty($_POST["zakot4"])) {$_SESSION["zakot4"] = $_POST["zakot4"]; $zakot4 = $_SESSION["zakot4"];} else {$zakot4 = "_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _";}
// телефон
if (!empty($_POST["zaktel"])) {$_SESSION["zaktel"] = $_POST["zaktel"]; $zaktel = $_SESSION["zaktel"];} else {$zaktel = "_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _";}
// e-mail
if (!empty($_POST["zakeml"])) {$_SESSION["zakeml"] = $_POST["zakeml"]; $zakeml = $_SESSION["zakeml"];} else {$zakeml = " ";}
// 1-я строка адреса (страна)
if (!empty($_POST["zakad1"])) {$_SESSION["zakad1"] = $_POST["zakad1"]; $zakad1 = $_SESSION["zakad1"];} else {$zakad1 = "_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _";}
// 2-я строка адреса (область, город)
if (!empty($_POST["zakad2"])) {$_SESSION["zakad2"] = $_POST["zakad2"]; $zakad2 = $_SESSION["zakad2"];} else {$zakad2 = "_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _";}
// 3-я строка адреса (улица, дом)
if (!empty($_POST["zakad3"])) {$_SESSION["zakad3"] = $_POST["zakad3"]; $zakad3 = $_SESSION["zakad3"];} else {$zakad3 = "_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _";}
// серия и номер паспорта
if (!empty($_POST["zakpas"])) {$_SESSION["zakpas"] = $_POST["zakpas"]; $zakpas = $_SESSION["zakpas"];} else {$zakpas = "_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _";}
// дата выдачи паспорта
if (!empty($_POST["zakpad"])) {$_SESSION["zakpad"] = $_POST["zakpad"]; $zakpad = $_SESSION["zakpad"];} else {$zakpad = "_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _";}
// кем выдан паспорт
if (!empty($_POST["zakpa1"])) {$_SESSION["zakpa1"] = $_POST["zakpa1"]; $zakpa1 = $_SESSION["zakpa1"];} else {$zakpa1 = "_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _";}
// кем выдан паспорт (2-я строка)
if (!empty($_POST["zakpa2"])) {$_SESSION["zakpa2"] = $_POST["zakpa2"]; $zakpa2 = $_SESSION["zakpa2"];} else {$zakpa2 = "_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _";}
// сумма заказа
if (!empty($_POST["zaksum"])) {$_SESSION["zaksum"] = $_POST["zaksum"]; $zaksum = $_SESSION["zaksum"];} else {$zaksum = "_ _ _ _";}
// % предоплаты
if (!empty($_POST["zakpop"])) {$_SESSION["zakpop"] = $_POST["zakpop"]; $zakpop = $_SESSION["zakpop"];} else {$zakpop = "_ _ _ _";}
// сумма предоплаты
if (empty($_POST["zakpos"]) && !empty($_POST["zakpop"])) {
	$zakpos = $zaksum / 100 * $zakpop;
	$zakpos = round($zakpos, 0);
}
elseif (!empty($_POST["zakpos"])) {
	$_SESSION["zakpos"] = $_POST["zakpos"];
	$zakpos = $_SESSION["zakpos"];
}
else {
	$zakpos = "_ _ _ _";
}
// % постоплаты
if (!empty($_POST["zaklop"])) {$_SESSION["zaklop"] = $_POST["zaklop"]; $zaklop = $_SESSION["zaklop"];} else {$zaklop = "_ _ _ _";}
// сумма постоплаты
if (empty($_POST["zaklos"]) && !empty($_POST["zaklop"]) && empty($_POST["zakoop"])) {
	$zaklos = $zaksum - $zakpos;
	$zaklos = round($zaklos, 0);
}
elseif (empty($_POST["zaklos"]) && !empty($_POST["zaklop"]) && !empty($_POST["zakoop"])) {
	$zaklos = $zaksum / 100 * $zaklop;
	$zaklos = round($zaklos, 0);
}
elseif (!empty($_POST["zaklos"])) {
	$_SESSION["zaklos"] = $_POST["zaklos"];
	$zaklos = $_SESSION["zaklos"];
}
else {
	$zaklos = "_ _ _ _";
}
// % отсрочки
if (!empty($_POST["zakoop"])) {$_SESSION["zakoop"] = $_POST["zakoop"]; $zakoop = $_SESSION["zakoop"];} else {$zakoop = "_ _ _ _";}
// сумма отсрочки
if (empty($_POST["zakoos"]) && empty($_POST["zaklop"]) && !empty($_POST["zakoop"])) {
	$zakoos = $zaksum - $zakpos;
	$zakoos = round($zakoos, 0);
}
elseif (empty($_POST["zakoos"]) && !empty($_POST["zaklop"]) && !empty($_POST["zakoop"])) {
	$zakoos = $zaksum - $zakpos - $zaklos;
	$zakoos = round($zakoos, 0);
}
elseif (!empty($_POST["zakoos"])) {
	$_SESSION["zakoos"] = $_POST["zakoos"];
	$zakoos = $_SESSION["zakoos"];
}
else {
	$zakoos = "_ _ _ _";
}
// дни отсрочки
if (!empty($_POST["zakood"])) {$_SESSION["zakood"] = $_POST["zakood"]; $zakood = $_SESSION["zakood"];} else {$zakood = "_ _ _ _";}

// выводим суммы и числа прописью, когда они указаны
// сумма заказа
if (is_numeric($zaksum) === true) {$zaksumword = number2string($zaksum); if (substr($zaksumword, -1) == ' ') {$zaksumword = substr($zaksumword, 0, -1);}} else {$zaksumword = '_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _';}
// % предоплаты
if (is_numeric($zakpop) === true) {$zakpopword = number2string($zakpop); if (substr($zakpopword, -1) == ' ') {$zakpopword = substr($zakpopword, 0, -1);}} else {$zakpopword = '_ _ _ _ _ _ _ _ _ _ _ _';}
// сумма предоплаты
if (is_numeric($zakpos) === true) {$zakposword = number2string($zakpos); if (substr($zakposword, -1) == ' ') {$zakposword = substr($zakposword, 0, -1);}} else {$zakposword = '_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _';}
// % постоплаты
if (is_numeric($zaklop) === true) {$zaklopword = number2string($zaklop); if (substr($zaklopword, -1) == ' ') {$zaklopword = substr($zaklopword, 0, -1);}} else {$zaklopword = '_ _ _ _ _ _ _ _ _ _ _ _';}
// сумма постоплаты
if (is_numeric($zaklos) === true) {$zaklosword = number2string($zaklos); if (substr($zaklosword, -1) == ' ') {$zaklosword = substr($zaklosword, 0, -1);}} else {$zaklosword = '_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _';}
// % отсрочки
if (is_numeric($zakoop) === true) {$zakoopword = number2string($zakoop); if (substr($zakoopword, -1) == ' ') {$zakoopword = substr($zakoopword, 0, -1);}} else {$zakoopword = '_ _ _ _ _ _ _ _ _ _ _ _';}
// сумма отсрочки
if (is_numeric($zakoos) === true) {$zakoosword = number2string($zakoos); if (substr($zakoosword, -1) == ' ') {$zakoosword = substr($zakoosword, 0, -1);}} else {$zakoosword = '_ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _ _';}

// если 100% предоплата (или банковская рассрочка)
if ($_SESSION["zakpop"] == "100") {
	$abzac = '<p>4.4.1. 100% предоплата.</p>';
}
// если предоплата и постоплата
elseif ($_SESSION["zakpop"] < "100" && $zakoop == "_ _ _ _") {
	$abzac = '<p>4.4.1. Предоплата '.$zakpop.'('.$zakpopword.')% от общей суммы заказа, указанной в п. 4.1. Договора, в размере '.$zakpos.' ('.$zakposword.') рублей.</p>
<p>4.4.2. Оплата оставшейся части '.$zaklop.'('.$zaklopword.')% от общей суммы заказа, указанной в пункте 4.1. Договора, в размере '.$zaklos.' ('.$zaklosword.') рублей, при подписании Акта сдачи-приёмки выполненных работ.</p>';
}
// если предоплата и отсрочка
elseif ($_SESSION["zakpop"] < "100" && $zaklop == "_ _ _ _" && $zakoop > "0") {
	$abzac = '<p>4.4.1. Предоплата '.$zakpop.'('.$zakpopword.')% от общей суммы заказа, указанной в п. 4.1. Договора, в размере '.$zakpos.' ('.$zakposword.') рублей.</p>
<p>4.4.2. Оплата оставшейся части '.$zakoop.'('.$zakoopword.')% от общей суммы заказа, указанной в пункте 4.1. Договора, в размере '.$zakoos.' ('.$zakoosword.') рублей, в течение '.$zakood.' календарных дней с даты подписания Акта сдачи-приёмки выполненных работ.</p>';
}
// если предоплата, постоплата и отсрочка
elseif ($_SESSION["zakpop"] < "100" && $zaklop > "0" && $zakoop > "0") {
	$abzac = '<p>4.4.1. Предоплата '.$zakpop.'('.$zakpopword.')% от общей суммы заказа, указанной в п. 4.1. Договора, в размере '.$zakpos.' ('.$zakposword.') рублей.</p>
<p>4.4.2. Оплата второй части '.$zaklop.'('.$zaklopword.')% от общей суммы заказа, указанной в пункте 4.1. Договора, в размере '.$zaklos.' ('.$zaklosword.') рублей, при подписании Акта сдачи-приёмки выполненных работ.</p>
<p>4.4.3. Оплата оставшейся части '.$zakoop.'('.$zakoopword.')% от общей суммы заказа, указанной в пункте 4.1. Договора, в размере '.$zakoos.' ('.$zakoosword.') рублей, в течение '.$zakood.' календарных дней с даты подписания Акта сдачи-приёмки выполненных работ.</p>';
}
// текст по умолчанию
else {
	$abzac = '<p>4.4.1. Предоплата '.$zakpop.'('.$zakpopword.')% от общей суммы заказа, указанной в п. 4.1. Договора, в размере '.$zakpos.' ('.$zakposword.') рублей.</p>
<p>4.4.2. Оплата оставшейся части '.$zaklop.'('.$zaklopword.')% от общей суммы заказа, указанной в пункте 4.1. Договора, в размере '.$zaklos.' ('.$zaklosword.') рублей, при подписании Акта сдачи-приёмки выполненных работ.</p>';
}
// вид мебели в спецификации
if (!empty($_POST["specvidmebeli"])) {$_SESSION["specvidmebeli"] = $_POST["specvidmebeli"];}
if (!empty($_SESSION["specvidmebeli"])) {$specvidmebeli = $_SESSION["specvidmebeli"];}
// Расположение мебели в спецификации
if (!empty($_POST["specraspmebeli"])) {$_SESSION["specraspmebeli"] = $_POST["specraspmebeli"];}
if (!empty($_SESSION["specraspmebeli"])) {$specraspmebeli = $_SESSION["specraspmebeli"];}
// Материалы корпусов мебели в спецификации
if (!empty($_POST["speckorpmebeli"])) {$_SESSION["speckorpmebeli"] = $_POST["speckorpmebeli"];}
if (!empty($_SESSION["speckorpmebeli"])) {$speckorpmebeli = $_SESSION["speckorpmebeli"];}
// Материалы фасадов мебели в спецификации
if (!empty($_POST["specfasmebeli"])) {$_SESSION["specfasmebeli"] = $_POST["specfasmebeli"];}
if (!empty($_SESSION["specfasmebeli"])) {$specfasmebeli = $_SESSION["specfasmebeli"];}
// Материалы столешниц мебели в спецификации
if (!empty($_POST["specstolmebeli"])) {$_SESSION["specstolmebeli"] = $_POST["specstolmebeli"];}
if (!empty($_SESSION["specstolmebeli"])) {$specstolmebeli = $_SESSION["specstolmebeli"];}
// Материалы кромки мебели в спецификации
if (!empty($_POST["speckrommebeli"])) {$_SESSION["speckrommebeli"] = $_POST["speckrommebeli"];}
if (!empty($_SESSION["speckrommebeli"])) {$speckrommebeli = $_SESSION["speckrommebeli"];}
// Соединение деталей мебели в спецификации
if (!empty($_POST["specsoedmebeli"])) {$_SESSION["specsoedmebeli"] = $_POST["specsoedmebeli"];}
if (!empty($_SESSION["specsoedmebeli"])) {$specsoedmebeli = $_SESSION["specsoedmebeli"];}
// Петли мебели в спецификации
if (!empty($_POST["specpetlimebeli"])) {$_SESSION["specpetlimebeli"] = $_POST["specpetlimebeli"];}
if (!empty($_SESSION["specpetlimebeli"])) {$specpetlimebeli = $_SESSION["specpetlimebeli"];}
// Направляющие мебели в спецификации
if (!empty($_POST["specnaprmebeli"])) {$_SESSION["specnaprmebeli"] = $_POST["specnaprmebeli"];}
if (!empty($_SESSION["specnaprmebeli"])) {$specnaprmebeli = $_SESSION["specnaprmebeli"];}
// изображение мебели в спецификации
if (!empty($_POST["imagename"])) {$_SESSION["imagename"] = $_POST["imagename"];}
if ($_SESSION["imagename"] == 'yes') {
	$imagename = $contractyear.$contractmonth.$contractday;
} else {
	$imagename = 'clear_image';
}

// скрываем реквизиты в десктоп- демо-версии договора
if (is_numeric($zaksum) !== true) {$onlyprint = ' onlyprint';}
// отображаем кнопку печати для заполненного документа
if (is_numeric($zaksum) === true) {
	$printbutton = '<hr class="line noprint" />
	<div class="button-container noprint">
	<a href="javascript:(print());" class="icon-print" ></a>
</div>';
}
?>

<?php
function number2string($number) {
	
	// обозначаем словарь в виде статической переменной функции, чтобы 
	// при повторном использовании функции его не определять заново
	static $dic = array(
	
		// словарь необходимых чисел
		array(
			-2	=> 'две',
			-1	=> 'одна',
			1	=> 'один',
			2	=> 'два',
			3	=> 'три',
			4	=> 'четыре',
			5	=> 'пять',
			6	=> 'шесть',
			7	=> 'семь',
			8	=> 'восемь',
			9	=> 'девять',
			10	=> 'десять',
			11	=> 'одиннадцать',
			12	=> 'двенадцать',
			13	=> 'тринадцать',
			14	=> 'четырнадцать' ,
			15	=> 'пятнадцать',
			16	=> 'шестнадцать',
			17	=> 'семнадцать',
			18	=> 'восемнадцать',
			19	=> 'девятнадцать',
			20	=> 'двадцать',
			30	=> 'тридцать',
			40	=> 'сорок',
			50	=> 'пятьдесят',
			60	=> 'шестьдесят',
			70	=> 'семьдесят',
			80	=> 'восемьдесят',
			90	=> 'девяносто',
			100	=> 'сто',
			200	=> 'двести',
			300	=> 'триста',
			400	=> 'четыреста',
			500	=> 'пятьсот',
			600	=> 'шестьсот',
			700	=> 'семьсот',
			800	=> 'восемьсот',
			900	=> 'девятьсот'
		),
		
		// словарь порядков со склонениями для плюрализации
		array(
			array('', '', ''), // убрано 'рубль', 'рубля', 'рублей', чтобы не дублировалось в скобках
			array('тысяча', 'тысячи', 'тысяч'),
			array('миллион', 'миллиона', 'миллионов'),
			array('миллиард', 'миллиарда', 'миллиардов'),
			array('триллион', 'триллиона', 'триллионов'),
			array('квадриллион', 'квадриллиона', 'квадриллионов'),
			// квинтиллион, секстиллион и т.д.
		),
		
		// карта плюрализации
		array(
			2, 0, 1, 1, 1, 2
		)
	);
	
	// обозначаем переменную в которую будем писать сгенерированный текст
	$string = array();
	
	// дополняем число нулями слева до количества цифр кратного трем,
	// например 1234, преобразуется в 001234
	$number = str_pad($number, ceil(strlen($number)/3)*3, 0, STR_PAD_LEFT);
	
	// разбиваем число на части из 3 цифр (порядки) и инвертируем порядок частей,
	// т.к. мы не знаем максимальный порядок числа и будем бежать снизу
	// единицы, тысячи, миллионы и т.д.
	$parts = array_reverse(str_split($number,3));
	
	// бежим по каждой части
	foreach($parts as $i=>$part) {
		
		// если часть не равна нулю, нам надо преобразовать ее в текст
		if($part>0) {
			
			// обозначаем переменную в которую будем писать составные числа для текущей части
			$digits = array();
			
			// если число трехзначное, запоминаем количество сотен
			if($part>99) {
				$digits[] = floor($part/100)*100;
			}
			
			// если последние 2 цифры не равны нулю, продолжаем искать составные числа
			if($mod1=$part%100) {
				$mod2 = $part%10;
				$flag = $i==1 && $mod1!=11 && $mod1!=12 && $mod2<3 ? -1 : 1;
				if($mod1<20 || !$mod2) {
					$digits[] = $flag*$mod1;
				} else {
					$digits[] = floor($mod1/10)*10;
					$digits[] = $flag*$mod2;
				}
			}
			
			// берем последнее составное число, для плюрализации
			$last = abs(end($digits));
			
			// преобразуем все составные числа в слова
			foreach($digits as $j=>$digit) {
				$digits[$j] = $dic[0][$digit];
			}
			
			// добавляем обозначение порядка или валюту
			$digits[] = $dic[1][$i][(($last%=100)>4 && $last<20) ? 2 : $dic[2][min($last%10,5)]];
			
			// объединяем составные числа в единый текст и добавляем в переменную, которую вернет функция
			array_unshift($string, join(' ', $digits));
		}
	}
	
	// преобразуем переменную в текст и возвращаем из функции, ура!
	return join(' ', $string);
}
// echo number2string(число);
?>
<?php
if (is_numeric($zaksum) === true) {
	$zakals = $zakpos + $zaklos + $zakoos;
	$zakalp = $zakpop + $zaklop + $zakoop;
	if ($zakals != $zaksum && $zakalp == 100) {
		$errorcalc = '<p class="red icon-attention">Ошибка в расчёте сумм!</p>';
	}
	elseif ($zakals == $zaksum && $zakalp != 100) {
		$errorcalc = '<p class="red icon-attention">Ошибка в расчёте процентов!</p>';
	}
	elseif ($zakals != $zaksum && $zakalp != 100) {
		$errorcalc = '<p class="red icon-attention">Ошибка в расчёте процентов и сумм!</p>';
	}
}
?>
<h1 class="center">Договор на изготовление мебели №<?php echo $contractyear.$contractmonth.$contractday; ?></h1>

<p class="floatright">«<?php echo $contractday; ?>» <?php echo $contractmonthword; ?> 20<?php echo $contractyear; ?>г.</p>
<p>г. Борисов</p>

<p>Индивидуальный предприниматель Миронов Виталий Александрович, действующий на основании Свидетельства о государственной регистрации № 692134049 от 11 сентября 2019 года, именуемый в дальнейшем «Исполнитель», с одной стороны, и гр-н(ка) <?php echo $zakfam.' '.$zakima.' '.$zakot4; ?>, проживающий(ая) по адресу: <?php echo $zakad1.' '.$zakad2.' '.$zakad3; ?>, именуемый(ая) в дальнейшем «Заказчик», совместно именуемые «Стороны», заключили настоящий договор (далее – Договор) о нижеследующем:</p>

<h2 class="center"><span class="theme">1.</span> Предмет Договора</h2>

<p>1.1. По Договору Исполнитель обязуется изготовить и установить по указанному Заказчиком адресу, а Заказчик принять и оплатить мебель, изготовленную в соответствии со спецификацией, приведённой в Приложении №1 к Договору.</p>

<h2 class="center"><span class="theme">2.</span> Права и обязанности сторон</h2>

<p>2.1. Обязанности Исполнителя:</p>
<p>2.1.1. Выполнить работу и передать её результат Заказчику в обусловленные Договором сроки.</p>
<p>2.1.2. Посредством телефонной или электронной связи (SMS, Viber, E-mail) уведомить Заказчика о готовности мебели и согласовать время установки мебели.</p>
<p>2.2. Обязанности Заказчика:</p>
<p>2.2.1. Оплатить изготовление заказанной им мебели, в соответствии с пунктом 4.4. Договора.</p>
<p>2.2.2. Принять участие в приёмке изготовленной по его заказу мебели и получить её от Исполнителя не позднее трёх календарных дней с момента срока, указанного в пункте 3.2. Договора.</p>
<p>2.3. Исполнитель вправе:</p>
<p>2.3.1. Выполнить обусловленные Договором работы досрочно.</p>
<p>2.3.2. Посредством электронной связи (Viber, E-mail) предоставлять Заказчику фотоотчёт по процессу работ.</p>
<p>2.3.3. Привлекать к оказанию услуг третьих лиц.</p>
<p>2.4. Заказчик вправе:</p>
<p>2.4.1. Контролировать соблюдение сроков и качества работ, не вмешиваясь в деятельность Исполнителя.</p>

<h2 class="center"><span class="theme">3.</span> Порядок и сроки выполнения работ</h2>

<p>3.1. Начало выполнения работ: в течение 1 (одного) рабочего дня с момента осуществления предварительной оплаты, согласно подпункту 4.4.1. пункта 4.1. Договора.</p>
<p>3.2. Окончание выполнения работ: не позднее 30 (тридцати) календарных дней с момента начала выполнения работ, согласно пункту 3.1. Договора.</p>
<p>3.3. Приёмка окончательного результата работы оформляется Актом сдачи-приёмки выполненных работ, подписанным сторонами Договора.</p>

<h2 class="center"><span class="theme">4.</span> Цена и порядок оплаты работ</h2>
<p>4.1. Общая сумма заказа по Договору составляет <?php echo $zaksum; ?> (<?php echo $zaksumword; ?>) рублей.</p> 
<p>4.2. Общая сумма заказа не подлежит изменению в течение срока действия Договора, кроме случаев, определённых взаимным соглашением Сторон и оформленных в виде приложения к Договору.</p>
<p>4.3. Оплата всех платежей по Договору производится в белорусских рублях.</p>
<p>4.4. Порядок оплаты:</p>
<?php echo $abzac; ?>
<?php echo $errorcalc; ?>
<h2 class="center"><span class="theme">5.</span> Гарантийные обязательства</h2>

<p>5.1. Гарантийные обязательства вступают в силу после завершения работ по Договору с момента подписания Акта сдачи-приемки выполненных работ, при условии соблюдения правил эксплуатации и ухода за корпусной мебелью, размещённых на сайте Исполнителя по адресу <a href="/regulation/" class="detailing-p-link"><?php echo $_SERVER['HTTP_HOST']; ?>/regulation/</a>.</p>
<p>5.2. Гарантийный срок эксплуатации детской мебели – 18 (восемнадцать), а прочей бытовой мебели – 24 (двадцать четыре) месяца с момента подписания Акта сдачи-приемки выполненных работ. По истечении гарантийного срока претензии по качеству оказанных услуг не подлежат рассмотрению.</p>
<p>5.3. Претензии по существенным недостаткам изготовленной Исполнителем мебели могут быть предъявлены Заказчиком в течение гарантийного срока, в письменной форме с проставлением даты.</p>
<p>5.4. Исполнитель обязан, в течение 30 (тридцати) календарных дней с момента получения письменной претензии от Заказчика, своими силами и из своих материалов устранить обнаруженные недостатки мебели.</p>
<p>5.5. Гарантия не распространяется:<br />
— на мебель, используемую не по назначению;<br />
— на мебель, используемую в коммерческих целях;<br />
— на мебель, используемую с нарушением правил эксплуатации и ухода;<br />
— на мебель, собранную и установленную самостоятельно;<br />
— на механические повреждения частей мебели и покрытий, возникшие в ходе её эксплуатации.<br />
Регулировка петель в гарантийное обслуживание не входит.</p>

<h2 class="center"><span class="theme">6.</span> Исключительные права</h2>

<p>6.1. Право собственности на мебель, являющуюся предметом Договора, переходит к Заказчику только после её полной оплаты, за исключением случая, указанного в п. 8.2.</p>
<p>6.2. Исполнитель оставляет за собой право использовать в рекламных целях изображения изготовленной по Договору мебели и видеозапись процесса её сборки и установки, без указания конфиденциальной информации Заказчика (ФИО, адрес, стоимость мебели).</p>

<h2 class="center"><span class="theme">7.</span> Ответственность сторон</h2>

<p>7.1. За неисполнение и (или) ненадлежащее исполнение предусмотренных Договором обязательств, стороны несут ответственность в соответствии с действующим законодательством Республики Беларусь. Максимальный размер ответственности Исполнителя ограничивается суммой денежных средств, полученной Исполнителем от Заказчика в качестве оплаты по Договору.</p>
<p>7.2. Риск повреждения или утраты мебели, являющейся предметом Договора, с момента её получения, несёт Заказчик.</p>
<p>7.3. Риски, указанные в п. 7.2. Договора, в процессе изготовления мебели и до момента её передачи Заказчику, несёт Исполнитель.</p>
<p>7.4. Стороны освобождаются от ответственности за частичное или полное неисполнение обязательств по Договору, если неисполнение явилось следствием обстоятельств непреодолимой силы, возникших после заключения Договора в результате событий чрезвычайного характера. К обстоятельствам непреодолимой силы относятся события, на которые Сторона не может оказать влияние и за возникновение которых не несёт ответственности (эпидемии, наводнения, пожары, иные стихийные бедствия). К обстоятельствам, освобождающим Сторону от ответственности, относятся также забастовки, правительственные постановления или распоряжения государственных органов, которые делают невозможным или значительно затрудняют исполнение сторонами своих обязанностей. Сторона, подвергшаяся действию таких обстоятельств, обязана незамедлительно в письменном виде, либо посредством электронной связи (Viber, E-mail), уведомить другую сторону о возникновении, виде и возможной продолжительности действия соответствующих обстоятельств. Если обстоятельства непреодолимой силы действуют на протяжении 3 (трех) последовательных месяцев и не обнаруживают признаков прекращения, Договор, может быть, расторгнут Исполнителем и Заказчиком путем направления письменного уведомления другой Стороне.</p>

<h2 class="center"><span class="theme">8.</span> Прочие условия</h2>

<p>8.1. Договор вступает в силу со дня его подписания Сторонами и действует до окончания гарантийного срока, указанного в п. 5.2.</p>
<p>8.2. Заказчик в любой момент действия Договора вправе отказаться от Договора. При этом ему возвращается только та часть предоплаты, которая на момент расторжения Договора ещё не была использована Исполнителем на закупку деталей, комплектующих и оплату услуг третьих лиц для изготовления мебели Заказчика по Договору. Заготовленные детали и приобретённые комплектующие остаются в собственность Исполнителю в качестве возмещения финансовых и временны&#x301;х затрат, и реализуются им по собственному усмотрению.</p>
<p>8.3. Исполнитель вправе отказаться от исполнения обязательств по Договору только при условии полного возмещения Заказчику убытков.</p>
<p>8.4. Во всём остальном, что не урегулировано Договором, стороны руководствуются действующим законодательством Республики Беларусь.</p>
<p>8.5. Договор составлен в двух экземплярах, по одному для каждой из Сторон.</p>

<h2 class="center"><span class="theme">9.</span> Адреса, реквизиты и подписи Сторон</h2>

<p class="floatleft<?php echo $onlyprint; ?>"><b>Заказчик:</b><br />
<?php echo $zakfam.' '.$zakima; ?><br />
<?php echo $zakot4; ?><br />
Почтовый адрес: <?php echo $zakad1; ?><br />
<?php echo $zakad2; ?><br />
<?php echo $zakad3; ?><br />
Паспорт: <?php echo $zakpas; ?><br />
Выдан: <?php echo $zakpad; ?><br />
<?php echo $zakpa1; ?><br />
<?php echo $zakpa2; ?><br />
Тел.: <?php echo $zaktel; ?><br />
E-mail: <?php echo $zakeml; ?><br />
&nbsp;<br />
__________________ /<?php echo $zakfam.' '.substr($zakima, 0, 2).'.'.substr($zakot4, 0, 2).'.'; ?>/</p>

<p class="floatright<?php echo $onlyprint; ?>"><b>Исполнитель:</b><br />
Индивидуальный предприниматель<br />
Миронов Виталий Александрович<br />
Юр. и почтовый адрес: 222516, Республика<br />
Беларусь, г. Борисов, ул. Петряева, д. 17.<br />
УНП 692134049<br />
Свидетельство № 692134049 от 11.09.2019 г.<br />
IBAN BY46 BPSB 3013 3117 4301 3933 0000<br />
BIC BPSBBY2X<br />
ЦБУ № 502 ОАО «БПС-Сбербанк» г. Борисов<br />
Тел., Viber: +375 (25) 929-82-33<br />
E-mail: mironov@zakazmebeli.pro<br />
&nbsp;<br />
__________________ /Миронов В.А./<br />
М.П.</p>

<div class="page-break onlyprint">
<h2 class="center">Приложение №1 к Договору на изготовление мебели №<?php echo $contractyear.$contractmonth.$contractday; ?> от «<?php echo $contractday; ?>» <?php echo $contractmonthword; ?> 20<?php echo $contractyear; ?>г.</h2>
<p>&nbsp;</p>
<h3 class="center">Спецификация корпусной мебели</h3>
<p>&nbsp;</p>
<h3 class="center"><span class="theme">1.</span>Основные параметры</h3>
<p>&nbsp;</p>
	<div class="table"><span class="table-1">1</span><span class="table-2">Вид мебели</span><span class="table-3"><?php echo $specvidmebeli; ?></span></div>
	<div class="table"><span class="table-1">2</span><span class="table-2">Расположение</span><span class="table-3"><?php echo $specraspmebeli; ?></span></div>
	<div class="table"><span class="table-1">3</span><span class="table-2">Материал корпусов</span><span class="table-3"><?php echo $speckorpmebeli; ?></span></div>
	<div class="table"><span class="table-1">4</span><span class="table-2">Материал фасадов</span><span class="table-3"><?php echo $specfasmebeli; ?></span></div>
	<div class="table"><span class="table-1">5</span><span class="table-2">Столешница</span><span class="table-3"><?php echo $specstolmebeli; ?></span></div>
	<div class="table"><span class="table-1">6</span><span class="table-2">Кромка</span><span class="table-3"><?php echo $speckrommebeli; ?></span></div>
	<div class="table"><span class="table-1">7</span><span class="table-2">Соединение деталей</span><span class="table-3"><?php echo $specsoedmebeli; ?></span></div>
	<div class="table"><span class="table-1">8</span><span class="table-2">Петли</span><span class="table-3"><?php echo $specpetlimebeli; ?></span></div>
	<div class="table"><span class="table-1">9</span><span class="table-2">Направляющие</span><span class="table-3"><?php echo $specnaprmebeli; ?></span></div>
<?php
	$line1 = 1;
	while ($line1 < 5) {
		echo '<div class="table"><span class="table-1"></span><span class="table-2"></span><span class="table-3"></span></div>'."\n";
		$line1++;
	}
?>
<p>&nbsp;</p>
<h3 class="center"><span class="theme">2.</span>Схематическое изображение</h3>
<img src="/contract/images/<?php echo $imagename; ?>.png" alt="Схематическое изображение мебели" class="dogovor-shema" />
<h3 class="center page-break"><span class="theme">3.</span>Наполнение</h3>
<p>&nbsp;</p>
<?php
	$line2 = 1;
	while ($line2 < 51) {
		echo '<div class="table"><span class="table-1"></span><span class="table-2"></span><span class="table-3"></span></div>'."\n";
		$line2++;
	}
?>
<p>&nbsp;</p>
<p class="floatleft"><b>Заказчик:</b><br />
__________________ /<?php echo $zakfam.' '.substr($zakima, 0, 2).'.'.substr($zakot4, 0, 2).'.'; ?>/</p>
<p class="floatright"><b>Исполнитель:</b><br />
__________________ /Миронов В.А./<br />
М.П.</p>
</div>

<div class="page-break onlyprint">

<h2 class="center">Акт сдачи-приёмки работ,<br />выполненных по договору №<?php echo $contractyear.$contractmonth.$contractday; ?> от «<?php echo $contractday; ?>» <?php echo $contractmonthword; ?> 20<?php echo $contractyear; ?>г.</h2>
<p>&nbsp;</p>
<p class="floatright">«___» ____________ 20___г.</p>
<p>&nbsp;</p>
<p>Мы, нижеподписавшиеся, «Исполнитель» ИП Миронов Виталий Александрович, с одной стороны, и «Заказчик» <?php echo $zakfam.' '.$zakima.' '.$zakot4; ?>, с другой стороны, составили настоящий Акт о том, что Исполнителем выполнена следующая работа:</p>
<p>&nbsp;</p>
<p>1. Изготовление мебели.</p>
<p>&nbsp;</p>
<p>Указанная работа выполнена надлежащим образом, в установленный срок и в соответствии с иными требованиями и заданиями Заказчика.</p>
<p>Общая стоимость выполненных работ, включая налоги, составила: <?php echo $zaksumword; ?> белорусских рублей.</p>
<p>&nbsp;</p>
<p class="floatleft"><b>Исполнитель:</b><br />
Индивидуальный предприниматель<br />
Миронов Виталий Александрович<br />
Юр. и почтовый адрес: 222516, Республика<br />
Беларусь, г. Борисов, ул. Петряева, д. 17.<br />
УНП 692134049<br />
Свидетельство № 692134049 от 11.09.2019 г.<br />
IBAN BY46 BPSB 3013 3117 4301 3933 0000<br />
BIC BPSBBY2X<br />
ЦБУ № 502 ОАО «БПС-Сбербанк» г. Борисов<br />
Тел., Viber: +375 (25) 929-82-33<br />
E-mail: mironov@zakazmebeli.pro<br />
&nbsp;<br />
__________________ /Миронов В.А./<br />
М.П.</p>
<p class="floatright"><b>Заказчик:</b><br />
<?php echo $zakfam.' '.$zakima; ?><br />
<?php echo $zakot4; ?><br />
Почтовый адрес: <?php echo $zakad1; ?><br />
<?php echo $zakad2; ?><br />
<?php echo $zakad3; ?><br />
Паспорт: <?php echo $zakpas; ?><br />
Выдан: <?php echo $zakpad; ?><br />
<?php echo $zakpa1; ?><br />
<?php echo $zakpa2; ?><br />
Тел.: <?php echo $zaktel; ?><br />
E-mail: <?php echo $zakeml; ?><br />
&nbsp;<br />
__________________ /<?php echo $zakfam.' '.substr($zakima, 0, 2).'.'.substr($zakot4, 0, 2).'.'; ?>/</p>

</div>

<?php echo $printbutton; ?>

<hr class="line noprint" />

<p class="noprint"><a href="/regulation/" class="detailing-p-link icon-doc">Правила эксплуатации и ухода за корпусной мебелью</a></p>

<hr class="line noprint" />

<h3 class="grey noprint">Примечание к тексту договора:</h3>

<p class="grey noprint">I. Для постоянных заказчиков возможно предоставление отсрочки второго платежа (подпункт 4.4.2) на срок до 30 календарных дней после даты подписания Акта сдачи-приёмки выполненных работ.</p>

<!-- <p class="grey noprint">II. При выборе способа оплаты посредством <a href="/instalments/" class="detailing-p-link">банковской рассрочки</a>, или кредита, в пункте 4.4.1. договора будет указано "100% предоплата", т.к. банк оформляет рассрочку (либо кредит) на всю сумму по договору и перечисляет её на расчётный счёт исполнителя (т.е. мне) до начала работ. Пункта 4.4.2, соответственно, в этом случае в договоре не будет.</p> -->

<?php require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>