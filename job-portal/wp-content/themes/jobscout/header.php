<html>

<head>
    <meta charset="UTF-8">
    <title>Responsive Dropdown nav-bar Bar</title>
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="style.css">  -->
    <style>
    body {
        font-family: "Arial", sans-serif;
        margin: 0;
        padding: 0;
    }

    .image-container img {
        width: 100%;
        max-height: 600px;
    }

    .content {
        padding: 18px 24px;
        text-align: left;
    }

    .content p {
        margin-top: 10px;
        letter-spacing: 0.08em;
        line-height: 1.6em;
    }

    .nav-bar {
        height: 6rem;
        background: #214341;
        position: sticky;
        background: #214341;
        z-index: 999;
        width: 100%;
        top: 0px;
        left: 0px;
        right: 0px;
    }

    .brand {
        position: absolute;
        /* padding-left: 22px; */
        float: left;
        line-height: 70px;
        text-transform: uppercase;
        font-size: 1.4em;
        margin-left: 2rem;
    }

    .brand a img {
        max-height: 70px;
        padding: 1rem;
    }

    .brand a,
    .brand a:visited {
        color: #ffffff;
        text-decoration: none;
    }

    .nav-container {
        /* height: 40px; */
        max-width: 100rem;
        margin: 0rem 2.8rem 0rem 0rem;
    }

    nav {
        float: right;

    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        float: left;
        position: relative;
    }

    nav ul li a {
        display: block;
        padding: 0 20px;
        line-height: 70px;
        background: #214341;
        color: #ffffff;
        text-decoration: none;
    }

    nav ul li a:visited {
        display: block;
        padding: 0 20px;
        line-height: 70px;
        /* background: #e5e4ca; */
        /* color: #214341; */
        text-decoration: none;
    }

    nav ul li a:hover,
    nav ul li a:visited:hover {
        background: #e5e4ca;
        color: #214341;
    }

    nav ul li a:not(:only-child):after,
    nav ul li a:visited:not(:only-child):after {
        padding-left: 4px;
        content: ' ▾';
    }

    nav ul li ul li {
        min-width: 190px;
        background: #214341;
        color: #ffffff;
    }

    nav ul li ul li a {
        padding: 15px;
        line-height: 20px;
        background-color: #E5E4CA;
        color: #214341;

    }

    /* nav ul li ul li a:hover {
        padding: 15px;
        line-height: 20px;
        background-color: #E5E4CA;
        color: #9ab955;
    } */

    .nav-dropdown {
        position: absolute;
        display: none;
        z-index: 1;
        box-shadow: 0 3px 12px rgba(0, 0, 0, 0.15);
    }

    .nav-dropdown li a:hover {
        background-color: #E5E4CA;
        color: #9ab955;
    }

    .nav-list li:hover .nav-dropdown {
        display: block;
    }

    .nav-mobile {
        display: none;
        position: absolute;
        top: 0;
        right: 0;
        background: #214341;
        height: 70px;
        width: 70px;
        margin-top: 1.5rem;
    }

    @media only screen and (max-width: 990px) {
        .nav-mobile {
            display: block;
        }

        nav {
            width: 100%;
            padding: 70px 0 1px;
        }

        nav ul {
            display: none;
        }
        

        nav ul li {
            float: none;
            width: 100rem;
            background-color: #214341;
        }

        nav ul li a {
            padding: 10px 0px 10px 15px;
            line-height: 20px;
            /* padding-left: 5%; */
            width: 100rem;
        }

        nav ul li ul li a {
            /* padding-left: 0%; */
            width: 100rem;
            background-color: #214341;
            color: #fff;
        }

        .nav-dropdown {
            position: static;
        }

        .brand a img {
            max-height: 60px;
            margin-top: 0px;
        }

        .tag-right {
            display: none !important;
        }
    }

    @media screen and (min-width: 990px) {
        .nav-list {
            display: block !important;
        }
    }

    #nav-toggle {
        position: absolute;
        left: 18px;
        top: 22px;
        cursor: pointer;
        padding: 10px 35px 16px 0px;
    }

    #nav-toggle span,
    #nav-toggle span:before,
    #nav-toggle span:after {
        cursor: pointer;
        border-radius: 1px;
        height: 5px;
        width: 35px;
        background: #ffffff;
        position: absolute;
        display: block;
        content: '';
        transition: all 300ms ease-in-out;
    }

    #nav-toggle span:before {
        top: -10px;
    }

    #nav-toggle span:after {
        bottom: -10px;
    }

    #nav-toggle.active span {
        background-color: transparent;
    }

    #nav-toggle.active span:before,
    #nav-toggle.active span:after {
        top: 0;
    }

    #nav-toggle.active span:before {
        transform: rotate(45deg);
    }

    #nav-toggle.active span:after {
        transform: rotate(-45deg);
    }

    article {
        max-width: 1000px;
        margin: 0 auto;
        padding: 10px;
    }

    .tag-row {
        display: flex;
        height: 1.5rem;
        font-size: 13px;
        background-color: #e6c245;
        padding: 0rem 3.7rem 0rem 3rem;
    }

    .tag-column {
        flex: 50%;
        /* margin-right: 194px; */
        text-align: left;
        /*font-family: 'Montserrat', sans-serif;*/
        color: #214341;
    }

    .tag-column a {
        text-decoration: none;
        color: #214341;
        font-weight: bolder;
    }

    .tag-column a:hover {
        color: #fff;
    }

    .tag-left {
        text-align: left;
    }

    .tag-right {
        /* padding: 0px 20px 0px 0px; */

        /* float: left; */
        /* position: relative; */
        text-align: center;
    }
    

    /* .nav-dropdown a:hover {background-color: #ddd;}

.nav-dropdown:hover .nav-dropdown {display: block;}

.dropdown:hover .nav-dropdown {background-color: #3e8e41;} */
    </style>
