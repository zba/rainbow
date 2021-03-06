<?php header('Content-type: text/css'); 
session_start(); 
$t_site = $_SESSION['t_home'];


echo "/** Session site: $t_site";


?>
/* ***************************************
	RESET CSS
*************************************** */
html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
	margin: 0;
	padding: 0;
	border: 0;
	outline: 0;
	font-weight: inherit;
	font-style: inherit;
	font-size: 100%;
	font-family: inherit;
	vertical-align: baseline;
}
body {
	background-color: white;
}
html, body {
	height: 100%;
	margin-bottom: 1px;
}
img {
	border-width:0;
	border-color:transparent;
}
:focus {
	outline: 0 none;
}
ol, ul {
	list-style: none;
}
em, i {
	font-style:italic;
}
ins {
	text-decoration:none;
}
del {
	text-decoration:line-through;
}
strong, b {
	font-weight:bold;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
caption, th, td {
	text-align: left;
	font-weight: normal;
	vertical-align: top;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: "";
}
blockquote, q {
	quotes: "" "";
}
a {
	text-decoration: none;
}

.page-container {
	max-width: 1020px;
	min-width: 1020px;
	margin-left: auto;
	margin-right: auto;



}

/* translator */

.rainbow-translator {
	font-family: Monaco, "Courier New", Courier, monospace;
	font-size: 12px;
	
	background:#EBF5FF;
	color:#000000;
	overflow:auto;

	overflow-x: auto; /* Use horizontal scroller if needed; for Firefox 2, not needed in Firefox 3 */

	white-space: pre-wrap;
	word-wrap: break-word; /* IE 5.5-7 */

}
.rainbow-translator input {
	border-color: green;

}




/* Clearfix */
.clearfix:after,
.rainbow-grid:after,
.rainbow-layout:after,
.rainbow-inner:after,
.rainbow-page-header:after,
.rainbow-page-footer:after,
.rainbow-head:after,
.rainbow-foot:after,
.rainbow-col:after,
.rainbow-image-block:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;	
}

/* Fluid width container that does not wrap floats */
.rainbow-body,
.rainbow-col-last {
	display: block;
	width: auto;
	word-wrap: break-word;
	overflow: hidden;
	
	/* IE 6, 7 */
	zoom:1;
	*overflow:visible;
}

.rainbow-body:after,
.rainbow-col-last:after {
	display: block;
	visibility: hidden;
	height: 0 !important;
	line-height: 0;
	overflow: hidden;
	
	/* Stretch to fill up available space */
	font-size: xx-large;
	content: " x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x ";
}

/* ***************************************
 * MENUS
 *
 * To add separators to a menu:
 * .rainbow-menu-$menu > li:after {content: '|'; background: ...;}
 *************************************** */
/* Enabled nesting of dropdown/flyout menus */
.rainbow-menu > li { position: relative; }

.rainbow-menu > li:last-child::after {
	display: none;
}

/* Maximize click target */
.rainbow-menu > li > a { display: block }

/* Horizontal menus w/ separator support */
.rainbow-menu-hz > li,
.rainbow-menu-hz > li:after,
.rainbow-menu-hz > li > a,
.rainbow-menu-hz > li > span {
	vertical-align: middle;
}

/* Allow inline image blocks in horizontal menus */
.rainbow-menu-hz .rainbow-body:after { content: '.'; }

/* Inline block */
.rainbow-gallery > li,
.rainbow-button,
.rainbow-icon,
.rainbow-menu-hz > li,
.rainbow-menu-hz > li:after,
.rainbow-menu-hz > li > a,
.rainbow-menu-hz > li > span {
	/* Google says do this, but why? */
	position: relative;

	display: inline-block;
}




/* ***************************************
	Typography
*************************************** */
body {
	font-size: 80%;
	line-height: 1.4em;
	font-family: "Helvetica Neue", Arial, Tahoma, Verdana, sans-serif;
}

a {
	color: #4690D6;
}

a:hover,
a.selected { 	color: #555555;
	text-decoration: underline;
}

p {
	margin-bottom: 15px;
}

p:last-child {
	margin-bottom: 0;
}

pre, code {
	font-family: Monaco, "Courier New", Courier, monospace;
	font-size: 12px;
	
	background:#EBF5FF;
	color:#000000;
	overflow:auto;

	overflow-x: auto; /* Use horizontal scroller if needed; for Firefox 2, not needed in Firefox 3 */

	white-space: pre-wrap;
	word-wrap: break-word; /* IE 5.5-7 */
	
}

pre {
	padding:3px 15px;
	margin:0px 0 15px 0;
	line-height:1.3em;
}

code {
	padding:2px 3px;
}

.rainbow-monospace {
	font-family: Monaco, "Courier New", Courier, monospace;
}

blockquote {
	line-height: 1.3em;
	padding:3px 15px;
	margin:0px 0 15px 0;
	background:#EBF5FF;
	border:none;
	
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}

h1, h2, h3, h4, h5, h6 {
	font-weight: bold;
	color: #0054A7;
}

h1 { font-size: 1.8em; }
h2 { font-size: 1.5em; line-height: 1.1em; padding-bottom:5px}
h3 { font-size: 1.2em; }
h4 { font-size: 1.0em; }
h5 { font-size: 0.9em; }
h6 { font-size: 0.8em; }



