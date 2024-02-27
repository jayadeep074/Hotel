<?php
include_once("connect.php");
$sql = "SELECT id as id, name as name, password as password, email as email FROM rapplyy";
$resultset = mysqli_query($jayad, $sql) or die("database error:". mysqli_error($conn));
$data = array();
while( $row = mysqli_fetch_assoc($resultset)) {
	$data[] = $row;
}
$results = array(
"iTotalDisplayRecords" => count($data),
"aaData" => $data);
echo json_encode($results);
exit;
?>