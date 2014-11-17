<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >
<?php if(session_id() == '' || !isset($_SESSION)) { 
   // session isn't started 
   session_start(); 
} ?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate" />
	<meta name="apple-mobile-web-app-title" content="Homicides">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon" href="appicon.png">
	<link rel="icon" type="image/png" href="favicon.png">

	<title>Suspect list - Austin Homicide Project</title>
	<meta name="description" content="List of suspects for the Austin Homicide Project, an effort to document and understand violent crime in Austin and Central Texas.">
	<meta property="og:title" content="Suspect list - Austin Homicide Project"/>
	<meta property="og:description" content="List of suspects for the Austin Homicide Project, an effort by the Austin American-Statesman to document and understand violent crime in Austin and Central Texas."/>
	<meta property="og:image" content="appicon.png"/>

  <link rel="stylesheet" href="../foundation/css/normalize.css">
  <link rel="stylesheet" href="../foundation/css/foundation.css">
  <script src="../foundation/js/vendor/custom.modernizr.js"></script>
  <!-- project additions -->
  <link rel="stylesheet" href="homicides.css">
  <?php include "../common/metrics-head.js";?>
  <?php include "advertising.js"; ?>
</head>
<body>

<div class="fixed">
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name"><h1><a href="http://www.mystatesman.com" target="_blank"><img src="logo-white.svg" /></a></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>

		<section class="top-bar-section">
			<!-- Right Nav Section -->
			<ul class="right">
                <li><a href="./">HOME</a></li>
                <li><a href="homicide-victim-list.php">VICTIMS</a></li>
				<li class="active"><a href="homicide-suspect-list.php">SUSPECTS</a></li>
                <li><a href="homicide-charts.php">STATISTICS</a></li>
                <li><a href="homicide-map.php">MAP</a></li>
                <li><a href="homicide-faq.php">ABOUT</a></li>
			</ul>
  		</section>
	</nav>
</div>

<div class="row">
	<div class="large-12 columns">
		<h1>Homicide suspects</h1>
        <p>Suspects are listed in alphabetical order.</p>
	</div>
</div>

<div class="row">
	<div class="large-8 medium-8 columns">
		<div class="show-for-small-only">
		<div id="cbe76c00009d438471755a4babbae6"></div>
		<script type="text/javascript" src="http://bridge.caspio.net/scripts/e1.js"></script>
		<script type="text/javascript">try{f_cbload("e76c00009d438471755a4babbae6","http:");}catch(v_e){;}</script>
		<div id="cxkg"><a href="http://bridge.caspio.net/dp.asp?AppKey=e76c00009d438471755a4babbae6">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
		</div>
		<div class="show-for-medium-up">
		<!-- Begin Caspio Deploy Code (for inserting in body) -->
		<?php require_once('dpload.txt');dpload('http://bridge.caspio.net/','e76c0000e9762b9f33c84bdca858','i');?>
		<!-- End Caspio Deploy Code -->
		</div>

	</div>
    
	<div class="large-4 medium-4 columns">
		<h3>Search by victim</h3>
		<div id="cbe76c0000015a7e855d73481585cd"></div>
		<script type="text/javascript" src="http://bridge.caspio.net/scripts/e1.js"></script>
		<script type="text/javascript">try{f_cbload("e76c0000015a7e855d73481585cd","http:");}catch(v_e){;}</script>
		<div id="cxkg"><a href="http://bridge.caspio.net/dp.asp?AppKey=e76c0000015a7e855d73481585cd">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
		<h3>Search by suspect</h3>
		<div id="cbe76c0000d1eb36e1437d45718daf"></div>
		<script type="text/javascript" src="http://bridge.caspio.net/scripts/e1.js"></script>
		<script type="text/javascript">try{f_cbload("e76c0000d1eb36e1437d45718daf","http:");}catch(v_e){;}</script>
		<div id="cxkg"><a href="http://bridge.caspio.net/dp.asp?AppKey=e76c0000d1eb36e1437d45718daf">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
	</div>  
</div>

<hr />
<!-- Share Code -->   
<?php include "../common/share.php"; ?>

<!-- Ad Code -->   
<?php include "advertising.php"; ?>
<!-- End Ad Code -->


  <script src="../foundation/js/vendor/jquery.js"></script>
  <script src="../foundation/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>

<?php include "metrics-homicides.js";?>
<?php include "../common/metrics.js";?>
<?php include "../common/footer.php"; ?>
</body>
</html>
