<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$action = "";
if(!empty($_REQUEST['a'])){
    $action = $_REQUEST['a'];
}

switch($action) {

    case "afficher": // a changer selon besoin
        if (isset($_COOKIE['client'])) {
            $email = $_COOKIE['client'];
            $client = lireClientCookie($email);
        }
        include("Vue/v_compteClient.php");
        break;
    case "afficherModifMdp":
        if (!empty($_GET['id'])) {
            $_SESSION['id'] = $_GET['id'];
        } else {
            $_SESSION['id'] = "";
        }
        $erreur = "";
        $reussi = "";
        include("Vue/v_modifMdp.php");
        break;
    case "modifierMdp":
        if (!empty($_COOKIE['client'])) {
            if (!empty($_POST['Password']) && !empty($_POST['Confirm']) && $_POST['Password'] == $_POST['Confirm']) {

                $email = $_COOKIE['client'];
                $client = lireClientCookie($email);
                $mdp = test_input($_POST['Password']);
                $id = $client['id_client'];
                modifierMdpClient($id, $mdp);

                $reussi = "Mot de passe modifié avec succès";
                include ('Vue/v_modifMdp.php');
                echo "<script type='text/javascript'>
                        var delai=2; 
                        var url='index.php?c=compteClient&a=afficher'; 
                        setTimeout(\"document.location.replace(url)\", delai + '000');
                    </script>";

            } else {
                $erreur = "Mot de passe incorrect";
            }
        } elseif (!empty($_SESSION['id'])) {
            if (!empty($_POST['Password']) && !empty($_POST['Confirm']) && $_POST['Password'] == $_POST['Confirm']) {

                $mdp = test_input($_POST['Password']);
                $id = $_SESSION['id'];
                modifierMdpClient($id, $mdp);

                $reussi = "Mot de passe modifié avec succès";
                include ('Vue/v_modifMdp.php');
                echo "<script type='text/javascript'>
                        var delai=2; 
                        var url='index.php?c=connexion&a=authentification'; 
                        setTimeout(\"document.location.replace(url)\", delai + '000');
                    </script>";

            } else {
                $erreur = "Mot de passe incorrect";
            }
        } else {
            $erreur = "Vous devez etre connecté";
        }
        include ("Vue/v_modifMdp.php");
        break;
    case "afficherVerifEmailMdp":
        $reussi = "";
        $erreur = "";
        include ("Vue/v_verifEmailMdp.php");
        break;
    case "verificationMdp": // a changer selon besoin
        $emailExist = emailExist($_POST['Email']);
        if (!empty($_POST['Email']) && $emailExist == 1){
            $email = $_POST['Email'];
            $client = idClientSansMdp($email);
            //Load Composer's autoloader
            require 'vendor/autoload.php';
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                // 0 = off (for production use, No debug messages)
                // 1 = client messages
                // 2 = client and server messages
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'quentin.guyonnet@greta-sud-aquitaine.academy';                 // SMTP username
                $mail->Password = '';                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

                //Recipients
                $mail->setFrom('quentin.guyonnet@greta-sud-aquitaine.academy', 'Guyonnet Nautic');
                $mail->addAddress($email);     // Add a recipient
//                $mail->addAddress('ellen@example.com','Joe User');               // Name is optional
//                $mail->addReplyTo('info@example.com', 'Information');
//                $mail->addCC('cc@example.com');
//                $mail->addBCC('bcc@example.com');

                //Attachments
//                $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//                $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

                //Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Changement de mot de passe';
                $mail->Body = 'Pour modifier votre mot de passe, cliquez <b><a href="http://localhost/siteguyonnetnautic/index?c=compteClient&a=afficherModifMdp&id='.$client['id_client'].'">ici</a></b>';
                $mail->AltBody = 'Pour modifier votre mot de passe, cliquez <b><a href="http://localhost/siteguyonnetnautic/index?c=compteClient&a=afficherModifMdp&id='.$client['id_client'].'">ici</a></b>';

                $mail->send();
                $reussi = "Un mail de confirmation a été envoyé sur votre adresse électronique";
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ' /*$mail->ErrorInfo*/;
            }
        } else {
            $erreur = "Veuillez saisir une adresse";
        }

        include("Vue/v_verifEmailMdp.php");
        break;
    case "modifierInfosClient":
        if (isset($_POST['modifier'])) {
            if (!empty($_COOKIE['client'])) {
                $email = $_COOKIE['client'];
                $client = lireClientCookie($email);

                $id = $client['id_client'];
                $email = $_POST['Email'];
                $nom = $_POST['Nom'];
                $prenom = $_POST['Prenom'];
                $adresse = $_POST['Adresse'];
                $cp = $_POST['Cp'];
                $ville = $_POST['Ville'];
                $telephone = $_POST['Telephone'];
                modifierClient($nom,$prenom,$email,$adresse,$cp,$id);
                // changement $SESSION
                $_SESSION['client'] = lireClientEmail($id);
                $reussi = "Modification réussie";
            }
        }
        include ("Vue/v_compteClient.php");
        break;
    case "suiviCommande":
        if (!empty($_COOKIE['client'])) {
            $email = $_COOKIE['client'];
            $client = lireClientCookie($email);
            $id = $client['id_client'];
            $article = CommandeClientArticle($id);
            if (empty($article)) {
                $erreur = "Vous n'avez fait aucune commande";
            }
        } else {
            $erreur = "Vous devez être connecté";
        }
        include ("Vue/v_suiviCommande.php");
        break;
    default:
        include ("Vue/v_accueil.php");
        break;
}