/* ***************************************
	Form Elements
*************************************** */
fieldset > div {
	margin-bottom: 15px;
}
fieldset > div:last-child {
	margin-bottom: 0;
}
.rainbow-form-alt > fieldset > .rainbow-foot {
	border-top: 1px solid #CCC;
	padding: 10px 0;
}

label {
	font-weight: bold;
	color: #333;
	font-size: 110%;
}

input, textarea {
	border: 1px solid #ccc;
	color: #666;
	font: "Helvetica Neue",Arial, Helvetica, sans-serif;
	padding: 3px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

input[type=text]:focus, textarea:focus {
	border: solid 1px #4690d6;
	background: #e4ecf5;
	color:#333;
}

textarea {
	width: 100%;
}
.large_textarea {
	height: 200px;	

}


.rainbow-longtext-control {
	float: right;
	margin-left: 14px;
	font-size: 80%;
	cursor: pointer;
}


.rainbow-input-access {
	margin:5px 0 0 0;
}

input[type="checkbox"],
input[type="radio"] {
	margin:0 3px 0 0;
	padding:0;
	border:none;
	width:auto;
}
.rainbow-input-checkboxes.rainbow-horizontal li,
.rainbow-input-radios.rainbow-horizontal li {
	display: inline;
	padding-right: 10px;
}

.rainbow-form-login, .rainbow-form-account {
	max-width: 450px;
}


/* ***************************************
      DATE PICKER
**************************************** */
.ui-datepicker {
	display: none;

	margin-top: 3px;
	width: 208px;
	background-color: white;
	border: 1px solid #0054A7;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	border-radius: 6px;
	overflow: hidden;

	-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}
.ui-datepicker-inline {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.ui-datepicker-header {
	position: relative;
	background: #4690D6;
	color: white;
	padding: 2px 0;
	border-bottom: 1px solid #0054A7;
}
.ui-datepicker-header a {
	color: white;
}
.ui-datepicker-prev, .ui-datepicker-next {
	position: absolute;
	top: 5px;
	cursor: pointer;
}
.ui-datepicker-prev {
	left: 6px;
}
.ui-datepicker-next {
	right: 6px;
}
.ui-datepicker-title {
	line-height: 1.8em;
	margin: 0 30px;
	text-align: center;
	font-weight: bold;
}
.ui-datepicker-calendar {
	margin: 4px;
}
.ui-datepicker th {
	color: #0054A7;
	border: none;
	font-weight: bold;
	padding: 5px 6px;
	text-align: center;
}
.ui-datepicker td {
	padding: 1px;
}
.ui-datepicker td span, .ui-datepicker td a {
	display: block;
	padding: 2px;
	line-height: 1.2em;
	text-align: right;
	text-decoration: none;
}
.ui-datepicker-calendar .ui-state-default {
	border: 1px solid #ccc;
	color: #4690D6;;
	background: #fafafa;
}
.ui-datepicker-calendar .ui-state-hover {
	border: 1px solid #aaa;
	color: #0054A7;
	background: #eee;
}
.ui-datepicker-calendar .ui-state-active,
.ui-datepicker-calendar .ui-state-active.ui-state-hover {
	font-weight: bold;
	border: 1px solid #0054A7;
	color: #0054A7;
	background: #E4ECF5;
}
/* **************************
	BUTTONS
************************** */

/* Base */
.rainbow-button {
	font-size: 14px;
	font-weight: bold;
	
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;

	width: auto;
	padding: 2px 4px;
	cursor: pointer;
	outline: none;
	
	-webkit-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.40);
	-moz-box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.40);
	box-shadow: 0px 1px 0px rgba(0, 0, 0, 0.40);
}
a.rainbow-button {
	padding: 3px 6px;
}

/* Submit: This button should convey, "you're about to take some definitive action" */
.rainbow-button-submit {
	color: white;
	text-shadow: 1px 1px 0px black;
	text-decoration: none;
	border: 1px solid #4690d6;
	background: #4690d6 url(<?=$t_site?>/_graphics/button_graduation.png) repeat-x left 10px;
}

.rainbow-button-submit:hover {
	border-color: #0054a7;
	text-decoration: none;
	color: white;
	background: #0054a7 url(<?=$t_site?>/_graphics/button_graduation.png) repeat-x left 10px;
}

.rainbow-button-submit.rainbow-state-disabled {
	background: #999;
	border-color: #999;
	cursor: default;
}

/* Cancel: This button should convey a negative but easily reversible action (e.g., turning off a plugin) */
.rainbow-button-cancel {
	color: #333;
	background: #ddd url(<?=$t_site?>/_graphics/button_graduation.png) repeat-x left 10px;
	border: 1px solid #999;
}
.rainbow-button-cancel:hover {
	color: #444;
	background-color: #999;
	background-position: left 10px;
	text-decoration: none;
}

