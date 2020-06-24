<!--Awalan untuk appointment--> 
  <form>
    <div class="col-md-12">
      <div class="sec-title max-width text-center gambarr2">
        <h1>Meet Our Doctors</h1>
        <p>Here you can get doctors available time &amp; you can get your perfect visiting time to hospital.</p>
      </div>
    </div>
    <?php foreach($data as $ar => $row){?>
    <div class="card mb-3 ml-5 mr-5">
      <div class="card mb-3 ml-5 mr-5">
        <div class="row no-gutters">
          <div class="col-md-2">
            <img src=<?= base_url(). 'assets/images/Dokter/'.$row->gambar?> class="card-img gambarr oval2" alt="<?= $row->gambar?>">
          </div>
          <div class="col-md-10">
            <div class="card-body textt">
              <h5 class="card-title starcu"><?=$row->spesialisasi?></h5>
              <h4 class="card-title"><?=$row->nama_dokter?></h4>
              <p class="card-text"><?= $row->bio?></p>
              <p><strong>QUALIFICATION</strong></p>
              <p>BDS , MDS - Plastic And Cosmetic Surgeon,</p>
              <i class="fas fa-phone-alt starcu"></i> <?= $row->no_telp?>
              <i class="fa fa-envelope starcu"></i>  <?= $row->email?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <?php }?>
  </form>
