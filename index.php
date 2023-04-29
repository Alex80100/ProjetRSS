<?php

define('CHOICES', [
    'Football' => 'https://rmcsport.bfmtv.com/rss/football/',
    'Rugby' => 'https://rmcsport.bfmtv.com/rss/rugby/',
    'Basket' => 'https://rmcsport.bfmtv.com/rss/basket/',
    'Tennis' => 'https://rmcsport.bfmtv.com/rss/tennis/',
    'Formule1' => 'https://rmcsport.bfmtv.com/rss/auto-moto/f1/',
]);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $choiceUser = filter_input(INPUT_POST, 'choice', FILTER_SANITIZE_URL, FILTER_REQUIRE_ARRAY);

    $error = false;
    foreach ($choiceUser as $key => $value) {
        if (in_array($value, CHOICES) == false) {
            $error = true;
        }
    }

    // Envoie des cookies dans le serveur 
    setcookie('cookieChoices', json_encode($choiceUser), (time() + 86400));
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <title>projetRSS</title>
</head>

<body>
    <!------------------------- header------------------------------ -->
    <!-------------------------LOGO------------------------------ -->
    <img class="logo" src="public/assets/img/LOGO projetRSS.png" alt="Logo">
    <!------------------------- Navbar------------------------------ -->

    <div class="containernav">

        <nav class="navbar">
            <ul>
                <li><a href="">Foot</a></li>
                <li><a href="">Rugby</a></li>
                <li><a href="">Basket</a></li>
                <li><a href="">Tennis</a></li>
                <li><a href="">Formule 1</a></li>
            </ul>
        </nav>
    </div>
    <!------------------------- Fin de Navbar------------------------------ -->
    <!-------------------------Formulaire------------------------------ -->

    <form method="POST">
        <h1>Vos préferences:</h1>
        <!-- <div class="containerform"> -->
        <div class="containerform">
            <div class="formulaire">
                <?php foreach (CHOICES as $key => $value) { ?> <!-- Affichage des checkboxs -->
                    <input type="checkbox" id="sport" name="choice[]" value="<?= $value ?>">
                    <label for="sport"><?= $key  ?></label>
                    <?= $error['sport'] ?? '' ?> <!-- Affichage du message d'erreur si condition non respecté -->
                <?php } ?>

                <div class="dark">
                    <legend>Dark mode:</legend>


                    <input type="radio" id="dark" name="dark" value="dark">
                    <label for="dark">Oui</label>


                    <input type="radio" id="dark" name="dark" value="dark">
                    <label for="dark">Non</label>

                    <input type="submit" value="Envoyer">
                </div>
            </div>
        </div>
    </form>

    <!------------------------- Fin de formulaire------------------------------ -->
    <!------------------------- Footer------------------------------ -->
    <div class="footer">

        <img class="logofooter" src="public/assets/img/LOGO projetRSS.png" alt="">
        <h2>C'EST LA PASSION QUI PARLE</h2>
    </div>