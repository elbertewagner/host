<?php

date_default_timezone_set('Asia/Kolkata');

$host = "localhost";
$user = "u280379326_ckeck";
$pass = "Redapple2917";
$db = "u280379326_check";
$conn = mysqli_connect($host, $user, $pass, $db);

mysqli_set_charset($conn, 'utf8');
$conn->set_charset('utf8mb4');


