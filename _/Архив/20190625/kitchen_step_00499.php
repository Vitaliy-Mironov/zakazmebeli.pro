<?php
// определяем, есть ли углы, которые необходимо измерить пользователю
if ($a == 1 && $_SESSION["UGLlev000"] == "separately" && $_SESSION["UGLprv000"] == "separately") {
	$b499 = "1";
	require 'kitchen_step_00600.php';
}
elseif ($a == 3 && $_SESSION["UGLlev000"] == "separately" && $_SESSION["UGLprv000"] == "separately") {
	$b499 = "1";
	require 'kitchen_step_00600.php';
}
elseif ($a == 2 && $_SESSION["UGLlev000"] == "separately" && $_SESSION["UGLprv000"] == "separately" && $_SESSION["UGLlev001"] == "separately" && $_SESSION["UGLprv001"] == "separately") {
	$b499 = "1";
	require 'kitchen_step_00600.php';
}
else {
	$b499 = "0";
	require 'kitchen_step_00600.php';
}
?>