<?php session_start(); ?>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>เพิ่มสถานที่</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
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
                            <h5>สถานที่</h5>
                            <section>
                                <div class="pro14">

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">ชื่อสถานที่</label>
                                        <div class="col-sm-12 col-md-10">
                                            <select class="form-control" type="text" name="place_id"
                                                placeholder="กรอกข้อมูล">
                                                <option value="">select</option>
                                                <?php
                                                $sql = "SELECT * from tb_place ";
                                                $re = $cls_conn->select_base($sql);
                                                while ($row = mysqli_fetch_array($re)) {
                                                ?>
                                                <option value="<?=$row['place_id'] ?>">
                                                    <?= $row['place_name'] ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label">รูป</label>
                                        <div class="col-sm-12 col-md-10">
                                            <input type="file" id="gender_id" name="pic" required="required"
                                                placeholder="กรอกข้อมูล" class="form-control"></input>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="form-group row">
                                        <label class="col-sm-12 col-md-2 col-form-label"></label>
                                        <div class="col-sm-12 col-md-10">
                                            <button type="submit" name="submit" class="btn btn-primary"
                                                placeholder="กรอกข้อมูล" data-dismiss="modal">เสร็จ</button>
                                        </div>
                                    </div>

                                </div>
                            </section>
                            <!-- Step 2 -->
                        </form>

                        <?php
                        if (isset($_POST['submit'])) {                 
                            $place_id = $_POST['place_id'];
                            $pic = "";
                            if ($_FILES["pic"]["name"] != "") {

                                $datetime = date("dmYHis");
                                $file_name = substr($_FILES['pic']['name'], -4);
                                $pic = $datetime . '_p1' . $file_name;
                                move_uploaded_file($_FILES["pic"]["tmp_name"], "../../img/" . $pic);
                            }

                            $sql1 = " insert into tb_img(place_id,img)";
                            $sql1 .= " values ('$place_id','$pic')";

                            if ($cls_conn->write_base($sql1) == true) {
                                echo $cls_conn->show_message('Success');
                                echo $cls_conn->goto_page(1, 'show_img_place.php');
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