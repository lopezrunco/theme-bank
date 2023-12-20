<div class="categories">
    <h5>Categories</h5>
    <ul>
        <?php
        include 'config.php';
        foreach ($blogCategories as $item) {
            echo '<li><a href="">' . $item . '</a></li>';
        }
        ?>
    </ul>
</div>