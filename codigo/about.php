<section id="about">
    <article class="overlay">
        <div class="content-wrap">
            <div class="content">
                <h3><span class="green">\ About .</span></h3>
                <p class="intro-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam impedit in quaerat quam reprehenderit, accusamus ea nemo incidunt vitae numquam.
                </p>
                <div class="capabilities-list">
                    <h3>Capabilities:</h3>
                    <ul>
                        <?php
                        include("config.php");
                        foreach ($skills as $skill) :
                        ?>
                            <li><i class="fas fa-dot-circle"></i><?php echo $skill; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </article>
</section>