<div class="directions">
    <?php
    include 'config.php';
    foreach ($directions as $direction) {
        echo '<div class="box">';
        echo '<h3>' . $direction['title'] . '</h3>';
        echo '<p class="direction">' . $direction['direction'] . '</p>';
        echo '<p><i class="fas fa-envelope"></i>' . $direction['email'] . '</p>';
        echo '<p><i class="fas fa-mobile"></i>' . $direction['phone'] . '</p>';
        echo '</div>';
    }
    ?>
</div>