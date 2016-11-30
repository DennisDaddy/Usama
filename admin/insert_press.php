<!DOCTYPE html>
<html>
<head>
	<title>Insert Press</title>
	<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
    tinymce.init({selector:'textarea'});

</script
</head>
<body>
<form method="post" action="insert_press.php" enctype="multipart/form-data">
	<table  width="600" align="center" border="3">
	<tr>
		<td align="center" bgcolor="white" colspan="6"><h1>Insert New Press Here</h1></td>
	</tr>

	<tr>
		<td align="right">Press Title</td>
		<td><input type="text" name="title" size="30"></td>
	</tr>

	<tr>
		<td align="right">Press Author</td>
		<td><input type="text" name="author" size="30"></td>
	</tr>

	<tr>
		<td align="right">Press Keywords</td>
		<td><input type="text" name="keywords" size="30"></td>
	</tr>

	<tr>
		<td align="right">Press Image</td>
		<td><input type="file" name="image"></td>
	</tr>
	<tr>
		<td align="right">Press Content</td>
		<td><textarea name="content" cols="30" rows="15"></textarea></td>
	</tr>

	<tr>
		
		<td align="center" colspan="6"><input type="submit" name="submit" value="Publish Now"></td>
	</tr>

	


	
		
	</table>
</form>

</body>
</html>
<?php
include("includes/connect.php");

if (isset($_POST['submit'])) {
	# code...
	 $press_title =$_POST['title'];
	 $press_date =date('y-m-d');
	 $press_author =$_POST['author'];
	 $press_keywords =$_POST['keywords'];
	 $press_content =$_POST['content'];
	 $press_image =$_FILES['image']['name'];
	  $image_tmp =$_FILES['image']['tmp_name'];

	 if ($press_title=='' or $press_keywords=='' or $press_content=='' or $press_author=='') {
	 	# code...
	 	echo "<script>alert('any of the fields is empty')</script";
	 	exit();
	 }

	 else{
	 	move_uploaded_file($image_tmp,"../images/$press_image");
	 	$insert_query ="insert into press(press_title,press_date,press_author,press_image,press_keywords,press_content) values('$press_title','$press_date','$press_author','$press_image','$press_keywords','$press_content')";  
	 	if (mysqli_query($con,$insert_query)) {
	 		# code...
	 		echo "<script> alert('Press Published successfuly!')</script>";
	 		echo "<script> window.open('view_press.php','_self')</script>";
	 	}
	 }
}

?>