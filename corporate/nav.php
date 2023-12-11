<nav class="main-nav">
    <div class="container">
        <ul>
            <?php
            include('config.php');
            if (isset($menu_items) && !empty($menu_items)) {
                foreach ($menu_items as $label => $url) {
                    echo '<li><a href="' . $url . '">' . $label . '</a></li>';
                }
            } else {
                echo 'No menu items available.';
            }
            ?>
        </ul>
        <a href="#" class="button button-dark">Get a Quote</a>
    </div>
</nav>
<nav id="menu" class="hidden">
    <ul>
        <?php
        include('config.php');
        if (isset($menu_items) && !empty($menu_items)) {
            foreach ($menu_items as $label => $url) {
                echo '<li><a href="' . $url . '">' . $label . '</a></li>';
            }
        } else {
            echo 'No menu items available.';
        }
        ?>
    </ul>
</nav>