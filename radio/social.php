<section class="social">
    <article class="row">
        <?php
        include 'config.php';
        foreach ($socialLinks as $item) {
            echo '<div class="col-sm-4">';
            echo '<img src="' . $item . '" alt="" />';
            echo '</div>';
        }
        ?>
    </article>
</section>