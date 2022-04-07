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


            if($file_extension=='.pdf' || $file_extension=='.PDF'|| $file_extension=='.zip' || $file_extension=='.ZIP')
            {

                if(move_uploaded_file($file_tmp_name, $file_public))
                {
                    $req=$conn->prepare('insert into EspKhints (niveau, cours, nom, file_url) values(?, ?, ?, ?)');
                    $req->execute(array($niveau, $cours,  $file_name, $file_public));
                //  Rediriger vers passs.php
                    header("Location: pass.php");
                    exit();
                }
                else
                {  
                    $message = "Erreur est rencontrée lors du upload ";
                }

            }
            else
            { 
                $message = "Impossible d'uploader ce type de fichier ...... ";
            }

            
       
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>uploader</title>
    <style>
        div{
            margin-top:50px;
            ma
        }
    </style>
</head>
<body>
    <center><div class="shadow p-3 mb-5 bg-body rounded mt-10"><?php echo $message; ?></div></center>
</body>
</html>