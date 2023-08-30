<style>
@font-face {
	font-family: 'EanGnivc';
	src:	url('/font/EanGnivc.eot');
	src:	url('/font/EanGnivc.eot?#iefix') format('embedded-opentype'),
			url('/font/EanGnivc.woff2') format('woff2'),
			url('/font/EanGnivc.woff') format('woff'),
			url('/font/EanGnivc.ttf') format('truetype'),
			url('/font/EanGnivc.svg#EanGnivc') format('svg');
	font-weight: normal;
	font-style: normal;
	font-display: swap;
}

@font-face {
	font-family: 'zmfont';
	src:	url('/font/zmfont.eot');
	src:	url('/font/zmfont.eot') format('embedded-opentype'),
			url('/font/zmfont.woff') format('woff'),
			url('/font/zmfont.woff2') format('woff2'),
			url('/font/zmfont.ttf') format('truetype'),
			url('/font/zmfont.svg') format('svg');
	font-weight: normal;
	font-style: normal;
	font-display: swap;
}

@media screen and (-webkit-min-device-pixel-ratio:0) {
	@font-face {
		font-family: 'zmfont';
		src: url('../font/zmfont.svg?36571278#zmfont') format('svg');
	}
}

[class^="icon-"]:before, [class*=" icon-"]:before {
	font-family: "zmfont";
	font-style: normal;
	font-weight: normal;
	speak: none;
	display: inline-block;
	text-decoration: inherit;
	width: 1em;
	margin-left: .2em;
	margin-right: .2em;
	text-align: center;
	opacity: .7; 
	font-variant: normal;
	text-transform: none;
	line-height: 1em;
	font-size: 150%;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	/* text-shadow: 1px 1px 1px rgba(127, 127, 127, 0.3); */
}

.icon-doc:before { content: '\e800'; }
.icon-mail:before { content: '\e801'; }
.icon-check:before { content: '\e802'; }
.icon-print:before { content: '\e803'; }
.icon-attention:before { content: '\e804'; }
.icon-cancel:before { content: '\e805'; }
.icon-credit-card:before { content: '\e806'; }
.icon-check-1:before { content: '\e807'; }
.icon-cog-alt:before { content: '\e808'; }
.icon-right-open-mini:before { content: '\e809'; }
.icon-dot:before { content: '\e80a'; }
.icon-floppy:before { content: '\e80b'; }
.icon-right-open-big:before { content: '\e80c'; }
.icon-left-open-big:before { content: '\e80d'; }
.icon-down-open-big:before { content: '\e80e'; }
.icon-up-open-big:before { content: '\e80f'; }
.icon-mobile-1:before { content: '\e811'; }
.icon-thumbs-up:before { content: '\e812'; }
.icon-chrome:before { content: '\e841'; }
.icon-check-empty:before { content: '\f096'; }
.icon-facebook:before { content: '\f09a'; }
.icon-menu:before { content: '\f0c9'; }
.icon-doc-text:before { content: '\f0f6'; }
.icon-circle-empty:before { content: '\f10c'; }
.icon-circle:before { content: '\f111'; }
.icon-doc-inv:before { content: '\f15b'; }
.icon-doc-text-inv:before { content: '\f15c'; }
.icon-youtube:before { content: '\f167'; }
.icon-instagram:before { content: '\f16d'; }
.icon-apple:before { content: '\f179'; }
.icon-windows:before { content: '\f17a'; }
.icon-android:before { content: '\f17b'; }
.icon-skype:before { content: '\f17e'; }
.icon-vkontakte:before { content: '\f189'; }
.icon-dot-circled:before { content: '\f192'; }
.icon-file-pdf:before { content: '\f1c1'; }
.icon-file-image:before { content: '\f1c5'; }
.icon-file-audio:before { content: '\f1c7'; }
.icon-file-video:before { content: '\f1c8'; }
.icon-file-code:before { content: '\f1c9'; }
.icon-paper-plane:before { content: '\f1d8'; }
.icon-circle-thin:before { content: '\f1db'; }
.icon-calc:before { content: '\f1ec'; }
.icon-copyright:before { content: '\f1f9'; }
.icon-at:before { content: '\f1fa'; }
.icon-toggle-off:before { content: '\f204'; }
.icon-toggle-on:before { content: '\f205'; }
.icon-genderless:before { content: '\f22d'; }
.icon-user-circle-o:before { content: '\f2be'; }
.icon-eercast:before { content: '\f2da'; }
.icon-microchip:before { content: '\f2db'; }

