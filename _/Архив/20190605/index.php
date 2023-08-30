<?php
require 'session_start.php';
require 'html_start.php';
require 'head_start.php';
?>
<title>ZakazMebeli.pro | Деталировка v1.0</title>
<meta name="description" content="Быстрый автоматический расчет деталировки мебели. Просто введите ваши данные (габариты, форму, наполнение, фурнитуру и т.п.) и получите на выходе полный расчет всего необходимого со всеми размерами." />
<?php
require 'css.php';
require 'head_end.php';
?>
<body>
<h1>Деталировка v1.0 (beta)</h1>
<p class="note2 topmenulink"><a href="#nogo">История версий</a></p>
<p class="note2 topmenutext">1.0 (beta):<br />
Базовый online-расчёт деталировки кухни. Линейное или островное расположение модулей, фасады на петлях, выдвижные ящики на шариковых направляющих.</p>
<p class="note2 topmenutext">В разработке:<br />
Добавление Г-образного и П-образного расположения модулей кухни, добавление других видов фурнитуры, карты раскроя, карты присадки. Добавление других видов мебели (шкафы-купе, столы...). Разработка более человекабельного интерфейса.</p>
<div class="my_form">
<h2>Ввод данных</h2>
<h3>Общие данные</h3>
	<form action="#output" autocomplete="on" method="post">
	<p>Вид мебели: <span class="note"><?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$MBLvid000 = $_REQUEST["MBLvid000"];
		if (!empty($MBLvid000)) {
			echo $MBLvid000;
		}
	}
	?></span><br />
	<select size="1" name="MBLvid000" type="text" class="select" required>
		<option value="кухня" selected>кухня</option>
		<option value="стол" disabled>стол</option>
		<option value="шкаф-купе" disabled>шкаф-купе</option>
	</select>
	</p>
	<p>Расположение модулей: <span class="note"><?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$MODrsp000 = $_REQUEST["MODrsp000"];
		if (!empty($MODrsp000)) {
			echo $MODrsp000;
		}
	}
	?></span><br />
	<select size="1" name="MODrsp000" type="text" class="select" required>
		<option value="линейное" selected>линейное</option>
		<option value="островное">островное</option>
		<option value="Г-образное" disabled>Г-образное</option>
		<option value="П-образное" disabled>П-образное</option>
	</select>
	</p>
<h3>Нижние модули</h3>
	<p>Глубина столешницы, мм: <span class="note"><?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$STLzzz000 = $_REQUEST["STLzzz000"];
		if (!empty($STLzzz000)) {
			echo $STLzzz000;
		}
	}
	?></span><br /><input name="STLzzz000" type="number" class="text" value="600" min="600" max="1200" required /></p>
	<p>Толщина столешницы, мм: <span class="note"><?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$STLtol000 = $_REQUEST["STLtol000"];
		if (!empty($STLtol000)) {
			echo $STLtol000;
		}
	}
	?></span><br /><input name="STLtol000" type="number" class="text" value="38" min="12" required /></p>
	<p>Передний свес столешницы, мм: <span class="note"><?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$STLsvs000 = $_REQUEST["STLsvs000"];
		if (!empty($STLsvs000)) {
			echo $STLsvs000;
		}
	}
	?></span><br /><input name="STLsvs000" type="number" class="text" value="20" min="0" required /></p>
	<p>Задний свес столешницы, мм: <span class="note"><?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$STLsvs001 = $_REQUEST["STLsvs001"];
		if (!empty($STLsvs001)) {
			echo $STLsvs001;
		}
	}
	?></span><br /><input name="STLsvs001" type="number" class="text" value="3" min="0" required /></p>
	<p>Левая сторона: <span class="note"><?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$MODlev000 = $_REQUEST["MODlev000"];
		if (!empty($MODlev000)) {
			echo $MODlev000;
		}
	}
	?></span><br />
	<select size="1" name="MODlev000" type="text" class="select" required>
		<option value="стена" selected>стена</option>
		<option value="столешница">столешница</option>
		<option value="ДВП">ДВП</option>
		<option value="декор">декор</option>
		<option value="боковой модуль">боковой модуль</option>
	</select>
	</p>
	<p>Правая сторона: <span class="note"><?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$MODprv000 = $_REQUEST["MODprv000"];
		if (!empty($MODprv000)) {
			echo $MODprv000;
		}
	}
	?></span><br />
	<select size="1" name="MODprv000" type="text" class="select" required>
		<option value="стена" selected>стена</option>
		<option value="столешница">столешница</option>
		<option value="ДВП">ДВП</option>
		<option value="декор">декор</option>
		<option value="боковой модуль">боковой модуль</option>
	</select>
	</p>
	<p>Высота опор, мм: <span class="note"><?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$OPRhgh000 = $_REQUEST["OPRhgh000"];
		if (!empty($OPRhgh000)) {
			echo $OPRhgh000;
		}
	}
	?></span><br />
	<select size="1" name="OPRhgh000" type="number" class="select" required>
		<option value="100" selected>100</option>
		<option value="150">150</option>
	</select>
	</p>
