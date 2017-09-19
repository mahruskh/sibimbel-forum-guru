<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?=base_url('assets/images/logotitle.png')?>" type="image/gif">
    <title>SI BIMBEL | <?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <?php echo link_tag('assets/bootstrap/css/bootstrap.css');
    echo link_tag('assets/plugins/datepicker/datepicker3.css');
    echo link_tag('assets/plugins/datatables/jquery.dataTables.css"');
    echo link_tag('assets/plugins/datatables/dataTables.bootstrap.css');
    ?>
    <!-- Font Awesome -->
    <?php //echo link_tag('assets/lte/plugins/font-awesome/css/font-awesome.min.css');?>
    <?php echo link_tag('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'); ?>
    <!-- Theme style -->
    <?php echo link_tag('assets/dist/css/AdminLTE.min.css'); ?>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <?php echo link_tag('assets/dist/css/skins/skin-blue.min.css'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo current_url();?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>BFG</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg">Bimbel Forum Guru</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="http://localhost/sibimbel-forum-guru/assets/images/mahruskh.jpg" class="user-image" alt="User Image"/>
                            <span class="hidden-xs">Mahrus Khomaini</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="http://localhost/sibimbel-forum-guru/assets/images/mahruskh.jpg" class="img-circle" alt="User Image"/><p>
                                    Mahrus Khomaini - Administrator</p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="http://localhost/sibimbel-forum-guru/login/logout" class="btn btn-default btn-flat">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <div class="user-panel">
                <div class="pull-left image">
                    <img src="http://localhost/sibimbel-forum-guru/assets/images/mahruskh.jpg" class="img-circle" alt="User Image" />s</div>
                <div class="pull-left info">
                    <p>Mahrus Khomaini</p>
                    <a href="#">Online</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">MENU</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="active"><a href="<?php echo base_url('dashboard/show')?>"><i class="glyphicon glyphicon-dashboard"></i><span> DASHBOARD</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="glyphicon glyphicon-book"></i><span> DATA PENDAFTARAN</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url('pendaftaran/siswa-bimbel/show')?>"><i class="glyphicon glyphicon-minus"></i> Siswa Bimbel</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-minus"></i> Orang Tua (Wali)</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-minus"></i> Pengajar (Tentor)</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="glyphicon glyphicon-tags" aria-hidden="true"></i><span> DATA BIMBEL</span></a></li>
                <li><a href=""><i class="glyphicon glyphicon-usd" aria-hidden="true"></i><span> PEMBAYARAN</span></a></li>
                <li><a href=""><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><span> PENJADWALAN</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i><span> SETUP</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="glyphicon glyphicon-minus"></i> Program & Pilihan</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-minus"></i> Biaya & Diskon</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-minus"></i> Tahun Ajaran</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="glyphicon glyphicon-file" aria-hidden="true"></i><span> LAPORAN - LAPORAN</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="glyphicon glyphicon-user"></i><span> ADMINISTRATOR</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li><a href=""><i class="glyphicon glyphicon-minus"></i> Data Administrator</a></li>
                        <li><a href=""><i class="glyphicon glyphicon-minus"></i> Setup Akun</a></li>
                    </ul>
                </li>
                <li><a href=""><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><span> LOGOUT</span></a></li>
            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h3><i class=""></i></h3>
            <ol class="breadcrumb">
                <li><a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li class="active"><?php echo $title ?></li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-green fa fa-check"></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Taken</span>
                            <span class="info-box-number"><div id="taken"></div></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-blue fa fa-circle-o"></span>
                        <div class="info-box-content">
                            <span class="info-box-text">All</span>
                            <span class="info-box-number"><div id="all"></div></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="info-box">
                        <span class="info-box-icon bg-red fa fa-times"></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Have Not Taken</span>
                            <span class="info-box-number"><div id="have_not_taken"></div></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-tittle">Left Stuff Data</h4>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-primary btn-sm" onclick="add()"><span class="glyphicon glyphicon-plus"></span> Left Stuff</button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover table-striped" id="left-stuff-dt">
                            <thead>
                            <tr class="info">
                                <th>Stuf Name</th>
                                <th>Location</th>
                                <th>Posted At</th>
                                <th>Status</th>
                                <th>Tools</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">

        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; BIMBEL FORUM GURU Malang<a href="#"></a></strong>
    </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="../assets/plugins/jQuery/jquery-2.2.3.min.js"></script>

<!-- Bootstrap 3.3.6 -->
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>

<script src="../assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="../assets/plugins/datatables/jquery.dataTables.js"></script>


<!-- AdminLTE App -->
<script src="../assets/dist/js/app.min.js"></script>
</body>
</html>
