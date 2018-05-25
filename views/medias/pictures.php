<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-23
 * Time: 3:11 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=App::APP_MAME?> | Pictures</title>
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
            <div class="banner-pages banner-gallery-masonry">
                <div class="container container-wrapper">
                    <div class="banner-wrapper">
                        <div class="title-wrapper">
                            <h1 class="title">gallery</h1>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" class="breadcrumb-link">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="#" class="breadcrumb-link">Pages</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <span class="breadcrumb-active">Gallery</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="gallery-masonry padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="gallery-image-nav">
                        <ul class="tab-filter tablist">
                            <li data-filter="*" data-category="all" class="tab active">
                                <div class="link">all</div>
                            </li>
                            <li data-filter=".tab-6" data-category="tab-6" class="tab">
                                <div class="link">contruction</div>
                            </li>
                            <li data-filter=".tab-7" data-category="tab-7" class="tab">
                                <div class="link">interior</div>
                            </li>
                            <li data-filter=".tab-8" data-category="tab-8" class="tab">
                                <div class="link">architect</div>
                            </li>
                            <li data-filter=".tab-9" data-category="tab-9" class="tab">
                                <div class="link">building</div>
                            </li>
                            <li data-filter=".tab-10" data-category="tab-10" class="tab">
                                <div class="link">plumbing</div>
                            </li>
                        </ul>
                    </div>
                    <div class="gallery-image-grid">
                        <div class="grid-item tab-6 tab-9 tab-8">
                            <div class="block-image-gallery">
                                <a href="<?=ASSETS_ROOT?>/assets/images/post/image-24.jpg" data-fancybox-group="gallery-2" class="fancybox-thumb">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-24.jpg" alt="" class="img-full">
                                    <div class="bg-hover-1"></div>
                                    <div class="bg-hover-2"></div>
                                </a>
                                <div class="content">
                                    <a href="#" class="link">Architect</a>
                                    <div class="title">ALAB</div>
                                </div>
                                <a href="#" class="readmore-icons">
                                    <i class="icons flaticon-bleed"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item grid-item-height-2 tab-6 tab-10 tab-8">
                            <div class="block-image-gallery">
                                <a href="<?=ASSETS_ROOT?>/assets/images/post/image-27.jpg" data-fancybox-group="gallery-2" class="fancybox-thumb">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-27.jpg" alt="" class="img-full">
                                    <div class="bg-hover-1"></div>
                                    <div class="bg-hover-2"></div>
                                </a>
                                <div class="content">
                                    <a href="#" class="link">Architect</a>
                                    <div class="title">FLOURY</div>
                                </div>
                                <a href="#" class="readmore-icons">
                                    <i class="icons flaticon-bleed"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item tab-7 tab-8 tab-10">
                            <div class="block-image-gallery">
                                <a href="<?=ASSETS_ROOT?>/assets/images/post/image-25.jpg" data-fancybox-group="gallery-2" class="fancybox-thumb">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-25.jpg" alt="" class="img-full">
                                    <div class="bg-hover-1"></div>
                                    <div class="bg-hover-2"></div>
                                </a>
                                <div class="content">
                                    <a href="#" class="link">Architect</a>
                                    <div class="title">TRANSERA</div>
                                </div>
                                <a href="#" class="readmore-icons">
                                    <i class="icons flaticon-bleed"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item tab-6 tab-8 tab-9 tab-7">
                            <div class="block-image-gallery">
                                <a href="<?=ASSETS_ROOT?>/assets/images/post/image-29.jpg" data-fancybox-group="gallery-2" class="fancybox-thumb">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-29.jpg" alt="" class="img-full">
                                    <div class="bg-hover-1"></div>
                                    <div class="bg-hover-2"></div>
                                </a>
                                <div class="content">
                                    <a href="#" class="link">Architect</a>
                                    <div class="title">BUILDPLUS</div>
                                </div>
                                <a href="#" class="readmore-icons">
                                    <i class="icons flaticon-bleed"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item tab-7 tab-8 tab-9 tab-10">
                            <div class="block-image-gallery">
                                <a href="<?=ASSETS_ROOT?>/assets/images/post/image-21.jpg" data-fancybox-group="gallery-2" class="fancybox-thumb">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-21.jpg" alt="" class="img-full">
                                    <div class="bg-hover-1"></div>
                                    <div class="bg-hover-2"></div>
                                </a>
                                <div class="content">
                                    <a href="#" class="link">Architect</a>
                                    <div class="title">SOLALA</div>
                                </div>
                                <a href="#" class="readmore-icons">
                                    <i class="icons flaticon-bleed"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item grid-item-height-2 tab-6 tab-8 tab-10">
                            <div class="block-image-gallery">
                                <a href="<?=ASSETS_ROOT?>/assets/images/post/image-26.jpg" data-fancybox-group="gallery-2" class="fancybox-thumb">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-26.jpg" alt="" class="img-full">
                                    <div class="bg-hover-1"></div>
                                    <div class="bg-hover-2"></div>
                                </a>
                                <div class="content">
                                    <a href="#" class="link">Architect</a>
                                    <div class="title">FLEXI</div>
                                </div>
                                <a href="#" class="readmore-icons">
                                    <i class="icons flaticon-bleed"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item grid-item-height-2 tab-10 tab-6 tab-9">
                            <div class="block-image-gallery">
                                <a href="<?=ASSETS_ROOT?>/assets/images/post/image-22.jpg" data-fancybox-group="gallery-2" class="fancybox-thumb">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-22.jpg" alt="" class="img-full">
                                    <div class="bg-hover-1"></div>
                                    <div class="bg-hover-2"></div>
                                </a>
                                <div class="content">
                                    <a href="#" class="link">Architect</a>
                                    <div class="title">APPEXPO</div>
                                </div>
                                <a href="#" class="readmore-icons">
                                    <i class="icons flaticon-bleed"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item tab-9 tab-8 tab-7">
                            <div class="block-image-gallery">
                                <a href="<?=ASSETS_ROOT?>/assets/images/post/image-25.jpg" data-fancybox-group="gallery-2" class="fancybox-thumb">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-25.jpg" alt="" class="img-full">
                                    <div class="bg-hover-1"></div>
                                    <div class="bg-hover-2"></div>
                                </a>
                                <div class="content">
                                    <a href="#" class="link">Architect</a>
                                    <div class="title">GRASSY</div>
                                </div>
                                <a href="#" class="readmore-icons">
                                    <i class="icons flaticon-bleed"></i>
                                </a>
                            </div>
                        </div>
                        <div class="grid-item tab-10 tab-8 tab-6 tab-9">
                            <div class="block-image-gallery">
                                <a href="<?=ASSETS_ROOT?>/assets/images/post/image-23.jpg" data-fancybox-group="gallery-2" class="fancybox-thumb">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-23.jpg" alt="" class="img-full">
                                    <div class="bg-hover-1"></div>
                                    <div class="bg-hover-2"></div>
                                </a>
                                <div class="content">
                                    <a href="#" class="link">Architect</a>
                                    <div class="title">MAGICLEAN</div>
                                </div>
                                <a href="#" class="readmore-icons">
                                    <i class="icons flaticon-bleed"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="btn-loadmore">
                        <span class="text">load more</span>
                        <img src="<?=ASSETS_ROOT?>/assets/images/gif/loading.gif" alt="" class="img-load">
                    </button>
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
