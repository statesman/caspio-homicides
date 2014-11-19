<?php 
 $url = 'http://search.cmgdigital.com/v2/?format=json&count='.$_GET["count"].'&f=item_class:%22https://cv.cmgdigital.com/item_class/composite/news.medleystory/%22%20AND%20originating_site:%22https://cv.cmgdigital.com/provider/medleysite/prod/4000/%22%20AND%20premium:%22free%22%20AND%20topics:%22'.urlencode($_GET["topic"]).'%22';
 $json = file_get_contents($url); 
 header('Content-Type: application/json'); 

 if(isset($_SERVER['HTTP_HOST'])) {
 	if($_SERVER['HTTP_HOST'] == 'localhost') {
 		$origin = 'localhost';
 	}
 	elseif ($_SERVER['HTTP_HOST'] == 'stage.host.coxmediagroup.com') {
 		$origin = 'stage.host.coxmediagroup.com';
 	}
 	else {
 		$origin = 'projects.statesman.com';
 	}
 }
 header("Access-Control-Allow-Origin: ".$origin);
 print $json; 
?>
