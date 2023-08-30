<?php require $_SERVER['DOCUMENT_ROOT'].'/head.php'; ?>

<title>Кухни, шкафы-купе и другая мебель на заказ в Борисове</title>
<meta name="description" content="Качественное изготовление кухни, шкафа-купе и другой корпусной мебели на заказ в Борисове, по индивидуальному проекту. Возможна оплата в рассрочку. Достойная мебель по доступной цене!" />
<meta name="keywords" content="мебель, замер, производство, купить, заказать, Борисов, шкаф-купе, кухня, рассрочка, Миронов" />
<meta name="yandex-verification" content="20c8d4bc75463a6e" />

<?php require $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>

<h1>Мебель на заказ в Борисове</h1>
	<h2 class="icon-check inline">Кухни</h2>
	<h2 class="icon-check inline">Шкафы-купе</h2>
	<h2 class="icon-check inline">Гостиные</h2>
	<h2 class="icon-check inline">Столы</h2>
	<h2 class="icon-check inline">Для прихожей</h2>
	<h2 class="icon-check inline">Для детской</h2>
	<h2 class="icon-check inline">Для спальни</h2>
	<h2 class="icon-check inline">На все случаи жизни</h2>
<p>Здравствуйте. Я - Виталий (официально, - ИП Миронов Виталий Александрович), работаю в Борисове. Хотите заказать мебель? Тогда вы оказались по адресу. Заполните простую <a href="/#formazakaza" class="detailing-p-link lineline">форму заказа</a>, или <a href="tel:+375259298233" class="detailing-p-link lineline">позвоните мне</a>. Сделаю, будете пользоваться с удовольствием!</p>
<?php // праздничные тексты
$today = date("m.d");
switch ($today) {
	case "12.30": // Новый Год
	case "12.31":
	case "01.01":
	case "01.02":
		echo '<p>Да, и, конечно же, - <b class="theme">С Новым Годом! Сбычи мечт!</b><span class="smiles"><img src="/img/smiles/elka.png" alt="Ёлка" class="" /><img src="/img/smiles/snezhinka.png" alt="Снежинка" class="" /><img src="/img/smiles/smile.png" alt="Смайлик" class="" /><img src="/img/smiles/prazdnik.png" alt="Праздник" class="" /><img src="/img/smiles/podarok.png" alt="Подарок" class="" /><img src="/img/smiles/snegovik.png" alt="Снеговик" class="" /></span></p>';
		break;
	case "02.13": // день влюблённых
	case "02.14":
		echo '<p>Да, и, конечно же, - <b class="theme">С днём влюблённых! Любви Вам, большой, светлой и бескорыстной!</b><span class="smiles"><img src="/img/smiles/heart.png" alt="Сердце" class="" /><img src="/img/smiles/roza.png" alt="Роза" class="" /><img src="/img/smiles/kiss.png" alt="Поцелуй" class="" /><img src="/img/smiles/heart2.png" alt="Сердце" class="" /></span></p>';
		break;
	case "03.07": // 8 марта
	case "03.08":
		echo '<p>Да, и, конечно же, - <b class="theme">всех женщин поздравляю с Вашим праздником! Желаю Вам любви и счастья!</b><span class="smiles"><img src="/img/smiles/buket.png" alt="Букет" class="" /><img src="/img/smiles/mama.png" alt="Мама" class="" /><img src="/img/smiles/roza.png" alt="Роза" class="" /></span></p>';
		break;
}
?>
<div class="anchor"><a id="formazakaza"></a></div>
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
    input.addEventListener("keydown", mask, false);

  });

});
</script>
<form class="detailing-form step">
	<fieldset class="detailing-form-fieldset">
		<div class="instruction">
			<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="instruction-checkbox" checked/>
			<p class="instruction-p noprint">Выберите нужный вариант (или несколько) и укажите, пожалуйста, Ваше имя и номер телефона, на который Вам можно перезвонить, чтобы уточнить все вопросы и согласовать дату и время замера.</p>
		</div>
		<legend class="headline">Какая мебель Вам нужна?</legend>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="kitchen" value="yes" type="checkbox" class="radio-button" />
			<img src="/detailing/images/MBLvid000_1.png" alt="кухня" class="radio-image" />
			<span class="detailing-form-input-span">кухня</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="cupboard" value="yes" type="checkbox" class="radio-button" />
			<img src="/detailing/images/MBLvid000_7.png" alt="шкаф" class="radio-image" />
			<span class="detailing-form-input-span">шкаф</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="casecompartment" value="yes" type="checkbox" class="radio-button" />
			<img src="/detailing/images/MBLvid000_3.png" alt="шкаф-купе" class="radio-image" />
			<span class="detailing-form-input-span">шкаф-купе</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="livingroom" value="yes" type="checkbox" class="radio-button" />
			<img src="/detailing/images/MBLvid000_6.png" alt="гостиная" class="radio-image" />
			<span class="detailing-form-input-span">гостиная</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="bathroom" value="yes" type="checkbox" class="radio-button" />
			<img src="/detailing/images/MBLvid000_5.png" alt="санузел" class="radio-image" />
			<span class="detailing-form-input-span">санузел</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="table" value="yes" type="checkbox" class="radio-button" />
			<img src="/detailing/images/MBLvid000_2.png" alt="стол" class="radio-image" />
			<span class="detailing-form-input-span">стол</span>
		</label>
		<label class="detailing-form-input-label">
			<input onkeydown="if(event.keyCode==13){return false;}" name="other" value="yes" type="checkbox" class="radio-button" />
			<img src="/detailing/images/MBLvid000_4.png" alt="другое" class="radio-image" />
			<span class="detailing-form-input-span">другое</span>
		</label>
		<hr class="line" />
		<div class="detailing-form-input-div noprint">
			<label class="textlabel big">
			Ваше имя: <input onkeydown="if(event.keyCode==13){return false;}" name="indexname" type="text" maxlength="17" class="textnumber large" required />
			</label>
		</div>
		<div class="detailing-form-input-div noprint">
			<label class="textlabel big">
			Телефон: <input onkeydown="if(event.keyCode==13){return false;}" name="indexphone" type="text" class="textnumber large tel" required />
			</label>
		</div>
		<p class="detailing-p note left noprint">* Заполняя форму обратной связи и нажимая кнопку «Отправить» Вы даёте своё согласие на использование Ваших персональных данных в соответствии с <a href="https://zakazmebeli.pro/privacy-policy/" target="_blank">политикой конфиденциальности</a>.</p>
	</fieldset>
	<button type="submit" formaction="/message.php" formmethod="post" class="detailing-form-button color-green-lightgreen noprint">Отправить*</button>
