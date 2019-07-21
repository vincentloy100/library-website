<script>
function startTime() {
	var currentDate = new Date();
	var year = currentDate.getYear();
		if (year < 1000){
			year+=1900;
		}
	var d = currentDate.getDay();
	var M = currentDate.getMonth();
	var D = currentDate.getDate();
	var dayArray = new Array ("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
	var monthArray = new Array ("January","February","March","April","May","June","July","August","September","October","November","December")
	
	var currentTime = new Date();
	var h = currentTime.getHours();
	var m = currentTime.getMinutes();
	var s = currentTime.getSeconds();
	m = checkTime(m);
	s = checkTime(s);
	var myClock = document.getElementById('clock').innerHTML =
	" " + dayArray[d] + " " + D + " " + monthArray[M] + " " + year + " | " + h + ":" + m + ":" + s;
	var t = setTimeout(startTime, 500);
}
function checkTime(i) {
	if (i < 10) {i = "0" + i}; 
	return i;
}
</script>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


<div class="form-date-w3-agileits">
						<label><i class="fa fa-calendar" aria-hidden="true"></i> Booking Date :</label>
						<input  id="datepicker2" name="bookingDate" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
					</div>
					
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/wickedpicker.js"></script>
			<script type="text/javascript">
				$('.timepicker').wickedpicker({twentyFour: false});
			</script>

<!-- Calendar -->

$query = "SELECT * FROM entries ORDER BY bookingID";
		$r = mysqli_query($dbc, $query);
	
		while($row = mysqli_fetch_array($r)){
			echo "<tr>
				<td><br>{$row['id']}<br><br></td>
				<td><br>{$row['name']}<br><br></td>
				<td><br>{$row['author']}<br><br></td>
				<td><br>{$row['shelf']}<br><br></td>
				<td><br>{$row['row']}<br><br></td>
				<td><br>{$row['available']}<br><br></td>
				<td><br>{$row['date']}<br><br></td>
				</tr>";	
		}
		
		echo '</table><br><br><br><br></div>';
		mysqli_close($dbc);
	
	else {
		$query = "SELECT * FROM books ORDER BY id";
		$r = mysqli_query($dbc, $query);
	
		while($row = mysqli_fetch_array($r)){
			echo "<tr>
				<td><br>{$row['id']}<br><br></td>
				<td><br>{$row['name']}<br><br></td>
				<td><br>{$row['author']}<br><br></td>
				<td><br>{$row['shelf']}<br><br></td>
				<td><br>{$row['row']}<br><br></td>
				<td><br>{$row['available']}<br><br></td>
				<td><br>{$row['date']}<br><br></td>
				</tr>";		
		}
		echo '</table><br><br><br><br></div>';
		mysqli_close($dbc);
	}
	
	<!------------------------------------------->
	
	<?php
		$dbc = @mysqli_connect("localhost","root","");
		$dbs = @mysqli_select_db($dbc,"library");

		$query = "DELETE FROM books WHERE id = {$_POST['id']}";
		$r = mysqli_query($dbc, $query));

		mysqli_close($dbc);
	?>
				  
<?php
	function ic($ic)
	{
		if(preg_match("/^[0-9]{6}-[0-9]{2}-[0-9]{4}$/",$ic))
			{
				return TRUE;
			}
			
		else
		{
			return FALSE;
		}
	}
	
	if (isset($_POST['icno']))
	{
		$ic = $_POST['icno'];
		
		$resultic = ic($ic);
		
		if($resultic == TRUE && $resultphone == TRUE)
		{
			echo "True.";
		}
		
		else 
			echo "False.";
	}

	else
	{
		?>
		<form action = "number.php" method = "post">
		
		Please enter your ic num:
		<input type ="text" name="icno"><br>
		
		<input type="submit" name="Submit">
		</form>
		<?php
	}
	?>
	
	<!-- SEARCH -->

	
