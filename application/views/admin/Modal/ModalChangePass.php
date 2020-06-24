<?php foreach($user as $ag => $row){?>
            <div class="modal fade" id="gantipass<?= $row->id_dokter?>" role="dialog">
              <div class="modal-dialog modal-md">
                <?php echo form_open_multipart('admin/UserDokter/changePass','',array('id_dokter' => $row->id_dokter)) ?>
                  <div class="modal-content">
                    <div class="modal-header modal-md">
                      <button type="button" data-dismiss="modal" class="btn btn-sm btn-default"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                      <h4>Change Password</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form-row">
                        <div class="col-md-12">
                          <label for="pass">New Password</label>
                            <input type="password" name="newPass" id="pass" class="form-control"/>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-12">
                          <label for="pass1">Confirm Password</label>
						  	<input type="password" name="confirmPass" id="pass1" class="form-control"/>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" data-dismiss="modal" class="btn btn-info btn-flag"> No</button>
                      <button type="submit" name="change" class="btn btn-flag btn-warning"> Yes</button>
                    </div>
                  </div>
                <?php echo form_close(); ?> 
              </div>
            </div>
<?php }?>