</form>
<!--
<div class="instalments">
<h2 class="mobilecenter">Хотите купить мебель в Борисове в рассрочку? Легко!</h2>
	<h3 class="icon-check">Без первоначального взноса</h3>
	<h3 class="icon-check">Без переплат</h3>
	<h3 class="icon-check">Без справок</h3>
	<h3 class="icon-check">Без поручителей</h3>
	<h3 class="icon-check">Без посещения банка</h3>
	<h3 class="icon-check">От 2 до 4 месяцев*</h3>
<p class="detailing-p note left">* На бо&#x301;льший срок (до 12 месяцев) возможно оформление кредита.</p>
<p><a href="/instalments/" class="detailing-p-link lineline">Подробнее о рассрочке...</a></p>
</div>
-->
<h2 class="center">Производство мебели в Борисове. Как рождается Ваша мебель.</h2>
<ul class="step">
	<li class="step1"><span class="step-image"><img src="/img/step1.png" alt="Замер" class="" /></span><span class="step-title">1. Замер, выбор материалов</span></li>
	<li class="step2"><span class="step-image"><img src="/img/step2.png" alt="Проектирование" class="" /></span><span class="step-title">2. Проектирование, согласование</span></li>
	<li class="step3"><span class="step-image"><img src="/img/step3.png" alt="Заказ комплектующих" class="" /></span><span class="step-title">3. Заказ комплектующих</span></li>
	<li class="step4"><span class="step-image"><img src="/img/step4.png" alt="Сборка" class="" /></span><span class="step-title">4. Присадка, сборка, регулировка</span></li>
	<li class="step5"><span class="step-image"><img src="/img/step5.png" alt="Установка" class="" /></span><span class="step-title">5. Установка по адресу заказчика</span></li>
</ul>

<h2 class="center">Будет сделано на совесть, как себе!</h2>
<p>Лучший пример - собственный пример. На фото ниже показываю мебель, стоящую у меня дома, которую я делал для своей семьи.</p>
<p>Для себя, своих родственников и для моих заказчиков всю мебель делаю, исходя из следующих критериев:</p>
	<h3 class="icon-check">Практичность мебели</h3>
	<h3 class="icon-check">Красота мебели</h3>
	<h3 class="icon-check">Материалы, оптимальные по соотношению цена/качество</h3>
