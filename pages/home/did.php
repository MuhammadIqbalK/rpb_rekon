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
</div>
<!-- Light table -->
 <?php 
 // Query SQL
$query = "SELECT 
            \"AREA\", 
            COUNT(*) AS jumlah, 
            SUM(\"NILAI_REALISASI\") AS total
        FROM 
            develop.\"RPB_REKON\"
        WHERE 
            \"BUDGET_SOURCE\" in ('DID')
        GROUP BY 
            \"AREA\"
            ";
// Eksekusi query
$result = pg_query($conn, $query);
 ?>

<div class="table-responsive">
    <table class="table align-items-center table-flush">
        <thead>
            <tr style="color: white">
                <th>WITEL</th>
                <th class="text-center">JUMLAH</th>
                <th class="text-right">TOTAL</th>
            </tr>
        </thead>
        <tbody>
            <?php
         while ($row = pg_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['AREA']) . '</td>';
    echo '<td class="text-center">' . " <a style='color:blue' href='index.php?pages=detail-did&area=" . urlencode($row['AREA']) . "'>" 
                . htmlspecialchars($row['jumlah']) . "</a>" . '</td>';
    echo '<td class="text-right">' . htmlspecialchars(number_format($row['total'])) . '</td>';
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


