<?php 
$massage='';
session_start();
if (isset($_SESSION['user_id'])) {
	header('location:/');
}
if (isset($_POST['name'])
	&& isset($_POST['email'])
	&& isset($_POST['password'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=password_hash($_POST['password'], PASSWORD_BCRYPT);
$con=new PDO('mysql:host=localhost;dbname=farhad', 'root', '');
$statment=$con->prepare("INSERT into mytable(name, email, password) values(:name, :email, :password)");
$status=$statment->execute([
":name"=>$name,
":email"=>$email,
":password"=>$password,

]);

if($status){
$massage ='you have successfully register';
}
else{
	$massage ='you have wrong';
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>register page</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="card mt-5">
			<div class="card-header bg-dark text-white text-center">
				<h1>Register here </h1>
			</div>
				<div class="card-body">
					<?php 
						if (!empty($massage )) : ?>
						<div class="alart alart-success">
							<?php echo $massage; ?>
						</div>
					<?php endif ; ?>
					<form method="post">
						<div class="form-group">
							<label for="name">name</label>
							<input type="name" name="name" id="name" class="form-control" />
						</div>
						<div class="form-group">
							<label for="email">email</label>
							<input type="email" name="email" id="email" class="form-control"/>
						</div>
						<div class="form-group">
							<label for="password">password</label>
							<input type="password" name="password" id="password" class="form-control"/>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-outline-primary">sing up</button>
						</div>
					</form>
				</div>
			</div>
		</div>


</body>
</html>