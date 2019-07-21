<?php
	session_start();

	$dbc = mysqli_connect('localhost','root','');
	$dbs = mysqli_select_db($dbc,'library');

	if (isset($_GET['id']))
	{
		$id = $_GET['id'];
		
			$q = "DELETE FROM entries WHERE bookingID = '$id'";
			@mysqli_query($dbc, $q);
			$_SESSION['checked']="The key for discussion room selected is passed to the student and its record is removed successfully!";
			
			header('Location:discuss.php');
			exit();
		
	}
	mysqli_close($dbc);
?>
