<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Peta Penanggulangan Bencana SAR Trenggana</title>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
(function() {
   window.onload = function(){
      var latLng = new google.maps.LatLng(-7.975258, 112.626343);
      var options = {
         zoom: 15,
         center: latLng,
         mapTypeId: google.maps.MapTypeId.ROADMAP
      };
      var map = new google.maps.Map(document.getElementById('map'), options);
   }
})();
</script>
</head>
<body>
<div id="map" style="width:850px; height:650px;"></div>
</body>
</html>