<header>
    <div class="content-wrap">
        <h1 class="logo-title">
            Wave
        </h1>
        <div class="fixed-logo">
            <a href="#" class="logo-anim">
                <img src="images/logo.png" alt="Wave" class="main-logo fleft" />
            </a>
        </div>
        <nav class="main-navigation fright">
            <ul>
                <?php
                include 'config.php';
                if (isset($nav_links) && !empty($nav_links)) {
                    foreach ($nav_links as $nav_link) {
                        echo '<li><a href="' . $nav_link['link'] . '">' . $nav_link['text'] . '</a></li>';
                    }
                } else {
                    echo 'No navigation menu available.';
                }
                ?>
            </ul>
        </nav>
        <div class="intro-txt">
            <div class="left-txt">
                <h2>Good ideas
                    <span>comes</span>
                </h2>
            </div>
            <div class="right-txt">
                <h2>First!</h2>
            </div>
        </div>
    </div>
</header>