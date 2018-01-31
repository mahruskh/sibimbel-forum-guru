<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?=base_url('assets/images/logotitle.png')?>" type="image/gif">
  <title>SI BIMBEL | <?php echo $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <?php echo link_tag('assets/bootstrap/css/bootstrap.min.css');
        echo link_tag('assets/plugins/datatables/jquery.dataTables.min.css"');
        echo link_tag('assets/plugins/datatables/dataTables.bootstrap.css');
  echo link_tag('assets/plugins/select2/select2.min.css');
  ?>
  <!-- Font Awesome -->
  <?php echo link_tag('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css');?>
  <!-- Theme style -->
  <?php echo link_tag('assets/dist/css/AdminLTE.min.css'); ?>

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
               <img src="<?php echo base_url('assets/images/'.$this->session->foto);?>" class="user-image" alt="User Image"/>
               <span class="hidden-xs"><?php echo $this->session->nama;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url('assets/images/'.$this->session->foto);?>" class="img-circle" alt="User Image"/><p>
                <?php echo $this->session->nama;?> - Administrator</p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-right">
                   <a href="<?php echo base_url('login/logout')?>" class="btn btn-default btn-flat">Logout</a>
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
         <img src="<?php echo base_url('assets/images/'.$this->session->foto);?>" class="img-circle" alt="User Image" />s</div>
       <div class="pull-left info">
         <p><?php echo $this->session->nama;?></p>
           <a href="#">Online</a>
       </div>
     </div>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo base_url('dashboard/show')?>"><i class="glyphicon glyphicon-dashboard"></i><span> DASHBOARD</span></a></li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-book"></i><span> DATA PENDAFTARAN</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('data/siswa/show')?>"><i class="glyphicon glyphicon-minus"></i> Siswa Bimbel</a></li>
            <li><a href="<?php echo base_url('data/wali/show')?>"><i class="glyphicon glyphicon-minus"></i> Wali / Orang Tua</a></li>
            <li><a href="<?php echo base_url('data/tentor/show')?>"><i class="glyphicon glyphicon-minus"></i> Tentor / Pengajar</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('data/bimbel/show')?>"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i><span> DATA BIMBEL</span></a></li>
        <li class="active"><a href="<?php echo base_url('data/pembayaran/show')?>"><i class="glyphicon glyphicon-usd" aria-hidden="true"></i><span> PEMBAYARAN</span></a></li>
        <li><a href="<?php echo base_url('data/penjadwalan/show')?>"><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><span> PENJADWALAN</span></a></li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-cog"></i><span> SETUP</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('setup/program-pilihan/show')?>"><i class="glyphicon glyphicon-minus"></i> Program & Pilihan</a></li>
            <li><a href="<?php echo base_url('setup/biaya-diskon/show')?>"><i class="glyphicon glyphicon-minus"></i> Biaya & Diskon</a></li>
            <li><a href="<?php echo base_url('setup/tahun-ajaran/show')?>"><i class="glyphicon glyphicon-minus"></i> Tahun Ajaran</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('laporan/bimbel-pembayaran')?>"><i class="glyphicon glyphicon-file" aria-hidden="true"></i><span> LAPORAN - LAPORAN</span></a></li>
        <li class="treeview">
          <a href="#"><i class="glyphicon glyphicon-user"></i><span> ADMINISTRATOR</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span></a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('administrator/show')?>"><i class="glyphicon glyphicon-minus"></i> Data Administrator</a></li>
            <li><a href="<?php echo base_url('administrator/setup-akun')?>"><i class="glyphicon glyphicon-minus"></i> Setup Akun</a></li>
          </ul>
        </li>
        <li><a href="<?php echo base_url('login/logout')?>"><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><span> LOGOUT</span></a></li>
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
          <div class="col-md-5">
              <div class="box box-primary flat">
                  <div class="box-header text-center">Data Pembayaran<hr></div>
                  <div class="box-body">
                      <?php foreach ($data_pembayaran as $row) { ?>
                          <form class="form-horizontal">
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Nama Siswa</label>
                                  <div class="col-sm-7">
                                      <input type="text" name="nama" value="<?php echo $row->nama;?>" class="form-control" maxlength="100" readonly="readonly" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Tahun Ajaran</label>
                                  <div class="col-sm-4">
                                      <input type="text" name="tahun_ajaran" value="<?php echo $row->tahun_ajaran;?>" class="form-control" readonly="readonly" maxlength="100">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Program Bimbel</label>
                                  <div class="col-sm-7">
                                      <input type="text" name="tahun_ajaran" value="<?php echo $row->program_bimbel;?>" class="form-control" readonly="readonly" maxlength="100">
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Total Biaya</label>
                                  <div class="col-sm-7">
                                      <div class="input-group">
                                          <span class="input-group-addon">Rp.</span>
                                          <input type="text" name="total_biaya" value="<?php echo number_format($row->total_biaya,0,'','.');?>" class="form-control" maxlength="15" readonly="readonly" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Total Transaksi</label>
                                  <div class="col-sm-7">
                                      <div class="input-group">
                                          <span class="input-group-addon">Rp.</span>
                                          <input type="text" name="total_transaksi" value="<?php echo number_format($row->total_transaksi,0,'','.');?>" class="form-control" maxlength="15" readonly="readonly" required>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Status</label>
                                  <div class="col-sm-4">
                                      <input type="text" name="status" value="<?php echo $row->status;?>" class="form-control" readonly="readonly" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Tgl Pendaftaran</label>
                                  <div class="col-sm-4">
                                      <input type="text" name="tgl_pendaftaran" value="<?php echo date('d/m/Y',strtotime($row->tgl_pendaftaran))?>" class="form-control" readonly="readonly" required>
                                  </div>
                              </div>
                          </form>
                          <?php
                      }
                      ?>
                  </div>
              </div>
          </div>
          <div class="col-md-7">
              <div class="box box-primary flat">
                  <div class="box-header">Rincian Pembayaran
                      <button type="button" class="btn btn-primary btn-sm pull-right" onclick="add_pembayaran()"><span class="glyphicon glyphicon-plus"></span> Pembayaran</button>
                      <hr>
                  </div>
                  <div class="box-body">
                      <div class="table-responsive">
                          <table class="table table-hover table-striped table-bordered">
                              <thead>
                              <tr>
                                  <th>Jumlah Pembayaran</th>
                                  <th class="text-center">Tanggal</th>
                                  <th>Admin</th>
                                  <th class="text-center">Tools</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($rincian_pembayaran as $row) { ?>
                              <tr>
                                  <td>Rp. <?php echo number_format($row->jml_pembayaran,0,'','.');?></td>
                                  <td class="text-center"><?php echo date('d/m/Y', strtotime($row->tgl_pembayaran));?></td>
                                  <td><?php echo $row->admin;?></td>
                                  <td class="text-center">
                                      <div class="dropdown">
                                          <button class="btn btn-default dropdown-toggle btn-sm" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                              <span class="glyphicon glyphicon-cog"></span>
                                          </button>
                                          <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
                                              <li><a href="<?php echo current_url() . "/" . $row->id_detail_pembayaran;?>" target="_blank">Print Kwitansi</a></li>
                                              <li onclick="edit_detail_pembayaran(<?php echo $row->id_detail_pembayaran;?>)"><a href="#">Update</a></li>
                                              <li onclick="del_detail_pembayaran(<?php echo $row->id_detail_pembayaran;?>)"><a href="#">Hapus !</a></li>
                                          </ul>
                                      </div>
                                  </td>
                              </tr>
                              <?php
                              }
                              ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
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

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url('assets/plugins/jQuery/jquery-2.2.3.min.js')?>"></script>

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>

