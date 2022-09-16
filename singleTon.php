<div>
    <b>
    ->just a concept in which a class have only one instance<br>
    -> this concept not followed in php
    </b>
</div>
<?php
    class SingleTon{
        static $obj ;
        public $name = "khushi";
        private function __construct()
        {}
        public static function getInstanse(){
                $obj = new SingleTon();
                echo "<br> - $obj->name in stt <br>";
                return $obj;
        }
        public static function getKnow(){
            print_r(self::$obj);
            
    }
        public function getName(){
            return $this->name;
        }
    }
    $instance = SingleTon::getInstanse();
    echo $instance->getName();
    $instance->name ="ok";
    echo $instance->getName();
    SingleTon::getKnow();

?>