<html>
<head>
    <title>Student Progress Tracker</title>
</head>
<body>
<?php
$username = "root";
$password = "";
$hostname = "localhost";
$entry="";
//connect to database
$con = mysqli_connect($hostname, $username, $password, "educon");
echo "Connected to MySQL<br>";
$result = mysqli_query($con, "SELECT * FROM stud_acadgraph");
//fetch data
while ($row = mysqli_fetch_array($result)) {
    $entry .= "['".$row{'course_name'}."',".$row{'marks'}."],";
}
//close the connection
mysqli_close($con);
?>

<div id="chart_div" style="width: 100%; height: 500px;"></div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['course_name',	'marks'],
        <?php echo $entry ?>
    ]);
        var options = {
            title: 'Progress Tracker',
            curveType: 'function',
            legend: { position: 'bottom' }
        };
        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>
</body>
</html>
