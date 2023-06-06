<?php
require_once "bdd/DAO.php";

class GenreController

{
    public function findAllGenre()

    {
         $dao = new DAO;
         $sql = "SELECT wording FROM `genre`; ";
         $genres= $dao->executerRequete($sql);
        require_once"views/movie/listeGenrer.php";

    }
    
}


?>