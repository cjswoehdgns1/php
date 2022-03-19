<?php
require_once("env.php");
//0. 설정
$mysql_hostname = $hostname;
$mysql_username = $username;
$mysql_password = $password;
$mysql_database = $database;
$mysql_port = $port;
$mysql_charset = $charset;

//1. DB 연결
$connect = new mysqli($mysql_hostname, $mysql_username, $mysql_password, $mysql_database, $mysql_port);

if($connect->connect_errno){
	echo '[연결실패] : '.$connect->connect_error.''; 
} else {
	//echo '[연결성공]';
}

//2. 문자셋 지정
if(! $connect->set_charset($mysql_charset))// (php >= 5.0.5)
{
	echo '[문자열변경실패] : '.$connect->connect_error;
}

?>