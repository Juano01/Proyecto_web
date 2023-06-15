<?php
include "config.php";

$data = array();
$doc = $_GET['documento'];
$q = mysqli_query($con, "SELECT * FROM reg_user WHERE 'documento' =  $doc LIMIT 10");

while ($row = mysqli_fetch_object($q)){
    $data[1] = $row;
}
echo json_encode($data);
echo mysqli_error($con);