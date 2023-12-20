<footer>
    <div class="bottom">
        <div class="content-wrap">
            <div class="grid">
                <div class="box footer-logo">
                    <a href="index.php"><img src="img/logo.svg" alt=""></a>
                </div>
                <div class="box social">
                    <?php
                    include 'config.php';
                    foreach ($socialMediaLinks as $link) {
                        echo '<a href="' . $link['href'] . '"><i class="' . $link['iconClass'] . '"></i></a>';
                    }
                    ?>
                </div>
                <div class="box sign-form">
                    <h4>Sign up to our newsletter</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, cum?</p>
                    <form action="">
                        <input type="email" name="email" id="email" placeholder="Enter your email adress here...">
                        <button type="submit"><i class="fas fa-long-arrow-alt-right"></i></button>
                    </form>
                </div>
                <div class="box contact-info">
                    <h4>Contact us</h4>
                    <p>(+598) 099 000 000</p>
                    <p><a href="">info@email.com.uy</a></p>
                    <p>4344 Ellauri y B. Espana, Montevideo, Uruguay</p>
                    <a href="" class="link">Get directions</a>
                </div>
                <?php
                include 'config.php';
                foreach ($externalLinks as $externalLinksGroup) {
                    echo '<div class="box links">';
                    foreach ($externalLinksGroup['links'] as $link) {
                        echo '<a href="item-detail.php">' . $link . '</a>';
                    }
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="content-wrap">
            <div class="flex">
                <small>© 2020 Viri theme</small>
                <small>Damián López</small>
            </div>
        </div>
    </div>
</footer>

</div>
<script src="js/menu.js"></script>
</body>

</html>