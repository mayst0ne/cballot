<?php
include ('pdo.php');

if (!empty($_POST)) {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}
$query = $pdo->prepare('INSERT INTO person(lastname, firstname, email, password),
                        VALUES(:lastname,:firstname,:email,:password)');

// execute requete
$query->execute(array(
    'lastname'  => $lastname,
    'firstname' => $firstname,
    'email'     => $email,
    'password'  => $password,
    'name'      => $name
    ));

$query2 = $pdo->prepare('INSERT INTO organization(name) VALUES (:name)');
$query2->execute(array(
    'name'      => $name
));
header('Location:../view/viewConnexion.php');