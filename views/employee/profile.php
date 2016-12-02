<?php
include('../../vendor/autoload.php');
use App\Employee\Employee;
use App\Message\Message;
use App\Utility\Utility;

//var_dump($_GET);die();

$obj = new Employee();
$obj->setData($_GET);
$singleData = $obj->view("obj");

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="../../assets/images/favicon.ico">

	<title>Profile | বৃত্ত</title>

	<link rel="stylesheet" href="../../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="../../assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="../../assets/css/font-icons/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../../assets/css/core.css">
	<link rel="stylesheet" href="../../assets/css/theme.css">
	<link rel="stylesheet" href="../../assets/css/forms.css">
	<link rel="stylesheet" href="../../assets/css/custom.css">
	<link rel="stylesheet" href="../../assets/css/sabuj.css">

	<script src="../../assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">

				<!-- logo -->
				<div class="logo">
					<a href="../../index.php">
						<img src="../../assets/images/logo@2x.png" width="120" alt="" />
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

				<li class="opened has-sub">
					<a href="index.php">
						<i class="entypo-gauge"></i>
						<span class="title">Employees</span>
					</a>
					<ul>
						<li>
							<a href="index.php">
								<span class="title">View list</span>
							</a>
						</li>
						<li>
							<a href="add.php">
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
							<a href="../../views/salary/index.php">
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
							<a href="../../views/department/index.php">
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
							<a href="../../views/offdays/index.php">
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
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		


		
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		

		
					<li class="sep"></li>
		
					<li>
						<a href="../User/Authentication/logout.php">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>
		
		<hr />
		
		<div class="profile-env">
			
			<header class="row">
				
				<div class="col-sm-2">
					
					<a href="#" class="profile-picture">
						<img src="../../resource/images/<?php echo $singleData->profile_picture;?>" class="img-responsive img-circle" />
					</a>
					
				</div>
				
				<div class="col-sm-4">
					
					<ul class="profile-info-sections">
						<li>
							<div class="profile-name">
								<strong>
									<a href="#"><?php echo $singleData->first_name." ".$singleData->last_name;?></a>
									<a href="#" class="user-status is-online tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="Online"></a>
									<!-- User statuses available classes "is-online", "is-offline", "is-idle", "is-busy" -->						</strong>
								<span><a href="#"><i class="entypo-phone"></i><?php echo $singleData->phone_number;?></a></span>
								<span><a href="#"><i class="entypo-mail"></i><?php echo $singleData->email;?></a></span>
								<span><a href="#"><i class="entypo-briefcase"></i><?php echo $singleData->role;?></a></span>
							</div>
						</li>
						

					</ul>
					
				</div>
				
				<div class="col-sm-6">
					<div class="col-sm-12">

					<p class="bs-example">
						<a href="edit.php?id=<?php echo $singleData->id?>" class="btn btn-success btn-lg btn-icon icon-left" role="button">
							<i class="entypo-pencil"></i>
							Edit Profile
						</a>
						<a href="trash.php?id=<?php echo $singleData->id?>" class="btn btn-warning btn-lg btn-icon icon-left" role="button">
							<i class="entypo-alert"></i>
							Hold Profile
						</a>
						<a href="delete.php?id=<?php echo $singleData->id?>" class="btn btn-danger btn-lg btn-icon icon-left" role="button">
							<i class="entypo-cancel"></i>
							Delete Profile
						</a>
					</p>

					</div>
					<div class="col-sm-12">
						<p class="bs-example">
							<a href="http://<?php echo $singleData->fb;?>" ><i class="fa fa-facebook-square fa-3x" style="margin-right: 5px;"></i></a>
							<a href="http://<?php echo $singleData->twitter;?>"><i class="fa fa-twitter-square fa-3x" style="margin-right: 5px;"></i></a>
							<a href="http://<?php echo $singleData->googleplus;?>"><i class="fa fa-google-plus-square fa-3x" style="margin-right: 5px;"></i></a>
								<a href="http://<?php echo $singleData->linkedin;?>"><i class="fa fa-linkedin-square fa-3x"></i></a>

						</p>

					</div>
				</div>
				
			</header>
			
			<section class="profile-info-tabs">
				
				<div class="row">
					
					<div class="col-sm-offset-2 col-sm-2">
						
						<ul class="user-details">
							<li>
								<a href="#">
									<i class="entypo-location"></i>
									<?php echo $singleData->city;?>
								</a>
							</li>
							
							<li>
								<i class="entypo-calendar"></i>
								Joined <b><?php echo $singleData->join_date;?></b>

							</li>
							<li>
								<i class="entypo-calendar"></i>
								Type: <b>Full Time</b>

							</li>
						</ul>
					</div>


					
				</div>

			</section>


			<!--panel starts-->
			<div class="row">
				<div class="col-md-12">

					<ul class="nav nav-tabs bordered"><!-- available classes "bordered", "right-aligned" -->
						<li class="active">
							<a href="#home" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-home"></i></span>
								<span class="hidden-xs">Basic Information</span>
							</a>
						</li>
						<li>
							<a href="#profile" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-cog"></i></span>
								<span class="hidden-xs">Certifications</span>
							</a>
						</li>
						<li>
							<a href="#messages" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-mail"></i></span>
								<span class="hidden-xs">Education</span>
							</a>
						</li>
						<li>
							<a href="#documents" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-mail"></i></span>
								<span class="hidden-xs">Documents</span>
							</a>
						</li>
						<li>
							<a href="#training" data-toggle="tab">
								<span class="visible-xs"><i class="entypo-mail"></i></span>
								<span class="hidden-xs">Training</span>
							</a>
						</li>

					</ul>

					<div class="tab-content">
						<div class="tab-pane active" id="home">

								<div class="panel panel-gradient" data-collapsed="0">

									<!-- panel head -->
									<div class="panel-heading">
										<div class="panel-title"><h2>Personal Information</h2></div>

										<div class="panel-options">
											<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
										</div>
									</div>

									<table class="table table-responsive personalinfo">

										<tbody>
										<tr>
											<td class="col-sm-2">Employee ID:</td>
											<td class="col-sm-2"><?php echo $singleData->employee_id;?></td>


										</tr>
										<tr>
											<td class="col-sm-2">Full Name:</td>
											<td class="col-sm-5"><?php echo $singleData->first_name." ".$singleData->last_name;?></td>
											<td class="col-sm-2">Gender</td>
											<td class="col-sm-3"><?php echo $singleData->gender;?></td>

										</tr>

										<tr>
											<td class="col-sm-2">Date of Birth:</td>
											<td class="col-sm-5"><?php echo $singleData->birthday;?></td>
											<td class="col-sm-2">Marital Satatus</td>
											<td class="col-sm-3"><?php echo $singleData->marital_status;?></td>

										</tr>

										<tr>
											<td class="col-sm-2">Nationality:</td>
											<td class="col-sm-5"><?php echo $singleData->nationality;?></td>
											<td class="col-sm-2">NID No:</td>
											<td class="col-sm-3"><?php echo $singleData->nid;?></td>

										</tr>

										</tbody>
									</table>
								</div>

							<div class="panel panel-gradient" data-collapsed="0">

								<!-- panel head -->
								<div class="panel-heading">
									<div class="panel-title"><h2>Job Details</h2></div>

									<div class="panel-options">
										<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
									</div>
								</div>

								<table class="table table-responsive personalinfo">

									<tbody>
									<tr>
										<td class="col-sm-2">Employee ID:</td>
										<td class="col-sm-2"><?php echo $singleData->employee_id;?></td>


									</tr>


									<tr>
										<td class="col-sm-2">Join Date:</td>
										<td class="col-sm-5"><?php echo $singleData->join_date;?></td>
										<td class="col-sm-2">Role:</td>
										<td class="col-sm-3"><?php echo $singleData->role;?></td>

									</tr>

									<tr>
										<td class="col-sm-2">Salary:</td>
										<td class="col-sm-5"><?php echo $singleData->salary;?></td>
										<td class="col-sm-2">Department:</td>
										<td class="col-sm-3"><?php echo $singleData->dept;?></td>

									</tr>

									</tbody>
								</table>
							</div>

							<div class="panel panel-gradient" data-collapsed="0">

								<!-- panel head -->
								<div class="panel-heading">
									<div class="panel-title"><h2>Contact Information</h2></div>

									<div class="panel-options">
										<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
									</div>
								</div>

								<table class="table table-responsive personalinfo">

									<tbody>
									<tr>
										<td class="col-sm-2">Employee ID:</td>
										<td class="col-sm-2"><?php echo $singleData->employee_id;?></td>


									</tr>


									<tr>
										<td class="col-sm-2">Phone:</td>
										<td class="col-sm-5"><?php echo $singleData->phone_number;?></td>
										<td class="col-sm-2">Email ID:</td>
										<td class="col-sm-3"><?php echo $singleData->email;?></td>

									</tr>

									<tr>
										<td class="col-sm-2">Address:</td>
										<td class="col-sm-5"><?php echo $singleData->address1." ".$singleData->address2;?></td>
										<td class="col-sm-2">Zip code:</td>
										<td class="col-sm-3"><?php echo $singleData->post_code;?></td>

									</tr>

									<tr>
										<td class="col-sm-2">City:</td>
										<td class="col-sm-5"><?php echo $singleData->city;?></td>
										<td class="col-sm-2">Country:</td>
										<td class="col-sm-3"><?php echo $singleData->country;?></td>

									</tr>

									</tbody>
								</table>
							</div>

						</div>
						<div class="tab-pane" id="profile">
							<table class="table table-responsive personalinfo">
								<thead>
									<tr>
										<td>Name</td>
										<td>Pass year</td>
										<td>Skill</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="col-sm-2">Web Design:</td>
										<td class="col-sm-2">2010</td>
										<td class="col-sm-3">Commerce College</td>
										<td class="col-sm-5">
											<div class="progress progress-striped active">
												<div class="progress-bar progress-bar-danger" style="width: 30%">
													<span class="sr-only">30% Complete (success)</span>
												</div>
											</div>
										</td>



									</tr>

									<tr>
										<td class="col-sm-2">Web Development:</td>
										<td class="col-sm-2">2012</td>
										<td class="col-sm-3">Commerce College</td>
										<td class="col-sm-5">
											<div class="progress progress-striped active">
												<div class="progress-bar progress-bar-success" style="width: 30%">
													<span class="sr-only">30% Complete (success)</span>
												</div>
											</div>

										</td>

									</tr>

									<tr>
										<td class="col-sm-2">Java script:</td>
										<td class="col-sm-2">2013</td>
										<td class="col-sm-3">Commerce College</td>
										<td class="col-sm-3">
											<div class="progress progress-striped active">
												<div class="progress-bar progress-bar-success" style="width: 30%">
													<span class="sr-only">30% Complete (success)</span>
												</div>
											</div>
										</td>


									</tr>

									<tr>
										<td class="col-sm-2">C Plus Plus:</td>
										<td class="col-sm-2">2014</td>
										<td class="col-sm-3">Commerce College</td>
										<td class="col-sm-5">
											<div class="progress progress-striped active">
												<div class="progress-bar progress-bar-success" style="width: 30%">
													<span class="sr-only">30% Complete (success)</span>
												</div>
											</div>

										</td>



									</tr>


								</tbody>
							</table>

						</div>

						<div class="tab-pane" id="messages">

							<table class="table table-bordered">
								<thead>
								<tr>
									<th>Name</th>
									<th>Pass year</th>
									<th>Board</th>
									<th>Institute</th>
									<th>GPA</th>
								</tr>
								</thead>

								<tbody>
								<tr>
									<td>SSC</td>
									<td>2012</td>
									<td>Chittagong</td>
									<td>Dhaka College</td>
									<td>5.00</td>
								</tr>

								<tr>
									<td>SSC</td>
									<td>2012</td>
									<td>Chittagong</td>
									<td>Dhaka College</td>
									<td>5.00</td>
								</tr>

								<tr>
									<td>SSC</td>
									<td>2012</td>
									<td>Chittagong</td>
									<td>Dhaka College</td>
									<td>5.00</td>
								</tr>
								</tbody>
							</table>

						</div>


						<div class="tab-pane" id="documents">

							<table class="table table-responsive ">
								
								<tr>
									<td class="col-sm-1"><img src="../../assets/images/documents.png" alt="" style="width: 34px;"></td>
									<td class="col-sm-5"># document_of_mahmud_sabuj_for_job.docx</td>
									<td class="col-sm-6">
										<a href="edit.php?id=<?php echo $singleData->id?>" class="btn btn-success btn-sm btn-icon icon-left" role="button">
											<i class="entypo-link"></i>
											View
										</a>

										<a href="trash.php?id=<?php echo $singleData->id?>" class="btn btn-orange btn-sm btn-icon icon-left">
											<i class="entypo-download"></i>
											Download
										</a>
										<a href="delete.php?id=<?php echo $singleData->id?>" onclick="return checkDelete()" class="btn btn-danger btn-sm btn-icon icon-left" role="button">
											<i class="entypo-cancel"></i>
											Delete
										</a>
									</td>
								</tr>
								<tr>
									<td class="col-sm-1"><img src="../../assets/images/documents.png" alt="" style="width: 34px;"></td>
									<td class="col-sm-5"># document_of_mahmud_sabuj_for_job.docx</td>
									<td class="col-sm-6">
										<a href="edit.php?id=<?php echo $singleData->id?>" class="btn btn-success btn-sm btn-icon icon-left" role="button">
											<i class="entypo-link"></i>
											View
										</a>

										<a href="trash.php?id=<?php echo $singleData->id?>" class="btn btn-orange btn-sm btn-icon icon-left">
											<i class="entypo-download"></i>
											Download
										</a>
										<a href="delete.php?id=<?php echo $singleData->id?>" onclick="return checkDelete()" class="btn btn-danger btn-sm btn-icon icon-left" role="button">
											<i class="entypo-cancel"></i>
											Delete
										</a>
									</td>
								</tr>
								<tr>
									<td class="col-sm-1"><img src="../../assets/images/documents.png" alt="" style="width: 34px;"></td>
									<td class="col-sm-5"># document_of_mahmud_sabuj_for_job.docx</td>
									<td class="col-sm-6">
										<a href="edit.php?id=<?php echo $singleData->id?>" class="btn btn-success btn-sm btn-icon icon-left" role="button">
											<i class="entypo-link"></i>
											View
										</a>

										<a href="trash.php?id=<?php echo $singleData->id?>" class="btn btn-orange btn-sm btn-icon icon-left">
											<i class="entypo-download"></i>
											Download
										</a>
										<a href="delete.php?id=<?php echo $singleData->id?>" onclick="return checkDelete()" class="btn btn-danger btn-sm btn-icon icon-left" role="button">
											<i class="entypo-cancel"></i>
											Delete
										</a>
									</td>
								</tr>


								</tbody>
							</table>
						</div>

						<div class="tab-pane" id="training">

							<table class="table table-bordered">
								<thead>
								<tr>
									<th>Title</th>
									<th>Category</th>
									<th>Start Date</th>
									<th>End Date</th>
									<th>Grade</th>
								</tr>
								</thead>

								<tbody>
								<tr>
									<td>Safety Training</td>
									<td>Safety</td>
									<td>44-44-4444</td>
									<td>55-55-5555</td>
									<td>A</td>
								</tr>
								<tr>
									<td>Safety Training</td>
									<td>Safety</td>
									<td>44-44-4444</td>
									<td>55-55-5555</td>
									<td>A</td>
								</tr>
								<tr>
									<td>Safety Training</td>
									<td>Safety</td>
									<td>44-44-4444</td>
									<td>55-55-5555</td>
									<td>A</td>
								</tr>
								</tbody>
							</table>

						</div>

					</div>


				</div>

			</div>
			<!--panel end-->




		<!-- Footer -->
			<?php include '../../footer.php'; ?>

	</div>

		




	<!-- Bottom scripts (common) -->
	<script src="../../assets/js/gsap/TweenMax.min.js"></script>
	<script src="../../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="../../assets/js/bootstrap.js"></script>
	<script src="../../assets/js/joinable.js"></script>
	<script src="../../assets/js/resizeable.js"></script>
	<script src="../../assets/js/sabuj-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="../../assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="../../assets/js/custom.js"></script>


	<!-- Demo Settings -->
	<script src="../../assets/js/neon-demo.js"></script>

</body>
</html>