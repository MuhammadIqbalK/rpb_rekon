<?php
date_default_timezone_set('Asia/Jakarta');

if(isset($_POST['Upload_Peng'])){
    $colEnd = 'M';
    $target = "uploads/" . basename($_FILES['upld_deploy']['name']);
    move_uploaded_file($_FILES['upld_deploy']['tmp_name'], $target);

    chmod($target, 0777);

    $objReader = PHPExcel_IOFactory::createReader('Excel2007');
    $objReader->setReadDataOnly(true);
    $objPHPExcel = $objReader->load($target);
    $objWorksheet = $objPHPExcel->getSheetByName('rpb-up');

    $highestRow = $objWorksheet->getHighestRow();
    $highestColumn = $colEnd;
    $highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

    $rows = array();
    $dupcount = 0;

    $skippedRows = [];

    // Import data excel mulai baris ke-2 (karena tabel xls ada header pada baris 1)
    for ($row = 2; $row <= $highestRow; ++$row) {
        $input = array();

        for ($col = 0; $col < $highestColumnIndex; ++$col) {
            $val = trim($objWorksheet->getCellByColumnAndRow($col, $row)->getCalculatedValue());
            $input[$col] = $val;
        }

         // Logika tambahan untuk ID_IHLD
         if ($input[0] == '-' || $input[0] == 'QE' || $input[0] == '') {
            $input[0] = null; // Set ID_IHLD menjadi null
        }
        
        // Logika tambahan untuk project_desc
        $input[5] = preg_replace('/[^\x20-\x7E]/', '', $input[5]);  // Menghapus karakter non-ASCII
        $input[5] = str_replace("'", "", $input[5]);
        $input[5] = rtrim($input[5]);


        // Validasi manual
        $isValid = true;

        if (empty($input[1]) || !is_string($input[1])) {
            $isValid = false;
        }
        if (!is_numeric($input[2])) {
            $isValid = false;
        }
        if (empty($input[3]) || !is_numeric($input[3])) {
            $isValid = false;
        }
        if (!is_null($input[4]) && !is_string($input[4])) {
            $isValid = false;
        }
        if (empty($input[5]) || !is_string($input[5]) || $input[5] == '#N/A') {
            $isValid = false;
        }
        if (!is_null($input[6]) && !is_numeric($input[6])) {
            $isValid = false;
        }
        if (!is_null($input[7]) && !is_string($input[7])) {
            $isValid = false;
        }
        if (!is_null($input[8]) && !is_string($input[8])) {
            $isValid = false;
        }
        if (!is_null($input[9]) && !is_string($input[9])) {
            $isValid = false;
        }
        if (!is_null($input[10]) && !is_string($input[10])) {
            $isValid = false;
        }

        if (!$isValid) {
            $skippedRows[] = $input;
            continue; // Skip this row if validation fails
        }

        $id_ihld = $input[0];
        $program = $input[1];
        $nilai_realisasi = str_replace(['.', ',', ',00'], '', $input[2]);
        $tahun = $input[3];
        $ketmitra = $input[4];
        $project_desc = $input[5];
        $bulan = $input[6];
        $project_status = $input[7];
        $teritory = $input[8];
        $status_so = $input[9];
        $area = $input[10];
        $budget = $input[11];
         // input tanggal
        $tanggal_sekarang = date("d F Y") . " pukul " . date("H:i") . " WIB";



        // Check if record exists
        if (is_null($id_ihld) || $id_ihld == '') {
            // Jika ID_IHLD null, hanya cocokkan PROJECT_DESC
            $query_insert = 'INSERT INTO develop."RPB_TEST" ("ID_IHLD", "PROGRAM", "NILAI_REALISASI", "TAHUN", "KET_MITRA", 
                    "PROJECT_DESC", "BULAN", "PROJECT_STATUS", 
                    "TERITORY", "STATUS_SO", "AREA", "BUDGET_SOURCE", "TIMESTAMP") values
                        (null, \''.$program.'\', '.$nilai_realisasi.', \''.$tahun.'\', \''.$ketmitra.'\', \''.$project_desc.'\', \''.$bulan.'\', \''.$project_status.'\', \''.$teritory.'\', \''.$status_so.'\', \''.$area.'\',\''.$budget.'\', \''.$tanggal_sekarang.'\')
                    ON CONFLICT ("PROJECT_DESC") 
                    DO UPDATE SET 
                    "ID_IHLD" = EXCLUDED."ID_IHLD",
                    "PROGRAM" = EXCLUDED."PROGRAM",
                    "NILAI_REALISASI" = EXCLUDED."NILAI_REALISASI",
                    "TAHUN" = EXCLUDED."TAHUN",
                    "KET_MITRA" = EXCLUDED."KET_MITRA",
                    "BULAN" = EXCLUDED."BULAN",
                    "PROJECT_STATUS" = EXCLUDED."PROJECT_STATUS",
                    "TERITORY" = EXCLUDED."TERITORY",
                    "STATUS_SO" = EXCLUDED."STATUS_SO",
                    "AREA" = EXCLUDED."AREA",
                    "BUDGET_SOURCE" = EXCLUDED."BUDGET_SOURCE",
                    "TIMESTAMP" = EXCLUDED."TIMESTAMP"
                    WHERE develop."RPB_TEST"."PROJECT_DESC" = \''.$project_desc.'\'';
        } else {
            // jika ID_iHLD sebelumnya null maka akan dihapus terlebih dahulu 
            $query_check = 'SELECT "PROJECT_DESC" FROM develop."RPB_TEST" 
                            WHERE "PROJECT_DESC" = \''.$project_desc.'\'  AND "ID_IHLD" IS NULL LIMIT 1;';
            $exist = pg_query($conn, $query_check);
            if(!empty($exist)){
                $delete_query = 'DELETE FROM develop."RPB_TEST"
                WHERE "PROJECT_DESC" = \''.$project_desc.'\'
                AND "ID_IHLD" IS NULL;';
                pg_query($conn, $delete_query);
            }

            $query_checkihld = 'select "ID_iHLD" from develop."RPB_TEST"
                       WHERE "ID_IHLD" = \''.$id_ihld.'\' limit 1;';
            $ihldexist = pg_query($conn, $query_checkihld);
            if(!empty($ihldexist)){
                $query_insert = 'INSERT INTO develop."RPB_TEST" ("ID_IHLD", "PROGRAM", "NILAI_REALISASI", "TAHUN", "KET_MITRA", 
                "PROJECT_DESC", "BULAN", "PROJECT_STATUS", 
                "TERITORY", "STATUS_SO", "AREA","BUDGET_SOURCE","TIMESTAMP") values
                    (\''.$id_ihld.'\', \''.$program.'\', '.$nilai_realisasi.', \''.$tahun.'\', \''.$ketmitra.'\', \''.$project_desc.'\', \''.$bulan.'\', \''.$project_status.'\', \''.$teritory.'\', \''.$status_so.'\', \''.$area.'\', \''.$budget.'\', \''.$tanggal_sekarang.'\')
                ON CONFLICT ("ID_IHLD") 
                DO UPDATE SET 
                "ID_IHLD" = EXCLUDED."ID_IHLD",
                "PROGRAM" = EXCLUDED."PROGRAM",
                "NILAI_REALISASI" = EXCLUDED."NILAI_REALISASI",
                "TAHUN" = EXCLUDED."TAHUN",
                "KET_MITRA" = EXCLUDED."KET_MITRA",
                "PROJECT_DESC" = EXCLUDED."PROJECT_DESC",
                "BULAN" = EXCLUDED."BULAN",
                "PROJECT_STATUS" = EXCLUDED."PROJECT_STATUS",
                "TERITORY" = EXCLUDED."TERITORY",
                "STATUS_SO" = EXCLUDED."STATUS_SO",
                "AREA" = EXCLUDED."AREA",
                "BUDGET_SOURCE" = EXCLUDED."BUDGET_SOURCE",
                "TIMESTAMP" = EXCLUDED."TIMESTAMP";';
            }else{// Jika ID_IHLD tidak null, gunakan kombinasi ID_IHLD dan PROJECT_DESC

            $query_insert = 'INSERT INTO develop."RPB_TEST" ("ID_IHLD", "PROGRAM", "NILAI_REALISASI", "TAHUN", "KET_MITRA", 
                    "PROJECT_DESC", "BULAN", "PROJECT_STATUS", 
                    "TERITORY", "STATUS_SO", "AREA","BUDGET_SOURCE","TIMESTAMP") values
                        (\''.$id_ihld.'\', \''.$program.'\', '.$nilai_realisasi.', \''.$tahun.'\', \''.$ketmitra.'\', \''.$project_desc.'\', \''.$bulan.'\', \''.$project_status.'\', \''.$teritory.'\', \''.$status_so.'\', \''.$area.'\', \''.$budget.'\', \''.$tanggal_sekarang.'\')
                    ON CONFLICT ("ID_IHLD", "PROJECT_DESC") 
                    DO UPDATE SET 
                    "ID_IHLD" = EXCLUDED."ID_IHLD",
                    "PROGRAM" = EXCLUDED."PROGRAM",
                    "NILAI_REALISASI" = EXCLUDED."NILAI_REALISASI",
                    "TAHUN" = EXCLUDED."TAHUN",
                    "KET_MITRA" = EXCLUDED."KET_MITRA",
                    "BULAN" = EXCLUDED."BULAN",
                    "PROJECT_STATUS" = EXCLUDED."PROJECT_STATUS",
                    "TERITORY" = EXCLUDED."TERITORY",
                    "STATUS_SO" = EXCLUDED."STATUS_SO",
                    "AREA" = EXCLUDED."AREA",
                    "BUDGET_SOURCE" = EXCLUDED."BUDGET_SOURCE",
                    "TIMESTAMP" = EXCLUDED."TIMESTAMP";';
        }
    }

        $prosesinsert = pg_query($conn, $query_insert);
        // echo $delete_query;
        // echo $query_insert;
        // echo $prosesinsert;
      
      
    }

    if (!empty($skippedRows)) {
        echo "<table border='1'>";
        echo "<tr><th>Baris yang di-skip</th></tr>";
        
        foreach ($skippedRows as $skippedRow) {
            echo "<tr><td>" . implode(", ", $skippedRow) . "</td></tr>"; // Gabungkan data menjadi string
        }
    
        echo "</table>";
    } else {
        echo "Tidak ada baris yang di-skip.";
    }

    if($prosesinsert){
        echo "<script>alert('Upload Pengajuan Sukses!!!')</script>";
        // Hapus file xls yang sudah dibaca
        unlink($target);
    ?>
        <script language=javascript>
        setTimeout("location.href='?pages=upld_rpb2'", 1000);
        </script>
    <?php
    } else {
        echo "<script>alert('Upload Pengajuan Gagal!!!')</script>";
    ?>
        <script language=javascript>
        setTimeout("location.href='?pages=upld_rpb2'", 1000);
        </script>
    <?php
    }
}

