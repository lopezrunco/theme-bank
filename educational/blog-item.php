<?php include("./components/head.php"); ?>

<body class="blog-item">
  <div id="main-wrapper">
    <?php include("./components/header.php"); ?>

    <main id="main" class="main">
      <section class="blog-item">
        <article class="content-wrap">
          <div class="row">
            <div class="col-12">
              <div class="row title">
                <div class="col-xl-9">
                  <h2>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit
                    samer dell.
                  </h2>
                </div>
                <div class="col-xl-3">
                  <ul class="time">
                    <li><i class="fas fa-calendar-alt"></i></li>
                    <li>9 april 2021</li>
                    <li><i class="far fa-clock"></i></li>
                    <li>12:00</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-8 main-content">
              <div class="main-article-img">
                <!-- Img in css -->
              </div>
              <h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </h3>
              <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Porro laboriosam quod qui eveniet maiores architecto sapiente
                iure sunt, odio cum.
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                Odit, iusto.
              </p>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Repudiandae dolore fuga reiciendis dolores sequi libero culpa
                eligendi debitis, deserunt provident ab unde. Deleniti error
                assumenda nobis!
              </p>
              <div class="secondary-article-img">
                <!-- Img in css -->
              </div>
              <h3>Lorem ipsum dolor sit amet consectetur.</h3>
              <ul class="article-list">
                <li>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Minus, sed! Lorem ipsum dolor sit amet consectetur.
                </li>
                <li>Lorem, ipsum dolor sit amet.</li>
                <li>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                </li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicinus.</li>
              </ul>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Suscipit qui voluptatibus obcaecati? Ipsum exercitationem
                mollitia vero voluptates esse earum modi. Maxime, doloribus!
                Amet quod deserunt, veritatis eius nemo officiis eum, quo enim
                distinctio accusamus sequi nisi repudiandae cum consequuntur
                repellendus.
              </p>

              <?php
              include('./components/article-social.php');
              include('./components/article-nav.php');
              include('./components/reply-form.php');
              ?>
            </div>

            <div class="col-xl-4 side-content">
              <?php
              include('./components/ads.php');
              include('./components/recent-posts.php');
              ?>
            </div>
          </div>
        </article>
      </section>
      <?php include("./components/bottom.php"); ?>
    </main>
    <?php include("./components/footer.php"); ?>

    <a href="#" class="scroll_To_Top" title="Go to top">
      <i class="fas fa-2x fa-chevron-up"></i>
    </a>

    <!-- Scroll to top -->
    <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
    <script>
      $(document).ready(function() {
        $(window).scroll(function() {
          if ($(this).scrollTop() > 100) {
            $(".scroll_To_Top").fadeIn();
          } else {
            $(".scroll_To_Top").fadeOut();
          }
        });
        $(".scroll_To_Top").click(function() {
          $("html, body").animate({
              scrollTop: 0,
            },
            700
          );
          return false;
        });
      });
    </script>
    <!-- Custom JS -->
    <script src="js/menu.js"></script>
  </div>
</body>

</html>