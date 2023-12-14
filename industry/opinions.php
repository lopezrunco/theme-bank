<section class="opinions">
    <article class="content-wrap">
        <div class="row">
            <div class="col-12">
                <h2>What do you think?</h2>
            </div>
            <?php
            include 'config.php';
            if (isset($testimonials) && !empty($testimonials)) {
                foreach ($testimonials as $testimonial) {
                    echo '<div class="col-lg-4 col-xs-12">';
                    echo '<div class="stars">';
                    for ($i = 0; $i < $testimonial['stars']; $i++) {
                        echo '<i class="fa fa-star"></i>';
                    }
                    echo '</div>';
                    echo '<p>' . $testimonial['text'] . '</p>';
                    echo '<div class="author">';
                    echo '<img src="' . $testimonial['author_image'] . '" />';
                    echo '<h5 class="name">' . $testimonial['author_name'] . '</h5>';
                    echo '<p class="job">' . $testimonial['author_job'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo 'No testimonials available.';
            }
            ?>
        </div>
    </article>
</section>