<div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Add Data Description Specialist</h4>
              </div>
              <div class="card-body">
              <?php echo form_open_multipart('admin/DokterSpecial/addData')?>
                <div class="form-group">
                    <label for="Special">Specialist Name</label>
                    <select name="name" id="Spec" class="form-control">
                      <option value="Dental Implent">Dental Implant</option>
                      <option value="Laser Densitry">Laser Densitry</option>
                      <option value="Orthodontics">Orthodontics</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="desc">Description</label>
                    <textarea name="ket" type="text" class="form-control" id="desc" placeholder="exmp...."></textarea>
                </div>
                <div class="form-group">
                  <label for="harga">price</label>
                  <div class=" input-group">
                    <div class=" input-group-prepend">
                      <div class="input-group-text">
                      <label>Rp</label>
                      </div>
                    </div>
                    <input name="harga" type="text" class="form-control" id="harga" placeholder="Number">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary" name="add">Add Data</button>
                <?php form_close();?>
              </div>
            </div>
          </div>