<?php include "./components/head.php"; ?>

<body>
    <?php include "./components/header.php"; ?>
    <div id="main-wrapper">
        <main>
            <div class="item-detail">
                <div class="content-wrap">
                    <div class="grid">
                        <section class="info-col">
                            <article>
                                <h2>Lorem ipsum dolor</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore animi rem recusandae odit provident, neque minus eius suscipit sapiente harum quae tempore similique laboriosam quo pariatur nulla, quibusdam aliquid repellendus.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, sint. Soluta sunt, ipsa modi aperiam repudiandae hic aut?</p>
                                <ul class="project-info">
                                    <li>
                                        <h5>Location: </h5>
                                        <p>Singapore</p>
                                    </li>
                                    <li>
                                        <h5>Size: </h5>
                                        <p>15.500 m2</p>
                                    </li>
                                    <li>
                                        <h5>Services: </h5>
                                        <p>Architecture, Landscape</p>
                                    </li>
                                </ul>
                                <a href="" class="but but-black">View website</a>
                                <?php include "./components/social-share.php"; ?>
                            </article>
                        </section>

                        <section class="imgs-col">
                            <article class="grid">
                                <?php
                                for ($i = 0; $i < 6; $i++) {
                                    echo '<div class="box"></div>';
                                }
                                ?>
                            </article>
                        </section>

                    </div>
                </div>
            </div>
            <?php include "./components/pagination.php"; ?>
        </main>
        <?php include "./components/footer.php"; ?>