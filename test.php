<!-- кнопка очистки сессии -->
<form class="detailing-form meter noprint">
	<button name="unsess" value="unsess" type="submit" formaction="" formmethod="post" class="detailing-button cleaning-button" onkeydown="if(event.keyCode==13){return false;}"></button>
</form>
<?php // тестовый блок
echo '<p class="test">id '.session_id().'</p>'."\n"; // вывод идентификатора сессии
echo '<p class="test">'.$_SERVER['HTTP_USER_AGENT'].'</p>'."\n"; // вывод данных о браузере пользователя
foreach ($_SESSION as $key => $name) {echo '<p class="test">'.$key.' '.$name.'</p>'."\n";} // вывод переменных сессии
unset($key); // разрыв ссылки на последний элемент
unset($name); // разрыв ссылки на последний элемент

require '../furniture/index.php';
?>