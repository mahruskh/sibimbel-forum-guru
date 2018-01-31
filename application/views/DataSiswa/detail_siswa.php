<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= base_url('assets/images/logotitle.png') ?>" type="image/gif">
    <title>SI BIMBEL | <?php echo $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <?php echo link_tag('assets/bootstrap/css/bootstrap.min.css');
    echo link_tag('assets/plugins/datatables/jquery.dataTables.min.css"');
    echo link_tag('assets/plugins/datatables/dataTables.bootstrap.css');
    echo link_tag('assets/plugins/datepicker/datepicker3.css');
    echo link_tag('assets/plugins/select2/select2.min.css');
    ?>
    <!-- Font Awesome -->
    <?php echo link_tag('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css'); ?>
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
                <li class="active treeview menu-open">
                    <a href="#"><i class="glyphicon glyphicon-book"></i><span> DATA PENDAFTARAN</span><span
                                class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li class="active"><a href="<?php echo base_url('data/siswa/show') ?>"><i
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
                <li class="treeview">
                    <a href="#"><i class="glyphicon glyphicon-user"></i><span> ADMINISTRATOR</span><span
                                class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url('administrator/show') ?>"><i
                                        class="glyphicon glyphicon-minus"></i> Data Administrator</a></li>
                        <li><a href="<?php echo base_url('administrator/setup-akun') ?>"><i
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
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h4 class="box-tittle">Detail Siswa Bimbingan Belajar</h4>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form class="form-horizontal" action="update/siswa" method="POST">
                                <?php foreach ($siswa as $row) { ?>
                                    <input type="text" name="id_siswa" class="hidden" value="<?php echo $row->id_siswa;?>">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">NIS Bimbel*</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="nis_bimbel" class="form-control" value="<?php echo $row->nis_bimbel;?>" maxlength="100" readonly="readonly" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama Siswa*</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama_siswa" class="form-control" value="<?php echo $row->nama;?>" maxlength="100" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Foto</label>
                                    <div class="col-sm-6">
                                        <input type="file" name="foto" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Tmpt Tgl Lahir</label>
                                    <div class="col-sm-5">
                                        <input type="text" name="tmpt_lahir" class="form-control" value="<?php echo $row->tmpt_lahir;?>" maxlength="50" required>
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" value="<?php echo date('d M Y',strtotime($row->tgl_lahir));?>" maxlength="1" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Asal Sekolah*</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="asal_sekolah" class="form-control" value="<?php echo $row->asal_sekolah;?>" maxlength="100" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Alamat*</label>
                                    <div class="col-sm-8">
                                        <div class="checkbox">
                                            <label><input type="checkbox" id="checked_alamat"> Sama dengan Orang Tua / Wali ? </label>
                                        </div>
                                        <textarea class="form-control" name="alamat" row="3" maxlength="255" required><?php echo $row->alamat;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">No. HP</label>
                                    <div class="col-sm-4">
                                        <input type="number" name="telepon_siswa" class="form-control" value="<?php echo $row->telepon;?>" maxlength="12">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Catatan</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" name="catatan" row="3" maxlength="255"><?php echo $row->catatan;?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Nama Orang Tua Wali*</label>
                                    <div class="col-sm-6">
                                        <select class="form-control wali-select2" name="id_wali_siswa" required>
                                            <option value="<?php echo $row->id_wali_siswa;?>"><?php echo $row->nama_wali;?></option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-wali">BARU</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Alamat*</label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" row="3" name="alamat_get_wali" readonly="readonly"><?php echo $row->alamat_wali  ;?></textarea>
                                    </div>
                                </div>
                                <?php } ?>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label"></label>
                                    <div class="col-sm-8">
                                        <input type="submit" class="btn btn-primary" name="update_siswa" value="UPDATE">
                                        <input type="reset" class="btn btn-default pull-right">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- /.content -->
    </div>

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
<script src="<?php echo base_url('assets/plugins/datepicker/bootstrap-datepicker.js') ?>"></script>
<script src="<?php echo base_url('assets/plugins/select2/select2.min.js') ?>"></script>


<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/app.min.js') ?>"></script>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function (e) {

        $(function () {
            $('.wali-select2').select2({
                placeholder: 'Cari Nama Orang tua Wali Siswa',
                minimumInputLength: 3,
                ajax: {
                    type: "POST",
                    url: '../daftar/cari_wali',
                    dataType: 'JSON',
                    delay: 250,
                    processResults: function (data) {
                        return {
                            results: $.map(data, function (item) {
                                return {
                                    text: item.nama_wali,
                                    id: item.id_wali_siswa
                                }
                            })
                        };
                    },
                    cache: true
                }
            }).change(function () {
                $.ajax({
                    type: "POST",
                    url: '../daftar/get_alamat_wali',
                    dataType: 'JSON',
                    data: {id_wali_siswa:$('[name="id_wali_siswa"]').val()},
                    success: function (data) {
                        $('[name="alamat_get_wali"]').val(data.alamat_wali)
                    }
                });
            })
        });

        $("#checked_alamat").click(function () {
            if ($("#checked_alamat").is(':checked')) {
                $('[name="alamat"]').val($('[name="alamat_get_wali"]').val())
                $('[name="alamat"]').attr('readonly',true)
            } else {
                $('[name="alamat"]').val("")
                $('[name="alamat"]').attr('readonly',false)
            }
        });


        $("#tgl_lahir").datepicker({
            autoclose: true,
            format: 'dd M yyyy'
        });

    });
</script>