</head>

<body>

    <section class="nav-bar">
        <div class="tag-row">
            <div class="tag-column tag-left" style="font-weight: 600;">Working Together to Get IT Performing</div>
            <div class="tag-column tag-right"><a href="mailto:info@briskon.com">info@briskon.com</a> | <a
                    href="https://www.briskon.com/working-with-briskon.html">Careers</a> | <a
                    href="https://www.briskon.com/blog/">Blog</a></div>
        </div>
        <div class="nav-container">
            <div class="brand">
                <a href="https://www.briskon.com/"><img src="https://www.briskon.com/images/briskon-logo.png"
                        alt="briskon"></a>
            </div>
            <nav>
                <div class="nav-mobile"><a id="nav-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li>
                        <a href="#">SERVICES</a>
                        <ul class="nav-dropdown">
                            <li><a
                                    href="https://www.briskon.com/custom-software-development-services/custom-software-development-company.html">Custom
                                    Software Development</a></li>
                            <li><a
                                    href="https://www.briskon.com/mobile-app-development-company/top-mobile-app-development-companies-india-usa-dallas-tx.html">Mobile
                                    App Development</a></li>
                            <li><a
                                    href="https://www.briskon.com/digital-marketing-agency/best-top-digital-marketing-agencies-company-usa-india.html">Digital
                                    Marketing</a></li>
                            <li><a
                                    href="https://www.briskon.com/website-design-maintenance/best-website-design-company-dallas-india-bangalore.html">Website
                                    Design &#38; Maintenance</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">INDUSTRIES</a>
                        <ul class="nav-dropdown">
                            <li><a href="https://www.briskon.com/education.html">Education</a></li>
                            <li><a href="https://www.briskon.com/retail.html">Retail</a></li>
                            <li><a href="https://www.briskon.com/healthcare.html">Healthcare</a></li>
                            <li><a href="https://www.briskon.com/real-estate.html">Real Estate</a></li>
                            <li><a href="https://www.briskon.com/financial-services.html">BFSI</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">SOLUTIONS</a>
                        <ul class="nav-dropdown">
                            <li><a
                                    href="https://www.briskon.com/e-auction-best-online-auction-software-with-reverse-silent-auction.html">e-Auction</a>
                            </li>
                            <li><a href="https://www.briskon.com/intranet-application-software-development.html">Intranet
                                    Framework</a></li>
                            <li><a href="https://www.briskon.com/crm-framework.html">CRM Framework</a></li>
                            <li><a href="https://www.briskon.com/e-commerce-framework.html">e-Commerce Framework</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">COMPANY</a>
                        <ul class="nav-dropdown">
                            <li><a
                                    href="https://www.briskon.com/briskon-software-development-companies-usa-texas-florida-uk-india.html">About
                                    Briskon</a></li>
                            <li><a href="https://www.briskon.com/partnerships.html">Partners</a></li>
                            <li><a href="https://www.briskon.com/awards-and-recognition.html">Awards &#38;
                                    Recognition</a></li>
                            <li><a href="https://www.briskon.com/why-briskon.html">Why Briskon</a></li>
                            <li><a href="https://www.briskon.com/blog/">Blog</a></li>
                            <li><a href="https://www.briskon.com/working-with-briskon.html">Work with Us</a></li>
                        </ul>
                    </li>
                    <li><a href="https://www.briskon.com/contact-us.html">CONTACT</a></li>
                </ul>
            </nav>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        (function($) {
            $(function() {

                $('nav ul li a:not(:only-child)').click(function(e) {
                    $(this).siblings('.nav-dropdown').toggle();
                    $('.nav-dropdown').not($(this).siblings()).hide();
                    e.stopPropagation();
                });
                
                $('html').click(function() {
                    $('.nav-dropdown').hide();
                });

                $('#nav-toggle').click(function() {
                    $('nav ul').toggle();
                });
                
                

                // $('#nav-toggle').on('click', function() {
                //     this.classList.toggle('active');
                // });

            });
        })(jQuery);
    </script>
