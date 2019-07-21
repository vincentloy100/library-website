<?php
	session_start();

	$dbc = mysqli_connect('localhost','root','');
	$dbs = mysqli_select_db($dbc,'library');

	if (isset($_GET['id']))
	{
		$id = $_GET['id'];
		$query="SELECT available FROM books WHERE id='$id'";
		//$result=mysqli_query($dbc, $query);
		
		if ($r = mysqli_query($dbc, $query)){
			$row = mysqli_fetch_array($r);
			
			if ($row['available'] == "Available") {
				$query = "DELETE FROM books WHERE id = {$_GET['id']}";
				$r = mysqli_query($dbc, $query);
				$_SESSION['deleted']="The book with ID of {$_GET['id']} has been deleted successfully!";
				
				header('Location:list.php');
				exit();
			}
			else {
				$_SESSION['faildelete']="Please wait until the book is made available before deleting it!";
				header('Location:list.php');
			}	
		}//??
	}
	mysqli_close($dbc);
?>
