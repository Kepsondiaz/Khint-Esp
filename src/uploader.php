<?php
    include "connect_db.php";
    $file_name = $_FILES["fichier"]["name"];
    $file_extension = strrchr($file_name, ".");
    $file_tmp_name = $_FILES["fichier"]["tmp_name"];
    $niveau=$_POST["niveau"];
    $cours=$_POST["cours"];
    $file_public ='../Public/'.$file_name;
    $extension_autorisees = array(".pdf", ".PDF", ".zip");

    if (in_array($file_extension, $extension_autorisees))
    {
        if(move_uploaded_file($file_tmp_name, $file_public))
        {
            $req=$conn->prepare('insert into EspKhints (niveau, cours, nom, file_url) values(?, ?, ?, ?)');
            $req->execute(array($niveau, $cours,  $file_name, $file_public));
            //echo "fichier uploader avec succé....";
        }

        header("Location: pass.php");
        // Rediriger vers passs.php
    }
    else
    {
        echo "<h3>";
        echo "Vous ne pouvez pas uploader un fichier de type : ".  $file_extension;
        echo "</h3>";
    }

        