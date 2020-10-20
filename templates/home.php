<header>
    <img src="images/mario_logo_shaded.png" alt="Restaurant's logo">
</header>
<section>
    <div class="container">
        <h1>WEEK'S SPECIALS</h1>
        <div class="row">
        <?php
            //REQUEST FOR THE LAST 3 DISHES
            foreach($db->queryReq(
                "SELECT  dishes.id, dishes.dish, dishes.image FROM dishes ORDER BY dishes.id DESC LIMIT 0,3",
                "Cards"
            ) as $dish) : echo $dish->getCard();
            endforeach ?>
        </div>
        <div class="row">
            <a href="index.php?location=order" class="button button-home">ORDER A MEAL</a>
            <a href="index.php?location=menu" class="link">REST OF THE MENU</a>
        </div>
    </div>
</section>