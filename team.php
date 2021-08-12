<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/teamstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
    </style>
    <script src="js/team3.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>Team - Omorofan EMT Nig Ltd</title>
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
                    <li class="top-links active-link"><a href="team.php" class="active-page">TEAM</a></li>
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
            <h2 id="banner-heading">Team</h2>
        </div>
    </section>
    <section class="main-content container-fluid">
        <div class="container">
            <div class="motto_wrap">
                <label for="" class="labels">OUR PEOPLE</label>
                <h1 class="">Our world-class team</h1>
            </div>
            <div class="team-container">
                <div class="team-block">
                    <div class="team-card" id="one" onclick="flipOne()">
                        <div class="front-facing" id="one-front">
                            
                        </div>
                        <div class="back-facing" id="one-back">
                            <p>Kennedy Orupabo has more than 25 years experience across industrial sectors in maintenance with both national and overseas training, having worked in the leading manufacturing and Service companies in Nigeria. He was a Maintenance Group Supervisor in Michelin Nigeria Limited and a General in Assembly, Maintenance and overhaul, Field Service Specialist (RCI) and Elecro/Mechanical team lead in Baker Hughes Nigeria etc.</p>
                        </div>
                    </div>
                    <figcaption>
                        <p>Kennedy Orupabo</p>
                        <h6>Managing Director</h6>
                    </figcaption>
                </div>
                <div class="team-block">
                    <div class="team-card" id="two" onclick="flipTwo()">
                        <div class="front-facing" id="two-front">
                            
                        </div>
                        <div class="back-facing" id="two-back">
                            <p>Anthony Omogbe has vast experience in assembly, maintenance and overhaul of electro-mechanical equipment with over 10years in the Oil and Gas Industry. Having worked with Baker Hughes, he has obtained professional skilled training at various level both international and in-country.</p>
                        </div>
                    </div>
                    <figcaption>
                        <p>Anthony Omogbe</p>
                        <h6>Admin / Financial Director</h6>
                    </figcaption>
                </div>
                <!-- <div class="team-block">
                    <div class="team-card" id="three" onclick="flipThree()">
                        <div class="front-facing" id="three-front">
                            
                        </div>
                        <div class="back-facing" id="three-back">
                            <p>Christopher Anokwu has over ten years professional experience as General Maintenance Engineer with Baker Hughes, having received several levels of skill and certification trainings both locally and internationally.</p>
                        </div>
                    </div>
                    <figcaption>
                        <p>Christopher Anokwu</p>
                        <h6>Consulting Engineer</h6>
                    </figcaption>
                </div>
                <div class="team-block">
                    <div class="team-card" id="four" onclick="flipFour()">
                        <div class="front-facing" id="four-front">
                            
                        </div>
                        <div class="back-facing" id="four-back">
                            <p>Holds a Bachelor’s degree in Electrical Engineering from the University of Nigeria Nsukka, Enugu State.<br>He successfully worked in the Oil and Gas Industry as Senior Assembly, Maintenance and Overhauling Engineer with Baker Hughes one of the leading Oil servicing companies in the world, and has over eight years’ experience.</p>
                        </div>
                    </div>
                    <figcaption>
                        <p>Ofoegbu John</p>
                        <h6>Consulting Engineer</h6>
                    </figcaption>
                </div> -->
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