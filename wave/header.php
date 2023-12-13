<header>
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" alt="Wave" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <?php
                    include 'config.php';
                    if (isset($nav_links) && !empty($nav_links)) {
                        foreach ($nav_links as $nav_link) {
                            echo '<li class="nav-item"><a class="nav-link" href="' . $nav_link['link'] . '">' . $nav_link['text'] . '</a></li>';
                        }
                    } else {
                        echo 'No navigation menu available.';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="intro-txt">
            <h1 class="logo-title">
                Wave
            </h1>
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
    </div>
</header>