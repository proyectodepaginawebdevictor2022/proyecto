<?php

$conexion = new mysqli("localhost", "root", "","nosotros");
	if($conexion){
	    echo "la gestion fue exitosa !!"; 
	}else{
		echo "Fallo la gestion";		
	}	
?>