<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-23
 * Time: 3:10 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=App::APP_MAME?> | Articles</title>
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
            <div class="banner-pages banner-blog">
                <div class="container container-wrapper">
                    <div class="banner-wrapper">
                        <div class="title-wrapper">
                            <h1 class="title">our blog</h1>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#" class="breadcrumb-link">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <span class="breadcrumb-active">Blog</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="blog-content padding-top-100 padding-bottom-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="list-block column-3">
                                <div class="item">
                                    <div class="block-1">
                                        <div class="label-block">
                                            <div class="text-1">25.07</div>
                                            <div class="text-2">2016</div>
                                            <a href="#" class="link-date"></a>
                                        </div>
                                        <div class="block-image">
                                            <img src="<?=ASSETS_ROOT?>/assets/images/post/image-17.jpg" alt="" class="img-full">
                                            <a href="blog-detail.html" class="link"></a>
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
                                            <a href="blog-detail.html" class="title">Build, design and improve for modern life</a>
                                            <div class="description">
                                                <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                    tation ullamcorper.</p>
                                            </div>
                                            <a href="blog-detail.html" class="readmore-icons">
                                                <i class="icons flaticon-bleed"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-1">
                                        <div class="label-block">
                                            <div class="text-1">25.07</div>
                                            <div class="text-2">2016</div>
                                            <a href="#" class="link-date"> </a>
                                        </div>
                                        <div class="block-image block-gallery-images">
                                            <div class="gallery-images">
                                                <div class="item">
                                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-7.jpg" alt="" class="img-full">
                                                </div>
                                                <div class="item">
                                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-3.jpg" alt="" class="img-full">
                                                </div>
                                                <div class="item">
                                                    <img src="<?=ASSETS_ROOT?>/assets/images/post/image-8.jpg" alt="" class="img-full">
                                                </div>
                                            </div>
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
                                            <a href="blog-detail.html" class="title">The Basics Of Western schedule Explained</a>
                                            <div class="description">
                                                <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                    tation ullamcorper.</p>
                                            </div>
                                            <a href="blog-detail.html" class="readmore-icons">
                                                <i class="icons flaticon-bleed"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-1">
                                        <div class="label-block">
                                            <div class="text-1">25.07</div>
                                            <div class="text-2">2016</div>
                                            <a href="#" class="link-date"></a>
                                        </div>
                                        <div class="block-image block-video">
                                            <div class="btn-play">
                                                <img src="<?=ASSETS_ROOT?>/assets/images/more-images/btn-playvideo.png" alt="" class="img-responsive">
                                            </div>
                                            <div class="btn-close">
                                                <img src="<?=ASSETS_ROOT?>/assets/images/more-images/btn-closevideo.png" alt="" class="img-responsive">
                                            </div>
                                            <img src="<?=ASSETS_ROOT?>/assets/images/post/image-2.jpg" alt="" class="img-full">
                                            <iframe src="https://www.youtube.com/embed/1k2NRnc9vQ4?rel=0" allowfullscreen="allowfullscreen" class="video-embed"></iframe>
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
                                            <a href="blog-detail.html" class="title">What’s Wrong with Venture Capital</a>
                                            <div class="description">
                                                <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                    tation ullamcorper.</p>
                                            </div>
                                            <a href="blog-detail.html" class="readmore-icons">
                                                <i class="icons flaticon-bleed"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-1">
                                        <div class="label-block">
                                            <div class="text-1">25.07</div>
                                            <div class="text-2">2016</div>
                                            <a href="#" class="link-date"></a>
                                        </div>
                                        <div class="block-image">
                                            <img src="<?=ASSETS_ROOT?>/assets/images/post/image-1.jpg" alt="" class="img-full">
                                            <a href="blog-detail.html" class="link"></a>
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
                                            <a href="blog-detail.html" class="title">we help you fix your house</a>
                                            <div class="description">
                                                <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                    tation ullamcorper.</p>
                                            </div>
                                            <a href="blog-detail.html" class="readmore-icons">
                                                <i class="icons flaticon-bleed"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-1">
                                        <div class="label-block">
                                            <div class="text-1">25.07</div>
                                            <div class="text-2">2016</div>
                                            <a href="#" class="link-date"></a>
                                        </div>
                                        <div class="block-image">
                                            <img src="<?=ASSETS_ROOT?>/assets/images/post/image-6.jpg" alt="" class="img-full">
                                            <a href="blog-detail.html" class="link"></a>
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
                                            <a href="blog-detail.html" class="title">how to build a great house</a>
                                            <div class="description">
                                                <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                    tation ullamcorper.</p>
                                            </div>
                                            <a href="blog-detail.html" class="readmore-icons">
                                                <i class="icons flaticon-bleed"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-1">
                                        <div class="label-block">
                                            <div class="text-1">25.07</div>
                                            <div class="text-2">2016</div>
                                            <a href="#" class="link-date"></a>
                                        </div>
                                        <div class="block-image">
                                            <img src="<?=ASSETS_ROOT?>/assets/images/post/image-8.jpg" alt="" class="img-full">
                                            <a href="blog-detail.html" class="link"></a>
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
                                            <a href="blog-detail.html" class="title">We provide the best services</a>
                                            <div class="description">
                                                <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                    tation ullamcorper.</p>
                                            </div>
                                            <a href="blog-detail.html" class="readmore-icons">
                                                <i class="icons flaticon-bleed"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-1">
                                        <div class="label-block">
                                            <div class="text-1">25.07</div>
                                            <div class="text-2">2016</div>
                                            <a href="#" class="link-date"></a>
                                        </div>
                                        <div class="block-image">
                                            <img src="<?=ASSETS_ROOT?>/assets/images/post/image-9.jpg" alt="" class="img-full">
                                            <a href="blog-detail.html" class="link"></a>
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
                                            <a href="blog-detail.html" class="title">we build your best life</a>
                                            <div class="description">
                                                <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                    tation ullamcorper.</p>
                                            </div>
                                            <a href="blog-detail.html" class="readmore-icons">
                                                <i class="icons flaticon-bleed"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-1">
                                        <div class="label-block">
                                            <div class="text-1">25.07</div>
                                            <div class="text-2">2016</div>
                                            <a href="#" class="link-date"></a>
                                        </div>
                                        <div class="block-image">
                                            <img src="<?=ASSETS_ROOT?>/assets/images/post/image-12.jpg" alt="" class="img-full">
                                            <a href="blog-detail.html" class="link"></a>
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
                                            <a href="blog-detail.html" class="title">Build, design and improve for modern life</a>
                                            <div class="description">
                                                <p class="text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci
                                                    tation ullamcorper.</p>
                                            </div>
                                            <a href="blog-detail.html" class="readmore-icons">
                                                <i class="icons flaticon-bleed"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pagination-wrapper undefined">
                                <ul class="pagination">
                                    <li>
                                        <a href="#" class="link previous">previous</a>
                                    </li>
                                    <li>
                                        <a href="#" class="link">1</a>
                                    </li>
                                    <li>
                                        <a href="#" class="active link">2</a>
                                    </li>
                                    <li>
                                        <a href="#" class="link">...</a>
                                    </li>
                                    <li>
                                        <a href="#" class="link">9</a>
                                    </li>
                                    <li>
                                        <a href="#" class="link">10</a>
                                    </li>
                                    <li>
                                        <a href="#" class="link next">next</a>
                                    </li>
                                </ul>
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
