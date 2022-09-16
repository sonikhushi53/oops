<?php
    class BaseDemo{
        public $name ;
        public $city;
        public function __construct($n,$c){
            $this->name = $n; //can accessed inside class
            $this->city = $c;
        }
        public function show(){
            echo "<br> name =  $this->name";
            echo"<br> city = $this->city<Br>";
        }
    }
    class DeriveDemo extends BaseDemo{
        public function test(){
            echo "<br> in child <br> name =  $this->name";
            //  can be access inherite in child
        }
    }
    $obj = new BaseDemo("rani",'Bikaner');
    $obj2 = new DeriveDemo("ran",'singapore');
    $obj2->test();
    $obj->show();
    $obj-> mobile=8298; //by default php create this property for class as public
    print_r($obj); //part of object
    echo $obj->name;//can be access outside class 



?>