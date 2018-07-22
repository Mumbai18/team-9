<?php
include_once 'header.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <link href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css"
        rel = "stylesheet">
    
<script >
    $(document).ready(function () {
    $(".dropdown-trigger").dropdown();
    $('.parallax').parallax();
    console.log('Script called');
});
</script>

<style>
        .parallax-container {
            height: 500px;
        }
        
</style>

<div class="parallax-container">
            <div class="parallax"><img src="vision.jpg"></div>
        </div>
        <div class="section white">
            <div class="row container">
                <h6 class="header">JSG Educon Vision</h5>
                <p style="font-size:28px;" class="grey-text text-darken-3 lighten-3"><i>-Sab Padho,Sab Badho</i></p>
            </div>
        </div>
        <div class="parallax-container">
            <div class="parallax"><img src="events.jpg"></div>
        </div>
        <div class="section white">
            <div class="row container">
                <h3 class="header">Achievement of our students</h3>
                <p class="grey-text text-darken-3 lighten-3">Be there before anyone of you miss an an opportunity. Start the journey towards a bright future today.</p>
            </div>
        </div>
        <div class="parallax-container">
            <div class="parallax"><img src="about.jpg"></div>
        </div>
        <div class="section white" style="padding-bottom:10%;">
            <div class="row container">
                <h3 class="header">About Us </h3>
                <p class="grey-text text-darken-3 lighten-3">Educon is working since 2012 to support needy and deserving students from all segments of society in Realizing their Dream of Education.</p>
            </div>
        </div>
    </div>

<?php
include_once 'footer.php';
?>