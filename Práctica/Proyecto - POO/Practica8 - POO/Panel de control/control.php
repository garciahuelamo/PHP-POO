<?php
    session_start();
    include "log.php";
    include "config.php";
    include "./Inc/funciones.php";

    if(isset($_GET['accion'])){
        switch($_GET['accion']){
            case "insertar":
                addItem($conexion);
                break;
            case "eliminar":
                deleteRegistration($conexion);
                break;
            case "actualizar":
                updateRegistration($conexion);
                break;
        }
    }
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
    <?php accesoBD(); ?>
    <header>
        <h1>Panel de control</h1>
    </header>
    <main>
        <nav>
            <ul>
            <?php nav($conexion); ?>
            </ul>
        </nav>
        <section>
            <a href="?operacion=nuevo&tabla=<?php echo $_GET['tabla']?>" class="boton nuevo">+</a>
            <h3>Editando la tabla: <?php echo $_GET['tabla']?></h3>
            <div id="contenedor">
                <?php
                    if(!isset($_GET['operacion'])){
                ?>
                <table>
                    <thead>
                        <tr>
                            <?php showColumns($conexion);?>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php showData($conexion);?>
                        </tr>
                    </tbody>
                </table>
                <?php
                    } else{
                        switch($_GET['operacion']){
                            case "nuevo":
                                formItem($conexion);
                                break;
                            case "actualizar":
                                formUpdate($conexion);
                                break;
                        }
                    }
                ?>
            </div>
            
        </section>
    </main>
</body>
</html>