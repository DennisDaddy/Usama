<?php
include("includes/connect.php");

if (isset($_GET['del'])) {
	# code...
	$delete_id = $_GET['del'];
	$delete_query ="delete from press where post_id='$delete_id' ";

	if (mysqli_query($con,$delete_query)) {
		# code..
		echo "<script> alert('Press has been Deleted Successfully') </script>";
		echo 
		"<script> window.open('view_press.php','_self') </script>";
	}

}
?>