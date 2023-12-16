<section class="courses">
    <article class="content-wrap">
        <div class="row title">
            <div class="col-lg-9">
                <h4>Lorem ipsum dolor sit amet.</h4>
                <h3>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </h3>
            </div>
            <div class="col-lg-3">
                <a href="courses.php" class="btn btn-primary"><i class="fas fa-drafting-compass"></i> View all Lorem ipsum
                    dolor</a>
            </div>
        </div>
        <div class="card-grid-container">
            <?php
            include 'config.php';
            foreach ($courses as $course) {
                echo '<div class="card-container">';
                echo '<a href="course-item-html" onclick="return false;">';
                echo '<figure>';
                echo '<img src="' . $course['imageSrc'] . '" alt="Course Item" />';
                echo '<figcaption class="back">';
                echo '<h2 class="title">' . $course['title'] . '</h2>';
                echo '<hr />';
                echo '<p>' . $course['description'] . '</p>';
                echo '</figcaption>';
                echo '</figure>';
                echo '</a>';
                echo '</div>';
            }
            ?>
        </div>
    </article>
</section>