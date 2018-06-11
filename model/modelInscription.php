<?php

if (!empty($_POST)) {
    $email          = $_POST['email'];
    $firstname      = $_POST['firstname'];
    $lastname       = $_POST['lastname'];
    $birthdate      = $_POST['birthdate'];
    $pass_hache     = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $request = $db->prepare('INSERT INTO person(email, password, firstname, lastname, birthdate) 
        VALUES(:email, :password, :firstname, :lastname, :birthdate');
    $request->execute();

    header('../view/viewAccueil.php');
} else {
    ;
}