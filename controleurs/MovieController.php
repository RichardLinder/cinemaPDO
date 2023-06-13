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
    function createfilmFormulaire() 
    {


        require_once"views/movie/createfilmFormulaire.php";   
    }
    function createFilm()  
    {
        // die(var_dump($_POST));
        $titre = filter_input (INPUT_POST, "titre", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $synopsis = filter_input (INPUT_POST, "synopsis", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $poster =filter_input(INPUT_POST,'poster' ,FILTER_SANITIZE_URL);
        $duree =filter_input(INPUT_POST,'duree' ,FILTER_VALIDATE_INT);
        $rating =filter_input(INPUT_POST,'rating' ,FILTER_VALIDATE_INT);
        $dateString =filter_input(INPUT_POST,'date' ,FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $dao = new DAO;
        $sql =
        "INSERT INTO `cinema`.`film` (`title`, `france_release_date`, `length_in_minute`, `synopsis`, `poster_link`, `rating`, `id_director`)         
        VALUES (:titre, :dateString, :duree, :synopsis, :poster,:rating ,1);";
        $param=
        [":titre"=>$titre,
         ":dateString"=>$dateString,
          ":duree"=>$duree,
          ":synopsis" =>$synopsis,
          "rating"=>$rating,
          ":duree"=> $duree,
          ":poster"=>$poster ];

          $dao->executerRequete($sql,$param);
          $this->findAllFilm();

    }

        
}


?>