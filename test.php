<?php
include __DIR__ . '/herlpers/dd.php';


$url = 'https://rmcsport.bfmtv.com/rss/football/';
$xml = simplexml_load_file($url);
// var_dump($xml->channel->item[0]->title);
d($xml->channel->item[0]);
$items = $xml->channel->item;
// echo $xml->channel->title;  //titre
// echo $xml->channel->lastBuildDate; //date 
?>
<!-- <?php
foreach ($items as $key => $item) { ?>
    <div class="cardContainer">
        <h1><?= $item->title ?></h1>
    </div>
<?php } ?>