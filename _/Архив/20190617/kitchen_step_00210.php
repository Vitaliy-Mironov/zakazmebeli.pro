<?php
if (!empty($_POST["MODrsp001"])) {$_SESSION["MODrsp001"] = $_POST["MODrsp001"];} // записываем в сессию

if($_REQUEST["MODrsp001"] == "обычная") {$b211 = " checked";} elseif ($_SESSION["MODrsp001"] == "обычная") {$b211 = " checked";}
if($_REQUEST["MODrsp001"] == "зеркальная") {$b212 = " checked";} elseif ($_SESSION["MODrsp001"] == "зеркальная") {$b212 = " checked";}

$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">G-образная форма кухни очень специфична. Какой из этих вариантов больше подходит в Вашем случае?</p>
			<p class="detailing-form-note-p red hidden-message">Доступно редактирование только последнего шага. Для предотвращения ошибок в расчётах, этот блок уже недоступен для изменения. Можно только <button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="detailing-textbutton-cleaning">очистить всё</button> и начать заново.</p>
		</div>
		<legend class="detailing-form-fieldset-legend"><?php echo $formcount.'. '; ?>Уточнение G-формы</legend>
		<label class="detailing-form-input-label">
			<input name="MODrsp001" value="обычная" type="radio" class="detailing-form-input-radio<?php echo $b211; ?>" />
			<img src="/detailing/images/MODrsp000_6.png" alt="обычная" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">обычная</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp001" value="зеркальная" type="radio" class="detailing-form-input-radio<?php echo $b212; ?>" />
			<img src="/detailing/images/MODrsp000_7.png" alt="зеркальная" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">зеркальная</span>
		</label>
	</fieldset>
	<a id="MODrsp001"></a>
	<button type="submit" formaction="#MODrsp001" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
switch ($_SESSION["MODrsp001"]) {
	case "обычная":
	case "зеркальная":
		require 'kitchen_step_00300.php';
		break;
}
?>