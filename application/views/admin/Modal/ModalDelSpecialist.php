<?php foreach($pop as $ag => $row){?>
            <div class="modal fade" id="delete<?= $row->id_specialist?>" role="dialog">
              <div class="modal-dialog modal-md">
                <?php echo form_open_multipart('admin/DOkterSpecial/deleteData','',array('id' => $row->id_specialist)) ?>
                  <div class="modal-content">
                    <div class="modal-header modal-md">
                      <button type="button" data-dismiss="modal" class="btn btn-sm btn-default"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                      <h4>Delete Data</h4>
                    </div>
                    <div class="modal-body">
                      <p> Are You Sure Wnat TO delete This(<?= $row->keterangan?>, Category of <?= $row->nama_specialist?>)</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" data-dismiss="modal" class="btn btn-info btn-flag"> No</button>
                      <button type="submit" name="delete" class="btn btn-flag btn-warning"> Yes</button>
                    </div>
                  </div>
                <?php echo form_close(); ?> 
              </div>
            </div>
<?php }?>