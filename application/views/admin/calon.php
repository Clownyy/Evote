    <section class="content-header"></section>
    <section class="content">
      <div class="box box-primary">
        <div class="box-header">
          <!-- <?php if($totalcalon >= 3){ ?> -->
          <button type="button" class="btn pull-right" <?php $totalcalon >= 3 ? 'disabled' : ' ' ?> data-toggle="modal" data-target="#addCalon"><i class="fa fa-plus"></i> Tambah Calon</button>
          <!-- <?php }else{ ?> -->
          <button type="button" class="btn pull-right" data-toggle="modal" data-target="#addCalon"><i class="fa fa-plus"></i> Tambah Calon</button>
          <!-- <?php } ?> -->
        </div>
        <div class="box-body">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No.</th>
                <th>ID Pilih</th>
                <th>Nama Ketua</th>
                <th>Nama Wakil</th>
                <th>Visi Misi</th>
                <th>Foto</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1; foreach($datacalon as $c){ ?>
              <tr>
                <td><?=$no++;?></td>
                <td><?=$c->id_pilih?></td>
                <td><?=$c->nama_calon?></td>
                <td><?=$c->nama_wakil?></td>
                <td><?=$c->visi?></td>
                <td><?=$c->misi?></td>
                <td><img class="img-circle pull-right" style="width: 50px" src="<?=base_url('assets/image_calon/').$c->foto_calon?>"></td>
                <td style="text-align: right;">
                  <button type="button" data-toggle="modal" data-target="#editCalon<?=$c->id_pilih?>" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button>
                  <a href="<?=base_url('admin/hapusCalon/').$c->id_pilih?>" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></a>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  <div id="addCalon" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Tambah Calon</h4>
        </div>
        <form action="<?=base_url('admin/addCalon')?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Kode Pilih</label>
              </div>
              <div class="col-md-9">
                <select class="form-control" name="id_pilih" required>
                  <option value="PASLON_01">PASLON_01</option>
                  <option value="PASLON_02">PASLON_02</option>
                  <option value="PASLON_03">PASLON_03</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Nama Ketua</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="nama_calon" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Nama Wakil</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="nama_wakil"required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Visi</label>
              </div>
              <div class="col-md-9">
                <textarea class="form-control" name="visi" required></textarea>
              </div>
            </div><div class="row">
              <div class="col-md-3">
                <label class="control-label">Misi</label>
              </div>
              <div class="col-md-9">
                <textarea class="form-control" name="misi" required></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Foto Calon</label>
              </div>
              <div class="col-md-9">
                <img style="width: 250px" id="previewImg">
                <input type="file" class="form-control" name="foto_calon" onchange="readURL1(this)" required>
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
  <?php foreach($datacalon as $c) {?>
  <div id="editCalon<?=$c->id_pilih?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Calon</h4>
        </div>
        <form action="<?=base_url('admin/updateCalon')?>" method="post">
          <div class="modal-body">
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Kode Pilih</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="id_pilih" readonly value="<?=$c->id_pilih?>">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Nama Ketua</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="ketua" value="<?=$c->nama_calon?>">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Nama Wakil</label>
              </div>
              <div class="col-md-9">
                <input type="text" class="form-control" name="wakil" value="<?=$c->nama_wakil?>">
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Visi</label>
              </div>
              <div class="col-md-9">
                <textarea class="form-control" name="visi"><?=$c->visi?></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Misi</label>
              </div>
              <div class="col-md-9">
                <textarea class="form-control" name="misi"><?=$c->misi?></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3">
                <label class="control-label">Foto Calon</label>
              </div>
              <div class="col-md-9">
                <img style="width: 250px" id="previewImg1" src="<?=base_url('assets/image_calon/'.$c->foto_calon)?>">
                <input type="file" class="form-control" name="foto_calon" onchange="readURL2(this)">
                <small>(Biarkan kosong jika tidak diganti)</small>
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
