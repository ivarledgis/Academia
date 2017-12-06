<?php require('includes/header.php'); 
	  require('config/profile.php');
?>



<div class="row main-container">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<table class="table table-striped">
			<tr><td><b>Full Name : </b> </td><td><b><?php echo $row[1]." ".$row[2]." ".$row[3];?></b></td></tr>
			<tr><td><b>Father's Name : </b></td><td><b><?php echo $row[4];?></b></td></tr>
			<tr><td><b>Semester : </b></td><td><b><?php echo $row[5]." th"; ?></b></td></tr>
			<tr><td><b>Phone's Number : </b></td><td><b><?php echo $row[6];?></b></td></tr>
			<tr><td><b>Email : </b></td><td><b><?php echo $row[7];?></b></td></tr>
			<tr><td><b>Anchal : </b></td><td><b><?php echo $row[8]; ?></b></td></tr>
			<tr><td><b>District : </b></td><td><b><?php echo $row[9]; ?></b></td></tr>
			<tr><td><b>Village / Nagar : </b></td><td><b><?php echo $row[10]; ?></b></td></tr>
			<tr><td><b>Ward : </b></td><td><b><?php echo $row[11]; ?></b></td></tr>
		</table>
	</div>
	<div class="col-md-4"></div>
</div>


<?php require('includes/footer.php'); ?>