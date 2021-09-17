<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>E Voting</title>
  <!-- Favicon -->
  <link rel="icon" href="<?=base_url('assets')?>/dist/admin/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/dist/admin/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="<?=base_url('assets')?>/dist/admin/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?=base_url('assets')?>/dist/admin/css/argon.css?v=1.2.0" type="text/css">
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
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center" style='font-size:50px' >
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="<?=base_url('assets')?>/dist/admin/img/brand/unas.png" >
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin')?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/calon')?>">
                <i class="ni ni-planet text-orange"></i>
                <span class="nav-link-text">Data Calon</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/pemilih')?>">
                <i class="ni ni-pin-3 text-primary"></i>
                <span class="nav-link-text">Data Pemilih</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url('admin/count')?>">
                <i class="ni ni-single-02 text-yellow"></i>
                <span class="nav-link-text">Data Perhitungan</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <i class="hidden-xs text-sm" style="color: white" id="date_time"></i>
              <!-- <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div> -->
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?=base_url('assets')?>/dist/admin/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body ml-2 d-none d-lg-block">
                    <span class="mb-0 text-sm font-weight-bold"><?= $this->session->userdata('nama_lengkap') ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <div class="dropdown-divider"></div>
                <a href="<?= $this->session->userdata('admin_login') ? base_url('admin/logout') : base_url('vote/logout')?>" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                   <span> Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <?php echo $contents ?>
    <div class="container-fluid mt--6">
      <footer class="footer pt-0">
       TEST
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?=base_url('assets')?>/dist/admin/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url('assets')?>/dist/admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url('assets')?>/dist/admin/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?=base_url('assets')?>/dist/admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?=base_url('assets')?>/dist/admin/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="<?=base_url('assets')?>/dist/admin/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="<?=base_url('assets')?>/dist/admin/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="<?=base_url('assets')?>/dist/admin/js/argon.js?v=1.2.0"></script>
  <script type="text/javascript" src="<?=base_url('assets')?>/dist/date_time.js"></script>
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
</body>

</html>