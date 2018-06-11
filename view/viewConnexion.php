<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <title>C BALLOT</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/connexion.css">
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

        <!-- connexion

        <legend>Connexion</legend>
        <form method="POST" action="../model/modelConnexion.php">

            <label for="email">Email :</label>
            <input type="text" name="email" placeholder="email" maxlength="30" required /><br>

            <label for="password">Votre mot de passe :</label>
            <input type="password" name="password" placeholder="mot de passe" maxlength="30" required /><br>

            <button type="submit">Connexion</button>
        </form>
        -->
        <!-- test en bootstrap -->
        <form method="" action="">
            <div class="form-row align-items-center">
                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputGroupUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email">
                    </div>
                </div>

                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputName">Password</label>
                    <input type="text" class="form-control" id="inlineFormInputName" placeholder="Password">
                </div>
                <div class="col-auto my-1">
                    <button type="submit" class="btn btn-primary">Connexion</button>
                </div>
            </div>
        </form>

    </main>

    <?php include('../view/footer.php') ?>
</body>
</html>