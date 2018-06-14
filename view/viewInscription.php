<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>C BALLOT</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/inscription.css">
</head>

<body>
    <!-- un header haut de page -->
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
                <a class="nav-link" href="../view/viewAccueil.php">Conditions generales</a>
            </li>
        </ul>

        <!--<i class="fas fa-user-circle"></i>-->

        <!-- inscription -->
        <form method="post" action="../model/modelInscription.php" class="container-fluid">
            <div class="form-group row">
                <!--<label for="inputEmail3" class="col-sm-2 col-form-label">Votre Nom :</label> -->
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Nom"
                           maxlength="30" name="lastname" required>
                </div>
            </div>

            <div class="form-group row">
                <!--<label for="inputEmail3" class="col-sm-2 col-form-label">Votre Prénom :</label>-->
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Prénom" maxlength="30" name="firstname" required>
                </div>
            </div>

            <div class="form-group row">
                <!--<label for="inputEmail3" class="col-sm-2 col-form-label">Votre Email :</label>-->
                <div class="col-sm-5">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email" required>
                </div>
            </div>
            <!--
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Confirmation de votre Email :</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Confirm Email" required>
                </div>
            </div>
            -->
            <div class="form-group row">
                <!--<label for="inputEmail3" class="col-sm-2 col-form-label">Votre Email :</label>-->
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="inputEmail3" placeholder="Société" name="name" required>
                </div>
            </div>
            <div class="form-group row">
                <!--<label for="inputPassword3" class="col-sm-2 col-form-label">Votre mot de passe :</label>-->
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password" required>
                </div>
            </div>
            <!--
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Confirmation de votre mot de passe :</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required>
                </div>
            </div>
            -->
            <div class="form-group row">
                <div class="col-sm-8">
                    <button type="submit" class="btn btn-primary">Inscription</button>
                </div>
            </div>
        </form>
    </main>
    <!-- footer -->
    <?php include('../view/footer.php');?>
</body>
</html>