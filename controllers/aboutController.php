<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-12
 * Time: 11:08 AM
 */
class AboutController extends Controller
{

    public function author()
    {
        $this->render('about/author');
    }

    public function summary()
    {
        $this->render('about/summary');
    }

    public function members()
    {
        $this->render('about/members');
    }

    public function membersDetail($id)
    {
        $GLOBALS['id'] = $id;
        $this->render('about/members-detail');
    }
}