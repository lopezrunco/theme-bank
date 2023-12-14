<section class="work-edu-history">
    <div class="row">
        <div class="col-md-6 education-col">
            <h2>Education</h2>
            <?php
            include 'config.php';
            if (isset($education_items) && !empty($education_items)) {
                foreach ($education_items as $item) {
                    echo '<div class="edu-item">';
                    echo '<h3>' . $item['title'] . '</h3>';
                    echo '<span class="date">' . $item['date'] . '</span>';
                    echo '<p><b><a href="' . $item['link'] . '" target="_blank">' . $item['link_text'] . '</a></b><br>';
                    echo $item['skills'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo 'No educational items available.';
            }
            ?>
        </div>
        <div class="col-md-6 work-col">
            <h2>Work history</h2>
            <?php
            include 'config.php';
            if (isset($work_items) && !empty($work_items)) {
                foreach ($work_items as $item) {
                    echo '<div class="work-item">';
                    if (!empty($item['link'])) {
                        echo '<a href="' . $item['link'] . '" target="_blank">';
                        echo '<h3>' . $item['link_text'] . '</h3>';
                        echo '</a>';
                    } else {
                        echo '<h3>' . $item['link_text'] . '</h3>';
                    }
                    echo '<span class="date">' . $item['date'] . '</span>';
                    echo '<p>' . $item['description'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo 'No work experience items available.';
            }
            ?>
        </div>
    </div>
</section>