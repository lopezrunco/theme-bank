<section id="contact" class="contact">
    <article class="content-wrap">
        <div class="contact-info">
            <div class="title">
                <h3>Contáctate con<span class="primary"> nosotros</span></h3>
                <p>Ante cualquier duda o consulta, no dudes en contactarte con nosotros.</p>
            </div>
            <div class="grid">
                <?php
                include 'config.php';
                foreach ($contactInfo as $contact) {
                    echo '<div class="box">';
                    echo '<div class="icon-container">';
                    echo '<i class="' . $contact['iconClass'] . '"></i>';
                    echo '</div>';
                    echo '<h4>' . $contact['title'] . '</h4>';
                    echo $contact['content'];
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </article>
    <article class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.1428936051684!2d-56.33414552364491!3d-33.727124698538304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a12c2b14fd3eab%3A0x35ab194bd2916045!2sSarand%C3%AD%20Grande%2C%20Departamento%20de%20Florida!5e0!3m2!1ses-419!2suy!4v1621646966900!5m2!1ses-419!2suy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </article>
</section>