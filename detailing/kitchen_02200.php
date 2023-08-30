<?php
// записываем в сессию
if (!empty($_POST["MDTkrs000"])) {$_SESSION["MDTkrs000"] = $_POST["MDTkrs000"];}
// устанавливаем checked на выбор пользователя
if ($_REQUEST["MDTkrs000"] == "imposed") {$b221 = " checked";} elseif ($_SESSION["MDTkrs000"] == "imposed") {$b221 = " checked";}
if ($_REQUEST["MDTkrs000"] == "supplementary") {$b222 = " checked";} elseif ($_SESSION["MDTkrs000"] == "supplementary") {$b222 = " checked";}
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
		<legend class="headline"><?php echo $formcount.'. '; ?>Крышки пеналов</legend>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDTkrs000" value="imposed" type="radio" class="radio-button<?php echo $b221; ?>" />
			<img src="/detailing/images/MDTkrs000_1.png" alt="накладные" class="radio-image" />
			<span class="detailing-form-input-span">накладные</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDTkrs000" value="supplementary" type="radio" class="radio-button<?php echo $b222; ?>" />
			<img src="/detailing/images/MDTkrs000_2.png" alt="вкладные" class="radio-image" />
			<span class="detailing-form-input-span">вкладные</span>
		</label>
	</fieldset>
	<a id="MDTkrs000"></a>
	<button type="submit" formaction="#MDTkrs000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MDTkrs000"]) {
	case "imposed":
	case "supplementary":
		echo '<p class="red">Next Step</p>'; 
		/* require '.php'; */
		break;
}
?>