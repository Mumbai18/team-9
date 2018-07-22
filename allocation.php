<?php
include_once 'header.php';
                        
?>
<div class="login">
 <div class="col-sm-1"></div>
	  <div class="col-sm-12">
  <?php
 	$PD=" SELECT * FROM `stud_academics`";
    if ($PDd_query_run=mysqli_query($con,$PD) ) 
    { 
    	while ($query_execute=mysqli_fetch_assoc($PDd_query_run)) 
			{

				$fees+=$query_execute['stud_totalamtrequired'];
				
				 }
}
echo 'Total fees Donation Requested = '.$fees;
				echo '<br>';

  ?>
  <?php
$PDd=" SELECT * FROM `donor_annual`";
    if ($PDd_query_run=mysqli_query($con,$PDd) ) 
    { 
    	while ($query_executee=mysqli_fetch_assoc($PDd_query_run)) 
			{
				$total+=$query_executee['donor_donation'];

				
			}
		}
  echo 'Total Donation Received = '.$total;

 ?>

</div>
   <div class="col-sm-1"></div>
</div>
<?php
include_once 'footer.php';
?>