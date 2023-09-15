<?php

$host = "localhost:3306";
$db = "christian97_demo_db";
$user = "christian97_demo_db";
$password = "308Ihw~x6";

$link = mysqli_connect($host, $user, $password, $db);

$db_response = [];
$db_response['success'] = 'not set';
if (!$link) {
    $db_response['success'] = false;
} else {
    $db_response['success'] = true;
}

//echo json_encode($db_response);
