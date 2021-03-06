<?php

include('../../vendor/autoload.php');
use App\Employee\Employee;
use App\User\Auth;
use App\Message\Message;
use App\Utility\Utility;
$obj = new Employee();
$count=$obj->countEmployee();
$count1=$obj->countDept();




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

    <title>Neon | Dashboard</title>

    <link rel="stylesheet" href="../../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="../../assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/core.css">
    <link rel="stylesheet" href="../../assets/css/theme.css">
    <link rel="stylesheet" href="../../assets/css/forms.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">

    <script src="../../assets/js/jquery-1.11.3.min.js"></script>

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
                    <a href="../../index.php">
                        <i class="entypo-gauge"></i>
                        <span class="title">Employees</span>
                    </a>
                    <ul>
                        <li>
                            <a href="../../views/employee">
                                <span class="title">View list</span>
                            </a>
                        </li>
                        <li>
                            <a href="../../views/employee/add.php">
                                <span class="title">Add New</span>
                            </a>
                        </li>
                        <li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a href="../../index.php">
                        <i class="entypo-gauge"></i>
                        <span class="title">Job Opening</span>
                    </a>
                    <ul>
                        <li>
                            <a href="../../index.php">
                                <span class="title">View All</span>
                            </a>
                        </li>
                        <li>
                            <a href="../../dashboard-2.html">
                                <span class="title">Add New</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a href="../../index.php">
                        <i class="entypo-gauge"></i>
                        <span class="title">Salary</span>
                    </a>
                    <ul>
                        <li>
                            <a href="../salary/index.php">
                                <span class="title">View Grade</span>
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
                    <a href="../../index.php">
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

        <?php include '../../header.php'; ?>

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



    <form id="rootwizard-2" method="post" action="store.php" class="form-wizard validate">
        <div class="tab-content">
            <div class="panel-body">
                <div class="form-group col-sm-6">
                    <label for="field-1" class="col-sm-4 control-label">Depertment Name</label>

                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="field-1" name="title" placeholder="Enter Dept Name">
                    </div>
                </div>

            </div>


            <div class="form-group">
                <button type="submit" value="submit" class="btn btn-success"><i class="fa fa-bookmark"></i> Save </button>
                <button type="button" class="btn btn-orange pull-right" data-dismiss="modal"><i class="fa fa-arrow-down"></i> Close </button>
            </div>
        </div>
    </form>


        <!-- Footer -->
        <?php include '../../footer.php'; ?>
    </div>



    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="../../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="../../assets/js/rickshaw/rickshaw.min.css">

    <!-- Bottom scripts (common) -->
    <script src="../../assets/js/gsap/TweenMax.min.js"></script>
    <script src="../../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
    <script src="../../assets/js/bootstrap.js"></script>
    <script src="../../assets/js/joinable.js"></script>
    <script src="../../assets/js/resizeable.js"></script>
    <script src="../../assets/js/sabuj-api.js"></script>
    <script src="../../assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


    <!-- Imported scripts on this page -->
    <script src="../../assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
    <script src="../../assets/js/jquery.sparkline.min.js"></script>
    <script src="../../assets/js/rickshaw/vendor/d3.v3.js"></script>
    <script src="../../assets/js/rickshaw/rickshaw.min.js"></script>
    <script src="../../assets/js/raphael-min.js"></script>
    <script src="../../assets/js/morris.min.js"></script>
    <script src="../../assets/js/toastr.js"></script>
    <script src="../../assets/js/neon-chat.js"></script>


    <!-- JavaScripts initializations and stuff -->
    <script src="../../assets/js/custom.js"></script>


    <!-- Demo Settings -->
    <script src="../../assets/js/neon-demo.js"></script>

</body>
</html>