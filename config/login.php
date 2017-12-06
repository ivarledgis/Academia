<?php 

$username = $password = '';
unset($_SESSION['error']);
if ($_SERVER['REQUEST_METHOD'] == "POST"){
	if(isset($_POST['username']) && isset($_POST['password']) && 
		$_POST['username'] !="" && $_POST['password']!="") {
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		$password = mysqli_real_escape_string($conn,$_POST['password']);

		$password = md5($password);

		$sql = "select id,username from User where username = '$username' and password = '$password'";
		$result = mysqli_query($conn,$sql);

		$row = mysqli_fetch_array($result,MYSQLI_NUM);
		$count = mysqli_num_rows($result);

		if($count == 1) {
			$sql = "select FirstName from Profile where User_id = $row[0]";
			$result = mysqli_query($conn,$sql);
			$rows= mysqli_fetch_array($result,MYSQLI_NUM);
			$_SESSION['username'] = $rows[0];

			$_SESSION['regname'] = $row[1];

		}else {
			$_SESSION['error'] = "User or Password Incorrect!!";
		}
	}	
}