<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-23
 * Time: 3:37 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=App::APP_MAME?> | Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT CSS-->
    <?php App::loadInclude('fonts-css') ?>
    <!-- LIBRARY CSS-->
    <?php App::loadInclude('libraries-css') ?>
    <!-- STYLE CSS-->
    <?php App::loadInclude('styles-css') ?>
</head>
<body>
<div class="body-wrapper">
    <!-- WRAPPER CONTENT-->
    <div class="wrapper-content loaded">
        <!-- HEADER-->
        <header>
            <?php App::loadInclude('header') ?>
        </header>
        <!-- MENU MOBILE-->
        <?php App::loadInclude('menu-mobile') ?>

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="banner-pages banner-services">
                <div class="container container-wrapper">
                    <div class="banner-wrapper">
                        <div class="title-wrapper">
                            <h1 class="title">services</h1>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" class="breadcrumb-link">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <span class="breadcrumb-active">Services</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="banner-btn">
                            <a href="#" class="btn white-color">Donation</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="main-contact">
                <div class="list-contact-info">
                    <h5 class="title">Contact Us now</h5>
                    <div class="item">
                        <div class="contact-info-box">
                            <div class="contact-info-cell">
                                <div class="wrapper-icons">
                                    <i class="icons fa fa-map-marker"></i>
                                </div>
                            </div>
                            <div class="contact-info-cell">
                                <div class="wrapper-info">
                                    <p class="text">7100 Athens Place Washington, DC 20521-7100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="contact-info-box">
                            <div class="contact-info-cell">
                                <div class="wrapper-icons">
                                    <i class="icons fa fa-phone"></i>
                                </div>
                            </div>
                            <div class="contact-info-cell">
                                <div class="wrapper-info">
                                    <div class="text">Hotline:
                                        <a href="tel:+123456789" class="text-bold">+1 234 567 89</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="contact-info-box">
                            <div class="contact-info-cell">
                                <div class="wrapper-icons">
                                    <i class="icons fa fa-envelope"></i>
                                </div>
                            </div>
                            <div class="contact-info-cell">
                                <div class="wrapper-info">
                                    <a href="mailto:info@buildplus.com" class="text link">info@buildplus.com</a>
                                    <a href="mailto:support@builplus.com" class="text link">support@builplus.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-map">
                <div id="map"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 pull-right contact-form-wrapper">
                            <div class="contact-form">
                                <h5 class="contact-title">contact form</h5>
                                <form class="main-form">
                                    <input type="text" placeholder="Name" class="form-control">
                                    <input type="email" placeholder="Email Address" class="form-control">
                                    <input type="text" placeholder="Phone Number" class="form-control">
                                    <textarea placeholder="Message" class="form-control"></textarea>
                                </form>
                                <button type="submit" class="btn white-color">submit message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CHILDREN CONTENT-->
        </div>
        <!-- BUTTON BACK TO TOP-->
        <div id="back-top">
            <a href="#top" class="link">
                <i class="fa fa-angle-double-up"></i>
            </a>
        </div>
        <!-- FOOTER-->
        <footer>
            <?php App::loadInclude('footer') ?>
        </footer>
    </div>
</div>
<!-- LIBRARY JS-->
<?php App::loadInclude('libraries-js') ?>
<!-- LOADING JS FOR PAGE-->
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu6tm60TzeUo9rWpLnrQ7mrFn4JPMVje4&amp;amp;sensor=false"></script>
<script src="<?/*=ASSETS_ROOT*/?>/assets/scripts/pages/map.js"></script>-->
<!-- MAIN JS-->
<script src="<?=ASSETS_ROOT?>/assets/scripts/main.js"></script>
</body>
</html>
