

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


                    <li class="sep"></li>

                    <li>
                        <a href="extra-login.html">
                            Log Out <i class="entypo-logout right"></i>
                        </a>
                    </li>
                </ul>

            </div>

        </div>

        <hr/>

        <table class="col-sm-12">
            <tr>
                <td class="col-sm-6">
                    <ul class="producttoplist" style="margin-left: -43px;">
                        <li>
                            <a href="">All (100)</a>
                        </li>
                        <li class="sep"> | </li>
                        <li>
                            <a href="">Published (90)</a>
                        </li>
                        <li class="sep">|</li>
                        <li>
                            <a href="">Trashed (10)</a>
                        </li>
                    </ul>
                </td>
                <td class="col-sm-6">
                    <a href="email.php?list=1" class="btn btn-primary" role="button" style="float: right;">Email to friend</a>
                    <a href="xl.php" class="btn btn-primary" role="button" style="float: right;">Download as XL</a>
                    <a href="pdf.php" class="btn btn-primary" role="button" style="float: right;">Download as PDF</a>
                </td>
                
            </tr>
        </table>
        <script type="text/javascript">
            jQuery( document ).ready( function( $ ) {
                var $table3 = jQuery("#table-3");

                var table3 = $table3.DataTable( {
                    "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
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

        <form name="form" id="form" method="post" action="selectedItem.php" onSubmit="return validate();">
            <table class="table table-bordered datatable" id="table-3">
                <thead>
                <tr class="replace-inputs">
                    <th class="col-sm-1">Select</th>
                    <th class="col-sm-3">Name</th>
                    <th class="col-sm-2">Code</th>
                    <th class="col-sm-1">Stock</th>
                    <th class="col-sm-1">Price</th>
                    <th class="col-sm-2">Category</th>
                    <th class="col-sm-2">Vendor</th>

                </tr>
                </thead>
                <tbody>


                <tr class="odd gradeX">
                    <td><input name="checkbox[]" type="checkbox" id="checkbox[]" value=""></td>
                    <td>Sunsilk Shapmoo</td>
                    <td>SJK53</td>
                    <td>In Stock(40)</td>
                    <td>120</td>
                    <td>Cosmetics</td>
                    <td>Mahmud</td>
                </tr>
                </tbody>

                <tfoot>
                <tr class="replace-inputs">
                    <th class="col-sm-1">Select</th>
                    <th class="col-sm-3">Name</th>
                    <th class="col-sm-2">Code</th>
                    <th class="col-sm-1">Stock</th>
                    <th class="col-sm-1">Price</th>
                    <th class="col-sm-2">Category</th>
                    <th class="col-sm-2">Vendor</th>

                </tr>
                </tfoot>
            </table>

            <table class="table">
                <tr>
                    <td>
                        <a href="javascript:;" onclick="jQuery('#modal-1').modal('show');" class="btn btn-success btn-lg btn-icon icon-left">
                            <i class="entypo-list-add"></i>
                            Add New Item
                        </a>
                    </td>
                    <td>
                        <input class="btn btn-danger btn-lg" name="delete" type="submit" id="delete" value="Delete Selected">

                    </td>
                    <td>
                        <input class="btn btn-warning btn-lg" name="trash" type="submit" id="trash" value="Trash Selected" />
                    </td>
                    <td>
                        <a href="trashList.php" class="btn btn-info btn-lg btn-icon icon-left">
                            <i class="entypo-trash"></i>
                            View Trash List
                        </a>
                    </td>
                </tr>
            </table>
        </form>

        <script language="JavaScript" type="text/javascript">
            function checkDelete() {
                return confirm ('Are yo sure want to delete this item?');
            }

        </script>
    </div>
</div>


<!-- Modal 1 (add new from index.php)-->
<div class="modal fade" id="modal-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="well well-sm">
                    <h4>Please enter your book details.</h4>
                </div>
            </div>

            <div class="modal-body">
                <form id="rootwizard-2" method="post" action="storeindex.php" class="form-wizard validate">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab2-1">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="full_name">Book Name</label>
                                        <input class="form-control" name="book_name" id="book_name" data-validate="required" placeholder="Book Name" />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="birthdate">Author Name</label>
                                        <input class="form-control" name="author_name" id="author_name" data-validate="required" placeholder="Author Name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="address_line_2">Book Category</label>
                                        <input class="form-control" name="category" id="book_category" data-validate="required" placeholder="Category" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="address_line_2">Price (TK)</label>
                                        <input class="form-control" name="price" id="book_price" data-validate="required" placeholder="Enter book price here" />
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success"><i class="fa fa-bookmark"></i> Save </button>
                            <a type="" class="btn btn-info"><i class="fa fa-clock-o" aria-hidden="true"></i> Reset </a>
                            <button type="button" class="btn btn-orange pull-right" data-dismiss="modal"><i class="fa fa-arrow-down"></i> Close </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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
<script src="../../assets/js/sabuj-api.js"></script>

<!-- JavaScripts initializations and stuff -->
<script src="../../assets/js/custom.js"></script>

</body>
</html>

