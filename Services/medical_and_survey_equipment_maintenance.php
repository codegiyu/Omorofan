<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/service-itemstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
    </style>
    <title>Medical and Survey Equipment Maintenance - Omorofan EMT Nig Ltd</title>
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
            <h4 id="banner-heading">Medical and Survey Equipment Maintenance</h4>
        </div>
    </section>
    <section class="container-fluid main-content">
        <div class="main-content-container">
            <div class="nav-block">
                <ul>
                    <li class="nav-block-header">
                        <i class="fa fa-bars" aria-hidden="true"></i><a href="../services.php"> Services</a>
                    </li>
                    <li class="sub-links">
                        <div class="bullet"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                        <div class="link"><a href="logging_units_tools_maintenance_and_repair.php">Logging Unit Tools Maintenance and Repair</a></div> 
                    </li>
                    <li class="sub-links">
                        <div class="bullet"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                        <div class="link"><a href="process_systems_installation_and_maintenance.php">Process Systems Installation and Maintenance</a></div>
                    </li>
                    <li class="sub-links">
                        <div class="bullet"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                        <div class="link"><a href="storage_vessels_installation_and_maintenance.php">Storage Vessels Installation and Maintenance</a></div>
                    </li>
                    <li class="sub-links nav-block-active">
                        <div class="bullet"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                        <div class="link"><a href="medical_and_survey_equipment_maintenance.php">Medical and Survey Equipment Maintenance</a></div>
                    </li>
                    <!-- <li class="sub-links">
                        <div class="bullet"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                        <div class="link"><a href="warehouse_erection.php">Warehouse Erection</a></div>
                    </li> -->
                    <li class="sub-links">
                        <div class="bullet"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                        <div class="link"><a href="technical_consultation.php">Technical Consultation</a></div>
                    </li>
                    <li class="sub-links">
                        <div class="bullet"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                        <div class="link"><a href="dredging_and_reclamation.php">Dredging and Reclamation</a></div>
                    </li>
                </ul>
            </div>
            <div class="main-block">
                <div class="content">
                    <div class="content-header">
                        <h1><i class="fa fa-caret-right" aria-hidden="true"></i> Medical And Survey Equipment Maintenance</h1>
                    </div>
                    <article>
                        <p>
                            We offer our services in the area of medical diagnostic and survey equipment maintenance and other related technologies. Example is the maintenance of C-arm.
                        </p>
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