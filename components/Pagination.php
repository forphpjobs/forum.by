<?php


class Pagination
{
    public static function AddPagination(array $arr, int $count){

        $sum=count($arr);
        $page=ceil($sum/$count);
        $html='';
        for($i=1;$i<=$page;$i++){

            $html.="<li style='text-decoration: none;display: inline-block;margin-left: 15px;'><a style='font-size: 18px' href='/blog/$i'>$i</a></li>";

        }
        echo "<div><center><ul>$html</ul></center></div>";

    }


}