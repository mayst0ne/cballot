<?php

//Message erreur si utilisateur déjà connecté
include ('pdo.php');

/* 1
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

if(isset($_POST) && !empty($_POST['email']) && !empty($_POST['password'])) {
    extract($_POST);
    // on recupère le password de la table qui correspond au login du visiteur
    $sql = "select password from person where password='".$password."'";
    $req = mysqli_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());}


else {
    echo '<p>Vous avez oublié de remplir un champ.</p>';
    include('../view/viewConnexion.php'); // On inclut le formulaire d'identification
    exit;

}
/* 2
function connection() {
    $login = $_POST['email'];
    $password = password_hash($_POST['password']);
    $pdo = connectDb();
    //Requête SQL permettant de sélectionner les email et les mots de passe

    $sqlmail = $pdo->query("SELECT email FROM person WHERE email ='".$email."'");
    $sqlpwd = $pdo->query("SELECT password FROM person WHERE password ='".$password."'");

    //Parcoure les éléments sélectionnés grâce à fecth
    $sqlmail_fetch = $sqlmail->fetch();
    $sqlpwd_fetch = $sqlpwd->fetch();
    //Compare les éléments récupérés avec les éléments entrés : sont-ils les mêmes?
    if ($sqlmail_fetch['email'] == $login && $sqlpwd_fetch['password'] == $password) {
        $_SESSION['idperson'] = $sqlmail_fetch['idperson'];
        header('Location:../Vues/profile.php');
    } else {
        $_SESSION['error_message'] = "Email ou mot de passe incorrect";
        header('Location:../index.php');
    }
}
connection();

/* 3
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

/* 4 */
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

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
