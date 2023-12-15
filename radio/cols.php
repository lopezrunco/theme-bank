<section class="columns">
    <div class="title">
        <h4>Columnas</h4>
    </div>
    <div class="row">
        <?php
        include 'config.php';
        foreach ($columns as $item) {
            echo '<div class="col-sm-4">';
            echo '<div class="box">';
            echo '<a href="" class="new-img">';
            echo '<!-- Img in CSS -->';
            echo '</a>';
            echo '<a href="' . $item['link'] . '">';
            echo '<h2>' . $item['title'] . '</h2>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>
</section>