<?php
include_once "model/news.php";

class SiteController
{
    public static function actionIndex(){

        $news=news::getFirstNews();
        include_once "view/site/index.php";
    }
}