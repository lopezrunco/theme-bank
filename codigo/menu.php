<div id="menu" class="hidden">
    <ul>
        <?php
        include("config.php");
        foreach($navLinks as $label => $link) {
            echo "<li><a href='#$link'>$label</a></li>";
        }
        ?>
    </ul>
    <i id="close" class="fas fa-times"></i>
</div>