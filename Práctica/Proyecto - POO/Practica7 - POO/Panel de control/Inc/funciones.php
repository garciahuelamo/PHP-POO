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
            echo "
                <input type='text' name='".$fila['Field']."' placeholder='".$fila['Field']."'>
                ";
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
                echo "<td>
                    ".$campo."
                </td>";
            }
            echo "
                    <td>
                        <a href='?accion=eliminar&id=".$id."&tabla=".$_GET['tabla']."' class='boton eliminar'>X</a>
                    </td>

                ";
            echo '</tr>';
        }
    }

?>