<h3>Данные для расчёта</h3>
	<img src="img1.png" alt="Линейное расположение ряда кухонных модулей" title="Линейное расположение ряда кухонных модулей" class="illustration" />
	<p>Расстояние A-D, мм: <span class="note"><?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$UGLazd000 = $_REQUEST["UGLazd000"];
		if (!empty($UGLazd000)) {
			echo $UGLazd000;
		}
	}
	?></span><br /><input name="UGLazd000" type="number" class="text" required /></p>
	<p>Метод расчета угла: <span class="note"><?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$UGLvar000 = $_REQUEST["UGLvar000"];
		if (!empty($UGLvar000)) {
			echo $UGLvar000;
		}
	}
	?></span><br />
	<select size="1" name="UGLvar000" type="text" class="select" required>
		<option value="угломером" selected>угломером</option>
		<option value="линейкой">линейкой</option>
		<option value="визуальный">визуальный</option>
	</select>
		<ul class="ul"><!-- угломером: -->
			<li>Угол A, град.: <span class="note"><?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$UGLzaz000 = $_REQUEST["UGLzaz000"];
				if (!empty($UGLzaz000)) {
					echo $UGLzaz000;
				}
			}
			?></span><br /><input name="UGLzaz000" type="text" class="li" /></li>
			<li>Угол D, град.: <span class="note"><?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$UGLzdz000 = $_REQUEST["UGLzdz000"];
				if (!empty($UGLzdz000)) {
					echo $UGLzdz000;
				}
			}
			?></span><br /><input name="UGLzdz000" type="text" class="li" /></li>
		</ul>
		<ul class="ul"><!-- линейкой: -->
			<li>Расстояние A-B, мм: <span class="note"><?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$UGLazb000 = $_REQUEST["UGLazb000"];
				if (!empty($UGLazb000)) {
					echo $UGLazb000;
				}
			}
			?></span><br /><input name="UGLazb000" type="number" class="li" /></li>
			<li>Расстояние A-C, мм: <span class="note"><?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$UGLazc000 = $_REQUEST["UGLazc000"];
				if (!empty($UGLazc000)) {
					echo $UGLazc000;
				}
			}
			?></span><br /><input name="UGLazc000" type="number" class="li" /></li>
			<li>Расстояние B-C, мм: <span class="note"><?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$UGLbzc000 = $_REQUEST["UGLbzc000"];
				if (!empty($UGLbzc000)) {
					echo $UGLbzc000;
				}
			}
			?></span><br /><input name="UGLbzc000" type="number" class="li" /></li>
			<li>Расстояние D-E, мм: <span class="note"><?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$UGLdze000 = $_REQUEST["UGLdze000"];
				if (!empty($UGLdze000)) {
					echo $UGLdze000;
				}
			}
			?></span><br /><input name="UGLdze000" type="number" class="li" /></li>
			<li>Расстояние D-F, мм: <span class="note"><?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$UGLdzf000 = $_REQUEST["UGLdzf000"];
				if (!empty($UGLdzf000)) {
					echo $UGLdzf000;
				}
			}
			?></span><br /><input name="UGLdzf000" type="number" class="li" /></li>
			<li>Расстояние E-F, мм: <span class="note"><?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$UGLezf000 = $_REQUEST["UGLezf000"];
				if (!empty($UGLezf000)) {
					echo $UGLezf000;
				}
			}
			?></span><br /><input name="UGLezf000" type="number" class="li" /></li>
		</ul>
		<ul class="ul"><!-- визуальный: -->
			<li>Зазор A, мм: <span class="note"><?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$UGLapl000 = $_REQUEST["UGLapl000"];
				if (!empty($UGLapl000)) {
					echo $UGLapl000;
				}
			}
			?></span><br /><input name="UGLapl000" type="number" class="li" /></li>
			<li>Зазор C, мм: <span class="note"><?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$UGLcpl000 = $_REQUEST["UGLcpl000"];
				if (!empty($UGLcpl000)) {
					echo $UGLcpl000;
				}
			}
			?></span><br /><input name="UGLcpl000" type="number" class="li" /></li>
			<li>Зазор D, мм: <span class="note"><?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$UGLdpl000 = $_REQUEST["UGLdpl000"];
				if (!empty($UGLdpl000)) {
					echo $UGLdpl000;
				}
			}
			?></span><br /><input name="UGLdpl000" type="number" class="li" /></li>
			<li>Зазор E, мм: <span class="note"><?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$UGLepl000 = $_REQUEST["UGLepl000"];
				if (!empty($UGLepl000)) {
					echo $UGLepl000;
				}
			}
			?></span><br /><input name="UGLepl000" type="number" class="li" /></li>
		</ul>
	</p>
	<p>
		<input name="submit" type="submit" value="Рассчитать" class="button" />
		<!-- <input name="reset" type="reset" value="Очистить" class="button" /> -->
	</p>
	</form>
