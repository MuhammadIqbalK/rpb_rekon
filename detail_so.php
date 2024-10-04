<?php
include("config/konek.php");
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
$teritory = pg_escape_string($conn, $_GET['teritory']);
$program = pg_escape_string($conn, $_GET['program']);

$sql_tglmax='select max("TGL_SAP") tgl_sap
from develop."SAP"';
$get_tglmax=pg_query($conn,$sql_tglmax);
if($line_tglmax=pg_fetch_array($get_tglmax)){
	$tgl_max=$line_tglmax['tgl_sap'];
}
if($teritory == 'Jatim Balnus' || $teritory == 'Jateng'){ 
header("Content-Disposition: attachment; filename=\"Rekap_Data_SO_{$teritory}_{$program}.xls\"");
}elseif($teritory == 'all'){
header("Content-Disposition: attachment; filename=\"Rekap_Data_SO_all_Jatim balnus_{$program}.xls\"");
}else
    header("Content-Disposition: attachment; filename=\"Rekap_Data_SO_jatimbalnus_non_ta_{$program}.xls\"");
?>

<?php 

if($teritory == 'Jatim Balnus' || $teritory == 'Jateng'){
$query = "
SELECT *
FROM 
    develop.\"RPB_REKON\" a
WHERE 
    a.\"TERITORY\" = '$teritory'
    AND a.\"PROJECT_STATUS\" = 'SELESAI'
    AND a.\"PROGRAM\" = '$program'
    AND a.\"BUDGET_SOURCE\" != 'DID'
    AND a.\"KET_MITRA\" = 'TELKOM AKSES'
  and \"TAHUN\"='2024' and \"BULAN\" not in ('1','2','3','4','5','6')
    AND NOT EXISTS (
        SELECT * 
        FROM develop.\"SAP\" b
        WHERE a.\"PROJECT_DESC\" = b.\"SHORT_TEX\"
        AND b.\"TGL_SAP\" = '$tgl_max'
    )
";
    }elseif($teritory == 'all'){
$query = "
SELECT *
FROM 
    develop.\"RPB_REKON\" a
WHERE 
     a.\"PROJECT_STATUS\" = 'SELESAI'
    AND a.\"TERITORY\" = 'Jatim Balnus'
    AND a.\"PROGRAM\" = '$program'
    AND a.\"BUDGET_SOURCE\" != 'DID'
    and \"TAHUN\"='2024' and \"BULAN\" not in ('1','2','3','4','5','6')
    AND NOT EXISTS (
        SELECT * 
        FROM develop.\"SAP\" b
        WHERE a.\"PROJECT_DESC\" = b.\"SHORT_TEX\"
        AND b.\"TGL_SAP\" = '$tgl_max'
    )
";
    }
    else
$query = "
SELECT *
FROM 
    develop.\"RPB_REKON\" a
WHERE 
    a.\"TERITORY\" = 'Jatim Balnus'
    AND a.\"PROJECT_STATUS\" = 'SELESAI'
    AND a.\"PROGRAM\" = '$program'
    AND a.\"BUDGET_SOURCE\" != 'DID'
    AND a.\"KET_MITRA\" != 'TELKOM AKSES'
    and \"TAHUN\"='2024' and \"BULAN\" not in ('1','2','3','4','5','6')
    AND NOT EXISTS (
        SELECT * 
        FROM develop.\"SAP\" b
        WHERE a.\"PROJECT_DESC\" = b.\"SHORT_TEX\"
        AND b.\"TGL_SAP\" = '$tgl_max'
    )
";

// Eksekusi query
//echo $query;
$result = pg_query($conn, $query);
 ?>
<body>
<div class="table-responsive">
<h3 class="mb-0">Dashboard Detail DID Jatim Balnus</h3>
<div>
<table class="table align-items-center table-flush"  style="border-collapse: collapse; width: 100%;">
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
            <th>PORT</th>
            <th>TIMESTAMP</th>
            </tr>
        </thead>
        <tbody>
            <?php
         while ($row = pg_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['ID_IHLD']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['PROGRAM']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['NILAI_REALISASI']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['TAHUN']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['KET_MITRA']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['PROJECT_DESC']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['BULAN']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['PROJECT_STATUS']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['TERITORY']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['STATUS_SO']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['AREA']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['BUDGET_SOURCE']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['PORT']) . '</td>';
    echo '<td style="border: 1px solid black; padding: 5px;">' . htmlspecialchars($row['TIMESTAMP']) . '</td>';
    echo '</tr>';
                }
            ?>
        </tbody>
</table>
</div>
</body>