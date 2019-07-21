<?php
	session_start();
	if (empty($_SESSION['admin']))
	{
		header('Location:loginadmin.php');
	}
?>
<!DOCTYPE html> 
<html class="ltr" dir="ltr" lang="en-US">
<head> 
<title>Home - IICP LIBRARY</title>
<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<meta name="description" content="Share-Buttons is a plugin based on jQuery to add share and contact buttons to your website."> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/B13D7E28-AD16-1B4B-AE84-41733FF35C43/main.js" charset="UTF-8"></script>
<script>
	<?php include('time.php');?>
</script>
<style>
	table,th,td{
		width:70%;
		margin: 0px auto;
		padding: 10px;
		border-radius: 5px;
		text-align: center;
		border: 1px solid black;
		border-collapse: collapse;
	}
	.bla {
		text-align: center;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 32px;
		padding-right: 32px;
	}

</style>
</head> 
<meta content="text/html; charset=UTF-8" http-equiv="content-type" /> 
<link href="http://iicplibrary.newinti.edu.my/zoe-resort-theme/images/favicon.ico" rel="Shortcut Icon" /> 
<link href="http&#x3a;&#x2f;&#x2f;iicplibrary&#x2e;newinti&#x2e;edu&#x2e;my" rel="canonical" /> 
<link href="http&#x3a;&#x2f;&#x2f;iicplibrary&#x2e;newinti&#x2e;edu&#x2e;my&#x2f;ms" hreflang="ms-MY" rel="alternate" /> 
<link href="&#x2f;html&#x2f;css&#x2f;main&#x2e;css&#x3f;browserId&#x3d;other&#x26;themeId&#x3d;zoeresort_WAR_zoeresorttheme&#x26;minifierType&#x3d;css&#x26;languageId&#x3d;en_US&#x26;b&#x3d;6102&#x26;t&#x3d;1376358222000" rel="stylesheet" type="text/css" /> 
<link href="http://iicplibrary.newinti.edu.my/wowslider-type-02-portlet/css/main.css?browserId=other&amp;themeId=zoeresort_WAR_zoeresorttheme&amp;minifierType=css&amp;languageId=en_US&amp;b=6102&amp;t=1532922356623" rel="stylesheet" type="text/css" /> 
<link href="http://iicplibrary.newinti.edu.my/html/portlet/journal_content/css/main.css?browserId=other&amp;themeId=zoeresort_WAR_zoeresorttheme&amp;minifierType=css&amp;languageId=en_US&amp;b=6102&amp;t=1512401008000" rel="stylesheet" type="text/css" /> 
<link href="http://iicplibrary.newinti.edu.my/marquee-type-04-portlet/css/main.css?browserId=other&amp;themeId=zoeresort_WAR_zoeresorttheme&amp;minifierType=css&amp;languageId=en_US&amp;b=6102&amp;t=1532922342864" rel="stylesheet" type="text/css" /> 
<script src="/html/js/barebone.jsp?browserId=other&amp;themeId=zoeresort_WAR_zoeresorttheme&amp;colorSchemeId=01&amp;minifierType=js&amp;minifierBundleId=javascript.barebone.files&amp;languageId=en_US&amp;b=6102&amp;t=1376624994000" type="text/javascript"></script> 
<script type="text/javascript">Liferay.Portlet.list=["wowslidertype02_WAR_wowslidertype02portlet","56_INSTANCE_XjfXYAVoX4ZK","56_INSTANCE_RQjTJ0pNEdeU","56_INSTANCE_31ZJPpLrWudJ","56_INSTANCE_5Cnis9nV4k8O","marqueetype04_WAR_marqueetype04portlet_INSTANCE_3xEKnhsCTlpV"];</script> 
<link class="lfr-css-file" href="http&#x3a;&#x2f;&#x2f;iicplibrary&#x2e;newinti&#x2e;edu&#x2e;my&#x2f;zoe-resort-theme&#x2f;css&#x2f;main&#x2e;css&#x3f;browserId&#x3d;other&#x26;themeId&#x3d;zoeresort_WAR_zoeresorttheme&#x26;minifierType&#x3d;css&#x26;languageId&#x3d;en_US&#x26;b&#x3d;6102&#x26;t&#x3d;1512532673354" rel="stylesheet" type="text/css" /> 
<style type="text/css">#p_p_id_wowslidertype02_WAR_wowslidertype02portlet_{border-width:;border-style:}#p_p_id_56_INSTANCE_XjfXYAVoX4ZK_ .portlet{background-color:#fdfdfd;border-width:;border-style:;font-family:'Arial';font-style:normal;font-weight:normal;text-align:left}#p_p_id_56_INSTANCE_RQjTJ0pNEdeU_ .portlet{border-width:;border-style:;color:#050505;font-family:'Arial';font-style:normal;font-weight:normal;text-align:left}#p_p_id_56_INSTANCE_31ZJPpLrWudJ_ .portlet{border-width:;border-style:}</style> 
</head> 
<body class=" yui3-skin-sam controls-visible guest-site signed-out public-page site home-page" onload = "startTime()"> 
<style> input, textarea, keygen, select, button { font: normal normal normal normal 13.3333330154419px/normal Arial; } </style> 
<a href="#main-content" id="skip-to-content">Skip to Content</a> 
<div id="wrapper"> 