<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/select2/select2.min.js') ?>"></script>

<script src="<?php echo base_url('assets/dist/js/app.min.js')?>"></script>
</body>
</html>
<script type="text/javascript">
    var method_pembayaran;
    var id_update_pembayaran;
    $(document).ready(function (e) {


    });
    function add_pembayaran() {
        method_pembayaran = "add/detail_pembayaran"
        $('.modal-title').html("Tambah Pembayaran")
        $("#act_pembayaran").html("SIMPAN")
        $("#form-pembayaran")[0].reset()
        $("#modal-pembayaran").modal("show")
    }
    function edit_detail_pembayaran(id_detail_pembayaran) {
        method_pembayaran = "update/detail_pembayaran"
        id_update_pembayaran = id_detail_pembayaran
        $('.modal-title').html("Edit Pembayaran")
        $("#act_pembayaran").html("UPDATE")
        $("#form-pembayaran")[0].reset()

        $.ajax({
            type: "POST",
            url: "edit/detail_pembayaran",
            dataType: "JSON",
            data: {id_detail_pembayaran:id_detail_pembayaran},
            success: function (data) {
                $('[name="jml_pembayaran"]').val(data.jml_pembayaran)
                $("#modal-pembayaran").modal("show")
            }
        });
    }
    function save_detail_pembayaran() {
        if ($('[name="jml_pembayaran"]').val() == "") {
            alert("Jumlah Pembayaran Harus Diisi !!!")
        } else {
            if (method_pembayaran == "add/detail_pembayaran") {
                $.ajax ({
                   type: "POST",
                   url: method_pembayaran,
                   data: {jml_pembayaran:$('[name="jml_pembayaran"]').val(),id_bimbel:<?php echo $this->uri->segment(4);?>},
                   success: function (data) {
                       if (data == 1){
                           $("#modal-pembayaran").modal("hide")
                           location.reload()
                       }
                   }
                });
            } else if (method_pembayaran == "update/detail_pembayaran") {
                $.ajax ({
                    type: "POST",
                    url: method_pembayaran,
                    data: {id_detail_pembayaran:id_update_pembayaran,jml_pembayaran:$('[name="jml_pembayaran"]').val(),id_bimbel:<?php echo $this->uri->segment(4);?>},
                    success: function (data) {
                        if (data == 1){
                            $("#modal-pembayaran").modal("hide")
                            location.reload()
                        }
                    }
                });
            }
        }
    }
    function del_detail_pembayaran(id_detail_pembayaran) {
       if (confirm("Hapus Detail Pembayaran !!!")) {
           $.ajax({
               type: "POST",
               url: "trash/detail_pembayaran",
               data: {id_detail_pembayaran:id_detail_pembayaran,id_bimbel:<?php echo $this->uri->segment(4);?>},
               success: function (data) {
                   if (data == 1) {
                       location.reload(true)
                   }
               }
           });
       }

    }
</script>