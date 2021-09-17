<div class="container-fluid mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <h3 class="mb-0">Data Pemilih</h3>
                    <button type="button" class="btn btn-primary" style="float: right;" data-toggle="modal" data-target="#addPemilih"><i class="fa fa-plus"></i> Tambah Pemilih</button>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center" id="table-data">
                        <thead class="thead-light">
                          <tr>
                            <th>No.</th>
                            <th>NIS</th>
                            <th>Nama Lengkap</th>
                            <th>Kelas</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody class="list">
                            <?php $no = 1; foreach($pemilih as $c){ ?>
                              <tr>
                                <td><?=$no++;?></td>
                                <td><?=$c->nis?></td>
                                <td><?=$c->nama_lengkap?></td>
                                <td><?=$c->kelas?> <?=$c->jurusan?></td>
                                <td><?php if($c->status_vote == 0) { ?> <span class="badge badge-pill badge-danger">Belum Memilih</span> <?php }else{ ?> <span class="badge badge-pill badge-success">Sudah Memilih</span> <?php } ?></td>
                                <td>
                                  <?php if($c->status_vote == 0){ ?>
                                  <button type="button" data-toggle="modal" data-target="#editPemilih<?=$c->nis?>" class="btn btn-warning btn-circle"><i class="fa fa-pencil-alt"></i></button>
                                  <a href="<?=base_url('admin/hapusPemilih/').$c->nis?>" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></a>
                                  <?php }else{ ?>
                                  <button disabled class="btn btn-warning btn-circle"><i class="fa fa-pencil-alt"></i></button>
                                  <button disabled class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></button>
                                  <?php } ?>
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
<div class="modal fade" id="addPemilih" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Pemilih</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url('admin/addPemilih')?>" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <label class="control-label">NIS</label>
            </div>
            <div class="col-md-9">
              <input type="text" class="form-control" name="nis">
              <p style="color: red">*Masukkan NIS dengan benar, setelah ter input, tidak bisa diubah</p>
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
<?php foreach($pemilih as $c) {?>
  <div class="modal fade" id="editPemilih<?=$c->nis?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Pemilih</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?=base_url('admin/updatePemilih')?>" method="post">
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