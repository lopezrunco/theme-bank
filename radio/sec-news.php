<section class="sec-news">
    <article class="row">
        <?php
        include 'config.php';
        foreach ($secondaryNews as $news) {
            echo '<div class="col-md-3 col-sm-6">';
            echo '<div class="box">';
            echo '<div class="new-box">';
            echo '<a href="' . $news['link'] . '" class="new-img"><!-- Img in css --></a>';
            echo '<div class="new-desc">';
            echo '<span class="category">' . $news['category'] . '</span>';
            echo '<h3><a href="' . $news['link'] . '">' . $news['title'] . '</a></h3>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </article>
</section>