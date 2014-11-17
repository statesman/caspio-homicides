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

  <title>Suspect details - Austin Homicide Project</title>
  <meta name="description" content="Suspect detail from the Austin Homicide Project, an effort to document and understand violent crime in Austin and Central Texas.">
  <meta property="og:title" content="Suspect details - Austin Homicide Project"/>
  <meta property="og:description" content="Suspect detail from the Austin Homicide Project, an effort by the Austin American-Statesman to document and understand violent crime in Austin and Central Texas."/>
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
			<li class="name"><h1><a href="http://www.mystatesman.com" target="_blank"><img src="white-logo-small.png" /></a></h1></li>
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
        <h1>Details about the suspect</h1>
      </div>
</div>

<div class="row">
	<div class="large-4 medium-4 columns">
		<!-- suspects -->
		<div id="cbe76c0000517ef95e22cf4371b277"></div>
		<script type="text/javascript" src="http://bridge.caspio.net/scripts/e1.js"></script>
		<script type="text/javascript" language="javascript">try{f_cbload("e76c0000517ef95e22cf4371b277","http:");}catch(v_e){;}</script>
		<div id="cxkg"><a href="http://bridge.caspio.net/dp.asp?AppKey=e76c0000517ef95e22cf4371b277">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
	
		<!-- photo -->
		<script type="text/javascript">
            if (suspectPhoto_url != "") {
			document.write("<img class=\"detailmug\" src=\"http:\/\/media.cmgdigital.com\/shared\/lt\/lt_cache\/resize\/300x300" + suspectPhoto_url + "\"  width=\"300\" height=\"300\" alt=\" + suspectName + \" \/>");
            }
			else {
			document.write("<img src=\"http:\/\/projects.statesman.com\/homicides\/photo-placeholder.jpg\" width=\"300\" height=\"300\">");
		}
		</script>
	</div>
    
	<div class="large-5 medium-5 columns">

        <h3>Where the case stands</h3>
        <!--  case summary -->
        <!-- Begin Caspio Deploy Code (for inserting in body) -->
        <?php require_once('dpload.txt');dpload('http://bridge.caspio.net/','e76c00009e080aa266704e5d8702','i');?>
        <!-- End Caspio Deploy Code -->
        
        <h3>Suspected in the death of:</h3>
        <!-- victims -->
        <div class="show-for-medium-up">
        <div id="cbe76c0000b37b8a5a708b4f108f83"></div>
        <script type="text/javascript" src="http://bridge.caspio.net/scripts/e1.js"></script>
        <script type="text/javascript" language="javascript">try{f_cbload("e76c0000b37b8a5a708b4f108f83","http:");}catch(v_e){;}</script>
        <div id="cxkg"><a href="http://bridge.caspio.net/dp.asp?AppKey=e76c0000b37b8a5a708b4f108f83">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
        </div>
        <div class="show-for-small-only">
        <div id="cbe76c0000f6313ff87e1d4111b2ec"></div>
        <script type="text/javascript" src="http://bridge.caspio.net/scripts/e1.js"></script>
        <script type="text/javascript">try{f_cbload("e76c0000f6313ff87e1d4111b2ec","http:");}catch(v_e){;}</script>
        <div id="cxkg"><a href="http://bridge.caspio.net/dp.asp?AppKey=e76c0000f6313ff87e1d4111b2ec">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>
		</div>
        
	</div>

	<div class="large-3 medium-3 columns">
    	<h3>Incident details</h3>
        <!-- incident detail -->
        <div id="cbe76c0000ea633f50424c4c78a0b1"></div>
        <script type="text/javascript" src="http://bridge.caspio.net/scripts/e1.js"></script>
        <script type="text/javascript">try{f_cbload("e76c0000ea633f50424c4c78a0b1","http:");}catch(v_e){;}</script>
        <div id="cxkg"><a href="http://bridge.caspio.net/dp.asp?AppKey=e76c0000ea633f50424c4c78a0b1">Click here</a> to load this Caspio <a href="http://www.caspio.com" title="Online Database">Online Database</a>.</div>

        <!-- map -->
        <script type="text/javascript">
            if (Latitude != "" && Longitude != "") {
			document.write("<div style=\"width:100%;height:200px\" id=\"map-canvas\"><\/div>");
            }
        </script>
        <!-- map js -->   
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1Kd5RnGhgbKXY58CEpU6KqrFK1DwhACo&sensor=false">
        </script>
        <script type="text/javascript">
            function initialize() {
              var myLatlng = new google.maps.LatLng(Latitude,Longitude);
              var mapOptions = {
                zoom: 15,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP
              }
              var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    
              var marker = new google.maps.Marker({
                  position: myLatlng,
                  map: map,
                  title: Location
              });
            }
            google.maps.event.addDomListener(window, 'load', initialize);
        </script>
	</div>
</div>
<hr>    
<div class="row">
	<div class="large-6 medium-6 columns">
    	<!-- feed -->
<!--
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
if (RSS_feed != "") {
    google.load("feeds", "1");
    function initialize() {
      var feed = new google.feeds.Feed(RSS_feed);
	  feed.setNumEntries(10);
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
}

if (RSS_feed != "") {
document.write("<h4>More on " + suspectName + "<\/h4>");
document.write("<div id=\"medleycontent\">");
document.write("	<ul id=\"feed\">");
document.write("	<\/ul>");
document.write("<\/div>");
}
</script>
-->
    </div>

	<div class="large-6 medium-6 columns">
<!-- documents -->
<script src="http://s3.documentcloud.org/embed/loader.js"></script>
<script type="text/javascript">
if (DocumentCloud != "") {
  dc.embed.load('http://www.documentcloud.org/search/embed/', {
    q: "suspect: \"" + DocumentCloud + "\"",
    container: "#docuSearch",
    title: "",
    order: "title",
    per_page: 12,
    search_bar: true,
    organization: 256
  });
}

if (DocumentCloud != "") {
document.write("<div id=\"documents\">");
document.write("<h4>Related documents<\/h4>");
document.write("<div id=\"docuSearch\" class=\"DC-search-container\"><\/div>");
document.write("<\/div>");
document.write("");
}
</script>

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

<?php include "../common/footer.php"; ?>

<?php include "metrics-homicides.js";?>
<?php include "../common/metrics.js";?>
</body>
</html>