<?php
// записываем в сессию
if (!empty($_POST["MBLkit000"])) {$_SESSION["MBLkit000"] = $_POST["MBLkit000"];}
// устанавливаем checked на выбор пользователя
if ($_REQUEST["MBLkit000"] == "full") {$b11 = " checked";} elseif ($_SESSION["MBLkit000"] == "full") {$b11 = " checked";}
if ($_REQUEST["MBLkit000"] == "botom-and-top") {$b12 = " checked";} elseif ($_SESSION["MBLkit000"] == "botom-and-top") {$b12 = " checked";}
if ($_REQUEST["MBLkit000"] == "bottom-only") {$b13 = " checked";} elseif ($_SESSION["MBLkit000"] == "bottom-only") {$b13 = " checked";}
if ($_REQUEST["MBLkit000"] == "solo-bottom-module") {$b14 = " checked";} elseif ($_SESSION["MBLkit000"] == "solo-bottom-module") {$b14 = " checked";}
if ($_REQUEST["MBLkit000"] == "solo-top-module") {$b15 = " checked";} elseif ($_SESSION["MBLkit000"] == "solo-top-module") {$b15 = " checked";}
if ($_REQUEST["MBLkit000"] == "solo-tower-module") {$b16 = " checked";} elseif ($_SESSION["MBLkit000"] == "solo-tower-module") {$b16 = " checked";}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="instruction-checkbox" />
			<p class="instruction-p">Если в проекте Вашей кухни предусмотрены и напольные модули, и настенные, и пеналы, - то выбирайте вариант "всё".</p>
			<p class="instruction-p">Если Вам нужна деталировка только напольных и настенных модулей, - вариант "низ и верх".</p>
			<p class="instruction-p">Только напольные модули, без верхних шкафчиков и пеналов, - отметьте вариант "только низ".</p>
			<p class="instruction-p">Если нужно рассчитать деталировку только одного модуля (напольного, настенного или пенала), - выберите соответственно "нижний модуль", "верхний модуль", или "пенал".</p>
			<?php require 'editban.php'; ?>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Что проектируем?</legend>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MBLkit000" value="full" type="radio" class="radio-button<?php echo $b11; ?>" />
			<img src="/detailing/images/MBLkit000_1.png" alt="всё" class="radio-image" />
			<span class="detailing-form-input-span">всё</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MBLkit000" value="botom-and-top" type="radio" class="radio-button<?php echo $b12; ?>" />
			<img src="/detailing/images/MBLkit000_2.png" alt="низ и верх" class="radio-image" />
			<span class="detailing-form-input-span">низ и верх</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MBLkit000" value="bottom-only" type="radio" class="radio-button<?php echo $b13; ?>" />
			<img src="/detailing/images/MBLkit000_3.png" alt="только низ" class="radio-image" />
			<span class="detailing-form-input-span">только низ</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MBLkit000" value="solo-bottom-module" type="radio" class="radio-button<?php echo $b14; ?>" />
			<img src="/detailing/images/MBLkit000_4.png" alt="нижний модуль" class="radio-image" />
			<span class="detailing-form-input-span">нижний модуль</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MBLkit000" value="solo-top-module" type="radio" class="radio-button<?php echo $b15; ?>" />
			<img src="/detailing/images/MBLkit000_5.png" alt="верхний модуль" class="radio-image" />
			<span class="detailing-form-input-span">верхний модуль</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="MBLkit000" value="solo-tower-module" type="radio" class="radio-button<?php echo $b16; ?>" />
			<img src="/detailing/images/MBLkit000_6.png" alt="пенал" class="radio-image" />
			<span class="detailing-form-input-span">пенал</span>
		</label>
	</fieldset>
	<a id="MBLkit000"></a>
	<button type="submit" formaction="#MBLkit000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MBLkit000"]) {
	case "full":
	case "botom-and-top":
	case "bottom-only":
		require 'kitchen_00200.php';
		break;
	case "solo-bottom-module":
	case "solo-top-module":
	case "solo-tower-module":
		echo '<p class="red">Next Step</p>';
		break;
}
?>