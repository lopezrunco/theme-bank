<section class="members" id="about">
    <article class="container">
        <div class="row">
            <div class="col-4">
                <em>Your satisfaction defines us</em>
                <h4>We find ways</h4>
                <p>Established fact that a reader will be distracted by the readable content of a page when
                    looking many desktop publishing packages and web page.
                </p>
                <img src="images/signature.png" alt="signature" class="signature">
            </div>
            <div class="col-8">
                <div class="row avatars">
                    <?php
                    include 'config.php';
                    if (isset($members) && !empty($members)) {
                        foreach ($members as $member) {
                            echo '<div class="col-4">';
                            echo '<img src="' . $member['image'] . '" alt="avatar" />';
                            echo '<h5>' . $member['name'] . '</h5>';
                            echo '<p>' . $member['position'] . '</p>';
                            echo '</div>';
                        }
                    } else {
                        echo 'No avatars available.';
                    }
                    ?>
                </div>
            </div>
        </div>
    </article>
</section>