<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <meta charset="utf-8">
  <style>

body {
    padding: 0;
    margin: 0;
}
html, body, #map {
    height: 100%;
    width: 100vw;
}
  </style>
  </head>
  <body>
  <div id="map" style="height: 100%;" ></div>
    <script>

      function initMap() {
			var mapOptions = {
			  center: {lat: 13.8478444, lng: 100.604474},
			  zoom: 14,
			}
      
				
			var maps = new google.maps.Map(document.getElementById("map"),mapOptions);

			var marker, info;

			$.getJSON( "json.php", function( jsonObj ) {
					//*** loop
					$.each(jsonObj, function(i, item){
						marker = new google.maps.Marker({
						   position: new google.maps.LatLng(item.LAT, item.LNG),
						   map: maps,
						   title: item.LOC_NAME
						});

					  info = new google.maps.InfoWindow();

					  google.maps.event.addListener(marker, 'click', (function(marker, i) {
						return function() {
						  info.setContent(item.LOC_NAME);
						  info.open(maps, marker);
						}
					  })(marker, i));

					}); // loop

			 });

		}
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAK3RgqSLy1toc4lkh2JVFQ5ipuRB106vU&callback=initMap" async defer></script>
  </body>
</html>