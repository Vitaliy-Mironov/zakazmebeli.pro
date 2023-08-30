<?php
if (!empty($_POST["UGLprv001"])) {$_SESSION["UGLprv001"] = $_POST["UGLprv001"];} // записываем в сессию

if($_REQUEST["UGLprv001"] == "вплотную") {$b411 = " checked";} elseif ($_SESSION["UGLprv001"] == "вплотную") {$b411 = " checked";}
if($_REQUEST["UGLprv001"] == "отдельно") {$b412 = " checked";} elseif ($_SESSION["UGLprv001"] == "отдельно") {$b412 = " checked";}

$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">Вы уже знаете, что делать. Всё, как и в предыдущих трёх случаях.</p>
			<p class="detailing-form-note-p red hidden-message">Доступно редактирование только последнего шага. Для предотвращения ошибок в расчётах, этот блок уже недоступен для изменения. Можно только <button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="detailing-textbutton-cleaning">очистить всё</button> и начать заново.</p>
		</div>
		<legend class="detailing-form-fieldset-legend"><?php echo $formcount.'. '; ?>Стена справа (ряд 2)</legend>
		<div class="detailing-form-map">
			<img src="/detailing/images/MODrsp000_2_R2.png" alt="карта" title="карта" class="detailing-form-input-image" />
		</div>
		<label class="detailing-form-input-label">
			<input name="UGLprv001" value="вплотную" type="radio" class="detailing-form-input-radio<?php echo $b411; ?>" />
			<img src="/detailing/images/UGLprv000_1.png" alt="вплотную" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">вплотную</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="UGLprv001" value="отдельно" type="radio" class="detailing-form-input-radio<?php echo $b412; ?>" />
			<img src="/detailing/images/UGLprv000_2.png" alt="отдельно" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">отдельно</span>
		</label>
	</fieldset>
	<a id="UGLprv001"></a>
	<button type="submit" formaction="#UGLprv001" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
switch ($_SESSION["UGLprv001"]) {
	case "вплотную":
	case "отдельно":
		require 'kitchen_step_00499.php';
		break;
}
?>