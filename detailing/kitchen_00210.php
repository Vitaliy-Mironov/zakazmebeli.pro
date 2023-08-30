<?php
// записываем в сессию
if (!empty($_POST["MODrsp001"])) {$_SESSION["MODrsp001"] = $_POST["MODrsp001"];}
// устанавливаем checked на выбор пользователя
if ($_REQUEST["MODrsp001"] == "ordinary") {$b211 = " checked";} elseif ($_SESSION["MODrsp001"] == "ordinary") {$b211 = " checked";}
if ($_REQUEST["MODrsp001"] == "reflection") {$b212 = " checked";} elseif ($_SESSION["MODrsp001"] == "reflection") {$b212 = " checked";}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="instruction-checkbox" />
			<p class="instruction-p">G-образная форма кухни очень специфична. Какой из этих вариантов больше подходит в Вашем случае?</p>
			<?php require 'editban.php'; ?>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Уточнение G-формы</legend>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MODrsp001" value="ordinary" type="radio" class="radio-button<?php echo $b211; ?>" />
			<img src="/detailing/images/MODrsp000_6.png" alt="обычная" class="radio-image" />
			<span class="detailing-form-input-span">обычная</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MODrsp001" value="reflection" type="radio" class="radio-button<?php echo $b212; ?>" />
			<img src="/detailing/images/MODrsp000_7.png" alt="зеркальная" class="radio-image" />
			<span class="detailing-form-input-span">зеркальная</span>
		</label>
	</fieldset>
	<a id="MODrsp001"></a>
	<button type="submit" formaction="#MODrsp001" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MODrsp001"]) {
	case "ordinary":
	case "reflection":
		require 'kitchen_00300.php';
		break;
}
?>