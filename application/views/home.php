<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E - Vote</title>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body>
<div class="container-fluid" style="padding-top: 8px">
    <div class="panel panel-primary">
      <div class="panel-heading"><center><h2>LIVE COUNT!</h2></center></div>
      <div class="panel-body">
        <div class="row">
          <?php $no = 1; foreach ($calon as $c) { ?>
            <div class="<?= $totalcalon == 3 ? 'col-md-4' : 'col-md-6'?>">
            <div class="box box-primary">
              <div class="box-body">
                <!-- <input type="hidden" name="PASLON_01" value="<?=$totalcalon1?>"> -->
                <center><h1 id="totalcalon<?=$no++?>ID"></h1></center>
                <center>Total Suara</center>
              </div>
              <div class="box-footer">
                <center><h2><?=$c->nama_calon?><br> &<br> <?=$c->nama_wakil?></h2></center>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="col-md-12">
          <div class="box box-warning">
            <div class="box-body">
              <center><h1 id="totalsuaraID"></h1></center>
            </div>
            <div class="box-footer">
              <center><h1>Total Suara Masuk</h1></center>
            </div>
          </div>
        </div>
        <a href="<?=base_url('login')?>" class="btn btn-success">Klik Disini untuk menggunakan hak suara Anda</a>
      </div>
    </div>
</div>
<script src="<?=base_url('assets')?>/bower_components/jquery/dist/jquery.min.js"></script>
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://js.pusher.com/5.0/pusher.min.js"></script>
<!--   <script>
    Pusher.logToConsole = true;

    var pusher = new Pusher('69255538d1455b016d48', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      swal({
        icon : "success",
        text : 'Suara Sah',
        button: false,
        timer : 2000,
      });
    });
  </script> -->
</body>
</html>