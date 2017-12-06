<?php require('config/database.php'); 
	session_start();
	require('config/login.php');
	require('config/split.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/modal.css">
	<link rel="stylesheet" href="css/responsive.css">
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/imageloader.js"></script>
	<meta name="viewport" content="width=device-width,scale=1,user-scalable=yes">

</head>
<body>

	<div class="container wrapper">
		<div class="row notice">
			<div class="col-md-8 col-xs-8"><span class="notice-notice">Notice :</span>
				<marquee class="marquee-notice">College with remain closed</marquee></div>

				<?php if(isset($_SESSION['username'])) {?> 
					<div class="col-md-4 col-xs-4 text-right user-info">
						<label class="username">Welcome  </label>
						<label><a><?php echo $_SESSION['username'];?></a>,</label> | 
						<a href="config/logout.php" style="color: red;">logout</a>
					</div>
				<?php } else { ?> 
					<div class="col-md-4 col-xs-4 login-container">
						<a href="" class="btn btn-primary login" role="button" data-toggle="modal" data-target="#myModal">Login</a>
					</div>
				<?php }?>
		</div>
		<?php if(isset($_SESSION['error'])){?> <p class="alert alert-danger" role="alert">Username or Password Not Correct!!</p> <?php } ?>
		<!-- Modal -->
		<div id="myModal" class="modal fade" role="dialog" >
		  <div class="modal-dialog">

		    <div class="modal-content">
		      <div class="modal-header">

		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title modal-heading1" style="color: yellow;font-size: 20pt;text-align: center;">Enter Your Details</h4>
		        
		      </div>
		      <div class="modal-body">

		        <form method="post" action="index.php">
	        		<div class="form-group">
		        		<input type="text" name="username" class="form-control" required placeholder="Username">
		        	</div>
		        		<div class="form-group">
		        		<input type="password" name="password" class="form-control" required placeholder="Password">
		        	</div>

		        	<input type="submit" value="Login" class="btn btn-primary btnlogin1">
		        </form><br>
		        <p style="color: white;" class="pull-right">Forgot Password?</p>
		      </div>
		      
		    </div>

		  </div>
		</div>


		<div class="row logo">
			<img src="img/a.png" class="img-logo">
		</div>
		
		<!-- Navigation -->
		<div class="row navigation">
			<div class="navbar navbar-default navbarborder1" role="navigation">
				<div class="conatiner navbag">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					 </div>

					 <div class="navbar-collapse collapse">
					 		<ul class="nav navbar-nav nav-container">
					 			<li class="<?php echo ($arr[2]=="index.php") ? ' active':' ';?>"><a href="index.php">Home</a></li>
					 			<li class = "<?php echo ($arr[2]=="contact.php") ? ' active':' ';?>"><a href="contact.php">Contact</li></a>
					 			<li class="<?php echo ($arr[2]=="about.php") ? ' active':' ';?>"><a href="about.php" >About</a></li>	
					 			<li class="<?php echo ($arr[2]=="course.php") ? ' active':' ';?>"><a href="course.php">Course</a></li>
					 			<?php if(isset($_SESSION['username'])){?>
					 			<li class="dropdown ">
					 				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Notes<b class="caret"></b></a>
					 				<ul class="dropdown-menu dropdowncolor1">
					 					<li><a href="">1st Semester</a></li>
					 					<li class="divider"></li>
					 					<li><a href="">2nd Semester</a></li>
										<li class="divider"></li>
					 					<li><a href="">3rd Semester</a></li>
										<li class="divider"></li>
					 					<li><a href="">4th Semester</a></li>
										<li class="divider"></li>

					 					<li><a href="">5th Semester</a></li>
					 					<li class="divider"></li>
					 					<li><a href="">6th Semester</a></li>
					 					<li class="divider"></li>
					 					<li><a href="">7th Semester</a></li>
					 					<li class="divider"></li>	
					 					<li><a href="">8th Semester</a></li>
					 				</ul>
					 				
					 			</li>
					 			<li class="<?php echo ($arr[2]=="result.php") ? ' active':' ';?>"><a href="result.php">Result</li></a>
					 			<li class="<?php echo ($arr[2]=="profile.php") ? ' active':' ';?>"><a href="profile.php">Profile</li></a>
					 			<?php }?>
					 		</ul>
					 </div>
				</div>
			</div>
		</div>