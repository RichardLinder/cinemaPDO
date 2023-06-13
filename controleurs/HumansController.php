<?php


// voir detail director
require_once "bdd/DAO.php";
class HumansController
{
    public function findAllActor()

    {
         $dao = new DAO;
         $sql = "SELECT a.id_actor, h.first_name, h.last_name, h.birthdate, h.sex FROM `actor` a
         JOIN human h
         ON h.id_human = a.id_human";
         $acteurs= $dao->executerRequete($sql);
        require_once"views/actor/listeActors.php";

    }

    public function findAllDirector()

    {
        $dao = new DAO;
        $sql = "SELECT r.id_director, h.first_name, h.last_name, h.birthdate, h.sex FROM `realisateur` r JOIN human h ON h.id_human = r.id_human; ";
        $directors= $dao->executerRequete($sql);
        require_once"views/director/listeDirectors.php";

    }

    public function detailActor( $id)
    {
        $dao = new DAO;
        $sql = 
            'SELECT concat( h.first_name, " " ,h.last_name) as title ,a.id_actor, h.first_name, h.last_name, h.birthdate, h.sex, h.photo FROM `actor` a
            JOIN human h
            ON h.id_human = a.id_human 
            WHERE a.id_actor=:id';
        $param =[ "id" => $id];
        $actor= $dao->executerRequete($sql,$param);

        // requet pour la filmo de l'acteur 
        $sqlF= 
        "SELECT f.id_film , f.title a title
        FROM actor a
        JOIN casting c
        ON a.id_actor =c.id_actor
        JOIN film f
        ON c.id_film = f.id_film
        WHERE a.id_actor =:id";
        $films = $dao->executerRequete($sql,$param);


        require_once"views/actor/detailActor.php";
    }
    public function detailDirector( $id)
    {
        $dao = new DAO;
        $sql = 
            'SELECT concat( h.first_name, " " ,h.last_name) as title ,r.id_director, h.first_name, h.last_name, h.birthdate, h.sex, h.photo FROM `realisateur` r
            JOIN human h
            ON h.id_human = r.id_human 
            WHERE r.id_director=:id';
        $param =[ "id" => $id];
        $director = $dao->executerRequete($sql,$param);
        require_once"views\director\detailDirector.php";
    }
}


?>