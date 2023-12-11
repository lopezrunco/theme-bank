<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Describe el contenido de nuestra página. Los buscadores recogen esta información y clasifican la página en función del contenido." />
    <!--[if lt IE 9]>
         <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
         <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <!-- Reset CSS (Using Normalize CSS (https://necolas.github.io/normalize.css/)) -->
    <link rel="stylesheet" href="css/normalize.css" type="text/css" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Google fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,600,700" rel="stylesheet">
    <!-- my CSS -->
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title>Corporate web</title>
</head>

<body>
    <div id="main-wrapper">
        <header>
            <h1 class="page-title">Corporate</h1>
            <?php include("top.php") ?>
            <?php include("logo-info.php") ?>
            <?php include("nav.php") ?>
            <?php include("header-img.php") ?>
            <?php include("logo-mobile-nav.php") ?>
        </header>
        <main role="main">
            <?php include("services.php") ?>
            <?php include("why-us.php") ?>
            <?php include("members.php") ?>
            <?php include("projects.php") ?>
            <?php include("counter.php") ?>
            <?php include("testimonials.php") ?>
            <?php include("recent-posts.php") ?>
            <?php include("contact.php") ?>
            <?php include("map.php") ?>
        </main>
        <?php include("footer.php") ?>
        <a href="#" class="scroll_To_Top" title="Go to top">
            <i class="fas fa-3x fa fa-angle-up"></i>
        </a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

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

    <!-- Mobile menu JQuery -->
    <script>
        $("#btn-menu").click(function() {
            $("#menu").slideToggle();
        });
    </script>

</body>

</html>