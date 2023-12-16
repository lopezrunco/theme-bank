<?php include("./components/head.php"); ?>

<body class="course-item">
  <div id="main-wrapper">
    <?php include("./components/header.php"); ?>

    <main id="main" class="main">
      <section class="course-item">
        <article class="content-wrap">
          <div class="row title">
            <div class="col-xl-9">
              <h2>Lorem ipsum dolor sit amet consectetur.</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
                ducimus doloremque distinctio, tempore nulla.
              </p>
            </div>
            <div class="col-xl-3 subject">
              <a href="course-item.php" class="btn btn-primary"><i class="fab fa-leanpub"></i>Subject: Ecommerce</a>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-8 main-content">
              <div class="video">
                <video width="100%" height="auto" controls poster="img/blog-3.jpg">
                  <source src="video/video.mp4" type="video/mp4" />
                  <source src="video/video.ogg" type="video/ogg" />
                  Your browser does not support the video tag.
                </video>
              </div>
              <div class="row course-detail">
                <div class="col-md-6 avatar">
                  <div class="row">
                    <div class="col-3">
                      <a href="instructor-profile.php">
                        <div class="avatar-img">
                          <!-- Img in css -->
                        </div>
                      </a>
                    </div>
                    <div class="col-9 instructor">
                      <a href="instructor-profile.php"><span>Instructor: </span>Tiffany Doll</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 align-right">
                  <a href="contact.php" class="btn btn-secondary">I want to learn! <i class="fab fa-windows"></i></a>
                </div>
                <div class="col-md-6 details-list">
                  <ul>
                    <li>
                      <i class="fas fa-calendar-alt"></i><b>Duration:</b> 300
                      days
                    </li>
                    <li>
                      <i class="far fa-clock"></i><b>Hours:</b> 18:00 to 20:00
                    </li>
                    <li>
                      <i class="fab fa-leanpub"></i><b>Subject:</b> Ecommerce
                    </li>
                    <li>
                      <i class="fas fa-globe"></i><b>Language:</b> Spanish
                    </li>
                  </ul>
                </div>
                <div class="col-md-6 details-list">
                  <ul>
                    <li>
                      <i class="fas fa-closed-captioning"></i><b>Subtitles:</b> Yes
                    </li>
                    <li>
                      <i class="fas fa-signal"></i><b>Level:</b> Advanced
                    </li>
                    <li>
                      <i class="fas fa-laptop"></i><b>Plataform:</b> Online
                    </li>
                    <li>
                      <i class="fas fa-location-arrow"></i><b>Place:</b> Montevideo, Uruguay
                    </li>
                  </ul>
                </div>
                <div class="col-12 learn-list">
                  <div class="row title">
                    <div class="col-12">
                      <h2>Asignatures</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <ul>
                        <?php
                        $items = [
                          "Lorem ipsum dolor sit amet.",
                          "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, illum?",
                          "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore recusandae fuga distinctio similique aliquid quae.",
                          "Lorem ipsum dolor sit amet consectetur."
                        ];
                        foreach ($items as $item) {
                          echo '<li>';
                          echo '<i class="fas fa-check"></i>';
                          echo '<p>' . $item . '</p>';
                          echo '</li>';
                        }
                        ?>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul>
                        <?php
                        $items = [
                          "Lorem ipsum dolor sit amet.",
                          "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, illum?",
                          "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore recusandae fuga distinctio similique aliquid quae.",
                          "Lorem ipsum dolor sit amet consectetur."
                        ];
                        foreach ($items as $item) {
                          echo '<li>';
                          echo '<i class="fas fa-check"></i>';
                          echo '<p>' . $item . '</p>';
                          echo '</li>';
                        }
                        ?>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-12 course-description">
                  <h2>Description</h2>
                  <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Nulla, nostrum?
                  </p>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Fugiat ipsam labore commodi quisquam at eaque minus quod
                    optio amet. Enim maxime eum non ratione delectus quibusdam
                    eligendi itaque harum ipsam.
                  </p>
                  <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                    Consectetur!
                  </p>
                </div>
                <div class="col-12 graduated-profile">
                  <div class="row title">
                    <div class="col-12">
                      <h2>Graduated profile</h2>
                    </div>
                  </div>
                  <div class="accordion">
                    <div class="accordion-container">
                      <?php
                      $accordionItems = [
                        [
                          'question' => 'Lorem ipsum amet daler del sit?',
                          'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum fuga voluptatem quibusdam delectus asperiores nobis corrupti ducimus totam neque.'
                        ],
                        [
                          'question' => 'Lorem dolor sit amet aller del?',
                          'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum fuga voluptatem quibusdam delectus asperiores nobis corrupti ducimus totam neque.'
                        ],
                        [
                          'question' => 'Lorem ipsum dolor?',
                          'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum fuga voluptatem quibusdam delectus asperiores nobis corrupti ducimus totam neque.'
                        ],
                        [
                          'question' => 'Lorem dolor am ipsum dolor?',
                          'answer' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum fuga voluptatem quibusdam delectus asperiores nobis corrupti ducimus totam neque.'
                        ]
                      ];

                      foreach ($accordionItems as $item) {
                        echo '<div class="accordion-item">';
                        echo '<div class="title">';
                        echo '<h3>' . $item['question'] . '</h3>';
                        echo '</div>';
                        echo '<div class="content">';
                        echo '<p>' . $item['answer'] . '</p>';
                        echo '</div>';
                        echo '</div>';
                      }
                      ?>
                    </div>
                  </div>
                </div>
                <div class="col-12 take-course-btn">
                  <a href="contact.php" class="btn btn-secondary">Take this course <i class="fab fa-windows"></i></a>
                </div>
                <div class="col-12">
                  <div class="social">
                    <?php
                    include 'config.php';
                    foreach ($socialMediaLinks as $link) {
                      echo '<a href="' . $link['href'] . '"><i class="' . $link['iconClass'] . '"></i></a>';
                    }
                    ?>
                  </div>
                  <?php include './components/article-nav.php'; ?>
                </div>
              </div>
            </div>

            <div class="col-xl-4 side-content">
              <?php include './components/ads.php'; ?>
              <?php include './components/recent-posts.php'; ?>
            </div>
          </div>
        </article>
      </section>
      <?php include './components/bottom.php'; ?>
    </main>
    <?php include './components/footer.php'; ?>

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
    <script src="js/accordion.js"></script>
    <script src="js/menu.js"></script>
  </div>
</body>

</html>