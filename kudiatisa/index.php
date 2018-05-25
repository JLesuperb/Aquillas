<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-28
 * Time: 12:35 PM
 */

define('WEB_ROOT',str_replace('index.php','',$_SERVER['SCRIPT_NAME']));
define('ASSETS_ROOT',"..");
define('ROOT',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
require '../core/app.php';
require '../core/controller.php';

session_start();
if(!isset($_GET['page']))
{
    $_SESSION['errorCode'] = 404;
    App::sendRedirect('error?url=http://'.$_SERVER['SERVER_NAME'].''.$_SERVER['REQUEST_URI']);
}
$requests=explode('/',$_GET['page']);
App::unSetErrorCode($requests[0]);

switch ($requests[0])
{
    case "":
        if(isset($_SESSION['user']))
        {
            App::sendRedirect('home');
        }
        else
        {
            App::sendRedirect('login');
        }
        break;
    case "login":
        define('CURRENT_PAGE','login');
        App::loadController('loginController');
        $loginController = new LoginController();
        if(!isset($requests[1])||empty($requests[1]))
        {
            $loginController->index();
        }
        else
        {
            App::foundError();
        }
        break;
    case "admin":
        define('CURRENT_PAGE','admin');
        App::loadController('adminController');
        $adminController = new AdminController();
        if(!isset($requests[1])||empty($requests[1]))
        {
            $adminController->index();
        }
        else
        {
            App::foundError();
        }
        break;
}