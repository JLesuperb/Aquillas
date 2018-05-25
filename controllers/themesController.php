<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-23
 * Time: 3:51 PM
 */

class ThemesController extends Controller
{

    public function firstEducation()
    {
        $this->render('themes/education-development');
    }

    public function leadership()
    {
        $this->render('themes/leadership-entrepreneurship');
    }

    public function health()
    {
        $this->render('themes/health');
    }

    public function secondEducation()
    {
        $this->render('themes/education-culture');
    }

    public function humans()
    {
        $this->render('themes/humans-right');
    }

    public function protection()
    {
        $this->render('themes/protection');
    }

    public function child()
    {
        $this->render('themes/child-right');
    }

    public function culture()
    {
        $this->render('themes/culture-art');
    }
}