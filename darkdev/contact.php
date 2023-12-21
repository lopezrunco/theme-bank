<section id="contact" class="contact">
    <article class="container">
        <div class="row section-title">
            <div class="col">
                <h2>Contact me</h2>
                <div class="separator"></div>
            </div>
        </div>

        <div class="row contact-form">
            <div class="col">
                <form id="form" action="https://formspree.io/yourformspreeID" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Your name: </label>
                            <input type="text" name="name" />
                        </div>
                        <div class="col-md-6">
                            <label for="email">Your email: </label>
                            <input type="email" name="email" />
                        </div>
                        <div class="col-12">
                            <label>Your message: </label>
                            <textarea rows="5" name="message"></textarea>

                            <div class="row justify-content-center align-items-center">
                                <div class="col-md-6">
                                    <button type="submit" class="button">
                                        Send Message
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <div class="sended-msj-alert" id="sended-msj-alert">
                                        <i class="fas fa-check"></i>
                                        <p>Message sent successfully!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
    <?php include "footer.php" ?>
</section>