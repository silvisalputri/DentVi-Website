<div class="panel-header panel-header-sm">
      </div>
        <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title">Specialist</h4>
                
                <p class="category"> Here is a subtitle for this table</p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <a href=<?= site_url('admin/DokterSpecial/viewAdd')?>>
                  <button class="btn btn-info" style="float:left;">
                  Add Data
                </button></a>
                <table id="table" class="table-borderless table-bordered"
                    data-pagination="true"
                    data-toggle="table"
                    data-search="true"
                    data-sort-class="table-active"
                    data-sortable="true"
                    data-page-list="[10, 25, 50, 100, all]"
                    data-show-button-icon="true"
                    data-pagination-loop="false">
                    <thead class=" text-primary">
                      <th>
                        No
                      </th>
                      <th>
                        Specialist Name
                      </th>
                      <th>
                        Description
                      </th>
                      <th>
                        Price
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      <?php 
                      $no = 1;
                      foreach($pop as $as => $row){?>
                      <tr>
                        <td>
                          <?= $no++?>
                        </td>
                        <td>
                          <?= $row->nama_specialist?>
                        </td>
                        <td>
                          <?= $row->keterangan?>
                        </td>
                        <td>
                          Rp. <?= number_format($row->harga,2,',','.')?>
                        </td>
                        <td class="text-right">
                            <a data-target="#edit<?=$row->id_specialist?>" data-toggle="modal"><button class="btn btn-sm btn-info"><i class="now-ui-icons ui-2_settings-90"></i></button></a>
                          <?php if($this->session->userdata('akses') == "admin"){?> <!-- Cek Hak Akses -->
                            <a data-target="#delete<?=$row->id_specialist?>" data-toggle="modal"><button class="btn btn-sm btn-danger"><i class="now-ui-icons ui-1_simple-remove"></i></button></a>
                          <?php }else{?>
                            <a data-target="#delete<?=$row->id_specialist?>" data-toggle="modal"><button class="btn btn-sm btn-danger" disabled><i class="now-ui-icons ui-1_simple-remove"></i></button></a>
                          <?php }?> 
                        </td>
                      <?php }?>
                      </tr>
                    </tbody>
                  </table>
                  <?php 
                    $this->load->view($modal);
                  ?>
                  <?php foreach($pop as $ag => $row){?>
                  <div class="modal fade" id="edit<?= $row->id_specialist?>" role="dialog">
                    <div class="modal-dialog modal-md">
                      <?php echo form_open_multipart('admin/DokterSpecial/updateData','',array('id' => $row->id_specialist)) ?>
                        <div class="modal-content">
                          <div class="modal-header modal-md">
                            <button type="button" data-dismiss="modal" class="btn btn-sm btn-default"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                            <h4>Delete Data</h4>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                                <label for="Special">Specialist Name</label>
                                <select name="name" id="Spec" class="form-control">
                                  <?php if($row->nama_specialist == "Dental Implent"){?>
                                    <option value="Dental Implent" selected>Dental Implent</option>
                                    <option value="Laser Densitry">Laser Densitry</option>
                                    <option value="Orthodontics">Orthodontics</option>
                                  <?php }elseif($row->nama_specialist == "Laser Densitry"){?>
                                    <option value="Dental Implent">Dental Implent</option>
                                    <option value="Laser Densitry" selected>Laser Densitry</option>
                                    <option value="Orthodontics">Orthodontics</option>
                                  <?php }else{?>
                                    <option value="Dental Implent">Dental Implent</option>
                                    <option value="Laser Densitry">Laser Densitry</option>
                                    <option value="Orthodontics" selected>Orthodontics</option>
                                  <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea name="ket" type="text" class="form-control" id="desc" placeholder="exmp...."><?= $row->keterangan?></textarea>
                            </div>
                            <div class="form-group">
                              <label for="harga">price</label>
                              <div class=" input-group">
                                <div class=" input-group-prepend">
                                  <div class="input-group-text">
                                  <label>Rp</label>
                                  </div>
                                </div>
                                <input name="harga" type="text" class="form-control" id="harga" placeholder="Number" value="<?= $row->harga?>">
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" data-dismiss="modal" class="btn btn-info btn-flag"> No</button>
                            <button type="submit" name="edit" class="btn btn-flag btn-warning"> Yes</button>
                          </div>
                        </div>
                      <?php echo form_close(); ?> 
                    </div>
                  </div>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>