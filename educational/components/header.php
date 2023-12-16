<header>
    <div class="logo">
        <a href="index.php"><img src="img/logo.png" alt="main logo" /></a>
    </div>
    <nav id="menu" class="menu">
        <ul>
            <?php
            include 'config.php';
            foreach ($navigationLinks as $item) {
                echo '<li><a href="' . $item['link'] . '">' . $item['text'] . '</a></li>';
            }
            ?>
        </ul>
        <ul class="contact-info-mobile">
            <li>
                <?php
                include 'config.php';
                $phoneNumber = $contactInfo[0]['phoneNumber']['number'];
                $phoneLink = $contactInfo[0]['phoneNumber']['link'];
                echo '<a href="' . $phoneLink . '">tel. ' . $phoneNumber . '</a>';
                ?>
            </li>
        </ul>
        <ul class="social-links-mobile">
            <?php
            include 'config.php';
            foreach ($socialMediaLinks as $link) {
                echo '<li>';
                echo '<a href="' . $link['href'] . '"><i class="' . $link['iconClass'] . '"></i></a>';
                echo '</li>';
            }
            ?>
        </ul>
    </nav>
    <div class="menu-toggle">
        <i class="fa fa-bars"></i>
    </div>
    <nav id="menu-desktop" class="menu-desktop">
        <ul>
            <?php
            include 'config.php';
            foreach ($navigationLinks as $item) {
                echo '<li><a href="' . $item['link'] . '">' . $item['text'] . '</a></li>';
            }
            ?>
        </ul>
    </nav>
    <div class="main-logo">
        <h1>Educational</h1>
    </div>
</header>