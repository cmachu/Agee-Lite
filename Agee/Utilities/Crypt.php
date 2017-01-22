<?php
/**
 * Created by PhpStorm.
 * User: Pawel
 * Date: 02.01.15
 * Time: 16:21
 */

namespace Tools;

class Crypt{

    public static function password($data){
        global $ageeConfig;
        return sha1($data."$".$ageeConfig['cryptPaper']);
    }

    public static function hash(){
        global $ageeConfig;
        return md5(rand(0,1000).'-'.$ageeConfig['cryptPaper'].'.'.mktime());
    }

    public static function generatePassword($length = 5){
        global $ageeConfig;
        return substr(sha1(mktime()."$".$ageeConfig['cryptPaper']),0,$length);
    }

}