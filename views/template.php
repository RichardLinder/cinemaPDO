<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="views\CSS\main.css">
    <link rel="stylesheet" href="views\CSS\<?=$cSS?>">
</head>
<body>
    <header>

    <ul class="nav">
  <li class="nav-item">
    <a class="nav-link" href="index.php">Accueil</a></li>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=listeFilms">Liste des films</a></li>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=listeActors">Liste des acteur</a></li>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=listeDirectors">Liste des realisateur</a></li>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="index.php?action=listeGenres">Liste des genre</a></li>
  </li>

</ul>
<h1>Aurevoirs 
  <span id="titrep2">Cinema</span> 
  </h1>

    </header>
    <main>
        <?= $content?>
    </main>
    <footer>
        <span>Ceci es un footer</span>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>