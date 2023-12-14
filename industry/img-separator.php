<section class="separator-imgs d-none d-lg-block">
    <article class="content-wrap-wide">
        <div class="row">
            <?php
            include 'config.php';
            if (isset($separator_images) && !empty($separator_images)) {
                foreach ($separator_images as $item) {
                    echo '<div class="' . $item['size'] . '">';
                    echo '<img src="' . $item['image'] . '" alt="">';
                    echo '</div>';
                }
            } else {
                echo 'No images available.';
            }
            ?>
        </div>
    </article>
</section>