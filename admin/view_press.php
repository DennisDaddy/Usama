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
	<h2><a href="view_press.php">View Press</a></h2>
	<h2><a href="index.php?insert=insert">Add Press</a></h2>
	
</div> 
<table width="1000" border="3" align="center" bgcolor="pink">
<tr>
	<td colspan="8" align="center" bgcolor="white"><h1>View All Press</h1></td>
</tr>

<tr bgcolor="orange">
	<th>Press No</th>
	<th>Press Date</th>
	<th>Press Author</th>
	<th>Press Title</th>
	<th>Press Image</th>
	<th>Press Content</th>
	<th>Delete Press</th>
	<th>Edit Press</th>
</tr> 

<?php 
include("includes/connect.php");
$query = "select * from press order by 1 DESC";
$run = mysqli_query($con,$query);
while ($row=mysqli_fetch_array($run)) {
	# code...
	$press_id =$row['press_id'];
	$press_date =$row['press_date'];
	$press_author =$row['press_author'];
	$press_title =$row['press_title'];
	$press_image =$row['press_image'];
	$press_content =substr($row['press_content'],0,100);
	

?>

<tr align="center" > 
	<td><?php echo $press_id; ?></td>
	<td><?php echo $press_date; ?></td>
	<td><?php echo $press_author; ?></td>
	<td><?php echo $press_title; ?></td>
	<td><img src="../images/<?php echo $press_image; ?>"width="80" height="80" </td>
	<td><?php echo $press_content; ?></td>
	<td><a href="delete_press.php?del=<?php echo $press_id; ?>">Delete</a></td>
	
	
</tr> 
<?php } ?>
	
</table>

</body>
</html>