<section class="our-work" id="our-work">
    <article class="content-wrap">
        <div class="row">
            <h3>Our work</h3>
            <p>Lorem ipsum dolor sit adipiscing elit. Quisque sed viverra tellus. Pellentesque vel
                nt,entesque dolor ois sem ornaunsque sed viverra tellus. Pellentesque vel
                nt,entesque oisois sem ornau sem ornaunc stoiois sem ornaunc sit amet sapien orci.
                Sed ac diam ut est tempus tincidunt. Quisqlls entesque entesi fermentum, vitae tincidunt
                est molestie.
            </p>
        </div>
        <div class="row porf-menu">
            <h5 class="fleft">Portfolio</h5>
            <ul class="fright">
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
        <div class="row porf-thumb">
            <?php
            include 'config.php';
            if (isset($work_items) && !empty($work_items)) {
                foreach ($work_items as $item) {
                    echo '<div class="item">';
                    echo '<a href="#">';
                    echo '<img src="' . $item['image'] . '" />';
                    echo '<p class="img-txt">' . $item['description'] . '</p>';
                    echo '</a></div>';
                }
            } else {
                echo 'No portfolio items available.';
            }
            ?>
        </div>
    </article>
</section>