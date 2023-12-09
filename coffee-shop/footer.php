<footer id="contact">
    <div class="content-wrap">
        <h2>Hablemos!</h2>
        <ul class="contact-info">
            <?php
            include("config.php");
            foreach ($contactInfo as $info) {
                echo '<li><a href="' . $info['link'] . '"><i class="' . $info['icon'] . '"></i> ' . $info['text'] . '</a>';
            }
            ?>
        </ul>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6543.654180317079!2d-56.16034282258753!3d-34.9107885019253!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2suy!4v1542634346891" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="social-links">
        <ul>
            <?php
            include("config.php");
            foreach ($socialLinks as $link => $icon) {
                echo '<li><a href="' . $link . '" target="_blank"><i class="' . $icon . '"></i></a></li>';
            }
            ?>
        </ul>
    </div>
</footer>