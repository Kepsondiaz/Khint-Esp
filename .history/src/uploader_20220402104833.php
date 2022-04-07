<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    <link href="public.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
    include "connect_db.php";
    $file_name = $_FILES["fichier"]["name"];
    $file_extension = strrchr($file_name, ".");
    $file_tmp_name = $_FILES["fichier"]["tmp_name"];
    $file_size = $_FILES["fichier"]["size"]; 
    $niveau=$_POST["niveau"];
    $cours=$_POST["cours"];
    $file_public ='../public/'.$file_name;
    $extension_autorisees = array(".pdf", ".PDF", ".zip");


    // if (in_array($file_extension, $extension_autorisees))
    // {
    //     if(move_uploaded_file($file_tmp_name, $file_public))
    //     {
    //         $req=$conn->prepare('insert into EspKhints (niveau, cours, nom, file_url) values(?, ?, ?, ?)');
    //         $req->execute(array($niveau, $cours,  $file_name, $file_public));
    //         // Rediriger vers passs.php
    //         header("Location: pass.php");
    //         exit();
    //         //echo "fichier uploader avec succé....";
    //     }
        
    // }
    // else
    // {
    //     // header("Location: pass1.php");
    //     // exit();
    // }
foreach ($extension_autorisees as $extent) {
    if($extent == $file_extension)
    {
        move_uploaded_file($file_tmp_name, $file_public);
        $req=$conn->prepare('insert into EspKhints (niveau, cours, nom, file_url) values(?, ?, ?, ?)');
        $req->execute(array($niveau, $cours,  $file_name, $file_public));
    //  Rediriger vers passs.php
        header("Location: pass.php");
        exit();

    }
    else{ ?>
         <div class="p-3 mb-2 bg-danger text-white>Impossible d'uploader ce type de fichier</div>
        ";
        break;
    }
}
 ?>   
</body>
</html>

        
