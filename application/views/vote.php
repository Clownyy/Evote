<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E - Vote | Dashboard</title>
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
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

<style>
  .custom{
    padding-top: 8px;
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
  <?php foreach($get_session as $g) {?>
  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>E</b>VT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>E</b>VOTE</span>
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
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs"><?= $g->nama_lengkap ?> &emsp; <?=$g->kelas?> <?=$g->jurusan?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?=base_url('assets')?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                  <?=$g->nama_lengkap?>
                  <small><?=$g->nis?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?=base_url('vote/logout')?>" class="btn btn-default btn-flat">Sign Out</a>
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
          <p><?= $g->nama_lengkap ?></p>
          <a href="#"><?= $g->nis ?></a>
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
        <li class="active"><a href=""><i class="fa fa-user"></i> Pilih Ketua OSIS</a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php } ?>
  <div class="content-wrapper">
    <form action="<?=base_url('vote/addCount')?>" method="post">
    <div class="container-fluid">
      <div class="row custom">
        <?php foreach($calon as $c){ ?>
        <div class="<?=$totalcalon == 3 ? 'col-md-4' : 'col-md-6' ?>">
          <div class="box box-primary">
            <div class="box-header"><h3 class="text-center">Calon Ketua dan Wakil Ketua OSIS</h3></div>
            <div class="box-body">
              <center>
                <img style="width: 50%; height: 50%;" src="<?=base_url('assets/image_calon/').$c->foto_calon?>"><br>
                <button style="margin-top: 10px" type="button" data-toggle="modal" data-target="#visMis<?=$c->id_pilih?>" class="btn btn-primary"><i class="fa fa-users"></i> Lihat Visi Misi</button>
              </center>
            </div>
            <div class="box-footer">
              <center><b><h4><?=$c->nama_calon?> & <?=$c->nama_wakil?></h4></b></center>
              <div class="row">
                <center>
                  <input type="radio" style="height: 30px; width: 30px;" name="id_pilih" value="<?=$c->id_pilih?>">
                </center>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
    <center><button style="font-size: 15pt" class="btn btn-success"><i class="fa fa-check"></i> Pilih Calon</button></center>
    </form>
  </div>
  <?php foreach($calon as $c) {?>
  <div id="visMis<?=$c->id_pilih?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Visi Misi Pasangan Calon</h4>
        </div>
        <div class="modal-body">
          <h3 style="font-weight: bold; font-style: italic;">Visi</h3>
          <p><?=$c->visi?></p>
          <h3 style="font-weight: bold; font-style: italic;">Misi</h3>
          <p><?=$c->misi?></p>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> BETA
    </div>
    <strong>Copyright &copy; <?=date('Y')?> <a href="https://smkn10jakarta.sch.id" target="_blank">Muhammad Bafaqih</a>.</strong>
  </footer>
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
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url('assets')?>/dist/js/demo.js"></script>
</body>
</html>
