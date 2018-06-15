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
    <link rel="stylesheet" href="../public/css/unsub.css">
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
                <a class="nav-link" href="https://www.cnil.fr/fr/rgpd-par-ou-commencer">Conditions generales</a>
            </li>
        </ul>

        <p>Grâce à la nouvelle norme RGPD, vous pouvez vous désinscrire sans problème</p>
        <p>Un méssage sera envoyer à l'administrateur pour vous désinscrire de la base de données du site</p>

        <!--bouton d'envoi d'email à l'admin lui indiquant quel utilisateur souhaite se désinscrire-->
        <form method="post" action="../model/modelMail.php">
            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary">Confirmer ma désinscription</button>
            </div>
        </form>
    </main>
    <!-- inclusion footer -->
    <?php include ('../view/footer.php') ?>
</body>
</html>