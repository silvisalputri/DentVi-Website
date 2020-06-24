<?php if($this->session->userdata('loggin')) {?>

<div class="col-md-12">
      <div class="sec-title max-width text-center gambarr2">
        <h1>See Doctor's Schedule</h1>
        <p>Here you can get doctors available time &amp; you can get your perfect visiting time to hospital.</p>
      </div>
    </div>
<table class="table mb-4"  data-toggle="table" data-pagination="true" data-search="true">
  <thead>
    <tr>
        <th>
            No
        </th>
        <th>
            Dokter Name
        </th>
        <th>
            Spesialisasi
        </th>
        <th class="text-right">
            Full
        </th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1;
        foreach($doc as $as => $row){?>
        <tr>
            <td id="doc" style="display: none"><input type="text" value="<?= $row->id_dokter?>"></td>
            <td><?= $no++?></td>
            <td><?= $row->nama_dokter ?></td>
            <td><?= $row->spesialisasi ?></td>
            <td class="text-right">
                <a data-target="#choose<?= $row->id_dokter?>" data-toggle="modal" id="btn<?= $row->id_dokter ?>">
                    <button type="button" name="pick" class="btn btn-primary" id="">
                        <i class="fas fa-cogs"></i>
                    </button>
                </a>
            </td>
        </tr>
    <?php }?>
  </tbody>
</table>
<?php foreach($doc as $ag => $row){?>
            <div class="modal fade" id="choose<?= $row->id_dokter?>" role="dialog">
              <div class="modal-dialog modal-md">
                  <div class="modal-content">
                    <div class="modal-header modal-md">
                      <h4>Dokter Schedule (<?= $row->nama_dokter ?>)</h4>
                    </div>
                    <div class="modal-body" id="html">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Start</th>
                                        <th>End</th>
                                    </tr>
                                </thead>
                                <tbody id="tbo<?=$row->id_dokter?>">
                                    <script>
                                    $('#btn<?=$row->id_dokter?>').click(function(){
                                        $.ajax({
                                            url: "<?php echo site_url("User/ControlAppoint/show/".$row->id_dokter); ?>",
                                            type: "post",
                                            cache: false,
                                            error: function(){
                                                alert("Error!!!");
                                            },
                                            success: function(data){
                                                //alert(data);
                                                $('#tbo<?=$row->id_dokter?>').html(data);
                                            }
                                        });
                                    });
                                        
                                    </script>
                                </tbody>
                            </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" data-dismiss="modal" class="btn btn-info btn-flag"> Close</button>
                    </div>
                  </div>    
              </div>
            </div>
            
        <?php }?>
<?php }else{?>
<div class="text-center m-5 p-5">
    <div><a href="<?= site_url('user/ControlUserLogin/') ?>"><button class="btn btn-primary">Login First</button></a></div>
</div>
<?php } ?>



