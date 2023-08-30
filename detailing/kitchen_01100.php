<?php
// записываем в сессию
if (!empty($_POST["MDVfas000"])) {$_SESSION["MDVfas000"] = $_POST["MDVfas000"];}
// устанавливаем checked на выбор пользователя
if ($_REQUEST["MDVfas000"] == "imposed") {$b111 = " checked";} elseif ($_SESSION["MDVfas000"] == "imposed") {$b111 = " checked";}
if ($_REQUEST["MDVfas000"] == "supplementary") {$b112 = " checked";} elseif ($_SESSION["MDVfas000"] == "supplementary") {$b112 = " checked";}
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
		<legend class="headline"><?php echo $formcount.'. '; ?>Фасады верхних модулей</legend>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDVfas000" value="imposed" type="radio" class="radio-button<?php echo $b111; ?>" />
			<img src="/detailing/images/MDVfas000_1.png" alt="накладные" class="radio-image" />
			<span class="detailing-form-input-span">накладные</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDVfas000" value="supplementary" type="radio" class="radio-button<?php echo $b112; ?>" />
			<img src="/detailing/images/MDVfas000_2.png" alt="вкладные" class="radio-image" />
			<span class="detailing-form-input-span">вкладные</span>
		</label>
	</fieldset>
	<a id="MDVfas000"></a>
	<button type="submit" formaction="#MDVfas000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MDVfas000"]) {
	case "imposed":
	case "supplementary":
		require 'kitchen_01200.php';
		break;
}
?>