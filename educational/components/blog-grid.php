<section class="blog">
    <article class="content-wrap">
        <div class="row title">
            <div class="col">
                <h2>Latests news</h2>
            </div>
        </div>
        <div class="row blog-grid">
            <?php
            include 'config.php';
            foreach ($blogItems as $blogItem) {
                echo '<div class="col-sm-4 col-md-6 col-xl-4 blog-item">';
                echo '<a href="' . $blogItem['href'] . '" class="img-wrap"><i class="fas fa-book-open fade-icon"></i></a>';
                echo '<h3><a href="' . $blogItem['href'] . '">' . $blogItem['title'] . '</a></h3>';
                echo '<div class="date-comment">';
                echo '<a href="' . $blogItem['href'] . '" class="time">' . $blogItem['date'] . '</a>';
                echo '</div>';
                echo '<p>' . $blogItem['excerpt'] . '</p>';
                echo '<a href="' . $blogItem['href'] . '" class="link">Read post<i class="fas fa-caret-right"></i></a>';
                echo '</div>';
            }
            ?>
        </div>
        <div class="row pagination">
            <div class="col-12">
                <ul>
                    <li><a class="active" href="blog.php">1</a></li>
                    <li><a href="#">2</a></li>
                    <li>
                        <a href="#"><i class="fas fa-arrow-right arrow"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </article>
</section>