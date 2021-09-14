<section class="content-header"></section>
<section class="content">
  <div class="row">
    <div class="col-md-3">
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?=$totalcalon?></h3>
          <p>Jumlah Calon</p>
        </div>
        <div class="icon">
          <i class="fa fa-user"></i>
        </div>
        <a href="" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?=$totalpemilih?></h3>
          <p>Jumlah Pemilih</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?=$totalsuaramasuk?></h3>
          <p>Jumlah Suara Masuk</p>
        </div>
        <div class="icon">
          <i class="fa fa-check"></i>
        </div>
        <a href="" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="small-box bg-red">
        <div class="inner">
          <h3><?=$totalpemilih-$totalsuaramasuk?></h3>
          <p>Yang Belum Memilih</p>
        </div>
        <div class="icon">
          <i class="fa fa-warning"></i>
        </div>
        <a href="" class="small-box-footer">More Info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
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
    </div>
  </div>
</section>