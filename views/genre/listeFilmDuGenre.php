<?php
// démare la temporisation de sortie
ob_start();
$title;
$films

    if (!isset($genre)&&$genre!=null) 
    {
        while ($detail = $genre->fetch())
            
        {
            $title= $detail["wording"];
            $films[]= $detail["title"];   
        }

    }else {
        echo "ereur base de donné";
        
    }

       

    
?>

<h2><?=$title?></h2>


<?php 

if (!isset($films)&&$films!=null) {
    foreach ($films as $key => $film)
   {
    echo $film;
    echo "<br>";
}
}else {
    echo "pas de film de ce genre dans la base de donné";
}



$content = ob_get_clean();
require_once "./views/template.php";
?>