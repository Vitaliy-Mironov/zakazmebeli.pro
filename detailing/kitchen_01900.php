<?php
// записываем в сессию
if (!empty($_POST["MDTxxx000"])) {$_SESSION["MDTxxx000"] = $_POST["MDTxxx000"];} // ширина пеналов
if (!empty($_POST["MDTyyy000"])) {$_SESSION["MDTyyy000"] = $_POST["MDTyyy000"];} // высота пеналов
if (!empty($_POST["MDTzzz000"])) {$_SESSION["MDTzzz000"] = $_POST["MDTzzz000"];} // глубина пеналов
if (!empty($_POST["MDTxyz000"])) {$_SESSION["MDTxyz000"] = $_POST["MDTxyz000"];} // контролька
// рассчитываем высоту модуля
$b192r = $_SESSION["MDNyyy000"] + 600 + $_SESSION["MDVyyy000"];
$_SESSION["MDTyyy000"] = $b192r;
// рассчитываем глубину модуля
$b193r = $_SESSION["STLzzz000"] - $_SESSION["STLsvs000"];
$_SESSION["MDTzzz000"] = $b193r;
// отображаем данные в value
if (!empty($_REQUEST["MDTxxx000"])) {$b191 = $_REQUEST["MDTxxx000"];} elseif (!empty($_SESSION["MDTxxx000"])) {$b191 = $_SESSION["MDTxxx000"];} else {$b191 = "600";}
if (!empty($_REQUEST["MDTyyy000"])) {$b192 = $_REQUEST["MDTyyy000"];} elseif (!empty($_SESSION["MDTyyy000"])) {$b192 = $_SESSION["MDTyyy000"];} else {$b192 = $b192r;}
if (!empty($_REQUEST["MDTzzz000"])) {$b193 = $_REQUEST["MDTzzz000"];} elseif (!empty($_SESSION["MDTzzz000"])) {$b193 = $_SESSION["MDTzzz000"];} else {$b193 = $b193r;}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="instruction-checkbox" />
			<p class="instruction-p">.</p>
			<p class="instruction-p">Высота (параметр "Y") определяется без учёта высоты опор и рассчитывается автоматически по формуле: высота нижних модулей, плюс 600 мм (стандартная высота кухонного "фартука"), плюс высота верхних модулей.<br />Будьте внимательны, если захотите изменить этот размер!</p>
			<p class="instruction-p">Глубина (параметр "Z") рассчитывается автоматически по формуле: глубина столешницы, минус передний свес столешницы.<br />Будьте внимательны, если захотите изменить этот размер!</p>
			<?php require 'editban.php'; ?>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Пеналы</legend>
		<div class="illustration">
			<img src="/detailing/images/MDTxyz000.png" alt="пеналы" title="пеналы" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			X. Ширина, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MDTxxx000" type="number" class="textnumber big underline" pattern="[0-9]" min="100" max="1800" value="<?php echo $b191; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Y. Высота, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MDTyyy000" type="number" class="textnumber big underline" pattern="[0-9]" min="100" max="3000" value="<?php echo $b192; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Z. Глубина, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="MDTzzz000" type="number" class="textnumber big underline" pattern="[0-9]" min="100" max="1200" value="<?php echo $b193; ?>" required />
			</label>
		</div>
		<input onkeydown="if(event.keyCode==13){return false;}" name="MDTxyz000" type="text" class="hidden" value="ok" /> <!-- контролька -->
	</fieldset>
	<a id="MDTxyz000"></a>
	<button type="submit" formaction="#MDTxyz000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["MDTxyz000"]) {
	case "ok":
		require 'kitchen_02000.php';
		break;
}
?>