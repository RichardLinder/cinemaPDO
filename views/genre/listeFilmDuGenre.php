<?php
// démare la temporisation de sortie
ob_start();
while ($detail = $genre->fetch())
    {
       
        $title= $detail["wording"];
        $films[]= $detail["title"];
    }  
?>

<h2><?=$title?></h2>


<?php 

foreach
 ($films as $key => $film)
   {
    echo $film;
    echo "<br>";
}


$content = ob_get_clean();
require_once "./views/template.php";
?>