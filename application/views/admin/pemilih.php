<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Evote | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/morris.js/morris.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <script type="text/javascript" src="<?=base_url('assets')?>/dist/date_time.js"></script>

<style>
  .row{
    padding-top: 8px;
  }
  .btn-circle.btn-xl {
    width: 70px;
    height: 70px;
    padding: 10px 16px;
    border-radius: 35px;
    font-size: 24px;
    line-height: 1.33;
  }
  .btn-circle {
    width: 30px;
    height: 30px;
    padding: 6px 0px;
    border-radius: 15px;
    text-align: center;
    font-size: 12px;
    line-height: 1.42857;
  }
</style>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php foreach($session_admin as $g) {?>
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>VT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>EVT</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="asd">
              <i class="hidden-xs" id="date_time"></i>
            </a>
          </li>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?= $g->nama_lengkap ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?=base_url('assets')?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                  <?=$g->nama_lengkap?>
                  <small>Administrator</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?=base_url('index.php/admin/logout')?>" class="btn btn-default btn-flat">Sign Out</a>
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
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url('assets')?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$g->nama_lengkap?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> SuperAdmin</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="<?=base_url('index.php/admin')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="header">MASTER DATA</li>
        <li class="">
          <a href="<?=base_url('index.php/admin/calon')?>">
            <i class="fa fa-user"></i> <span>Data Calon</span>
          </a>
        </li>
        <li class="active">
          <a href="<?=base_url('index.php/admin/pemilih')?>">
            <i class="fa fa-group"></i> <span>Data Pemilih</span>
          </a>
        </li>
        <li class="">
          <a href="<?=base_url('index.php/admin/count')?>">
            <i class="fa fa-check"></i> <span>Data Penghitungan</span>
          </a>
        </li>
  </aside>
<?php } ?>
  <div class="content-wrapper">
    <section class="content-header"></section>
    <section class="content">
      <div class="box box-primary">
        <div class="box-header">
          <button type="button" class="btn pull-right" data-toggle="modal" data-target="#addPemilih"><i class="fa fa-plus"></i> Tambah Calon</button>
        </div>
        <div class="box-body">
          <table class="table table-striped table-bordered" id="tablePemilih">
            <thead>
              <tr>
                <th>No.</th>
                <th>NIS</th>
                <th>Nama Lengkap</th>
                <th>Kelas</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach($pemilih as $c){ ?>
              <tr>
                <td><?=$no++;?></td>
                <td><?=$c->nis?></td>
                <td><?=$c->nama_lengkap?></td>
                <td><?=$c->kelas?> <?=$c->jurusan?></td>
                <td><?php if($c->status_vote == 0) { ?> <span class="label label-danger">Belum Memilih</span> <?php }else{ ?> <span class="label label-success">Sudah Memilih</span> <?php } ?></td>
                <td style="text-align: right;">
                  <?php if($c->status_vote == 0){ ?>
                  <button type="button" data-toggle="modal" data-target="#editPemilih<?=$c->nis?>" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                  <a href="<?=base_url('index.php/admin/hapusPemilih/').$c->nis?>" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></a>
                  <?php }else{ ?>
                  <button disabled class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                  <button disabled class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button>
                  <?php } ?>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
          <p>Note : Data pemilih yang sudah memilih tidak bisa diubah</p>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> BETA
    </div>
    <strong>Copyright &copy; <?=date('Y')?> <a href="https://www.facebook.com/bafaqih23" target="_blank">Muhammad Bafaqih</a>.</strong>
  </footer>
  <?php foreach($pemilih as $c) {?>
  <div id="editPemilih<?=$c->nis?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Calon</h4>
        </div>
        <form action="<?=base_url('index.php/admin/updatePemilih')?>" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">NIS</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" readonly name="nis" value="<?=$c->nis?>">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Nama Lengkap</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="nama_lengkap" value="<?=$c->nama_lengkap?>">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Kelas</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="kelas" value="<?=$c->kelas?>">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Jurusan</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="jurusan" value="<?=$c->jurusan?>">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Status</label>
              </div>
              <div class="col-md-9">
                <label><?php if($c->status_vote == 0) { ?> <span class="label label-danger">Belum Memilih</span> <?php }else{ ?> <span class="label label-success">Sudah Memilih</span> <?php } ?></label>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php } ?>
<div id="addPemilih" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Pemilih</h4>
      </div>
      <form action="<?=base_url('index.php/admin/addPemilih')?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <label class="control-label">NIS</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" name="nis">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label class="control-label">Nama Lengkap</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" name="nama_lengkap">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label class="control-label">Kelas</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" name="kelas">
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <label class="control-label">Jurusan</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" name="jurusan">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- jQuery 3 -->
<script src="<?=base_url('assets')?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?=base_url('assets')?>/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url('assets')?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="<?=base_url('assets')?>/bower_components/raphael/raphael.min.js"></script>
<script src="<?=base_url('assets')?>/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?=base_url('assets')?>/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?=base_url('assets')?>/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?=base_url('assets')?>/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?=base_url('assets')?>/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?=base_url('assets')?>/bower_components/moment/min/moment.min.js"></script>
<script src="<?=base_url('assets')?>/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?=base_url('assets')?>/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url('assets')?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?=base_url('assets')?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url('assets')?>/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url('assets')?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?=base_url('assets')?>/dist/js/pages/dashboard.js"></script>
<!-- DataTables -->
<script src="<?=base_url('assets')?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets')?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets')?>/dist/js/demo.js"></script>
<script type="text/javascript">
  window.onload = date_time('date_time');
</script>
<script>
  $(function () {
    $('#tablePemilih').DataTable()
  })
</script>
</body>
</html>
