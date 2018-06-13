<?php

include ('pdo.php');

if (!empty($_POST)) {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

$query = $pdo->prepare('INSERT INTO person(lastname, firstname, email, password) 
                        VALUES(:lastname,:firstname,:email,:password)');

//On exécute la requête
$query->execute(array(
    'lastname'  => $lastname,
    'firstname' => $firstname,
    'email'     => $email,
    'password'  => $password
    ));
/*
$req = $pdo->prepare('SELECT email FROM person WHERE email = :email');
$req->execute(array(':email'=>$email));
$donnees = $req->fetch();

 if (empty ($_POST['email'])){
     echo 'Veuillez saisir une donnée';
    }

    if (empty ($_POST['firstname'])){
        echo 'Veuillez saisir une donnée';
    }

    if (empty ($_POST['lastname'])){
        echo 'Veuillez saisir une donnée';
    }

    if (empty ($_POST['password'])){
        echo 'Veuillez saisir une donnée';
    }
*/
header('Location:../view/viewConnexion.php');