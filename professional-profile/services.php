<section class="services">
    <div class="row">
        <?php
        include 'config.php';
        if (isset($service_items) && !empty($service_items)) {
            foreach ($service_items as $item) {
                echo '<div class="col-md-4">';
                echo '<div class="service-item">';
                echo '<i class="' . $item['icon'] . '"></i>';
                echo '<h3>' . $item['title'] . '</h3>';
                echo '<p>' . $item['description'] . '</p>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo 'No service items available.';
        }
        ?>
    </div>
</section>