<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-23
 * Time: 2:11 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=App::APP_MAME?> | Activities</title>
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
            <div class="list-block-services padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="list-block column-3">
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-10.jpg" alt="" class="img-full">
                                    <a href="<?=WEB_ROOT?>activities/1" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="<?=WEB_ROOT?>activities/1" class="title">Construction</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod tempor incididunt ut.</p>
                                    </div>
                                    <a href="<?=WEB_ROOT?>activities/1" class="readmore">
                                        <span class="text">read more</span>
                                        <i class="icons fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-9.jpg" alt="" class="img-full">
                                    <a href="<?=WEB_ROOT?>activities/1" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="<?=WEB_ROOT?>activities/1" class="title">Construction Consultant</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod tempor incididunt ut.</p>
                                    </div>
                                    <a href="<?=WEB_ROOT?>activities/1" class="readmore">
                                        <span class="text">read more</span>
                                        <i class="icons fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-18.jpg" alt="" class="img-full">
                                    <a href="<?=WEB_ROOT?>activities/1" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="<?=WEB_ROOT?>activities/1" class="title">Metal Roofing</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod tempor incididunt ut.</p>
                                    </div>
                                    <a href="<?=WEB_ROOT?>activities/1" class="readmore">
                                        <span class="text">read more</span>
                                        <i class="icons fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-6.jpg" alt="" class="img-full">
                                    <a href="<?=WEB_ROOT?>activities/1" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="<?=WEB_ROOT?>activities/1" class="title">Plumbing</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod tempor incididunt ut.</p>
                                    </div>
                                    <a href="<?=WEB_ROOT?>activities/1" class="readmore">
                                        <span class="text">read more</span>
                                        <i class="icons fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-1.jpg" alt="" class="img-full">
                                    <a href="<?=WEB_ROOT?>activities/1" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="<?=WEB_ROOT?>activities/1" class="title">Interior Design</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod tempor incididunt ut.</p>
                                    </div>
                                    <a href="<?=WEB_ROOT?>activities/1" class="readmore">
                                        <span class="text">read more</span>
                                        <i class="icons fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-4.jpg" alt="" class="img-full">
                                    <a href="<?=WEB_ROOT?>activities/1" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="<?=WEB_ROOT?>activities/1" class="title">Architecture</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod tempor incididunt ut.</p>
                                    </div>
                                    <a href="<?=WEB_ROOT?>activities/1" class="readmore">
                                        <span class="text">read more</span>
                                        <i class="icons fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-6.jpg" alt="" class="img-full">
                                    <a href="<?=WEB_ROOT?>activities/1" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="<?=WEB_ROOT?>activities/1" class="title">Plumbing</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod tempor incididunt ut.</p>
                                    </div>
                                    <a href="<?=WEB_ROOT?>activities/1" class="readmore">
                                        <span class="text">read more</span>
                                        <i class="icons fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-1.jpg" alt="" class="img-full">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">Interior Design</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod tempor incididunt ut.</p>
                                    </div>
                                    <a href="#" class="readmore">
                                        <span class="text">read more</span>
                                        <i class="icons fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-4.jpg" alt="" class="img-full">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">Architecture</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipisic elit, sed do eiusmod tempor incididunt ut.</p>
                                    </div>
                                    <a href="#" class="readmore">
                                        <span class="text">read more</span>
                                        <i class="icons fa fa-angle-double-right"></i>
                                    </a>
                                </div>
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
<!-- MAIN JS-->
<script src="<?=ASSETS_ROOT?>/assets/scripts/main.js"></script>
</body>
</html>
