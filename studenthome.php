<?php include('signupserver.php'); 
	if (empty($_SESSION['matno']))
	{
		header('Location:loginstudent.php');
	}
?>
<!DOCTYPE html> 
<html class="ltr" dir="ltr" lang="en-US">
<head> 
<title>Homepage</title>
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
<span>Books Availability</span> </h2> </div> 
<nav class="sort-pages modify-pages" id="navigation2"> 
<ul class="top-level"> 
<li aria-selected=\"true\" class=" selected first"> 
<a href="studenthome.php" > 
<span>Home</span> </a> </li> 
<li><a href="availability.php"> <span>Books Availability</span> </a> </li>
<li><a href="room.php"> <span>Discussion Room Booking</span> </a> </li>
<li> <a href="pws.php" >Change Password</a> </li>
<li> <a href = "loginstudent.php?logout='1'" style = "color: #ff8080;">Logout</a> </li>
</li></ul> </li> </ul> </nav> </header> 

<!-------------------------------------------Content----------------------------------------------------->
	<?php if (isset($_SESSION['signed'])): ?>
		<br><br>
		<div class="success">
				<?php 
					echo $_SESSION['signed'];
					unset ($_SESSION['signed']);
				?>
		</div>
	<?php endif ?>
	<?php if (isset($_SESSION['success'])): ?>
			<h3><br>&emsp;
				<?php 
					echo $_SESSION['success'];
					unset ($_SESSION['success']);
				?>
			</h3>
	<?php endif ?>
	
	<?php if (isset($_SESSION["matno"])): ?>
		<p style="padding-left:28px;"><br>Welcome, <b><?php echo $_SESSION['matno'];?></b>!</p>
	<?php endif ?>

<?php include('content.php'); ?>


</body>
</html> 