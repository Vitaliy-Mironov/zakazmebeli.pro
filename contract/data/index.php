<?php require $_SERVER['DOCUMENT_ROOT'].'/head_no.php'; ?>

<title>Данные заказчика - ZakazMebeli.pro</title>
<meta name="description" content="" />
<meta name="keywords" content="" />

<?php require $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>

<h1>Данные заказчика для договора</h1>
<script>
window.addEventListener("DOMContentLoaded", function() {
    [].forEach.call( document.querySelectorAll('.tel'), function(input) {
    var keyCode;
    function mask(event) {
        event.keyCode && (keyCode = event.keyCode);
        var pos = this.selectionStart;
        if (pos < 3) event.preventDefault();
        var matrix = "+375 (__) ___-__-__",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, ""),
            new_value = matrix.replace(/[_\d]/g, function(a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a
            });
        i = new_value.indexOf("_");
        if (i != -1) {
            i < 5 && (i = 3);
            new_value = new_value.slice(0, i)
        }
        var reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function(a) {
                return "\\d{1," + a.length + "}"
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
        if (event.type == "blur" && this.value.length < 5)  this.value = ""
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false)

  });

});
</script>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="instruction-checkbox" />
			<p class="instruction-p">Поля, обозначенные звёздочкой (*), обязательны для заполнения.</p>
		</div>
		<legend class="headline">Заказчик мебели</legend>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Фамилия*: <input onkeydown="if(event.keyCode==13){return false;}" name="zakfam" type="text" placeholder="Иванов" class="textnumber large" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Имя*: <input onkeydown="if(event.keyCode==13){return false;}" name="zakima" type="text" placeholder="Иван" class="textnumber large" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Отчество*: <input onkeydown="if(event.keyCode==13){return false;}" name="zakot4" type="text" placeholder="Иванович" class="textnumber large" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Телефон*: <input onkeydown="if(event.keyCode==13){return false;}" name="zaktel" type="text" placeholder="+375 (29) 123-45-67" class="textnumber large tel" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			E-mail: <input onkeydown="if(event.keyCode==13){return false;}" name="zakeml" type="email" placeholder="ochen.zlyuken@mail.ru" class="textnumber large" />
			</label>
		</div>
		<hr class="line" />
		<p>Дата заключения договора</p>
		<div class="detailing-form-input-div">
			<label class="textlabel">
			День: <input onkeydown="if(event.keyCode==13){return false;}" name="contractday" type="number" placeholder="01" min="1" max="31" class="textnumber" />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel">
			Месяц: <input onkeydown="if(event.keyCode==13){return false;}" name="contractmonth" type="number" placeholder="01" min="1" max="12" class="textnumber" />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel">
			Год: <input onkeydown="if(event.keyCode==13){return false;}" name="contractyear" type="number" placeholder="20" min="19" class="textnumber" />
			</label>
		</div>
		<p class="detailing-p note">По умолчанию, - текущая дата.</p>
		<hr class="line" />
		<p>Адрес</p>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Страна*: <input onkeydown="if(event.keyCode==13){return false;}" name="zakad1" type="text" placeholder="Республика Беларусь," class="textnumber large" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Обл.,гор.*: <input onkeydown="if(event.keyCode==13){return false;}" name="zakad2" type="text" placeholder="Минская обл., г. Борисов," class="textnumber large" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Ул., дом*: <input onkeydown="if(event.keyCode==13){return false;}" name="zakad3" type="text" placeholder="ул. Ноздрюхина-Заболотного, 13а" class="textnumber large" required />
			</label>
		</div>
		<hr class="line" />
		<p>Паспортные данные</p>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Серия,№*: <input onkeydown="if(event.keyCode==13){return false;}" name="zakpas" type="text" placeholder="МС1234567" class="textnumber large" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Выдан*: <input onkeydown="if(event.keyCode==13){return false;}" name="zakpad" type="date" class="textnumber large" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Кем*: <input onkeydown="if(event.keyCode==13){return false;}" name="zakpa1" type="text" placeholder="Борисовским РУВД" class="textnumber large" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Дополн.: <input onkeydown="if(event.keyCode==13){return false;}" name="zakpa2" type="text" placeholder="Минской области" class="textnumber large" />
			</label>
		</div>
		<hr class="line" />
		<p>Сумма заказа и платежи</p>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Сумма*: <input onkeydown="if(event.keyCode==13){return false;}" name="zaksum" type="number" placeholder="2153" maxlength="4" min="0" class="textnumber large" required />
			</label>
		</div>
		<p>Предоплата</p>
		<div class="detailing-form-input-div">
			<label class="textlabel">
			%*: <input onkeydown="if(event.keyCode==13){return false;}" name="zakpop" type="number" placeholder="100" maxlength="3" min="0" class="textnumber" required />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Сумма: <input onkeydown="if(event.keyCode==13){return false;}" name="zakpos" type="number" maxlength="4" min="0" class="textnumber large" />
			</label>
		</div>
		<p>Постоплата</p>
		<div class="detailing-form-input-div">
			<label class="textlabel">
			%: <input onkeydown="if(event.keyCode==13){return false;}" name="zaklop" type="number" maxlength="3" min="0" class="textnumber" />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Сумма: <input onkeydown="if(event.keyCode==13){return false;}" name="zaklos" type="number" maxlength="4" min="0" class="textnumber large" />
			</label>
		</div>
		<p>Отсрочка</p>
		<div class="detailing-form-input-div">
			<label class="textlabel">
			%: <input onkeydown="if(event.keyCode==13){return false;}" name="zakoop" type="number" maxlength="3" min="0" class="textnumber" />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Сумма: <input onkeydown="if(event.keyCode==13){return false;}" name="zakoos" type="number" maxlength="4" min="0" class="textnumber large" />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel">
			Дни: <input onkeydown="if(event.keyCode==13){return false;}" name="zakood" type="number" maxlength="3" min="0" class="textnumber" />
			</label>
		</div>
		<hr class="line" />
		<p>Спецификация мебели</p>
		<p><span class="theme">1.</span> Основные параметры</p>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Вид мебели: <select onkeydown="if(event.keyCode==13){return false;}" name="specvidmebeli" class="selectoption large">
			<option value=" "> </option>
			<option value="Кухня">Кухня</option>
			<option value="Шкаф-купе">Шкаф-купе</option>
			<option value="Шкаф">Шкаф</option>
			<option value="Стол">Стол</option>
			<option value="Гостиная">Гостиная</option>
			<option value="Прихожая">Прихожая</option>
			<option value="Детская">Детская</option>
			<option value="Для спальни">Для спальни</option>
			<option value="Для санузла">Для санузла</option>
			</select>
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Располож.: <select onkeydown="if(event.keyCode==13){return false;}" name="specraspmebeli" class="selectoption large">
			<option value=" "> </option>
			<option value="Встроенное">Встроенное</option>
			<option value="Отдельностоящее">Отдельностоящее</option>
			</select>
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Корпус: <input onkeydown="if(event.keyCode==13){return false;}" name="speckorpmebeli" class="textnumber large" />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Фасады: <input onkeydown="if(event.keyCode==13){return false;}" name="specfasmebeli" class="textnumber large" />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Столешн.: <input onkeydown="if(event.keyCode==13){return false;}" name="specstolmebeli" class="textnumber large" />
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Кромка: <select onkeydown="if(event.keyCode==13){return false;}" name="speckrommebeli" class="selectoption large">
			<option value=" "> </option>
			<option value="Меламиновая">Меламиновая</option>
			<option value="ПВХ, 1мм">ПВХ, 1мм</option>
			<option value="ПВХ, 2мм">ПВХ, 2мм</option>
			</select>
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Соединен.: <select onkeydown="if(event.keyCode==13){return false;}" name="specsoedmebeli" class="selectoption large">
			<option value=" "> </option>
			<option value="На конфирмат со шкантом" selected>Конфирмат + шкант</option>
			<option value="На конфирмат">Конфирмат</option>
			<option value="На эксцентрик со шкантом">Эксцентрик + шкант</option>
			</select>
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Петли: <select onkeydown="if(event.keyCode==13){return false;}" name="specpetlimebeli" class="selectoption large">
			<option value=" "> </option>
			<option value="GTV">GTV</option>
			<option value="GTV с доводчиком">GTV с доводчиком</option>
			<option value="GTV с открыванием от нажатия">GTV с откр. от нажатия</option>
			<option value="Blum">Blum</option>
			<option value="Blum с доводчиком">Blum с доводчиком</option>
			<option value="Blum с открыванием от нажатия">Blum с откр. от нажатия</option>
			</select>
			</label>
		</div>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Направл.: <select onkeydown="if(event.keyCode==13){return false;}" name="specnaprmebeli" class="selectoption large">
			<option value=" "> </option>
			<option value="GTV">GTV</option>
			<option value="GTV с доводчиком">GTV с доводчиком</option>
			<option value="GTV с открыванием от нажатия">GTV с откр. от нажатия</option>
			<option value="Blum">Blum</option>
			<option value="Blum с доводчиком">Blum с доводчиком</option>
			<option value="Blum с открыванием от нажатия">Blum с откр. от нажатия</option>
			</select>
			</label>
		</div>
		<p><span class="theme">2.</span> Схематическое изображение</p>
		<div class="detailing-form-input-div">
			<label class="textlabel big">
			Изображение мебели: <input onkeydown="if(event.keyCode==13){return false;}" name="imagename" value="yes" type="checkbox" class="checkbox" />
			</label>
		</div>
		<p class="detailing-p note">Файл в формате PNG, 1280х1280 pix. Имя файла - номер договора.</p>
		<p><span class="theme">3.</span> Наполнение</p>

		<?php
			$linecounter = 1;
			while ($linecounter < 51) {
				echo '<div class="detailing-form-input-div">
						<label class="textlabel big">
						Строка '.$linecounter.': <input onkeydown="if(event.keyCode==13){return false;}" name="specmebelistr'.$linecounter.'" type="text" class="textnumber large" />
						</label>
					</div>
					<div class="detailing-form-input-div">
						<label class="textlabel big">
						Текст '.$linecounter.': <input onkeydown="if(event.keyCode==13){return false;}" name="specmebelistrtxt'.$linecounter.'" type="text" class="textnumber large" />
						</label>
					</div>
					<p>&nbsp;</p>'."\n";
				$linecounter++;
			}
		?>

	</fieldset>
	<button type="reset" class="detailing-form-button">Очистить</button>
	<button type="submit" formaction="/contract/" formmethod="post" class="detailing-form-button color-green-lightgreen">Применить</button>
</form>
<?php require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>