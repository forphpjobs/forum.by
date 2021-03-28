<?php


class Db
{
    public static function connect(){
        $db= new \PDO('mysql:host=localhost;dbname=forumby;charset=utf8', 'root','' );
        return $db;
    }
}