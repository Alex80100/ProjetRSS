<?php 

include __DIR__ . '/../helpers/dd.php';
$url = 'https://rmcsport.bfmtv.com/rss/football/';
$xml = simplexml_load_file($url);
$items = $xml->channel->item;
$link = $items->link;
$description = $items->description;

include __DIR__ .'/../views/templates/header.php';
include __DIR__.'/../views/pages.php';
include __DIR__ .'/../views/templates/footer.php';

?>