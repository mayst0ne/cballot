<?php
// recup des infos pour afficher le nom prénom
$emailsession = $_SESSION['email'];

$query = $pdo->prepare('SELECT firstname, lastname , idorganization,orgname, idorganizer FROM person INNER JOIN organization ON person.idperson=organization.idorganizer WHERE email=:email');

$query->execute(array(
    ':email' => $emailsession,
));
$row = $query->fetch(PDO::FETCH_ASSOC);
