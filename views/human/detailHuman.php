<?php
// démare la temporisation de sortie
ob_start();
if ($detail = $human->fetch())
{
    $title=$detail["title"];
    if ($detail["id_actor"!=null]) 
    {
        $is_actor= true;
    }else 
    {
        $is_actor= false;        
    }
    if ($detail["id_director"!=null]) 
    {
        $is_director= true;
    }else 
    {
        $is_director= false;        
    }
}  ?>

<h1><?=$title?></h1>

<span>
    <form action="index.php?action=renameHuman" method="post">
        
        <label for="first_name"> prénoms</label> 
        <input name="first_name" type="text" id="first_name"  placeholder="<?=$detail["first_name"]?>">
         <input name="last_name" type="text"  placeholder="<?=$detail["last_name"]?>" />     
         <input name="birthdate" type="date"  value="<?=$detail["birthdate"]?>"/>  
         <input name="sex" type="text"  placeholder="<?=$detail["sex"]?>">   
         <input name="photo" type="url"  placeholder="<?=$detail["photo"]?>"/>
         <input type ="hidden"  name ="id" value ="<?=$detail["id_human"]?>"     >
        
        <button  type="submit">Enregistrer</button>

    </form>




<?php
$content = ob_get_clean();
require_once "./views/template.php";
?>