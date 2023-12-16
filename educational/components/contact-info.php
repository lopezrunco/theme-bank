<section class="contact-info">
    <article class="content-wrap">
        <div class="row title">
            <div class="col-12">
                <h2>Contact info</h2>
            </div>
        </div>
        <div class="row">
            <?php
            include 'config.php';
            foreach ($contacts as $info) {
                echo '<div class="col-md-4">';
                echo '<i class="' . $info['icon'] . '"></i>';
                echo '<h3>' . $info['title'] . '</h3>';
                echo '<p>' . $info['description'] . '</p>';
                echo '<div class="row info-list">';
                foreach ($info['infoItems'] as $item) {
                    echo '<div class="col-lg-2">';
                    echo '<i class="' . $item['icon'] . '"></i>';
                    echo '</div>';
                    echo '<div class="col-lg-10">';
                    echo '<span>' . $item['info'] . '</span>';
                    echo '<p>' . $item['text'] . '</p>';
                    echo '</div>';
                }
                echo '</div>';
                echo '</div>';
            }
            ?>
    </article>
</section>