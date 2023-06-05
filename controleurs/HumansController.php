<?php
require_once "bdd/DAO.php";
class HumansController
{
    public function findAllFilm()

    {
        $dao = new DAO;
        $sql = "select f.id_film from film f";
        $films= $dao->executerRequete($sql);
        require_once"views/movie/listeActors.php";

    }
}


?>