<?php
/**
 * Created by PhpStorm.
 * Author:   ershov-ilya
 * GitHub:   https://github.com/ershov-ilya/
 * About me: http://about.me/ershov.ilya (EN)
 * Website:  http://ershov.pw/ (RU)
 * Date: 12.08.2015
 * Time: 11:58
 */

class AlphaNum {
//    private static $alphabet='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // full deck
    private static $alphabet='0123456789abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ';
    private static $base=60;

    function __construct($alphabet='0123456789abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ'){
        AlphaNum::$alphabet=$alphabet;
        AlphaNum::$base=strlen($alphabet);
    }

    public static function encode($input=0){
        $alphabet=AlphaNum::$alphabet;
        $base=AlphaNum::$base;
        $num=(int)$input;
        $output='';
        do {
            $rest = $num % $base;
            $sym=$alphabet[$rest];
            $output.=$sym;
            $num = floor($num / $base);
        }while($num>0);
        $output=strrev($output);
        return $output;
    }

    public static function parse($input){
        $alphabet=AlphaNum::$alphabet;
        $base=AlphaNum::$base;
        $str=rtrim($input,"\n\r");

        $res=0;
        $len=strlen($str);
        $last=$len-1;

        for($i=0; $i<$len; $i++){
            $pos=strpos($alphabet,$str[$i]);
            $res+=$pos;
            if($i!=$last) $res *= $base;
        }
        return $res;
    }
}