/* Action: This button should convey a normal, inconsequential action, such as clicking a link */
.rainbow-button-action {
	background: #ccc url(<?=$t_site?>/_graphics/button_background.gif) repeat-x 0 0;
	border:1px solid #999;
	color: #333;
	padding: 2px 15px;
	text-align: center;
	font-weight: bold;
	text-decoration: none;
	text-shadow: 0 1px 0 white;
	cursor: pointer;
	
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.rainbow-button-action:hover,
.rainbow-button-action:focus {
	background: #ccc url(<?=$t_site?>/_graphics/button_background.gif) repeat-x 0 -15px;
	color: #111;
	text-decoration: none;
	border: 1px solid #999;
}

/* Delete: This button should convey "be careful before you click me" */
.rainbow-button-delete {
	color: #bbb;
	text-decoration: none;
	border: 1px solid #333;
	background: #555 url(<?=$t_site?>/_graphics/button_graduation.png) repeat-x left 10px;
	text-shadow: 1px 1px 0px black;
}
.rainbow-button-delete:hover {
	color: #999;
	background-color: #333;
	background-position: left 10px;
	text-decoration: none;
}

.rainbow-button-dropdown {
	padding:3px 6px;
	text-decoration:none;
	display:block;
	font-weight:bold;
	position:relative;
	margin-left:0;
	color: white;
	border:1px solid #71B9F7;
	
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	border-radius:4px;
	
	-webkit-box-shadow: 0 0 0;
	-moz-box-shadow: 0 0 0;
	box-shadow: 0 0 0;
	
	/*background-image:url(<?=$t_site?>/_graphics/elgg_sprites.png);
	background-position:-150px -51px;
	background-repeat:no-repeat;*/
}

.rainbow-button-dropdown:after {
	content: " \25BC ";
	font-size:smaller;
}

.rainbow-button-dropdown:hover {
	background-color:#71B9F7;
	text-decoration:none;
}

.rainbow-button-dropdown.rainbow-state-active {
	background: #ccc;
	outline: none;
	color: #333;
	border:1px solid #ccc;
	
	-webkit-border-radius:4px 4px 0 0;
	-moz-border-radius:4px 4px 0 0;
	border-radius:4px 4px 0 0;
}

/* ***************************************
	ICONS
*************************************** */


.rainbow-icon {
	background: transparent url(<?=$t_site?>/_graphics/elgg_sprites.png) no-repeat left;
	width: 16px;
	height: 16px;
	margin: 0 2px;
}
.rainbow-icon-arrow-left {
	background-position: 0 -0px;
}
.rainbow-icon-arrow-right {
	background-position: 0 -18px;
}
.rainbow-icon-arrow-two-head {
	background-position: 0 -36px;
}
.rainbow-icon-attention:hover {
	background-position: 0 -54px;
}
.rainbow-icon-attention {
	background-position: 0 -72px;
}
.rainbow-icon-calendar {
	background-position: 0 -90px;
}
.rainbow-icon-cell-phone {
	background-position: 0 -108px;
}
.rainbow-icon-checkmark:hover {
	background-position: 0 -126px;
}
.rainbow-icon-checkmark {
	background-position: 0 -144px;
}
.rainbow-icon-clip:hover {
	background-position: 0 -162px;
}
.rainbow-icon-clip {
	background-position: 0 -180px;
}
.rainbow-icon-cursor-drag-arrow {
	background-position: 0 -198px;
}
.rainbow-icon-delete-alt:hover {
	background-position: 0 -216px;
}
.rainbow-icon-delete-alt {
	background-position: 0 -234px;
}
.rainbow-icon-delete:hover {
	background-position: 0 -252px;
}
.rainbow-icon-delete {
	background-position: 0 -270px;
}
.rainbow-icon-download:hover {
	background-position: 0 -288px;
}
.rainbow-icon-download {
	background-position: 0 -306px;
}
.rainbow-icon-eye {
	background-position: 0 -324px;
}
.rainbow-icon-facebook {
	background-position: 0 -342px;
}
.rainbow-icon-grid:hover {
	background-position: 0 -360px;
}
.rainbow-icon-grid {
	background-position: 0 -378px;
}
.rainbow-icon-home:hover {
	background-position: 0 -396px;
}
.rainbow-icon-home {
	background-position: 0 -414px;
}
.rainbow-icon-hover-menu:hover {
	background-position: 0 -432px;
}
.rainbow-icon-hover-menu {
	background-position: 0 -450px;
}
.rainbow-icon-info:hover {
	background-position: 0 -468px;
}
.rainbow-icon-info {
	background-position: 0 -486px;
}
.rainbow-icon-link:hover {
	background-position: 0 -504px;
}
.rainbow-icon-link {
	background-position: 0 -522px;
}
.rainbow-icon-list {
	background-position: 0 -540px;
}
.rainbow-icon-lock-closed {
	background-position: 0 -558px;
}
.rainbow-icon-lock-open {
	background-position: 0 -576px;
}
.rainbow-icon-mail-alt:hover {
	background-position: 0 -594px;
}
.rainbow-icon-mail-alt {
	background-position: 0 -612px;
}
.rainbow-icon-mail:hover {
	background-position: 0 -630px;
}
.rainbow-icon-mail {
	background-position: 0 -648px;
}
.rainbow-icon-photo {
	background-position: 0 -666px;
}
.rainbow-icon-print-alt {
	background-position: 0 -684px;
}
.rainbow-icon-print {
	background-position: 0 -702px;
}
.rainbow-icon-push-pin-alt {
	background-position: 0 -720px;
}
.rainbow-icon-push-pin {
	background-position: 0 -738px;
}
.rainbow-icon-redo {
	background-position: 0 -756px;
}
.rainbow-icon-refresh:hover {
	background-position: 0 -774px;
}
.rainbow-icon-refresh {
	background-position: 0 -792px;
}
.rainbow-icon-round-arrow-left {
	background-position: 0 -810px;
}
.rainbow-icon-round-arrow-right {
	background-position: 0 -828px;
}
.rainbow-icon-round-checkmark {
	background-position: 0 -846px;
}
.rainbow-icon-round-minus {
	background-position: 0 -864px;
}
.rainbow-icon-round-plus {
	background-position: 0 -882px;
}
.rainbow-icon-rss {
	background-position: 0 -900px;
}
.rainbow-icon-search-focus {
	background-position: 0 -918px;
}
.rainbow-icon-search {
	background-position: 0 -936px;
}
.rainbow-icon-settings-alt:hover {
	background-position: 0 -954px;
}
.rainbow-icon-settings-alt {
	background-position: 0 -972px;
}
.rainbow-icon-settings {
	background-position: 0 -990px;
}
.rainbow-icon-share:hover {
	background-position: 0 -1008px;
}
.rainbow-icon-share {
	background-position: 0 -1026px;
}
.rainbow-icon-shop-cart:hover {
	background-position: 0 -1044px;
}
.rainbow-icon-shop-cart {
	background-position: 0 -1062px;
}
.rainbow-icon-speech-bubble-alt:hover {
	background-position: 0 -1080px;
}
.rainbow-icon-speech-bubble-alt {
	background-position: 0 -1098px;
}
.rainbow-icon-speech-bubble:hover {
	background-position: 0 -1116px;
}
.rainbow-icon-speech-bubble {
	background-position: 0 -1134px;
}
.rainbow-icon-star-alt {
	background-position: 0 -1152px;
}
.rainbow-icon-star-empty:hover {
	background-position: 0 -1170px;
}
.rainbow-icon-star-empty {
	background-position: 0 -1188px;
}
.rainbow-icon-star:hover {
	background-position: 0 -1206px;
}
.rainbow-icon-star {
	background-position: 0 -1224px;
}
.rainbow-icon-tag:hover {
	background-position: 0 -1242px;
}
.rainbow-icon-tag {
	background-position: 0 -1260px;
}
.rainbow-icon-thumbs-down-alt:hover {
	background-position: 0 -1278px;
}
.rainbow-icon-thumbs-down:hover,
.rainbow-icon-thumbs-down-alt {
	background-position: 0 -1296px;
}
.rainbow-icon-thumbs-down {
	background-position: 0 -1314px;
}
.rainbow-icon-thumbs-up-alt:hover {
	background-position: 0 -1332px;
}
.rainbow-icon-thumbs-up:hover,
.rainbow-icon-thumbs-up-alt {
	background-position: 0 -1350px;
}
.rainbow-icon-thumbs-up {
	background-position: 0 -1368px;
}
.rainbow-icon-trash {
	background-position: 0 -1386px;
}
.rainbow-icon-twitter {
	background-position: 0 -1404px;
}
.rainbow-icon-undo {
	background-position: 0 -1422px;
}
.rainbow-icon-user:hover {
	background-position: 0 -1440px;
}
.rainbow-icon-user {
	background-position: 0 -1458px;
}
.rainbow-icon-users:hover {
	background-position: 0 -1476px;
}
.rainbow-icon-users {
	background-position: 0 -1494px;
}
.rainbow-icon-video {
	background-position: 0 -1512px;
}


.rainbow-avatar > .rainbow-icon-hover-menu {
	display: none;
	position: absolute;
	right: 0;
	bottom: 0;
	margin: 0;
	cursor: pointer;
}

.rainbow-ajax-loader {
	background: white url(<?=$t_site?>/_graphics/ajax_loader_bw.gif) no-repeat center center;
	min-height: 31px;
	min-width: 31px;
}

/* ***************************************
	AVATAR ICONS
*************************************** */
.rainbow-avatar {
	position: relative;
	display: inline-block;
}
.rainbow-avatar > a > img {
	display: block;
}
.rainbow-avatar-tiny > a > img {
	width: 35px;
	height: 35px;
	
	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	
	-moz-background-clip:  border;
	background-clip:  border;

	-webkit-background-size: 25px;
	-khtml-background-size: 25px;
	-moz-background-size: 25px;
	-o-background-size: 25px;
	background-size: 25px;
}
.rainbow-avatar-small > a > img {
	width: 45px;
	height: 45px;
	
	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	
	-moz-background-clip:  border;
	background-clip:  border;

	-webkit-background-size: 40px;
	-khtml-background-size: 40px;
	-moz-background-size: 40px;
	-o-background-size: 40px;
	background-size: 40px;
}
.rainbow-avatar-medium > a > img {
	width: 100px;
	height: 100px;
}
.rainbow-avatar-large > a > img {
	width: 200px;
	height: 200px;
}


/* ***************************************
	TABS
*************************************** */
.rainbow-tabs {
	margin-bottom: 5px;
	border-bottom: 2px solid #cccccc;
	display: table;
	width: 100%;
}
.rainbow-tabs li {
	float: left;
	border: 2px solid #ccc;
	border-bottom: 0;
	background: #eee;
	margin: 0 0 0 10px;
	
	-webkit-border-radius: 2px 5px 0 0;
	-moz-border-radius: 2px 5px 0 0;
	border-radius: 2px 5px 0 0;
}
.rainbow-tabs a {
	text-decoration: none;
	display: block;
	padding: 3px 10px 0 10px;
	text-align: center;
	height: 21px;
	color: #999;
}
.rainbow-tabs a:hover {
	background: #dedede;
	color: #4690D6;
}
.rainbow-tabs .rainbow-state-selected {
	border-color: #ccc;
	background: blue;
	font-color: blue;
	font-size: 18px;
	color: blue;
}
.rainbow-tabs .rainbow-state-selected a {
	position: relative;
	top: 2px;
	background: blue;
	color: blue;
}

/* ***************************************
	TOPBAR MENU
*************************************** */
.rainbow-menu-topbar {
	float: left;
}

.rainbow-menu-topbar > li {
	float: left;
}

.rainbow-menu-topbar > li > a {
	padding-top: 2px;
	color: #eee;
	margin: 1px 15px 0;
}

.rainbow-menu-topbar > li > a:hover {
	color: #4690D6;
	text-decoration: none;
}

.rainbow-menu-topbar-alt {
	float: right;
}

.rainbow-menu-topbar .rainbow-icon {
	vertical-align: middle;
	margin-top: -1px;
}

.rainbow-menu-topbar > li > a.rainbow-topbar-logo {
	margin-top: 0;
	padding-left: 5px;
	width: 38px;
	height: 20px;
}

.rainbow-menu-topbar > li > a.rainbow-topbar-avatar {
	width: 18px;
	height: 18px;
}

/* ***************************************
	SITE MENU
*************************************** */
.rainbow-menu-site {
	z-index: 1;
}

.rainbow-menu-site > li > a {
	font-weight: bold;
	padding: 3px 13px 0px 13px;
	height: 20px;
}

.rainbow-menu-site > li > a:hover {
	text-decoration: none;
}

.rainbow-menu-site-default {
	position: absolute;
	bottom: 0;
	left: 0;
	height: 23px;
}

.rainbow-menu-site-default > li {
	float: left;
	margin-right: 1px;
}

.rainbow-menu-site-default > li > a {
	color: white;
}

.rainbow-menu-site > li > ul {
	display: none;
	background-color: white;
}

.rainbow-menu-site > li:hover > ul {
	display: block;
}

.rainbow-menu-site-default > .rainbow-state-selected > a,
.rainbow-menu-site-default > li:hover > a {
	background: white;
	color: #555;

	-webkit-box-shadow: 2px -1px 1px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 2px -1px 1px rgba(0, 0, 0, 0.25);
	box-shadow: 2px -1px 1px rgba(0, 0, 0, 0.25);

	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}

.rainbow-menu-site-more {
	position: relative;
	left: -1px;
	width: 100%;
	min-width: 150px;
	border: 1px solid #999;
	border-top: 0;

	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;

	-webkit-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	-moz-box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
	box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.25);
}

