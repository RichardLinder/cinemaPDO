<?php
// soit accès a un fichier phisique soit j'utilise un autolauteur
// require_once"controleurs\HomeController.php";
// require_once"controleurs\HumansController.php";

spl_autoload_register(function ($class_name) {
    include 'controleurs/'.$class_name . '.php';
});

// je crée des instaance des controlleurs

$homeCtlr = new HomeController;
$filmCtrl = new MovieController;
$humanCtlr = new HumansController;
$genrerCtlr = new GenreController;




// index va intercepté la requette http et reorienté



// ex Index.php?action=listeFilms


if (isset($_GET['action'])) 
{
    $id= filter_input(INPUT_GET, "id", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
     switch($_GET['action'])
     {
        case "listeFilms": 
            $filmCtrl->findAllFilm(); 
            break;
        case 'listeActors':
            $humanCtlr->findAllActor();
            break;
        case 'listeDirectors':
            $humanCtlr->findAllDirector();
            break;
        case 'listeGenres':
            $genrerCtlr->findAllGenre();
            break;
        case 'detailFilm':
            $filmCtrl->detailFilm($id);
            break;
        case 'detailActor':
            $humanCtlr->detailActor($id);
            break;
        default:
        $homeCtlr->homePage();
        break;

    }
}
else 
{
    $homeCtlr->homePage();
}
?>