<?php
// записываем в сессию
if (!empty($_POST["ZFNbot001"])) {$_SESSION["ZFNbot001"] = $_POST["ZFNbot001"];} // верхний зазор
if (!empty($_POST["ZFNbot002"])) {$_SESSION["ZFNbot002"] = $_POST["ZFNbot002"];} // правый зазор
if (!empty($_POST["ZFNbot003"])) {$_SESSION["ZFNbot003"] = $_POST["ZFNbot003"];} // нижний зазор
if (!empty($_POST["ZFNbot004"])) {$_SESSION["ZFNbot004"] = $_POST["ZFNbot004"];} // левый зазор
if (!empty($_POST["ZFVbot000"])) {$_SESSION["ZFVbot000"] = $_POST["ZFVbot000"];} // внутренний зазор
if (!empty($_POST["ZFNbot000"])) {$_SESSION["ZFNbot000"] = $_POST["ZFNbot000"];} // контролька
// отображаем данные в value
if (!empty($_REQUEST["ZFNbot001"])) {$b151 = $_REQUEST["ZFNbot001"];} elseif (!empty($_SESSION["ZFNbot001"])) {$b151 = $_SESSION["ZFNbot001"];} else {$b151 = "2.0" + $_SESSION["STLksb000"];}
if (!empty($_REQUEST["ZFNbot002"])) {$b152 = $_REQUEST["ZFNbot002"];} elseif (!empty($_SESSION["ZFNbot002"])) {$b152 = $_SESSION["ZFNbot002"];} else {$b152 = "2.0";}
if (!empty($_REQUEST["ZFNbot003"])) {$b153 = $_REQUEST["ZFNbot003"];} elseif (!empty($_SESSION["ZFNbot003"])) {$b153 = $_SESSION["ZFNbot003"];} else {$b153 = "2.0";}
if (!empty($_REQUEST["ZFNbot004"])) {$b154 = $_REQUEST["ZFNbot004"];} elseif (!empty($_SESSION["ZFNbot004"])) {$b154 = $_SESSION["ZFNbot004"];} else {$b154 = "2.0";}
if (!empty($_REQUEST["ZFVbot000"])) {$b155 = $_REQUEST["ZFVbot000"];} elseif (!empty($_SESSION["ZFVbot000"])) {$b155 = $_SESSION["ZFVbot000"];} else {$b155 = "3.0";}
// определяем версию карты
if ($_SESSION["MDNfas000"] == "imposed") {$b15v = "1";} elseif ($_SESSION["MDNfas000"] == "supplementary") {$b15v = "2";}
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
		<legend class="headline"><?php echo $formcount.'. '; ?>Нижние зазоры</legend>
		<div class="illustration">
			<img src="/detailing/images/ZFVbot000_<?php echo $b15v; ?>.png" alt="карта" title="карта" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			A. Верхний зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFNbot001" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php if (preg_match("/\./", $b151)) {echo $b151;} else {echo $b151.".0";} $b151; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			B. Правый зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFNbot002" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php echo $b152; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			C. Нижний зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFNbot003" type="text" class="textnumber underline" pattern="[\-0-9]{1,2}.[0-9]{1}" value="<?php echo $b153; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			D. Левый зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFNbot004" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php echo $b154; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			E. Внутренний зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFVbot000" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php echo $b155; ?>" required />
			</label>
		</div>
		<input onkeydown="if(event.keyCode==13){return false;}" name="ZFNbot000" type="text" class="hidden" value="ok" /> <!-- контролька -->
	</fieldset>
	<a id="ZFVbot000"></a>
	<button type="submit" formaction="#ZFVbot000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["ZFNbot000"]) {
	case "ok":
		require 'kitchen_01600.php';
		break;
}
?>