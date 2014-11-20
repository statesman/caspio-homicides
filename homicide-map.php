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

  <title>Homicides mapped - Austin Homicide Project</title>
  <meta name="description" content="The Austin Homicide Project map plots the geographical location of past homicides in Austin and Central Texas.">
  <meta property="og:title" content="Homicides mapped - Austin Homicide Project"/>
  <meta property="og:description" content="The Austin Homicide Project map plots the geographical location of past homicides in Austin and Central Texas."/>
  <meta property="og:image" content="appicon.png"/>

  <link rel="stylesheet" href="../foundation/css/normalize.css">
  <link rel="stylesheet" href="../foundation/css/foundation.css">
  <script src="../foundation/js/vendor/custom.modernizr.js"></script>
  <!-- project additions -->
  <link rel="stylesheet" href="homicides.css">

<style type="text/css">
html, body, #googft-mapCanvas {
  height: 100%;
  margin: 0;
  padding: 0;
  width: 100%;
}
#googft-legend {
  background-color: #fff;
  border: 1px solid #000;
  font-family: Arial, sans-serif;
  font-size: 12px;
  margin: 5px;
  padding: 10px 10px 8px;
}
#googft-legend p {
  font-weight: bold;
  margin-top: 0;
}
#googft-legend div {
  margin-bottom: 5px;
}
.googft-legend-swatch {
  border: 1px solid;
  float: left;
  height: 12px;
  margin-right: 8px;
  width: 20px;
}
.googft-legend-range {
  margin-left: 0;
}
.googft-dot-icon {
  margin-right: 8px;
}
.googft-paddle-icon {
  height: 24px;
  left: -8px;
  margin-right: -8px;
  position: relative;
  vertical-align: middle;
  width: 24px;
}
.googft-legend-source {
  margin-bottom: 0;
  margin-top: 8px;
}
.googft-legend-source a {
  color: #666666;
  font-size: 11px;
}
#googft-mapCanvas img {
  max-width: inherit;
}
</style>

<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?v=3&amp;libraries=visualization&amp;sensor=false"></script>

<script type="text/javascript">
  function initialize() {
    google.maps.visualRefresh = true;
    var isMobile = (navigator.userAgent.toLowerCase().indexOf('android') > -1) ||
      (navigator.userAgent.match(/(iPod|iPhone|iPad|BlackBerry|Windows Phone|iemobile)/));
    if (isMobile) {
      var viewport = document.querySelector("meta[name=viewport]");
      viewport.setAttribute('content', 'initial-scale=1.0, user-scalable=no');
    }
    var mapDiv = document.getElementById('googft-mapCanvas');
    mapDiv.style.width = isMobile ? '100%' : '100%';
    mapDiv.style.height = isMobile ? '100%' : '100%';
    var map = new google.maps.Map(mapDiv, {
      center: new google.maps.LatLng(30.288513776330063, -97.70310221679689),
      zoom: 12,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(document.getElementById('googft-legend-open'));
    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(document.getElementById('googft-legend'));

    layer = new google.maps.FusionTablesLayer({
      map: map,
      heatmap: { enabled: false },
      query: {
        select: "col3",
        from: "1Sq47VbMhLBxvPXaxXjU78IVXH-qwJzVwPzNdo9M",
        where: ""
      },
      options: {
        styleId: 2,
        templateId: 3
      }
    });

    if (isMobile) {
      var legend = document.getElementById('googft-legend');
      var legendOpenButton = document.getElementById('googft-legend-open');
      var legendCloseButton = document.getElementById('googft-legend-close');
      legend.style.display = 'none';
      legendOpenButton.style.display = 'block';
      legendCloseButton.style.display = 'block';
      legendOpenButton.onclick = function() {
        legend.style.display = 'block';
        legendOpenButton.style.display = 'none';
      }
      legendCloseButton.onclick = function() {
        legend.style.display = 'none';
        legendOpenButton.style.display = 'block';
      }
    }
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php include "../common/metrics-head.js";?>
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
                <li class="active"><a href="homicide-map.php">MAP</a></li>
                <li><a href="homicide-faq.php">ABOUT</a></li>
			</ul>
  		</section>
	</nav>
</div>

<div id="googft-mapCanvas"></div>



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