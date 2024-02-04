<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA ID 918273645</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header>
        <h1>Data enterprise - ID 918273645 - LTransport GmbH</h1>
    </header>
    <main>
        <?php

            $server = "localhost";
            $user = "logisticadmin";
            $password = "admin";
            $database = "enterprise";

            $connection = mysqli_connect($server, $user, $password, $database);

            if(!$connection){
                echo "ERROR";
            }
            
            if(isset($_GET['op'])){
                if($_GET['op'] == "delete"){
                    $request = "DELETE FROM ".$_GET['t']." WHERE id = ".$_GET['id'].";";
                    $result = mysqli_query($connection, $request);
                }
            } 

            if(isset($_POST['id'])){
                $chain = "INSERT INTO ".$_GET['t']." VALUES (NULL,";
                foreach($_POST as $key=>$field){
                    if($key != "id"){
                        $chain .= '"'.$field.'",';
                    }
                }

                $chain = substr($chain, 0, -1);
                $chain .= ");";
                $result = mysqli_query($connection, $chain);
                
            } 

            $request = "SHOW TABLES FROM enterprise";
            $result = mysqli_query($connection, $request);

            while($item = mysqli_fetch_assoc($result)){
                echo "<a href='?t="
                .$item["Tables_in_enterprise"].
                "'><button>"
                .$item["Tables_in_enterprise"].
                "</button></a>";
            }

            if(isset($_GET['t'])){
                echo "<h3>Show the content of: ".$_GET['t']."</h3>";
                $request = "SHOW COLUMNS FROM ".$_GET['t'].";";
                $result = mysqli_query($connection, $request);

                echo "<table border=1>";
                echo "<tr>";
                while($item = mysqli_fetch_assoc($result)){
                    echo "<th>".$item['Field']."</th>";
                }
                echo "<th>commands</th>";
                echo "</tr>";

                $request = " SELECT * FROM ".$_GET['t'].";";
                $result = mysqli_query($connection, $request);

                while($item = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    $count = 0;
                    $id = 0;
                    foreach($item as $register){
                        echo "<td>".$register."</td>";
                        if($count == 0){
                            $id = $register;
                        }
                        $count++;
                    }

                    echo "<td><a href='?t=".$_GET['t']."&op=delete&id=".$id."'><button>Delete</button></a></td>";
                    echo"</tr>";
                }

                $request = "SHOW COLUMNS FROM ".$_GET['t'].";"; 
                $result = mysqli_query($connection, $request);
                echo "<tr>";
                echo "<form action='?t=".$_GET['t']."' method='POST'>";
                while($item = mysqli_fetch_assoc($result)){
                    echo "<td><input type='text' name='".$item['Field']."'</td>";
                }
                echo "<td><input type='submit'></td>";
                echo "</form>";
                echo "</tr>";
                echo "</table>";
            }

        ?>
    </main>
    <footer>

    </footer>
</body>
</html>

