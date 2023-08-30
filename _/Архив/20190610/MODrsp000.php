<?php
if (!empty($_POST["MODrsp000"])) {$_SESSION["MODrsp000"] = $_POST["MODrsp000"];} // записываем в сессию
echo '<p class="test">$_SESSION["MODrsp000"] == <span>'.$_SESSION["MODrsp000"].'</span></p>'."\n";
?>
<form class="detailing-form">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">Text.</p>
		</div>
		<legend class="detailing-form-fieldset-legend">Расположение модулей</legend>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="линейное" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["MODrsp000"] == "линейное") {echo ' checked';} elseif ($_SESSION["MODrsp000"] == "линейное") {echo ' checked';} ?>" />
			<img src="/detailing/images/MODrsp000_1.png" alt="" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">линейное</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="параллельное" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["MODrsp000"] == "параллельное") {echo ' checked';} elseif ($_SESSION["MODrsp000"] == "параллельное") {echo ' checked';} ?>" disabled />
			<img src="/detailing/images/MODrsp000_2.png" alt="" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">параллельное</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="островное" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["MODrsp000"] == "островное") {echo ' checked';} elseif ($_SESSION["MODrsp000"] == "островное") {echo ' checked';} ?>" disabled />
			<img src="/detailing/images/MODrsp000_3.png" alt="" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">островное</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="угловое" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["MODrsp000"] == "угловое") {echo ' checked';} elseif ($_SESSION["MODrsp000"] == "угловое") {echo ' checked';} ?>" disabled />
			<img src="/detailing/images/MODrsp000_4.png" alt="" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">угловое</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="П-образное" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["MODrsp000"] == "П-образное") {echo ' checked';} elseif ($_SESSION["MODrsp000"] == "П-образное") {echo ' checked';} ?>" disabled />
			<img src="/detailing/images/MODrsp000_5.png" alt="" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">П-образное</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="MODrsp000" value="G-образное" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["MODrsp000"] == "G-образное") {echo ' checked';} elseif ($_SESSION["MODrsp000"] == "G-образное") {echo ' checked';} ?>" disabled />
			<img src="/detailing/images/MODrsp000_6.png" alt="" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">G-образное</span>
		</label>
	</fieldset>
	<a id="MODrsp000"></a>
	<button type="submit" formaction="#MODrsp000" formmethod="post" class="detailing-form-button">Применить</button>
</form>