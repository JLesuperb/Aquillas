<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-12
 * Time: 2:23 AM
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=App::APP_MAME?> | Homepage</title>
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

            <!-- Sliders -->
            <section class="slide-banner-1">
                <div class="slide-banner-1-item">
                    <img src="<?=ASSETS_ROOT?>/assets/images/background/slider-1.jpg" alt="" class="img-bg">
                    <div class="container wrapper-item-content">
                        <div class="content">
                            <div class="slide-banner-1-item-wrapper">
                                <h5 class="subtitle">welcome to buildplus</h5>
                                <h1 class="title">we build your best life</h1>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <a href="#" class="btn main-color">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-banner-1-item">
                    <img src="<?=ASSETS_ROOT?>/assets/images/background/slider-banner-2.jpg" alt="" class="img-bg">
                    <div class="container wrapper-item-content">
                        <div class="content">
                            <div class="slide-banner-1-item-wrapper">
                                <h5 class="subtitle">We Are Buildplus</h5>
                                <h1 class="title">WELCOME TO BUILDPLUS</h1>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <a href="#" class="btn main-color">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-banner-1-item">
                    <img src="<?=ASSETS_ROOT?>/assets/images/background/slider-banner-3.jpg" alt="" class="img-bg">
                    <div class="container wrapper-item-content">
                        <div class="content">
                            <div class="slide-banner-1-item-wrapper">
                                <h5 class="subtitle">WHY CHOOSE US</h5>
                                <h1 class="title">WE BUILD YOUR DREAM</h1>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                                <a href="#" class="btn main-color">view more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div style="background-color: rgba(0,0,0,0.0);
            position: absolute;width: 200px !important;
            height: 250px !important;
            right: 0;z-index: 100;top: 350px;">
                <div style="margin: 0 25px">
                    <img src="<?=ASSETS_ROOT?>/assets/images/team/image-7.png" style="width: 150px;height: 200px;" />
                    <div class="banner-btn">
                        <a href="#" class="btn white-color">Donation</a>
                    </div>
                </div>
            </div>

            <!-- Summaries -->
            <div class="list-block-services padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="list-block column-3">
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-10.jpg" alt="" class="img-full">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">Construction</a>
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
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-9.jpg" alt="" class="img-full">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">Construction Consultant</a>
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
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-18.jpg" alt="" class="img-full">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">Metal Roofing</a>
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

            <!-- Teams -->
            <div class="testimonial-homepage-1 bg-blue white">
                <div class="container">
                    <div class="list-testimonial-2">
                        <div class="item">
                            <div class="testimonial-2">
                                <div class="img-wrapper">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/team/image-7.png" alt="" class="img-responsive">
                                </div>
                                <div class="content-wrapper">
                                    <p class="testimonial">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do lor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excep teur sint occae
                                        cat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                    <div class="infomation">
                                        <img src="<?=ASSETS_ROOT?>/assets/images/more-images/signature.png" alt="" class="img-responsive">
                                        <p class="name">anna thomson -
                                            <span class="position">CEO ANZ Bank</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Activities -->
            <section class="recent-news no-bg-img padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="heading-main">
                        <div class="main-title text-center">
                            <h5 class="subtitle">blog post</h5>
                            <h2 class="title">recent news</h2>
                        </div>
                    </div>
                    <div class="slide-block no-dots column-3">
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-15.jpg" alt="" class="img-full">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-info">
                                    <div class="block">
                                        <a href="#" class="link">john doe</a>
                                    </div>
                                    <div class="block">
                                        <p class="link">date:</p>
                                        <a href="#" class="link date">25.07.2016</a>
                                    </div>
                                    <div class="block">
                                        <p class="link">24 comments</p>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">how to build a great house</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                    <a href="#" class="readmore-icons">
                                        <i class="icons flaticon-bleed"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-10.jpg" alt="" class="img-full">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-info">
                                    <div class="block">
                                        <a href="#" class="link">john doe</a>
                                    </div>
                                    <div class="block">
                                        <p class="link">date:</p>
                                        <a href="#" class="link date">25.07.2016</a>
                                    </div>
                                    <div class="block">
                                        <p class="link">24 comments</p>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">the best team state</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                    <a href="#" class="readmore-icons">
                                        <i class="icons flaticon-bleed"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-13.jpg" alt="" class="img-full">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-info">
                                    <div class="block">
                                        <a href="#" class="link">john doe</a>
                                    </div>
                                    <div class="block">
                                        <p class="link">date:</p>
                                        <a href="#" class="link date">25.07.2016</a>
                                    </div>
                                    <div class="block">
                                        <p class="link">24 comments</p>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">we help you fix your house</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                    <a href="#" class="readmore-icons">
                                        <i class="icons flaticon-bleed"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-7.jpg" alt="" class="img-full">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-info">
                                    <div class="block">
                                        <a href="#" class="link">john doe</a>
                                    </div>
                                    <div class="block">
                                        <p class="link">date:</p>
                                        <a href="#" class="link date">25.07.2016</a>
                                    </div>
                                    <div class="block">
                                        <p class="link">24 comments</p>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">how to build a great house</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                    <a href="#" class="readmore-icons">
                                        <i class="icons flaticon-bleed"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-8.jpg" alt="" class="img-full">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-info">
                                    <div class="block">
                                        <a href="#" class="link">john doe</a>
                                    </div>
                                    <div class="block">
                                        <p class="link">date:</p>
                                        <a href="#" class="link date">25.07.2016</a>
                                    </div>
                                    <div class="block">
                                        <p class="link">24 comments</p>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">the best team state</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                    <a href="#" class="readmore-icons">
                                        <i class="icons flaticon-bleed"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="block-image">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-9.jpg" alt="" class="img-full">
                                    <a href="#" class="link"></a>
                                </div>
                                <div class="block-info">
                                    <div class="block">
                                        <a href="#" class="link">john doe</a>
                                    </div>
                                    <div class="block">
                                        <p class="link">date:</p>
                                        <a href="#" class="link date">25.07.2016</a>
                                    </div>
                                    <div class="block">
                                        <p class="link">24 comments</p>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <a href="#" class="title">we help you fix your house</a>
                                    <div class="description">
                                        <p class="text">Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididunt.</p>
                                    </div>
                                    <a href="#" class="readmore-icons">
                                        <i class="icons flaticon-bleed"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Counselling -->
            <div class="testimonial-homepage-1 bg-blue white">
                <div class="container">
                    <div class="list-testimonial-2">
                        <div class="item">
                            <div class="testimonial-2">
                                <div class="img-wrapper">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/team/image-7.png" alt="" class="img-responsive">
                                </div>
                                <div class="content-wrapper">
                                    <p class="testimonial">Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do lor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excep teur sint occae
                                        cat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                                    <div class="infomation">
                                        <img src="<?=ASSETS_ROOT?>/assets/images/more-images/signature.png" alt="" class="img-responsive">
                                        <p class="name">anna thomson -
                                            <span class="position">CEO ANZ Bank</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News & Blog -->
            <div class="list-block-services padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="list-block column-2">
                        <div class="item">
                            <div class="block-1">
                                <div class="widget recent-post-widget">
                                    <div class="title-widget">Recent News</div>
                                    <div class="recent-post-inner">
                                        <div class="media style-2">
                                            <div class="meta">
                                                <i class="icons fa fa-bookmark"></i>
                                                <div class="meta-info time">Date:
                                                    <a href="#" class="link">25.04.2016</a>
                                                </div>
                                            </div>
                                            <div class="media-left">
                                                <a href="#" class="wrapper-image">
                                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-1.jpg" alt="" class="media-object" />
                                                </a>
                                            </div>
                                            <div class="media-right">
                                                <a href="#" class="media-heading">How To Build A Villa With Garden And Swimming</a>
                                            </div>
                                        </div>
                                        <div class="media style-2">
                                            <div class="meta">
                                                <i class="icons fa fa-bookmark"></i>
                                                <div class="meta-info time">Date:
                                                    <a href="#" class="link">25.04.2016</a>
                                                </div>
                                            </div>
                                            <div class="media-left">
                                                <a href="#" class="wrapper-image">
                                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-2.jpg" alt="" class="media-object" />
                                                </a>
                                            </div>
                                            <div class="media-right">
                                                <a href="#" class="media-heading">The Good Plan From Design To Build Your</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-1">
                                <div class="widget recent-post-widget">
                                    <div class="title-widget">Recent News</div>
                                    <div class="recent-post-inner">
                                        <div class="media style-2">
                                            <div class="meta">
                                                <i class="icons fa fa-bookmark"></i>
                                                <div class="meta-info time">Date:
                                                    <a href="#" class="link">25.04.2016</a>
                                                </div>
                                            </div>
                                            <div class="media-left">
                                                <a href="#" class="wrapper-image">
                                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-1.jpg" alt="" class="media-object" />
                                                </a>
                                            </div>
                                            <div class="media-right">
                                                <a href="#" class="media-heading">How To Build A Villa With Garden And Swimming</a>
                                            </div>
                                        </div>
                                        <div class="media style-2">
                                            <div class="meta">
                                                <i class="icons fa fa-bookmark"></i>
                                                <div class="meta-info time">Date:
                                                    <a href="#" class="link">25.04.2016</a>
                                                </div>
                                            </div>
                                            <div class="media-left">
                                                <a href="#" class="wrapper-image">
                                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-2.jpg" alt="" class="media-object" />
                                                </a>
                                            </div>
                                            <div class="media-right">
                                                <a href="#" class="media-heading">The Good Plan From Design To Build Your</a>
                                            </div>
                                        </div>
                                    </div>
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
<div class="theme-setting">
    <div class="theme-loading">
        <div class="theme-loading-content">
            <div class="dots-loader"></div>
        </div>
    </div>
    <a href="javascript:void();" class="btn-theme-setting"><i class="fa fa-tint"></i></a>
    <div class="content-theme-setting">
        <h2 class="title">setting color</h2>
        <ul class="list-unstyled list-inline color-skins">
            <li data-color="color-1"></li>
            <li data-color="color-2"></li>
            <li data-color="color-3"></li>
            <li data-color="color-4"></li>
            <li data-color="color-5"></li>
            <li data-color="color-6"></li>
            <li data-color="color-7"></li>
            <li data-color="color-8"></li>
            <li data-color="color-9"></li>
            <li data-color="color-10"></li>
        </ul>
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

