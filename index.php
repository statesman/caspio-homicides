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

  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="apple-touch-icon" href="appicon.png">
  <meta name="apple-mobile-web-app-title" content="Austin Homicide Project">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <title>Austin Homicide Project | Home</title>
  <meta name="description" content="The Austin Homicide Project is an effort by the Austin American-Statesman to document and understand violent crime in Austin and Central Texas.">
  <meta property="og:title" content="Austin Homicide Project | Home"/>
  <meta property="og:description" content="The Austin Homicide Project is an effort by the Austin American-Statesman to document homicides in the City of Austin and Central Texas, and to provide a database of information about the cases so that the community can stay informed."/>
  <meta property="og:image" content="appicon.png"/>
  <meta property="og:url" content="http://projects.statesman.com/homicides/"/>

  <link rel="stylesheet" href="../foundation/css/normalize.css">
  <link rel="stylesheet" href="../foundation/css/foundation.css">
  <script src="../foundation/js/vendor/custom.modernizr.js"></script>
  <!-- project additions -->
  <link rel="stylesheet" href="homicides.css">
  <!-- add to home screen -->

<script type="text/javascript">
var addToHomeConfig = {
	returningVisitor: true,		// Show the message only to returning visitors (ie: don't show it the first time)
		touchIcon:true,
		expire: 720					// Show the message only once every 12 hours
};
</script>
	<link rel="stylesheet" href="add2home.css">
	<script type="application/javascript" src="add2home.js" charset="utf-8"></script>

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
                <li class="active"><a href="./">HOME</a></li>
                <li><a href="homicide-victim-list.php">VICTIMS</a></li>
				        <li><a href="homicide-suspect-list.php">SUSPECTS</a></li>
                <li><a href="homicide-charts.php">STATISTICS</a></li>
                <li><a href="homicide-map.php">MAP</a></li>
                <li><a href="homicide-faq.php">ABOUT</a></li>
			</ul>
  		</section>
	</nav>
</div>


<div class="row">
  <div class="large-12 columns">
    <h1>Austin Homicide Project</h1>
  </div>
</div>

<div class="row">
  <div class="large-8 medium-8 columns">

     <h3>The most recent homicide victims in Austin</h3>
     <p>Click on a photo or name to explore more about each victim.</p>
      <div class="show-for-medium-up">	
	<!-- Begin Caspio Deploy Code (for inserting in body) -->
<?php require_once('dpload.txt');dpload('http://bridge.caspio.net/','e76c0000029614b9e9a745778a4e','i');?>
	<!-- End Caspio Deploy Code -->
      </div>
      <div class="show-for-small-only">
  <div id="cbe76c00004d2b952043fb4549982a"></div>
<script type="text/javascript" src="http://bridge.caspio.net/scripts/e1.js"></script>
<script type="text/javascript">try{f_cbload("e76c00004d2b952043fb4549982a","http:");}catch(v_e){;}</script>
<div id="cxkg"><a href="http://bridge.caspio.net/dp.asp?AppKey=e76c00004d2b952043fb4549982a">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
      </div>  
 
  </div>
	<div class="large-4 medium-4 columns">
    	<h3>About this project</h3>
    	<p>The Austin Homicide Project is an effort by the Austin American-Statesman to document homicides in the City of Austin and Central Texas, and to provide a database of information about the cases so that the community can stay informed. This database is currently tracking homicides since Jan. 1, 2013, including justifiable homicides and cases classified as murders by the Austin Police Department. The project will expand to include other jurisdictions.</p>
        <!-- feed -->
<!--
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
        var RSS_feed = "http://www.statesman.com/list/rss/news/crime-law/austin-homicide-project-recent-coverage/aKbD/"
            google.load("feeds", "1");
            function initialize() {
              var feed = new google.feeds.Feed(RSS_feed);
            feed.setNumEntries(20);
              feed.load(function(result) {
                if (!result.error) {
                  var container = document.getElementById("feed");
                  for (var i = 0; i < result.feed.entries.length; i++) {
              var entry = result.feed.entries[i];
              var li = document.createElement("li");
              li.innerHTML = '<a href="' + entry.link + '">' + entry.title + '</a>';
              container.appendChild(li);
                  }
                }
              });
            }
            google.setOnLoadCallback(initialize);
        
        document.write("<h4>Recent stories from the Austin Homicide Project<\/h4>");
        document.write("<div id=\"medleycontent\">");
        document.write("  <ul id=\"feed\">");
        document.write("  <\/ul>");
        document.write("<\/div>");
        </script>
-->
        <!-- end feed -->
  	</div>
</div>

<hr>

<!-- Share Code -->   
<?php include "share.php"; ?>

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