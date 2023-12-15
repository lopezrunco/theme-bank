<header>
    <div class="content-wrap">
        <div class="top-section">
            <div class="top-links">
                <?php
                include 'config.php';
                if (isset($topLinks) && !empty($topLinks)) {
                    foreach ($topLinks as $link) {
                        echo '<a href="">' . $link . '</a>';
                    }
                } else {
                    echo 'No links available.';
                }
                ?>
            </div>
        </div>
        <div class="logo-live-section">
            <div class="logo">
                <a href="index.html"><img src="img/logo.png" alt="" /></a>
            </div>
            <div class="live">
                <audio preload="none" controls="controls" src="http://radiolatina.live/9202/stream;" />
            </div>
        </div>

        <!-- Desktop navigation -->
        <div class="navbar">
            <nav>
                <?php
                include 'config.php';
                if (isset($nav) && !empty($nav)) {
                    foreach ($nav as $item) {
                        echo '<a href="">' . $item . '</a>';
                    }
                } else {
                    echo 'No links available.';
                }
                ?>
            </nav>
        </div>
        <!-- Mobile navigation -->
        <div class="mobile-navbar">
            <div class="toggle "></div>
        </div>
    </div>
    <div class="navigation">
        <nav>
            <?php
            include 'config.php';
            if (isset($nav) && !empty($nav)) {
                foreach ($nav as $item) {
                    echo '<a href="">' . $item . '</a>';
                }
            } else {
                echo 'No links available.';
            }
            ?>
        </nav>
    </div>
</header>