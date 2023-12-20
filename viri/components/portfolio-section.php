<section class="portfolio-section">
    <article class="grid">
        <?php
        include 'config.php';
        $itemCount = 10;
        for ($i = 0; $i < $itemCount; $i++) {
            echo '<div class="wrapper">';
            echo '<div class="box">';
            echo '<a href="item-detail.php" class="opacity-fx mobile-view">';
            echo '<span class="category">' . $portfolioItems[$i]['category'] . '</span>';
            echo '<h4>' . $portfolioItems[$i]['title'] . '</h4>';
            echo '<span class="date">' . $portfolioItems[$i]['date'] . '</span>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </article>
</section>