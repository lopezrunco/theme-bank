<section class="brands">
    <article class="content-wrap">
        <div class="row">
            <?php
            include 'config.php';
            if (isset($brands) && !empty($brands)) {
                $colClass = 'col-xs-2';
                foreach ($brands as $index => $logo) {
                    // Bootstrap 5 columns: Add offset for columns after the first one
                    $colClass .= ($index > 0) ? ' col-half-offset' : '';
                    echo '<div class="' . $colClass . '" id="p' . ($index + 1) . '">';
                    echo '<a href="#"><img src="' . $logo . '" alt=""></a>';
                    echo '</div>';
                }
            } else {
                echo 'No brands available.';
            }
            ?>
        </div>
    </article>
</section>