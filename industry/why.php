<section class="why" id="why">
    <article class="overlay">
        <div class="content-wrap">
            <div class="row">
                <div class="col">
                    <h2>Benefits of Industry <span>Co</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed <br>
                        do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="row">
                <?php
                include 'config.php';
                if (isset($benefits_items) && !empty($benefits_items)) {
                    foreach ($benefits_items as $item) {
                        echo '<div class="col-lg-4 col-xs-12">';
                        echo '<img src="' . $item['image'] . '" alt="">';
                        echo '<h5>' . $item['title'] . '</h5>';
                        echo '</div>';
                    }
                } else {
                    echo 'No benefits items available.';
                }
                ?>
            </div>
        </div>
    </article>
</section>