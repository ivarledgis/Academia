<?php 
	$username = $_SESSION['regname'];
	$sql = "select * from Profile where User_id = (select Id from User where username = '$username')";

	$result = mysqli_query($conn,$sql);

	if($result) {
		$row = mysqli_fetch_array($result,MYSQLI_NUM);
	}
