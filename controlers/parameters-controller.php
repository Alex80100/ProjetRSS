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

include __DIR__ .'/../views/parameters.php'
?>
