<section class="contacts" id="contacts">
    <article class="content-wrap">
        <div class="row">
            <h3>Contact us</h3>
            <p>Lorem ipsum dolor sit adipiscoi fermentum, vitae tinciduntest molestie.
            </p>
        </div>
        <div class="row form">
            <?php
            include 'config.php';
            if (isset($contact_info) && !empty($contact_info)) {
                foreach ($contact_info as $contact) {
                    echo '<div class="col">';
                    echo '<ul class="info-list">';
                    echo '<i class="' . $contact['icon'] . '" aria-hidden="true"></i>';
                    foreach ($contact['info'] as $detail) {
                        echo '<li>' . $detail . '</li>';
                    }
                    echo '</ul></div>';
                }
            } else {
                echo 'No contact information available.';
            }
            ?>
            <div class="col">
                <ul>
                    <?php
                    include 'config.php';
                    if (isset($social_links) && !empty($social_links)) {
                        foreach ($social_links as $link) {
                            echo '<li><a href="' . $link['link'] . '">';
                            echo '<i class="' . $link['icon'] . '" aria-hidden="true"></i>';
                            echo '</a></li>';
                        }
                    } else {
                        echo 'No social media links available.';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </article>
</section>