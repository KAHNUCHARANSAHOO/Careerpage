<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JobScout
 */

/**
 * After Content
 * 
 * @hooked jobscout_content_end - 20
 */
do_action('jobscout_before_footer');

/**
 * Footer
 * 
 * @hooked jobscout_footer_start  - 20
 * @hooked jobscout_footer_top    - 30
 * @hooked jobscout_footer_bottom - 40
 * @hooked jobscout_footer_end    - 50
 */
//do_action( 'jobscout_footer' );

/**
 * After Footer
 * 
 * @hooked jobscout_page_end    - 20
 */
do_action('jobscout_after_footer');

wp_footer(); ?>


<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
    .site-footer {
        background-color: #214341;
        padding: 45px 0 20px;
        font-size: 15px;
        line-height: 24px;
        color: #E6C345;
    }

    .site-footer hr {
        border-top-color: #bbb;
        opacity: 0.5
    }

    .site-footer hr.small {
        margin: 20px 0
    }

    .site-footer h6 {
        color: #E6C345;
        font-size: 13px;
        text-transform: uppercase;
        margin-top: 5px;
        letter-spacing: 2px;
        padding-left: 2.7rem;
    }

    .site-footer a {
        color: #E6C345;
        text-decoration: none;
    }

    /* .site-footer a:hover {
            color: #3366cc;
            text-decoration: none;
        } */

    .footer-links {
        padding-left: 0;
        list-style: none
    }

    .footer-links li {
        display: block;
        line-height: 19px;
    }

    .footer-links a {
        color: #ffffff;
        text-decoration: none;
        font-size: small;
    }

    .footer-links a:active,
    .footer-links a:focus,
    .footer-links a:hover {
        color: #61CE70;
        text-decoration: none;
    }

    .footer-links.inline li {
        display: inline-block
    }

    .site-footer .social-icons {
        text-align: right
    }

    .site-footer .social-icons a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        margin-left: 6px;
        margin-right: 0;
        border-radius: 100%;
        background-color: #e6c345
    }

    .copyright-text {
        margin: 0
    }

    @media (max-width:991px) {
        .site-footer [class^=col-] {
            margin-bottom: 30px
        }
    }

    @media (max-width:767px) {
        .site-footer {
            padding-bottom: 0
        }

        .site-footer .copyright-text,
        .site-footer .social-icons {
            text-align: center
        }
    }

    .social-icons {
        padding-left: 0;
        margin-top: 30px;
        margin-bottom: 0;
        list-style: none
       
    }

    .social-icons li {
        display: inline-block;
        margin-bottom: 4px
       
    }

    .social-icons li.title {
        margin-right: 15px;
        
        text-transform: uppercase;
        color: #96a2b2;
        font-weight: 700;
        font-size: 13px
        
    }

    .social-icons a {
        

        background-color: #eceeef;
        color: #214341;
        font-size: 16px;
        display: inline-block;
        line-height: 44px;
        width: 44px;
        height: 44px;
        text-align: center;
        margin-right: 8px;
        border-radius: 100%;
        -webkit-transition: all .2s linear;
        -o-transition: all .2s linear;
        transition: all .2s linear
    }

    .social-icons a:active,
    .social-icons a:focus,
    .social-icons a:hover {
        color: #fff;
        background-color: #e5e3c9
    }

    .social-icons.size-sm a {
        
        line-height: 34px;
        height: 34px;
        width: 34px;
        font-size: 14px
        
    }

    .svg:not(:host).svg-inline--fa, svg:not(:root).svg-inline--fa {
    overflow: visible;
    box-sizing: content-box;
    margin-top: 10px;
}
    .social-icons a.facebook:hover {
        background-color: #e5e3c9
    }

    .social-icons a.twitter:hover {
        background-color: #e5e3c9
    }

    .social-icons a.linkedin:hover {
        background-color: #e5e3c9
    }

    .social-icons a.dribbble:hover {
        background-color: #e5e3c9
    }

    .footer-newsletter p {
        text-align: center;
    }

    .btn {
        background: #E6C345;
        margin-top: 5px;
    }

    .btn:hover{
        background: #e5e3c9 
    }
    .sign-up {
        display: flex;
        justify-content: space-evenly;
     
    }

    .sign-up-from {
        flex: 30%;
        
    }

    @media (max-width:767px) {
        .social-icons li.title {
            display: block;
            margin-right: 0;
            font-weight: 600
        }
    }
    .single .site-main footer.entry-footer{
        display:none !important;
    }
    </style>
