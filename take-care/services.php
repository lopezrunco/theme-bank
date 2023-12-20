<section id="services" class="services">
    <article class="content-wrap">
        <div class="title">
            <h3>¿Qué <span class="primary">hacemos</span>?</h3>
            <p>Take Care es una distribuidora de Alimentos en el departamento de Florida.</p>
        </div>
        <div class="grid">
            <?php
            include 'config.php';
            foreach ($serviceItems as $item) {
                echo '<div class="item">';
                echo '<div class="img"></div>';
                echo '<div class="content">';
                echo '<h5>' . $item['title'] . '</h5>';
                echo '<div class="separator"></div>';
                echo '<p>' . $item['description'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </article>
</section>