.rainbow-menu-site-more > li > a {
	background-color: white;
	color: #555;

	-webkit-border-radius: 0;
	-moz-border-radius: 0;
	border-radius: 0;

	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.rainbow-menu-site-more > li > a:hover {
	background: #4690D6;
	color: white;
}

.rainbow-menu-site-more > li:last-child > a,
.rainbow-menu-site-more > li:last-child > a:hover {
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}

.rainbow-more > a:before {
	content: "\25BC";
	font-size: smaller;
	margin-right: 4px;
}

/* ***************************************
	TITLE
*************************************** */
.rainbow-menu-title {
	float: right;
}

.rainbow-menu-title > li {
	display: inline-block;
	margin-left: 4px;
}

/* ***************************************
	FILTER MENU
*************************************** */
.rainbow-menu-filter {
	margin-bottom: 5px;
	border-bottom: 2px solid #ccc;
	display: table;
	width: 100%;
}
.rainbow-menu-filter > li {
	float: left;
	border: 2px solid #ccc;
	border-bottom: 0;
	background: #eee;
	margin: 0 0 0 10px;
	
	-webkit-border-radius: 2px 5px 0 0;
	-moz-border-radius: 2px 5px 0 0;
	border-radius: 2px 5px 0 0;
}
.rainbow-menu-filter > li:hover {
	background: #dedede;
}
.rainbow-menu-filter > li > a {
	text-decoration: none;
	display: block;
	padding: 3px 10px 0;
	text-align: center;
	height: 21px;
	color: #999;
}
.rainbow-menu-filter > li > a:hover {
	background: #dedede;
	color: #4690D6;
}
.rainbow-menu-filter > .rainbow-state-selected {
	border-color: #ccc;
	background: white;
	color: blue;
}
.rainbow-menu-filter > .rainbow-state-selected > a {
	position: relative;
	top: 2px;
	background: white;
	color: #3352c6;
}

/* ***************************************
	PAGE MENU
*************************************** */
.rainbow-menu-page {
	margin-bottom: 15px;
}

.rainbow-menu-page a {
	display: block;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
	
	background-color: white;
	margin: 0 0 3px;
	padding: 2px 4px 2px 8px;
}
.rainbow-menu-page a:hover {
	background-color: #0054A7;
	color: white;
	text-decoration: none;
}
.rainbow-menu-page li.rainbow-state-selected > a {
	background-color: #4690D6;
	color: red;

}
.rainbow-menu-page .rainbow-child-menu {
	display: none;
	margin-left: 15px;
}
.rainbow-menu-page .rainbow-menu-closed:before, .rainbow-menu-opened:before {
	display: inline-block;
	padding-right: 4px;
}
.rainbow-menu-page .rainbow-menu-closed:before {
	content: "\002B";
}
.rainbow-menu-page .rainbow-menu-opened:before {
	content: "\002D";
}


/****************************************
	SITE FOOTER
*************************************** */
.rainbow-menu-footer > li,
.rainbow-menu-footer > li > a {
	display: inline-block;
	color: #999;
}

.rainbow-menu-footer > li:after {
	content: "\007C";
	padding: 0 4px;
}

.rainbow-menu-footer-default {
	float: right;
}

.rainbow-menu-footer-alt {
	float: left;
}

/****************************************
	GENERAL MENU
*************************************** */
.rainbow-menu-general > li,
.rainbow-menu-general > li > a {
	display: inline-block;
	color: #999;
}

.rainbow-menu-general > li:after {
	content: "\007C";
	padding: 0 4px;
}



/****************************************
	Modules
*************************************** */
.rainbow-module {
	overflow: hidden;
	margin-bottom: 20px;
}

/* Aside */
.rainbow-module-aside .rainbow-head {
	border-bottom: 1px solid #CCC;
	
	margin-bottom: 5px;
	padding-bottom: 5px;
}

/* Info */
.rainbow-module-info > .rainbow-head {
	background: #e4e4e4;
	padding: 5px;
	margin-bottom: 10px;
	
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
}
.rainbow-module-info > .rainbow-head * {
	color: #333;
}

/* Popup */
.rainbow-module-popup {
	background-color: white;
	border: 1px solid #ccc;
	
	z-index: 500;
	margin-bottom: 0;
	padding: 5px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	
}
.rainbow-module-popup > .rainbow-head {
	margin-bottom: 5px;
}
.rainbow-module-popup > .rainbow-head * {
	color: #0054A7;
}

/* Dropdown */
.rainbow-module-dropdown {
	background-color:white;
	border:5px solid #CCC;
	
	-webkit-border-radius: 2px 0 5px 5px;
	-moz-border-radius: 2px 0 5px 5px;
	border-radius: 2px 0 5px 5px;
	
	display:none;
	
	width: 210px;
	padding: 12px;
	margin-right: 0px;
	z-index:100;
	
	-webkit-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	box-shadow: 0 3px 3px rgba(0, 0, 0, 0.45);
	
	position:absolute;
	right: 0px;
	top: 100%;
}

/* Featured */
.rainbow-module-featured {
	border: 1px solid #4690D6;
	
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}
.rainbow-module-featured > .rainbow-head {
	padding: 5px;
	background-color: #4690D6;
}
.rainbow-module-featured > .rainbow-head * {
	color: white;
}
.rainbow-module-featured > .rainbow-body {
	padding: 10px;
}



/* ***************************************
	Image Block
*************************************** */
.rainbow-image-block {
	padding: 3px 0;
}
.rainbow-image-block .rainbow-image {
	float: left;
	margin-right: 5px;
}
.rainbow-image-block .rainbow-image-alt {
	float: right;
	margin-left: 5px;
}

/* ***************************************
	List
*************************************** */
.rainbow-list {
	border-top: 1px dotted #CCCCCC;
	margin: 5px 0;
	clear: both;
}

.rainbow-list > li {
	border-bottom: 1px dotted #CCCCCC;
}

.rainbow-item .rainbow-subtext {
	margin-bottom: 5px;
}
.rainbow-item .rainbow-content {
	margin: 10px 5px;
}
.rainbow-old-item {
	background-color: #fafbfa;

}
.rainbow-new-item {
	background-color: #ffffff;

}





/* ***************************************
	Tables
*************************************** */
.rainbow-table {
	width: 100%;
	border-top: 1px solid #ccc;
}
.rainbow-table td, .rainbow-table th {
	padding: 4px 8px;
	border: 1px solid #ccc;
}
.rainbow-table th {
	background-color: #ddd;
}
.rainbow-table tr:nth-child(odd), .rainbow-table tr.odd {
	background-color: #fff;
}
.rainbow-table tr:nth-child(even), .rainbow-table tr.even {
	background-color: #f0f0f0;
}
.rainbow-table-alt {
	width: 100%;
	border-top: 1px solid #ccc;
}
.rainbow-table-alt th {
	background-color: #eee;
	font-weight: bold;
}
.rainbow-table-alt td, .rainbow-table-alt th {
	padding: 2px 4px 2px 4px;
	border-bottom: 1px solid #ccc;
}
.rainbow-table-alt td:first-child {
	width: 200px;
}
.rainbow-table-alt tr:hover {
	background: #E4E4E4;
}


/* ***************************************
	Messages
*************************************** */
.rainbow-message {
	color: white;
	font-weight: bold;
	display: block;
	padding: 3px 10px;
	cursor: pointer;
	opacity: 0.9;
	
	-webkit-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 0 2px 5px rgba(0, 0, 0, 0.45);
	box-shadow: 0 2px 5px rgba(0, 0, 0, 0.45);
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}
.rainbow-state-success {
	background-color: black;
}
.rainbow-state-error {
	background-color: red;
}
.rainbow-state-notice {
	background-color: #4690D6;
}

/* ***************************************
	River
*************************************** */
.rainbow-list-river {
	border-top: 1px solid #CCC;
}
.rainbow-list-river > li {
	border-bottom: 1px solid #CCC;
}
.rainbow-river-item {
	padding: 7px 0;
}
.rainbow-river-item .rainbow-pict {
	margin-right: 20px;
}
.rainbow-river-timestamp {
	color: #666;
	font-size: 85%;
	font-style: italic;
	line-height: 1.2em;
}

.rainbow-river-attachments,
.rainbow-river-message,
.rainbow-river-content {
	border-left: 1px solid #CCC;
	font-size: 120%;
	line-height: 1.5em;
	margin: 8px 0 5px 0;
	padding-left: 5px;
}
.rainbow-river-attachments .rainbow-avatar,
.rainbow-river-attachments .rainbow-icon {
	float: left;
}
.rainbow-river-layout .rainbow-input-dropdown {
	float: right;
	margin: 10px 0;
}

.rainbow-river-comments-tab {
	display: block;
	background-color: #EEE;
	color: #4690D6;
	margin-top: 5px;
	width: auto;
	float: right;
	font-size: 85%;
	padding: 1px 7px;
	
	-webkit-border-radius: 2px 5px 0 0;
	-moz-border-radius: 2px 5px 0 0;
	border-radius: 2px 5px 0 0;
}

.rainbow-comment-box {
	background-color:lightred;
	margin: 10px
	padding: 10px;
	margin-left: 50px;

}
.timetagline a {
	font-size: 10px;
	font-color: #7999cd;
}
.timetagline a.selected {
	font-size: 10px;
	font-color: #7999cd;
}


.rainbow-comment {

line-height: 1.28;
height: 20px;
width:380px;
font-family: 'Helvetica Neue',tahoma,verdana,arial,sans-serif;
font-size: 11px;

padding: 3px;
overflow: hidden;
resize: none;
}


.rainbow-river-comments {
	margin: 0;
	border-top: none;
}
.rainbow-river-comments li:first-child {
	-webkit-border-radius: 0px 0 0;
	-moz-border-radius: 0px 0 0;
	border-radius: 0px 0 0;
}
.rainbow-river-comments li:last-child {
	-webkit-border-radius: 0 0 0px 0px;
	-moz-border-radius-bottomleft: 0 0 0px 0px;
	border-radius-bottomleft: 0 0 0px 0px;
}
.rainbow-river-comments li {
	background-color: #EEE;
	border-bottom: none;
	padding: 0px;
	margin-bottom: 2px;
}
.rainbow-river-comments .rainbow-media {
	padding: 0;
}
.rainbow-river-more {
	background-color: #EEE;
	
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	
	padding: 2px 4px;
	font-size: 85%;
	margin-bottom: 2px;
}

.rainbow-river-item form {
	background-color: #EEE;
	padding: 4px;
	
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	border-radius: 2px;
	
	height: 30px;
}
.rainbow-river-item input[type=text] {
	width: 80%;
}
.rainbow-river-item input[type=submit] {
	margin: 0 0 0 10px;
}




/* ***************************************
	PAGE LAYOUT
*************************************** */
/***** DEFAULT LAYOUT ******/
.rainbow-page-default {
	min-width: 998px;
}
.rainbow-page-default .rainbow-page-header > .rainbow-inner {
	width: 990px;
	margin: 0 auto;
	height: 95px;
	z-index:0;
}
.rainbow-page-default .rainbow-page-body > .rainbow-inner {
	width: 990px;
	margin: 0 auto;
	z-index:0;
}
.rainbow-page-default .rainbow-page-footer > .rainbow-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
	border-top: 1px solid #DEDEDE;
}

