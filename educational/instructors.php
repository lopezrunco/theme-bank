<?php include("./components/head.php"); ?>

<body class="instructors">
  <div id="main-wrapper">
    <?php include("./components/header.php"); ?>
    <main id="main" class="main">
      <?php
      include("./components/instructors-grid.php");
      include("./components/bottom.php");
      ?>
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
    <script src="js/accordion.js"></script>
    <script src="js/menu.js"></script>
  </div>
</body>

</html>