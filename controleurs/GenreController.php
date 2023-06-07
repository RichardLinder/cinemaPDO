<?php
require_once "bdd/DAO.php";

class GenreController

{
    public function findAllGenre()

    {
        $dao = new DAO;
        $sql = "SELECT id_genre, wording FROM `genre`; ";
        $genres= $dao->executerRequete($sql);
        require_once"views/genre/listeGenre.php";

    }
    public function listeFilmDuGenre($id)
    {
        $dao = new DAO;
        $sql = 
        "SELECT f.title, g.id_genre ,g.wording  
        FROM `genre` g
        JOIN clasification c
        ON c.id_genre = g.id_genre
        JOIN film f
        ON f.id_film  = c.id_film
        WHERE g.id_genre =:id;";
        $param =[ "id" => $id];
        $genre= $dao->executerRequete($sql, $param);
        if ( $genre->rowCount()!=0) 
        {
            require_once"views/genre/listeFilmDuGenre.php";


        }
        else 
        {
 
            $sql = "SELECT wording FROM `genre` WHERE g.id_genre =:id; ";
            $param =[ "id" => $id];
            $genre= $dao->executerRequete($sql, $param);
            require_once"views/genre/listeFilmDuGenre.php";
        }



    }

    public function getGenderById($id)
    {

       return $resultat;
    }
    
}


?>