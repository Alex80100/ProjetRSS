<?php 

include __DIR__ . '/../helpers/dd.php';

if ($_GET['url'] == 1 ) {
    $url = 'https://rmcsport.bfmtv.com/rss/football/';
} elseif ($_GET['url'] == 2 ) {
    $url = 'https://rmcsport.bfmtv.com/rss/rugby/';
} elseif ($_GET['url'] == 3 ) {
    $url = 'https://rmcsport.bfmtv.com/rss/basket/';
} elseif ($_GET['url'] == 4 ) {
    $url = 'https://rmcsport.bfmtv.com/rss/tennis/';
}  elseif ($_GET['url'] == 5 ) {
    $url = 'https://rmcsport.bfmtv.com/rss/auto-moto/f1/';
}


$xml = simplexml_load_file($url);
$items = $xml->channel->item;
$link = $items->link;
$description = $items->description;
// d($items);
// d($link);

include __DIR__ .'/../views/templates/header.php';
include __DIR__.'/../views/pages.php';
include __DIR__ .'/../views/templates/footer.php';

?>