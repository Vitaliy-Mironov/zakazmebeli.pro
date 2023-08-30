<?php
echo '
<style>
* {
	margin: 0; padding: 0;
}
html {
	overflow-y: scroll;
}
body {
	display: block;
	outline: 1px solid black;
	margin: 5px auto;
	width: 1000px;
	background-color: white;
	font-size: 12pt;
	font-family: Verdana, sans-serif;
	color: #333;
}
h1 {
	font-size: 32pt;
	font-weight: normal;
	padding: 20px;
	background: linear-gradient(45deg, #EECFBA, #C5DDE8);
	color: #fff;
}
h2 {
	font-size: 20pt;
	font-weight: normal;
	text-transform: uppercase;
	padding: 20px;
}
h3 {
	font-size: 20pt;
	font-weight: normal;
	padding: 20px;
	color: #555;
}
p {
	padding: 5px 20px;
}
.my_form, .output {
	display: block;
}
input, select {
	border: 1px dashed #333;
	font-size: 12pt;
	font-family: Verdana, sans-serif;
	color: #333;
	padding: 0 5px;
	background: rgba(0, 0, 0, 0.0);
}
.button {
	display: inline-block;
	border: 0px;
	outline: 1px solid #333;
	background-color: #ddd;
	cursor: pointer;
	width: 125px;
	height: 24px;
}
.button:hover {
	background-color: #ccc;
}
.text {
	width: 245px;
	height: 24px;
}
.select {
	width: 255px;
	height: 24px;
}
.li {
	width: 235px;
	height: 24px;
}
.span {
	font-style: italic;
}
.ul {
	list-style-type: none;
	font-style: italic;
	padding: 5px 20px;
}
.ul:hover {
	background: linear-gradient(45deg, #f3e7e9, #e3eeff);
}
li {
	list-style-type: none;
	font-style: normal;
	padding: 5px;
	border-left: 1px solid #ccc;
}
.note {
	font-style: italic;
	color: #ccc;
}
.note2 {
	font-size: 10pt;
}
.illustration {
	float: right;
}
.warning {
	color: red;
}
.hidden {
	display: none;
}
.topmenulink {
	display: inline-block;
}
.topmenulink a {
	text-decoration: none;
	border-bottom: 1px dotted #bbb;
	color: #bbb;
}
.topmenutext {
	display: none;
	color: #bbb;
}
.topmenulink:hover ~ .topmenutext {
	display: block;
}
@media screen and (max-width:767px) {
body {
	width: 100%;
	margin: 0;
}
.illustration {
	float: none;
	max-width: 100%;
}
}
</style>
';
?>