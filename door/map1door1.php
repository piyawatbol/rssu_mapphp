<!DOCTYPE html>
<html>

<head>
    <?php
    require('../server.php');
    $sql = "SELECT * FROM `tb_place` WHERE `place_status` = 60 AND`place_door` = 1  ORDER BY `place_id` DESC ";
    //เดิน 1ชม. ประตูหน้า 
    $db_query = mysqli_query($conn, $sql);
    ?>

    <title>ประตูหน้า 1 ชั่วโมง</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>



</head>

<body>



    <style>
        body {
            padding: 0;
            margin: 0;
        }

        html,
        body,
        #map {
            height: 100%;
            width: 100vw;
        }
    </style>



    <div id="map"></div>


    <script>
        // initialize the map

        var map = L.map('map').setView([13.7757176, 100.509186], 18);
        var greenIcon = L.icon({
            iconUrl: '../palace.png',
            iconSize: [45, 35], // size of the icon

        });
        var polygon = L.polygon([
            [13.774188975298788, 100.50731682775266],
            [13.773886801980533, 100.50798141414538],
            [13.776958395031967, 100.5094538203873],
            [13.777078589655838, 100.50875078624625],
        ], {
            color: 'green'
        }).addTo(map);
        L.polygon;
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        <?php while ($row = mysqli_fetch_assoc($db_query)) {  ?>

            <?php $lat = $row["place_gps"]; ?>
            <?php $name = $row["place_name"]; ?>
            <?php $detail = $row["place_detail"]; ?>
            <?php $number = $row["place_number"]; ?>



            L.marker([<?php echo $lat ?>], {
                    icon: greenIcon
                }).addTo(map)
                .bindPopup('<h2>จุดที่ <?php echo $number ?></h2> <b><?php echo $name ?></b> <br> <a href="https://maps.google.com/maps?q=<?php echo $lat ?>">นำทาง')
                .openPopup();

        <?php } ?>
    </script>
    

</html>