<?php
    //EXECUTE PREPARE REQ
    $dish = $db->prepareReq(
        "SELECT * FROM dishes WHERE dishes.id = ?",
        [$_GET['id']],
        "Dishes",
        true
    );
?>
<section id="section-dish">
    <div class="container container-dish">
        <img src="images/<?= $dish->image ?>" alt="Picture of the <?= $dish->dish ?> meal">
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