<section class="courses-tab">
    <article class="content-wrap">
        <div class="row">
            <div class="col-12">
                <h2>We have a carrer for you!</h2>
            </div>
        </div>
        <div class="tabs">
            <div class="controls">
                <!-- Number of buttons must be equeal to numbers of tabs -->
                <a class="active">Business</a>
                <a>Ecommerce</a>
                <a>Lifestyle</a>
            </div>
            <div class="tabs-container">
                <?php
                include 'config.php';
                foreach ($tabItems as $tab => $courseList) {
                    echo '<div class="tab ' . $tab . '">';
                    echo '<div class="tab-content">';
                    echo '<div class="row">';
                    foreach ($courseList as $course) {
                        echo '<div class="col-sm-4 col-md-6 col-lg-4 course-container">';
                        echo '<a href="course-item.php">';
                        echo '<div class="course-thumb"></div>';
                        echo '<h3>' . $course['title'] . '</h3>';
                        echo '<span>' . $course['span'] . '</span>';
                        echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non illum eius eaque obcaecati, sapiente placeat.</p>';
                        echo '<a href="course-item.php" class="link">View more...<i class="fas fa-caret-right"></i></a>';
                        echo '</a>';
                        echo '</div>';
                    }
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </article>
</section>