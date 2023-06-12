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

        $sqlF = 
        "SELECT f.title, f.france_release_date, f.length_in_minute, f.synopsis, f.id_director, f.poster_link,
        CONCAT(h.first_name, ' ', h.last_name)as nameDirector
        FROM `film` f 
        JOIN realisateur r
        ON f.id_director= R.id_director
        JOIN human h
        ON R.id_human=h.id_human
        WHERE F.id_film=:id";

        $param =[ ":id" => $id];
        $film= $dao->executerRequete($sqlF,$param);



        $sqlC =
        "SELECT CONCAT(h.first_name ,'', h.last_name ) as nomActeur ,r.role_name ,a.id_actor
        FROM `film` f
        JOIN casting c
        ON F.id_film = C.id_film
        JOIN actor a
        ON a.id_actor =C.id_actor
        JOIN human h
        ON a.id_human = h.id_human
        JOIN role r
        on C.id_role =R.id_role
        WHERE F.id_film =:id";

        $castings =  $dao->executerRequete($sqlC,$param);

        $sqlG= 
        "SELECT CL.id_genre ,g.wording  
        FROM clasification CL
        JOIN film f
        ON f.id_film =CL.id_film
        JOIN genre g
        ON CL.id_genre = g.id_genre
        WHERE CL.id_film =:id";
        
         $genres = $dao->executerRequete($sqlG,$param);
        require_once"views/movie/detailFilm.php";

       

    }
}


?>