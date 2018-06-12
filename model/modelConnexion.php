<?php
include ('pdo.php');
//  Récupération de l'utilisateur et de son pass hashé
$req = $pdo->prepare('SELECT email, password FROM person WHERE email=:email, password=:password');
$req->execute(array(
    'email' => $email));

$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['email'] = $email;
        echo 'Vous êtes connecté !';
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
header('Location:../view/viewDashboard.php');
