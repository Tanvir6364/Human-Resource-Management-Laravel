<?php
include('../../vendor/autoload.php');
use App\Employee\Employee;
use App\Message\Message;
use App\Utility\Utility;

$obj = new Employee();
$obj->setData($_GET);
$singleData = $obj->view("obj");
//var_dump($obj);die();
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
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li class="has-sub">
					<a href="index.html">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
					<ul>
						<li>
							<a href="index.html">
								<span class="title">Dashboard 1</span>
							</a>
						</li>
						<li>
							<a href="dashboard-2.html">
								<span class="title">Dashboard 2</span>
							</a>
						</li>
						<li>
							<a href="dashboard-3.html">
								<span class="title">Dashboard 3</span>
							</a>
						</li>
						<li class="has-sub">
							<a href="skin-black.html">
								<span class="title">Skins</span>
							</a>
							<ul>
								<li>
									<a href="skin-black.html">
										<span class="title">Black Skin</span>
									</a>
								</li>
								<li>
									<a href="skin-white.html">
										<span class="title">White Skin</span>
									</a>
								</li>
								<li>
									<a href="skin-purple.html">
										<span class="title">Purple Skin</span>
									</a>
								</li>
								<li>
									<a href="skin-cafe.html">
										<span class="title">Cafe Skin</span>
									</a>
								</li>
								<li>
									<a href="skin-red.html">
										<span class="title">Red Skin</span>
									</a>
								</li>
								<li>
									<a href="skin-green.html">
										<span class="title">Green Skin</span>
									</a>
								</li>
								<li>
									<a href="skin-yellow.html">
										<span class="title">Yellow Skin</span>
									</a>
								</li>
								<li>
									<a href="skin-blue.html">
										<span class="title">Blue Skin</span>
									</a>
								</li>
								<li>
									<a href="skin-facebook.html">
										<span class="title">Facebook Skin</span>
										<span class="badge badge-secondary badge-roundless">New</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="highlights.html">
								<span class="title">What's New</span>
								<span class="badge badge-success badge-roundless">v2.0</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="layout-api.html">
						<i class="entypo-layout"></i>
						<span class="title">Layouts</span>
					</a>
					<ul>
						<li>
							<a href="layout-api.html">
								<span class="title">Layout API</span>
							</a>
						</li>
						<li>
							<a href="layout-collapsed-sidebar.html">
								<span class="title">Collapsed Sidebar</span>
							</a>
						</li>
						<li>
							<a href="layout-fixed-sidebar.html">
								<span class="title">Fixed Sidebar</span>
							</a>
						</li>
						<li>
							<a href="layout-chat-open.html">
								<span class="title">Chat Open</span>
							</a>
						</li>
						<li>
							<a href="layout-horizontal-menu-boxed.html">
								<span class="title">Horizontal Menu Boxed</span>
							</a>
						</li>
						<li>
							<a href="layout-horizontal-menu-fluid.html">
								<span class="title">Horizontal Menu Fluid</span>
							</a>
						</li>
						<li>
							<a href="layout-mixed-menus.html">
								<span class="title">Mixed Menus</span>
							</a>
						</li>
						<li>
							<a href="layout-right-sidebar.html">
								<span class="title">Right Sidebar</span>
							</a>
						</li>
						<li>
							<a href="layout-both-menus-right-sidebar.html">
								<span class="title">Both Menus (Right Sidebar)</span>
							</a>
						</li>
						<li class="has-sub">
							<a href="layout-page-transition-fade.html">
								<span class="title">Page Enter Transitions</span>
							</a>
							<ul>
								<li>
									<a href="layout-page-transition-fade.html">
										<span class="title">Fade Scale</span>
									</a>
								</li>
								<li>
									<a href="layout-page-transition-left-in.html">
										<span class="title">Left In</span>
									</a>
								</li>
								<li>
									<a href="layout-page-transition-right-in.html">
										<span class="title">Right In</span>
									</a>
								</li>
								<li>
									<a href="layout-page-transition-fade-only.html">
										<span class="title">Fade Only</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="layout-boxed.html">
								<span class="title">Boxed Layout</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="index.html" target="_blank">
						<i class="entypo-monitor"></i>
						<span class="title">Frontend</span>
					</a>
				</li>
				<li class="has-sub">
					<a href="ui-panels.html">
						<i class="entypo-newspaper"></i>
						<span class="title">UI Elements</span>
					</a>
					<ul>
						<li>
							<a href="ui-panels.html">
								<span class="title">Panels</span>
							</a>
						</li>
						<li>
							<a href="ui-tiles.html">
								<span class="title">Tiles</span>
							</a>
						</li>
						<li>
							<a href="forms-buttons.html">
								<span class="title">Buttons</span>
							</a>
						</li>
						<li>
							<a href="ui-typography.html">
								<span class="title">Typography</span>
							</a>
						</li>
						<li>
							<a href="ui-tabs-accordions.html">
								<span class="title">Tabs &amp; Accordions</span>
							</a>
						</li>
						<li>
							<a href="ui-tooltips-popovers.html">
								<span class="title">Tooltips &amp; Popovers</span>
							</a>
						</li>
						<li>
							<a href="ui-navbars.html">
								<span class="title">Navbars</span>
							</a>
						</li>
						<li>
							<a href="ui-breadcrumbs.html">
								<span class="title">Breadcrumbs</span>
							</a>
						</li>
						<li>
							<a href="ui-badges-labels.html">
								<span class="title">Badges &amp; Labels</span>
							</a>
						</li>
						<li>
							<a href="ui-progress-bars.html">
								<span class="title">Progress Bars</span>
							</a>
						</li>
						<li>
							<a href="ui-modals.html">
								<span class="title">Modals</span>
							</a>
						</li>
						<li>
							<a href="ui-blockquotes.html">
								<span class="title">Blockquotes</span>
							</a>
						</li>
						<li>
							<a href="ui-alerts.html">
								<span class="title">Alerts</span>
							</a>
						</li>
						<li>
							<a href="ui-pagination.html">
								<span class="title">Pagination</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="mailbox.html">
						<i class="entypo-mail"></i>
						<span class="title">Mailbox</span>
						<span class="badge badge-secondary">8</span>
					</a>
					<ul>
						<li>
							<a href="mailbox.html">
								<i class="entypo-inbox"></i>
								<span class="title">Inbox</span>
							</a>
						</li>
						<li>
							<a href="mailbox-compose.html">
								<i class="entypo-pencil"></i>
								<span class="title">Compose Message</span>
							</a>
						</li>
						<li>
							<a href="mailbox-message.html">
								<i class="entypo-attach"></i>
								<span class="title">View Message</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="forms-main.html">
						<i class="entypo-doc-text"></i>
						<span class="title">Forms</span>
					</a>
					<ul>
						<li>
							<a href="forms-main.html">
								<span class="title">Basic Elements</span>
							</a>
						</li>
						<li>
							<a href="forms-advanced.html">
								<span class="title">Advanced Plugins</span>
							</a>
						</li>
						<li>
							<a href="forms-wizard.html">
								<span class="title">Form Wizard</span>
							</a>
						</li>
						<li>
							<a href="forms-validation.html">
								<span class="title">Data Validation</span>
							</a>
						</li>
						<li>
							<a href="forms-masks.html">
								<span class="title">Input Masks</span>
							</a>
						</li>
						<li>
							<a href="forms-sliders.html">
								<span class="title">Sliders</span>
							</a>
						</li>
						<li>
							<a href="forms-file-upload.html">
								<span class="title">File Upload</span>
							</a>
						</li>
						<li>
							<a href="forms-wysiwyg.html">
								<span class="title">Editors</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="has-sub">
					<a href="tables-main.html">
						<i class="entypo-window"></i>
						<span class="title">Tables</span>
					</a>
					<ul>
						<li>
							<a href="tables-main.html">
								<span class="title">Basic Tables</span>
							</a>
						</li>
						<li>
							<a href="tables-datatable.html">
								<span class="title">Data Tables</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="opened active has-sub">
					<a href="extra-icons.html">
						<i class="entypo-bag"></i>
						<span class="title">Extra</span>
						<span class="badge badge-info badge-roundless">New Items</span>
					</a>
					<ul class="visible">
						<li class="has-sub">
							<a href="extra-icons.html">
								<span class="title">Icons</span>
								<span class="badge badge-success">3</span>
							</a>
							<ul>
								<li>
									<a href="extra-icons.html">
										<span class="title">Font Awesome</span>
									</a>
								</li>
								<li>
									<a href="extra-icons-entypo.html">
										<span class="title">Entypo</span>
									</a>
								</li>
								<li>
									<a href="extra-icons-glyphicons.html">
										<span class="title">Glyph Icons</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="extra-portlets.html">
								<span class="title">Portlets</span>
							</a>
						</li>
						<li class="has-sub">
							<a href="extra-google-maps.html">
								<span class="title">Maps</span>
							</a>
							<ul>
								<li>
									<a href="extra-google-maps.html">
										<span class="title">Google Maps</span>
									</a>
								</li>
								<li>
									<a href="extra-vector-maps.html">
										<span class="title">Vector Maps</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="extra-chat-api.html">
								<span class="title">Chat API</span>
							</a>
						</li>
						<li>
							<a href="extra-calendar.html">
								<span class="title">Calendar</span>
							</a>
						</li>
						<li>
							<a href="extra-calendar-2.html">
								<span class="title">Calendar 2</span>
								<span class="badge badge-secondary badge-roundless">New</span>
							</a>
						</li>
						<li>
							<a href="extra-notes.html">
								<span class="title">Notes</span>
							</a>
						</li>
						<li>
							<a href="extra-lockscreen.html">
								<span class="title">Lockscreen</span>
							</a>
						</li>
						<li>
							<a href="extra-login.html">
								<span class="title">Login</span>
							</a>
						</li>
						<li>
							<a href="extra-register.html">
								<span class="title">Register</span>
							</a>
						</li>
						<li>
							<a href="extra-invoice.html">
								<span class="title">Invoice</span>
							</a>
						</li>
						<li class="has-sub">
							<a href="extra-gallery.html">
								<span class="title">Gallery</span>
							</a>
							<ul>
								<li>
									<a href="extra-gallery.html">
										<span class="title">Albums</span>
									</a>
								</li>
								<li>
									<a href="extra-gallery-single.html">
										<span class="title">Single Album</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="extra-members.html">
								<span class="title">Members</span>
							</a>
						</li>
						<li class="active">
							<a href="extra-profile.html">
								<span class="title">Profile</span>
							</a>
						</li>
						<li>
							<a href="extra-404.html">
								<span class="title">404 Page</span>
							</a>
						</li>
						<li>
							<a href="extra-blank-page.html">
								<span class="title">Blank Page</span>
							</a>
						</li>
						<li>
							<a href="extra-timeline.html">
								<span class="title">Timeline</span>
							</a>
						</li>
						<li>
							<a href="extra-comments.html">
								<span class="title">Comments</span>
							</a>
						</li>
						<li>
							<a href="extra-timeline-centered.html">
								<span class="title">Timeline Centered</span>
							</a>
						</li>
						<li>
							<a href="extra-tocify.html">
								<span class="title">Tocify</span>
							</a>
						</li>
						<li>
							<a href="ui-notifications.html">
								<span class="title">Notifications</span>
							</a>
						</li>
						<li>
							<a href="extra-new-post.html">
								<span class="title">New Post</span>
							</a>
						</li>
						<li>
							<a href="extra-settings.html">
								<span class="title">Settings</span>
							</a>
						</li>
						<li>
							<a href="extra-scrollbox.html">
								<span class="title">Scrollbox</span>
							</a>
						</li>
						<li>
							<a href="extra-image-crop.html">
								<span class="title">Image Crop</span>
							</a>
						</li>
						<li>
							<a href="extra-search.html">
								<span class="title">Search Page</span>
							</a>
						</li>
						<li>
							<a href="extra-language-selector.html">
								<span class="title">Language Selector</span>
							</a>
						</li>
						<li>
							<a href="extra-nestable.html">
								<span class="title">Nestable Lists</span>
							</a>
						</li>
						<li>
							<a href="extra-file-tree.html">
								<span class="title">File Tree</span>
							</a>
						</li>
						<li>
							<a href="extra-load-progress.html">
								<span class="title">Load Progress</span>
							</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="charts.html">
						<i class="entypo-chart-bar"></i>
						<span class="title">Charts</span>
					</a>
				</li>
				<li class="has-sub">
					<a href="#">
						<i class="entypo-flow-tree"></i>
						<span class="title">Menu Levels</span>
					</a>
					<ul>
						<li>
							<a href="#">
								<i class="entypo-flow-line"></i>
								<span class="title">Menu Level 1.1</span>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="entypo-flow-line"></i>
								<span class="title">Menu Level 1.2</span>
							</a>
						</li>
						<li class="has-sub">
							<a href="#">
								<i class="entypo-flow-line"></i>
								<span class="title">Menu Level 1.3</span>
							</a>
							<ul>
								<li>
									<a href="#">
										<i class="entypo-flow-parallel"></i>
										<span class="title">Menu Level 2.1</span>
									</a>
								</li>
								<li class="has-sub">
									<a href="#">
										<i class="entypo-flow-parallel"></i>
										<span class="title">Menu Level 2.2</span>
									</a>
									<ul>
										<li class="has-sub">
											<a href="#">
												<i class="entypo-flow-cascade"></i>
												<span class="title">Menu Level 3.1</span>
											</a>
											<ul>
												<li>
													<a href="#">
														<i class="entypo-flow-branch"></i>
														<span class="title">Menu Level 4.1</span>
													</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">
												<i class="entypo-flow-cascade"></i>
												<span class="title">Menu Level 3.2</span>
											</a>
										</li>
									</ul>
								</li>
								<li>
									<a href="#">
										<i class="entypo-flow-parallel"></i>
										<span class="title">Menu Level 2.3</span>
									</a>
								</li>
							</ul>
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
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					<li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="../../assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
							John Henderson
						</a>
		
						<ul class="dropdown-menu">
		
							<!-- Reverse Caret -->
							<li class="caret"></li>
		
							<!-- Profile sub-links -->
							<li>
								<a href="extra-timeline.html">
									<i class="entypo-user"></i>
									Edit Profile
								</a>
							</li>
		
							<li>
								<a href="mailbox.html">
									<i class="entypo-mail"></i>
									Inbox
								</a>
							</li>
		
							<li>
								<a href="extra-calendar.html">
									<i class="entypo-calendar"></i>
									Calendar
								</a>
							</li>
		
							<li>
								<a href="#">
									<i class="entypo-clipboard"></i>
									Tasks
								</a>
							</li>
						</ul>
					</li>
		
				</ul>
				

		
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
					<!-- Language Selector -->
					<li class="dropdown language-selector">
		
						Language: &nbsp;
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							<img src="../../assets/images/flags/flag-uk.png" width="16" height="16" />
						</a>
		
						<ul class="dropdown-menu pull-right">
							<li>
								<a href="#">
									<img src="../../assets/images/flags/flag-de.png" width="16" height="16" />
									<span>Deutsch</span>
								</a>
							</li>
							<li class="active">
								<a href="#">
									<img src="../../assets/images/flags/flag-uk.png" width="16" height="16" />
									<span>English</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../../assets/images/flags/flag-fr.png" width="16" height="16" />
									<span>François</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../../assets/images/flags/flag-al.png" width="16" height="16" />
									<span>Shqip</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../../assets/images/flags/flag-es.png" width="16" height="16" />
									<span>Español</span>
								</a>
							</li>
						</ul>
		
					</li>
		
					<li class="sep"></li>
		
					
					<li>
						<a href="#" data-toggle="chat" data-collapse-sidebar="1">
							<i class="entypo-chat"></i>
							Chat
		
							<span class="badge badge-success chat-notifications-badge is-hidden">0</span>
						</a>
					</li>
		
					<li class="sep"></li>
		
					<li>
						<a href="extra-login.html">
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
		<footer class="main">
			
			&copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>
		
		</footer>
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