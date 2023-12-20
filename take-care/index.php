<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
  <title>Take Care</title>
  <!-- Font awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <?php include "header.php"; ?>
  <div id="main-wrapper">
    <main>
      <?php
      include "slider.php";
      include "services.php";
      include "products.php";
      include "featured.php";
      include "new.php";
      include "about.php";
      include "contact.php";
      ?>
    </main>
    <?php include "footer.php"; ?>

    <!-- Go to top -->
    <a href="#" class="go-to-top">
      <i class="fas fa-chevron-up"></i>
    </a>
    <!-- Whatsapp -->
    <a href="https://api.whatsapp.com/send?phone=+598000000" target="_blank" class="wapp-link">
      <i class="fab fa-whatsapp"></i>
    </a>
  </div>

  <!-- Custom JS -->
  <script src="js/menu.js"></script>
  <script src="js/image-slider.js"></script>
</body>

</html>