<?php
// записываем в сессию
if (!empty($_POST["MDVxxx000"])) {$_SESSION["MDVxxx000"] = $_POST["MDVxxx000"];} // ширина верхних модулей
if (!empty($_POST["MDVyyy000"])) {$_SESSION["MDVyyy000"] = $_POST["MDVyyy000"];} // высота верхних модулей
if (!empty($_POST["MDVzzz000"])) {$_SESSION["MDVzzz000"] = $_POST["MDVzzz000"];} // глубина верхних модулей
if (!empty($_POST["MDVxyz000"])) {$_SESSION["MDVxyz000"] = $_POST["MDVxyz000"];} // контролька
// отображаем данные в value
if (!empty($_REQUEST["MDVxxx000"])) {$b101 = $_REQUEST["MDVxxx000"];} elseif (!empty($_SESSION["MDVxxx000"])) {$b101 = $_SESSION["MDVxxx000"];} else {$b101 = "600";}
if (!empty($_REQUEST["MDVyyy000"])) {$b102 = $_REQUEST["MDVyyy000"];} elseif (!empty($_SESSION["MDVyyy000"])) {$b102 = $_SESSION["MDVyyy000"];} else {$b102 = "720";}
if (!empty($_REQUEST["MDVzzz000"])) {$b103 = $_REQUEST["MDVzzz000"];} elseif (!empty($_SESSION["MDVzzz000"])) {$b103 = $_SESSION["MDVzzz000"];} else {$b103 = "300";}
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
		<legend class="headline"><?php echo $formcount.'. '; ?>Верхние модули</legend>
		<div class="illustration">
			<img src="/detailing/images/MDVxyz000.png" alt="верхние модули" title="верхние модули" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			X. Ширина, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MDVxxx000" type="number" class="textnumber big underline" pattern="[0-9]" min="100" max="1800" value="<?php echo $b101; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Y. Высота, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MDVyyy000" type="number" class="textnumber big underline" pattern="[0-9]" min="100" max="1800" value="<?php echo $b102; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Z. Глубина, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MDVzzz000" type="number" class="textnumber big underline" pattern="[0-9]" min="100" max="600" value="<?php echo $b103; ?>" required />
			</label>
		</div>
		<input onkeydown="if(event.keyCode==13){return false;}" name="MDVxyz000" type="text" class="hidden" value="ok" /> <!-- контролька -->
	</fieldset>
	<a id="MDVxyz000"></a>
	<button type="submit" formaction="#MDVxyz000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MDVxyz000"]) {
	case "ok":
		require 'kitchen_01100.php';
		break;
}
?>