<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-23
 * Time: 3:27 PM
 */

class ProgrammesController extends Controller
{

    public function education()
    {
        $this->render('programmes/education');
    }

    public function health()
    {
        $this->render('programmes/health');
    }

    public function protection()
    {
        $this->render('programmes/protection');
    }

    public function partners()
    {
        $this->render('programmes/partners');
    }

    public function leadership()
    {
        $this->render('programmes/leadership');
    }

    public function kinds()
    {
        $this->render('programmes/kinds');
    }
}