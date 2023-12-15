<section class="main-news">
    <article class="row">
        <div class="col-sm-8">
            <div class="box">
                <?php
                include 'config.php';
                if (isset($mainNewsItems) && !empty($mainNewsItems)) {
                    foreach ($mainNewsItems as $news) {
                        echo '<div class="news news-item-main">';
                        echo '<a href="" class="new-img"><!-- Img in css --></a>';
                        echo '<span class="category">' . $news['category'] . '</span>';
                        echo '<a href="' . $news['link'] . '"><h2>' . $news['title'] . '</h2></a>';
                        echo '<p class="intro">' . $news['intro'] . '</p>';
                        echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, quidem?</p>';
                        echo '</div>';
                    }
                } else {
                    echo 'No main news items available.';
                }
                ?>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="box">
                <?php
                include 'config.php';
                if (isset($newsItemsAside) && !empty($newsItemsAside)) {
                    foreach ($newsItemsAside as $new) {
                        echo '<div class="news news-item-aside">';
                        echo '<a href="" class="new-img"><!-- Img in css --></a>';
                        echo '<span class="category">' . $new['category'] . '</span>';
                        echo '<a href="' . $new['link'] . '"><h2>' . $new['title'] . '</h2></a>';
                        echo '</div>';
                    }
                } else {
                    echo 'No news items available.';
                }
                ?>
            </div>
        </div>
    </article>
</section>