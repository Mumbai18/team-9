<?php
include_once 'header.php';
include_once 'init.php';              
?>
<div class="login">
 <div class="col-sm-1"></div>
	  <div class="col-sm-12">
  <?php
 	//$AD=" SELECT * FROM `Academic-Details` ";
 	$PD=" SELECT * FROM `stud_personal_info`";
    if ($PD_query_run=mysqli_query($con,$PD) ) 
    { 
        echo '<table class="table table-bordered">';
		echo '<tr>';

		echo '<th>First-Name</th>';
		echo '<th>Last-Name</th>';
		echo '<th>Address</th>';
		echo '<th>City</th>';
		echo '<th>State</th>';
		echo '<th>Pin-Code </th>';
		echo '<th>Gender </th>';
		echo '<th>View Academic-Details </th>';	
		echo '<th>Edu_Rating</th>';
		echo '<th>stud_Rating</th>';
		echo '<th>Save</th>';
		echo '<th>Status</th>';			
		echo '</tr>';
			while ($query_execute=mysqli_fetch_assoc($PD_query_run)) 
			{

				echo '<tr>';
					
							echo '<td>'.$query_execute['stud_fname'].'</td>';
							echo '<td>'.$query_execute['stud_lname'].'</td>';
							echo '<td>'.$query_execute['stud_address'].'</td>';
							echo '<td>'.$query_execute['stud_city'].'</td>';	
							echo '<td>'.$query_execute['stud_state'].'</td>';
							echo '<td>'.$query_execute['stud_pincode'].'</td>';
							echo '<td>'.$query_execute['stud_gender'].'</td>';

							echo '<td><button type="button" class="btn btn-info " data-toggle="modal" data-target="#mymodal">View</button></a></td>';


							echo '<form name="reg" method="get" action="saved.php">';
							echo '<td><input type="text" class="form-control" name="ER"></td>';
							echo '<td><input type="text" class="form-control" name="SR"></td>';
							echo '<input type="hidden" name="id" value="'.$query_execute['stud_id'].'">';
							echo '<td> <input type="submit" class="btn btn-primary" value="Save"></td>';
							echo '<td><a href="status_c.php?id='.$query_execute['stud_id'].'&&val=	1"><button type="button" class="btn btn-info">Confirm</button></a></td>';	
				echo '</tr>';

			}
	}
		echo '</table>';


  ?>
 <?php
$PDd=" SELECT * FROM `stud_academics`";
    if ($PDd_query_run=mysqli_query($con,$PDd) ) 
    { 
    	while ($query_executee=mysqli_fetch_assoc($PDd_query_run)) 
			{
				echo '
<div class="modal fade" id="mymodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Academic details</h4>
        </div>
        <div class="modal-body">';
          echo '<table class="table table-bordered">';
		echo '<tr>';

		echo '<th>Current-College</th>';
		echo '<th>Current-Degree</th>';
		echo '<th>Fees</th>';
		echo '<th>Previous-Marks</th>';
		echo '<th>Family Income</th>';
		echo '<th>Total_Requirements</th>';
						
		echo '</tr>';
		echo '<tr>';
					
							echo '<td>'.$query_executee['stud_college'].'</td>';
							echo '<td>'.$query_executee['stud_currentdegree'].'</td>';
							echo '<td>'.$query_executee['stud_fees'].'</td>';
							echo '<td>'.$query_executee['stud_previousmarks'].'</td>';	
							echo '<td>'.$query_executee['stud_familyincome'].'</td>';
							echo '<td>'.$query_executee['stud_totalamtrequired'].'</td>';
				echo '</tr>';
		echo '</table>';
        echo'</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>';
  }
}
 ?>
  
</div>
   <div class="col-sm-1"></div>
</div>

<?php
include_once 'footer.php';
?>