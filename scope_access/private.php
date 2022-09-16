<?php
// can create local variable of method but they will not accessed outside
    class BaseDemo{
        private $name ;
        private $city;
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
            // echo "<br> in child <br> name =  $this->name";
             // can't access not inherite in child
            parent::show();
        }
    }
    $obj = new BaseDemo("rani",'Bikaner');
    $obj2 = new DeriveDemo("aalu",'us');
    $obj2->test();
    $obj->show();
    print_r($obj); //part of object
    // echo $obj->name;//can't access outside class

?>