<section class="agro">
    <div class="title">
        <h5>Agronegocios</h5>
    </div>
    <article class="row main-content">
        <!-- Main column -->
        <?php
        include 'config.php';
        foreach ($agroMain as $item) {
            echo '<div class="col-md-6">';
            echo '<div class="box">';
            echo '<a href="" class="main-new-img">';
            echo '<!-- Img in css -->';
            echo '</a>';
            echo '<span class="category">' . $item['category'] . '</span>';
            echo '<h2>' . $item['title'] . '</h2>';
            echo '</div>';
            echo '</div>';
        }
        ?>
        <!-- Aside column -->
        <div class="col-md-6">
            <div class="box">
                <div class="row sec-content">
                    <?php
                    include 'config.php';
                    foreach ($agroSecondary as $item) {
                        echo '<div class="col-sm-6">';
                        echo '<div class="box">';
                        echo '<a href="" class="new-img">';
                        echo '<!-- Img in CSS -->';
                        echo '</a>';
                        echo '<span class="category">' . $item['category'] . '</span>';
                        echo '<h2>' . $item['text'] . '</h2>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </article>
</section>