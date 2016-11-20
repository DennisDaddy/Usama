<?php 
session_start();

if (!isset($_SESSION['user_name'])) {
	# code...
	header("location:login.php");
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="admin_style.css" />
</head>
<body>
<div id="header">
<a href="index.php"><h1>Welcome to the Admin Panel</h1></a>

</div>

<div id="sidebar">
	<h2><a href="logout.php">Logout</a></h2>
	<h2><a href="view_posts.php">View News</a></h2>
	<h2><a href="insert_post.php">Add News</a></h2>
	<h2><a href="insert_blog.php">Add Blog post</a></h2>
	<h2><a href="view_blog.php">View Blog Posts</a></h2>
	
</div> 
<div id="welcome">
<h1 style="color:black" >Welcome to your Admin Panel</h1>
<p style="color:black">This is your admin panel where you can manage your website files and content </p>
</div>
<?php
if (isset($_GET['insert'] )) {
	# code...
	include("insert_post.php");
}

?>

</body>
</html>
