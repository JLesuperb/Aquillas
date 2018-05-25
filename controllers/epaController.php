<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-23
 * Time: 2:59 PM
 */

class EPAController extends Controller
{

    public function registers()
    {
        $this->render('epa/registers');
    }

    public function signUp()
    {
        $this->render('epa/sign-up');
    }
}