<?php


class Route{

    private $route;

    public function __construct(){ //создаем конструктор класса и присваиваем переменной роуты из массива
        $this->route=include_once 'components/routes.php';
    }

    public function run(){ // метод машрутизатор, который в зависимости от строки запроса запускает орпеделенные
        // контроллеры и методы.

        $route=$this->route;
        $www=$_SERVER['REQUEST_URI'];
        foreach ($route as $url=>$puth){

            if(preg_match("~$url~",$www)){ //находим совпадения между строкой запроса($www) и маршрутами($url)

                $puth=preg_replace("~$url~", $puth ,$www );
                $puth=trim($puth,'/');
                $puth=explode('/',$puth);
                $controller=ucfirst(array_shift($puth))."Controller";
                $action='action'.ucfirst(array_shift($puth));

                $params=$puth;

                $file="controller/".$controller.".php";

                if(file_exists($file)){
                    include_once "$file";
                }

                $object= new $controller();
                $object->$action($params);
                break;

            }

        }

    }

}