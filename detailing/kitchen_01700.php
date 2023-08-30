<?php
// записываем в сессию
if (!empty($_POST["OPRhgh000"])) {$_SESSION["OPRhgh000"] = $_POST["OPRhgh000"];} // высота опор
if (!empty($_POST["OPRhgh001"])) {$_SESSION["OPRhgh001"] = $_POST["OPRhgh001"];} // контролька
// отображаем данные в value
if (!empty($_REQUEST["OPRhgh000"])) {$b171 = $_REQUEST["OPRhgh000"];} elseif (!empty($_SESSION["OPRhgh000"])) {$b171 = $_SESSION["OPRhgh000"];} else {$b171 = "100";}
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
		<legend class="headline"><?php echo $formcount.'. '; ?>Высота опор</legend>
		<div class="illustration">
			<img src="/detailing/images/OPRhgh000.png" alt="высота опор" title="высота опор" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			h. Высота опор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="OPRhgh000" type="number" class="textnumber underline" pattern="[0-9]{3}" min="1" max="200" value="<?php echo $b171; ?>" required />
			</label>
		</div>
		<input onkeydown="if(event.keyCode==13){return false;}" name="OPRhgh001" type="text" class="hidden" value="ok" /> <!-- контролька -->
	</fieldset>
	<a id="OPRhgh001"></a>
	<button type="submit" formaction="#OPRhgh001" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["OPRhgh001"]) {
	case "ok":
		require 'kitchen_01900.php';
		break;
}
?>