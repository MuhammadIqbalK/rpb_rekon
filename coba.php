<?php
echo "SEDANG MENDOWNLOAD HARAP TUNGGU.......";

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
$query1='SELECT *
FROM develop."RPB_REKON"
WHERE "TERITORY" = \'Jatim Balnus\'
and "BULAN" in (\'7\',\'8\')
and "PROGRAM" not in (\'NIQE\',\'QE KURATIF\')
';
// Eksekusi query
//echo $query;
$result1 = pg_query($conn, $query1);
 ?>

<?php 
// Query SQL
$query2='SELECT *
FROM develop."RPB_REKON"
WHERE "TERITORY" = \'Jateng\'
and "BULAN" in (\'7\',\'8\')
and "PROGRAM" not in (\'NIQE\',\'QE KURATIF\')
';
// Eksekusi query
//echo $query;
$result2 = pg_query($conn, $query2);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/exceljs/4.3.0/exceljs.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
    <title>Download Excel with Styles</title>
	<style>
    .hidden-table {
        display: none; /* Tabel ini tidak akan terlihat di halaman */
    }
</style>
</head>
<body>
	
<div class="hidden-table">
<div id="tabel1">
<table>
<thead>
  <tr style="color: white; background: #0B63F7">
	<th rowspan="3"><center>Teritory</center></th>
	<th rowspan="3"><center>Release Capex</center></th>
	<th rowspan="3"><center>Satuan (vol)</center></th>
	<th colspan="5"><center>Outstanding 2022</center></th>
	<th colspan="5"><center>Outstanding 2023</center></th>
	<th colspan="38"><center>2024 (Hasil Rekon)</center></th>
	<th colspan="7"><center>TOTAL Ytd  (2022+2023 +Ytd  2024)</center></th>
	<th colspan="2"><center>Sisa Budget</center></th>
	<th colspan="3"><center>On Going Project sd Bulan Rekon (Estimasi)</center></th>
	<th colspan="3"><center>Outlook sd Des 2024</center></th>
	<th colspan="3"><center>Data SO</center></th>
  </tr>
  <tr style="color: white; background: #0B63F7">
	<th colspan="3"><center>Rekon</center></th>
	<th colspan="2"><center>Proses SAP</center></th>
	<th colspan="3"><center>Rekon</center></th>
	<th colspan="2"><center>Proses SAP</center></th>
	<th colspan="3"><center>Januari</center></th>
	<th colspan="3"><center>Februari</center></th>
	<th colspan="3"><center>Maret</center></th>
	<th colspan="3"><center>April</center></th>
	<th colspan="3"><center>Mei</center></th>
	<th colspan="3"><center>Juni</center></th>
	<th colspan="3"><center>Juli</center></th>
	<th colspan="3"><center>Agustus</center></th>
	<th colspan="3"><center>September</center></th>
	<th colspan="3"><center>Oktober</center></th>
	<th colspan="3"><center>November</center></th>
	<th colspan="3"><center>Desember</center></th>
	<th colspan="2"><center>Proses SAP</center></th>
	<th colspan="3"><center>Total 2022+2023+2024</center></th>
	<th colspan="2"><center>Proses SAP</center></th>
	<th rowspan="2"><center>% GR/PO</center></th>
	<th rowspan="2"><center>% PO/ (Nilai Rp)</center></th>
	<th rowspan="2"><center>Nilai Rp (Release- Total PO)</center></th>
	<th rowspan="2"><center>Vol atau SSL (estimasi)</center></th>
	<th rowspan="2"><center>Nilai Rp</center></th>
	<th rowspan="2"><center>Vol atau SSL</center></th>
	<th rowspan="2"><center>Capex per Vol</center></th>
	<th rowspan="2"><center>Nilai Rp</center></th>
	<th rowspan="2"><center>Vol atau SSL</center></th>
	<th rowspan="2"><center>Capex per Vol</center></th>
	<th rowspan="2"><center>Nilai Rp</center></th>
	<th rowspan="2"><center>Vol atau SSL</center></th>
	<th rowspan="2"><center>Capex per Vol</center></th>
  </tr>
  <tr style="color: white; background: #0B63F7">
	<th><center>Nilai Rp</center></th>
	<th><center>Volume</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>PO</center></th>
	<th><center>GR</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Volume</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>PO</center></th>
	<th><center>GR</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol atau SSL</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol atau SSL</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol atau SSL</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol atau SSL</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol atau SSL</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>PO</center></th>
	<th><center>GR</center></th>
	<th><center>Nilai Rp</center></th>
	<th><center>Vol atau SSL</center></th>
	<th><center>Capex per Vol</center></th>
	<th><center>PO</center></th>
	<th><center>GR</center></th>
  </tr>
</thead>
<tbody>
<tr style="background-color: aqua;">
	<td><b><center>FBB</center></b></td>
<?php for($a=1;$a<=68;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
</tr>
<tr style="background-color: #DFD;">
	<td><b>PSB</b></td>
<?php for($a=1;$a<=68;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
</tr>
<tr>
	<td style="color: blue"><b>Jatim Balnus TA</b></td>
	<td rowspan=3 style="text-align:center"><b><?php echo number_format($target_psb,0,',','.');?></b></td>
	<td rowspan=3 style="text-align:center"><b>Ssl</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2022,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_psb_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_psb_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2023,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_psb_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_psb_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_jan,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_feb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_mar,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_apr,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_mei,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_jun,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_jul,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_agt,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_agt,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_agt,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_sept,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_sept,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_sep,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_okt,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_okt,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_okt,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_nov,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_nov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_nov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_des,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_des,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_des,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_psb_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_psb_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_psb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_psb,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_psb,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_psb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_psb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_psb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_psb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_psb,0,',','.');?></b></td>
</tr>
</tbody>
</table>
</div>

<!-- Tabel 2 -->
<div id="tabel2">
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
         while ($row = pg_fetch_assoc($result1)) {
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

<!-- Tabel 3 -->
<div id="tabel3">
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
         while ($row = pg_fetch_assoc($result2)) {
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
</div>
<script>
    window.onload = function() {
        // Membuat Workbook baru
        var workbook = new ExcelJS.Workbook();

        // Fungsi untuk menambahkan tabel ke worksheet dengan style
        function addTableWithStyles(tableId, sheetName, headerColor) {
            var table = document.getElementById(tableId).getElementsByTagName('table')[0];
            var worksheet = workbook.addWorksheet(sheetName);

            // Menambahkan header
            var headers = [];
            var headerRow = table.getElementsByTagName('thead')[0].getElementsByTagName('tr')[0];
            var headerCells = headerRow.getElementsByTagName('th');
            for (var i = 0; i < headerCells.length; i++) {
                headers.push(headerCells[i].innerText);
            }
            worksheet.addRow(headers);

            // Styling header
            var firstRow = worksheet.getRow(1);
            firstRow.eachCell({ includeEmpty: true }, function(cell) {
                cell.fill = {
                    type: 'pattern',
                    pattern: 'solid',
                    fgColor: { argb: headerColor }
                };
                cell.font = {
                    color: { argb: 'FFFFFFFF' }, // Putih
                    bold: true
                };
                cell.alignment = { horizontal: 'center', vertical: 'middle' };
                cell.border = {
                    top: { style: 'thin' },
                    left: { style: 'thin' },
                    bottom: { style: 'thin' },
                    right: { style: 'thin' }
                };
            });

            // Menambahkan data (jika ada)
            var tbody = table.getElementsByTagName('tbody')[0];
            if (tbody) {
                var rows = tbody.getElementsByTagName('tr');
                for (var r = 0; r < rows.length; r++) {
                    var rowData = [];
                    var cells = rows[r].getElementsByTagName('td');
                    for (var c = 0; c < cells.length; c++) {
                        rowData.push(cells[c].innerText);
                    }
                    worksheet.addRow(rowData);
                }
            }
        }

        // Menambahkan tabel dengan warna header yang berbeda
        addTableWithStyles('tabel1', "Tabel 1", "FF0B63F7"); // Warna biru
        addTableWithStyles('tabel2', "Tabel 2", "FF2DCE89"); // Warna hijau
        addTableWithStyles('tabel3', "Tabel 3", "FFFFA07A"); // Warna oranye

        // Ekspor workbook menjadi file Excel
        workbook.xlsx.writeBuffer().then(function(data) {
            var blob = new Blob([data], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });
            saveAs(blob, 'rekap_detail.xlsx');
        });
    };
</script>

</body>
</html>
