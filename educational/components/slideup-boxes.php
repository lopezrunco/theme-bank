<section class="content-wrap main-box-container">
    <?php
    include 'config.php';
    foreach ($slideupBoxes as $box) {
        echo '<div class="box-group">';
        echo '<div class="slide-up-boxes">';
        echo '<a href="#" onclick="return false;">';
        echo '<h5><i class="' . $box['iconClass'] . '"></i>' . $box['title'] . '</h5>';
        echo '<div>';
        echo '<p>' . $box['text'] . '</p>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</section>