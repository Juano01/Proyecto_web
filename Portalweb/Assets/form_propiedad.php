<?php
//validamos datos del servidor
$host = "localhost";
$user = "root";
$pass = "";


//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario
$dir= $_POST['direccion'];
$precio= $_POST['precio'];
$descripcion= $_POST['descripcion'];



//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysql_error();
        }
  else
        {
            echo "<b><h4>Hemos conectado al servidor</h45</b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "bissnes";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO propiedad(direccion_propiedad, precio, descripcion)
                             VALUES ('$dir','$precio','$descripcion')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM propiedad ";//nombre de la tabla a consultar

?>
<!DOCTYPE html>
<html>
<head>
    <title>Insertar Valores</title>
</head>
<body>
<form action="frm" method="post">

</form>
</body>
</html>