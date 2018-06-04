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
	<title>Enrollment System - Subjects</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a class="navbar-brand" href="<?php echo site_url('subject_controller/subjects_finished'); ?>"><i class="fas fa-book"> Subjects</i> |</a>
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
					<h2 class="text-center text-success mb-5"><i class="fas fa-user-check"> Taken Subjects</i></h2>
					<div class="list-group text-center">
						<a href="#" class="list-group-item list-group-item-action list-group-item-dark subjects-label" data-attr="subject-major">Major Subjects</a>
						<div class="list-group subject-completed" id="subject-major" style="display: none;">
							<a href="#" class="list-group-item list-group-item-action">Programming I</a>	
							<a href="#" class="list-group-item list-group-item-action">Programming II</a>
							<a href="#" class="list-group-item list-group-item-action">IT Fundamentals</a>
							<a href="#" class="list-group-item list-group-item-action">Networking</a>
						</div>
						<a href="#" class="list-group-item list-group-item-action list-group-item-dark subjects-label" data-attr="subject-minor">Minor Subjects</a>
						<div class="list-group" id="subject-minor" style="display: none;">
							<a href="#" class="list-group-item list-group-item-action" >Filipino</a>
							<a href="#" class="list-group-item list-group-item-action">English</a>
							<a href="#" class="list-group-item list-group-item-action">Math</a>
							<a href="#" class="list-group-item list-group-item-action">Science</a>
							<a href="#" class="list-group-item list-group-item-action">History</a>
						</div>
						<a href="#" class="list-group-item list-group-item-action list-group-item-dark subjects-label" data-attr="subject-elective">Electives</a>
						<div class="list-group" id="subject-elective" style="display: none;">
							<a href="#" class="list-group-item list-group-item-action">Technical Presentation</a>
						</div>
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
			$('.subjects-label').on('click', function(){
				var subject = $(this).data('attr');
				$('#'+subject).slideToggle();
			});
		});
	</script>
</body>
</html>