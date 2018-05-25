
<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-12
 * Time: 12:54 AM
 */
?>
<div class="header-wrapper header-absolute style-2">
    <div class="container">
        <div class="header-topbar">
            <div class="topbar-list pull-left">
                <div class="item topbar-hidden">
                    <i class="topbar-icons fa fa-clock-o"></i>
                    <p class="topbar-text">Mon - Sat at 7:00AM to 9:00PM</p>
                </div>
                <div class="item topbar-hidden">
                    <i class="topbar-icons fa fa-map-marker"></i>
                    <p class="topbar-text">30 Mortensen Avenue, Salinas, CA 93905</p>
                </div>
            </div>
            <div class="topbar-list pull-right">
                <div class="item">
                    <i class="topbar-icons fa fa-phone"></i>
                    <div class="topbar-text">Hotline:
                        <a class="number-phone" href="tel:+123456789">+1 234 567 89</a>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="header-main">
            <div class="hamburger-menu">
                <span class="nav-label">Menu</span>
                <span class="nav-svg">
                    <svg id="Layer_2" width="50" height="50" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewbox="0 524.5 2000 2000.5"
                         enable-background="new 0 524.5 2000 2000.5" xml:space="preserve">
                        <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M1410.5,1235.2H589.3" class="x"></path>
                        <path fill="none" stroke="#000000" stroke-miterlimit="10" d="M1410.5,1815H589.3" class="x"></path>
                        <path fill="none" stroke="#000000" stroke-miterlimit="10"
                              d="M1410.5,1524.7c0,0-821.2,0-821.2,0c-211.3,0-260,98-218.2,217.6            l0,0.1c90.1,260.7,337.6,447.9,628.9,447.9c367.4,0,665.2-297.8,665.2-665.2c0-79-13.8-154.8-39.1-225.2"
                                                  class="yy"></path>
                        <path fill="none" stroke="#000000" stroke-miterlimit="10"
                              d="M589.3,1524.7c0,0,821.2,0,821.2,0c211.3,0,260-98,218.2-217.6l0-0.1            c-90.1-260.7-337.6-447.9-628.9-447.9c-367.4,0-665.2,297.8-665.2,665.2c0,79,13.8,154.8,39.1,225.2"
                                                  class="yy"></path>
                    </svg>
                </span>
            </div>
            <div class="logo-wrapper">
                <a href="<?=WEB_ROOT?>" class="logo">
                    <img src="<?=ASSETS_ROOT?>/assets/images/logos/logo.png" alt="" class="img-responsive" />
                </a>
            </div>
            <div class="main-menu">
                <ul class="nav navbar-nav nav-menu menu-wrapper">
                    <!--Home-->
                    <li class="menu-item <?=(CURRENT_PAGE=='home')?'current-menu-item':''?>">
                        <a href="<?=WEB_ROOT?>">
                            <span class="text">Acceuil</span>
                        </a>
                    </li>
                    <!--About-->
                    <li class="menu-item <?=(CURRENT_PAGE=='about')?'current-menu-item':''?> dropdown">
                        <a href="javascript:void(0)">
                            <span class="text">A Propos</span>
                            <span class="icons fa fa-angle-down"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="<?=WEB_ROOT?>about/author">
                                    <span class="text">Mot de la directrice</span>
                                    <span class="icons fa fa-angle-right"></span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?=WEB_ROOT?>about/summary">
                                    <span class="text">Au sujet d'aquilla's group</span>
                                    <span class="icons fa fa-angle-right"></span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?=WEB_ROOT?>about/members">
                                    <span class="text">Membres</span>
                                    <span class="icons fa fa-angle-right"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Themes-->
                    <li class="menu-item <?=(CURRENT_PAGE=='themes')?'current-menu-item':''?> dropdown">
                        <a href="javascript:void(0)">
                            <span class="text">Themes</span>
                            <span class="icons fa fa-angle-down"></span>
                        </a>
                        <div class="mega-menu">
                            <ul class="mega-menu-wrapper column-3">
                                <li class="mega-menu-column">
                                    <ul class="list-link">
                                        <li>
                                            <a href="<?=WEB_ROOT?>themes/education-development" class="link">
                                                <i class="icons fa fa-university"></i>
                                                <span class="text">Education & Developpement personnel</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=WEB_ROOT?>themes/leadership-entrepreneurship" class="link">
                                                <i class="icons fa fa-university"></i>
                                                <span class="text">Leadership & Entrepreneuriat</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=WEB_ROOT?>themes/health" class="link">
                                                <i class="icons fa fa-university"></i>
                                                <span class="text">Santé</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-menu-column">
                                    <ul class="list-link">
                                        <li>
                                            <a href="<?=WEB_ROOT?>themes/education-culture" class="link">
                                                <i class="icons fa fa-truck"></i>
                                                <span class="text">Education citoyenne & Culture de la paix</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=WEB_ROOT?>themes/humans-right" class="link">
                                                <i class="icons fa fa-truck"></i>
                                                <span class="text">Droits Humains</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=WEB_ROOT?>themes/child-right" class="link">
                                                <i class="icons fa fa-truck"></i>
                                                <span class="text">Droits de l'enfant</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-menu-column">
                                    <ul class="list-link">
                                        <li>
                                            <a href="<?=WEB_ROOT?>themes/protection" class="link">
                                                <i class="icons fa fa-truck"></i>
                                                <span class="text">Encadrement & Protection de l'enfant</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=WEB_ROOT?>themes/culture-art" class="link">
                                                <i class="icons fa fa-truck"></i>
                                                <span class="text">Culture & Art</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--Programmes-->
                    <li class="menu-item <?=(CURRENT_PAGE=='programmes')?'current-menu-item':''?> dropdown">
                        <a href="javascript:void(0)">
                            <span class="text">Programmes</span>
                            <span class="icons fa fa-angle-down"></span>
                        </a>
                        <div class="mega-menu">
                            <ul class="mega-menu-wrapper column-3">
                                <li class="mega-menu-column">
                                    <ul class="list-link">
                                        <li>
                                            <a href="<?=WEB_ROOT?>programmes/education" class="link">
                                                <i class="icons fa fa-university"></i>
                                                <span class="text">Education & Droits Humains</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=WEB_ROOT?>programmes/leadership" class="link">
                                                <i class="icons fa fa-university"></i>
                                                <span class="text">Leadership & Developpement</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-menu-column">
                                    <ul class="list-link">
                                        <li>
                                            <a href="<?=WEB_ROOT?>programmes/health" class="link">
                                                <i class="icons fa fa-truck"></i>
                                                <span class="text">Santé</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=WEB_ROOT?>programmes/kinds" class="link">
                                                <i class="icons fa fa-truck"></i>
                                                <span class="text">Genre</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-menu-column">
                                    <ul class="list-link">
                                        <li>
                                            <a href="<?=WEB_ROOT?>programmes/protection" class="link">
                                                <i class="icons fa fa-bed"></i>
                                                <span class="text">Protection</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?=WEB_ROOT?>programmes/partners" class="link">
                                                <i class="icons fa fa-shopping-basket"> </i>
                                                <span class="text">Ecoles Partenaires</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!--EPA-->
                    <li class="menu-item <?=(CURRENT_PAGE=='epa')?'current-menu-item':''?> dropdown">
                        <a href="javascript:void(0)">
                            <span class="text">EPA</span>
                            <span class="icons fa fa-angle-down"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="<?=WEB_ROOT?>epa/registers">
                                    <span class="text">Repertoire</span>
                                    <span class="icons fa fa-angle-right"></span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?=WEB_ROOT?>epa/sign-up">
                                    <span class="text">S'enregistrer</span>
                                    <span class="icons fa fa-angle-right"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Activities-->
                    <li class="menu-item <?=(CURRENT_PAGE=='activities')?'current-menu-item':''?>">
                        <a href="<?=WEB_ROOT?>activities">
                            <span class="text">Activities</span>
                        </a>
                    </li>
                    <!--Medias-->
                    <li class="menu-item <?=(CURRENT_PAGE=='medias')?'current-menu-item':''?> dropdown">
                        <a href="javascript:void(0)">
                            <span class="text">Medias</span>
                            <span class="icons fa fa-angle-down"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="menu-item">
                                <a href="<?=WEB_ROOT?>medias/articles">
                                    <span class="text">Articles & Revue</span>
                                    <span class="icons fa fa-angle-right"></span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?=WEB_ROOT?>medias/pictures">
                                    <span class="text">Photos</span>
                                    <span class="icons fa fa-angle-right"></span>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="<?=WEB_ROOT?>medias/videos">
                                    <span class="text">Videos</span>
                                    <span class="icons fa fa-angle-right"></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--Contact-->
                    <li class="menu-item <?=(CURRENT_PAGE=='contact-us')?'current-menu-item':''?>">
                        <a href="<?=WEB_ROOT?>contact-us">
                            <span class="text">Contact-us</span>
                            <span class="icons fa fa-angle-down"></span>
                        </a>
                    </li>
                </ul>
                <div class="button-search">
                    <i class="icons fa fa-search"></i>
                </div>
                <div class="nav-wrapper">
                    <div class="nav-search hide">
                        <form>
                            <input type="text" placeholder="Search" class="searchbox" />
                            <button type="submit" class="searchbutton fa fa-search"></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
