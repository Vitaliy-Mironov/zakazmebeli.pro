<?php
if (!empty($_POST["UGLvar000"])) {$_SESSION["UGLvar000"] = $_POST["UGLvar000"];} // записываем в сессию
?>
<form class="detailing-form">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">Чтобы кухня стала на своё место ровно, нужно проверить, соответствуют ли углы стен 90&deg;. Если углы не прямые (&gt; или &lt; 90&deg;), программа применит необходимые корректировки.</p>
			<p class="detailing-form-note-p">Самый простой и точный способ измерения угла, - угломером. Если у Вас есть этот инструмент, выбирайте такой вариант.</p>
			<p class="detailing-form-note-p">Если угломера нет, - справимся рулеткой, или другой гибкой линейкой не короче 1 метра. Программа подскажет, что и как измерить, и сама рассчитает результат, чтобы вычислить интересующий нас угол.</p>
		</div>
		<legend class="detailing-form-fieldset-legend">Чем измерим углы?</legend>
		<label class="detailing-form-input-label">
			<input name="UGLvar000" value="угломером" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["UGLvar000"] == "угломером") {echo ' checked';} elseif ($_SESSION["UGLvar000"] == "угломером") {echo ' checked';} ?>" />
			<img src="/detailing/images/UGLvar000_1.png" alt="угломером" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">угломером</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="UGLvar000" value="линейкой" type="radio" class="detailing-form-input-radio<?php if($_REQUEST["UGLvar000"] == "линейкой") {echo ' checked';} elseif ($_SESSION["UGLvar000"] == "линейкой") {echo ' checked';} ?>" />
			<img src="/detailing/images/UGLvar000_2.png" alt="линейкой" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">линейкой</span>
		</label>
	</fieldset>
	<a id="UGLvar000"></a>
	<button type="submit" formaction="#UGLvar000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
echo '<p class="test">$_SESSION["UGLvar000"] == <span>'.$_SESSION["UGLvar000"].'</span></p>'."\n";
switch ($_SESSION["UGLvar000"]) {
	case "угломером":
		echo '<p class="red">Next step</p>';
		break;
	case "линейкой":
		echo '<p class="red">Next step</p>';
		break;
}
?>