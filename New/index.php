<?php
include_once 'header.php';
?>
<script type="text/javascript"> 
  $(document).ready(function() { 
    $('#myCarousel').carousel({ 
      interval: 5000 
    }) 
  }); 
</script> 
<!-- Full Page Image Background Carousel Header --> 
<header id="myCarousel" class="carousel slide"> 
    <!-- Indicators --> 
    <ol class="carousel-indicators"> 
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li> 
        <li data-target="#myCarousel" data-slide-to="1"></li> 
        <li data-target="#myCarousel" data-slide-to="2"></li> 
        <li data-target="#myCarousel" data-slide-to="3"></li> 
        <li data-target="#myCarousel" data-slide-to="4"></li> 
        <li data-target="#myCarousel" data-slide-to="5"></li> 
        <li data-target="#myCarousel" data-slide-to="6"></li> 
        <li data-target="#myCarousel" data-slide-to="7"></li> 
        <li data-target="#myCarousel" data-slide-to="8"></li> 
        <li data-target="#myCarousel" data-slide-to="11"></li> 
        <li data-target="#myCarousel" data-slide-to="10"></li> 
         
    </ol> 
 
    <!-- Wrapper for Slides --> 
    <div class="carousel-inner"> 
        <div class="item active"> 
            <!-- Set the first background image using inline CSS below. --> 
            <img src="2.jpg" style="width:100%; height:450px;"> 
             
        </div> 
        <div class="item"> 
            <!-- Set the second background image using inline CSS below. --> 
            <img src="1.jpg" style="width:100%; height:450px;"> 
        </div> 
        <div class="item"> 
            <!-- Set the third background image using inline CSS below. --> 
            <img src="3.png" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
            <!-- Set the third background image using inline CSS below. --> 
            <img src="4.jpg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
            <!-- Set the third background image using inline CSS below. --> 
            <img src="university5.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="university6.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="university7.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="university8.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="university9.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="university10.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
        <div class="item"> 
                <!-- Set the third background image using inline CSS below. --> 
                <img src="university11.jpeg" style="width:100%; height:450px;"> 
        </div> 
 
 
    </div> 
 
    <!-- Controls --> 
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"> 
        <span class="icon-prev"></span> 
    </a> 
    <a class="right carousel-control" href="#myCarousel" data-slide="next"> 
        <span class="icon-next"></span> 
    </a> 
 
</header><style> 
    button{ 
        padding:0px; 
        margin:0px; 
        background:none; 
        border:none; 
    } 
    button:focus {outline:0;} 
</style> 
<div class="login">
   <h1>INDEX</h1>
</div>
<?php
include_once 'footer.php';
?>