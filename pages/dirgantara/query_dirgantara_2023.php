<?php 
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
$hosts="localhost";
$users="dirped";
$passs="dirgantaraPED";
$dbnames="commerce";
$conns=mysqli_connect($hosts,$users,$passs,$dbnames);

$sql="select a.id,b.`name` areas,c.`name` teritory,program,sub_program,pid_sap,project_desc,project_month,
project_year,initial_value,realizable_value,project_status,document_status,bast_date,po_status,po_number,
sp_number,sp_date,toc_date,handover_status,pr_status,budget_source,bapp_desc,vestyna,vestyna_number,
vestyna_status,aiss,aiss_number,aiss_status,budget_status
from lops a,areas b,teritories c
where a.area=b.id and a.teritory=c.id and project_year in ('2023')
and po_status='PO' and budget_source in ('1. Consumer','2. RWS','3. BGES','6. AMC')
order by a.id";
$get=mysqli_query($conns,$sql);
$response = array();
while($proses=mysqli_fetch_array($get)) {
	$h['id']=$proses['id'];
	$h['areas']=$proses['areas'];
	$h['teritory']=$proses['teritory'];
	$h['sub_program']=$proses['sub_program'];
	$h['pid_sap']=$proses['pid_sap'];
	$h['project_desc']=$proses['project_desc'];
	$h['project_month']=$proses['project_month'];
	$h['project_year']=$proses['project_year'];
	$h['initial_value']=$proses['initial_value'];
	$h['realizable_value']=$proses['realizable_value'];
	$h['project_status']=$proses['project_status'];
	$h['document_status']=$proses['document_status'];
	$h['bast_date']=$proses['bast_date'];
	$h['po_status']=$proses['po_status'];
	$h['po_number']=$proses['po_number'];
	$h['sp_number']=$proses['sp_number'];
	$h['sp_date']=$proses['sp_date'];
	$h['toc_date']=$proses['toc_date'];
	$h['handover_status']=$proses['handover_status'];
	$h['pr_status']=$proses['pr_status'];
	$h['budget_source']=$proses['budget_source'];
	$h['bapp_desc']=$proses['bapp_desc'];
	$h['vestyna']=$proses['vestyna'];
	$h['vestyna_number']=$proses['vestyna_number'];
	$h['vestyna_status']=$proses['vestyna_status'];
	$h['aiss']=$proses['aiss'];
	$h['aiss_number']=$proses['aiss_number'];
	$h['aiss_status']=$proses['aiss_status'];
	$h['budget_status']=$proses['budget_status'];
	array_push($response, $h);
}
echo json_encode($response); 
?>