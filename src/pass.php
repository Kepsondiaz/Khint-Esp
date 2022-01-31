<?php
include "connect_db.php";
include "uploader.php";
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <title>MyKhintEsp</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/">
    <link href="style.css" rel="stylesheet">
  </head>
<body class="d-flex flex-column h-100">
    
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">KhintEsp</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Uploader Un Fichier</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="public_khint_esp.php">Voir Les Fichiers</a>
              </li>
            </ul>
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
    
    <main class="main">
    <button class="input-group-text bg-primary"  ><a class="text-decoration-none text-light " href="public_khint_esp.php">voir les Fichiers Uploader</a></button>
    </main>
    <footer class="footer mt-auto py-3 bg-primary">
      <div class="container">
        <strong class="text-muted text-white">KhintEsp © 2022</strong>
      </div>
    </footer>
      <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>
<!--
<form action="public_khint_esp.php" method="POST">
    <select class="form-select" aria-label="Disabled select example" name="cours" id="" required>
                <option value="">Selectionner un niveau</option>
                <option value="Algorithmique">Algorithmique</option>
                <option value="Mathématique Discret">Mathématique Discret</option>
                <option value="Logique">Logique</option>
                <option value="Programmation en C">Programmation en C</option>
                <option value="Programmation Java">Programmation Java</option>
                <option value="Programmation Backend">Programmation Backend</option>
    </select>
</form>

<a href="public_khint_esp.php">voir les Fichiers</a>

-->