<section class="who" id="who">
    <article class="content-wrap">
        <div class="row">
            <h3>Who we are & what we do</h3>
            <p>Lorem ipsum dolor sit adipiscing elit. Quisque sed viverra tellus. Pellentesque vel
                nt,entesque doloois sem ornaunc sit amet sapien orci.
                Sed ac diam ut est tempus tincidunt. Quisqlls entesque oloois sem ornauoloois sem
                ornauoloois sem ornauoloois sem ornau entesi fermentum, vitae tincidunt
                est molestie.
            </p>
        </div>
        <div class="row">
            <a href="#" class="btn btn-green">
                Meet the team
            </a>
        </div>
        <div class="row-about">
            <?php
            include 'config.php';
            function generateTeamMembers($members)
            {
                foreach ($members as $member) {
                    echo '<div class="col">';
                    echo '<i class="' . $member['icon'] . '"></i>';
                    echo '<h4>' . $member['name'] . '</h4>';
                    echo '<p>' . $member['position'] . '</p>';
                    echo '<ul class="social-ser"><li>';
                    foreach ($member['social'] as $socialIcon) {
                        echo '<a href="' . $socialIcon['link'] . '"><i class="' . $socialIcon['icon'] . '"></i></a>';
                    }
                    echo '</li></ul></div>';
                }
            }
            if (isset($team_members) && !empty($team_members)) {
                generateTeamMembers($team_members);
            } else {
                echo 'No team members available.';
            }
            ?>
        </div>
    </article>
</section>