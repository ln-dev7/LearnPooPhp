<?php

class Str {
    public static function upper($string) {
        return strtoupper($string);
    }

    public static function lower($string) {
        return strtolower($string);
    }

    public static function lenth($string) {
        return strlen($string);
    }
}

echo Str::upper("toto est cool! \n");