<script type="text/javascript">
var Liferay={Browser:{acceptsGzip:function(){return true},
getMajorVersion:function(){return 69},
getRevision:function(){return"537.36"},
getVersion:function(){return"69.0.3497.100"},
isAir:function(){return false},isChrome:function(){return true},
isFirefox:function(){return false},isGecko:function(){return true},
isIe:function(){return false},isIphone:function(){return false},
isLinux:function(){return false},isMac:function(){return false},
isMobile:function(){return false},isMozilla:function(){return false},
isOpera:function(){return false},isRtf:function(){return true},
isSafari:function(){return true},isSun:function(){return false},
isWap:function(){return false},isWapXhtml:function(){return false},
isWebKit:function(){return true},isWindows:function(){return true},
isWml:function(){return false}},Data:{isCustomizationView:function(){return false},
notices:[null]},ThemeDisplay:{getCDNDynamicResourcesHost:function(){return""},
getCDNBaseURL:function(){return"http://iicplibrary.newinti.edu.my"},
getCDNHost:function(){return""},getCompanyId:function(){return"253"},
getCompanyGroupId:function(){return"291"},
getUserId:function(){return"257"},
getDoAsUserIdEncoded:function(){return""},
getPlid:function(){return"30767"},
getLayoutId:function(){return"58"},
getLayoutURL:function(){return"http://iicplibrary.newinti.edu.my/home"},
isPrivateLayout:function(){return"false"},
getParentLayoutId:function(){return"0"},
isVirtualLayout:function(){return false},
getScopeGroupId:function(){return"279"},
getScopeGroupIdOrLiveGroupId:function(){return"279"},
getParentGroupId:function(){return"279"},
isImpersonated:function(){return false},
isSignedIn:function(){return false},
getDefaultLanguageId:function(){return"en_US"},
getLanguageId:function(){return"en_US"},
isAddSessionIdToURL:function(){return false},
isFreeformLayout:function(){return false},
isStateExclusive:function(){return false},
isStateMaximized:function(){return false},
isStatePopUp:function(){return false},
getPathContext:function(){return""},
getPathImage:function(){return"/image"},
getPathJavaScript:function(){return"/html/js"},
getPathMain:function(){return"/c"},
getPathThemeImages:function(){return"http://iicplibrary.newinti.edu.my/zoe-resort-theme/images"},
getPathThemeRoot:function(){return"/zoe-resort-theme"},
getURLControlPanel:function(){return"/group/control_panel?doAsGroupId=279&refererPlid=30767"},
getURLHome:function(){return"http\x3a\x2f\x2fiicplibrary\x2enewinti\x2eedu\x2emy\x2fweb\x2fguest\x2fhome"},
getSessionId:function(){return"6D476907774B06C197CD77EE61A2D436"},
getPortletSetupShowBordersDefault:function(){return true}},
PropsValues:{NTLM_AUTH_ENABLED:false}};
var themeDisplay=Liferay.ThemeDisplay;Liferay.AUI={getAvailableLangPath:function(){return"available_languages.jsp?browserId=other&themeId=zoeresort_WAR_zoeresorttheme&colorSchemeId=01&minifierType=js&languageId=en_US&b=6102&t=1376624994000"},
getBaseURL:function(){return"http://iicplibrary.newinti.edu.my/html/js/aui/"},
getCombine:function(){return true},
getComboPath:function(){return"/combo/?browserId=other&minifierType=&languageId=en_US&b=6102&t=1376624994000&p=/html/js&"},
getFilter:function(){return{replaceStr:function(c,b,a){return b+"m="+(c.split("/html/js")[1]||"")},searchExp:"(\\?|&)/([^&]+)"}},
getJavaScriptRootPath:function(){return"/html/js"},
getLangPath:function(){return"aui_lang.jsp?browserId=other&themeId=zoeresort_WAR_zoeresorttheme&colorSchemeId=01&minifierType=js&languageId=en_US&b=6102&t=1376624994000"},
getRootPath:function(){return"/html/js/aui/"}};
window.YUI_config={base:Liferay.AUI.getBaseURL(),comboBase:Liferay.AUI.getComboPath(),
fetchCSS:true,filter:Liferay.AUI.getFilter(),
root:Liferay.AUI.getRootPath(),
useBrowserConsole:false};
Liferay.authToken="GYcftn7U";
Liferay.currentURL="\x2fhome";
Liferay.currentURLEncoded="%2Fhome";
</script> 
<div style = "text-align: center">	
		<?php
			if(isset($_POST['confirm'])){
				if ($dbc = mysqli_connect('localhost','root','')){
					echo '<br><br><br><font color = "lime">Successfully</font> connected to MySQL!<br>';
					if($dbs = mysqli_select_db($dbc,'shopping')){
						echo "Database \"shopping\" selected.<br>";
						$problem = FALSE;
						if(!empty($_POST['flower']) && !empty($_POST['stock']) && !empty($_POST['price']) ){
							$flower = trim($_POST['flower']);
							$stock = trim($_POST['stock']);
							$price = trim($_POST['price']);
						}
						else{
							echo '<p style="color: red;">Error, please update the shopping cart.<br></p>'.
							$problem = TRUE;
						}
						if ((!is_numeric($_POST['flower']))&&(is_numeric($_POST['stock']))&&(is_numeric($_POST['price'])))
						{
							if(!$problem)
							{
								$query = "INSERT INTO shopping(id, name, quantity, price) VALUES(0, '$flower', '$stock', '$price')";
								if(@mysqli_query($dbc, $query))
									echo "Blog entry added successfully!<br>";
								else
									echo '<p style="color: red;">Unable to add entry due to <br/>:".mysqli_error($dbc)."<br>Query 
									that was attempted to execute: ".$query.".';
							}	
						}
						else
							echo "<br><br>Please enter a valid input for every field.<br><br>";
						}
						mysqli_close($dbc);
					}
				else
					echo '<p style="color: red;">Connection error: ". mysqli_connect_error($dbc).". Please try again.</p>';
			}
			
			else{
		?>
			<form action="books.php" method="post">
				<h1><br>Add Books</h1><br>
				<p>Book ID: <input type="text" name="flower" required><br><br></p>
				<p>Book Name: <input type="text" name="stock" required><br><br></p>
				<p>Book Price: <input type="text" name="price" required><br><br></p>

				<input type="submit" name="confirm" value="Confirm">
				<br><br><br>
			</form>
		<?php
			}
		?>
		<br><a href = "books.php"><b><i>Refresh</i></b></a><br>
		
		<br>Click
		<a href = "list.php"><u>here</u></a>
		 to view the updated book list.
		<br><br><br><br>
		</div>