/***** TOPBAR ******/
.rainbow-page-topbar {
	background: #333333 url(<?=$t_site?>/_graphics/toptoolbar_background.gif) repeat-x top left;
	border-bottom: 1px solid #000000;
	position: relative;
	height: 24px;
	z-index: 10;
}
.rainbow-page-topbar > .rainbow-inner {
	padding: 0 10px;
}

/***** PAGE MESSAGES ******/
.rainbow-system-messages {
	position: fixed;
	top: 40px;
	right: 20px;
	max-width: 500px;
	z-index: 10;
}
.rainbow-system-messages li {
	margin-top: 10px;
}
.rainbow-system-messages li p {
	margin: 0;
}

/***** PAGE HEADER ******/
.rainbow-page-header {
	position: relative;
	background: #4690D6 url(<?=$t_site?>/_graphics/header_shadow.png) repeat-x bottom left;
}
.rainbow-page-header > .rainbow-inner {
	position: relative;
}

/***** PAGE BODY LAYOUT ******/
.rainbow-layout {
	min-height: 360px;
}
.rainbow-layout-one-sidebar {
	background: transparent url(<?=$t_site?>/_graphics/sidebar_background.gif) repeat-y right top;
}
.rainbow-layout-left-sidebar {
	background: transparent url(<?=$t_site?>/_graphics/left_sidebar_background.gif) repeat-y right top;
}
.rainbow-layout-two-sidebar {
	background: transparent url(<?=$t_site?>/_graphics/two_sidebar_background.gif) repeat-y right top;
}
.rainbow-layout-error {
	margin-top: 20px;
}
.rainbow-sidebar {
	position: relative;
	padding: 20px 15px;
	float: right;
	width: 210px;
	margin: 0 0 0 10px;
}
.rainbow-sidebar-alt {
	position: relative;
	padding: 20px 10px;
	float: left;
	width: 160px;
	margin: 0 10px 0 0;
}
.rainbow-main {
	position: relative;
	padding: 10px;
}
.rainbow-main > .rainbow-head {
	padding-bottom: 3px;
	border-bottom: 1px solid #CCCCCC;
	margin-bottom: 10px;
}

