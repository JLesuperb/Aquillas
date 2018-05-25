<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-28
 * Time: 1:05 PM
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=App::APP_MAME?> | Connexion</title>

    <link rel="stylesheet" href="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/css/ajax-auth-style.css" type="text/css"/>
    <link rel="stylesheet" href="<?=ASSETS_ROOT?>/assets/fonts/font-awesome/css/font-awesome.css" type="text/css" />
    <link rel="stylesheet" href="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/css/mdb.min.css" type="text/css" />
    <link rel="stylesheet" href="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/css/style.min.css" type="text/css" />
    <link rel="stylesheet" href="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/css/prism.min.css" type="text/css" />
    <link rel="stylesheet" href="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/style.css" type="text/css" />
    <script src="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/js/jquery.validate.js"></script>
    <script>const ROOT = '<?=WEB_ROOT?>'</script>
</head>
<body data-spy="scroll" data-target="#scrollspy" data-offset="15" style="background: #eee">
<ul id="slide-out" class="side-nav fixed default-side-nav light-side-nav">
    <!-- Logo -->
    <div class="logo-wrapper waves-light">
        <a href="<?=WEB_ROOT?>"  class="waves-effect waves-light logo-wrapper">
            <img src="<?=ASSETS_ROOT?>/assets/images/logos/logo-2.png" class="img-fluid">
        </a>
    </div>
    <!--/. Logo -->
    <!--/. Logo -->
    <ul id="side-menu" class="menu">
        <ul class="collapsible collapsible-accordion">
            <li id="menu-item-337" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children collapsible collapsible-accordion menu-item-337"><a class="collapsible-header waves-effect">CSS</a>
                <div class="collapsible-body">
                    <ul class="sub-menu">
                        <li id="menu-item-338" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-338"><a class="waves-effect" href="css/animations/index.html">Animations</a></li>
                        <li id="menu-item-339" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-339"><a class="waves-effect" href="css/colors/index.html">Colors</a></li>
                        <li id="menu-item-1206" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-1206"><a class="waves-effect" href="css/helpers/index.html">Helpers</a></li>
                        <li id="menu-item-1203" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-1203"><a class="waves-effect" href="css/hover-effects/index.html">Hover effects</a></li>
                        <li id="menu-item-340" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-340"><a class="waves-effect" href="css/icons/index.html">Icons usage</a></li>
                        <li id="menu-item-8799" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-8799"><a class="waves-effect" href="css/icons-list/index.html">Icons list</a></li>
                        <li id="menu-item-8366" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8366"><a class="waves-effect" href="css/layout-grid/index.html">Layout / grid</a></li>
                        <li id="menu-item-2338" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-2338"><a class="waves-effect" href="css/masks/index.html">Masks</a></li>
                        <li id="menu-item-8367" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8367"><a class="waves-effect" href="css/media/index.html">Media</a></li>
                        <li id="menu-item-341" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-341"><a class="waves-effect" href="css/shadows/index.html">Shadows</a></li>
                        <li id="menu-item-8368" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8368"><a class="waves-effect" href="css/tables/index.html">Tables</a></li>
                        <li id="menu-item-342" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-342"><a class="waves-effect" href="css/typography/index.html">Typography</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li id="menu-item-325" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children collapsible collapsible-accordion menu-item-325">
                <a class="collapsible-header waves-effect">Components</a>
                <div class="collapsible-body">
                    <ul class="sub-menu">
                        <li id="menu-item-327" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-327"><a class="waves-effect" href="components/buttons/index.html">Buttons</a></li>
                        <li id="menu-item-536" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-536"><a class="waves-effect" href="components/social-buttons/index.html">Social buttons</a></li>
                        <li id="menu-item-328" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-328"><a class="waves-effect" href="components/cards/index.html">Cards</a></li>
                        <li id="menu-item-8369" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8369"><a class="waves-effect" href="components/dropdowns/index.html">Dropdowns</a></li>
                        <li id="menu-item-330" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-330"><a class="waves-effect" href="components/forms/index.html">Forms</a></li>
                        <li id="menu-item-8371" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8371"><a class="waves-effect" href="components/list-group/index.html">List group</a></li>
                        <li id="menu-item-8372" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8372"><a class="waves-effect" href="components/miscellaneous/index.html">Miscellaneous</a></li>
                        <li id="menu-item-332" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-332"><a class="waves-effect" href="components/navbars/index.html">Navbars</a></li>
                        <li id="menu-item-334" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-334"><a class="waves-effect" href="components/panels/index.html">Panels</a></li>
                        <li id="menu-item-8373" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8373"><a class="waves-effect" href="components/progress-bars/index.html">Progress bars</a></li>
                        <li id="menu-item-8374" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8374"><a class="waves-effect" href="components/tabs/index.html">Tabs</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li id="menu-item-344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children collapsible collapsible-accordion menu-item-344">
                <a class="collapsible-header waves-effect">JavaScript</a>
                <div class="collapsible-body">
                    <ul class="sub-menu">
                        <li id="menu-item-8375" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8375"><a class="waves-effect" href="javascript/alerts/index.html">Alerts</a></li>
                        <li id="menu-item-345" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-345"><a class="waves-effect" href="javascript/carousel/index.html">Carousels</a></li>
                        <li id="menu-item-3144" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-3144"><a class="waves-effect" href="javascript/charts/index.html">Charts</a></li>
                        <li id="menu-item-8380" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8380"><a class="waves-effect" href="javascript/collapse/index.html">Collapse</a></li>
                        <li id="menu-item-8381" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8381"><a class="waves-effect" href="javascript/date-picker/index.html">Date picker</a></li>
                        <li id="menu-item-8844" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8844"><a class="waves-effect" href="javascript/time-picker/index.html">Time picker</a></li>
                        <li id="menu-item-8382" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8382"><a class="waves-effect" href="javascript/lightbox/index.html">LightBox</a></li>
                        <li id="menu-item-349" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-349"><a class="waves-effect" href="javascript/modals/index.html">Modals</a></li>
                        <li id="menu-item-8383" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8383"><a class="waves-effect" href="javascript/popovers/index.html">Popovers</a></li>
                        <li id="menu-item-353" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-353"><a class="waves-effect" href="javascript/scrollspy/index.html">ScrollSpy</a></li>
                        <li id="menu-item-354" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-354"><a class="waves-effect" href="javascript/sidenav/index.html">SideNav</a></li>
                        <li id="menu-item-4647" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-4647"><a class="waves-effect" href="javascript/smooth-scroll/index.html">Smooth Scroll</a></li>
                        <li id="menu-item-8384" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8384"><a class="waves-effect" href="javascript/tooltips/index.html">Tooltips</a></li>
                        <li id="menu-item-8385" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8385"><a class="waves-effect" href="javascript/waves-effect/index.html">Waves effect</a></li>
                        <li id="menu-item-9125" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-9125"><a class="waves-effect" href="javascript/stickycontent/index.html">StickyContent</a></li>
                        <li id="menu-item-9108" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-9108"><a class="waves-effect" href="javascript/mobile/index.html">Mobile</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <ul class="collapsible collapsible-accordion">
            <li id="menu-item-1825" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children collapsible collapsible-accordion menu-item-1825">
                <a class="collapsible-header waves-effect">Sets</a>
                <div class="collapsible-body">
                    <ul class="sub-menu">
                        <li id="menu-item-1828" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-1828"><a class="waves-effect" href="sets/e-commerce/index.html">E-commerce</a></li>
                        <li id="menu-item-1827" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-1827"><a class="waves-effect" href="sets/magazine/index.html">Magazine</a></li>
                        <li id="menu-item-1826" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-1826"><a class="waves-effect" href="sets/blog/index.html">Blog</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <li id="menu-item-403" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-403"><a class="waves-effect" href="material-design-for-bootstrap/index.html">About</a></li>
        <li id="menu-item-343" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-343"><a class="waves-effect" href="getting-started/index.html">Getting started</a></li>
        <ul class="collapsible collapsible-accordion">
            <li id="menu-item-3512" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has-children collapsible collapsible-accordion menu-item-3512"><a class="collapsible-header waves-effect">Tutorials</a>
                <div class="collapsible-body">
                    <ul class="sub-menu">
                        <li id="menu-item-9508" class="menu-item menu-item-type-post_type menu-item-object-post collapsible collapsible-accordion menu-item-9508"><a class="waves-effect" href="bootstrap-tutorial/index.html">Bootstrap</a></li>
                        <li id="menu-item-9507" class="menu-item menu-item-type-post_type menu-item-object-post collapsible collapsible-accordion menu-item-9507"><a class="waves-effect" href="wordpress-tutorial/index.html">WordPress</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <li id="menu-item-1986" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-362 current_page_item collapsible collapsible-accordion menu-item-1986"><a class="waves-effect" href="index.html">News</a></li>
        <li id="menu-item-9579" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-9579"><a class="waves-effect" href="templates/index.html">Templates</a></li>
        <ul class="collapsible collapsible-accordion">
            <li id="menu-item-2027" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-has-children collapsible collapsible-accordion menu-item-2027">
                <a class="collapsible-header waves-effect">Tools</a>
                <div class="collapsible-body">
                    <ul class="sub-menu">
                        <li id="menu-item-2026" class="menu-item menu-item-type-post_type menu-item-object-page collapsible collapsible-accordion menu-item-2026"><a class="waves-effect" href="material-design-logo-generator/index.html">Logo Generator</a></li>
                    </ul>
                </div>
            </li>
        </ul>
        <li id="menu-item-8472" class="menu-item menu-item-type-custom menu-item-object-custom collapsible collapsible-accordion menu-item-8472"><a class="waves-effect" href="mdb3/index.html">MDB3 Docs</a></li>
    </ul>
