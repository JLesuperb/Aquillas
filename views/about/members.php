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
            <div class="banner-pages banner-team">
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
            <section class="we-are no-bg-img bg-light-blue padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="heading-main">
                                <div class="main-title">
                                    <h5 class="subtitle">who are we</h5>
                                    <h2 class="title">meet our expert team</h2>
                                </div>
                            </div>
                            <div class="detail-content">
                                <h4 class="title">something about us</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
                                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam co laboris nisi ut aliquip ex ea commodo consequat. Duis
                                    aute irure.</p>
                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit ani m id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan tium doloremque laudantium,
                                    totam rem aperiam, eaque ipsa quae ab</p>
                            </div>
                        </div>
                    </div>
                    <img src="<?=ASSETS_ROOT?>/assets/images/team/image-8.png" alt="" class="img-full">
                </div>
            </section>
            <div class="list-team padding-top-100 padding-bottom-100">
                <div class="container">
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
            </div>
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
