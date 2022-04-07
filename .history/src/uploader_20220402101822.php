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


k
    // else
    // {
    //     // header("Location: pass1.php");
    //     // exit();
    // }

        
