<header>
    <div class="logo">
        <a href="#">
            <img src="img/logo.svg" alt="Viri theme">
        </a>
    </div>
    <nav id="menu">
        <ul>
            <?php
            include 'config.php';
            foreach ($menuItems as $item) {
                echo '<li><a href="' . $item['href'] . '">' . $item['label'] . '</a></li>';
            }
            ?>
            <div class="menu-social-links">
                <?php
                include 'config.php';
                foreach ($socialMediaLinks as $link) {
                    echo '<a href="' . $link['href'] . '"><i class="' . $link['iconClass'] . '"></i></a>';
                }
                ?>
            </div>
        </ul>
    </nav>
    <div class="menu-toggle">
        <i class="fa fa-bars"></i>
    </div>
</header>