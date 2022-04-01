<?php
    
    date_default_timezone_set("Asia/Bangkok");
	$Server = "127.0.0.1";
	$Username = "root";
	$Password = "12345678";
	$db = "db_maprssu";

    //CREATE String
    $conn = new mysqli($Server, $Username, $Password, $db);

    // Check...
    if($conn->connect_errno){
        echo "เกิดข้อผิดพลาด:(".$conn->connect_errno.")".$con->connect_error;
    }
    
    $conn->query("SET sql_mode=''");
    $conn->set_charset("utf8");
        

?>