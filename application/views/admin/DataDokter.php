<?php if($this->session->flashdata('notif')){ ?>
  <div onload="nowuiDashboard.showNotification('top','center', 'success' '<?= $this->session->flashdata('notif')?>')"></div>
<?php }?>
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Dokter</h4>
                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <a href=<?= site_url('admin/HomeDokter/addDokter/prosesDataDokter')?>>
                  <button class="btn btn-info" style="float:left;">
                    <i class="now-ui-icons ui-1_simple-add"></i><span> Add Data</span>
                  </button>
                </a>
                <table id="table" class="table-borderless table-bordered"
                    data-pagination="true"
                    data-toggle="table"
                    data-search="true"
                    data-sort-class="table-active"
                    data-sortable="true"
                    data-page-list="[10, 25, 50, 100, all]"
                    data-show-button-icon="true"
                    data-pagination-loop="false">
                    <thead class="text-primary" style="font-size: 10px">
                      <th data-sortable="true">#</th>
                      <th data-sortable="true">Username</th>
                      <th data-sortable="true">Email</th>
                      <th data-sortable="true">Real Name</th>
                      <th>Gender</th>
                      <th>Specialist</th>
                      <th>Bio</th>
                      <th>No Telp</th>
                      <th>Gambar</th>
                      <th class="text-right">Action</th>
                    </thead>
                    <tbody>
                    <?php 
                      $no = 1;
                      foreach ($dokter as $as => $row){
                    ?>
                      <tr>
                        <td><?= $no++?></td>
                        <td><?= $row->username?></td>
                        <td><?= $row->email?></td>
                        <td><?= $row->nama_dokter?></td>
                        <td><?= $row->jk?></td>
                        <td><?= $row->spesialisasi?></td>
                        <td><?= $row->bio?></td>
                        <td><?= $row->no_telp?></td>
                        <td><img src="<?= base_url().'assets/images/Dokter/'.$row->gambar;?>" alt="<?= $row->gambar?>" class="img-circle img-thumbnail" width="100px"></td>
                        <td class="text-right">
                          <a href="<?= site_url('admin/HomeDokter/editDokter/'.$row->id_dokter)?>"><button class="btn btn-sm btn-info"><i class="now-ui-icons ui-2_settings-90"></i></button></a>
                          <a data-target="#hapusData<?=$row->id_dokter?>" data-toggle="modal"><button class="btn btn-sm btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></button></a>
                        </td>
                      </tr>
                    <?php 
                      }
                    ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

          <?php foreach($dokter as $ag => $row){?>
            <div class="modal fade" id="hapusData<?= $row->id_dokter?>" role="dialog">
              <div class="modal-dialog modal-md">
                <?php echo form_open_multipart('admin/HomeDokter/deleteDataDokter','',array('id_dokter' => $row->id_dokter, 'oldPhoto' => $row->gambar)) ?>
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" class="btn btn-sm btn-default"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                      <h4>Delete Data Dokter</h4>
                    </div>
                    <div class="modal-body">
                      <p>Are You Sure You Want To Delete This Doctor (<?= $row->username ?>)</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" data-dismiss="modal" class="btn btn-info btn-flag"> No</button>
                      <button type="submit" name="delete" class="btn btn-flag btn-danger"> Yes</button>
                    </div>
                  </div>
                <?php echo form_close(); ?> 
              </div>
            </div>
          <?php }?>


