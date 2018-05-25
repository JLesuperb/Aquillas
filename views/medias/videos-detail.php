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
    <title><?=App::APP_MAME?> | Videos</title>
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
                        <div class="col-md-8 col-xs-12">
                            <div class="list-block column-1">
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
                                                    tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
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
                                                    tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                                            </div>
                                            <a href="blog-detail.html" class="readmore-icons">
                                                <i class="icons flaticon-bleed"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="block-1 style-2">
                                        <div class="label-block">
                                            <div class="text-1">25.07</div>
                                            <div class="text-2">2016</div>
                                            <a href="#" class="link-date"></a>
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
                                            <div class="block-quote">
                                                <div class="content">Real estate investing, even on a very small scale, remains a tried and true means of building an individual's cash flow and wealth.</div>
                                                <div class="author">anna thomson</div>
                                                <div class="title">CEO ANZ Bank</div>
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
                                                    tation ullamcorper suscip it lobortis nisl ut aliquip ex ea commodo consequat.</p>
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
                        <div class="col-md-4 col-xs-12 sidebar">
                            <div class="widget search-widget">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" placeholder="Search..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search...'" class="form-control">
                                        <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-secondary">
                                                        <i class="fa fa-search"></i>
                                                    </button>
                                                </span>
                                        <div class="line"></div>
                                    </div>
                                </form>
                            </div>
                            <div class="widget categories-widget">
                                <div class="title-widget">categories</div>
                                <div class="categories-inner">
                                    <a href="#" class="link">
                                        <span>All Categories</span>
                                        <i class="icons fa fa-angle-right"></i>
                                    </a>
                                    <a href="#" class="link">
                                        <span>Small &amp; Large Building</span>
                                        <i class="icons fa fa-angle-right"></i>
                                    </a>
                                    <a href="#" class="link">
                                        <span>Construction Consultant</span>
                                        <i class="icons fa fa-angle-right"></i>
                                    </a>
                                    <a href="#" class="link">
                                        <span>Metal Roofling</span>
                                        <i class="icons fa fa-angle-right"></i>
                                    </a>
                                    <a href="#" class="link">
                                        <span>Consultant</span>
                                        <i class="icons fa fa-angle-right"></i>
                                    </a>
                                    <a href="#" class="link">
                                        <span>Architecture</span>
                                        <i class="icons fa fa-angle-right"></i>
                                    </a>
                                    <a href="#" class="link">
                                        <span>Contruction</span>
                                        <i class="icons fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="widget recent-post-widget">
                                <div class="title-widget">Recent Posts</div>
                                <div class="recent-post-inner">
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#" class="wrapper-image">
                                                <img src="<?=ASSETS_ROOT?>/assets/images/post/image-1.jpg" alt="" class="media-object">
                                            </a>
                                        </div>
                                        <div class="media-right">
                                            <div class="meta">
                                                <div class="meta-info time">Date:
                                                    <a href="#" class="link">25.04.2016</a>
                                                </div>
                                                <div class="meta-info">By
                                                    <a href="#" class="link">John Doe </a>
                                                </div>
                                            </div>
                                            <a href="#" class="media-heading">We Build Your Best Home With Our Best Servieces</a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#" class="wrapper-image">
                                                <img src="<?=ASSETS_ROOT?>/assets/images/post/image-10.jpg" alt="" class="media-object">
                                            </a>
                                        </div>
                                        <div class="media-right">
                                            <div class="meta">
                                                <div class="meta-info time">Date:
                                                    <a href="#" class="link">25.04.2016</a>
                                                </div>
                                                <div class="meta-info">By
                                                    <a href="#" class="link">John Doe </a>
                                                </div>
                                            </div>
                                            <a href="#" class="media-heading">The Best Construction And Contructors Services</a>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#" class="wrapper-image">
                                                <img src="<?=ASSETS_ROOT?>/assets/images/post/image-8.jpg" alt="" class="media-object">
                                            </a>
                                        </div>
                                        <div class="media-right">
                                            <div class="meta">
                                                <div class="meta-info time">Date:
                                                    <a href="#" class="link">25.04.2016</a>
                                                </div>
                                                <div class="meta-info">By
                                                    <a href="#" class="link">John Doe </a>
                                                </div>
                                            </div>
                                            <a href="#" class="media-heading">We Build Your Best Home With Our Best Services</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget archive-widget">
                                <div class="title-widget">Archive</div>
                                <div class="calendar-inner">
                                    <div class="calendar-board"></div>
                                </div>
                            </div>
                            <div class="widget tag-widget">
                                <div class="title-widget">Popular Tags</div>
                                <div class="tag-inner">
                                    <ul class="list-unstyled list-inline">
                                        <li>
                                            <a href="#" class="tag">Apartment</a>
                                        </li>
                                        <li>
                                            <a href="#" class="tag">Apartment Building</a>
                                        </li>
                                        <li>
                                            <a href="#" class="tag">Cottage</a>
                                        </li>
                                        <li>
                                            <a href="#" class="tag">Construction</a>
                                        </li>
                                        <li>
                                            <a href="#" class="tag">Architecture</a>
                                        </li>
                                        <li>
                                            <a href="#" class="tag">Design</a>
                                        </li>
                                        <li>
                                            <a href="#" class="tag">Interior</a>
                                        </li>
                                        <li>
                                            <a href="#" class="tag">Build</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget banner-adv-widget">
                                <div class="banner-adv-inner">
                                    <img src="<?=ASSETS_ROOT?>/assets/images/sidebar/banner-1.jpg" alt="" class="img-responsive">
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
