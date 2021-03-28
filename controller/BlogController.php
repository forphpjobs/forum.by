<?php
include_once "model/news.php";

class BlogController
{
    /*
     * Метод для показа всех новостей с пагинацией
     */
    public static function actionIndex($str){

        //$firstNews=news::getFirstNews();

        $str=(int)$str[0];
        $countnews=news::getAllNews();
        $news=news::getPaginationNews($str);
        include_once "view/blog/index.php";


    }

    /*
     * Метод для показа одной новости
     */
    public static function actionView($str){


        $str=(int)$str[0];
        $countnews=news::getAllNews();
        $item=news::getViewNews($str);
        include_once "view/blog/view.php";


    }

}