<div class="payment">
	<img src="/img/examples/ldsp.webp" alt="Образцы ЛДСП" class="illustration2" />
	<h3 class="">Материалы</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Первое, что обычно интересует заказчиков, - материалы, из которых будет изготовлена их мебель.</p>
		<p class="detailing-p">Я использую ЛДСП (для корпусов и фасадов мебели), ЛМДФ (для фасадов подороже) и ЛХДФ (материал, заменивший ДВП в цивилизованном мире) производства <a href="http://www.egger.com/" class="detailing-p-link" target="_blank" rel="nofollow">Egger</a> и <a href="http://kronospan-express.com/" class="detailing-p-link" target="_blank" rel="nofollow">Kronospan</a> с классом эмиссии формальдегидных смол (вредных веществ) - E1.</p>
		<p class="detailing-p">В двух словах, для тех, кто не в теме: E1 - хорошо, а E2 - плохо. По европейским нормам, для производства домашней, а особенно детской мебели, недопустимо использовать материал с "Е", больше чем "1". Чем выше "Е" (чем больше в материале токсичной гадости), тем дешевле стоит этот материал, - поэтому, внимательно проверяйте из чего собирается заведомо дешёвая мебель, если хотите, чтобы у Ваших детей тоже были дети... </p>
		<p class="detailing-p">На видимых, подверженных износу торцах деталей, использую кромку ПВХ толщиной 1мм. На видимых, но неподверженных износу торцах деталей, использую меламиновую ("бумажную") кромку.</p>
		<p class="detailing-p">По желанию заказчика, невидимые открытые торцы деталей тоже можно закрывать кромкой. Чтобы меньше выделялись злостные формальдегиды...</p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/soedinenie.webp" alt="Соединение" class="illustration2" />
	<h3 class="">Соединения</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Соединения, как правило, собираю на шканты с конфирматом, или с эксцентриком (если снаружи соединение должно быть скрытым). Это значительно повышает прочность соединений, и при этом они остаются разборными и ремонтопригодными.</p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/napravlyayushchie.webp" alt="Направляющие" class="illustration2" />
	<h3 class="">Направляющие</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">В основном использую шариковые направляющие польского производителя <a href="http://www.gtv.com.pl/" class="detailing-p-link" target="_blank" rel="nofollow">GTV</a>. При необходимости - с доводчиком (плавное закрывание) или с толкателем (открытие от нажатия).</p>
		<p class="detailing-p">Устанавливаю их по низу боковины ящика, - так они меньше бросаются в глаза, чем при классическом размещении по центру, что, на мой взгляд, смотрится аккуратнее.</p>
		<p class="detailing-p">Разумеется, если понадобится, можно спроектировать и установить полностью скрытые (но и более дорогие) и чуть более функциональные направляющие от австрийского производителя <a href="http://www.blum.com/" class="detailing-p-link" target="_blank" rel="nofollow">Blum</a> или немецкого <a href="http://www.hettich.com/" class="detailing-p-link" target="_blank" rel="nofollow">Hettich</a>.</p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/petli.webp" alt="Петли" class="illustration2" />
	<h3 class="">Петли</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Петли, как и направляющие, в основном использую польского производителя <a href="http://www.gtv.com.pl/" class="detailing-p-link" target="_blank" rel="nofollow">GTV</a>. При необходимости - с доводчиком (плавное закрывание).</p>
		<p class="detailing-p">В подавляющем большинстве случаев их надёжности и функционала бывает вполне достаточно.</p>
		<p class="detailing-p">По желанию заказчика можно установить петли от австрийского производителя <a href="http://www.blum.com/" class="detailing-p-link" target="_blank" rel="nofollow">Blum</a> или немецкого <a href="http://www.hettich.com/" class="detailing-p-link" target="_blank" rel="nofollow">Hettich</a>.</p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/stoleshnica_pod_fartuk.webp" alt="Столешница" class="illustration2" />
	<h3 class="">Столешница</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Рекомендую к установке стандартные столешницы из ЛДСП от <a href="http://www.egger.com/" class="detailing-p-link" target="_blank" rel="nofollow">Egger</a>, <a href="http://juan.pl/" class="detailing-p-link" target="_blank" rel="nofollow">Juan</a> и других проверенных производителей.</p>
		<p class="detailing-p">Столешницы из других материалов считаю приемлемым вариантом только в тех случаях, когда столешница из ЛДСП не подходит по размерам или по форме. Во всех остальных случаях, на мой взгляд, столешницы из искусственного или натурального камня, металла или стекла проигрывают по цене и(или) сложности в уходе, и(или) экологичности и прочим параметрам. Единственный значимый минус столешниц из ЛДСП, - необходимость тщательной гидроизоляции открытых торцов. Но с этим минусом справляться намного легче, чем с минусами столешниц из других материалов.</p>
		<p class="detailing-p"><img src="/img/examples/gidroizolyaciya_stoleshnicy.webp" alt="Гидроизоляция столешницы" title="Гидроизоляция столешницы" class="radio-image" /></p>
		<p class="detailing-p">В своей работе, по возможности, стараюсь устанавливать столешницы без плинтуса. Тонкий силиконовый шов между столешницей и "фартуком" оставляет прямые углы и смотрится более аккуратно и современно.</p>
		<p class="detailing-p">Плинтус на столешнице использую только при значительной кривизне стен.</p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/skrytaya_gazovaya_truba.webp" alt="Скрытый газовый шланг" class="illustration2" />
	<h3 class="">Грамотное подключение газа</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Хотите попасть на штраф от контролирующей газовой организации с последующей переделкой кухни? Тогда смело зашивайте трубы и шланги подвода газа гипсокартоном, "фартуками" или другими, какими угодно материалами!...</p>
		<p class="detailing-p">А, если хотите избавиться от лишних неприятных капиталловложений и перспективы рано или поздно отравиться газом или взлететь на воздух, то учитывайте нормы, требующие раз в несколько лет менять газовый шланг, и, соответственно, иметь к нему полный доступ.</p>
		<p class="detailing-p">Принимая во внимание действующие правила, при проектировании кухонной мебели, я не прячу газовый шланг в неразборные конструкции, а закрываю его аккуратной декоративной накладкой. При необходимости доступа к шлангу (для его инспекции или замены), накладка снимается за несколько секунд.</p>
		<p class="detailing-p"><img src="/img/examples/otkrytaya_gazovaya_truba.webp" alt="Открытый газовый шланг" title="Газовый шланг в лёгком доступе" class="radio-image" /></p>
		<p class="detailing-p">Соответственно, и перекрывающий газ кран, стараюсь спрятать в навесном шкафу, но обязательно оставляю к нему возможность быстрого доступа.</p>
		<p class="detailing-p"><img src="/img/examples/gazovyj_kran.webp" alt="Газовый кран" title="Газовый кран в лёгком доступе" class="radio-image" /></p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/sliv_mojki.webp" alt="Слив мойки" class="illustration2" />
	<h3 class="">Грамотное сантехническое подключение</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Я оказываю услуги по изготовлению мебели "под ключ", т.е. с установкой и подключением. И стараюсь делать так, чтобы в дальнейшем, Вы вспоминали меня добрым, а не матерным, словом... По этому я обращаю внимание на детали, которыми другие обычно не заморачиваются.</p>
		<p class="detailing-p">Вот и "гофру" сливной системы мойки или раковины однозначно рекомендую сразу менять на прямые трубы. Лучше заплатить на десяток рублей больше за покупку дополнительного куска ПВХ-трубы и пары углов, которыми я заменяю классическую гофрированную трубу, и необходимость чистить сливную систему кухонной мойки (или раковины в санузле) будет наступать значительно реже, чем при использовании "гофры".</p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/raspred_shchitok.webp" alt="Распределительный щиток" class="illustration2" />
	<h3 class="">Грамотное электрическое подключение</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Если планируется подключение большого количества техники, то лучше установить дополнительный небольшой распределительный щиток с отдельными автоматическими выключателями (а ещё лучше с УЗО или ДИФ-автоматами) на варочную панель, духовой шкаф, посудомоечную машину, микроволновку, холодильник и дополнительные розетки для подключения другой техники.</p>
		<p class="detailing-p">Это, кстати сказать, является обычным требованием производителей встраиваемой кухонной техники, и указывается в инструкциях по монтажу и эксплуатации.</p>
		<p class="detailing-p">В случае выхода техники из строя, если она подключалась в розетку без дополнительной защиты, - есть большая вероятность, что Вам могут отказать в гарантийном ремонте.</p>
		<p class="detailing-p">И ещё, на холодильник (как и на кондиционеры и другую компрессорную технику) настоятельно рекомендую дополнительно поставить реле напряжения с отложенным повторным включением, - это защитит компрессор от скачков напряжения в сети.</p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/razdvizhnaya_stenka.webp" alt="Раздвижная стенка" class="illustration2" />
	<h3 class="">Грамотная организация скрытого доступа</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Вам тоже не нравятся <span class="zacherknem">дырки</span> отверстия в мебели, вырезаемые для доступа к расположенным за ней коммуникациям?</p>
		<p class="detailing-p">На мой взгляд, предлагаемое мной решение с раздвижной стенкой, пусть и несколько дороже, но зато намного симпатичнее и функциональнее.</p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/ramochnye_fasady.webp" alt="Рамочные фасады" class="illustration2" />
	<h3 class="">Рамочные фасады</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Рамочные фасады из ЛДСП (настоящие, а не их имитация с использованием фрезерованного МДФ под плёнкой) дороже обычных гладких фасадов, но и ими можно дополнять недорогую мебель.</p>
		<p class="detailing-p">А в некоторых случаях (как, например, для экрана закрывающего радиатор отопления, или для верхних шкафов с использованием прозрачных вставок), это может оказаться самым лучшим решением.</p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/posudomoechnaya_mashina.webp" alt="Посудомоечная машина" class="illustration2" />
	<h3 class="">Встраиваемая техника</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Современная мебель должна быть совместима с различной современной встраиваемой техникой.</p>
		<p class="detailing-p">Своим заказчикам я всегда рекомендую установку посудомоечной машины. Эта вещь настолько же облегчает жизнь, как и стиральная машина, без которой немыслим современный быт. Многие (как и я ранее) сомневаются в целесообразности её приобретения, но я ещё не встречал тех, кто пожалел бы, начав пользоваться этим прибором.</p>
		<p class="detailing-p">В своих проектах кухонь я всегда предлагаю закладывать место и соответствующие коммуникации для встраиваемой посудомоечной машины. У этой техники стандартные размеры и, если у Вас нет её сейчас, можно запроектировать на её будущем месте простой модуль 450мм или 600мм с дверцей, на место которого впоследствии легко станет посудомойка. На это не потребуется много времени и дополнительных финансовых затрат.</p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/holodilnik.webp" alt="Холодильник" class="illustration2" />
	<h3 class="">Встроенная невстраиваемая техника</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Обычными холодильниками пользуются чаще, чем встраиваемыми. Но и их расположение можно выгодно обыграть в интерьере кухни.</p>
		<p class="detailing-p">При желании, любую технику можно встроить. Разумеется, с соблюдением всех необходимых параметров, вентиляционных зазоров, необходимых точек доступа для проверок, обслуживания и т.п.</p>
		<p class="detailing-p"><img src="/img/examples/holodilnik2.webp" alt="Холодильник" title="Холодильник" class="radio-image" /></p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/ostrov.webp" alt="Остров" class="illustration2" />
	<h3 class="">Остров Объедения</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Мечтаете владеть собственным островом?</p>
		<p class="detailing-p">Если акватория Вашей кухни позволяет, - пожалуйста!</p>
		<p class="detailing-p">"Остров" на кухне, - очень удобное решение, которое можно использовать как дополнительное место хранения, как дополнительную рабочую поверхность, или, в зависимости от конфигурации кухни, разместить на острове варочную поверхность или мойку с доступом к ним со всех сторон.</p>
		<p class="detailing-p">А ещё, как и в моём случае, на "острове" можно выделить место для игрушек Ваших детей! Поверьте, они будут счастливы иметь собственную территорию в общем помещении, а Вам будет проще эту территорию контролировать ;)</p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/markernaya_poverhnost.webp" alt="Маркерная поверхность" class="illustration2" />
	<h3 class="">Недостатки – в достоинства</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Я стараюсь подходить к проектированию мебели с учётом всех возможных плюсов и минусов, и по возможности, превращать недостатки некоторых конструктивных решений в достоинства.</p>
		<p class="detailing-p">Вот, к примеру, была задача убрать холодильник из его стандартного углового расположения (т.к. там он оказывался далеко от зоны приготовления, что не есть быть хорошо) и поставить его почти в центре помещения (на том месте, где им было бы удобно пользоваться). Чем декорировать очень большую площадь решётки радиатора? Были несколько вариантов, в основном увеличивавших количество листового материала и, соответственно, итоговую цену. Моё предложение понравилось всем; зашиваем белым <u>гладким</u> ЛДСП (которое часто применяют в корпусах за счёт его низкой стоимости) и используем этот большой белый прямоугольник как маркерную доску, на которой специальными маркерами для досок можно писать различные заметки и давать рисовать детям.</p>
		<p class="detailing-p">Получилось недорого, просто и функционально!</p>
		<p class="detailing-p">А какие стены украшают Ваши юные художники?</p>
	</div>
