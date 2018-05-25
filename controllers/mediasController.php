<?php
/**
 * Created by IntelliJ IDEA.
 * User: JLesuperb
 * Date: 2017-11-23
 * Time: 3:07 PM
 */

class MediasController extends Controller
{

    public function articles()
    {
        $this->render('medias/articles');
    }

    public function articlesDetail($id)
    {
        $GLOBALS['id'] = $id;
        $this->render('medias/articles-detail');
    }

    public function pictures()
    {
        $this->render('medias/pictures');
    }

    public function videos()
    {
        $this->render('medias/videos');
    }

    public function videosDetail($id)
    {
        $GLOBALS['id'] = $id;
        $this->render('medias/videos-detail');
    }
}