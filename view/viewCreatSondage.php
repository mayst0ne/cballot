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


        <p>Ton email de connexion: <?php echo $_SESSION['email'];?></p>

        <!-- création du sondage par l'utilisateur
        donné un titre à son sondage
        il peut remplir plusieurs questions
        plusieurs choix de réponses par questions
        donné un deadline (une date) à son sondage
        appuyer sur le bouton création
        -->

        <form method="post" action="../model/modelCreatSondage.php" class="container-fluid">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Titre du sondage :</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" name="title" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Date de début:</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="inputEmail3" name="startdate" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Date de fin :</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="inputEmail3" name="enddate" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">La question de votre sondage :</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" name="question" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Réponse numéro 1 :</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" name="reponse1" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Réponse numéro 2 :</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" name="reponse2" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Réponse numéro 3 :</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" name="reponse3" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Création du sondage</button>
                </div>
            </div>
        </form>
    </main>

    <!-- inclusion footer -->
    <?php include ('../view/footer.php') ?>
</body>
</html>
