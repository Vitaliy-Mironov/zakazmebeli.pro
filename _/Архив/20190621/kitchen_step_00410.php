<?php
// записываем в сессию
if (!empty($_POST["UGLprv001"])) {$_SESSION["UGLprv001"] = $_POST["UGLprv001"];}
// устанавливаем checked на выбор пользователя
if($_REQUEST["UGLprv001"] == "closely") {$b411 = " checked";} elseif ($_SESSION["UGLprv001"] == "closely") {$b411 = " checked";}
if($_REQUEST["UGLprv001"] == "separately") {$b412 = " checked";} elseif ($_SESSION["UGLprv001"] == "separately") {$b412 = " checked";}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="direction">
			<input type="checkbox" class="direction-checkbox" />
			<p class="direction-p">Вы уже знаете, что делать. Всё, как и в предыдущих трёх случаях.</p>
			<p class="direction-p red hidden-message">Доступно редактирование только последнего шага. Для предотвращения ошибок в расчётах, этот блок уже недоступен для изменения. Можно только <button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="cleaning-link">очистить всё</button> и начать заново.</p>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Стена справа (ряд 2)</legend>
		<div class="illustration">
			<img src="/detailing/images/MODrsp000_2_R2.png" alt="карта" title="карта" class="radio-image" />
		</div>
		<label class="detailing-form-input-label">
			<input name="UGLprv001" value="closely" type="radio" class="radio-button<?php echo $b411; ?>" />
			<img src="/detailing/images/UGLprv000_1.png" alt="вплотную" class="radio-image" />
			<span class="detailing-form-input-span">вплотную</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="UGLprv001" value="separately" type="radio" class="radio-button<?php echo $b412; ?>" />
			<img src="/detailing/images/UGLprv000_2.png" alt="отдельно" class="radio-image" />
			<span class="detailing-form-input-span">отдельно</span>
		</label>
	</fieldset>
	<a id="UGLprv001"></a>
	<button type="submit" formaction="#UGLprv001" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["UGLprv001"]) {
	case "closely":
	case "separately":
		require 'kitchen_step_00499.php';
		break;
}
?>