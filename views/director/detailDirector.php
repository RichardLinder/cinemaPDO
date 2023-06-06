<?php
// démare la temporisation de sortie
ob_start();

while ($detail = $director->fetch())
    {
        $title=$detail["title"];
        $firstname=$detail["first_name"];
        $lastname=$detail["last_name"];
        $birthdate=$detail["birthdate"];
        $sex=$detail["sex"];
            $photo=  $detail["photo"];
    }  
?>

<?php
switch ($sex) {
    case 'male':
        echo "<h2> Monsieur $title</h2>";
        break;
        case 'female':
        echo "<h2>  Madame $title</h2> ";
        break;
    
    default:
    echo "<h2> $title</h2> ";
        break;
}

?>

<span> née le<?=$birthdate?> </span>

<figure><img src="<?=$photo?>" alt="<?=$title?>" ></figure>


<?php
$content = ob_get_clean();
require_once "./views/template.php";
?>