</head>

<body>

    <!-- Site footer -->
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <h6><a
                            href="https://www.briskon.com/custom-software-development-services/custom-software-development-company.html">CUSTOM
                            SOFTWARE DEVELOPMENT</a></h6>
                    <ul class="footer-links">
                        <li><a
                                href="https://www.briskon.com/custom-software-development-services/custom-software-development-company.html">Custom
                                Software Development Services</a></li>
                        <li><a
                                href="https://www.briskon.com/custom-software-development-services/top-offshore-software-development-company.html">Offshore
                                Software Development</a></li>
                        <li><a
                                href="https://www.briskon.com/custom-software-development-services/custom-web-application-development-company.html">Web
                                Application Development</a></li>
                        <li><a
                                href="https://www.briskon.com/custom-software-development-services/cloud-application-development.html">Cloud
                                Application Development</a></li>
                        <li><a
                                href="https://www.briskon.com/custom-software-development-services/application-maintenance-and-support.html">Application
                                Maintenance and Support</a></li>
                        <li><a
                                href="https://www.briskon.com/custom-software-development-services/software-application-re-engineering.html">Software
                                Application Re-engineering</a></li>
                    </ul>
                    <h6><a
                            href="https://www.briskon.com/digital-marketing-agency/best-top-digital-marketing-agencies-company-usa-india.html">DIGITAL
                            MARKETING</a></h6>
                    <ul class="footer-links">
                        <li><a
                                href="https://www.briskon.com/digital-marketing-agency/best-top-digital-marketing-agencies-company-usa-india.html">Digital
                                Marketing Services</a></li>
                        <li><a
                                href="https://www.briskon.com/digital-marketing-agency/best-seo-consulting-services-company-austin-usa-india.html">Search
                                Engine Optimization - SEO</a></li>
                        <li><a
                                href="https://www.briskon.com/digital-marketing-agency/search-engine-marketing-sem-company-agency.html">Search
                                Engine Marketing - SEM</a></li>
                        <li><a
                                href="https://www.briskon.com/digital-marketing-agency/social-media-marketing-services-agency-companies.html">Social
                                Media Marketing - SMM</a></li>
                        <li><a href="https://www.briskon.com/digital-marketing-agency/content-marketing-agency.html">Content
                                Marketing
                            </a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6">
                    <h6><a
                            href="https://www.briskon.com/mobile-app-development-company/top-mobile-app-development-companies-india-usa-dallas-tx.html">MOBILE
                            APP DEVELOPMENT</a></h6>
                    <ul class="footer-links">
                        <li><a
                                href="https://www.briskon.com/mobile-app-development-company/top-mobile-app-development-companies-india-usa-dallas-tx.html">Mobile
                                App Development Services</a></li>
                        <li><a
                                href="https://www.briskon.com/mobile-app-development-company/android-mobile-app-development-services-company-india-usa.html">Android
                                App Development</a></li>
                        <li><a
                                href="https://www.briskon.com/mobile-app-development-company/ios-mobile-app-development-company-usa-companies.html">iOS
                                App Development</a></li>
                        <li><a
                                href="https://www.briskon.com/mobile-app-development-company/cross-platform-mobile-app-development.html">Cross
                                Platform App Development</a></li>
                        <li><a
                                href="https://www.briskon.com/mobile-app-development-company/native-app-development.html">Native
                                App Development</a></li>
                        <li><a
                                href="https://www.briskon.com/mobile-app-development-company/hybrid-app-development.html">Hybrid
                                App Development</a></li>
                        <li><a
                                href="https://www.briskon.com/mobile-app-development-company/enterprise-mobility-management-mobile-application-development.html">Enterprise
                                Mobility Management</a></li>
                    </ul>
                    <h6><a
                            href="https://www.briskon.com/website-design-maintenance/best-website-design-company-dallas-india-bangalore.html">WEBSITE
                            DESIGN & MAINTENANCE</a></h6>
                    <ul class="footer-links">
                        <li><a
                                href="https://www.briskon.com/website-design-maintenance/best-website-design-company-dallas-india-bangalore.html">Website
                                Design Services</a></li>
                        <li><a
                                href="https://www.briskon.com/website-design-maintenance/custom-wordpress-website-design-development-services.html">WordPress
                                Website Design & Development</a></li>
                        <li><a
                                href="https://www.briskon.com/website-design-maintenance/ecommerce-website-design-company.html">eCommerce
                                Website Design</a></li>
                        <li><a href="https://www.briskon.com/website-design-maintenance/blog-design-services.html">Blog
                                Design & Development</a></li>
                        <li><a
                                href="https://www.briskon.com/website-design-maintenance/wordpress-website-maintenance-services.html">Website
                                Maintenance Services</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6><a href="https://www.briskon.com/education.html">INDUSTRIES</a></h6>
                    <ul class="footer-links">
                        <li><a href="https://www.briskon.com/education.html">Education</a></li>
                        <li><a href="https://www.briskon.com/retail.html">Retail</a></li>
                        <li><a href="https://www.briskon.com/healthcare.html">Healthcare</a></li>
                        <li><a href="https://www.briskon.com/real-estate.html">Real Estate</a></li>
                        <li><a href="https://www.briskon.com/financial-services.html">BFSI</a></li>
                    </ul>
                    <h6><a href="https://www.briskon.com/intranet-application-software-development.html">SOLUTIONS</a>
                    </h6>
                    <ul class="footer-links">
                        <li><a href="https://www.briskon.com/intranet-application-software-development.html">Intranet
                                Framework</a></li>
                        <li><a href="https://www.briskon.com/crm-framework.html">CRM Framework</a></li>
                        <li><a href="https://www.briskon.com/e-commerce-framework.html">e-Commerce Framework</a></li>
                        <li><a
                                href="https://www.briskon.com/e-auction-best-online-auction-software-with-reverse-silent-auction.html">e-Auction</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-6">
                    <h6><a
                            href="https://www.briskon.com/briskon-software-development-companies-usa-texas-florida-uk-india.html">ABOUT</a>
                    </h6>
                    <ul class="footer-links">
                        <li><a
                                href="https://www.briskon.com/briskon-software-development-companies-usa-texas-florida-uk-india.html">Company</a>
                        </li>
                        <li><a href="https://www.briskon.com/partnerships.html">Partners</a></li>
                        <li><a href="https://www.briskon.com/awards-and-recognition.html">Awards & Recognition</a></li>
                        <li><a href="https://www.briskon.com/why-briskon.html">Why Briskon</a></li>
                    </ul>
                    <h6><a href="https://www.briskon.com/blog/">BLOG</a></h6>
                    <ul></ul>
                    <h6><a href="https://www.briskon.com/working-with-briskon.html">CAREERS</a></h6>
                    <ul class="footer-links">
                        <li><a href="https://www.briskon.com/working-with-briskon.html">Working with Briskon</a></li>
                        <li><a href="https://www.briskon.com/latest-openings.html">Latest Openings</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-6">
                    <a href="https://www.briskon.com/awards-and-recognition.html"><img
                            src="https://www.briskon.com/images/quality-certificate.jpg" alt=""></a>
                </div>
            </div>
            <p style="text-align: center; font-size:small; color: #fff;">USA - Dallas (Texas) | India - Bangalore</p>
            <hr>
        </div>
        <div class="container last-c">
            <div class="row">

                <div class="col-lg-4 col-md-4">
                    <h3>Briskon</h3>
                    <p class="copyright-text">©2022. Briskon Technologies Pvt Ltd. All Rights.
                    </p>

                </div>
                <div class="col-lg-5 col-md-4">
                    <div class="footer-newsletter">
                        <p>Stay updated, sign up for our newsletter</p>
                        <form class="sign-up" method="post" action="">
                            <div class="sign-up-form">
                                <input type="text" name="Name" placeholder="Name" required="">
                            </div>
                            <div class="sign-up-form">
                                <input type="text" name="EmailId" placeholder="Email" required="">
                            </div>
                            <div class="sign-up-form">
                                <button type="submit" class="btn btn-default newsletter">Sign up</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <ul class="social-icons">
                        <li><a class="facebook" href="https://www.facebook.com/BriskonTechnologies"><i
                                    class="fa fa-facebook"></i></a></li>
                        <li><a class="linkedin" href="https://www.linkedin.com/company/briskontechnologies/"><i
                                    class="fa fa-linkedin"></i></a></li>
                        <li><a class="twitter" href="https://twitter.com/briskon"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="youtube" href="https://www.youtube.com/channel/UCavt4gWOk36OQ-Y9J2xztLA"><i
                                    class="fa fa-youtube"></i></a></li>
                        <li><a class="instagram" href="https://www.instagram.com/briskontechnologies/"><i
                                    class="fa fa-instagram"></i></a></li>
                        <!-- <li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>