if (isset($_POST['Batal'])) {
    echo "<script>document.location.href='?pages=upld_rpb2';</script>";
}
?>


<!-- Mobile Menu end -->
<div class="breadcome-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="breadcome-list single-page-breadcome">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<div class="breadcome-heading">
								<form role="search" class="">
									<input type="text" placeholder="Search..." class="form-control">
									<a href=""><i class="fa fa-search"></i></a>
								</form>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
							<ul class="breadcome-menu">
								<li><a href="#">Vestyna</a> <span class="bread-slash">/</span>
								</li>
								<li><span class="bread-blod">Upload RPB</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
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
<a href="Form Pengajuan/FORMAT UPLOAD USULAN IHLD.xlsx" download><button type="button" class="btn btn-custon-rounded-three btn-success"><i class="fa fa-download adminpro-checked-pro" aria-hidden="true"></i> Form Pengajuan</button></a></div>
<div class="dz-message needsclick download-custom">
<i class="fa fa-cloud-download" aria-hidden="true"></i>
<h2>Silahkan Upload File Pengajuan Disini.</h2>
<div class="file-upload-inner ts-forms">
	<div class="input prepend-small-btn">
		<div class="file-button">
			Browse
			<input type="file" name="upld_deploy" onchange="document.getElementById('upld_deploy').value = this.value;">
		</div>
		<input type="text" id="upld_deploy" placeholder="no file selected" required>
	</div>
</div>
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