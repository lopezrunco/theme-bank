<footer id="footer">
    <div class="content-wrap">
        <div class="row">
            <div class="col-lg-6 col-xs-12 copyright">
                <p>© 2018 Industry. All Rights Reserved</p>
            </div>
            <div class="col-lg-6 col-xs-12 social">
                <ul>
                    <?php
                    include 'config.php';
                    if (isset($social_links) && !empty($social_links)) {
                        foreach ($social_links as $social_link) {
                            echo '<li><a href="' . $social_link['link'] . '"><i class="' . $social_link['icon'] . '"></i></a></li>';
                        }
                    } else {
                        echo 'No social media links available.';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>

</footer>