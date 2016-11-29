<?php
require_once ("../../vendor/autoload.php");
session_start();
use App\Employee\Employee;
use App\Message\Message;
use App\Utility\Utility;

$objEmployee = new Employee();
$allData = $objEmployee->index();
$allData1 = $objEmployee->salarysheet();
$recordSet = $objEmployee->index("OBJ");
$recordSet1 = $objEmployee->salarysheet("OBJ");

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

    <title>Neon | Profile</title>

    <link rel="stylesheet" href="../../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="../../assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/core.css">
    <link rel="stylesheet" href="../../assets/css/theme.css">
    <link rel="stylesheet" href="../../assets/css/forms.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <link rel="stylesheet" href="../../assets/css/sabuj.css">

    <script src="../../assets/js/jquery-1.11.3.min.js"></script>
    <script src="../../assets/js/countries.js"></script>
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
                    <a href="index.html">
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
        <div class="col-sm-12"><h1>Add New Employee</h1></div>

        <!--personam information starts here-->
        <form role="form" action="store.php" method="post" class="form-horizontal form-groups-bordered" enctype="multipart/form-data" >
            <div class="col-md-6">
                <div class="panel panel-gradient" data-collapsed="0">
    
                    <!-- panel head -->
                    <div class="panel-heading">
                        <div class="panel-title"><h2>Personal Information</h2></div>
    
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>
    
                    <!-- panel body -->
                    <div class="panel-body">
    
    
                            <div class="panel-body">
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">First Name</label>
    
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="field-1" name="first_name" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">Last Name</label>
    
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="field-1" name="last_name" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
    
                                        <label class="col-sm-4 control-label">Birth Date</label>
                                        <div class="col-sm-8">
                                            <div class="input-group">
                                                <input type="text" name="birthday" class="form-control datepicker" data-start-view="2">
                                                <div class="input-group-addon">
                                                    <a href="#"><i class="entypo-calendar"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">Gender</label>
                                    <div class="col-sm-8">
                                        <select name="gender"  class="selectboxit" data-first-option="false">
                                            <option>Select gender</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">Marital Status</label>
    
                                    <div class="col-sm-8">
                                        <select name="marital_status" class="selectboxit" data-first-option="false">
                                            <option>Select one</option>
                                            <option value="Married">Married</option>
                                            <option value="Unmarried">Unmarried</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">Nationality</label>

                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="field-1" name="nationality" placeholder="Nationality">
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">NID No</label>
    
                                    <div class="col-sm-8">
                                        <input type="text" name="nid" class="form-control" id="field-1" placeholder="National ID card no">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Profile Picture</label>
                                    <div class="col-sm-5">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 300px; height: 30px;" data-trigger="fileinput">
                                                <img src="http://placehold.it/500x30" alt="nothing">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 300px; max-height: 300px"></div>
                                            <div>
										<span class="btn btn-white btn-file">
											<span class="fileinput-new">Select image</span>
											<span class="fileinput-exists">Change</span>
											<input type="file" name="image" >
										</span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
    
                            </div>
    
                    </div>
    
                </div>
    
            </div>  <!--personal information ends hee-->
    
    
            <!--contact information starts hee-->
            <div class="col-md-6">
                <div class="panel panel-gradient" data-collapsed="0">
    
                    <!-- panel head -->
                    <div class="panel-heading">
                        <div class="panel-title"><h2>Contact Information</h2></div>
    
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>
    
                    <!-- panel body -->
                    <div class="panel-body">
    
    
                            <div class="panel-body">
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">Phone Number</label>
    
                                    <div class="col-sm-8">
                                        <input type="text" name="phone_number" class="form-control" id="field-1" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">Email Address</label>
    
                                    <div class="col-sm-8">
                                        <input type="text" name="email" class="form-control" id="field-1" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">Address Line #1</label>
    
                                    <div class="col-sm-8">
                                        <input type="text" name="address1" class="form-control" id="field-1" placeholder="Address Line #1">
                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">Address Line #2</label>
    
                                    <div class="col-sm-8">
                                        <input type="text" name="address2" class="form-control" id="field-1" placeholder="Address Line #2">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label class="control-label col-sm-4" for="country">Select Country:</label>

                                    <div class="col-sm-8">
                                        <select id="country" name ="country"></select>

                                        <select name ="city" id ="state"></select>
                                        <script language="javascript">
                                            populateCountries("country", "state");
                                        </script>

                                    </div>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">Zip/Post Code</label>
    
                                    <div class="col-sm-8">
                                        <input type="text" name="post_code" class="form-control" id="field-1" placeholder="Zip/Post Code">
                                    </div>
                                </div>
    
                            </div>
    
    
                    </div>
    
                </div>
    
            </div><!---contact information ends here-->
    
            <!--Job information starts hee-->
            <div class="col-md-12">
                <div class="panel panel-gradient" data-collapsed="0">
    
                    <!-- panel head -->
                    <div class="panel-heading">
                        <div class="panel-title"><h2>Job Information</h2></div>
    
                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>
    
                    <!-- panel body -->
                    <div class="panel-body">
                        <div class="panel-body">
                            <div class="form-group col-sm-8">
                                <label for="field-1" class="col-sm-5 control-label">Employee ID</label>
    
                                <div class="col-sm-7">
                                    <input type="text" name="employee_id" class="form-control" id="field-1" placeholder="Employee ID">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel-body">
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">Join Date</label>
    
                                    <div class="col-sm-8">
                                        <input type="date" name="join_date" class="form-control" id="field-1">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group col-sm-12">
                                <label for="field-1" class="col-sm-4 control-label">Role</label>
                                <div class="col-sm-8">
                                    <select name="role" class="selectboxit" data-first-option="false">
                                        <option>Select one</option>
                                        <option value="CEO">CEO</option>
                                        <option value="Manager">Manager</option>
                                        <option value="Ass. Manager">Ass. Manager</option>
                                        <option value="Executive">Executive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group col-sm-12">
                                <label for="field-1" class="col-sm-4 control-label">Salary</label>
                                <div class="col-sm-8">
                                    <select name="salary" class="selectboxit" data-first-option="false">
                                        <option>Select one</option>
                                        <?php foreach($allData1 as $data) {?>
                                        <option value="<?php  echo $data['amount']?>"><?php echo $data['title']?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="field-1" class="col-sm-4 control-label">Department</label>
                            <div class="col-sm-8">
                                <select name="dept" class="selectboxit" data-first-option="false">
                                    <option>Select one</option>
                                    <option value="Administration">Administration</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Marketing">Marketing</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!---Job information ends here-->

            <!--login information starts hee-->
            <div class="col-md-12">
                <div class="panel panel-gradient" data-collapsed="0">

                    <!-- panel head -->
                    <div class="panel-heading">
                        <div class="panel-title"><h2>Login Information</h2></div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>

                    <!-- panel body -->
                    <div class="panel-body">
                        <div class="panel-body">
                            <div class="form-group col-sm-8">
                                <label for="field-1" class="col-sm-5 control-label">Password</label>

                                <div class="col-sm-7">
                                    <input type="password" name="password" class="form-control" id="field-1" placeholder="Password here">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!---login information ends here-->
    
            <!--social information starts hee-->
            <div class="col-md-12">
                <div class="panel panel-gradient" data-collapsed="0">

                    <!-- panel head -->
                    <div class="panel-heading">
                        <div class="panel-title"><h2>Social Links</h2></div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>

                    <!-- panel body -->
                    <div class="panel-body">

                        <div class="col-sm-6">
                            <div class="panel-body">
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-2 control-label">Facebook</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="fb" class="form-control" id="field-1" placeholder="Placeholder">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="panel-body">
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-2 control-label">Twitter</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="twitter" class="form-control" id="field-1" placeholder="Placeholder">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel-body">
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-2 control-label">Linkedin</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="linkedin" class="form-control" id="field-1" placeholder="Placeholder">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel-body">
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-2 control-label">Google+</label>

                                    <div class="col-sm-10">
                                        <input type="text" name="googleplus" class="form-control" id="field-1" placeholder="Placeholder">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <input type="submit" value="submit">
            </div>

            <!---social information ends here-->

        </form>




        <!-- Footer -->
        <footer class="main col-lg-12">

            &copy; 2015 <strong>Neon</strong> Admin Theme by <a href="http://laborator.co" target="_blank">Laborator</a>

        </footer>
    </div>



        <!-- Imported styles on this page -->
        <link rel="stylesheet" href="../../assets/js/selectboxit/jquery.selectBoxIt.css">


        <!-- Bottom scripts (common) -->
        <script src="../../assets/js/gsap/TweenMax.min.js"></script>
        <script src="../../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
        <script src="../../assets/js/bootstrap.js"></script>
        <script src="../../assets/js/joinable.js"></script>
        <script src="../../assets/js/resizeable.js"></script>
        <script src="../../assets/js/sabuj-api.js"></script>


        <!-- Imported scripts on this page -->
        <script src="../../assets/js/fileinput.js"></script>
        <script src="../../assets/js/dropzone/dropzone.js"></script>
        <script src="../../assets/js/jquery.bootstrap.wizard.min.js"></script>
        <script src="../../assets/js/jquery.validate.min.js"></script>
        <script src="../../assets/js/jquery.inputmask.bundle.js"></script>
        <script src="../../assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
        <script src="../../assets/js/bootstrap-datepicker.js"></script>
        <script src="../../assets/js/bootstrap-switch.min.js"></script>
        <script src="../../assets/js/jquery.multi-select.js"></script>
        <script src="../../assets/js/neon-chat.js"></script>


        <!-- JavaScripts initializations and stuff -->
        <script src="../../assets/js/custom.js"></script>


        <!-- Demo Settings -->
        <script src="../../assets/js/neon-demo.js"></script>

</body>
</html>