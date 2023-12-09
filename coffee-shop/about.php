<section id="about">
    <article class="content-wrap">
        <div class="row">
            <h2>Somos expertos en café</h2>
            <p>Te presentamos nuestra nueva línea de Cafés Especiales. <br>
                Una edición limitada de Exclusivos sabores:</p>
        </div>
        <div class="row">
            <div class="coffee-types">
                <?php
                include("config.php");
                foreach ($coffeeTypes as $coffee) {
                    echo '<div class="col-3">';
                    echo '<img src="' . $coffee['image'] . '" alt="' . $coffee['name'] . '" />';
                    echo '<h3>' . $coffee['name'] . '</h3>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
        <div class="row more-info">
            <p>También podés disfrutar de nuestros exclusivos capuchinos saborizados. <br>
                ¡Disfrutalos en nuestras sucursales!</p>
        </div>
    </article>
</section>