</ul>
<!-- Navbar-->
<nav class="navbar navbar-fixed-top scrolling-navbar double-nav mdb-color">
    <!-- Breadcrumb-->
    <div class="breadcrumb-dn">
        <a href="<?=WEB_ROOT?>" style="color: white">Home</a>
        <br/>
    </div>
    <!--Navigation icons-->
</nav>
<!-- Main layout-->
<div style="padding: 50px 0"></div>
<div class="main-wrapper">
    <div class="row">
        <div class="col-lg-12">

            <!-- Newsfeed-->
            <div class="newsfeed">

                <div class="row">
                    <div class="col-md-4 col-md-offset-4" style="background: #fff">
                        <div class="modal-header" style="padding: 20px 10px 10px;margin-bottom: 40px;">
                            <h4>Formulaire Pour les arrets</h4>
                        </div>
                        <div role="form" class="wpcf7" id="wpcf7-f182-o1" lang="en-US" dir="ltr">
                            <div class="screen-reader-response"></div>
                            <form action="#" method="post" id="loginForm" class="" novalidate="novalidate">
                                <div class="md-form">
                                    <input type="text" id="login-username" name="username" class="form-control">
                                    <label for="login-username" class="">Nom d'utitlisateur</label>
                                </div>
                                <div class="md-form">
                                    <input type="password" id="login-password" name="password" class="form-control">
                                    <label for="login-password" class="">Mot de passe</label>
                                </div>
                                <div class="text-xs-center">
                                    <button id="submit-btn" class="btn btn-large btn-rounded btn-primary-outline" type="submit">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.Newsfeed-->

        </div>
    </div>
