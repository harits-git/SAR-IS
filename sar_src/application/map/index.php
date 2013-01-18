<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
 
<head>
 
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
 
<title> Peta Bencana SAR Trenggana, Malang </title>
 
<script src="http://maps.google.com/maps?file=api&amp;v=3&amp;sensor=false&amp;key=AIzaSyDXb-PSapbJCcWKKd31x0oRAMrTC10hH2A" type="text/javascript"></script>
 
<script type="text/javascript">
 
function closeMap(){
	setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 10);
} 
//<![CDATA[
 
var iconPos = new GIcon(); //titik pos pantau sar
 
	iconPos.image = '../../images/rangerstation.png';
	 
	iconPos.shadow = '../../images/rangerstation.shadow.png';
	 
	iconPos.iconSize = new GSize(22, 25);
	 
	iconPos.shadowSize = new GSize(35, 25);
	 
	iconPos.iconAnchor = new GPoint(11, 25);
	 
	iconPos.infoWindowAnchor = new GPoint(10, 1);

var iconPuskesmas = new GIcon(); //titik pos pantau sar
 
	iconPuskesmas.image = '../../images/puskesmas.png';
	 
	iconPuskesmas.shadow = '../../images/hospitals.shadow.png';
	 
	iconPuskesmas.iconSize = new GSize(22, 25);
	 
	iconPuskesmas.shadowSize = new GSize(35, 25);
	 
	iconPuskesmas.iconAnchor = new GPoint(11, 25);
	 
	iconPuskesmas.infoWindowAnchor = new GPoint(10, 1);

var iconPMI = new GIcon(); //titik pos pantau sar
 
	iconPMI.image = '../../images/hospitals.png';
	 
	iconPMI.shadow = '../../images/hospitals.shadow.png';
	 
	iconPMI.iconSize = new GSize(22, 25);
	 
	iconPMI.shadowSize = new GSize(35, 25);
	 
	iconPMI.iconAnchor = new GPoint(11, 25);
	 
	iconPMI.infoWindowAnchor = new GPoint(10, 1);
	
var iconLaporan = new GIcon(); //titik pos pantau sar
 
	iconLaporan.image = '../../images/swimming.png';
	 
	iconLaporan.shadow = '../../images/swimming.shadow.png';
	 
	iconLaporan.iconSize = new GSize(22, 25);
	 
	iconLaporan.shadowSize = new GSize(35, 25);
	 
	iconLaporan.iconAnchor = new GPoint(11, 25);
	 
	iconLaporan.infoWindowAnchor = new GPoint(10, 1);
 
var iconBlack = new GIcon(); //meninggal
 
	iconBlack.image = '../../images/black-dot.png';
	 
	iconBlack.shadow = '../../images/marker.shadow.png';
	 
	iconBlack.iconSize = new GSize(22, 25);
	 
	iconBlack.shadowSize = new GSize(35, 25);
	 
	iconBlack.iconAnchor = new GPoint(11, 25);
	 
	iconBlack.infoWindowAnchor = new GPoint(10, 1);
 
var iconRed = new GIcon(); //untuk luka berat
 
	iconRed.image = '../../images/red-dot.png';
	 
	iconRed.shadow = '../../images/marker.shadow.png';
	 
	iconRed.iconSize = new GSize(22, 25);
	 
	iconRed.shadowSize = new GSize(35, 25);
	 
	iconRed.iconAnchor = new GPoint(11, 25);
	 
	iconRed.infoWindowAnchor = new GPoint(10, 1);
 
var iconGreen = new GIcon(); //selamat tdk ada luka
 
	iconGreen.image = '../../images/green-dot.png';
	 
	iconGreen.shadow = '../../images/marker.shadow.png';
	 
	iconGreen.iconSize = new GSize(22, 25);
	 
	iconGreen.shadowSize = new GSize(35, 25);
	 
	iconGreen.iconAnchor = new GPoint(11, 25);
	 
	iconGreen.infoWindowAnchor = new GPoint(10, 1);
 
