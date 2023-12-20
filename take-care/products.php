<section id="products" class="products">
    <article class="content-wrap">
        <div class="title">
            <h3>¿Qué<span class="primary"> vendemos</span>?</h3>
            <p>Estos son algunos de los productos que vendemos. Si el que te gusta no está en la lista, ¡consultanos!, la conseguiremos para tí.</p>
        </div>
        <div class="grid">
            <?php
            include 'config.php';
            foreach ($products as $item) {
                echo '<div class="item">';
                echo '<h4>' . $item . '</h4>';
                echo '</div>';
            }
            ?>
        </div>
    </article>
</section>