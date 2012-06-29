<?php error_reporting(E_ERROR);?>
<!doctype html>
<html>
	<head>
		<title>Skora</title>
		<link href="./css/style.css" type="text/css" rel="stylesheet"/>
				<!-- Included CSS Files -->
	<link rel="stylesheet" href="css/foundation.css">
	<link rel="stylesheet" href="css/app.css">

	<!--[if lt IE 9]>
		<link rel="stylesheet" href="css/ie.css">
	<![endif]-->
	<script src="js/jquery.min.js"></script>
	<script src="js/foundation.js"></script>
	<script src="js/modernizr.foundation.js"></script>
	<script src="js/jquery.cycle.all.min.js"></script>
	<!-- IE Fix for HTML5 Tags -->
	<!--[if lt IE 9]>
		<script src="js/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
     $(window).load(function() {
         $('#featured').orbit();
		 $('#lscr').cycle({fx:"scrollLeft"});
     });
	 
</script>
	</head>
<body>
	<div class="main">
	<div class="bg-overlay"></div>
	<div class="app">
		<img src="images/squad.png" />
	</div>
	</div>
	<div class="footer">
		
			<div class="footer-inner-left">
			</div>
			<div class="footer-inner-right">
			<img src="images/live_scores.png" style="height:50px !important;" alt="Skora live score" onmouseover="this.style.cursor='pointer';" onclick="document.location='';"/>
		
			</div>
			
			<div class="live-scores" id="lscr">
			<img src="images/score1.png" />
			<img src="images/score2.png" />
			<img src="images/score3.png" />
			</div>
		
		</div>
	<div class="menu">
	<table class="menu-tbl" >
	<tr>
	<td width="15%" onmouseout="$('#img_timer').mouseout();" onmouseover="$('#img_timer').mouseover();"> <img id="img_timer" src="images/icon_timer.png" style="margin-top:-5px;" onmouseover="this.src='./images/icon_timer_down.png';" onmouseout="this.src='./images/icon_timer.png';"/></td>
	
	<td width="15%" onmouseout="$('#img_videos').mouseout();" onmouseover="$('#img_videos').mouseover();"><img src="images/videos.png" onmouseover="this.src='./images/videos_down.png';" onmouseout="this.src='./images/videos.png';" style="margin-top:-5px;"  id="img_videos"/></td>
	
	<td width="15%" onmouseout="$('#img_profile').mouseout();" onmouseover="$('#img_profile').mouseover();"><img src="images/profile.png" onmouseover="this.src='./images/profile_down.png';" onmouseout="this.src='./images/profile.png';" id="img_profile"/></td>
	
	<td width="15%" onmouseout="$('#img_cb').mouseout();" onmouseover="$('#img_cb').mouseover();" onclick="document.location='cb.php';" ><img src="images/clipboard.png" onmouseover="this.src='./images/clipboard_down.png';"  onmouseout="this.src='./images/clipboard.png';" id="img_cb"/></td>
	
	<td width="15%" onmouseout="$('#img_stand').mouseout();" onmouseover="$('#img_stand').mouseover();" ><img src="images/icon_stand.png" onmouseover="this.src='./images/icon_stand_down.png';" onmouseout="this.src='./images/icon_stand.png';" id="img_stand"/></td>
	
	<td width="15%" ><img src="images/mgmnt_down.png" id="img_mgmnt"/></td>
	
	</tr>
	
	</table>
	</div>
	
</body>

</html>