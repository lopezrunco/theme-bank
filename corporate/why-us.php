<section class="why-trusting-us">
    <article class="container">
        <div class="row section-title">
            <div class="col">
                <h4>Why Trusting Us</h4>
                <hr />
                <p>leap into electronic typesetting, remaining essentially unchanged</p>
            </div>
        </div>
        <div class="row items">
            <?php
            include 'config.php';
            if (isset($why_us_items) && !empty($why_us_items)) {
                foreach ($why_us_items as $item) {
                    echo '<div class="col-4">';
                    echo '<div class="item">';
                    echo '<a href="#"><img src="' . $item['image'] . '" alt="item img" /></a>';
                    echo '<img src="' . $item['icon'] . '" alt="icon" class="icon" />';
                    echo '<h5>' . $item['title'] . '</h5>';
                    echo '<p>' . $item['description'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo 'No why us items available.';
            }
            ?>
        </div>
    </article>
</section>