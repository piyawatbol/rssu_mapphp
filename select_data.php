<?php
    require 'conn.php';
    $place_id = $_GET['place_id'];
    $sql = "SELECT * FROM tb_img WHERE place_id = $place_id ORDER BY img_id ASC" ;
    $queryResult = mysqli_query($condb,$sql);
    
    while ($fetchData = mysqli_fetch_assoc($queryResult)) {
        $result[] = $fetchData;
    }
    echo json_encode($result);
?>