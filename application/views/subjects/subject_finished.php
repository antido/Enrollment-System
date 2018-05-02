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
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="<?php echo site_url('subject_controller/subjects_finished'); ?>">Subjects</a>
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
		<div class="container mt-5">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h2 class="text-center text-primary mb-5">Subjects</h2>
					<div class="list-group">
						<a href="#filipinoModal" data-toggle="modal" class="list-group-item list-group-item-action">Filipino</a>
						<a href="#" class="list-group-item list-group-item-action">English</a>
						<a href="#" class="list-group-item list-group-item-action">Math</a>
						<a href="#" class="list-group-item list-group-item-action">Science</a>
						<a href="#" class="list-group-item list-group-item-action">History</a>
						<a href="#" class="list-group-item list-group-item-action">Programming</a>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</main>

	<!-- Filipino Subject Data Modal -->
	<div class="modal fade" id="filipinoModal" tabindex="-1" role="dialog" aria-labelledby="filipinoModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="filipinoModalLabel">Subject Data</h5>
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
			$('.list-group-item').on('click', function(){
				$('.active').removeClass('active');
				$(this).addClass('active');
			});
		});
	</script>
</body>
</html>