<!--------------------------------------------->
if (isset($_POST['issue'])){
		$bookid=$_POST['bid'];
		$query="SELECT * FROM books WHERE id='$bookid'";
		$r=mysqli_query($dbc, $query);
		if (mysqli_num_rows($r)>0){
			$row = mysqli_fetch_array($r);
			echo"Book ID: {$row['id']}<br>Book Name: {$row['name']}<br>Book Author: {$row['author']}<br>Book Status: {$row['available']}
				<br><br>Issue to?<br>
				<form action=\"issue.php\" method=\"post\">
					Student Matriculation Number:<input type=\"text\" name=\"studid\" required>
					<input type = 'hidden' name = 'bid' value = '{$bookid}'>
					<input type=\"submit\" name=\"cnfm\" value=\"Confirm\">
				</form><br><br>
			";
		}				
	}
	
	if ((isset($_POST['cnfm']))&&isset(($_POST['issue']))){
		$bookid=$_POST['bid'];
		$matno=$_POST['studid'];
		
		$idd = $_POST['studid'];
		$resultid = check($idd);
		$book = $_POST['bid'];
		$checked = checkk($book);
		
		if($resultid == FALSE){
			array_push($errors, "Please enter a valid matriculation number.");
		}
		
		if($checked == FALSE){
			array_push($errors, "Please enter a valid book ID.");
		}
		
		$query="SELECT * FROM user WHERE matno='$matno'";
		$result=mysqli_query($dbc, $query);
		if (mysqli_num_rows($result)==0){
			array_push($errors, "The student matriculation number entered is not yet registered.");
		}
		
		$qq="SELECT * FROM issue WHERE bookid='$bookid'";
		$resultt=mysqli_query($dbc, $qq);
		if (mysqli_num_rows($resultt)>0){
			array_push($errors, "The book is currently unavailable.");
		}
		
		if (count($errors) == 0){
			$query = "INSERT INTO issue(studmat, bookid, date) VALUES('$matno', '$bookid', NOW())";
			@mysqli_query($dbc, $query);
			$_SESSION['issued']="The book with ID of ".$bookid." has been lend to the student with the matriculation number of ".$matno." ";
			exit();
			mysqli_close($dbc);
		}				
	}


		
		
		
		
		
		
