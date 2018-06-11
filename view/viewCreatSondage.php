<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>C'Ballot</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/sondage.css">
</head>

<body>
<!-- inclusion header -->
<?php include('../view/header.php') ?>

<main>
    <!-- navbar -->
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="../view/viewDashboard.php">Mon Dashboard</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="">Conditions generales</a>
        </li>
    </ul>

    <!-- création du sondage par l'utilisateur
    donné un titre à son sondage
    il peut remplir plusieurs questions
    plusieurs choix de réponses par questions
    donné un deadline (une date) à son sondage
    appuyer sur le bouton création
    -->
    <form method="post" action="">
        <div class="form-group">
            <label for="exampleFormControlInput1">Titre du sondage :</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">La date limite de votre sondage :</label>
            <input type="date" class="form-control" id="exampleFormControlInput1" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Votre question :</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" required>
        </div>

        <button type="submit" class="btn btn-primary mb-2">Création du sondage</button>
    </form>
</main>

<!-- inclusion footer -->
<?php include ('../view/footer.php') ?>
</body>
</html>
