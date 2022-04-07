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
                            <!--
                            <li class="nav-item">
                                <a class="nav-link active" href="public_khint_esp.php">Voir Les Fichiers</a>
                            </li>
                            </ul>
                            -->
                            <!--
                            <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            -->
                    </div>
                </div>
            </nav>
        </header>
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
            <div class="p-3 mb-2 bg-danger text-white ">
                <p>Impossible d'uploader ce type de fichier</p>
                <p><a href="upload.php">Uploader un fichier</a></p>
            </div>
            <?php break;
        }
    }
    ?>   
</body>
</html>

        
