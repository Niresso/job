<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 23.05.2017
 * Time: 21:27
 */
class Films
{
    public $name;
    public $textarea;
    public $userid;
    public $year;
    public $actors;
    public $types = array('video/VHS', 'video/DVD', 'video/Blu-Ray');
    public $format;
    const SHOW_BY_DEFAULT = 3;

    public function checkName(){
        if (!empty($this->name)){
            return true;
        }
        return false;
    }

    public function checkYear(){
        if (!empty($this->name)){
            return true;
        }
        return false;
    }
    public function checkActors(){
        if (!empty($this->name)){
            return true;
        }
        return false;
    }

    public function checkTypeFilms(){

        if (in_array($_FILES['film']['type'], $this->types)){
            return true;
        }
        return false;
    }


    public static  function getFilms(){


        $db = Db::getConnection();
        $sql = 'SELECT * FROM films ORDER BY id DESC ';

        $result = $db->query($sql);
        $i = 0;
        $films = [];
        while ($row = $result->fetch()){
            $films[$i] = $row;
            $i++;
        }
        return $films;

    }

    public static function deleteFilm($id){
        $id = intval($id);

        $db = Db::getConnection();
        $sql = "DELETE FROM films WHERE id =:id ";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':id',$id, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt;

    }

    public function addFilm(){

        $db = Db::getConnection();

        $status ='0';
        $sql = "INSERT INTO films (name,format,year,actors)"
            . "VALUE (:name,:format,:year,:actors)";

        $result= $db->prepare($sql);

        @$result->bindParam(':name',htmlspecialchars($this->name),PDO::PARAM_STR);
        @$result->bindParam(':format',$this->format,PDO::PARAM_STR);
        @$result->bindParam(':year',htmlspecialchars($this->year),PDO::PARAM_STR);
        @$result->bindParam(':actors',htmlspecialchars($this->actors),PDO::PARAM_STR);

        return $result->execute();
    }
}