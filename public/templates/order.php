<?php ob_start(); ?>
    <section id="section-order">
        <div class="container container-order">
            <h1>ORDER</h1>
            <form action="index.php?location=orderTreatment" method="POST">
                <h4>CHOOSE YOUR MEAL</h4>
                <div class="row">
                    <select name="meal">
                        <?php
                            isset($_GET['id']) ? $getId=$_GET['id'] : $getId=1;
                            foreach($options as $option) : echo $option->orderOptions($getId);
                            endforeach;
                        ?>
                    </select>
                </div>
                <h4>WRITE YOUR DETAILS</h4>
                <div class="row">
                    <input required type="text" name="name" placeholder="YOUR NAME">
                    <input required type="text" name="phone" placeholder="YOUR PHONE">
                </div>
                <h4>CHOOSE YOUR SCHEDULE</h4>
                <div class="row">
                    <input required type="date" name="date">
                    <input required type="time" min="11:00" max="21:30" step="300" name="hour" value="19:00">
                </div>
                <input class="button" type="submit" value="ORDER">
            </form>
        </div>
    </section>
<?php
    $content = ob_get_clean();
    require "template.php";
?>