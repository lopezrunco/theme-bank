<?php include "./components/head.php"; ?>

<body>
    <?php include "./components/header.php"; ?>
    <div id="main-wrapper">
        <main class="blog">
            <div class="content-wrap">
                <div class="grid">
                    <?php
                    include 'config.php';
                    foreach ($blogItems as $blogItem) {
                        echo '<div class="box">';
                        echo '<a href="' . $blogItem['link'] . '" class="img"></a>';
                        echo '<span class="date">' . $blogItem['date'] . '</span>';
                        echo '<h4><a href="' . $blogItem['link'] . '">' . $blogItem['title'] . '</a></h4>';
                        echo '<p>' . $blogItem['content'] . '</p>';
                        echo '<a class="read-more-link" href="' . $blogItem['link'] . '">Read more</a>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
        </main>
        <?php include "./components/footer.php"; ?>