<?php
include ('pdo.php');

// recup des infos utiles pour l'insértion
$recup = $pdo->query('SELECT idorganization FROM organization INNER JOIN person ON organization.idorganizer = person.idperson 
                                WHERE person.email =:email');
var_dump($recup);

if (!empty($_POST)) {
    $title     = $_POST['title'];
    $startdate = $_POST['startdate'];
    $enddate   = $_POST['enddate'];
    $label     = $_POST['question'];
    $optname1  = $_POST['reponse1'];
    $optname2  = $_POST['reponse2'];
    $optname3  = $_POST['reponse3'];
}

// verif
var_dump($title);
var_dump($startdate);
var_dump($optname1);
var_dump($optname2);
var_dump($optname3);

// insértion du titre du sondage relié à un utilisateur
$query = $pdo->prepare('INSERT INTO campaign(idorganization, campname, startdate, enddate)
                                VALUES((SELECT idorganization FROM organization WHERE orgname=:), :campname,:startdate,:enddate)');


// execution
$query->execute(array(
    'campname'  => $title,
    'startdate' => $startdate,
    'enddate'   => $enddate
    ));

// insértion de la question relié à une campagne
$query2 = $pdo->prepare('INSERT INTO question(idcampaign, label) 
                                  VALUES ((SELECT idcampaign FROM campaign WHERE idorganization=:), :label)');
// execution
$query2->execute(array(
    'label' => $label
    ));

// insértion des réponses relié à la question
$query3 = $pdo->prepare('INSERT INTO option(idquestion, optname)
                                  VALUES ((SELECT idquestion FROM question WHERE idcampaign=:), :optname)');

$query3->execute(array(
    'optname' => $optname
    ));

header('Location:../view/viewDashboard.php');