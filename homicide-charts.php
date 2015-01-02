<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate" />
  <meta name="apple-mobile-web-app-title" content="Homicides">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <link rel="apple-touch-icon" href="appicon.png">
  <link rel="icon" type="image/png" href="favicon.png">

  <title>Statistics - Austin Homicide Project</title>
  <meta name="description" content="The Austin Homicide Project statistics track trends and figures concerning homicides in Austin and Central Texas.">
  <meta property="og:title" content="Statistics - Austin Homicide Project"/>
  <meta property="og:description" content="The Austin Homicide Project statistics track trends and figures concerning homicides in Austin and Central Texas, including APD's annual murder report."/>
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
				        <li><a href="homicide-suspect-list.php">SUSPECTS</a></li>
                <li class="active"><a href="homicide-charts.php">STATISTICS</a></li>
                <li><a href="homicide-map.php">MAP</a></li>
                <li><a href="homicide-faq.php">ABOUT</a></li>
			</ul>
  		</section>
	</nav>
</div>


<div class="row">
	<h1>Austin Homicide Project data</h1>
    <p>Data for homicides only in city of Austin.</p>
	<div class="large-6 columns">
		<div id="genderContainer" style="height: 320px;"></div>
    </div>
    <div class="large-6 columns">
		<div id="raceContainer" style="height: 320px;"></div>
    </div>
</div>
<hr>
<div class="row">
	<div class="large-6 columns">
    <dl class="tabs" data-tab>
			<dd><a href="#panel2013">2013</a></dd>
 			<dd class="active"><a href="#panel2014">2014</a></dd>
    </dl>
		<div class="tabs-content row">
  		<div class="content columns" id="panel2013">
        <!-- the non-active div has problem with width -->
        <div id="ageContainer2013" style="height: 320px; min-width: 320px;"></div>
		  </div>      
		  <div class="content columns active" id="panel2014">
        <div id="ageContainer2014" style="height: 320px;"></div>
      </div>
    </div>
  </div>
	<div class="large-6 columns">
		<div id="dayContainer" style="height: 385px;"></div>
  </div>
</div>
<hr>

<div class="row">
	<div class="large-12 columns">
		<div id="monthContainer" style="height: 320px;"></div>
  </div>
</div>
<hr>

<div class="row">
  <div class="large-12 columns">
    <div id="methodContainer" style="height: 320px;"></div>
  </div>
</div>
<hr>
<div class="row">
	<div class="large-12 columns">
		<div id="relationshipContainer" style="height: 270px;"></div>
        <p style="font-size:12px">*Although police shootings in the line of duty resulted in three homicides, the officers involved are not considered suspects in this database unless they are indicted on criminal charges. None of the officers have been indicted.</p>
    </div>
</div>
<hr>

<div class="row">
	<h2>Austin police murder report data</h2>
    <p>The APD's annual murder reports exclude negligent homicides, such as traffic fatalities, and officer-involved killings that are determined to be justifiable homicides.</p>
    <p>
    <div class="large-6 columns">
		<div id="murderGenderContainer" style="height: 320px;"></div>
    </div>
    <div class="large-6 columns">
		<div id="murderRaceContainer" style="height: 320px;"></div>
    </div>  
</div>
<div class="row">
    <div class="large-12 columns">
		<div id="murderMonthContainer" style="height: 320px;"></div>
    </div>
</div>
<div class="row">
    <div class="large-12 columns">
		<div id="murderRelContainer" style="height: 320px;"></div>
    </div>
</div>

<hr />
<!-- Ad Code -->   
<?php include "advertising.php"; ?>
<!-- End Ad Code -->

  <script src="http://alt.coxnewsweb.com/statesman/special/foundation5/js/vendor/jquery.js"></script>
  <script src="http://alt.coxnewsweb.com/statesman/special/foundation5/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
  
    <!-- highcharts -->
	<script src="http://alt.coxnewsweb.com/statesman/special/js/highcharts.js" type="text/javascript"></script>
    <script src="http://alt.coxnewsweb.com/statesman/special/js/modules/exporting.js"></script>
     <script src="homicides-script.js"></script>

<?php include "metrics-homicides.js";?>
<?php include "../common/metrics.js";?>
<?php include "../common/footer.php"; ?>
</body>
</html>