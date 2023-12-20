<section id="about" class="about">
    <article class="content-wrap">
        <div class="grid">
            <div class="col-icons">
                <?php
                include 'config.php';
                foreach ($aboutItems as $item) {
                    echo '<div class="box">';
                    echo '<div class="out-circle">';
                    echo '<div class="inner-circle">';
                    echo '<i class="' . $item['iconClass'] . '"></i>';
                    echo '</div>';
                    echo '</div>';
                    echo '<h5>' . $item['title'] . '</h5>';
                    echo '<p>' . $item['description'] . '</p>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="col-content">
                <span class="hadwrite">Poco ruido y muchas nueces !</span>
                <h3>Somos un proyecto que nace para generar puestos de trabajo</h3>
                <?php
                include 'config.php';
                foreach ($aboutContent as $paragraph) {
                    echo '<p>' . $paragraph . '</p>';
                    echo '<br>';
                }
                ?>
            </div>
        </div>
    </article>
</section>