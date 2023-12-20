<?php include "./components/head.php"; ?>

<body>
    <?php include "./components/header.php"; ?>
    <div id="main-wrapper">
        <main class="portfolio grid">
            <?php
            include 'config.php';
            $itemCount = count($portfolioItems);
            for ($i = 0; $i < $itemCount; $i++) {
                echo '<a href="item-detail.php" class="box"></a>';
            }
            ?>
        </main>
        <?php include "./components/footer.php"; ?>