<div class="share">
    <h5>Share on:</h5>
    <?php
    include 'config.php';
    foreach ($mediaShareOptions as $link) {
        echo '<a href="' . $link['href'] . '"><i class="' . $link['iconClass'] . '"></i></a>';
    }
    ?>
</div>