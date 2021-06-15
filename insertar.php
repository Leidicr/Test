<?php

	$valueReg1 = $_POST['reg1'];
    $valueReg2 = $_POST['reg2'];
    $valueReg3 = $_POST['reg3'];
    $valueReg4 = $_POST['reg4'];
    
        
    require('conexion.php');
	
	$sql = "INSERT INTO productos(Codigo, nombre, PrecioCosto,Cantidad) VALUES ('".$valueReg1."','".$valueReg2."','.$valueReg3.','.$valueReg4.')";
	$ejecutar = $enlace->query($sql) or trigger_error($enlace->error." [sql error]");
	  
	if ($ejecutar) { // Si la ejecución dio true, imprime 200
        echo '200';
        

        
   
    }
    
