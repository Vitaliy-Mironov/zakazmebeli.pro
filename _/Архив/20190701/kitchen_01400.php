<?php
// записываем в сессию
if (!empty($_POST["MDNfas000"])) {$_SESSION["MDNfas000"] = $_POST["MDNfas000"];}
// устанавливаем checked на выбор пользователя
if ($_REQUEST["MDNfas000"] == "imposed") {$b141 = " checked";} elseif ($_SESSION["MDNfas000"] == "imposed") {$b141 = " checked";}
if ($_REQUEST["MDNfas000"] == "supplementary") {$b142 = " checked";} elseif ($_SESSION["MDNfas000"] == "supplementary") {$b142 = " checked";}
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
		<legend class="headline"><?php echo $formcount.'. '; ?>Нижние фасады</legend>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDNfas000" value="imposed" type="radio" class="radio-button<?php echo $b141; ?>" />
			<img src="/detailing/images/MDNfas000_1.png" alt="накладные" class="radio-image" />
			<span class="detailing-form-input-span">накладные</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDNfas000" value="supplementary" type="radio" class="radio-button<?php echo $b142; ?>" />
			<img src="/detailing/images/MDNfas000_2.png" alt="вкладные" class="radio-image" />
			<span class="detailing-form-input-span">вкладные</span>
		</label>
	</fieldset>
	<a id="MDNfas000"></a>
	<button type="submit" formaction="#MDNfas000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MDNfas000"]) {
	case "imposed":
	case "supplementary":
		require 'kitchen_01500.php';
		break;
}
?>