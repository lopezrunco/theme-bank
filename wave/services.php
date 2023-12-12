<section class="services" id="services">
    <article class="content-wrap">
        <div class="row">
            <h3>Our services</h3>
            <p class="sub-txt">
                Pellentesque vel ntentesque <a href="#">lorem ipsum</a> ois sem ornaunc sit amet sapien
                orci.
            </p>
            <p>Lorem ipsum dolor ois sem ornaunc sit adipiscing elit. Quisque sed viverra tellus.
                Pellentesque vel
                nt,entesque oisois sem ornaunc ois sem ornaunc sem ornaunc sit amet sapien orci.
                Sed ac diam ut estois sem ornaunc tempus tincidunt. Quisqlls entesque entesi fermentum,
                vitae tincidunt
                est molestie.
            </p>
        </div>
        <div class="row-services">
            <?php
            include 'config.php';
            if (isset($services) && !empty($services)) {
                foreach ($services as $service) {
                    echo '<div class="col">';
                    echo '<i class="' . $service['icon'] . '"></i>';
                    echo '<h4>' . $service['title'] . '</h4>';
                    echo '<p>' . $service['description'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo 'No services available.';
            }
            ?>
        </div>
    </article>
</section>