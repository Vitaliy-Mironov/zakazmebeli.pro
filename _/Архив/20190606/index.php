<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="utf-8" />
<meta name="robots" content="noindex" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="author" content="Vitaliy Mironov, mironov@n1.by" />
<meta name="copyright" content="Mironov V.A." />
<link rel="shortcut icon" href="/icon.ico" type="image/ico" />
<title>ZakazMebeli.pro | Деталировка v1.0</title>
<meta name="description" content="Быстрый автоматический расчёт деталировки мебели. Просто введите ваши данные (габариты, форму, наполнение, фурнитуру и т.п.) и получите на выходе полный расчёт всего необходимого со всеми размерами." />
<style>
* {margin:0; padding:0;}
html {overflow-y: scroll;}
.detailing_body {background-color:#000; font-family: Verdana, sans-serif;}
.detailing_h1 {padding:10px; background-color:#222; font-size: 24px; color:#fff; font-weight: normal;}
.detailing_div {padding:10px; background-color:#444; font-size: 12px; color:#fff;}
.detailing_div_span {}
.detailing_form {}
.detailing_form_div {}
.detailing_form_div_span {}
.detailing_div_link {color:blue; text-decoration:none;}
.detailing_div_link:hover {text-decoration:underline;}
.detailing_form_select {display:block; float:right; width:300px; height:100%; border:none;}
.detailing_form_select_option {display:block; margin:5px; width:290px; height:290px; outline:none; background-size:contain;}
.detailing_form_select_option:chacked {outline:none;}
.detailing_form_select_option[value="кухня"] {background-image: url(/detailing/images/img1.webp);}
.detailing_form_select_option[value="шкаф-купе"] {background-image: url(/detailing/images/img1.webp);}
.detailing_form_select_option[value="стол"] {background-image: url(/detailing/images/img1.webp);}
.hidden {display:none;}
@media screen and (max-width:767px) {
	.detailing_h1 {font-size: 20px;}
	.detailing_div {font-size: 10px;}
}
</style>
<script>
var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari & Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.mozCancelFullScreen) {
    document.mozCancelFullScreen();
  } else if (document.webkitExitFullscreen) {
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) {
    document.msExitFullscreen();
  }
}
</script>
</head>
<body class="detailing_body">

<h1 class="detailing_h1">Заголовок h1 средней длины</h1>
<div class="detailing_div">Небольшой div текстовой информации, содержащий <span class="detailing_div_span">вложенный span</span>, и <a href="#nogo" class="detailing_div_link">текстовую ссылку</a>, расположенную в предложении. Небольшой div текстовой информации, содержащий <span class="detailing_div_span">вложенный span</span>, и <a href="#nogo" class="detailing_div_link">текстовую ссылку</a>, расположенную в предложении. Небольшой div текстовой информации, содержащий <span class="detailing_div_span">вложенный span</span>, и <a href="#nogo" class="detailing_div_link">текстовую ссылку</a>, расположенную в предложении.<br />
<button onclick="openFullscreen();">Open Fullscreen</button>
<button onclick="closeFullscreen();">Close Fullscreen</button>
</div>

<form action="" autocomplete="on" method="post" class="detailing_form">
	<div class="detailing_form_div"><span class="detailing_form_div_span"></span>
	</div>
	<select size="3" name="MBLvid000" type="text" class="detailing_form_select" required>
		<option value="кухня" class="detailing_form_select_option" selected>кухня</option>
		<option value="шкаф-купе" class="detailing_form_select_option" disabled>шкаф-купе</option>
		<option value="стол" class="detailing_form_select_option" disabled>стол</option>
	</select>
</form>

</body>
</html>


<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$MBLvid000 = $_REQUEST["MBLvid000"];
		if (!empty($MBLvid000)) {
			echo $MBLvid000;
		}
	}
?>