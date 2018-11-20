<html>
    <head>
        <title>title</title>
    </head>
    <body>
        
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
            
            Nombre: <input type="text" name="nombre" value="<?php if($_GET) 
                echo $fila['nombre'];
            if(isset($_POST['nombre'])) echo $_POST['nombre'] ?>">
            <br/>
            Email: <input type="email" name="email" value="<?php if($_GET)
                echo $fila['email'];
            if(isset($_POST['email'])) echo $_POST['email'] ?>" >
            <br/>
            Tlf: <input type="phone" name="tlf" value="<?php if($_GET)
                echo $fila['tlf'];
            if(isset($_POST['tlf'])) echo $_POST['tlf'] ?>" />
            <br/>
            Dirección: <textarea name="direccion" id="direccion" cols="30" rows="10" value="<?php if($_GET) echo $fila['direccion'];
            if(isset($_POST['direccion'])) echo $_POST['direccion'] ?>">
            </textarea>
            <br/>
            
<!--            Categoria: <input type="text" name="categoria" id="categoria" value="<?php if($_GET) echo $fila['categoria'];
            if(isset($_POST['categoria'])) echo $_POST['categoria'] ?>">
            </input>-->
            
            <?php 
   
            $ssql = "SELECT id_categoria FROM categoria";
            $resultado = mysqli_query($conexion, $ssql);
            
            //echo "Valor de cat fila: " . $fila['categoria'];
            
            echo "Categoría: ";
            echo "<select name='listaCat'>";
            
            while($row = mysqli_fetch_array($resultado)){
                
                if($row['id_categoria'] == $fila['categoria']){
                    
                     echo "<option selected>";
                
                     echo $row['id_categoria'];
                
                     echo "</option>";
                    
                }else{
                    
                    echo "<option>";
                
                    echo $row['id_categoria'];
                
                    echo "</option>";
                
                }
      
            }
            
            echo "</select>";
            
            ?>
            
            <?php 
            
                if($_GET){
                    echo "<input type=hidden name ='id_contacto' value=".$_GET['id'].">";
                }
            
            ?>
            
            <input type="submit" value="<?php if($_GET){echo 'Editar';} else{ echo 'Insertar';}?>">
        </form>
        
    </body>
</html>
