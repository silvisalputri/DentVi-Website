<?php foreach($doc as $ag => $row){?>
            <div class="modal fade" id="choose<?= $row->id_dokter?>" role="dialog">
              <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header modal-md">
                      <h4>Dokter Schedule (<?= $row->nama_dokter ?>)</h4>
                    </div>
                    <div class="modal-body">
                            <table class="table" data-toggle="table" data-height="299">
                                <thead>
                                    <tr>
                                        <th>Start</th>
                                        <th>End</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php foreach($time as $at => $col){?>
                                    <tr>
                                        <td><?= date("H:i A", strtotime($col->jam_mulai))?></td>
                                        <td><?= date("H:i A", strtotime($col->jam_selesai))?></td>
                                    </tr>
                                </table>
						    <?php }?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" data-dismiss="modal" class="btn btn-info btn-flag"> Close</button>
                    </div>
                  </div>    
              </div>
            </div>
    <?php }?>
