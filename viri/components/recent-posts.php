<div class="recent-posts">
    <h5>Recent posts</h5>
    <ul>
        <?php
        include 'config.php';
        foreach ($recentPosts as $post) {
            echo '<li><a href="">' . $post . '</a></li>';
        }
        ?>
    </ul>
</div>