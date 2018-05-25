<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-12
 * Time: 2:31 AM
 */
class HomeController extends Controller
{

    public function index()
    {
        $this->render('home/index');
    }
}