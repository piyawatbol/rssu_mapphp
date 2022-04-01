<?php session_start();?>
<?php 

if ($_SESSION["type"] != 'admin'){  //check session

	  Header("Location: error-403.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 

}else{?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แดชบอร์ด</title>
    <link rel = "icon" href = "https://www.flaticon.com/svg/vstatic/svg/4437/4437579.svg?token=exp=1617306182~hmac=5060f1d2333152cae03f395eafe6d54f" type = "image/x-icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        #map {
            height: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        

        #map {
            height: 500px;
            width: 600px;
        }
    </style>


    
</head>

<body>
    <div id="app">
            <div id="sidebar" class="active">
                <div class="sidebar-wrapper  ">
                    <div class="sidebar-header">
                        <div class="d-flex justify-content-between">
                            <div class="toggler">
                                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                            </div>
                        </div>
                    </div>
                <div class="sidebar-menu">
                <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl">
                                        <img src="assets/images/faces/1.jpg" alt="Face 1" style="margin-left: -12px;">
                                    </div>
                                    <div class="ms-3 name">
                                        <h6 class="font-bold">Hello!, <?=$_SESSION['User']; ?> (<?=$_SESSION['Firstname']; ?>)</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>แดชบอร์ด</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="admin_listbuy.php" class='sidebar-link'>
                                <i class="bi bi-speedometer"></i>
                                <span>รับซื้อน้ำมัน</span>
                            </a>
                        </li>
                        <li class="sidebar-item has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-collection-fill"></i>
                            <span>ข้อมูลน้ำมัน</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item  ">
                                <a href="admin_listoil.php" >รายการข้อมูลรับซื้อ</a>
                            </li>
                            
                            <li class="submenu-item ">
                                <a href="admin_listoil_cancel.php">รายการข้อมูลยกเลิก</a>
                            </li>
                            
                            </ul>
                        </li>
                        

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>ข้อมูลตัวแทน</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="admin_addagent.php" >เพิ่มตัวแทนใหม่</a>
                                </li>
                                
                                <li class="submenu-item ">
                                    <a href="admin_listagent.php">แสดงข้อมูลตัวแทน</a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>ข้อมูลพนักงาน</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="admin_addemp.php">เพิ่มพนักงานใหม่</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="admin_listemp.php">แสดงข้อมูลพนักงาน</a>
                                </li>
                            
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-credit-card-fill"></i>
                                <span>ข้อมูลการชำระเงิน</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="admin_pay_cash.php">รายการชำระเงินสด</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="admin_pay_transfer.php">รายการโอนสำเร็จ</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="admin_pay.php">รายการรอโอน</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="admin_report_oil.php" class='sidebar-link'>
                                <i class="bi bi-flag-fill"></i>
                                <span>รายงาน</span>
                            </a>
                            
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-gear-fill"></i>
                                <span>การตั้งค่า</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="admin_addadmin.php">ผู้ดูแลระบบ</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="admin_addagent_type.php">ประเภทหน่วยงาน</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="admin_addemp_type.php">ตำแหน่งพนักงาน</a>
                                </li>
                                <li class="submenu-item ">
                                <a href="admin_addbank_type.php">ธนาคาร</a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-title">Logout</li>
                        <li class="sidebar-item  ">
                            <a href=javascript:if(confirm('ยืนยันการออกจากระบบ')==true){window.location='logout.php';} class='sidebar-link'>
                                <i class="bi bi-x-octagon-fill" ></i>
                                <span>ออกจากระบบ</span>
                            </a>
                        </li>
                        <br><br><br><br><br><br>
                        
                        


                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Yala Biodiesel Community Enterprise</h3>
                <p class="text-subtitle text-muted">(กลุ่มวิสาหกิจชุมชนยะลาไบโอดีเซล)</p>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Oil Maps <a href="fullmap.php" class="badge bg-danger ">Full Map</a></h4>
                                    </div>
                                    <div class="card-body">
                                        <!--Google map-->
                                        
                                        <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px"></div>
                                        <script>
                                            function initMap() {
                                                var mapOptions = {
                                                    center: {
                                                        lat: 6.5836465,
                                                        lng: 101.1724996
                                                    },
                                                    zoom: 8,
                                                }
                                                var maps = new google.maps.Map(document.getElementById("map-container-google-1"), mapOptions);
                                                var marker, info;
                                                $.getJSON("map-api.php", function(jsonObj) {
                                                    //*** loop
                                                    $.each(jsonObj, function(i, item) {
                                                        marker = new google.maps.Marker({
                                                            position: new google.maps.LatLng(item.add_oil_latitude, item.add_oil_longitude),
                                                            map: maps,
                                                            title: item.add_oil_id
                                                        });

                                                        info = new google.maps.InfoWindow();

                                                        google.maps.event.addListener(marker, 'click', (function(marker, i) {
                                                            
                                                        })(marker, i));

                                                    }); // loop

                                                });

                                            }
                                        </script>
                                            
                                        
                                        <!--Google Maps-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <?php
                        include("connection.php");
                        $sql = "SELECT * FROM agent";
                        $result=mysqli_query($con,$sql);
                        $num_agent=mysqli_num_rows($result)
                                
                    ?>

                    <?php
                        include("connection.php");
                        $sql = "SELECT * FROM emp";
                        $result=mysqli_query($con,$sql);
                        $num_emp=mysqli_num_rows($result)
                                
                    ?>
                            





                    <div class="col-12 col-lg-3">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">ตัวแทน</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $num_agent; ?></h6>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">พนักงาน</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $num_emp; ?></h6>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" style="padding-bottom: 0.1rem;">
                                <h4>Social Media</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="px-4">
                                    <a href="https://www.facebook.com/PPPNJB.Foundation" target ="_blank" id="" class='btn btn-block btn-xl btn-light-primary font-bold mt-3'><img src="assets/images/icon/facebook.png"  style="padding-bottom: 2px;"> 	&nbsp;Facebook</a>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                    
                        <p>2021 &copy; Yala Biodiesel Community Enterprise</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    



    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    
    <script src="assets/js/main.js"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDz3TMmYuaLMZrXvAewerStT4uhW8s_3Xw&callback=initMap" type="text/javascript"></script>
</body>
</html>
<?php }?>