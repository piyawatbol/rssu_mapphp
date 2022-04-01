<!DOCTYPE html>
<html>
<head>
 
    <title>เริ่มต้นในงาน Leaflet โดย GISTNU</title>
 
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
 
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
   
 
     
</head>
<body>
 
 
 
 
<div align = 'center'  id="map" style="width: 1600px; height: 500px;"></div>
 
 
<script>
    // initialize the map
 



    var map = L.map('map').setView([13.7757176, 100.509186], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([13.777009829955274, 100.50922745752088]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
L.marker([13.77680846415961,100.5095607813857]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();
L.marker([13.777536260660156, 100.50933496786735]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();

L.marker([13.777584, 100.509165]).addTo(map)
    .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
    .openPopup();

    
    
    </script>

    
</html>