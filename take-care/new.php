<section id="new-products" class="new-products">
    <article class="content-wrap">
        <div class="title">
            <h3>Últimos <span class="primary">productos</span></h3>
            <p>Estas son algunas novedades de productos que distribuimos.</p>
        </div>
        <div class="grid">
            <?php
            include 'config.php';
            foreach ($newItems as $item) {
                echo '<div class="box">';
                echo '<div class="opacity-fx">';
                echo '<h4>' . $item['title'] . '</h4>';
                echo '<div class="separator"></div>';
                echo '<p>' . $item['description'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </article>
</section>