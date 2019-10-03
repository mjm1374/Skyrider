<!DOCTYPE html>

<html lang="en">

<head>
	<title>Sky Riders balloon Home</title>
	<meta content="balloon flight,balloon ride,hot air balloon,balloon PA, hot air balloon rides,hot air balloon flights,ballooning,balloon,Philadelphia,Trappe,Sky Riders,air balloon,balloon montgomery county,skyriders" name="Keywords">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=unicode">
	<meta name="description" content="Sky Riders hot air balloon team pilots, balloon crew">
	<meta name="image" content="http://www.skyridersballoon.com/images/sun.jpg">
	<!-- Schema.org for Google -->
	<meta itemprop="name" content="Sky Rider Ballon Tours">
	<meta itemprop="description" content="Sky Riders hot air balloon team pilots, balloon crew">
	<meta itemprop="image" content="http://www.skyridersballoon.com/images/sun.jpg">
	<!-- Open Graph general (Facebook, Pinterest & Google+) -->
	<meta name="og:title" content="Sky Rider Ballon Tours">
	<meta name="og:description" content="Sky Riders hot air balloon team pilots, balloon crew">
	<meta name="og:image" content="http://www.skyridersballoon.com/images/sun.jpg">
	<meta name="og:url" content="http://www.skyridersballoon.com">
	<meta name="og:site_name" content="Sky Rider Ballon Tours">
	<meta name="og:type" content="website">

	<link rel="profile" href="http://microformats.org/profile/hcard">
	<link href="css/styles.css" type="text/css" rel="stylesheet">
	<!--[if IE 6]>
		<link rel="STYLESHEET" type="text/css" href="css/styles_ie6.css">
	<![endif]-->
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-csxorxvzctkaix6yvo6hppczgetbymgwsflbw8hfcjo="
  crossorigin="anonymous"></script>
	<script src="js/jquery.colorbox-min.js"></script>

	<script>
		$(document).ready(function() {

			$("#galtrigger").click(function() {
				$("a[rel='galleryimg']").colorbox({
					transition: "fade",
					slideshow: true,
					open: true,
					xhrError: true
				});

			});
		});
	</script>
</head>

<body>

	<div id="rightcolumn" class="right"></div>

	<div id="leftcolumn" class="left"></div>
	<div id="maincontainer">
		<?php include_once('nav.php') ?>
		<div id="logo">

			<img src="images/logo.jpg" width="253" height="137" alt="Sky Rider Balloon Tours" border="0" align="left" />
			<div id="callout">balloon Team</div>
		</div>
		<div id="contentarea">
			<div class="story">
				<h1>Welcome</h1>
				<h2>To "Hot Air" World!</h2>
				<div class="contentbox">

					<div class="storybox">
						<p>The <span class="org">Sky Riders</span> fly a balloon in Montgomery county, PA.</p>

						<p>A balloon flight is a fantastic experience. You gently float like a soap
							bubble, carried by a slow breeze, over rolling hills and forests.
							Sometimes you are high enough to see the Philadelphia skyline,
							sometimes you are low enough to brush the top of the trees, watch
							the wildlife and talk to people.</p>

						<p class="right">And you wonder... What took me so long? </p>
					</div>


				</div>
			</div>
			<div class="story">
				<h1>Come Fly with Us</h1>
				<h2>Experience the magic</h2>
				<div class="contentbox">
					<table>
						<tr>
							<td><img src="images/pic.jpg" width="183" height="146" alt="Call Now - 484 744 3161" border="0" class="left" /></td>
							<td><img src="images/pic1.jpg" width="251" height="165" alt="ballooning photographs" border="0" /></td>
						</tr>
					</table>




					<ul class="threelinks">
						<li> >> <a href="more-about-crewing-a-balloon.php">Crew Page</a> </li>
						<li> >> <a href="http://www.usairnet.com/cgi-bin/launch/code.cgi?Submit=Go&sta=KPTW&state=PA" target="_blank">3 day forecast</a> </li>
						<li> >> <a href="javascript:void(0);" id="galtrigger">more photos</a> </li>
					</ul>
				</div>
			</div>
		</div>




	</div>
	<?php include_once('footer.php') ?>

	</div>
	<?php include 'gallery.html'; ?>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-19260420-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script');
			ga.type = 'text/javascript';
			ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(ga, s);
		})();
	</script>
</body>

</html>