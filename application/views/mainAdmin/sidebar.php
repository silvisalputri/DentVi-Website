
<div class="sidebar" data-color="orange">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
    <script>
      const ps = new PerfectScrollBar("#sidebar-wrapper");
      ps.destroy();
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
<!-- sIDEBAR enD -->
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