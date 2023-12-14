<section class="portfolio text-center">
    <div class="title">
        <h2>Work</h2>
    </div>
    <div class="row">
        <?php
        include 'config.php';
        if (isset($portfolio_items) && !empty($portfolio_items)) {
            foreach ($portfolio_items as $item) {
                echo '<div class="col-md-4">';
                echo '<a href="#" class="' . $item['class'] . '">';
                echo '<div class="demo-desc">';
                echo '<h4>' . $item['title'] . '</h4>';
                echo '<p>' . $item['description'] . '</p>';
                echo '<p class="link">View demo <i class="fas fa-chevron-circle-right"></i></p>';
                echo '</div>';
                echo '</a>';
                echo '</div>';
            }
        } else {
            echo 'No portfolio items available.';
        }
        ?>

    </div>
</section>