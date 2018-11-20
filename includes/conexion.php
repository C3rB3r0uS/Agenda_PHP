<?php

function abrir_conexion($host,$username,$pass,$db){
    
    $conexion = mysqli_connect($host, $username, $pass, $db);
    if($conexion){
        
            mysqli_set_charset($conexion,"utf8");
            return $conexion;
        
    }else{
        echo 'Error de conexión';
        exit();
        
    }
     
}

function cerrar_conexion($conexion){
    
    mysqli_close($conexion);
    
}
