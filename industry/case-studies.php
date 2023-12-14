<section class="case-studies" id="projects">
    <article class="content-wrap-wide">
        <div class="row">
            <div class="col-lg-3 col-xs-12">
                <h2>Our<br>
                    <span>Projects</span>
                </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod officiis iste esse animi
                    omnis unde alias aliquam aut delectus facilis? Fugit, in voluptate quaerat eius eveniet
                    dolorum iste incidunt asin destlare.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, asperiores?</p>
                <a href="#contact">Contact us <i class="fa fa-arrow-right"></i></a>
            </div>
            <?php
            include 'config.php';
            if (isset($projects) && !empty($projects)) {
                foreach ($projects as $project) {
                    echo '<div class="col-lg-3 col-xs-12">';
                    echo '<div class="' . $project['box_class'] . '">';
                    echo '<div class="overlay">';
                    echo '<img src="' . $project['image'] . '" alt="">';
                    echo '<h5>' . $project['title'] . '</h5>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo 'No projects available.';
            }
            ?>
        </div>
    </article>
</section>