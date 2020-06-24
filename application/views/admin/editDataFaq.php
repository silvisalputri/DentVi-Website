      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Edit Data FAQ</h4>
              </div>

              <div class="card-body">
              <?php foreach($faq_data as $as => $row) {?>
              <?php echo form_open_multipart('admin/CFaq/editData', '', array('id' => $row->id_faq))?>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="pertanyaan">Pertanyaan</label>
                        <input name="pertanyaan" type="text" class="form-control" id="inputPertanyaan" placeholder="Pertanyaan" value="<?= $row->pertanyaan?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="jawaban">Jawaban</label>
                        <input name="jawaban" type="text" class="form-control" id="inputJawaban" placeholder="Jawaban" value="<?= $row->jawaban?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
                <?php form_close();?>
              <?php }?>
              </div>
            </div>
          </div>