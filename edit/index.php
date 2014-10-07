<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />

  <title>Homicides</title>

  <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
  <link rel="stylesheet" href="../../foundation/css/normalize.css">
  <link rel="stylesheet" href="../../foundation/css/foundation.css">

  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="../../foundation/css/app.css">

  <script src="../../foundation/js/vendor/custom.modernizr.js"></script>

  <!-- project additions -->
  <link rel="stylesheet" href="../homicides.css">
  
</head>
<body>

 

    <div class="row">
      <div class="large-12 columns">
        <h1>Editing the Austin Homicide Project</h1>
      </div>
    </div>

    <div class="row">
      <div class="large-6 columns">
      <h2>Editing</h2>
        <div class="panel">
        <h3>Victims</h3>
        <ul>
            <li><a href="homicide-victim-edit.php">Edit</a></li> 
            <li><a href="homicide-victim-enter.php">Enter</a></li>
        </ul>
        <h3>Suspects</h3>
        <ul>
          <li><a href="homicide-suspect-edit.php">Edit</a></li>
          <li><a href="homicide-suspect-enter.php">Enter</a></li>
        </ul>
        <h3>Incidents</h3>
        <ul>
          <li><a href="homicide-incident-edit.php">Edit</a></li>
          <li><a href="homicide-incident-enter.php">Enter</a></li>
        </ul>
        </div>
      </div>
      <div class="large-6 columns">
      <h2>Public</h2>
        <div class="panel">
          <ul>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../homicide-victim-list.php">Victims</a></li>
            <li><a href="../homicide-suspect-list.php">Suspects</a></li>
            <li><a href="../homicide-charts.php">Statistics</a></li>
            <li><a href="../homicide-map.php">Map</a></li>
            <li><a href="../homicide-faq.php">FAQ</a></li>
          </ul>
        </div>
      </div>
    </div>



  <!-- body content here -->

  <script src="../../foundation/js/vendor/jquery.js"></script>
  <script src="../../foundation/js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>