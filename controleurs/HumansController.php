<?php
require_once "bdd/DAO.php";
class HumansController
{
    public function findAllActor()

    {
         $dao = new DAO;
         $sql = "SELECT h.first_name, h.last_name, h.birthdate, h.sex FROM `actor` a
         JOIN human h
         ON h.id_human = a.id_human";
         $acteurs= $dao->executerRequete($sql);
        require_once"views/movie/listeActors.php";

    }

    public function findAllDirector()

    {
        $dao = new DAO;
        $sql = "SELECT h.first_name, h.last_name, h.birthdate, h.sex FROM `realisateur` r JOIN human h ON h.id_human = r.id_human; ";
        $directors= $dao->executerRequete($sql);
        require_once"views/movie/listeDirector.php";

    }
}


?>