<?php
// démare la temporisation de sortie
ob_start();
$title;


    if (isset($genre)&&$genre!=null&&$genre->rowCount() > 0) 
    {
        if ($detail = $genre->fetch())
            
        {
            $title= $detail["wording"];
        }

    }else {
        echo "ereur base de donné";
        
    }

       

    
?>

<h2><?=$title?></h2>


<?php 
// var_dump( $films->fetch());
if (isset($films)&&$films!=null && $films->rowCount() > 0) {
    while ($film = $films->fetch())
   {
        echo $film["title"];
        echo "<br>";
    }
}else {
    echo "pas de film de ce genre dans la base de donné";
}



$content = ob_get_clean();
require_once "./views/template.php";
?>