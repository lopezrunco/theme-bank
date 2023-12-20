<div class="tags">
    <h5>Tags</h5>
    <?php
    include 'config.php';
    foreach ($blogTags as $tag) {
        echo '<a href="">' . $tag . '</a>';
    }
    ?>
</div>