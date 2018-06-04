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
	<title>Enrollment System | Logs</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="<?php echo site_url('main_controller/home'); ?>"><i class="fas fa-school"> Enrollment</i> |</a>
			<div class="collapse navbar-collapse">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?php echo site_url('main_controller/home'); ?>">Home</a>
					</li>
					<li class="nav-item dropdown"> 
						<a class="nav-link dropdown-toggle" href="#" id="subjectDropdown" data-toggle="dropdown">Subjects</a>
						<div class="dropdown-menu" aria-labelledby="subjectDropdown">
							<a class="dropdown-item" href="<?php echo site_url('subject_controller/subjects_offered'); ?>">Offered</a>
							<a class="dropdown-item" href="<?php echo site_url('subject_controller/subjects_enrolled'); ?>">Enrolled</a>
							<a class="dropdown-item" href="<?php echo site_url('subject_controller/subjects_finished'); ?>">Finished</a>
						</div>
					</li>
					<li class="nav-item dropdown active"> 
						<a class="nav-link dropdown-toggle" href="#" id="actionDropdown" data-toggle="dropdown">Action</a>
						<div class="dropdown-menu" aria-labelledby="actionDropdown">
							<a class="dropdown-item active" href="<?php echo site_url('user_controller/activity_logs'); ?>">Activity Logs</a>
							<a class="dropdown-item" href="<?php echo site_url('main_controller/logout'); ?>">Logout</a>
						</div>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main>
		<div class="container-fluid mt-5">
			<table class="table table-striped table-bordered" id="activitiesTable">
				<thead class="thead-dark">
					<tr>
						<th>Activity ID</th>
						<th>User Name</th>
						<th>Activity Description</th>
						<th>Activity Date</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($data as $row) { ?>
						<tr>
							<td><?php echo $row->activity_log_id; ?></td>
							<td><?php echo $row->first_name.' '.$row->middle_name.' '.$row->last_name; ?></td>
							<td><?php echo $row->activity_description; ?></td>
							<td><?php echo $row->activity_created_date; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</main>

	<footer class="footer mt-5">
		<div class="container-fluid">
			<p class="text-center">Enrollment System &copy; <?php echo date('Y'); ?></p>
		</div>
	</footer>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#activitiesTable').DataTable({
				responsive: true
			});
		});	
	</script>
</body>
</html>