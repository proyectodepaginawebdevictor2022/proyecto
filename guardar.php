<?php
include("conexion.php");


$nombre     = $_POST['nombre'];
$telefono   = $_POST['telefono'];
$mensaje    = $_POST['mensaje'];
$correo     = $_POST['correo'];

$consulta = "INSERT INTO informacion(nombre,telefono,mensaje,correo )  VALUES ('$nombre','$telefono','$mensaje','$correo')";
  
  if ($conexion->query($consulta) === TRUE){
      header("Location: index.html");/* regresa al formulario*/
  }else{
      echo "Error: " . $consulta . "<br>" . $conexion->error;
  }
  $conexion->close();

?>














// <input type="text" name="nombre" 
// 						<input type="email" name="correo" 
// 						<input type="text" name="asunto"

// 						<textarea name="mensaje" 

echo "se realizo exitosamente la conexion"

if ($conex) {
    echo "todo correcto"
}

?>