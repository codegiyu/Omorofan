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
    <title>Core Values - Omorofan EMT Nig Ltd</title>
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
            <h2 id="banner-heading">Our Core Values</h2>
        </div>
    </section>
    <section class="container-fluid main-content">
        <div class="main-content-container">
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
                    <li class="nav-block-active">
                        <a href="core_values.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Core Values</a>
                    </li>
                    <li>
                        <a href="our_partners.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Partners</a>
                    </li>
                </ul>
            </div>
            <div class="main-block">
                <div class="content">
                    <div class="content-header">
                        <h1><i class="fa fa-caret-right" aria-hidden="true"></i> Our Core Values</h1>
                    </div>
                    <article>
                        <ul class="content-list">
                            <li>
                                <p>
                                    <strong>Integrity –</strong> We deal with our clients and our colleagues in a fair and ethical manner; gaining trust through our actions. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>Knowledge –</strong> We place value on our ability to develop leaders and the need to continually improve our collective technical expertise to meet the needs of our sophisticated and growing client base. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>Team Work –</strong> Everyone Willingly Working Together provides the foundation for our collective growth and development.
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