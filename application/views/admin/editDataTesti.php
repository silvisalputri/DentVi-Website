      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Edit Data Testimonial</h4>
              </div>

              <div class="card-body">
              <?php foreach($testi as $as => $row) {?>
              <?php echo form_open_multipart('admin/CTesti/editData', '', array('id_testimonial' => $row->id_testimonial))?>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputNama">Nama Testimonial</label>
                        <select name="nama" id="inputNama" class="form-control">
                          <?php foreach($user as $ar => $col){ ?>
                            <?php if($col->username === $row->nama_testi){?>
                              <option value="<?= $row->nama_testi?>" selected><?=$row->nama_testi?></option>
                            <?php }else{?>
                              <option value="<?= $col->username?>"><?= $col->username?></option>
                            <?php }?>
                          <?php }?>
                        </select>
                    </div>
                </div>              
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputRating">Rating</label>
                        <input name="rate" type="number" step="0.01" min="0.00" max="5.00" class="form-control" id="inputRating" placeholder="0.00" value="<?= $row->rating?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="Keterangan">Keterangan</label>
                        <input name="ket" type="text" class="form-control" id="inputKet" placeholder="Keterangan" value="<?= $row->keterangan?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
                <?php form_close();?>
              <?php }?>
              </div>
            </div>
          </div>