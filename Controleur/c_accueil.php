<?php
	$action = "";
	if(!empty($_REQUEST['a'])){
		$action = $_REQUEST['a'];
	}
	
switch($action)
    {
    case "afficher":
        $selection = afficheArticleSelection();
        include("Vue/v_accueil.php");
        break;
    default:
        include("Vue/v_accueil.php");
        break;
    }
	
?>