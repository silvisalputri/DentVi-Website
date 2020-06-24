<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href=<?= base_url().'assets/images/apple-icon.png'?>>
        <link rel="icon" type="image/png" href=<?= base_url().'assets/images/favicon.png'?>>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Now UI Dashboard by Creative Tim
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

  <body class="offline-doc">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
    <div class="container">
      <div class="navbar-wrapper">
        <div class="navbar-toggle">
          <button type="button" class="navbar-toggler">
            <span class="navbar-toggler-bar bar1"></span>
            <span class="navbar-toggler-bar bar2"></span>
            <span class="navbar-toggler-bar bar3"></span>
          </button>
        </div>
        <a class="navbar-brand" href="#pablo">DentistVi Admin</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
        <span class="navbar-toggler-bar navbar-kebab"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="../examples/dashboard.html">
              Back to Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/creativetimofficial/now-ui-dashboard/issues" target="_blank">
              Have an issue?
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image">
        <img src=<?= base_url().'assets/images/header.jpg'?> alt="" width="100%" height="100%">
    </div>
    <div class="container text-center">
      <div class="col-md-8 ml-auto mr-auto">
        <div class="brand">
            <?php echo form_open('user/ControlUserLogin/checkData')?>
                <div class=" align-content-md-center">
                    <h3>Login</h3>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
          <hr>
                </div>
                <button type="submit" name="in" class="btn btn-primary">Submit</button>
            <?= form_close(); ?>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class=" container-fluid ">
      <nav>
        <ul>
          <li>
            <a href="http://presentation.creative-tim.com">
              About Us
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              User
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
      <script>
        $(document).ready(function() {
          // Javascript method's body can be found in assets/js/demos.js
          demo.initDashboardPageCharts();

        });
      </script>
  </footer>
</body>

</html>