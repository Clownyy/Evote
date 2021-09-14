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