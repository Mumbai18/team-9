<?php
include_once 'header.php';
                        
?>
<div class="login">
 <div class="col-sm-1"></div>
	  <div class="col-sm-12">
  <?php
 	$PD=" SELECT * FROM `donor`";
    if ($PD_query_run=mysqli_query($con,$PD) ) 
    { 
        echo '<table class="table table-bordered">';
		echo '<tr>';

		echo '<th>Fname-Name</th>';
		echo '<th>Last-Name</th>';
		echo '<th>Donation</th>';
					
		echo '</tr>';
			while ($query_execute=mysqli_fetch_assoc($PD_query_run)) 
			{

				echo '<tr>';
					
							echo '<td>'.$query_execute['donor_fname'].'</td>';
							echo '<td>'.$query_execute['donor_lname'].'</td>';
							echo '<td>';

						$PDd=" SELECT * FROM `donor_annual` where `donor_id`= '$query_execute[donor_id]'";
							    if ($PD_query_runn=mysqli_query($con,$PDd) ) 
							    { while ($query_executee=mysqli_fetch_assoc($PD_query_runn)) 
										{
											echo $query_executee['donor_donation'];
										}
									}

							echo'</td>';
							
				echo '</tr>';

			}
	}
		echo '</table>';


  ?>

</div>
   <div class="col-sm-1"></div>
</div>
<?php
include_once 'footer.php';
?>