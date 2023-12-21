<section id="experiences" class="experiences">
    <article class="container">
        <div class="row section-title">
            <div class="col">
                <h2 class="fadeElement">Experiences</h2>
                <div class="separator fadeElement"></div>
            </div>
        </div>

        <div class="row fadeElement">
            <div class="col">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-work-tab" data-bs-toggle="pill" data-bs-target="#pills-work" type="button" role="tab" aria-controls="pills-work" aria-selected="true">Work</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-education-tab" data-bs-toggle="pill" data-bs-target="#pills-education" type="button" role="tab" aria-controls="pills-education" aria-selected="true">Education</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-certifications-tab" data-bs-toggle="pill" data-bs-target="#pills-certifications" type="button" role="tab" aria-controls="pills-certifications" aria-selected="false">Certifications</button>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <!-- Work tab -->
            <div class="tab-pane fade show active" id="pills-work" role="tabpanel" aria-labelledby="pills-work-tab">
                <div class="row">
                    <?php
                    include 'config.php';
                    foreach ($workExperience as $exp) {
                        echo '<div class="' . $exp['size'] . '">';
                        echo '<div class="item fadeElement">';
                        echo '<h3>' . $exp['position'] . ' <a href="' . $exp['companyLink'] . '" target="_blank" title="' . $exp['companyTitle'] . '">' . $exp['company'] . '</a></h3>';
                        echo '<div class="date">' . $exp['date'] . '</div>';
                        echo '<p>' . $exp['description'] . '</p>';
                        if (isset($exp['projects'])) {
                            echo '<div class="tags">';
                            foreach ($exp['projects'] as $project) {
                                echo '<a href="' . $project['link'] . '" target="_blank">' . $project['name'] . '</a> | ';
                            }
                            echo '</div>';
                        }
                        echo '<div class="tags">';
                        foreach ($exp['tags'] as $tag) {
                            echo '<span>' . $tag . '</span>';
                        }
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>

            <!-- Education tab -->
            <div class="tab-pane fade" id="pills-education" role="tabpanel" aria-labelledby="pills-education-tab">
                <div class="row">
                    <?php
                    include 'config.php';
                    foreach ($education as $edu) {
                        echo '<div class="' . $edu['size'] . '">';
                        echo '<div class="item fadeElement">';
                        echo '<h3>' . $edu['position'] . ' <a href="' . $edu['institutionLink'] . '" target="_blank" title="' . $edu['institutionTitle'] . '">' . $edu['institution'] . '</a></h3>';
                        echo '<div class="date">' . $edu['date'] . '</div>';
                        echo '<p>' . $edu['description'] . '</p>';
                        echo '<div class="tags">';
                        foreach ($edu['tags'] as $tag) {
                            echo '<span>' . $tag . '</span>';
                        }
                        echo '</div>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>

            <!-- Certifications tab -->
            <div class="tab-pane fade" id="pills-certifications" role="tabpanel" aria-labelledby="pills-certifications-tab">
                <div class="row">
                    <?php
                    include 'config.php';
                    foreach ($certifications as $course) {
                        echo '<div class="' . $course['size'] . '">';
                        echo '<div class="item fadeElement">';
                        echo '<h3>' . $course['courseName'] . ' <a href="' . $course['institutionLink'] . '" target="_blank" title="' . $course['institutionTitle'] . '">' . $course['institution'] . '</a></h3>';
                        echo '<div class="date">' . $course['date'] . '</div>';
                        echo '<p>' . $course['description'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </article>
</section>