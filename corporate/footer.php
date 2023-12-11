<footer>
    <div class="container">
        <div class="row bottom">
            <div class="col-sm-4 bottom-1">
                <a href="#"><img src="images/logo-2.png" alt="logo bottom" /></a>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                    suffered alteration in some form.</p>
                <a href="#" class="button button-green">Learn more</a>
            </div>
            <div class="col-sm-3 bottom-2">
                <h2>Popular sites</h2>
                <ul>
                    <?php
                    include 'config.php';
                    if (isset($external_links) && !empty($external_links)) {
                        foreach ($external_links as $link) {
                            echo '<li><a href="' . $link['link'] . '">';
                            echo '<i class="' . $link['icon'] . '"></i>' . $link['text'];
                            echo '</a></li>';
                        }
                    } else {
                        echo 'No external links items available.';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-sm-5 bottom-4">
                <h2>Newsletter</h2>
                <p>Suscribe to our newsletter and get the lastest scoop right to your inbox!</p>
                <form action="#" method="post" name="sign-up">
                    <input type="email" name="email" id="email" class="email" placeholder="Your email adress" required />
                    <input type="submit" id="submit" value="SIGN UP" class="submit" />
                </form>
                <em>Your email is safe with us, we don't spam.</em>
            </div>
        </div>
        <div class="row social-footer">
            <div class="col-6">
                <small class="copyright"> © 2021 Corporation web</small>
            </div>
            <div class="col-6">
                <div class="footer-social">

                    <?php
                    include 'config.php';
                    if (isset($social_links) && !empty($social_links)) {
                        foreach ($social_links as $media) {
                            echo '<div class="icon-fa"><a href="' . $media['url'] . '"><i class="' . $media['icon'] . '"></i></a></div>';
                        }
                    } else {
                        echo 'No social media links available.';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</footer>