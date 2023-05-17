<?php 


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "web-parcial3";

$con = mysqli_connect("localhost", "root", "", "web-parcial3");
    if (!$con ) {
      echo "Fall la conexin: %s\n", mysqli_connect_error();
      exit();
    }


    // recuperacion de los datos del formulario.

    $nombre = $_POST["nombre"];
    $contraseña = $_POST["contraseña"];
	

    $sql = "INSERT INTO usuarios (nombre, contraseña) VALUES ('$nombre', '$contraseña')";

    if ($con -> query($sql) == TRUE){

    	ECHO " Los datos han sido guardados correctamente en la base de datos.";
    }else{
    	echo "Error al guardar los datos:".$con -> error;

    }
    

    $con -> close();
 ?>