<div class="social">
    <?php
    include 'config.php';
    foreach ($socialMediaLinks as $link) {
        echo '<a href="' . $link['href'] . '"><i class="' . $link['iconClass'] . '"></i></a>';
    }
    ?>
</div>