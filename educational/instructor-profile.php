<?php include("./components/head.php"); ?>

<body class="instructor-profile">
  <div id="main-wrapper">
    <?php include("./components/header.php"); ?>
    <main id="main" class="main">
      <section class="instructor-profile">
        <article class="content-wrap">
          <div class="row title">
            <div class="col-12">
              <h2>Johan Dowson</h2>
              <h4>lorem ipsum dolor sit</h4>
            </div>
          </div>
          <div class="row profile-content">
            <div class="col-md-4">
              <div class="img-wrap">
                <!-- Image in css -->
              </div>
            </div>
            <div class="col-md-8 description">
              <h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Dolorum, modi?
              </h3>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Architecto, eos nihil temporibus omnis iusto aliquam, quos
                iste doloribus ipsam eveniet. <br />
                Deleniti hic eligendi labore reprehenderit sint, voluptas
                accusamus reiciendis ipsa vero? <br /><br />
                Facere necese laborum, veniam nesciunt ab saepe voluptas quasi
                quis aut eaque. <br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis
                sint commodi sit dolores numquam possimus veniam unde maxime
                quos et! <br /><br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod,
                dolores?
              </p>
              <div class="row contact-info">
                <div class="col-md-1">
                  <i class="fas fa-wifi"></i>
                </div>
                <div class="col-md-11">
                  <h4>www.dakotaline.com</h4>
                  <p>business website</p>
                </div>
                <div class="col-md-1">
                  <i class="fas fa-envelope-open-text"></i>
                </div>
                <div class="col-md-11">
                  <h4>info@dlweb.com</h4>
                  <p>institute email</p>
                </div>
                <div class="col-12">
                  <ul class="social">
                    <?php
                    $socialMediaLinks = [
                      [
                        'url' => 'https://www.facebook.com',
                        'iconClass' => 'fab fa-facebook',
                      ],
                      [
                        'url' => 'https://www.twitter.com',
                        'iconClass' => 'fab fa-twitter',
                      ],
                      [
                        'url' => 'https://www.youtube.com',
                        'iconClass' => 'fab fa-youtube',
                      ]
                    ];
                    foreach ($socialMediaLinks as $link) {
                      echo '<li>';
                      echo '<a href="' . $link['url'] . '">';
                      echo '<i class="' . $link['iconClass'] . '"></i>';
                      echo '</a>';
                      echo '</li>';
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </article>
      </section>
      <?php include("./components/bottom.php"); ?>
    </main>
    <?php include("./components/footer.php"); ?>

    <!-- Scroll to top ---------------------------------------------------------------------------------->
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