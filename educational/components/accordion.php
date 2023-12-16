<section class="accordion">
    <article class="accordion-container">
        <div class="row title">
            <div class="col-12">
                <h4>Lorem ipsum dolor sit acing.</h4>
                <h3>Do you have a question?</h3>
            </div>
        </div>
        <?php
        include 'config.php';
        foreach ($accordionItems as $item) {
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
    </article>
</section>