<?php
// записываем в сессию
if (!empty($_POST["MDTfas000"])) {$_SESSION["MDTfas000"] = $_POST["MDTfas000"];}
// устанавливаем checked на выбор пользователя
if ($_REQUEST["MDTfas000"] == "imposed") {$b201 = " checked";} elseif ($_SESSION["MDTfas000"] == "imposed") {$b201 = " checked";}
if ($_REQUEST["MDTfas000"] == "supplementary") {$b202 = " checked";} elseif ($_SESSION["MDTfas000"] == "supplementary") {$b202 = " checked";}
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
		<legend class="headline"><?php echo $formcount.'. '; ?>Фасады пеналов</legend>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDTfas000" value="imposed" type="radio" class="radio-button<?php echo $b201; ?>" />
			<img src="/detailing/images/MDTfas000_1.png" alt="накладные" class="radio-image" />
			<span class="detailing-form-input-span">накладные</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDTfas000" value="supplementary" type="radio" class="radio-button<?php echo $b202; ?>" />
			<img src="/detailing/images/MDTfas000_2.png" alt="вкладные" class="radio-image" />
			<span class="detailing-form-input-span">вкладные</span>
		</label>
	</fieldset>
	<a id="MDTfas000"></a>
	<button type="submit" formaction="#MDTfas000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MDTfas000"]) {
	case "imposed":
	case "supplementary":
		require 'kitchen_02100.php';
		break;
}
?>