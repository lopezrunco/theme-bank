<?php include "./components/head.php"; ?>

<body>
    <?php include "./components/header.php"; ?>
    <div id="main-wrapper">
        <main class="contact">
            <div class="content-wrap">
                <div class="map-form">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8736.99531872568!2d-56.16046336374438!3d-34.88949568283834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959f80ffc63bf7d3%3A0x6b321b2e355bec99!2sMontevideo%2C%20Departamento%20de%20Montevideo!5e0!3m2!1ses-419!2suy!4v1620175260253!5m2!1ses-419!2suy" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="form">
                        <hr>
                        <h2>Contact us now!</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum ab magni unde culpa accusantium dolorem cumque aliquam pariatur hic id.</p>
                        <form action="">
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Message (required)" required></textarea>
                            <input type="text" name="name" id="name" placeholder="Name (required)" required>
                            <input type="email" name="email" id="email" placeholder="Email (required)" required>
                            <input type="text" name="company" id="company" placeholder="Company">
                            <input type="submit" value="Send message" class="but but-black">
                        </form>
                    </div>
                </div>
                <?php include "./components/directions.php"; ?>
            </div>
        </main>
        <?php include "./components/footer.php"; ?>