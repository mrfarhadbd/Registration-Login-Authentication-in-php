<?php 
session_start();
if (!isset($_SESSION['user_id'])) {
  header('location: login.php');
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>homepage </title>
	<link rel="stylesheet" href="bootstrap.min.css">

</head>
<body>
<div class="container">
	<div class="card mt-5 bg-info">
		<div class="card-header bg-dark text-white text-center">
			<h1>this is home page</h1>
		<div class="btn btn-outline-primary"><a href="logout.php" >Logout here</a>
			</div>
			<div class="btn btn-outline-primary"><a href="login.php" >Login here</a>
			</div>
		</div>
			<div class="card-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		
			
		
</div>
</body>
</html>