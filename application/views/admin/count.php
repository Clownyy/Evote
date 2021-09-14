<section class="content-header"></section>
<section class="content">
  <div class="box box-primary">
    <div class="box-header">
      <a href="<?=base_url('admin/deleteAllCount')?>" class="btn btn-danger pull-right"><i class="fa fa-trash"></i> Delete All</a>
    </div>
    <div class="box-body">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>ID Pilih</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($count as $c){ ?>
          <tr>
            <td><?=$c->id_pilih?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</section>