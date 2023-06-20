<?php
// démare la temporisation de sortie
ob_start();
$cSS ="detaileFilm.css";

while ( $genre= $genres->fetch() ) 
{
   echo $genre['wording'];

}

if ($detail = $film->fetch())
{
    $title= $detail["title"];
    $synopsis = $detail["synopsis"];
    $poster =$detail["poster_link"];
    $director= $detail["nameDirector"];
    $lengt= $detail["length_in_minute"];
    $sortieFR =$detail["france_release_date"];
}  
?>


<h2><?=$title?></h2>
<a href="index.php?action=detailDirector&id=<?=$detail["id_director"]?>"> <h3> Realisé par <?=$director?></h3> </a>
<span>Un film de <?=$lengt?> minutes</span>
<span>  sortie en sale le <?=$sortieFR?> </span>
<div class="center">
    <p>
    <?=$synopsis?>
    </p>
    <figure>
        <img src="<?=$poster?>" alt="Poster de <?=$title?> ">
    </figure>
</div>
<?php 
echo '<div class="blue">';
while ( $casting= $castings->fetch()) 
{ 
    ?>
    <p>
        <span><a href="index.php?action=detailActor&id=<?=$casting["id_actor"];?>"> <?=$casting["nomActeur"];?></span></a>
        <span>dans le role de <?=$casting["role_name"] ?>p </span>

        
    </p>
    <?php  
}
?>
</div>

<?php
$content = ob_get_clean();
require_once "./views/template.php";
?>