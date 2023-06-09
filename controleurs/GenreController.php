<?php
require_once "bdd/DAO.php";



class GenreController

{
    public function findAllGenre()

    {
        $dao = new DAO;
        $sql = "SELECT id_genre, wording FROM `genre`; ";
        $genres= $dao->executerRequete($sql);
        require_once"views/genre/listeGenres.php";

    }
    public function listeFilmsDuGenre($id)
    {
        // le genre
        
        $dao = new DAO;
        $sql = "SELECT id_genre, wording FROM `genre` WHERE id_genre =:id; ";
     
        $param =[ "id" => $id];
        $genre= $dao->executerRequete($sql, $param);

        // les films (de ce genre)

        $sql = "SELECT f.title
            FROM clasification c
            JOIN film f
            ON f.id_film  = c.id_film
            WHERE c.id_genre =:id;";
        
        $films=$dao->executerRequete($sql, $param);

        require_once"views/genre/listeFilmsDuGenre.php";
    }
    public function addGenre()
    {
         
        $wording = filter_input (INPUT_POST, "wording", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // die($wording);
              
        $dao = new DAO;
        $sql= "INSERT INTO `cinema`.`genre` (`wording`) VALUES (:wordingUse);";
        $param = $param =[ "wordingUse" => $wording];
        $dao->executerRequete($sql, $param);
        $this->findAllGenre();

    }

    
}


?>