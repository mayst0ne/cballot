<?php

/*if (!empty($_POST)) {
    $email          = $_POST['email'];
    $firstname      = $_POST['firstname'];
    $lastname       = $_POST['lastname'];
    $pass_hache     = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $request = $db->prepare('INSERT INTO person(email, password, firstname, lastname) 
        VALUES(:email, :password, :firstname, :lastname');
    $request->execute();

    header('../view/viewDashboard.php');
} else {
    ;
}*/
include ('pdo.php');

if (!empty($_POST)) {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}

    $query = $pdo->prepare('INSERT INTO person(lastname, firstname, email, password) 
    VALUES(:lastname,:firstname,:email,:password)');
/*
    // On lie les variables définie au-dessus au paramètres de la requête préparée
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
    $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
    $query->bindValue(':password', $password, PDO::PARAM_STR);
*/
    //On exécute la requête
    $query->execute(array(
        'lastname'  => $lastname,
        'firstname' => $firstname,
        'email'     => $email,
        'password'  => $password
    ));

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
    header('Location:../view/viewDashboard.php');