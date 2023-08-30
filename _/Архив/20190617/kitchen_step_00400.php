<?php
if (!empty($_POST["UGLprv000"])) {$_SESSION["UGLprv000"] = $_POST["UGLprv000"];} // записываем в сессию

if($_REQUEST["UGLprv000"] == "вплотную") {$b41 = " checked";} elseif ($_SESSION["UGLprv000"] == "вплотную") {$b41 = " checked";}
if($_REQUEST["UGLprv000"] == "отдельно") {$b42 = " checked";} elseif ($_SESSION["UGLprv000"] == "отдельно") {$b42 = " checked";}

$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">Всё как и в предыдущем случае, только с другим краем:</p>
			<p class="detailing-form-note-p">Если правая сторона<?php if ($_SESSION["MODrsp000"] == "параллельное") { echo ' первого ряда "параллельно"';} ?> проектируемой кухни будет расположена вплотную к стене, - отметьте "вплотную".</p>
			<p class="detailing-form-note-p">Если же правый край кухни не будет упираться в стену (например, если там будет расположен отдельностоящий холодильник, газовая плита, другая не встраиваемая техника или свободное пространство), - отметьте "отдельно".</p>
			<p class="detailing-form-note-p red hidden-message">Доступно редактирование только последнего шага. Для предотвращения ошибок в расчётах, этот блок уже недоступен для изменения. Можно только <button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="detailing-textbutton-cleaning">очистить всё</button> и начать заново.</p>
		</div>
		<legend class="detailing-form-fieldset-legend"><?php echo $formcount.'. '; ?>Стена справа<?php if ($_SESSION["MODrsp000"] == "параллельное") { echo ' (ряд 1)';} ?></legend>
		<div class="detailing-form-map">
			<img src="/detailing/images/MODrsp000_<?php echo $a; ?>_R.png" alt="карта" title="карта" class="detailing-form-input-image" />
		</div>
		<label class="detailing-form-input-label">
			<input name="UGLprv000" value="вплотную" type="radio" class="detailing-form-input-radio<?php echo $b41; ?>" />
			<img src="/detailing/images/UGLprv000_1.png" alt="вплотную" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">вплотную</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="UGLprv000" value="отдельно" type="radio" class="detailing-form-input-radio<?php echo $b42; ?>" />
			<img src="/detailing/images/UGLprv000_2.png" alt="отдельно" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">отдельно</span>
		</label>
	</fieldset>
	<a id="UGLprv000"></a>
	<button type="submit" formaction="#UGLprv000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
if (!empty($_SESSION["UGLprv000"]) && $_SESSION["MODrsp000"] == "параллельное") {
	require 'kitchen_step_00310.php';
} else {
	switch ($_SESSION["UGLprv000"]) {
		case "вплотную":
		case "отдельно":
			require 'kitchen_step_00499.php';
			break;
	}
}
?>