<?php
	//Home
	if ($_GET["pages"]=="jatim_balnus"){
		include "pages/home/jatim_balnus.php";
	}else if ($_GET["pages"]=="jateng"){
		include "pages/home/jateng.php";
	}else if ($_GET["pages"]=="detail-jatimbalnus"){
		include "pages/home/detail-jatimbalnus.php";
	}else if ($_GET["pages"]=="detail-jateng"){
		include "pages/home/detail-jateng.php";
	}else if ($_GET["pages"]=="data did"){
		include "pages/home/did.php";
	}else if ($_GET["pages"]=="detail-did"){
		include "pages/home/detail-did.php";
	}else if ($_GET["pages"]=="upload_rpb"){
		include "pages/home/formup.php";
	}else if ($_GET["pages"]=="pivot"){
		include "pages/home/pivot.php";
	}else if ($_GET["pages"]=="jatim_balnus_excel"){
		include "pages/home/jatim_balnus_excel.php";
	}
	//Jika tidak diplilih lewat link
	else{
		include "pages/home/home.php";
	}
?>