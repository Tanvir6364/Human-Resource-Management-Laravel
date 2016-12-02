<?php

include('../../vendor/autoload.php');
use App\Employee\Employee;
use App\Message\Message;
use App\Utility\Utility;
$obj = new Employee();
$someData = $obj->trash_list("OBJ");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Atomic Project By Mahmud Sabuj" />
    <meta name="author" content="Mahmud Sabuj" />

    <link rel="icon" href="../../assets/img/favicon.ico">

    <title>Hold Employees | বৃত্ত</title>

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
    <script src="../../assets/js/sabuj/me.js"></script>

    <!-- Imported scripts on this page -->
    <script src="../../assets/js/datatables/datatables.js"></script>
    <script src="../../assets/js/select2/select2.min.js"></script>
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="page-body">

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
                            <a href="../salary/index.php">
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
        <hr/>


        <script type="text/javascript">
            jQuery( document ).ready( function( $ ) {
                var $table1 = jQuery( '#table-1' );

                // Initialize DataTable
                $table1.DataTable( {
                    "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
                    "bStateSave": true
                });

                // Initalize Select Dropdown after DataTables is created
                $table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
                    minimumResultsForSearch: -1
                });
            } );
        </script>

        <table class="table table-bordered datatable" id="table-1">
            <thead>
            <tr>
                <th class="col-lg-1">Employee ID</th>
                <th class="col-lg-3">Full Name</th>
                <th class="col-lg-2">Phone Number</th>
                <th class="col-lg-1">Role</th>
                <th class="col-lg-2">Department</th>
                <th class="col-lg-3">action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($someData as $oneData){?>
            <tr class="odd gradeX">
                <td><?php echo $oneData->employee_id?></td>
                <td><?php echo $oneData->first_name." ".$oneData->last_name?></td>
                <td><?php echo $oneData->phone_number?></td>
                <td><?php echo $oneData->role?></td>
                <td><?php echo $oneData->dept?></td>
                <td>
                    <a href="recover.php?id=<?php echo $oneData->id?>" class="btn btn-success btn-md btn-icon icon-left" role="button">
                        <i class="entypo-user"></i>
                        ReActive
                    </a>

                    <a href="delete.php?id=<?php echo $oneData->id?>" class="btn btn-danger btn-md btn-icon icon-left" role="button">
                        <i class="entypo-cancel"></i>
                        Delete
                    </a>
                </td>
                <?php }?>
            </tr>


            </tbody>
            <tfoot>
            <tr>
                <th class="col-lg-1">Employee ID</th>
                <th class="col-lg-3">Full Name</th>
                <th class="col-lg-2">Phone Number</th>
                <th class="col-lg-1">Role</th>
                <th class="col-lg-2">Department</th>
                <th class="col-lg-3">Action</th>
            </tr>
            </tfoot>
        </table>



        <!-------------------------------------------
        <script type="text/javascript">
            jQuery( document ).ready( function( $ ) {
                var $table3 = jQuery("#table-3");

                var table3 = $table3.DataTable( {
                    "aLengthMenu": [[5, 10, 20, 30, 40, 50, -1], [5, 10, 20, 30, 40, 50, "All"]]
                } );

                // Initalize Select Dropdown after DataTables is created
                $table3.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
                    minimumResultsForSearch: -1
                });

                // Setup - add a text input to each footer cell
                $( '#table-3 tfoot th' ).each( function () {
                    var title = $('#table-3 thead th').eq( $(this).index() ).text();
                    $(this).html( '<input type="text" class="form-control" placeholder="Search ' + title + '" />' );
                } );

                // Apply the search
                table3.columns().every( function () {
                    var that = this;

                    $( 'input', this.footer() ).on( 'keyup change', function () {
                        if ( that.search() !== this.value ) {
                            that
                                .search( this.value )
                                .draw();
                        }
                    } );
                } );
            } );
        </script>

        <table>
            <tr>
                <td width="500">
                    <h2>Employee List</h2>
                </td>
                <td width="450">
                    <a href="pdf.php" class="btn btn-primary" role="button">Download as PDF</a>
                    <a href="xl.php" class="btn btn-primary" role="button">Download as XL</a>
                    <a href="email.php?list=1" class="btn btn-primary" role="button">Email to friend</a>
                </td>
            </tr>
        </table>

        <table class="table table-bordered datatable" id="table-3">
            <thead>
            <tr class="replace-inputs">
                <th class="col-lg-1">Employee ID</th>
                <th class="col-lg-3">Full Name</th>
                <th class="col-lg-2">Phone Number</th>
                <th class="col-lg-2">Role</th>
                <th class="col-lg-2">Department</th>
                <th class="col-lg-3">action</th>
            </tr>
            </thead>
            <tbody>

            <tr class="odd gradeX">
                <?php foreach($someData as $oneData){?>
            <tr class="odd gradeX">
                <td><?php echo $oneData->employee_id;?></td>
                <td><?php echo $oneData->first_name." ".$oneData->last_name;?></td>
                <td><?php echo $oneData->phone_number;?></td>
                <td><?php echo $oneData->role;?></td>
                <td><?php echo $oneData->dept;?></td>
                <td>
                    <a href="profile.php?id=<?php echo $oneData->id?>" class="btn btn-success btn-md btn-icon icon-left" role="button">
                        <i class="entypo-user"></i>
                        View
                    </a>

                    <a href="recover.php?id=<?php echo $oneData->id?>" class="btn btn-danger btn-md btn-icon icon-left" role="button">
                        <i class="entypo-cancel"></i>
                        recover
                    </a>
                    <a href="delete.php?id=<?php echo $oneData->id?>" class="btn btn-danger btn-md btn-icon icon-left" role="button">
                        <i class="entypo-cancel"></i>
                        Delete
                    </a>
                </td>

            </tr>
            <?php }?>


            </tbody>
            <tfoot>
            <tr>
                <th class="col-lg-1">Employee ID</th>
                <th class="col-lg-2">Full Name</th>
                <th class="col-lg-3">Phone Number</th>
                <th class="col-lg-2">Role</th>
                <th class="col-lg-2">Department</th>
                <th class="col-lg-3">Action</th>
            </tr>
            </tfoot>
        </table>
