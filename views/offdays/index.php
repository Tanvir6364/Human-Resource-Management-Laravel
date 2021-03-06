<?php
if(!isset($_SESSION) )session_start();

require_once("../../vendor/autoload.php");

use App\OffDays\OffDays;
use App\User\Auth;
use App\Message\Message;
use App\Utility\Utility;

if(!isset( $_SESSION)) session_start();
echo Message::message();

$obj = new OffDays();
$obj->setData($_SESSION);
$allData1 = $obj->index("obj");


$auth= new Auth();
$status = $auth->prepare($_SESSION)->logged_in();
if(!$status) {
    Utility::redirect('../../login.php');
    return;
}

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

    <title>Off Days | বৃত্ত</title>

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
    <!--[if lt IE 9]>
    <script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

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

                <li class="has-sub">
                    <a href="index.php">
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

                <li class="opened has-sub">
                    <a href="index.php">
                        <i class="entypo-gauge"></i>
                        <span class="title">Vacations</span>
                    </a>
                    <ul>
                        <li class="active">
                            <a href="index.php">
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

                <ul class="user-info pull-left pull-none-xsm">

                    <!-- Profile Info -->
                    <li class="profile-info dropdown"><!-- add class "pull-right" if you want to place this from right -->

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="../../assets/images/thumb-1@2x.png" alt="" class="img-circle" width="44" />
                            John Henderson
                        </a>


                    </li>

                </ul>



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

        <div class="col-sm-8 col-sm-offset-2" style="text-align: right">
            <a href="javascript:;" onclick="jQuery('#modal-1').modal('show');" class="btn btn-success btn-lg btn-icon icon-left">
                <i class="entypo-list-add"></i>
                Add New Item
            </a>
        </div>
        <!--personal information starts here-->
        <form role="form" action="../offdays/delete.php" method="post" enctype="multipart/form-data" class="form-horizontal form-groups-bordered">
            <div class="col-md-8 col-sm-offset-2">
                <div class="panel panel-gradient" data-collapsed="0">

                    <!-- panel head -->
                    <div class="panel-heading">
                        <div class="panel-title"><h2> Update Off Days Sheet</h2></div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                        </div>
                    </div>


                    <!-- panel body -->
                    <div class="panel-body">


                        <div class="panel-body">

                            <table class="table table-bordered datatable" id="table-1">
                                <thead>
                                <tr>
                                    <th class="col-lg-1">Serial</th>
                                    <th class="col-lg-3">Off Date</th>
                                    <th class="col-lg-3">Details</th>
                                    <th class="col-lg-3">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $serial=1; foreach($allData1 as $data){?>
                                <tr class="odd gradeX">
                                    <td><?php echo $serial++ ?></td>
                                    <td><?php echo $data->date?></td>
                                    <td><?php echo $data->details?></td>
                                    <td>
                                        <a href="delete.php?id=<?php echo $data->id?>" class="btn btn-danger btn-md btn-icon icon-left" role="button">
                                            <i class="entypo-cancel"></i>
                                            Delete
                                        </a>
                                    </td>
                                    <?php }?>
                                </tr>


                                </tbody>
                                <tfoot>
                                <tr>
                                    <th class="col-lg-1">Serial</th>
                                    <th class="col-lg-3">Off Date</th>
                                    <th class="col-lg-3">Details</th>
                                    <th class="col-lg-3">Action</th>
                                </tfoot>
                            </table>



                        </div>
                    </div>
                </div>
            </div>  <!--personal information ends hee-->

        </form>





        <!-- Footer -->
        <footer class="main col-lg-12">

            <?php include '../../footer.php'; ?>

        </footer>
    </div>



    <!-- Modal 1 (add new from index.php)-->
    <div class="modal fade" id="modal-1">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="well well-sm">
                        <h4>Please enter department details.</h4>
                    </div>
                </div>

                <div class="modal-body">
                    <form id="rootwizard-2" method="post" action="store.php" class="form-wizard validate">
                        <div class="tab-content">
                            <div class="panel-body">
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">Date</label>

                                    <div class="col-sm-8">
                                        <input type="date" class="form-control" id="field-1" name="date" placeholder="Enter Department Name">
                                    </div>
                                </div>

                            </div>

                            <div class="panel-body">
                                <div class="form-group col-sm-12">
                                    <label for="field-1" class="col-sm-4 control-label">Details</label>

                                    <div class="col-sm-8">
                                        <textarea name="details" id="details" cols="34" rows="5"></textarea>

                                    </div>
                                </div>

                            </div>

                            <div class="form-group">
                                <button type="submit" value="submit" class="btn btn-success"><i class="fa fa-bookmark"></i> Save </button>
                                <button type="button" class="btn btn-orange pull-right" data-dismiss="modal"><i class="fa fa-arrow-down"></i> Close </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
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
<script>
    $('#message').show().delay(1200).fadeOut();
</script>