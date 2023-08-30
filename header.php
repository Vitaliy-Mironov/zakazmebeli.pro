<?php require $_SERVER['DOCUMENT_ROOT'].'/styles.php'; ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-150936000-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-150936000-1');
  gtag('set', {'user_id': 'USER_ID'}); // Задание идентификатора пользователя с помощью параметра user_id (текущий пользователь).
</script>
<!-- /Global site tag (gtag.js) - Google Analytics -->
</head>
<body>
<?php
// сброс сессии
$unsess = $_POST["unsess"];
if (!empty($unsess)) {
	session_unset();
}
?>
<header>
<div class="header-container">
	<div class="header-logo" itemscope itemtype="http://schema.org/ImageObject">
		<a href="/" class="header-logo-link"><img src="/img/logo.png" alt="logo" class="header-logo-image" itemprop="contentUrl" /></a>
		<span class="hidden" itemprop="description">ZakazMebeli.pro</span>
	</div>
	<nav class="header-menu">
		<ul>
			<li><a href="/contract/" class="lineline">Договор</a></li>
			<li><a href="/payment/" class="lineline">Оплата</a></li>
			<!-- <li><a href="/instalments/" class="lineline">Рассрочка</a></li> -->
			<li><a href="/contacts/" class="lineline">Контакты</a></li>
		</ul>
	</nav>
	<div class="header-phone">
		<ul>
			<li><a href="tel:+375259298233">+375 25 929-82-33</a></li>
			<li><a href="tel:+375292532530">+375 29 253-253-0</a></li>
		</ul>
	</div>
	<form class="detailing-form colortheme">
		<button name="colortheme" value="#645452" type="submit" formaction="/colortheme.php" formmethod="post" class="detailing-button" style="background-color: #645452;"></button>
		<button name="colortheme" value="LightSlateGray" type="submit" formaction="/colortheme.php" formmethod="post" class="detailing-button" style="background-color: LightSlateGray;"></button>
		<button name="colortheme" value="LightSteelBlue" type="submit" formaction="/colortheme.php" formmethod="post" class="detailing-button" style="background-color: LightSteelBlue;"></button>
		<button name="colortheme" value="LimeGreen" type="submit" formaction="/colortheme.php" formmethod="post" class="detailing-button" style="background-color: LimeGreen;"></button>
		<button name="colortheme" value="DarkTurquoise" type="submit" formaction="/colortheme.php" formmethod="post" class="detailing-button" style="background-color: DarkTurquoise;"></button>
		<button name="colortheme" value="BlueViolet" type="submit" formaction="/colortheme.php" formmethod="post" class="detailing-button" style="background-color: BlueViolet;"></button>
		<button name="colortheme" value="Fuchsia" type="submit" formaction="/colortheme.php" formmethod="post" class="detailing-button" style="background-color: Fuchsia;"></button>
		<button name="colortheme" value="Crimson" type="submit" formaction="/colortheme.php" formmethod="post" class="detailing-button" style="background-color: Crimson;"></button>
		<button name="colortheme" value="Tomato" type="submit" formaction="/colortheme.php" formmethod="post" class="detailing-button" style="background-color: Tomato;"></button>
		<button name="colortheme" value="Gold" type="submit" formaction="/colortheme.php" formmethod="post" class="detailing-button" style="background-color: Gold;"></button>
		<button name="colortheme" value="Wheat" type="submit" formaction="/colortheme.php" formmethod="post" class="detailing-button" style="background-color: Wheat;"></button>
	</form>
</div>
</header>
<?php
// определяем браузер пользователя
$user_agent = $_SERVER["HTTP_USER_AGENT"];
if (strpos($user_agent, "Chrome") !== false) {
	$browser = "Chrome";
}
?>
<div class="main">
<div class="main-container">