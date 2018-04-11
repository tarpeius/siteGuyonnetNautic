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
            $mail = $_POST['Email'];
            $valide = checkClientMail_if_exists($mail);

            if ($valide == 1){
                if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
                {
                    $passage_ligne = "\r\n";
                }
                else
                {
                    $passage_ligne = "\n";
                }
//=====Déclaration des messages au format texte et au format HTML.
                $message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
                $message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
//==========

//=====Création de la boundary
                $boundary = "-----=".md5(rand());
//==========

//=====Définition du sujet.
                $sujet = "Hey mon ami !";
//=========

//=====Création du header de l'e-mail.
                $header = "From: \"WeaponsB\"<q.guyonnet@outlook.fr>".$passage_ligne;
                $header.= "Reply-to: \"WeaponsB\"<$mail>".$passage_ligne;
                $header.= "MIME-Version: 1.0".$passage_ligne;
                $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========

//=====Création du message.
                $message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
                $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
                $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
                $message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
                $message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
                $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
                $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
                $message.= $passage_ligne.$message_html.$passage_ligne;
//==========
                $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
                $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//=====Envoi de l'e-mail.
                mail($mail,$sujet,$message,$header);
//==========

                echo "ok";
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