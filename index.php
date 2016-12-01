<?php

include('vendor/autoload.php');
use App\Employee\Employee;
use App\Message\Message;
use App\Utility\Utility;

$obj = new Employee();
$countEmployee=$obj->countEmployee();
$countDept=$obj->countDept();
$countSalaryGrade=$obj->countSlaryGrade();
$countOffDays=$obj->countOffDays();

//echo($count);die();



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Home | বৃত্ত</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/core.css">
	<link rel="stylesheet" href="assets/css/theme.css">
	<link rel="stylesheet" href="assets/css/forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body  page-fade">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="index.php">
						<img src="assets/images/logo@2x.png" width="120" alt="" />
					</a>
				</div>

				<!-- logo collapse icon -->
				<div class="sidebar-collapse">
					<a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
						<i class="entypo-menu"></i>
					</a>
				</div>

								
				<!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
				<div class="sidebar-mobile-menu visible-xs">
					<a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
						<i class="entypo-menu"></i>
					</a>
				</div>

			</header>
			
									
			<ul id="main-menu" class="main-menu">

				<li class="has-sub">
					<a href="index.php">
						<i class="entypo-gauge"></i>
						<span class="title">Employees</span>
					</a>
					<ul>
						<li>
							<a href="views/employee">
								<span class="title">View list</span>
							</a>
						</li>
						<li>
							<a href="views/employee/add.php">
								<span class="title">Add New</span>
							</a>
						</li>
						<li>
					</ul>
				</li>

				<li class="has-sub">
					<a href="index.php">
						<i class="entypo-gauge"></i>
						<span class="title">Salary Grades</span>
					</a>
					<ul>
						<li>
							<a href="views/salary/index.php">
								<span class="title">View Grades</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="has-sub">
					<a href="index.php">
						<i class="entypo-gauge"></i>
						<span class="title">Departments</span>
					</a>
					<ul>
						<li>
							<a href="views/department/index.php">
								<span class="title">View All</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="has-sub">
					<a href="index.php">
						<i class="entypo-gauge"></i>
						<span class="title">Vacations</span>
					</a>
					<ul>
						<li>
							<a href="views/offdays/index.php">
								<span class="title">View All</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="has-sub">
					<a href="index.php">
						<i class="entypo-gauge"></i>
						<span class="title">Job Opening</span>
					</a>
					<ul>
						<li>
							<a href="index.php">
								<span class="title">View All</span>
							</a>
						</li>
						<li>
							<a href="">
								<span class="title">Add New</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="has-sub">
					<a href="index.php">
						<i class="entypo-gauge"></i>
						<span class="title"> Resume </span>
					</a>
					<ul>
						<li>
							<a href="index.php">
								<span class="title">View All</span>
							</a>
						</li>

					</ul>
				</li>

				<li class="has-sub">
					<a href="index.php">
						<i class="entypo-gauge"></i>
						<span class="title"> Job Seekers </span>
					</a>
					<ul>
						<li>
							<a href="index.php">
								<span class="title">View All</span>
							</a>
						</li>

					</ul>
				</li>
			</ul>
			
		</div>

	</div>

	<div class="main-content">

		<?php include 'header.php'; ?>
		
		<hr />
		
		
		<script type="text/javascript">
		jQuery(document).ready(function($)
		{
			// Sample Toastr Notification
			setTimeout(function()
			{
				var opts = {
					"closeButton": true,
					"debug": false,
					"positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
					"toastClass": "black",
					"onclick": null,
					"showDuration": "300",
					"hideDuration": "1000",
					"timeOut": "5000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
				};
		
				toastr.success("You have been awarded with 1 year free subscription. Enjoy it!", "Account Subcription Updated", opts);
			}, 3000);

		});


		function getRandomInt(min, max)
		{
			return Math.floor(Math.random() * (max - min + 1)) + min;
		}
		</script>
		
		
		<div class="row">
			<div class="col-sm-3 col-xs-6">
				<a href="views/employee">
					<div class="tile-stats tile-red">
						<div class="icon"><i class="entypo-users"></i></div>

						<div class="num" data-start="0" data-end="<?php echo $countEmployee->count?>" data-postfix="" data-duration="1500" data-delay="600">0</div>

						<h3>Total Employee</h3>
						<p>Click to Manage Employee</p>
					</div>
				</a>
			</div>
		
			<div class="col-sm-3 col-xs-6">
				<a href="views/department">
					<div class="tile-stats tile-green">
						<div class="icon"><i class="entypo-chart-bar"></i></div>
						<div class="num" data-start="0" data-end="<?php echo $countDept->count?>" data-postfix="" data-duration="1500" data-delay="600">0</div>

						<h3>Total Department</h3>
						<p>Click to Manage Department</p>
					</div>
				</a>
			</div>
			
			<div class="clear visible-xs"></div>

			<div class="col-sm-3 col-xs-6">
				<a href="views/salary">
					<div class="tile-stats tile-blue">
						<div class="icon"><i class="entypo-briefcase"></i></div>
						<div class="num" data-start="0" data-end="<?php echo $countSalaryGrade->count?>" data-postfix="" data-duration="1500" data-delay="1800">0</div>

						<h3>Pay Grade</h3>
						<p>Click to manage Pay grade</p>
					</div>
				</a>
			</div>

			<div class="col-sm-3 col-xs-6">
				<a href="views/offdays">
					<div class="tile-stats tile-aqua">
						<div class="icon"><i class="entypo-basket"></i></div>
						<div class="num" data-start="0" data-end="<?php echo $countOffDays->count?>" data-postfix="" data-duration="1500" data-delay="1200">0</div>

						<h3>Total Off Day</h3>
						<p>Total off days of this month</p>
					</div>
				</a>

			</div>


		</div>

		<br />
		
		<div class="row">
			<div class="col-sm-12">
		
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">Top seller Vendors Profile</div>
		
						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>
		
					<table class="table table-bordered table-responsive">
						<thead>
							<tr>
								<th>SL No.</th>
								<th>Full Name</th>
								<th>Phone Number</th>
								<th>Email Address</th>
								<th>City</th>
								<th>Total Sale</th>

							</tr>
						</thead>
		
						<tbody>
							<tr>
								<td>1</td>
								<td>Art Ramadani</td>
								<td>01010101010101</td>
								<td>abc@gmail.com</td>
								<td>Chittagong</td>
								<td>300</td>
							</tr>
		
							<tr>
								<td>2</td>
								<td>Ylli Pylla</td>
								<td>01010101010101</td>
								<td>abc@gmail.com</td>
								<td>Chittagong</td>
								<td>200</td>
							</tr>
		
							<tr>
								<td>3</td>
								<td>Arlind Nushi</td>
								<td>01010101010101</td>
								<td>abc@gmail.com</td>
								<td>Chittagong</td>
								<td>100</td>
							</tr>
		
						</tbody>
					</table>
				</div>
		
			</div>
		
		</div>
		
		<br />

		<div class="row">
			<div class="col-sm-12">

				<div class="panel panel-primary">
					<div class="panel-heading">
						<div class="panel-title">Top customers Profile</div>

						<div class="panel-options">
							<a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							<a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
							<a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
						</div>
					</div>

					<table class="table table-bordered table-responsive">
						<thead>
						<tr>
							<th>SL No.</th>
							<th>Full Name</th>
							<th>Phone Number</th>
							<th>Email Address</th>
							<th>City</th>
							<th>Total Sale</th>

						</tr>
						</thead>

						<tbody>
						<tr>
							<td>1</td>
							<td>Art Ramadani</td>
							<td>01010101010101</td>
							<td>abc@gmail.com</td>
							<td>Chittagong</td>
							<td>300</td>
						</tr>

						<tr>
							<td>2</td>
							<td>Ylli Pylla</td>
							<td>01010101010101</td>
							<td>abc@gmail.com</td>
							<td>Chittagong</td>
							<td>200</td>
						</tr>

						<tr>
							<td>3</td>
							<td>Arlind Nushi</td>
							<td>01010101010101</td>
							<td>abc@gmail.com</td>
							<td>Chittagong</td>
							<td>100</td>
						</tr>

						</tbody>
					</table>
				</div>

			</div>

		</div>
		<!-- Footer -->
		<?php include 'footer.php'; ?>
	</div>

		

	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
	<link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">

	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/sabuj-api.js"></script>
	<script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
	<script src="assets/js/jquery.sparkline.min.js"></script>
	<script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
	<script src="assets/js/rickshaw/rickshaw.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/toastr.js"></script>
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>