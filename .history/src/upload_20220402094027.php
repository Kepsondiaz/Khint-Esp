

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>HINTSxHINTS</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sticky-footer-navbar/">
    <link href="style.css" rel="stylesheet">
  </head>
<body class="d-flex flex-column h-100">
    
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
                <a class="nav-link " href="index.php">Voir Les Fichiers</a>
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
    <main class="main shadow p-3 mb-5 bg-body rounded ">
        <div class="fst-italic shadow p-3 mb-5 bg-primary rounded text-light">
          <h6>HINTSxHINTS partager l'excellence entre polytechniciens</h6>
        </div>
        <form action="uploader.php" method="POST" enctype="multipart/form-data" class="space-form">
    <!--   <select name="niveau" id="" required>
                <option value="">Selectionner un niveau</option>
                <option value="DSTI1-DUT1">DSTI1-DUT1</option>
                <option value="DSTI2-DUT2">DSTI2-DUT2</option>
            </select>
    -->
            <br>
            <select class="form-select" aria-label="Disabled select example" name="cours" id="" required>
                <option value="">Selectionner un cours</option>
                <option value="Algèbre">Algèbre</option>
                <option value="Analyse">Analyse</option>
                <option value="Anglais">Anglais</option>
                <option value="Algorithmique">Algorithmique</option>
                <option value="Base De Données">Base De Données</option>
                <option value="Architecture Des Ordinateurs">Architecture Des Ordinateurs</option>
                <option value="Droits">Droits</option>
                <option value="Economie">Economie</option>
                <option value="Logique">Logique</option>
                <option value="Mathématique Discret">Mathématique Discret</option>
                <option value="Probailite">Probabilités</option>
                <option value="Programmation en C">Programmation en C</option>
                <option value="Programmation Front-End">Programmation Front-End</option>
                <option value="Reseaux">Réseaux</option>
                <option value="recherche_doc">Recherche documentaire</option>
                <option value="systeme_ex">Système </option>
            </select>
            <br>
            <div class="input-group mb-3 ">
                <input type="file" class="form-control" id="inputGroupFile02" name="fichier" required>
            </div>
            <div class>
            <input type="submit" value="uploader" class="input-group-text bg-primary button text-light" for="inputGroupFile02" name="upload">
            </div>
        </form>
    </main>

    <footer class="footer mt-auto py-3 bg-primary">
      <div class="container">
        <strong class="text-muted">KhintEsp © 2022</strong>
      </div>
    </footer>
      <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
</body>
</html>
