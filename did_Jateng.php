<?php
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
header("content-disposition: attachment;filename=Rekap DID Jateng.xls");
include("config/konek.php");
?>

<?php 
// Query SQL
$query = "
    SELECT *
    FROM 
        develop.\"RPB_REKON\"
    WHERE 
        \"TERITORY\" = 'Jateng'
    AND 
        \"TAHUN\" = '2024'
    AND
        \"PROJECT_STATUS\" = 'SELESAI'
    AND
        \"BULAN\" IN ('7','8','9')
    AND 
        \"BUDGET_SOURCE\" = 'DID'
";

// Eksekusi query
//echo $query;
$result = pg_query($conn, $query);
 ?>
<body>
<div class="table-responsive">
<h3 class="mb-0">Dashboard Detail DID Jateng</h3>
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
    echo '</tr>';
                }
            ?>
        </tbody>
</table>
</div>
</body>