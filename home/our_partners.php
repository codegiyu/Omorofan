<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/aboutstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
    </style>
    <title>Our Partners - Omorofan EMT Nig Ltd</title>
</head>
<body>
    <a id="back-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <section class=" container-fluid" id="nav-section">
        <nav class="navbar" id="nav-container">
            <a href="../index.php" id="logo_link"><img src="../img/Logo1.PNG" alt="logo" class="navbar-brand" id="nav-logo"></a>
            <input type="checkbox" id="check" class="checkbtn">
            <label for="check"><img src="../img/bars.png" class="bars" width="30px" alt=""></label>
            <div id="nav-links">
                <ul>
                    <li class="top-links"><a href="../index.php">HOME</a></li>
                    <li class="top-links"><a href="../services.php">SERVICES</a></li>
                    <li class="top-links"><a href="../team.php">TEAM</a></li>
                    <li class="top-links"><a href="../projects.php">PROJECTS</a></li>
                    <li class="top-links"><a href="../about.php">ABOUT</a></li>
                    <li class="top-links"><a href="../contact.php" class="contact-btn hidden-btn">CONTACT US</a></li>
                </ul>
            </div>
            <a href="../contact.php" class="contact-btn hidden-btn2">CONTACT US</a>
        </nav>
    </section>
    <section class="container" id="banner-section">
        <div class="jumbotron" id="intro-header">
            <h2 id="banner-heading">Our Partners</h2>
        </div>
    </section>
    <section class="container-fluid main-content">
        <div class="container main-content-container">
            <div class="nav-block">
                <ul>
                    <li class="nav-block-header">
                        <i class="fa fa-bars" aria-hidden="true"></i><a href="../about.php"> About Omorofan</a>
                    </li>
                    <li>
                        <a href="our_mission.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Mission</a>
                    </li>
                    <li>
                        <a href="our_vision.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Vision</a>
                    </li>
                    <li>
                        <a href="core_values.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Core Values</a>
                    </li>
                    <li class="nav-block-active">
                        <a href="our_partners.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Partners</a>
                    </li>
                </ul>
            </div>
            <div class="main-block">
                <div class="content">
                    <div class="content-header">
                        <h1><i class="fa fa-caret-right" aria-hidden="true"></i> Our Partners</h1>
                    </div>
                    <article>
                        <ul class="content-list">
                            <li>
                                <p>
                                    <strong>Julong Engineering and Construction Company Limited</strong><br>5 Stadium Rumuola Link Road, Port Harcourt, Rivers State.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>Lawson Group Engineering Services Ltd.</strong><br>Km17 Aba/Port Harcourt Expressway, Port Harcourt, Rivers State.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>Baygho Energy Services Ltd.</strong><br>Port Harcourt, Rivers State.
                                </p>
                            </li>
                        </ul>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section>
        <?php include("cta_and_footer.php") ?>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        var btn = $('#back-to-top');

        $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
        });

        btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
        });
    </script>
</body>
</html>