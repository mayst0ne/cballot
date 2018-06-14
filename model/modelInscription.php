<?php
include ('pdo.php');

if (!empty($_POST)) {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $name = $_POST['societe'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
}
$query = $pdo->prepare('INSERT INTO person(lastname, firstname, email, password)
                        VALUES(:lastname,:firstname,:email,:password)');

// execute requete
$query->execute(array(
    'lastname'  => $lastname,
    'firstname' => $firstname,
    'email'     => $email,
    'password'  => $password
    ));

$query2 = $pdo->prepare('INSERT INTO organization(name, idorganizer) VALUES (:name, (SELECT idperson FROM person WHERE email=:email ))');
$query2->execute(array(
    'name'      => $name,
    'email'     => $email
));
header('Location:../view/viewConnexion.php');