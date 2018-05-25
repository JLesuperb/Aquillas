<?php

/**
 * Created by PhpStorm.
 * User: JonathanLesuperb
 * Date: 1/15/2017
 * Time: 1:32 PM
 */
class ErrorController extends Controller
{
    public function error()
    {
        $errorCode = (integer)$_SESSION['errorCode'];
        http_response_code($errorCode);
        $d = [];
        $this->set($d);
        $this->render('errors/'.$errorCode);
    }
}