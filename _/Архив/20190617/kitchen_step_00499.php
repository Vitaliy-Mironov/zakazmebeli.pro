<?php
// определяем, есть ли углы, которые необходимо измерить пользователю
if ($a == 1 && $_SESSION["UGLlev000"] == "отдельно" && $_SESSION["UGLprv000"] == "отдельно") {
	$b499 = "1";
	require 'kitchen_step_00600.php';
}
elseif ($a == 3 && $_SESSION["UGLlev000"] == "отдельно" && $_SESSION["UGLprv000"] == "отдельно") {
	$b499 = "1";
	require 'kitchen_step_00600.php';
}
elseif ($a == 2 && $_SESSION["UGLlev000"] == "отдельно" && $_SESSION["UGLprv000"] == "отдельно" && $_SESSION["UGLlev001"] == "отдельно" && $_SESSION["UGLprv001"] == "отдельно") {
	$b499 = "1";
	require 'kitchen_step_00600.php';
}
else {
	$b499 = "0";
	require 'kitchen_step_00600.php';
}
?>