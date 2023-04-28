<div class=" containerCarts ">
    <!-- Generation des cartes avec boucles foreach -->
    <?php foreach ($items as $key => $item) { ?>
        <div class="carts cartsActu  ">
            <div class="title h3 ">
                <h3><?= $item->title ?></h3>
            </div>
            <div class="date ">
                <p><?= $item->pubDate ?></p>
            </div>
            <div class="image">
                <img src="<?= $item->enclosure['url'] ?>" alt="">
            </div>
            <div class=" descriptionActu ">
                <p><?= strip_tags($item->description)  ?></p>
            </div>
            <div class="button ">
                <a href="<?php echo $item->link; ?>" target="_blank">en savoir plus</a>
            </div>
        </div>
    <?php } ?>
</div>