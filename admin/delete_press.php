<?php
include("includes/connect.php");

if (isset($_GET['delp'])) {
	# code...
	$delete_id = $_GET['delp'];
	$delete_query ="delete from press where press_id='$delete_id' ";

	if (mysqli_query($con,$delete_query)) {
		# code..
		echo "<script> alert('press has been Deleted') </script>";
		echo 
		"<script> window.open('view_press.php','_self') </script>";
	}

}
?>