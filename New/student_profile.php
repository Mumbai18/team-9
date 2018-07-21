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
</style>
<div class="login">
  
  <a href="personal_d.php" class="btn btn-info" role="button">PD</a>
  <a href="academic_d.php" class="btn btn-info" role="button">AD</a>
  <a href="upload_d.php" class="btn btn-info" role="button">UD</a>
</div>





<?php
include_once 'footer.php';
?>