<?php session_start(); ?>
<?php include('back/class_conn.php'); ?>
<?php $cls_conn = new class_conn(); ?>
<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>project</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="back/vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="back/vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="back/vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="back/vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="back/vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="back/vendors/styles/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<style>
		.back {
			background-image: url("back.jpg");
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>

<body class="login-page">

	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="logdo.png" alt="">
				</a>
			</div>
			<br><br><br><br>
		</div>
	</div>

	<div id="demo">
	</div>

	<?php if (isset($_POST['submit1'])) {
		$tel = $_POST['tel'];
		// echo $username;
		// echo $password;

		$sql = " select * from tb_customer";
		$sql .= " where";
		$sql .= " customer_tel='$tel'";
		$num = $cls_conn->select_numrows($sql);
		if ($num >= 1) {
			$result = $cls_conn->select_base($sql);
			while ($row = mysqli_fetch_array($result)) {
				$customer_id = $row['customer_id'];
			}
			$_SESSION['customer_id'] = $customer_id;
			echo $cls_conn->show_message('Success');
			echo $cls_conn->goto_page(1, 'back/index.php');
			// echo $sql;
		} else {
			// echo $cls_conn->show_message('unSuccess');
			$data = 1;
			// echo $s;
			echo '<script type="text/javascript">';
			echo "var data = '$data';"; // ส่งค่า $data จาก PHP ไปยังตัวแปร data ของ Javascript
			echo '</script>';
		}
	}
	?>

	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center back">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-12">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Login</h2>
						</div>
						<form method="POST">
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="password" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<button type="summit" name="submit" class="btn btn-primary btn-lg btn-block">Sign In</button>
									</div>
								</div>
							</div>
						</form>
						<?php
						if (isset($_POST['submit'])) {
							$username = $_POST['username'];
							$password = $_POST['password'];

							$sql = " select * from tb_admin";
							$sql .= " where";
							$sql .= " admin_username='$username'";
							$sql .= " and";
							$sql .= " admin_password='$password'";
							$num = $cls_conn->select_numrows($sql);
							if ($num >= 1) {
								$result = $cls_conn->select_base($sql);
								while ($row = mysqli_fetch_array($result)) {
									$admin_id = $row['admin_id'];
									$admin_fullname = $row['admin_fullname'];
								}
								$_SESSION['admin_id'] = $admin_id;
								echo $cls_conn->show_message('Login Success');
								echo $cls_conn->goto_page(1, 'back/index.php');
								// echo $sql;
							} 
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script type="text/javascript">
		// alert(data); // ทดสอบแสดงตัวแปร
		if (1 == data) {
			document.getElementById("demo").innerHTML = "<div class=\"alert alert-danger\">\<strong>Danger!</strong> There is no information that you enter.</div>";
		}
	</script>
	<script src="back/vendors/scripts/core.js"></script>
	<script src="back/vendors/scripts/script.min.js"></script>
	<script src="back/vendors/scripts/process.js"></script>
	<script src="back/vendors/scripts/layout-settings.js"></script>
</body>

</html>