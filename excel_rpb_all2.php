<?php
include("config/konek.php");
?>
<body>
<h3 class="mb-0">Dashboard Rekon dan Penyerapan Capex New 2024</h3>
<div>
<table>
<thead>
  <tr style="color: white; background: #0B63F7">
	<th rowspan="3"><center>Teritory</center></th>
	<th rowspan="3"><center>Release Capex</center></th>
	<th rowspan="3"><center>Satuan (vol)</center></th>
	<th colspan="5"><center>Outstanding 2022</center></th>
	<th colspan="5"><center>Outstanding 2023</center></th>
	<th colspan="29"><center>2024 (Hasil Rekon)</center></th>
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
<?php
$sql_psb='select
(select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-5321-19-01-I\') target,
sum(case when "BATCH"=\'BATCH-6 2024\' then ("OB_HARGA" + "RB_HARGA" + "WIFI_HARGA" + "AP_WIFI_HARGA" + "MATTAM_DC_HARGA" + "MATTAM_T_HARGA") else 0 end) nilai_psb_2024_jun,
sum(case when "BATCH"=\'BATCH-6 2024\' then ("OB_SSL" + "RB_SSL" + "WIFI_SSL" + "AP_WIFI_SSL" + "MATTAM_T_SSL") else 0 end) vol_psb_2024_jun,
sum(case when "BATCH"=\'BATCH-7 2024\' then ("OB_HARGA" + "RB_HARGA" + "WIFI_HARGA" + "AP_WIFI_HARGA" + "MATTAM_DC_HARGA" + "MATTAM_T_HARGA") else 0 end) nilai_psb_2024_jul,
sum(case when "BATCH"=\'BATCH-7 2024\' then ("OB_SSL" + "RB_SSL" + "WIFI_SSL" + "AP_WIFI_SSL" + "MATTAM_T_SSL") else 0 end) vol_psb_2024_jul,
sum(case when "BATCH"=\'BATCH-8 2024\' then ("OB_HARGA" + "RB_HARGA" + "WIFI_HARGA" + "AP_WIFI_HARGA" + "MATTAM_DC_HARGA" + "MATTAM_T_HARGA") else 0 end) nilai_psb_2024_agt,
sum(case when "BATCH"=\'BATCH-8 2024\' then ("OB_SSL" + "RB_SSL" + "WIFI_SSL" + "AP_WIFI_SSL" + "MATTAM_T_SSL") else 0 end) vol_psb_2024_agt,
sum(case when "BATCH"=\'BATCH-9 2024\' then ("OB_HARGA" + "RB_HARGA" + "WIFI_HARGA" + "AP_WIFI_HARGA" + "MATTAM_DC_HARGA" + "MATTAM_T_HARGA") else 0 end) nilai_psb_2024_sept,
sum(case when "BATCH"=\'BATCH-9 2024\' then ("OB_SSL" + "RB_SSL" + "WIFI_SSL" + "AP_WIFI_SSL" + "MATTAM_T_SSL") else 0 end) vol_psb_2024_sept
from develop."RELIGIUS_BATCH"';
$get_psb=pg_query($sql_psb);
?>
<tr style="background-color: aqua;">
	<td><b><center>FBB</center></b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
</tr>
<tr style="background-color: #DFD;">
	<td><b>PSB</b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
</tr>
<tr>
<?php
while($line_psb=pg_fetch_array($get_psb)){
	$target_psb=$line_psb['target'];
?>
	<td style="color: blue"><b>Jatim Balnus TA</b></td>
	<td rowspan=3 style="text-align:center"><b><?php echo number_format($target_psb,0,',','.');?></b></td>
	<td rowspan=3 style="text-align:center"><b>Ssl</b></td>
	<?php
	$nilai_psb_2022=0;
	$vol_psb_2022=0;
	$capex_vol_psb_2022=$nilai_psb_2022 / $vol_psb_2022;
	$po_psb_2022=0;
	$gr_psb_2022=0;
	$nilai_psb_2023=25173231704;
	$vol_psb_2023=23734;
	$capex_vol_psb_2023=$nilai_psb_2023 / $vol_psb_2023;
	$po_psb_2023=25173231704;
	$gr_psb_2023=25173231704;
	$nilai_psb_2024_jan=25499278178;
	$vol_psb_2024_jan=24939;
	$capex_vol_psb_2024_jan=$nilai_psb_2024_jan / $vol_psb_2024_jan;
	$nilai_psb_2024_feb=27924455744;
	$vol_psb_2024_feb=27114;
	$capex_vol_psb_2024_feb=$nilai_psb_2024_feb / $vol_psb_2024_feb;
	$nilai_psb_2024_mar=27009953616;
	$vol_psb_2024_mar=26196;
	$capex_vol_psb_2024_mar=$nilai_psb_2024_mar / $vol_psb_2024_mar;
	$nilai_psb_2024_apr=25117638417;
	$vol_psb_2024_apr=24087;
	$capex_vol_psb_2024_apr=$nilai_psb_2024_apr / $vol_psb_2024_apr;
	$nilai_psb_2024_mei=26650028451;
	$vol_psb_2024_mei=30275;
	$capex_vol_psb_2024_mei=$nilai_psb_2024_mei / $vol_psb_2024_mei;
	$nilai_psb_2024_jun=$line_psb['nilai_psb_2024_jun'];
	$vol_psb_2024_jun=$line_psb['vol_psb_2024_jun'];
	$capex_vol_psb_2024_jun=$nilai_psb_2024_jun / $vol_psb_2024_jun;
	$nilai_psb_2024_jul=$line_psb['nilai_psb_2024_jul'];
	$vol_psb_2024_jul=$line_psb['vol_psb_2024_jul'];
	$capex_vol_psb_2024_jul=$nilai_psb_2024_jul / $vol_psb_2024_jul;
	$nilai_psb_2024_agt=$line_psb['nilai_psb_2024_agt'];
	$vol_psb_2024_agt=$line_psb['vol_psb_2024_agt'];
	$capex_vol_psb_2024_agt=$nilai_psb_2024_agt / $vol_psb_2024_agt;
	$nilai_psb_2024_sept=$line_psb['nilai_psb_2024_sept'];
	$vol_psb_2024_sept=$line_psb['vol_psb_2024_sept'];
	$capex_vol_psb_2024_sept=$nilai_psb_2024_sept / $vol_psb_2024_sept;
	$po_psb_2024_jan_mei=105551325955;
	$gr_psb_2024_jan_mei=105551325955;
	$po_psb_2024= $po_psb_2024_jan_mei;
	$gr_psb_2024= $gr_psb_2024_jan_mei;
	
	$nilai_psb_2022_non=0;
	$vol_psb_2022_non=0;
	$capex_vol_psb_2022_non=$nilai_psb_2022_non / $vol_psb_2022_non;
	$po_psb_2022_non=0;
	$gr_psb_2022_non=0;
	$nilai_psb_2023_non=3594600;
	$vol_psb_2023_non=0;
	$capex_vol_psb_2023_non=$nilai_psb_2023_non / $vol_psb_2023_non;
	$po_psb_2023_non=0;
	$gr_psb_2023_non=0;
	$nilai_psb_2024_jan_non=0;
	$vol_psb_2024_jan_non=0;
	$capex_vol_psb_2024_jan_non=$nilai_psb_2024_jan_non / $vol_psb_2024_jan_non;
	if(is_nan($capex_vol_psb_2024_jan_non)){
		$capex_vol_psb_2024_jan_non=0;
	}else{
		$capex_vol_psb_2024_jan_non=$capex_vol_psb_2024_jan_non;
	}
	$nilai_psb_2024_feb_non=0;
	$vol_psb_2024_feb_non=0;
	$capex_vol_psb_2024_feb_non=$nilai_psb_2024_feb_non / $vol_psb_2024_feb_non;
	if(is_nan($capex_vol_psb_2024_feb_non)){
		$capex_vol_psb_2024_feb_non=0;
	}else{
		$capex_vol_psb_2024_feb_non=$capex_vol_psb_2024_feb_non;
	}
	$nilai_psb_2024_mar_non=0;
	$vol_psb_2024_mar_non=0;
	$capex_vol_psb_2024_mar_non=$nilai_psb_2024_mar_non / $vol_psb_2024_mar_non;
	if(is_nan($capex_vol_psb_2024_mar_non)){
		$capex_vol_psb_2024_mar_non=0;
	}else{
		$capex_vol_psb_2024_mar_non=$capex_vol_psb_2024_mar_non;
	}
	$nilai_psb_2024_apr_non=0;
	$vol_psb_2024_apr_non=0;
	$capex_vol_psb_2024_apr_non=$nilai_psb_2024_apr_non / $vol_psb_2024_apr_non;
	if(is_nan($capex_vol_psb_2024_apr_non)){
		$capex_vol_psb_2024_apr_non=0;
	}else{
		$capex_vol_psb_2024_apr_non=$capex_vol_psb_2024_apr_non;
	}
	$nilai_psb_2024_mei_non=0;
	$vol_psb_2024_mei_non=0;
	$capex_vol_psb_2024_mei_non=$nilai_psb_2024_mei_non / $vol_psb_2024_mei_non;
	if(is_nan($capex_vol_psb_2024_mei_non)){
		$capex_vol_psb_2024_mei_non=0;
	}else{
		$capex_vol_psb_2024_mei_non=$capex_vol_psb_2024_mei_non;
	}
	$nilai_psb_2024_jun_non=0;
	$vol_psb_2024_jun_non=0;
	$capex_vol_psb_2024_jun_non=$nilai_psb_2024_jun_non / $vol_psb_2024_jun_non;
	if(is_nan($capex_vol_psb_2024_jun_non)){
		$capex_vol_psb_2024_jun_non=0;
	}else{
		$capex_vol_psb_2024_jun_non=$capex_vol_psb_2024_jun_non;
	}
	$nilai_psb_2024_jul_non=0;
	$vol_psb_2024_jul_non=0;
	$capex_vol_psb_2024_jul_non=$nilai_psb_2024_jul_non / $vol_psb_2024_jul_non;
	if(is_nan($capex_vol_psb_2024_jul_non)){
		$capex_vol_psb_2024_jul_non=0;
	}else{
		$capex_vol_psb_2024_jul_non=$capex_vol_psb_2024_jul_non;
	}
	$nilai_psb_2024_jun_non=0;
	$vol_psb_2024_jun_non=0;
	$capex_vol_psb_2024_jun_non=$nilai_psb_2024_jun_non / $vol_psb_2024_jun_non;
	if(is_nan($capex_vol_psb_2024_jun_non)){
		$capex_vol_psb_2024_jun_non=0;
	}else{
		$capex_vol_psb_2024_jun_non=$capex_vol_psb_2024_jun_non;
	}
	$nilai_psb_2024_sept_non=0;
	$vol_psb_2024_sept_non=0;
	$capex_vol_psb_2024_sept_non=$nilai_psb_2024_sept_non / $vol_psb_2024_sept_non;
	if(is_nan($capex_vol_psb_2024_sept_non)){
		$capex_vol_psb_2024_sept_non=0;
	}else{
		$capex_vol_psb_2024_sept_non=$capex_vol_psb_2024_sept_non;
	}
	$po_psb_2024_non=0;
	$gr_psb_2024_non=0;
	
	$nilai_psb_2022_tot=$nilai_psb_2022 + $nilai_psb_2022_non;
	$vol_psb_2022_tot=$vol_psb_2022 + $vol_psb_2022_non;
	$capex_vol_psb_2022_tot=$capex_vol_psb_2022 + $capex_vol_psb_2022_non;
	$po_psb_2022_tot=$po_psb_2022 + $po_psb_2022_non;
	$gr_psb_2022_tot=$gr_psb_2022 + $gr_psb_2022_non;
	$nilai_psb_2023_tot=$nilai_psb_2023 + $nilai_psb_2023_non;
	$vol_psb_2023_tot=$vol_psb_2023 + $vol_psb_2023_non;
	$capex_vol_psb_2023_tot=$nilai_psb_2023_tot / $vol_psb_2023_tot;
	$po_psb_2023_tot=$po_psb_2023 + $po_psb_2023_non;
	$gr_psb_2023_tot=$gr_psb_2023 + $gr_psb_2023_non;
	$nilai_psb_2024_jan_tot=$nilai_psb_2024_jan + $nilai_psb_2024_jan_non;
	$vol_psb_2024_jan_tot=$vol_psb_2024_jan + $vol_psb_2024_jan_non;
	$capex_vol_psb_2024_jan_tot=$nilai_psb_2024_jan_tot / $vol_psb_2024_jan_tot;
	$nilai_psb_2024_feb_tot=$nilai_psb_2024_feb + $nilai_psb_2024_feb_non;
	$vol_psb_2024_feb_tot=$vol_psb_2024_feb + $vol_psb_2024_feb_non;
	$capex_vol_psb_2024_feb_tot=$nilai_psb_2024_feb_tot / $vol_psb_2024_feb_tot;
	$nilai_psb_2024_mar_tot=$nilai_psb_2024_mar + $nilai_psb_2024_mar_non;
	$vol_psb_2024_mar_tot=$vol_psb_2024_mar + $vol_psb_2024_mar_non;
	$capex_vol_psb_2024_mar_tot=$nilai_psb_2024_mar_tot / $vol_psb_2024_mar_tot;
	$nilai_psb_2024_apr_tot=$nilai_psb_2024_apr + $nilai_psb_2024_apr_non;
	$vol_psb_2024_apr_tot=$vol_psb_2024_apr + $vol_psb_2024_apr_non;
	$capex_vol_psb_2024_apr_tot=$nilai_psb_2024_apr_tot / $vol_psb_2024_apr_tot;
	$nilai_psb_2024_mei_tot=$nilai_psb_2024_mei + $nilai_psb_2024_mei_non;
	$vol_psb_2024_mei_tot=$vol_psb_2024_mei + $vol_psb_2024_mei_non;
	$capex_vol_psb_2024_mei_tot=$nilai_psb_2024_mei_tot / $vol_psb_2024_mei_tot;
	$nilai_psb_2024_jun_tot=$nilai_psb_2024_jun + $nilai_psb_2024_jun_non;
	$vol_psb_2024_jun_tot=$vol_psb_2024_jun + $vol_psb_2024_jun_non;
	$capex_vol_psb_2024_jun_tot=$nilai_psb_2024_jun_tot / $vol_psb_2024_jun_tot;
	$nilai_psb_2024_jul_tot=$nilai_psb_2024_jul + $nilai_psb_2024_jul_non;
	$vol_psb_2024_jul_tot=$vol_psb_2024_jul + $vol_psb_2024_jul_non;
	$capex_vol_psb_2024_jul_tot=$nilai_psb_2024_jul_tot / $vol_psb_2024_jul_tot;
	$nilai_psb_2024_agt_tot=$nilai_psb_2024_agt + $nilai_psb_2024_agt_non;
	$vol_psb_2024_agt_tot=$vol_psb_2024_agt + $vol_psb_2024_agt_non;
	$capex_vol_psb_2024_agt_tot=$nilai_psb_2024_agt_tot / $vol_psb_2024_agt_tot;
	$nilai_psb_2024_sept_tot=$nilai_psb_2024_sept + $nilai_psb_2024_sept_non;
	$vol_psb_2024_sept_tot=$vol_psb_2024_sept + $vol_psb_2024_sept_non;
	$capex_vol_psb_2024_sept_tot=$nilai_psb_2024_sept_tot / $vol_psb_2024_sept_tot;
	$po_psb_2024_tot=$po_psb_2024 + $po_psb_2024_non;
	$gr_psb_2024_tot=$gr_psb_2024 + $gr_psb_2024_non;
	$tot_nilai_psb=$nilai_psb_2022+$nilai_psb_2023+$nilai_psb_2024_jan+$nilai_psb_2024_feb+$nilai_psb_2024_mar+$nilai_psb_2024_apr+$nilai_psb_2024_mei+$nilai_psb_2024_jun+$nilai_psb_2024_jul+$nilai_psb_2024_agt+$nilai_psb_2024_sept;
	$tot_vol_psb=$vol_psb_2022+$vol_psb_2023+$vol_psb_2024_jan+$vol_psb_2024_feb+$vol_psb_2024_mar+$vol_psb_2024_apr+$vol_psb_2024_mei+$vol_psb_2024_jun+$vol_psb_2024_jul+$vol_psb_2024_agt+$vol_psb_2024_sept;
	
	$tot_capex_vol_psb=$tot_nilai_psb / $tot_vol_psb;
	$tot_nilai_psb_non=$nilai_psb_2022_non+$nilai_psb_2023_non+$nilai_psb_2024_jan_non+$nilai_psb_2024_feb_non+$nilai_psb_2024_mar_non+$nilai_psb_2024_apr_non+$nilai_psb_2024_mei_non+$nilai_psb_2024_jun_non+$nilai_psb_2024_jul_non+$nilai_psb_2024_agt_non+$nilai_psb_2024_sept_non;
	$tot_vol_psb_non=$vol_psb_2022_non+$vol_psb_2023_non+$vol_psb_2024_jan_non+$vol_psb_2024_feb_non+$vol_psb_2024_mar_non+$vol_psb_2024_apr_non+$vol_psb_2024_mei_non+$vol_psb_2024_jun_non+$vol_psb_2024_jul_non+$vol_psb_2024_agt_non+$vol_psb_2024_sept_non;
	
	$tot_capex_vol_psb_non=$tot_nilai_psb_non / $tot_vol_psb_non;
	
	
	$tot_po_psb=$po_psb_2022+$po_psb_2023+$po_psb_2024;
	$tot_gr_psb=$gr_psb_2022+$gr_psb_2023+$gr_psb_2024;
	
	$tot_nilai_psb_tot=$tot_nilai_psb+$tot_nilai_psb_non;
	$tot_vol_psb_tot=$tot_vol_psb+$tot_vol_psb_non;
	$tot_capex_vol_psb_tot=$tot_capex_vol_psb+$tot_capex_vol_psb_non;
	$tot_po_psb_tot=$tot_po_psb+$tot_po_psb_non;
	$tot_gr_psb_tot=$tot_gr_psb+$tot_gr_psb_non;
	
	$persen_tot_po_gr_psb=($tot_gr_psb / $tot_po_psb) *100;
	$persen_tot_po_nilai_psb=($tot_po_psb / $tot_nilai_psb) *100;
	$persen_tot_po_gr_psb_non=($tot_gr_psb_non / $tot_po_psb_non) *100;
	if(is_nan($persen_tot_po_gr_psb_non)){
		$persen_tot_po_gr_psb_non=0;
	}else{
		$persen_tot_po_gr_psb_non=$persen_tot_po_gr_psb_non;
	}
	$persen_tot_po_nilai_psb_non=($tot_po_psb_non / $tot_nilai_psb_non) *100;
	
	$sisa_target_totpo_psb=$target_psb - $tot_po_psb;
	$sisa_vol_psb=$sisa_target_totpo_psb / $tot_capex_vol_psb;
	$sisa_target_totpo_psb_non=$target_psb - $tot_po_psb_non;
	$sisa_vol_psb_non=$sisa_target_totpo_psb_non / $tot_capex_vol_psb_non;
	
	$tot_persen_tot_po_gr_psb=$persen_tot_po_gr_psb + $persen_tot_po_gr_psb_non;
	$tot_persen_tot_po_nilai_psb=$persen_tot_po_nilai_psb + $persen_tot_po_nilai_psb_non;
	$tot_sisa_target_totpo_psb=$sisa_target_totpo_psb + $sisa_target_totpo_psb_non;
	$tot_sisa_vol_psb=$sisa_vol_psb + $sisa_vol_psb_non;
	
	$nilai_ogp_psb=26401729811;
	$vol_ogp_psb=25496;
	$capex_vol_ogp_psb=$nilai_ogp_psb / $vol_ogp_psb;
	
	$nilai_outlook_psb=132008649055;
	$vol_outlook_psb=$nilai_outlook_psb / $tot_capex_vol_psb;
	$capex_vol_outlook_psb=$nilai_outlook_psb / $vol_outlook_psb;
	
	$nilai_ogp_psb_non=0;
	$vol_ogp_psb_non=0;
	$capex_vol_ogp_psb_non=$nilai_ogp_psb_non / $vol_ogp_psb_non;
	if(is_nan($capex_vol_ogp_psb_non)){
		$capex_vol_ogp_psb_non=0;
	}else{
		$capex_vol_ogp_psb_non=$capex_vol_ogp_psb_non;
	}
	
	$nilai_outlook_psb_non=0;
	$vol_outlook_psb_non=$nilai_outlook_psb_non / $tot_capex_vol_psb_non;
	$capex_vol_outlook_psb_non=$nilai_outlook_psb_non / $vol_outlook_psb_non;
	if(is_nan($capex_vol_outlook_psb_non)){
		$capex_vol_outlook_psb_non=0;
	}else{
		$capex_vol_outlook_psb_non=$capex_vol_outlook_psb_non;
	}
	
	$tot_nilai_ogp_psb=$nilai_ogp_psb + $nilai_ogp_psb_non;
	$tot_vol_ogp_psb=$vol_ogp_psb + $vol_ogp_psb_non;
	$tot_capex_vol_ogp_psb=$tot_nilai_ogp_psb / $tot_vol_ogp_psb;
	
	$tot_nilai_outlook_psb=$nilai_outlook_psb + $nilai_outlook_psb_non;
	$tot_vol_outlook_psb=$vol_outlook_psb + $vol_outlook_psb_non;
	$tot_capex_vol_outlook_psb=$tot_nilai_outlook_psb / $tot_vol_outlook_psb;
?>
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
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_sept,0,',','.');?></b></td>
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
<?php } ?>
</tr>
<tr>
	<td style="color: blue"><b>Jatim Balnus NON TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2022_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_psb_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_psb_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2023_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_psb_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_psb_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_feb_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_feb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_feb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_apr_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_apr_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_apr_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_jun_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_jun_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_jun_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_jul_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_jul_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_jul_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_agt_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_agt_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_agt_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_sept_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_sept_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_sept_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_psb_2024_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_psb_2024_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_psb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_psb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_psb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_psb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_psb_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_psb_non,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_psb_non,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_psb_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_psb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_psb_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_psb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_psb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_psb_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_psb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_psb_non,0,',','.');?></b></td>
</tr>
<tr>
	<td style="color: blue"><b>Jatim Balnus All Mitra</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2022_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_psb_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_psb_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2023_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_psb_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_psb_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_feb_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_feb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_feb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_mar_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_mar_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_mar_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_mei_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_mei_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_mei_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_jun_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_jun_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_jun_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_jul_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_jul_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_jul_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_agt_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_agt_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_agt_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_psb_2024_sept_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_psb_2024_sept_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_psb_2024_sept_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($po_psb_2024_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_psb_2024_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_psb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_psb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_psb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_psb_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_gr_psb_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_persen_tot_po_gr_psb,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_persen_tot_po_nilai_psb,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_sisa_target_totpo_psb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_sisa_vol_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_ogp_psb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_ogp_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_ogp_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_outlook_psb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_outlook_psb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_outlook_psb,0,',','.');?></b></td>
</tr>
<?php 
$sql_pt2='select (select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-5321-16-01-I\') target_jatimb,
(select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-4321-16-01-I\') target_jateng,
sum(nilai_pt2_2024_jun_jatimb) nilai_pt2_2024_jun_jatimb,sum(vol_pt2_2024_jun_jatimb) * 8 vol_pt2_2024_jun_jatimb,
sum(nilai_pt2_2024_jul_jatimb) nilai_pt2_2024_jul_jatimb,sum(vol_pt2_2024_jul_jatimb) * 8 vol_pt2_2024_jul_jatimb,
sum(nilai_pt2_2024_agt_jatimb) nilai_pt2_2024_agt_jatimb,sum(vol_pt2_2024_agt_jatimb) * 8 vol_pt2_2024_agt_jatimb,
sum(nilai_pt2_2024_sept_jatimb) nilai_pt2_2024_sept_jatimb,sum(vol_pt2_2024_sept_jatimb) * 8 vol_pt2_2024_sept_jatimb,
sum(po_pt2_2024_jatimb) po_pt2_2024_jatimb,sum(gr_pt2_2024_jatimb) gr_pt2_2024_jatimb,
sum(nilai_ogp_pt2_jatimb) nilai_ogp_pt2_jatimb,sum(vol_ogp_pt2_jatimb) * 8 vol_ogp_pt2_jatimb,
sum(nilai_so_pt2_jatimb) nilai_so_pt2_jatimb,sum(vol_so_pt2_jatimb) * 8 vol_so_pt2_jatimb,
sum(nilai_pt2_2024_jun_jateng) nilai_pt2_2024_jun_jateng,sum(vol_pt2_2024_jun_jateng) * 8 vol_pt2_2024_jun_jateng,
sum(nilai_pt2_2024_jul_jateng) nilai_pt2_2024_jul_jateng,sum(vol_pt2_2024_jul_jateng) * 8 vol_pt2_2024_jul_jateng,
sum(nilai_pt2_2024_agt_jateng) nilai_pt2_2024_agt_jateng,sum(vol_pt2_2024_agt_jateng) * 8 vol_pt2_2024_agt_jateng,
sum(nilai_pt2_2024_sept_jateng) nilai_pt2_2024_sept_jateng,sum(vol_pt2_2024_sept_jateng) * 8 vol_pt2_2024_sept_jateng,
sum(po_pt2_2024_jateng) po_pt2_2024_jateng,sum(gr_pt2_2024_jateng) gr_pt2_2024_jateng,
sum(nilai_ogp_pt2_jateng) nilai_ogp_pt2_jateng,sum(vol_ogp_pt2_jateng) * 8 vol_ogp_pt2_jateng,
sum(nilai_so_pt2_jateng) nilai_so_pt2_jateng,sum(vol_so_pt2_jateng) * 8 vol_so_pt2_jateng
from
(select "PROGRAM",
concat(\'0\')::numeric nilai_pt2_2024_jun_jatimb,
concat(\'0\')::numeric nilai_pt2_2024_jul_jatimb,
concat(\'0\')::numeric nilai_pt2_2024_agt_jatimb,
concat(\'0\')::numeric nilai_pt2_2024_sept_jatimb,
concat(\'0\')::numeric vol_pt2_2024_jun_jatimb,
concat(\'0\')::numeric vol_pt2_2024_jul_jatimb,
concat(\'0\')::numeric vol_pt2_2024_agt_jatimb,
concat(\'0\')::numeric vol_pt2_2024_sept_jatimb,
concat(\'0\')::bigint po_pt2_2024_jatimb,concat(\'0\')::bigint gr_pt2_2024_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_pt2_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_pt2_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_pt2_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_pt2_jatimb,
concat(\'0\')::numeric nilai_pt2_2024_jun_jateng,
concat(\'0\')::numeric nilai_pt2_2024_jul_jateng,
concat(\'0\')::numeric nilai_pt2_2024_agt_jateng,
concat(\'0\')::numeric nilai_pt2_2024_sept_jateng,
concat(\'0\')::numeric vol_pt2_2024_jun_jateng,
concat(\'0\')::numeric vol_pt2_2024_jul_jateng,
concat(\'0\')::numeric vol_pt2_2024_agt_jateng,
concat(\'0\')::numeric vol_pt2_2024_sept_jateng,
concat(\'0\')::bigint po_pt2_2024_jateng,concat(\'0\')::bigint gr_pt2_2024_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_pt2_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\' 
then 1 else 0 end) vol_ogp_pt2_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_pt2_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_pt2_jateng
FROM develop."RPB_REKON"
where "PROGRAM" in (\'PT2\') and "BUDGET_SOURCE" !=\'DID\' 
and "BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and "STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and "STATUS_SO" is not null
group by "PROGRAM"
union all
select a."PROGRAM",
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_pt2_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_pt2_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_pt2_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_pt2_2024_sept_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_pt2_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_pt2_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_pt2_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_pt2_2024_sept_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5321-16-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_pt2_2024_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5321-16-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_pt2_2024_jatimb,
concat(\'0\')::numeric nilai_ogp_pt2_jatimb,concat(\'0\')::numeric vol_ogp_pt2_jatimb,
concat(\'0\')::numeric nilai_so_pt2_jatimb,concat(\'0\')::numeric vol_so_pt2_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_pt2_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_pt2_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_pt2_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_pt2_2024_sept_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_pt2_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_pt2_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_pt2_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_pt2_2024_sept_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4321-16-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_pt2_2024_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4321-16-01-I\'  
then b."LOCAL_AMOUNT_GR" else 0 end) gr_pt2_2024_jateng,
concat(\'0\')::numeric nilai_ogp_pt2_jateng,concat(\'0\')::numeric vol_ogp_pt2_jateng,
concat(\'0\')::numeric nilai_so_pt2_jateng,concat(\'0\')::numeric vol_so_pt2_jateng
FROM develop."RPB_REKON" a, develop."SAP" b
where SUBSTRING(a."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and a."PROGRAM" in (\'PT2\')
and b."TGL_SAP"=current_date and a."BUDGET_SOURCE" !=\'DID\'
and a."BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and a."STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and a."STATUS_SO" is not null
group by a."PROGRAM") t
group by target_jatimb,target_jateng';
//echo $sql_pt2;
$get_pt2=pg_query($sql_pt2); 
?>
<tr style="background-color: #DFD;">
	<td><b>PT2</b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
	</tr>
<tr>
<?php
while($line_pt2=pg_fetch_array($get_pt2)){
	$target_pt2_jatimb=$line_pt2['target_jatimb'];
?>
	<td style="color: blue"><b>Jatim Balnus TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b>Port</b></td>
	<?php 
	$nilai_pt2_2022_jatimb_jatimb=0;
	$vol_pt2_2022=0;
	$capex_vol_pt2_2022_jatimb=$nilai_pt2_2022_jatimb / $vol_pt2_2022_jatimb;
	if(is_nan($capex_vol_pt2_2022_jatimb)){
		$capex_vol_pt2_2022_jatimb=0;
	}else{
		$capex_vol_pt2_2022_jatimb=$capex_vol_pt2_jatimb_2022;
	}
	$nilai_pt2_2023_jatimb=2282617909;
	$vol_pt2_2023_jatimb=12712;
	$capex_vol_pt2_2023_jatimb=179564.026825047;
	$nilai_pt2_2024_jan_jatimb=995125587;
	$vol_pt2_2024_jan_jatimb=3112;
	$capex_vol_pt2_2024_jan_jatimb=319770.432840617;
	$nilai_pt2_2024_feb_jatimb=654018349;
	$vol_pt2_2024_feb_jatimb=2296;
	$capex_vol_pt2_2024_feb_jatimb=284851.197299652;
	$nilai_pt2_2024_mar_jatimb=485937182;
	$vol_pt2_2024_mar_jatimb=1768;
	$capex_vol_pt2_2024_mar_jatimb=274851.347285068;
	$nilai_pt2_2024_apr_jatimb=802760319;
	$vol_pt2_2024_apr_jatimb=1488;
	$capex_vol_pt2_2024_apr_jatimb=539489.461693548;
	$nilai_pt2_2024_mei_jatimb=674915452;
	$vol_pt2_2024_mei_jatimb=1960;
	$capex_vol_pt2_2024_mei_jatimb=344344.618367347;
	$nilai_pt2_2024_jun_jatimb=$line_pt2['nilai_pt2_2024_jun_jatimb'];
	$vol_pt2_2024_jun_jatimb=$line_pt2['vol_pt2_2024_jun_jatimb'];
	$capex_vol_pt2_2024_jun_jatimb=$nilai_pt2_2024_jun_jatimb / $vol_pt2_2024_jun_jatimb;
	$nilai_pt2_2024_jul_jatimb=$line_pt2['nilai_pt2_2024_jul_jatimb'];
	$vol_pt2_2024_jul_jatimb=$line_pt2['vol_pt2_2024_jul_jatimb'];
	$capex_vol_pt2_2024_jul_jatimb=$nilai_pt2_2024_jul_jatimb / $vol_pt2_2024_jul_jatimb;
	$nilai_pt2_2024_agt_jatimb=$line_pt2['nilai_pt2_2024_agt_jatimb'];
	$vol_pt2_2024_agt_jatimb=$line_pt2['vol_pt2_2024_agt_jatimb'];
	$capex_vol_pt2_2024_agt_jatimb=$nilai_pt2_2024_agt_jatimb / $vol_pt2_2024_agt_jatimb;
	$nilai_pt2_2024_sept_jatimb=$line_pt2['nilai_pt2_2024_sept_jatimb'];
	$vol_pt2_2024_sept_jatimb=$line_pt2['vol_pt2_2024_sept_jatimb'];
	$capex_vol_pt2_2024_sept_jatimb=$nilai_pt2_2024_sept_jatimb / $vol_pt2_2024_sept_jatimb;
	$tot_nilai_pt2_jatimb=$nilai_pt2_2022_jatimb+$nilai_pt2_2023_jatimb+$nilai_pt2_2024_jan_jatimb+$nilai_pt2_2024_feb_jatimb+$nilai_pt2_2024_mar_jatimb+$nilai_pt2_2024_apr_jatimb+$nilai_pt2_2024_mei_jatimb+$nilai_pt2_2024_jun_jatimb+$nilai_pt2_2024_jul_jatimb+$nilai_pt2_2024_agt_jatimb+$nilai_pt2_2024_sept_jatimb;
	
	$tot_vol_pt2_jatimb=$vol_pt2_2022_jatimb+$vol_pt2_2023_jatimb+$vol_pt2_2024_jan_jatimb+$vol_pt2_2024_feb_jatimb+$vol_pt2_2024_mar_jatimb+$vol_pt2_2024_apr_jatimb+$vol_pt2_2024_mei_jatimb+$vol_pt2_2024_jun_jatimb+$vol_pt2_2024_jul_jatimb+$vol_pt2_2024_agt_jatimb+$vol_pt2_2024_sept_jatimb;
	
	$tot_capex_vol_pt2_jatimb=$tot_nilai_pt2_jatimb / $tot_vol_pt2_jatimb;
	
	$po_pt2_2022_jatimb=0;
	$gr_pt2_2022_jatimb=0;
	$po_pt2_2023_jatimb=2277975793;
	$gr_pt2_2023_jatimb=2277975793;
	$po_pt2_2024_jan_mei_jatimb=3179969683;
	$gr_pt2_2024_jan_mei_jatimb=3179969683;
	$po_pt2_2024_jatimb=$po_pt2_2024_jan_mei_jatimb + $line_pt2['po_pt2_2024_jatimb'];
	$gr_pt2_2024_jatimb=$gr_pt2_2024_jan_mei_jatimb + $line_pt2['gr_pt2_2024_jatimb'];
	
	$tot_po_pt2_jatimb=$po_pt2_2022_jatimb+$po_pt2_2023_jatimb+$po_pt2_2024_jatimb;
	$tot_gr_pt2_jatimb=$gr_pt2_2022_jatimb+$gr_pt2_2023_jatimb+$gr_pt2_2024_jatimb;
	
	$persen_tot_po_gr_pt2_jatimb=($tot_gr_pt2_jatimb / $tot_po_pt2_jatimb) *100;
	$persen_tot_po_nilai_pt2_jatimb=($tot_po_pt2_jatimb / $tot_nilai_pt2_jatimb) *100;
	
	$sisa_target_totpo_pt2_jatimb=$target_pt2_jatimb - $tot_po_pt2_jatimb;
	$sisa_vol_pt2_jatimb=$sisa_target_totpo_pt2_jatimb / $tot_capex_vol_pt2_jatimb;
	
	$nilai_ogp_pt2_jatimb=$line_pt2['nilai_ogp_pt2_jatimb'];
	$vol_ogp_pt2_jatimb=$line_pt2['vol_ogp_pt2_jatimb'];
	$capex_vol_ogp_pt2_jatimb=$nilai_ogp_pt2_jatimb / $vol_ogp_pt2_jatimb;
	
	$nilai_outlook_pt2_jatimb=4059731342;
	$vol_outlook_pt2_jatimb=$nilai_outlook_pt2_jatimb / $tot_capex_vol_pt2_jatimb;
	$capex_vol_outlook_pt2_jatimb=$nilai_outlook_pt2_jatimb / $vol_outlook_pt2_jatimb;
	
	$nilai_so_pt2_jatimb=$line_pt2['nilai_so_pt2_jatimb'];
	$vol_so_pt2_jatimb=$line_pt2['vol_so_pt2_jatimb'];
	$capex_vol_so_pt2_jatimb=$nilai_so_pt2_jatimb / $vol_so_pt2_jatimb;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt2_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt2_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt2_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt2_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_jan_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_jan_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_jan_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_feb_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_feb_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_feb_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_mar_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_mar_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_mar_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_apr_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_apr_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_apr_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_mei_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_mei_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_mei_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_jun_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_jun_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_jun_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_jul_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_jul_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_jul_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt2_2024_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt2_2024_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_pt2_jatimb,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_pt2_jatimb,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_pt2_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_pt2_jatimb,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr>
<?php
$get_pt2=pg_query($sql_pt2);
while($line_pt2=pg_fetch_array($get_pt2)){
	$target_pt2_jateng=$line_pt2['target_jateng'];
?>
	<td style="color: blue"><b>Jateng TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b>Port</b></td>
	<?php 
	$nilai_pt2_2022_jateng=0;
	$vol_pt2_2022=0;
	$capex_vol_pt2_2022_jateng=$nilai_pt2_2022_jateng / $vol_pt2_2022_jateng;
	if(is_nan($capex_vol_pt2_2022_jateng)){
		$capex_vol_pt2_2022_jateng=0;
	}else{
		$capex_vol_pt2_2022_jateng=$capex_vol_pt2_jateng_2022;
	}
	$nilai_pt2_2023_jateng=0;
	$vol_pt2_2023_jateng=0;
	$capex_vol_pt2_2023_jateng=0;
	$nilai_pt2_2024_jan_jateng=2214309569;
	$vol_pt2_2024_jan_jateng=7112;
	$capex_vol_pt2_2024_jan_jateng=311348;
	$nilai_pt2_2024_feb_jateng=1045938964;
	$vol_pt2_2024_feb_jateng=3488;
	$capex_vol_pt2_2024_feb_jateng=299868;
	$nilai_pt2_2024_mar_jateng=1229852838;
	$vol_pt2_2024_mar_jateng=428;
	$capex_vol_pt2_2024_mar_jateng=287349;
	$nilai_pt2_2024_apr_jateng=1062111809;
	$vol_pt2_2024_apr_jateng=336;
	$capex_vol_pt2_2024_apr_jateng=316105;
	$nilai_pt2_2024_mei_jateng=1235921556;
	$vol_pt2_2024_mei_jateng=4096;
	$capex_vol_pt2_2024_mei_jateng=301739;
	$nilai_pt2_2024_jun_jateng=$line_pt2['nilai_pt2_2024_jun_jateng'];
	$vol_pt2_2024_jun_jateng=$line_pt2['vol_pt2_2024_jun_jateng'];
	$capex_vol_pt2_2024_jun_jateng=$nilai_pt2_2024_jun_jateng / $vol_pt2_2024_jun_jateng;
	$nilai_pt2_2024_jul_jateng=$line_pt2['nilai_pt2_2024_jul_jateng'];
	$vol_pt2_2024_jul_jateng=$line_pt2['vol_pt2_2024_jul_jateng'];
	$capex_vol_pt2_2024_jul_jateng=$nilai_pt2_2024_jul_jateng / $vol_pt2_2024_jul_jateng;
	$nilai_pt2_2024_agt_jateng=$line_pt2['nilai_pt2_2024_agt_jateng'];
	$vol_pt2_2024_agt_jateng=$line_pt2['vol_pt2_2024_agt_jateng'];
	$capex_vol_pt2_2024_agt_jateng=$nilai_pt2_2024_agt_jateng / $vol_pt2_2024_agt_jateng;
	$nilai_pt2_2024_sept_jateng=$line_pt2['nilai_pt2_2024_sept_jateng'];
	$vol_pt2_2024_sept_jateng=$line_pt2['vol_pt2_2024_sept_jateng'];
	$capex_vol_pt2_2024_sept_jateng=$nilai_pt2_2024_sept_jateng / $vol_pt2_2024_sept_jateng;
	$tot_nilai_pt2_jateng=$nilai_pt2_2022_jateng+$nilai_pt2_2023_jateng+$nilai_pt2_2024_jan_jateng+$nilai_pt2_2024_feb_jateng+$nilai_pt2_2024_mar_jateng+$nilai_pt2_2024_apr_jateng+$nilai_pt2_2024_mei_jateng+$nilai_pt2_2024_jun_jateng+$nilai_pt2_2024_jul_jateng+$nilai_pt2_2024_agt_jateng+$nilai_pt2_2024_sept_jateng;
	
	$tot_vol_pt2_jateng=$vol_pt2_2022_jateng+$vol_pt2_2023_jateng+$vol_pt2_2024_jan_jateng+$vol_pt2_2024_feb_jateng+$vol_pt2_2024_mar_jateng+$vol_pt2_2024_apr_jateng+$vol_pt2_2024_mei_jateng+$vol_pt2_2024_jun_jateng+$vol_pt2_2024_jul_jateng+$vol_pt2_2024_agt_jateng+$vol_pt2_2024_sept_jateng;
	
	$tot_capex_vol_pt2_jateng=$tot_nilai_pt2_jateng / $tot_vol_pt2_jateng;
	
	$po_pt2_2022_jateng=0;
	$gr_pt2_2022_jateng=0;
	$po_pt2_2023_jateng=0;
	$gr_pt2_2023_jateng=0;
	$po_pt2_2024_jan_mei_jateng=4166290619;
	$gr_pt2_2024_jan_mei_jateng=4166290619;
	$po_pt2_2024_jateng=$po_pt2_2024_jan_mei_jateng + $line_pt2['po_pt2_2024_jateng'];
	$gr_pt2_2024_jateng=$gr_pt2_2024_jan_mei_jateng + $line_pt2['gr_pt2_2024_jateng'];
	
	$tot_po_pt2_jateng=$po_pt2_2022_jateng+$po_pt2_2023_jateng+$po_pt2_2024_jateng;
	$tot_gr_pt2_jateng=$gr_pt2_2022_jateng+$gr_pt2_2023_jateng+$gr_pt2_2024_jateng;
	
	$persen_tot_po_gr_pt2_jateng=($tot_gr_pt2_jateng / $tot_po_pt2_jateng) *100;
	$persen_tot_po_nilai_pt2_jateng=($tot_po_pt2_jateng / $tot_nilai_pt2_jateng) *100;
	
	$sisa_target_totpo_pt2_jateng=$target_pt2_jateng - $tot_po_pt2_jateng;
	$sisa_vol_pt2_jateng=$sisa_target_totpo_pt2_jateng / $tot_capex_vol_pt2_jateng;
	
	$nilai_ogp_pt2_jateng=$line_pt2['nilai_ogp_pt2_jateng'];
	$vol_ogp_pt2_jateng=$line_pt2['vol_ogp_pt2_jateng'];
	$capex_vol_ogp_pt2_jateng=$nilai_ogp_pt2_jateng / $vol_ogp_pt2_jateng;
	
	$nilai_outlook_pt2_jateng=6788134735;
	$vol_outlook_pt2_jateng=$nilai_outlook_pt2_jateng / $tot_capex_vol_pt2_jateng;
	$capex_vol_outlook_pt2_jateng=$nilai_outlook_pt2_jateng / $vol_outlook_pt2_jateng;
	
	$nilai_so_pt2_jateng=$line_pt2['nilai_so_pt2_jateng'];
	$vol_so_pt2_jateng=$line_pt2['vol_so_pt2_jateng'];
	$capex_vol_so_pt2_jateng=$nilai_so_pt2_jateng / $vol_so_pt2_jateng;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt2_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt2_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt2_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt2_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt2_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt2_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt2_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt2_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt2_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_pt2_jateng,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_pt2_jateng,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_pt2_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_pt2_jateng,0,',','.');?></b></td>
<?php } ?>
</tr>
<?php 
$sql_pt3='select (select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-5321-50-01-I\') target_jatimb,
(select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-4321-50-01-I\') target_jateng,
sum(nilai_pt3_2024_jun_jatimb) nilai_pt3_2024_jun_jatimb,sum(vol_pt3_2024_jun_jatimb) * 8 vol_pt3_2024_jun_jatimb,
sum(nilai_pt3_2024_jul_jatimb) nilai_pt3_2024_jul_jatimb,sum(vol_pt3_2024_jul_jatimb) * 8 vol_pt3_2024_jul_jatimb,
sum(nilai_pt3_2024_agt_jatimb) nilai_pt3_2024_agt_jatimb,sum(vol_pt3_2024_agt_jatimb) * 8 vol_pt3_2024_agt_jatimb,
sum(nilai_pt3_2024_sept_jatimb) nilai_pt3_2024_sept_jatimb,sum(vol_pt3_2024_sept_jatimb) * 8 vol_pt3_2024_sept_jatimb,
sum(po_pt3_2024_jatimb) po_pt3_2024_jatimb,sum(gr_pt3_2024_jatimb) gr_pt3_2024_jatimb,
sum(nilai_ogp_pt3_jatimb) nilai_ogp_pt3_jatimb,sum(vol_ogp_pt3_jatimb) * 8 vol_ogp_pt3_jatimb,
sum(nilai_so_pt3_jatimb) nilai_so_pt3_jatimb,sum(vol_so_pt3_jatimb) * 8 vol_so_pt3_jatimb,
sum(nilai_pt3_2024_jun_non_jatimb) nilai_pt3_2024_jun_non_jatimb,sum(vol_pt3_2024_jun_non_jatimb) * 8 vol_pt3_2024_jun_non_jatimb,
sum(nilai_pt3_2024_jul_non_jatimb) nilai_pt3_2024_jul_non_jatimb,sum(vol_pt3_2024_jul_non_jatimb) * 8 vol_pt3_2024_jul_non_jatimb,
sum(nilai_pt3_2024_agt_non_jatimb) nilai_pt3_2024_agt_non_jatimb,sum(vol_pt3_2024_agt_non_jatimb) * 8 vol_pt3_2024_agt_non_jatimb,
sum(nilai_pt3_2024_sept_non_jatimb) nilai_pt3_2024_sept_non_jatimb,sum(vol_pt3_2024_sept_non_jatimb) * 8 vol_pt3_2024_sept_non_jatimb,
sum(po_pt3_2024_non_jatimb) po_pt3_2024_non_jatimb,sum(gr_pt3_2024_non_jatimb) gr_pt3_2024_non_jatimb,
sum(nilai_ogp_pt3_non_jatimb) nilai_ogp_pt3_non_jatimb,sum(vol_ogp_pt3_non_jatimb) * 8 vol_ogp_pt3_non_jatimb,
sum(nilai_so_pt3_non_jatimb) nilai_so_pt3_non_jatimb,sum(vol_so_pt3_non_jatimb) * 8 vol_so_pt3_non_jatimb,
sum(nilai_pt3_2024_jun_jateng) nilai_pt3_2024_jun_jateng,sum(vol_pt3_2024_jun_jateng) * 8 vol_pt3_2024_jun_jateng,
sum(nilai_pt3_2024_jul_jateng) nilai_pt3_2024_jul_jateng,sum(vol_pt3_2024_jul_jateng) * 8 vol_pt3_2024_jul_jateng,
sum(nilai_pt3_2024_agt_jateng) nilai_pt3_2024_agt_jateng,sum(vol_pt3_2024_agt_jateng) * 8 vol_pt3_2024_agt_jateng,
sum(nilai_pt3_2024_sept_jateng) nilai_pt3_2024_sept_jateng,sum(vol_pt3_2024_sept_jateng) * 8 vol_pt3_2024_sept_jateng,
sum(po_pt3_2024_jateng) po_pt3_2024_jateng,sum(gr_pt3_2024_jateng) gr_pt3_2024_jateng,
sum(nilai_ogp_pt3_jateng) nilai_ogp_pt3_jateng,sum(vol_ogp_pt3_jateng) * 8 vol_ogp_pt3_jateng,
sum(nilai_so_pt3_jateng) nilai_so_pt3_jateng,sum(vol_so_pt3_jateng) * 8 vol_so_pt3_jateng
from
(select "PROGRAM",
concat(\'0\')::numeric nilai_pt3_2024_jun_jatimb,
concat(\'0\')::numeric nilai_pt3_2024_jul_jatimb,
concat(\'0\')::numeric nilai_pt3_2024_agt_jatimb,
concat(\'0\')::numeric nilai_pt3_2024_sept_jatimb,
concat(\'0\')::numeric vol_pt3_2024_jun_jatimb,
concat(\'0\')::numeric vol_pt3_2024_jul_jatimb,
concat(\'0\')::numeric vol_pt3_2024_agt_jatimb,
concat(\'0\')::numeric vol_pt3_2024_sept_jatimb,
concat(\'0\')::numeric nilai_pt3_2024_jun_non_jatimb,
concat(\'0\')::numeric nilai_pt3_2024_jul_non_jatimb,
concat(\'0\')::numeric nilai_pt3_2024_agt_non_jatimb,
concat(\'0\')::numeric nilai_pt3_2024_sept_non_jatimb,
concat(\'0\')::numeric vol_pt3_2024_jun_non_jatimb,
concat(\'0\')::numeric vol_pt3_2024_jul_non_jatimb,
concat(\'0\')::numeric vol_pt3_2024_agt_non_jatimb,
concat(\'0\')::numeric vol_pt3_2024_sept_non_jatimb,
concat(\'0\')::bigint po_pt3_2024_jatimb,concat(\'0\')::bigint gr_pt3_2024_jatimb,
concat(\'0\')::bigint po_pt3_2024_non_jatimb,concat(\'0\')::bigint gr_pt3_2024_non_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_pt3_jatimb,
sum(case when "KET_MITRA" !=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_pt3_non_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_pt3_jatimb,
sum(case when "KET_MITRA" !=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_pt3_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_pt3_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_pt3_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_pt3_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_pt3_non_jatimb,
concat(\'0\')::numeric nilai_pt3_2024_jun_jateng,
concat(\'0\')::numeric nilai_pt3_2024_jul_jateng,
concat(\'0\')::numeric nilai_pt3_2024_agt_jateng,
concat(\'0\')::numeric nilai_pt3_2024_sept_jateng,
concat(\'0\')::numeric vol_pt3_2024_jun_jateng,
concat(\'0\')::numeric vol_pt3_2024_jul_jateng,
concat(\'0\')::numeric vol_pt3_2024_agt_jateng,
concat(\'0\')::numeric vol_pt3_2024_sept_jateng,
concat(\'0\')::bigint po_pt3_2024_jateng,concat(\'0\')::bigint gr_pt3_2024_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_pt3_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\' 
then 1 else 0 end) vol_ogp_pt3_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_pt3_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_pt3_jateng
FROM develop."RPB_REKON"
where "PROGRAM" in (\'PT3\') and "BUDGET_SOURCE" !=\'DID\' 
and "BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and "STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and "STATUS_SO" is not null
group by "PROGRAM"
union all
select a."PROGRAM",
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_pt3_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_pt3_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_pt3_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_pt3_2024_sept_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_pt3_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_pt3_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_pt3_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_pt3_2024_sept_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5321-50-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_pt3_2024_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5321-50-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_pt3_2024_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_pt3_2024_jun_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_pt3_2024_jul_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_pt3_2024_agt_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_pt3_2024_sept_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_pt3_2024_jun_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_pt3_2024_jul_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_pt3_2024_agt_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_pt3_2024_sept_non_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA" !=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5321-50-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_pt3_2024_non_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA" !=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5321-50-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_pt3_2024_non_jatimb,
concat(\'0\')::numeric nilai_ogp_pt3_jatimb,concat(\'0\')::numeric vol_ogp_pt3_jatimb,
concat(\'0\')::numeric nilai_ogp_pt3_non_jatimb,concat(\'0\')::numeric vol_ogp_pt3_non_jatimb,
concat(\'0\')::numeric nilai_so_pt3_jatimb,concat(\'0\')::numeric vol_so_pt3_jatimb,
concat(\'0\')::numeric nilai_so_pt3_non_jatimb,concat(\'0\')::numeric vol_so_pt3_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_pt3_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_pt3_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_pt3_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_pt3_2024_sept_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_pt3_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_pt3_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_pt3_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_pt3_2024_sept_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4321-50-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_pt3_2024_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4321-50-01-I\'  
then b."LOCAL_AMOUNT_GR" else 0 end) gr_pt3_2024_jateng,
concat(\'0\')::numeric nilai_ogp_pt3_jateng,concat(\'0\')::numeric vol_ogp_pt3_jateng,
concat(\'0\')::numeric nilai_so_pt3_jateng,concat(\'0\')::numeric vol_so_pt3_jateng
FROM develop."RPB_REKON" a, develop."SAP" b
where SUBSTRING(a."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and a."PROGRAM" in (\'PT3\')
and b."TGL_SAP"=current_date and a."BUDGET_SOURCE" !=\'DID\'
and a."BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and a."STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and a."STATUS_SO" is not null
group by a."PROGRAM") t
group by target_jatimb,target_jateng';
$get_pt3=pg_query($sql_pt3); 
?>
<tr style="background-color: #DFD;">
	<td><b>PT3</b></td>
	<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
</tr>
<tr>
<?php
while($line_pt3=pg_fetch_array($get_pt3)){
	$target_pt3=$line_pt3['target_jatimb'];
?>
	<td style="color: blue"><b>Jatim Balnus TA</b></td>
	<td rowspan=3 style="text-align:right"><b><?php echo number_format($target_pt3,0,',','.');?></b></td>
	<td rowspan=3 style="text-align:center"><b>Port</b></td>
	<?php 
	$nilai_pt3_2022_jatimb=18238254;
	$vol_pt3_2022_jatimb=8;
	$capex_vol_pt3_2022_jatimb=$nilai_pt3_2022_jatimb / $vol_pt3_2022_jatimb;
	$po_pt3_2022_jatimb=18238254;
	$gr_pt3_2022_jatimb=18238254;
	$nilai_pt3_2023_jatimb=18028927777;
	$vol_pt3_2023_jatimb=10488;
	$capex_vol_pt3_2023_jatimb=$nilai_pt3_2023_jatimb / $vol_pt3_2023_jatimb;
	$po_pt3_2023_jatimb=18819002347;
	$gr_pt3_2023_jatimb=18819002347;
	$nilai_pt3_2024_jan_jatimb=10213355335;
	$vol_pt3_2024_jan_jatimb=5968;
	$capex_vol_pt3_2024_jan_jatimb=$nilai_pt3_2024_jan_jatimb / $vol_pt3_2024_jan_jatimb;
	$nilai_pt3_2024_feb_jatimb=1463304629;
	$vol_pt3_2024_feb_jatimb=840;
	$capex_vol_pt3_2024_feb_jatimb=$nilai_pt3_2024_feb_jatimb / $vol_pt3_2024_feb_jatimb;
	$nilai_pt3_2024_mar_jatimb=1625999796;
	$vol_pt3_2024_mar_jatimb=1080;
	$capex_vol_pt3_2024_mar_jatimb=$nilai_pt3_2024_mar_jatimb / $vol_pt3_2024_mar_jatimb;
	$nilai_pt3_2024_apr_jatimb=4663783862;
	$vol_pt3_2024_apr_jatimb=2320;
	$capex_vol_pt3_2024_apr_jatimb=$nilai_pt3_2024_apr_jatimb / $vol_pt3_2024_apr_jatimb;
	$nilai_pt3_2024_mei_jatimb=7621462863;
	$vol_pt3_2024_mei_jatimb=2392;
	$capex_vol_pt3_2024_mei_jatimb=$nilai_pt3_2024_mei_jatimb / $vol_pt3_2024_mei_jatimb;
	$nilai_pt3_2024_jun_jatimb=$line_pt3['nilai_pt3_2024_jun_jatimb'];
	$vol_pt3_2024_jun_jatimb=$line_pt3['vol_pt3_2024_jun_jatimb'];
	$capex_vol_pt3_2024_jun_jatimb=$nilai_pt3_2024_jun_jatimb / $vol_pt3_2024_jun_jatimb;
	$nilai_pt3_2024_jul_jatimb=$line_pt3['nilai_pt3_2024_jul_jatimb'];
	$vol_pt3_2024_jul_jatimb=$line_pt3['vol_pt3_2024_jul_jatimb'];
	$capex_vol_pt3_2024_jul_jatimb=$nilai_pt3_2024_jul_jatimb / $vol_pt3_2024_jul_jatimb;
	$nilai_pt3_2024_agt_jatimb=$line_pt3['nilai_pt3_2024_agt_jatimb'];
	$vol_pt3_2024_agt_jatimb=$line_pt3['vol_pt3_2024_agt_jatimb'];
	$capex_vol_pt3_2024_agt_jatimb=$nilai_pt3_2024_agt_jatimb / $vol_pt3_2024_agt_jatimb;
	$nilai_pt3_2024_sept_jatimb=$line_pt3['nilai_pt3_2024_sept_jatimb'];
	$vol_pt3_2024_sept_jatimb=$line_pt3['vol_pt3_2024_sept_jatimb'];
	$capex_vol_pt3_2024_sept_jatimb=$nilai_pt3_2024_sept_jatimb / $vol_pt3_2024_sept_jatimb;
	$po_pt3_2024_jan_mei_jatimb=24068932515;
	$gr_pt3_2024_jan_mei_jatimb=22085317043;
	$po_pt3_2024_jatimb= $po_pt3_2024_jan_mei_jatimb + $line_pt3['po_pt3_2024_jatimb'];
	$gr_pt3_2024_jatimb= $gr_pt3_2024_jan_mei_jatimb + $line_pt3['gr_pt3_2024_jatimb'];
	
	$nilai_pt3_2022_non_jatimb=104738263;
	$vol_pt3_2022_non_jatimb=8;
	$capex_vol_pt3_2022_non_jatimb=$nilai_pt3_2022_non_jatimb / $vol_pt3_2022_non_jatimb;
	$po_pt3_2022_non_jatimb=0;
	$gr_pt3_2022_non_jatimb=0;
	$nilai_pt3_2023_non_jatimb=16182313;
	$vol_pt3_2023_non_jatimb=16;
	$capex_vol_pt3_2023_non_jatimb=$nilai_pt3_2023_non_jatimb / $vol_pt3_2023_non_jatimb;
	$po_pt3_2023_non_jatimb=0;
	$gr_pt3_2023_non_jatimb=0;
	$nilai_pt3_2024_jan_non_jatimb=0;
	$vol_pt3_2024_jan_non_jatimb=0;
	$capex_vol_pt3_2024_jan_non_jatimb=$nilai_pt3_2024_jan_non_jatimb / $vol_pt3_2024_jan_non_jatimb;
	if(is_nan($capex_vol_pt3_2024_jan_non_jatimb)){
		$capex_vol_pt3_2024_jan_non_jatimb=0;
	}else{
		$capex_vol_pt3_2024_jan_non_jatimb=$capex_vol_pt3_2024_jan_non_jatimb;
	}
	$nilai_pt3_2024_feb_non_jatimb=0;
	$vol_pt3_2024_feb_non_jatimb=0;
	$capex_vol_pt3_2024_feb_non_jatimb=$nilai_pt3_2024_feb_non_jatimb / $vol_pt3_2024_feb_non_jatimb;
	if(is_nan($capex_vol_pt3_2024_feb_non_jatimb)){
		$capex_vol_pt3_2024_feb_non_jatimb=0;
	}else{
		$capex_vol_pt3_2024_feb_non_jatimb=$capex_vol_pt3_2024_feb_non_jatimb;
	}
	$nilai_pt3_2024_mar_non_jatimb=0;
	$vol_pt3_2024_mar_non_jatimb=0;
	$capex_vol_pt3_2024_mar_non_jatimb=$nilai_pt3_2024_mar_non_jatimb / $vol_pt3_2024_mar_non_jatimb;
	if(is_nan($capex_vol_pt3_2024_mar_non_jatimb)){
		$capex_vol_pt3_2024_mar_non_jatimb=0;
	}else{
		$capex_vol_pt3_2024_mar_non_jatimb=$capex_vol_pt3_2024_mar_non_jatimb;
	}
	$nilai_pt3_2024_apr_non_jatimb=0;
	$vol_pt3_2024_apr_non_jatimb=0;
	$capex_vol_pt3_2024_apr_non_jatimb=$nilai_pt3_2024_apr_non_jatimb / $vol_pt3_2024_apr_non_jatimb;
	if(is_nan($capex_vol_pt3_2024_apr_non_jatimb)){
		$capex_vol_pt3_2024_apr_non_jatimb=0;
	}else{
		$capex_vol_pt3_2024_apr_non_jatimb=$capex_vol_pt3_2024_apr_non_jatimb;
	}
	$nilai_pt3_2024_mei_non_jatimb=0;
	$vol_pt3_2024_mei_non_jatimb=0;
	$capex_vol_pt3_2024_mei_non_jatimb=$nilai_pt3_2024_mei_non_jatimb / $vol_pt3_2024_mei_non_jatimb;
	if(is_nan($capex_vol_pt3_2024_mei_non_jatimb)){
		$capex_vol_pt3_2024_mei_non_jatimb=0;
	}else{
		$capex_vol_pt3_2024_mei_non_jatimb=$capex_vol_pt3_2024_mei_non_jatimb;
	}
	$nilai_pt3_2024_jun_non_jatimb=$line_pt3['nilai_pt3_2024_jun_non_jatimb'];
	$vol_pt3_2024_jun_non_jatimb=$line_pt3['vol_pt3_2024_jun_non_jatimb'];
	$capex_vol_pt3_2024_jun_non_jatimb=$nilai_pt3_2024_jun_non_jatimb / $vol_pt3_2024_jun_non_jatimb;
	if(is_nan($capex_vol_pt3_2024_jun_non_jatimb)){
		$capex_vol_pt3_2024_jun_non_jatimb=0;
	}else{
		$capex_vol_pt3_2024_jun_non_jatimb=$capex_vol_pt3_2024_jun_non_jatimb;
	}
	$nilai_pt3_2024_jul_non_jatimb=$line_pt3['nilai_pt3_2024_jul_non_jatimb'];
	$vol_pt3_2024_jul_non_jatimb=$line_pt3['vol_pt3_2024_jul_non_jatimb'];
	$capex_vol_pt3_2024_jul_non_jatimb=$nilai_pt3_2024_jul_non_jatimb / $vol_pt3_2024_jul_non_jatimb;
	if(is_nan($capex_vol_pt3_2024_jul_non_jatimb)){
		$capex_vol_pt3_2024_jul_non_jatimb=0;
	}else{
		$capex_vol_pt3_2024_jul_non_jatimb=$capex_vol_pt3_2024_jul_non_jatimb;
	}
	$nilai_pt3_2024_agt_non_jatimb=$line_pt3['nilai_pt3_2024_agt_non_jatimb'];
	$vol_pt3_2024_agt_non_jatimb=$line_pt3['vol_pt3_2024_agt_non_jatimb'];
	$capex_vol_pt3_2024_agt_non_jatimb=$nilai_pt3_2024_agt_non_jatimb / $vol_pt3_2024_agt_non_jatimb;
	if(is_nan($capex_vol_pt3_2024_agt_non_jatimb)){
		$capex_vol_pt3_2024_agt_non_jatimb=0;
	}else{
		$capex_vol_pt3_2024_agt_non_jatimb=$capex_vol_pt3_2024_agt_non_jatimb;
	}
	$nilai_pt3_2024_sept_non_jatimb=$line_pt3['nilai_pt3_2024_sept_non_jatimb'];
	$vol_pt3_2024_sept_non_jatimb=$line_pt3['vol_pt3_2024_sept_non_jatimb'];
	$capex_vol_pt3_2024_sept_non_jatimb=$nilai_pt3_2024_sept_non_jatimb / $vol_pt3_2024_sept_non_jatimb;
	if(is_nan($capex_vol_pt3_2024_sept_non_jatimb)){
		$capex_vol_pt3_2024_sept_non_jatimb=0;
	}else{
		$capex_vol_pt3_2024_sept_non_jatimb=$capex_vol_pt3_2024_sept_non_jatimb;
	}
	$po_pt3_2024_non_jatimb=$line_pt3['po_pt3_2024_non_jatimb'];
	$gr_pt3_2024_non_jatimb=$line_pt3['gr_pt3_2024_non_jatimb'];
	
	$nilai_pt3_2022_tot_jatimb=$nilai_pt3_2022_jatimb + $nilai_pt3_2022_non_jatimb;
	$vol_pt3_2022_tot_jatimb=$vol_pt3_2022_jatimb + $vol_pt3_2022_non_jatimb;
	$capex_vol_pt3_2022_tot_jatimb=$capex_vol_pt3_2022_jatimb + $capex_vol_pt3_2022_non_jatimb;
	$po_pt3_2022_tot_jatimb=$po_pt3_2022_jatimb + $po_pt3_2022_non_jatimb;
	$gr_pt3_2022_tot_jatimb=$gr_pt3_2022_jatimb + $gr_pt3_2022_non_jatimb;
	$nilai_pt3_2023_tot_jatimb=$nilai_pt3_2023_jatimb + $nilai_pt3_2023_non_jatimb;
	$vol_pt3_2023_tot_jatimb=$vol_pt3_2023_jatimb + $vol_pt3_2023_non_jatimb;
	$capex_vol_pt3_2023_tot_jatimb=$nilai_pt3_2023_tot_jatimb / $vol_pt3_2023_tot_jatimb;
	$po_pt3_2023_tot_jatimb=$po_pt3_2023_jatimb + $po_pt3_2023_non_jatimb;
	$gr_pt3_2023_tot_jatimb=$gr_pt3_2023_jatimb + $gr_pt3_2023_non_jatimb;
	$nilai_pt3_2024_jan_tot_jatimb=$nilai_pt3_2024_jan_jatimb + $nilai_pt3_2024_jan_non_jatimb;
	$vol_pt3_2024_jan_tot_jatimb=$vol_pt3_2024_jan_jatimb + $vol_pt3_2024_jan_non_jatimb;
	$capex_vol_pt3_2024_jan_tot_jatimb=$nilai_pt3_2024_jan_tot_jatimb / $vol_pt3_2024_jan_tot_jatimb;
	$nilai_pt3_2024_feb_tot_jatimb=$nilai_pt3_2024_feb_jatimb + $nilai_pt3_2024_feb_non_jatimb;
	$vol_pt3_2024_feb_tot_jatimb=$vol_pt3_2024_feb_jatimb + $vol_pt3_2024_feb_non_jatimb;
	$capex_vol_pt3_2024_feb_tot_jatimb=$nilai_pt3_2024_feb_tot_jatimb / $vol_pt3_2024_feb_tot_jatimb;
	$nilai_pt3_2024_mar_tot_jatimb=$nilai_pt3_2024_mar_jatimb + $nilai_pt3_2024_mar_non_jatimb;
	$vol_pt3_2024_mar_tot_jatimb=$vol_pt3_2024_mar_jatimb + $vol_pt3_2024_mar_non_jatimb;
	$capex_vol_pt3_2024_mar_tot_jatimb=$nilai_pt3_2024_mar_tot_jatimb / $vol_pt3_2024_mar_tot_jatimb;
	$nilai_pt3_2024_apr_tot_jatimb=$nilai_pt3_2024_apr_jatimb + $nilai_pt3_2024_apr_non_jatimb;
	$vol_pt3_2024_apr_tot_jatimb=$vol_pt3_2024_apr_jatimb + $vol_pt3_2024_apr_non_jatimb;
	$capex_vol_pt3_2024_apr_tot_jatimb=$nilai_pt3_2024_apr_tot_jatimb / $vol_pt3_2024_apr_tot_jatimb;
	$nilai_pt3_2024_mei_tot_jatimb=$nilai_pt3_2024_mei_jatimb + $nilai_pt3_2024_mei_non_jatimb;
	$vol_pt3_2024_mei_tot_jatimb=$vol_pt3_2024_mei_jatimb + $vol_pt3_2024_mei_non_jatimb;
	$capex_vol_pt3_2024_mei_tot_jatimb=$nilai_pt3_2024_mei_tot_jatimb / $vol_pt3_2024_mei_tot_jatimb;
	$nilai_pt3_2024_jun_tot_jatimb=$nilai_pt3_2024_jun_jatimb + $nilai_pt3_2024_jun_non_jatimb;
	$vol_pt3_2024_jun_tot_jatimb=$vol_pt3_2024_jun_jatimb + $vol_pt3_2024_jun_non_jatimb;
	$capex_vol_pt3_2024_jun_tot_jatimb=$nilai_pt3_2024_jun_tot_jatimb / $vol_pt3_2024_jun_tot_jatimb;
	$nilai_pt3_2024_jul_tot_jatimb=$nilai_pt3_2024_jul_jatimb + $nilai_pt3_2024_jul_non_jatimb;
	$vol_pt3_2024_jul_tot_jatimb=$vol_pt3_2024_jul_jatimb + $vol_pt3_2024_jul_non_jatimb;
	$capex_vol_pt3_2024_jul_tot_jatimb=$nilai_pt3_2024_jul_tot_jatimb / $vol_pt3_2024_jul_tot_jatimb;
	$nilai_pt3_2024_agt_tot_jatimb=$nilai_pt3_2024_agt_jatimb + $nilai_pt3_2024_agt_non_jatimb;
	$vol_pt3_2024_agt_tot_jatimb=$vol_pt3_2024_agt_jatimb + $vol_pt3_2024_agt_non_jatimb;
	$capex_vol_pt3_2024_agt_tot_jatimb=$nilai_pt3_2024_agt_tot_jatimb / $vol_pt3_2024_agt_tot_jatimb;
	$nilai_pt3_2024_sept_tot_jatimb=$nilai_pt3_2024_sept_jatimb + $nilai_pt3_2024_sept_non_jatimb;
	$vol_pt3_2024_sept_tot_jatimb=$vol_pt3_2024_sept_jatimb + $vol_pt3_2024_sept_non_jatimb;
	$capex_vol_pt3_2024_sept_tot_jatimb=$nilai_pt3_2024_sept_tot_jatimb / $vol_pt3_2024_sept_tot_jatimb;
	$po_pt3_2024_tot_jatimb=$po_pt3_2024_jatimb + $po_pt3_2024_non_jatimb;
	$gr_pt3_2024_tot_jatimb=$gr_pt3_2024_jatimb + $gr_pt3_2024_non_jatimb;
	$tot_nilai_pt3_jatimb=$nilai_pt3_2022_jatimb+$nilai_pt3_2023_jatimb+$nilai_pt3_2024_jan_jatimb+$nilai_pt3_2024_feb_jatimb+$nilai_pt3_2024_mar_jatimb+$nilai_pt3_2024_apr_jatimb+$nilai_pt3_2024_mei_jatimb+$nilai_pt3_2024_jun_jatimb+$nilai_pt3_2024_jul_jatimb+$nilai_pt3_2024_agt_jatimb+$nilai_pt3_2024_sept_jatimb;
	$tot_vol_pt3_jatimb=$vol_pt3_2022_jatimb+$vol_pt3_2023_jatimb+$vol_pt3_2024_jan_jatimb+$vol_pt3_2024_feb_jatimb+$vol_pt3_2024_mar_jatimb+$vol_pt3_2024_apr_jatimb+$vol_pt3_2024_mei_jatimb+$vol_pt3_2024_jun_jatimb+$vol_pt3_2024_jul_jatimb+$vol_pt3_2024_agt_jatimb+$vol_pt3_2024_sept_jatimb;
	
	$tot_capex_vol_pt3_jatimb=$tot_nilai_pt3_jatimb / $tot_vol_pt3_jatimb;
	$tot_nilai_pt3_non_jatimb=$nilai_pt3_2022_non_jatimb+$nilai_pt3_2023_non_jatimb+$nilai_pt3_2024_jan_non_jatimb+$nilai_pt3_2024_feb_non_jatimb+$nilai_pt3_2024_mar_non_jatimb+$nilai_pt3_2024_apr_non_jatimb+$nilai_pt3_2024_mei_non_jatimb+$nilai_pt3_2024_jun_non_jatimb+$nilai_pt3_2024_jul_non_jatimb+$nilai_pt3_2024_agt_non+$nilai_pt3_2024_sept_non;
	$tot_vol_pt3_non_jatimb=$vol_pt3_2022_non_jatimb+$vol_pt3_2023_non_jatimb+$vol_pt3_2024_jan_non_jatimb+$vol_pt3_2024_feb_non_jatimb+$vol_pt3_2024_mar_non_jatimb+$vol_pt3_2024_apr_non_jatimb+$vol_pt3_2024_mei_non_jatimb+$vol_pt3_2024_jun_non_jatimb+$vol_pt3_2024_jul_non_jatimb
		+$vol_pt3_2024_agt_non+$vol_pt3_2024_sept_non;
	
	$tot_capex_vol_pt3_non_jatimb=$tot_nilai_pt3_non_jatimb / $tot_vol_pt3_non_jatimb;
	
	
	$tot_po_pt3_jatimb=$po_pt3_2022_jatimb+$po_pt3_2023_jatimb+$po_pt3_2024_jatimb;
	$tot_gr_pt3_jatimb=$gr_pt3_2022_jatimb+$gr_pt3_2023_jatimb+$gr_pt3_2024_jatimb;
	
	$tot_nilai_pt3_tot_jatimb=$tot_nilai_pt3_jatimb+$tot_nilai_pt3_non_jatimb;
	$tot_vol_pt3_tot_jatimb=$tot_vol_pt3_jatimb+$tot_vol_pt3_non_jatimb;
	$tot_capex_vol_pt3_tot_jatimb=$tot_capex_vol_pt3_jatimb+$tot_capex_vol_pt3_non_jatimb;
	$tot_po_pt3_tot_jatimb=$tot_po_pt3_jatimb+$tot_po_pt3_non_jatimb;
	$tot_gr_pt3_tot_jatimb=$tot_gr_pt3_jatimb+$tot_gr_pt3_non_jatimb;
	
	$persen_tot_po_gr_pt3_jatimb=($tot_gr_pt3_jatimb / $tot_po_pt3_jatimb) *100;
	$persen_tot_po_nilai_pt3_jatimb=($tot_po_pt3_jatimb / $tot_nilai_pt3_jatimb) *100;
	$persen_tot_po_gr_pt3_non_jatimb=($tot_gr_pt3_non_jatimb / $tot_po_pt3_non_jatimb) *100;
	if(is_nan($persen_tot_po_gr_pt3_non_jatimb)){
		$persen_tot_po_gr_pt3_non_jatimb=0;
	}else{
		$persen_tot_po_gr_pt3_non_jatimb=$persen_tot_po_gr_pt3_non_jatimb;
	}
	$persen_tot_po_nilai_pt3_non_jatimb=($tot_po_pt3_non_jatimb / $tot_nilai_pt3_non_jatimb) *100;
	
	$sisa_target_totpo_pt3_jatimb=$target_pt3_jatimb - $tot_po_pt3_jatimb;
	$sisa_vol_pt3_jatimb=$sisa_target_totpo_pt3_jatimb / $tot_capex_vol_pt3_jatimb;
	$sisa_target_totpo_pt3_non_jatimb=$target_pt3_jatimb - $tot_po_pt3_non_jatimb;
	$sisa_vol_pt3_non_jatimb=$sisa_target_totpo_pt3_non_jatimb / $tot_capex_vol_pt3_non_jatimb;
	
	$tot_persen_tot_po_gr_pt3_jatimb=$persen_tot_po_gr_pt3_jatimb + $persen_tot_po_gr_pt3_non_jatimb;
	$tot_persen_tot_po_nilai_pt3_jatimb=$persen_tot_po_nilai_pt3_jatimb + $persen_tot_po_nilai_pt3_non_jatimb;
	$tot_sisa_target_totpo_pt3_jatimb=$sisa_target_totpo_pt3_jatimb + $sisa_target_totpo_pt3_non_jatimb;
	$tot_sisa_vol_pt3_jatimb=$sisa_vol_pt3_jatimb + $sisa_vol_pt3_non_jatimb;
	
	$nilai_ogp_pt3_jatimb=$line_pt3['nilai_ogp_pt3_jatimb'];
	$vol_ogp_pt3_jatimb=$line_pt3['vol_ogp_pt3_jatimb'];
	$capex_vol_ogp_pt3_jatimb=$nilai_ogp_pt3_jatimb / $vol_ogp_pt3_jatimb;
	
	$nilai_outlook_pt3_jatimb=73652410152;
	$vol_outlook_pt3_jatimb=$nilai_outlook_pt3_jatimb / $tot_capex_vol_pt3_jatimb;
	$capex_vol_outlook_pt3_jatimb=$nilai_outlook_pt3_jatimb / $vol_outlook_pt3_jatimb;
	
	$nilai_so_pt3_jatimb=$line_pt3['nilai_so_pt3_jatimb'];
	$vol_so_pt3_jatimb=$line_pt3['vol_so_pt3_jatimb'];
	$capex_vol_so_pt3_jatimb=$nilai_so_pt3_jatimb / $vol_so_pt3_jatimb;
	
	$nilai_ogp_pt3_non_jatimb=$line_pt3['nilai_ogp_pt3_non_jatimb'];
	$vol_ogp_pt3_non_jatimb=$line_pt3['vol_ogp_pt3_non_jatimb'];
	$capex_vol_ogp_pt3_non_jatimb=$nilai_ogp_pt3_non_jatimb / $vol_ogp_pt3_non_jatimb;
	if(is_nan($capex_vol_ogp_pt3_non_jatimb)){
		$capex_vol_ogp_pt3_non_jatimb=0;
	}else{
		$capex_vol_ogp_pt3_non_jatimb=$capex_vol_ogp_pt3_non_jatimb;
	}
	
	$nilai_outlook_pt3_non_jatimb=0;
	$vol_outlook_pt3_non_jatimb=$nilai_outlook_pt3_non_jatimb / $tot_capex_vol_pt3_non_jatimb;
	$capex_vol_outlook_pt3_non_jatimb=$nilai_outlook_pt3_non_jatimb / $vol_outlook_pt3_non_jatimb;
	if(is_nan($capex_vol_outlook_pt3_non_jatimb)){
		$capex_vol_outlook_pt3_non_jatimb=0;
	}else{
		$capex_vol_outlook_pt3_non_jatimb=$capex_vol_outlook_pt3_non_jatimb;
	}
	
	$nilai_so_pt3_non_jatimb=$line_pt3['nilai_so_pt3_non_jatimb'];
	$vol_so_pt3_non_jatimb=$line_pt3['vol_so_pt3_non_jatimb'];
	$capex_vol_so_pt3_non_jatimb=$nilai_so_pt3_non_jatimb / $vol_so_pt3_non_jatimb;
	if(is_nan($capex_vol_so_pt3_non_jatimb)){
		$capex_vol_so_pt3_non_jatimb=0;
	}else{
		$capex_vol_so_pt3_non_jatimb=$capex_vol_so_pt3_non_jatimb;
	}
	
	$tot_nilai_ogp_pt3_jatimb=$nilai_ogp_pt3_jatimb + $nilai_ogp_pt3_non_jatimb;
	$tot_vol_ogp_pt3_jatimb=$vol_ogp_pt3_jatimb + $vol_ogp_pt3_non_jatimb;
	$tot_capex_vol_ogp_pt3_jatimb=$tot_nilai_ogp_pt3_jatimb / $tot_vol_ogp_pt3_jatimb;
	
	$tot_nilai_outlook_pt3_jatimb=$nilai_outlook_pt3_jatimb + $nilai_outlook_pt3_non_jatimb;
	$tot_vol_outlook_pt3_jatimb=$vol_outlook_pt3_jatimb + $vol_outlook_pt3_non_jatimb;
	$tot_capex_vol_outlook_pt3_jatimb=$tot_nilai_outlook_pt3_jatimb / $tot_vol_outlook_pt3_jatimb;
	
	$tot_nilai_so_pt3_jatimb=$nilai_so_pt3_jatimb + $nilai_so_pt3_non_jatimb;
	$tot_vol_so_pt3_jatimb=$vol_so_pt3_jatimb + $vol_so_pt3_non_jatimb;
	$tot_capex_vol_so_pt3_jatimb=$tot_nilai_so_pt3_jatimb / $tot_vol_so_pt3_jatimb;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt3_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt3_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt3_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt3_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_jan_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_jan_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_jan_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_feb_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_feb_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_feb_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_mar_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_mar_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_mar_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_apr_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_apr_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_apr_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_mei_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_mei_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_mei_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_jun_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_jun_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_jun_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_jul_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_jul_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_jul_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt3_2024_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt3_2024_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_pt3_jatimb,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_pt3_jatimb,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_pt3_jatimb,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr>
	<td style="color: blue"><b>Jatim Balnus NON TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2022_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2022_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2022_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt3_2022_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt3_2022_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2023_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2023_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2023_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt3_2023_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt3_2023_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_jan_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_jan_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_feb_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_feb_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_feb_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_mar_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_mar_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_apr_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_apr_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_apr_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_mei_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_mei_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_jun_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_jun_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_jun_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_jul_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_jul_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_jul_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_agt_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_agt_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_agt_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_sept_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_sept_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_sept_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt3_2024_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt3_2024_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_pt3_non_jatimb,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_pt3_non_jatimb,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_pt3_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_pt3_non_jatimb,0,',','.');?></b></td>
</tr>
	<td style="color: blue"><b>Jatim Balnus All Mitra</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2022_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2022_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2022_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt3_2022_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt3_2022_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2023_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2023_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2023_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt3_2023_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt3_2023_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_jan_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_jan_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_feb_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_feb_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_feb_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_mar_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_mar_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_mar_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_apr_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_apr_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_mei_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_mei_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_mei_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_jun_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_jun_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_jun_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_jul_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_jul_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_jul_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_agt_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_agt_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_agt_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_sept_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_sept_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_sept_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($po_pt3_2024_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt3_2024_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_pt3_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_pt3_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_pt3_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_pt3_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_gr_pt3_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_persen_tot_po_gr_pt3_jatimb,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_persen_tot_po_nilai_pt3_jatimb,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_sisa_target_totpo_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_sisa_vol_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_ogp_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_ogp_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_ogp_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_outlook_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_outlook_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_outlook_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_so_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_so_pt3_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_so_pt3_jatimb,0,',','.');?></b></td>
</tr>
<tr>
<?php
$get_pt3=pg_query($sql_pt3);
while($line_pt3=pg_fetch_array($get_pt3)){
	$target_pt3_jateng=$line_pt3['target_jateng'];
?>
	<td style="color: blue"><b>Jateng TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b>Port</b></td>
	<?php 
	$nilai_pt3_2022_jateng=0;
	$vol_pt3_2022=0;
	$capex_vol_pt3_2022_jateng=$nilai_pt3_2022_jateng / $vol_pt3_2022_jateng;
	if(is_nan($capex_vol_pt3_2022_jateng)){
		$capex_vol_pt3_2022_jateng=0;
	}else{
		$capex_vol_pt3_2022_jateng=$capex_vol_pt3_jateng_2022;
	}
	$nilai_pt3_2023_jateng=0;
	$vol_pt3_2023_jateng=0;
	$capex_vol_pt3_2023_jateng=0;
	$nilai_pt3_2024_jan_jateng=1195345290;
	$vol_pt3_2024_jan_jateng=656;
	$capex_vol_pt3_2024_jan_jateng=1822173;
	$nilai_pt3_2024_feb_jateng=4194449119;
	$vol_pt3_2024_feb_jateng=2456;
	$capex_vol_pt3_2024_feb_jateng=1707838;
	$nilai_pt3_2024_mar_jateng=2469474910;
	$vol_pt3_2024_mar_jateng=168;
	$capex_vol_pt3_2024_mar_jateng=1469926;
	$nilai_pt3_2024_apr_jateng=3540468786;
	$vol_pt3_2024_apr_jateng=2072;
	$capex_vol_pt3_2024_apr_jateng=1708720;
	$nilai_pt3_2024_mei_jateng=1865217446;
	$vol_pt3_2024_mei_jateng=1472;
	$capex_vol_pt3_2024_mei_jateng=1267131;
	$nilai_pt3_2024_jun_jateng=$line_pt3['nilai_pt3_2024_jun_jateng'];
	$vol_pt3_2024_jun_jateng=$line_pt3['vol_pt3_2024_jun_jateng'];
	$capex_vol_pt3_2024_jun_jateng=$nilai_pt3_2024_jun_jateng / $vol_pt3_2024_jun_jateng;
	$nilai_pt3_2024_jul_jateng=$line_pt3['nilai_pt3_2024_jul_jateng'];
	$vol_pt3_2024_jul_jateng=$line_pt3['vol_pt3_2024_jul_jateng'];
	$capex_vol_pt3_2024_jul_jateng=$nilai_pt3_2024_jul_jateng / $vol_pt3_2024_jul_jateng;
	$nilai_pt3_2024_agt_jateng=$line_pt3['nilai_pt3_2024_agt_jateng'];
	$vol_pt3_2024_agt_jateng=$line_pt3['vol_pt3_2024_agt_jateng'];
	$capex_vol_pt3_2024_agt_jateng=$nilai_pt3_2024_agt_jateng / $vol_pt3_2024_agt_jateng;
	$nilai_pt3_2024_sept_jateng=$line_pt3['nilai_pt3_2024_sept_jateng'];
	$vol_pt3_2024_sept_jateng=$line_pt3['vol_pt3_2024_sept_jateng'];
	$capex_vol_pt3_2024_sept_jateng=$nilai_pt3_2024_sept_jateng / $vol_pt3_2024_sept_jateng;
	$tot_nilai_pt3_jateng=$nilai_pt3_2022_jateng+$nilai_pt3_2023_jateng+$nilai_pt3_2024_jan_jateng+$nilai_pt3_2024_feb_jateng+$nilai_pt3_2024_mar_jateng+$nilai_pt3_2024_apr_jateng+$nilai_pt3_2024_mei_jateng+$nilai_pt3_2024_jun_jateng+$nilai_pt3_2024_jul_jateng+$nilai_pt3_2024_agt_jateng+$nilai_pt3_2024_sept_jateng;
	
	$tot_vol_pt3_jateng=$vol_pt3_2022_jateng+$vol_pt3_2023_jateng+$vol_pt3_2024_jan_jateng+$vol_pt3_2024_feb_jateng+$vol_pt3_2024_mar_jateng+$vol_pt3_2024_apr_jateng+$vol_pt3_2024_mei_jateng+$vol_pt3_2024_jun_jateng+$vol_pt3_2024_jul_jateng+$vol_pt3_2024_agt_jateng+$vol_pt3_2024_sept_jateng;
	
	$tot_capex_vol_pt3_jateng=$tot_nilai_pt3_jateng / $tot_vol_pt3_jateng;
	
	$po_pt3_2022_jateng=0;
	$gr_pt3_2022_jateng=0;
	$po_pt3_2023_jateng=0;
	$gr_pt3_2023_jateng=0;
	$po_pt3_2024_jan_mei_jateng=15026644989;
	$gr_pt3_2024_jan_mei_jateng=13395748392;
	$po_pt3_2024_jateng=$po_pt3_2024_jan_mei_jateng + $line_pt3['po_pt3_2024_jateng'];
	$gr_pt3_2024_jateng=$gr_pt3_2024_jan_mei_jateng + $line_pt3['gr_pt3_2024_jateng'];
	
	$tot_po_pt3_jateng=$po_pt3_2022_jateng+$po_pt3_2023_jateng+$po_pt3_2024_jateng;
	$tot_gr_pt3_jateng=$gr_pt3_2022_jateng+$gr_pt3_2023_jateng+$gr_pt3_2024_jateng;
	
	$persen_tot_po_gr_pt3_jateng=($tot_gr_pt3_jateng / $tot_po_pt3_jateng) *100;
	$persen_tot_po_nilai_pt3_jateng=($tot_po_pt3_jateng / $tot_nilai_pt3_jateng) *100;
	
	$sisa_target_totpo_pt3_jateng=$target_pt3_jateng - $tot_po_pt3_jateng;
	$sisa_vol_pt3_jateng=$sisa_target_totpo_pt3_jateng / $tot_capex_vol_pt3_jateng;
	
	$nilai_ogp_pt3_jateng=$line_pt3['nilai_ogp_pt3_jateng'];
	$vol_ogp_pt3_jateng=$line_pt3['vol_ogp_pt3_jateng'];
	$capex_vol_ogp_pt3_jateng=$nilai_ogp_pt3_jateng / $vol_ogp_pt3_jateng;
	
	$nilai_outlook_pt3_jateng=6788134735;
	$vol_outlook_pt3_jateng=$nilai_outlook_pt3_jateng / $tot_capex_vol_pt3_jateng;
	$capex_vol_outlook_pt3_jateng=$nilai_outlook_pt3_jateng / $vol_outlook_pt3_jateng;
	
	$nilai_so_pt3_jateng=$line_pt3['nilai_so_pt3_jateng'];
	$vol_so_pt3_jateng=$line_pt3['vol_so_pt3_jateng'];
	$capex_vol_so_pt3_jateng=$nilai_so_pt3_jateng / $vol_so_pt3_jateng;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt3_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt3_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt3_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt3_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_pt3_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_pt3_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_pt3_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_pt3_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_pt3_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_pt3_jateng,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_pt3_jateng,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_pt3_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_pt3_jateng,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr style="background-color: aqua;">
	<td><b><center>EBIS</center></b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
</tr>
<?php 
$sql_hem='select (select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-5241-24-01-I\') target_jatimb,
(select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-4241-24-01-I\') target_jateng,
sum(nilai_hem_2024_jun_jatimb) nilai_hem_2024_jun_jatimb,sum(vol_hem_2024_jun_jatimb) vol_hem_2024_jun_jatimb,
sum(nilai_hem_2024_jul_jatimb) nilai_hem_2024_jul_jatimb,sum(vol_hem_2024_jul_jatimb) vol_hem_2024_jul_jatimb,
sum(nilai_hem_2024_agt_jatimb) nilai_hem_2024_agt_jatimb,sum(vol_hem_2024_agt_jatimb) vol_hem_2024_agt_jatimb,
sum(nilai_hem_2024_sept_jatimb) nilai_hem_2024_sept_jatimb,sum(vol_hem_2024_sept_jatimb) vol_hem_2024_sept_jatimb,
sum(po_hem_2024_jatimb) po_hem_2024_jatimb,sum(gr_hem_2024_jatimb) gr_hem_2024_jatimb,
sum(nilai_ogp_hem_jatimb) nilai_ogp_hem_jatimb,sum(vol_ogp_hem_jatimb) vol_ogp_hem_jatimb,
sum(nilai_so_hem_jatimb) nilai_so_hem_jatimb,sum(vol_so_hem_jatimb) vol_so_hem_jatimb,
sum(nilai_hem_2024_jun_non_jatimb) nilai_hem_2024_jun_non_jatimb,sum(vol_hem_2024_jun_non_jatimb) vol_hem_2024_jun_non_jatimb,
sum(nilai_hem_2024_jul_non_jatimb) nilai_hem_2024_jul_non_jatimb,sum(vol_hem_2024_jul_non_jatimb) vol_hem_2024_jul_non_jatimb,
sum(nilai_hem_2024_agt_non_jatimb) nilai_hem_2024_agt_non_jatimb,sum(vol_hem_2024_agt_non_jatimb) vol_hem_2024_agt_non_jatimb,
sum(nilai_hem_2024_sept_non_jatimb) nilai_hem_2024_sept_non_jatimb,sum(vol_hem_2024_sept_non_jatimb) vol_hem_2024_sept_non_jatimb,
sum(po_hem_2024_non_jatimb) po_hem_2024_non_jatimb,sum(gr_hem_2024_non_jatimb) gr_hem_2024_non_jatimb,
sum(nilai_ogp_hem_non_jatimb) nilai_ogp_hem_non_jatimb,sum(vol_ogp_hem_non_jatimb) vol_ogp_hem_non_jatimb,
sum(nilai_so_hem_non_jatimb) nilai_so_hem_non_jatimb,sum(vol_so_hem_non_jatimb) vol_so_hem_non_jatimb,
sum(nilai_hem_2024_jun_jateng) nilai_hem_2024_jun_jateng,sum(vol_hem_2024_jun_jateng) vol_hem_2024_jun_jateng,
sum(nilai_hem_2024_jul_jateng) nilai_hem_2024_jul_jateng,sum(vol_hem_2024_jul_jateng) vol_hem_2024_jul_jateng,
sum(nilai_hem_2024_agt_jateng) nilai_hem_2024_agt_jateng,sum(vol_hem_2024_agt_jateng) vol_hem_2024_agt_jateng,
sum(nilai_hem_2024_sept_jateng) nilai_hem_2024_sept_jateng,sum(vol_hem_2024_sept_jateng) vol_hem_2024_sept_jateng,
sum(po_hem_2024_jateng) po_hem_2024_jateng,sum(gr_hem_2024_jateng) gr_hem_2024_jateng,
sum(nilai_ogp_hem_jateng) nilai_ogp_hem_jateng,sum(vol_ogp_hem_jateng) vol_ogp_hem_jateng,
sum(nilai_so_hem_jateng) nilai_so_hem_jateng,sum(vol_so_hem_jateng) vol_so_hem_jateng
from
(select "PROGRAM",
concat(\'0\')::numeric nilai_hem_2024_jun_jatimb,
concat(\'0\')::numeric nilai_hem_2024_jul_jatimb,
concat(\'0\')::numeric nilai_hem_2024_agt_jatimb,
concat(\'0\')::numeric nilai_hem_2024_sept_jatimb,
concat(\'0\')::numeric vol_hem_2024_jun_jatimb,
concat(\'0\')::numeric vol_hem_2024_jul_jatimb,
concat(\'0\')::numeric vol_hem_2024_agt_jatimb,
concat(\'0\')::numeric vol_hem_2024_sept_jatimb,
concat(\'0\')::numeric nilai_hem_2024_jun_non_jatimb,
concat(\'0\')::numeric nilai_hem_2024_jul_non_jatimb,
concat(\'0\')::numeric nilai_hem_2024_agt_non_jatimb,
concat(\'0\')::numeric nilai_hem_2024_sept_non_jatimb,
concat(\'0\')::numeric vol_hem_2024_jun_non_jatimb,
concat(\'0\')::numeric vol_hem_2024_jul_non_jatimb,
concat(\'0\')::numeric vol_hem_2024_agt_non_jatimb,
concat(\'0\')::numeric vol_hem_2024_sept_non_jatimb,
concat(\'0\')::bigint po_hem_2024_jatimb,concat(\'0\')::bigint gr_hem_2024_jatimb,
concat(\'0\')::bigint po_hem_2024_non_jatimb,concat(\'0\')::bigint gr_hem_2024_non_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_hem_jatimb,
sum(case when "KET_MITRA" !=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_hem_non_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_hem_jatimb,
sum(case when "KET_MITRA" !=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_hem_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_hem_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_hem_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_hem_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_hem_non_jatimb,
concat(\'0\')::numeric nilai_hem_2024_jun_jateng,
concat(\'0\')::numeric nilai_hem_2024_jul_jateng,
concat(\'0\')::numeric nilai_hem_2024_agt_jateng,
concat(\'0\')::numeric nilai_hem_2024_sept_jateng,
concat(\'0\')::numeric vol_hem_2024_jun_jateng,
concat(\'0\')::numeric vol_hem_2024_jul_jateng,
concat(\'0\')::numeric vol_hem_2024_agt_jateng,
concat(\'0\')::numeric vol_hem_2024_sept_jateng,
concat(\'0\')::bigint po_hem_2024_jateng,concat(\'0\')::bigint gr_hem_2024_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_hem_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\' 
then 1 else 0 end) vol_ogp_hem_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_hem_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_hem_jateng
FROM develop."RPB_REKON"
where "PROGRAM" in (\'HEM\') and "BUDGET_SOURCE" !=\'DID\' 
and "BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and "STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and "STATUS_SO" is not null
group by "PROGRAM"
union all
select a."PROGRAM",
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_hem_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_hem_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_hem_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_hem_2024_sept_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_hem_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_hem_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_hem_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_hem_2024_sept_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5241-24-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_hem_2024_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5241-24-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_hem_2024_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_hem_2024_jun_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_hem_2024_jul_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_hem_2024_agt_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_hem_2024_sept_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_hem_2024_jun_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_hem_2024_jul_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_hem_2024_agt_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_hem_2024_sept_non_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA" !=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5241-24-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_hem_2024_non_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA" !=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5241-24-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_hem_2024_non_jatimb,
concat(\'0\')::numeric nilai_ogp_hem_jatimb,concat(\'0\')::numeric vol_ogp_hem_jatimb,
concat(\'0\')::numeric nilai_ogp_hem_non_jatimb,concat(\'0\')::numeric vol_ogp_hem_non_jatimb,
concat(\'0\')::numeric nilai_so_hem_jatimb,concat(\'0\')::numeric vol_so_hem_jatimb,
concat(\'0\')::numeric nilai_so_hem_non_jatimb,concat(\'0\')::numeric vol_so_hem_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_hem_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_hem_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_hem_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_hem_2024_sept_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_hem_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_hem_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_hem_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_hem_2024_sept_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4241-24-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_hem_2024_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4241-24-01-I\'  
then b."LOCAL_AMOUNT_GR" else 0 end) gr_hem_2024_jateng,
concat(\'0\')::numeric nilai_ogp_hem_jateng,concat(\'0\')::numeric vol_ogp_hem_jateng,
concat(\'0\')::numeric nilai_so_hem_jateng,concat(\'0\')::numeric vol_so_hem_jateng
FROM develop."RPB_REKON" a, develop."SAP" b
where SUBSTRING(a."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and a."PROGRAM" in (\'HEM\')
and b."TGL_SAP"=current_date and a."BUDGET_SOURCE" !=\'DID\'
and a."BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and a."STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and a."STATUS_SO" is not null
group by a."PROGRAM") t
group by target_jatimb,target_jateng';
$get_hem=pg_query($sql_hem); 
?>
<tr style="background-color: #DFD;">
	<td><b>HEM Reg</b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
</tr>
<tr>
<?php
while($line_hem=pg_fetch_array($get_hem)){
	$target_hem=$line_hem['target_jatimb'];
?>
	<td style="color: blue"><b>Jatim Balnus TA</b></td>
	<td rowspan=3 style="text-align:right"><b><?php echo number_format($target_hem,0,',','.');?></b></td>
	<td rowspan=3 style="text-align:center"><b>LoP</b></td>
	<?php 
	$nilai_hem_2022_jatimb=41437210;
	$vol_hem_2022_jatimb=1;
	$capex_vol_hem_2022_jatimb=$nilai_hem_2022_jatimb / $vol_hem_2022_jatimb;
	if(is_nan($capex_vol_hem_2022)){
		$capex_vol_hem_2022_fix_jatimb=0;
	}else{
		$capex_vol_hem_2022_fix_jatimb=$capex_vol_hem_2022_jatimb;
	}
	$po_hem_2022_jatimb=0;
	$gr_hem_2022_jatimb=0;
	$nilai_hem_2023_jatimb=1786579136;
	$vol_hem_2023_jatimb=123;
	$capex_vol_hem_2023_jatimb=$nilai_hem_2023_jatimb / $vol_hem_2023_jatimb;
	$po_hem_2023_jatimb=1322103452;
	$gr_hem_2023_jatimb=1322103452;
	$nilai_hem_2024_jan_jatimb=2600777356;
	$vol_hem_2024_jan_jatimb=170;
	$capex_vol_hem_2024_jan_jatimb=$nilai_hem_2024_jan_jatimb / $vol_hem_2024_jan_jatimb;
	$nilai_hem_2024_feb_jatimb=3908983076;
	$vol_hem_2024_feb_jatimb=220;
	$capex_vol_hem_2024_feb_jatimb=$nilai_hem_2024_feb_jatimb / $vol_hem_2024_feb_jatimb;
	$nilai_hem_2024_mar_jatimb=2155209610;
	$vol_hem_2024_mar_jatimb=125;
	$capex_vol_hem_2024_mar_jatimb=$nilai_hem_2024_mar_jatimb / $vol_hem_2024_mar_jatimb;
	$nilai_hem_2024_apr_jatimb=2230416107;
	$vol_hem_2024_apr_jatimb=117;
	$capex_vol_hem_2024_apr_jatimb=$nilai_hem_2024_apr_jatimb / $vol_hem_2024_apr_jatimb;
	$nilai_hem_2024_mei_jatimb=3273695660;
	$vol_hem_2024_mei_jatimb=189;
	$capex_vol_hem_2024_mei_jatimb=$nilai_hem_2024_mei_jatimb / $vol_hem_2024_mei_jatimb;
	$nilai_hem_2024_jun_jatimb=$line_hem['nilai_hem_2024_jun_jatimb'];
	$vol_hem_2024_jun_jatimb=$line_hem['vol_hem_2024_jun_jatimb'];
	$capex_vol_hem_2024_jun_jatimb=$nilai_hem_2024_jun_jatimb / $vol_hem_2024_jun_jatimb;
	$nilai_hem_2024_jul_jatimb=$line_hem['nilai_hem_2024_jul_jatimb'];
	$vol_hem_2024_jul_jatimb=$line_hem['vol_hem_2024_jul_jatimb'];
	$capex_vol_hem_2024_jul_jatimb=$nilai_hem_2024_jul_jatimb / $vol_hem_2024_jul_jatimb;
	$nilai_hem_2024_agt_jatimb=$line_hem['nilai_hem_2024_agt_jatimb'];
	$vol_hem_2024_agt_jatimb=$line_hem['vol_hem_2024_agt_jatimb'];
	$capex_vol_hem_2024_agt_jatimb=$nilai_hem_2024_agt_jatimb / $vol_hem_2024_agt_jatimb;
	$nilai_hem_2024_sept_jatimb=$line_hem['nilai_hem_2024_sept_jatimb'];
	$vol_hem_2024_sept_jatimb=$line_hem['vol_hem_2024_sept_jatimb'];
	$capex_vol_hem_2024_sept_jatimb=$nilai_hem_2024_sept_jatimb / $vol_hem_2024_sept_jatimb;
	$po_hem_2024_jan_mei_jatimb=9863634185;
	$gr_hem_2024_jan_mei_jatimb=9770070280;
	$po_hem_2024_jatimb=$po_hem_2024_jan_mei_jatimb + $line_hem['po_hem_2024_jatimb'];
	$gr_hem_2024_jatimb=$gr_hem_2024_jan_mei_jatimb + $line_hem['gr_hem_2024_jatimb'];
	
	$nilai_hem_2022_non_jatimb=49506174;
	$vol_hem_2022_non_jatimb=3;
	$capex_vol_hem_2022_non_jatimb=$nilai_hem_2022_non_jatimb / $vol_hem_2022_non_jatimb;
	if(is_nan($capex_vol_hem_2022_non_jatimb)){
		$capex_vol_hem_2022_fix_non_jatimb=0;
	}else{
		$capex_vol_hem_2022_fix_non_jatimb=$capex_vol_hem_2022_non_jatimb;
	}
	$po_hem_2022_non_jatimb=$line_hem['po_hem_2022_non_jatimb'];
	$gr_hem_2022_non_jatimb=$line_hem['gr_hem_2022_non_jatimb'];
	$nilai_hem_2023_non_jatimb=29094032;
	$vol_hem_2023_non_jatimb=3;
	$capex_vol_hem_2023_non_jatimb=$nilai_hem_2023_non_jatimb / $vol_hem_2023_non_jatimb;
	$po_hem_2023_non_jatimb=0;
	$gr_hem_2023_non_jatimb=0;
	$nilai_hem_2024_jan_non_jatimb=0;
	$vol_hem_2024_jan_non_jatimb=0;
	$capex_vol_hem_2024_jan_non_jatimb=$nilai_hem_2024_jan_non_jatimb / $vol_hem_2024_jan_non_jatimb;
	if(is_nan($capex_vol_hem_2024_jan_non_jatimb)){
		$capex_vol_hem_2024_jan_non_jatimb=0;
	}else{
		$capex_vol_hem_2024_jan_non_jatimb=$capex_vol_hem_2024_jan_non_jatimb;
	}
	$nilai_hem_2024_feb_non_jatimb=0;
	$vol_hem_2024_feb_non_jatimb=0;
	$capex_vol_hem_2024_feb_non_jatimb=$nilai_hem_2024_feb_non_jatimb / $vol_hem_2024_feb_non_jatimb;
	if(is_nan($capex_vol_hem_2024_feb_non_jatimb)){
		$capex_vol_hem_2024_feb_non_jatimb=0;
	}else{
		$capex_vol_hem_2024_feb_non_jatimb=$capex_vol_hem_2024_feb_non_jatimb;
	}
	$nilai_hem_2024_mar_non_jatimb=43621555;
	$vol_hem_2024_mar_non_jatimb=2;
	$capex_vol_hem_2024_mar_non_jatimb=$nilai_hem_2024_mar_non_jatimb / $vol_hem_2024_mar_non_jatimb;
	if(is_nan($capex_vol_hem_2024_mar_non_jatimb)){
		$capex_vol_hem_2024_mar_non_jatimb=0;
	}else{
		$capex_vol_hem_2024_mar_non_jatimb=$capex_vol_hem_2024_mar_non_jatimb;
	}
	$nilai_hem_2024_apr_non_jatimb=0;
	$vol_hem_2024_apr_non_jatimb=0;
	$capex_vol_hem_2024_apr_non_jatimb=$nilai_hem_2024_apr_non_jatimb / $vol_hem_2024_apr_non_jatimb;
	if(is_nan($capex_vol_hem_2024_apr_non_jatimb)){
		$capex_vol_hem_2024_apr_non_jatimb=0;
	}else{
		$capex_vol_hem_2024_apr_non_jatimb=$capex_vol_hem_2024_apr_non_jatimb;
	}
	$nilai_hem_2024_mei_non_jatimb=46887465;
	$vol_hem_2024_mei_non_jatimb=3;
	$capex_vol_hem_2024_mei_non_jatimb=$nilai_hem_2024_mei_non_jatimb / $vol_hem_2024_mei_non_jatimb;
	if(is_nan($capex_vol_hem_2024_mei_non_jatimb)){
		$capex_vol_hem_2024_mei_non_jatimb=0;
	}else{
		$capex_vol_hem_2024_mei_non_jatimb=$capex_vol_hem_2024_mei_non_jatimb;
	}
	$nilai_hem_2024_jun_non_jatimb=$line_hem['nilai_hem_2024_jun_non_jatimb'];
	$vol_hem_2024_jun_non_jatimb=$line_hem['vol_hem_2024_jun_non_jatimb'];
	$capex_vol_hem_2024_jun_non_jatimb=$nilai_hem_2024_jun_non_jatimb / $vol_hem_2024_jun_non_jatimb;
	if(is_nan($capex_vol_hem_2024_jun_non_jatimb)){
		$capex_vol_hem_2024_jun_non_jatimb=0;
	}else{
		$capex_vol_hem_2024_jun_non_jatimb=$capex_vol_hem_2024_jun_non_jatimb;
	}
	$nilai_hem_2024_jul_non_jatimb=$line_hem['nilai_hem_2024_jul_non_jatimb'];
	$vol_hem_2024_jul_non_jatimb=$line_hem['vol_hem_2024_jul_non_jatimb'];
	$capex_vol_hem_2024_jul_non_jatimb=$nilai_hem_2024_jul_non_jatimb / $vol_hem_2024_jul_non_jatimb;
	if(is_nan($capex_vol_hem_2024_jul_non_jatimb)){
		$capex_vol_hem_2024_jul_non_jatimb=0;
	}else{
		$capex_vol_hem_2024_jul_non_jatimb=$capex_vol_hem_2024_jul_non_jatimb;
	}
	$nilai_hem_2024_agt_non_jatimb=$line_hem['nilai_hem_2024_agt_non_jatimb'];
	$vol_hem_2024_agt_non_jatimb=$line_hem['vol_hem_2024_agt_non_jatimb'];
	$capex_vol_hem_2024_agt_non_jatimb=$nilai_hem_2024_agt_non_jatimb / $vol_hem_2024_agt_non_jatimb;
	if(is_nan($capex_vol_hem_2024_agt_non_jatimb)){
		$capex_vol_hem_2024_agt_non_jatimb=0;
	}else{
		$capex_vol_hem_2024_agt_non_jatimb=$capex_vol_hem_2024_agt_non_jatimb;
	}
	$nilai_hem_2024_sept_non_jatimb=$line_hem['nilai_hem_2024_sept_non_jatimb'];
	$vol_hem_2024_sept_non_jatimb=$line_hem['vol_hem_2024_sept_non_jatimb'];
	$capex_vol_hem_2024_sept_non_jatimb=$nilai_hem_2024_sept_non_jatimb / $vol_hem_2024_sept_non_jatimb;
	if(is_nan($capex_vol_hem_2024_sept_non_jatimb)){
		$capex_vol_hem_2024_sept_non_jatimb=0;
	}else{
		$capex_vol_hem_2024_sept_non_jatimb=$capex_vol_hem_2024_sept_non_jatimb;
	}
	$po_hem_2024_non_jatimb=$line_hem['po_hem_2024_non_jatimb'];
	$gr_hem_2024_non_jatimb=$line_hem['gr_hem_2024_non_jatimb'];
	
	$nilai_hem_2022_tot_jatimb=$nilai_hem_2022_jatimb + $nilai_hem_2022_non_jatimb;
	$vol_hem_2022_tot_jatimb=$vol_hem_2022_jatimb + $vol_hem_2022_non_jatimb;
	$capex_vol_hem_2022_tot_jatimb=$capex_vol_hem_2022_jatimb + $capex_vol_hem_2022_non_jatimb;
	$po_hem_2022_tot_jatimb=$po_hem_2022_jatimb + $po_hem_2022_non_jatimb;
	$gr_hem_2022_tot_jatimb=$gr_hem_2022_jatimb + $gr_hem_2022_non_jatimb;
	$nilai_hem_2023_tot_jatimb=$nilai_hem_2023_jatimb + $nilai_hem_2023_non_jatimb;
	$vol_hem_2023_tot_jatimb=$vol_hem_2023_jatimb + $vol_hem_2023_non_jatimb;
	$capex_vol_hem_2023_tot_jatimb=$nilai_hem_2023_tot_jatimb / $vol_hem_2023_tot_jatimb;
	$po_hem_2023_tot_jatimb=$po_hem_2023_jatimb + $po_hem_2023_non_jatimb;
	$gr_hem_2023_tot_jatimb=$gr_hem_2023_jatimb + $gr_hem_2023_non_jatimb;
	$nilai_hem_2024_jan_tot_jatimb=$nilai_hem_2024_jan_jatimb + $nilai_hem_2024_jan_non_jatimb;
	$vol_hem_2024_jan_tot_jatimb=$vol_hem_2024_jan_jatimb + $vol_hem_2024_jan_non_jatimb;
	$capex_vol_hem_2024_jan_tot_jatimb=$nilai_hem_2024_jan_tot_jatimb / $vol_hem_2024_jan_tot_jatimb;
	$nilai_hem_2024_feb_tot_jatimb=$nilai_hem_2024_feb_jatimb + $nilai_hem_2024_feb_non_jatimb;
	$vol_hem_2024_feb_tot_jatimb=$vol_hem_2024_feb_jatimb + $vol_hem_2024_feb_non_jatimb;
	$capex_vol_hem_2024_feb_tot_jatimb=$nilai_hem_2024_feb_tot_jatimb / $vol_hem_2024_feb_tot_jatimb;
	$nilai_hem_2024_mar_tot_jatimb=$nilai_hem_2024_mar_jatimb + $nilai_hem_2024_mar_non_jatimb;
	$vol_hem_2024_mar_tot_jatimb=$vol_hem_2024_mar_jatimb + $vol_hem_2024_mar_non_jatimb;
	$capex_vol_hem_2024_mar_tot_jatimb=$nilai_hem_2024_mar_tot_jatimb / $vol_hem_2024_mar_tot_jatimb;
	$nilai_hem_2024_apr_tot_jatimb=$nilai_hem_2024_apr_jatimb + $nilai_hem_2024_apr_non_jatimb;
	$vol_hem_2024_apr_tot_jatimb=$vol_hem_2024_apr_jatimb + $vol_hem_2024_apr_non_jatimb;
	$capex_vol_hem_2024_apr_tot_jatimb=$nilai_hem_2024_apr_tot_jatimb / $vol_hem_2024_apr_tot_jatimb;
	$nilai_hem_2024_mei_tot_jatimb=$nilai_hem_2024_mei_jatimb + $nilai_hem_2024_mei_non_jatimb;
	$vol_hem_2024_mei_tot_jatimb=$vol_hem_2024_mei_jatimb + $vol_hem_2024_mei_non_jatimb;
	$capex_vol_hem_2024_mei_tot_jatimb=$nilai_hem_2024_mei_tot_jatimb / $vol_hem_2024_mei_tot_jatimb;
	$nilai_hem_2024_jun_tot_jatimb=$nilai_hem_2024_jun_jatimb + $nilai_hem_2024_jun_non_jatimb;
	$vol_hem_2024_jun_tot_jatimb=$vol_hem_2024_jun_jatimb + $vol_hem_2024_jun_non_jatimb;
	$capex_vol_hem_2024_jun_tot_jatimb=$nilai_hem_2024_jun_tot_jatimb / $vol_hem_2024_jun_tot_jatimb;
	$nilai_hem_2024_jul_tot_jatimb=$nilai_hem_2024_jul_jatimb + $nilai_hem_2024_jul_non_jatimb;
	$vol_hem_2024_jul_tot_jatimb=$vol_hem_2024_jul_jatimb + $vol_hem_2024_jul_non_jatimb;
	$capex_vol_hem_2024_jul_tot_jatimb=$nilai_hem_2024_jul_tot_jatimb / $vol_hem_2024_jul_tot_jatimb;
	$nilai_hem_2024_agt_tot_jatimb=$nilai_hem_2024_agt_jatimb + $nilai_hem_2024_agt_non_jatimb;
	$vol_hem_2024_agt_tot_jatimb=$vol_hem_2024_agt_jatimb + $vol_hem_2024_agt_non_jatimb;
	$capex_vol_hem_2024_agt_tot_jatimb=$nilai_hem_2024_agt_tot_jatimb / $vol_hem_2024_agt_tot_jatimb;
	$nilai_hem_2024_sept_tot_jatimb=$nilai_hem_2024_sept_jatimb + $nilai_hem_2024_sept_non_jatimb;
	$vol_hem_2024_sept_tot_jatimb=$vol_hem_2024_sept_jatimb + $vol_hem_2024_sept_non_jatimb;
	$capex_vol_hem_2024_sept_tot_jatimb=$nilai_hem_2024_sept_tot_jatimb / $vol_hem_2024_sept_tot_jatimb;
	$po_hem_2024_tot_jatimb=$po_hem_2024_jatimb + $po_hem_2024_non_jatimb;
	$gr_hem_2024_tot_jatimb=$gr_hem_2024_jatimb + $gr_hem_2024_non_jatimb;
	
	$tot_nilai_hem_jatimb=$nilai_hem_2022_jatimb+$nilai_hem_2023_jatimb+$nilai_hem_2024_jan_jatimb+$nilai_hem_2024_feb_jatimb+$nilai_hem_2024_mar_jatimb+$nilai_hem_2024_apr_jatimb+$nilai_hem_2024_mei_jatimb+$nilai_hem_2024_jun_jatimb+$nilai_hem_2024_jul_jatimb_jatimb+$nilai_hem_2024_agt_jatimb_jatimb+$nilai_hem_2024_sept_jatimb;
	$tot_vol_hem_jatimb=$vol_hem_2022_jatimb+$vol_hem_2023_jatimb+$vol_hem_2024_jan_jatimb+$vol_hem_2024_feb_jatimb+$vol_hem_2024_mar_jatimb+$vol_hem_2024_apr_jatimb+$vol_hem_2024_mei_jatimb+$vol_hem_2024_jun_jatimb+$vol_hem_2024_jul_jatimb+$vol_hem_2024_agt_jatimb+$vol_hem_2024_sept_jatimb;
	
	$tot_capex_vol_hem_jatimb=$tot_nilai_hem_jatimb / $tot_vol_hem_jatimb;
	$tot_nilai_hem_non_jatimb=$nilai_hem_2022_non_jatimb+$nilai_hem_2023_non_jatimb+$nilai_hem_2024_jan_non_jatimb+$nilai_hem_2024_feb_non_jatimb+$nilai_hem_2024_mar_non_jatimb+$nilai_hem_2024_apr_non_jatimb+$nilai_hem_2024_mei_non_jatimb+$nilai_hem_2024_jun_non_jatimb+$nilai_hem_2024_jul_non_jatimb+$nilai_hem_2024_agt_non_jatimb+$nilai_hem_2024_sept_non_jatimb;
	$tot_vol_hem_non_jatimb=$vol_hem_2022_non_jatimb+$vol_hem_2023_non_jatimb+$vol_hem_2024_jan_non_jatimb+$vol_hem_2024_feb_non_jatimb+$vol_hem_2024_mar_non_jatimb+$vol_hem_2024_apr_non_jatimb+$vol_hem_2024_mei_non_jatimb+$vol_hem_2024_jun_non_jatimb+$vol_hem_2024_jul_non_jatimb+$vol_hem_2024_agt_non_jatimb+$vol_hem_2024_sept_non_jatimb;
	
	$tot_capex_vol_hem_non_jatimb=$tot_nilai_hem_non_jatimb / $tot_vol_hem_non_jatimb;

	$tot_po_hem_jatimb=$po_hem_2022+$po_hem_2023_jatimb+$po_hem_2024_jatimb_jatimb;
	$tot_gr_hem_jatimb=$gr_hem_2022+$gr_hem_2023_jatimb+$gr_hem_2024_jatimb_jatimb;
	$tot_nilai_hem_tot_jatimb=$tot_nilai_hem_jatimb+$tot_nilai_hem_non_jatimb;
	$tot_vol_hem_tot_jatimb=$tot_vol_hem_jatimb+$tot_vol_hem_non_jatimb;
	$tot_capex_vol_hem_tot_jatimb=$tot_capex_vol_hem_jatimb+$tot_capex_vol_hem_non_jatimb;
	$tot_po_hem_tot_jatimb=$tot_po_hem_jatimb+$tot_po_hem_non_jatimb;
	$tot_gr_hem_tot_jatimb=$tot_gr_hem_jatimb+$tot_gr_hem_non_jatimb;
	
	$persen_tot_po_gr_hem_jatimb=($tot_gr_hem_jatimb / $tot_po_hem_jatimb) *100;
	$persen_tot_po_nilai_hem_jatimb=($tot_po_hem_jatimb / $tot_nilai_hem_jatimb) *100;
	$persen_tot_po_gr_hem_non_jatimb=($tot_gr_hem_non_jatimb / $tot_po_hem_non_jatimb) *100;
	if(is_nan($persen_tot_po_gr_hem_non_jatimb)){
		$persen_tot_po_gr_hem_non_jatimb=0;
	}else{
		$persen_tot_po_gr_hem_non_jatimb=$persen_tot_po_gr_hem_non_jatimb;
	}
	$persen_tot_po_nilai_hem_non_jatimb=($tot_po_hem_non_jatimb / $tot_nilai_hem_non_jatimb) *100;
	
	$sisa_target_totpo_hem_jatimb=$target_hem - $tot_po_hem_jatimb;
	$sisa_vol_hem_jatimb=$sisa_target_totpo_hem_jatimb / $tot_capex_vol_hem_jatimb;
	$sisa_target_totpo_hem_non_jatimb=$target_hem - $tot_po_hem_non_jatimb;
	$sisa_vol_hem_non_jatimb=$sisa_target_totpo_hem_non_jatimb / $tot_capex_vol_hem_non_jatimb;
	
	$tot_persen_tot_po_gr_hem_jatimb=$persen_tot_po_gr_hem_jatimb + $persen_tot_po_gr_hem_non_jatimb;
	$tot_persen_tot_po_nilai_hem_jatimb=$persen_tot_po_nilai_hem_jatimb + $persen_tot_po_nilai_hem_non_jatimb;
	$tot_sisa_target_totpo_hem_jatimb=$sisa_target_totpo_hem_jatimb + $sisa_target_totpo_hem_non_jatimb;
	$tot_sisa_vol_hem_jatimb=$sisa_vol_hem_jatimb + $sisa_vol_hem_non_jatimb;
	
	$nilai_ogp_hem_jatimb=$line_hem['nilai_ogp_hem_jatimb'];
	$vol_ogp_hem_jatimb=$line_hem['vol_ogp_hem_jatimb'];
	$capex_vol_ogp_hem_jatimb=$nilai_ogp_hem_jatimb / $vol_ogp_hem_jatimb;
	
	$nilai_outlook_hem_jatimb=17293039855;
	$vol_outlook_hem_jatimb=$nilai_outlook_hem_jatimb / $tot_capex_vol_hem_jatimb;
	$capex_vol_outlook_hem_jatimb=$nilai_outlook_hem_jatimb / $vol_outlook_hem_jatimb;
	
	$nilai_ogp_hem_non_jatimb=$line_hem['nilai_ogp_hem_non_jatimb'];
	$vol_ogp_hem_non_jatimb=$line_hem['vol_ogp_hem_non_jatimb'];
	$capex_vol_ogp_hem_non_jatimb=$nilai_ogp_hem_non_jatimb / $vol_ogp_hem_non_jatimb;
	if(is_nan($capex_vol_ogp_hem_non_jatimb)){
		$capex_vol_ogp_hem_non_jatimb=0;
	}else{
		$capex_vol_ogp_hem_non_jatimb=$capex_vol_ogp_hem_non_jatimb;
	}
	
	$nilai_outlook_hem_non_jatimb=0;
	$vol_outlook_hem_non_jatimb=$nilai_outlook_hem_non_jatimb / $tot_capex_vol_hem_non_jatimb;
	$capex_vol_outlook_hem_non_jatimb=$nilai_outlook_hem_non_jatimb / $vol_outlook_hem_non_jatimb;
	if(is_nan($capex_vol_outlook_hem_non_jatimb)){
		$capex_vol_outlook_hem_non_jatimb=0;
	}else{
		$capex_vol_outlook_hem_non_jatimb=$capex_vol_outlook_hem_non_jatimb;
	}
	
	$tot_nilai_ogp_hem_jatimb=$nilai_ogp_hem_jatimb + $nilai_ogp_hem_non_jatimb;
	$tot_vol_ogp_hem_jatimb=$vol_ogp_hem_jatimb + $vol_ogp_hem_non_jatimb;
	$tot_capex_vol_ogp_hem_jatimb=$tot_nilai_ogp_hem_jatimb / $tot_vol_ogp_hem_jatimb;
	
	$tot_nilai_outlook_hem_jatimb=$nilai_outlook_hem_jatimb + $nilai_outlook_hem_non_jatimb;
	$tot_vol_outlook_hem_jatimb=$vol_outlook_hem_jatimb + $vol_outlook_hem_non_jatimb;
	$tot_capex_vol_outlook_hem_jatimb=$tot_nilai_outlook_hem_jatimb / $tot_vol_outlook_hem_jatimb;
	
	$nilai_so_hem_jatimb=$line_hem['nilai_so_hem_jatimb'];
	$vol_so_hem_jatimb=$line_hem['vol_so_hem_jatimb'];
	$capex_vol_so_hem_jatimb=$nilai_so_hem_jatimb / $vol_so_hem_jatimb;
	
	$nilai_so_hem_non_jatimb=$line_hem['nilai_so_hem_non_jatimb'];
	$vol_so_hem_non_jatimb=$line_hem['vol_so_hem_non_jatimb'];
	$capex_vol_so_hem_non_jatimb=$nilai_so_hem_non_jatimb / $vol_so_hem_non_jatimb;
	if(is_nan($capex_vol_so_hem_non_jatimb)){
		$capex_vol_so_hem_non_jatimb=0;
	}else{
		$capex_vol_so_hem_non_jatimb=$capex_vol_so_hem_non_jatimb;
	}
	
	$tot_nilai_so_hem_jatimb=$nilai_so_hem_jatimb + $nilai_so_hem_non_jatimb;
	$tot_vol_so_hem_jatimb=$vol_so_hem_jatimb + $vol_so_hem_non_jatimb;
	$tot_capex_vol_so_hem_jatimb=$tot_nilai_so_hem_jatimb / $tot_vol_so_hem_jatimb;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_hem_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_hem_2022_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_hem_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_hem_2023_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_jan_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_jan_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_jan_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_feb_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_feb_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_feb_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_mar_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_mar_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_mar_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_apr_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_apr_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_apr_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_mei_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_mei_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_mei_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_jun_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_jun_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_jun_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_jul_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_jul_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_jul_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_hem_2024_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_hem_2024_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_hem_jatimb,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_hem_jatimb,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_hem_jatimb,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr>
	<td style="color: blue"><b>Jatim Balnus NON TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2022_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2022_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2022_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_hem_2022_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_hem_2022_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2023_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2023_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2023_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_hem_2023_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_hem_2023_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_jan_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_jan_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_feb_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_feb_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_feb_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_mar_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_mar_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_apr_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_apr_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_apr_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_mei_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_mei_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_jun_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_jun_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_jun_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_jul_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_jul_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_jul_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_agt_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_agt_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_agt_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_sept_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_sept_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_sept_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_hem_2024_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_hem_2024_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_hem_non_jatimb,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_hem_non_jatimb,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_hem_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_hem_non_jatimb,0,',','.');?></b></td>
</tr>
<tr>
	<td style="color: blue"><b>Jatim Balnus All Mitra</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2022_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2022_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2022_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_hem_2022_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_hem_2022_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2023_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2023_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2023_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_hem_2023_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_hem_2023_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_jan_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_jan_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_feb_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_feb_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_feb_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_mar_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_mar_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_mar_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_apr_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_apr_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_mei_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_mei_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_mei_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_jun_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_jun_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_jun_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_jul_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_jul_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_jul_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_agt_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_agt_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_agt_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_sept_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_sept_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_sept_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($po_hem_2024_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_hem_2024_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_hem_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_hem_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_hem_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_hem_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_gr_hem_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_persen_tot_po_gr_hem_jatimb,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_persen_tot_po_nilai_hem_jatimb,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_sisa_target_totpo_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_sisa_vol_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_ogp_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_ogp_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_ogp_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_outlook_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_outlook_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_outlook_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_so_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_so_hem_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_so_hem_jatimb,0,',','.');?></b></td>
</tr>
<tr>
<?php
$get_hem=pg_query($sql_hem);
while($line_hem=pg_fetch_array($get_hem)){
	$target_hem_jateng=$line_hem['target_jateng'];
?>
	<td style="color: blue"><b>Jateng TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b>LoP</b></td>
	<?php 
	$nilai_hem_2022_jateng=0;
	$vol_hem_2022=0;
	$capex_vol_hem_2022_jateng=$nilai_hem_2022_jateng / $vol_hem_2022_jateng;
	if(is_nan($capex_vol_hem_2022_jateng)){
		$capex_vol_hem_2022_jateng=0;
	}else{
		$capex_vol_hem_2022_jateng=$capex_vol_hem_jateng_2022;
	}
	$nilai_hem_2023_jateng=0;
	$vol_hem_2023_jateng=0;
	$capex_vol_hem_2023_jateng=0;
	$nilai_hem_2024_jan_jateng=251654986;
	$vol_hem_2024_jan_jateng=16;
	$capex_vol_hem_2024_jan_jateng=15728437;
	$nilai_hem_2024_feb_jateng=358399819;
	$vol_hem_2024_feb_jateng=49;
	$capex_vol_hem_2024_feb_jateng=7314282;
	$nilai_hem_2024_mar_jateng=261490792;
	$vol_hem_2024_mar_jateng=27;
	$capex_vol_hem_2024_mar_jateng=9684844;
	$nilai_hem_2024_apr_jateng=11805100703;
	$vol_hem_2024_apr_jateng=791;
	$capex_vol_hem_2024_apr_jateng=14924274;
	$nilai_hem_2024_mei_jateng=1486062437;
	$vol_hem_2024_mei_jateng=144;
	$capex_vol_hem_2024_mei_jateng=10319878;
	$nilai_hem_2024_jun_jateng=$line_hem['nilai_hem_2024_jun_jateng'];
	$vol_hem_2024_jun_jateng=$line_hem['vol_hem_2024_jun_jateng'];
	$capex_vol_hem_2024_jun_jateng=$nilai_hem_2024_jun_jateng / $vol_hem_2024_jun_jateng;
	$nilai_hem_2024_jul_jateng=$line_hem['nilai_hem_2024_jul_jateng'];
	$vol_hem_2024_jul_jateng=$line_hem['vol_hem_2024_jul_jateng'];
	$nilai_hem_2024_agt_jateng=$line_hem['nilai_hem_2024_agt_jateng'];
	$vol_hem_2024_agt_jateng=$line_hem['vol_hem_2024_agt_jateng'];
	$capex_vol_hem_2024_agt_jateng=$nilai_hem_2024_agt_jateng / $vol_hem_2024_agt_jateng;
	$nilai_hem_2024_sept_jateng=$line_hem['nilai_hem_2024_sept_jateng'];
	$vol_hem_2024_sept_jateng=$line_hem['vol_hem_2024_sept_jateng'];
	$capex_vol_hem_2024_sept_jateng=$nilai_hem_2024_sept_jateng / $vol_hem_2024_sept_jateng;
	$capex_vol_hem_2024_jul_jateng=$nilai_hem_2024_jul_jateng / $vol_hem_2024_jul_jateng;
	$tot_nilai_hem_jateng=$nilai_hem_2022_jateng+$nilai_hem_2023_jateng+$nilai_hem_2024_jan_jateng+$nilai_hem_2024_feb_jateng+$nilai_hem_2024_mar_jateng+$nilai_hem_2024_apr_jateng+$nilai_hem_2024_mei_jateng+$nilai_hem_2024_jun_jateng+$nilai_hem_2024_jul_jateng+$nilai_hem_2024_agt_jateng+$nilai_hem_2024_sept_jateng;
	
	$tot_vol_hem_jateng=$vol_hem_2022_jateng+$vol_hem_2023_jateng+$vol_hem_2024_jan_jateng+$vol_hem_2024_feb_jateng+$vol_hem_2024_mar_jateng+$vol_hem_2024_apr_jateng+$vol_hem_2024_mei_jateng+$vol_hem_2024_jun_jateng+$vol_hem_2024_jul_jateng+$vol_hem_2024_agt_jateng+$vol_hem_2024_sept_jateng;
	
	$tot_capex_vol_hem_jateng=$tot_nilai_hem_jateng / $tot_vol_hem_jateng;
	
	$po_hem_2022_jateng=0;
	$gr_hem_2022_jateng=0;
	$po_hem_2023_jateng=0;
	$gr_hem_2023_jateng=0;
	$po_hem_2024_jan_mei_jateng=13078775422;
	$gr_hem_2024_jan_mei_jateng=13021173245;
	$po_hem_2024_jateng=$po_hem_2024_jan_mei_jateng + $line_hem['po_hem_2024_jateng'];
	$gr_hem_2024_jateng=$gr_hem_2024_jan_mei_jateng + $line_hem['gr_hem_2024_jateng'];
	
	$tot_po_hem_jateng=$po_hem_2022_jateng+$po_hem_2023_jateng+$po_hem_2024_jateng;
	$tot_gr_hem_jateng=$gr_hem_2022_jateng+$gr_hem_2023_jateng+$gr_hem_2024_jateng;
	
	$persen_tot_po_gr_hem_jateng=($tot_gr_hem_jateng / $tot_po_hem_jateng) *100;
	$persen_tot_po_nilai_hem_jateng=($tot_po_hem_jateng / $tot_nilai_hem_jateng) *100;
	
	$sisa_target_totpo_hem_jateng=$target_hem_jateng - $tot_po_hem_jateng;
	$sisa_vol_hem_jateng=$sisa_target_totpo_hem_jateng / $tot_capex_vol_hem_jateng;
	
	$nilai_ogp_hem_jateng=$line_hem['nilai_ogp_hem_jateng'];
	$vol_ogp_hem_jateng=$line_hem['vol_ogp_hem_jateng'];
	$capex_vol_ogp_hem_jateng=$nilai_ogp_hem_jateng / $vol_ogp_hem_jateng;
	
	$nilai_outlook_hem_jateng=14198993615;
	$vol_outlook_hem_jateng=$nilai_outlook_hem_jateng / $tot_capex_vol_hem_jateng;
	$capex_vol_outlook_hem_jateng=$nilai_outlook_hem_jateng / $vol_outlook_hem_jateng;
	
	$nilai_so_hem_jateng=$line_hem['nilai_so_hem_jateng'];
	$vol_so_hem_jateng=$line_hem['vol_so_hem_jateng'];
	$capex_vol_so_hem_jateng=$nilai_so_hem_jateng / $vol_so_hem_jateng;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_hem_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_hem_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_hem_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_hem_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_hem_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_hem_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_hem_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_hem_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_hem_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_hem_jateng,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_hem_jateng,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_hem_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_hem_jateng,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr style="background-color: aqua;">
	<td><b><center>CNOP & OLO</center></b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
</tr>
<?php 
$sql_nodeb='select (select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-5361-22-01-I\') target_jatimb,
(select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-4361-22-01-I\') target_jateng,
sum(nilai_nodeb_2024_jun_jatimb) nilai_nodeb_2024_jun_jatimb,sum(vol_nodeb_2024_jun_jatimb) vol_nodeb_2024_jun_jatimb,
sum(nilai_nodeb_2024_jul_jatimb) nilai_nodeb_2024_jul_jatimb,sum(vol_nodeb_2024_jul_jatimb) vol_nodeb_2024_jul_jatimb,
sum(nilai_nodeb_2024_agt_jatimb) nilai_nodeb_2024_agt_jatimb,sum(vol_nodeb_2024_agt_jatimb) vol_nodeb_2024_agt_jatimb,
sum(nilai_nodeb_2024_sept_jatimb) nilai_nodeb_2024_sept_jatimb,sum(vol_nodeb_2024_sept_jatimb) vol_nodeb_2024_sept_jatimb,
sum(po_nodeb_2024_jatimb) po_nodeb_2024_jatimb,sum(gr_nodeb_2024_jatimb) gr_nodeb_2024_jatimb,
sum(nilai_ogp_nodeb_jatimb) nilai_ogp_nodeb_jatimb,sum(vol_ogp_nodeb_jatimb) vol_ogp_nodeb_jatimb,
sum(nilai_so_nodeb_jatimb) nilai_so_nodeb_jatimb,sum(vol_so_nodeb_jatimb) vol_so_nodeb_jatimb,
sum(nilai_nodeb_2024_jun_non_jatimb) nilai_nodeb_2024_jun_non_jatimb,sum(vol_nodeb_2024_jun_non_jatimb) vol_nodeb_2024_jun_non_jatimb,
sum(nilai_nodeb_2024_jul_non_jatimb) nilai_nodeb_2024_jul_non_jatimb,sum(vol_nodeb_2024_jul_non_jatimb) vol_nodeb_2024_jul_non_jatimb,
sum(nilai_nodeb_2024_agt_non_jatimb) nilai_nodeb_2024_agt_non_jatimb,sum(vol_nodeb_2024_agt_non_jatimb) vol_nodeb_2024_agt_non_jatimb,
sum(nilai_nodeb_2024_sept_non_jatimb) nilai_nodeb_2024_sept_non_jatimb,sum(vol_nodeb_2024_sept_non_jatimb) vol_nodeb_2024_sept_non_jatimb,
sum(po_nodeb_2024_non_jatimb) po_nodeb_2024_non_jatimb,sum(gr_nodeb_2024_non_jatimb) gr_nodeb_2024_non_jatimb,
sum(nilai_ogp_nodeb_non_jatimb) nilai_ogp_nodeb_non_jatimb,sum(vol_ogp_nodeb_non_jatimb) vol_ogp_nodeb_non_jatimb,
sum(nilai_so_nodeb_non_jatimb) nilai_so_nodeb_non_jatimb,sum(vol_so_nodeb_non_jatimb) vol_so_nodeb_non_jatimb,
sum(nilai_nodeb_2024_jun_jateng) nilai_nodeb_2024_jun_jateng,sum(vol_nodeb_2024_jun_jateng) vol_nodeb_2024_jun_jateng,
sum(nilai_nodeb_2024_jul_jateng) nilai_nodeb_2024_jul_jateng,sum(vol_nodeb_2024_jul_jateng) vol_nodeb_2024_jul_jateng,
sum(nilai_nodeb_2024_agt_jateng) nilai_nodeb_2024_agt_jateng,sum(vol_nodeb_2024_agt_jateng) vol_nodeb_2024_agt_jateng,
sum(nilai_nodeb_2024_sept_jateng) nilai_nodeb_2024_sept_jateng,sum(vol_nodeb_2024_sept_jateng) vol_nodeb_2024_sept_jateng,
sum(po_nodeb_2024_jateng) po_nodeb_2024_jateng,sum(gr_nodeb_2024_jateng) gr_nodeb_2024_jateng,
sum(nilai_ogp_nodeb_jateng) nilai_ogp_nodeb_jateng,sum(vol_ogp_nodeb_jateng) vol_ogp_nodeb_jateng,
sum(nilai_so_nodeb_jateng) nilai_so_nodeb_jateng,sum(vol_so_nodeb_jateng) vol_so_nodeb_jateng
from
(select "PROGRAM",
concat(\'0\')::numeric nilai_nodeb_2024_jun_jatimb,
concat(\'0\')::numeric nilai_nodeb_2024_jul_jatimb,
concat(\'0\')::numeric nilai_nodeb_2024_agt_jatimb,
concat(\'0\')::numeric nilai_nodeb_2024_sept_jatimb,
concat(\'0\')::numeric vol_nodeb_2024_jun_jatimb,
concat(\'0\')::numeric vol_nodeb_2024_jul_jatimb,
concat(\'0\')::numeric vol_nodeb_2024_agt_jatimb,
concat(\'0\')::numeric vol_nodeb_2024_sept_jatimb,
concat(\'0\')::numeric nilai_nodeb_2024_jun_non_jatimb,
concat(\'0\')::numeric nilai_nodeb_2024_jul_non_jatimb,
concat(\'0\')::numeric nilai_nodeb_2024_agt_non_jatimb,
concat(\'0\')::numeric nilai_nodeb_2024_sept_non_jatimb,
concat(\'0\')::numeric vol_nodeb_2024_jun_non_jatimb,
concat(\'0\')::numeric vol_nodeb_2024_jul_non_jatimb,
concat(\'0\')::numeric vol_nodeb_2024_agt_non_jatimb,
concat(\'0\')::numeric vol_nodeb_2024_sept_non_jatimb,
concat(\'0\')::bigint po_nodeb_2024_jatimb,concat(\'0\')::bigint gr_nodeb_2024_jatimb,
concat(\'0\')::bigint po_nodeb_2024_non_jatimb,concat(\'0\')::bigint gr_nodeb_2024_non_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_nodeb_jatimb,
sum(case when "KET_MITRA" !=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_nodeb_non_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_nodeb_jatimb,
sum(case when "KET_MITRA" !=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_nodeb_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_nodeb_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_nodeb_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_nodeb_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_nodeb_non_jatimb,
concat(\'0\')::numeric nilai_nodeb_2024_jun_jateng,
concat(\'0\')::numeric nilai_nodeb_2024_jul_jateng,
concat(\'0\')::numeric nilai_nodeb_2024_agt_jateng,
concat(\'0\')::numeric nilai_nodeb_2024_sept_jateng,
concat(\'0\')::numeric vol_nodeb_2024_jun_jateng,
concat(\'0\')::numeric vol_nodeb_2024_jul_jateng,
concat(\'0\')::numeric vol_nodeb_2024_agt_jateng,
concat(\'0\')::numeric vol_nodeb_2024_sept_jateng,
concat(\'0\')::bigint po_nodeb_2024_jateng,concat(\'0\')::bigint gr_nodeb_2024_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_nodeb_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\' 
then 1 else 0 end) vol_ogp_nodeb_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_nodeb_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_nodeb_jateng
FROM develop."RPB_REKON"
where "PROGRAM" in (\'FIMO\') and "BUDGET_SOURCE" !=\'DID\' 
and "BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and "STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and "STATUS_SO" is not null
group by "PROGRAM"
union all
select a."PROGRAM",
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_nodeb_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_nodeb_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_nodeb_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_nodeb_2024_sept_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_nodeb_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_nodeb_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_nodeb_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_nodeb_2024_sept_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5361-22-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_nodeb_2024_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5361-22-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_nodeb_2024_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_nodeb_2024_jun_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_nodeb_2024_jul_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_nodeb_2024_agt_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_nodeb_2024_sept_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_nodeb_2024_jun_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_nodeb_2024_jul_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_nodeb_2024_agt_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_nodeb_2024_sept_non_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA" !=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5361-22-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_nodeb_2024_non_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA" !=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5361-22-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_nodeb_2024_non_jatimb,
concat(\'0\')::numeric nilai_ogp_nodeb_jatimb,concat(\'0\')::numeric vol_ogp_nodeb_jatimb,
concat(\'0\')::numeric nilai_ogp_nodeb_non_jatimb,concat(\'0\')::numeric vol_ogp_nodeb_non_jatimb,
concat(\'0\')::numeric nilai_so_nodeb_jatimb,concat(\'0\')::numeric vol_so_nodeb_jatimb,
concat(\'0\')::numeric nilai_so_nodeb_non_jatimb,concat(\'0\')::numeric vol_so_nodeb_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_nodeb_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_nodeb_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_nodeb_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_nodeb_2024_sept_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_nodeb_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_nodeb_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_nodeb_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_nodeb_2024_sept_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4361-22-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_nodeb_2024_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4361-22-01-I\'  
then b."LOCAL_AMOUNT_GR" else 0 end) gr_nodeb_2024_jateng,
concat(\'0\')::numeric nilai_ogp_nodeb_jateng,concat(\'0\')::numeric vol_ogp_nodeb_jateng,
concat(\'0\')::numeric nilai_so_nodeb_jateng,concat(\'0\')::numeric vol_so_nodeb_jateng
FROM develop."RPB_REKON" a, develop."SAP" b
where SUBSTRING(a."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and a."PROGRAM" in (\'FIMO\')
and b."TGL_SAP"=current_date and a."BUDGET_SOURCE" !=\'DID\'
and a."BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and a."STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and a."STATUS_SO" is not null
group by a."PROGRAM") t
group by target_jatimb,target_jateng';
$get_nodeb=pg_query($sql_nodeb); 
?>
<tr style="background-color: #DFD;">
	<td><b>Fiber Modernization</b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
</tr>
<tr>
<?php
while($line_nodeb=pg_fetch_array($get_nodeb)){
	$target_nodeb=$line_nodeb['target_jatimb'];
?>
	<td style="color: blue"><b>Jatim Balnus TA</b></td>
	<td rowspan=3 style="text-align:right"><b><?php echo number_format($target_nodeb,0,',','.');?></b></td>
	<td rowspan=3 style="text-align:center"><b>Site</b></td>
	<?php 
	$nilai_nodeb_2022=41437210;
	$vol_nodeb_2022=1;
	$capex_vol_nodeb_2022=$nilai_nodeb_2022 / $vol_nodeb_2022;
	$po_nodeb_2022=0;
	$gr_nodeb_2022=0;
	$nilai_nodeb_2023=0;
	$vol_nodeb_2023=0;
	$capex_vol_nodeb_2023=$nilai_nodeb_2023 / $vol_nodeb_2023;
	$po_nodeb_2023=0;
	$gr_nodeb_2023=0;
	$nilai_nodeb_2024_jan=4464649256;
	$vol_nodeb_2024_jan=62;
	$capex_vol_nodeb_2024_jan=$nilai_nodeb_2024_jan / $vol_nodeb_2024_jan;
	$nilai_nodeb_2024_feb=7450912276;
	$vol_nodeb_2024_feb=47;
	$capex_vol_nodeb_2024_feb=$nilai_nodeb_2024_feb / $vol_nodeb_2024_feb;
	$nilai_nodeb_2024_mar=9504462099;
	$vol_nodeb_2024_mar=53;
	$capex_vol_nodeb_2024_mar=$nilai_nodeb_2024_mar / $vol_nodeb_2024_mar;
	$nilai_nodeb_2024_apr=2364851330;
	$vol_nodeb_2024_apr=16;
	$capex_vol_nodeb_2024_apr=$nilai_nodeb_2024_apr / $vol_nodeb_2024_apr;
	$nilai_nodeb_2024_mei=12814668667;
	$vol_nodeb_2024_mei=92;
	$capex_vol_nodeb_2024_mei=$nilai_nodeb_2024_mei / $vol_nodeb_2024_mei;
	$nilai_nodeb_2024_jun=$line_nodeb['nilai_nodeb_2024_jun_jatimb'];
	$vol_nodeb_2024_jun=$line_nodeb['vol_nodeb_2024_jun_jatimb'];
	$capex_vol_nodeb_2024_jun=$nilai_nodeb_2024_jun / $vol_nodeb_2024_jun;
	$nilai_nodeb_2024_jul=$line_nodeb['nilai_nodeb_2024_jul_jatimb'];
	$vol_nodeb_2024_jul=$line_nodeb['vol_nodeb_2024_jul_jatimb'];
	$capex_vol_nodeb_2024_jul=$nilai_nodeb_2024_jul / $vol_nodeb_2024_jul;
	$nilai_nodeb_2024_agt_jatimb=$line_nodeb['nilai_nodeb_2024_agt_jatimb'];
	$vol_nodeb_2024_agt_jatimb=$line_nodeb['vol_nodeb_2024_agt_jatimb'];
	$capex_vol_nodeb_2024_agt_jatimb=$nilai_nodeb_2024_agt_jatimb / $vol_nodeb_2024_agt_jatimb;
	$nilai_nodeb_2024_sept_jatimb=$line_nodeb['nilai_nodeb_2024_sept_jatimb'];
	$vol_nodeb_2024_sept_jatimb=$line_nodeb['vol_nodeb_2024_sept_jatimb'];
	$capex_vol_nodeb_2024_sept_jatimb=$nilai_nodeb_2024_sept_jatimb / $vol_nodeb_2024_sept_jatimb;
	
	$nilai_nodeb_2022_non=0;
	$vol_nodeb_2022_non=0;
	$capex_vol_nodeb_2022_non=$nilai_nodeb_2022_non / $vol_nodeb_2022_non;
	if(is_nan($capex_vol_nodeb_2022_non)){
		$capex_vol_nodeb_2022_non=0;
	}else{
		$capex_vol_nodeb_2022_non=$capex_vol_nodeb_2022_non;
	}
	$po_nodeb_2022_non=0;
	$gr_nodeb_2022_non=0;
	$nilai_nodeb_2023_non=0;
	$vol_nodeb_2023_non=0;
	$capex_vol_nodeb_2023_non=$nilai_nodeb_2023_non / $vol_nodeb_2023_non;
	if(is_nan($capex_vol_nodeb_2023_non)){
		$capex_vol_nodeb_2023_non=0;
	}else{
		$capex_vol_nodeb_2023_non=$capex_vol_nodeb_2023_non;
	}
	$po_nodeb_2023_non=0;
	$gr_nodeb_2023_non=0;
	$nilai_nodeb_2024_jan_non=0;
	$vol_nodeb_2024_jan_non=0;
	$capex_vol_nodeb_2024_jan_non=$nilai_nodeb_2024_jan_non / $vol_nodeb_2024_jan_non;
	if(is_nan($capex_vol_nodeb_2024_jan_non)){
		$capex_vol_nodeb_2024_jan_non=0;
	}else{
		$capex_vol_nodeb_2024_jan_non=$capex_vol_nodeb_2024_jan_non;
	}
	$nilai_nodeb_2024_feb_non=0;
	$vol_nodeb_2024_feb_non=0;
	$capex_vol_nodeb_2024_feb_non=$nilai_nodeb_2024_feb_non / $vol_nodeb_2024_feb_non;
	if(is_nan($capex_vol_nodeb_2024_feb_non)){
		$capex_vol_nodeb_2024_feb_non=0;
	}else{
		$capex_vol_nodeb_2024_feb_non=$capex_vol_nodeb_2024_feb_non;
	}
	$nilai_nodeb_2024_mar_non=526201450;
	$vol_nodeb_2024_mar_non=3;
	$capex_vol_nodeb_2024_mar_non=$nilai_nodeb_2024_mar_non / $vol_nodeb_2024_mar_non;
	if(is_nan($capex_vol_nodeb_2024_mar_non)){
		$capex_vol_nodeb_2024_mar_non=0;
	}else{
		$capex_vol_nodeb_2024_mar_non=$capex_vol_nodeb_2024_mar_non;
	}
	$nilai_nodeb_2024_apr_non=15869470908;
	$vol_nodeb_2024_apr_non=78;
	$capex_vol_nodeb_2024_apr_non=$nilai_nodeb_2024_apr_non / $vol_nodeb_2024_apr_non;
	if(is_nan($capex_vol_nodeb_2024_apr_non)){
		$capex_vol_nodeb_2024_apr_non=0;
	}else{
		$capex_vol_nodeb_2024_apr_non=$capex_vol_nodeb_2024_apr_non;
	}
	$nilai_nodeb_2024_mei_non=1053756805;
	$vol_nodeb_2024_mei_non=7;
	$capex_vol_nodeb_2024_mei_non=$nilai_nodeb_2024_mei_non / $vol_nodeb_2024_mei_non;
	if(is_nan($capex_vol_nodeb_2024_mei_non)){
		$capex_vol_nodeb_2024_mei_non=0;
	}else{
		$capex_vol_nodeb_2024_mei_non=$capex_vol_nodeb_2024_mei_non;
	}
	$nilai_nodeb_2024_jun_non=$line_nodeb['nilai_nodeb_2024_jun_non_jatimb'];
	$vol_nodeb_2024_jun_non=$line_nodeb['vol_nodeb_2024_jun_non_jatimb'];
	$capex_vol_nodeb_2024_jun_non=$nilai_nodeb_2024_jun_non / $vol_nodeb_2024_jun_non;
	if(is_nan($capex_vol_nodeb_2024_jun_non)){
		$capex_vol_nodeb_2024_jun_non=0;
	}else{
		$capex_vol_nodeb_2024_jun_non=$capex_vol_nodeb_2024_jun_non;
	}
	$nilai_nodeb_2024_jul_non=$line_nodeb['nilai_nodeb_2024_jul_non_jatimb'];
	$vol_nodeb_2024_jul_non=$line_nodeb['vol_nodeb_2024_jul_non_jatimb'];
	$capex_vol_nodeb_2024_jul_non=$nilai_nodeb_2024_jul_non / $vol_nodeb_2024_jul_non;
	if(is_nan($capex_vol_nodeb_2024_jul_non)){
		$capex_vol_nodeb_2024_jul_non=0;
	}else{
		$capex_vol_nodeb_2024_jul_non=$capex_vol_nodeb_2024_jul_non;
	}
	$nilai_nodeb_2024_agt_non_jatimb=$line_nodeb['nilai_nodeb_2024_agt_non_jatimb'];
	$vol_nodeb_2024_agt_non_jatimb=$line_nodeb['vol_nodeb_2024_agt_non_jatimb'];
	$capex_vol_nodeb_2024_agt_non_jatimb=$nilai_nodeb_2024_agt_non_jatimb / $vol_nodeb_2024_agt_non_jatimb;
	if(is_nan($capex_vol_nodeb_2024_agt_non_jatimb)){
		$capex_vol_nodeb_2024_agt_non_jatimb=0;
	}else{
		$capex_vol_nodeb_2024_agt_non_jatimb=$capex_vol_nodeb_2024_agt_non_jatimb;
	}
	$nilai_nodeb_2024_sept_non_jatimb=$line_nodeb['nilai_nodeb_2024_sept_non_jatimb'];
	$vol_nodeb_2024_sept_non_jatimb=$line_nodeb['vol_nodeb_2024_sept_non_jatimb'];
	$capex_vol_nodeb_2024_sept_non_jatimb=$nilai_nodeb_2024_sept_non_jatimb / $vol_nodeb_2024_sept_non_jatimb;
	if(is_nan($capex_vol_nodeb_2024_sept_non_jatimb)){
		$capex_vol_nodeb_2024_sept_non_jatimb=0;
	}else{
		$capex_vol_nodeb_2024_sept_non_jatimb=$capex_vol_nodeb_2024_sept_non_jatimb;
	}
	
	$nilai_nodeb_2022_tot=$nilai_nodeb_2022 + $nilai_nodeb_2022_non;
	$vol_nodeb_2022_tot=$vol_nodeb_2022 + $vol_nodeb_2022_non;
	$capex_vol_nodeb_2022_tot=$capex_vol_nodeb_2022 + $capex_vol_nodeb_2022_non;
	$po_nodeb_2022_tot=$po_nodeb_2022 + $po_nodeb_2022_non;
	$gr_nodeb_2022_tot=$gr_nodeb_2022 + $gr_nodeb_2022_non;
	$nilai_nodeb_2023_tot=$nilai_nodeb_2023 + $nilai_nodeb_2023_non;
	$vol_nodeb_2023_tot=$vol_nodeb_2023 + $vol_nodeb_2023_non;
	$capex_vol_nodeb_2023_tot=$nilai_nodeb_2023_tot / $vol_nodeb_2023_tot;
	$po_nodeb_2023_tot=$po_nodeb_2023 + $po_nodeb_2023_non;
	$gr_nodeb_2023_tot=$gr_nodeb_2023 + $gr_nodeb_2023_non;
	$nilai_nodeb_2024_jan_tot=$nilai_nodeb_2024_jan + $nilai_nodeb_2024_jan_non;
	$vol_nodeb_2024_jan_tot=$vol_nodeb_2024_jan + $vol_nodeb_2024_jan_non;
	$capex_vol_nodeb_2024_jan_tot=$nilai_nodeb_2024_jan_tot / $vol_nodeb_2024_jan_tot;
	$nilai_nodeb_2024_feb_tot=$nilai_nodeb_2024_feb + $nilai_nodeb_2024_feb_non;
	$vol_nodeb_2024_feb_tot=$vol_nodeb_2024_feb + $vol_nodeb_2024_feb_non;
	$capex_vol_nodeb_2024_feb_tot=$nilai_nodeb_2024_feb_tot / $vol_nodeb_2024_feb_tot;
	$nilai_nodeb_2024_mar_tot=$nilai_nodeb_2024_mar + $nilai_nodeb_2024_mar_non;
	$vol_nodeb_2024_mar_tot=$vol_nodeb_2024_mar + $vol_nodeb_2024_mar_non;
	$capex_vol_nodeb_2024_mar_tot=$nilai_nodeb_2024_mar_tot / $vol_nodeb_2024_mar_tot;
	$nilai_nodeb_2024_apr_tot=$nilai_nodeb_2024_apr + $nilai_nodeb_2024_apr_non;
	$vol_nodeb_2024_apr_tot=$vol_nodeb_2024_apr + $vol_nodeb_2024_apr_non;
	$capex_vol_nodeb_2024_apr_tot=$nilai_nodeb_2024_apr_tot / $vol_nodeb_2024_apr_tot;
	$nilai_nodeb_2024_mei_tot=$nilai_nodeb_2024_mei + $nilai_nodeb_2024_mei_non;
	$vol_nodeb_2024_mei_tot=$vol_nodeb_2024_mei + $vol_nodeb_2024_mei_non;
	$capex_vol_nodeb_2024_mei_tot=$nilai_nodeb_2024_mei_tot / $vol_nodeb_2024_mei_tot;
	$nilai_nodeb_2024_jun_tot=$nilai_nodeb_2024_jun + $nilai_nodeb_2024_jun_non;
	$vol_nodeb_2024_jun_tot=$vol_nodeb_2024_jun + $vol_nodeb_2024_jun_non;
	$capex_vol_nodeb_2024_jun_tot=$nilai_nodeb_2024_jun_tot / $vol_nodeb_2024_jun_tot;
	$nilai_nodeb_2024_jul_tot=$nilai_nodeb_2024_jul + $nilai_nodeb_2024_jul_non;
	$vol_nodeb_2024_jul_tot=$vol_nodeb_2024_jul + $vol_nodeb_2024_jul_non;
	$capex_vol_nodeb_2024_jul_tot=$nilai_nodeb_2024_jul_tot / $vol_nodeb_2024_jul_tot;
	$nilai_nodeb_2024_agt_tot_jatimb=$nilai_nodeb_2024_agt_jatimb + $nilai_nodeb_2024_agt_non_jatimb;
	$vol_nodeb_2024_agt_tot_jatimb=$vol_nodeb_2024_agt_jatimb + $vol_nodeb_2024_agt_non_jatimb;
	$capex_vol_nodeb_2024_agt_tot_jatimb=$nilai_nodeb_2024_agt_tot_jatimb / $vol_nodeb_2024_agt_tot_jatimb;
	$nilai_nodeb_2024_sept_tot_jatimb=$nilai_nodeb_2024_sept_jatimb + $nilai_nodeb_2024_sept_non_jatimb;
	$vol_nodeb_2024_sept_tot_jatimb=$vol_nodeb_2024_sept_jatimb + $vol_nodeb_2024_sept_non_jatimb;
	$capex_vol_nodeb_2024_sept_tot_jatimb=$nilai_nodeb_2024_sept_tot_jatimb / $vol_nodeb_2024_sept_tot_jatimb;
	
	$po_nodeb_2024_jan_mei=3835432355;
	$gr_nodeb_2024_jan_mei=3388114063;
	$po_nodeb_2024=$po_nodeb_2024_jan_mei + $line_nodeb['po_nodeb_2024_jatimb'];
	$gr_nodeb_2024=$gr_nodeb_2024_jan_mei + $line_nodeb['gr_nodeb_2024_jatimb'];
	
	$po_nodeb_2024_non=$line_nodeb['po_nodeb_2024_non_jatimb'];
	$gr_nodeb_2024_non=$line_nodeb['gr_nodeb_2024_non_jatimb'];
	
	$po_nodeb_2024_tot=$po_nodeb_2024 + $po_nodeb_2024_non;
	$gr_nodeb_2024_tot=$gr_nodeb_2024 + $gr_nodeb_2024_non;
	$tot_nilai_nodeb=$nilai_nodeb_2022+$nilai_nodeb_2023+$nilai_nodeb_2024_jan+$nilai_nodeb_2024_feb+$nilai_nodeb_2024_mar+$nilai_nodeb_2024_apr+$nilai_nodeb_2024_mei+$nilai_nodeb_2024_jun+$nilai_nodeb_2024_jul+$nilai_nodeb_2024_agt_jatimb+$nilai_nodeb_2024_sept_jatimb;
	$tot_vol_nodeb=$vol_nodeb_2022+$vol_nodeb_2023+$vol_nodeb_2024_jan+$vol_nodeb_2024_feb+$vol_nodeb_2024_mar+$vol_nodeb_2024_apr+$vol_nodeb_2024_mei+$vol_nodeb_2024_jun+$vol_nodeb_2024_jul+$vol_nodeb_2024_agt_jatimb+$vol_nodeb_2024_sept_jatimb;
	
	$tot_capex_vol_nodeb=$tot_nilai_nodeb / $tot_vol_nodeb;
	$tot_nilai_nodeb_non=$nilai_nodeb_2022_non+$nilai_nodeb_2023_non+$nilai_nodeb_2024_jan_non+$nilai_nodeb_2024_feb_non+$nilai_nodeb_2024_mar_non+$nilai_nodeb_2024_apr_non+$nilai_nodeb_2024_mei_non+$nilai_nodeb_2024_jun_non+$nilai_nodeb_2024_jul_non+$nilai_nodeb_2024_agt_non_jatimb+$nilai_nodeb_2024_sept_non_jatimb;
	$tot_vol_nodeb_non=$vol_nodeb_2022_non+$vol_nodeb_2023_non+$vol_nodeb_2024_jan_non+$vol_nodeb_2024_feb_non+$vol_nodeb_2024_mar_non+$vol_nodeb_2024_apr_non+$vol_nodeb_2024_mei_non+$vol_nodeb_2024_jun_non+$vol_nodeb_2024_jul_non+$vol_nodeb_2024_agt_non_jatimb+$vol_nodeb_2024_sept_non_jatimb;
	
	$tot_capex_vol_nodeb_non=$tot_nilai_nodeb_non / $tot_vol_nodeb_non;

	$tot_po_nodeb=$po_nodeb_2022+$po_nodeb_2023+$po_nodeb_2024;
	$tot_gr_nodeb=$gr_nodeb_2022+$gr_nodeb_2023+$gr_nodeb_2024;
	$tot_nilai_nodeb_tot=$tot_nilai_nodeb+$tot_nilai_nodeb_non;
	$tot_vol_nodeb_tot=$tot_vol_nodeb+$tot_vol_nodeb_non;
	$tot_capex_vol_nodeb_tot=$tot_capex_vol_nodeb+$tot_capex_vol_nodeb_non;
	$tot_po_nodeb_tot=$tot_po_nodeb+$tot_po_nodeb_non;
	$tot_gr_nodeb_tot=$tot_gr_nodeb+$tot_gr_nodeb_non;
	
	$persen_tot_po_gr_nodeb=($tot_gr_nodeb / $tot_po_nodeb) *100;
	$persen_tot_po_nilai_nodeb=($tot_po_nodeb / $tot_nilai_nodeb) *100;
	$persen_tot_po_gr_nodeb_non=($tot_gr_nodeb_non / $tot_po_nodeb_non) *100;
	if(is_nan($persen_tot_po_gr_nodeb_non)){
		$persen_tot_po_gr_nodeb_non=0;
	}else{
		$persen_tot_po_gr_nodeb_non=$persen_tot_po_gr_nodeb_non;
	}
	$persen_tot_po_nilai_nodeb_non=($tot_po_nodeb_non / $tot_nilai_nodeb_non) *100;
	
	$sisa_target_totpo_nodeb=$target_nodeb - $tot_po_nodeb;
	$sisa_vol_nodeb=$sisa_target_totpo_nodeb / $tot_capex_vol_nodeb;
	$sisa_target_totpo_nodeb_non=$target_nodeb - $tot_po_nodeb_non;
	$sisa_vol_nodeb_non=$sisa_target_totpo_nodeb_non / $tot_capex_vol_nodeb_non;
	
	$tot_persen_tot_po_gr_nodeb=$persen_tot_po_gr_nodeb + $persen_tot_po_gr_nodeb_non;
	$tot_persen_tot_po_nilai_nodeb=$persen_tot_po_nilai_nodeb + $persen_tot_po_nilai_nodeb_non;
	$tot_sisa_target_totpo_nodeb=$sisa_target_totpo_nodeb + $sisa_target_totpo_nodeb_non;
	$tot_sisa_vol_nodeb=$sisa_vol_nodeb + $sisa_vol_nodeb_non;
	
	$nilai_ogp_nodeb=$line_nodeb['nilai_ogp_nodeb_jatimb'];
	$vol_ogp_nodeb=$line_nodeb['vol_ogp_nodeb_jatimb'];
	$capex_vol_ogp_nodeb=$nilai_ogp_nodeb / $vol_ogp_nodeb;
	
	$nilai_outlook_nodeb=46452706126;
	$vol_outlook_nodeb=$nilai_outlook_nodeb / $tot_capex_vol_nodeb;
	$capex_vol_outlook_nodeb=$nilai_outlook_nodeb / $vol_outlook_nodeb;
	
	$nilai_ogp_nodeb_non=$line_nodeb['nilai_ogp_nodeb_non_jatimb'];
	$vol_ogp_nodeb_non=$line_nodeb['vol_ogp_nodeb_non_jatimb'];
	$capex_vol_ogp_nodeb_non=$nilai_ogp_nodeb_non / $vol_ogp_nodeb_non;
	if(is_nan($capex_vol_ogp_nodeb_non)){
		$capex_vol_ogp_nodeb_non=0;
	}else{
		$capex_vol_ogp_nodeb_non=$capex_vol_ogp_nodeb_non;
	}
	
	$nilai_outlook_nodeb_non=0;
	$vol_outlook_nodeb_non=$nilai_outlook_nodeb_non / $tot_capex_vol_nodeb_non;
	$capex_vol_outlook_nodeb_non=$nilai_outlook_nodeb_non / $vol_outlook_nodeb_non;
	if(is_nan($capex_vol_outlook_nodeb_non)){
		$capex_vol_outlook_nodeb_non=0;
	}else{
		$capex_vol_outlook_nodeb_non=$capex_vol_outlook_nodeb_non;
	}
	
	$tot_nilai_ogp_nodeb=$nilai_ogp_nodeb + $nilai_ogp_nodeb_non;
	$tot_vol_ogp_nodeb=$vol_ogp_nodeb + $vol_ogp_nodeb_non;
	$tot_capex_vol_ogp_nodeb=$tot_nilai_ogp_nodeb / $tot_vol_ogp_nodeb;
	
	$tot_nilai_outlook_nodeb=$nilai_outlook_nodeb + $nilai_outlook_nodeb_non;
	$tot_vol_outlook_nodeb=$vol_outlook_nodeb + $vol_outlook_nodeb_non;
	$tot_capex_vol_outlook_nodeb=$tot_nilai_outlook_nodeb / $tot_vol_outlook_nodeb;
	
	$nilai_so_nodeb_jatimb=$line_nodeb['nilai_so_nodeb_jatimb'];
	$vol_so_nodeb_jatimb=$line_nodeb['vol_so_nodeb_jatimb'];
	$capex_vol_so_nodeb_jatimb=$nilai_so_nodeb_jatimb / $vol_so_nodeb_jatimb;

	$nilai_so_nodeb_non_jatimb=$line_nodeb['nilai_so_nodeb_non_jatimb'];
	$vol_so_nodeb_non_jatimb=$line_nodeb['vol_so_nodeb_non_jatimb'];
	$capex_vol_so_nodeb_non_jatimb=$nilai_so_nodeb_non_jatimb / $vol_so_nodeb_non_jatimb;
	if(is_nan($capex_vol_so_nodeb_non_jatimb)){
		$capex_vol_so_nodeb_non_jatimb=0;
	}else{
		$capex_vol_so_nodeb_non_jatimb=$capex_vol_so_nodeb_non_jatimb;
	}

	$tot_nilai_so_nodeb_jatimb=$nilai_so_nodeb_jatimb + $nilai_so_nodeb_non_jatimb;
	$tot_vol_so_nodeb_jatimb=$vol_so_nodeb_jatimb + $vol_so_nodeb_non_jatimb;
	$tot_capex_vol_so_nodeb_jatimb=$tot_nilai_so_nodeb_jatimb / $tot_vol_so_nodeb_jatimb;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2022,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_nodeb_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_nodeb_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2023,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_nodeb_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_nodeb_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_jan,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_feb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_mar,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_apr,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_mei,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_jun,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_jul,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_nodeb_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_nodeb_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_nodeb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_nodeb,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_nodeb,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_nodeb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_nodeb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_nodeb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_nodeb_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_nodeb_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_nodeb_jatimb,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr>
	<td style="color: blue"><b>Jatim Balnus NON TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2022_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_nodeb_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_nodeb_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2023_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_nodeb_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_nodeb_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_feb_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_feb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_feb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_apr_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_apr_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_apr_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_jun_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_jun_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_jun_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_jul_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_jul_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_jul_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_agt_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_agt_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_agt_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_sept_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_sept_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_sept_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_nodeb_2024_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_nodeb_2024_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_nodeb_non,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_nodeb_non,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_nodeb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_nodeb_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_nodeb_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_nodeb_non_jatimb,0,',','.');?></b></td>
</tr>
<tr>
	<td style="color: blue"><b>Jatim Balnus All Mitra</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2022_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_nodeb_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_nodeb_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2023_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_nodeb_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_nodeb_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_feb_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_feb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_feb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_mar_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_mar_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_mar_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_mei_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_mei_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_mei_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_jun_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_jun_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_jun_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_jul_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_jul_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_jul_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_agt_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_agt_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_agt_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_sept_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_sept_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_sept_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_nodeb_2024_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_nodeb_2024_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_nodeb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_nodeb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_nodeb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_nodeb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_nodeb_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_persen_tot_po_gr_nodeb,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_persen_tot_po_nilai_nodeb,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_sisa_target_totpo_nodeb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_sisa_vol_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_ogp_nodeb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_ogp_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_ogp_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_outlook_nodeb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_outlook_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_outlook_nodeb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_so_nodeb_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_so_nodeb_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_so_nodeb_jatimb,0,',','.');?></b></td>
</tr>
<tr>
<?php
$get_nodeb=pg_query($sql_nodeb);
while($line_nodeb=pg_fetch_array($get_nodeb)){
	$target_nodeb_jateng=$line_nodeb['target_jateng'];
?>
	<td style="color: blue"><b>Jateng TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b>Site</b></td>
	<?php 
	$nilai_nodeb_2022_jateng=0;
	$vol_nodeb_2022=0;
	$capex_vol_nodeb_2022_jateng=$nilai_nodeb_2022_jateng / $vol_nodeb_2022_jateng;
	if(is_nan($capex_vol_nodeb_2022_jateng)){
		$capex_vol_nodeb_2022_jateng=0;
	}else{
		$capex_vol_nodeb_2022_jateng=$capex_vol_nodeb_jateng_2022;
	}
	$nilai_nodeb_2023_jateng=0;
	$vol_nodeb_2023_jateng=0;
	$capex_vol_nodeb_2023_jateng=0;
	$nilai_nodeb_2024_jan_jateng=419422470;
	$vol_nodeb_2024_jan_jateng=14;
	$capex_vol_nodeb_2024_jan_jateng=29958748;
	$nilai_nodeb_2024_feb_jateng=0;
	$vol_nodeb_2024_feb_jateng=0;
	$capex_vol_nodeb_2024_feb_jateng=0;
	$nilai_nodeb_2024_mar_jateng=28209007;
	$vol_nodeb_2024_mar_jateng=2;
	$capex_vol_nodeb_2024_mar_jateng=14104504;
	$nilai_nodeb_2024_apr_jateng=20028173;
	$vol_nodeb_2024_apr_jateng=1;
	$capex_vol_nodeb_2024_apr_jateng=20028173;
	$nilai_nodeb_2024_mei_jateng=8932106873;
	$vol_nodeb_2024_mei_jateng=50;
	$capex_vol_nodeb_2024_mei_jateng=178642137;
	$nilai_nodeb_2024_jun_jateng=$line_nodeb['nilai_nodeb_2024_jun_jateng'];
	$vol_nodeb_2024_jun_jateng=$line_nodeb['vol_nodeb_2024_jun_jateng'];
	$capex_vol_nodeb_2024_jun_jateng=$nilai_nodeb_2024_jun_jateng / $vol_nodeb_2024_jun_jateng;
	$nilai_nodeb_2024_jul_jateng=$line_nodeb['nilai_nodeb_2024_jul_jateng'];
	$vol_nodeb_2024_jul_jateng=$line_nodeb['vol_nodeb_2024_jul_jateng'];
	$capex_vol_nodeb_2024_jul_jateng=$nilai_nodeb_2024_jul_jateng / $vol_nodeb_2024_jul_jateng;
	$nilai_nodeb_2024_agt_jateng=$line_nodeb['nilai_nodeb_2024_agt_jateng'];
	$vol_nodeb_2024_agt_jateng=$line_nodeb['vol_nodeb_2024_agt_jateng'];
	$capex_vol_nodeb_2024_agt_jateng=$nilai_nodeb_2024_agt_jateng / $vol_nodeb_2024_agt_jateng;
	$nilai_nodeb_2024_sept_jateng=$line_nodeb['nilai_nodeb_2024_sept_jateng'];
	$vol_nodeb_2024_sept_jateng=$line_nodeb['vol_nodeb_2024_sept_jateng'];
	$capex_vol_nodeb_2024_sept_jateng=$nilai_nodeb_2024_sept_jateng / $vol_nodeb_2024_sept_jateng;
	$tot_nilai_nodeb_jateng=$nilai_nodeb_2022_jateng+$nilai_nodeb_2023_jateng+$nilai_nodeb_2024_jan_jateng+$nilai_nodeb_2024_feb_jateng+$nilai_nodeb_2024_mar_jateng+$nilai_nodeb_2024_apr_jateng+$nilai_nodeb_2024_mei_jateng+$nilai_nodeb_2024_jun_jateng+$nilai_nodeb_2024_jul_jateng+$nilai_nodeb_2024_agt_jateng+$nilai_nodeb_2024_sept_jateng;
	
	$tot_vol_nodeb_jateng=$vol_nodeb_2022_jateng+$vol_nodeb_2023_jateng+$vol_nodeb_2024_jan_jateng+$vol_nodeb_2024_feb_jateng+$vol_nodeb_2024_mar_jateng+$vol_nodeb_2024_apr_jateng+$vol_nodeb_2024_mei_jateng+$vol_nodeb_2024_jun_jateng+$vol_nodeb_2024_jul_jateng+$vol_nodeb_2024_agt_jateng+$vol_nodeb_2024_sept_jateng;
	
	$tot_capex_vol_nodeb_jateng=$tot_nilai_nodeb_jateng / $tot_vol_nodeb_jateng;
	
	$po_nodeb_2022_jateng=0;
	$gr_nodeb_2022_jateng=0;
	$po_nodeb_2023_jateng=0;
	$gr_nodeb_2023_jateng=0;
	$po_nodeb_2024_jan_mei_jateng=25580559211;
	$gr_nodeb_2024_jan_mei_jateng=25580559211;
	$po_nodeb_2024_jateng=$po_nodeb_2024_jan_mei_jateng + $line_nodeb['po_nodeb_2024_jateng'];
	$gr_nodeb_2024_jateng=$gr_nodeb_2024_jan_mei_jateng + $line_nodeb['gr_nodeb_2024_jateng'];
	
	$tot_po_nodeb_jateng=$po_nodeb_2022_jateng+$po_nodeb_2023_jateng+$po_nodeb_2024_jateng;
	$tot_gr_nodeb_jateng=$gr_nodeb_2022_jateng+$gr_nodeb_2023_jateng+$gr_nodeb_2024_jateng;
	
	$persen_tot_po_gr_nodeb_jateng=($tot_gr_nodeb_jateng / $tot_po_nodeb_jateng) *100;
	$persen_tot_po_nilai_nodeb_jateng=($tot_po_nodeb_jateng / $tot_nilai_nodeb_jateng) *100;
	
	$sisa_target_totpo_nodeb_jateng=$target_nodeb_jateng - $tot_po_nodeb_jateng;
	$sisa_vol_nodeb_jateng=$sisa_target_totpo_nodeb_jateng / $tot_capex_vol_nodeb_jateng;
	
	$nilai_ogp_nodeb_jateng=$line_nodeb['nilai_ogp_nodeb_jateng'];
	$vol_ogp_nodeb_jateng=$line_nodeb['vol_ogp_nodeb_jateng'];
	$capex_vol_ogp_nodeb_jateng=$nilai_ogp_nodeb_jateng / $vol_ogp_nodeb_jateng;
	
	$nilai_outlook_nodeb_jateng=11417152857;
	$vol_outlook_nodeb_jateng=$nilai_outlook_nodeb_jateng / $tot_capex_vol_nodeb_jateng;
	$capex_vol_outlook_nodeb_jateng=$nilai_outlook_nodeb_jateng / $vol_outlook_nodeb_jateng;
	
	$nilai_so_nodeb_jateng=$line_nodeb['nilai_so_nodeb_jateng'];
	$vol_so_nodeb_jateng=$line_nodeb['vol_so_nodeb_jateng'];
	$capex_vol_so_nodeb_jateng=$nilai_so_nodeb_jateng / $vol_so_nodeb_jateng;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_nodeb_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_nodeb_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_nodeb_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_nodeb_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_nodeb_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_nodeb_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_nodeb_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_nodeb_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_nodeb_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_nodeb_jateng,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_nodeb_jateng,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_nodeb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_nodeb_jateng,0,',','.');?></b></td>
<?php } ?>
</tr>
<?php 
$sql_olo='select (select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-5361-32-01-I\') target_jatimb,
(select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-4361-32-01-I\') target_jateng,
sum(nilai_olo_2024_jun_jatimb) nilai_olo_2024_jun_jatimb,sum(vol_olo_2024_jun_jatimb) vol_olo_2024_jun_jatimb,
sum(nilai_olo_2024_jul_jatimb) nilai_olo_2024_jul_jatimb,sum(vol_olo_2024_jul_jatimb) vol_olo_2024_jul_jatimb,
sum(nilai_olo_2024_agt_jatimb) nilai_olo_2024_agt_jatimb,sum(vol_olo_2024_agt_jatimb) vol_olo_2024_agt_jatimb,
sum(nilai_olo_2024_sept_jatimb) nilai_olo_2024_sept_jatimb,sum(vol_olo_2024_sept_jatimb) vol_olo_2024_sept_jatimb,
sum(po_olo_2024_jatimb) po_olo_2024_jatimb,sum(gr_olo_2024_jatimb) gr_olo_2024_jatimb,
sum(nilai_ogp_olo_jatimb) nilai_ogp_olo_jatimb,sum(vol_ogp_olo_jatimb) vol_ogp_olo_jatimb,
sum(nilai_so_olo_jatimb) nilai_so_olo_jatimb,sum(vol_so_olo_jatimb) vol_so_olo_jatimb,
sum(nilai_olo_2024_jun_non_jatimb) nilai_olo_2024_jun_non_jatimb,sum(vol_olo_2024_jun_non_jatimb) vol_olo_2024_jun_non_jatimb,
sum(nilai_olo_2024_jul_non_jatimb) nilai_olo_2024_jul_non_jatimb,sum(vol_olo_2024_jul_non_jatimb) vol_olo_2024_jul_non_jatimb,
sum(nilai_olo_2024_agt_non_jatimb) nilai_olo_2024_agt_non_jatimb,sum(vol_olo_2024_agt_non_jatimb) vol_olo_2024_agt_non_jatimb,
sum(nilai_olo_2024_sept_non_jatimb) nilai_olo_2024_sept_non_jatimb,sum(vol_olo_2024_sept_non_jatimb) vol_olo_2024_sept_non_jatimb,
sum(po_olo_2024_non_jatimb) po_olo_2024_non_jatimb,sum(gr_olo_2024_non_jatimb) gr_olo_2024_non_jatimb,
sum(nilai_ogp_olo_non_jatimb) nilai_ogp_olo_non_jatimb,sum(vol_ogp_olo_non_jatimb) vol_ogp_olo_non_jatimb,
sum(nilai_so_olo_non_jatimb) nilai_so_olo_non_jatimb,sum(vol_so_olo_non_jatimb) vol_so_olo_non_jatimb,
sum(nilai_olo_2024_jun_jateng) nilai_olo_2024_jun_jateng,sum(vol_olo_2024_jun_jateng) vol_olo_2024_jun_jateng,
sum(nilai_olo_2024_jul_jateng) nilai_olo_2024_jul_jateng,sum(vol_olo_2024_jul_jateng) vol_olo_2024_jul_jateng,
sum(nilai_olo_2024_agt_jateng) nilai_olo_2024_agt_jateng,sum(vol_olo_2024_agt_jateng) vol_olo_2024_agt_jateng,
sum(nilai_olo_2024_sept_jateng) nilai_olo_2024_sept_jateng,sum(vol_olo_2024_sept_jateng) vol_olo_2024_sept_jateng,
sum(po_olo_2024_jateng) po_olo_2024_jateng,sum(gr_olo_2024_jateng) gr_olo_2024_jateng,
sum(nilai_ogp_olo_jateng) nilai_ogp_olo_jateng,sum(vol_ogp_olo_jateng) vol_ogp_olo_jateng,
sum(nilai_so_olo_jateng) nilai_so_olo_jateng,sum(vol_so_olo_jateng) vol_so_olo_jateng
from
(select "PROGRAM",
concat(\'0\')::numeric nilai_olo_2024_jun_jatimb,
concat(\'0\')::numeric nilai_olo_2024_jul_jatimb,
concat(\'0\')::numeric nilai_olo_2024_agt_jatimb,
concat(\'0\')::numeric nilai_olo_2024_sept_jatimb,
concat(\'0\')::numeric vol_olo_2024_jun_jatimb,
concat(\'0\')::numeric vol_olo_2024_jul_jatimb,
concat(\'0\')::numeric vol_olo_2024_agt_jatimb,
concat(\'0\')::numeric vol_olo_2024_sept_jatimb,
concat(\'0\')::numeric nilai_olo_2024_jun_non_jatimb,
concat(\'0\')::numeric nilai_olo_2024_jul_non_jatimb,
concat(\'0\')::numeric nilai_olo_2024_agt_non_jatimb,
concat(\'0\')::numeric nilai_olo_2024_sept_non_jatimb,
concat(\'0\')::numeric vol_olo_2024_jun_non_jatimb,
concat(\'0\')::numeric vol_olo_2024_jul_non_jatimb,
concat(\'0\')::numeric vol_olo_2024_agt_non_jatimb,
concat(\'0\')::numeric vol_olo_2024_sept_non_jatimb,
concat(\'0\')::bigint po_olo_2024_jatimb,concat(\'0\')::bigint gr_olo_2024_jatimb,
concat(\'0\')::bigint po_olo_2024_non_jatimb,concat(\'0\')::bigint gr_olo_2024_non_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_olo_jatimb,
sum(case when "KET_MITRA" !=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_olo_non_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_olo_jatimb,
sum(case when "KET_MITRA" !=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_olo_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_olo_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_olo_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_olo_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_olo_non_jatimb,
concat(\'0\')::numeric nilai_olo_2024_jun_jateng,
concat(\'0\')::numeric nilai_olo_2024_jul_jateng,
concat(\'0\')::numeric nilai_olo_2024_agt_jateng,
concat(\'0\')::numeric nilai_olo_2024_sept_jateng,
concat(\'0\')::numeric vol_olo_2024_jun_jateng,
concat(\'0\')::numeric vol_olo_2024_jul_jateng,
concat(\'0\')::numeric vol_olo_2024_agt_jateng,
concat(\'0\')::numeric vol_olo_2024_sept_jateng,
concat(\'0\')::bigint po_olo_2024_jateng,concat(\'0\')::bigint gr_olo_2024_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_olo_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\' 
then 1 else 0 end) vol_ogp_olo_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_olo_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_olo_jateng
FROM develop."RPB_REKON"
where "PROGRAM" in (\'OLO\') and "BUDGET_SOURCE" !=\'DID\' 
and "BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and "STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and "STATUS_SO" is not null
group by "PROGRAM"
union all
select a."PROGRAM",
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_olo_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_olo_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_olo_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_olo_2024_sept_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_olo_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_olo_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_olo_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_olo_2024_sept_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5361-32-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_olo_2024_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5361-32-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_olo_2024_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_olo_2024_jun_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_olo_2024_jul_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_olo_2024_agt_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_olo_2024_sept_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_olo_2024_jun_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_olo_2024_jul_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_olo_2024_agt_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_olo_2024_sept_non_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA" !=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5361-32-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_olo_2024_non_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA" !=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5361-32-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_olo_2024_non_jatimb,
concat(\'0\')::numeric nilai_ogp_olo_jatimb,concat(\'0\')::numeric vol_ogp_olo_jatimb,
concat(\'0\')::numeric nilai_ogp_olo_non_jatimb,concat(\'0\')::numeric vol_ogp_olo_non_jatimb,
concat(\'0\')::numeric nilai_so_olo_jatimb,concat(\'0\')::numeric vol_so_olo_jatimb,
concat(\'0\')::numeric nilai_so_olo_non_jatimb,concat(\'0\')::numeric vol_so_olo_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_olo_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_olo_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_olo_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_olo_2024_sept_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_olo_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_olo_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_olo_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_olo_2024_sept_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4361-32-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_olo_2024_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4361-32-01-I\'  
then b."LOCAL_AMOUNT_GR" else 0 end) gr_olo_2024_jateng,
concat(\'0\')::numeric nilai_ogp_olo_jateng,concat(\'0\')::numeric vol_ogp_olo_jateng,
concat(\'0\')::numeric nilai_so_olo_jateng,concat(\'0\')::numeric vol_so_olo_jateng
FROM develop."RPB_REKON" a, develop."SAP" b
where SUBSTRING(a."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and a."PROGRAM" in (\'OLO\')
and b."TGL_SAP"=current_date and a."BUDGET_SOURCE" !=\'DID\'
and a."BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and a."STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and a."STATUS_SO" is not null
group by a."PROGRAM") t
group by target_jatimb,target_jateng';
$get_olo=pg_query($sql_olo); 
?>
<tr style="background-color: #DFD;">
	<td><b>OLO</b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
</tr>
<tr>
<?php
while($line_olo=pg_fetch_array($get_olo)){
	$target_olo=$line_olo['target_jatimb'];
?>
	<td style="color: blue"><b>Jatim Balnus TA</b></td>
	<td rowspan=3 style="text-align:right"><b><?php echo number_format($target_olo,0,',','.');?></b></td>
	<td rowspan=3 style="text-align:center"><b>LoP</b></td>
	<?php 
	$nilai_olo_2022=0;
	$vol_olo_2022=0;
	$capex_vol_olo_2022=$nilai_olo_2022 / $vol_olo_2022;
	if(is_nan($capex_vol_olo_2022)){
		$capex_vol_olo_2022=0;
	}else{
		$capex_vol_olo_2022=$capex_vol_olo_2022;
	}
	$nilai_olo_2023=27516986;
	$vol_olo_2023=40;
	$capex_vol_olo_2023=$nilai_olo_2023 / $vol_olo_2023;
	if(is_nan($capex_vol_olo_2023)){
		$capex_vol_olo_2023=0;
	}else{
		$capex_vol_olo_2023=$capex_vol_olo_2023;
	}
	$nilai_olo_2024_jan=0;
	$vol_olo_2024_jan=0;
	$capex_vol_olo_2024_jan=$nilai_olo_2024_jan / $vol_olo_2024_jan;
	if(is_nan($capex_vol_olo_2024_jan)){
		$capex_vol_olo_2024_jan=0;
	}else{
		$capex_vol_olo_2024_jan=$capex_vol_olo_2024_jan;
	}
	$nilai_olo_2024_feb=0;
	$vol_olo_2024_feb=0;
	$capex_vol_olo_2024_feb=$nilai_olo_2024_feb / $vol_olo_2024_feb;
	if(is_nan($capex_vol_olo_2024_feb)){
		$capex_vol_olo_2024_feb=0;
	}else{
		$capex_vol_olo_2024_feb=$capex_vol_olo_2024_feb;
	}
	$nilai_olo_2024_mar=0;
	$vol_olo_2024_mar=0;
	$capex_vol_olo_2024_mar=$nilai_olo_2024_mar / $vol_olo_2024_mar;
	if(is_nan($capex_vol_olo_2024_mar)){
		$capex_vol_olo_2024_mar=0;
	}else{
		$capex_vol_olo_2024_mar=$capex_vol_olo_2024_mar;
	}
	$nilai_olo_2024_apr=0;
	$vol_olo_2024_apr=0;
	$capex_vol_olo_2024_apr=$nilai_olo_2024_apr / $vol_olo_2024_apr;
	if(is_nan($capex_vol_olo_2024_apr)){
		$capex_vol_olo_2024_apr=0;
	}else{
		$capex_vol_olo_2024_apr=$capex_vol_olo_2024_apr;
	}
	$nilai_olo_2024_mei=51074720;
	$vol_olo_2024_mei=1;
	$capex_vol_olo_2024_mei=$nilai_olo_2024_mei / $vol_olo_2024_mei;
	if(is_nan($capex_vol_olo_2024_mei)){
		$capex_vol_olo_2024_mei=0;
	}else{
		$capex_vol_olo_2024_mei=$capex_vol_olo_2024_mei;
	}
	$nilai_olo_2024_jun=$line_olo['nilai_olo_2024_jun_jatimb'];
	$vol_olo_2024_jun=$line_olo['vol_olo_2024_jun_jatimb'];
	$capex_vol_olo_2024_jun=$nilai_olo_2024_jun / $vol_olo_2024_jun;
	if(is_nan($capex_vol_olo_2024_jun)){
		$capex_vol_olo_2024_jun=0;
	}else{
		$capex_vol_olo_2024_jun=$capex_vol_olo_2024_jun;
	}
	$nilai_olo_2024_jul=$line_olo['nilai_olo_2024_jul_jatimb'];
	$vol_olo_2024_jul=$line_olo['vol_olo_2024_jul_jatimb'];
	$capex_vol_olo_2024_jul=$nilai_olo_2024_jul / $vol_olo_2024_jul;
	if(is_nan($capex_vol_olo_2024_jul)){
		$capex_vol_olo_2024_jul=0;
	}else{
		$capex_vol_olo_2024_jul=$capex_vol_olo_2024_jul;
	}
	$nilai_olo_2024_agt_jatimb=$line_olo['nilai_olo_2024_agt_jatimb'];
	$vol_olo_2024_agt_jatimb=$line_olo['vol_olo_2024_agt_jatimb'];
	$capex_vol_olo_2024_agt_jatimb=$nilai_olo_2024_agt_jatimb / $vol_olo_2024_agt_jatimb;
	if(is_nan($capex_vol_olo_2024_agt_jatimb)){
		$capex_vol_olo_2024_agt_jatimb=0;
	}else{
		$capex_vol_olo_2024_agt_jatimb=$capex_vol_olo_2024_agt_jatimb;
	}
	$nilai_olo_2024_sept_jatimb=$line_olo['nilai_olo_2024_sept_jatimb'];
	$vol_olo_2024_sept_jatimb=$line_olo['vol_olo_2024_sept_jatimb'];
	$capex_vol_olo_2024_sept_jatimb=$nilai_olo_2024_sept_jatimb / $vol_olo_2024_sept_jatimb;
	if(is_nan($capex_vol_olo_2024_sept_jatimb)){
		$capex_vol_olo_2024_sept_jatimb=0;
	}else{
		$capex_vol_olo_2024_sept_jatimb=$capex_vol_olo_2024_sept_jatimb;
	}
	$po_olo_2022=0;
	$gr_olo_2022=0;
	$po_olo_2023=1140660961;
	$gr_olo_2023=0;
	$po_olo_2024_jan_mei=0;
	$gr_olo_2024_jan_mei=0;
	$po_olo_2024=$po_olo_2024_jan_mei + $line_olo['po_olo_2024_jatimb'];
	$gr_olo_2024=$gr_olo_2024_jan_mei + $line_olo['gr_olo_2024_jatimb'];
	
	$nilai_olo_2022_non=0;
	$vol_olo_2022_non=0;
	$capex_vol_olo_2022_non=$nilai_olo_2022_non / $vol_olo_2022_non;
	if(is_nan($capex_vol_olo_2022_non)){
		$capex_vol_olo_2022_non=0;
	}else{
		$capex_vol_olo_2022_non=$capex_vol_olo_2022_non;
	}
	$nilai_olo_2023_non=0;
	$vol_olo_2023_non=0;
	$capex_vol_olo_2023_non=$nilai_olo_2023_non / $vol_olo_2023_non;
	if(is_nan($capex_vol_olo_2023_non)){
		$capex_vol_olo_2023_non=0;
	}else{
		$capex_vol_olo_2023_non=$capex_vol_olo_2023_non;
	}
	$nilai_olo_2024_jan_non=0;
	$vol_olo_2024_jan_non=0;
	$capex_vol_olo_2024_jan_non=$nilai_olo_2024_jan_non / $vol_olo_2024_jan_non;
	if(is_nan($capex_vol_olo_2024_jan_non)){
		$capex_vol_olo_2024_jan_non=0;
	}else{
		$capex_vol_olo_2024_jan_non=$capex_vol_olo_2024_jan_non;
	}
	$nilai_olo_2024_feb_non=0;
	$vol_olo_2024_feb_non=0;
	$capex_vol_olo_2024_feb_non=$nilai_olo_2024_feb_non / $vol_olo_2024_feb_non;
	if(is_nan($capex_vol_olo_2024_feb_non)){
		$capex_vol_olo_2024_feb_non=0;
	}else{
		$capex_vol_olo_2024_feb_non=$capex_vol_olo_2024_feb_non;
	}
	$nilai_olo_2024_mar_non=0;
	$vol_olo_2024_mar_non=0;
	$capex_vol_olo_2024_mar_non=$nilai_olo_2024_mar_non / $vol_olo_2024_mar_non;
	if(is_nan($capex_vol_olo_2024_mar_non)){
		$capex_vol_olo_2024_mar_non=0;
	}else{
		$capex_vol_olo_2024_mar_non=$capex_vol_olo_2024_mar_non;
	}
	$nilai_olo_2024_apr_non=40604970;
	$vol_olo_2024_apr_non=1;
	$capex_vol_olo_2024_apr_non=$nilai_olo_2024_apr_non / $vol_olo_2024_apr_non;
	if(is_nan($capex_vol_olo_2024_apr_non)){
		$capex_vol_olo_2024_apr_non=0;
	}else{
		$capex_vol_olo_2024_apr_non=$capex_vol_olo_2024_apr_non;
	}
	$nilai_olo_2024_mei_non=0;
	$vol_olo_2024_mei_non=0;
	$capex_vol_olo_2024_mei_non=$nilai_olo_2024_mei_non / $vol_olo_2024_mei_non;
	if(is_nan($capex_vol_olo_2024_mei_non)){
		$capex_vol_olo_2024_mei_non=0;
	}else{
		$capex_vol_olo_2024_mei_non=$capex_vol_olo_2024_mei_non;
	}
	$nilai_olo_2024_jun_non=$line_olo['nilai_olo_2024_jun_non_jatimb'];
	$vol_olo_2024_jun_non=$line_olo['vol_olo_2024_jun_non_jatimb'];
	$capex_vol_olo_2024_jun_non=$nilai_olo_2024_jun_non / $vol_olo_2024_jun_non;
	if(is_nan($capex_vol_olo_2024_jun_non)){
		$capex_vol_olo_2024_jun_non=0;
	}else{
		$capex_vol_olo_2024_jun_non=$capex_vol_olo_2024_jun_non;
	}
	$nilai_olo_2024_jul_non=$line_olo['nilai_olo_2024_jul_non_jatimb'];
	$vol_olo_2024_jul_non=$line_olo['vol_olo_2024_jul_non_jatimb'];
	$capex_vol_olo_2024_jul_non=$nilai_olo_2024_jul_non / $vol_olo_2024_jul_non;
	if(is_nan($capex_vol_olo_2024_jul_non)){
		$capex_vol_olo_2024_jul_non=0;
	}else{
		$capex_vol_olo_2024_jul_non=$capex_vol_olo_2024_jul_non;
	}
	$nilai_olo_2024_agt_non_jatimb=$line_olo['nilai_olo_2024_agt_non_jatimb'];
	$vol_olo_2024_agt_non_jatimb=$line_olo['vol_olo_2024_agt_non_jatimb'];
	$capex_vol_olo_2024_agt_non_jatimb=$nilai_olo_2024_agt_non_jatimb / $vol_olo_2024_agt_non_jatimb;
	if(is_nan($capex_vol_olo_2024_agt_non_jatimb)){
		$capex_vol_olo_2024_agt_non_jatimb=0;
	}else{
		$capex_vol_olo_2024_agt_non_jatimb=$capex_vol_olo_2024_agt_non_jatimb;
	}
	$nilai_olo_2024_sept_non_jatimb=$line_olo['nilai_olo_2024_sept_non_jatimb'];
	$vol_olo_2024_sept_non_jatimb=$line_olo['vol_olo_2024_sept_non_jatimb'];
	$capex_vol_olo_2024_sept_non_jatimb=$nilai_olo_2024_sept_non_jatimb / $vol_olo_2024_sept_non_jatimb;
	if(is_nan($capex_vol_olo_2024_sept_non_jatimb)){
		$capex_vol_olo_2024_sept_non_jatimb=0;
	}else{
		$capex_vol_olo_2024_sept_non_jatimb=$capex_vol_olo_2024_sept_non_jatimb;
	}
	
	$nilai_olo_2022_tot=$nilai_olo_2022 + $nilai_olo_2022_non;
	$vol_olo_2022_tot=$vol_olo_2022 + $vol_olo_2022_non;
	$capex_vol_olo_2022_tot=$capex_vol_olo_2022 + $capex_vol_olo_2022_non;
	$po_olo_2022_tot=$po_olo_2022 + $po_olo_2022_non;
	$gr_olo_2022_tot=$gr_olo_2022 + $gr_olo_2022_non;
	$nilai_olo_2023_tot=$nilai_olo_2023 + $nilai_olo_2023_non;
	$vol_olo_2023_tot=$vol_olo_2023 + $vol_olo_2023_non;
	$capex_vol_olo_2023_tot=$nilai_olo_2023_tot / $vol_olo_2023_tot;
	$po_olo_2023_tot=$po_olo_2023 + $po_olo_2023_non;
	$gr_olo_2023_tot=$gr_olo_2023 + $gr_olo_2023_non;
	$nilai_olo_2024_jan_tot=$nilai_olo_2024_jan + $nilai_olo_2024_jan_non;
	$vol_olo_2024_jan_tot=$vol_olo_2024_jan + $vol_olo_2024_jan_non;
	$capex_vol_olo_2024_jan_tot=$nilai_olo_2024_jan_tot / $vol_olo_2024_jan_tot;
	$nilai_olo_2024_feb_tot=$nilai_olo_2024_feb + $nilai_olo_2024_feb_non;
	$vol_olo_2024_feb_tot=$vol_olo_2024_feb + $vol_olo_2024_feb_non;
	$capex_vol_olo_2024_feb_tot=$nilai_olo_2024_feb_tot / $vol_olo_2024_feb_tot;
	$nilai_olo_2024_mar_tot=$nilai_olo_2024_mar + $nilai_olo_2024_mar_non;
	$vol_olo_2024_mar_tot=$vol_olo_2024_mar + $vol_olo_2024_mar_non;
	$capex_vol_olo_2024_mar_tot=$nilai_olo_2024_mar_tot / $vol_olo_2024_mar_tot;
	$nilai_olo_2024_apr_tot=$nilai_olo_2024_apr + $nilai_olo_2024_apr_non;
	$vol_olo_2024_apr_tot=$vol_olo_2024_apr + $vol_olo_2024_apr_non;
	$capex_vol_olo_2024_apr_tot=$nilai_olo_2024_apr_tot / $vol_olo_2024_apr_tot;
	$nilai_olo_2024_mei_tot=$nilai_olo_2024_mei + $nilai_olo_2024_mei_non;
	$vol_olo_2024_mei_tot=$vol_olo_2024_mei + $vol_olo_2024_mei_non;
	$capex_vol_olo_2024_mei_tot=$nilai_olo_2024_mei_tot / $vol_olo_2024_mei_tot;
	$nilai_olo_2024_jun_tot=$nilai_olo_2024_jun + $nilai_olo_2024_jun_non;
	$vol_olo_2024_jun_tot=$vol_olo_2024_jun + $vol_olo_2024_jun_non;
	$capex_vol_olo_2024_jun_tot=$nilai_olo_2024_jun_tot / $vol_olo_2024_jun_tot;
	$nilai_olo_2024_jul_tot=$nilai_olo_2024_jul + $nilai_olo_2024_jul_non;
	$vol_olo_2024_jul_tot=$vol_olo_2024_jul + $vol_olo_2024_jul_non;
	$capex_vol_olo_2024_jul_tot=$nilai_olo_2024_jul_tot / $vol_olo_2024_jul_tot;
	$nilai_olo_2024_agt_tot_jatimb=$nilai_olo_2024_agt_jatimb + $nilai_olo_2024_agt_non_jatimb;
	$vol_olo_2024_agt_tot_jatimb=$vol_olo_2024_agt_jatimb + $vol_olo_2024_agt_non_jatimb;
	$capex_vol_olo_2024_agt_tot_jatimb=$nilai_olo_2024_agt_tot_jatimb / $vol_olo_2024_agt_tot_jatimb;
	$nilai_olo_2024_sept_tot_jatimb=$nilai_olo_2024_sept_jatimb + $nilai_olo_2024_sept_non_jatimb;
	$vol_olo_2024_sept_tot_jatimb=$vol_olo_2024_sept_jatimb + $vol_olo_2024_sept_non_jatimb;
	$capex_vol_olo_2024_sept_tot_jatimb=$nilai_olo_2024_sept_tot_jatimb / $vol_olo_2024_sept_tot_jatimb;
	
	$po_olo_2022_non=0;
	$gr_olo_2022_non=0;
	$po_olo_2023_non=0;
	$gr_olo_2023_non=0;
	$po_olo_2024_non=$line_olo['po_olo_2024_non_jatimb'];
	$gr_olo_2024_non=$line_olo['gr_olo_2024_non_jatimb'];
	$tot_nilai_olo=$nilai_olo_2022+$nilai_olo_2023+$nilai_olo_2024_jan+$nilai_olo_2024_feb+$nilai_olo_2024_mar+$nilai_olo_2024_apr+$nilai_olo_2024_mei+$nilai_olo_2024_jun+$nilai_olo_2024_jul+$nilai_olo_2024_agt_jatimb+$nilai_olo_2024_sept_jatimb;
	$tot_vol_olo=$vol_olo_2022+$vol_olo_2023+$vol_olo_2024_jan+$vol_olo_2024_feb+$vol_olo_2024_mar+$vol_olo_2024_apr+$vol_olo_2024_mei+$vol_olo_2024_jun+$vol_olo_2024_jul+$vol_olo_2024_agt_jatimb+$vol_olo_2024_sept_jatimb;
	
	$tot_capex_vol_olo=$tot_nilai_olo / $tot_vol_olo;
	$tot_nilai_olo_non=$nilai_olo_2022_non+$nilai_olo_2023_non+$nilai_olo_2024_jan_non+$nilai_olo_2024_feb_non+$nilai_olo_2024_mar_non+$nilai_olo_2024_apr_non+$nilai_olo_2024_mei_non+$nilai_olo_2024_jun_non+$nilai_olo_2024_jul_non+$nilai_olo_2024_agt_non_jatimb+$nilai_olo_2024_sept_non_jatimb;
	$tot_vol_olo_non=$vol_olo_2022_non+$vol_olo_2023_non+$vol_olo_2024_jan_non+$vol_olo_2024_feb_non+$vol_olo_2024_mar_non+$vol_olo_2024_apr_non+$vol_olo_2024_mei_non+$vol_olo_2024_jun_non+$vol_olo_2024_jul_non+$vol_olo_2024_agt_non_jatimb+$vol_olo_2024_sept_non_jatimb;
	
	$tot_capex_vol_olo_non=$tot_nilai_olo_non / $tot_vol_olo_non;

	$tot_po_olo=$po_olo_2022+$po_olo_2023+$po_olo_2024;
	$tot_gr_olo=$gr_olo_2022+$gr_olo_2023+$gr_olo_2024;
	$tot_nilai_olo_tot=$tot_nilai_olo + $tot_nilai_olo_non;
	$tot_vol_olo_tot=$tot_vol_olo+$tot_vol_olo_non;
	$tot_capex_vol_olo_tot=$tot_capex_vol_olo+$tot_capex_vol_olo_non;
	$tot_po_olo_tot=$tot_po_olo+$tot_po_olo_non;
	$tot_gr_olo_tot=$tot_gr_olo+$tot_gr_olo_non;
	
	$persen_tot_po_gr_olo=($tot_gr_olo / $tot_po_olo) *100;
	$persen_tot_po_nilai_olo=($tot_po_olo / $tot_nilai_olo) *100;
	$persen_tot_po_gr_olo_non=($tot_gr_olo_non / $tot_po_olo_non) *100;
	if(is_nan($persen_tot_po_gr_olo_non)){
		$persen_tot_po_gr_olo_non=0;
	}else{
		$persen_tot_po_gr_olo_non=$persen_tot_po_gr_olo_non;
	}
	$persen_tot_po_nilai_olo_non=($tot_po_olo_non / $tot_nilai_olo_non) *100;
	
	$sisa_target_totpo_olo=$target_olo - $tot_po_olo;
	$sisa_vol_olo=$sisa_target_totpo_olo / $tot_capex_vol_olo;
	$sisa_target_totpo_olo_non=$target_olo - $tot_po_olo_non;
	$sisa_vol_olo_non=$sisa_target_totpo_olo_non / $tot_capex_vol_olo_non;
	
	$tot_persen_tot_po_gr_olo=$persen_tot_po_gr_olo + $persen_tot_po_gr_olo_non;
	$tot_persen_tot_po_nilai_olo=$persen_tot_po_nilai_olo + $persen_tot_po_nilai_olo_non;
	$tot_sisa_target_totpo_olo=$sisa_target_totpo_olo + $sisa_target_totpo_olo_non;
	$tot_sisa_vol_olo=$sisa_vol_olo + $sisa_vol_olo_non;
	
	$nilai_ogp_olo=$line_olo['nilai_ogp_olo_jatimb'];
	$vol_ogp_olo=$line_olo['vol_ogp_olo_jatimb'];
	$capex_vol_ogp_olo=$nilai_ogp_olo / $vol_ogp_olo;
	
	$nilai_outlook_olo=2480141714;
	$vol_outlook_olo=$nilai_outlook_olo / $tot_capex_vol_olo;
	$capex_vol_outlook_olo=$nilai_outlook_olo / $vol_outlook_olo;
	
	$nilai_ogp_olo_non=$line_olo['nilai_ogp_olo_non_jatimb'];
	$vol_ogp_olo_non=$line_olo['vol_ogp_olo_non_jatimb'];
	$capex_vol_ogp_olo_non=$nilai_ogp_olo_non / $vol_ogp_olo_non;
	if(is_nan($capex_vol_ogp_olo_non)){
		$capex_vol_ogp_olo_non=0;
	}else{
		$capex_vol_ogp_olo_non=$capex_vol_ogp_olo_non;
	}
	
	$nilai_outlook_olo_non=0;
	$vol_outlook_olo_non=$nilai_outlook_olo_non / $tot_capex_vol_olo_non;
	$capex_vol_outlook_olo_non=$nilai_outlook_olo_non / $vol_outlook_olo_non;
	if(is_nan($capex_vol_outlook_olo_non)){
		$capex_vol_outlook_olo_non=0;
	}else{
		$capex_vol_outlook_olo_non=$capex_vol_outlook_olo_non;
	}
	
	$tot_nilai_ogp_olo=$nilai_ogp_olo + $nilai_ogp_olo_non;
	$tot_vol_ogp_olo=$vol_ogp_olo + $vol_ogp_olo_non;
	$tot_capex_vol_ogp_olo=$tot_nilai_ogp_olo / $tot_vol_ogp_olo;
	
	$tot_nilai_outlook_olo=$nilai_outlook_olo + $nilai_outlook_olo_non;
	$tot_vol_outlook_olo=$vol_outlook_olo + $vol_outlook_olo_non;
	$tot_capex_vol_outlook_olo=$tot_nilai_outlook_olo / $tot_vol_outlook_olo;
	
	$nilai_so_olo_jatimb=$line_olo['nilai_so_olo_jatimb'];
	$vol_so_olo_jatimb=$line_olo['vol_so_olo_jatimb'];
	$capex_vol_so_olo_jatimb=$nilai_so_olo_jatimb / $vol_so_olo_jatimb;

	$nilai_so_olo_non_jatimb=$line_olo['nilai_so_olo_non_jatimb'];
	$vol_so_olo_non_jatimb=$line_olo['vol_so_olo_non_jatimb'];
	$capex_vol_so_olo_non_jatimb=$nilai_so_olo_non_jatimb / $vol_so_olo_non_jatimb;
	if(is_nan($capex_vol_so_olo_non_jatimb)){
		$capex_vol_so_olo_non_jatimb=0;
	}else{
		$capex_vol_so_olo_non_jatimb=$capex_vol_so_olo_non_jatimb;
	}

	$tot_nilai_so_olo_jatimb=$nilai_so_olo_jatimb + $nilai_so_olo_non_jatimb;
	$tot_vol_so_olo_jatimb=$vol_so_olo_jatimb + $vol_so_olo_non_jatimb;
	$tot_capex_vol_so_olo_jatimb=$tot_nilai_so_olo_jatimb / $tot_vol_so_olo_jatimb;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2022,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_olo_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_olo_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2023,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_olo_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_olo_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_jan,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_feb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_mar,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_apr,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_mei,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_jun,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_jul,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_olo_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_olo_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_olo,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_olo,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_olo,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_olo,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_olo,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_olo,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_olo_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_olo_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_olo_jatimb,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr>
	<td style="color: blue"><b>Jatim Balnus NON TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2022_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_olo_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_olo_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2023_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_olo_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_olo_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_feb_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_feb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_feb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_apr_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_apr_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_apr_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_jun_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_jun_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_jun_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_jul_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_jul_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_jul_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_agt_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_agt_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_agt_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_sept_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_sept_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_sept_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_olo_2024_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_olo_2024_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_olo_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_olo_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_olo_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_olo_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_olo_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_olo_non,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_olo_non,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_olo_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_olo_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_olo_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_olo_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_olo_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_olo_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_olo_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_olo_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_olo_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_olo_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_olo_non_jatimb,0,',','.');?></b></td>
</tr>
<tr>
	<td style="color: blue"><b>Jatim Balnus All Mitra</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2022_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_olo_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_olo_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2023_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_olo_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_olo_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_feb_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_feb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_feb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_mar_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_mar_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_mar_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_mei_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_mei_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_mei_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_jun_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_jun_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_jun_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_jul_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_jul_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_jul_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_agt_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_agt_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_agt_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_sept_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_sept_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_sept_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_olo_2024_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_olo_2024_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_olo_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_olo_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_olo_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_olo_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_olo_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_persen_tot_po_gr_olo,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_persen_tot_po_nilai_olo,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_sisa_target_totpo_olo,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_sisa_vol_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_ogp_olo,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_ogp_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_ogp_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_outlook_olo,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_outlook_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_outlook_olo,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_so_olo_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_so_olo_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_so_olo_jatimb,0,',','.');?></b></td>
</tr>
<tr>
<?php
$get_olo=pg_query($sql_olo);
while($line_olo=pg_fetch_array($get_olo)){
	$target_olo_jateng=$line_olo['target_jateng'];
?>
	<td style="color: blue"><b>Jateng TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b>LoP</b></td>
	<?php 
	$nilai_olo_2022_jateng=0;
	$vol_olo_2022=0;
	$capex_vol_olo_2022_jateng=$nilai_olo_2022_jateng / $vol_olo_2022_jateng;
	if(is_nan($capex_vol_olo_2022_jateng)){
		$capex_vol_olo_2022_jateng=0;
	}else{
		$capex_vol_olo_2022_jateng=$capex_vol_olo_jateng_2022;
	}
	$nilai_olo_2023_jateng=0;
	$vol_olo_2023_jateng=0;
	$capex_vol_olo_2023_jateng=0;
	$nilai_olo_2024_jan_jateng=470941429;
	$vol_olo_2024_jan_jateng=36;
	$capex_vol_olo_2024_jan_jateng=13081706;
	$nilai_olo_2024_feb_jateng=169823558;
	$vol_olo_2024_feb_jateng=11;
	$capex_vol_olo_2024_feb_jateng=15438505;
	$nilai_olo_2024_mar_jateng=462319434;
	$vol_olo_2024_mar_jateng=13;
	$capex_vol_olo_2024_mar_jateng=35563033;
	$nilai_olo_2024_apr_jateng=293204295;
	$vol_olo_2024_apr_jateng=10;
	$capex_vol_olo_2024_apr_jateng=29320430;
	$nilai_olo_2024_mei_jateng=119787807;
	$vol_olo_2024_mei_jateng=8;
	$capex_vol_olo_2024_mei_jateng=14973476;
	$nilai_olo_2024_jun_jateng=$line_olo['nilai_olo_2024_jun_jateng'];
	$vol_olo_2024_jun_jateng=$line_olo['vol_olo_2024_jun_jateng'];
	$capex_vol_olo_2024_jun_jateng=$nilai_olo_2024_jun_jateng / $vol_olo_2024_jun_jateng;
	$nilai_olo_2024_jul_jateng=$line_olo['nilai_olo_2024_jul_jateng'];
	$vol_olo_2024_jul_jateng=$line_olo['vol_olo_2024_jul_jateng'];
	$capex_vol_olo_2024_jul_jateng=$nilai_olo_2024_jul_jateng / $vol_olo_2024_jul_jateng;
	$nilai_olo_2024_agt_jateng=$line_olo['nilai_olo_2024_agt_jateng'];
	$vol_olo_2024_agt_jateng=$line_olo['vol_olo_2024_agt_jateng'];
	$capex_vol_olo_2024_agt_jateng=$nilai_olo_2024_agt_jateng / $vol_olo_2024_agt_jateng;
	$nilai_olo_2024_sept_jateng=$line_olo['nilai_olo_2024_sept_jateng'];
	$vol_olo_2024_sept_jateng=$line_olo['vol_olo_2024_sept_jateng'];
	$capex_vol_olo_2024_sept_jateng=$nilai_olo_2024_sept_jateng / $vol_olo_2024_sept_jateng;
	$tot_nilai_olo_jateng=$nilai_olo_2022_jateng+$nilai_olo_2023_jateng+$nilai_olo_2024_jan_jateng+$nilai_olo_2024_feb_jateng+$nilai_olo_2024_mar_jateng+$nilai_olo_2024_apr_jateng+$nilai_olo_2024_mei_jateng+$nilai_olo_2024_jun_jateng+$nilai_olo_2024_jul_jateng+$nilai_olo_2024_agt_jateng+$nilai_olo_2024_sept_jateng;
	
	$tot_vol_olo_jateng=$vol_olo_2022_jateng+$vol_olo_2023_jateng+$vol_olo_2024_jan_jateng+$vol_olo_2024_feb_jateng+$vol_olo_2024_mar_jateng+$vol_olo_2024_apr_jateng+$vol_olo_2024_mei_jateng+$vol_olo_2024_jun_jateng+$vol_olo_2024_jul_jateng+$vol_olo_2024_agt_jateng+$vol_olo_2024_sept_jateng;
	
	$tot_capex_vol_olo_jateng=$tot_nilai_olo_jateng / $tot_vol_olo_jateng;
	
	$po_olo_2022_jateng=0;
	$gr_olo_2022_jateng=0;
	$po_olo_2023_jateng=0;
	$gr_olo_2023_jateng=0;
	$po_olo_2024_jan_mei_jateng=886045039;
	$gr_olo_2024_jan_mei_jateng=142083241;
	$po_olo_2024_jateng=$po_olo_2024_jan_mei_jateng + $line_olo['po_olo_2024_jateng'];
	$gr_olo_2024_jateng=$gr_olo_2024_jan_mei_jateng + $line_olo['gr_olo_2024_jateng'];
	
	$tot_po_olo_jateng=$po_olo_2022_jateng+$po_olo_2023_jateng+$po_olo_2024_jateng;
	$tot_gr_olo_jateng=$gr_olo_2022_jateng+$gr_olo_2023_jateng+$gr_olo_2024_jateng;
	
	$persen_tot_po_gr_olo_jateng=($tot_gr_olo_jateng / $tot_po_olo_jateng) *100;
	$persen_tot_po_nilai_olo_jateng=($tot_po_olo_jateng / $tot_nilai_olo_jateng) *100;
	
	$sisa_target_totpo_olo_jateng=$target_olo_jateng - $tot_po_olo_jateng;
	$sisa_vol_olo_jateng=$sisa_target_totpo_olo_jateng / $tot_capex_vol_olo_jateng;
	
	$nilai_ogp_olo_jateng=$line_olo['nilai_ogp_olo_jateng'];
	$vol_ogp_olo_jateng=$line_olo['vol_ogp_olo_jateng'];
	$capex_vol_ogp_olo_jateng=$nilai_ogp_olo_jateng / $vol_ogp_olo_jateng;
	
	$nilai_outlook_olo_jateng=1516076525;
	$vol_outlook_olo_jateng=$nilai_outlook_olo_jateng / $tot_capex_vol_olo_jateng;
	$capex_vol_outlook_olo_jateng=$nilai_outlook_olo_jateng / $vol_outlook_olo_jateng;
	
	$nilai_so_olo_jateng=$line_olo['nilai_so_olo_jateng'];
	$vol_so_olo_jateng=$line_olo['vol_so_olo_jateng'];
	$capex_vol_so_olo_jateng=$nilai_so_olo_jateng / $vol_so_olo_jateng;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_olo_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_olo_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_olo_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_olo_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_olo_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_olo_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_olo_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_olo_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_olo_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_olo_jateng,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_olo_jateng,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_olo_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_olo_jateng,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr style="background-color: aqua;">
	<td><b><center>QE</center></b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
	</tr>
<tr style="background-color: #DFD;">
	<td><b>QE KURATIF</b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
</tr>
<?php 
$sql_qekura='select (select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-5801-28-01-I\') target_jatimb,
(select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-4801-28-01-I\') target_jateng,
sum(nilai_qekura_2024_jun_jatimb) nilai_qekura_2024_jun_jatimb,sum(vol_qekura_2024_jun_jatimb) vol_qekura_2024_jun_jatimb,
sum(nilai_qekura_2024_jul_jatimb) nilai_qekura_2024_jul_jatimb,sum(vol_qekura_2024_jul_jatimb) vol_qekura_2024_jul_jatimb,
sum(nilai_qekura_2024_agt_jatimb) nilai_qekura_2024_agt_jatimb,sum(vol_qekura_2024_agt_jatimb) vol_qekura_2024_agt_jatimb,
sum(nilai_qekura_2024_sept_jatimb) nilai_qekura_2024_sept_jatimb,sum(vol_qekura_2024_sept_jatimb) vol_qekura_2024_sept_jatimb,
sum(po_qekura_2024_jatimb) po_qekura_2024_jatimb,sum(gr_qekura_2024_jatimb) gr_qekura_2024_jatimb,
sum(nilai_ogp_qekura_jatimb) nilai_ogp_qekura_jatimb,sum(vol_ogp_qekura_jatimb) vol_ogp_qekura_jatimb,
sum(nilai_so_qekura_jatimb) nilai_so_qekura_jatimb,sum(vol_so_qekura_jatimb) vol_so_qekura_jatimb,
sum(nilai_qekura_2024_jun_jateng) nilai_qekura_2024_jun_jateng,sum(vol_qekura_2024_jun_jateng) vol_qekura_2024_jun_jateng,
sum(nilai_qekura_2024_jul_jateng) nilai_qekura_2024_jul_jateng,sum(vol_qekura_2024_jul_jateng) vol_qekura_2024_jul_jateng,
sum(nilai_qekura_2024_agt_jateng) nilai_qekura_2024_agt_jateng,sum(vol_qekura_2024_agt_jateng) vol_qekura_2024_agt_jateng,
sum(nilai_qekura_2024_sept_jateng) nilai_qekura_2024_sept_jateng,sum(vol_qekura_2024_sept_jateng) vol_qekura_2024_sept_jateng,
sum(po_qekura_2024_jateng) po_qekura_2024_jateng,sum(gr_qekura_2024_jateng) gr_qekura_2024_jateng,
sum(nilai_ogp_qekura_jateng) nilai_ogp_qekura_jateng,sum(vol_ogp_qekura_jateng) vol_ogp_qekura_jateng,
sum(nilai_so_qekura_jateng) nilai_so_qekura_jateng,sum(vol_so_qekura_jateng) vol_so_qekura_jateng
from
(select "PROGRAM",
concat(\'0\')::numeric nilai_qekura_2024_jun_jatimb,
concat(\'0\')::numeric nilai_qekura_2024_jul_jatimb,
concat(\'0\')::numeric nilai_qekura_2024_agt_jatimb,
concat(\'0\')::numeric nilai_qekura_2024_sept_jatimb,
concat(\'0\')::numeric vol_qekura_2024_jun_jatimb,
concat(\'0\')::numeric vol_qekura_2024_jul_jatimb,
concat(\'0\')::numeric vol_qekura_2024_agt_jatimb,
concat(\'0\')::numeric vol_qekura_2024_sept_jatimb,
concat(\'0\')::bigint po_qekura_2024_jatimb,concat(\'0\')::bigint gr_qekura_2024_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_qekura_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_qekura_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_qekura_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_qekura_jatimb,
concat(\'0\')::numeric nilai_qekura_2024_jun_jateng,
concat(\'0\')::numeric nilai_qekura_2024_jul_jateng,
concat(\'0\')::numeric nilai_qekura_2024_agt_jateng,
concat(\'0\')::numeric nilai_qekura_2024_sept_jateng,
concat(\'0\')::numeric vol_qekura_2024_jun_jateng,
concat(\'0\')::numeric vol_qekura_2024_jul_jateng,
concat(\'0\')::numeric vol_qekura_2024_agt_jateng,
concat(\'0\')::numeric vol_qekura_2024_sept_jateng,
concat(\'0\')::bigint po_qekura_2024_jateng,concat(\'0\')::bigint gr_qekura_2024_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_qekura_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\' 
then 1 else 0 end) vol_ogp_qekura_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_qekura_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_qekura_jateng
FROM develop."RPB_REKON"
where "PROGRAM" in (\'QE KURATIF\') and "BUDGET_SOURCE" !=\'DID\' 
and "BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and "STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and "STATUS_SO" is not null
group by "PROGRAM"
union all
select a."PROGRAM",
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qekura_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qekura_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qekura_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qekura_2024_sept_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qekura_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qekura_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qekura_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qekura_2024_sept_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5801-28-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_qekura_2024_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5801-28-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_qekura_2024_jatimb,
concat(\'0\')::numeric nilai_ogp_qekura_jatimb,concat(\'0\')::numeric vol_ogp_qekura_jatimb,
concat(\'0\')::numeric nilai_so_qekura_jatimb,concat(\'0\')::numeric vol_so_qekura_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qekura_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qekura_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qekura_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qekura_2024_sept_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qekura_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qekura_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qekura_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qekura_2024_sept_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4801-28-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_qekura_2024_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4801-28-01-I\'  
then b."LOCAL_AMOUNT_GR" else 0 end) gr_qekura_2024_jateng,
concat(\'0\')::numeric nilai_ogp_qekura_jateng,concat(\'0\')::numeric vol_ogp_qekura_jateng,
concat(\'0\')::numeric nilai_so_qekura_jateng,concat(\'0\')::numeric vol_so_qekura_jateng
FROM develop."RPB_REKON" a, develop."SAP" b
where SUBSTRING(a."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and a."PROGRAM" in (\'QE KURATIF\')
and b."TGL_SAP"=current_date and a."BUDGET_SOURCE" !=\'DID\'
and a."BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and a."STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and a."STATUS_SO" is not null
group by a."PROGRAM") t
group by target_jatimb,target_jateng';
$get_qekura=pg_query($sql_qekura); 
?>
<tr>
<?php
while($line_qekura=pg_fetch_array($get_qekura)){
	$target_qekura=$line_qekura['target_jatimb'];
?>
	<td style="color: blue"><b>Jatim Balnus TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_qekura,0,',','.');?></b></td>
	<td style="text-align:center"><b>LoP</b></td>
	<?php 
	$nilai_qekura_2022=530846721;
	$vol_qekura_2022=1;
	$capex_vol_qekura_2022=$nilai_qekura_2022 / $vol_qekura_2022;
	$po_qekura_2022=0;
	$gr_qekura_2022=0;
	$nilai_qekura_2023=0;
	$vol_qekura_2023=0;
	$capex_vol_qekura_2023=$nilai_qekura_2023 / $vol_qekura_2023;
	if(is_nan($capex_vol_qekura_2023)){
		$capex_vol_qekura_2023=0;
	}else{
		$capex_vol_qekura_2023=$capex_vol_qekura_2023;
	}
	$po_qekura_2023=0;
	$gr_qekura_2023=0;
	$nilai_qekura_2024_jan=40479670;
	$vol_qekura_2024_jan=351;
	$capex_vol_qekura_2024_jan=$nilai_qekura_2024_jan / $vol_qekura_2024_jan;
	$nilai_qekura_2024_feb=414020;
	$vol_qekura_2024_feb=274;
	$capex_vol_qekura_2024_feb=$nilai_qekura_2024_feb / $vol_qekura_2024_feb;
	$nilai_qekura_2024_mar=1346531068;
	$vol_qekura_2024_mar=210;
	$capex_vol_qekura_2024_mar=$nilai_qekura_2024_mar / $vol_qekura_2024_mar;
	$nilai_qekura_2024_apr=37428058;
	$vol_qekura_2024_apr=183;
	$capex_vol_qekura_2024_apr=$nilai_qekura_2024_apr / $vol_qekura_2024_apr;
	$nilai_qekura_2024_mei=1427178912;
	$vol_qekura_2024_mei=63;
	$capex_vol_qekura_2024_mei=$nilai_qekura_2024_mei / $vol_qekura_2024_mei;
	$nilai_qekura_2024_jun=$line_qekura['nilai_qekura_2024_jun_jatimb'];
	$vol_qekura_2024_jun=$line_qekura['vol_qekura_2024_jun_jatimb'];
	$capex_vol_qekura_2024_jun=$nilai_qekura_2024_jun / $vol_qekura_2024_jun;
	$nilai_qekura_2024_jul=$line_qekura['nilai_qekura_2024_jul_jatimb'];
	$vol_qekura_2024_jul=$line_qekura['vol_qekura_2024_jul_jatimb'];
	$capex_vol_qekura_2024_jul=$nilai_qekura_2024_jul / $vol_qekura_2024_jul;
	$nilai_qekura_2024_agt_jatimb=$line_qekura['nilai_qekura_2024_agt_jatimb'];
	$vol_qekura_2024_agt_jatimb=$line_qekura['vol_qekura_2024_agt_jatimb'];
	$capex_vol_qekura_2024_agt_jatimb=$nilai_qekura_2024_agt_jatimb / $vol_qekura_2024_agt_jatimb;
	$nilai_qekura_2024_sept_jatimb=$line_qekura['nilai_qekura_2024_sept_jatimb'];
	$vol_qekura_2024_sept_jatimb=$line_qekura['vol_qekura_2024_sept_jatimb'];
	$capex_vol_qekura_2024_sept_jatimb=$nilai_qekura_2024_sept_jatimb / $vol_qekura_2024_sept_jatimb;
	
	$po_qekura_2024_jan_mei=25041610;
	$gr_qekura_2024_jan_mei=0;
	$po_qekura_2024=$po_qekura_2024_jan_mei + $line_qekura['po_qekura_2024_jatimb'];
	$gr_qekura_2024=$gr_qekura_2024_jan_mei + $line_qekura['gr_qekura_2024_jatimb'];
	
	$tot_nilai_qekura=$nilai_qekura_2022+$nilai_qekura_2023+$nilai_qekura_2024_jan+$nilai_qekura_2024_feb+$nilai_qekura_2024_mar+$nilai_qekura_2024_mei+$nilai_qekura_2024_jun+$nilai_qekura_2024_jul+$nilai_qekura_2024_agt_jatimb+$nilai_qekura_2024_sept_jatimb;
	$tot_vol_qekura=$vol_qekura_2022+$vol_qekura_2023+$vol_qekura_2024_jan+$vol_qekura_2024_feb+$vol_qekura_2024_mar+$vol_qekura_2024_apr+$vol_qekura_2024_mei+$vol_qekura_2024_jun+$vol_qekura_2024_jul+$vol_qekura_2024_agt_jatimb+$vol_qekura_2024_sept_jatimb;
	
	$tot_capex_vol_qekura=$tot_nilai_qekura / $tot_vol_qekura;

	$tot_po_qekura=$po_qekura_2022+$po_qekura_2023+$po_qekura_2024;
	$tot_gr_qekura=$gr_qekura_2022+$gr_qekura_2023+$gr_qekura_2024;
	
	$persen_tot_po_gr_qekura=($tot_gr_qekura / $tot_po_qekura) *100;
	$persen_tot_po_nilai_qekura=($tot_po_qekura / $tot_nilai_qekura) *100;
	$sisa_target_totpo_qekura=$target_qekura - $tot_po_qekura;
	$sisa_vol_qekura=$sisa_target_totpo_qekura / $tot_capex_vol_qekura;
	
	$nilai_ogp_qekura=$line_qekura['nilai_ogp_qekura_jatimb'];
	$vol_ogp_qekura=$line_qekura['vol_ogp_qekura_jatimb'];
	$capex_vol_ogp_qekura=$nilai_ogp_qekura / $vol_ogp_qekura;
	
	$nilai_outlook_qekura=6715797294;
	$vol_outlook_qekura=$nilai_outlook_qekura / $tot_capex_vol_qekura;
	$capex_vol_outlook_qekura=$nilai_outlook_qekura / $vol_outlook_qekura;
	
	$nilai_so_qekura_jatimb=$line_qekura['nilai_so_qekura_jatimb'];
	$vol_so_qekura_jatimb=$line_qekura['vol_so_qekura_jatimb'];
	$capex_vol_so_qekura_jatimb=$nilai_so_qekura_jatimb / $vol_so_qekura_jatimb;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2022,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qekura_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qekura_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2023,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qekura_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qekura_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_jan,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_feb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_mar,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_apr,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_mei,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_jun,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_jul,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qekura_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qekura_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_qekura,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_qekura,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_qekura,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_qekura,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_qekura,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_qekura,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_qekura,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_qekura,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_qekura,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_qekura,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_qekura,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_qekura,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_qekura,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_qekura,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_qekura,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_qekura_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_qekura_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_qekura_jatimb,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr>
<?php
$get_qekura=pg_query($sql_qekura);
while($line_qekura=pg_fetch_array($get_qekura)){
	$target_qekura_jateng=$line_qekura['target_jateng'];
?>
	<td style="color: blue"><b>Jateng TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b>LoP</b></td>
	<?php 
	$nilai_qekura_2022_jateng=0;
	$vol_qekura_2022=0;
	$capex_vol_qekura_2022_jateng=$nilai_qekura_2022_jateng / $vol_qekura_2022_jateng;
	if(is_nan($capex_vol_qekura_2022_jateng)){
		$capex_vol_qekura_2022_jateng=0;
	}else{
		$capex_vol_qekura_2022_jateng=$capex_vol_qekura_jateng_2022;
	}
	$nilai_qekura_2023_jateng=0;
	$vol_qekura_2023_jateng=0;
	$capex_vol_qekura_2023_jateng=0;
	$nilai_qekura_2024_jan_jateng=0;
	$vol_qekura_2024_jan_jateng=0;
	$capex_vol_qekura_2024_jan_jateng=0;
	$nilai_qekura_2024_feb_jateng=170214095;
	$vol_qekura_2024_feb_jateng=4;
	$capex_vol_qekura_2024_feb_jateng=42553524;
	$nilai_qekura_2024_mar_jateng=260433262;
	$vol_qekura_2024_mar_jateng=7;
	$capex_vol_qekura_2024_mar_jateng=37204752;
	$nilai_qekura_2024_apr_jateng=190407586;
	$vol_qekura_2024_apr_jateng=7;
	$capex_vol_qekura_2024_apr_jateng=27201084;
	$nilai_qekura_2024_mei_jateng=339488526;
	$vol_qekura_2024_mei_jateng=4;
	$capex_vol_qekura_2024_mei_jateng=84872132;
	$nilai_qekura_2024_jun_jateng=$line_qekura['nilai_qekura_2024_jun_jateng'];
	$vol_qekura_2024_jun_jateng=$line_qekura['vol_qekura_2024_jun_jateng'];
	$capex_vol_qekura_2024_jun_jateng=$nilai_qekura_2024_jun_jateng / $vol_qekura_2024_jun_jateng;
	$nilai_qekura_2024_jul_jateng=$line_qekura['nilai_qekura_2024_jul_jateng'];
	$vol_qekura_2024_jul_jateng=$line_qekura['vol_qekura_2024_jul_jateng'];
	$capex_vol_qekura_2024_jul_jateng=$nilai_qekura_2024_jul_jateng / $vol_qekura_2024_jul_jateng;
	$nilai_qekura_2024_agt_jateng=$line_qekura['nilai_qekura_2024_agt_jateng'];
	$vol_qekura_2024_agt_jateng=$line_qekura['vol_qekura_2024_agt_jateng'];
	$capex_vol_qekura_2024_agt_jateng=$nilai_qekura_2024_agt_jateng / $vol_qekura_2024_agt_jateng;
	$nilai_qekura_2024_sept_jateng=$line_qekura['nilai_qekura_2024_sept_jateng'];
	$vol_qekura_2024_sept_jateng=$line_qekura['vol_qekura_2024_sept_jateng'];
	$capex_vol_qekura_2024_sept_jateng=$nilai_qekura_2024_sept_jateng / $vol_qekura_2024_sept_jateng;
	$tot_nilai_qekura_jateng=$nilai_qekura_2022_jateng+$nilai_qekura_2023_jateng+$nilai_qekura_2024_jan_jateng+$nilai_qekura_2024_feb_jateng+$nilai_qekura_2024_mar_jateng+$nilai_qekura_2024_apr_jateng+$nilai_qekura_2024_mei_jateng+$nilai_qekura_2024_jun_jateng+$nilai_qekura_2024_jul_jateng+$nilai_qekura_2024_agt_jateng+$nilai_qekura_2024_sept_jateng;
	
	$tot_vol_qekura_jateng=$vol_qekura_2022_jateng+$vol_qekura_2023_jateng+$vol_qekura_2024_jan_jateng+$vol_qekura_2024_feb_jateng+$vol_qekura_2024_mar_jateng+$vol_qekura_2024_apr_jateng+$vol_qekura_2024_mei_jateng+$vol_qekura_2024_jun_jateng+$vol_qekura_2024_jul_jateng+$vol_qekura_2024_agt_jateng+$vol_qekura_2024_sept_jateng;
	
	$tot_capex_vol_qekura_jateng=$tot_nilai_qekura_jateng / $tot_vol_qekura_jateng;
	
	$po_qekura_2022_jateng=0;
	$gr_qekura_2022_jateng=0;
	$po_qekura_2023_jateng=0;
	$gr_qekura_2023_jateng=0;
	$po_qekura_2024_jan_mei_jateng=3529530597;
	$gr_qekura_2024_jan_mei_jateng=716045756;
	$po_qekura_2024_jateng=$po_qekura_2024_jan_mei_jateng + $line_qekura['po_qekura_2024_jateng'];
	$gr_qekura_2024_jateng=$gr_qekura_2024_jan_mei_jateng + $line_qekura['gr_qekura_2024_jateng'];
	
	$tot_po_qekura_jateng=$po_qekura_2022_jateng+$po_qekura_2023_jateng+$po_qekura_2024_jateng;
	$tot_gr_qekura_jateng=$gr_qekura_2022_jateng+$gr_qekura_2023_jateng+$gr_qekura_2024_jateng;
	
	$persen_tot_po_gr_qekura_jateng=($tot_gr_qekura_jateng / $tot_po_qekura_jateng) *100;
	$persen_tot_po_nilai_qekura_jateng=($tot_po_qekura_jateng / $tot_nilai_qekura_jateng) *100;
	
	$sisa_target_totpo_qekura_jateng=$target_qekura_jateng - $tot_po_qekura_jateng;
	$sisa_vol_qekura_jateng=$sisa_target_totpo_qekura_jateng / $tot_capex_vol_qekura_jateng;
	
	$nilai_ogp_qekura_jateng=$line_qekura['nilai_ogp_qekura_jateng'];
	$vol_ogp_qekura_jateng=$line_qekura['vol_ogp_qekura_jateng'];
	$capex_vol_ogp_qekura_jateng=$nilai_ogp_qekura_jateng / $vol_ogp_qekura_jateng;
	
	$nilai_outlook_qekura_jateng=1963195163;
	$vol_outlook_qekura_jateng=$nilai_outlook_qekura_jateng / $tot_capex_vol_qekura_jateng;
	$capex_vol_outlook_qekura_jateng=$nilai_outlook_qekura_jateng / $vol_outlook_qekura_jateng;
	
	$nilai_so_qekura_jateng=$line_qekura['nilai_so_qekura_jateng'];
	$vol_so_qekura_jateng=$line_qekura['vol_so_qekura_jateng'];
	$capex_vol_so_qekura_jateng=$nilai_so_qekura_jateng / $vol_so_qekura_jateng;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qekura_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qekura_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qekura_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qekura_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qekura_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qekura_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qekura_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qekura_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qekura_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_qekura_jateng,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_qekura_jateng,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_qekura_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_qekura_jateng,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr style="background-color: #DFD;">
	<td><b>QE MAGU</b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
	</tr>
<?php 
$sql_qemagu='select (select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-5801-29-02-I\') target_jatimb,
(select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-4801-29-02-I\') target_jateng,
sum(nilai_qemagu_2024_jun_jatimb) nilai_qemagu_2024_jun_jatimb,sum(vol_qemagu_2024_jun_jatimb) vol_qemagu_2024_jun_jatimb,
sum(nilai_qemagu_2024_jul_jatimb) nilai_qemagu_2024_jul_jatimb,sum(vol_qemagu_2024_jul_jatimb) vol_qemagu_2024_jul_jatimb,
sum(nilai_qemagu_2024_agt_jatimb) nilai_qemagu_2024_agt_jatimb,sum(vol_qemagu_2024_agt_jatimb) vol_qemagu_2024_agt_jatimb,
sum(nilai_qemagu_2024_sept_jatimb) nilai_qemagu_2024_sept_jatimb,sum(vol_qemagu_2024_sept_jatimb) vol_qemagu_2024_sept_jatimb,
sum(po_qemagu_2024_jatimb) po_qemagu_2024_jatimb,sum(gr_qemagu_2024_jatimb) gr_qemagu_2024_jatimb,
sum(nilai_ogp_qemagu_jatimb) nilai_ogp_qemagu_jatimb,sum(vol_ogp_qemagu_jatimb) vol_ogp_qemagu_jatimb,
sum(nilai_so_qemagu_jatimb) nilai_so_qemagu_jatimb,sum(vol_so_qemagu_jatimb) vol_so_qemagu_jatimb,
sum(nilai_qemagu_2024_jun_jateng) nilai_qemagu_2024_jun_jateng,sum(vol_qemagu_2024_jun_jateng) vol_qemagu_2024_jun_jateng,
sum(nilai_qemagu_2024_jul_jateng) nilai_qemagu_2024_jul_jateng,sum(vol_qemagu_2024_jul_jateng) vol_qemagu_2024_jul_jateng,
sum(nilai_qemagu_2024_agt_jateng) nilai_qemagu_2024_agt_jateng,sum(vol_qemagu_2024_agt_jateng) vol_qemagu_2024_agt_jateng,
sum(nilai_qemagu_2024_sept_jateng) nilai_qemagu_2024_sept_jateng,sum(vol_qemagu_2024_sept_jateng) vol_qemagu_2024_sept_jateng,
sum(po_qemagu_2024_jateng) po_qemagu_2024_jateng,sum(gr_qemagu_2024_jateng) gr_qemagu_2024_jateng,
sum(nilai_ogp_qemagu_jateng) nilai_ogp_qemagu_jateng,sum(vol_ogp_qemagu_jateng) vol_ogp_qemagu_jateng,
sum(nilai_so_qemagu_jateng) nilai_so_qemagu_jateng,sum(vol_so_qemagu_jateng) vol_so_qemagu_jateng
from
(select "PROGRAM",
concat(\'0\')::numeric nilai_qemagu_2024_jun_jatimb,
concat(\'0\')::numeric nilai_qemagu_2024_jul_jatimb,
concat(\'0\')::numeric nilai_qemagu_2024_agt_jatimb,
concat(\'0\')::numeric nilai_qemagu_2024_sept_jatimb,
concat(\'0\')::numeric vol_qemagu_2024_jun_jatimb,
concat(\'0\')::numeric vol_qemagu_2024_jul_jatimb,
concat(\'0\')::numeric vol_qemagu_2024_agt_jatimb,
concat(\'0\')::numeric vol_qemagu_2024_sept_jatimb,
concat(\'0\')::bigint po_qemagu_2024_jatimb,concat(\'0\')::bigint gr_qemagu_2024_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_qemagu_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_qemagu_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_qemagu_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_qemagu_jatimb,
concat(\'0\')::numeric nilai_qemagu_2024_jun_jateng,
concat(\'0\')::numeric nilai_qemagu_2024_jul_jateng,
concat(\'0\')::numeric nilai_qemagu_2024_agt_jateng,
concat(\'0\')::numeric nilai_qemagu_2024_sept_jateng,
concat(\'0\')::numeric vol_qemagu_2024_jun_jateng,
concat(\'0\')::numeric vol_qemagu_2024_jul_jateng,
concat(\'0\')::numeric vol_qemagu_2024_agt_jateng,
concat(\'0\')::numeric vol_qemagu_2024_sept_jateng,
concat(\'0\')::bigint po_qemagu_2024_jateng,concat(\'0\')::bigint gr_qemagu_2024_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_qemagu_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\' 
then 1 else 0 end) vol_ogp_qemagu_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_qemagu_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_qemagu_jateng
FROM develop."RPB_REKON"
where "PROGRAM" in (\'QE MAGU\') and "BUDGET_SOURCE" !=\'DID\' 
and "BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and "STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and "STATUS_SO" is not null
group by "PROGRAM"
union all
select a."PROGRAM",
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qemagu_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qemagu_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qemagu_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qemagu_2024_sept_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qemagu_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qemagu_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qemagu_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qemagu_2024_sept_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5801-29-02-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_qemagu_2024_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5801-29-02-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_qemagu_2024_jatimb,
concat(\'0\')::numeric nilai_ogp_qemagu_jatimb,concat(\'0\')::numeric vol_ogp_qemagu_jatimb,
concat(\'0\')::numeric nilai_so_qemagu_jatimb,concat(\'0\')::numeric vol_so_qemagu_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qemagu_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qemagu_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qemagu_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qemagu_2024_sept_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qemagu_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qemagu_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qemagu_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qemagu_2024_sept_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4801-29-02-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_qemagu_2024_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4801-29-02-I\'  
then b."LOCAL_AMOUNT_GR" else 0 end) gr_qemagu_2024_jateng,
concat(\'0\')::numeric nilai_ogp_qemagu_jateng,concat(\'0\')::numeric vol_ogp_qemagu_jateng,
concat(\'0\')::numeric nilai_so_qemagu_jateng,concat(\'0\')::numeric vol_so_qemagu_jateng
FROM develop."RPB_REKON" a, develop."SAP" b
where SUBSTRING(a."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and a."PROGRAM" in (\'QE MAGU\')
and b."TGL_SAP"=current_date and a."BUDGET_SOURCE" !=\'DID\'
and a."BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and a."STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and a."STATUS_SO" is not null
group by a."PROGRAM") t
group by target_jatimb,target_jateng';
$get_qemagu=pg_query($sql_qemagu); 
?>
<tr>
<?php
while($line_qemagu=pg_fetch_array($get_qemagu)){
	$target_qemagu=$line_qemagu['target_jatimb'];
?>
	<td style="color: blue"><b>Jatim Balnus TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_qemagu,0,',','.');?></b></td>
	<td style="text-align:center"><b>Tiket Ggn</b></td>
	<?php 
	$nilai_qemagu_2022=530846721;
	$vol_qemagu_2022=1;
	$capex_vol_qemagu_2022=$nilai_qemagu_2022 / $vol_qemagu_2022;
	$po_qemagu_2022=0;
	$gr_qemagu_2022=0;
	$nilai_qemagu_2023=212050425;
	$vol_qemagu_2023=64;
	$capex_vol_qemagu_2023=$nilai_qemagu_2023 / $vol_qemagu_2023;
	$po_qemagu_2023=212050425;
	$gr_qemagu_2023=0;
	$nilai_qemagu_2024_jan=40479670;
	$vol_qemagu_2024_jan=351;
	$capex_vol_qemagu_2024_jan=$nilai_qemagu_2024_jan / $vol_qemagu_2024_jan;
	$nilai_qemagu_2024_feb=414020;
	$vol_qemagu_2024_feb=274;
	$capex_vol_qemagu_2024_feb=$nilai_qemagu_2024_feb / $vol_qemagu_2024_feb;
	$nilai_qemagu_2024_mar=1346531068;
	$vol_qemagu_2024_mar=210;
	$capex_vol_qemagu_2024_mar=$nilai_qemagu_2024_mar / $vol_qemagu_2024_mar;
	$nilai_qemagu_2024_apr=37428058;
	$vol_qemagu_2024_apr=183;
	$capex_vol_qemagu_2024_apr=$nilai_qemagu_2024_apr / $vol_qemagu_2024_apr;
	$nilai_qemagu_2024_mei=78228561;
	$vol_qemagu_2024_mei=26;
	$capex_vol_qemagu_2024_mei=$nilai_qemagu_2024_mei / $vol_qemagu_2024_mei;
	$nilai_qemagu_2024_jun=$line_qemagu['nilai_qemagu_2024_jun_jatimb'];
	$vol_qemagu_2024_jun=$line_qemagu['vol_qemagu_2024_jun_jatimb'];
	$capex_vol_qemagu_2024_jun=$nilai_qemagu_2024_jun / $vol_qemagu_2024_jun;
	$nilai_qemagu_2024_jul=$line_qemagu['nilai_qemagu_2024_jul_jatimb'];
	$vol_qemagu_2024_jul=$line_qemagu['vol_qemagu_2024_jul_jatimb'];
	$capex_vol_qemagu_2024_jul=$nilai_qemagu_2024_jul / $vol_qemagu_2024_jul;
	$nilai_qemagu_2024_agt_jatimb=$line_qemagu['nilai_qemagu_2024_agt_jatimb'];
	$vol_qemagu_2024_agt_jatimb=$line_qemagu['vol_qemagu_2024_agt_jatimb'];
	$capex_vol_qemagu_2024_agt_jatimb=$nilai_qemagu_2024_agt_jatimb / $vol_qemagu_2024_agt_jatimb;
	$nilai_qemagu_2024_sept_jatimb=$line_qemagu['nilai_qemagu_2024_sept_jatimb'];
	$vol_qemagu_2024_sept_jatimb=$line_qemagu['vol_qemagu_2024_sept_jatimb'];
	$capex_vol_qemagu_2024_sept_jatimb=$nilai_qemagu_2024_sept_jatimb / $vol_qemagu_2024_sept_jatimb;
	
	$po_qemagu_2024_jan_mei=196853883;
	$gr_qemagu_2024_jan_mei=0;
	$po_qemagu_2024=$po_qemagu_2024_jan_mei + $line_qemagu['po_qemagu_2024_jatimb'];
	$gr_qemagu_2024=$gr_qemagu_2024_jan_mei + $line_qemagu['gr_qemagu_2024_jatimb'];
	
	$tot_nilai_qemagu=$nilai_qemagu_2022+$nilai_qemagu_2023+$nilai_qemagu_2024_jan+$nilai_qemagu_2024_feb+$nilai_qemagu_2024_mar+$nilai_qemagu_2024_apr+$nilai_qemagu_2024_mei+$nilai_qemagu_2024_jun+$nilai_qemagu_2024_jul+$nilai_qemagu_2024_agt_jatimb+$nilai_qemagu_2024_sept_jatimb;
	$tot_vol_qemagu=$vol_qemagu_2022+$vol_qemagu_2023+$vol_qemagu_2024_jan+$vol_qemagu_2024_feb+$vol_qemagu_2024_mar+$vol_qemagu_2024_apr+$vol_qemagu_2024_mei+$vol_qemagu_2024_jun+$vol_qemagu_2024_jul+$vol_qemagu_2024_agt_jatimb+$vol_qemagu_2024_sept_jatimb;
	
	$tot_capex_vol_qemagu=$tot_nilai_qemagu / $tot_vol_qemagu;
	
	$tot_po_qemagu=$po_qemagu_2022+$po_qemagu_2023+$po_qemagu_2024;
	$tot_gr_qemagu=$gr_qemagu_2022+$gr_qemagu_2023+$gr_qemagu_2024;
	
	$persen_tot_po_gr_qemagu=($tot_gr_qemagu / $tot_po_qemagu) *100;
	$persen_tot_po_nilai_qemagu=($tot_po_qemagu / $tot_nilai_qemagu) *100;
	$sisa_target_totpo_qemagu=$target_qemagu - $tot_po_qemagu;
	$sisa_vol_qemagu=$sisa_target_totpo_qemagu / $tot_capex_vol_qemagu;
	
	$nilai_ogp_qemagu=$line_qemagu['nilai_ogp_qemagu_jatimb'];
	$vol_ogp_qemagu=$line_qemagu['vol_ogp_qemagu_jatimb'];
	$capex_vol_ogp_qemagu=$nilai_ogp_qemagu / $vol_ogp_qemagu;
	
	$nilai_outlook_qemagu=2209639431;
	$vol_outlook_qemagu=$nilai_outlook_qemagu / $tot_capex_vol_qemagu;
	$capex_vol_outlook_qemagu=$nilai_outlook_qemagu / $vol_outlook_qemagu;
	
	$nilai_so_qemagu_jatimb=$line_qemagu['nilai_so_qemagu_jatimb'];
	$vol_so_qemagu_jatimb=$line_qemagu['vol_so_qemagu_jatimb'];
	$capex_vol_so_qemagu_jatimb=$nilai_so_qemagu_jatimb / $vol_so_qemagu_jatimb;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2022,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qemagu_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qemagu_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2023,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qemagu_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qemagu_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_jan,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_feb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_mar,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_apr,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_mei,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_jun,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_jul,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qemagu_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qemagu_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_qemagu,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_qemagu,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_qemagu,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_qemagu,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_qemagu,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_qemagu,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_qemagu,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_qemagu,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_qemagu,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_qemagu,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_qemagu,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_qemagu,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_qemagu,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_qemagu,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_qemagu,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_qemagu_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_qemagu_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_qemagu_jatimb,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr>
<?php
$get_qemagu=pg_query($sql_qemagu);
while($line_qemagu=pg_fetch_array($get_qemagu)){
	$target_qemagu_jateng=$line_qemagu['target_jateng'];
?>
	<td style="color: blue"><b>Jateng TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b>Tiket Ggn</b></td>
	<?php 
	$nilai_qemagu_2022_jateng=0;
	$vol_qemagu_2022=0;
	$capex_vol_qemagu_2022_jateng=$nilai_qemagu_2022_jateng / $vol_qemagu_2022_jateng;
	if(is_nan($capex_vol_qemagu_2022_jateng)){
		$capex_vol_qemagu_2022_jateng=0;
	}else{
		$capex_vol_qemagu_2022_jateng=$capex_vol_qemagu_jateng_2022;
	}
	$nilai_qemagu_2023_jateng=4016679009;
	$vol_qemagu_2023_jateng=173089;
	$capex_vol_qemagu_2023_jateng=23206;
	$nilai_qemagu_2024_jan_jateng=867285237;
	$vol_qemagu_2024_jan_jateng=29202;
	$capex_vol_qemagu_2024_jan_jateng=297;
	$nilai_qemagu_2024_feb_jateng=701810857;
	$vol_qemagu_2024_feb_jateng=23151;
	$capex_vol_qemagu_2024_feb_jateng=30314;
	$nilai_qemagu_2024_mar_jateng=815067164;
	$vol_qemagu_2024_mar_jateng=2772;
	$capex_vol_qemagu_2024_mar_jateng=29404;
	$nilai_qemagu_2024_apr_jateng=662585729;
	$vol_qemagu_2024_apr_jateng=23176;
	$capex_vol_qemagu_2024_apr_jateng=28589;
	$nilai_qemagu_2024_mei_jateng=705551403;
	$vol_qemagu_2024_mei_jateng=226;
	$capex_vol_qemagu_2024_mei_jateng=31219;
	$nilai_qemagu_2024_jun_jateng=$line_qemagu['nilai_qemagu_2024_jun_jateng'];
	$vol_qemagu_2024_jun_jateng=$line_qemagu['vol_qemagu_2024_jun_jateng'];
	$capex_vol_qemagu_2024_jun_jateng=$nilai_qemagu_2024_jun_jateng / $vol_qemagu_2024_jun_jateng;
	$nilai_qemagu_2024_jul_jateng=$line_qemagu['nilai_qemagu_2024_jul_jateng'];
	$vol_qemagu_2024_jul_jateng=$line_qemagu['vol_qemagu_2024_jul_jateng'];
	$capex_vol_qemagu_2024_jul_jateng=$nilai_qemagu_2024_jul_jateng / $vol_qemagu_2024_jul_jateng;
	$nilai_qemagu_2024_agt_jateng=$line_qemagu['nilai_qemagu_2024_agt_jateng'];
	$vol_qemagu_2024_agt_jateng=$line_qemagu['vol_qemagu_2024_agt_jateng'];
	$capex_vol_qemagu_2024_agt_jateng=$nilai_qemagu_2024_agt_jateng / $vol_qemagu_2024_agt_jateng;
	$nilai_qemagu_2024_sept_jateng=$line_qemagu['nilai_qemagu_2024_sept_jateng'];
	$vol_qemagu_2024_sept_jateng=$line_qemagu['vol_qemagu_2024_sept_jateng'];
	$capex_vol_qemagu_2024_sept_jateng=$nilai_qemagu_2024_sept_jateng / $vol_qemagu_2024_sept_jateng;
	$tot_nilai_qemagu_jateng=$nilai_qemagu_2022_jateng+$nilai_qemagu_2023_jateng+$nilai_qemagu_2024_jan_jateng+$nilai_qemagu_2024_feb_jateng+$nilai_qemagu_2024_mar_jateng+$nilai_qemagu_2024_apr_jateng+$nilai_qemagu_2024_mei_jateng+$nilai_qemagu_2024_jun_jateng+$nilai_qemagu_2024_jul_jateng+$nilai_qemagu_2024_agt_jateng+$nilai_qemagu_2024_sept_jateng;
	
	$tot_vol_qemagu_jateng=$vol_qemagu_2022_jateng+$vol_qemagu_2023_jateng+$vol_qemagu_2024_jan_jateng+$vol_qemagu_2024_feb_jateng+$vol_qemagu_2024_mar_jateng+$vol_qemagu_2024_apr_jateng+$vol_qemagu_2024_mei_jateng+$vol_qemagu_2024_jun_jateng+$vol_qemagu_2024_jul_jateng+$vol_qemagu_2024_agt_jateng+$vol_qemagu_2024_sept_jateng;
	
	$tot_capex_vol_qemagu_jateng=$tot_nilai_qemagu_jateng / $tot_vol_qemagu_jateng;
	
	$po_qemagu_2022_jateng=0;
	$gr_qemagu_2022_jateng=0;
	$po_qemagu_2023_jateng=0;
	$gr_qemagu_2023_jateng=0;
	$po_qemagu_2024_jan_mei_jateng=8606305043;
	$gr_qemagu_2024_jan_mei_jateng=4863517576;
	$po_qemagu_2024_jateng=$po_qemagu_2024_jan_mei_jateng + $line_qemagu['po_qemagu_2024_jateng'];
	$gr_qemagu_2024_jateng=$gr_qemagu_2024_jan_mei_jateng + $line_qemagu['gr_qemagu_2024_jateng'];
	
	$tot_po_qemagu_jateng=$po_qemagu_2022_jateng+$po_qemagu_2023_jateng+$po_qemagu_2024_jateng;
	$tot_gr_qemagu_jateng=$gr_qemagu_2022_jateng+$gr_qemagu_2023_jateng+$gr_qemagu_2024_jateng;
	
	$persen_tot_po_gr_qemagu_jateng=($tot_gr_qemagu_jateng / $tot_po_qemagu_jateng) *100;
	$persen_tot_po_nilai_qemagu_jateng=($tot_po_qemagu_jateng / $tot_nilai_qemagu_jateng) *100;
	
	$sisa_target_totpo_qemagu_jateng=$target_qemagu_jateng - $tot_po_qemagu_jateng;
	$sisa_vol_qemagu_jateng=$sisa_target_totpo_qemagu_jateng / $tot_capex_vol_qemagu_jateng;
	
	$nilai_ogp_qemagu_jateng=$line_qemagu['nilai_ogp_qemagu_jateng'];
	$vol_ogp_qemagu_jateng=$line_qemagu['vol_ogp_qemagu_jateng'];
	$capex_vol_ogp_qemagu_jateng=$nilai_ogp_qemagu_jateng / $vol_ogp_qemagu_jateng;
	
	$nilai_outlook_qemagu_jateng=4728960876;
	$vol_outlook_qemagu_jateng=$nilai_outlook_qemagu_jateng / $tot_capex_vol_qemagu_jateng;
	$capex_vol_outlook_qemagu_jateng=$nilai_outlook_qemagu_jateng / $vol_outlook_qemagu_jateng;
	
	$nilai_so_qemagu_jateng=$line_qemagu['nilai_so_qemagu_jateng'];
	$vol_so_qemagu_jateng=$line_qemagu['vol_so_qemagu_jateng'];
	$capex_vol_so_qemagu_jateng=$nilai_so_qemagu_jateng / $vol_so_qemagu_jateng;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qemagu_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qemagu_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qemagu_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qemagu_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qemagu_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qemagu_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qemagu_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qemagu_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qemagu_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_qemagu_jateng,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_qemagu_jateng,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_qemagu_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_qemagu_jateng,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr style="background-color: #DFD;">
	<td><b>QE PREVENTIF</b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
	</tr>
<?php 
$sql_qeprev='select (select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-5801-28-02-I\') target_jatimb,
(select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-4801-28-02-I\') target_jateng,
sum(nilai_qeprev_2024_jun_jatimb) nilai_qeprev_2024_jun_jatimb,sum(vol_qeprev_2024_jun_jatimb) vol_qeprev_2024_jun_jatimb,
sum(nilai_qeprev_2024_jul_jatimb) nilai_qeprev_2024_jul_jatimb,sum(vol_qeprev_2024_jul_jatimb) vol_qeprev_2024_jul_jatimb,
sum(nilai_qeprev_2024_agt_jatimb) nilai_qeprev_2024_agt_jatimb,sum(vol_qeprev_2024_agt_jatimb) vol_qeprev_2024_agt_jatimb,
sum(nilai_qeprev_2024_sept_jatimb) nilai_qeprev_2024_sept_jatimb,sum(vol_qeprev_2024_sept_jatimb) vol_qeprev_2024_sept_jatimb,
sum(po_qeprev_2024_jatimb) po_qeprev_2024_jatimb,sum(gr_qeprev_2024_jatimb) gr_qeprev_2024_jatimb,
sum(nilai_ogp_qeprev_jatimb) nilai_ogp_qeprev_jatimb,sum(vol_ogp_qeprev_jatimb) vol_ogp_qeprev_jatimb,
sum(nilai_so_qeprev_jatimb) nilai_so_qeprev_jatimb,sum(vol_so_qeprev_jatimb) vol_so_qeprev_jatimb,
sum(nilai_qeprev_2024_jun_jateng) nilai_qeprev_2024_jun_jateng,sum(vol_qeprev_2024_jun_jateng) vol_qeprev_2024_jun_jateng,
sum(nilai_qeprev_2024_jul_jateng) nilai_qeprev_2024_jul_jateng,sum(vol_qeprev_2024_jul_jateng) vol_qeprev_2024_jul_jateng,
sum(nilai_qeprev_2024_agt_jateng) nilai_qeprev_2024_agt_jateng,sum(vol_qeprev_2024_agt_jateng) vol_qeprev_2024_agt_jateng,
sum(nilai_qeprev_2024_sept_jateng) nilai_qeprev_2024_sept_jateng,sum(vol_qeprev_2024_sept_jateng) vol_qeprev_2024_sept_jateng,
sum(po_qeprev_2024_jateng) po_qeprev_2024_jateng,sum(gr_qeprev_2024_jateng) gr_qeprev_2024_jateng,
sum(nilai_ogp_qeprev_jateng) nilai_ogp_qeprev_jateng,sum(vol_ogp_qeprev_jateng) vol_ogp_qeprev_jateng,
sum(nilai_so_qeprev_jateng) nilai_so_qeprev_jateng,sum(vol_so_qeprev_jateng) vol_so_qeprev_jateng
from
(select "PROGRAM",
concat(\'0\')::numeric nilai_qeprev_2024_jun_jatimb,
concat(\'0\')::numeric nilai_qeprev_2024_jul_jatimb,
concat(\'0\')::numeric nilai_qeprev_2024_agt_jatimb,
concat(\'0\')::numeric nilai_qeprev_2024_sept_jatimb,
concat(\'0\')::numeric vol_qeprev_2024_jun_jatimb,
concat(\'0\')::numeric vol_qeprev_2024_jul_jatimb,
concat(\'0\')::numeric vol_qeprev_2024_agt_jatimb,
concat(\'0\')::numeric vol_qeprev_2024_sept_jatimb,
concat(\'0\')::bigint po_qeprev_2024_jatimb,concat(\'0\')::bigint gr_qeprev_2024_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_qeprev_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_qeprev_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_qeprev_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_qeprev_jatimb,
concat(\'0\')::numeric nilai_qeprev_2024_jun_jateng,
concat(\'0\')::numeric nilai_qeprev_2024_jul_jateng,
concat(\'0\')::numeric nilai_qeprev_2024_agt_jateng,
concat(\'0\')::numeric nilai_qeprev_2024_sept_jateng,
concat(\'0\')::numeric vol_qeprev_2024_jun_jateng,
concat(\'0\')::numeric vol_qeprev_2024_jul_jateng,
concat(\'0\')::numeric vol_qeprev_2024_agt_jateng,
concat(\'0\')::numeric vol_qeprev_2024_sept_jateng,
concat(\'0\')::bigint po_qeprev_2024_jateng,concat(\'0\')::bigint gr_qeprev_2024_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_qeprev_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\' 
then 1 else 0 end) vol_ogp_qeprev_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_qeprev_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_qeprev_jateng
FROM develop."RPB_REKON"
where "PROGRAM" in (\'QE PREVENTIF\') and "BUDGET_SOURCE" !=\'DID\' 
and "BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and "STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and "STATUS_SO" is not null
group by "PROGRAM"
union all
select a."PROGRAM",
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qeprev_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qeprev_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qeprev_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qeprev_2024_sept_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qeprev_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qeprev_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qeprev_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qeprev_2024_sept_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5801-28-02-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_qeprev_2024_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5801-28-02-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_qeprev_2024_jatimb,
concat(\'0\')::numeric nilai_ogp_qeprev_jatimb,concat(\'0\')::numeric vol_ogp_qeprev_jatimb,
concat(\'0\')::numeric nilai_so_qeprev_jatimb,concat(\'0\')::numeric vol_so_qeprev_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qeprev_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qeprev_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qeprev_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qeprev_2024_sept_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qeprev_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qeprev_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qeprev_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qeprev_2024_sept_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4801-28-02-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_qeprev_2024_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4801-28-02-I\'  
then b."LOCAL_AMOUNT_GR" else 0 end) gr_qeprev_2024_jateng,
concat(\'0\')::numeric nilai_ogp_qeprev_jateng,concat(\'0\')::numeric vol_ogp_qeprev_jateng,
concat(\'0\')::numeric nilai_so_qeprev_jateng,concat(\'0\')::numeric vol_so_qeprev_jateng
FROM develop."RPB_REKON" a, develop."SAP" b
where SUBSTRING(a."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and a."PROGRAM" in (\'QE PREVENTIF\')
and b."TGL_SAP"=current_date and a."BUDGET_SOURCE" !=\'DID\'
and a."BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and a."STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and a."STATUS_SO" is not null
group by a."PROGRAM") t
group by target_jatimb,target_jateng';
$get_qeprev=pg_query($sql_qeprev); 
?>
<tr>
<?php
while($line_qeprev=pg_fetch_array($get_qeprev)){
	$target_qeprev=$line_qeprev['target_jatimb'];
?>
	<td style="color: blue"><b>Jatim Balnus TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_qeprev,0,',','.');?></b></td>
	<td style="text-align:center"><b>LoP</b></td>
<?php 
	$nilai_qeprev_2022=1164939243;
	$vol_qeprev_2022=996;
	$capex_vol_qeprev_2022=$nilai_qeprev_2022 / $vol_qeprev_2022;
	$po_qeprev_2022=1164939243;
	$gr_qeprev_2022=0;
	$nilai_qeprev_2023=6967877874;
	$vol_qeprev_2023=3369;
	$capex_vol_qeprev_2023=$nilai_qeprev_2023 / $vol_qeprev_2023;
	$po_qeprev_2023=6782373234;
	$gr_qeprev_2023=0;
	$nilai_qeprev_2024_jan=40479670;
	$vol_qeprev_2024_jan=351;
	$capex_vol_qeprev_2024_jan=$nilai_qeprev_2024_jan / $vol_qeprev_2024_jan;
	$nilai_qeprev_2024_feb=414020;
	$vol_qeprev_2024_feb=274;
	$capex_vol_qeprev_2024_feb=$nilai_qeprev_2024_feb / $vol_qeprev_2024_feb;
	$nilai_qeprev_2024_mar=1346531068;
	$vol_qeprev_2024_mar=210;
	$capex_vol_qeprev_2024_mar=$nilai_qeprev_2024_mar / $vol_qeprev_2024_mar;
	$nilai_qeprev_2024_apr=37428058;
	$vol_qeprev_2024_apr=183;
	$capex_vol_qeprev_2024_apr=$nilai_qeprev_2024_apr / $vol_qeprev_2024_apr;
	$nilai_qeprev_2024_mei=1313147031;
	$vol_qeprev_2024_mei=720;
	$capex_vol_qeprev_2024_mei=$nilai_qeprev_2024_mei / $vol_qeprev_2024_mei;
	$nilai_qeprev_2024_jun=$line_qeprev['nilai_qeprev_2024_jun_jatimb'];
	$vol_qeprev_2024_jun=$line_qeprev['vol_qeprev_2024_jun_jatimb'];
	$capex_vol_qeprev_2024_jun=$nilai_qeprev_2024_jun / $vol_qeprev_2024_jun;
	$nilai_qeprev_2024_jul=$line_qeprev['nilai_qeprev_2024_jul_jatimb'];
	$vol_qeprev_2024_jul=$line_qeprev['vol_qeprev_2024_jul_jatimb'];
	$capex_vol_qeprev_2024_jul=$nilai_qeprev_2024_jul / $vol_qeprev_2024_jul;
	$nilai_qeprev_2024_agt_jatimb=$line_qeprev['nilai_qeprev_2024_agt_jatimb'];
	$vol_qeprev_2024_agt_jatimb=$line_qeprev['vol_qeprev_2024_agt_jatimb'];
	$capex_vol_qeprev_2024_agt_jatimb=$nilai_qeprev_2024_agt_jatimb / $vol_qeprev_2024_agt_jatimb;
	$nilai_qeprev_2024_sept_jatimb=$line_qeprev['nilai_qeprev_2024_sept_jatimb'];
	$vol_qeprev_2024_sept_jatimb=$line_qeprev['vol_qeprev_2024_sept_jatimb'];
	$capex_vol_qeprev_2024_sept_jatimb=$nilai_qeprev_2024_sept_jatimb / $vol_qeprev_2024_sept_jatimb;
	
	$po_qeprev_2024_jan_mei=2232500375;
	$gr_qeprev_2024_jan_mei=229723197;
	$po_qeprev_2024=$po_qeprev_2024_jan_mei + $line_qeprev['po_qeprev_2024_jatimb'];
	$gr_qeprev_2024=$gr_qeprev_2024_jan_mei + $line_qeprev['gr_qeprev_2024_jatimb'];
	
	$tot_nilai_qeprev=$nilai_qeprev_2022+$nilai_qeprev_2023+$nilai_qeprev_2024_jan+$nilai_qeprev_2024_feb+$nilai_qeprev_2024_mar+$nilai_qeprev_2024_apr+$nilai_qeprev_2024_mei+$nilai_qeprev_2024_jun+$nilai_qeprev_2024_jul+$nilai_qeprev_2024_agt_jatimb+$nilai_qeprev_2024_sept_jatimb;
	$tot_vol_qeprev=$vol_qeprev_2022+$vol_qeprev_2023+$vol_qeprev_2024_jan+$vol_qeprev_2024_feb+$vol_qeprev_2024_mar+$vol_qeprev_2024_apr+$vol_qeprev_2024_mei+$vol_qeprev_2024_jun+$vol_qeprev_2024_jul+$vol_qeprev_2024_agt_jatimb+$vol_qeprev_2024_sept_jatimb;
	
	$tot_capex_vol_qeprev=$tot_nilai_qeprev / $tot_vol_qeprev;
	
	$tot_po_qeprev=$po_qeprev_2022+$po_qeprev_2023+$po_qeprev_2024;
	$tot_gr_qeprev=$gr_qeprev_2022+$gr_qeprev_2023+$gr_qeprev_2024;
	
	$persen_tot_po_gr_qeprev=($tot_gr_qeprev / $tot_po_qeprev) *100;
	$persen_tot_po_nilai_qeprev=($tot_po_qeprev / $tot_nilai_qeprev) *100;
	$sisa_target_totpo_qeprev=$target_qeprev - $tot_po_qeprev;
	$sisa_vol_qeprev=$sisa_target_totpo_qeprev / $tot_capex_vol_qeprev;
	
	$nilai_ogp_qeprev=$line_qeprev['nilai_ogp_qeprev_jatimb'];
	$vol_ogp_qeprev=$line_qeprev['vol_ogp_qeprev_jatimb'];
	$capex_vol_ogp_qeprev=$nilai_ogp_qeprev / $vol_ogp_qeprev;
	
	$nilai_outlook_qeprev=25465149756;
	$vol_outlook_qeprev=$nilai_outlook_qeprev / $tot_capex_vol_qeprev;
	$capex_vol_outlook_qeprev=$nilai_outlook_qeprev / $vol_outlook_qeprev;
	
	$nilai_so_qeprev_jatimb=$line_qeprev['nilai_so_qeprev_jatimb'];
	$vol_so_qeprev_jatimb=$line_qeprev['vol_so_qeprev_jatimb'];
	$capex_vol_so_qeprev_jatimb=$nilai_so_qeprev_jatimb / $vol_so_qeprev_jatimb;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2022,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qeprev_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qeprev_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2023,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qeprev_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qeprev_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_jan,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_feb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_mar,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_apr,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_mei,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_jun,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_jul,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qeprev_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qeprev_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_qeprev,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_qeprev,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_qeprev,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_qeprev,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_qeprev,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_qeprev,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_qeprev,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_qeprev,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_qeprev,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_qeprev,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_qeprev,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_qeprev,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_qeprev,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_qeprev,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_qeprev,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_qeprev_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_qeprev_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_qeprev_jatimb,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr>
<?php
$get_qeprev=pg_query($sql_qeprev);
while($line_qeprev=pg_fetch_array($get_qeprev)){
	$target_qeprev_jateng=$line_qeprev['target_jateng'];
?>
	<td style="color: blue"><b>Jateng TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b>LoP</b></td>
	<?php 
	$nilai_qeprev_2022_jateng=0;
	$vol_qeprev_2022=0;
	$capex_vol_qeprev_2022_jateng=$nilai_qeprev_2022_jateng / $vol_qeprev_2022_jateng;
	if(is_nan($capex_vol_qeprev_2022_jateng)){
		$capex_vol_qeprev_2022_jateng=0;
	}else{
		$capex_vol_qeprev_2022_jateng=$capex_vol_qeprev_jateng_2022;
	}
	$nilai_qeprev_2023_jateng=528697551;
	$vol_qeprev_2023_jateng=83;
	$capex_vol_qeprev_2023_jateng=6369850;
	$nilai_qeprev_2024_jan_jateng=509714244;
	$vol_qeprev_2024_jan_jateng=50;
	$capex_vol_qeprev_2024_jan_jateng=10194285;
	$nilai_qeprev_2024_feb_jateng=543286158;
	$vol_qeprev_2024_feb_jateng=44;
	$capex_vol_qeprev_2024_feb_jateng=12347413;
	$nilai_qeprev_2024_mar_jateng=667305440;
	$vol_qeprev_2024_mar_jateng=51;
	$capex_vol_qeprev_2024_mar_jateng=13084420;
	$nilai_qeprev_2024_apr_jateng=429842098;
	$vol_qeprev_2024_apr_jateng=45;
	$capex_vol_qeprev_2024_apr_jateng=9552047;
	$nilai_qeprev_2024_mei_jateng=776048198;
	$vol_qeprev_2024_mei_jateng=50;
	$capex_vol_qeprev_2024_mei_jateng=15520964;
	$nilai_qeprev_2024_jun_jateng=$line_qeprev['nilai_qeprev_2024_jun_jateng'];
	$vol_qeprev_2024_jun_jateng=$line_qeprev['vol_qeprev_2024_jun_jateng'];
	$capex_vol_qeprev_2024_jun_jateng=$nilai_qeprev_2024_jun_jateng / $vol_qeprev_2024_jun_jateng;
	$nilai_qeprev_2024_jul_jateng=$line_qeprev['nilai_qeprev_2024_jul_jateng'];
	$vol_qeprev_2024_jul_jateng=$line_qeprev['vol_qeprev_2024_jul_jateng'];
	$capex_vol_qeprev_2024_jul_jateng=$nilai_qeprev_2024_jul_jateng / $vol_qeprev_2024_jul_jateng;
	$nilai_qeprev_2024_agt_jateng=$line_qeprev['nilai_qeprev_2024_agt_jateng'];
	$vol_qeprev_2024_agt_jateng=$line_qeprev['vol_qeprev_2024_agt_jateng'];
	$capex_vol_qeprev_2024_agt_jateng=$nilai_qeprev_2024_agt_jateng / $vol_qeprev_2024_agt_jateng;
	$nilai_qeprev_2024_sept_jateng=$line_qeprev['nilai_qeprev_2024_sept_jateng'];
	$vol_qeprev_2024_sept_jateng=$line_qeprev['vol_qeprev_2024_sept_jateng'];
	$capex_vol_qeprev_2024_sept_jateng=$nilai_qeprev_2024_sept_jateng / $vol_qeprev_2024_sept_jateng;
	$tot_nilai_qeprev_jateng=$nilai_qeprev_2022_jateng+$nilai_qeprev_2023_jateng+$nilai_qeprev_2024_jan_jateng+$nilai_qeprev_2024_feb_jateng+$nilai_qeprev_2024_mar_jateng+$nilai_qeprev_2024_apr_jateng+$nilai_qeprev_2024_mei_jateng+$nilai_qeprev_2024_jun_jateng+$nilai_qeprev_2024_jul_jateng+$nilai_qeprev_2024_agt_jateng+$nilai_qeprev_2024_sept_jateng;
	
	$tot_vol_qeprev_jateng=$vol_qeprev_2022_jateng+$vol_qeprev_2023_jateng+$vol_qeprev_2024_jan_jateng+$vol_qeprev_2024_feb_jateng+$vol_qeprev_2024_mar_jateng+$vol_qeprev_2024_apr_jateng+$vol_qeprev_2024_mei_jateng+$vol_qeprev_2024_jun_jateng+$vol_qeprev_2024_jul_jateng+$vol_qeprev_2024_agt_jateng+$vol_qeprev_2024_sept_jateng;
	
	$tot_capex_vol_qeprev_jateng=$tot_nilai_qeprev_jateng / $tot_vol_qeprev_jateng;
	
	$po_qeprev_2022_jateng=0;
	$gr_qeprev_2022_jateng=0;
	$po_qeprev_2023_jateng=0;
	$gr_qeprev_2023_jateng=0;
	$po_qeprev_2024_jan_mei_jateng=4075458994;
	$gr_qeprev_2024_jan_mei_jateng=1917764231;
	$po_qeprev_2024_jateng=$po_qeprev_2024_jan_mei_jateng + $line_qeprev['po_qeprev_2024_jateng'];
	$gr_qeprev_2024_jateng=$gr_qeprev_2024_jan_mei_jateng + $line_qeprev['gr_qeprev_2024_jateng'];
	
	$tot_po_qeprev_jateng=$po_qeprev_2022_jateng+$po_qeprev_2023_jateng+$po_qeprev_2024_jateng;
	$tot_gr_qeprev_jateng=$gr_qeprev_2022_jateng+$gr_qeprev_2023_jateng+$gr_qeprev_2024_jateng;
	
	$persen_tot_po_gr_qeprev_jateng=($tot_gr_qeprev_jateng / $tot_po_qeprev_jateng) *100;
	$persen_tot_po_nilai_qeprev_jateng=($tot_po_qeprev_jateng / $tot_nilai_qeprev_jateng) *100;
	
	$sisa_target_totpo_qeprev_jateng=$target_qeprev_jateng - $tot_po_qeprev_jateng;
	$sisa_vol_qeprev_jateng=$sisa_target_totpo_qeprev_jateng / $tot_capex_vol_qeprev_jateng;
	
	$nilai_ogp_qeprev_jateng=$line_qeprev['nilai_ogp_qeprev_jateng'];
	$vol_ogp_qeprev_jateng=$line_qeprev['vol_ogp_qeprev_jateng'];
	$capex_vol_ogp_qeprev_jateng=$nilai_ogp_qeprev_jateng / $vol_ogp_qeprev_jateng;
	
	$nilai_outlook_qeprev_jateng=6132942000;
	$vol_outlook_qeprev_jateng=$nilai_outlook_qeprev_jateng / $tot_capex_vol_qeprev_jateng;
	$capex_vol_outlook_qeprev_jateng=$nilai_outlook_qeprev_jateng / $vol_outlook_qeprev_jateng;
	
	$nilai_so_qeprev_jateng=$line_qeprev['nilai_so_qeprev_jateng'];
	$vol_so_qeprev_jateng=$line_qeprev['vol_so_qeprev_jateng'];
	$capex_vol_so_qeprev_jateng=$nilai_so_qeprev_jateng / $vol_so_qeprev_jateng;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qeprev_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qeprev_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qeprev_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qeprev_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qeprev_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qeprev_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qeprev_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qeprev_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qeprev_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_qeprev_jateng,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_qeprev_jateng,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_qeprev_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_qeprev_jateng,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr style="background-color: #DFD;">
	<td><b>QE Recovery</b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
	</tr>
<?php 
$sql_qerecov='select (select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-5801-29-01-I\') target_jatimb,
(select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-4801-29-01-I\') target_jateng,
sum(nilai_qerecov_2024_jun_jatimb) nilai_qerecov_2024_jun_jatimb,sum(vol_qerecov_2024_jun_jatimb) vol_qerecov_2024_jun_jatimb,
sum(nilai_qerecov_2024_jul_jatimb) nilai_qerecov_2024_jul_jatimb,sum(vol_qerecov_2024_jul_jatimb) vol_qerecov_2024_jul_jatimb,
sum(nilai_qerecov_2024_agt_jatimb) nilai_qerecov_2024_agt_jatimb,sum(vol_qerecov_2024_agt_jatimb) vol_qerecov_2024_agt_jatimb,
sum(nilai_qerecov_2024_sept_jatimb) nilai_qerecov_2024_sept_jatimb,sum(vol_qerecov_2024_sept_jatimb) vol_qerecov_2024_sept_jatimb,
sum(po_qerecov_2024_jatimb) po_qerecov_2024_jatimb,sum(gr_qerecov_2024_jatimb) gr_qerecov_2024_jatimb,
sum(nilai_ogp_qerecov_jatimb) nilai_ogp_qerecov_jatimb,sum(vol_ogp_qerecov_jatimb) vol_ogp_qerecov_jatimb,
sum(nilai_so_qerecov_jatimb) nilai_so_qerecov_jatimb,sum(vol_so_qerecov_jatimb) vol_so_qerecov_jatimb,
sum(nilai_qerecov_2024_jun_non_jatimb) nilai_qerecov_2024_jun_non_jatimb,sum(vol_qerecov_2024_jun_non_jatimb) vol_qerecov_2024_jun_non_jatimb,
sum(nilai_qerecov_2024_jul_non_jatimb) nilai_qerecov_2024_jul_non_jatimb,sum(vol_qerecov_2024_jul_non_jatimb) vol_qerecov_2024_jul_non_jatimb,
sum(nilai_qerecov_2024_agt_non_jatimb) nilai_qerecov_2024_agt_non_jatimb,sum(vol_qerecov_2024_agt_non_jatimb) vol_qerecov_2024_agt_non_jatimb,
sum(nilai_qerecov_2024_sept_non_jatimb) nilai_qerecov_2024_sept_non_jatimb,sum(vol_qerecov_2024_sept_non_jatimb) vol_qerecov_2024_sept_non_jatimb,
sum(po_qerecov_2024_non_jatimb) po_qerecov_2024_non_jatimb,sum(gr_qerecov_2024_non_jatimb) gr_qerecov_2024_non_jatimb,
sum(nilai_ogp_qerecov_non_jatimb) nilai_ogp_qerecov_non_jatimb,sum(vol_ogp_qerecov_non_jatimb) vol_ogp_qerecov_non_jatimb,
sum(nilai_so_qerecov_non_jatimb) nilai_so_qerecov_non_jatimb,sum(vol_so_qerecov_non_jatimb) vol_so_qerecov_non_jatimb,
sum(nilai_qerecov_2024_jun_jateng) nilai_qerecov_2024_jun_jateng,sum(vol_qerecov_2024_jun_jateng) vol_qerecov_2024_jun_jateng,
sum(nilai_qerecov_2024_jul_jateng) nilai_qerecov_2024_jul_jateng,sum(vol_qerecov_2024_jul_jateng) vol_qerecov_2024_jul_jateng,
sum(nilai_qerecov_2024_agt_jateng) nilai_qerecov_2024_agt_jateng,sum(vol_qerecov_2024_agt_jateng) vol_qerecov_2024_agt_jateng,
sum(nilai_qerecov_2024_sept_jateng) nilai_qerecov_2024_sept_jateng,sum(vol_qerecov_2024_sept_jateng) vol_qerecov_2024_sept_jateng,
sum(po_qerecov_2024_jateng) po_qerecov_2024_jateng,sum(gr_qerecov_2024_jateng) gr_qerecov_2024_jateng,
sum(nilai_ogp_qerecov_jateng) nilai_ogp_qerecov_jateng,sum(vol_ogp_qerecov_jateng) vol_ogp_qerecov_jateng,
sum(nilai_so_qerecov_jateng) nilai_so_qerecov_jateng,sum(vol_so_qerecov_jateng) vol_so_qerecov_jateng
from
(select "PROGRAM",
concat(\'0\')::numeric nilai_qerecov_2024_jun_jatimb,
concat(\'0\')::numeric nilai_qerecov_2024_jul_jatimb,
concat(\'0\')::numeric nilai_qerecov_2024_agt_jatimb,
concat(\'0\')::numeric nilai_qerecov_2024_sept_jatimb,
concat(\'0\')::numeric vol_qerecov_2024_jun_jatimb,
concat(\'0\')::numeric vol_qerecov_2024_jul_jatimb,
concat(\'0\')::numeric vol_qerecov_2024_agt_jatimb,
concat(\'0\')::numeric vol_qerecov_2024_sept_jatimb,
concat(\'0\')::numeric nilai_qerecov_2024_jun_non_jatimb,
concat(\'0\')::numeric nilai_qerecov_2024_jul_non_jatimb,
concat(\'0\')::numeric nilai_qerecov_2024_agt_non_jatimb,
concat(\'0\')::numeric nilai_qerecov_2024_sept_non_jatimb,
concat(\'0\')::numeric vol_qerecov_2024_jun_non_jatimb,
concat(\'0\')::numeric vol_qerecov_2024_jul_non_jatimb,
concat(\'0\')::numeric vol_qerecov_2024_agt_non_jatimb,
concat(\'0\')::numeric vol_qerecov_2024_sept_non_jatimb,
concat(\'0\')::bigint po_qerecov_2024_jatimb,concat(\'0\')::bigint gr_qerecov_2024_jatimb,
concat(\'0\')::bigint po_qerecov_2024_non_jatimb,concat(\'0\')::bigint gr_qerecov_2024_non_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_qerecov_jatimb,
sum(case when "KET_MITRA" !=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_qerecov_non_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_qerecov_jatimb,
sum(case when "KET_MITRA" !=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_qerecov_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_qerecov_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_qerecov_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_qerecov_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_qerecov_non_jatimb,
concat(\'0\')::numeric nilai_qerecov_2024_jun_jateng,
concat(\'0\')::numeric nilai_qerecov_2024_jul_jateng,
concat(\'0\')::numeric nilai_qerecov_2024_agt_jateng,
concat(\'0\')::numeric nilai_qerecov_2024_sept_jateng,
concat(\'0\')::numeric vol_qerecov_2024_jun_jateng,
concat(\'0\')::numeric vol_qerecov_2024_jul_jateng,
concat(\'0\')::numeric vol_qerecov_2024_agt_jateng,
concat(\'0\')::numeric vol_qerecov_2024_sept_jateng,
concat(\'0\')::bigint po_qerecov_2024_jateng,concat(\'0\')::bigint gr_qerecov_2024_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_qerecov_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\' 
then 1 else 0 end) vol_ogp_qerecov_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_qerecov_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_qerecov_jateng
FROM develop."RPB_REKON"
where "PROGRAM" in (\'QE RECOVERY\') and "BUDGET_SOURCE" !=\'DID\' 
and "BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and "STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and "STATUS_SO" is not null
group by "PROGRAM"
union all
select a."PROGRAM",
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qerecov_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qerecov_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qerecov_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qerecov_2024_sept_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qerecov_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qerecov_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qerecov_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qerecov_2024_sept_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5801-29-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_qerecov_2024_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5801-29-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_qerecov_2024_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qerecov_2024_jun_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qerecov_2024_jul_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qerecov_2024_agt_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_qerecov_2024_sept_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qerecov_2024_jun_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qerecov_2024_jul_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qerecov_2024_agt_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA" !=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_qerecov_2024_sept_non_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA" !=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5801-29-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_qerecov_2024_non_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA" !=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5801-29-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_qerecov_2024_non_jatimb,
concat(\'0\')::numeric nilai_ogp_qerecov_jatimb,concat(\'0\')::numeric vol_ogp_qerecov_jatimb,
concat(\'0\')::numeric nilai_ogp_qerecov_non_jatimb,concat(\'0\')::numeric vol_ogp_qerecov_non_jatimb,
concat(\'0\')::numeric nilai_so_qerecov_jatimb,concat(\'0\')::numeric vol_so_qerecov_jatimb,
concat(\'0\')::numeric nilai_so_qerecov_non_jatimb,concat(\'0\')::numeric vol_so_qerecov_non_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qerecov_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qerecov_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qerecov_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_qerecov_2024_sept_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qerecov_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qerecov_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qerecov_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_qerecov_2024_sept_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4801-29-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_qerecov_2024_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4801-29-01-I\'  
then b."LOCAL_AMOUNT_GR" else 0 end) gr_qerecov_2024_jateng,
concat(\'0\')::numeric nilai_ogp_qerecov_jateng,concat(\'0\')::numeric vol_ogp_qerecov_jateng,
concat(\'0\')::numeric nilai_so_qerecov_jateng,concat(\'0\')::numeric vol_so_qerecov_jateng
FROM develop."RPB_REKON" a, develop."SAP" b
where SUBSTRING(a."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and a."PROGRAM" in (\'QE RECOVERY\')
and b."TGL_SAP"=current_date and a."BUDGET_SOURCE" !=\'DID\'
and a."BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and a."STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and a."STATUS_SO" is not null
group by a."PROGRAM") t
group by target_jatimb,target_jateng';
$get_qerecov=pg_query($sql_qerecov); 
?>
<tr>
<?php
while($line_qerecov=pg_fetch_array($get_qerecov)){
	$target_qerecov=$line_qerecov['target_jatimb'];
?>
	<td style="color: blue"><b>Jatim Balnus TA</b></td>
	<td rowspan='3' style="text-align:right"><b><?php echo number_format($target_qerecov,0,',','.');?></b></td>
	<td rowspan='3' style="text-align:center"><b>Tiket Gamas</b></td>
<?php 
	$nilai_qerecov_2022=2113042445;
	$vol_qerecov_2022=280;
	$capex_vol_qerecov_2022=$nilai_qerecov_2022 / $vol_qerecov_2022;
	$po_qerecov_2022=2113042445;
	$gr_qerecov_2022=0;
	$nilai_qerecov_2023=22111214589;
	$vol_qerecov_2023=7618;
	$capex_vol_qerecov_2023=$nilai_qerecov_2023 / $vol_qerecov_2023;
	$po_qerecov_2023=23760927587;
	$gr_qerecov_2023=35427382;
	$nilai_qerecov_2024_jan=40479670;
	$vol_qerecov_2024_jan=351;
	$capex_vol_qerecov_2024_jan=$nilai_qerecov_2024_jan / $vol_qerecov_2024_jan;
	$nilai_qerecov_2024_feb=414020;
	$vol_qerecov_2024_feb=274;
	$capex_vol_qerecov_2024_feb=$nilai_qerecov_2024_feb / $vol_qerecov_2024_feb;
	$nilai_qerecov_2024_mar=1346531068;
	$vol_qerecov_2024_mar=210;
	$capex_vol_qerecov_2024_mar=$nilai_qerecov_2024_mar / $vol_qerecov_2024_mar;
	$nilai_qerecov_2024_apr=37428058;
	$vol_qerecov_2024_apr=183;
	$capex_vol_qerecov_2024_apr=$nilai_qerecov_2024_apr / $vol_qerecov_2024_apr;
	$nilai_qerecov_2024_mei=2880619701;
	$vol_qerecov_2024_mei=570;
	$capex_vol_qerecov_2024_mei=$nilai_qerecov_2024_mei / $vol_qerecov_2024_mei;
	$nilai_qerecov_2024_jun=$line_qerecov['nilai_qerecov_2024_jun_jatimb'];
	$vol_qerecov_2024_jun=$line_qerecov['vol_qerecov_2024_jun_jatimb'];
	$capex_vol_qerecov_2024_jun=$nilai_qerecov_2024_jun / $vol_qerecov_2024_jun;
	$nilai_qerecov_2024_jul=$line_qerecov['nilai_qerecov_2024_jul_jatimb'];
	$vol_qerecov_2024_jul=$line_qerecov['vol_qerecov_2024_jul_jatimb'];
	$capex_vol_qerecov_2024_jul=$nilai_qerecov_2024_jul / $vol_qerecov_2024_jul;
	$nilai_qerecov_2024_agt_jatimb=$line_qerecov['nilai_qerecov_2024_agt_jatimb'];
	$vol_qerecov_2024_agt_jatimb=$line_qerecov['vol_qerecov_2024_agt_jatimb'];
	$capex_vol_qerecov_2024_agt_jatimb=$nilai_qerecov_2024_agt_jatimb / $vol_qerecov_2024_agt_jatimb;
	$nilai_qerecov_2024_sept_jatimb=$line_qerecov['nilai_qerecov_2024_sept_jatimb'];
	$vol_qerecov_2024_sept_jatimb=$line_qerecov['vol_qerecov_2024_sept_jatimb'];
	$capex_vol_qerecov_2024_sept_jatimb=$nilai_qerecov_2024_sept_jatimb / $vol_qerecov_2024_sept_jatimb;
	
	$nilai_qerecov_2022_non=0;
	$vol_qerecov_2022_non=0;
	$capex_vol_qerecov_2022_non=$nilai_qerecov_2022_non / $vol_qerecov_2022_non;
	$po_qerecov_2022_non=0;
	$gr_qerecov_2022_non=0;
	$nilai_qerecov_2023_non=607675426;
	$vol_qerecov_2023_non=6;
	$capex_vol_qerecov_2023_non=$nilai_qerecov_2023_non / $vol_qerecov_2023_non;
	$po_qerecov_2023_non=0;
	$gr_qerecov_2023_non=0;
	$nilai_qerecov_2024_jan_non=85002884;
	$vol_qerecov_2024_jan_non=9;
	$capex_vol_qerecov_2024_jan_non=$nilai_qerecov_2024_jan_non / $vol_qerecov_2024_jan_non;
	$nilai_qerecov_2024_feb_non=0;
	$vol_qerecov_2024_feb_non=0;
	$capex_vol_qerecov_2024_feb_non=$nilai_qerecov_2024_feb_non / $vol_qerecov_2024_feb_non;
	$nilai_qerecov_2024_mar_non=0;
	$vol_qerecov_2024_mar_non=0;
	$capex_vol_qerecov_2024_mar_non=$nilai_qerecov_2024_mar_non / $vol_qerecov_2024_mar_non;
	$nilai_qerecov_2024_apr_non=202915262;
	$vol_qerecov_2024_apr_non=1;
	$capex_vol_qerecov_2024_apr_non=$nilai_qerecov_2024_apr_non / $vol_qerecov_2024_apr_non;
	$nilai_qerecov_2024_mei_non=0;
	$vol_qerecov_2024_mei_non=0;
	$capex_vol_qerecov_2024_mei_non=$nilai_qerecov_2024_mei_non / $vol_qerecov_2024_mei_non;
	$nilai_qerecov_2024_jun_non=$line_qerecov['nilai_qerecov_2024_jun_non_jatimb'];
	$vol_qerecov_2024_jun_non=$line_qerecov['vol_qerecov_2024_jun_non_jatimb'];
	$capex_vol_qerecov_2024_jun_non=$nilai_qerecov_2024_jun_non / $vol_qerecov_2024_jun_non;
	$nilai_qerecov_2024_jul_non=$line_qerecov['nilai_qerecov_2024_jul_non_jatimb'];
	$vol_qerecov_2024_jul_non=$line_qerecov['vol_qerecov_2024_jul_non_jatimb'];
	$capex_vol_qerecov_2024_jul_non=$nilai_qerecov_2024_jul_non / $vol_qerecov_2024_jul_non;
	$nilai_qerecov_2024_agt_non_jatimb=$line_qerecov['nilai_qerecov_2024_agt_non_jatimb'];
	$vol_qerecov_2024_agt_non_jatimb=$line_qerecov['vol_qerecov_2024_agt_non_jatimb'];
	$capex_vol_qerecov_2024_agt_non_jatimb=$nilai_qerecov_2024_agt_non_jatimb / $vol_qerecov_2024_agt_non_jatimb;
	if(is_nan($capex_vol_qerecov_2024_agt_non_jatimb)){
		$capex_vol_qerecov_2024_agt_non_jatimb=0;
	}else{
		$capex_vol_qerecov_2024_agt_non_jatimb=$capex_vol_qerecov_2024_agt_non_jatimb;
	}
	$nilai_qerecov_2024_sept_non_jatimb=$line_qerecov['nilai_qerecov_2024_sept_non_jatimb'];
	$vol_qerecov_2024_sept_non_jatimb=$line_qerecov['vol_qerecov_2024_sept_non_jatimb'];
	$capex_vol_qerecov_2024_sept_non_jatimb=$nilai_qerecov_2024_sept_non_jatimb / $vol_qerecov_2024_sept_non_jatimb;
	if(is_nan($capex_vol_qerecov_2024_sept_non_jatimb)){
		$capex_vol_qerecov_2024_sept_non_jatimb=0;
	}else{
		$capex_vol_qerecov_2024_sept_non_jatimb=$capex_vol_qerecov_2024_sept_non_jatimb;
	}
	
	$nilai_qerecov_2022_tot=$nilai_qerecov_2022+$nilai_qerecov_2022_non;
	$vol_qerecov_2022_tot=$vol_qerecov_2022+$vol_qerecov_2022_non;
	$capex_vol_qerecov_2022_tot=$nilai_qerecov_2022_tot / $vol_qerecov_2022_tot;
	$po_qerecov_2022_tot=$po_qerecov_2022+$po_qerecov_2022_non;
	$gr_qerecov_2022_tot=$gr_qerecov_2022_tot+$gr_qerecov_2022_non;
	$nilai_qerecov_2023_tot=$nilai_qerecov_2023+$nilai_qerecov_2023_non;
	$vol_qerecov_2023_tot=$vol_qerecov_2023+$vol_qerecov_2023_non;
	$capex_vol_qerecov_2023_tot=$nilai_qerecov_2023_tot / $vol_qerecov_2023_tot;
	$po_qerecov_2023_tot=$po_qerecov_2023+$po_qerecov_2023_non;
	$gr_qerecov_2023_tot=$gr_qerecov_2023+$gr_qerecov_2023_non;
	$nilai_qerecov_2024_jan_tot=$nilai_qerecov_2024_jan+$nilai_qerecov_2024_jan_non;
	$vol_qerecov_2024_jan_tot=$vol_qerecov_2024_jan+$vol_qerecov_2024_jan_non;
	$capex_vol_qerecov_2024_jan_tot=$nilai_qerecov_2024_jan_tot / $vol_qerecov_2024_jan_tot;
	$nilai_qerecov_2024_feb_tot=$nilai_qerecov_2024_feb+$nilai_qerecov_2024_feb_non;
	$vol_qerecov_2024_feb_tot=$vol_qerecov_2024_feb+$vol_qerecov_2024_feb_non;
	$capex_vol_qerecov_2024_feb_tot=$nilai_qerecov_2024_feb_tot / $vol_qerecov_2024_feb_tot;
	$nilai_qerecov_2024_mar_tot=$nilai_qerecov_2024_mar+$nilai_qerecov_2024_mar_non;
	$vol_qerecov_2024_mar_tot=$vol_qerecov_2024_mar+$vol_qerecov_2024_mar_non;
	$capex_vol_qerecov_2024_mar_tot=$nilai_qerecov_2024_mar_tot / $vol_qerecov_2024_mar_tot;
	$nilai_qerecov_2024_apr_tot=$nilai_qerecov_2024_apr+$nilai_qerecov_2024_apr_non;
	$vol_qerecov_2024_apr_tot=$vol_qerecov_2024_apr+$vol_qerecov_2024_apr_non;
	$capex_vol_qerecov_2024_apr_tot=$nilai_qerecov_2024_apr_tot / $vol_qerecov_2024_apr_tot;
	$nilai_qerecov_2024_mei_tot=$nilai_qerecov_2024_mei+$nilai_qerecov_2024_mei_non;
	$vol_qerecov_2024_mei_tot=$vol_qerecov_2024_mei+$vol_qerecov_2024_mei_non;
	$capex_vol_qerecov_2024_mei_tot=$nilai_qerecov_2024_mei_tot / $vol_qerecov_2024_mei_tot;
	$nilai_qerecov_2024_agt_tot_jatimb=$nilai_qerecov_2024_agt_jatimb + $nilai_qerecov_2024_agt_non_jatimb;
	$vol_qerecov_2024_agt_tot_jatimb=$vol_qerecov_2024_agt_jatimb + $vol_qerecov_2024_agt_non_jatimb;
	$capex_vol_qerecov_2024_agt_tot_jatimb=$nilai_qerecov_2024_agt_tot_jatimb / $vol_qerecov_2024_agt_tot_jatimb;
	$nilai_qerecov_2024_sept_tot_jatimb=$nilai_qerecov_2024_sept_jatimb + $nilai_qerecov_2024_sept_non_jatimb;
	$vol_qerecov_2024_sept_tot_jatimb=$vol_qerecov_2024_sept_jatimb + $vol_qerecov_2024_sept_non_jatimb;
	$capex_vol_qerecov_2024_sept_tot_jatimb=$nilai_qerecov_2024_sept_tot_jatimb / $vol_qerecov_2024_sept_tot_jatimb;
	

   	$po_qerecov_2024_jan_mei=6269429571;
	$gr_qerecov_2024_jan_mei=590306878;
	$po_qerecov_2024=$po_qerecov_2024_jan_mei + $line_qerecov['po_qerecov_2024_jatimb'];
	$gr_qerecov_2024=$gr_qerecov_2024_jan_mei + $line_qerecov['gr_qerecov_2024_jatimb'];
	
	$tot_nilai_qerecov=$nilai_qerecov_2022+$nilai_qerecov_2023+$nilai_qerecov_2024_jan+$nilai_qerecov_2024_feb+$nilai_qerecov_2024_mar+$nilai_qerecov_2024_apr+$nilai_qerecov_2024_mei+$nilai_qerecov_2024_jun+$nilai_qerecov_2024_jul+$nilai_qerecov_2024_agt_jatimb+$nilai_qerecov_2024_sept_jatimb;
	$tot_vol_qerecov=$vol_qerecov_2022+$vol_qerecov_2023+$vol_qerecov_2024_jan+$vol_qerecov_2024_feb+$vol_qerecov_2024_mar+$vol_qerecov_2024_apr+$vol_qerecov_2024_mei+$vol_qerecov_2024_jun+$vol_qerecov_2024_jul+$vol_qerecov_2024_agt_jatimb+$vol_qerecov_2024_sept_jatimb;
	
	$tot_capex_vol_qerecov=$tot_nilai_qerecov / $tot_vol_qerecov;
	$tot_nilai_qerecov_non=$nilai_qerecov_2022_non+$nilai_qerecov_2023_non+$nilai_qerecov_2024_jan_non+$nilai_qerecov_2024_feb_non+$nilai_qerecov_2024_mar_non+$nilai_qerecov_2024_apr_non+$nilai_qerecov_2024_mei_non+$nilai_qerecov_2024_jun_non+$nilai_qerecov_2024_jul_non+$nilai_qerecov_2024_agt_non_jatimb+$nilai_qerecov_2024_sept_non_jatimb;
	$tot_vol_qerecov_non=$vol_qerecov_2022_non+$vol_qerecov_2023_non+$vol_qerecov_2024_jan_non+$vol_qerecov_2024_feb_non+$vol_qerecov_2024_mar_non+$vol_qerecov_2024_apr_non+$vol_qerecov_2024_mei_non+$vol_qerecov_2024_jun_non+$vol_qerecov_2024_jul_non+$vol_qerecov_2024_agt_non_jatimb+$vol_qerecov_2024_sept_non_jatimb;
	
	$tot_capex_vol_qerecov_non=$tot_nilai_qerecov_non / $tot_vol_qerecov_non;

	$tot_po_qerecov=$po_qerecov_2022+$po_qerecov_2023+$po_qerecov_2024;
	$tot_gr_qerecov=$gr_qerecov_2022+$gr_qerecov_2023+$gr_qerecov_2024;
	$tot_nilai_qerecov_tot=$tot_nilai_qerecov + $tot_nilai_qerecov_non;
	$tot_vol_qerecov_tot=$tot_vol_qerecov+$tot_vol_qerecov_non;
	$tot_capex_vol_qerecov_tot=$tot_capex_vol_qerecov+$tot_capex_vol_qerecov_non;
	$tot_po_qerecov_tot=$tot_po_qerecov+$tot_po_qerecov_non;
	$tot_gr_qerecov_tot=$tot_gr_qerecov+$tot_gr_qerecov_non;
	
	$persen_tot_po_gr_qerecov=($tot_gr_qerecov / $tot_po_qerecov) *100;
	$persen_tot_po_nilai_qerecov=($tot_po_qerecov / $tot_nilai_qerecov) *100;
	$persen_tot_po_gr_qerecov_non=($tot_gr_qerecov_non / $tot_po_qerecov_non) *100;
	if(is_nan($persen_tot_po_gr_qerecov_non)){
		$persen_tot_po_gr_qerecov_non=0;
	}else{
		$persen_tot_po_gr_qerecov_non=$persen_tot_po_gr_qerecov_non;
	}
	$persen_tot_po_nilai_qerecov_non=($tot_po_qerecov_non / $tot_nilai_qerecov_non) *100;
	
	$sisa_target_totpo_qerecov=$target_qerecov - $tot_po_qerecov;
	$sisa_vol_qerecov=$sisa_target_totpo_qerecov / $tot_capex_vol_qerecov;
	$sisa_target_totpo_qerecov_non=$target_qerecov - $tot_po_qerecov_non;
	$sisa_vol_qerecov_non=$sisa_target_totpo_qerecov_non / $tot_capex_vol_qerecov_non;
	
	$tot_persen_tot_po_gr_qerecov=$persen_tot_po_gr_qerecov + $persen_tot_po_gr_qerecov_non;
	$tot_persen_tot_po_nilai_qerecov=$persen_tot_po_nilai_qerecov + $persen_tot_po_nilai_qerecov_non;
	$tot_sisa_target_totpo_qerecov=$sisa_target_totpo_qerecov + $sisa_target_totpo_qerecov_non;
	$tot_sisa_vol_qerecov=$sisa_vol_qerecov + $sisa_vol_qerecov_non;
	
	$nilai_ogp_qerecov=$line_qerecov['nilai_ogp_qerecov_jatimb'];
	$vol_ogp_qerecov=$line_qerecov['vol_ogp_qerecov_jatimb'];
	$capex_vol_ogp_qerecov=$nilai_ogp_qerecov / $vol_ogp_qerecov;
	
	$nilai_outlook_qerecov=58451114168;
	$vol_outlook_qerecov=$nilai_outlook_qerecov / $tot_capex_vol_qerecov;
	$capex_vol_outlook_qerecov=$nilai_outlook_qerecov / $vol_outlook_qerecov;
	
	$nilai_ogp_qerecov_non=$line_qerecov['nilai_ogp_qerecov_non_jatimb'];
	$vol_ogp_qerecov_non=$line_qerecov['vol_ogp_qerecov_non_jatimb'];
	$capex_vol_ogp_qerecov_non=$nilai_ogp_qerecov_non / $vol_ogp_qerecov_non;
	if(is_nan($capex_vol_ogp_qerecov_non)){
		$capex_vol_ogp_qerecov_non=0;
	}else{
		$capex_vol_ogp_qerecov_non=$capex_vol_ogp_qerecov_non;
	}
	
	$nilai_outlook_qerecov_non=0;
	$vol_outlook_qerecov_non=$nilai_outlook_qerecov_non / $tot_capex_vol_qerecov_non;
	$capex_vol_outlook_qerecov_non=$nilai_outlook_qerecov_non / $vol_outlook_qerecov_non;
	if(is_nan($capex_vol_outlook_qerecov_non)){
		$capex_vol_outlook_qerecov_non=0;
	}else{
		$capex_vol_outlook_qerecov_non=$capex_vol_outlook_qerecov_non;
	}
	
	$tot_nilai_ogp_qerecov=$nilai_ogp_qerecov + $nilai_ogp_qerecov_non;
	$tot_vol_ogp_qerecov=$vol_ogp_qerecov + $vol_ogp_qerecov_non;
	$tot_capex_vol_ogp_qerecov=$tot_nilai_ogp_qerecov / $tot_vol_ogp_qerecov;
	
	$tot_nilai_outlook_qerecov=$nilai_outlook_qerecov + $nilai_outlook_qerecov_non;
	$tot_vol_outlook_qerecov=$vol_outlook_qerecov + $vol_outlook_qerecov_non;
	$tot_capex_vol_outlook_qerecov=$tot_nilai_outlook_qerecov / $tot_vol_outlook_qerecov;
	
	$nilai_so_qerecov_jatimb=$line_qerecov['nilai_so_qerecov_jatimb'];
	$vol_so_qerecov_jatimb=$line_qerecov['vol_so_qerecov_jatimb'];
	$capex_vol_so_qerecov_jatimb=$nilai_so_qerecov_jatimb / $vol_so_qerecov_jatimb;

	$nilai_so_qerecov_non_jatimb=$line_qerecov['nilai_so_qerecov_non_jatimb'];
	$vol_so_qerecov_non_jatimb=$line_qerecov['vol_so_qerecov_non_jatimb'];
	$capex_vol_so_qerecov_non_jatimb=$nilai_so_qerecov_non_jatimb / $vol_so_qerecov_non_jatimb;
	if(is_nan($capex_vol_so_qerecov_non_jatimb)){
		$capex_vol_so_qerecov_non_jatimb=0;
	}else{
		$capex_vol_so_qerecov_non_jatimb=$capex_vol_so_qerecov_non_jatimb;
	}

	$tot_nilai_so_qerecov_jatimb=$nilai_so_qerecov_jatimb + $nilai_so_qerecov_non_jatimb;
	$tot_vol_so_qerecov_jatimb=$vol_so_qerecov_jatimb + $vol_so_qerecov_non_jatimb;
	$tot_capex_vol_so_qerecov_jatimb=$tot_nilai_so_qerecov_jatimb / $tot_vol_so_qerecov_jatimb;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2022,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qerecov_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qerecov_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2023,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qerecov_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qerecov_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_jan,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_feb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_mar,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_apr,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_mei,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_jun,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_jul,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qerecov_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qerecov_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_qerecov,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_qerecov,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_qerecov,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_qerecov,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_qerecov,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_qerecov,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_qerecov_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_qerecov_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_qerecov_jatimb,0,',','.');?></b></td>
</tr>
<?php } ?>
<tr>
	<td style="color: blue"><b>Jatim Balnus NON TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2022_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qerecov_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qerecov_2022_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2023_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qerecov_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qerecov_2023_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_jan_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_feb_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_feb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_feb_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_mar_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_apr_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_apr_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_apr_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_mei_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_jun_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_jun_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_jun_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_jul_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_jul_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_jul_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_agt_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_agt_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_agt_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_sept_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_sept_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_sept_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qerecov_2024_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qerecov_2024_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_qerecov_non,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_qerecov_non,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_qerecov_non,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_qerecov_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_qerecov_non_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_qerecov_non_jatimb,0,',','.');?></b></td>
</tr>
<tr>
	<td style="color: blue"><b>Jatim Balnus All Mitra</b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2022_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qerecov_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qerecov_2022_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2023_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qerecov_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qerecov_2023_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_jan_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_feb_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_feb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_feb_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_mar_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_mar_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_mar_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_apr_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_mei_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_mei_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_mei_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_jun_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_jun_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_jun_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_jul_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_jul_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_jul_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_agt_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_agt_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_agt_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_sept_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_sept_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_sept_tot_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qerecov_2024_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qerecov_2024_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_qerecov_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_qerecov_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_qerecov_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_qerecov_tot,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_qerecov_tot,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_persen_tot_po_gr_qerecov,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_persen_tot_po_nilai_qerecov,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_sisa_target_totpo_qerecov,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_sisa_vol_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_ogp_qerecov,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_ogp_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_ogp_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_outlook_qerecov,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_outlook_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_outlook_qerecov,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_so_qerecov_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($tot_vol_so_qerecov_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_so_qerecov_jatimb,0,',','.');?></b></td>
</tr>
<tr>
<?php
$get_qerecov=pg_query($sql_qerecov);
while($line_qerecov=pg_fetch_array($get_qerecov)){
	$target_qerecov_jateng=$line_qerecov['target_jateng'];
?>
	<td style="color: blue"><b>Jateng TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b>Tiket Gamas</b></td>
	<?php 
	$nilai_qerecov_2022_jateng=0;
	$vol_qerecov_2022=0;
	$capex_vol_qerecov_2022_jateng=$nilai_qerecov_2022_jateng / $vol_qerecov_2022_jateng;
	if(is_nan($capex_vol_qerecov_2022_jateng)){
		$capex_vol_qerecov_2022_jateng=0;
	}else{
		$capex_vol_qerecov_2022_jateng=$capex_vol_qerecov_jateng_2022;
	}
	$nilai_qerecov_2023_jateng=12666362763;
	$vol_qerecov_2023_jateng=10384;
	$capex_vol_qerecov_2023_jateng=1219796;
	$nilai_qerecov_2024_jan_jateng=2447084333;
	$vol_qerecov_2024_jan_jateng=248;
	$capex_vol_qerecov_2024_jan_jateng=986728;
	$nilai_qerecov_2024_feb_jateng=2332765885;
	$vol_qerecov_2024_feb_jateng=2685;
	$capex_vol_qerecov_2024_feb_jateng=868814;
	$nilai_qerecov_2024_mar_jateng=2630134270;
	$vol_qerecov_2024_mar_jateng=3025;
	$capex_vol_qerecov_2024_mar_jateng=869466;
	$nilai_qerecov_2024_apr_jateng=1773662827;
	$vol_qerecov_2024_apr_jateng=2166;
	$capex_vol_qerecov_2024_apr_jateng=818866;
	$nilai_qerecov_2024_mei_jateng=2432586429;
	$vol_qerecov_2024_mei_jateng=2858;
	$capex_vol_qerecov_2024_mei_jateng=85115;
	$nilai_qerecov_2024_jun_jateng=$line_qerecov['nilai_qerecov_2024_jun_jateng'];
	$vol_qerecov_2024_jun_jateng=$line_qerecov['vol_qerecov_2024_jun_jateng'];
	$capex_vol_qerecov_2024_jun_jateng=$nilai_qerecov_2024_jun_jateng / $vol_qerecov_2024_jun_jateng;
	$nilai_qerecov_2024_jul_jateng=$line_qerecov['nilai_qerecov_2024_jul_jateng'];
	$vol_qerecov_2024_jul_jateng=$line_qerecov['vol_qerecov_2024_jul_jateng'];
	$capex_vol_qerecov_2024_jul_jateng=$nilai_qerecov_2024_jul_jateng / $vol_qerecov_2024_jul_jateng;
	$nilai_qerecov_2024_agt_jateng=$line_qerecov['nilai_qerecov_2024_agt_jateng'];
	$vol_qerecov_2024_agt_jateng=$line_qerecov['vol_qerecov_2024_agt_jateng'];
	$capex_vol_qerecov_2024_agt_jateng=$nilai_qerecov_2024_agt_jateng / $vol_qerecov_2024_agt_jateng;
	$nilai_qerecov_2024_sept_jateng=$line_qerecov['nilai_qerecov_2024_sept_jateng'];
	$vol_qerecov_2024_sept_jateng=$line_qerecov['vol_qerecov_2024_sept_jateng'];
	$capex_vol_qerecov_2024_sept_jateng=$nilai_qerecov_2024_sept_jateng / $vol_qerecov_2024_sept_jateng;
	$tot_nilai_qerecov_jateng=$nilai_qerecov_2022_jateng+$nilai_qerecov_2023_jateng+$nilai_qerecov_2024_jan_jateng+$nilai_qerecov_2024_feb_jateng+$nilai_qerecov_2024_mar_jateng+$nilai_qerecov_2024_apr_jateng+$nilai_qerecov_2024_mei_jateng+$nilai_qerecov_2024_jun_jateng+$nilai_qerecov_2024_jul_jateng+$nilai_qerecov_2024_agt_jateng+$nilai_qerecov_2024_sept_jateng;
	
	$tot_vol_qerecov_jateng=$vol_qerecov_2022_jateng+$vol_qerecov_2023_jateng+$vol_qerecov_2024_jan_jateng+$vol_qerecov_2024_feb_jateng+$vol_qerecov_2024_mar_jateng+$vol_qerecov_2024_apr_jateng+$vol_qerecov_2024_mei_jateng+$vol_qerecov_2024_jun_jateng+$vol_qerecov_2024_jul_jateng+$vol_qerecov_2024_agt_jateng+$vol_qerecov_2024_sept_jateng;
	
	$tot_capex_vol_qerecov_jateng=$tot_nilai_qerecov_jateng / $tot_vol_qerecov_jateng;
	
	$po_qerecov_2022_jateng=0;
	$gr_qerecov_2022_jateng=0;
	$po_qerecov_2023_jateng=0;
	$gr_qerecov_2023_jateng=0;
	$po_qerecov_2024_jan_mei_jateng=26945908113;
	$gr_qerecov_2024_jan_mei_jateng=12992091590;
	$po_qerecov_2024_jateng=$po_qerecov_2024_jan_mei_jateng + $line_qerecov['po_qerecov_2024_jateng'];
	$gr_qerecov_2024_jateng=$gr_qerecov_2024_jan_mei_jateng + $line_qerecov['gr_qerecov_2024_jateng'];
	
	$tot_po_qerecov_jateng=$po_qerecov_2022_jateng+$po_qerecov_2023_jateng+$po_qerecov_2024_jateng;
	$tot_gr_qerecov_jateng=$gr_qerecov_2022_jateng+$gr_qerecov_2023_jateng+$gr_qerecov_2024_jateng;
	
	$persen_tot_po_gr_qerecov_jateng=($tot_gr_qerecov_jateng / $tot_po_qerecov_jateng) *100;
	$persen_tot_po_nilai_qerecov_jateng=($tot_po_qerecov_jateng / $tot_nilai_qerecov_jateng) *100;
	
	$sisa_target_totpo_qerecov_jateng=$target_qerecov_jateng - $tot_po_qerecov_jateng;
	$sisa_vol_qerecov_jateng=$sisa_target_totpo_qerecov_jateng / $tot_capex_vol_qerecov_jateng;
	
	$nilai_ogp_qerecov_jateng=$line_qerecov['nilai_ogp_qerecov_jateng'];
	$vol_ogp_qerecov_jateng=$line_qerecov['vol_ogp_qerecov_jateng'];
	$capex_vol_ogp_qerecov_jateng=$nilai_ogp_qerecov_jateng / $vol_ogp_qerecov_jateng;
	
	$nilai_outlook_qerecov_jateng=15992420129;
	$vol_outlook_qerecov_jateng=$nilai_outlook_qerecov_jateng / $tot_capex_vol_qerecov_jateng;
	$capex_vol_outlook_qerecov_jateng=$nilai_outlook_qerecov_jateng / $vol_outlook_qerecov_jateng;
	
	$nilai_so_qerecov_jateng=$line_qerecov['nilai_so_qerecov_jateng'];
	$vol_so_qerecov_jateng=$line_qerecov['vol_so_qerecov_jateng'];
	$capex_vol_so_qerecov_jateng=$nilai_so_qerecov_jateng / $vol_so_qerecov_jateng;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qerecov_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qerecov_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qerecov_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qerecov_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_qerecov_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_qerecov_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_qerecov_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_qerecov_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_qerecov_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_qerecov_jateng,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_qerecov_jateng,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_qerecov_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_qerecov_jateng,0,',','.');?></b></td>
<?php } ?>
</tr>
<tr style="background-color: #DFD;">
	<td><b>NIQE</b></td>
<?php for($a=1;$a<=59;$a++){ ?>
	<td><b><center>&nbsp;</center></b></td>
<?php } ?>
	</tr>
<?php 
$sql_niqe='select (select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-5801-13-01-I\') target_jatimb,
(select "TARGET" from develop."SAP_TARGET_NEW2024" where "WBS_ELEMENT"=\'T-24-4801-13-01-I\') target_jateng,
sum(nilai_niqe_2024_jun_jatimb) nilai_niqe_2024_jun_jatimb,sum(vol_niqe_2024_jun_jatimb) vol_niqe_2024_jun_jatimb,
sum(nilai_niqe_2024_jul_jatimb) nilai_niqe_2024_jul_jatimb,sum(vol_niqe_2024_jul_jatimb) vol_niqe_2024_jul_jatimb,
sum(nilai_niqe_2024_agt_jatimb) nilai_niqe_2024_agt_jatimb,sum(vol_niqe_2024_agt_jatimb) vol_niqe_2024_agt_jatimb,
sum(nilai_niqe_2024_sept_jatimb) nilai_niqe_2024_sept_jatimb,sum(vol_niqe_2024_sept_jatimb) vol_niqe_2024_sept_jatimb,
sum(po_niqe_2024_jatimb) po_niqe_2024_jatimb,sum(gr_niqe_2024_jatimb) gr_niqe_2024_jatimb,
sum(nilai_ogp_niqe_jatimb) nilai_ogp_niqe_jatimb,sum(vol_ogp_niqe_jatimb) vol_ogp_niqe_jatimb,
sum(nilai_so_niqe_jatimb) nilai_so_niqe_jatimb,sum(vol_so_niqe_jatimb) vol_so_niqe_jatimb,
sum(nilai_niqe_2024_jun_jateng) nilai_niqe_2024_jun_jateng,sum(vol_niqe_2024_jun_jateng) vol_niqe_2024_jun_jateng,
sum(nilai_niqe_2024_jul_jateng) nilai_niqe_2024_jul_jateng,sum(vol_niqe_2024_jul_jateng) vol_niqe_2024_jul_jateng,
sum(nilai_niqe_2024_agt_jateng) nilai_niqe_2024_agt_jateng,sum(vol_niqe_2024_agt_jateng) vol_niqe_2024_agt_jateng,
sum(nilai_niqe_2024_sept_jateng) nilai_niqe_2024_sept_jateng,sum(vol_niqe_2024_sept_jateng) vol_niqe_2024_sept_jateng,
sum(po_niqe_2024_jateng) po_niqe_2024_jateng,sum(gr_niqe_2024_jateng) gr_niqe_2024_jateng,
sum(nilai_ogp_niqe_jateng) nilai_ogp_niqe_jateng,sum(vol_ogp_niqe_jateng) vol_ogp_niqe_jateng,
sum(nilai_so_niqe_jateng) nilai_so_niqe_jateng,sum(vol_so_niqe_jateng) vol_so_niqe_jateng
from
(select "PROGRAM",
concat(\'0\')::numeric nilai_niqe_2024_jun_jatimb,
concat(\'0\')::numeric nilai_niqe_2024_jul_jatimb,
concat(\'0\')::numeric nilai_niqe_2024_agt_jatimb,
concat(\'0\')::numeric nilai_niqe_2024_sept_jatimb,
concat(\'0\')::numeric vol_niqe_2024_jun_jatimb,
concat(\'0\')::numeric vol_niqe_2024_jul_jatimb,
concat(\'0\')::numeric vol_niqe_2024_agt_jatimb,
concat(\'0\')::numeric vol_niqe_2024_sept_jatimb,
concat(\'0\')::bigint po_niqe_2024_jatimb,concat(\'0\')::bigint gr_niqe_2024_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_niqe_jatimb,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_ogp_niqe_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_niqe_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jatim Balnus\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_niqe_jatimb,
concat(\'0\')::numeric nilai_niqe_2024_jun_jateng,
concat(\'0\')::numeric nilai_niqe_2024_jul_jateng,
concat(\'0\')::numeric nilai_niqe_2024_agt_jateng,
concat(\'0\')::numeric nilai_niqe_2024_sept_jateng,
concat(\'0\')::numeric vol_niqe_2024_jun_jateng,
concat(\'0\')::numeric vol_niqe_2024_jul_jateng,
concat(\'0\')::numeric vol_niqe_2024_agt_jateng,
concat(\'0\')::numeric vol_niqe_2024_sept_jateng,
concat(\'0\')::bigint po_niqe_2024_jateng,concat(\'0\')::bigint gr_niqe_2024_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\'
then "NILAI_REALISASI" else 0 end) nilai_ogp_niqe_jateng,
sum(case when "KET_MITRA"=\'TELKOM AKSES\' and "PROJECT_STATUS"=\'OGP\' and "TERITORY"=\'Jateng\' 
then 1 else 0 end) vol_ogp_niqe_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then "NILAI_REALISASI" else 0 end) nilai_so_niqe_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "TERITORY"=\'Jateng\' and not exists (select * from develop."SAP" b where SUBSTRING(develop."RPB_REKON"."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and b."TGL_SAP"=current_date) then 1 else 0 end) vol_so_niqe_jateng
FROM develop."RPB_REKON"
where "PROGRAM" in (\'NIQE\') and "BUDGET_SOURCE" !=\'DID\' 
and "BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and "STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and "STATUS_SO" is not null
group by "PROGRAM"
union all
select a."PROGRAM",
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_niqe_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_niqe_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_niqe_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then "NILAI_REALISASI" else 0 end) nilai_niqe_2024_sept_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_niqe_2024_jun_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_niqe_2024_jul_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_niqe_2024_agt_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jatim Balnus\' then 1 else 0 end) vol_niqe_2024_sept_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5801-13-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_niqe_2024_jatimb,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jatim Balnus\' and b."WBS_ELEMENT"=\'T-24-5801-13-01-I\' then b."LOCAL_AMOUNT_GR" else 0 end) gr_niqe_2024_jatimb,
concat(\'0\')::numeric nilai_ogp_niqe_jatimb,concat(\'0\')::numeric vol_ogp_niqe_jatimb,
concat(\'0\')::numeric nilai_so_niqe_jatimb,concat(\'0\')::numeric vol_so_niqe_jatimb,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_niqe_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_niqe_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_niqe_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then "NILAI_REALISASI" else 0 end) nilai_niqe_2024_sept_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'6\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_niqe_2024_jun_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'7\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_niqe_2024_jul_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'8\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_niqe_2024_agt_jateng,
sum(case when "TAHUN"=\'2024\' and "KET_MITRA"=\'TELKOM AKSES\' and "BULAN"=\'9\' and "PROJECT_STATUS"=\'SELESAI\' and "TERITORY"=\'Jateng\' then 1 else 0 end) vol_niqe_2024_sept_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4801-13-01-I\' then "DOC_TOT_AMOUNT_PO" else 0 end) po_niqe_2024_jateng,
sum(case when a."TAHUN"=\'2024\' and a."KET_MITRA"=\'TELKOM AKSES\' and a."TERITORY"=\'Jateng\' and b."WBS_ELEMENT"=\'T-24-4801-13-01-I\'  
then b."LOCAL_AMOUNT_GR" else 0 end) gr_niqe_2024_jateng,
concat(\'0\')::numeric nilai_ogp_niqe_jateng,concat(\'0\')::numeric vol_ogp_niqe_jateng,
concat(\'0\')::numeric nilai_so_niqe_jateng,concat(\'0\')::numeric vol_so_niqe_jateng
FROM develop."RPB_REKON" a, develop."SAP" b
where SUBSTRING(a."PROJECT_DESC", 1, 40) = b."SHORT_TEX" and a."PROGRAM" in (\'NIQE\')
and b."TGL_SAP"=current_date and a."BUDGET_SOURCE" !=\'DID\'
and a."BULAN" not in (\'1\',\'2\',\'3\',\'4\',\'5\') and a."STATUS_SO" not in (\'\',\'DROP\',\'NOK\')
and a."STATUS_SO" is not null
group by a."PROGRAM") t
group by target_jatimb,target_jateng';
$get_niqe=pg_query($sql_niqe);
?>
<tr>
<?php 
while($line_niqe=pg_fetch_array($get_niqe)){
$target_niqe = $line_niqe['target_jatimb'];
?>
	<td style="color: blue"><b>Jatim Balnus TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_niqe,0,',','.');?></b></td>
	<td style="text-align:center"><b>LoP</b></td>
<?php 
	$nilai_niqe_2022=0;
	$vol_niqe_2022=0;
	$capex_vol_niqe_2022=0;
	$po_niqe_2022=0;
	$gr_niqe_2022=0;
	$nilai_niqe_2023=0;
	$vol_niqe_2023=0;
	$capex_vol_niqe_2023=0;
	$po_niqe_2023=0;
	$gr_niqe_2023=0;
	$nilai_niqe_2024_jan=0;
	$vol_niqe_2024_jan=0;
	$capex_vol_niqe_2024_jan=0;
	$nilai_niqe_2024_feb=0;
	$vol_niqe_2024_feb=0;
	$capex_vol_niqe_2024_feb=0;
	$nilai_niqe_2024_mar=0;
	$vol_niqe_2024_mar=0;
	$capex_vol_niqe_2024_mar=0;
	$nilai_niqe_2024_apr=13887857547;
	$vol_niqe_2024_apr=70;
	$capex_vol_niqe_2024_apr=$nilai_niqe_2024_apr / $vol_niqe_2024_apr;
	$nilai_niqe_2024_mei=0;
	$vol_niqe_2024_mei=0;
	$capex_vol_niqe_2024_mei=0;
	$nilai_niqe_2024_jun=$line_niqe['nilai_niqe_2024_jun_jatimb'];
	$vol_niqe_2024_jun=$line_niqe['vol_niqe_2024_jun_jatimb'];
	$capex_vol_niqe_2024_jun=$nilai_niqe_2024_jun / $vol_niqe_2024_jun;
	if(is_nan($capex_vol_niqe_2024_jun)){
		$capex_vol_niqe_2024_jun=0;
	}else{
		$capex_vol_niqe_2024_jun=$capex_vol_niqe_2024_jun;
	}
	$nilai_niqe_2024_jul=$line_niqe['nilai_niqe_2024_jul_jatimb'];
	$vol_niqe_2024_jul=$line_niqe['vol_niqe_2024_jul_jatimb'];
	$capex_vol_niqe_2024_jul=$nilai_niqe_2024_jul / $vol_niqe_2024_jul;
	if(is_nan($capex_vol_niqe_2024_jul)){
		$capex_vol_niqe_2024_jul=0;
	}else{
		$capex_vol_niqe_2024_jul=$capex_vol_niqe_2024_jul;
	}
	$nilai_niqe_2024_agt_jatimb=$line_niqe['nilai_niqe_2024_agt_jatimb'];
	$vol_niqe_2024_agt_jatimb=$line_niqe['vol_niqe_2024_agt_jatimb'];
	$capex_vol_niqe_2024_agt_jatimb=$nilai_niqe_2024_agt_jatimb / $vol_niqe_2024_agt_jatimb;
	if(is_nan($capex_vol_niqe_2024_agt_jatimb)){
		$capex_vol_niqe_2024_agt_jatimb=0;
	}else{
		$capex_vol_niqe_2024_agt_jatimb=$capex_vol_niqe_2024_agt_jatimb;
	}
	$nilai_niqe_2024_sept_jatimb=$line_niqe['nilai_niqe_2024_sept_jatimb'];
	$vol_niqe_2024_sept_jatimb=$line_niqe['vol_niqe_2024_sept_jatimb'];
	$capex_vol_niqe_2024_sept_jatimb=$nilai_niqe_2024_sept_jatimb / $vol_niqe_2024_sept_jatimb;
	if(is_nan($capex_vol_niqe_2024_sept_jatimb)){
		$capex_vol_niqe_2024_sept_jatimb=0;
	}else{
		$capex_vol_niqe_2024_sept_jatimb=$capex_vol_niqe_2024_sept_jatimb;
	}
	
	$po_niqe_2024=$line_niqe['po_niqe_2024_jatimb'];
	$gr_niqe_2024=$line_niqe['gr_niqe_2024_jatimb'];
	
	$tot_nilai_niqe=$nilai_niqe_2022+$nilai_niqe_2023+$nilai_niqe_2024_jan+$nilai_niqe_2024_feb+$nilai_niqe_2024_mar+$nilai_niqe_2024_apr+$nilai_niqe_2024_mei+$nilai_niqe_2024_jun+$nilai_niqe_2024_jul+$nilai_niqe_2024_agt_jatimb+$nilai_niqe_2024_sept_jatimb;

	$tot_vol_niqe=$vol_niqe_2022+$vol_niqe_2023+$vol_niqe_2024_jan+$vol_niqe_2024_feb+$vol_niqe_2024_mar+$vol_niqe_2024_apr+$vol_niqe_2024_mei+$vol_niqe_2024_jun+$vol_niqe_2024_jul+$vol_niqe_2024_agt_jatimb+$vol_niqe_2024_sept_jatimb;

	$tot_capex_vol_niqe=$tot_nilai_niqe / $tot_vol_niqe;

	$tot_po_niqe=$po_niqe_2022+$po_niqe_2023+$po_niqe_2024;
	$tot_gr_niqe=$gr_niqe_2022+$gr_niqe_2023+$gr_niqe_2024;

	$persen_tot_po_gr_niqe=($tot_gr_niqe / $tot_po_niqe) *100;
	$persen_tot_po_nilai_niqe=($tot_po_niqe / $tot_nilai_niqe) *100;
	$sisa_target_totpo_niqe=$target_niqe - $tot_po_niqe;
	$sisa_vol_niqe=$sisa_target_totpo_niqe / $tot_capex_vol_niqe;

	$nilai_ogp_niqe=$line_niqe['nilai_ogp_niqe_jatimb'];
	$vol_ogp_niqe=$line_niqe['vol_ogp_niqe_jatimb'];
	$capex_vol_ogp_niqe=$nilai_ogp_niqe / $vol_ogp_niqe;

	$nilai_outlook_niqe=13887857547;
	$vol_outlook_niqe=$nilai_outlook_niqe / $tot_capex_vol_niqe;
	$capex_vol_outlook_niqe=$nilai_outlook_niqe / $vol_outlook_niqe;
	
	$nilai_so_niqe_jatimb=$line_niqe['nilai_so_niqe_jatimb'];
	$vol_so_niqe_jatimb=$line_niqe['vol_so_niqe_jatimb'];
	$capex_vol_so_niqe_jatimb=$nilai_so_niqe_jatimb / $vol_so_niqe_jatimb;
}
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2022,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_niqe_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_niqe_2022,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2023,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_niqe_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_niqe_2023,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_jan,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_jan,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_feb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_feb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_mar,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_mar,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_apr,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_apr,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_mei,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_mei,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_jun,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_jun,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_jul,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_jul,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_agt_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_sept_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_niqe_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_niqe_2024,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_niqe,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_niqe,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_niqe,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_niqe,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_niqe,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_niqe,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_niqe,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_niqe,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_niqe,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_niqe,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_niqe,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_niqe,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_niqe,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_niqe,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_niqe,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_niqe_jatimb,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_niqe_jatimb,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_niqe_jatimb,0,',','.');?></b></td>
</tr>
<tr>
<?php
$get_niqe=pg_query($sql_niqe);
while($line_niqe=pg_fetch_array($get_niqe)){
	$target_niqe_jateng=$line_niqe['target_jateng'];
?>
	<td style="color: blue"><b>Jateng TA</b></td>
	<td style="text-align:right"><b><?php echo number_format($target_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b>LoP</b></td>
	<?php 
	$nilai_niqe_2022_jateng=0;
	$vol_niqe_2022=0;
	$capex_vol_niqe_2022_jateng=$nilai_niqe_2022_jateng / $vol_niqe_2022_jateng;
	if(is_nan($capex_vol_niqe_2022_jateng)){
		$capex_vol_niqe_2022_jateng=0;
	}else{
		$capex_vol_niqe_2022_jateng=$capex_vol_niqe_jateng_2022;
	}
	$nilai_niqe_2023_jateng=0;
	$vol_niqe_2023_jateng=0;
	$capex_vol_niqe_2023_jateng=0;
	$nilai_niqe_2024_jan_jateng=0;
	$vol_niqe_2024_jan_jateng=0;
	$capex_vol_niqe_2024_jan_jateng=0;
	$nilai_niqe_2024_feb_jateng=0;
	$vol_niqe_2024_feb_jateng=0;
	$capex_vol_niqe_2024_feb_jateng=0;
	$nilai_niqe_2024_mar_jateng=0;
	$vol_niqe_2024_mar_jateng=0;
	$capex_vol_niqe_2024_mar_jateng=0;
	$nilai_niqe_2024_apr_jateng=0;
	$vol_niqe_2024_apr_jateng=0;
	$capex_vol_niqe_2024_apr_jateng=0;
	$nilai_niqe_2024_mei_jateng=0;
	$vol_niqe_2024_mei_jateng=0;
	$capex_vol_niqe_2024_mei_jateng=0;
	$nilai_niqe_2024_jun_jateng=$line_niqe['nilai_niqe_2024_jun_jateng'];
	$vol_niqe_2024_jun_jateng=$line_niqe['vol_niqe_2024_jun_jateng'];
	$capex_vol_niqe_2024_jun_jateng=$nilai_niqe_2024_jun_jateng / $vol_niqe_2024_jun_jateng;
	if(is_nan($capex_vol_niqe_2024_jun_jateng)){
		$capex_vol_niqe_2024_jun_jateng=0;
	}else{
		$capex_vol_niqe_2024_jun_jateng=$capex_vol_niqe_2024_jun_jateng;
	}
	$nilai_niqe_2024_jul_jateng=$line_niqe['nilai_niqe_2024_jul_jateng'];
	$vol_niqe_2024_jul_jateng=$line_niqe['vol_niqe_2024_jul_jateng'];
	$capex_vol_niqe_2024_jul_jateng=$nilai_niqe_2024_jul_jateng / $vol_niqe_2024_jul_jateng;
	if(is_nan($capex_vol_niqe_2024_jul_jateng)){
		$capex_vol_niqe_2024_jul_jateng=0;
	}else{
		$capex_vol_niqe_2024_jul_jateng=$capex_vol_niqe_2024_jul_jateng;
	}
	$nilai_niqe_2024_agt_jateng=$line_niqe['nilai_niqe_2024_agt_jateng'];
	$vol_niqe_2024_agt_jateng=$line_niqe['vol_niqe_2024_agt_jateng'];
	$capex_vol_niqe_2024_agt_jateng=$nilai_niqe_2024_agt_jateng / $vol_niqe_2024_agt_jateng;
	if(is_nan($capex_vol_niqe_2024_agt_jateng)){
		$capex_vol_niqe_2024_agt_jateng=0;
	}else{
		$capex_vol_niqe_2024_agt_jateng=$capex_vol_niqe_2024_agt_jateng;
	}
	$nilai_niqe_2024_sept_jateng=$line_niqe['nilai_niqe_2024_sept_jateng'];
	$vol_niqe_2024_sept_jateng=$line_niqe['vol_niqe_2024_sept_jateng'];
	$capex_vol_niqe_2024_sept_jateng=$nilai_niqe_2024_sept_jateng / $vol_niqe_2024_sept_jateng;
	if(is_nan($capex_vol_niqe_2024_sept_jateng)){
		$capex_vol_niqe_2024_sept_jateng=0;
	}else{
		$capex_vol_niqe_2024_sept_jateng=$capex_vol_niqe_2024_sept_jateng;
	}
	$tot_nilai_niqe_jateng=$nilai_niqe_2022_jateng+$nilai_niqe_2023_jateng+$nilai_niqe_2024_jan_jateng+$nilai_niqe_2024_feb_jateng+$nilai_niqe_2024_mar_jateng+$nilai_niqe_2024_apr_jateng+$nilai_niqe_2024_mei_jateng+$nilai_niqe_2024_jun_jateng+$nilai_niqe_2024_jul_jateng+$nilai_niqe_2024_agt_jateng+$nilai_niqe_2024_sept_jateng;
	
	$tot_vol_niqe_jateng=$vol_niqe_2022_jateng+$vol_niqe_2023_jateng+$vol_niqe_2024_jan_jateng+$vol_niqe_2024_feb_jateng+$vol_niqe_2024_mar_jateng+$vol_niqe_2024_apr_jateng+$vol_niqe_2024_mei_jateng+$vol_niqe_2024_jun_jateng+$vol_niqe_2024_jul_jateng+$vol_niqe_2024_agt_jateng+$vol_niqe_2024_sept_jateng;
	
	$tot_capex_vol_niqe_jateng=$tot_nilai_niqe_jateng / $tot_vol_niqe_jateng;
	
	$po_niqe_2022_jateng=0;
	$gr_niqe_2022_jateng=0;
	$po_niqe_2023_jateng=0;
	$gr_niqe_2023_jateng=0;
	$po_niqe_2024_jan_mei_jateng=0;
	$gr_niqe_2024_jan_mei_jateng=0;
	$po_niqe_2024_jateng=$po_niqe_2024_jan_mei_jateng + $line_niqe['po_niqe_2024_jateng'];
	$gr_niqe_2024_jateng=$gr_niqe_2024_jan_mei_jateng + $line_niqe['gr_niqe_2024_jateng'];
	
	$tot_po_niqe_jateng=$po_niqe_2022_jateng+$po_niqe_2023_jateng+$po_niqe_2024_jateng;
	$tot_gr_niqe_jateng=$gr_niqe_2022_jateng+$gr_niqe_2023_jateng+$gr_niqe_2024_jateng;
	
	$persen_tot_po_gr_niqe_jateng=($tot_gr_niqe_jateng / $tot_po_niqe_jateng) *100;
	$persen_tot_po_nilai_niqe_jateng=($tot_po_niqe_jateng / $tot_nilai_niqe_jateng) *100;
	
	$sisa_target_totpo_niqe_jateng=$target_niqe_jateng - $tot_po_niqe_jateng;
	$sisa_vol_niqe_jateng=$sisa_target_totpo_niqe_jateng / $tot_capex_vol_niqe_jateng;
	
	$nilai_ogp_niqe_jateng=$line_niqe['nilai_ogp_niqe_jateng'];
	$vol_ogp_niqe_jateng=$line_niqe['vol_ogp_niqe_jateng'];
	$capex_vol_ogp_niqe_jateng=$nilai_ogp_niqe_jateng / $vol_ogp_niqe_jateng;
	
	$nilai_outlook_niqe_jateng=0;
	$vol_outlook_niqe_jateng=$nilai_outlook_niqe_jateng / $tot_capex_vol_niqe_jateng;
	$capex_vol_outlook_niqe_jateng=$nilai_outlook_niqe_jateng / $vol_outlook_niqe_jateng;
	
	$nilai_so_niqe_jateng=$line_niqe['nilai_so_niqe_jateng'];
	$vol_so_niqe_jateng=$line_niqe['vol_so_niqe_jateng'];
	$capex_vol_so_niqe_jateng=$nilai_so_niqe_jateng / $vol_so_niqe_jateng;
?>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_niqe_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_niqe_2022_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_niqe_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_niqe_2023_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_jan_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_feb_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_mar_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_apr_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_mei_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_jun_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_jul_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_agt_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_niqe_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_niqe_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_niqe_2024_sept_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($po_niqe_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($gr_niqe_2024_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_nilai_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_vol_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_capex_vol_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_po_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($tot_gr_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_gr_niqe_jateng,2);?></b></td>
	<td style="text-align:center"><b><?php echo number_format($persen_tot_po_nilai_niqe_jateng,2);?></b></td>
	<td style="text-align:right"><b><?php echo number_format($sisa_target_totpo_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($sisa_vol_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_ogp_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_ogp_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_ogp_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_outlook_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_outlook_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_outlook_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($nilai_so_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:center"><b><?php echo number_format($vol_so_niqe_jateng,0,',','.');?></b></td>
	<td style="text-align:right"><b><?php echo number_format($capex_vol_so_niqe_jateng,0,',','.');?></b></td>
<?php } ?>
</tr>
</tbody>
</table>
</div>
</body>