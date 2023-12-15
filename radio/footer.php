<footer>
    <div class="content-wrap">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="box">
                    <p>
                        Lorem ipsum dolor sit dolor sa averdel casimiro vesendegue possimus voluptatem, dolore ad
                        lorem ipsum dolor sit amet, consectetur.
                    </p>
                    <div class="social-links">
                        <?php
                        include 'config.php';
                        foreach ($socialMedia as $item) {
                            echo '<a href="' . $item['link'] . '"><i class="' . $item['iconClass'] . '"></i></a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 about-us">
                <div class="box">
                    <h6>Sobre nosotros</h6>
                    <div class="list">
                        <?php
                        include 'config.php';
                        foreach ($additionalLinks as $item) {
                            echo '<a href="' . $item['link'] . '">' . $item['text'] . '</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 contact-info">
                <div class="box">
                    <h6>Contacto</h6>
                    <div class="list">
                        <?php
                        include 'config.php';
                        foreach ($contactInfo as $item) {
                            echo '<a href="' . $item['link'] . '"><i class="' . $item['iconClass'] . '"></i>' . $item['text'] . '</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 app">
                <div class="box">
                    <h6>Download App</h6>
                    <div class="list">
                        <?php
                        include 'config.php';
                        foreach ($appStoreLinks as $item) {
                            echo '<a href="' . $item['link'] . '"><img src="' . $item['imageSrc'] . '" alt="" /></a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row legal-info">
            <?php
            include 'config.php';
            foreach ($legalInfo as $item) {
                echo '<div class="col-md-4 col-sm-12">';
                echo '<div class="box">';
                echo '<p>' . $item['text'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</footer>