</div>
<div class="output<?php
	if ($_SERVER["REQUEST_METHOD"] != "POST") {
		echo ' hidden';
		}
	?>">
<a id="output"></a>
<h2>Расчёт</h2>
<?php
// инициализация переменных
// общие данные
$MBLvid000 = $_POST["MBLvid000"]; // вид мебели - кухня/стол/шкаф-купе
$MODrsp000 = $_POST["MODrsp000"]; // расположение кухонных модулей - линейное/островное/Г-образное/П-образное
// нижние модули
$STLzzz000 = $_POST["STLzzz000"]; // глубина столешницы, мм - 600 (600-1200)
$STLtol000 = $_POST["STLtol000"]; // толщина столешницы, мм - 38 (12-...)
$STLsvs000 = $_POST["STLsvs000"]; // передний свес столешницы, мм - 20 (0-...)
$STLsvs001 = $_POST["STLsvs001"]; // задний свес столешницы, мм - 3 (0-...)
$MODlev000 = $_POST["MODlev000"]; // левая сторона - стена/столешница/ДВП/декор/боковой модуль
$MODprv000 = $_POST["MODprv000"]; // правая сторона - стена/столешница/ДВП/декор/боковой модуль
$OPRhgh000 = $_POST["OPRhgh000"]; // высота опор, мм - 100/150
// данные для расчёта
$UGLvar000 = $_POST["UGLvar000"]; // линейное расположение кух.модулей, метод расчёта угла - угломером/линейкой/визуальный
$UGLazd000 = $_POST["UGLazd000"]; // линейное расположение кух.модулей, расстояние A-D, мм
$UGLzaz000 = $_POST["UGLzaz000"]; // линейное расположение кух.модулей, угол A, град.
$UGLzdz000 = $_POST["UGLzdz000"]; // линейное расположение кух.модулей, угол D, град.
$UGLazb000 = $_POST["UGLazb000"]; // линейное расположение кух.модулей, расстояние A-B, мм
$UGLazc000 = $_POST["UGLazc000"]; // линейное расположение кух.модулей, расстояние A-C, мм
$UGLbzc000 = $_POST["UGLbzc000"]; // линейное расположение кух.модулей, расстояние B-C, мм
$UGLdze000 = $_POST["UGLdze000"]; // линейное расположение кух.модулей, расстояние D-E, мм
$UGLdzf000 = $_POST["UGLdzf000"]; // линейное расположение кух.модулей, расстояние D-F, мм
$UGLezf000 = $_POST["UGLezf000"]; // линейное расположение кух.модулей, расстояние E-F, мм
$UGLapl000 = $_POST["UGLapl000"]; // линейное расположение кух.модулей, зазор A, мм
$UGLcpl000 = $_POST["UGLcpl000"]; // линейное расположение кух.модулей, зазор C, мм
$UGLdpl000 = $_POST["UGLdpl000"]; // линейное расположение кух.модулей, зазор D, мм
$UGLepl000 = $_POST["UGLepl000"]; // линейное расположение кух.модулей, зазор E, мм

echo '<p>Вид мебели: <span class="span">';
if (!empty($MBLvid000)) {
	echo $MBLvid000;
}
if (!empty($MODrsp000)) {
	echo ', '.$MODrsp000.' расположение';
}
echo '</span></p>'."\n";

echo '<p>Расстояние A-D, мм: <span class="span">';
if (!empty($UGLazd000)) {
	echo $UGLazd000;
}
echo '</span></p>'."\n";
/*
// инициализация $UGLvar000 - метод расчёта угла при линейном расположении кух.модулей
echo '<p>Метод расчёта угла: <span class="span">';
if (!empty($UGLzaz000) && !empty($UGLzdz000) && empty($UGLazb000) && empty($UGLazc000) && empty($UGLbzc000) && empty($UGLdze000) && empty($UGLdzf000) && empty($UGLezf000) && empty($UGLapl000) && empty($UGLcpl000) && empty($UGLdpl000) && empty($UGLepl000)) {
	$UGLvar000 = "угломером";
	echo $UGLvar000;
} elseif (empty($UGLzaz000) && empty($UGLzdz000) && !empty($UGLazb000) && !empty($UGLazc000) && !empty($UGLbzc000) && !empty($UGLdze000) && !empty($UGLdzf000) && !empty($UGLezf000) && empty($UGLapl000) && empty($UGLcpl000) && empty($UGLdpl000) && empty($UGLepl000)) {
	$UGLvar000 = "линейкой";
	echo $UGLvar000;
} elseif (!empty($UGLapl000) || !empty($UGLcpl000) || !empty($UGLdpl000) || !empty($UGLepl000)) {
	$UGLvar000 = "визуальный";
	echo $UGLvar000;
} else {
	echo '<span class="warning">некорректное заполнение!</span>';
}
echo '</span></p>'."\n";
*/
?>
</div>
</body>

</html>