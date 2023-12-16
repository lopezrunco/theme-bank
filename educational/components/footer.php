<footer class="footer">
    <div class="content-wrap">
        <div class="row">
            <div class="col-md-6 col-xl-8">
                <p>2019 Lorem ipsum dolor sit amet consectetur</p>
            </div>
            <div class="col-md-4 col-xl-2">
                <?php
                include 'config.php';
                $phoneNumber = $contactInfo[0]['phoneNumber']['number'];
                $phoneLink = $contactInfo[0]['phoneNumber']['link'];
                echo '<a href="' . $phoneLink . '">tel. ' . $phoneNumber . '</a>';
                ?>
            </div>
            <div class="col-md-2 col-xl-2">
                <?php
                include 'config.php';
                $emailAddress = $contactInfo[2]['email']['address'];
                $emailLink = $contactInfo[2]['email']['link'];
                echo '<a href="' . $emailLink . '">' . $emailAddress . '</a>';
                ?>
            </div>
        </div>
    </div>
</footer>