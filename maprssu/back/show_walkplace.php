<?php include('headder.php'); ?>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>การเดินทาง</title>

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
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <style>
        @media print {
            #hid {
                display: none;
                /* ซ่อน  */
            }
        }
    </style>
    <style type="text/css">
        .column1_div {
            position: relative;
            float: left;
            width: 25%;
            background-color: #D3D3D3;
        }

        .column2_div {
            position: relative;
            float: left;
            width: 50%;
            background-color: #BEBEBE;
        }


        .column3_div {
            position: relative;
            float: right;
            width: 25%;
            background-color: #D3D3D3;
        }
    </style>
</head>

<body>
    </div>
    <div class="mobile-menu-overlay"></div>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <!-- Export Datatable start -->
                <div class="card-box mb-30">
                    <div class="pd-20">
                        <h4 class="text-blue h4">การเดินทาง</h4>
                    </div>
                    <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap" id="myTable">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">WalkPlace ID</th>
                                    <th>ชื่อสถานที่</th>
                                    <th>ชื่อการเดินทาง</th>
                                    <th>เเก้ไข</th>
                                    <th>ลบ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $a = '1';
                                $sql = " SELECT * from tb_walkplace 
                                inner join tb_walk on tb_walk.walk_id = tb_walkplace.walk_id 
                                inner join tb_place on tb_place.place_id = tb_walkplace.place_id
                                ";
                                $result = $cls_conn->select_base($sql);
                                while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td>
                                            <?= $row['walkplace_id']; ?>
                                        </td>
                                        <td>
                                            <?= $row['walk_name']; ?>
                                        </td>
                                        <td>
                                            <?= $row['place_name']; ?>
                                        </td>
                                        <td>
                                            <a href="edit_walkplace.php?id=<?= $row['walkplace_id']; ?>" onclick="return confirm('Do you want to edit?')"><i class="icon-copy fi-pencil"></i></a>
                                        </td>
                                        <td>
                                            <a href="delete.php?walkplace=<?= $row['walkplace_id']; ?>" onclick="return confirm('Do you want to delete?')"><i class="icon-copy fi-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php

                                }
                                ?>
                                <script>
                                    function myFunction() {
                                        var input, filter, table, tr, td, i, txtValue;
                                        input = document.getElementById("myInput");
                                        filter = input.value.toUpperCase();
                                        table = document.getElementById("myTable");
                                        tr = table.getElementsByTagName("tr");
                                        for (i = 0; i < tr.length; i++) {
                                            td = tr[i].getElementsByTagName("td")[1];
                                            if (td) {
                                                txtValue = td.textContent || td.innerText;
                                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                                    tr[i].style.display = "";
                                                } else {
                                                    tr[i].style.display = "none";
                                                }
                                            }
                                        }
                                    }
                                </script>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Export Datatable End -->
            </div>
            <!-- <div class="footer-wrap pd-20 mb-20 card-box">
                Bank School By RMUTP</a>
            </div> -->
        </div>
    </div>
    <!-- js -->
    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/layout-settings.js"></script>
    <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <!-- buttons for Export datatable -->
    <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
    <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
    <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
    <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
    <!-- Datatable Setting js -->
    <script src="vendors/scripts/datatable-setting.js"></script>
    <script src="vendors/scripts/dashboard.js"></script>

    <script src="vendors/scripts/core.js"></script>
    <script src="vendors/scripts/script.min.js"></script>
    <script src="vendors/scripts/process.js"></script>
    <script src="vendors/scripts/dashboard.js"></script>
</body>

</html>