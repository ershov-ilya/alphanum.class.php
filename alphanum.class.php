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
    private $alphabet;
    function __construct($alphabet='0123456789abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ'){
        //$alphabet.='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $this->alphabet=$alphabet;
    }

    public static function make($input=0){
        $alphabet='0123456789';
        $alphabet.='abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ';


        $base=strlen($alphabet);
//    $max=$base-1;
        $num=$input;
        $output='';

        do {
            print 'база:' . $base . PHP_EOL;
            print 'число:' . $num . PHP_EOL;
            $rest = $num % $base;
            print 'остаток:' . $rest . PHP_EOL;
            $sym=$alphabet[$rest];
            $output.=$sym;
            print '$sym:' . $sym . PHP_EOL;
            $num = floor($num / $base);
            print 'частное:' . $num . PHP_EOL;
        }while($num>0);
        return strrev($output);
    }

    public static function parse($input=0){
        $alphabet='0123456789';
        $alphabet.='abcdefghijkmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ';
        //$alphabet.='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $base=strlen($alphabet);
//    $max=$base-1;
        $num=$input;
        $output='';

        do {
            print 'база:' . $base . PHP_EOL;
            print 'число:' . $num . PHP_EOL;
            $rest = $num % $base;
            print 'остаток:' . $rest . PHP_EOL;
            $sym=$alphabet[$rest];
            $output.=$sym;
            print '$sym:' . $sym . PHP_EOL;
            $num = floor($num / $base);
            print 'частное:' . $num . PHP_EOL;
        }while($num>0);
        return strrev($output);
    }
}