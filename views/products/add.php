

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Atomic Project By Mahmud Sabuj" />
    <meta name="author" content="Mahmud Sabuj" />

    <link rel="icon" href="../../assets/img/favicon.ico">

    <title>Book Title List View | Atomic Project</title>

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
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea' });</script>
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
                        <h1>Home</h1>
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
                <li class="active opened active has-sub">
                    <a href="index.php">
                        <i class="entypo-gauge"></i>
                        <span class="title">Dashboard</span>
                    </a>
                    <ul class="visible">
                        <li class="active">
                            <a href="index.php">
                                <span class="title">Dashboard 1</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-2.html">
                                <span class="title">Dashboard 2</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="has-sub">
                    <a href="index.php">
                        <i class="entypo-gauge"></i>
                        <span class="title">Products</span>
                    </a>
                    <ul>
                        <li>
                            <a href="index.php">
                                <span class="title">View Products</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-2.html">
                                <span class="title">Add Products</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-2.html">
                                <span class="title">Categories</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="has-sub">
                    <a href="index.php">
                        <i class="entypo-gauge"></i>
                        <span class="title">Orders</span>
                    </a>
                    <ul>
                        <li>
                            <a href="index.php">
                                <span class="title">New Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-2.html">
                                <span class="title">On Hold</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-2.html">
                                <span class="title">Categories</span>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="has-sub">
                    <a href="index.php">
                        <i class="entypo-gauge"></i>
                        <span class="title">Users</span>
                    </a>
                    <ul>
                        <li>
                            <a href="index.php">
                                <span class="title">Admins</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-2.html">
                                <span class="title">Vendors</span>
                            </a>
                        </li>
                        <li>
                            <a href="dashboard-2.html">
                                <span class="title">Customers</span>
                            </a>
                        </li>

                    </ul>
                </li>
            </ul>

        </div>

    </div>

    <div class="main-content" style="background-color: rgb(241, 241, 241);">

        <div class="row" style="background-color: #fff !important; padding: 10px; margin: -20px -20px 0 -20px;">

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


                    <li class="sep"></li>

                    <li>
                        <a href="extra-login.html">
                            Log Out <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>

            </div>

        </div>

        <table class="col-sm-12" style="margin-bottom: 10px;">
            <tr>
                <td class="col-sm-6" style="font-size: 25px;color:#000">
                    Add New Product
                </td>
            </tr>
        </table>

        <form role="form" class="form-horizontal form-groups-bordered">
            <div class="col-sm-12">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-12" style="height: 39px;font-size: 20px;">
                                <input type="text" class="form-control producttitleadd" id="field-1" placeholder="Product Name Here...">
                            </div>
                        </div>
                    </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="" rows="20"></textarea>
                        </div>


