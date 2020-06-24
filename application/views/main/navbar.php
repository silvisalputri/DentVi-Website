<nav class="navbar navbar-expand-lg navbar-light menu" >
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
          <!--Awalan untuk location, special offers, quotes -->
          <ul class="navbar-nav mr-auto ml-5 mr-4" >            
            <li class="nav-item active"> 
              <a class="nav-link text-white"> <i class="fa fa-circle" style="font-size:6px;color:#00CED1"></i> Batam Center<span class="sr-only">(current)</span></a> 
            </li>
            <li class="nav-item active"> 
              <a class="nav-link text-white"> <i class="fa fa-circle" style="font-size:6px;color:#00CED1"></i> Orthodonti 50%<span class="sr-only">(current)</span></a> 
            </li> 
            <li class="nav-item active"> 
                <a class="nav-link text-white"><i class="fa fa-circle" style="font-size:6px;color:#00CED1"></i> Clean Your Teeth While You Eat<span class="sr-only">(current)</span></a> 
            </li> 
          </ul> 
          <!--Akhiran untuk location, special offers, quotes -->
          <!--Awalan untuk social media -->
          <div class="top-right">
            <ul class="navbar-nav mr-auto ml-5 mr-4">
                <li><a href="https://www.facebook.com/silvisalputri" target="blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCjcmd9554TKoUERNK4r0oKA?view_as=subscriber" target="blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/silvislptr/" target="blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://www.skype.com/id/" target="blank"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
            </ul>
          </div> 
          <div class="my-2 my-lg-0">
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
          <!--Awalan untuk social media -->   
      </div>
    </div>
    <!--Untuk memasukkan logo web -->
    <img src=<?= base_url(). 'assets/images/background.png'?> class="foto">
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
          <a class="nav-link dropdown-toggle navbarq mr-4" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;">MORE</a>
            <div class="dropdown-menu">
              <!--Terdiri dari beberapa submenu-->  
              <a class="dropdown-item navbarq" href=<?= site_url('User/ControlFaq/index')?>>FAQ's</a>
              <a class="dropdown-item navbarq" href=<?= site_url('User/ControlTesti/index')?>>Testimonials</a>
              <a class="dropdown-item navbarq" href=<?= site_url('User/ControlAppoint/index')?>>Schedule</a>
        </li>
        <!--Akhiran untuk home, about us, specialist, doctors, more--> 
      <!--Awalan untuk search-->   
      <form class="form-inline my-2 my-lg-0"> 
        <input class="form-control mr-sm-2 ml-4" type="search" placeholder="Search..." aria-label="Search"> 
        <a href="" class="fa fa-search mr-2" style="color: #2F4F4F"></a>
      </form> 
      <!--Akhiran untuk search-->  
      <!--Awalan untuk book an appointment-->    
      
    </div>
  </nav>
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
            </div><div class="modal fade" id="logout<?= $this->session->userdata('id')?>" role="dialog">
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