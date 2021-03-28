<?php


class news
{
  public static function getFirstNews(){

      $db=Db::connect();
      $query=$db->query("SELECT * FROM news LIMIT 3");
      $result=$query->fetchAll(PDO::FETCH_ASSOC);
      return $result;

  }


    public static function getAllNews(){

        $db=Db::connect();
        $query=$db->query("SELECT * FROM news");
        $result=$query->fetchAll(PDO::FETCH_ASSOC);
        return $result;

    }

    public static function getPaginationNews($str){

      $offset=($str-1)*3;
      $db=Db::connect();
      $query=$db->prepare("SELECT * FROM news LIMIT 3 OFFSET :offset");
      $query->bindParam(':offset',$offset, PDO::PARAM_INT);
      $query->execute();
      $res=$query->fetchAll(PDO::FETCH_ASSOC);
      return $res;

    }

    public static function getViewNews($id){

      $db=Db::connect();
      $query=$db->prepare("SELECT * FROM news where id = :id");
      $query->bindParam(':id', $id,PDO::PARAM_INT);
      $query->execute();
      $result=$query->fetch(PDO::FETCH_ASSOC);
      return $result;

    }

}