var iconYellow = new GIcon(); //luka ringan
 
	iconYellow.image = '../../images/yellow-dot.png';
	 
	iconYellow.shadow = '../../images/marker.shadow.png';
	 
	iconYellow.iconSize = new GSize(22, 25);
	 
	iconYellow.shadowSize = new GSize(35, 25);
	 
	iconYellow.iconAnchor = new GPoint(11, 25);
	 
	iconYellow.infoWindowAnchor = new GPoint(10, 1);

var iconWarning = new GIcon(); //titik pos pantau sar
 
	iconWarning.image = '../../images/caution.png';
	 
	iconWarning.iconSize = new GSize(22, 25);
	 
	iconWarning.shadowSize = new GSize(35, 25);
	 
	iconWarning.iconAnchor = new GPoint(11, 25);
	 
	iconWarning.infoWindowAnchor = new GPoint(10, 1);
 
var customIcons = { 
		 
	"laporan" : iconLaporan,
	"pos" : iconPos,	 
	"pmi" : iconPMI,	 
	"puskesmas" : iconPuskesmas,
	"meninggal" : iconBlack,
	"lukaberat" : iconRed,	 
	"lukaringan" : iconYellow,	 
	"selamat" : iconGreen,
	"peringatan" : iconWarning
	
};
 
function load() {
 
if (GBrowserIsCompatible()) {
		 
		var map = new GMap2(document.getElementById("map"));
		 
		map.addControl(new GSmallMapControl());
		 
		map.addControl(new GMapTypeControl());
		 
		map.setCenter(new GLatLng(-7.975258, 112.626343), 13);
		 
		GEvent.addListener(map,"click", function(overlay,latlng) {  
        if (latlng) {  
                   //var myHtml = "Latitude & Longitude :   " +latlng+" <a href=''>tes</a>";  
				   //var myHtml =  "Anda telah meng-klik daerah ini, <br>Silahkan tambahkan titik <a href='addpoint.php?c="+latlng+"'>disini</a>";
                   <?php
                        if($_SESSION["username"]==1){
                   ?>
    				   var myHtml =  'Anda telah meng-klik daerah ini, <br>Silahkan tambahkan titik <a onclick="closeMap()" href="javascript:window.open(\'index.php?menu=map&rf=1&rh=1&item=addpoint&c='+latlng+'\',\'tambah\',\'width=400,height=400\')">disini</a>';
					   //
    				   map.openInfoWindow(latlng, myHtml);
					   
					   
                   <?php
                        }
                   
                   ?>  
               }  
           });  

      
		 
		GDownloadUrl("http://pengmas.tweetcoder.com/index.php?menu=map&item=generatexml&rh=1&rf=1", function(data) {
		 
			var xml = GXml.parse(data);
			 
			var markers = xml.documentElement.getElementsByTagName("marker");
			 
			for (var i = 0; i < markers.length; i++) {
			 
				var kjd = markers[i].getAttribute("kejadian");
				 
				var ket = markers[i].getAttribute("keterangan");
				 
				var tipe = markers[i].getAttribute("tipe");
				 
				var point = new GLatLng(parseFloat(markers[i].getAttribute("lat")),
				 
							parseFloat(markers[i].getAttribute("lng")));
				 
				var marker = createMarker(point, kjd, ket, tipe);
				 
				map.addOverlay(marker);
			 
			}
		 
		});
		 
}
 
}
  
function createMarker(point, kjd, ket, tipe) {
 
	var marker = new GMarker(point, customIcons[tipe]);
	 
	var html = "<b>" + kjd + "</b> <br/>" + ket;
	 
	GEvent.addListener(marker, 'click', function() {
	 
		marker.openInfoWindowHtml(html);
	 
	});
	return marker;
}
//]]>
</script>
</head>
<body onload="load()" onunload="GUnload()">
<div id="map" style="width:1200px; height:650px;"></div>
</body>
</html>