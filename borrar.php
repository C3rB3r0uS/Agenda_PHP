<?php

include "includes/plantilla.php";
$titulo="Borrado de contacto";
escribe_cabecera($titulo);
$ssql="delete from contactos where id_contacto=".$_GET['id'];
if(mysqli_query($conexion,$ssql)){
    echo "Se ha borrado con éxito";
}else{
    echo "Tuvimos problemas, inténtalo de nuevo más tarde";
}
escribe_pie($conexion);

