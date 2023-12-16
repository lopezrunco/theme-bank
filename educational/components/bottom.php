<section class="bottom">
    <div class="icon">
        <i class="far fa-envelope-open"></i>
    </div>

    <article class="content-wrap">
        <div class="row">
            <div class="col-md-6 col-xl-3 about-us">
                <img src="img/logo.png" alt="Logo" />
                <p>
                    Lorem ipsum dolor sit amet consecteturaer adipisicing elit!<br />Lorem
                    ipsum dolor sit.
                </p>
                <ul class="social">
                    <?php
                    include 'config.php';
                    foreach ($socialMediaLinks as $link) {
                        echo '<li>';
                        echo '<a href="' . $link['href'] . '"><i class="' . $link['iconClass'] . '"></i></a>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-6 col-xl-2 bottom-menu">
                <ul>
                    <?php
                    include 'config.php';
                    foreach ($navigationLinks as $item) {
                        echo '<li><a href="' . $item['link'] . '">' . $item['text'] . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-6 col-xl-3 contact-info">
                <?php
                include 'config.php';

                foreach ($contactInfo as $info) {
                    echo '<div class="row">';
                    echo '<div class="col-md-2">';
                    echo '<i class="' . $info['iconClass'] . '"></i>';
                    echo '</div>';
                    echo '<div class="col-md-10">';

                    if (isset($info['phoneNumber'])) {
                        echo '<span><a href="' . $info['phoneNumber']['link'] . '">' . $info['phoneNumber']['number'] . '</a></span>';
                    } elseif (isset($info['email'])) {
                        echo '<span><a href="' . $info['email']['link'] . '">' . $info['email']['address'] . '</a></span>';
                    } elseif (isset($info['address'])) {
                        echo '<span>' . $info['address'] . '</span>';
                    }

                    echo '<p>' . $info['description'] . '</p>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <div class="col-md-6 col-xl-4 last-blog">
                <?php
                include 'config.php';
                foreach ($bottomBlogLinks as $blogLink) {
                    echo '<div class="blog-link">';
                    echo '<h3><a href="' . $blogLink['href'] . '">' . $blogLink['title'] . '</a></h3>';
                    echo '<span>' . $blogLink['date'] . '</span>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </article>
</section>