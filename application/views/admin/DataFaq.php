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
                <h4 class="card-title"> Data FAQ</h4>
                <a href=<?= site_url('admin/CFaq/addFaq')?>>
                  <button class="btn btn-info" style="float:right;">
                    <i class="now-ui-icons ui-1_simple-add"></i><span> Add Data</span>
                  </button>
                </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table-borderless" data-pagination="true"
                    data-toggle="table"
                    data-search="true"
                    data-sort-class="table-active"
                    data-sortable="true"
                    data-page-list="[10, 25, 50, 100, all]"
                    data-show-button-icon="true"
                    data-pagination-loop="false">
                    <thead class="text-primary" style="font-size: 10px">
                      <th>#</th>
                      <th>Pertanyaan</th>
                      <th>Jawaban</th>
                      <th class="text-right">Action</th>
                    </thead>
                    <tbody>
                    <?php 
                      $no = 1;
                      foreach ($faq_data as $as => $row){
                    ?>
                      <tr>
                        <td><?= $no++?></td>
                        <td><?= $row->pertanyaan?></td>
                        <td><?= $row->jawaban?></td>
                        <td class="text-right">
                          <a href="<?= site_url('admin/CFaq/editFaq/'.$row->id_faq)?>"><button class="btn btn-sm btn-info"><i class="now-ui-icons ui-2_settings-90"></i></button></a>
                          <a data-target="#hapusData<?=$row->id_faq?>" data-toggle="modal"><button class="btn btn-sm btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></button></a>
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

          <?php foreach($faq_data as $ag => $row){?>
            <div class="modal fade" id="hapusData<?= $row->id_faq?>" role="dialog">
              <div class="modal-dialog modal-md">
                <?php echo form_open_multipart('admin/CFaq/deleteDataFaq','',array('id_faq' => $row->id_faq)) ?>
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" class="btn btn-sm btn-default"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                      <h4>Delete Data Faq</h4>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure delete this question (<?= $row->pertanyaan?>)?</p>
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


