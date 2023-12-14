<section class="proj-participations">
    <div class="row">
        <div class="col-12">
            <h2>Project participations</h2>
        </div>
    </div>
    <div class="row">
        <?php
        include 'config.php';
        if (isset($participations_by_column) && !empty($participations_by_column)) {
            foreach ($participations_by_column as $column) {
                echo '<div class="col-md-4">';
                echo '<ul>';
                foreach ($column['links'] as $link) {
                    echo '<li><a href="' . $link['url'] . '" target="_blank">' . $link['text'] . '</a></li>';
                }
                echo '</ul>';
                echo '</div>';
            }
        } else {
            echo 'No participations links available.';
        }
        ?>
</section>