</body>

</html>





<!-- <body>

    <div class="topnav" id="myTopnav">
        <div class="dropdown">
            <button class="dropbtn">CONTACT
            </button>
        </div>
        <div class="dropdown">
            <button class="dropbtn">COMPANY
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">About Briskon</a>
                <a href="#">Partners</a>
                <a href="#">Awards &#38; Recognition</a>
                <a href="#">Why Briskon</a>
                <a href="#">Blog</a>
                <a href="#">Work with Us</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">SOLUTIONS
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">e-Auction</a>
                <a href="#">Intranet Framework</a>
                <a href="#">CRM Framework</a>
                <a href="#">e-Commerce Framework</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">INDUSTRIES
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Education</a>
                <a href="#">Retail</a>
                <a href="#">Healthcare</a>
                <a href="#">Real Estate</a>
                <a href="#">BFSI</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="dropbtn">SERVICES
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="#">Custom Software Development</a>
                <a href="#">Mobile App Development</a>
                <a href="#">Digital Marketing</a>
                <a href="#">Website Design &#38; Maintenance</a>
            </div>
        </div>
        <div class="logo">
            <img src="http://localhost/job_portal/wp-content/uploads/2023/02/logo.png" alt="Briskon">
        </div>
        <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
    </div>


    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>

</body>

</html> -->


<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JobScout
 */
/**
 * Doctype Hook
 * 
 * @hooked jobscout_doctype
 */
do_action('jobscout_doctype');
?>

<head itemscope itemtype="https://schema.org/WebSite">
    <?php
    /**
     * Before wp_head
     * 
     * @hooked jobscout_head
     */
    do_action('jobscout_before_wp_head');

    wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

    <?php
    wp_body_open();

    /**
     * Before Header
     * @hooked jobscout_responsive_header - 15
     * @hooked jobscout_page_start - 20 
     */
    do_action('jobscout_before_header');

    /**
     * Header
     * 
     * @hooked jobscout_header - 20     
     */
    // do_action('jobscout_header');

    /**
     * Content
     * 
     * @hooked jobscout_breadcrumbs_bar
     */
    do_action('jobscout_after_header');


    /**
     * Content
     * 
     * @hooked jobscout_content_start
     */
    do_action('jobscout_content');