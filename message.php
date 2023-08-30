<?php require $_SERVER['DOCUMENT_ROOT'].'/head_no.php'; ?>

<title>Сообщение - ZakazMebeli.pro</title>
<meta name="description" content="" />
<meta name="keywords" content="" />

<?php require $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>

<?php
if ($_POST["kitchen"] == "yes") {$mess1 = "<кухня>";}
if ($_POST["cupboard"] == "yes") {$mess7 = "<шкаф>";}
if ($_POST["casecompartment"] == "yes") {$mess2 = "<шкаф-купе>";}
if ($_POST["livingroom"] == "yes") {$mess3 = "<гостиная>";}
if ($_POST["bathroom"] == "yes") {$mess4 = "<санузел>";}
if ($_POST["table"] == "yes") {$mess5 = "<стол>";}
if ($_POST["other"] == "yes") {$mess6 = "<другое>";}

if (!empty($_POST["indexname"]) && !empty($_POST["indexphone"])) {
	$to = "mironov@n1.by";
	$subject = "Message from zakazmebeli.pro";
	$message = 'Форма быстрого заказа с сайта.'."\n".'Отправитель: '.$_POST["indexname"].'.'."\n".'Тел.: '.$_POST["indexphone"].'.'."\n".'Нужна мебель: '.$mess1.$mess7.$mess2.$mess3.$mess4.$mess5.$mess6.'.';
	$headers = "Content-type: text/plain; charset = utf-8";
	$send = mail($to, $subject, $message, $headers);
	$hiddenthis = " hidden";
	echo '<h1>Сообщение отправлено. Ждите звонка.</h1>';
	echo "<html><head><meta http-equiv='Refresh' content='5; URL=".$_SERVER['HTTP_REFERER']."'></head></html>";
}
else {
	echo "<h1>Сообщение НЕ отправлено. Что-то пошло не так...</h1>";
	echo '<div class="illustration">
		<img src="/img/message.webp" alt="Технологии иногда подводят..." class="radio-image" />
		<span class="detailing-form-input-span">Технологии иногда подводят...</span>
	</div>';
	echo '<p><a href="'.$_SERVER['HTTP_REFERER'].'" class="detailing-p-link icon-left-open-big">вернуться назад</a></p>';
}
?>
<?php require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>