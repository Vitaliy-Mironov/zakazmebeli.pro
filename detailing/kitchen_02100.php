<?php
// записываем в сессию
if (!empty($_POST["ZFNtwr001"])) {$_SESSION["ZFNtwr001"] = $_POST["ZFNtwr001"];} // верхний зазор
if (!empty($_POST["ZFNtwr002"])) {$_SESSION["ZFNtwr002"] = $_POST["ZFNtwr002"];} // правый зазор
if (!empty($_POST["ZFNtwr003"])) {$_SESSION["ZFNtwr003"] = $_POST["ZFNtwr003"];} // нижний зазор
if (!empty($_POST["ZFNtwr004"])) {$_SESSION["ZFNtwr004"] = $_POST["ZFNtwr004"];} // левый зазор
if (!empty($_POST["ZFVtwr000"])) {$_SESSION["ZFVtwr000"] = $_POST["ZFVtwr000"];} // внутренний зазор
if (!empty($_POST["ZFNtwr000"])) {$_SESSION["ZFNtwr000"] = $_POST["ZFNtwr000"];} // контролька
// отображаем данные в value
if (!empty($_REQUEST["ZFNtwr001"])) {$b211 = $_REQUEST["ZFNtwr001"];} elseif (!empty($_SESSION["ZFNtwr001"])) {$b211 = $_SESSION["ZFNtwr001"];} else {$b211 = "2.0";}
if (!empty($_REQUEST["ZFNtwr002"])) {$b212 = $_REQUEST["ZFNtwr002"];} elseif (!empty($_SESSION["ZFNtwr002"])) {$b212 = $_SESSION["ZFNtwr002"];} else {$b212 = "2.0";}
if (!empty($_REQUEST["ZFNtwr003"])) {$b213 = $_REQUEST["ZFNtwr003"];} elseif (!empty($_SESSION["ZFNtwr003"])) {$b213 = $_SESSION["ZFNtwr003"];} else {$b213 = "2.0";}
if (!empty($_REQUEST["ZFNtwr004"])) {$b214 = $_REQUEST["ZFNtwr004"];} elseif (!empty($_SESSION["ZFNtwr004"])) {$b214 = $_SESSION["ZFNtwr004"];} else {$b214 = "2.0";}
if (!empty($_REQUEST["ZFVtwr000"])) {$b215 = $_REQUEST["ZFVtwr000"];} elseif (!empty($_SESSION["ZFVtwr000"])) {$b215 = $_SESSION["ZFVtwr000"];} else {$b215 = "4.0";}
// определяем версию карты
if ($_SESSION["MDTfas000"] == "imposed") {$b21v = "1";} elseif ($_SESSION["MDTfas000"] == "supplementary") {$b21v = "2";}
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
		<legend class="headline"><?php echo $formcount.'. '; ?>Зазоры пеналов</legend>
		<div class="illustration">
			<img src="/detailing/images/ZFVtwr000_<?php echo $b21v; ?>.png" alt="карта" title="карта" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			A. Верхний зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFNtwr001" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php echo $b211; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			B. Правый зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFNtwr002" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php echo $b212; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			C. Нижний зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFNtwr003" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php echo $b213; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			D. Левый зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFNtwr004" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php echo $b214; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			E. Внутренний зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFVtwr000" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php echo $b215; ?>" required />
			</label>
		</div>
		<input onkeydown="if(event.keyCode==13){return false;}" name="ZFNtwr000" type="text" class="hidden" value="ok" /> <!-- контролька -->
	</fieldset>
	<a id="ZFVtwr000"></a>
	<button type="submit" formaction="#ZFVtwr000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["ZFNtwr000"]) {
	case "ok":
		require 'kitchen_02200.php';
		break;
}
?>