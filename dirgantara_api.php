<?php
error_reporting(E_ALL^(E_NOTICE|E_WARNING));
include ("config/konek.php");

function curl($url){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    $output = curl_exec($ch);  
    curl_close($ch);      
    return $output;
}

$curl = curl("http://36.66.127.26:8012/coba/query_dirgantara.php");

// mengubah JSON menjadi array
$data = json_decode($curl);


echo "<pre>";
print_r($data);
echo "</pre>";

$querydel= 'DELETE from develop."RPB_DIRGANTARA where "PROJECT_YEAR"=\'2024\'';
pg_query($conn,$querydel);

//echo $querydel;

$query= 'INSERT into develop."RPB_DIRGANTARA" ("ID", "AREA", "TERITORY", "PROGRAM", "SUB_PROGRAM", "PID_SAP", "PROJECT_DESC", "PROJECT_MONTH", "PROJECT_YEAR", "INITIAL_VALUE", "REALIZABLE_VALUE", "PROJECT_STATUS", "DOCUMENT_STATUS", "BAST_DATE", "PO_STATUS", "PO_NUMBER", "SP_NUMBER", "SP_DATE", "TOC_DATE", "HANDOVER_STATUS", "PR_STATUS", "BUDGET_SOURCE", "BAPP_DESC", "VESTYNA", "VESTYNA_NUMBER", "VESTYNA_STATUS", "AISS", "AISS_NUMBER", "AISS_STATUS", "BUDGET_STATUS") values';
$jumlah = count($data);
for($i=0;$i<$jumlah;$i++){
	$id = $data[$i][id];
	$areas = $data[$i][areas];
	$teritory = $data[$i][teritory];
	$sub_program = $data[$i][sub_program];
	$pid_sap = $data[$i][pid_sap];
	$project_desc = $data[$i][project_desc];
	$project_month = $data[$i][project_month];
	$project_year = $data[$i][project_year];
	$initial_value = $data[$i][initial_value];
	$realizable_value = $data[$i][realizable_value];
	$project_status = $data[$i][project_status];
	$document_status = $data[$i][document_status];
	$bast_date = $data[$i][bast_date];
	$po_status = $data[$i][po_status];
	$po_number = $data[$i][po_number];
	$sp_number = $data[$i][sp_number];
	$sp_date = $data[$i][sp_date];
	$toc_date = $data[$i][toc_date];
	$handover_status = $data[$i][handover_status];
	$pr_status = $data[$i][pr_status];
	$budget_source = $data[$i][budget_source];
	$bapp_desc = $data[$i][bapp_desc];
	$vestyna = $data[$i][vestyna];
	$vestyna_number = $data[$i][vestyna_number];
	$vestyna_status = $data[$i][vestyna_status];
	$aiss = $data[$i][aiss];
	$aiss_number = $data[$i][aiss_number];
	$aiss_status = $data[$i][aiss_status];
	$budget_status = $data[$i][budget_status];
	
	$pid_sap_fix=preg_replace('/\xa0/', '', $pid_sap);
	$pid_sap_fix_2=preg_replace('/\xb2/', '', $pid_sap_fix);
	$pid_sap_fix_3=preg_replace('/\x00/', '', $pid_sap_fix_2);
	$pid_sap_fix_4=iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $pid_sap_fix_3);
	$pid_sap_fix_5=stripslashes(str_replace("'","", $pid_sap_fix_4));
	
	$project_desc_fix=preg_replace('/\xa0/', '', $project_desc);
	$project_desc_fix_2=preg_replace('/\xb2/', '', $project_desc_fix);
	$project_desc_fix_3=preg_replace('/\x00/', '', $project_desc_fix_2);
	$project_desc_fix_4=iconv('UTF-8', 'ASCII//TRANSLIT//IGNORE', $project_desc_fix_3);
	$project_desc_fix_5=stripslashes(str_replace("'","", $project_desc_fix_4));
	
	$search = array(
				  '.',
				  ',',
				  ',00'
			 );
	$replace = array(
				  '',
				  '',
				  ''
			 );
	$initial_value_fix=str_replace($search, $replace, $initial_value);
	$realizable_value_fix=str_replace($search, $replace, $realizable_value);
	
	if($bast_date==NULL){
		$bast_date_fix='NULL';
	}else{
		$bast_date_fix='\''.$bast_date.'\'';
	}
	
	if($sp_date==NULL){
		$sp_date_fix='NULL';
	}else{
		$sp_date_fix='\''.$sp_date.'\'';
	}
	
	if($toc_date==NULL){
		$toc_date_fix='NULL';
	}else{
		$toc_date_fix='\''.$toc_date.'\'';
	}
	
	$query.= '(\''.$id.'\',\''.$areas.'\',\''.$teritory.'\',\''.$sub_program.'\',\''.$pid_sap_fix_5.'\',\''.$project_desc_fix_5.'\',\''.$project_month.'\',\''.$project_year.'\','.$initial_value_fix.','.$realizable_value_fix.',\''.$project_status.'\',\''.$document_status.'\','.$bast_date_fix.',\''.$po_status.'\',\''.$po_number.'\',\''.$sp_number.'\','.$sp_date_fix.','.$toc_date_fix.',\''.$handover_status.'\',\''.$pr_status.'\',\''.$pr_status.'\',\''.$budget_source.'\',\''.$bapp_desc.'\',\''.$vestyna.'\',\''.$vestyna_number.'\',\''.$vestyna_status.'\',\''.$aiss.'\',\''.$aiss_number.'\',\''.$aiss_status.'\',\''.$budget_status.'\'),';
}
$query=rtrim($query, ',');
echo $query;
pg_query($conn,$query);

/*echo"<script>alert('Data Berhasil Dialirkan!!!')</script>";
echo "<script>document.location.href='menu.php';</script>";*/
?>