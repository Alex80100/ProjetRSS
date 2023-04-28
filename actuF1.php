<?php
include __DIR__ . '/herlpers/dd.php';
$url = 'https://rmcsport.bfmtv.com/rss/auto-moto/f1/';
$xml = simplexml_load_file($url);
$items = $xml->channel->item;
$link = $items->link;
$description = $items->description;
d($items);
d($link);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projet RSS</title>
</head>

<body>
    <div class="container">
        <!-- Generation des cartes avec boucles foreach -->
        <?php foreach ($items as $key => $item) { ?>
            <div class="carts">
                <div class="title">
                    <h3><?= $item->title ?></h3>
                </div>
                <div class="date">
                    <p><?= $item->pubDate ?></p>
                </div>
                <div class="image">
                    <img src="<?= $item->enclosure['url']?>" alt="">
                </div>
                <div class="description">
                    <p><?= strip_tags($item->description)  ?></p>
                </div>
                <div class="btn">
                <a href="<?php echo $item->link; ?>" target="_blank"><button>En savoir plus</button></a>
                </div>
            </div>
        <?php } ?>
    </div>

</body>

</html>