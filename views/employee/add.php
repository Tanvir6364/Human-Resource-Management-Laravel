<?php
require_once ("../../vendor/autoload.php");
session_start();
use App\Employee\Employee;
use App\Message\Message;
use App\Utility\Utility;

$objEmployee = new Employee();
$allData = $objEmployee->index();
$allData1 = $objEmployee->salarysheet();
$allData2 = $objEmployee->department();
$recordSet = $objEmployee->index("OBJ");
$recordSet1 = $objEmployee->salarysheet("OBJ");
$recordSet2 = $objEmployee->department("OBJ");

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

    <title>Add New Employee | বৃত্ত</title>

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
                        <li class="active">
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
                                        <input type="text" name="email" class="form-control" id="field-1" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="'example@example.com'" placeholder="Email Address">
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
                                    <?php foreach($allData2 as $data) {?>
                                        <option value="<?php  echo $data['dept']?>"><?php echo $data['dept']?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!---Job information ends here-->


            <!--login information starts hee-->
            <div class="col-md-12">
                <div class="panel panel-gradient" data-collapsed="0">

                    <!-- panel head -->
                    <div class="panel-heading">
                        <div class="panel-title"><h2>Employee Login Information</h2></div>

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

                        <div class="panel-body">
                            <div class="form-group col-sm-8">
                                <label for="field-1" class="col-sm-5 control-label">password</label>

                                <div class="col-sm-7">
                                    <input type="password" name="password" class="form-control" id="field-1" placeholder="Password for login">
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
                <input type="submit" class="btn btn-lg btn-primary" value="submit">
            </div>

            <!---social information ends here-->

        </form>




        <!-- Footer -->
        <div class="col-sm-12">
            <?php include '../../footer.php'; ?>
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