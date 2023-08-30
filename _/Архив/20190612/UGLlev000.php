<?php
if (!empty($_POST["UGLlev000"])) {$_SESSION["UGLlev000"] = $_POST["UGLlev000"];} // записываем в сессию
?>
<form class="detailing-form">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">Если левая сторона проектируемой кухни будет расположена вплотную к стене, - отметьте "вплотную".</p>
			<p class="detailing-form-note-p">Если левый край кухни не будет упираться в стену (например, если там будет расположен отдельностоящий холодильник, газовая плита, другая не встраиваемая техника или свободное пространство), - отметьте "отдельно".</p>
		</div>
		<legend class="detailing-form-fieldset-legend">Стена слева</legend>
		<label class="detailing-form-input-label">
			<input name="UGLlev000" value="вплотную" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["UGLlev000"] == "вплотную") {echo ' checked';} elseif ($_SESSION["UGLlev000"] == "вплотную") {echo ' checked';} ?>" />
			<img src="/detailing/images/UGLlev000_1.png" alt="вплотную" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">вплотную</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="UGLlev000" value="отдельно" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["UGLlev000"] == "отдельно") {echo ' checked';} elseif ($_SESSION["UGLlev000"] == "отдельно") {echo ' checked';} ?>" />
			<img src="/detailing/images/UGLlev000_2.png" alt="отдельно" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">отдельно</span>
		</label>
	</fieldset>
	<a id="UGLlev000"></a>
	<button type="submit" formaction="#UGLlev000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
echo '<p class="test">$_SESSION["UGLlev000"] == <span>'.$_SESSION["UGLlev000"].'</span></p>'."\n";
switch ($_SESSION["UGLlev000"]) {
	case "вплотную":
	case "отдельно":
		require 'UGLprv000.php';
		break;
}
?>