h2.icon-check:before, h3.icon-check:before { color: <?php echo $colortheme; ?>; }

* {
	margin: 0;
	padding: 0;
}
*::selection {
	color: white;
	background: black;
}
html {
	overflow-y: scroll;
	background-color: #eee;
}
.qr {display: none;}
header {
	display: block;
	position: relative;
	margin: 0;
	padding: 0;
	width: 100%;
	border: 0px;
}
.header-container {
	display: block;
	margin: 0 auto;
	border: 0px;
	width: 1000px;
	height: 90px;
	font-family: Verdana, sans-serif;
	/*text-align: center;*/
}
.header-logo {
	display: inline-block;
	float: left;
	margin: 5px 5px 2px 2px;
	padding: 5px;
	z-index: 1000;
}
.header-logo-link {
	outline: 0;
	margin: 0;
	padding: 0;
	text-decoration: none;
	border: 0px;
}
.header-logo-image {
	width: 70px;
	height: 70px;
	border-radius: 5px;
}
.header-menu {
	display: inline-block;
	vertical-align: top;
	letter-spacing: -5px;
}
.header-menu ul li {
	display: inline-block;
	padding: 5px 10px 5px 10px;
	font-size: 16px;
	border-right: 1px solid #aaa;
	letter-spacing: 0px;
}
.header-menu ul li:last-child {
	border-right: 0px;
}
.header-menu ul li a {
	text-decoration: none;
	color: #333;
}
.header-menu ul li a:hover {
	color: <?php echo $colortheme; ?>;
}
.header-phone {
	float: right;
	vertical-align: top;
}
.header-phone ul li {
	list-style-type: none;
}
.header-phone ul li a {
	text-decoration: none;
	color: #555;
	outline: none;
	font-size: 24px;
}
.header-phone ul li a:hover {
	color: <?php echo $colortheme; ?>;
}
.colortheme {
	display: block;
	position: relative;
	bottom: -15px;
	float: right;
	width: 50%;
	margin: 0 auto;
	padding: 10px 0;
}
.main {
	display: block;
	background-color: #fff;
	margin: 0;
	padding-bottom: 10px;
	width: 100%;
}
.main-container {
	display: block;
	position: relative;
	margin: 0 auto;
	width: 1000px;
	font-family: Verdana, sans-serif;
}
.button-container {
	display: block;
	position: relative;
	margin: 0 auto;
	padding: 20px 0px 20px 0px;
	width: 100%;
	font-family: Verdana, sans-serif;
	/*background-color: #bbb;*/
	text-align: center;
}
.button-container a {
	display: inline-block;
	font-size: 16px;
	border: 3px double green;
	border-radius: 22px;
	padding: 10px 50px 10px 50px;
	cursor: pointer;
	outline: none;
	text-decoration: none;
	background-color: lime;
	color: black;
	transition: 0.5s;
}
.button-container a:hover {
	background-color: LimeGreen;
	color: white;
	transition: 0.5s;
}
.background {
	background-image: url('/img/bg.png');
}
footer {
	display: block;
	margin: 0;
	padding-top: 10px;
	padding-bottom: 10px;
	width: 100%;
}
.footer-container {
	display: block;
	margin: 0 auto;
	border: 0px;
	width: 1000px;
	font-family: Verdana, sans-serif;
}
footer a {
	text-decoration: none;
	color: #555;
	outline: none;
}
footer a:hover {
	color: black;
}
footer a img {
	-webkit-filter: grayscale(100%);
}
footer a:hover img {
	-webkit-filter: grayscale(0%);
}
.footer-container-text, .footer-container-links, .footer-container-phone {
	display: inline-block;
	vertical-align: top;
}
.footer-container-phone {
	/* padding: 10px; */
	float: right;
}
.footer-links {
	display: inline-block;
	vertical-align: top;
}
.footer-social {
	display: inline-block;
	font-size: 24px;
	vertical-align: top;
}
.footer-phone {
	font-size: 32px;
}
h1 {
	font-weight: normal;
	padding: 10px;
	color: <?php echo $colortheme; ?>;
}
h2, h3 {
	font-weight: normal;
	padding: 10px;
}
p {
	font-size: 16px;
	padding: 10px;
}
.correction {
	border-right: 1px dashed black;
	border-bottom: 1px solid black;
	border-left: 1px dashed black;
	margin: -45px 10px 10px 10px;
	border-radius: 0px 0px 20px 20px;
}
.detailing-p {
	font-size: 16px;
	padding: 10px;
}
.detailing-p-link {
	color: <?php echo $colortheme; ?>;
	text-decoration: none;
}
.detailing-form {
	margin: 0 10px;
	text-align: center;
}
.detailing-form-fieldset {
	display: block;
	width: calc(100% - 2px);
	border: 1px solid #ddd;
	border-radius: 20px;
	text-align: center;
	padding-top: 10px;
	padding-bottom: 30px;
	margin-bottom: 20px;
}
.headline {
	margin: 0 auto;
	color: <?php echo $colortheme; ?>;
	background-color: white;
	border: 1px solid #ddd;
	border-radius: 20px;
	padding: 10px;
	height: 20px;
}
.detailing-form-input-label {
	position: relative;
	display: inline-block;
	width: 250px;
	height: 250px;
	background-color: <?php echo $colortheme; ?>;
	border-radius: 50%;
}
.detailing-form-input-label:hover {
	box-shadow: 0 0 3px 3px <?php echo $colortheme; ?>;
}
.radio-image {
	width: 250px;
	height: 250px;
	box-shadow: 0 0 1px 1px white;
	border-radius: 50%;
}
.illustration {
	display: block;
	position: relative;
	width: 250px;
	height: 250px;
	margin: 20px auto 0px auto;
	background-color: <?php echo $colortheme; ?>;
	border-radius: 50%;
	box-shadow: 0 0 0 1px black, 0 0 0 5px white, 0 0 0 6px gray;
}
.illustrations {
	display: block;
	width: 100%;
	position: relative;
	text-align: center;
}
.illustrations .illustration {
	display: inline-block;
	margin: 10px;
}
.detailing-form-input-span {
	display: inline-block;
	width: 100%;
	position: absolute;
	bottom: 10px;
	left: 0px;
	text-align: center;
	color: black;
	background-color: white;
	background-color: rgba(255, 255, 255, 0.8);
	border-radius: 10px;
	box-shadow: 0 0 1px 1px #999;
	cursor: pointer;
	transition: 0.5s;
}
.radio-button:disabled ~ .detailing-form-input-span,
.radio-button:disabled ~ .detailing-form-input-span:hover {
	color: #aaa;
	background-color: #ccc;
	background-color: rgba(204, 204, 204, 0.8);
}
.disabled-span {
	color: #aaa;
	background-color: #ccc;
	border-radius: 10px;
	padding-right: 5px;
	padding-left: 5px;
}
.radio-button {
	display: none;
}
/*
.radio-button ~ .radio-image {
	filter: blur(3px);
}
.radio-button:checked ~ .radio-image,
.radio-button.checked ~ .radio-image,
.radio-button:hover ~ .radio-image {
	filter: blur(0px);
}
*/
.radio-button ~ .detailing-form-input-span:hover,
.radio-button:checked ~ .detailing-form-input-span {
	color: white;
	background-color: black;
	background-color: rgba(0, 0, 0, 0.8);
	transition: 0.5s;
}
.checked ~ .detailing-form-input-span {
	color: black;
	text-decoration: underline;
	transition: 0.5s;
}
.detailing-form-input-div {
	display: inline-block;
	text-align: center;
	margin-top: 10px;
}
.line {
	margin: 10px auto;
	width: 95%;
	height: 2px;
	background-color: #eee;
	border: none;
}
.textlabel {
	display: block;
	text-align: right;
	padding: 5px;
	border: 1px solid <?php echo $colortheme; ?>;
	border-radius: 30px;
	background-color: white;
	width: 140px;
	height: 38px;
}
.textlabel.big {
	width: 295px;
}
.textlabel:hover {
	box-shadow: 0 0 3px 3px <?php echo $colortheme; ?>;
}
.textnumber, .selectoption {
	text-align: center !important;
	padding: 5px;
	border-radius: 20px;
	border: 1px solid <?php echo $colortheme; ?>;
	outline: none;
	font-size: 16px;
	font-family: Verdana, sans-serif;
	background-color: white;
	width: 50px;
	height: 26px;
}
.selectoption {
	height: 38px;
}
.textnumber.big, .selectoption.big {
	width: 80px;
}
.textnumber.large, .selectoption.large {
	width: 180px;
}

