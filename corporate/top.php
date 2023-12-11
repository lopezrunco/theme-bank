<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-10">
                <ul class="top-navigation">
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <div class="col-2">
                <ul class="top-social">
                    <?php
                    include 'config.php';
                    if (isset($social_links) && !empty($social_links)) {
                        echo '<ul class="top-social">';
                        foreach ($social_links as $media) {
                            echo '<li><a href="' . $media['url'] . '"><i class="' . $media['icon'] . '"></i></a></li>';
                        }
                        echo '</ul>';
                    } else {
                        echo 'No social media links available.';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>