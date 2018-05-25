<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-23
 * Time: 3:41 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=App::APP_MAME?> | Members</title>
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
            <div class="banner-pages banner-team-member">
                <div class="container container-wrapper">
                    <div class="banner-wrapper">
                        <div class="title-wrapper">
                            <h1 class="title">our team</h1>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" class="breadcrumb-link">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#" class="breadcrumb-link">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <span class="breadcrumb-active">Team</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="banner-btn">
                            <a href="#" class="btn white-color">get in touch</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <section class="content-team-member padding-top-100">
                <div class="container">
                    <div class="row paragraph">
                        <div class="col-md-4 col-xs-12">
                            <img src="<?=ASSETS_ROOT?>/assets/images/more-images/portrait-1.jpg" alt="" class="img-responsive portrait-img">
                        </div>
                        <div class="col-md-8 col-xs-12">
                            <div class="heading-main">
                                <div class="main-title">
                                    <h5 class="subtitle">Hello World</h5>
                                    <h2 class="title">I’m Jodie Helsinki</h2>
                                </div>
                            </div>
                            <div class="detail-contact-info">
                                <p class="position">Expert Staff</p>
                                <div class="lists">
                                    <div class="contact-list">
                                        <a href="mailto:jodie.helsinkin@swlabs.com" class="item">
                                            <i class="icons fa fa-envelope"></i>
                                            <p class="text">jodie.helsinkin@swlabs.com</p>
                                        </a>
                                        <a href="tel:+123456789" class="item">
                                            <i class="icons fa fa-phone"></i>
                                            <p class="text text-bold">+1 234 567 89</p>
                                        </a>
                                    </div>
                                    <div class="social-list">
                                        <a href="#" class="item">
                                            <i class="icons fa fa-facebook"></i>
                                        </a>
                                        <a href="#" class="item">
                                            <i class="icons fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="item">
                                            <i class="icons fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-content">
                                <h4 class="title">Something About me</h4>
                                <p>Well educated, intellectual people, especially scientists at all times demonstrate considerably smaller adherence to religiosity than others. However, there are still believers of the idea of the God in science.
                                    If we exclude from their number those who feel a painful requirement for external protection and support by virtue of their poor living circumstances.</p>
                                <h4 class="title">My mission & vision</h4>
                                <p>Common sense suggests, that for an explanation of the observable diversification in life, it is necessary to admit that each separate subject, each organism, each social unit, a local determinism, which maintains
                                    an autonomous internal life in it. This represents a scandalous weakness in the concept.</p>
                                <p>Not finding the required causative source within the framework of philosophy, people are compelled to address the always-available, exotic, exciting fantasies of the irrational sources that are available.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row paragraph">
                        <div class="col-md-4 col-xs-12 column-3">
                            <div class="detail-content">
                                <h4 class="title">qualifications</h4>
                                <p>The conventional concept of determinism does not suppose the existence of such sources. This represents a scandalous weakness in the concept.</p>
                                <ul>
                                    <li>Duis aute irure dolor in reprehenderit in consectetur</li>
                                    <li>Dempor incididunt ut labore et dolore magna aliqua minim reprehenderit</li>
                                    <li>Quis nostrud exercitation ullamco laboris nisi</li>
                                    <li>Duis aute irure dolor in reprehenderit in voluptate</li>
                                    <li>Excepteur sint occaecat cupidatat non</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 column-3">
                            <div class="detail-content">
                                <h4 class="title">experience</h4>
                                <p>For centuries there have been rumors about the secret codes of the bible. Now with the power of your home computer you can unlock the bible codes and see the truth for your self.</p>
                                <p>Whether you are a true believer or a doubtful skeptic, evidence can be found with your own research on the secret codes of the bible. Bible codes, sometimes referred to as Torah codes, have been part of the Jewish
                                    tradition and mystery for over 2000 years.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-xs-12 column-3">
                            <div class="detail-content">
                                <h4 class="title">certifications</h4>
                                <div class="list-certifications">
                                    <div class="item">
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                        <div class="certification">
                                            <i class="flaticon-medal"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="team-member padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="heading-main">
                        <div class="main-title">
                            <h5 class="subtitle">our expert team</h5>
                            <h2 class="title">some other expert</h2>
                        </div>
                    </div>
                    <div class="list-block-team column-4">
                        <div class="item">
                            <div class="block-team">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/team/image-1.png" alt="" class="img-responsive">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">Samuel Wilton</a>
                                    <div class="position">Expert Staff</div>
                                    <div class="social-list">
                                        <a href="#" class="item">
                                            <i class="icons fa fa-facebook"></i>
                                        </a>
                                        <a href="#" class="item">
                                            <i class="icons fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="item">
                                            <i class="icons fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-team">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/team/image-2.png" alt="" class="img-responsive">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">Elena Smith</a>
                                    <div class="position">Expert Staff</div>
                                    <div class="social-list">
                                        <a href="#" class="item">
                                            <i class="icons fa fa-facebook"></i>
                                        </a>
                                        <a href="#" class="item">
                                            <i class="icons fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="item">
                                            <i class="icons fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-team">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/team/image-3.png" alt="" class="img-responsive">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">David Thomson</a>
                                    <div class="position">Expert Staff</div>
                                    <div class="social-list">
                                        <a href="#" class="item">
                                            <i class="icons fa fa-facebook"></i>
                                        </a>
                                        <a href="#" class="item">
                                            <i class="icons fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="item">
                                            <i class="icons fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-team">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/team/image-4.png" alt="" class="img-responsive">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">Mark Levine</a>
                                    <div class="position">Expert Staff</div>
                                    <div class="social-list">
                                        <a href="#" class="item">
                                            <i class="icons fa fa-facebook"></i>
                                        </a>
                                        <a href="#" class="item">
                                            <i class="icons fa fa-twitter"></i>
                                        </a>
                                        <a href="#" class="item">
                                            <i class="icons fa fa-google-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="banner-bottom">
                        <div class="banner-1">
                            <div class="banner-left">
                                <h5 class="text">We Are Great Contructor And Construction Since 1992</h5>
                            </div>
                            <div class="banner-right">
                                <a href="#" class="btn transparent white-color">check our work</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
<script src="<?=ASSETS_ROOT?>/assets/scripts/pages/homepage.js"></script>
<!-- MAIN JS-->
<script src="<?=ASSETS_ROOT?>/assets/scripts/main.js"></script>
</body>
</html>
