<?php
$host="10.62.175.21";
$user="develop";
$pass="dev2019";
$port="5433";
$dbname="develop";
$conn=pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass);

$sql='REFRESH MATERIALIZED VIEW develop.mv_rpb_rekon';
pg_query($conn, $sql);

$sql2='REFRESH MATERIALIZED VIEW develop.mv_sap';
pg_query($conn, $sql2);
?>