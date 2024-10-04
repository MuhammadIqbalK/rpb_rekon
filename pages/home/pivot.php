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
		  <li class="breadcrumb-item active" aria-current="page">Data database</li>
		</ol>
	  </nav>
      </div>
      <div class="col-lg-6 col-7">
      <h6 class="h2 text-white d-inline-block mb-0">Pilih Bulan</h6>
      <form method="POST" action="index.php?pages=pivot">
        <label class="text-white">Pilih Bulan:</label>
        <div class="checkbox-group text-white">
            <label>
                <input type="checkbox" name="bulanform[]" value="1"> Januari
            </label>
            <label>
                <input type="checkbox" name="bulanform[]" value="2"> Februari
            </label>
            <label>
                <input type="checkbox" name="bulanform[]" value="3"> Maret
            </label>
            <label>
                <input type="checkbox" name="bulanform[]" value="4"> April
            </label>
            <label>
                <input type="checkbox" name="bulanform[]" value="5"> Mei
            </label>
            <label>
                <input type="checkbox" name="bulanform[]" value="6"> Juni
            </label>
            <label>
                <input type="checkbox" name="bulanform[]" value="7"> Juli
            </label>
            <label>
                <input type="checkbox" name="bulanform[]" value="8"> Agustus
            </label>
            <label>
                <input type="checkbox" name="bulanform[]" value="9"> September
            </label>
            <label>
                <input type="checkbox" name="bulanform[]" value="10"> Oktober
            </label>
            <label>
                <input type="checkbox" name="bulanform[]" value="11"> November
            </label>
            <label>
                <input type="checkbox" name="bulanform[]" value="12"> Desember
            </label>
        </div>

        <button type="submit">Submit</button>
    </form>
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
<h3 class="mb-0">Data TR5 Telkom Akses</h3>
<!-- <button onclick="DownloadTable()">Download Table</button> -->
</div>
<!-- Light table -->
 <?php 
if (!isset($_POST['bulanform']) || empty($_POST['bulanform'])) {
    // Jika 'bulanform' tidak ada atau kosong, gunakan nilai default
    $bulan = "('7', '8')";
} else {
    $bulaninput = array_map('pg_escape_string', $_POST['bulanform']);
    $bulan = "('" . implode("', '", $bulaninput) . "')";
}

