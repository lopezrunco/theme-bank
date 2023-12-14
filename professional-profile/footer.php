<section class="footer">
    <div class="row">
        <div class="col-12">
            <div class="contact-info">
                <ul>
                    <?php
                    include 'config.php';
                    if (isset($social_links) && !empty($social_links)) {
                        foreach ($social_links as $link) {
                            echo '<li>';
                            echo '<a href="' . $link['url'] . '" target="_blank"><i class="' . $link['icon'] . '"></i>' . $link['text'] . '</a>';
                            echo '</li>';
                        }
                    } else {
                        echo 'No social links available.';
                    }
                    ?>
                    <li class="text-right">© 2021 All Rights Reserved.</li>
                </ul>
            </div>
        </div>
    </div>
</section>