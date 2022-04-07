<?php
        include "connect_db.php";
        $file_name = $_FILES["fichier"]["name"];
        $file_extension = strrchr($file_name, ".");
        $file_tmp_name = $_FILES["fichier"]["tmp_name"];
        $file_size = $_FILES["fichier"]["size"]; 
        $niveau=$_POST["niveau"];
        $cours=$_POST["cours"];
        $file_public ='../public/'.$file_name;
        $file_target = 'pubblic/'.base
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
            <div>
                <p>Impossible d'uploader ce type de fichier ......</p>
                <p><a href="upload.php">Uploader un fichier</a></p>
            </div>
            <?php break;
        }
    }
    ?>  

        
