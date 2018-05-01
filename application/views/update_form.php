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
		<a class="btn btn-secondary mt-2 ml-2" href="<?php echo site_url('main_controller/home'); ?>">BACK</a>
	</section>

	<main>
		<div class="container mt-2">
			<div class="row">
				<div class="col-md">
				</div>
				<div class="col-md">
					<h2 class="text-center">Update Data</h2>
					<form action="<?php echo site_url('user_controller/edit_user'); ?>" method="POST">
						<div class="form-group">
							<input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
						</div>
						<div class="form-group">
							<label>Firstname:</label>
							<input type="text" class="form-control" name="fName" value="<?php echo $fName; ?>">
						</div>
						<div class="form-group">
							<label>Middlename:</label>
							<input type="text" class="form-control" name="mName" value="<?php echo $mName; ?>">
						</div>
						<div class="form-group">
							<label>Lastname:</label>
							<input type="text" class="form-control" name="lName" value="<?php echo $lName; ?>">
						</div>
						<div class="form-group">
							<label>Age:</label>
							<input type="number" class="form-control" name="age" value="<?php echo $age; ?>">
						</div>
						<div class="form-group">
							<label>Gender:</label>
							<select class="form-control" name="gender">
								<option value="<?php echo $gender; ?>"><?php echo $gender; ?></option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Others">Others</option>
							</select>
						</div>
						<div class="form-group">
							<label>Contact Number:</label>
							<input type="text" class="form-control" name="contactNum" value="<?php echo $contactNum; ?>">
						</div>
						<div class="form-group">
							<label>Home Address:</label>
							<input type="text" class="form-control" name="homeAddr" value="<?php echo $homeAddr; ?>">
						</div>
						<div class="form-group">
							<input type="hidden" class="form-control" name="createdDate" value="<?php echo $createdDate; ?>">
						</div>
						<div class="form-group">
							<input type="submit" class="form-control btn-primary" name="edit" value="Update">
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
</body>
</html>
