<!DOCTYPE html>
<html lang="en">
<?php wp_head(); ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Precision Health Clinic</title>

    <!-- Bootstrap -->
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/style.css" rel="stylesheet">


    
</head>

<body>

    <header>
        <div class="top-blue-bar">
            <div class="container">
                <div class="top-bar-left">
                    <ul class="social-list">
                        <li><a href="#" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li>
                            <a href="#" target="_blank"> <i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"> <i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </div>

                <div class="top-bar-right">
                    <ul>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i><b> Call <a href="tel:715-386-8757">352-474-8 </a> LAB</b></li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@abc.com">Send us an email</a></li>

                    </ul>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/logo.png" class="img-responsive"></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li class="dropdown"><a href="about-us.html">About Us</a> <span class="caret dropdown-toggle" data-toggle="dropdown"></span>
                            <ul class="dropdown-menu">
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="affiliations.html">Affiliations</a></li>
                                <li><a href="why-precision-health.html">Why Precision-Health</a></li>
                            </ul>
                        </li>
                        <li><a href="services.html">Services</a></li>
                        <li><a href="#">New Patients</a></li>
                        <li><a href="#">Conditions Treated</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="online-store.html">Online Store</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>

                </div>
            </div>
        </nav>

    </header>