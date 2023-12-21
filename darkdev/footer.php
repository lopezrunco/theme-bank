<article class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="social-icons">
                    <?php
                    include 'config.php';
                    foreach ($contactInfo as $link) {
                        echo '<div class="item">';
                        echo '<a href="' . $link['link'] . '" target="_blank" rel="external nofollow" title="' . $link['title'] . '"><i class="' . $link['iconClass'] . '"></i></a>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="footer-menu">
                    <small><a>Made with mate</a></small>
                </div>
            </div>
        </div>
    </div>
</article>