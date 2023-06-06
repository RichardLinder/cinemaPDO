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
}


?>