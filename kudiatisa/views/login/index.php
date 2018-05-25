<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-28
 * Time: 12:55 PM
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