// Query SQL
$query1 =  "SELECT
            \"PROGRAM\",
            COUNT(*) AS jumlah,
            SUM(\"NILAI_REALISASI\") AS realisasi
        FROM
            develop.\"RPB_REKON\"
        WHERE
            \"BULAN\" in $bulan
        AND
            \"TERITORY\" = 'Jatim Balnus'
        and \"PROGRAM\" not in ('NIQE','QE KURATIF')
        and \"KET_MITRA\" = 'TELKOM AKSES'
        GROUP BY
            \"PROGRAM\"

        UNION ALL

        SELECT
            'Total' AS \"PROGRAM\",
            COUNT(*) AS jumlah,
            SUM(\"NILAI_REALISASI\") AS realisasi
        FROM
            develop.\"RPB_REKON\"
        WHERE
            \"BULAN\" in $bulan
        and \"PROGRAM\" not in ('NIQE','QE KURATIF')
        AND
            \"TERITORY\" = 'Jatim Balnus'
        and \"KET_MITRA\" = 'TELKOM AKSES'";

// Eksekusi query
//echo $query1;
$result1 = pg_query($conn, $query1);
 ?>

<div class="table">
    <table id="myTable" class="table align-items-center table-flush">
        <thead>
            <tr style="color: white">
            <th>PROGRAM</th>
            <th>JUMLAH</th>
            <th>NILAI_REALISASI</th>
            </tr>
        </thead>
        <tbody>
            <?php
         while ($row = pg_fetch_assoc($result1)) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['PROGRAM']) . '</td>';
    echo '<td>' . htmlspecialchars($row['jumlah']) . '</td>';
    echo '<td>' . htmlspecialchars($row['realisasi']) . '</td>';
    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>

<!-- non ta jbn -->

<div class="container-fluid">
<div class="row">
<div class="col">
<div class="card">
<!-- Card header -->
<div class="card-header border-0">
<h3 class="mb-0">Data TR5 NON Telkom Akses</h3>
<!-- <button onclick="DownloadTable()">Download Table</button> -->
</div>
<!-- Light table -->
 <?php 

// Query SQL
$query2 =  "SELECT
            \"PROGRAM\",
            COUNT(*) AS jumlah,
            SUM(\"NILAI_REALISASI\") AS realisasi
        FROM
            develop.\"RPB_REKON\"
        WHERE
            \"BULAN\" in $bulan
        AND
            \"TERITORY\" = 'Jatim Balnus'
        and \"PROGRAM\" not in ('NIQE','QE KURATIF')
        and \"KET_MITRA\" != 'TELKOM AKSES'
        GROUP BY
            \"PROGRAM\"

        UNION ALL

        SELECT
            'Total' AS \"PROGRAM\",
            COUNT(*) AS jumlah,
            SUM(\"NILAI_REALISASI\") AS realisasi
        FROM
            develop.\"RPB_REKON\"
        WHERE
            \"BULAN\" in $bulan
        and \"PROGRAM\" not in ('NIQE','QE KURATIF')
        AND
            \"TERITORY\" = 'Jatim Balnus'
        and \"KET_MITRA\" != 'TELKOM AKSES'";

// Eksekusi query
//echo $query;
$result2 = pg_query($conn, $query2);
 ?>

<div class="table">
    <table id="myTable" class="table align-items-center table-flush">
        <thead>
            <tr style="color: white">
            <th>PROGRAM</th>
            <th>JUMLAH</th>
            <th>NILAI_REALISASI</th>
            </tr>
        </thead>
        <tbody>
            <?php
         while ($row = pg_fetch_assoc($result2)) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['PROGRAM']) . '</td>';
    echo '<td>' . htmlspecialchars($row['jumlah']) . '</td>';
    echo '<td>' . htmlspecialchars($row['realisasi']) . '</td>';
    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>

<!-- all jbn -->
<div class="container-fluid">

<div class="row">
<div class="col">
<div class="card">
<!-- Card header -->
<div class="card-header border-0">
<h3 class="mb-0">Data TR5 ALL</h3>
<!-- <button onclick="DownloadTable()">Download Table</button> -->
</div>
<!-- Light table -->
 <?php 

// Query SQL
$query3 =  "SELECT
            \"PROGRAM\",
            COUNT(*) AS jumlah,
            SUM(\"NILAI_REALISASI\") AS realisasi
        FROM
            develop.\"RPB_REKON\"
        WHERE
            \"BULAN\" in $bulan
        AND
            \"TERITORY\" = 'Jatim Balnus'
        and \"PROGRAM\" not in ('NIQE','QE KURATIF')
        GROUP BY
            \"PROGRAM\"

        UNION ALL

        SELECT
            'Total' AS \"PROGRAM\",
            COUNT(*) AS jumlah,
            SUM(\"NILAI_REALISASI\") AS realisasi
        FROM
            develop.\"RPB_REKON\"
        WHERE
            \"BULAN\" in $bulan
        and \"PROGRAM\" not in ('NIQE','QE KURATIF')
        AND
            \"TERITORY\" = 'Jatim Balnus'";

// Eksekusi query
//echo $query;
$result3 = pg_query($conn, $query3);
 ?>

<div class="table">
    <table id="myTable" class="table align-items-center table-flush">
        <thead>
            <tr style="color: white">
            <th>PROGRAM</th>
            <th>JUMLAH</th>
            <th>NILAI_REALISASI</th>
            </tr>
        </thead>
        <tbody>
            <?php
         while ($row = pg_fetch_assoc($result3)) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['PROGRAM']) . '</td>';
    echo '<td>' . htmlspecialchars($row['jumlah']) . '</td>';
    echo '<td>' . htmlspecialchars($row['realisasi']) . '</td>';
    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>

<!-- jateng ta -->
<div class="container-fluid">

<div class="row">
<div class="col">
<div class="card">
<!-- Card header -->
<div class="card-header border-0">
<h3 class="mb-0">Data TR4 Telkom Akses</h3>
<!-- <button onclick="DownloadTable()">Download Table</button> -->
</div>
<!-- Light table -->
 <?php 

// Query SQL
$query4 =  "SELECT
            \"PROGRAM\",
            COUNT(*) AS jumlah,
            SUM(\"NILAI_REALISASI\") AS realisasi
        FROM
            develop.\"RPB_REKON\"
        WHERE
            \"BULAN\" in $bulan
        AND
            \"TERITORY\" = 'Jateng'
        and \"PROGRAM\" not in ('NIQE','QE KURATIF')
        and \"KET_MITRA\" = 'TELKOM AKSES'
        GROUP BY
            \"PROGRAM\"

        UNION ALL

        SELECT
            'Total' AS \"PROGRAM\",
            COUNT(*) AS jumlah,
            SUM(\"NILAI_REALISASI\") AS realisasi
        FROM
            develop.\"RPB_REKON\"
        WHERE
            \"BULAN\" in $bulan
        and \"PROGRAM\" not in ('NIQE','QE KURATIF')
        AND
            \"TERITORY\" = 'Jateng'
        and \"KET_MITRA\" = 'TELKOM AKSES'";

// Eksekusi query
//echo $query;
$result4 = pg_query($conn, $query4);
 ?>

<div class="table">
    <table id="myTable" class="table align-items-center table-flush">
        <thead>
            <tr style="color: white">
            <th>PROGRAM</th>
            <th>JUMLAH</th>
            <th>NILAI_REALISASI</th>
            </tr>
        </thead>
        <tbody>
            <?php
         while ($row = pg_fetch_assoc($result4)) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['PROGRAM']) . '</td>';
    echo '<td>' . htmlspecialchars($row['jumlah']) . '</td>';
    echo '<td>' . htmlspecialchars($row['realisasi']) . '</td>';
    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>

<!-- jateng non ta -->
<div class="container-fluid">

<div class="row">
<div class="col">
<div class="card">
<!-- Card header -->
<div class="card-header border-0">
<h3 class="mb-0">Data TR4 NON Telkom Akses</h3>
<!-- <button onclick="DownloadTable()">Download Table</button> -->
</div>
<!-- Light table -->
 <?php 

// Query SQL
$query5 =  "SELECT
            \"PROGRAM\",
            COUNT(*) AS jumlah,
            SUM(\"NILAI_REALISASI\") AS realisasi
        FROM
            develop.\"RPB_REKON\"
        WHERE
            \"BULAN\" in $bulan
        AND
            \"TERITORY\" = 'Jateng'
        and \"PROGRAM\" not in ('NIQE','QE KURATIF')
        and \"KET_MITRA\" != 'TELKOM AKSES'
        GROUP BY
            \"PROGRAM\"

        UNION ALL

        SELECT
            'Total' AS \"PROGRAM\",
            COUNT(*) AS jumlah,
            SUM(\"NILAI_REALISASI\") AS realisasi
        FROM
            develop.\"RPB_REKON\"
        WHERE
            \"BULAN\" in $bulan
        and \"PROGRAM\" not in ('NIQE','QE KURATIF')
        AND
            \"TERITORY\" = 'Jateng'
        and \"KET_MITRA\" != 'TELKOM AKSES'";

// Eksekusi query
//echo $query;
$result5 = pg_query($conn, $query5);
 ?>

<div class="table">
    <table id="myTable" class="table align-items-center table-flush">
        <thead>
            <tr style="color: white">
            <th>PROGRAM</th>
            <th>JUMLAH</th>
            <th>NILAI_REALISASI</th>
            </tr>
        </thead>
        <tbody>
            <?php
         while ($row = pg_fetch_assoc($result5)) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['PROGRAM']) . '</td>';
    echo '<td>' . htmlspecialchars($row['jumlah']) . '</td>';
    echo '<td>' . htmlspecialchars($row['realisasi']) . '</td>';
    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>

<!-- jateng all -->
<div class="container-fluid">

<div class="row">
<div class="col">
<div class="card">
<!-- Card header -->
<div class="card-header border-0">
<h3 class="mb-0">Data TR4 ALL</h3>
<!-- <button onclick="DownloadTable()">Download Table</button> -->
</div>
<!-- Light table -->
 <?php 

// Query SQL
$query6 =  "SELECT
            \"PROGRAM\",
            COUNT(*) AS jumlah,
            SUM(\"NILAI_REALISASI\") AS realisasi
        FROM
            develop.\"RPB_REKON\"
        WHERE
            \"BULAN\" in $bulan
        AND
            \"TERITORY\" = 'Jateng'
        and \"PROGRAM\" not in ('NIQE','QE KURATIF')
        GROUP BY
            \"PROGRAM\"

        UNION ALL

        SELECT
            'Total' AS \"PROGRAM\",
            COUNT(*) AS jumlah,
            SUM(\"NILAI_REALISASI\") AS realisasi
        FROM
            develop.\"RPB_REKON\"
        WHERE
            \"BULAN\" in $bulan
        and \"PROGRAM\" not in ('NIQE','QE KURATIF')
        AND
            \"TERITORY\" = 'Jateng'";

// Eksekusi query
//echo $query;
$result6 = pg_query($conn, $query6);
 ?>

<div class="table">
    <table id="myTable" class="table align-items-center table-flush">
        <thead>
            <tr style="color: white">
            <th>PROGRAM</th>
            <th>JUMLAH</th>
            <th>NILAI_REALISASI</th>
            </tr>
        </thead>
        <tbody>
            <?php
         while ($row = pg_fetch_assoc($result6)) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['PROGRAM']) . '</td>';
    echo '<td>' . htmlspecialchars($row['jumlah']) . '</td>';
    echo '<td>' . htmlspecialchars($row['realisasi']) . '</td>';
    echo '</tr>';
                }
            ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>

<!-- <script>
  function DownloadTable() {
  
            // Ambil query string dari URL
        const queryString = window.location.search;

        // Buat instance URLSearchParams dari query string
        const urlParams = new URLSearchParams(queryString);

        // Ambil nilai dari parameter 'area'
        const area = urlParams.get('area');

      // Generate Excel file
      var table = document.getElementById("myTable").outerHTML;
      var html = `
          <html xmlns:o="urn:schemas-microsoft-com:office:office"
                xmlns:x="urn:schemas-microsoft-com:office:excel">
          <head>
              <meta charset="utf-8">
              <style>
                  .table { border-collapse: collapse; }
                  .table th, .table td { border: 1px solid black; padding: 5px; }
                  th {background-color: #0B63F7;}
              </style>
          </head>
          <body>
              <table class="table">${table}</table>
          </body>
          </html>`;
      
      var blob = new Blob([html], { type: "application/vnd.ms-excel" });
      var url = URL.createObjectURL(blob);
      var a = document.createElement("a");
  
      a.href = url;
      a.download = `data-did_${area}.xls`;
      a.click();
  
      URL.revokeObjectURL(url);
  }
  </script> -->
