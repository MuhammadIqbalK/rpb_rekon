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
                    <!-- Kolom lainnya mengikuti format di atas -->
                </tr>
                <!-- Row ketiga mengikuti format -->
            </thead>
        </table>
    </div>
</div>

<script>
    window.onload = function() {
        var workbook = new ExcelJS.Workbook();

        function addTableWithStyles(tableId, sheetName, headerColor) {
            var table = document.getElementById(tableId).getElementsByTagName('table')[0];
            var worksheet = workbook.addWorksheet(sheetName);

            var headers = [];
            var headerRows = table.getElementsByTagName('thead')[0].getElementsByTagName('tr');
            
            // Memproses baris header
            for (var r = 0; r < headerRows.length; r++) {
                var row = headerRows[r];
                var headerCells = row.getElementsByTagName('th');
                var rowData = [];

                // Melakukan merge jika ada colspan atau rowspan
                for (var c = 0; c < headerCells.length; c++) {
                    var cell = headerCells[c];
                    var colSpan = cell.getAttribute('colspan');
                    var rowSpan = cell.getAttribute('rowspan');
                    var cellValue = cell.innerText;

                    // Tambahkan sel ke worksheet
                    rowData.push(cellValue);

                    // Jika ada colspan, gabungkan sel di worksheet
                    if (colSpan && colSpan > 1) {
                        worksheet.mergeCells(r + 1, rowData.length, r + 1, rowData.length + parseInt(colSpan) - 1);
                    }

                    // Jika ada rowspan, gabungkan sel secara vertikal
                    if (rowSpan && rowSpan > 1) {
                        worksheet.mergeCells(r + 1, rowData.length, r + parseInt(rowSpan), rowData.length);
                    }
                }

                worksheet.addRow(rowData);
            }

            // Styling untuk header
            worksheet.eachRow({ includeEmpty: true }, function(row, rowNumber) {
                row.eachCell({ includeEmpty: true }, function(cell) {
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
        addTableWithStyles('tabel1', "Tabel 1", "FF0B63F7");

        // Ekspor workbook menjadi file Excel
        workbook.xlsx.writeBuffer().then(function(data) {
            var blob = new Blob([data], { type: 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet' });
            saveAs(blob, 'rekap_detail.xlsx');
        });
    };
</script>

</body>
</html>
