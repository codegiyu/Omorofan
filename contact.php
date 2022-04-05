<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contactstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
    </style>
    <title>Contact Us - Omorofan EMT Nig Ltd</title>
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
                    <li class="top-links"><a href="about.php">ABOUT</a></li>
                    <li class="top-links"><a href="contact.php" class="contact-btn hidden-btn">CONTACT US</a></li>
                </ul>
            </div>
            <a href="contact.php" class="contact-btn hidden-btn2">CONTACT US</a>
        </nav>
    </section>
    <section class="container" id="banner-section">
        <div class="jumbotron" id="intro-header">
            <h2 id="banner-heading">Contact Us</h2>
        </div>
    </section>
    <section class="container-fluid main-content">
        <div class="main-content-container">
            <div class="left-block">
                <form action="contactformprocess.php" method="post">
                    <h1>Contact Us</h1>
                    <p>We'll respond as soon as possible.</p>
                    <input type="text" class="longinput" name="name" placeholder="Name" required>
                    <input type="number" class="shortinput-left" name="phone" placeholder="Phone Number" required>
                    <input type="email" name="email" id="" class="shortinput-right" placeholder="Email" required>
                    <input type="text" class="longinput" name="subject" placeholder="Subject" required>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Your message here..." required></textarea>
                    <input type="submit" class="submit-btn" name="send" value="Send Message">
                </form>
            </div>
            <div class="right-block">
                <div class="info-box">
                    <div class="info-img">
                        <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                    </div>
                    <div class="info-content">
                        <h1>HEAD OFFICE</h1>
                        <p>10b Woji Road, Woji, Port-Harcourt, Rivers State.</p>
                    </div>
                </div>
                <div class="info-box">
                    <div class="info-img">
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                    </div>
                    <div class="info-content">
                        <h1>OFFICE HOURS</h1>
                        <p>Monday - Friday</p>
                        <p>8:30am - 4:00pm</p>
                    </div>
                </div>
                <div class="info-box">
                    <div class="info-img">
                        <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                    </div>
                    <div class="info-content">
                        <h1>PHONE</h1>
                        <a href="https://wa.me/message/JZGT2Z5EKES2N1">08171249996</a><span><i class="fa fa-whatsapp" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="info-box">
                    <div class="info-img">
                        <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                    </div>
                    <div class="info-content">
                        <h1>EMAIL</h1>
                        <p>info@omorofan.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid map">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15155.35973554528!2d7.053823701658492!3d4.825412553570319!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7cbc0614a5abe34f!2sOmorofan%20EMT%20Nig%20Ltd!5e0!3m2!1sen!2sng!4v1621235141675!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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