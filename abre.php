<?php
$conexion= mysqli("localhost" root,"","pref");ç
if($conexion){
    echo "la gestion fue exitosa!!";
    header("location: index.html");
}else{
    echo  "fallo la gestion";
}
?>