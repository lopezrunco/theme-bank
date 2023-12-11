<div id="contact">
    <div class="overlay">
        <div class="content-wrap">
            <div class="content">
                <h3><span class="green">\ Contact .</span></h3>
                <ul class="contact-info">
                    <?php
                    include("config.php");
                    foreach ($contactInfo as $info) :
                    ?>
                        <li>
                            <i class="<?php echo $info['icon']; ?>"></i>
                            <?php if (isset($info['link'])) : ?>
                                <a href="<?php echo $info['link']; ?>"><?php echo $info['text']; ?></a>
                            <?php else : ?>
                                <?php echo $info['text']; ?>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <span class="web-info">
                Copyright 2018 Codigo Web, All Rights Reserved
            </span>
        </div>
    </div>
</div>