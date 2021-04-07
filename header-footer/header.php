<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?php echo $path; ?>image/health.jpeg">
    <title><?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tcususdominus Bbootstrap 4 -->
    <!-- <link rel="stylesheet"
        href="<?php echo $path ?>plugins/tcususdominus-bootstrap-4/css/tcususdominus-bootstrap-4.min.css"> -->
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo $path ?>dist/css/alt/pageload.css">

    <link rel="stylesheet" href="<?php echo $path ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $path ?>dist/css/adminlte.min.css">
    <link rel="stylesheet" href="<?php echo $path ?>dist/css/alt/style.css">

    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo $path ?>plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="<?php echo $path ?>dist/js/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>      
<?php
     include (''.$path.'oop/obj.php');
?>
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light font14">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a class="nav-link"><?php echo $title; ?></a>
                </li>
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
    </div>
    <aside class="main-sidebar sidebar-dark-primary elevation-4 font14">
        <!-- Brand Logo -->
        <a href="../Main.php" class="brand-link">
            <img src="<?php echo $path ?>image/health.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">Health Checkup</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo $path ?>image/image.jpeg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">User</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
             
                    <li class="nav-item has-treeview">
                        <a href="<?php echo $links ?>Company/Company" class="nav-link">
                            <i class="nav-icon fas fa-building"></i>
                            <p>
                                ຂໍ້ມູນບໍລີສັດ
                                <i class="fas"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="<?php echo $links ?>Package/Package" class="nav-link">
                            <i class="nav-icon fas fa-stethoscope"></i>
                            <p>
                                ຂໍ້ມູນແຟັກແກັດ
                                <i class="fas"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="<?php echo $links ?>Employee/Employee" class="nav-link">
                            <i class="nav-icon fas fa-user"></i><i class="fad fa-user-hard-hat"></i>
                            <p>
                            ຂໍ້ມູນພະນັກງານ
                                <i class="fas"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="<?php echo $links ?>Register/register" class="nav-link">
                            <i class="nav-icon fas fa-registered"></i>
                            <p>
                                ການລົງທະບຽນ
                                <i class="fas"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-certificate"></i>
                            <p>
                            ພິມໃບຢັ້ງຢືນສຸຂະພາບ
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo $links ?>Register/languageLAO" class="nav-link">
                                    <i class="far fa fa-check nav-icon"></i>
                                    <p>ພາສາລາວ</p>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="<?php echo $links ?>Register/languageLAO" class="nav-link">
                                    <i class="far fa fa-check nav-icon"></i>
                                    <p>ພາສາອັງກິດ</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                ພີມປື້ມຕິດຕາມສຸຂະພາບ
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="Make/accept.php" class="nav-link">
                                    <i class="far fa fa-check nav-icon"></i>
                                    <p>ໜ້າປົກ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Make/accept.php" class="nav-link">
                                    <i class="far fa fa-check nav-icon"></i>
                                    <p>ໜ້າ1-ສະຫຼຸບ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Make/accept.php" class="nav-link">
                                    <i class="far fa fa-check nav-icon"></i>
                                    <p>ໜ້າ2-11</p>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a href="Make/accept.php" class="nav-link">
                                    <i class="far fa fa-check nav-icon"></i>
                                    <p>ໜ້າ3-10</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Make/accept.php" class="nav-link">
                                    <i class="far fa fa-check nav-icon"></i>
                                    <p>ໜ້າ4-9</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="Make/accept.php" class="nav-link">
                                    <i class="far fa fa-check nav-icon"></i>
                                    <p>ໜ້າ5-8</p>
                                </a>
                            </li> -->
                        </ul>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="modal" data-target="#exampleModal">
                            <i class="nav-icon fas fa-power-off"></i>
                            <p>
                                ອອກຈາກລະບົບ
                            </p>
                        </a>
                    </li>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <form action="../Check/Logout.php" method="POST" id="formLogout">
        <div class="modal fade font14" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ຢຶນຢັນ</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" align="center">
                        ທ່ານຕ້ອງການອອກຈາກລະບົບ ຫຼື ບໍ່ ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">ຍົກເລີກ</button>
                        <button type="submit" name="btnLogout" class="btn btn-outline-danger">ອອກຈາກລະບົບ</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <div class="main-footer">