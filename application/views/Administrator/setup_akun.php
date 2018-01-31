<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= base_url('assets/images/logotitle.png') ?>" type="image/gif">
    <title>SI BIMBEL | <?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <?php echo link_tag('assets/bootstrap/css/bootstrap.css');
    echo link_tag('assets/plugins/datatables/jquery.dataTables.css"');
    echo link_tag('assets/plugins/datatables/dataTables.bootstrap.css');
    ?>
    <!-- Font Awesome -->
    <?php echo link_tag('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css'); ?>
    <!-- wever, you can choose any other skin. Make sure you
          apply theTheme style -->
    <?php echo link_tag('assets/dist/css/AdminLTE.min.css'); ?>
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. Ho skin class to the body tag so the changes take effect.
    -->
    <?php echo link_tag('assets/dist/css/skins/skin-blue.min.css'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo current_url(); ?>" class="logo">
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
                            <img src="<?php echo base_url('assets/images/'.$this->session->foto);?>"
                                 class="user-image" alt="User Image"/>
                            <span class="hidden-xs"><?php echo $this->session->nama;?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="<?php echo base_url('assets/images/'.$this->session->foto);?>"
                                     class="img-circle" alt="User Image"/>
                                <p>
                                    <?php echo $this->session->nama;?> - Administrator</p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-right">
                                    <a href="<?php echo base_url('login/logout')?>"
                                       class="btn btn-default btn-flat">Logout</a>
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
                    <img src="<?php echo base_url('assets/images/'.$this->session->foto);?>" class="img-circle"
                         alt="User Image"/>s
                </div>
                <div class="pull-left info">
                    <p><?php echo $this->session->nama;?></p>
                    <a href="#">Online</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <ul class="sidebar-menu">
                <li class="header">MENU</li>
                <!-- Optionally, you can add icons to the links -->
                <li><a href="<?php echo base_url('dashboard/show') ?>"><i
                                class="glyphicon glyphicon-dashboard"></i><span> DASHBOARD</span></a></li>
                <li class="treeview">
                    <a href="#"><i class="glyphicon glyphicon-book"></i><span> DATA PENDAFTARAN</span><span
                                class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url('data/siswa/show') ?>"><i
                                        class="glyphicon glyphicon-minus"></i> Siswa Bimbel</a></li>
                        <li><a href="<?php echo base_url('data/wali/show') ?>"><i class="glyphicon glyphicon-minus"></i>
                                Wali / Orang Tua</a></li>
                        <li><a href="<?php echo base_url('data/tentor/show') ?>"><i
                                        class="glyphicon glyphicon-minus"></i> Tentor / Pengajar</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('data/bimbel/show') ?>"><i class="glyphicon glyphicon-tags"
                                                                            aria-hidden="true"></i><span> DATA BIMBEL</span></a>
                </li>
                <li><a href="<?php echo base_url('data/pembayaran/show') ?>"><i class="glyphicon glyphicon-usd"
                                                                                aria-hidden="true"></i><span> PEMBAYARAN</span></a>
                </li>
                <li><a href="<?php echo base_url('data/penjadwalan/show') ?>"><i class="glyphicon glyphicon-calendar"
                                                                                 aria-hidden="true"></i><span> PENJADWALAN</span></a>
                </li>
                <li class="treeview">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i><span> SETUP</span><span
                                class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url('setup/program-pilihan/show') ?>"><i
                                        class="glyphicon glyphicon-minus"></i> Program & Pilihan</a></li>
                        <li><a href="<?php echo base_url('setup/biaya-diskon/show') ?>"><i
                                        class="glyphicon glyphicon-minus"></i> Biaya & Diskon</a></li>
                        <li><a href="<?php echo base_url('setup/tahun-ajaran/show') ?>"><i
                                        class="glyphicon glyphicon-minus"></i> Tahun Ajaran</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('laporan/bimbel-pembayaran')?>"><i class="glyphicon glyphicon-file"
                                  aria-hidden="true"></i><span> LAPORAN - LAPORAN</span></a></li>
                <li class="active treeview menu-open">
                    <a href="#"><i class="glyphicon glyphicon-user"></i><span> ADMINISTRATOR</span><span
                                class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url('administrator/show') ?>"><i
                                        class="glyphicon glyphicon-minus"></i> Data Administrator</a></li>
                        <li class="active"><a href="<?php echo base_url('administrator/setup-akun') ?>"><i
                                        class="glyphicon glyphicon-minus"></i> Setup Akun</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url('login/logout')?>"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><span> LOGOUT</span></a>
                </li>
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
            <div class="box box-primary box-solid flat">
                <div class="box-body">
                    <a href="<?php echo base_url('administrator/add-admin');?>" class="btn btn-yahoo btn-flat">Tambah Administrator</a> |
                    <a href="<?php echo base_url('administrator/show'); ?>" class="btn btn-yahoo btn-flat">Data
                        Administrator</a> |
                    <a href="<?php echo base_url('administrator/setup-akun') ?>" class="btn btn-yahoo btn-flat active">Setup
                        Akun</a>
                </div>
            </div>
            <div class="row">
                <?php foreach ($admin as $row) { ?>
                <div class="col-md-5">
                    <div class="box box-primary flat">
                        <div class="box-body">
                            <form class="form-horizontal">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Username*</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="username" value="<?php echo $row->username;?>" class="form-control" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Password*</label>
                                        <div class="col-sm-8">
                                            <input type="password" name="password" value="<?php echo $row->password;?>" class="form-control" readonly="readonly">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-9">
                                            <button type="button" class="btn btn-primary" id="method_akun">UPDATE</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="box box-primary flat">
                        <div class="box-body">
                            <form class="form-horizontal">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Nama Lengkap*</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="nama" value="<?php echo $row->nama;?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Foto</label>
                                        <div class="col-sm-5">
                                            <input type="file" name="foto" value="<?php echo $row->foto;?>" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">Alamat*</label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" name="alamat" row="3"><?php echo $row->alamat;?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">No. HP*</label>
                                        <div class="col-sm-5">
                                            <input type="number" value="<?php echo $row->telepon;?>" nama="telepon" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label"></label>
                                        <div class="col-sm-8">
                                            <button type="button" class="btn btn-primary">SIMPAN</button>
                                            <button type="reset" class="btn btn-default">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?>
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

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>

<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/app.min.js') ?>"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function (e) {

        $("#method_akun").click(function (){
            if ($("#method_akun").html() == "UPDATE"){
                $("#method_akun").html("SIMPAN")
                $('[name="username"]').attr("readonly", false)
                $('[name="password"]').attr("readonly", false)
            }else if ($("#method_akun").html() == "SIMPAN"){
                $("#method_akun").html("UPDATE")
                $('[name="username"]').attr("readonly", "readonly")
                $('[name="password"]').attr("readonly", "readonly")
            }
        });
    });
</script>