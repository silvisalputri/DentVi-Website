<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<?php if($this->session->userdata('loggin')){?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href=<?= base_url().'assets/images/apple-icon.png'?>>
  <link rel="icon" type="image/png" href=<?= base_url().'assets/images/favicon.png'?>>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    DentistVi Admin
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href=<?= base_url().'assets/css/bootstrap.min.css'?> rel="stylesheet" />
  <link href=<?= base_url().'assets/css/now-ui-dashboard.css?v=1.5.0'?> rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href=<?= base_url().'assets/css/style.css'?> rel="stylesheet" />
</head>

  <?php if($this->session->flashdata('notif')){?>
  <body class="user-profile" onload="nowuiDashboard.showNotification('top', 'center', 'success','<?= $this->session->flashdata('notif')?>')">
  <?php }elseif($this->session->flashdata('failed')){?>
  <body class="user-profile" onload="nowuiDashboard.showNotification('top', 'center', 'warning','<?= $this->session->flashdata('failed')?>')">
  <?php }else{?>
  <body class="user-profile">
  <?php }?> 
<div class="wrapper">
    <div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
		<script>
			const ps = new PerfectScrollbar('.sidebar-wrapper');
			ps.update();
		</script>
      <div class="logo">
        <a href="http://localhost/DentistVi" class="simple-text logo-mini">
          DV
        </a>
        <a href="http://localhost/DentistVi" class="simple-text logo-normal">
          DentistVi
		</a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="active">
            <a href=<?= site_url('admin/HomeDokter')?>>
				<i class="now-ui-icons design_app"></i>
				<p>Dashboard</p>
            </a>
          </li>
          <li>
			<a href="#dokter" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle small">
				<i class="fas fa-stethoscope"></i>	
				<p>Dokter</p>
			</a>	
				<ul class="collapse list-unstyled ml-4 pl-2" id="dokter">
					<li>
						<a href=<?= site_url('admin/HomeDokter/DataDokter')?>><i class="fas fa-user-md"></i>Data Dokter</a>
					</li>
					<li>
						<a href=<?= site_url('admin/DokterSpecial')?>><i class="fas fa-book-medical"></i>Specialist</a>
					</li>
				</ul>
			</li>
          <li>
            <a href="#user" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle small">
              <i class="now-ui-icons users_single-02"></i>
              <p>User</p>
            </a>
			<ul class="collapse list-unstyled ml-4 pl-2" id="user">
				<li>
					<a href=<?=site_url('admin/DataUser')?>><i class="now-ui-icons users_single-02"></i> Data User</a>
				</li>
				<li>
					<a href=<?= site_url('admin/CTesti')?>><i class="fas fa-thumbs-up"></i>Testimonials</a>
				</li>
			</ul>
          </li>
		  <li>
            <a href=<?= site_url('admin/CFaq')?>>
				<i class="fas fa-question-circle"></i>
              	<p>Faq</p>
            </a>
          </li>
          <li>
            <a href=<?= site_url('admin/UserDokter')?>>
              <i class="now-ui-icons users_circle-08"></i>
              <p>User Profile</p>
            </a>
          </li>
          <li class="" id="list">
            <a href=<?= site_url('admin/login/logout')?>>
            <i class="now-ui-icons media-1_button-power"></i>
              <p>Log out</p>
            </a>
          </li>
        </ul>
      </div>
	</div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo"><?= $this->session->userdata('name')?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= site_url('admin/UserDokter/') ?>">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="con     tent"> 
        <div class="row">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
              </div>
              <div class="card-body">
                <?php foreach($user as$art => $row){ ?>
                <?php echo form_open_multipart('admin/UserDokter/self','', array('id_dokter' => $row->id_dokter, 'photo' => $row->gambar))?>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Company (disabled)</label>
                        <input type="text" class="form-control" disabled="" placeholder="Company" value="DentistVi">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input name="user" type="text" class="form-control" placeholder="Username" value="<?= $row->username?>">
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input name="email" type="email" class="form-control" placeholder="Email" value="<?= $row->email?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Dokter Real Name</label>
                        <input type="text" name="real" class="form-control" placeholder="Dr.Real Name" value="<?= $row->nama_dokter?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Specialisasi</label>
                        <input type="text" name="spec" class="form-control" placeholder="Specialisasi" value="<?= $row->spesialisasi?>">
                      </div>
                    </div>
                  </div>
        
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" name="telp" class="form-control" placeholder="Phone Number" value="<?= $row->no_telp?>">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                      <label for="Gender">Gender</label>
                        <select name="gender" id="Gender" class="form-control">
                              <?php if($row->jk == "Male") {?>
                                  <option>Choose...</option>
                                  <option value="Male" selected>Male</option>
                                  <option value="Female">Female</option>
                              <?php }elseif($row->jk == "Female"){?>
                                  <option>Choose...</option>
                                  <option value="Male">Male</option>
                                  <option value="Female" selected>Female</option>
                              <?php }?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4 pl-1">
                      <div class="">
                        <label>Picture</label>
                        <div class="input-group">
							          <input type="file" class="form-control" name="picture">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Bio</label>
                        <textarea name="bio" rows="4" cols="80" class="form-control" placeholder="Here can be your description"><?= $row->bio?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row justify-content-between ml-auto mr-auto">
                    <a data-toggle="modal" data-target="#gantipass<?= $row->id_dokter?>"><button class="btn btn-primary">Change Password</button></a>
                    <a data-toggle="modal" data-target="#changeTime<?= $row->id_dokter?>"><button class="btn btn-primary">Adding Schedule</button></a>
                    <button type="submit" class="btn btn-primary" name="edit">Update Profile</button>
                  </div>
                <?php echo form_close();?>
                <?php }?>
              </div>
            </div>
          </div>
		  <!-- Modal -->
		  <!-- Change Pass Modal -->
         <?php 
          $this->load->view($modal);
		 ?>
		 <!-- Adding Time Modal -->
		  <?php foreach($user as $ag => $row){?>
                  <div class="modal fade" id="changeTime<?= $row->id_dokter?>" role="dialog">
                    <div class="modal-dialog modal-md">
                      <?php echo form_open_multipart('admin/UserDokter/addTime','',array('id' => $row->id_dokter)) ?>
                        <div class="modal-content">
                          <div class="modal-header modal-md">
                            <button type="button" data-dismiss="modal" class="btn btn-sm btn-default"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                            <h4>Adding Data</h4>
                          </div>
                          <div class="modal-body">
                            <p class="text-center">Adding Schedule</p>
                            <div class="row">
                              <div class="col-md-6">
                                <label for="">Start</label>
                                <input type="time" class="form-control" name="start" value="<?php echo date("H:i A") ?>">
                              </div>
                              <div class="col-md-6">
                                <label for="">End</label> 
                                <input type="time" class="form-control" name="end" value="<?php echo date("H:i A") ?>">
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" data-dismiss="modal" class="btn btn-info btn-flag"> No</button>
                            <button type="submit" name="add" class="btn btn-f	lag btn-warning"> Yes</button>
                          </div>
                        </div>
                      <?php echo form_close(); ?> 
                    </div>
                  </div>
		 <?php }?>
		 <!-- Delete Time Modal (Table)-->
		 <?php foreach($times as $ag => $row){?>
                  <div class="modal fade" id="see<?= $row->id_dokter?>" role="dialog">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                          <div class="modal-header modal-md">
                            <button type="button" data-dismiss="modal" class="btn btn-sm btn-default"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                            <h4>Tables</h4>
                          </div>
                          <div class="modal-body">
						  <?php echo form_open_multipart('admin/UserDokter/Schedule','',array('id' => $row->id_dokter)) ?>
                            <table class="table" data-toggle="table" data-height="299">
                                <thead>
                                    <tr>
                                        <th>Start</th>
                                        <th>End</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php foreach($times as $at => $col){?>
                                    <tr>
                                        <td><?= date("H:i A", strtotime($col->jam_mulai))?></td>
                                        <td><?= date("H:i A", strtotime($col->jam_selesai))?></td>
                                        <td class="text-right">
                                            <a data-target="#del<?= $col->id_jadwal?>" data-toggle="modal"><button type="button" name="del" class="btn btn-danger now-ui-icons ui-1_simple-remove"></button></a>
                                        </td>
                                    </tr>
									<?php }?>
                                </tbody>
                            </table>
						  <?php echo form_close(); ?>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" data-dismiss="modal" class="btn btn-flag btn-warning">Close</button>
                          </div>
                        </div>
                    </div>
                  </div>
         <?php }?>
         <?php foreach($times as $ag => $row){?>
                <div class="modal fade" id="del<?= $row->id_jadwal?>" role="dialog">
                    <div class="modal-dialog modal-md">
                      <?php echo form_open_multipart('admin/UserDokter/delTime','',array('id' => $row->id_jadwal)) ?>
                        <div class="modal-content">
                          <div class="modal-header modal-md">
                            <button type="button" data-dismiss="modal" class="btn btn-sm btn-default"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                            <h4>Deleting Data</h4>
                          </div>
                          <div class="modal-body">
                            <h3 class="text-center">Deleting Schedule</h3>
                            <p>Are You Sure Deleting This Time?</p>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" data-dismiss="modal" class="btn btn-info btn-flag"> No</button>
                            <button type="submit" name="del" class="btn btn-flag btn-warning"> Yes</button>
                          </div>
                        </div>
                      <?php echo form_close(); ?> 
                    </div>
                  </div>
         <?php }?>
		  <!-- End Modal -->
          <?php foreach($user as $ar => $row){?>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src=<?= base_url().'./assets/images/bg5.jpg'?> alt="bg5.jpg">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src=<?= base_url().'assets/images/Dokter/'.$row->gambar?> alt="<?= $row->gambar?>">
                    <h5 class="title"><?= $row->nama_dokter?></h5>
                  </a>
                  <p class="description">
                    <?= $row->username?>
                  </p>    
                </div>
                <p class="description text-center" style="word-wrap: break-word">
                  <?= $row->bio?>
				        </p>
              </div>
              <hr>
              <div class="text-center"><a data-toggle="modal" data-target="#see<?= $row->id_dokter?>"><button class="btn btn-info btn-sm ">Schedule</button></a></div>
                    <div class="button-container">
                      <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-facebook-f"></i>
                      </button>
                      <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-twitter"></i>
                      </button>
                      <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                        <i class="fab fa-google-plus-g"></i>
                      </button>
                    </div>
                  </div>
                </div>
          <?php }?>

        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src= <?= base_url().'assets/js/core/jquery.min.js'?>></script>
  <script src=<?= base_url().'assets/js/core/popper.min.js'?>></script>
  <script src=<?= base_url().'assets/js/bootstrap.min.js'?>></script>
  <script src=<?= base_url().'assets/js/plugins/perfect-scrollbar.jquery.min.js'?>></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src=<?= base_url().'assets/js/plugins/chartjs.min.js'?>></script>
  <!--  Notifications Plugin    -->
  <script src=<?= base_url().'assets/js/plugins/bootstrap-notify.js'?>></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src=<?= base_url().'assets/js/now-ui-dashboard.min.js?v=1.5.0'?> type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src=<?= base_url().'assets/demo.js'?>></script>
</body>

</html>
<?php }else{
    $this->load->view('admin/login'); // Redirect to login if user try to access through url
  }
?>