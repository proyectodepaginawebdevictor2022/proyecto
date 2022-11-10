<?php
include("abre.php");

$Nombre =$_post['Nombre'];
$Numero_de_telefono =$_post['telefono'];
$Mensaje =$_post['Mensaje'];
$Correo_electronico =$_post['Correo'];


$consulta ="INSER INTO formu_contactos(Nombre,Telegono,Mensaje,Correo) values"
('$Nombre','$Numero_de_telefono','$Mensaje','$Correo_electronico')";

if($conexion->query($consulta) === TRUE){
    header("location:  index.php");/ regresa al formulario*/
    {else}
    echo "Error: " .$consulta."<br> .$conexion->error;
}
$conexion ->close();
?>