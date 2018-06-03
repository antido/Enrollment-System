<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/datatables.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
	<script src="<?php echo base_url(); ?>/assets/js/jquery-3.3.1.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/bootstrap.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/datatables.js"></script>
	<title>Enrollement System | Add</title>
</head>
<body>
	<section>
		<a class="btn btn-secondary mt-2 ml-2" href="<?php echo site_url('main_controller/home'); ?>"><i class="fas fa-arrow-alt-circle-left"> BACK</i></a>
	</section>

	<main>
		<div class="container mt-2">
			<div class="row">
				<div class="col-md">
				</div>
				<div class="col-md">
					<h2 class="text-success text-center"><i class="fas fa-user-plus"> Add Account</i></h2>
					<form action="<?php echo site_url('user_controller/add_user'); ?>" method="POST">
						<h5 class="text-success mt-5">Student Information</h5>
						<div class="form-group">
							<label>Firstname:</label>
							<input type="text" class="form-control" name="fName" placeholder="Enter Firstname" required>
						</div>
						<div class="form-group">
							<label>Middlename:</label>
							<input type="text" class="form-control" name="mName" placeholder="Enter Middlename" required>
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
						<h5 class="text-success mt-5">Create Credentials</h5>
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
							<input type="password" class="form-control" id="confirm-password" name="confirmPass" placeholder="Re-Enter Preferred Password" required>
							<span id="message"></span>
						</div>
						<div class="form-group">
							<input type="submit" class="form-control btn-success" id="add-btn" name="add" value="Create">
						</div>
					</form>
				</div>
				<div class="col-md">
				</div>
			</div>
		</div>
	</main>

	<footer class="footer mt-5">
		<div class="container-fluid">
			<p class="text-center">Enrollment System &copy; <?php echo date('Y'); ?></p>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#password, #confirm-password').on('keyup', function(){
				if($('#password').val() != $('#confirm-password').val()){
					$('#message').html('Not Matching').css('color', 'red');
					$('#add-btn').attr('disabled', true);
				}else{
					$('#message').html('Matching').css('color', 'green');
					$('#add-btn').attr('disabled', false);
				}
			});
		});
	</script>
</body>
</html>