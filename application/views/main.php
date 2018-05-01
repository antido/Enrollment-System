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
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="<?php echo site_url('main_controller/home'); ?>">Student</a>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav"> 
					<li class="nav-item">
						<a class="nav-link active" href="<?php echo site_url('main_controller/home'); ?>">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="subjectDropdown" data-toggle="dropdown">Subjects</a>
						<div class="dropdown-menu" aria-labelledby="subjectDropdown">
							<a class="dropdown-item" href="<?php echo site_url('subject_controller/subjects_offered'); ?>">Offered</a>
							<a class="dropdown-item" href="#">Enrolled</a>
							<a class="dropdown-item" href="#">Finished</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('main_controller/logout'); ?>">Logout</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main>
		<div class="container-fluid mt-5">
			<a class="btn btn-success mb-2" href="<?php echo site_url('user_controller/add_form'); ?>">Add</a>
			<table class="table table-striped table-bordered" id="dashboardTable">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Contact Number</th>
						<th>Home Address</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php foreach($data as $row) { ?>
					<tr>
						<td><?php echo $row->user_id; ?></td>
						<td><?php echo $row->first_name .' '. $row->middle_name .' '. $row->last_name; ?></td>
						<td><?php echo $row->age; ?></td>
						<td><?php echo $row->gender; ?></td>
						<td><?php echo $row->contact_number; ?></td>
						<td><?php echo $row->home_address; ?></td>
						<td>
							<a class="btn btn-secondary" href="#viewModal" data-toggle="modal">View</a>
							<a class="btn btn-primary" href="<?php echo site_url('user_controller/user_info/'.$row->user_id); ?>">Edit</a>
							<a class="btn btn-danger" onclick="return confirm('Are you sure? ');" href="<?php echo site_url('user_controller/delete_user/'.$row->user_id); ?>">Delete</a>
						</td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</main>

	<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="viewModalLabel">View Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-success">Save</button>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer mt-5">
		<div class="container-fluid">
			<p class="text-center">Enrollment System &copy; <?php echo date('Y'); ?></p>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#dashboardTable').DataTable();
		});
	</script>
</body>
</html>