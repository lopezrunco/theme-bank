<section id="our-works">
    <article class="overlay">
        <div class="content-wrap">
            <div class="content">
                <h3>\ Our works <span class="green">.</span></h3>
                <p class="intro-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias sapiente laborum repudiandae quibusdam rem harum ipsa, voluptas nihil perferendis impedit.
                </p>
                <ul class="list">
                    <?php
                    include("config.php");
                    foreach ($works as $work) :
                    ?>
                        <li>
                            <a>
                                <div class="wrap">
                                    <div class="work-item <?php echo $work['bg_class']; ?>"></div>
                                </div>
                                <div class="work-desc">
                                    <h3><?php echo $work['title']; ?></h3>
                                    <span><?php echo $work['skills']; ?></span>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </article>
</section>