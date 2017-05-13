<?php

    ob_start();
    session_start();

    if($_SESSION['admin_id'] == NULL){
            header('Location:index.php');
        }
        
        require '../class/Info.php';
        $obj_info =new Info();
        
        require '../class/Gallery.php';
        $obj_gallery =new Gallery();
        
        require '../class/Portfolio.php';
        $obj_portfolio =new Portfolio();
        
        require '../class/View.php';
        $obj_view =new View();
    
    if(isset($_GET['status'])){
        if($_GET['status']=='logout'){
             require '../class/Dashboard.php';
            $obj_dashboard= new Dashboard();
                    
                    $obj_dashboard -> admin_logout();
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Portfolio- 
            <?php
            if (isset($title)) {
                if ($title == 'Add Category') {
                    echo $title;
                } else if ($title == 'Manage Category') {
                    echo $title;
                }
            } else {
                echo "HOME";
            }
            ?>
        </title>
        <!-- Bootstrap Core CSS -->
        <link href="../assets/backend/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- MetisMenu CSS -->
        <link href="../assets/backend/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <link href="../assets/backend/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../assets/backend/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">


        <!-- Custom CSS -->
        <link href="../assets/backend/dist/css/sb-admin-2.css" rel="stylesheet">
        <!-- Morris Charts CSS -->
        <link href="../assets/backend/vendor/morrisjs/morris.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="../assets/backend/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="admin_master.php">Portfolio Admin</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            
                            
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['admin_name']; ?> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="?status=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </li>
                            <li><a href="admin_master.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a> </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Site Info <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="add_info.php">Add Info</a>  </li>
                                    <li>  <a href="manage_info.php">Manage Info</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i>Gallery <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="add_gallery.php">Add Gallery</a>  </li>
                                    <li>  <a href="manage_gallery.php">Manage Gallery</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Portfolio <span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="add_portfolio.php">Add Portfolio</a>  </li>
                                    <li>  <a href="manage_portfolio.php">Manage Portfolio</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>
            <div id="page-wrapper">
                <?php
                if (isset($pages)) {
                    if ($pages == 'add_info') {
                        include './pages/add_info_content.php';
                    } else if ($pages == 'manage_info') {
                        include './pages/manage_info_content.php';
                    } else if ($pages == 'edit_info') {
                        include './pages/edit_info_content.php';
                    }else if ($pages == 'add_gallery') {
                        include './pages/add_gallery_content.php';
                    } else if ($pages == 'manage_gallery') {
                        include './pages/manage_gallery_content.php';
                    } else if ($pages == 'edit_gallery') {
                        include './pages/edit_gallery_content.php';
                    }else if ($pages == 'add_portfolio') {
                        include './pages/add_portfolio_content.php';
                    } else if ($pages == 'manage_portfolio') {
                        include './pages/manage_portfolio_content.php';
                    } else if ($pages == 'edit_portfolio') {
                        include './pages/edit_portfolio_content.php';
                    } else if ($pages == 'view_portfolio') {
                        include './pages/view_portfolio_content.php';
                    }
                    
                    
                } else {
                    include './pages/home_Content.php';
                }
                ?>
            </div>
        </div>
        <script src="../assets/backend/vendor/jquery/jquery.min.js"></script>
        <script src="../assets/backend/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/backend/vendor/metisMenu/metisMenu.min.js"></script>

        <script src="../assets/backend/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="../assets/backend/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
        <script src="../assets/backend/vendor/datatables-responsive/dataTables.responsive.js"></script>

        <script src="../assets/backend/vendor/raphael/raphael.min.js"></script>
        <script src="../assets/backend/vendor/morrisjs/morris.min.js"></script>
        <script src="../assets/backend/data/morris-data.js"></script>
        <script src="../assets/backend/dist/js/sb-admin-2.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>
    </body>
</html>
