<?php
// записываем в сессию
if (!empty($_POST["UGLazd000"])) {$_SESSION["UGLazd000"] = $_POST["UGLazd000"];} // длина 1 (a-d)
if (!empty($_POST["UGLdzg000"])) {$_SESSION["UGLdzg000"] = $_POST["UGLdzg000"];} // длина 2 (d-g)
if (!empty($_POST["UGLgzj000"])) {$_SESSION["UGLgzj000"] = $_POST["UGLgzj000"];} // длина 3 (g-j)
if (!empty($_POST["UGLjzm000"])) {$_SESSION["UGLjzm000"] = $_POST["UGLjzm000"];} // длина 4 (j-m)
if (!empty($_POST["UGLxzx000"])) {$_SESSION["UGLxzx000"] = $_POST["UGLxzx000"];} // контролька
// отображаем данные в value
if(!empty($_REQUEST["UGLazd000"])) {$b71 = $_REQUEST["UGLazd000"];} elseif (!empty($_SESSION["UGLazd000"])) {$b71 = $_SESSION["UGLazd000"];}
if(!empty($_REQUEST["UGLdzg000"])) {$b72 = $_REQUEST["UGLdzg000"];} elseif (!empty($_SESSION["UGLdzg000"])) {$b72 = $_SESSION["UGLdzg000"];}
if(!empty($_REQUEST["UGLgzj000"])) {$b73 = $_REQUEST["UGLgzj000"];} elseif (!empty($_SESSION["UGLgzj000"])) {$b73 = $_SESSION["UGLgzj000"];}
if(!empty($_REQUEST["UGLjzm000"])) {$b74 = $_REQUEST["UGLjzm000"];} elseif (!empty($_SESSION["UGLjzm000"])) {$b74 = $_SESSION["UGLjzm000"];}
// отображаем только необходимое кол-во сторон, остальные скрываем
switch ($a) {
	case "1": // линейное
	case "3": // островное
		$c = 1;
		break;
	case "2": // параллельное
	case "4": // угловое
		$c = 2;
		break;
	case "5":  // П-образное
		$c = 3;
		break;
	case "6": // G-образное
	case "7": // G-образное зеркальная
		$c = 4;
		break;
}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="direction">
			<input type="checkbox" class="direction-checkbox" />
			<p class="direction-p">Измерьте и запишите указанное на изображении расстояние (в миллиметрах).</p>
			<p class="direction-p"><a href="kak-pravilno-izmerit-razmery-pod-kuhnyu.php" class="direction-p-link icon-doc">Как правильно измерить размеры под кухню, и какие моменты учесть?</a></p>
			<p class="direction-p red hidden-message">Доступно редактирование только последнего шага. Для предотвращения ошибок в расчётах, этот блок уже недоступен для изменения. Можно только <button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="cleaning-link">очистить всё</button> и начать заново.</p>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Размеры</legend>
		<div class="illustration">
			<img src="/detailing/images/UGLxzx000_<?php echo $a.'_'.$ver; ?>.png" alt="карта" title="карта" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Размер 1 (мм): <input name="UGLazd000" type="number" class="textnumber big underline" pattern="[0-9]" min="1" max="10000" value="<?php echo $b71; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div<?php if ($c < 2) {echo ' hidden';} ?>">
			<label class="textlabel big">
			Размер 2 (мм): <input name="UGLdzg000" type="number" class="textnumber big underline" pattern="[0-9]" min="1" max="10000" value="<?php echo $b72; ?>"<?php if ($c >= 2) {echo ' required';} ?> />
			</label>
		</div>
		<div class="detailing-form-input-div<?php if ($c < 3) {echo ' hidden';} ?>">
			<label class="textlabel big">
			Размер 3 (мм): <input name="UGLgzj000" type="number" class="textnumber big underline" pattern="[0-9]" min="1" max="10000" value="<?php echo $b73; ?>"<?php if ($c >= 3) {echo ' required';} ?> />
			</label>
		</div>
		<div class="detailing-form-input-div<?php if ($c < 4) {echo ' hidden';} ?>">
			<label class="textlabel big">
			Размер 4 (мм): <input name="UGLjzm000" type="number" class="textnumber big underline" pattern="[0-9]" min="1" max="10000" value="<?php echo $b74; ?>"<?php if ($c >= 4) {echo ' required';} ?> />
			</label>
		</div>
		<input name="UGLxzx000" type="text" class="hidden" value="ok" /> <!-- контролька -->
	</fieldset>
	<a id="UGLxzx000"></a>
	<button type="submit" formaction="#UGLxzx000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["UGLxzx000"]) {
	case "ok":
		echo '<p class="red">Next Step</p>'; 
		/* require '.php'; */
		break;
}
?>