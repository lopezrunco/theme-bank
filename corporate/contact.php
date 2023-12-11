<section class="contact" id="contact">
    <article class="container">
        <div class="row section-title">
            <div class="col">
                <h4>Contact us</h4>
                <hr />
                <p>leap into electronic typesetting, remaining essentially unchanged</p>
            </div>
        </div>
        <div class="row">
            <div class="col-5 info">
                <div class="overlay-contact">
                    <h4>Get in Touch</h4>
                    <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their
                        default model.
                    </p>
                    <div class="data-info">
                        <?php
                        include 'config.php';
                        if (isset($contact_info) && !empty($contact_info)) {
                            foreach ($contact_info as $item) {
                                echo '<p><i class="' . $item['icon'] . '"></i>' . $item['info'] . '</p>';
                            }
                        } else {
                            echo 'No contact information available.';
                        }
                        ?>
                    </div>
                    <div class="social">
                        <?php
                        include 'config.php';
                        if (isset($social_links) && !empty($social_links)) {
                            foreach ($social_links as $media) {
                                echo '<a href="' . $media['url'] . '"><i class="' . $media['icon'] . '"></i></a>';
                            }
                        } else {
                            echo 'No social media links available.';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-7 form">
                <form action="post">
                    <input type="text" name="name" placeholder="Name" required />
                    <input type="email" name="email" id="email" placeholder="Email" required />
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your message"></textarea>
                    <input class="send-btn" type="button" value="Send message" />
                </form>
            </div>
        </div>
    </article>
</section>