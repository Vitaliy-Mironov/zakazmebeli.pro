<?php
if (!empty($_POST["UGLlev000"])) {$_SESSION["UGLlev000"] = $_POST["UGLlev000"];} // записываем в сессию

switch ($_SESSION["MODrsp000"]) {
	case "линейное":
		$a = "1";
		break;
	case "параллельное":
		$a = "2";
		break;
	case "островное":
		$a = "3";
		break;
	case "угловое":
		$a = "4";
		break;
	case "П-образное":
		$a = "5";
		break;
	case "G-образное":
		$a = "6";
		break;
}

if ($_SESSION["MODrsp000"] == "G-образное" && $_SESSION["MODrsp001"] == "зеркальная") {
	$a = "7";
}

if($_REQUEST["UGLlev000"] == "отдельно") {$b31 = " checked";} elseif ($_SESSION["UGLlev000"] == "отдельно") {$b31 = " checked";}
if($_REQUEST["UGLlev000"] == "вплотную") {$b32 = " checked";} elseif ($_SESSION["UGLlev000"] == "вплотную") {$b32 = " checked";}

$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">Если левый край<?php if ($_SESSION["MODrsp000"] == "параллельное") { echo ' первого ряда "параллельной"';} ?> кухни не будет упираться в стену (например, если там будет расположен отдельностоящий холодильник, газовая плита, другая не встраиваемая техника или свободное пространство), - отметьте "отдельно".</p>
			<p class="detailing-form-note-p">А, если левая сторона проектируемой кухни будет расположена вплотную к стене, - отметьте "вплотную".</p>
			<p class="detailing-form-note-p red hidden-message">Доступно редактирование только последнего шага. Для предотвращения ошибок в расчётах, этот блок уже недоступен для изменения. Можно только <button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="detailing-textbutton-cleaning">очистить всё</button> и начать заново.</p>
		</div>
		<legend class="detailing-form-fieldset-legend"><?php echo $formcount.'. '; ?>Стена слева<?php if ($_SESSION["MODrsp000"] == "параллельное") { echo ' (ряд 1)';} ?></legend>
		<div class="detailing-form-map">
			<img src="/detailing/images/MODrsp000_<?php echo $a; ?>_L.png" alt="карта" title="карта" class="detailing-form-input-image" />
		</div>
		<label class="detailing-form-input-label">
			<input name="UGLlev000" value="отдельно" type="radio" class="detailing-form-input-radio<?php echo $b31; ?>" />
			<img src="/detailing/images/UGLlev000_2.png" alt="отдельно" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">отдельно</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="UGLlev000" value="вплотную" type="radio" class="detailing-form-input-radio<?php echo $b32; ?>" />
			<img src="/detailing/images/UGLlev000_1.png" alt="вплотную" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">вплотную</span>
		</label>
	</fieldset>
	<a id="UGLlev000"></a>
	<button type="submit" formaction="#UGLlev000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
switch ($_SESSION["UGLlev000"]) {
	case "вплотную":
	case "отдельно":
		require 'kitchen_step_00400.php';
		break;
}
?>