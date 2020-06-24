  <!--Awalan untuk appointment--> 
  <form>
    <div class="col-md-12">
      <div class="sec-title max-width text-center gambarr2">
        <h1>Testimonials</h1>
        <p>Recorded statements from our patient that support credibility and level of expertise.</p>
      </div>
    </div>
</form>
  
<div class="row row-cols-1 row-cols-md-4">
<?php foreach($data as $af => $row){?>
  <div class="col mb-4">
    <div class="card oval3 geser">
      <div class="card-body text-center">
      <?php if($row->rating >= 0 && $row->rating <= 1.0){ ?> 
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star "></i> 
        <i class="fas fa-star "></i> 
        <i class="fas fa-star "></i> 
        <i class="fas fa-star "></i>
      <?php }elseif($row->rating >= 1.1 && $row->rating <=2.0){?>
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star "></i> 
        <i class="fas fa-star "></i> 
        <i class="fas fa-star "></i>
      <?php }elseif($row->rating >= 2.1 && $row->rating <=3.0){?>
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star "></i> 
        <i class="fas fa-star "></i>
      <?php }elseif($row->rating >= 3.1 && $row->rating <=4.4){?>
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star "></i>
      <?php }elseif($row->rating >= 4.5 && $row->rating <=5.0){?>
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star starcu"></i> 
        <i class="fas fa-star starcu"></i>
      <?php }?>
        <h5 class="card-title"><?= $row->nama_testi?></h5>
        <p class="card-text"><?= $row->keterangan?></p>
      </div>
    </div>
  </div>
<?php }?>
</div>
