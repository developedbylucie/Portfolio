<?php
session_start();
$_SESSION['information']='';

$affichage_retour = '';
$erreurs=0;

//name
if (!empty($_POST['name'])) {
	$name=ucfirst(strtolower($_POST['name']));
} else {
    $affichage_retour .='Le champ NOM est obligatoire<br>';
    $erreurs++;
}
//first_name
if (!empty($_POST['first-name'])) {
	$first_name=ucfirst(strtolower($_POST['first-name']));
} else {
    $affichage_retour .='Le champ PRENOM est obligatoire<br>';
    $erreurs++;
}
//subject
if (!empty($_POST['subject'])) {
	$first_name=ucfirst(strtolower($_POST['subject']));
} else {
    $affichage_retour .='Le champ SUJET est obligatoire<br>';
    $erreurs++;
}

//email
if (!empty($_POST['email'])) {
    // Verification du format de l'email
    if (filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
        $email=$_POST['email'];
    } else {
    // Si l'email est incorrect on retourne au formulaire  
      $affichage_retour .='Adresse email incorrecte<br>';
      $erreurs++;
    }
  // Si le champ email est vide, on retourne au formulaire     
  } 
else {
    $affichage_retour .='Le champ EMAIL est obligatoire<br>';
    $erreurs++;
}

//message
if (!empty($_POST['message'])) {
	$message=ucfirst(strtolower($_POST['message']));
} else {
    $affichage_retour .='Le champ MESSAGE est obligatoire<br>';
    $erreurs++;
}

if ($erreurs == 0) {
    //envoi du mail de contact
    $subject='Portfolio : demande de '.$first_name .''. $name .' concernant '. $subject;
    $headers['From']=$email;							// Pour pouvoir répondre à la demande de contact
    $headers['Reply-to']=$email;						// adresse de l'utilisateur = adresse de réponse
    $headers['X-Mailer']='PHP/'.phpversion();			// On précise quel programme a généré le mail

    // adresse du destinataire
    $email_dest="lfreihaut04@gmail.com";

    //Envoi du mail avec confirmation d'envoi (ou pas)
    if (mail($email_dest,$subject,$message,$headers)) {
        // echo "Mail de Contact envoyé <br>";
        $erreurs=0;
    } else {
        // echo "Erreur d'envoi du mail de contact";
        $erreurs++;
    }

    //envoi du mail de confirmation à l'utilisateur
    $subject='Confirmation de l\'envoi de votre demande à Lucie Freihaut';
    $debutDuMail='<!DOCTYPE html>
    <html>
    <head>
        <title>Email de confirmation - Portfolio de Lucie Freihaut</title>
        <meta charset="utf-8">
    </head>
    <body style="">';
    $finDuMail='<br><br>Veuillez recevoir ma réponse dans les plus brefs délais.'
        ."\n"
        .'<p style="color: #fff;">Lucie Freihaut</p>.</body></html>';

    $message = $debutDuMail
        .'<h1 style="background: ; font-size: 30px">Bonjour '. $first_name .''. $nom .'</h1>'
        ."\n"
        .'Nous avons bien pris en compte votre demande concernant '. $subject .'.'. $finDuMail;

    $headers['From']=$email_dest;
    $headers['Reply-to']='no-reply@mmi-troyes.fr';
    $headers['X-Mailer']='PHP/'.phpversion();
    $headers['MIME-Version'] = '1.0';
    $headers['content-type'] = 'text/html; charset=utf-8';

    //Envoi du mail avec confirmation d'envoi (ou pas)
    if (mail($email,$subject,$message,$headers)) {
        // echo "Mail de Confirmation envoyé";
        $erreurs=0;
    } else {
        // echo "Erreur d'envoi du mail de confirmation";
        $erreurs++;
    }

}

// Détermination du message à affichée après les tentatives d'envoi
if ($erreurs != 0) {
    $affichage_retour .='Echec de l\'envoi du message';
} else {
    $affichage_retour='Votre demande a bien été envoyée';
}

// echo $affichage_retour;
$_SESSION['information']=$affichage_retour;
header('location: index.php#contact');

?>