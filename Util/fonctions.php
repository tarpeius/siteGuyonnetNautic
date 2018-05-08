<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlentities($data);
    $data = strip_tags($data);
    return $data;
}

function checkClientMail_if_exists($email)
{
    global $bdd;
    $stmt = $bdd->prepare("SELECT count(*)FROM `client`WHERE email_client = :email");
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    $result = (int)$stmt->fetchColumn();
    return $result;
}

function dateToday(){
    global $bdd;
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $bdd->prepare("SELECT NOW()");
    $stmt->execute();
    $result = $stmt->fetchColumn();
    return $result;
}

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function envoieDemandeContact($nom, $adresseMail, $objet, $message){

    //Load Composer's autoloader
    require 'C:/wamp64/www/siteGuyonnetNautic/vendor/autoload.php';
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        // 0 = off (for production use, No debug messages)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;                                                           // Enable verbose debug output
        $mail->isSMTP();                                                                // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                                                 // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                                                         // Enable SMTP authentication
        $mail->Username = 'bertrand.grange@greta-sud-aquitaine.academy';                // SMTP username - Adresse Mail d'envoie
        $mail->Password = 'Koiloimoi12';                                                           // SMTP password - Mot de passe de l'adresse MAIL
        $mail->SMTPSecure = 'tls';                                                      // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                                              // TCP port to connect to
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        //Recipients
        $mail->setFrom($adresseMail, $nom);
        $mail->addAddress('quentin.guyonnet@greta-sud-aquitaine.academy');     // Add a recipient - Adresse Mail de récéption
//                $mail->addAddress('ellen@example.com','Joe User');               // Name is optional
//                $mail->addReplyTo('info@example.com', 'Information');
//                $mail->addCC('cc@example.com');
//                $mail->addBCC('bcc@example.com');

        //Attachments
//                $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//                $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->CharSet = "utf-8";
        $mail->Subject = $_POST['objet'];
        $mail->Body = "Un client à effectué une demande de contact
                                <p>".$adresseMail."</p>
                                <p>".$objet."</p>
                                <p>".$message."</p>";
        $mail->AltBody = "Un client à effectué une demande de contact
                                <p>".$adresseMail."</p>
                                <p>".$objet."</p>
                                <p>".$message."</p>";

        $mail->send();
        $res = "La demande de contact a bien été envoyé";
    } catch (Exception $e) {
        $res =  'Message could not be sent. Mailer Error: ' .$mail->ErrorInfo;
    }
    return $res ;
}