/***** PAGE FOOTER ******/
.rainbow-page-footer {
	position: relative;
}
.rainbow-page-footer {
	color: #999;
}
.rainbow-page-footer a:hover {
	color: #666;
}


/* ***************************************
	AVATAR UPLOADING & CROPPING
*************************************** */

#current-user-avatar {
	border-right:1px solid #ccc;
}
#avatar-croppingtool {
	border-top: 1px solid #ccc;
}
#user-avatar-cropper {
	float: left;
}
#user-avatar-preview {
	float: left;
	position: relative;
	overflow: hidden;
	width: 100px;
	height: 100px;
}


.clearfloat { 
	clear: both;
}

.hidden {
	display: none;
}

.centered {
	margin: 0 auto;
}

.center {
	text-align: center;
}

.float {
	float: left;
}

.float-alt {
	float: right;
}

.link {
	cursor: pointer;
}

.rainbow-discover .rainbow-discoverable {
	display: none;
}

.rainbow-discover:hover .rainbow-discoverable {
	display: block;
}

.rainbow-transition:hover {
	opacity: .7;
}

/* ***************************************
	BORDERS AND SEPARATORS
*************************************** */
.rainbow-border-plain {
	border: 1px solid #eeeeee;
}
.rainbow-border-transition {
	border: 1px solid #eeeeee;
}
.rainbow-divide-top {
	border-top: 1px solid #CCCCCC;
}
.rainbow-divide-bottom {
	border-bottom: 1px solid #CCCCCC;
}
.rainbow-divide-left {
	border-left: 1px solid #CCCCCC;
}
.rainbow-divide-right {
	border-right: 1px solid #CCCCCC;
}


