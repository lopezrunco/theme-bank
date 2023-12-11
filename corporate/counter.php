<section class="counter">
    <article class="overlay-counter">
        <div class="container">
            <div class="row counter-list">
                <?php
                include 'config.php';
                if (isset($counter_items) && !empty($counter_items)) {
                    foreach ($counter_items as $item) {
                        echo '<div class="col-3">';
                        echo '<span class="number">' . $item['number'] . '</span>';
                        echo '<span class="desc">' . $item['description'] . '</span>';
                        echo '</div>';
                    }
                } else {
                    echo 'No counter data available.';
                }

                ?>
            </div>
        </div>
    </article>
</section>