</div>

<!-- Tooltips and Popups -->
<script src="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/js/bootstrap.min.js"></script>
<!-- Material Design Bootsgtrap scripts -->
<script src="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/js/mdb.min.js"></script>
<script src="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/js/prism.min.js"></script>
<script src="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/js/jquery.validate.js"></script>
<script src="<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/js/theme_scripts.js"></script>


<script type="text/javascript">
    $(".button-collapse").sideNav()
</script>

<script type="text/javascript">
    $('body').scrollspy({
        target: '#scrollspy'
    })
</script>

<script type="text/javascript">
    $(function () {
        $(".sticky").sticky({
            topSpacing: 90
            , zIndex: 2
            , stopper: "#footer"
        });
    });
    $(document).ready(function () {
        $('#loginForm').submit(function (event) {
            event.preventDefault();
            var $submitBtn = document.getElementById('submit-btn');
            var $disabled = document.createAttribute('disabled');
            $disabled.value = 'disabled';
            $submitBtn.innerHTML='Patientez ...';
            $submitBtn.setAttributeNode($disabled);
            $.ajax({
                url:ROOT+'login',
                contentType:'application/x-www-form-urlencoded',
                method:'POST',
                data:$(this).serialize(),
                beforeSend:function(xhr)
                {
                    xhr.setRequestHeader('X-Requested','Is-X-Requested');
                    xhr.setRequestHeader('X-Requested-Method','');
                    xhr.setRequestHeader('X-Requested-Type','JSON');
                },
                success:function ($data) {
                    if($data['isSucceeded'])
                    {
                        window.location.reload(true);
                    }
                    else
                    {
                        $submitBtn.removeAttribute('disabled');
                        $submitBtn.innerHTML='Reéssayer';
                    }
                }
            });

        });
    });
</script>
<script type='text/javascript' src='<?=ASSETS_ROOT?>/assets/plugins/mdb/mdb4/js/theme_scripts.js'></script>
</body>
</html>