<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/qhsestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
    </style>
    <title>HSE Policy - Omorofan EMT Nig Ltd</title>
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
            <h2 id="banner-heading">HSE Policy</h2>
        </div>
    </section>
    <section class="container-fluid main-content">
        <div class="main-content-container">
            <div class="nav-block">
                <ul>
                    <li class="nav-block-header">
                        <i class="fa fa-bars" aria-hidden="true"></i><a href="QHSE_policy.php"> QHSE Policy</a>
                    </li>
                    <li class="nav-block-active">
                        <a href="HSE_policy.php"><i class="fa fa-caret-right" aria-hidden="true"></i> HSE Policy</a>
                    </li>
                    <li>
                        <a href="quality_policy.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Quality Policy</a>
                    </li>
                </ul>
            </div>
            <div class="main-block">
                <div class="content">
                    <div class="content-header">
                        <h1><i class="fa fa-caret-right" aria-hidden="true"></i> HSE Policy</h1>
                    </div>
                    <article>
                        <p>
                            Omorofan EMT Ltd is strongly committed to maintaining the highest HSE standards in line with global best practice as we recognize that operations are not only driven by technical competencies.  As such it is our policy to: 
                        </p>
                        <ul class="content-list">
                            <li>
                                <p>
                                    Maintain safe operations in equipment installation activities and provide safe facilities, engineering kits and installation tools that are designed for engineering safety. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    Comply with all legal requirements, international standards and Local Policies guiding infrastructural service delivery. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    Monitor the health of all employees on a regular basis to ensure they are not adversely affected by exposure to work environment. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    Work closely with our contractors and suppliers to ensure they comply with our HSE standards.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Maintain adequate emergency response procedures and resources to minimize the impact of accidents that could occur at workplace, and test systems and tools for effectiveness. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    Conduct periodic reviews and audit, backed by a third party where necessary, to identify shortfalls and possible areas of improvement.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Pursue continuous improvement in the measures taken to protect the Health, Safety and Environment of those who may be within the perimeter of our work sites by deploying the required HSE tools. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    Report and analyze all accidents, incidents and anomalies in order to improve procedures, the behavior of personnel and equipment in the running of our operations, Set and monitor measurable HSE performance indicators that are part of our business plan and budget to analyze and report deficiencies or strengths as part of the monthly management scoreboard. 
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