<!----------------------------------------------Page Menu Bar-------------------------------------------------->

<header id="banner" role="banner"> 
<div id="heading"> 
<h1 class="site-title"> 
<a class="logo custom-logo" href="inti.php" title="Go to IICP LIBRARY"> 
<img alt="IICP LIBRARY" height="90" src="images/intilogo.jpg" width="450" /> </a> 
<div id="clock" style = "text-align: right;font-size: 15px; padding-right: 10px; padding-top: 50px;"></div>
<!--<a href="/c/portal/login?p_|_id=1307"> <img src="http://www.free-icons-download.net/images/key-icon-45752.png" align="right" alt="Webmaster Login" style="width:25px;height:25px;border:0"> </a>--> 
</h1> 

<h2 class="page-title"> 
<span>List of Books</span> </h2> </div> 
<nav class="sort-pages modify-pages" id="navigation2"> 
<ul class="top-level"> 
<li aria-selected=\"true\" class=" selected first"> 
<a href="adminhome.php" > 
<span>Home</span> </a> </li> 
<li aria-selected=\"true\" class=" selected first"> 
<a href="list.php" > 
<span>List of Books</span> </a> 
<ul class="second-level">
<li> <a href="list.php" >All Books</a> </li> 
<li> <a href="issued.php" >Issued Books</a> </li> 
</ul></li> 
<li class=""> <a> <span> Manage Students</span> </a> 
<ul class="second-level">
<li> <a href="student.php" >Student Account List</a> </li> 
<li> <a href="discuss.php" >Student Discussion Room Booking</a> </li> 
</ul>
</li> <li class=""> <a> <span> Manage Books</span> </a>
<ul class="second-level"> 
<li><a href="add.php"> <span>Add Books</span> </a> </li>
<li><a href="issue.php"> <span>Issue Books</span> </a> </li>
<li><a href="return.php"> <span>Return Books</span> </a> </li>
</ul>
<li> <a href="pwa.php" >Change Password</a> </li> 
<li> <a href = "loginadmin.php?logouts='1'" style = "color: #ff8080;">Logout</a> </li>
</li></ul> </li> </ul> </nav> </header> 
<!-------------------------------------------Content----------------------------------------------------->

