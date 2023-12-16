<section class="instructors">
    <div class="icon">
        <i class="fas fa-users"></i>
    </div>
    <article class="content-wrap">
        <div class="row">
            <div class="col-md-6 col-xl-3 description">
                <h4>Lorem ipsum dolor sit.</h4>
                <h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Minus, laborum dignissimos! Voluptatibus adipisci
                    reprehenderit voluptates?
                </p>
                <a href="instructors.php" class="btn btn-primary"><i class="fas fa-user-plus"></i>Know all of us</a>
            </div>

            <?php
            include 'config.php';
            foreach ($instructors as $instructor) {
                echo '<div class="col-md-6 col-xl-3 instructor">';
                echo '<div class="img-wrap">';
                echo '<div style="background-image: url(\'' . $instructor['imageSrc'] . '\')"></div>';
                echo '</div>';
                echo '<h3><a href="' . $instructor['profileLink'] . '">' . $instructor['name'] . '</a></h3>';
                echo '<p>' . $instructor['description'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </article>
</section>