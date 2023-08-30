<?php
// записываем в сессию
if (!empty($_POST["MDVstn000"])) {$_SESSION["MDVstn000"] = $_POST["MDVstn000"];}
// устанавливаем checked на выбор пользователя
if ($_REQUEST["MDVstn000"] == "groove") {$b1211 = " checked";} elseif ($_SESSION["MDVstn000"] == "groove") {$b1211 = " checked";}
if ($_REQUEST["MDVstn000"] == "fourth") {$b1212 = " checked";} elseif ($_SESSION["MDVstn000"] == "fourth") {$b1212 = " checked";}
if ($_REQUEST["MDVstn000"] == "imposed") {$b1213 = " checked";} elseif ($_SESSION["MDVstn000"] == "imposed") {$b1213 = " checked";}
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
		<legend class="headline"><?php echo $formcount.'. '; ?>Стенки верхних модулей</legend>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDVstn000" value="groove" type="radio" class="radio-button<?php echo $b1211; ?>" />
			<img src="/detailing/images/MDVstn000_1.png" alt="в пазах" class="radio-image" />
			<span class="detailing-form-input-span">в пазах</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDVstn000" value="fourth" type="radio" class="radio-button<?php echo $b1212; ?>" />
			<img src="/detailing/images/MDVstn000_2.png" alt="в четверти" class="radio-image" />
			<span class="detailing-form-input-span">в четверти</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MDVstn000" value="imposed" type="radio" class="radio-button<?php echo $b1213; ?>" />
			<img src="/detailing/images/MDVstn000_3.png" alt="накладные" class="radio-image" />
			<span class="detailing-form-input-span">накладные</span>
		</label>
	</fieldset>
	<a id="MDVstn000"></a>
	<button type="submit" formaction="#MDVstn000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MDVstn000"]) {
	case "groove":
	case "fourth":
		require 'kitchen_01220.php';
		break;
	case "imposed":
		require 'kitchen_01300.php';
		break;
}
?>