.checkbox {
	display: inline-block;
	padding: 10px;
	margin-right: 5px;
	outline: none;
	width: 36px;
	height: 26px;
	font-size: 16px;
}
.checkbox::before, .checkbox:checked::before {
	display: inline-block;
	width: 36px;
	height: 36px;
	text-align: center;
	background-color: white;
	font-family: "zmfont";
	font-size: 250%;
}
.checkbox::before {
	content: '\e805';
	color: #ddd;
}
.checkbox:checked::before {
	content: '\e802';
	color: <?php echo $colortheme; ?>;
}
.detailing-form-button {
	display: none;
}
.step:nth-last-of-type(3) .detailing-form-button,
.step:nth-last-of-type(2) .detailing-form-button,
.step:nth-last-of-type(1) .detailing-form-button {
	display: inline-block;
	position: relative;
	top: -42px;
	font-size: 16px;
	background-color: white;
	border: 3px double #ddd;
	border-radius: 22px;
	padding: 10px;
	cursor: pointer;
	outline: none;
	transition: 0.5s;
}
.step:nth-last-of-type(3) .detailing-form-button:hover,
.step:nth-last-of-type(2) .detailing-form-button:hover,
.step:nth-last-of-type(1) .detailing-form-button:hover {
	color: white;
	background-color: black;
	outline: none;
	transition: 0.5s;
}
.step:nth-last-of-type(3) fieldset div .hidden-message,
.step:nth-last-of-type(2) fieldset div .hidden-message,
.step:nth-last-of-type(1) fieldset div .hidden-message {
	display: none;
}
.detailing-form-button.color-green-lightgreen, .color-green-lightgreen {
	background-color: lime !important;
}
.detailing-form-button.color-green-lightgreen:hover, .color-green-lightgreen:hover {
	background-color: LimeGreen !important;
}
.instruction {
	position: relative;
	top: -49px;
	text-align: left;
}
.instruction-p {
	display: none;
	font-size: 12pt;
}
.instruction-p:first-of-type {
	margin-top: 40px;
}
.instruction-p-link,
.instruction-p-link:hover,
.instruction-p-link:active {
	color: grey;
	text-decoration: none;
}

