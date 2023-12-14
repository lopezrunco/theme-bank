<header id="header">
    <div class="overlay">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="#"><img height="50" src="images/logo-3.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    include 'config.php';
                    if (isset($menu_items) && !empty($menu_items)) {
                        foreach ($menu_items as $item) {
                            echo '<li class="nav-item"><a class="nav-link" href="' . $item['link'] . '">' . $item['text'] . '</a></li>';
                        }
                    } else {
                        echo 'No menu items available.';
                    }
                    ?>

                </ul>
            </div>
        </nav>
        <h1 class="main-logo">Industry</h1>
        <div class="content-wrap">
            <div class="slider-content">
                <img src="images/logo-1.png" alt="">
                <h2>We are Industry <span>Co</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.
                </p>
            </div>
        </div>
    </div>
</header>