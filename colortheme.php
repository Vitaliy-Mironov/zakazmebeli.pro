<?php
require $_SERVER['DOCUMENT_ROOT'].'/start.php';

if (!empty($_POST["colortheme"])) {$_SESSION["colortheme"] = $_POST["colortheme"];}
echo "<html><head><meta http-equiv='Refresh' content='0; URL=".$_SERVER['HTTP_REFERER']."'></head></html>";
?>