<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php 
 
 

$pageset = "home-page.php";

if (isset($_GET['pg']) && $_GET['pg'] != ""){
	$pageset = $_GET['pg'];
}

?>
<html>
<head>
<meta name="google-site-verification" content="slGfR9sw0TRc9COLxotzGJb7i_C9eM832_Rl6lNxwUQ" />
	<meta name="Keywords" content="balloon flight, balloon ride, hot air balloon, Pennsylvania, PA, hot air balloon rides, hot air balloon flights, ballooning, balloon, Philadelphia, Trappe, Sky Riders">
	<meta name="Description" content="Hot Air Balloon Rides in Montgomery county, PA with the Sky Riders Balloon Team - Because there is nothing like it...">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Sky Riders Balloon Team Home</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	
	<script type="text/javascript">
	function reportSize() {
		myHeight = document.documentElement.clientHeight;
		newHeight =  myHeight + 15 ;
		//alert(myHeight + " x " + newHeight);
	  document.getElementById("mainframe").style.height = newHeight;
	}
 
	</script>
	<style>
<style type="text/css">
audio::-internal-media-controls-download-button {
    display:none;
}

audio::-webkit-media-controls-enclosure {
    overflow:hidden;
}

audio::-webkit-media-controls-panel {
    width: calc(100% + 30px); /* Adjust as needed */
}

body {
/*	margin: 0; */
	margin: 0px 0 24px 0;
	padding: 0;
/*	padding: 100px 0 50px 0; */
	color: #000;
	background: url(images/px.gif)
}
/*
	va in IE, Fx, Op (iframe height prende altezza windows, escluso margin/padding body).
	No in Sf (iframe height uguale intera altezza windows)
*/
iframe {
	height: 100%;
	width: 100%;
	border: 0 none;
}
* html body {
	overflow-y: hidden;
}

#head, #foot {
	position: absolute;
	width: 100%;
	left: 0;
}
 
#foot {
	height: 24px;
	bottom: 0;
	 
}
 

 
	</style>
</head>

<body >  
<iframe id="mainframe" src="<?php echo($pageset); ?>"></iframe>

<div id="foot">

<!--	<script language="JavaScript" src="swf/audio-player.js"></script>
	<object type="application/x-shockwave-flash" data="swf/player.swf" id="audioplayer1" height="24" width="290">
	<param name="movie" value="swf/player.swf">
	<param name="FlashVars" value="playerID=1&amp;soundFile=audio/music.mp3&amp;autostart=yes&amp;loop=yes">
	<param name="quality" value="high">
	<param name="menu" value="false">
	<param name="autostart" value="yes">
	<param name="wmode" value="transparent">
	</object>-->
	
	<audio controls autoplay  >
	 
		<source src="audio/music.mp3" type="audio/mpeg">
	  Your browser does not support the audio element.
	  </audio>

</div>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19260420-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
