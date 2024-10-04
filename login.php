<!DOCTYPE html>
<html>
<?php
function LDAP_auth($PHP_AUTH_USER1,$PHP_AUTH_PW1){
   $auth=0;
   global $nama;
   $ldapconfig['host'] = 'ldap.telkom.co.id';
   $ldapconfig['authrealm'] = 'User Intranet Telkom ND';
   if ($PHP_AUTH_USER1 != "" && $PHP_AUTH_PW1 != "") {
        $ds=@ldap_connect($ldapconfig['host']);
        $r = @ldap_search( $ds, " ", 'uid=' . $PHP_AUTH_USER1);
        if ($r) {
            $result = @ldap_get_entries( $ds, $r);
            if (isset($result[0])) {
                if (@ldap_bind( $ds, $result[0]['dn'], $PHP_AUTH_PW1) ) {
					$auth=1;
                }
            }
        } 
    }
   return $auth; 
}

session_start();
include ("config/konek.php");
if(isset($_POST['OK'])) {
	$portal_auth=0;
	$portal_auth_d=0;
	$entered_user=$_POST['Username'];
	$entered_password=$_POST['Password'];
	if(isset( $PHP_AUTH_USER ) && isset($PHP_AUTH_PW)){
    	$portal_auth=LDAP_auth($PHP_AUTH_USER,$PHP_AUTH_PW);
	}
	if(isset( $entered_user ) && isset( $entered_password )){
    	$portal_auth_d=LDAP_auth($entered_user,$entered_password );
	} 
	$login=$entered_user;
	$passwd=md5($entered_password);
	if($portal_auth_d==0) { 
		$sql='select a."NIK", a."NAMA", a."PROFILE", a."KD_WITEL", b."SNAMA", b."TNAME", b."LNAME", a."STATUS"
			  From develop."USER_RPB" a,develop."WITEL" b 
              Where a."KD_WITEL"=b."KD_WITEL" and a."STATUS"=2 and a."NIK"=\''.$login.'\' and a."PASSWORD"=\''.$passwd.'\'';
	    //echo $sql;
   		$stmt = pg_query($conn,$sql);
   		if($line=pg_fetch_array($stmt)){ 
			$nik=$line['NIK'];
			$dash_nama=$line['NAMA'];  
			$dash_id_profile=$line['PROFILE'];
			$dash_witel=$line['KD_WITEL'];
			$dash_lwitel=$line['SNAMA'];
			$dash_lname=$line['LNAME'];
			$dash_switel=$line['TNAME'];
			$dash_stt=$line['STATUS'];
			
			$_SESSION['nik_rpb'] = $nik;
			$_SESSION['dash_nama_rpb'] = $dash_nama;
			$_SESSION['dash_id_profile_rpb'] = $dash_id_profile;
			$_SESSION['dash_witel_rpb'] = $dash_witel;
			$_SESSION['dash_lwitel_rpb'] = $dash_lwitel;
			$_SESSION['dash_lname_rpb'] = $dash_lname;
			$_SESSION['dash_switel_rpb'] = $dash_switel;
			$_SESSION['dash_stt_rpb'] = $dash_stt;
   ?>
			<script>window.location.href="index.php";</script>
            <!--<script language=javascript>
			setTimeout("location.href='menu.php'", 1000);
			</script>-->
   <?php
		}else{
   ?>
		  <script>alert('Anda belum terdaftar di aplikasi ini!')</script>;
		  <script>window.location.href="login.php";</script>
	<?php
		}
 }else{
   $sql='select a."NIK", a."NAMA", a."PROFILE", a."KD_WITEL", a."STATUS",b."SNAMA",b."TNAME",b."LNAME"
		 From develop."USER_RPB" a,develop."WITEL" b 
         Where a."KD_WITEL"=b."KD_WITEL" and a."STATUS"=1 and a."NIK"=\''.$login.'\'';	
   //echo $sql;		
   $stmt = pg_query($conn,$sql);
   if($line=pg_fetch_array($stmt)){
      $nik=$line['NIK'];
      $dash_nama=$line['NAMA'];  
      $dash_id_profile=$line['PROFILE'];
	  $dash_witel=$line['KD_WITEL'];
	  $dash_lwitel=$line['SNAMA'];
	  $dash_lname=$line['LNAME'];
	  $dash_switel=$line['TNAME'];
	  $dash_stt=$line['STATUS'];
		 $_SESSION['nik_rpb'] = $nik;
		 $_SESSION['dash_nama_rpb'] = $dash_nama;
		 $_SESSION['dash_id_profile_rpb'] = $dash_id_profile;
		 $_SESSION['dash_witel_rpb'] = $dash_witel;
	   	 $_SESSION['dash_lwitel_rpb'] = $dash_lwitel;
	     $_SESSION['dash_lname_rpb'] = $dash_lname;
		 $_SESSION['dash_switel_rpb'] = $dash_switel;
		 $_SESSION['dash_stt_rpb'] = $dash_stt;
?> 
	   <script>window.location.href="index.php";</script>
<?php
   }else{
?>
      <script> alert ('User LDAP anda belum terdaftar di aplikasi ini atau Database Gangguan!')</script> 
      <script> window.location.href="login.php";</script>
<?php 
   }
}
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>RPB</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/RPB.png" type="image/jpg">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
  <!-- Navbar -->
  
  <!-- Main content -->
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
      
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-md-8">
          <div class="card bg-secondary border-0 mb-0">
			  <div class="card-header bg-transparent pb-5">
              <div class="text-muted text-center mt-2 mb-3"><img src="assets/img/RPB Detail.png" width="570"></div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" name="A" method="post" action="login.php">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Masukkan Username" name="Username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Masukkan Password" type="password" name="Password">
                  </div>
                </div>
                <div class="text-center">
				  <input type="submit" id="Login" class="btn btn-primary my-4" name="OK" value="Masuk">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            Copyright &copy; 2022 Telkom Indonesia All rights reserved.</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="assets/js/argon.js?v=1.2.0"></script>
</body>

</html>