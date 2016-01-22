<?php
@header('Content-type: application/json; charset=utf-8');//json encode için gerekli

include "ServiceClass.php";
$service = new Service;

$result = $service->Categories();

foreach ($result as $value) {
	$data[] = array('title' => $value["name"]);
}

echo json_encode($data,JSON_UNESCAPED_UNICODE);

?>