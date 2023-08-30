<?php
if (!empty($_POST["UGLlev001"])) {$_SESSION["UGLlev001"] = $_POST["UGLlev001"];} // записываем в сессию

if($_REQUEST["UGLlev001"] == "отдельно") {$b311 = " checked";} elseif ($_SESSION["UGLlev001"] == "отдельно") {$b311 = " checked";}
if($_REQUEST["UGLlev001"] == "вплотную") {$b312 = " checked";} elseif ($_SESSION["UGLlev001"] == "вплотную") {$b312 = " checked";}

$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">Так как форма расположения кухни - параллельная, то проделываем те же действия и со вторым, параллельным рядом:</p>
			<p class="detailing-form-note-p">Если левый край второго ряда "параллельной" кухни не будет упираться в стену (например, если там будет расположен отдельностоящий холодильник, газовая плита, другая не встраиваемая техника или свободное пространство), - отметьте "отдельно".</p>
			<p class="detailing-form-note-p">А, если левая сторона проектируемой кухни будет расположена вплотную к стене, - отметьте "вплотную".</p>
			<p class="detailing-form-note-p red hidden-message">Доступно редактирование только последнего шага. Для предотвращения ошибок в расчётах, этот блок уже недоступен для изменения. Можно только <button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="detailing-textbutton-cleaning">очистить всё</button> и начать заново.</p>
		</div>
		<legend class="detailing-form-fieldset-legend"><?php echo $formcount.'. '; ?>Стена слева (ряд 2)</legend>
		<div class="detailing-form-map">
			<img src="/detailing/images/MODrsp000_2_L2.png" alt="карта" title="карта" class="detailing-form-input-image" />
		</div>
		<label class="detailing-form-input-label">
			<input name="UGLlev001" value="отдельно" type="radio" class="detailing-form-input-radio<?php echo $b311; ?>" />
			<img src="/detailing/images/UGLlev000_2.png" alt="отдельно" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">отдельно</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="UGLlev001" value="вплотную" type="radio" class="detailing-form-input-radio<?php echo $b312; ?>" />
			<img src="/detailing/images/UGLlev000_1.png" alt="вплотную" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">вплотную</span>
		</label>
	</fieldset>
	<a id="UGLlev001"></a>
	<button type="submit" formaction="#UGLlev001" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
switch ($_SESSION["UGLlev001"]) {
	case "вплотную":
	case "отдельно":
		require 'kitchen_step_00410.php';
		break;
}
?>