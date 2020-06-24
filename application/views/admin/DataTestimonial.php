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
                <h4 class="card-title"> Data Testimonials</h4>
                <a href=<?= site_url('admin/CTesti/addTesti')?>>
                  <button class="btn btn-info" style="float:right;">
                    <i class="now-ui-icons ui-1_simple-add"></i><span> Add Data</span>
                  </button>
                </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class="text-primary" style="font-size: 10px">
                      <th>#</th>
                      <th>Nama Testimonial</th>
                      <th>Rating</th>
                      <th>Keterangan</th>
                      <th class="text-right">Action</th>
                    </thead>
                    <tbody>
                    <?php 
                      $no = 1;
                      foreach ($testi as $as => $row){
                    ?>
                      <tr>
                        <td><?= $no++?></td>
                        <td><?= $row->nama_testi?></td>
                        <td><?= $row->rating?></td>
                        <td><?= $row->keterangan?></td>
                        <td class="text-right">
                          <a href="<?= site_url('admin/CTesti/editTesti/'.$row->id_testimonial)?>"><button class="btn btn-sm btn-info"><i class="now-ui-icons ui-2_settings-90"></i></button></a>
                          <a data-target="#hapusData<?=$row->id_testimonial?>" data-toggle="modal"><button class="btn btn-sm btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></button></a>
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

          <?php foreach($testi as $ag => $row){?>
            <div class="modal fade" id="hapusData<?= $row->id_testimonial?>" role="dialog">
              <div class="modal-dialog modal-md">
                <?php echo form_open_multipart('admin/CTesti/deleteDataTesti','',array('id_testimonial' => $row->id_testimonial)) ?>
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" class="btn btn-sm btn-default"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                      <h4>Delete Data Testimonial</h4>
                    </div>
                    <div class="modal-body">
                      <p>Are You Sure You Want To Delete This Testimonial (<?= $row->nama_testi?>)</p>
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


