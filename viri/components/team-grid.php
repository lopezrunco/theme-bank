<div class="team-grid">
    <?php
    include 'config.php';
    foreach ($teamMembers as $item) {
        echo '<div class="wrapper">';
        echo '<div class="box">';
        echo '<a class="opacity-fx mobile-view">';
        echo '<h4>' . $item['name'] . '</h4>';
        echo '<span class="position">' . $item['position'] . '</span>';
        echo '</a>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>