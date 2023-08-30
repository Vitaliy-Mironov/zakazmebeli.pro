<?php
// записываем в сессию
if (!empty($_POST["UGLzaz000"])) {$_SESSION["UGLzaz000"] = $_POST["UGLzaz000"];} // угол 1 (a)
if (!empty($_POST["UGLzdz000"])) {$_SESSION["UGLzdz000"] = $_POST["UGLzdz000"];} // угол 2 (d)
if (!empty($_POST["UGLzgz000"])) {$_SESSION["UGLzgz000"] = $_POST["UGLzgz000"];} // угол 3 (g)
if (!empty($_POST["UGLzjz000"])) {$_SESSION["UGLzjz000"] = $_POST["UGLzjz000"];} // угол 4 (j)
if (!empty($_POST["UGLzmz000"])) {$_SESSION["UGLzmz000"] = $_POST["UGLzmz000"];} // угол 5 (m)
if (!empty($_POST["UGLzxz000"])) {$_SESSION["UGLzxz000"] = $_POST["UGLzxz000"];} // контролька
// отображаем данные в value
if (!empty($_REQUEST["UGLzaz000"])) {$b61 = $_REQUEST["UGLzaz000"];} elseif (!empty($_SESSION["UGLzaz000"])) {$b61 = $_SESSION["UGLzaz000"];}
if (!empty($_REQUEST["UGLzdz000"])) {$b62 = $_REQUEST["UGLzdz000"];} elseif (!empty($_SESSION["UGLzdz000"])) {$b62 = $_SESSION["UGLzdz000"];}
if (!empty($_REQUEST["UGLzgz000"])) {$b63 = $_REQUEST["UGLzgz000"];} elseif (!empty($_SESSION["UGLzgz000"])) {$b63 = $_SESSION["UGLzgz000"];}
if (!empty($_REQUEST["UGLzjz000"])) {$b64 = $_REQUEST["UGLzjz000"];} elseif (!empty($_SESSION["UGLzjz000"])) {$b64 = $_SESSION["UGLzjz000"];}
if (!empty($_REQUEST["UGLzmz000"])) {$b65 = $_REQUEST["UGLzmz000"];} elseif (!empty($_SESSION["UGLzmz000"])) {$b65 = $_SESSION["UGLzmz000"];}
// отображаем только необходимое кол-во углов, остальные скрываем
switch ($a) {
	case "1": // линейное
	case "3": // островное
		$c = 2;
		break;
	case "2": // параллельное
	case "5":  // П-образное
		$c = 4;
		break;
	case "4": // угловое
		$c = 3;
		break;
	case "6": // G-образное
	case "7": // G-образное зеркальная
		$c = 5;
		break;
}
// проставляем 90.0 в заведомо прямых углах (левый/правый край) и закрываем данные от редактирования
if ($_SESSION["UGLlev000"] == "separately") {$b61 = "90.0"; $b61b = " disabled"; $_SESSION["UGLzaz000"] = $b61;}
if ($a == "1" && $_SESSION["UGLprv000"] == "separately") {$b62 = "90.0"; $b62b = " disabled"; $_SESSION["UGLzdz000"] = $b62;}
if ($a == "2" && $_SESSION["UGLprv000"] == "separately") {$b62 = "90.0"; $b62b = " disabled"; $_SESSION["UGLzdz000"] = $b62;}
if ($a == "3" && $_SESSION["UGLprv000"] == "separately") {$b62 = "90.0"; $b62b = " disabled"; $_SESSION["UGLzdz000"] = $b62;}
if ($a == "4" && $_SESSION["UGLprv000"] == "separately") {$b63 = "90.0"; $b63b = " disabled"; $_SESSION["UGLzgz000"] = $b63;}
if ($a == "2" && $_SESSION["UGLlev001"] == "separately") {$b63 = "90.0"; $b63b = " disabled"; $_SESSION["UGLzgz000"] = $b63;}
if ($a == "2" && $_SESSION["UGLprv001"] == "separately") {$b64 = "90.0"; $b64b = " disabled"; $_SESSION["UGLzjz000"] = $b64;}
if ($a == "5" && $_SESSION["UGLprv000"] == "separately") {$b64 = "90.0"; $b64b = " disabled"; $_SESSION["UGLzjz000"] = $b64;}
if ($a == "6" && $_SESSION["UGLprv000"] == "separately") {$b65 = "90.0"; $b65b = " disabled"; $_SESSION["UGLzmz000"] = $b65;}
if ($a == "7" && $_SESSION["UGLprv000"] == "separately") {$b65 = "90.0"; $b65b = " disabled"; $_SESSION["UGLzmz000"] = $b65;}
// определяем версию схематического изображения
if ($a != "2" && $_SESSION["UGLlev000"] == "closely" && $_SESSION["UGLprv000"] == "closely") {$ver = "1";}
if ($a != "2" && $_SESSION["UGLlev000"] == "separately" && $_SESSION["UGLprv000"] == "separately") {$ver = "2";}
if ($a != "2" && $_SESSION["UGLlev000"] == "separately" && $_SESSION["UGLprv000"] == "closely") {$ver = "3";}
if ($a != "2" && $_SESSION["UGLlev000"] == "closely" && $_SESSION["UGLprv000"] == "separately") {$ver = "4";}
if ($a == "2" && $_SESSION["UGLlev000"] == "closely" && $_SESSION["UGLprv000"] == "closely" && $_SESSION["UGLlev001"] == "closely" && $_SESSION["UGLprv001"] == "closely") {$ver = "1";}
if ($a == "2" && $_SESSION["UGLlev000"] == "separately" && $_SESSION["UGLprv000"] == "separately" && $_SESSION["UGLlev001"] == "closely" && $_SESSION["UGLprv001"] == "closely") {$ver = "2";}
if ($a == "2" && $_SESSION["UGLlev000"] == "separately" && $_SESSION["UGLprv000"] == "closely" && $_SESSION["UGLlev001"] == "closely" && $_SESSION["UGLprv001"] == "closely") {$ver = "3";}
if ($a == "2" && $_SESSION["UGLlev000"] == "closely" && $_SESSION["UGLprv000"] == "separately" && $_SESSION["UGLlev001"] == "closely" && $_SESSION["UGLprv001"] == "closely") {$ver = "4";}
if ($a == "2" && $_SESSION["UGLlev000"] == "closely" && $_SESSION["UGLprv000"] == "closely" && $_SESSION["UGLlev001"] == "separately" && $_SESSION["UGLprv001"] == "separately") {$ver = "5";}
if ($a == "2" && $_SESSION["UGLlev000"] == "closely" && $_SESSION["UGLprv000"] == "closely" && $_SESSION["UGLlev001"] == "separately" && $_SESSION["UGLprv001"] == "closely") {$ver = "6";}
if ($a == "2" && $_SESSION["UGLlev000"] == "closely" && $_SESSION["UGLprv000"] == "closely" && $_SESSION["UGLlev001"] == "closely" && $_SESSION["UGLprv001"] == "separately") {$ver = "7";}
if ($a == "2" && $_SESSION["UGLlev000"] == "separately" && $_SESSION["UGLprv000"] == "separately" && $_SESSION["UGLlev001"] == "separately" && $_SESSION["UGLprv001"] == "separately") {$ver = "8";}
if ($a == "2" && $_SESSION["UGLlev000"] == "separately" && $_SESSION["UGLprv000"] == "closely" && $_SESSION["UGLlev001"] == "separately" && $_SESSION["UGLprv001"] == "closely") {$ver = "9";}
if ($a == "2" && $_SESSION["UGLlev000"] == "closely" && $_SESSION["UGLprv000"] == "separately" && $_SESSION["UGLlev001"] == "closely" && $_SESSION["UGLprv001"] == "separately") {$ver = "10";}
if ($a == "2" && $_SESSION["UGLlev000"] == "separately" && $_SESSION["UGLprv000"] == "closely" && $_SESSION["UGLlev001"] == "closely" && $_SESSION["UGLprv001"] == "separately") {$ver = "11";}
if ($a == "2" && $_SESSION["UGLlev000"] == "closely" && $_SESSION["UGLprv000"] == "separately" && $_SESSION["UGLlev001"] == "separately" && $_SESSION["UGLprv001"] == "closely") {$ver = "12";}

