<?php
class MovieController
{
    public function findAllFilm()
    {
        $dao = new DAO;
        $sql = "select f.title, f.id_film from film f";
        $films= $dao->executerRequete($sql);
        require_once"views/movie/listFilms.php";

    }

    public function detailFilm( $id)
    {
        $dao = new DAO;
        $sql = "SELECT f.title, f.france_release_date, f.length_in_minute, f.synopsis, f.id_director, f.poster_link,  f.id_director FROM `film` f WHERE F.id_film=:id";
        $param =[ "id" => $id];
        $film= $dao->executerRequete($sql,$param);
        require_once"views/movie/detailDirector.php";
    }
}


?>