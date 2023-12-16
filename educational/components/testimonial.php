<section class="testimonial">
    <div class="quote-icons">
        <i class="fas fa-quote-left"></i>
        <i class="fas fa-quote-right"></i>
    </div>
    <article class="content-wrap">
        <div class="testimonial-container">
            <div class="slider-container">
                <?php
                include 'config.php';
                foreach ($testimonials as $testimonial) {
                    echo '<div class="slider-item">';
                    echo '<p>' . $testimonial['quote'] . '</p>';
                    echo '<img src="' . $testimonial['imageSrc'] . '" alt="Testimonial" />';
                    echo '<h3>' . $testimonial['name'] . '</h3>';
                    echo '<p>' . $testimonial['position'] . '</p>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </article>
</section>