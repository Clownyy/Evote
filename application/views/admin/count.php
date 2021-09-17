<div class="container-fluid mt-4">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-0">
                    <h3 class="mb-0">Data Perhitungan</h3>
                    <a href="<?=base_url('admin/deleteAllCount')?>" class="btn btn-danger" style="float: right;"><i class="fa fa-trash"></i> Delete All</a>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center" id="table-data">
                        <thead class="thead-light">
                            <tr>
                                <th>ID Pilih</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php foreach($count as $c){ ?>
                              <tr>
                                <td><?=$c->id_pilih?></td>
                              </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>