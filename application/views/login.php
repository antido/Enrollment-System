<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/datatables.css">
	<script src="<?php echo base_url(); ?>/assets/js/jquery-3.3.1.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/datatables.js"></script>
	<title>Enrollment System</title>
</head>
<body>
	<main>
		<div class="container mt-5">
			<div class="row">
				<div class="col-md">
				</div>
				<div class="col-md">
					<?php echo validation_errors(); ?>
					<h2 class="text-center">Login</h2>
					<form action="<?php echo site_url('main_controller/verify_login'); ?>" method="POST">
						<div class="form-group">
							<label>Username:</label>
							<input type="text" class="form-control" name="username" placeholder="Enter Username">
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input type="password" class="form-control" name="password" placeholder="Enter Password">
						</div>
						<div class="form-group">
							<input type="submit" class="form-control btn-primary" name="login" value="Login">
						</div>
					</form>
					<form action="<?php echo site_url('user_controller/register_form'); ?>" method="POST">
						<div class="form-group">
							<input type="submit" class="form-control btn-secondary" name="register" value="Register">
						</div>
					</form>
				</div>
				<div class="col-md">
				</div>
			</div>
		</div>
	</main>
</body>
</html>