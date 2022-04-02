<?php include('headder.php'); ?>
<div style="margin-left:40%">
    <br><br><br><br><br>



    <?php
    if (isset($_GET['list'])) {
        $list = $_GET['list'];


        $sql = " delete from tb_list";
        $sql .= " where";
        $sql .= " list_id='$list'";

        if ($cls_conn->write_base($sql) == true) {
            echo $cls_conn->show_message('Delete Success');
            echo $cls_conn->goto_page(0, 'show_list.php');
        } else {
            echo $cls_conn->show_message('Delete Unsuccess');
            echo $sql;
        }
    } elseif (isset($_GET['admin'])) {
        $admin = $_GET['admin'];


        $sql = "DELETE from tb_admin where admin_id = '$admin' ";


        if ($cls_conn->write_base($sql) == true) {
            echo $cls_conn->show_message('Success');
            echo $cls_conn->goto_page(0, 'show_admin.php');
            // echo $sql;
        } else {
            echo $cls_conn->show_message('Unsuccess');
            echo $sql;
        }
    } elseif (isset($_GET['product'])) {
        $product = $_GET['product'];


        $sql = "DELETE from tb_product where product_id = '$product' ";


        if ($cls_conn->write_base($sql) == true) {
            echo $cls_conn->show_message('Success' . $sql);
            echo $cls_conn->goto_page(0, 'show_product.php');
            // echo $sql;
        } else {
            echo $cls_conn->show_message('Unsuccess');
            echo $sql;
        }
    } elseif (isset($_GET['shelf'])) {
        $shelf = $_GET['shelf'];


        $sql = "DELETE from tb_shelf where shelf_id = '$shelf' ";


        if ($cls_conn->write_base($sql) == true) {
            echo $cls_conn->show_message('Success' . $sql);
            echo $cls_conn->goto_page(0, 'show_shelf.php');
            // echo $sql;
        } else {
            echo $cls_conn->show_message('Unsuccess');
            echo $sql;
        }
    } elseif (isset($_GET['user'])) {
        $user = $_GET['user'];

        $sql = "DELETE from tb_user where user_id = '$user' ";

        if ($cls_conn->write_base($sql) == true) {
            echo $cls_conn->show_message('Success' . $sql);
            echo $cls_conn->goto_page(0, 'show_user.php');
            // echo $sql;
        } else {
            echo $cls_conn->show_message('Unsuccess');
            echo $sql;
        }
    }
    ?>
</div>