<section class="contacts" id="contacts">
    <article class="container text-center">
        <div class="row">
            <div class="col-12 mb-5">
                <h3>Contact us</h3>
                <p>Lorem ipsum dolor sit adipiscoi fermentum, vitae tinciduntest molestie.
                </p>
            </div>
        </div>
        <div class="row contact-info">
            <?php
            include 'config.php';
            if (isset($contact_info) && !empty($contact_info)) {
                foreach ($contact_info as $contact) {
                    echo '<div class="col-12 col-lg-3 mb-5">';
                    echo '<div class="item">';
                    echo '<ul class="info-list">';
                    echo '<i class="' . $contact['icon'] . '" aria-hidden="true"></i>';
                    foreach ($contact['info'] as $detail) {
                        echo '<li>' . $detail . '</li>';
                    }
                    echo '</ul></div></div>';
                }
            } else {
                echo 'No contact information available.';
            }
            ?>
            <div class="col-12 col-lg-3 mb-5 social-items">
                <?php
                include 'config.php';
                if (isset($social_links) && !empty($social_links)) {
                    foreach ($social_links as $link) {
                        echo '<div class="item">';
                        echo '<a href="' . $link['link'] . '">';
                        echo '<i class="' . $link['icon'] . '" aria-hidden="true"></i>';
                        echo '</a></div>';
                    }
                } else {
                    echo 'No social media links available.';
                }
                ?>
            </div>
        </div>
    </article>
</section>