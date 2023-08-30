<style>
* {
	margin: 0;
	padding: 0;
}
html {
	overflow-y: scroll;
}
.header {}
.header-container {}
.mail {}
.main-container {
	display: block;
	margin: 0 auto;
	width: 1000px;
	font-family: Verdana, sans-serif;
}
.footer {}
.footer-container {}
h1 {
	font-weight: normal;
	padding: 40px 10px 10px 10px;
	color: <?php echo $colortheme; ?>;
}
h2 {
	font-weight: normal;
	padding: 10px;
}
p {
	font-size: 16px;
	padding: 10px;
}
.detailing-p {
	font-size: 16px;
	padding: 10px;
}
.detailing-p-link {
	color: <?php echo $colortheme; ?>;
	text-decoration: none;
	border-bottom: 1px solid white;
}
.detailing-p-link:hover {
	border-bottom: 1px dotted <?php echo $colortheme; ?>;
}
.detailing-form {
	margin: 0 10px;
	text-align: center;
}
.detailing-form-fieldset {
	display: block;
	width: 100%;
	border: 1px solid black;
	border-radius: 20px;
	text-align: center;
	padding-top: 10px;
	padding-bottom: 30px;
	margin-bottom: 20px;
}
.detailing-form-fieldset-legend {
	margin: 0 auto;
	color: <?php echo $colortheme; ?>;
	background-color: white;
	border: 1px solid black;
	border-radius: 20px;
	padding: 10px;
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
.detailing-form-input-image {
	width: 250px;
	height: 250px;
	box-shadow: 0 0 1px 1px white;
	border-radius: 50%;
}
.detailing-form-map {
	display: block;
	width: 250px;
	height: 250px;
	margin: 0 auto;
	background-color: <?php echo $colortheme; ?>;
	border-radius: 50%;
	box-shadow: 0 0 0 1px black, 0 0 0 5px white, 0 0 0 6px gray;
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
.detailing-form-input-radio:disabled ~ .detailing-form-input-span,
.detailing-form-input-radio:disabled ~ .detailing-form-input-span:hover {
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
.detailing-form-input-radio {
	display: none;
}
.detailing-form-input-radio ~ .detailing-form-input-span:hover,
.detailing-form-input-radio:checked ~ .detailing-form-input-span {
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
.detailing-form-input-textlabel {
	display: block;
	text-align: right;
	padding: 5px;
	border: 1px solid <?php echo $colortheme; ?>;
	border-radius: 30px;
	background-color: white;
	width: 140px;
}
.detailing-form-input-textlabel:hover {
	box-shadow: 0 0 3px 3px <?php echo $colortheme; ?>;
}
.detailing-form-input-textnumber {
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
.detailing-form-button {
	display: none;
}
.step:nth-last-of-type(3) .detailing-form-button,
.step:nth-last-of-type(2) .detailing-form-button {
	display: inline-block;
	position: relative;
	top: -40px;
	font-size: 16px;
	background-color: white;
	border: 1px solid black;
	border-radius: 20px;
	padding: 10px;
	cursor: pointer;
	outline: none;
	transition: 0.5s;
}
.step:nth-last-of-type(3) .detailing-form-button:hover,
.step:nth-last-of-type(2) .detailing-form-button:hover {
	color: white;
	background-color: black;
	outline: none;
	transition: 0.5s;
}
.step:nth-last-of-type(3) fieldset div .hidden-message,
.step:nth-last-of-type(2) fieldset div .hidden-message {
	display: none;
}
.detailing-form-note {
	position: relative;
	top: -50px;
	text-align: left;
}
.detailing-form-note-p {
	display: none;
	font-size: 12pt;
}
.detailing-form-note-p:first-of-type {
	margin-top: 40px;
}
.detailing-form-note-checkbox {
	position: relative;
	left: 40px;
	display: inline-block;
	outline: none;
	padding: 10px;
}
.detailing-form-note-checkbox::before {
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
.detailing-form-note-checkbox:checked::before {
	content: "x";
	font-weight: normal;
	transition: 0.5s;
}
.detailing-form-note-checkbox:checked:hover::before,
.detailing-form-note-checkbox:hover::before {
	background-color: <?php echo $colortheme; ?>;
	color: white;
	transition: 0.5s;
}
.detailing-form-note-checkbox:checked ~ .detailing-form-note-p {
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
.detailing-button-cleaning {
	position: fixed;
	bottom: 1px;
	left: 1px;
	background-color: rgba(204, 204, 204, 0.5);
}
.detailing-button-cleaning:hover {
	background-color: red;
	color: white;
}
.detailing-textbutton-cleaning {
	font-size: 12pt;
	color: red;
	border: 0;
	border-bottom: 1px dotted red;
	background-color: white;
	cursor: pointer;
	outline: none;
}
.detailing-textbutton-cleaning:hover {
	border-bottom: 1px dashed red;
}
.colortheme {
	display: block;
	width: 1000px;
	height: 21px;
	overflow: hidden !important;
	margin: 0 0px;
	padding: 10px 0;
	position: fixed;
	z-index: 100;
	background: rgba(255, 255, 255, 0.8);
	text-align: center;
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
	border-bottom: 1px dotted <?php echo $colortheme; ?>;
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
	left: -15px;
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
.logos-images {
	display: inline-block;
	width: 80px;
	height: 80px;
	border: none;
	box-shadow: 0 0 1px 1px <?php echo $colortheme; ?>;
	border-radius: 50%;
}
.underline {
	text-decoration: underline;
}
.hidden {
	display: none;
}
.red {
	color: red;
}
.test {
	color: #399;
	font-family: 'Courier New', monospace;
	font-size: 12px;
	padding: 0px;
}

@media screen and (max-width:1000px) {
	.main-container {width: 100%;}
	.colortheme {width: 100%;}
	.detailing-form-input-label {width: 150px; height: 150px;}
	.detailing-form-input-image {width: 150px; height: 150px;}
	.detailing-form-map {width: 150px; height: 150px;}
}
@media print {
	.detailing-form {page-break-after: always;}
	.colortheme {display:none;}
	.detailing-form-button[type="submit"] {display:none;}
}
</style>