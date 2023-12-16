<section class="benefits">
    <div class="icon">
        <i class="fas fa-graduation-cap"></i>
    </div>
    <article class="content-wrap">
        <div class="row">
            <?php
            include 'config.php';
            foreach ($benefits as $benefit) {
                echo '<div class="col-md-4">';
                echo '<div class="row benefit-item">';
                echo '<div class="col-xl-2">';
                echo '<i class="' . $benefit['iconClass'] . '"></i>';
                echo '</div>';
                echo '<div class="col-xl-10">';
                echo '<h3>' . $benefit['title'] . '</h3>';
                echo '<p>' . $benefit['description'] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </article>
</section>