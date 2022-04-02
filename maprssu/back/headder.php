<?php include('class_conn.php'); ?>
<?php $cls_conn = new class_conn; ?>
<?php error_reporting(0) ?>
<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>Thongsuk</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../images/epidemic.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../images/epidemic.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../images/epidemic.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-119386393-1');
    </script>
    <style>
    .pro14 {
        margin-left: 20%;
        margin-right: 20%;
    }
    </style>
</head>

<body>
    <div class="left-side-bar">
        <!-- LOGO  -->
        <div class="brand-logo">
            <a href="index.php">
                <!-- <img src="../images/epidemic.png" width="20%" alt="" class="dark-logo"> -->
                <img src="../images/epidemic.png" width="20%" alt="" class="light-logo">
                MAPRSSU
            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <!-- Menu bar -->
        <div class="menu-block customscroll ">
            <div class="sidebar-menu">
                <ul id="accordion-menu">
                    <li>
                        <a href="index.php" class="dropdown-toggle no-arrow">
                            <span class="micon fa fa-home"></span><span class="mtext">หน้าแรก</span>
                        </a>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon fa fa-user"></span><span class="mtext">ผู้ดูแลระบบ</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="insert_admin.php">เพื่มผู้ดูแลระบบ</a></li>
                            <li><a href="show_admin.php">ดูข้อมูลดูแลระบบ</a></li>
                        </ul>
                    </li>


                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon fa fa-user"></span><span class="mtext">สถานที่</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="insert_place.php">เพื่มสถานที่</a></li>
                            <li><a href="insert_img_place.php">เพื่มรูปสถานที่</a></li>
                            <li><a href="show_place.php">ดูข้อมูลสถานที่</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon fa fa-stack-overflow"></span><span class="mtext">ประเภทสถานที่</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="insert_typeplace.php">เพิ่มประเภทสถานที่</a></li>
                            <li><a href="show_typeplace.php">ดูประเภทสถานที่</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="micon fa fa-stack-overflow"></span><span class="mtext">การเดินทาง</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="insert_walk.php">เพิ่มรายการ</a></li>
                            <li><a href="show_walk.php">ดูรายการ</a></li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a href="logout.php" class="dropdown-toggle no-arrow">
                            <span class="micon dw dw-undo2"></span><span class="mtext">Logout</span>
                        </a>
                        <!-- <ul class="submenu">
								<li><a href="insert_category.php">เพิ่มสถานที่</a></li>
								<li><a href="show_category.php">ดูสถานที่</a></li>
							</ul> -->
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Headder  -->
    <div class="header" id="hid">
        <div class="header-left">
            <div class="menu-icon dw dw-menu"></div>
        </div>
        <!-- <div class="user-notification" style="margin-left:25%">
			<div class="dropdown">
				<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					<i class="icon-copy dw dw-notification"></i>
					<span class="badge notification-active"></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right ">
					<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Profile</a>
					<a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
					<a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
					<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
				</div>
			</div>
		</div> -->
        <?php
		$staff_id = $_SESSION['staff_id'];
		$customer_id = $_SESSION['customer_id'];
		if ($_SESSION['customer_id'] >= 1) {
			$sql = "SELECT * from tb_customer where customer_id = '$customer_id' ";
		} else {
			$sql = "SELECT * from tb_staff where staff_id = '$staff_id' ";
		}
		$result = $cls_conn->select_base($sql);
		while ($row = mysqli_fetch_array($result)) {
			$staff_fullname = $row['staff_fullname'];
			$customer_fullname = $row['customer_fullname'];
			// echo $admin_fname;
		}
		?>

        <!-- <div class="user-info-dropdown">
			<div class="dropdown">
				<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
					<span class="user-icon">
						<img src="vendors/images/photo1.jpg" alt="">
					</span>
					<span class="user-name"><?= $customer_fullname ?><?= $staff_fullname ?></span>
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
					<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Profile</a>
					<a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
				</div>
			</div>
		</div> -->

    </div>
    </div>

    <div class="right-sidebar">
        <div class="sidebar-title">
            <h3 class="weight-600 font-16 text-blue">
                ตั้งค่าการใช้งาน
            </h3>
            <div class="close-sidebar" data-toggle="right-sidebar-close">
                <i class="icon-copy ion-close-round"></i>
            </div>
        </div>
        <div class="right-sidebar-body customscroll">
            <div class="right-sidebar-body-content">
                <h4 class="weight-600 font-18 pb-10">พื้นหลังเมนูด้านบน</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">ขาว</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">ดำ</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">พื้นหลังเมนูด้านข้าง</h4>
                <div class="sidebar-btn-group pb-30 mb-10">
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">ขาว</a>
                    <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">ดำ</a>
                </div>

                <h4 class="weight-600 font-18 pb-10">ไอคอนเมนู</h4>
                <div class="sidebar-radio-group pb-10 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-1" checked="">
                        <label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-2">
                        <label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input"
                            value="icon-style-3">
                        <label class="custom-control-label" for="sidebaricon-3"><i
                                class="fa fa-angle-double-right"></i></label>
                    </div>
                </div>

                <h4 class="weight-600 font-18 pb-10">ไอคอนเมนูรายการ</h4>
                <div class="sidebar-radio-group pb-30 mb-10">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-1" checked="">
                        <label class="custom-control-label" for="sidebariconlist-1"><i
                                class="ion-minus-round"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-2">
                        <label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o"
                                aria-hidden="true"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-3">
                        <label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-4" checked="">
                        <label class="custom-control-label" for="sidebariconlist-4"><i
                                class="icon-copy dw dw-next-2"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-5">
                        <label class="custom-control-label" for="sidebariconlist-5"><i
                                class="dw dw-fast-forward-1"></i></label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input"
                            value="icon-list-style-6">
                        <label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
                    </div>
                </div>

                <div class="reset-options pt-30 text-center">
                    <button class="btn btn-danger" id="reset-settings">ยกเลิกการตั้งค่า</button>
                </div>
            </div>
        </div>
    </div>



    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/apexcharts/apexcharts.min.js"></script>
    <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="vendors/scripts/dashboard.js"></script>

</body>

</html>