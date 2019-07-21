<?php include('signupserver.php'); 
	if (empty($_SESSION['matno']))
	{
		header('Location:loginstudent.php');
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Discussion Room Booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" rel="stylesheet">
<script>
var dateToday = new Date(); 
$(function() {
    $( "#datepicker" ).datepicker({
        numberOfMonths: 1,
        showButtonPanel: true,
        minDate: dateToday
    });
});
</script>
<style>
	.error {
		width:92%;
		margin: 0px auto;
		padding: 10px;
		border: 1px solid #a94442;
		color: #a94442;
		background: #f2dede;
		border-radius: 5px;
		text-align: left;
	}
	.success {
		width:92%;
		margin: 0px auto;
		padding: 10px;
		border: 1px solid #269900;
		color: #269900;
		background: #c2f0c2;
		border-radius: 5px;
		text-align: left;
	}
</style>
<!-- Custom Theme files -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!--fonts--> 
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"><br>

<a href="room.php"><img SRC="images/backbtn.png" align="left" style ="padding-left:30px;" border=0 height=40 width=43 ></a>

<br><br>
<!--//fonts-->
</head>
<body>
<!--background-->
<h1 align="left"> Discussion Room Booking </h1>
    <div class="bg-agile">
	<div class="book-reservation">
			<form action="room.php" method="post">
					<div class="form-date-w3-agileits">
						<label><i class="fa fa-user" aria-hidden="true"></i> Name :</label>
						<input type="text" name="studentName" placeholder="Your name" required=""/><br>
					</div><br>
					
					 <div class="form-date-w3-agileits">
						<label><i class="fa fa-id-badge" aria-hidden="true"></i> Student ID:</label>
						<input type="text" name="studentID" value="<?php echo $_SESSION["matno"]?>" required="" />
					</div>
					
					<div class="form-date-w3-agileits">
						<label><i class="fa fa-calendar" aria-hidden="true"style="padding-top:25px;"></i> Booking Date :</label>
						<input id="datepicker" name="bookingDate" placeholder="MM/DD/YYYY" type="text" required="">
					</div>
					<div class="form-time-w3layouts" style="padding-top:25px;">
							<label><i class="fa fa-clock-o" aria-hidden="true"></i> Time :</label>
							
							<select name="time" required="">
								<option selected hidden>Select Time</option>
								<option value="8am-9am">8:00 am - 9:00 am</option>
								<option value="9am-10am">9:00 am - 10.00 am</option>
								<option value="10am-11am">10:00 am - 11.00 am</option>
								<option value="11am-12pm">11:00 am - 12.00 pm</option>
								<option value="12pm-1pm">12:00 pm - 1.00 pm</option>
								<option value="1pm-2pm">1:00 pm - 2.00 pm</option>
								<option value="2pm-3pm">2:00 pm - 3.00 pm</option>
								<option value="3pm-4pm">3:00 pm - 4.00 pm</option>
								<option value="4pm-5pm">4:00 pm - 5.00 pm</option>	
							</select>
					</div>
					
					<div class="form-left-agileits-w3layouts bottom-w3ls">
					<br>
							<label><i class="fa fa-home" aria-hidden="true"></i> Choose a Room :</label>
							<select name="room">
								<option selected hidden>Select Room</option>
								<option value="Room1">Discussion Room 1</option>
								<option value="Room2">Discussion Room 2</option>
								<option value="Room3">Discussion Room 3</option>
								<option value="Room4">Discussion Room 4</option>
								<option value="Room5">Discussion Room 5</option>
								<option value="Room6">Discussion Room 6</option>
							</select>
					</div>
				
					<div class="clear"> </div>
					<div class="make">
						  <input type="submit" name= "Submitted" value="Make a Booking"><br><br>	 
					</div>
			</form>
		</div>
   </div>
   
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>


		<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
			<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
						$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
					  });
			</script>
			<!-- //Calendar -->
</body>
</html>