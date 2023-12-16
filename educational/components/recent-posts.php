<div class="recent-posts">
    <div class="row title">
        <div class="col-12">
            <h2>Latest news</h2>
        </div>
    </div>
    <?php
    include 'config.php';
    foreach ($blogItems as $item) {
        echo '<a href="' . $item['href'] . '" class="row item">
            <div class="col-4">
                <div class="img-wrap">
                    <!-- Img in css -->
                </div>
            </div>
            <div class="col-8">
                <h3>' . $item['title'] . '</h3>
                <span>' . $item['date'] . '</span>
            </div>
        </a>';
    }
    ?>
</div>