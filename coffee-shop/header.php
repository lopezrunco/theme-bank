<header>
    <div class="overlay">
        <div class="content-wrap">
            <h1 class="main-logo">Coffe Shop</h1>
            <div class="nav-bar">
                <div class="img-logo">
                    <a href="index.html">
                        <img src="img/logo.png" alt="Coffee Shop logo" />
                    </a>
                </div>
                <nav class="main-nav">
                    <ul>
                        <?php
                        include("config.php");
                        foreach ($navLinks as $label => $link) {
                            echo "<li><a href='#$link'>$label</a></li>";
                        }
                        ?>
                    </ul>
                </nav>
                <div class="menu-bar" id="btn-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div class="slider-content">
                <h2>Cuando lo que ya conocés, logra sorprenderte.</h2>
                <a href="#promo" class="btn">Conocé más!</a>
            </div>
        </div>
    </div>
</header>