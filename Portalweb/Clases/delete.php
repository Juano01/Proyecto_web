<?php
include "config.php";
$input = file_get_contents('php://input');
$message = array();

$doc = $_GET['documento'];
$q = mysqli_query($con, "DELETE From 'reg_user' WHERE 'documento' ='{$doc}' LIMIT 1");

if($q) {
    http_response_code(201);
    $message['status'] = "Success";
}else{
    http_response_code(422); "Error";
}
echo json_encode($message);
echo mysqli_error($con);

