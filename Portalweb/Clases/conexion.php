<?php
$dbname="bissnes";
$user="root";
$password="";
try {
    $dsn = "mysql:host=localhost;dbname=$dbname";
   
    $dbh = new PDO($dsn, $user, $password);
    echo "CONECTADO CON LA BASE DE DATOS";
} catch (PDOException $e){
    echo $e->getMessage();
}
?>