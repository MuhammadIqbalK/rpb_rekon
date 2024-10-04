<?php
if(isset($_POST['Upload_Peng'])){
	$colEnd = 'K';
	$target = "uploads/" . basename($_FILES['upld_deploy']['name']);
	move_uploaded_file($_FILES['upld_deploy']['tmp_name'], $target);

	chmod("uploads/" . $_FILES['upld_deploy']['name'], 0777);

	$objReader = PHPExcel_IOFactory::createReader('Excel2007');
	$objReader->setReadDataOnly(true);
	$objPHPExcel = $objReader->load($target);
	$objWorksheet = $objPHPExcel->getSheetByName('Template Usulan Rekon Non PSB');

	$highestRow = $objWorksheet->getHighestRow();
	$highestColumn = $colEnd;
	$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
	
	$rows = array();
	$dupcount=0;
	
	//import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
	for ($row = 2; $row <= $highestRow; ++$row) {
		$input = array();

		for ($col = 0; $col < $highestColumnIndex; ++$col) {
			$val = trim($objWorksheet->getCellByColumnAndRow($col, $row)->getCalculatedValue());
			$input[$col] = $val;
		}
		
		$search = array(
					  '.',
					  ',',
					  ',00'
				 );
		$replace = array(
					  '',
					  '',
					  ''
				 );
		
		$id_ihld        = $input[0];
		$program        = $input[1];
		$nilai_realisai = str_replace($search, $replace, $input[2]);
		$tahun          = $input[3];
		$ketmitra       = $input[4];
		$project_desc   = $input[5];
		$bulan          = $input[6];
		$project_status = $input[7];
		$teritory       = $input[8];
		$status_so      = $input[9];
		$area           = $input[10];
		
		$query_insert = '
			INSERT INTO develop."RPB_REKON" 
			("ID_IHLD", "PROGRAM", "NILAI_REALISAI", "TAHUN", "KET_MITRA", 
			 "PROJECT_DESC", "BULAN", "PROJECT_STATUS", 
			 "TERITORY", "STATUS_SO", "AREA")
			SELECT \''.$id_ihld.'\', \''.$program.'\', '.$nilai_realisai.', \''.$tahun.'\', \''.$ketmitra.'\', \''.$project_desc.'\', \''.$bulan.'\', \''.$project_status.'\', \''.$teritory.'\', \''.$status_so.'\', \''.$area.'\'
			WHERE NOT EXISTS (
				SELECT 1 FROM develop."RPB_REKON"
				WHERE ("ID_IHLD" = \''.$id_ihld.'\' AND \''.$id_ihld.'\' IS NOT NULL)
				   OR ("PROJECT_DESC" = \''.$project_desc.'\' AND \''.$id_ihld.'\' IS NULL)
			)';
		
		$prosesinsert = pg_query($conn, $query_insert);
		//echo $query_insert;
	}
	
	if($prosesinsert){
		echo "<script>alert('Upload Pengajuan Sukses!!!')</script>";
		//  hapus file xls yang udah dibaca
		unlink("uploads/".$_FILES['upld_deploy']['name']);
	?>
		<script language=javascript>
		setTimeout("location.href='?pages=home'", 1000);
		</script>
		
	<?php
	}else{
		echo "<script>alert('Upload Pengajuan Gagal!!!')</script>";
	?>
		<script language=javascript>
		setTimeout("location.href='?pages=upload_rpb'", 1000);
		</script>

	<?php
	}
}

if (isset($_POST['Batal'])) {
	echo "<script>document.location.href='?pages=home';</script>";
}
?>
 <div class="header bg-primary pb-6">
<div class="container-fluid">
<div class="header-body">
  <div class="row align-items-center py-4">
	<div class="col-lg-6 col-7">
	  <h6 class="h2 text-white d-inline-block mb-0">Rekon</h6>
	  <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
		<ol class="breadcrumb breadcrumb-links breadcrumb-dark">
		  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
		  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
		  <li class="breadcrumb-item active" aria-current="page">Halaman Upload RPB</li>
		</ol>
	  </nav>
	</div>
  </div>
  <!-- Card stats -->
</div>
</div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
<div class="row">
<div class="col">
<div class="card">
<!-- Card header -->
<div class="card-header border-0">
<form name="hero" method="post" action="">
<h3 class="mb-0"></h3>
</div>
<!-- Static Table Start -->
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="alert-title dropzone-custom-sys">
<h1><i class="fa fa-upload" aria-hidden="true"></i> Halaman Upload RPB</h1>
</div>
</div>
</div>
<!-- ==================================> Halaman Upload LOP <============================== -->
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="dropzone-pro">
<div id="dropzone">
<form name="A" id="A" method="POST" action="" enctype="multipart/form-data" class="dropzone dropzone-custom needsclick"><div align="center">
<a href="Form Pengajuan/FORMAT UPLOAD USULAN NODE-B.xlsx" download><button type="button" class="btn btn-custon-rounded-three btn-success"><i class="fa fa-download adminpro-checked-pro" aria-hidden="true"></i> Form Pengajuan</button></a></div>
<div class="dz-message needsclick download-custom">
<i class="fa fa-cloud-download" aria-hidden="true"></i>
<h2>Silahkan Upload File Pengajuan Disini.</h2>
<div class="form-group">
			Browse
			<input type="file" name="upld_deploy"  onchange="document.getElementById('upld_deploy').value = this.value;">
			<input type="text" id="upld_deploy" placeholder="no file selected" required>
</div>
</div>
<div align="center">
	<br>
	<input name="Upload_Peng" type="submit" value="Upload" class="btn btn-sm btn-primary login-submit-cs">
	<input name="Batal" type="submit" value="Batal" class="btn btn-white">
</div>
</form>
</div>
</div>
</div>