<?php
include 'header.php'
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function () {
$("#btndocs").click(function(){
	var url="viewdocs.php"
$('#myModal .btn-info').click(function(){
	window.location.href=url;
});
});
});
</script>

<style>
.card-title{
  font-size: 16px;
  padding: 10px;

}

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
#bottom{
  float: right;
}
* {
    box-sizing: border-box;
}
/*This just stops me getting horizontal scrolling if anything overflows the width*/
body {
    overflow-x: hidden;
}
/*Just removing default browser padding/margin*/
html,
body {
    padding: 0;
    margin: 0;
    color: #ebebeb;
}
/*Flexbox gives us the flexiness we need. The top just stays put as there is no scrolling on the body due to the page never exceeding viewport height*/
.Top {
    display: flex;
    align-items: center;
    justify-content: center;
    
    font-size: 3rem;
    position: relative;
    z-index: 10;
    height: 100px;
}
/*This is our main wrapping element, it's made 100vh high to ensure it is always the correct size and then moved into place and padded with negative margin and padding*/
.Container {
    display: flex;
    overflow: hidden;
    height: 100vh;
    margin-top: -100px;
    padding-top: 100px;
    position: relative;
    width: 100%;
    backface-visibility: hidden;
    will-change: overflow;
}

.Left,
.Middle,
.Right {
    overflow: auto;
    height: auto;
    padding: .5rem;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: none;
}

.Left::-webkit-scrollbar,
.Middle::-webkit-scrollbar,
.Right::-webkit-scrollbar {
    display: none;
}

.Left {
    width: 12.5rem;
    
}

.Middle {
    flex: 1;
}

.Right {
    width: 12.5rem;
    
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
.checked {
    color: orange;
}
.card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
    padding: 2px 16px;
}
.card-body
{
  padding: 10px;  
  color: black; 
}
</style>
</head>
<body>
  <div class="Top"></div>
    <div class="Container">
        <div class="Left"></div>
        <div class="Middle">
          <div class="shadow-sm p-3 mb-5 bg-light rounded">
			<div class="card" style="width: 80%;">
			  <div class="card-body">
			    <div class="col-sm-6"><h5 class="card-title">Student name</h5></div>
			    <div class="col-sm-6">
			    <h6 class="card-subtitle mb-2 text-muted"></h6>
			    <p class="card-text">
			    	<h3>Ratings :</h3>
			      <div class="col-sm-6"><input type="text" name="" id="er" placeholder="Educational"></div>
			      <div class="col-sm-6"><input type="text" name="" id="fr" placeholder="Financial"></div>
			    </p>
			</div>
		<div>
   			<button type="button" class="btn btn-info" style="padding-left: 10px;text-align: center;" data-target="#myModal" data-toggle="modal" >Documents  </button>
  			<div id="bottom">
  				<button type="button" class="btn btn-success" id="approve" value="Approve">Approve</button>
			   	<button type="button" class="btn btn-warning" id="approve" value="Reject">Reject</button>
			    
			  </div>
  			</div>
  		</div>
        <div class="Right"></div>
   	</div>
</div>

</div>
</div>
</div>

</body>
</html> 
