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
            <div class="box box-primary flat">
                <div class="box-header with-border">
                    <h4 class="box-tittle text-center">Pendaftaran Siswa Bimbel</h4>
                </div>
                <form class="form-horizontal" action="register_siswa" method="POST">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="box box-default flat">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Siswa*</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama_siswa" class="form-control" maxlength="100" required>
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
                                            <div class="col-sm-4">
                                                <input type="text" name="tmpt_lahir" class="form-control" maxlength="50" required>
                                            </div>
                                            <div class="col-sm-4">
                                                <input type="text" name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="Day Month Year" maxlength="1" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Asal Sekolah*</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="asal_sekolah" class="form-control" maxlength="100" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Alamat*</label>
                                            <div class="col-sm-8">
                                                <div class="checkbox">
                                                    <label><input type="checkbox" id="checked_alamat"> Sama dengan Orang Tua / Wali ? </label>
                                                </div>
                                                <textarea class="form-control" name="alamat" row="3" maxlength="255" required></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">No. HP</label>
                                            <div class="col-sm-4">
                                                <input type="number" name="telepon_siswa" class="form-control" maxlength="12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Catatan</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" name="catatan" row="3" maxlength="255"></textarea>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Nama Orang Tua Wali*</label>
                                            <div class="col-sm-6">
                                                <select class="form-control wali-select2" name="id_wali_siswa" required></select>
                                            </div>
                                            <div class="col-sm-2">
                                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-wali">BARU</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-3 control-label">Alamat*</label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" row="3" name="alamat_get_wali" readonly="readonly"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="box box-default flat">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Tahun Ajaran*</label>
                                            <div class="col-sm-7">
                                                <select class="form-control tahun-ajaran-select2" name="id_tahun_ajaran">
                                                    <?php foreach ($def_tahun_ajaran as $row) { ?>
                                                        <option value="<?php echo $row->id_tahun_ajaran;?>"><?php echo $row->tahun_ajaran;?></option>
                                                    <?php
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Program Bimbel*</label>
                                            <div class="col-sm-7">
                                                <select class="form-control program-bimbel-select2" name="id_program_bimbel" id="change-program-bimbel" required>
                                                    <option value="Pilih"> -- Pilih Program Bimbel -- </option>
                                                    <?php foreach ($def_program_bimbel as $row) { ?>
                                                        <option value="<?php echo $row->id_program_bimbel;?>"><?php echo $row->program_bimbel . " - " . $row->pilihan_program;?></option>
                                                        <?php
                                                    } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-default flat">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Biaya Pendaftaran</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Rp.</span>
                                                    <input type="number" name="biaya_pendaftaran" id="biaya_pendaftaran" value="<?php foreach ($def_biaya_daftar as $row) { echo $row->biaya_daftar; }?>" class="form-control" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checked_biaya_pendaftaran" checked>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Kode Diskon</label>
                                            <div class="col-sm-7">
                                                <select class="form-control kode-diskon-select2" name="id_diskon"></select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Jumlah Diskon</label>
                                            <div class="col-sm-6">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Rp.</span>
                                                    <input type="number" name="jml_diskon" id="jml_diskon" class="form-control" value="0" readonly="readonly">
                                                </div>
                                            </div>
                                            <div class="col-sm-1">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checked_jml_diskon" checked>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Biaya Program*</label>
                                            <div class="col-sm-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Rp.</span>
                                                    <input type="text" name="biaya_program" id="biaya_program" class="form-control" readonly="readonly" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-5 control-label">Total Biaya*</label>
                                            <div class="col-sm-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon">Rp.</span>
                                                    <input type="text" name="total_biaya" class="form-control" readonly="readonly" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box box-default box-solid flat">
                                    <div class="box-body">
                                        <input type="submit" class="btn btn-primary btn-block" name="daftar" value="SIMPAN PENDAFTARAN">
                                        <br>
                                        *Pastikan Telah Terisi dengan Benar !
                                        <input type="reset" class="btn btn-default btn-sm pull-right">
                                    </div>
                                </div>
                            </div>
                </form>
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
                       url: 'daftar/cari_wali',
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
                        url: 'daftar/get_alamat_wali',
                        dataType: 'JSON',
                        data: {id_wali_siswa:$('[name="id_wali_siswa"]').val()},
                        success: function (data) {
                            $('[name="alamat_get_wali"]').val(data.alamat_wali)
                        }
                    });
               })
           });

           $(function () {
               $('.kode-diskon-select2').select2({
                   placeholder: 'Gunakan Kode Diskon',
                   minimumInputLength: 2,
                   ajax: {
                       type: "POST",
                       url: 'daftar/cari_kode_diskon',
                       dataType: 'JSON',
                       delay: 250,
                       processResults: function (data) {
                           return {
                               results: $.map(data, function (item) {
                                   return {
                                       text: item.kode_diskon,
                                       id: item.id_diskon
                                   }
                               })
                           };
                       },
                       cache: true
                   }
               }).change (function () {
                   $.ajax({
                       type: "POST",
                       url: 'daftar/get_jml_diskon',
                       dataType: 'JSON',
                       data: {id_diskon:$('[name="id_diskon"]').val()},
                       success: function (data) {
                           $('[name="jml_diskon"]').val(data.jml_diskon)
                           count_total_biaya()
                       }
                   });
               })
           });


        $('.tahun-ajaran-select2,.program-bimbel-select2').select2()

        $("#change-program-bimbel").change(function () {
            if ($("#change-program-bimbel").val() != "Pilih") {
                $.ajax({
                   type: "POST",
                   url: "daftar/change_program_bimbel",
                   dataType: "JSON",
                   data: {id_program_bimbel:this.value},
                   success: function (data) {
                       $('[name="biaya_program"]').val(data.biaya_program)
                       count_total_biaya()
                   }
                });
            } else if ($("#change-program-bimbel").val() == "Pilih") {
                $('[name="biaya_program"]').val("")
                count_total_biaya()
            }
        });

        $("#checked_alamat").click(function () {
            if ($("#checked_alamat").is(':checked')) {
                $('[name="alamat"]').val($('[name="alamat_get_wali"]').val())
                $('[name="alamat"]').prop('readonly',true)
            } else {
                $('[name="alamat"]').val("")
                $('[name="alamat"]').prop('readonly',false)
            }
        });

        $("#biaya_pendaftaran").change(function () {
            count_total_biaya()
        });
        $("#jml_diskon").change(function () {
            count_total_biaya()
        });

        $("#checked_biaya_pendaftaran").click(function () {
            if ($("#checked_biaya_pendaftaran").is(':checked')) {
                if ($('[name="biaya_pendaftaran"]').val() == ""){
                    $('[name="biaya_pendaftaran"]').val("0")
                }
                $('[name="biaya_pendaftaran"]').prop('readonly',true)
            } else {
                $('[name="biaya_pendaftaran"]').prop('readonly',false)
            }
        });

        $("#checked_jml_diskon").click(function () {
            if ($("#checked_jml_diskon").is(':checked')) {
                if ($('[name="jml_diskon"]').val() == ""){
                    $('[name="jml_diskon"]').val("0")
                }
                $('[name="jml_diskon"]').prop('readonly',true)
            } else {
                $('[name="jml_diskon"]').prop('readonly',false)
            }
        });

        $("#tgl_lahir").datepicker({
            autoclose: true,
            format: 'dd M yyyy'
        })
    });
    function count_total_biaya() {
        $('[name="total_biaya"]').val(parseInt($('[name="biaya_pendaftaran"]').val()) + parseInt($('[name="biaya_program"]').val() - parseInt($('[name="jml_diskon"]').val())))
    }
    function save_wali(){
        if ($('[name="nama_wali"]').val() == ""){
            alert("Nama Wali Siswa Wajib Di Isi !!!")
        } else {
            $.ajax({    
                type: "POST",
                url: "daftar/save_wali",
                data: $("#form-wali").serialize(),
                success: function (data) {
                    if (data == 1){
                        $("#form-wali")[0].reset()
                        $("#modal-wali").modal("hide")
                    }
                }
            });
        }
    }
</script>