<section class="sponsors">
    <article class="content-wrap">
        <div class="row title">
            <div class="col-md-8 col-lg-9">
                <h4>Lorem ipsum.</h4>
                <h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est,
                    nulla!
                </h3>
            </div>
            <div class="col-md-4 col-lg-3">
                <a href="contact.php" class="btn btn-primary"><i class="fas fa-hands-helping"></i> Become part of us</a>
            </div>
        </div>
        <div class="row sponsors-items">
            <?php
            include 'config.php';
            foreach ($partners as $partner) {
            ?>
                <div class="col-md-3">
                    <div class="reveal-wrapper">
                        <div class="reveal-content">
                            <h6><?php echo $partner['title']; ?></h6>
                            <p><?php echo $partner['content']; ?></p>
                        </div>
                        <div class="reveal-top">
                            <img src="<?php echo $partner['image']; ?>" alt="Partner" />
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </article>
</section>