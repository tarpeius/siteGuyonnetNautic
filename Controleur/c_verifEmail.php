<?php
$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action)
{
    case "afficher": // a changer selon besoin
        include("Vue/v_verifEmail.php");
        break;
    case "verification": // a changer selon besoin
        if (!empty($_POST['Email'])){
            $test = $_POST['Email'];
            $valide = checkClientMail_if_exists($test);
            if ($valide == 1){
                echo "email existe";
                mail($test,"salut test",);
            }else{
                echo "email n'existe pas";
            }
        }

        include("Vue/v_verifEmail.php");
        break;
    default:
        include("Vue/v_accueil.php");
        break;
}