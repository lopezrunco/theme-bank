<section class="our-work" id="our-work">
    <article class="container text-center">
        <div class="row">
            <div class="col-12">
                <h3>Our work</h3>
                <p>Lorem ipsum dolor sit adipiscing elit. Quisque sed viverra tellus. Pellentesque vel.
                </p>
            </div>
        </div>
        <div class="row porf-menu d-none d-md-flex">
            <div class="col-12 menu-wrapper">
                <h5>Portfolio</h5>
                <ul>
                    <?php
                    include 'config.php';
                    if (isset($work_tags) && !empty($work_tags)) {
                        foreach ($work_tags as $tag) {
                            echo '<li><a href="#" class="' . $tag['class'] . '">' . $tag['text'] . '</a></li>';
                        }
                    } else {
                        echo 'No list items available.';
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="row porf-thumb">
            <?php
            include 'config.php';
            if (isset($work_items) && !empty($work_items)) {
                foreach ($work_items as $item) {
                    echo '<div class="col-12 col-lg-3 mb-5">';
                    echo '<div class="item">';
                    echo '<a href="#">';
                    echo '<img src="' . $item['image'] . '" />';
                    echo '<p class="img-txt">' . $item['description'] . '</p>';
                    echo '</a></div></div>';
                }
            } else {
                echo 'No portfolio items available.';
            }
            ?>
        </div>
    </article>
</section>