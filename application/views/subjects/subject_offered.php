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
	<title>Enrollment System - Subjects</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="<?php echo site_url('subject_controller/subjects_offered'); ?>">Subjects</a>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('main_controller/home'); ?>">Your Account</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main>
		<div class="container-fluid mt-5">
			<table class="table table-striped table-bordered" id="subjectOfferedTable">
				<thead class="thead-dark">
					<tr>
						<th>Subject ID</th>
						<th>Subject Name</th>
						<th>Subject Description</th>
						<th>Unit</th>
						<th>Action</th>
					</tr>
				</thead>
				<?php foreach($data as $row) { ?>
					<tr>
						<td><?php echo $row->subject_id; ?></td>
						<td><?php echo $row->subject_name; ?></td>
						<td><?php echo $row->subject_description; ?></td>
						<td><?php echo $row->subject_unit; ?></td>
						<td>
							<a class="btn btn-secondary" href="#viewSubjectModal" data-toggle="modal">View</a>
							<a class="btn btn-success" href="">Enroll</a>
						</td>
					</tr>
				<?php } ?>
			</table>
		</div>
	</main>

	<!-- View Subject Data Modal -->
	<div class="modal fade" id="viewSubjectModal" tabindex="-1" role="dialog" aria-labelledby="viewSubjectModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content"> 
				 <div class="modal-header">
				 	<h5 class="modal-title" id="viewSubjectModalLabel">View Subject Data</h5>
				 	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				 		<span aria-hidden="true">&times;</span>
				 	</button>
				 </div>
				 <div class="modal-body">
				 	 
				 </div>
				 <div class="modal-footer">
				 	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
			$('#subjectOfferedTable').DataTable();
		});
	</script>
</body>
</html>