/*** message metadata ***/
.messages-head {
	background: #EEE;
	border: 1px solid #666;
	padding: 5px 0 0 10px;
	-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.45);
	box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.45);
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
}
.messages-head-info {
	margin-left: 10px;
}
.messages-body {
	background: white;
	border: 1px solid #666;
	-webkit-box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.45);
	-moz-box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.45);
	box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.45);
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	padding: 5px;
	overflow: hidden;
	margin-bottom: 20px;
}
/*** topbar icon ***/
.messages-new {
	color: white;
	background-color: red;
	
	-webkit-border-radius: 10px; 
	-moz-border-radius: 10px;
	border-radius: 10px;
	
	-webkit-box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.50);
	-moz-box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.50);
	box-shadow: -2px 2px 4px rgba(0, 0, 0, 0.50);
	
	position: absolute;
	text-align: center;
	top: 0px;
	left: 26px;
	min-width: 16px;
	height: 16px;
	font-size: 10px;
	font-weight: bold;
}

/*** message table styles ***/
.msg-list-attachment {
	width: 3%;
}
.msg-list-owner {
	width: 20%;
}
.msg-list-subject {
	width: 45%;
}
.msg-list-timestamp {
	width: 20%;
}
.msg-list-delete {
	width: 8%;
}
.messages-warning {
	font-weight: bold;
	line-height: 1.3em;
	padding:3px 15px;
	margin:0px 0 15px 0;
	background:#ffbd00;
	border:none;
	
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
.messages-error {
	font-weight: bold;
	line-height: 1.3em;
	padding:3px 15px;
	margin:0px 0 15px 0;
	color:white;
	background:red;
	border:none;
	
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
}
/*** message send popup ***/
.messages-popup-wrapper {
	min-width: 350px;
	min-height: 550px;

}






/**********************************
Search plugin
***********************************/
.rainbow-search-header {
	bottom: 5px;
	height: 23px;
	position: absolute;
	right: 120;
}
.rainbow-search input[type=text] {
	width: 430px;
}
.rainbow-search input[type=submit] {
	display: none;
}
.rainbow-search input[type=text] {
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	border: 1px solid #71b9f7;
	color: white;
	font-size: 12px;
	font-weight: bold;
	padding: 2px 4px 2px 26px;
	background: transparent url(<?=$t_site?>/_graphics/elgg_sprites.png) no-repeat 2px -934px;
}
.rainbow-search input[type=text]:focus, .rainbow-search input[type=text]:active {
	background-color: white;
	background-position: 2px -916px;
	border: 1px solid white;
	color: #0054A7;
}


/********************************
The Wire
*********************************/
.feed-textarea {
	 -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
     -moz-box-sizing: border-box;    /* Firefox, other Gecko */
     box-sizing: border-box;
}
.feed-text-message {
	font-family: 'Helvetica Neue',tahoma,verdana,arial,sans-serif;
	font-size: 13px;
	line-height: 1.38;
	zoom: 1;
	direction: ltr;

}


#site_messages_activity{
text-align : justify;
height:85px;
overflow: hidden;
padding : 5px ;
margin: 0 0 5px 0;

}

.rainbow-module-popup {
background-color: #f7ebe7;

}

#site_messages{
text-align : justify;
height:154px;
overflow: hidden;
padding : 5px ;
margin: 0 0 5px 0;
}



#welcome{
text-align : center;
overflow: hidden;
padding : 5px ;
background-color :white;
margin: 0 0 5px 0;
-moz-border-radius: 6px;
-webkit-border-radius: 6px;
color:blue;
font-weight: bold;
}




.rainbow-sidebar {
	position: relative;
	padding: 20px 10px;
	float: right;
	width: 230px;
	margin: 0 0 0 10px;
	
}



/* Popup */
.rainbow-module-popup {
	background-color: white;
	border: 1px solid #ccc;
	
	z-index: 40;
	margin-bottom: 15px;
	padding: 5px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	
	-webkit-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	-moz-box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
	box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.5);
}
.rainbow-module-popup > .rainbow-head {
	margin-bottom: 5px;
        border-bottom: 1px solid #ccc;
}





