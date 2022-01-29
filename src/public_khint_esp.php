<?php
include "connect_db.php";
//include "uploader.php";
$methode= $_SERVER["REQUEST_METHOD"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Khint_Esp</title>
</head>
<body>
    <?php
       $select = "select * from EspKhints ";
       $result_select = $conn->query($select);
        echo "<h1>Liste des Fichiers uploaders</h1>";
        echo "<table border=1px class=table>";
        echo "<tr>";
        echo "<th scope=col>niveau</th>";
        echo "<th scope=col>cours</th>";
        echo "<th scope=col>nom</th>";
        echo "<th scope=col>file_url</th>";
        echo"</tr>";
        while($data=$result_select->fetch())
        {
            echo "<tr>";
            echo "<td>".$data["niveau"]."</td>";
            echo "<td>".$data["cours"]."</td>";
            echo "<td>".$data["nom"]."</td>";
            echo "<td><a target=block href=".$data["file_url"].">".$data["nom"]."</a></td>"; 
            echo "</tr>";
           
        }
        echo "</table>"
    ?>
     <button><a href="index.php">revenir sur le menus</a></button>
</body>