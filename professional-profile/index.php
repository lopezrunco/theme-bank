<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Te presentamos nuestra nueva línea de Cafés Especiales. Affogato, Vitrilos de café y Freschetto." />
    <!--[if lt IE 9]>
         <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
         <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Reset CSS (Using Normalize CSS (https://necolas.github.io/normalize.css/)) -->
    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <link href="img/favicon.png" rel="shortcut icon" />
    <title>Professional profile</title>
</head>

<body>
    <div id="main-wrapper">
        <div class="general-bg">
            <div class="content-wrap">
                <div class="row">
                    <div class="col-lg-3 header">
                        <?php include "header.php"; ?>
                    </div>
                    <div class="col-lg-9 body">
                        <?php
                        include "summary.php";
                        include "services.php";
                        include "skills.php";
                        include "portfolio.php";
                        include "experience.php";
                        include "participations.php";
                        include "contact.php";
                        ?>
                    </div>
                    <?php include "footer.php"; ?>
                </div>
            </div>
        </div>

        <!-- Scroll to top -->
        <a href="#" class="scroll_To_Top" title="Go to Top">
            <i class="fas fa-3x fa-angle-up"></i>
        </a>
    </div>

    <!-- Scroll to top JS -->
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
                }, 100);
                return false;
            });

        });
    </script>
</body>

</html>