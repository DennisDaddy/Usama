<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>

    <!-- Bootstrap -->
    <link href="vendor/bootstrap-3.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
    <div class="container">
      <form  method="post" action="login.php" class="form-signin">
        <h1 class="text-center">Admin Login Area</h1>
        <p>
          <label class="sr-only">Username</label>
          <input type="text" name="user_name" placeholder="Username" class="form-control" required autofocus>
        </p>

        <p>
          <label class="sr-only">Password</label>
          <input type="password" name="user_pass" placeholder="Password" class="form-control" required>
        </p>

        

        <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
      </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="vendor/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
  </body>
</html>
<?php
include("includes/connect.php");
if (isset($_POST['login'])) {
	# code...
	$user_name=$_POST['user_name'];
	$user_pass=$_POST['user_pass'];

	$admin_query ="select * from admin_login where user_name='$user_name' AND user_pass='$user_pass'";

	$run =mysqli_query($con,$admin_query);
	if (mysqli_num_rows($run)>0) {
		# code...
		$_SESSION['user_name'] =$user_name;

		echo "<script>window.open('index.php','_self')</script>";
	}
	else{

		echo "<script>alert('username or password incorrect!')</script>";
	}
}


?>