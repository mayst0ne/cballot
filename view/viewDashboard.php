<?
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
                <a class="nav-link" href="../view/viewAccueil.php">Accueil</a>
            </li>

            <li class="nav-item">
                <a class="nav-link active" href="../view/viewInscription.php">Inscription</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="../view/viewConnexion.php">Connexion</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="">Conditions generales</a>
            </li>
        </ul>

        <p>Bonjour <? $_SESSION['firstname']?> <? $_SESSION['lastname']?></p>
        <p>Ton email de connexion: <?= $_SESSION['email']?> </p>

        <a href="../view/viewCreatSondage.php">Création sondage</a>

        <p>Tes sondages</p>
        <!-- boucle sur la liste des sondages de l'utilisateur (condition sur l'affichage si l'utilisateur
            a des sondages en cours, boucle sur les sondages -->

        <!-- Déconnexion -->
        <form method="post" action="">
            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary">Deconnexion</button>
            </div>
        </form>

        <!-- désinscription -->
        <form method="post" action="">
            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary">Désinscription</button>
            </div>
        </form>
    </main>

    <!-- inclusion footer -->
    <?php include ('../view/footer.php') ?>
</body>
</html>