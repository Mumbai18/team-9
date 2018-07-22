<?php
include_once 'header.php';
?>  
<style>
#myProgress {
    width: 100%;
    background-color: grey;
}
#pgbar{
    padding-top:25%;
}
#myBar {
    width: 1%;
    height: 30px;
    background-color: green;
}
</style>
<script>
    function move() {
    var elem = document.getElementById("myBar"); 
    var width = 1;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= 100) {
            clearInterval(id);
        } else {
            width++; 
            elem.style.width = width + '%'; 
        }
    }
}
</script>
<div id="pgbar">
    <div class="col-sm-3" ></div>
            <div id="myProgress" class="col-sm-6">
            <div id="myBar"></div>
            </div>
    <div class="col-sm-3" ></div>
</div>
<?php
include_once 'footer.php';
?>