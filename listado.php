<html>
    <head>
        <title>title</title>
    </head>
    <body>

        <table>
            <tr>
                <td>Nombre</td>
                <td>Email</td>
                <td>Tlf</td>
                <td>Direccion</td>
                <td>Categoria</td>
                <td>Editar</td>
                <td>Borrar</td>
            </tr>

            <?php
            $ssql = "select * from contactos";

            if ($rs = mysqli_query($conexion, $ssql)) {
                while ($fila = mysqli_fetch_array($rs)) {

                    echo "<tr>";
                    echo "<td>" . $fila['nombre'] . "</td>";
                    echo "<td>" . $fila['email'] . "</td>";
                    echo "<td>" . $fila['tlf'] . "</td>";
                    echo "<td>" . $fila['direccion'] . "</td>";
                    
                    echo "<td>" . $fila['categoria'] . "</td>";
                    
                    echo "<td><a href='update.php?id=" . $fila['id_contacto'] . "'>Editar</a></td>";
                    echo "<td><a href='borrar.php?id=" . $fila['id_contacto'] . "'>Borrar</a></td>";
                    echo "</tr>";
                }
            }
            ?>

        </table>

    </body>
</html>



