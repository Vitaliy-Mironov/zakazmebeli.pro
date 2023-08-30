<?php
// записываем в сессию
if (!empty($_POST["MDNxxx000"])) {$_SESSION["MDNxxx000"] = $_POST["MDNxxx000"];} // ширина нижних модулей
if (!empty($_POST["MDNyyy000"])) {$_SESSION["MDNyyy000"] = $_POST["MDNyyy000"];} // высота нижних модулей
if (!empty($_POST["MDNzzz000"])) {$_SESSION["MDNzzz000"] = $_POST["MDNzzz000"];} // глубина нижних модулей
if (!empty($_POST["MDNxyz000"])) {$_SESSION["MDNxyz000"] = $_POST["MDNxyz000"];} // контролька
// рассчитываем глубину модуля
$b133r = $_SESSION["STLzzz000"] - $_SESSION["STLsvs000"] - $_SESSION["STLsvs001"];
$_SESSION["MDNzzz000"] = $b133r;
// отображаем данные в value
if (!empty($_REQUEST["MDNxxx000"])) {$b131 = $_REQUEST["MDNxxx000"];} elseif (!empty($_SESSION["MDNxxx000"])) {$b131 = $_SESSION["MDNxxx000"];} else {$b131 = "600";}
if (!empty($_REQUEST["MDNyyy000"])) {$b132 = $_REQUEST["MDNyyy000"];} elseif (!empty($_SESSION["MDNyyy000"])) {$b132 = $_SESSION["MDNyyy000"];} else {$b132 = "720";}
if (!empty($_REQUEST["MDNzzz000"])) {$b133 = $_REQUEST["MDNzzz000"];} elseif (!empty($_SESSION["MDNzzz000"])) {$b133 = $_SESSION["MDNzzz000"];} else {$b133 = $b133r;}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="instruction-checkbox" />
			<p class="instruction-p">.</p>
			<p class="instruction-p">Высота (параметр "Y") определяется без учёта высоты (толщины) столешницы и высоты опор.</p>
			<p class="instruction-p">Глубина (параметр "Z") рассчитывается автоматически по формуле: глубина столешницы, минус свесы столешницы.<br />Будьте внимательны, если захотите изменить этот размер!</p>
			<?php require 'editban.php'; ?>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Нижние модули</legend>
		<div class="illustration">
			<img src="/detailing/images/MDNxyz000.png" alt="нижние модули" title="нижние модули" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			X. Ширина, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MDNxxx000" type="number" class="textnumber big underline" pattern="[0-9]" min="100" max="1800" value="<?php echo $b131; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Y. Высота, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MDNyyy000" type="number" class="textnumber big underline" pattern="[0-9]" min="100" max="1000" value="<?php echo $b132; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Z. Глубина, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MDNzzz000" type="number" class="textnumber big underline" pattern="[0-9]" min="100" max="1200" value="<?php echo $b133; ?>" required />
			</label>
		</div>
		<input onkeydown="if(event.keyCode==13){return false;}" name="MDNxyz000" type="text" class="hidden" value="ok" /> <!-- контролька -->
	</fieldset>
	<a id="MDNxyz000"></a>
	<button type="submit" formaction="#MDNxyz000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MDNxyz000"]) {
	case "ok":
		require 'kitchen_01400.php';
		break;
}
?>