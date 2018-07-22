<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}
/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 30%;
    height:800px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
}
/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}
/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}
/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 70%;
    border-left: none;
    height: 100%;
}
/* BUTTON GRADIENT */

.button.button-gradient {
	background-color: transparent;
	background: -webkit-linear-gradient(left,#25A6CB 0%, #28BD4D 100%);
	background: -moz-linear-gradient(left,#25A6CB 0%, #28BD4D 100%);
	background: -ms-linear-gradient(left,#25A6CB 0%, #28BD4D 100%);
	background: -o-linear-gradient(left,#25A6CB 0%, #28BD4D 100%);
	background: linear-gradient(to right,#25A6CB 0%, #28BD4D 100%);
	border-bottom: 0;
	border-radius: 50px;
	box-shadow: 0 10px 48px -6px rgba(0, 0, 0, .35);
	letter-spacing: 2px;
	padding: 13px 29px;
	text-shadow: none;
    height: 25%;
    width: 25%;
	text-transform: uppercase;
}

</style>
<script type="text/javascript">
        var headID = document.getElementsByTagName("head")[0];
        var newCss = document.createElement('link');
        newCss.rel = 'stylesheet';
        newCss.type = 'text/css';
        window._botUsername = '756386';
        window._botName = 'radhika';
        newCss.href = "https://rebot.me/assets/css/bot.css";
        var newScript = document.createElement('script');
        newScript.src = "https://rebot.me/assets/js/bot.js";
        newScript.type = 'text/javascript';
        headID.appendChild(newScript);
        headID.appendChild(newCss);
</script>

<div class="login">
  <div class="col-sm-3"></div>
  <div class="col-sm-6">
  <a href="personal_d.php" class="button button-gradient" role="button">Personal Details</a>
  <a href="academic_d.php" class="button button-gradient" role="button">Academin Details</a>
  <a href="upload_d.php" class="button button-gradient" role="button">Upload Details</a>
  <a href="progress.php" class="button button-gradient" role="button">Application status tracking</a>
  </div>
  <div class="col-sm-3"></div>
</div>
<?php
include_once 'footer.php';
?>