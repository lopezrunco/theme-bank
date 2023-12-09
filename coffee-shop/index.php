<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Te presentamos nuestra nueva línea de Cafés Especiales. Affogato, Vitrilos de café y Freschetto." />
    <!--[if lt IE 9]>
         <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
         <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.5.0/css/all.min.css" integrity="sha512-QfDd74mlg8afgSqm3Vq2Q65e9b3xMhJB4GZ9OcHDVy1hZ6pqBJPWWnMsKDXM7NINoKqJANNGBuVRIpIJ5dogfA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Reset CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- My CSS -->
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link href="img/favicon.png" rel="shortcut icon" />
    <title>Coffee Shop</title>
</head>

<body>
    <div id="main-wrapper">

        <?php include("header.php"); ?>

        <main role="main">
            <?php include("about.php"); ?>
            <?php include("promo.php"); ?>
        </main>

        <?php include("footer.php"); ?>

        <a href="#" class="scroll_To_Top" title="Ir arriba">
            <i class="fas fa-3x fa-caret-square-up"></i>
        </a>
    </div>

    <div id="menu" class="hidden">
        <ul>
            <?php
            include("config.php");
            foreach ($navLinks as $label => $link) {
                echo "<li><a href='#$link'>$label</a></li>";
            }
            ?>
        </ul>
        <i id="close" class="fas fa-times"></i>
    </div>

    <!-- Scroll to top JQuery -->
    <script src="https://code.jquery.com/jquery-2.1.1.js"></script>

    <script>
        $(document).ready(function() {

            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('.scroll_To_Top').fadeIn();
                } else {
                    $('.scroll_To_Top').fadeOut();
                }
            });

            $('.scroll_To_Top').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 700);
                return false;
            });

        });
    </script>

    <!-- Scroll to anchor link JS -->
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