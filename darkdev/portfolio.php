<section id="portfolio" class="portfolio">
    <article class="container">
        <div class="row section-title">
            <div class="col">
                <h2 class="fadeElement">Recent Portfolio</h2>
                <div class="separator fadeElement"></div>
            </div>
        </div>

        <div class="row">
            <?php
            include 'config.php';
            foreach ($projects as $project) {
                echo '<div class="col-12 item item-left fadeElement">';
                echo '<div class="row">';
                echo '<div class="col-lg-10 content">';
                echo '<small>' . $project['type'] . '</small>';
                echo '<h4>' . $project['title'] . '</h4>';
                echo '<div class="info-card">';
                echo '<p>' . $project['description'] . '</p>';
                echo '<div class="tags project-tags">';
                foreach ($project['tags'] as $tag) {
                    echo '<span>' . $tag . '</span>';
                }
                echo '</div>';
                echo '</div>';
                echo '<div class="project-links">';
                foreach ($project['links'] as $link) {
                    echo '<a href="' . $link['url'] . '" target="_blank" title="' . $link['title'] . '"><i class="' . $link['icon'] . '"></i>' . $link['title'] . '</a>';
                }
                echo '</div>';
                echo '</div>';
                echo '<div class="col-lg-2 icon">';
                echo '<i class="' . $project['icon'] . '"></i>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </article>
</section>