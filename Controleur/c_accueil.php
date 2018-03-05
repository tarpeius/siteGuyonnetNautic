<?php
	$action = "";
	if(!empty($_REQUEST['a'])){
		$action = $_REQUEST['a'];
	}
	
	switch($action)
		{
			case "bienvenue": // a changer selon besoin
			include('Vue/v_bienvenue.php');
			break;
			default:
			include("Vue/v_accueil.php");
			break;
		}
	
?>