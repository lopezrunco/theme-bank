<div class="logo-info">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <a href="index.html"><img src="images/logo.png" alt="logo finnexia" class="main-logo" /></a>
            </div>
            <div class="col-8">
                <?php
                include 'config.php';
                if (isset($contact_info) && !empty($contact_info)) {
                    echo '<div class="row contact-info">';
                    foreach ($contact_info as $info) {
                        echo '<div class="col-4">';
                        echo '<i class="' . $info['icon'] . '"></i>';
                        echo '<p>' . $info['label'] . '<span>' . $info['info'] . '</span></p>';
                        echo '</div>';
                    }
                    echo '</div>';
                } else {
                    echo 'No contact information available.';
                }
                ?>
            </div>
        </div>
    </div>
</div>