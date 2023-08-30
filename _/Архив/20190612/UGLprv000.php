<?php
if (!empty($_POST["UGLprv000"])) {$_SESSION["UGLprv000"] = $_POST["UGLprv000"];} // записываем в сессию
?>
<form class="detailing-form">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">Если правая сторона проектируемой кухни будет расположена вплотную к стене, - отметьте "вплотную".</p>
			<p class="detailing-form-note-p">Если правый край кухни не будет упираться в стену (например, если там будет расположен отдельностоящий холодильник, газовая плита, другая не встраиваемая техника или свободное пространство), - отметьте "отдельно".</p>
		</div>
		<legend class="detailing-form-fieldset-legend">Стена справа</legend>
		<label class="detailing-form-input-label">
			<input name="UGLprv000" value="вплотную" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["UGLprv000"] == "вплотную") {echo ' checked';} elseif ($_SESSION["UGLprv000"] == "вплотную") {echo ' checked';} ?>" />
			<img src="/detailing/images/UGLprv000_1.png" alt="вплотную" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">вплотную</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="UGLprv000" value="отдельно" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["UGLprv000"] == "отдельно") {echo ' checked';} elseif ($_SESSION["UGLprv000"] == "отдельно") {echo ' checked';} ?>" />
			<img src="/detailing/images/UGLprv000_2.png" alt="отдельно" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">отдельно</span>
		</label>
	</fieldset>
	<a id="UGLprv000"></a>
	<button type="submit" formaction="#UGLprv000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
echo '<p class="test">$_SESSION["UGLprv000"] == <span>'.$_SESSION["UGLprv000"].'</span></p>'."\n";
switch ($_SESSION["UGLprv000"]) {
	case "вплотную":
		require 'UGLvar000.php';
		break;
	case "отдельно":
		if ($_SESSION["UGLlev000"] == "вплотную") {
			require 'UGLvar000.php';
		} else {
			echo '<p class="red">Next step</p>';
		}
		break;
}
?>