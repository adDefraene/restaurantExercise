<section>
    <div class="container">
        <h1>MENU</h1>
        <div class="row">
        <?php
            //REQUEST FOR THE LAST 3 DISHES
            foreach($db->queryReq(
                "SELECT  dishes.id, dishes.dish, dishes.image FROM dishes ORDER BY dishes.id ASC",
                "Cards"
            ) as $dish) : echo $dish->getCard();
            endforeach ?>
        </div>
        </div>
    </div>
</section>