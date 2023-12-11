<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Desarrollador web Full stack" />
    <!--[if lt IE 9]>
         <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
         <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Reset CSS (Using Normalize CSS (https://necolas.github.io/normalize.css/)) -->
    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <!-- Media queries CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Favicon -->
    <link href="images/favicon.png" rel="shortcut icon" />
    <title>Codigo</title>
</head>

<body>
    <div id="main-wrapper">
        <?php include("header.php"); ?>
        <main role="main">
            <?php include("intro.php"); ?>
            <?php include("services.php"); ?>
            <?php include("work.php"); ?>
            <?php include("about.php"); ?>
            <?php include("contact.php"); ?>
        </main>
    </div>

    <?php include("menu.php"); ?>

    <!-- Scroll to acnhor link JS -->
    <script src="https://code.jquery.com/jquery-2.1.1.js"></script>
    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>

    <!-- Mobile menu JS -->
    <script>
        $("#btn-menu").click(function() {
            $("#menu").slideToggle();
        });

        $("#close").click(function() {
            $("#menu").slideToggle();
        });

        $("#menu a").click(function() {
            $("#menu").slideToggle();
        });
    </script>

</body>

</html>