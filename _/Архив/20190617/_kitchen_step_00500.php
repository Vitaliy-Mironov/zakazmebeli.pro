<?php
if (!empty($_POST["UGLvar000"])) {$_SESSION["UGLvar000"] = $_POST["UGLvar000"];} // записываем в сессию

if($_REQUEST["UGLvar000"] == "угломером") {$b51 = " checked";} elseif ($_SESSION["UGLvar000"] == "угломером") {$b51 = " checked";}
if($_REQUEST["UGLvar000"] == "линейкой") {$b52 = " checked";} elseif ($_SESSION["UGLvar000"] == "линейкой") {$b52 = " checked";}

$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="detailing-form-note">
			<input type="checkbox" class="detailing-form-note-checkbox" />
			<p class="detailing-form-note-p">Чтобы мебель стала на своё место ровно, нужно проверить, соответствуют ли углы стен 90&deg;. Если углы не прямые (&gt; или &lt; 90&deg;), программа применит необходимые корректировки.</p>
			<p class="detailing-form-note-p">Самый простой и точный способ измерения угла, - угломером. Если у Вас есть этот инструмент, выбирайте такой вариант.</p>
			<p class="detailing-form-note-p">Если угломера нет, - можно обойтись рулеткой, или другой гибкой линейкой не короче 1 метра. Программа подскажет, что и как измерить, и сама рассчитает результат, чтобы вычислить интересующий нас угол.</p>
			<p class="detailing-form-note-p red hidden-message">Доступно редактирование только последнего шага. Для предотвращения ошибок в расчётах, этот блок уже недоступен для изменения. Можно только <button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="detailing-textbutton-cleaning">очистить всё</button> и начать заново.</p>
		</div>
		<legend class="detailing-form-fieldset-legend"><?php echo $formcount.'. '; ?>Чем измерим углы?</legend>
		<label class="detailing-form-input-label">
			<input name="UGLvar000" value="угломером" type="radio" class="detailing-form-input-radio<?php echo $b51; ?>" />
			<img src="/detailing/images/UGLvar000_1.png" alt="угломером" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">угломером</span>
		</label>
		<label class="detailing-form-input-label">
			<input name="UGLvar000" value="линейкой" type="radio" class="detailing-form-input-radio<?php echo $b52; ?>" disabled />
			<img src="/detailing/images/UGLvar000_2.png" alt="линейкой" class="detailing-form-input-image" />
			<span class="detailing-form-input-span">линейкой</span>
		</label>
	</fieldset>
	<a id="UGLvar000"></a>
	<button type="submit" formaction="#UGLvar000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
switch ($_SESSION["UGLvar000"]) {
	case "угломером":
		require 'kitchen_step_00600.php';
		break;
	case "линейкой":
		require 'kitchen_step_00610.php';
		break;
}
?>