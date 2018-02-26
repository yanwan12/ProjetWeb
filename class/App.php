<?php
class App{

    static $db = null;

    static function getDatabase(){
        if(!self::$db){
            self::$db = new DBconn('ecom','ecom', 'base_projet');
        }
        return self::$db;
    }

    static function str_random($length){
        $alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
        return substr(str_shuffle(str_repeat($alphabet, $length)), 0, $length);
    }

}


