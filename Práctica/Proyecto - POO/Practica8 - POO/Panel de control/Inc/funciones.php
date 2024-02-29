<?php

    function addItem($conexion){
        $consulta = "INSERT INTO ".$_GET['tabla']." VALUES (NULL,";
            foreach($_POST as $columna=>$campo){
                if($columna != "id"){
                    $consulta .= "'".$campo."',";
                }
            }

            $consulta = substr($consulta, 0, -1);
            $consulta .= ")";
            mysqli_query($conexion, $consulta);
    }

    function accesoBD(){
        if(!isset($_SESSION['usuario'])){
            die("<aside><div class='incorrecto'>X</div>Intento incorrecto</aside>");
        }
    }

    function nav($conexion){
        $peticion = "SHOW TABLES;";
                $resultado = mysqli_query($conexion, $peticion);
                while($fila = mysqli_fetch_assoc($resultado)){
                    echo "<li>
                        <a href='?
                        tabla=".$fila['Tables_in_avp_enterprise']."'>

                        ".$fila['Tables_in_avp_enterprise']."
                        </a>
                        </li>";
                }
    }

    function formItem($conexion){
        echo "<h4>Nuevo elemento: ".$_GET['tabla']."</h4>";
        echo "<form action='?accion=insertar&tabla=".$_GET['tabla']."'method='POST'>";
        $peticion = "SHOW COLUMNS FROM ".$_GET['tabla'].";";
        $resultado = mysqli_query($conexion, $peticion);
        while($fila = mysqli_fetch_assoc($resultado)){
            if (strpos($fila['Field'], "_") !== false) {
                echo "<select name='".$fila['Field']."'>
                
                    <option>Selecciona desde: ".$fila['Field']."</option>
                ";
                $peticion2 = "SELECT id,
                ".explode("_", $fila['Field'])[1]." AS campo
                 FROM ".explode("_", $fila['Field'])[0].";";
                $resultado2 = mysqli_query($conexion, $peticion2);
                while($fila2 = mysqli_fetch_assoc($resultado2)){
                    echo "<option value='".$fila2['id']."'>".$fila2['campo']."</option>";
                }
                echo "</select>";
            }else{
                echo "
                <input type='text' name='".$fila['Field']."' placeholder='".$fila['Field']."'>
                ";
            }
        }
        echo "<input type='submit'>";
        echo "</form>";
    }

    function showColumns($conexion){
        $peticion = "SHOW COLUMNS FROM ".$_GET['tabla'].";";
        $resultado = mysqli_query($conexion, $peticion);
        while($fila = mysqli_fetch_assoc($resultado)){
            echo "<th>
                ".$fila['Field']."
                </th>";
        }

        echo "
            <th>
                Operaciones
            </th>
        ";
    }

    function showData($conexion){
        $peticion = "SELECT * FROM ".$_GET['tabla'].";";
        $resultado = mysqli_query($conexion, $peticion);
        while($fila = mysqli_fetch_assoc($resultado)){
            echo '<tr>';
            foreach($fila as $columna => $campo){
                if($columna == "id"){
                    $id = $campo;
                }
                if(strpos($columna, "_") !== false){
                    echo "<td>";
                    $peticion2 = "SELECT ".explode("_", $columna)[1]."
                    AS campo FROM ".explode("_", $columna)[0]." WHERE id = ".$campo.";";
                    $resultado2 = mysqli_query($conexion, $peticion2);
                    while($fila2 = mysqli_fetch_assoc($resultado2)){
                        echo $fila2['campo'];
                    }
                    echo "</td>";
                } else{
                    echo "<td>
                    ".$campo."
                </td>";
                }
            }
            echo "
                    <td class='operaciones'>
                        <a href='?accion=eliminar&id=".$id."&tabla=".$_GET['tabla']."' class='boton eliminar'>X</a>
                        <a href='?operacion=actualizar&id=".$id."&tabla=".$_GET['tabla']."' class='boton actualizar'>?</a>
                    </td>

                ";
            echo '</tr>';
        }
    }

    function formUpdate($conexion){
        echo "<h4>Nuevo elemento: ".$_GET['tabla']."</h4>";
        echo "<form action='?accion=insertar&tabla=".$_GET['tabla']."'method='POST'>";
        $peticion = "SELECT * FROM ".$_GET['tabla']." WHERE id = ".$_GET['id'].";";
        $resultado = mysqli_query($conexion, $peticion);
        while($fila = mysqli_fetch_assoc($resultado)){
            foreach($fila as $columna => $campo){
                if (strpos($columna, "_") !== false) {
                    echo "<select name='".$columna."'>
                    
                        <option>Selecciona desde: ".$columna."</option>
                    ";
                    $peticion2 = "SELECT id,
                    ".explode("_", $columna)[1]." AS campo
                     FROM ".explode("_", $columna)[0].";";
                    $resultado2 = mysqli_query($conexion, $peticion2);
                    while($fila2 = mysqli_fetch_assoc($resultado2)){
                        echo "
                        <option value='".$fila2['id']."' ";
                        if($fila2['id']==$campo){
                            echo " selected ";
                        }
                        echo ">
                        ".$fila2['campo']."
                        </option>";
                    }
                    echo "</select>";
                }else{
                    echo "
                    <input type='text' name='".$columna."'value ='".$campo."' placeholder='".$columna."'>
                    ";
                }

            }

        }
        echo "<input type='submit'>";
        echo "</form>";
    }

    function deleteRegistration($conexion){
        $consulta = "DELETE FROM ".$_GET['tabla']." WHERE id = ".$_GET['id']."";
        mysqli_query($conexion, $consulta);
    }

    function updateRegistration($conexion){
        $consulta = "UPDATE ".$_GET['tabla']." SET ";
        foreach($_POST as $columna=>$campo){
            if($columna != "id"){
                $consulta .= $columna. "='".$campo."',";
            }
        }

        $consulta = substr($consulta, 0, -1);
        $consulta .= "WHERE id = ".$_GET['id']."";
        mysqli_query($conexion, $consulta);
    }
?>