if ($b499 == "1") {
	$d600 = '<p class="instruction-p">Если кухня не упирается в боковые стены, то проверять соответствие углов 90&deg; не требуется. Просто подтвердите установленные данные.</p>';
} else {
	$d600 = '<p class="instruction-p">Проверьте угломером неизмеренные углы и впишите данные Ваших замеров.</p>
		<p class="instruction-p">Вводить числа нужно в формате XX.X или XXX.X с точкой в качестве разделителя. Например: 90.0 или 89.7 или 101.2</p>';
}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="instruction-checkbox" />
			<?php
			if ($b499 == "1") {echo '<p class="instruction-p">Если кухня не упирается в боковые стены, то проверять соответствие углов 90&deg; не требуется. Просто подтвердите установленные данные.</p>'."\n";}
			else {echo '<p class="instruction-p">Проверьте угломером неизмеренные углы и впишите данные Ваших замеров.</p>
			<p class="instruction-p">Вводить числа нужно в формате XX.X или XXX.X с точкой в качестве разделителя. Например: 90.0 или 89.7 или 101.2</p>'."\n";}
			?>
			<p class="instruction-p"><a href="kak-pravilno-izmerit-ugol.php" class="instruction-p-link icon-doc" target="_blank">Как правильно измерить угол?</a></p>
			<p class="instruction-p"><a href="kak-izmerit-ugol-bez-uglomera.php" class="instruction-p-link icon-doc" target="_blank">Как измерить угол без угломера?</a></p>
			<?php require 'editban.php'; ?>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Углы</legend>
		<div class="illustration">
			<img src="/detailing/images/UGLzxz000_<?php echo $a.'_'.$ver; ?>.png" alt="карта" title="карта" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel">
			Угол 1: <input onkeydown="if(event.keyCode==13){return false;}" name="UGLzaz000" type="text" class="textnumber underline" pattern="[0-9]{2,3}.[0-9]{1}" value="<?php echo $b61; ?>" required<?php echo $b61b; ?> />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel">
			Угол 2: <input onkeydown="if(event.keyCode==13){return false;}" name="UGLzdz000" type="text" class="textnumber underline" pattern="[0-9]{2,3}.[0-9]{1}" value="<?php echo $b62; ?>" required<?php echo $b62b; ?> />
			</label>
		</div>
		<div class="detailing-form-input-div<?php if ($c < 3) {echo ' hidden';} ?>">
			<label class="textlabel">
			Угол 3: <input onkeydown="if(event.keyCode==13){return false;}" name="UGLzgz000" type="text" class="textnumber underline" pattern="[0-9]{2,3}.[0-9]{1}" value="<?php echo $b63; ?>"<?php if ($c >= 3) {echo ' required';} ?><?php echo $b63b; ?> />
			</label>
		</div>
		<div class="detailing-form-input-div<?php if ($c < 4) {echo ' hidden';} ?>">
			<label class="textlabel">
			Угол 4: <input onkeydown="if(event.keyCode==13){return false;}" name="UGLzjz000" type="text" class="textnumber underline" pattern="[0-9]{2,3}.[0-9]{1}" value="<?php echo $b64; ?>"<?php if ($c >= 4) {echo ' required';} ?><?php echo $b64b; ?> />
			</label>
		</div>
		<div class="detailing-form-input-div<?php if ($c < 5) {echo ' hidden';} ?>">
			<label class="textlabel">
			Угол 5: <input onkeydown="if(event.keyCode==13){return false;}" name="UGLzmz000" type="text" class="textnumber underline" pattern="[0-9]{2,3}.[0-9]{1}" value="<?php echo $b65; ?>"<?php if ($c >= 5) {echo ' required';} ?><?php echo $b65b; ?> />
			</label>
		</div>
		<input onkeydown="if(event.keyCode==13){return false;}" name="UGLzxz000" type="text" class="hidden" value="ok" /> <!-- контролька -->
	</fieldset>
	<a id="UGLzxz000"></a>
	<button type="submit" formaction="#UGLzxz000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["UGLzxz000"]) {
	case "ok":
		require 'kitchen_00700.php';
		break;
}
?>