<?php
    include "log.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
    <link rel="stylesheet" href="./CSS/login.css">
</head>
<body>

    <header>
        <h1>AVP-ENTERPRISE LOGIN</h1>
    </header>   
    
    <form action="login.php" method="POST">
        <img id="logo" src="../Img/AVP.jpg" alt="AVP">
        <input type="text" name="usuario" placeholder="Usuario:">
        <input type="password" name="contrasena" placeholder="Contraseña:">
        <input type="submit">
    </form>
</body>
</html>