</div>
<div class="payment">
	<img src="/img/examples/svetodiodnaya_polsvetka.webp" alt="Светодиодная подсветка" class="illustration2" />
	<h3 class="">Да будет свет!</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">Это единственное фото в данной подборке, не из моего дома. Эту мебель я делал на заказ.</p>
		<p class="detailing-p">Если заказчик просит установить подсветку в мебель, - без проблем! Это красиво, практично и современно.</p>
	</div>
</div>
<!--
<div class="payment">
	<img src="/img/examples/mebel_iz_fanery.webp" alt="Мебель из фанеры" class="illustration2" />
	<h3 class="">Мебель из фанеры</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p"></p>
	</div>
</div>
-->
<div class="payment">
	<img src="/img/examples/mebel_dlya_kukol.webp" alt="Мебель для кукол" class="illustration2" />
	<h3 class="">Мебель для кукол</h3>
	<div class="more-block">
		<input onkeydown="if(event.keyCode==13){return false;}" type="checkbox" class="more-link" />
		<p class="detailing-p">А это как сюда попало?</p>
		<p class="detailing-p">Наверное, доча подсунула... Очень уж ей понравилась кроватка, которую я между делом соорудил для её куклы...</p>
		<p class="detailing-p"><img src="/img/examples/mebel_dlya_kukol2.webp" alt="Мебель для кукол" title="Мебель для кукол" class="radio-image" /></p>
	</div>
