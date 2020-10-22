<?php ob_start(); ?>
    <section>
        <div class="container">
            <h1>MENU</h1>
            <div class="row">
            <?php
                //REQUEST FOR ALL THE DISHES
                foreach($dishes as $dish) : echo $dish->getCard();
                endforeach ?>
            </div>
            </div>
        </div>
    </section>
<?php
    $content = ob_get_clean();
    require "template.php";
?>