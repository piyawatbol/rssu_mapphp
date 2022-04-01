<?php
session_start();
date_default_timezone_set("Asia/Bangkok");
require_once('server1.php');


$sql = "SELECT *  FROM `location`";

$query = mysqli_query($conn, $sql);
$resultArray = array();
while ($obResult = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    array_push($resultArray, $obResult);
}
mysqli_close($conn);
echo json_encode($resultArray);
