<?php
// записываем в сессию
if (!empty($_POST["MDNdno000"])) {$_SESSION["MDNdno000"] = $_POST["MDNdno000"];}
// устанавливаем checked на выбор пользователя
if ($_REQUEST["MDNdno000"] == "imposed") {$b161 = " checked";} elseif ($_SESSION["MDNdno000"] == "imposed") {$b161 = " checked";}
if ($_REQUEST["MDNdno000"] == "supplementary") {$b162 = " checked";} elseif ($_SESSION["MDNdno000"] == "supplementary") {$b162 = " checked";}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="instruction-checkbox" />
			<p class="instruction-p">Укажите, какой вариант расположения дна у напольных модулей Вы хотите использовать.</p>
			<p class="instruction-p"><a href="nakladnoe-ili-vkladnoe-dno?-plyusy-i-minusy-togo-i-drugogo.php" class="instruction-p-link icon-doc" target="_blank">Накладное или вкладное дно? Плюсы и минусы того и другого.</a></p>
			<?php require 'editban.php'; ?>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Расположение дна</legend>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDNdno000" value="imposed" type="radio" class="radio-button<?php echo $b161; ?>" />
			<img src="/detailing/images/MDNdno000_1.png" alt="накладное" class="radio-image" />
			<span class="detailing-form-input-span">накладное</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDNdno000" value="supplementary" type="radio" class="radio-button<?php echo $b162; ?>" />
			<img src="/detailing/images/MDNdno000_2.png" alt="вкладное" class="radio-image" />
			<span class="detailing-form-input-span">вкладное</span>
		</label>
	</fieldset>
	<a id="MDNdno000"></a>
	<button type="submit" formaction="#MDNdno000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MDNdno000"]) {
	case "imposed":
	case "supplementary":
		require 'kitchen_01700.php';
		break;
}
?>