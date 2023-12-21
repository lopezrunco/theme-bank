<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DarkDev Fullstack Developer</title>
  <!-- SEO -->
  <meta name="description" content="DarkDev Fullstack Developer (MongoDB, Express, React, Node)" />
  <link rel="canonical" href="https://www.yourweb.com/" />
  <meta property="og:title" content="I'm a MERN Fullstack Developer" />
  <meta property="og:url" content="https://www.yourweb.com/" />
  <meta property="og:image" content="https://www.yourweb.com/img/profile.jpg" />
  <meta property="og:type" content="website" />
  <meta property="og:description" content="DarkDev Fullstack Developer (MongoDB, Express, React, Node)" />
  <meta property="og:locale" content="en_GB" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <?php include "header.php"; ?>
  <main>
    <?php
    include "about.php";
    include "skills.php";
    include "portfolio.php";
    include "experiences.php";
    include "contact.php";
    ?>
  </main>
  <button onclick="topFunction()" id="goToTop" title="Go to top">
    <i class="fas fa-chevron-up"></i>
  </button>

  <!-- Custom JS -->
  <script src="js/general.js"></script>
  <script src="js/responsive-navigation-bar.js"></script>
  <script src="js/skills-progress-bars.js"></script>
  <script src="js/fade-on-scroll.js"></script>
  <script src="js/contact-form.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>