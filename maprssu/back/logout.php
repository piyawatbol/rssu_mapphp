<?php include('headder.php'); ?>
<?php session_start(); ?>
  <?php
  session_destroy();
  echo $cls_conn->goto_page(0, '../index.php');
  ?>