<!DOCTYPE html>
<html>
<head>
  <title>DentVi Website</title>
  <!--Membuat Judul -->
  <!--Menambahkan source dari js dan css -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=<?php echo base_url().'assets/css/bootstrap.min.css'?> media="screen">
  <link rel="stylesheet" type="text/css" href=<?= base_url().'assets/fontawesome/css/all.min.css'?>>
  <link rel="stylesheet" type="text/css" href=<?= base_url().'assets/css/style.css'?>>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script type="text/javascript" src=<?= base_url().'assets/js/bootstrap.min.js'?>></script>
  <script type="text/javascript" src=<?= base_url().'assets/js/jquery.js'?>></script>
  <script type="text/javascript" src=<?= base_url().'assets/js/bootstrap.js'?>></script>
</head>
<?php 
if($this->session->flashdata('sukses')){ ?>
	<body onload="nowuiDashboard.showNotification('top', 'center', 'success', '<?= $this->session->flashdata('sukses')?>')">
<?php }else{?>
<body>
<?php } ?>
  <!--Awalan untuk menu pertama untuk location, special offers, quotes, dan social media -->
  <nav class="navbar navbar-expand-lg navbar-light menu">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!--Awalan untuk location, special offers, quotes -->
        <ul class="navbar-nav mr-auto ml-5 mr-4">
          <li class="nav-item active">
            <a class="nav-link text-white"> <i class="fa fa-circle" style="font-size:6px;color:#00CED1"></i> Batam
              Center<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white"> <i class="fa fa-circle" style="font-size:6px;color:#00CED1"></i> Orthodonti
              50%<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link text-white"><i class="fa fa-circle" style="font-size:6px;color:#00CED1"></i> Clean Your
              Teeth While You Eat<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <!--Akhiran untuk location, special offers, quotes -->
        <!--Awalan untuk social media -->
        <div class="top-right">
          <ul class="navbar-nav mr-auto ml-5 mr-4">
            <li><a href="https://www.facebook.com/silvisalputri" target="blank"><i class="fa fa-facebook"
                  aria-hidden="true"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCjcmd9554TKoUERNK4r0oKA?view_as=subscriber" target="blank"><i
                  class="fa fa-youtube" aria-hidden="true"></i></a></li>
            <li><a href="https://www.instagram.com/silvislptr/" target="blank"><i class="fa fa-instagram"
                  aria-hidden="true"></i></a></li>
            <li><a href="https://www.skype.com/id/" target="blank"><i class="fa fa-skype" aria-hidden="true"></i></a>
            </li>
          </ul>
        </div>
            
        <!--Awalan untuk social media -->
      </div>
    </div>
    <!--Untuk memasukkan logo web -->
    <img src=<?= base_url().'assets/images/background.png'?> class="foto">
  </nav>
  <!--Akhiran untuk menu pertama untuk location, special offers, quotes, dan social media -->

  <!--Awalan untuk home, about us, specialist, doctors, more, search, dan book an appointment -->
  <nav class="navbar navbar-expand-lg navbar-light menu2 warna sticky-top">
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ml-5 ">
        <!--Awalan untuk home, about us, specialist, doctors, more-->
        <li class="nav-item active">
          <a class="nav-link navbarq" href=<?= site_url('HomeUser/index')?>> HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link navbarq" href=<?= site_url('User/ControlAbout/index')?>> ABOUT US <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link navbarq" href=<?= site_url('User/ControlSpecialist/special') ?>> SPECIALIST <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link navbarq" href=<?= site_url('User/ControlDoctor/index')?>> DOCTORS <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle navbarq mr-4" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
            aria-expanded="false" style="color: black;">MORE</a>
          <div class="dropdown-menu">
            <!--Terdiri dari beberapa submenu-->
            <a class="dropdown-item navbarq" href=<?= site_url('User/ControlFaq/index')?>>FAQ's</a>
            <a class="dropdown-item navbarq" href=<?= site_url('User/ControlTesti/index')?>>Testimonials</a>
            <a class="dropdown-item navbarq" href=<?= site_url('User/ControlAppoint/index')?>>Schedule</a>
          </div>
        </li>
        <!--Akhiran untuk home, about us, specialist, doctors, more-->
        <!--Awalan untuk search-->
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2 ml-4" type="search" placeholder="Search..." aria-label="Search">
          <a href="" class="fa fa-search mr-2" style="color: #2F4F4F"></a>
        </form>
        <div class="my-2 my-lg-0 ml-4">
        <?php if($this->session->userdata('loggin')){?>
          <a class="btn" role="button" data-target="#logout<?=$this->session->userdata('id')?>" data-toggle="modal">
          <?php if($this->session->userdata('gambar') != null){?>
                    <img src=<?= base_url().'assets/images/User/'.$this->session->userdata('gambar')?> width="40px" height="30px" class="d-inline-block rounded-circle">
          <?php }else{?>
            <img src=<?= base_url().'assets/images/default-avatar.png'?> width="40px" height="30px" class="d-inline-block rounded-circle">
          <?php }?>
                </a>
        <?php }else{?>
          <a class="btn" href=<?= site_url('user/ControlUserLogin/')?> role="button">
            <img src="<?= base_url().'assets/images/default-avatar.png'?>" width="40px" height="30px" class="d-inline-block rounded-circle">
          </a>
        <?php }?>
          </div>
    </div>

  </nav>
  <!--Akhiran untuk menu kedua untuk home, about us, specialist, doctors, more, search, dan book an appointment -->

  <!--Awalan untuk carousel with indicators dan 3 bagian card-->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src=<?= base_url().'assets/images/gambar1.jpg'?> class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src=<?= base_url().'assets/images/gambar2.jpg'?> class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src=<?= base_url().'assets/images/gambar3.jpg'?> class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src=<?= base_url().'assets/images/gambar4.jpg'?> class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src=<?= base_url().'assets/images/gambar5.jpg'?> class="d-block w-100" alt="...">
      </div>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <div class="card-group center">
        <div class="card text-black warna mb-3 " style="max-width: 18rem;">
          <div class="card-body">
            <h5 class="card-title">Welcome to the DentVi Website</h5>
            <p class="card-text">There are plenty ways how to make an appointment. You can call us on our.</p>
            <a href=<?= site_url('User/ControlAbout/index')?>  class="btn menu book oval btn-lg active text-white navbarq" style="font-size: 13px;"
              role="button" aria-pressed="true">Read More</a>
          </div>
        </div>
        <div class="card text-white menu mb-3" style="max-width: 18rem; font-size: 0px">
          <div class="card-body">
            <h5 class="text-left">Monday - Friday</h5>
            <h6 class="text-right">10.00 - 21.00</h6>
          </div>
          <hr>
          <div class="card-body">
            <h5 class="text-left">Saturday</h5> <br>
            <h6 class="text-right">10.00 - 17.00</h6>
          </div>
        </div>

        <!--Awalan untuk 3 bagian card-->
        <div class="card bg-light mb-3" style="max-width: 18rem;">
          <div class="card-header">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th><i class="fas fa-home" style="font-size: 30px"></i></th>
                  <th>Address <br>Jl. Rajawali 9</th>
                </tr>
              </thead>
            </table>
          </div>
          <div class="card-header">
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th rowspan="2"><i class="fas fa-phone-alt" style="font-size: 30px"></i></th>
                  <th>Phone Number <br> 085814590403</th>
                </tr>
              </thead>
            </table>
          </div>
        </div>
        <!--Akhiran untuk 3 bagian card-->
      </div>
    </div>
  </div>
  <!--Akhiran untuk carousel with indicators dan 3 bagian card-->


  <!--Start footer bottom area-->
  <section class="footer-bottom-area menu">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
          <div class="inner clearfix">
            <div class="copyright-text text-center letak2 specialities">
              <p>© <a class="text-white" href="#">DentVi</a> 2020, All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" id="logout<?= $this->session->userdata('id')?>" role="dialog">
              <div class="modal-dialog modal-md">
                <?php echo form_open_multipart('user/ControlUserLogin/logout','',array('id' => $this->session->userdata('id'))) ?>
                  <div class="modal-content">
                    <div class="modal-header modal-md">
                      <h4>Logout</h4>
                    </div>
                    <div class="modal-body text-center">
                      <button class="btn btn-danger" name="log">Logout</button>
                    </div>
                    <div class="modal-footer">
                      <button type="button" data-dismiss="modal" class="btn btn-info btn-flag"> Close</button>
                    </div>
                  </div>
                <?php echo form_close(); ?> 
              </div>
            </div>
