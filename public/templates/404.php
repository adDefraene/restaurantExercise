<?php header("HTTP/1.0 404 Not Found"); ?>

<?php ob_start() ?>
<section>
    <div class="container">
        <h1>404 - PAGE NOT FOUND</h1>
        <hr>
        <p><?= $errorMessage ?></p>
    </div>
</section>
<?php
    $content = ob_get_clean();
    require "template.php";
?>