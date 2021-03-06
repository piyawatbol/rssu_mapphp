<?php session_start(); ?>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>เเก้ประเภทสถานที่</title>

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
    <?php include('headder.php'); ?>
    <div class="mobile-menu-overlay"></div>


    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="pd-20 card-box mb-30">
                    <div class="wizard-content">
                        <form method="POST" enctype="multipart/form-data">
                            <h5>ประเภทสถานที่</h5>
                            <section>
                                <?php 
                                $sql ="SELECT * from tb_typeplace ";
                                $re =$cls_conn->select_base($sql);
                                while($row = mysqli_fetch_array($re)){
                                    $name = $row['typeplace_name'];
                                    $id = $row['typeplace_id']; 
                                }
                                ?>
                                <div class="pro14">
                                <input type="hidden" name="id" value="<?=$id?>" >
                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">ชื่อประเภทสถานที่</label>
                                        <div class="col-sm-12 col-md-10">
                                            <input class="form-control" type="text" value="<?=$name?>"  name="name" placeholder="กรอกข้อมูล">
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label"></label>
                                        <div class="col-sm-12 col-md-10">
                                            <button type="submit" name="submit" class="btn btn-primary" placeholder="กรอกข้อมูล" data-dismiss="modal">เสร็จ</button>
                                        </div>
                                    </div>

                                </div>
                            </section>
                            <!-- Step 2 -->
                        </form>

                        <?php
                        if (isset($_POST['submit'])) {
                            $name = $_POST['name'];
                            $id = $_POST['id'];

                            $sql1 = " UPDATE tb_typeplace set typeplace_name = '$name' where typeplace_id = '$id'  ";

                            if ($cls_conn->write_base($sql1) == true) {
                                echo $cls_conn->show_message('Success');
                                echo $cls_conn->goto_page(1, 'show_typeplace.php');
                                // echo $sql1;
                            } else {
                                echo $cls_conn->show_message('Unsuccess');
                            }
                        }
                        ?>
                    </div>
                </div>
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