-->


    </div>
</div>


<!-- Modal 1 (Basic)-->
<div class="modal fade" id="modal-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="well well-sm">
                    <h4>Please select your city name.</h4>
                </div>
            </div>

            <div class="modal-body">
                <form id="rootwizard-2" method="post" action="storeindex.php" class="form-wizard validate">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab2-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="full_name">User Name</label>
                                        <input class="form-control" name="username" id="full_name" data-validate="required" placeholder="Your Name" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-3 control-label">City</label>

                                    <div class="col-sm-6">
                                        <select name="city" class="col-sm-12" style="height: 31px;border-radius: 0px;">
                                            <option>Select city</option>
                                            <option value="Dhaka">Dhaka</option>
                                            <option value="Chittagong">Chittagong</option>
                                            <option value="Khulna">Khulna</option>
                                            <option value="Noakhali">Noakhali</option>
                                            <option value="Comilla">Comilla</option>
                                        </select>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fa fa-bookmark"></i> Save </button>
                            <a type="submit" class="btn btn-info"><i class="fa fa-clock-o" aria-hidden="true"></i> Reset </a>
                            <a data-dismiss="modal" type="button" class="btn btn-orange pull-right"><i class="fa fa-arrow-down"></i> Close </a>
                        </div>
                    </div>
                </form>
            </div>

        </div>

        <!-- Footer -->
        <?php include '../../footer.php'; ?>
    </div>
</div>



<!-- Imported styles on this page -->
<link rel="stylesheet" href="../../assets/js/datatables/datatables.css">
<link rel="stylesheet" href="../../assets/js/select2/select2-bootstrap.css">
<link rel="stylesheet" href="../../assets/js/select2/select2.css">

<!-- Bottom scripts (common) -->
<script src="../../assets/js/gsap/TweenMax.min.js"></script>
<script src="../../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/joinable.js"></script>
<script src="../../assets/js/resizeable.js"></script>
<script src="../../assets/js/atomic-api.js"></script>





<!-- JavaScripts initializations and stuff -->
<script src="../../assets/js/custom.js"></script>




</body>
</html>