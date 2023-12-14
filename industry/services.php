<section class="services" id="services">
    <article class="content-wrap">
        <div class="row services-box">
            <div class="col-lg-8 col-xs-12">
                <div class="row">
                    <?php
                    include 'config.php';
                    if (isset($service_items) && !empty($service_items)) {
                        foreach ($service_items as $item) {
                            echo '<div class="col-lg-6 col-xs-12 item">';
                            echo '<img src="' . $item['image'] . '" alt="">';
                            echo '<h5>' . $item['title'] . '</h5>';
                            echo '<p>' . $item['description'] . '</p>';
                            echo '</div>';
                        }
                    } else {
                        echo 'No service items available.';
                    }
                    ?>
                </div>
            </div>
            <div class="col-lg-4 col-xs-12 background-overlay">
                <div class="overlay-2">
                    <h4>Services We Offer</h4>
                    <ul class="list-services">
                        <?php
                        include 'config.php';
                        if (isset($services_links) && !empty($services_links)) {
                            foreach ($services_links as $service) {
                                echo '<li><a href="#">' . $service . '</a></li>';
                            }
                        } else {
                            echo 'No services links available.';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="services-footer">
            <span>Our list of services does not end here. We'll come up with more solution for you! </span><a href="#contact">Contact us <i class="fa fa-arrow-right"></i></a>
        </div>
    </article>
</section>