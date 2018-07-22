<?php
include_once 'header.php';
                        
?>
<?php
include_once 'init.php';
$result = mysqli_query($con, "SELECT * FROM stud_academics");
//fetch data
while ($row = mysqli_fetch_array($result)) {
    $entry .= "['".$row{'stud_fees'}."',".$row{'stud_familyincome'}."],";
}
?>

<div id="chart_div" style="width: 100%; height: 500px;"></div>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
        ['category',	'no_of_students'],
        <?php echo $entry ?>
    ]);
        var options = {
            title: 'Annual Statistics',
            curveType: 'function',
            legend: { position: 'bottom' }
        };
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
</script>
<?php
include_once 'footer.php';
?>