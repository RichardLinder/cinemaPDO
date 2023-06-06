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
        "SELECT g.wording, f.title, f.id_film  FROM `genre` g
        JOIN casting c
        ON c.id_role= g.id_genre
        JOIN film f
        ON f.id_film = c.id_film
        WHERE g.id_genre=:id;";
         $param =[ "id" => $id];
        $genre= $dao->executerRequete($sql, $param);
        require_once"views/genre/listeFilmDuGenre.php";
    }
    
}


?>