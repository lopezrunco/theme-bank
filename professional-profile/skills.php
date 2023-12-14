<div class="skills">
    <div class="row title">
        <div class="col-12">
            <h2>Skills</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <h3>Programming languages</h3>
            <?php
            include 'config.php';
            if (isset($prog_languages) && !empty($prog_languages)) {
                foreach ($prog_languages as $lang) {
                    echo '<label for="' . $lang['id'] . '">' . $lang['label'] . '</label>';
                    echo '<div class="meter">';
                    echo '<span style="width:' . $lang['percentage'] . '%;"><span class="progress"></span></span>';
                    echo '</div>';
                }
            } else {
                echo 'No skills available.';
            }
            ?>
        </div>
        <div class="col-md-4">
            <h3>Libraries & Frameworks</h3>
            <ul>
                <?php
                include 'config.php';
                if (isset($libs) && !empty($libs)) {
                    echo '<ul>';
                    foreach ($libs as $lib) {
                        echo '<li><i class="fas fa-check"></i>' . $lib . '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo 'No skills available.';
                }
                ?>
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Tools & Platforms</h3>
            <ul>
                <?php
                include 'config.php';
                if (isset($tools) && !empty($tools)) {
                    echo '<ul>';
                    foreach ($tools as $tool) {
                        echo '<li><i class="fas fa-check"></i>' . $tool . '</li>';
                    }
                    echo '</ul>';
                } else {
                    echo 'No other skills available.';
                }
                ?>

            </ul>
        </div>
    </div>

</div>