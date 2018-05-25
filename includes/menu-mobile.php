<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-12
 * Time: 2:02 AM
 */
?>
<div class="menu-mobile-wrapper">
    <div class="search-mobile">
        <form action="#" class="input-group">
            <input type="text" placeholder="Search..." class="form-control" />
            <span class="input-group-btn">
                <button type="submit" class="btn btn-secondary">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </form>
    </div>
    <ul class="nav navbar-nav">
        <li class="menu-item dropdown current-menu-item">
            <a href="javascript:void(0)">
                <span class="text">Home</span>
                <span class="icons fa fa-angle-right"></span>
            </a>
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="<?=WEB_ROOT?>home/index">
                        <span class="text">Homepage Default</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=WEB_ROOT?>home/second">
                        <span class="text">Homepage 2</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=WEB_ROOT?>home/third">
                        <span class="text">Homepage 3</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=WEB_ROOT?>home/cleaning">
                        <span class="text">Homepage Cleaning</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=WEB_ROOT?>home/plumbing">
                        <span class="text">Homepage Plumbing</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="<?=WEB_ROOT?>home/second">
                <span class="text">Tab Menu</span>
                <span class="icons fa fa-angle-right"></span>
            </a>
        </li>
        <li class="menu-item">
            <a href="<?=WEB_ROOT?>home/third">
                <span class="text">Mega Menu</span>
                <span class="icons fa fa-angle-right"></span>
            </a>
        </li>
        <li class="menu-item dropdown">
            <a href="javascript:void(0)">
                <span class="text">Project</span>
                <span class="icons fa fa-angle-right"></span>
            </a>
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="<?=WEB_ROOT?>projects">
                        <span class="text">Project List</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=WEB_ROOT?>projects/id">
                        <span class="text">Project Detail</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item dropdown">
                    <a href="javascript:void(0)">
                        <span class="text">Gallery</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                    <ul class="sub-menu left">
                        <li class="menu-item">
                            <a href="<?=WEB_ROOT?>projects/cols">
                                <span class="text">Gallery 3 Column</span>
                                <span class="icons fa fa-angle-right"></span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="<?=WEB_ROOT?>projects/variation">
                                <span class="text">Gallery Variation</span>
                                <span class="icons fa fa-angle-right"></span>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="<?=WEB_ROOT?>projects/masonry">
                                <span class="text">Gallery Masonry</span>
                                <span class="icons fa fa-angle-right"></span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-item dropdown">
            <a href="javascript:void(0)">
                <span class="text">Blog</span>
                <span class="icons fa fa-angle-right"></span>
            </a>
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="<?=WEB_ROOT?>blog">
                        <span class="text">Blog List</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="blogs-sidebar-left.html">
                        <span class="text">Blog List sidebar left</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="blogs-2column.html">
                        <span class="text">Blog list 2 column</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="blogs-3column.html">
                        <span class="text">Blog list 3 column</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="blog-detail.html">
                        <span class="text">Blog Detail</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="blog-detail-sidebar-left.html">
                        <span class="text">Blog Detail sidebar left</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item dropdown">
            <a href="javascript:void(0)">
                <span class="text">Pages</span>
                <span class="icons fa fa-angle-right"></span>
            </a>
            <ul class="sub-menu">
                <li class="menu-item">
                    <a href="about.html">
                        <span class="text">About</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="team.html">
                        <span class="text">Team</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="services.html">
                        <span class="text">Services</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="service-detail.html">
                        <span class="text">Service Detail</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="contact.html">
                        <span class="text">Contact</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="coming-soon.html">
                        <span class="text">Coming Soon</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="404.html">
                        <span class="text">page 404</span>
                        <span class="icons fa fa-angle-right"></span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
