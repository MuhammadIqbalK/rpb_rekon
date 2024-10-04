<?php
session_start();
//include ("include/include.php");
if (!isset($_SESSION['dash_nama_rpb']) || empty($_SESSION['dash_nama_rpb'])){
?>
	<script>alert('Harap login terlebih dahulu!')</script>
<?php
   session_destroy();
   header("location:login.php");
}
?>