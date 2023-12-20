<?php include "./components/head.php"; ?>

<body>
    <?php include "./components/header.php"; ?>
    <div id="main-wrapper">
        <main>
            <div class="content-wrap">
                <div class="blog-item-grid">
                    <main>
                        <div class="main-content">
                            <div class="main-img"></div>
                            <span class="date">May 5, 2021 / orem ipsum dolor sit</span>
                            <h2>Lorem ipsum dolor sit</h2>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt harum accusantium obcaecati tempora beatae, ullam laboriosam error quam magnam pariatur excepturi consectetur totam sequi minus itaque. Veritatis perspiciatis laudantium sapiente.</p>
                            <blockquote>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Et perspiciatis minima quae neque magnam sapiente!
                            </blockquote>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vel ut dignissimos praesentium, reprehenderit dicta iusto? Tenetur totam nihil sed eligendi.</p>
                            <div class="sec-imgs-grid">
                                <?php
                                for ($i = 0; $i < 4; $i++) {
                                    echo '<div class="box">';
                                    if (isset($contentForBoxes[$i])) {
                                        echo $contentForBoxes[$i];
                                    }
                                    echo '</div>';
                                }
                                ?>
                            </div>
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae cumque corporis commodi voluptate itaque amet odit ullam ipsum rem error accusamus voluptatem, quam eligendi inventore.</p>
                            <?php include "./components/social-share.php"; ?>
                            <?php include "./components/author-info.php"; ?>
                            <?php include "./components/reply-form.php"; ?>
                        </div>
                    </main>
                    <?php include "./components/aside.php"; ?>
                </div>
            </div>
        </main>
        <?php include "./components/footer.php"; ?>