<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aboutstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
    </style>
    <title>About Us - Omorofan EMT Nig Ltd</title>
</head>
<body>
    <a id="back-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <section class="container-fluid" id="nav-section">
        <nav class="navbar" id="nav-container">
            <a href="index.php" id="logo_link"><img src="img/Logo1.PNG" alt="logo" class="navbar-brand" id="nav-logo"></a>
            <input type="checkbox" id="check" class="checkbtn">
            <label for="check"><img src="img/bars.png" class="bars" width="30px" alt=""></label>
            <div id="nav-links">
                <ul>
                    <li class="top-links"><a href="index.php">HOME</a></li>
                    <li class="top-links"><a href="services.php">SERVICES</a></li>
                    <li class="top-links"><a href="team.php">TEAM</a></li>
                    <li class="top-links"><a href="projects.php">PROJECTS</a></li>
                    <li class="top-links active-link"><a href="about.php" class="active-page">ABOUT</a></li>
                    <li class="top-links"><a href="contact.php" class="contact-btn hidden-btn">CONTACT US</a></li>
                </ul>
            </div>
            <a href="contact.php" class="contact-btn hidden-btn2">CONTACT US</a>
        </nav>
    </section>
    <section class="container" id="banner-section">
        <div class="jumbotron" id="intro-header">
            <h2 id="banner-heading">About Us</h2>
        </div>
    </section>
    <section class="container-fluid main-content">
        <div class="container main-content-container">
            <div class="nav-block">
                <ul>
                    <li class="nav-block-header">
                        <i class="fa fa-bars" aria-hidden="true"></i><a href="about.php"> About Omorofan</a>
                    </li>
                    <li>
                        <a href="home/our_mission.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Mission</a>
                    </li>
                    <li>
                        <a href="home/our_vision.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Vision</a>
                    </li>
                    <li>
                        <a href="home/core_values.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Core Values</a>
                    </li>
                    <li>
                        <a href="home/our_partners.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Our Partners</a>
                    </li>
                </ul>
            </div>
            <div class="main-block">
                <div class="content">
                    <div class="content-header">
                        <h1><i class="fa fa-star" aria-hidden="true"></i> ABOUT US</h1>
                    </div>
                    
                    <article>
                        <p>
                            OMOROFAN EMT NIG LTD is an indigenous engineering and maintenance servicing company, providing operational maintenance and engineering services to the oil and gas, healthcare and other industrial sectors. 
                        </p>
                        <p>
                            We are focused to deliver engineering and maintenance services that meet international industry standards, across industrial sectors with a reputation for precision, quality and reliability. 
                        </p>
                        <p>
                            We deliver flawless maintenance to clients in challenging conditions within the Nigerian oil and gas, and other industrial sectors. 
                        </p>
                        <p>
                            We are committed to creating value by understanding our clients’ needs and working with them to optimize and achieve their set targets.
                        </p>
                        <p>
                            Our growth has been driven by our professional attitude and experience, first class engineering applications and by our ability to meet our clients’ needs within costs, time and quality constraint.
                        </p>
                        <p>
                            Our team is made up of experienced and well-trained technical personnel, that provides guaranty to ensure consistent and excellent results of success in service delivery at all times.
                        </p>
                        <p>
                            OMOROFAN EMT NIG LTD provides engineering and maintenance, technical support and consultancy services in the oil and gas, healthcare and other industrial sectors.
                        </p>
                        <p>
                            We undertake civil engineering/construction, dredging, reclamation and shoreline protection.
                        </p>
                        <p>
                            We do procurement, leasing and supply of parts, tools and equipment including PPEs. 
                        </p>
                        <p>
                            Our persistent commitment to excellence, have maintained optimum support services to our clients. 
                        </p>
                    </article>
                    <!-- <div class="about-img-wrap">
                        <div class="about-img"></div>
                    </div> -->
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