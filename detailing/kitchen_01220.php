<?php
// записываем в сессию
if (!empty($_POST["MDVstn001"])) {$_SESSION["MDVstn001"] = $_POST["MDVstn001"];} // толщина паза
if (!empty($_POST["MDVstn002"])) {$_SESSION["MDVstn002"] = $_POST["MDVstn002"];} // глубина паза
if (!empty($_POST["MDVstn003"])) {$_SESSION["MDVstn003"] = $_POST["MDVstn003"];} // отступ от края
if (!empty($_POST["MDVstn999"])) {$_SESSION["MDVstn999"] = $_POST["MDVstn999"];} // контролька
// отображаем только необходимое кол-во размеров, остальные скрываем
switch ($_SESSION["MDVstn000"]) {
	case "groove": // в пазах
		$c122 = 1;
		$c122req = " required";
		$b1222b = 6;
		$b122a = "Ширина";
		$b122b = "Глубина";
		$b122head = "паза";
		break;
	case "fourth": // в четверти
		$c122 = 2;
		$c122hid = " hidden";
		$b1222b = 11;
		$b122a = "Глубина";
		$b122b = "Ширина";
		$b122head = "четверти";
		break;
}
// отображаем данные в value
if (!empty($_REQUEST["MDVstn001"])) {$b1221 = $_REQUEST["MDVstn001"];} elseif (!empty($_SESSION["MDVstn001"])) {$b1221 = $_SESSION["MDVstn001"];} else {$b1221 = "4";}
if (!empty($_REQUEST["MDVstn002"])) {$b1222 = $_REQUEST["MDVstn002"];} elseif (!empty($_SESSION["MDVstn002"])) {$b1222 = $_SESSION["MDVstn002"];} else {$b1222 = $b1222b;}
if (!empty($_REQUEST["MDVstn003"])) {$b1223 = $_REQUEST["MDVstn003"];} elseif (!empty($_SESSION["MDVstn003"])) {$b1223 = $_SESSION["MDVstn003"];} else {$b1223 = "15";}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="instruction-checkbox" />
			<p class="instruction-p">.</p>
			<?php require 'editban.php'; ?>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Размеры <?php echo $b122head; ?></legend>
		<div class="illustration">
			<img src="/detailing/images/MDVstn999_<?php echo $c122; ?>.png" alt="карта" title="карта" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			A. <?php echo $b122a.' '.$b122head; ?>, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MDVstn001" type="number" class="textnumber underline" min="2" max="10" value="<?php echo $b1221; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			B. <?php echo $b122b.' '.$b122head; ?>, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MDVstn002" type="number" class="textnumber underline" min="2" max="15" value="<?php echo $b1222; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div<?php echo $c122hid; ?>">
			<label class="textlabel big">
			C. Отступ от края, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MDVstn003" type="number" class="textnumber underline" min="2" max="200" value="<?php echo $b1223; ?>"<?php echo $c122req; ?> />
			</label>
		</div>
		<input onkeydown="if(event.keyCode==13){return false;}" name="MDVstn999" type="text" class="hidden" value="ok" /> <!-- контролька -->
	</fieldset>
	<a id="MDVstn999"></a>
	<button type="submit" formaction="#MDVstn999" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MDVstn999"]) {
	case "ok":
		require 'kitchen_01300.php';
		break;
}
?>