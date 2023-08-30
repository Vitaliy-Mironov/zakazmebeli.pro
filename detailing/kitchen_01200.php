<?php
// записываем в сессию
if (!empty($_POST["ZFNtop001"])) {$_SESSION["ZFNtop001"] = $_POST["ZFNtop001"];} // верхний зазор
if (!empty($_POST["ZFNtop002"])) {$_SESSION["ZFNtop002"] = $_POST["ZFNtop002"];} // правый зазор
if (!empty($_POST["ZFNtop003"])) {$_SESSION["ZFNtop003"] = $_POST["ZFNtop003"];} // нижний зазор
if (!empty($_POST["ZFNtop004"])) {$_SESSION["ZFNtop004"] = $_POST["ZFNtop004"];} // левый зазор
if (!empty($_POST["ZFVtop000"])) {$_SESSION["ZFVtop000"] = $_POST["ZFVtop000"];} // внутренний зазор
if (!empty($_POST["ZFNtop000"])) {$_SESSION["ZFNtop000"] = $_POST["ZFNtop000"];} // контролька
// отображаем данные в value
if (!empty($_REQUEST["ZFNtop001"])) {$b121 = $_REQUEST["ZFNtop001"];} elseif (!empty($_SESSION["ZFNtop001"])) {$b121 = $_SESSION["ZFNtop001"];} else {$b121 = "2.0";}
if (!empty($_REQUEST["ZFNtop002"])) {$b122 = $_REQUEST["ZFNtop002"];} elseif (!empty($_SESSION["ZFNtop002"])) {$b122 = $_SESSION["ZFNtop002"];} else {$b122 = "2.0";}
if (!empty($_REQUEST["ZFNtop003"])) {$b123 = $_REQUEST["ZFNtop003"];} elseif (!empty($_SESSION["ZFNtop003"])) {$b123 = $_SESSION["ZFNtop003"];} else {$b123 = "2.0";}
if (!empty($_REQUEST["ZFNtop004"])) {$b124 = $_REQUEST["ZFNtop004"];} elseif (!empty($_SESSION["ZFNtop004"])) {$b124 = $_SESSION["ZFNtop004"];} else {$b124 = "2.0";}
if (!empty($_REQUEST["ZFVtop000"])) {$b125 = $_REQUEST["ZFVtop000"];} elseif (!empty($_SESSION["ZFVtop000"])) {$b125 = $_SESSION["ZFVtop000"];} else {$b125 = "4.0";}
// определяем версию карты
if ($_SESSION["MDVfas000"] == "imposed") {$b12v = "1";} elseif ($_SESSION["MDVfas000"] == "supplementary") {$b12v = "2";}
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
		<legend class="headline"><?php echo $formcount.'. '; ?>Зазоры верхних модулей</legend>
		<div class="illustration">
			<img src="/detailing/images/ZFVtop000_<?php echo $b12v; ?>.png" alt="карта" title="карта" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			A. Верхний зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFNtop001" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php echo $b121; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			B. Правый зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFNtop002" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php echo $b122; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			C. Нижний зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFNtop003" type="text" class="textnumber underline" pattern="[\-0-9]{1,2,3}.[0-9]{1}" value="<?php echo $b123; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			D. Левый зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFNtop004" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php echo $b124; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			E. Внутренний зазор, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="ZFVtop000" type="text" class="textnumber underline" pattern="[0-9]{1,2}.[0-9]{1}" value="<?php echo $b125; ?>" required />
			</label>
		</div>
		<input onkeydown="if(event.keyCode==13){return false;}" name="ZFNtop000" type="text" class="hidden" value="ok" /> <!-- контролька -->
	</fieldset>
	<a id="ZFVtop000"></a>
	<button type="submit" formaction="#ZFVtop000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["ZFNtop000"]) {
	case "ok":
		require 'kitchen_01210.php';
		break;
}
?>