</div>

<h2 class="center">Производители деталей Вашей мебели</h2>
<p>Только проверенным, имеющим отличную репутацию, производителям материалов и фурнитуры, я доверяю комфорт, безопасность и долговечность Вашей новой мебели.</p>
<p class="detailing-p logos">
	<a href="http://www.blum.com/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Blum_logo.webp" alt="Blum" class="logos-images" />
		<span class="at"><img src="/img/flags/100x100_at.webp" alt="флаг" /></span></a>
	<a href="http://www.hettich.com/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Hettich_logo.webp" alt="Hettich" class="logos-images" />
		<span class="de"><img src="/img/flags/100x100_de.webp" alt="флаг" /></span></a>
	<a href="http://www.hafele.com/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Hafele_logo.webp" alt="Hafele" class="logos-images" />
		<span class="de"><img src="/img/flags/100x100_de.webp" alt="флаг" /></span></a>
	<a href="http://www.gtv.com.pl/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/GTV_logo.webp" alt="GTV" class="logos-images" />
		<span class="pl"><img src="/img/flags/100x100_pl.webp" alt="флаг" /></span></a>
	<a href="http://www.rejs.eu/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Rejs_logo.webp" alt="Rejs" class="logos-images" />
		<span class="pl"><img src="/img/flags/100x100_pl.webp" alt="флаг" /></span></a>
	<a href="http://www.boyard.biz/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Boyard_logo.webp" alt="Boyard" class="logos-images" />
		<span class="ru"><img src="/img/flags/100x100_ru.webp" alt="флаг" /></span></a>
	<a href="http://www.camar.it/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Camar_logo.webp" alt="Camar" class="logos-images" />
		<span class="it"><img src="/img/flags/100x100_it.webp" alt="флаг" /></span></a>
	<a href="http://www.egger.com/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Egger_logo.webp" alt="Egger" class="logos-images" />
		<span class="at"><img src="/img/flags/100x100_at.webp" alt="флаг" /></span></a>
	<a href="http://kronospan-express.com/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Kronospan_logo.webp" alt="Kronospan" class="logos-images" />
		<span class="at"><img src="/img/flags/100x100_at.webp" alt="флаг" /></span></a>
	<a href="http://juan.pl/" class="logos-link" target="_blank" rel="nofollow"><img src="/img/logo/Juan_logo.webp" alt="Juan" class="logos-images" />
		<span class="pl"><img src="/img/flags/100x100_pl.webp" alt="флаг" /></span></a>
</p>
<p class="detailing-p note">* Флаги, размещённые на логотипах производителей, отображают страну - родину бренда, и могут отличаться от страны производства продукции под этим брендом.</p>

<?php require $_SERVER['DOCUMENT_ROOT'].'/footer.php'; ?>