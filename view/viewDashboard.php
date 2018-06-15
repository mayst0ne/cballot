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
    <link rel="stylesheet" href="../public/css/dashboard.css">
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


        <p>Ton email de connexion: <?php echo $_SESSION['email'];?></p>

        <a href="../view/viewCreatSondage.php" class="badge badge-primary">Création sondage</a>

        <p>Tes sondages :</p>
        <!-- boucle sur la liste des sondages de l'utilisateur (condition sur l'affichage si l'utilisateur
            a des sondages en cours, boucle sur les sondages -->

        <!-- Déconnexion -->
        <form method="post" action="../model/modelDeconnexion.php">
            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary">Deconnexion</button>
            </div>
        </form>

        <!-- lien vers une désinscription -->
        <a href="../view/viewUnsub.php" class="badge badge-danger">Me désinscrire</a>
    </main>
    <!-- inclusion footer -->
    <?php include ('../view/footer.php') ?>
</body>
</html>