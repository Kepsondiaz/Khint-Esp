<?php
        include "connect_db.php";
        $file_name = $_FILES["fichier"]["name"];
        $file_extension = strrchr($file_name, ".");
        $file_tmp_name = $_FILES["fichier"]["tmp_name"];
        $file_size = $_FILES["fichier"]["size"]; 
        $niveau=$_POST["niveau"];
        $cours=$_POST["cours"];
        $file_public ='../public/'.$file_name;
        $file_target = '../public/'.basename($file_name);
        $extension_autorisees = array(".pdf", ".PDF", ".zip");

        if($file_extension=='.pdf' || $file_extension=='.PDF'|| $file_extension=='.zip' || $file_extension=='.ZIP')
        {
            move_uploaded_file($file_tmp_name, $file_public);
            if(!file_exists( $file_target))
            {
                $req=$conn->prepare('insert into EspKhints (niveau, cours, nom, file_url) values(?, ?, ?, ?)');
                $req->execute(array($niveau, $cours,  $file_name, $file_public));
            //  Rediriger vers passs.php
                header("Location: pass.php");
                exit();
            }
            else
            {  
                echo "ce fichier existe déja";
            }
                

        }
        else
        { 
            $message
        }
    ?>  

        
