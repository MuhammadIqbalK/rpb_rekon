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
		  <li class="breadcrumb-item active" aria-current="page">Data DID</li>
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
<h3 class="mb-0">Data DID</h3>
<button onclick="DownloadTable()">Download Table</button>
</div>
<!-- Light table -->
 <?php 
$area = pg_escape_string($conn, $_GET['area']);

// Query SQL
$query = "
    SELECT *
    FROM 
        develop.\"RPB_REKON\"
    WHERE 
        \"BUDGET_SOURCE\" IN ('DID')
    AND 
        \"AREA\" = '$area'
";

// Eksekusi query
//echo $query;
$result = pg_query($conn, $query);
 ?>

<div class="table-responsive">
    <table id="myTable" class="table align-items-center table-flush">
        <thead>
            <tr style="color: white">
            <th>ID_IHLD</th>
            <th>PROGRAM</th>
            <th>NILAI_REALISASI</th>
            <th>TAHUN</th>
            <th>KET_MITRA</th>
            <th>PROJECT_DESC</th>
            <th>BULAN</th>
            <th>PROJECT_STATUS</th>
            <th>TERITORY</th>
            <th>STATUS_SO</th>
            <th>AREA</th>
            <th>BUDGET_SOURCE</th>
            </tr>
        </thead>
        <tbody>
            <?php
         while ($row = pg_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['ID_IHLD']) . '</td>';
    echo '<td>' . htmlspecialchars($row['PROGRAM']) . '</td>';
    echo '<td>' . htmlspecialchars($row['NILAI_REALISASI']) . '</td>';
    echo '<td>' . htmlspecialchars($row['TAHUN']) . '</td>';
    echo '<td>' . htmlspecialchars($row['KET_MITRA']) . '</td>';
    echo '<td>' . htmlspecialchars($row['PROJECT_DESC']) . '</td>';
    echo '<td>' . htmlspecialchars($row['BULAN']) . '</td>';
    echo '<td>' . htmlspecialchars($row['PROJECT_STATUS']) . '</td>';
    echo '<td>' . htmlspecialchars($row['TERITORY']) . '</td>';
    echo '<td>' . htmlspecialchars($row['STATUS_SO']) . '</td>';
    echo '<td>' . htmlspecialchars($row['AREA']) . '</td>';
    echo '<td>' . htmlspecialchars($row['BUDGET_SOURCE']) . '</td>';
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

<script>
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
  </script>
