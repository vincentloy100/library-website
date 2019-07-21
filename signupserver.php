<?php	
	session_start();
		
	$matno="";
	$name="";
	$course="";
	$pw="";
	$studentName ="";
	$email ="";
	$phoneNumber ="";
	$bookingDate ="";
	$time = "";
	$room ="";
	$errors=array();
	
	function check($idd)
	{
		if(preg_match("/^[A-Z]{1}[0-9]{8}$/",$idd))
		{
			return TRUE;
		}
		
		else
		{
			return FALSE;
		}
	}
		
	function checkk($book)
	{
		if(preg_match("/^[0-9]{5}$/",$book))
		{
			return TRUE;
		}
		
		else
		{
			return FALSE;
		}
	}
	$dbc = mysqli_connect('localhost','root','');
	$dbs = mysqli_select_db($dbc,'library');
	
	if(isset($_POST['su']))
	{		
		$matno = trim(ucfirst($_POST['id']));
		$name = trim($_POST['name']);
		$course = trim($_POST['course']);
		$pw = trim($_POST['pw1']);
		
		$idd = $matno;
		$resultid = check($idd);
		
		$query="SELECT * FROM user WHERE matno='$matno'";
		$result=mysqli_query($dbc, $query);
		if (mysqli_num_rows($result)>0){
			array_push($errors, "The student matriculation number entered has already signed up.");
		}
		
		if($resultid == FALSE){
			array_push($errors, "Please enter a valid matriculation number.");
		}
		
		if(is_numeric($course)){
			array_push($errors, "Course code does not start with numbers.");
		}
		
		if (($_POST['pw1'])!=($_POST['pw2'])){
			array_push($errors, "Passwords entered are not in match!"); 
		}
		
		if(empty($_POST['name']) || empty($_POST['id']) || empty($_POST['course'])  || empty($_POST['pw1']) || empty($_POST['pw2'])){
			array_push($errors, "Please fill in every required details.");
		}
		
		if (count($errors) == 0){
			$query = "INSERT INTO user(matno, name, course, password) VALUES('$matno', '$name', '$course', '$pw')";
			@mysqli_query($dbc, $query);
			$_SESSION['matno']=$matno;
			$_SESSION['name']=$name;
			$_SESSION['signed']="You have signed up successfully!";
			$_SESSION['success']="You are now logged in!";
			header('Location:studenthome.php');
			exit();
			mysqli_close($dbc);
		}
	}	
	
	if (isset($_POST['sis'])) 
	{
		$matno = trim(ucfirst($_POST['id']));
		$pw = trim($_POST['pw1']);
		
		if(empty($_POST['id'])||empty($_POST['pw1'])){
			array_push($errors, "Please fill in the required details.");
		}
		
		if (count($errors)==0){
			$query="SELECT * FROM user WHERE matno='$matno' AND password='$pw'";
			$result=mysqli_query($dbc, $query);
			if (mysqli_num_rows($result)>0){
				$_SESSION['matno']=$matno;
				$_SESSION['success']="You are now logged in!";
				
				header('Location:studenthome.php');
				exit();
			}
			else{
				array_push($errors, "Oops! Either the student matriculation number has not been signed up OR password entered is incorrect.");
			}
		}
	}
	
	if (isset($_POST['sia'])) 
	{
		$idno = trim(ucfirst($_POST['id']));
		$pw = trim($_POST['pw']);
		
		if(empty($_POST['id'])||empty($_POST['pw'])){
			array_push($errors, "Please fill in the required details.");
		}
		
		if (count($errors)==0){
			$query="SELECT * FROM users WHERE id='$idno' AND pw='$pw'";
			$result=mysqli_query($dbc, $query);
			if (mysqli_num_rows($result)>0){
				$_SESSION['admin']="You are now logged in!";
				
				header('Location:adminhome.php');
				exit();
			}
			else{
				array_push($errors, "Incorrect admin ID or password!");
			}
		}
	}
	
	if (isset($_POST['cps'])) 
	{
		$matno = trim(ucfirst($_POST['matno']));
		$opw = trim($_POST['pw1']);
		$npw = trim($_POST['npw']);
		
		if (($_POST['pw1'])!=($_POST['pw2'])){
			array_push($errors, "The initial passwords entered are not in match!"); 
		}
		
		if (($_POST['npw'])!=($_POST['npw1'])){
			array_push($errors, "The new passwords entered are not in match!"); 
		}
		
		else {
			$query="SELECT * FROM user WHERE matno='$matno' AND password='$opw'";
			$result=mysqli_query($dbc, $query);
			if (mysqli_num_rows($result)>0){
				$q="UPDATE user SET password = '$npw' WHERE matno = '$matno' LIMIT 1";
				$r = mysqli_query($dbc, $q);
				if (mysqli_affected_rows($dbc) == 1) {
					$_SESSION['changed']="Your password has been changed successfully! Please login to continue.";	
					header('Location:loginstudent.php');
					exit();
				}
				else{
					array_push($errors, "Password has not been change, please try again.");
				}
			}
			else{
				array_push($errors, "The matriculation number or initial password entered is invalid!");
			}
		}
	}
	
	if (isset($_POST['cpa'])) 
	{
		$aid = trim(ucfirst($_POST['aid']));
		$opw = trim($_POST['opw1']);
		$npw = trim($_POST['npw1']);
		
		if (($_POST['opw1'])!=($_POST['opw2'])){
			array_push($errors, "The initial passwords entered are not in match!"); 
		}
		
		if (($_POST['npw1'])!=($_POST['npw2'])){
			array_push($errors, "The new passwords entered are not in match!"); 
		}
		
		else {
			$query="SELECT * FROM users WHERE id='$aid' AND pw='$opw'";
			$result=mysqli_query($dbc, $query);
			if (mysqli_num_rows($result)>0){
				$q="UPDATE users SET pw = '$npw' WHERE id = '$aid' LIMIT 1";
				$r = mysqli_query($dbc, $q);
				if (mysqli_affected_rows($dbc) == 1) {
					$_SESSION['changed']="Your password has been changed successfully! Please login to continue.";	
					header('Location:loginadmin.php');
					exit();
				}
				else{
					array_push($errors, "Password has not been change, please try again.");
				}
			}
			else{
				array_push($errors, "The admin ID or initial password entered is invalid!");
			}
		}
	}
	
	if(isset($_POST['add']))
	{		
		$bid = trim(($_POST['bid']));
		$bname = trim($_POST['bname']);
		$bauthor = trim($_POST['bauthor']);
		$bprice = trim($_POST['bprice']);
		$bshelf = trim($_POST['bshelf']);
		$brow = trim($_POST['brow']);
		$bavailable = trim($_POST['bavailable']);
		
		$book = $_POST['bid'];
		$checked = checkk($book);
		
		if($checked==FALSE){
			array_push($errors, "Please enter a valid book ID format.");
		}
		
		$query="SELECT * FROM books WHERE id='$bid'";
		$result=mysqli_query($dbc, $query);
		if (mysqli_num_rows($result)>0){
			array_push($errors, "The book ID entered has already exist.");
		}
		
		if(!is_numeric($bprice)){
			array_push($errors, "The input value of the book's price is incorrect!");
		}
		
		if(!is_numeric($bshelf)){
			array_push($errors, "The input value of the book's location (shelf) is incorrect!");
		}
		
		if(!is_numeric($brow)){
			array_push($errors, "The input value of the book's location (row) is incorrect!");
		}
		
		if(empty($_POST['bid']) || empty($_POST['bname']) || empty($_POST['bauthor'])  || empty($_POST['bprice']) || empty($_POST['bshelf']) || empty($_POST['brow']) || empty($_POST['bavailable'])){
			array_push($errors, "Please fill in every required details.");
		}
		
		if (count($errors) == 0){
			$query = "INSERT INTO books(id, name, author, price, shelf, row, available, date) VALUES('$bid', '$bname', '$bauthor', '$bprice', '$bshelf', '$brow', '$bavailable', NOW())";
			@mysqli_query($dbc, $query);
			$_SESSION['added']="The book has been added successfully!";
			header('Location:add.php');
			exit();
			mysqli_close($dbc);
		}
	}	
	
	if(isset($_POST['Submitted']))
	{
		$studentID = trim($_POST['studentID']);
		$studentName = trim($_POST['studentName']);
		$bookingDate =  trim($_POST['bookingDate']);
		$time =  trim($_POST['time']);
		$room = trim($_POST['room']);
		
		$idd = $_POST['studentID'];
		$resultid = check($idd);
		
		if($resultid == FALSE){
			array_push($errors, "Please enter a valid matriculation number.");
		}
		
		$q="SELECT bookingDate, time, room FROM entries";
		$result=mysqli_query($dbc, $q);
		while ($row=mysqli_fetch_array($result)){
			if (($_POST['bookingDate']==$row['bookingDate']) && ($_POST['time']==$row['time']) && ($_POST['room']==$row['room'])){
				array_push($errors, "The room has been booked!");
			}
		}
			
		if(empty($_POST['studentName']) || empty($_POST['studentID']) ||  
			empty($_POST['bookingDate']) || empty($_POST['time']) || 
			empty($_POST['room'])) {
			array_push($errors, "Please fill in every required details.");
		}
		
		if (count($errors) == 0){
			$query = "INSERT INTO entries(studentID, studentName, bookingDate, time, room) VALUES('$studentID', '$studentName', '$bookingDate', '$time', '$room')";			
			if (mysqli_query($dbc, $query)) {
				$_SESSION['booked']="You have booked the discussion room!";
			}
			
			else{array_push($errors, "Unknown errors, please try again!");}
			
			header('Location:room.php');
			exit();
			mysqli_close($dbc);
		}
	}
	
	if (isset($_POST['edit']))
	{
		$eid = trim($_POST['ebid']);
		$en = trim($_POST['ebn']);
		$ea = trim($_POST['eba']);
		$ep = trim($_POST['ebp']);
		$es = trim($_POST['ebs']);
		$er = trim($_POST['ebr']);
		
		$book = $_POST['ebid'];
		$checked = checkk($book);
		
		if($checked==FALSE){
			array_push($errors, "Please enter a valid book ID format.");
		}
		
		if(!is_numeric($ep)){
			array_push($errors, "The input value of the book's price is incorrect!");
		}
		
		if(!is_numeric($es)){
			array_push($errors, "The input value of the book's location (shelf) is incorrect!");
		}
		
		if(!is_numeric($er)){
			array_push($errors, "The input value of the book's location (row) is incorrect!");
		}
		
		if (count($errors) == 0){
			$query = "UPDATE books SET name = '$en', author = '$ea', price = '$ep', shelf = '$es', row = '$er' WHERE id = '$eid'";
			if (@mysqli_query($dbc, $query))
			{
				$_SESSION['edited']="The details of book with ID of $eid has been edited successfully!";
				header('Location:list.php');
				exit();
			}
			else
				array_push($errors, "Edit failed, please try again!");
		}
		mysqli_close($dbc);
	}

	
	if (isset($_GET['logout'])) 
	{
		session_destroy();
		unset($_SESSION['matno']);
		unset($_SESSION['success']);
		header('Location:loginstudent.php');
	}
	
	if (isset($_GET['logouts'])) 
	{
		session_destroy();
		unset($_SESSION['admin']);
		header('Location:loginadmin.php');
	}

?>