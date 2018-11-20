<?php

/*

  CREATE TABLE categoria(

  id_categoria int (5) PRIMARY KEY,
  descripcion varchar (200)

  )

  ALTER TABLE contactos
  ADD categoria int(5) DEFAULT NULL;

  ALTER TABLE contactos
  ADD FOREIGN KEY (categoria) REFERENCES categoria (id_categoria)


 */

include "includes/plantilla.php";
$titulo = "Inserción de contacto";
escribe_cabecera($titulo);

if (!$_GET) {

    include "includes/formularioCat.php";
} else {

    include "includes/formularioCat.php";

    if (isset($_GET['insertar'])) {

        $descripcion = $_GET['descripcion'];

        // Se obtiene el máximo valor de id en la tabla categoría

        $id = 0;
        $ssql = "SELECT MAX(id_categoria) FROM categoria";
        $rs = mysqli_query($conexion, $ssql);
        $resultado = mysqli_fetch_array($rs);
        $valor = $resultado[0];

        if ($valor == 0) {
            $id = 1;
        } else {
            $id = $valor + 1;
        }

        // Se procede a insertar

        $ssqlInsert = "INSERT INTO categoria VALUES('$id','$descripcion')";
        $rsInsert = mysqli_query($conexion, $ssqlInsert);
        echo " <br/> Se ha/n insertado " . mysqli_affected_rows($conexion) . " columna/s.";
    }
}

escribe_pie($conexion);
