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
                <a class="nav-link" href="../view/viewInscription.php">Inscription</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../view/viewConnexion.php">Connexion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://www.cnil.fr/fr/rgpd-par-ou-commencer">Conditions generales</a>
            </li>
        </ul>

        <!-- connexion -->
        <form method="post" action="../model/modelConnexion.php" class="container-fluid">
            <div class="form-row align-items-center">

                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputGroupUsername">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">@</div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Email" name="email" required>
                    </div>
                </div>

                <div class="col-sm-3 my-1">
                    <label class="sr-only" for="inlineFormInputName">Password</label>
                    <input type="password" class="form-control" id="inlineFormInputName" placeholder="Password" name="password" required>
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