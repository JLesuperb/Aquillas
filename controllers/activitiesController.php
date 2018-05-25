<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-23
 * Time: 2:13 PM
 */
class ActivitiesController extends Controller
{

    public function index()
    {
        $this->render('activities/index');
    }

    public function detail($id)
    {
        $GLOBALS['id'] = $id;
        $this->render('activities/detail');
    }
}