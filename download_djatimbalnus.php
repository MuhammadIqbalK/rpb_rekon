<?php
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
header("content-disposition: attachment;filename=Rekap Detail JatimBalnus.xls");
include("config/konek.php");
$sql_tglmax='select max("TGL_SAP") tgl_sap
from develop."SAP"';
$get_tglmax=pg_query($conn,$sql_tglmax);
if($line_tglmax=pg_fetch_array($get_tglmax)){
	$tgl_max=$line_tglmax['tgl_sap'];
}
?>

<?php 
// Query SQL
// $query='SELECT a.*
// FROM develop."RPB_REKON" a, develop."SAP" b
// WHERE SUBSTRING(a."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and a."TAHUN"=\'2024\' 
// and a."BULAN" NOT IN (\'1\',\'2\',\'3\',\'4\',\'5\',\'6\')
// and a."PROJECT_STATUS"=\'SELESAI\' and a."TERITORY"=\'Jatim Balnus\'
// and b."TGL_SAP"=\''.$tgl_max.'\'
// AND "BUDGET_SOURCE" != \'DID\'';
// Eksekusi query
//echo $query;
$query='SELECT *
FROM develop."RPB_REKON"
WHERE "TERITORY" = \'Jatim Balnus\'
and "BULAN" in (\'7\',\'8\')
and "PROGRAM" not in (\'NIQE\',\'QE KURATIF\')
';

$result1 = pg_query($conn, $query);
 ?>
<body>
<div class="table-responsive">
<h3 class="mb-0">Dashboard Detail Jatim Balnus</h3>
<div>
<table class="table align-items-center table-flush" style="border-collapse: collapse; width: 100%;">
    <thead>
            <tr style="border: 1px solid black; padding: 5px; background-color: #2DCE89;">
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
         while ($row = pg_fetch_assoc($result1)) {
    echo '<tr style="border: 1px solid black; padding: 5px;">';
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
</body>