.instruction-checkbox {
	position: relative;
	left: 40px;
	display: inline-block;
	outline: none;
	padding: 10px;
}
.instruction-checkbox::before {
	position: relative;
	left: -20px;
	top: -3px;
	display: inline-block;
	width: 20px;
	height: 20px;
	background-color: white;
	border: 1px solid <?php echo $colortheme; ?>;
	border-radius: 50%;
	cursor: pointer;
	outline: none;
	color: <?php echo $colortheme; ?>;
	text-align: center;
	font-size: 16px;
	padding: 10px;
	font-weight: bold;
	content: "i";
	transition: 0.5s;
}
.instruction-checkbox:checked::before {
	content: "x";
	font-weight: normal;
	transition: 0.5s;
}
.instruction-checkbox:checked:hover::before,
.instruction-checkbox:hover::before {
	background-color: <?php echo $colortheme; ?>;
	color: white;
	transition: 0.5s;
}
.instruction-checkbox:checked ~ .instruction-p {
	display: block;
}
.detailing-button {
	font-size: 16px;
	padding: 10px;
	border: 1px solid white;
	border-radius: 20px;
	cursor: pointer;
	background-color: #eee;
}
.detailing-button[name="colortheme"] {
	display: inline;
	margin: 0 5px;
}
.detailing-button:hover {
	outline: none;
	background-color: #ddd;
}
.cleaning-button {
	position: fixed;
	bottom: 1px;
	left: 1px;
	background-color: rgba(204, 204, 204, 0.5);
}
.cleaning-button:hover {
	background-color: red;
	color: white;
}
.cleaning-link {
	font-size: 12pt;
	color: red;
	border: 0;
	border-bottom: 1px dotted red;
	background-color: white;
	cursor: pointer;
	outline: none;
}
.cleaning-link:hover {
	border-bottom: 1px dashed red;
}
.more-block {
	margin-left: 10px;
	margin-bottom: 20px;
	border-left: 5px solid <?php echo $colortheme; ?>;
	padding-left: 10px;
}
.more-link {
	display: block;
	width: 150px;
	padding: 10px;
	visibility: hidden;
}
.more-link::after,
.more-link:checked::after {
	visibility: visible;
	color: <?php echo $colortheme; ?>;
	font-size: 16px;
	border-bottom: 1px dotted white; /* <?php echo $colortheme; ?>; */
	cursor: pointer;
	position: relative;
	transition: 0.5s;
}
.more-link:hover::after,
.more-link:checked:hover::after {
	border-bottom: 1px dashed <?php echo $colortheme; ?>;
	transition: 0.5s;
}
.more-link::after {
	content: "Подробнее...";
	left: 0px;
	background-color: rgba(255, 255, 255, 1.0);
}
.more-link:checked::after {
	content: "Скрыть текст";
	left: 0px;
	background-color: rgba(255, 255, 255, 0.0);
}
.more-link ~ .detailing-p,
.more-link ~ h2 {
	display: none;
}
.more-link:checked ~ .detailing-p,
.more-link:checked ~ h2 {
	display: block;
}
.logos {
	display: block;
	text-align: center;
	padding: 5px;
}
.logos-link,
.logos-images {
	display: inline-block;
	width: 80px;
	height: 80px;
	border: none;
	box-shadow: 0 0 1px 1px #eee;
	border-radius: 50%;
	position: relative;
}
.logos-link:hover .logos-images {
	box-shadow: 0 0 1px 1px <?php echo $colortheme; ?>;
}
.at > img, .de > img, .pl > img, .ru > img, .it > img {
	display: block;
	width: 25px;
	height: 25px;
	position: absolute;
	top: 0px;
	right: 0px;
	border-radius: 50%;
	box-shadow: 0 0 1px 1px #eee;
}
.underline {
	text-decoration: underline;
}
.hidden {
	display: none !important;
}
.note, .date {
	color: grey;
	font-size: 10px;
}
.note a {
	color: black;
	text-decoration: none;
}
.note a:hover {
	text-decoration: underline;
}
.red {
	color: red;
}
.grey {
	color: grey;
}
.theme {
	color: <?php echo $colortheme; ?>;
}
.red::selection,
.cleaning-link::selection {
	color: white;
	background: red;
}
.green {
	color: green;
}
.green::selection {
	color: white;
	background: green;
}
::-webkit-scrollbar {
	width: 10px;
	height: 10px;
}
::-webkit-scrollbar-thumb {
	border-radius: 6px 6px 6px 6px;
	-moz-border-radius: 6px 6px 6px 6px; 
	-khtml-border-radius: 6px 6px 6px 6px;
	border-width: 1px 1px 1px 2px;
	border-color: black;
	background-color: <?php echo $colortheme; ?>;
	size: 10px;
}
::-webkit-scrollbar-track {
	size: 10px;
	background: #eee;
	border-width: 0;
}
.test {
	color: #399;
	font-family: 'Courier New', monospace;
	font-size: 12px;
	padding: 0px;
}
.center {
	text-align: center;
}
.left {
	text-align: left;
}
.furniture-card {
	display: inline-block;
	vertical-align: top;
	width: 30.75%;
	position: relative;
	margin: 10px;
	text-align: center;
	border: 1px solid #ddd;
	border-radius: 20px;
}
.furniture-title {
	display: block;
	border-bottom: 1px solid #ddd;
}
.furniture-image-block,
.furniture-image,
.furniture-logo,
.furniture-country {
	box-shadow: 0 0 2px 1px #ddd;
	border-radius: 50%;
}
.furniture-image-block {
	display: block;
	margin: 10px auto;
	position: relative;
	width: 250px;
	height: 250px;
}
.furniture-image,
.furniture-logo,
.furniture-country,
.furniture-barcode {
	display: inline-block;
}
.furniture-image {
	width: 250px;
	height: 250px;
}
.furniture-logo {
	width: 80px;
	height: 80px;
	position: absolute;
	top: 0px;
	right: 0px;
}
.furniture-country {
	width: 25px;
	height: 25px;
	position: absolute;
	top: 0px;
	right: 0px;
}
.furniture-barcode {
	position: absolute;
	bottom: -5px;
	left: -5px;
	padding: 5px;
	border-radius: 5px;
	font-family: "EanGnivc";
	font-style: normal;
	font-weight: normal;
	font-size: 42px;
	background-color: rgba(255, 255, 255, 0.5);
	border: 1px solid #eee;
}
.furniture-cost {
	display: block;
	width: 250px;
	margin: 10px auto;
	padding: 5px;
	font-size: 24px;
	background: linear-gradient(135deg, #12BCB0 20%, #FABE0E 70%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
	border: 1px solid transparent;
	border-image: linear-gradient(135deg, #12BCB0 20%, #FABE0E 70%);
	border-image-slice: 1;
}
.furniture-advantage-block {
	font-size: 16px;
	display: block;
	margin: 10px auto;
	position: relative;
	width: 250px;
	text-align: left;
	color: <?php echo $colortheme; ?>;
}
.furniture-advantage-block > div {
	padding-top: 0;
	padding-bottom: 0;
}
.furniture-advantage-block > div > a {
	color: <?php echo $colortheme; ?>;
	text-decoration: none;
}
.furniture-pdf > a,
.furniture-web > a {
	text-decoration: none;
	border-bottom: 1px dotted <?php echo $colortheme; ?>;
}
.furniture-pdf > a:hover,
.furniture-web > a:hover {
	text-decoration: none;
	border-bottom: 1px dashed <?php echo $colortheme; ?>;
}
.step {
	display: block;
	width: 100%;
	text-align: center;
	margin: 0 auto;
}
.step1, .step2, .step3, .step4, .step5 {
	list-style: none;
	display: inline-block;
	margin-bottom: 5px;
	width: 40%;
	border: 1px solid <?php echo $colortheme; ?>;
	border-radius: 35px;
	text-align: left;
}
.step1.video, .step2.video, .step3.video, .step4.video, .step5.video {
	border: 0px;
	border-radius: 0px;
}
.step-image {
	display: inline-block;
	width: 50px;
	height: 50px;
	background-color: <?php echo $colortheme; ?>;
	border-radius: 35px;
	position: relative;
	top: 2px;
	left: 2px;
}
.step-image img {
	width: 50px;
	height: 50px;
	border-radius: 35px;
}
.step-title {
	display: inline-block;
	padding-left: 15px;
	position: relative;
	bottom: 18px;
	color: <?php echo $colortheme; ?>;
}
.step-link {
	display: inline-block;
	width: 100%;
	height: 50px;
	border-radius: 35px;
}
.step-link:hover {
	box-shadow: 0 0 3px 3px <?php echo $colortheme; ?>;
}
.step-link a {
	display: inline-block;
	width: 100%;
	height: 100%;
	padding-top: 10px;
	padding-left: 10px;
}
.instalments {
	background-color: #f4f4f4;
	border-radius: 20px;
}
.instalments.white {
	background-color: white;
}
.contacts {
	background-image: url('/img/contacts.webp');
	background-position: 100% 0%;
	background-repeat: no-repeat;
	background-size: contain;
}
.instalments, .instalments.white {
	background-image: url('/img/instalments.webp');
	background-position: 100% 0%;
	background-repeat: no-repeat;
	background-size: contain;
}
.contactsblock p {
	display: inline-block;
}
.contactsblock p:first-child {
	width: 95px;
	text-align: right;
	padding-right: 0px !important;
}
.contactsblock p:last-child {
	padding-left: 0px !important;
}
.floatleft {
	float: left;
}
.floatright {
	float: right;
}
.floatnone {
	float: none;
}
.onlyprint {
	display: none;
}
.payments {
	display: block;
	width: 100%;
	text-align: center;
}
.payment {
	display: inline-block;
	position: relative;
	width: 30%;
	padding: 10px;
	margin-bottom: 5px;
	outline: 1px solid <?php echo $colortheme; ?>;
	vertical-align: top;
}
.payment img {
	display: block;
	margin: 0 auto;
}
.payment p {
	text-align: left;
}
.payment .more-block {
	position: relative;
	left: -20px;
}
.payment .illustration2 {
	width: 100%;
	outline: none;
}
.illustration2 {
	display: block;
	position: relative;
	width: 100%;
	max-width: 500px;
	background-color: #eee;
}
.payment:hover .more-block .more-link::after {
	border-bottom: 1px dotted <?php echo $colortheme; ?>;
}
.payment:hover .more-block .more-link:hover::after {
	border-bottom: 1px dashed <?php echo $colortheme; ?>;
}
.smalltext {
	font-size: 14px;
}
.zacherknem {
	text-decoration: line-through;
}
.anchor {
	display: block;
	height: 10px;
}
.lineline {
    position: relative;
}
.lineline:after {
	content: '';
	position: absolute;
	bottom: 0;
	left: 0;
	width: 0;
	height: 1px;
	background: #eee;
	-webkit-transition: all .25s ease;
	transition: all .25s ease;
}
.lineline:hover:after {
	content: '';
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	height: 1px;
	background: <?php echo $colortheme; ?>;
	-webkit-transition: all .25s ease;
	transition: all .25s ease;
}
.smiles img {
	display: inline-block;
	width: 16px;
	height: 16px;
	outline: 0px;
}
.inline {
	display: inline-block !important;
}

@media screen and (max-width:1000px) {
h1, h2 {padding-top: 5px; padding-bottom: 5px;}
.mobile-no {display: none;}
.main-container {width: 100%;}
.headline {text-align: left; margin-left: 20px; padding-left: 45px;}
.detailing-form-input-label {width: 150px; height: 150px;}
.radio-image {width: 150px; height: 150px;}
/* .illustration {width: 150px; height: 150px;} */
.illustration > .radio-image {width: 250px; height: 250px;}
.furniture-card {display: block; width: auto;}
.header-container {width: 100%; height: 80px; overflow: hidden !important;}
.header-logo-image {width: 35px; height: 35px; border-radius: 2px;}
.header-menu {margin-left: 10px;}
.header-menu ul li {margin-top: 15px; padding: 5px 5px 5px 5px; font-size: 13px;}
.colortheme {float: none; position: absolute; width: 100%; height: 20px; overflow: hidden !important; margin: 0 auto; text-align: center;  bottom: 0px; right: 0px;}
.header-phone {display: none;}
.footer-container {width: 100%;}
.footer-container-text {display: block;}
.footer-container-phone {float: left;}
.footer-links {display: block;}
.footer-social {font-size: 18px;}
.step1, .step2, .step3, .step4, .step5 {width: 90%;}
.step-title {padding-left: 5px;}
.instalments, .instalments.white, .contacts {background-image: none;}
.payment {width: 85%; margin: 10px;}
.smalltext {font-size: 16px;}
.more-link::after, .more-link:checked::after {border-bottom: 1px dotted <?php echo $colortheme; ?>;}
.mobilecenter {text-align: center;}
}

@media print {
html {background-color: white;}
body {margin: 1cm 1.5cm 1cm 1.5cm;}
h1 {font-size: 18px; padding: 10px; color: black;}
h2, h3 {font-size: 13px; padding: 2px;}
p {font-size: 11px; padding: 2px;}
.table {font-size: 11px; display: block; width: 100%; border-bottom: 1px dashed black;}
.table-1 {display: inline-block; width: 4%; height: 15px; padding-left: 10px;}
.table-2 {display: inline-block; width: 30%; height: 15px;}
.table-3 {display: inline-block; width: 60%; height: 15px;}
.dogovor-shema {display: block; width: 100%;}
.smalltext {font-size: 12px;}
header {display: none;}
.main-container {width: 100%;}
.page-break {page-break-before: always;}
.colortheme {display:none;}
.detailing-form-button[type="submit"] {display:none;}
* {-webkit-print-color-adjust: exact; print-color-adjust: exact;}
h1 {text-align: center;}
.more-link {display: none;}
/*.more-link ~ .detailing-p, .more-link ~ h2 {display: block;}*/
.instruction-p {display: block;}
p {widows: 4; orphans: 3;}
footer {display: none;}
.step1, .step2, .step3, .step4, .step5 {width: 60%;}
.noprint {display: none !important;}
.onlyprint {display: block;}
.payment {width: 28%;}
.instalments, .instalments.white {background-image: none;}
}
</style>