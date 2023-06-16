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
    <form action="index.php?action=renameHuman&id=<?=$detail["id_human"]?>" method="post">
    <form action="" method="post"></form>
        <span> <input name="first_name" type="text"  placeholder="<?=$detail["first_name"];?>"></span>     
        <span> <input name="last_name" type="text"  placeholder="<?=$detail["last_name"];?>"</span>     
        <span> <input name="birthdate" type="date"  placeholder="<?=$detail["birthdate"];?>"</span>     
        <span> <input name="sex" type="text"  placeholder="<?=$detail["sex"];?>"></span>     
        <span> <input name="photo" type="url"  placeholder="<?=$detail["photo"];?>"></span> 
        <button  type="submit"><a href="index.php?action=renameHuman&id=<?=$detail["id_human"]?>">cliquer vite !!!!</a></button>
    </form>




<?php
$content = ob_get_clean();
require_once "./views/template.php";
?>