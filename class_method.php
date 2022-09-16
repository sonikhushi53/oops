<?php
    class ClassMethod{
        public static $no =5;
        public const no2 =7;
        public static function add()
        {
            return self::$no+self::no2;
        }
    }
    echo ClassMethod::add();
?>