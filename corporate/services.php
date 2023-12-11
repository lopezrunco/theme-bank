<section class="services" id="services">
    <article class="container">
        <div class="row">
            <div class="col-8">
                <div class="row service-description">
                    <div class="col-12">
                        <span>Your satisfaction defines us</span>
                        <h4>We take your business further</h4>
                        <hr />
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority
                            have suffered alteration in some form, by injected humour, making this the
                            first true generator on the Internet. It uses a dictionary.
                        </p>
                    </div>
                </div>
                <div class="row service-items">
                    <?php
                    include('config.php');
                    if (isset($service_items) && !empty($service_items)) {
                        foreach ($service_items as $item) {
                            echo '<div class="col-6">';
                            echo '<img src="' . $item['image'] . '" alt="service-item" />';
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
            <div class="col-4 service-imgs">
                <?php
                include('config.php');
                if (isset($service_images) && !empty($service_images)) {
                    foreach ($service_images as $image) {
                        echo '<div class="img-container">';
                        echo '<img src="' . $image . '" alt="service-images" />';
                        echo '</div>';
                    }
                } else {
                    echo 'No service images available.';
                }
                ?>
            </div>
        </div>
    </article>
</section>