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
              <span class="hidden-xs"><?= $this->session->userdata('nama_lengkap') ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="<?=base_url('assets')?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                  <?=$this->session->userdata('nama_lengkap')?>
                  <small>Administrator</small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="<?= $this->session->userdata('admin_login') ? base_url('admin/logout') : base_url('vote/logout')?>" class="btn btn-default btn-flat">Sign Out</a>
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
          <p><?=$this->session->userdata('nama_lengkap')?></p>
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
        <?php if(!$this->session->userdata('admin_login')){ ?>
        <li class="">
        	<a href="<?=base_url('vote')?>"><i class="fa fa-user"></i> Pilih Ketua OSIS</a>
        </li>
    	<?php } ?>
        <?php if($this->session->userdata('admin_login')){ ?>
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="<?=base_url('admin')?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="header">MASTER DATA</li>
        <li class="">
          <a href="<?=base_url('admin/calon')?>">
            <i class="fa fa-user"></i> <span>Data Calon</span>
          </a>
        </li>
        <li class="">
          <a href="<?=base_url('admin/pemilih')?>">
            <i class="fa fa-group"></i> <span>Data Pemilih</span>
          </a>
        </li>
        <li class="">
          <a href="<?=base_url('admin/count')?>">
            <i class="fa fa-check"></i> <span>Data Penghitungan</span>
          </a>
        </li>
    	<?php } ?>
  </aside>
<div class="content-wrapper">
    <?php echo $contents ?>
</div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> BETA
    </div>
    <strong>Copyright &copy; <?=date('Y')?> <a href="https://www.facebook.com/bafaqih23" target="_blank">Muhammad Bafaqih</a>.</strong>
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
<script type="text/javascript">
  window.onload = date_time('date_time');
</script>
<script>
  function readURL1(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
 
    reader.onload = function (e) {
      $('#previewImg')
      .attr('src', e.target.result);
    };
 
    reader.readAsDataURL(input.files[0]);
  }
}
</script>
<script>
  function readURL2(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
 
    reader.onload = function (e) {
      $('#previewImg1')
      .attr('src', e.target.result);
    };
 
    reader.readAsDataURL(input.files[0]);
  }
}
</script>
<script>
    function loadcount(){
      $.ajax({
        url: "<?php echo base_url()?>home/loadcount",
        method: "GET",
        dataType: "JSON",
        success: function(data){
          let calon1 = (data.totalcalon1*100/data.totalpemilih).toFixed(2)+ "%"
          let calon2 = (data.totalcalon2*100/data.totalpemilih).toFixed(2)+ "%"
          let calon3 = (data.totalcalon3*100/data.totalpemilih).toFixed(2)+ "%"
          let suara = (data.totalsuara*100/data.totalpemilih).toFixed(2)+ "%"
          $('#totalcalon1ID').html(calon1)
          $('#totalcalon2ID').html(calon2)
          $('#totalcalon3ID').html(calon3)
          $('#totalsuaraID').html(suara)
        }
      })
    }

    loadcount()
    setInterval(function(){
      loadcount()
    }, 1000)
</script>
<script type="text/javascript">
$("ul a").click(function(e) {
    var link = $(this);

    var item = link.parent("li");

    if (item.children("ul").length > 0) {
        var href = link.attr("href");
        link.attr("href", "#");
        setTimeout(function () { 
            link.attr("href", href);
        }, 300);
        e.preventDefault();
    }
})
.each(function() {
    var link = $(this);
    if (link.get(0).href === location.href) {
        link.addClass("active").parents("li").addClass("active");
        return false;
    }
});
</script>
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
