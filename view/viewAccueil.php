<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>C BALLOT</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/accueil.css">
</head>
<body>
    <?php include('../view/header.php') ?>

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
            <a class="nav-link" href="../view/viewAccueil.php">Conditions generales</a>
        </li>
    </ul>

    <h2>Bienvenue sur le site pour faire vos sondages à la nouvelle norme RGPD</h2>

    <?php include ('../view/footer.php'); ?>
</body>
</html>