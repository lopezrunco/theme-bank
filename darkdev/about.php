<section class="about">
    <article class="container">
        <div class="row">
            <div class="col-md-9 about-info">
                <h3>Jhon Doe</h3>
                <span class="button hi-button">Fullstack Developer</span>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                    Voluptas quae explicabo voluptate natus veniam, quaerat at praesentium illum eius tempora facere sunt earum cupiditate, optio porro molestias. Non ipsa fugiat, laborum architecto nisi beatae numquam expedita aut delectus cum quod vel odit. <br>
                </p>
                <div class="grid">
                    <div class="contact-info">
                        <?php
                        include 'config.php';
                        foreach ($aboutnfo as $item) {
                            echo '<div class="item">';
                            echo '<i class="' . $item['iconClass'] . '"></i>';
                            echo '<span>' . $item['text'] . '</span>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <div class="languages">
                        <?php
                        include 'config.php';
                        foreach ($languages as $item) {
                            echo '<div class="item">';
                            echo '<i class="' . $item['iconClass'] . '"></i>';
                            echo '<span>' . $item['text'] . '</span>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <div class="hobbies">
                        <?php
                        include 'config.php';
                        foreach ($hobbies as $item) {
                            echo '<div class="item">';
                            echo '<i class="' . $item['iconClass'] . '"></i>';
                            echo '<span>' . $item['text'] . '</span>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <div class="social-icons">
                        <?php
                        include 'config.php';
                        foreach ($contactInfo as $item) {
                            echo '<div class="item">';
                            echo '<i class="' . $item['iconClass'] . '"></i>';
                            echo '<a href="' . $item['link'] . '" target="_blank" title="' . $item['title'] . '">' . $item['text'] . '</a>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="d-none d-md-block col-md-3 profile-img">
                <img src="img/profile.jpg" alt="Dark Dev" class="mobile-img" />
            </div>
        </div>
    </article>
</section>