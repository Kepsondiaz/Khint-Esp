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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    <link href="public.css" rel="stylesheet">
    <title>HINTSxHINTS</title>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <header >
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">HINTSxHINTS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="index.php">Uploader Un Fichier</a>
                        </li>
       </ul> 
                        <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    
                </div>
            </div>
        </nav>
    </header>
    <?php
       $select = "select * from EspKhints order by file_url desc";
       $result_select = $conn->query($select);
        echo "<div class=tableau y-10>";
        echo "<br>";
        echo "<h1 class=text-decoration-underline >Liste des Khints uploaders</h1>";
        echo "<br>";
        echo "<table border=1px class=table>";
        echo "<tr>";
        //echo "<th scope=col>niveau</th>";
        echo "<th scope=col>cours</th>";
        echo "<th scope=col>nom</th>";
        echo "<th scope=col>Télécharger</th>";
        echo"</tr>";
        while($data=$result_select->fetch())
        {
            echo "<tr>";
            //echo "<td>".$data["niveau"]."</td>";
            echo "<td>".$data["cours"]."</td>";
            echo "<td>".$data["nom"]."</td>";
            echo "<td><a target=block href=".$data["file_url"].">".$data["nom"]."</a></td>"; 
            echo "</tr>";
           
        }
        echo "</table>";
        echo "</div>";
    ?>
     <!-- <button class="input-group-text bg-primary "><a href="index.php" class="text-decoration-none text-light"> Uploader</a></button> -->
     <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>