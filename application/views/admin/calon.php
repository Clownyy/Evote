<div class="container-fluid mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <h3 class="mb-0">Data Kandidat</h3>
                    <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#addCalon"><i class="fa fa-plus"></i> Tambah Calon</button>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center" id="table-data">
                        <thead class="thead-light">
                            <tr>
                                <th>No.</th>
                                <th>ID Pilih</th>
                                <th>Nama Ketua</th>
                                <th>Nama Wakil</th>
                                <th>Visi</th>
                                <th>Misi</th>
                                <th>Foto</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php $no = 1; foreach($datacalon as $c){ ?>
                              <tr>
                                <td><?=$no++;?></td>
                                <td><?=$c->id_pilih?></td>
                                <td><?=$c->nama_calon?></td>
                                <td><?=$c->nama_wakil?></td>
                                <td><?=$c->visi?></td>
                                <td><?=$c->misi?></td>
                                <td><img class="img-circle pull-right" style="width: 50px" src="<?=base_url('assets/image_calon/').$c->foto_calon?>"></td>
                                <td>
                                    <button type="button" data-toggle="modal" data-target="#editCalon<?=$c->id_pilih?>" class="btn btn-warning btn-circle"><i class="fa fa-pencil-alt"></i></button>
                                    <a class="btn btn-danger btn-circle" href="<?=base_url('admin/hapusCalon/').$c->id_pilih?>"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addCalon" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Kandidat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button>
          </div>
        </form>
        </div>
    </div>
</div>
<?php foreach($datacalon as $c) {?>
  <div class="modal fade" id="editCalon<?=$c->id_pilih?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kandidat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url('admin/updateCalon')?>" method="post" enctype="multipart/form-data">
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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
          </div>
        </form>
        </div>
    </div>
</div>
<?php } ?>