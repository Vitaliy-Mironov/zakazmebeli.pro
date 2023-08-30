<?php
// записываем в сессию
if (!empty($_POST["UGLprv000"])) {$_SESSION["UGLprv000"] = $_POST["UGLprv000"];}
// устанавливаем checked на выбор пользователя
if($_REQUEST["UGLprv000"] == "closely") {$b41 = " checked";} elseif ($_SESSION["UGLprv000"] == "closely") {$b41 = " checked";}
if($_REQUEST["UGLprv000"] == "separately") {$b42 = " checked";} elseif ($_SESSION["UGLprv000"] == "separately") {$b42 = " checked";}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="direction">
			<input type="checkbox" class="direction-checkbox" />
			<p class="direction-p">Всё как и в предыдущем случае, только с другим краем:</p>
			<p class="direction-p">Если правая сторона<?php if ($_SESSION["MODrsp000"] == "parallel") { echo ' первого ряда "параллельно"';} ?> проектируемой кухни будет расположена вплотную к стене, - отметьте "вплотную".</p>
			<p class="direction-p">Если же правый край кухни не будет упираться в стену (например, если там будет расположен отдельностоящий холодильник, газовая плита, другая не встраиваемая техника или свободное пространство), - отметьте "отдельно".</p>
			<p class="direction-p red hidden-message">Доступно редактирование только последнего шага. Для предотвращения ошибок в расчётах, этот блок уже недоступен для изменения. Можно только <button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="cleaning-link">очистить всё</button> и начать заново.</p>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Стена справа<?php if ($_SESSION["MODrsp000"] == "parallel") { echo ' (ряд 1)';} ?></legend>
		<div class="illustration">
			<img src="/detailing/images/MODrsp000_<?php echo $a; ?>_R.png" alt="карта" title="карта" class="radio-image" />
		</div>
		<label class="detailing-form-input-label">
			<input name="UGLprv000" value="closely" type="radio" class="radio-button<?php echo $b41; ?>" />
			<img src="/detailing/images/UGLprv000_1.png" alt="вплотную" class="radio-image" />
			<span class="detailing-form-input-span">вплотную</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="UGLprv000" value="separately" type="radio" class="radio-button<?php echo $b42; ?>" />
			<img src="/detailing/images/UGLprv000_2.png" alt="отдельно" class="radio-image" />
			<span class="detailing-form-input-span">отдельно</span>
		</label>
	</fieldset>
	<a id="UGLprv000"></a>
	<button type="submit" formaction="#UGLprv000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
if (!empty($_SESSION["UGLprv000"]) && $_SESSION["MODrsp000"] == "parallel") {
	require 'kitchen_step_00310.php';
} else {
	switch ($_SESSION["UGLprv000"]) {
		case "closely":
		case "separately":
			require 'kitchen_step_00499.php';
			break;
	}
}
?>