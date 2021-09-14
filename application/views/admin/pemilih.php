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
                  <a href="<?=base_url('admin/hapusPemilih/').$c->nis?>" class="btn btn-danger btn-circle"><i class="fa fa-trash"></i></a>
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
  <?php foreach($pemilih as $c) {?>
  <div id="editPemilih<?=$c->nis?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" type="button" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Calon</h4>
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
<div id="addPemilih" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" type="button" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Pemilih</h4>
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