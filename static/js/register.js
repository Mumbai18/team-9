$(document).ready(function () {
    $('.datepicker').datepicker();
});

document.getElementById("formwrap").addEventListener("submit",function(e){
    e.preventDefault();
    window.location.href = "ulogin.php"
});