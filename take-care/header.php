<header>
    <div class="logo">
        <a href="#">
            <img src="img/logo.png" alt="Take Care">
        </a>
    </div>
    <nav id="menu">
        <ul>
            <?php
            include 'config.php';
            foreach ($navigationLinks as $link) {
                echo '<li>';
                echo '<a href="' . $link['href'] . '">' . $link['text'] . '</a>';
                echo '</li>';
            }
            ?>
        </ul>
        <div class="social">
            <?php
            include 'config.php';
            foreach ($socialMediaLinks as $link) {
                echo '<a href="' . $link['url'] . '" target="_blank">';
                echo '<i class="' . $link['iconClass'] . '"></i>';
                echo '</a>';
            }
            ?>
        </div>
    </nav>
    <div class="menu-toggle">
        <i class="fa fa-bars"></i>
    </div>
</header>