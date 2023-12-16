<section class="instructors">
    <article class="content-wrap">
        <div class="row title">
            <div class="col">
                <h2>Our instructors team</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8">
                <div class="row instructors-grid">
                    <?php
                    include 'config.php';
                    foreach ($instructorsGrid as $instructor) {
                        echo '<div class="col-6 col-md-4">';
                        echo '<a href="' . $instructor['profile_link'] . '">';
                        echo '<div class="img-wrap"><!-- Img in css --></div>';
                        echo '<h3>' . $instructor['name'] . '</h3>';
                        echo '<span>' . $instructor['position'] . '</span>';
                        echo '</a>';
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="pagination">
                    <ul>
                        <li><a class="active" href="instructors.php">1</a></li>
                        <li><a href="instructors.php">2</a></li>
                        <li>
                            <a href="instructors.php"><i class="fas fa-arrow-right arrow"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 aside-content">
                <h4>Lorem ipsum dolor sit.</h4>
                <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Voluptates nesciunt officiis quo non, atque quidem natus
                    deserunt ullam itaque reiciendis voluptas quisquam quia
                    inventore alias enim dolorem ratione laborum laudantium!
                </p>
                <div class="accordion">
                    <div class="accordion-container">
                        <?php
                        include 'config.php';
                        foreach ($instructorQuestions as $item) {
                            echo '<div class="accordion-item">';
                            echo '<div class="title">';
                            echo '<h3>' . $item['title'] . '</h3>';
                            echo '</div>';
                            echo '<div class="content">';
                            echo '<p>' . $item['content'] . '</p>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
                <!-- Form -->
                <form action="" class="instructor-req-form">
                    <input type="text" name="Name" id="name" placeholder="Name" />
                    <input type="email" name="Email" id="email" placeholder="Email" />
                    <input type="tel" name="Phone" id="phone" placeholder="Phone number" />
                    <textarea name="message" id="message" cols="10" rows="10" placeholder="Messsage"></textarea>
                    <input type="checkbox" name="allow" id="allow" />
                    <label for="allow">I allow to process my personal data</label>
                    <input type="button" value="Send" class="btn btn-secondary" />
                </form>
            </div>
        </div>
    </article>
</section>