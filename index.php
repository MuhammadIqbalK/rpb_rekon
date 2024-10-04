<!DOCTYPE html>
<html>
<?php
session_start();

include ("config/konek.php");
include ("config/ceklogin.php");
include("PHPExcel/PHPExcel/IOFactory.php");
ini_set("display_errors", 1);
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
?>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
<meta name="author" content="Creative Tim">
<title>RPB</title>
<!-- Favicon -->
<link rel="icon" href="assets/img/brand/mapping_odp.png" type="image/png">
<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
<!-- Icons -->
<link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
<link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
<!-- Page plugins -->
<!-- Argon CSS -->
<link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
         <img src="assets/img/RPB.png" class="navbar-brand-img" alt="" width="250">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="?pages=home">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard Rekon</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="?pages=data did">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Data DID</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="http://10.60.170.179/vestynaplus/menu.php?pages=upld_rpb_fix"
                target="_blank" rel="noopener noreferrer">
                <i class="ni ni-cloud-upload-96 text-primary"></i>
                <span class="nav-link-text">Upload RPB</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="download_djatimbalnus.php">
                <i class="ni ni-cloud-download-95 text-primary"></i>
                <span class="nav-link-text">Download Detail Jatim Balnus</span>
              </a>
            </li>
      <li class="nav-item">
              <a class="nav-link active" href="download_djateng.php">
                <i class="ni ni-cloud-download-95 text-primary"></i>
                <span class="nav-link-text">Download Detail Jateng</span>
              </a>
            </li>
          <li class="nav-item">
              <a class="nav-link active" href="did_Jatimbalnus.php">
                <i class="ni ni-cloud-download-95 text-primary"></i>
                <span class="nav-link-text">Download DID Jatim Balnus</span>
              </a>
            </li>
      <li class="nav-item">
              <a class="nav-link active" href="did_Jateng.php">
                <i class="ni ni-cloud-download-95 text-primary"></i>
                <span class="nav-link-text">Download DID Jateng</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link active" href="excel_rpb_all.php">
                <i class="ni ni-cloud-download-95 text-primary"></i>
                <span class="nav-link-text">Download Rekap</span>
              </a>
            </li>
      <li class="nav-item">
            <a class="nav-link active" href="download_all.php"
              target="_blank" rel="noopener noreferrer">
              <i class="ni ni-cloud-download-95 text-primary"></i>
              <span class="nav-link-text">Download ALL</span>
            </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
				
				<img alt="Image placeholder" <?php if($_SESSION['dash_stt']=='1'){ ?> src="https://diarium.telkom.co.id/getfoto/<?php echo $_SESSION['nik']; ?>" <?php }if($_SESSION['dash_stt']=='2'){ ?> src="assets/img/theme/team-4.jpg"  <?php }?>>
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['dash_nama']; ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-divider"></div>
                <a href="logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
	<script type="text/javascript">
const tableContainer = document.querySelector('.table-responsive');
const tbody = tableContainer.querySelector('tbody');

fetch('https://jsonplaceholder.typicode.com/todos')
  .then((res) => res.json())
  .then((todos) => {
    todos.forEach(({ id, title, completed }) => {
      tbody.insertAdjacentHTML('beforeend', `
        <tr>
          <td style="text-align:right">${id}</td>
          <td>${title}</td>
          <td style="text-align:center">${completed}</td>
        </tr>
      `);
    });
  });
</script>
<style type="text/css">
/* General setup */
*, *::before, *::after {
  box-sizing: border-box;
}
:root {
  --table-header-color: #0B63F7;
  --table-row-even-color: #DFD;
  --table-row-odd-color: #FFF;
  --table-border-color: #0FF4AE;
}
body {
  font-size: smaller;
}

/* Core table wrapper setup */
.table-responsive {
  width: 100%;
  height: 526px; /* Change this to whatever you want */
  overflow-y: auto;
}
.table-responsive table {
  width: 100%;
}
.table-responsive thead {
  position: sticky; /* Important */
  top: 0;
  z-index: 10;
}
.table-responsive th, .table-responsive td {
  padding: 0.125rem 0.25rem;
}

/* Borders (need to specify left/right and top/bottom) */
.table-responsive {
  border: thin solid var(--table-border-color);
}
.table-responsive table {
  border-collapse: separate; /* Do not collapse! */
  border-spacing: 0;
}
.table-responsive th, .table-responsive td {
  border-right: thin solid var(--table-border-color);
}
.table-responsive th {
  border-bottom: thin solid var(--table-border-color);
}
.table-responsive th:last-child, .table-responsive td:last-child {
  border-right: none;
}
.table-responsive tbody tr td {
  border-bottom: thin solid var(--table-border-color);
}
.table-responsive tbody tr:last-child td {
  border-bottom: none;
}

.fix {
  position:sticky;
  background: white;
}
.fix:first-child {
  left:0;
  width:120px;
}
.fix:last-child {
  right:0;
  width:120px;
}

/* Colors (does not require the wrapper) */
thead {
  background: var(--table-header-color);
}
tbody tr:nth-child(odd) {
  background: var(--table-row-odd-color);
}
/*tbody tr:nth-child(even) {
  background: var(--table-row-even-color);
}*/

/* Custom scrollbar */
::-webkit-scrollbar {
  width: 10px;
}
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 5px;
}
::-webkit-scrollbar-thumb {
  background: var(--table-header-color); 
  border-radius: 5px;
}
::-webkit-scrollbar-thumb:hover {
  background: var(--table-header-color); 
}
</style>
    <?php include ("menu/isi.php"); ?>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center  text-lg-left  text-muted">
             Copyright &copy; 2022 Telkom Indonesia All rights reserved.</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>
