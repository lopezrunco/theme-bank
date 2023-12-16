<section class="donate">
    <article class="content-wrap">
        <div class="row title">
            <div class="col-12">
                <h2>Donate to our fantastic project!</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 info">
                <div class="row">
                    <div class="col-12">
                        <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                        <h3>
                            Lorem ipsum dolor sit amet, consecteet molestias
                            blanditiis recusandae.
                        </h3>
                        <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Inventore quidem qui error vero fuga accusantium debitis
                            cumque. Enim error dolor id non quibusdam dolores veniam.
                        </p>
                    </div>
                    <div class="col-12 float-images">
                        <?php
                        include 'config.php';
                        foreach ($donateImages as $image) {
                            echo '<img src="' . $image['src'] . '" alt="' . $image['alt'] . '" />';
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 form">
                <form class="donate-form">
                    <label for="amount" class="amount-label">$</label>
                    <input type="number" name="amount" id="amount" value="$1.00" class="amount-input" placeholder="$1.00" />
                    <ul class="amount-btns">
                        <?php
                        include 'config.php';
                        foreach ($donateAmounts as $amount) {
                            if ($amount === 'Other') {
                                echo '<li><button>' . $amount . '</button></li>';
                            } else {
                                echo '<li><button>$' . $amount . '</button></li>';
                            }
                        }
                        ?>
                    </ul>
                    <legend>Personal info</legend>
                    <div class="name-group">
                        <label for="name">First name *</label>
                        <input type="text" name="name" id="name" placeholder="First name" required />
                    </div>
                    <div class="last-name-group">
                        <label for="last-name">Last name *</label>
                        <input type="text" name="last-name" id="last-name" placeholder="Last name" required />
                    </div>
                    <div class="email-group">
                        <label for="email">Email Address *</label>
                        <input type="email" name="email" id="email" placeholder="Email Address" required />
                    </div>
                    <div class="phone-group">
                        <label for="phone">Phone number</label>
                        <input type="tel" name="phone" id="phone" placeholder="Phone number" />
                    </div>
                    <input type="checkbox" name="anonymus" id="anonymus" />
                    <label for="anonymus">Make anonymus donation</label>
                    <input type="submit" value="Donate" />
                </form>
            </div>
        </div>
    </article>
</section>