<?php echo "\n"; ?>
<?php if (!empty($_GET["test"])) {include $_SERVER['DOCUMENT_ROOT'].'/test.php';} ?>
</div>
</div>
<div class="button-container background noprint <?php echo $hiddenthis; ?>">
	<a href="/#formazakaza" class="color-green-lightgreen" >Заказать мебель</a>
</div>
<footer>
	<div class="footer-container" itemscope itemtype="http://schema.org/Organization">
		<div class="footer-container-text">
			<p>© 2019<?php if (date("Y") > 2019) {echo '-'.date("Y");} ?> ИП Миронов В.А.</p>
			<p><span itemprop="name">Индивидуальный предприниматель<br />
			Миронов Виталий Александрович</span><br />
			УНП 692134049<br />
			Свидетельство № 692134049 от 11.09.2019 г.<br />
			Регистрация в Реестре бытовых услуг<br />
			№ 82746 от 31.10.2019 г.</p>
		</div>
			<div class="hidden" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<span itemprop="streetAddress">Петряева, 17</span>
				<span itemprop="postalCode">222516</span>
				<span itemprop="addressLocality">Борисов</span>
			</div>
			<span class="hidden" itemprop="email">mironov@zakazmebeli.pro</span>
			<span class="hidden"><a href="https://zakazmebeli.pro" itemprop="url">zakazmebeli.pro</a></span>
		<div class="footer-container-links">
			<p class="footer-links"><a href="/contract/" class="">Договор (образец)</a><br />
			<a href="/payment/" class="">Способы оплаты</a><br />
			<!-- <a href="/instalments/" class=""><span class="red">Рассрочка</span></a><br /> -->
			<a href="/contacts/" class="">Контакты</a><br />
			&nbsp;<br />
			<a href="/articles/" class="">Полезно знать</a></p>
		</div>
		<div class="footer-container-phone">
			<p><span class="footer-phone" itemprop="telephone"><a href="tel:+375259298233">+375 25 929-82-33</a></span><br />
			<span class="footer-phone"><a href="tel:+375292532530">+375 29 253-253-0</a></span><br />
			На связи по будням с 9:00 до 19:00</p>
		</div>
	</div>
</footer>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(55942093, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/55942093" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>