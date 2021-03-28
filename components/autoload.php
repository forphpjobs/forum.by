<?php
function autoload($class){

    $class=__DIR__."/$class.php";
    if(file_exists($class)){
        include_once "$class";
    }
}