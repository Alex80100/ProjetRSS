<h1>categorie du flux</h1>

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