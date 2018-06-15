<?php

include ('../model/pdo.php');
$email = $_POST['email'];
$req = $pdo->prepare('SELECT idperson, password FROM person WHERE email = :email');
$req->execute(array(
    'email' => $email));
$resultat = $req->fetch();

 // Comparaison du password via le formulaire avec la bdd en verify
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

if ($isPasswordCorrect) {
    session_start();
    $_SESSION['idperson'] = $resultat['idperson'];
    $_SESSION['email']    = $email;
    header('Location:../view/viewDashboard.php');
} else {
    header('Location:../view/viewAccueil.php');
}
