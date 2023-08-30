<?php
// записываем в сессию
if (!empty($_POST["UGLlev000"])) {$_SESSION["UGLlev000"] = $_POST["UGLlev000"];}

switch ($_SESSION["MODrsp000"]) {
	case "linear":
		$a = "1";
		break;
	case "parallel":
		$a = "2";
		break;
	case "insular":
		$a = "3";
		break;
	case "L":
		$a = "4";
		break;
	case "U":
		$a = "5";
		break;
	case "G":
		$a = "6";
		break;
}
if ($_SESSION["MODrsp000"] == "G" && $_SESSION["MODrsp001"] == "reflection") {
	$a = "7";
}
// устанавливаем checked на выбор пользователя
if($_REQUEST["UGLlev000"] == "separately") {$b31 = " checked";} elseif ($_SESSION["UGLlev000"] == "separately") {$b31 = " checked";}
if($_REQUEST["UGLlev000"] == "closely") {$b32 = " checked";} elseif ($_SESSION["UGLlev000"] == "closely") {$b32 = " checked";}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="direction">
			<input type="checkbox" class="direction-checkbox" />
			<p class="direction-p">Если левый край<?php if ($_SESSION["MODrsp000"] == "parallel") { echo ' первого ряда "параллельной"';} ?> кухни не будет упираться в стену (например, если там будет расположен отдельностоящий холодильник, газовая плита, другая не встраиваемая техника или свободное пространство), - отметьте "отдельно".</p>
			<p class="direction-p">А, если левая сторона проектируемой кухни будет расположена вплотную к стене, - отметьте "вплотную".</p>
			<p class="direction-p red hidden-message">Доступно редактирование только последнего шага. Для предотвращения ошибок в расчётах, этот блок уже недоступен для изменения. Можно только <button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="cleaning-link">очистить всё</button> и начать заново.</p>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Стена слева<?php if ($_SESSION["MODrsp000"] == "parallel") { echo ' (ряд 1)';} ?></legend>
		<div class="illustration">
			<img src="/detailing/images/MODrsp000_<?php echo $a; ?>_L.png" alt="карта" title="карта" class="radio-image" />
		</div>
		<label class="detailing-form-input-label">
			<input name="UGLlev000" value="separately" type="radio" class="radio-button<?php echo $b31; ?>" />
			<img src="/detailing/images/UGLlev000_2.png" alt="отдельно" class="radio-image" />
			<span class="detailing-form-input-span">отдельно</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="UGLlev000" value="closely" type="radio" class="radio-button<?php echo $b32; ?>" />
			<img src="/detailing/images/UGLlev000_1.png" alt="вплотную" class="radio-image" />
			<span class="detailing-form-input-span">вплотную</span>
		</label>
	</fieldset>
	<a id="UGLlev000"></a>
	<button type="submit" formaction="#UGLlev000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["UGLlev000"]) {
	case "closely":
	case "separately":
		require 'kitchen_step_00400.php';
		break;
}
?>