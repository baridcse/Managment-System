<?php
	include("config.php");
	session_start();
   if(isset($_POST['signupSubmit']))
   {
   	 	$username= $_POST['userName'];
   	 	$password= $_POST['password'];

   	 	

   	 	$result = mysqli_query($con, "SELECT id FROM user_login_info WHERE username = '$username' and password = '$password'");

   	 	if (mysqli_num_rows($result)==1) {
   	 		$_SESSION['username']=$username;
   	 		$row = $result->fetch_array(MYSQLI_NUM);
   	 		$_SESSION['userid']=$row[0];
   	 		header('Location: dashboard.php');
   	 	}


   }
   if(isset($_GET['logout']))
   {
   		$_SESSION['username']="";
   }
   
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  		<link rel="stylesheet" href="css/main.css">
  		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container col-md-4 col-md-offset-4 "style="margin-top:150px ">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="" role="form">
						<div class="form-group">
							<h2>Please Login</h2>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Username</label>
							<input name="userName" type="text" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPasswordagain">Password</label>
							<input name="password" type="password" maxlength="25" class="form-control">
						</div>
						<div class="form-group">
							<button name="signupSubmit" type="submit" class="btn btn-info btn-block" name ="submit">Sing in</button>
						</div>
						<p class="form-group">Forget Your Password ?<a href="#">Click Here</a></p>
						<hr>
						<p>Don't have an account? <a href="singup.html">Sign Up</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
