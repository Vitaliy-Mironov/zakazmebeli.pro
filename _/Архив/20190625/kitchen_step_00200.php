<?php
// записываем в сессию
if (!empty($_POST["MODrsp000"])) {$_SESSION["MODrsp000"] = $_POST["MODrsp000"];}
// устанавливаем checked на выбор пользователя
if($_REQUEST["MODrsp000"] == "linear") {$b21 = " checked";} elseif ($_SESSION["MODrsp000"] == "linear") {$b21 = " checked";}
if($_REQUEST["MODrsp000"] == "parallel") {$b22 = " checked";} elseif ($_SESSION["MODrsp000"] == "parallel") {$b22 = " checked";}
if($_REQUEST["MODrsp000"] == "insular") {$b23 = " checked";} elseif ($_SESSION["MODrsp000"] == "insular") {$b23 = " checked";}
if($_REQUEST["MODrsp000"] == "L") {$b24 = " checked";} elseif ($_SESSION["MODrsp000"] == "L") {$b24 = " checked";}
if($_REQUEST["MODrsp000"] == "U") {$b25 = " checked";} elseif ($_SESSION["MODrsp000"] == "U") {$b25 = " checked";}
if($_REQUEST["MODrsp000"] == "G") {$b26 = " checked";} elseif ($_SESSION["MODrsp000"] == "G") {$b26 = " checked";}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input type="checkbox" class="instruction-checkbox" />
			<p class="instruction-p">Укажите форму проектируемой кухни.</p>
			<?php require 'editban.php'; ?>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Расположение</legend>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="linear" type="radio" class="radio-button<?php echo $b21; ?>" />
			<img src="/detailing/images/MODrsp000_1.png" alt="линейное" class="radio-image" />
			<span class="detailing-form-input-span">линейное</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="parallel" type="radio" class="radio-button<?php echo $b22; ?>" />
			<img src="/detailing/images/MODrsp000_2.png" alt="параллельное" class="radio-image" />
			<span class="detailing-form-input-span">параллельное</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="insular" type="radio" class="radio-button<?php echo $b23; ?>" />
			<img src="/detailing/images/MODrsp000_3.png" alt="островное" class="radio-image" />
			<span class="detailing-form-input-span">островное</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="L" type="radio" class="radio-button<?php echo $b24; ?>" />
			<img src="/detailing/images/MODrsp000_4.png" alt="угловое" class="radio-image" />
			<span class="detailing-form-input-span">угловое</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="U" type="radio" class="radio-button<?php echo $b25; ?>" />
			<img src="/detailing/images/MODrsp000_5.png" alt="П-образное" class="radio-image" />
			<span class="detailing-form-input-span">П-образное</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="G" type="radio" class="radio-button<?php echo $b26; ?>" />
			<img src="/detailing/images/MODrsp000_6.png" alt="G-образное" class="radio-image" />
			<span class="detailing-form-input-span">G-образное</span>
		</label>
	</fieldset>
	<a id="MODrsp000"></a>
	<button type="submit" formaction="#MODrsp000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MODrsp000"]) {
	case "linear":
	case "parallel":
	case "insular":
	case "L":
	case "U":
		require 'kitchen_step_00300.php';
		break;
	case "G":
		require 'kitchen_step_00210.php';
		break;
}
?>