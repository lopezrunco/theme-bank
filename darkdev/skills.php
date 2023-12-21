<section id="skills" class="skills">
    <article class="container">
        <div class="row section-title">
            <div class="col">
                <h2>Skills</h2>
                <div class="separator"></div>
            </div>
        </div>
        <div class="row">
            <!-- Language Skills -->
            <div class="col-md-4 skills-group">
                <?php
                include 'config.php';
                foreach ($languageSkills as $item) {
                    echo '<div class="item fadeElement">';
                    echo '<img class="d-none d-md-block" src="' . $item['imgSrc'] . '" alt="' . $item['imgAlt'] . '" />';
                    echo '<i class="' . $item['iconClass'] . '"></i>';
                    echo '<h5>' . $item['text'] . '</h5>';
                    echo '</div>';
                }
                ?>
            </div>
            <!-- Tech Skills -->
            <div class="col-md-4 skills-group">
                <?php
                include 'config.php';
                foreach ($techSkillsOne as $item) {
                    echo '<div class="item fadeElement">';
                    echo '<img class="d-none d-md-block" src="' . $item['imgSrc'] . '" alt="' . $item['imgAlt'] . '" />';
                    echo '<i class="' . $item['iconClass'] . '"></i>';
                    echo '<h5>' . $item['text'] . '</h5>';
                    echo '</div>';
                }
                ?>
            </div>
            <!-- Tech Skills -->
            <div class="col-md-4 skills-group">
                <?php
                include 'config.php';
                foreach ($techSkillsTwo as $item) {
                    echo '<div class="item fadeElement">';
                    echo '<img class="d-none d-md-block" src="' . $item['imgSrc'] . '" alt="' . $item['imgAlt'] . '" />';
                    echo '<i class="' . $item['iconClass'] . '"></i>';
                    echo '<h5>' . $item['text'] . '</h5>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </article>
</section>