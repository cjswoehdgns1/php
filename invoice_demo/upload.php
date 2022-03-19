<?php
include_once('./common/dbcon.php');
print_r($_GET);

$q = "INSERT INTO `Aibot` ( `ship_date`, `MD`, `manager_name`, `phone_no`, `car_no`, `note`, `sum` )";
$q.= " VALUES ( '";
$q.= $_GET['shipDate']."', '";
$q.= $_GET['MD']."', '";
$q.= $_GET['managerName']."', '";
$q.= $_GET['managerPhone']."', '";
$q.= $_GET['carNo']."', '";
$q.= $_GET['note']."', '";
$q.= $_GET['sum']."')";


$connect->query($q);

$connect->close();

?>