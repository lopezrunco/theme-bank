<header>
    <h1 class="main-logo">Professional profile</h1>
    <div class="profile">
        <div class="avatar">
            <!-- Img in css -->
        </div>
        <h5>John Doe smith</h5>
        <p>Full Stack Developer</p>
    </div>
    <div class="info">
        <div class="personal">
            <?php
            include 'config.php';
            if (isset($personal_info) && !empty($personal_info)) {
                foreach ($personal_info as $item) {
                    echo '<div class="line">';
                    echo '<h6>' . $item['label'] . ':&nbsp;</h6><span>&nbsp;' . $item['detail'] . '</span>';
                    echo '</div>';
                }
            } else {
                echo 'No personal information available.';
            }
            ?>
        </div>
        <div class="languages">
            <?php
            include 'config.php';
            if (isset($languages) && !empty($languages)) {
                echo '<div class="languages">';
                foreach ($languages as $item) {
                    echo '<div class="lang">';
                    echo '<img src="' . $item['image'] . '" alt="' . $item['alt'] . '" /><span>' . $item['name'] . '</span>';
                    echo '</div>';
                }
                echo '</div>';
            } else {
                echo 'No languages available.';
            }
            ?>
        </div>
    </div>
    <div class="download-cv">
        <a href="#"><i class="fas fa-cloud-download-alt"></i>Donwload cv</a>
    </div>
</header>