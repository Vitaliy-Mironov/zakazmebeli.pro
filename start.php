<?php
ini_set('session.gc_maxlifetime', 86400); // время жизни сессии == сутки
ini_set('session.cookie_lifetime', 0);
session_set_cookie_params(0);

ini_set('session.save_path', $_SERVER['DOCUMENT_ROOT'].'/sessions/');

session_start();

// установка пользовательской цветовой схемы
if (empty($_SESSION["colortheme"])) {$_SESSION["colortheme"] = "BlueViolet";}
	$colortheme = $_SESSION["colortheme"];
?>
<!DOCTYPE html>
<html lang="ru">

<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="author" content="Vitaliy Mironov, telegram: @MIRONOV_VITALIY" />
<meta name="copyright" content="Mironov V.A." />
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png" />
<link rel="manifest" href="/site.webmanifest" />
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
<link rel="stylesheet" type="text/css" href="/smoke-pure.css" />
<script src="/smoke-pure.js"></script>
<meta name="apple-mobile-web-app-title" content="ZakazMebeli" />
<meta name="application-name" content="ZakazMebeli" />
<meta name="msapplication-TileColor" content="#FFA600" />
<meta name="theme-color" content="<?php echo $colortheme; ?>" />