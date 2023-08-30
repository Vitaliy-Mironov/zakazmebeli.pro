<?php
if (!empty($_POST["MODrsp000"])) {$_SESSION["MODrsp000"] = $_POST["MODrsp000"];} // записываем в сессию

if($_REQUEST["MODrsp000"] == "линейное") {$b21 = " checked";} elseif ($_SESSION["MODrsp000"] == "линейное") {$b21 = " checked";}
if($_REQUEST["MODrsp000"] == "параллельное") {$b22 = " checked";} elseif ($_SESSION["MODrsp000"] == "параллельное") {$b22 = " checked";}
if($_REQUEST["MODrsp000"] == "островное") {$b23 = " checked";} elseif ($_SESSION["MODrsp000"] == "островное") {$b23 = " checked";}
if($_REQUEST["MODrsp000"] == "угловое") {$b24 = " checked";} elseif ($_SESSION["MODrsp000"] == "угловое") {$b24 = " checked";}
if($_REQUEST["MODrsp000"] == "П-образное") {$b25 = " checked";} elseif ($_SESSION["MODrsp000"] == "П-образное") {$b25 = " checked";}
if($_REQUEST["MODrsp000"] == "G-образное") {$b26 = " checked";} elseif ($_SESSION["MODrsp000"] == "G-образное") {$b26 = " checked";}

$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">Укажите форму проектируемой кухни.</p>
			<p class="detailing-form-note-p red hidden-message">Доступно редактирование только последнего шага. Для предотвращения ошибок в расчётах, этот блок уже недоступен для изменения. Можно только <button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="detailing-textbutton-cleaning">очистить всё</button> и начать заново.</p>
		</div>
		<legend class="detailing-form-fieldset-legend"><?php echo $formcount.'. '; ?>Расположение</legend>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="линейное" type="radio" class="detailing-form-input-radio<?php echo $b21; ?>" />
			<img src="/detailing/images/MODrsp000_1.png" alt="линейное" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">линейное</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="параллельное" type="radio" class="detailing-form-input-radio<?php echo $b22; ?>" />
			<img src="/detailing/images/MODrsp000_2.png" alt="параллельное" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">параллельное</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="островное" type="radio" class="detailing-form-input-radio<?php echo $b23; ?>" />
			<img src="/detailing/images/MODrsp000_3.png" alt="островное" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">островное</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="угловое" type="radio" class="detailing-form-input-radio<?php echo $b24; ?>" />
			<img src="/detailing/images/MODrsp000_4.png" alt="угловое" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">угловое</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="П-образное" type="radio" class="detailing-form-input-radio<?php echo $b25; ?>" />
			<img src="/detailing/images/MODrsp000_5.png" alt="П-образное" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">П-образное</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="G-образное" type="radio" class="detailing-form-input-radio<?php echo $b26; ?>" />
			<img src="/detailing/images/MODrsp000_6.png" alt="G-образное" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">G-образное</span>
		</label>
	</fieldset>
	<a id="MODrsp000"></a>
	<button type="submit" formaction="#MODrsp000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
switch ($_SESSION["MODrsp000"]) {
	case "линейное":
	case "параллельное":
	case "островное":
	case "угловое":
	case "П-образное":
		require 'kitchen_step_00300.php';
		break;
	case "G-образное":
		require 'kitchen_step_00210.php';
		break;
}
?>