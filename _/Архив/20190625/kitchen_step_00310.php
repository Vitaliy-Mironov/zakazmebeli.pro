<?php
// записываем в сессию
if (!empty($_POST["UGLlev001"])) {$_SESSION["UGLlev001"] = $_POST["UGLlev001"];}
// устанавливаем checked на выбор пользователя
if($_REQUEST["UGLlev001"] == "separately") {$b311 = " checked";} elseif ($_SESSION["UGLlev001"] == "separately") {$b311 = " checked";}
if($_REQUEST["UGLlev001"] == "closely") {$b312 = " checked";} elseif ($_SESSION["UGLlev001"] == "closely") {$b312 = " checked";}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input type="checkbox" class="instruction-checkbox" />
			<p class="instruction-p">Так как форма расположения кухни - параллельная, то проделываем те же действия и со вторым, параллельным рядом:</p>
			<p class="instruction-p">Если левый край второго ряда "параллельной" кухни не будет упираться в стену (например, если там будет расположен отдельностоящий холодильник, газовая плита, другая не встраиваемая техника или свободное пространство), - отметьте "отдельно".</p>
			<p class="instruction-p">А, если левая сторона проектируемой кухни будет расположена вплотную к стене, - отметьте "вплотную".</p>
			<?php require 'editban.php'; ?>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Стена слева (ряд 2)</legend>
		<div class="illustration">
			<img src="/detailing/images/MODrsp000_2_L2.png" alt="карта" title="карта" class="radio-image" />
		</div>
		<label class="detailing-form-input-label">
			<input name="UGLlev001" value="separately" type="radio" class="radio-button<?php echo $b311; ?>" />
			<img src="/detailing/images/UGLlev000_2.png" alt="отдельно" class="radio-image" />
			<span class="detailing-form-input-span">отдельно</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="UGLlev001" value="closely" type="radio" class="radio-button<?php echo $b312; ?>" />
			<img src="/detailing/images/UGLlev000_1.png" alt="вплотную" class="radio-image" />
			<span class="detailing-form-input-span">вплотную</span>
		</label>
	</fieldset>
	<a id="UGLlev001"></a>
	<button type="submit" formaction="#UGLlev001" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["UGLlev001"]) {
	case "closely":
	case "separately":
		require 'kitchen_step_00410.php';
		break;
}
?>