<?php include('headder.php'); ?>
<?php session_start(); ?>
<?php error_reporting(0) ?>
<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>เพิ่มผู้ดูแลระบบ</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


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
</head>

<body>
    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="pd-20 card-box mb-30">
                    <div class="wizard-content">
                        <?php
                        if(isset($_SESSION['staff_id'])){
                            $id_st = $_SESSION['staff_id'];
                        
                        $sql = "SELECT * from tb_staff where staff_id = '$id_st' ";
                        $re = $cls_conn->select_base($sql);
                        while ($row = mysqli_fetch_array($re)) {
                            $fullname = $row['staff_fullname'];
                            $id = $row['staff_id'];
                            $email = $row['staff_email'];
                            $tel = $row['staff_tel'];
                            $username = $row['staff_username'];
                            $password = $row['staff_password'];
                        }
                    }else{
                        echo $cls_conn->show_message('Success');
                        echo $cls_conn->goto_page(1, 'logout.php');
                        }

                        ?>
                        <form method="POST" ">
                            <h5>พนักงาน</h5>
                            <section>
                        <div class=" pro14">
                            <input type="hidden" name="id" value="<?= $id ?>">
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">ชื่อพนักงาน</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" id="title_id" value="<?= $fullname ?>" name="fullname" required="required" placeholder="กรอกข้อมูล" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">อีเมล</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" value="<?= $email ?>" name="email" placeholder="กรอกข้อมูล">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-10 col-md-2 col-form-label">เบอร์โทร</label>
                                <div class="col-sm-10 col-md-10">
                                    <input class="form-control" type="text" value="<?= $tel ?>" name="tel" placeholder="กรอกข้อมูล">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">ชื่อผู้ใช้งาน</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" id="gender_id" value="<?= $username ?>" name="username" required="required" placeholder="กรอกข้อมูล" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label">รหัสผ่าน</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" value="<?= $password ?>" name="password" placeholder="กรอกข้อมูล">
                                </div>
                            </div>
                            <br>
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label"></label>
                                <div class="col-sm-12 col-md-10">
                                    <button type="submit" name="submit" value="<?= $fullname ?>" class="btn btn-primary" placeholder="กรอกข้อมูล" data-dismiss="modal">เสร็จ</button>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    </form>
                    <?php
                    if (isset($_POST['submit'])) {
                        $fullname = $_POST['fullname'];
                        $email = $_POST['email'];
                        $tel = $_POST['tel'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $id = $_POST['id'];

                        $sql1="UPDATE tb_badge set staff_fullname ='$fullname', staff_email ='$email', staff_tel ='$tel', staff_username='$username', staff_password ='$password' where staff_id = '$id' ";

                        if ($cls_conn->write_base($sql1) == true) {
                            echo $cls_conn->show_message('Success');
                            echo $cls_conn->goto_page(1, 'show_student.php');
                            // echo $sql2;
                        } else {
                            echo $cls_conn->show_message('Unsuccess');
                        }
                    }
                    ?>
                </div>
            </div>

            <!-- success Popup html Start -->
            <div class="modal fade" id="success-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-body text-center font-18">
                            <h3 class="mb-20">เพิ่มรายชื่อนักเรียนสำเร็จ</h3>
                            <div class="mb-30 text-center"><img src="vendors/images/success.png"></div>
                        </div>
                        <div class="modal-footer justify-content-center">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">เสร็จ</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- success Popup html End -->
        </div>
        <!-- <div class="footer-wrap pd-20 mb-20 card-box">
            Bank School By RMUTP
            </a>
        </div> -->
    </div>
    </div>
    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/jquery-steps/jquery.steps.js"></script>
    <script src="vendors/scripts/steps-setting.js"></script>
    <script src="vendors/scripts/dashboard.js"></script>

    <script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/dashboard.js"></script>
</body>