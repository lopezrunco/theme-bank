<section class="recent-posts" id="blog">
    <article class="container">
        <div class="row section-title">
            <div class="col">
                <h4>Recent posts</h4>
                <hr />
                <p>leap into electronic typesetting, remaining essentially unchanged</p>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="row items-left">
                    <?php
                    include 'config.php';
                    if (isset($blog_items_left) && !empty($blog_items_left)) {
                        foreach ($blog_items_left as $item) {
                            echo '<div class="col-6">';
                            echo '<a href="#"><img src="' . $item['image'] . '" alt="item image" /></a>';
                            echo '<span class="date">' . $item['date'] . '</span>';
                            echo '<h6>' . $item['title'] . '</h6>';
                            echo '<p>' . $item['description'] . '</p>';
                            echo '<span class="read-more"><a href="' . $item['link'] . '">' . "Read more" . '</a></span>';
                            echo '</div>';
                        }
                    } else {
                        echo 'No left-aligned items available.';
                    }
                    ?>
                </div>
            </div>
            <div class="col-4">
                <div class="row items-right">
                    <?php
                    include 'config.php';
                    if (isset($blog_items_right) && !empty($blog_items_right)) {
                        foreach ($blog_items_right as $item) {
                            echo '<div class="col-12">';
                            echo '<a href="#"><img src="' . $item['image'] . '" alt="blog image"></a>';
                            echo '<a href="#"><h6>' . $item['title'] . '</h6></a>';
                            echo '<span class="date">' . $item['date'] . '</span>';
                            echo '</div>';
                        }
                    } else {
                        echo 'No right-aligned items available.';
                    }
                    ?>
                </div>
            </div>
        </div>
    </article>
</section>