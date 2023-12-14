<section class="bottom">
    <article class="content-wrap">
        <div class="row">
            <div class="col-lg-3 col-xs-12 about">
                <img src="images/logo-3.png" />
                <ul>
                    <?php
                    include 'config.php';
                    if (isset($contactInfo) && !empty($contactInfo)) {
                        echo '<li>' . $contactInfo['address'] . '</li>';
                        echo '<li><a href="tel:' . str_replace(' ', '', $contactInfo['phone']) . '">' . $contactInfo['phone'] . '</a></li>';
                        echo '<li><a href="mailto:' . $contactInfo['email'] . '">' . $contactInfo['email'] . '</a></li>';
                    } else {
                        echo 'No contact information available.';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-lg-3 col-xs-12 extra-links">
                <h5>Extra Links</h5>
                <ul>
                    <?php
                    include 'config.php';
                    if (isset($extra_links) && !empty($extra_links)) {
                        foreach ($extra_links as $service) {
                            echo '<li><a href="#">' . $service . '</a></li>';
                        }
                    } else {
                        echo 'No extra links available.';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-lg-3 col-xs-12 useful-links">
                <h5>Useful links</h5>
                <ul>
                    <?php
                    include 'config.php';
                    if (isset($menu_items) && !empty($menu_items)) {
                        foreach ($menu_items as $menuItem) {
                            echo '<li><a href="' . $menuItem['link'] . '">' . $menuItem['text'] . '</a></li>';
                        }
                    } else {
                        echo 'No menu items available.';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-lg-3 col-xs-12 partners">
                <h5>Our Partners</h5>
                <ul>
                    <?php
                    include 'config.php';
                    if (isset($partners) && !empty($partners)) {
                        foreach ($partners as $partner) {
                            echo '<li><a href="' . $partner['link'] . '">' . $partner['text'] . '</a></li>';
                        }
                    } else {
                        echo 'No partners available.';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </article>
</section>