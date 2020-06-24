      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Add Data Testimonial</h4>
              </div>
              <div class="card-body">
              <?php echo form_open_multipart('admin/CTesti/prosesDataTesti')?>
                <div class="form-row">  
                    <div class="form-group col-md-4">
                        <label for="inputNama">Nama Testimonial</label>
                        <select name="nama" id="inputNama" class="form-control">
                          <?php foreach($user as $ar => $row){ ?>
                            <option value="<?= $row->username?>"><?= $row->username?></option>
                          <?php }?>
                        </select>
                    </div>
                </div>              
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputRating">Rating</label>
                        <input name="rate" type="number" step="0.01" min="0.00" max="5.00" class="form-control" id="inputRating" placeholder="0.00">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="Keterangan">Keterangan</label>
                        <input name="ket" type="text" class="form-control" id="inputKet" placeholder="Keterangan">
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary" name="add">Add Data</button>
                <?php form_close();?>
              </div>
            </div>
          </div>