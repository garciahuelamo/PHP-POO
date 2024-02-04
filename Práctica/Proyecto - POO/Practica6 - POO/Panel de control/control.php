<?php
    session_start();
    include "log.php";
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <link rel="stylesheet" href="./CSS/control.css">
</head>
<body>
    <?php
        if(!isset($_SESSION['usuario'])){
            die("<aside><div class='incorrecto'>X</div>Intento incorrecto</aside>");
        }
    ?>
    <header>
        <h1>Panel de control</h1>
    </header>
    <main>
        <nav>
            <ul>
            <?php

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
            ?>
            </ul>
        </nav>
        <section>
            <div id="contenedor">
                <table>
                    <thead>
                        <tr>
                            <th>X</th>
                            <th>X</th>
                            <th>X</th>
                            <th>X</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                            <td>X</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
        </section>
    </main>
</body>
</html>