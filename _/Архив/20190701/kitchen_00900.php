<?php
// записываем в сессию
if (!empty($_POST["STLzzz000"])) {$_SESSION["STLzzz000"] = $_POST["STLzzz000"];} // глубина столешницы
if (!empty($_POST["STLtol000"])) {$_SESSION["STLtol000"] = $_POST["STLtol000"];} // толщина столешницы
if (!empty($_POST["STLsvs000"])) {$_SESSION["STLsvs000"] = $_POST["STLsvs000"];} // передний свес столешницы
if (!empty($_POST["STLsvs001"])) {$_SESSION["STLsvs001"] = $_POST["STLsvs001"];} // задний свес столешницы
if (!empty($_POST["STLksb000"])) {$_SESSION["STLksb000"] = $_POST["STLksb000"];} // толщина каплесборника столешницы
if (!empty($_POST["STLall000"])) {$_SESSION["STLall000"] = $_POST["STLall000"];} // контролька
// отображаем данные в value
if (!empty($_REQUEST["STLzzz000"])) {$b91 = $_REQUEST["STLzzz000"];} elseif (!empty($_SESSION["STLzzz000"])) {$b91 = $_SESSION["STLzzz000"];} else {$b91 = "600";}
if (!empty($_REQUEST["STLtol000"])) {$b92 = $_REQUEST["STLtol000"];} elseif (!empty($_SESSION["STLtol000"])) {$b92 = $_SESSION["STLtol000"];} else {$b92 = "38";}
if (!empty($_REQUEST["STLsvs000"])) {$b93 = $_REQUEST["STLsvs000"];} elseif (!empty($_SESSION["STLsvs000"])) {$b93 = $_SESSION["STLsvs000"];} else {$b93 = "20";}
if (!empty($_REQUEST["STLsvs001"])) {$b94 = $_REQUEST["STLsvs001"];} elseif (!empty($_SESSION["STLsvs001"])) {$b94 = $_SESSION["STLsvs001"];} else {$b94 = "5";}
if (!empty($_REQUEST["STLksb000"])) {$b95 = $_REQUEST["STLksb000"];} elseif (!empty($_SESSION["STLksb000"])) {$b95 = $_SESSION["STLksb000"];} else {$b95 = "2.0";}
// увеличиваем счётчик fieldset > legend
$formcount++;
?>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="instruction-checkbox" />
			<p class="instruction-p">.</p>
			<p class="instruction-p"><a href="kaplesbornik-zachem-on-nuzhen-i-chto-delat-esli-na-stoleshnice-ego-net.php" class="instruction-p-link icon-doc" target="_blank">Каплесборник. Зачем он нужен и что делать, если на столешнице его нет?</a></p>
			<?php require 'editban.php'; ?>
		</div>
		<legend class="headline"><?php echo $formcount.'. '; ?>Столешница</legend>
		<div class="illustration">
			<img src="/detailing/images/STLall000.png" alt="столешница" title="столешница" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			A. Глубина, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="STLzzz000" type="number" class="textnumber big underline" pattern="[0-9]" min="100" max="1200" value="<?php echo $b91; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			B. Толщина, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="STLtol000" type="number" class="textnumber big underline" pattern="[0-9]" min="10" max="100" value="<?php echo $b92; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			C. Передний свес, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="STLsvs000" type="number" class="textnumber big underline" pattern="[0-9]" min="0" max="600" value="<?php echo $b93; ?>" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			D. Задний свес, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="STLsvs001" type="number" class="textnumber big underline" pattern="[0-9]" min="0" max="600" value="<?php echo $b94; ?>" required />
			</label>
		</div>
		<hr class="line" />
		<div class="illustration">
			<img src="/detailing/images/STLksb000.png" alt="каплесборник" title="каплесборник" class="radio-image" />
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Каплесборник, мм: <input onkeydown="if(event.keyCode==13){return false;}" name="STLksb000" type="text" class="textnumber big underline" pattern="[0-9]{1}.[0-9]{1}" value="<?php echo $b95; ?>" required />
			</label>
		</div>
		<input onkeydown="if(event.keyCode==13){return false;}" name="STLall000" type="text" class="hidden" value="ok" /> <!-- контролька -->
	</fieldset>
	<a id="STLall000"></a>
	<button type="submit" formaction="#STLall000" formmethod="post" class="detailing-form-button">Применить</button>
</form>
<?php
// определяем следующее действие
switch ($_SESSION["STLall000"]) {
	case "ok":
		require 'kitchen_01000.php';
		break;
}
?>