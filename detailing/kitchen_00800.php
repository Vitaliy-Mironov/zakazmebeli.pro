<?php
// записываем в сессию
if (!empty($_POST["MATfas000"])) {$_SESSION["MATfas000"] = $_POST["MATfas000"];} // толщина материала фасадов
if (!empty($_POST["MATmod000"])) {$_SESSION["MATmod000"] = $_POST["MATmod000"];} // толщина материала модулей
if (!empty($_POST["MATbox000"])) {$_SESSION["MATbox000"] = $_POST["MATbox000"];} // толщина материала ящиков
if (!empty($_POST["KRMfas000"])) {$_SESSION["KRMfas000"] = $_POST["KRMfas000"];} // толщина кромки фасадов
if (!empty($_POST["KRMmod000"])) {$_SESSION["KRMmod000"] = $_POST["KRMmod000"];} // толщина кромки модулей
if (!empty($_POST["KRMbox000"])) {$_SESSION["KRMbox000"] = $_POST["KRMbox000"];} // толщина кромки ящиков
if (!empty($_POST["MATfmb000"])) {$_SESSION["MATfmb000"] = $_POST["MATfmb000"];} // контролька
// отображаем данные в value
if (!empty($_REQUEST["MATfas000"])) {$b81 = $_REQUEST["MATfas000"];} elseif (!empty($_SESSION["MATfas000"])) {$b81 = $_SESSION["MATfas000"];} else {$b81 = "18";}
if (!empty($_REQUEST["MATmod000"])) {$b82 = $_REQUEST["MATmod000"];} elseif (!empty($_SESSION["MATmod000"])) {$b82 = $_SESSION["MATmod000"];} else {$b82 = "18";}
if (!empty($_REQUEST["MATbox000"])) {$b83 = $_REQUEST["MATbox000"];} elseif (!empty($_SESSION["MATbox000"])) {$b83 = $_SESSION["MATbox000"];} else {$b83 = "18";}
if (!empty($_REQUEST["KRMfas000"])) {$b81k = $_REQUEST["KRMfas000"];} elseif (!empty($_SESSION["KRMfas000"])) {$b81k = $_SESSION["KRMfas000"];} else {$b81k = "1.00";}
if (!empty($_REQUEST["KRMmod000"])) {$b82k = $_REQUEST["KRMmod000"];} elseif (!empty($_SESSION["KRMmod000"])) {$b82k = $_SESSION["KRMmod000"];} else {$b82k = "1.00";}
if (!empty($_REQUEST["KRMbox000"])) {$b83k = $_REQUEST["KRMbox000"];} elseif (!empty($_SESSION["KRMbox000"])) {$b83k = $_SESSION["KRMbox000"];} else {$b83k = "1.00";}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="instruction-checkbox" />
			<p class="instruction-p">На этом этапе вводятся данные, общие для всех модулей проектируемой кухни. Они будут использованы по умолчанию при настройке модулей. В случае необходимости, в дальнейшем, эти данные можно будет изменить индивидуально для каждого модуля.</p>
			<!-- <p class="instruction-p">Если какой-то вид материала используется без кромки (например крашеные фасады), установите для них размер кромки равный 0.00.</p> -->
			<!-- <p class="instruction-p">Если для какого-то материала используется меламиновая ("бумажная") кромка, толщиной которой в расчётах можно пренебречь, допускается установить для них размер кромки равный 0.00.</p> -->
			<?php require 'editban.php'; ?>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Материалы</legend>
		<div class="illustration">
			<img src="/detailing/images/MATfas000.png" alt="толщина материала фасадов" title="толщина материала фасадов" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Толщина фасадов, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MATfas000" type="number" class="textnumber underline" pattern="[0-9]" min="1" max="50" value="<?php echo $b81; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Кромка фасадов, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="KRMfas000" type="text" class="textnumber underline" pattern="[0-9]{1}.[0-9]{2}" value="<?php echo $b81k; ?>" required />
			</label>
		</div>
		<hr class="line" />
		<div class="illustration">
			<img src="/detailing/images/MATmod000.png" alt="толщина материала модулей" title="толщина материала модулей" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Толщина модулей, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MATmod000" type="number" class="textnumber underline" pattern="[0-9]" min="1" max="50" value="<?php echo $b82; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Кромка модулей, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="KRMmod000" type="text" class="textnumber underline" pattern="[0-9]{1}.[0-9]{2}" value="<?php echo $b82k; ?>" required />
			</label>
		</div>
		<hr class="line" />
		<div class="illustration">
			<img src="/detailing/images/MATbox000.png" alt="толщина материала ящиков" title="толщина материала ящиков" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Толщина ящиков, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MATbox000" type="number" class="textnumber underline" pattern="[0-9]" min="1" max="50" value="<?php echo $b83; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Кромка ящиков, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="KRMbox000" type="text" class="textnumber underline" pattern="[0-9]{1}.[0-9]{2}" value="<?php echo $b83k; ?>" required />
			</label>
		</div>
		<input onkeydown="if(event.keyCode==13){return false;}" name="MATfmb000" type="text" class="hidden" value="ok" /> <!-- контролька -->
	</fieldset>
	<a id="MATfmb000"></a>
	<button type="submit" formaction="#MATfmb000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MATfmb000"]) {
	case "ok":
		require 'kitchen_00900.php';
		break;
}
?>