<!--product option section-->
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h3>
                                               Product Options
                                            </h3>
                                        </div>

                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>

                                    <div class="panel-body no-padding">
                                        <div id="rickshaw-chart-demo" style="padding: 5px;">
                                            <div id="rickshaw-legend">
                                                <div class="row" style="background-color: #fff; padding: 5px">

                                                    <div class="col-md-12">

                                                        <div class="tabs-vertical-env">

                                                            <ul class="nav tabs-vertical"><!-- available classes "right-aligned" -->
                                                                <li class="active"><a href="#v-home" data-toggle="tab">General</a></li>
                                                                <li><a href="#v-profile" data-toggle="tab">Variation</a></li>
                                                            </ul>

                                                            <div class="tab-content">
                                                                <div class="tab-pane active" id="v-home">
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="field-1" class="col-sm-6 control-label" style="text-align: left">Regular Price (৳)</label>

                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="field-1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="field-1" class="col-sm-6 control-label" style="text-align: left">Discount Price (৳)</label>

                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="field-1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="field-1" class="col-sm-6 control-label" style="text-align: left">Product Code</label>

                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="field-1">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label for="field-1" class="col-sm-6 control-label" style="text-align: left">Stock Quantity</label>

                                                                            <div class="col-sm-6">
                                                                                <input type="text" class="form-control" id="field-1">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-6 control-label" style="text-align: left">product Type</label>
                                                                            <div class="col-sm-6">
                                                                                <select name="test" class="" data-first-option="false">
                                                                                    <option value="Physical">Physical</option>
                                                                                    <option value="Digital">Digital</option>
                                                                                </select>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane" id="v-profile">
                                                                    <!--start of product variation-->
                                                                    <div class="row">
                                                                        <div class="row">
                                                                            <div class="col-sm-12">
                                                                                <div class="panel panel-primary">
                                                                                    <div class="panel-body no-padding">
                                                                                        <div id="rickshaw-chart-demo" style="padding: 5px;">
                                                                                            <div id="rickshaw-legend">
                                                                                                <div class="form-group">
                                                                                                    <label class="col-sm-3 control-label" style="text-align: left">Color: </label>

                                                                                                    <div class="col-sm-8">

                                                                                                        <select name="test" class="select2" multiple>
                                                                                                            <option value="3" >Blue</option>
                                                                                                            <option value="2" >Red</option>
                                                                                                            <option value="5" >Black</option>
                                                                                                            <option value="5" >White</option>
                                                                                                            <option value="1" >Green</option>
                                                                                                            <option value="4" >Yellow</option>
                                                                                                        </select>

                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="form-group">
                                                                                                    <label for="field-1" class="col-sm-3 control-label" style="text-align: left">Size: </label>

                                                                                                    <div class="col-sm-8">

                                                                                                        <select name="test" class="select2" multiple>
                                                                                                            <option value="3" >S</option>
                                                                                                            <option value="3" >M</option>
                                                                                                            <option value="3" >L</option>
                                                                                                            <option value="2" >XL</option>
                                                                                                            <option value="5" >XXL</option>
                                                                                                            <option value="1" >XXXL</option>
                                                                                                        </select>

                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="form-group">
                                                                                                    <label for="field-1" class="col-sm-3 control-label" style="text-align: left">Weight(g): </label>

                                                                                                    <div class="col-sm-8">
                                                                                                        <input type="text" class="form-control" id="field-1">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="field-1" class="col-sm-3 control-label" style="text-align: left">Category: </label>

                                                                                                    <div class="col-sm-8">

                                                                                                        <select name="test" class="select2" multiple>
                                                                                                            <option value="3" >Electronics</option>
                                                                                                            <option value="3" >Fashion</option>
                                                                                                            <option value="3" >Cosmetics</option>
                                                                                                            <option value="2" >Education</option>
                                                                                                            <option value="5" >Gift</option>
                                                                                                        </select>

                                                                                                    </div>
                                                                                                </div>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end of product variation-->
                                                                </div>
                                                                <div class="tab-pane" id="v-messages">
                                                                    <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>
                                                                </div>
                                                                <div class="tab-pane" id="v-settings">
                                                                    <p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as to middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter change six did all. </p>
                                                                </div>
                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!--product option section-->



                </div>

                <!--create product sidebar start here-->
                <div class="col-sm-3">

                    <!--Product featured image start here-->
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h3>
                                                Publish
                                            </h3>
                                        </div>

                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>

                                    <div class="panel-body no-padding">
                                        <div id="rickshaw-chart-demo" style="padding: 5px;">

                                            <div class="form-group">
                                                <label class="col-sm-3 control-label">Status</label>

                                                <div class="col-sm-7">

                                                    <select name="test" class="selectboxit" data-first-option="false">
                                                        <option>Select one</option>
                                                        <option value="1">Draft</option>
                                                        <option value="2">Publish</option>
                                                    </select>

                                                </div>
                                            </div>

                                            <div id="rickshaw-legend" style="text-align: right;padding: 5px">
                                                <button type="button" class="btn btn-success">Publish</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Product featured end here-->

                    <!--Product image start here-->
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h3>
                                                Featured Image
                                            </h3>
                                        </div>

                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>

                                    <div class="panel-body no-padding">
                                        <div id="rickshaw-chart-demo" style="padding: 5px;">
                                            <div id="rickshaw-legend">

                                                <div class="form-group">
                                                    <div class="col-sm-12">

                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                                                <img src="http://placehold.it/200x150" alt="...">
                                                            </div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
                                                            <div>
                                                                <span class="btn btn-white btn-file">
                                                                    <span class="fileinput-new">Select image</span>
                                                                    <span class="fileinput-exists">Change</span>
                                                                    <input type="file" name="..." accept="image/*">
                                                                </span>
                                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Product image end here-->

                    <!--Product featured image start here-->
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h3>
                                                Gallery
                                            </h3>
                                        </div>

                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>

                                    <div class="panel-body no-padding">
                                        <div id="rickshaw-chart-demo" style="padding: 5px;">
                                            <div id="rickshaw-legend">

                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <div class="col-sm-8">

                                                            <input type="file" class="form-control file2 inline btn btn-primary" multiple="1" data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Browse Files" />

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--Product featured end here-->
                </div>
                <!--end of create product sidebar-->

            </div>

        </form>


    </div>
</div>


<!-- Imported styles on this page -->
<link rel="stylesheet" href="../../assets/js/dropzone/dropzone.css">
<link rel="stylesheet" href="../../assets/js/datatables/datatables.css">
<link rel="stylesheet" href="../../assets/js/select2/select2-bootstrap.css">
<link rel="stylesheet" href="../../assets/js/select2/select2.css">
<link rel="stylesheet" href="../../assets/js/selectboxit/jquery.selectBoxIt.css">

<!-- Bottom scripts (common) -->
<script src="../../assets/js/fileinput.js"></script>
<script src="../../assets/js/dropzone/dropzone.js"></script>
<script src="../../assets/js/gsap/TweenMax.min.js"></script>
<script src="../../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/joinable.js"></script>
<script src="../../assets/js/resizeable.js"></script>
<script src="../../assets/js/sabuj-api.js"></script>

<!-- Imported scripts on this page -->
<script src="../../assets/js/jquery.bootstrap.wizard.min.js"></script>
<script src="../../assets/js/jquery.validate.min.js"></script>
<script src="../../assets/js/jquery.inputmask.bundle.js"></script>
<script src="../../assets/js/selectboxit/jquery.selectBoxIt.min.js"></script>
<script src="../../assets/js/bootstrap-datepicker.js"></script>
<script src="../../assets/js/bootstrap-switch.min.js"></script>
<script src="../../assets/js/jquery.multi-select.js"></script>

<!-- JavaScripts initializations and stuff -->
<script src="../../assets/js/custom.js"></script>

</body>
</html>

