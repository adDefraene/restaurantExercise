<?php ob_start() ?>
    <section id="section-dish">
        <div class="container container-dish">
            <img src="<?= $dish->getImageUrl(); ?>" alt="Picture of the <?= $dish->dish ?> meal">
            <article>
                <h2><?= strtoupper($dish->dish) ?></h2>
                <p><?= $dish->description ?></p>
                <div class="row">
                    <h4>$<?= $dish->price ?></h4>
                    <a href="<?= $dish->getOrderUrl() ?>" class="button button-dish">ORDER THIS</a>
                </div>
            </article>
        </div>
    </section>
<?php
    $content = ob_get_clean();
    require "template.php";
?>