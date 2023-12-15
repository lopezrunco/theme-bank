<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <title>Pruebas FlexBox Grid</title>
  <!-- Fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <!-- FlexboxGrid CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/app.css" />
</head>

<body>
  <div class="main-wrapper">
    <?php include("header.php"); ?>
    <main>
      <div class="content-wrap">
        <?php
        include("main-news.php");
        include("sec-news.php");
        include("social.php");
        include("ads.php");
        include("cols.php");
        include("agro.php");
        ?>
      </div>
    </main>
    <?php include("footer.php"); ?>
  </div>
  <script src="js/menu.js"></script>
</body>

</html>