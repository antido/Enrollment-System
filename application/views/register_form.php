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
	<section>
		<a class="btn btn-secondary mt-2 ml-2" href="<?php echo site_url('main_controller/index'); ?>">BACK</a>
	</section>

	<main>
		<div class="container mt-2">
			<div class="row">
				<div class="col-md">
				</div>
				<div class="col-md">
					<h2 class="text-center">Register Account</h2>
					<form action="<?php echo site_url('user_controller/register_user'); ?>" method="POST">
						<h5 class="text-primary mt-5">Student Personal Information</h5>
						<div class="form-group">
							<label>Firstname:</label>
							<input type="text" class="form-control" name="fName" placeholder="Enter Firstname" required>
						</div>
						<div class="form-group">
							<label>Middlename:</label>
							<input type="text" class="form-control" name="mName" placeholder="Enter Middlename">
						</div>
						<div class="form-group">
							<label>Lastname:</label>
							<input type="text" class="form-control" name="lName" placeholder="Enter Lastname" required>
						</div>
						<div class="form-group">
							<label>Age:</label>
							<input type="number" class="form-control" name="age" placeholder="Enter Age" required>
						</div>
						<div class="form-group">
							<label>Gender:</label>
							<select class="form-control" name="gender">
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Others">Others</option>
							</select>
						</div>
						<div class="form-group">
							<label>Contact Number:</label>
							<input type="text" class="form-control" name="contactNum" placeholder="Enter Contact Number" required>
						</div>
						<div class="form-group">
							<label>Home Address:</label>
							<input type="text" class="form-control" name="homeAddr" placeholder="Enter Home Address" required>
						</div>
						<h5 class="text-primary mt-5">Create Preferred Account</h5>
						<div class="form-group">
							<label>Username:</label>
							<input type="text" class="form-control" name="username" placeholder="Enter Preferred Username" required>
						</div>
						<div class="form-group">
							<label>Password:</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="Enter Preferred Password" required>
						</div>
						<div class="form-group">
							<label>Confirm Password:</label>
							<input type="password" class="form-control" id="confirm-password" name="confirmPass" placeholder="Confirm Preferred Password" required>
							<span id="message"></span>
						</div>
						<div class="form-group">
							<input type="submit" class="form-control btn-primary" id="register-btn" name="register" value="Register">
						</div>
					</form>
				</div>
				<div class="col-md">
				</div>
			</div>
		</div>
	</main>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#password, #confirm-password').on('keyup', function(){
				if($('#password').val() != $('#confirm-password').val()){
					$('#message').html('Not Matching').css('color', 'red');
					$('#register-btn').attr('disabled', true);
				}else{
					$('#message').html('Matching').css('color', 'green');
					$('#register-btn').attr('disabled', false);
				}
			});
		});
	</script>
</body>
</html>