<?php
	$dbc = mysqli_connect('localhost','root','');
	$dbs = mysqli_select_db($dbc,'library');

	echo '<br><br><div style="text-align:center;"><h1>Issued Book List</h1>
			<br>
			<form action="issued.php" method = "post">
			Sort by? &emsp;
			<input type="radio" name="sort" value="id" checked>Book ID&emsp;
			<input type="radio" name="sort" value="matno">Student ID&emsp;
			<input type="radio" name="sort" value="date">Date&emsp;
			<input type="submit" name="sortform" value="Sort">
			</div>
			<br>
			<div class = "table">
			<br><table align = "center" style="width:50%">
			<tr><br>
				<th class = "bla">Book ID</th>
				<th class = "bla">Student Matriculation Number</th>
				<th class = "bla">Issued date</th>

			</tr>';
	if(isset($_POST['sortform'])){
		$sortt = $_POST['sort'];		
		if ($sortt=='id'){
			$query = "SELECT * FROM issue ORDER BY bookid";
		}
	
		else if ($sortt=='matno'){
			$query = "SELECT * FROM issue ORDER BY studmat";
		}
	
		else {
			$query = "SELECT * FROM issue ORDER BY date DESC";
		}
		
		$r = mysqli_query($dbc, $query);
		while($row = mysqli_fetch_array($r)){
			echo "<tr>
				<td><br>{$row['bookid']}<br><br></td>
				<td><br>{$row['studmat']}<br><br></td>
				<td><br>{$row['date']}<br><br></td>
				</tr>";		
		}
		echo '</table><br><br><br><br></div>';
		mysqli_close($dbc);
	}
	
	else {
		$query = "SELECT * FROM issue ORDER BY bookid";
		$r = mysqli_query($dbc, $query);
	
		while($row = mysqli_fetch_array($r)){
			echo "<tr>
				<td><br>{$row['bookid']}<br><br></td>
				<td><br>{$row['studmat']}<br><br></td>
				<td><br>{$row['date']}<br><br></td>
				</tr>";		
		}
		echo '</table><br><br><br><br></div>';
		mysqli_close($dbc);
	}

?>

<!-------------------------------------------Footer----------------------------------------------------->

