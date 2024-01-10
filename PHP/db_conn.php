<?php
//데이터베이스 접속 파일

$host = 'localhost';
$id = 'WP_GISOOKEE'; 
$pass = '1234';
$db = 'GISOOKEE'; 
$port = 3307;

$conn = mysqli_connect($host, $id, $pass, $db, $port);

?>