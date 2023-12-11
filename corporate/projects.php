<section class="projects" id="projects">
    <article class="container">
        <div class="row section-title">
            <div class="col">
                <h4>Recent Projects</h4>
                <hr />
                <p>leap into electronic typesetting, remaining essentially unchanged</p>
            </div>
        </div>
        <div class="row filter">
            <?php
            include("config.php");
            if (isset($filter_buttons) && !empty($filter_buttons)) {
                foreach ($filter_buttons as $button) {
                    echo '<a href="#" class="button button-green-outline">' . $button . '</a>';
                }
            } else {
                echo 'No filter buttons available.';
            }
            ?>
        </div>
        <div class="row items">
            <?php
            include("config.php");
            if (isset($project_images) && !empty($project_images)) {
                foreach ($project_images as $image) {
                    echo '<div class="col-4">';
                    echo '<img src="' . $image . '" alt="project img">';
                    echo '</div>';
                }
            } else {
                echo 'No project images available.';
            }
            ?>
        </div>
    </article>
</section>