<footer id="footer" role="contentinfo"> <div class="clearer"></div> <br/> </br> 
<p>Recommended Browser Google Chrome</p> <p>Copyright © 2017 INTI International College Penang Library</p> 
<p>Tel : +604-6310138 | Fax : +604-6310193 | <a href="/c/portal/login?p_|_id=1307" title="Admin Login">Admin Login</a> </p> <br/> 
<p><!-- Histats.com (div with counter) --><center><div id="histats_counter"></div></center> <!-- Histats.com START (aync)--> 
<script type="text/javascript">var _Hasync=_Hasync||[];_Hasync.push(["Histats.start","1,3964141,4,2048,280,25,00011110"]);_Hasync.push(["Histats.fasi","1"]);_Hasync.push(["Histats.track_hits",""]);(function(){var a=document.createElement("script");a.type="text/javascript";a.async=true;a.src=("//s10.histats.com/js15_as.js");(document.getElementsByTagName("head")[0]||document.getElementsByTagName("body")[0]).appendChild(a)})();</script> 
<noscript><a href="/" target="_blank"><img src="//sstatic1.histats.com/0.gif?3964141&101" alt="statistics" border="0"></a></noscript> <!-- Histats.com END --></p> </br> </footer> </div> 
<script src="http://iicplibrary.newinti.edu.my/wowslider-type-02-portlet/js/main.js?browserId=other&amp;minifierType=js&amp;languageId=en_US&amp;b=6102&amp;t=1532922356623" type="text/javascript"></script> <script src="http://iicplibrary.newinti.edu.my/marquee-type-04-portlet/js/main.js?browserId=other&amp;minifierType=js&amp;languageId=en_US&amp;b=6102&amp;t=1532922342864" type="text/javascript"></script> 
<script type="text/javascript">Liferay.Util.addInputFocus();Liferay.Portlet.runtimePortletIds=["103"];</script> 
<script type="text/javascript">Liferay.Portlet.onLoad({canEditTitle:false,columnPos:0,isStatic:"end",
namespacedId:"p_p_id_56_INSTANCE_31ZJPpLrWudJ_",portletId:"56_INSTANCE_31ZJPpLrWudJ",
refreshURL:"\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d30767\x26p_p_id\x3d56_INSTANCE_31ZJPpLrWudJ\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-2\x26p_p_col_pos\x3d0\x26p_p_col_count\x3d3\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fhome"});
Liferay.Portlet.onLoad({canEditTitle:false,columnPos:0,isStatic:"end",namespacedId:"p_p_id_wowslidertype02_WAR_wowslidertype02portlet_",
portletId:"wowslidertype02_WAR_wowslidertype02portlet",
refreshURL:"\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d30767\x26p_p_id\x3dwowslidertype02_WAR_wowslidertype02portlet\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-1\x26p_p_col_pos\x3d0\x26p_p_col_count\x3d3\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fhome"});
Liferay.Portlet.onLoad({canEditTitle:false,columnPos:0,isStatic:"end",namespacedId:"p_p_id_103_",portletId:"103",
refreshURL:"\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d30767\x26p_p_id\x3d103\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3d\x26p_p_col_pos\x3d0\x26p_p_col_count\x3d0\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fhome"});
Liferay.Portlet.onLoad({canEditTitle:false,columnPos:1,isStatic:"end",namespacedId:"p_p_id_56_INSTANCE_XjfXYAVoX4ZK_",
portletId:"56_INSTANCE_XjfXYAVoX4ZK",
refreshURL:"\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d30767\x26p_p_id\x3d56_INSTANCE_XjfXYAVoX4ZK\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-1\x26p_p_col_pos\x3d1\x26p_p_col_count\x3d3\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fhome"});
Liferay.Portlet.onLoad({canEditTitle:false,columnPos:2,isStatic:"end",namespacedId:"p_p_id_marqueetype04_WAR_marqueetype04portlet_INSTANCE_3xEKnhsCTlpV_",
portletId:"marqueetype04_WAR_marqueetype04portlet_INSTANCE_3xEKnhsCTlpV",
refreshURL:"\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d30767\x26p_p_id\x3dmarqueetype04_WAR_marqueetype04portlet_INSTANCE_3xEKnhsCTlpV\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-2\x26p_p_col_pos\x3d2\x26p_p_col_count\x3d3\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fhome"});
Liferay.Portlet.onLoad({canEditTitle:false,columnPos:1,isStatic:"end",namespacedId:"p_p_id_56_INSTANCE_5Cnis9nV4k8O_",
portletId:"56_INSTANCE_5Cnis9nV4k8O",
refreshURL:"\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d30767\x26p_p_id\x3d56_INSTANCE_5Cnis9nV4k8O\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-2\x26p_p_col_pos\x3d1\x26p_p_col_count\x3d3\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fhome"});
Liferay.Portlet.onLoad({canEditTitle:false,columnPos:2,isStatic:"end",namespacedId:"p_p_id_56_INSTANCE_RQjTJ0pNEdeU_",
portletId:"56_INSTANCE_RQjTJ0pNEdeU",
refreshURL:"\x2fc\x2fportal\x2frender_portlet\x3fp_l_id\x3d30767\x26p_p_id\x3d56_INSTANCE_RQjTJ0pNEdeU\x26p_p_lifecycle\x3d0\x26p_t_lifecycle\x3d0\x26p_p_state\x3dnormal\x26p_p_mode\x3dview\x26p_p_col_id\x3dcolumn-1\x26p_p_col_pos\x3d2\x26p_p_col_count\x3d3\x26p_p_isolated\x3d1\x26currentURL\x3d\x252Fhome"});
AUI().use("aui-base","liferay-menu","liferay-notice","liferay-poller",function(a){(function(){Liferay.Util.addInputType();
Liferay.Portlet.ready(function(b,c){Liferay.Util.addInputType(c)})})();
(function(){new Liferay.Menu();var b=Liferay.Data.notices;for(var c=1;c<b.length;c++){new Liferay.Notice(b[c])}})()});</script> 
<script src="http://iicplibrary.newinti.edu.my/zoe-resort-theme/js/main.js?browserId=other&amp;minifierType=js&amp;languageId=en_US&amp;b=6102&amp;t=1512532673354" type="text/javascript"></script> <script type="text/javascript"></script> 
</body> 
</html> 