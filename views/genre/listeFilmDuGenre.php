<?php
// démare la temporisation de sortie
ob_start();


    # code...

while ($detail = $genre->fetch())
    {if (!isset($detail)&&$detail==null) 
        {
        $title= $detail["wording"];
        $films[]= $detail["title"];   
        }else 
        {
            $title= $genrerCtlr->getGenderById($id);
            var_dump($title);
        }

       

    }  
?>

<h2><=$title?></h2>


<?php 

if (!isset($films)&&$films==null) {
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