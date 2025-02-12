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
    <title>Quality Policy - Omorofan EMT Nig Ltd</title>
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
            <h2 id="banner-heading">Quality Policy</h2>
        </div>
    </section>
    <section class="container-fluid main-content">
        <div class="main-content-container">
            <div class="nav-block">
                <ul>
                    <li class="nav-block-header">
                        <i class="fa fa-bars" aria-hidden="true"></i><a href="QHSE_policy.php"> QHSE Policy</a>
                    </li>
                    <li>
                        <a href="HSE_policy.php"><i class="fa fa-caret-right" aria-hidden="true"></i> HSE Policy</a>
                    </li>
                    <li class="nav-block-active">
                        <a href="quality_policy.php"><i class="fa fa-caret-right" aria-hidden="true"></i> Quality Policy</a>
                    </li>
                </ul>
            </div>
            <div class="main-block">
                <div class="content">
                    <div class="content-header">
                        <h1><i class="fa fa-caret-right" aria-hidden="true"></i> Quality Policy</h1>
                    </div>
                    <article>
                        <p>
                            OMOROFAN is committed to providing products and services that consistently meet and exceed the requirement of our customers through the implementation and continual improvement of this Quality Management System.
                        </p>
                        <p>
                            Our quality policy is based on the following five fundamental core values which drives our business and are reflected in everything we do:
                        </p>
                        <ol>
                            <li>
                                <p>
                                    <strong>Ethical -</strong> We operate ethically and demand the highest standards in our operations by Identifying, understanding and conforming to customer, statutory, regulatory, and industry requirements.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>Risk Management –</strong> We review our product and service processes, identify the potential risks, provide contingency planning, and take the necessary actions to reduce or mitigate them. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>Integrity -</strong> We demonstrate the utmost integrity and only operate in a transparent and honest way with our clients, our personnel and each other.
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>Relationships –</strong> We are committed to developing long lasting relationships with our clients, our partners, contractors, sub-contractors and our communities. we promote the highest standards of customer care and the client is at the center of all of our business operations. 
                                </p>
                            </li>
                            <li>
                                <p>
                                    <strong>Continual Improvement —</strong> We take action to assess and improve the effectiveness of our Quality Management System, to enhance our technologies, our products, our processes, and our services.
                                </p>
                            </li>
                        </ol>
                        <br>
                        <p>
                            To achieve this in the most efficient and cost-effective manner, OMOROFAN has developed and implemented within OMOROFAN structure a Quality System which is understood and adhered to, at all levels, in keeping with the size and scope of the company's organization. 
                        </p>
                        <br>
                        <p>
                            Within this Policy we are committed to operating our Company under the disciplines and control of a Quality Management System conforming to the International Standards ISO 9001:2008. We are all committed to operating continuously to this standard and we will maintain the necessary approvals consistent with our customer, statutory, regulatory and applicable industry requirements. To accomplish this, OMOROFAN will:
                        </p>
                        <ol type="a">
                            <li>
                                <p>
                                    determine the sequence and interaction of these processes,
                                </p>
                            </li>
                            <li>
                                <p>
                                    ensure the availability of resources and information necessary to support the operation and monitoring of these processes, 
                                </p>
                            </li>
                            <li>
                                <p>
                                    monitor, measure where applicable and analyze these processes, and
                                </p>
                            </li>
                            <li>
                                <p>
                                    implement actions necessary to achieve planned results and continual improvement of these processes. 
                                </p>
                            </li>
                        </ol>
                        <br>
                        <p>
                            In the event that OMOROFAN chooses to outsource processes which potentially impact product conformity to requirements, OMOROFAN will ensure control over such processes.
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