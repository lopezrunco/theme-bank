<section id="services">
    <article class="overlay">
        <div class="content-wrap">
            <div class="content">
                <h3>\ Services <span class="green">.</span></h3>
                <p class="intro-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quis totam est saepe, minus deleniti enim ipsa velit dicta aperiam fugiat cumque. Pariatur facilis cumque cum, sit accusamus incidunt praesentium.
                </p>
                <ul class="list service-boxes">
                    <?php
                    include("config.php");
                    foreach ($services as $service) :
                    ?>
                        <li>
                            <i class="<?php echo $service['icon']; ?>"></i>
                            <h3><?php echo $service['title']; ?></h3>
                            <p><?php echo $service['description']; ?></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </article>
</section>