<?php

use function PHPSTORM_META\argumentsSet;

    class CallDemo{
        private function testPrivate($a,$b){
            echo"<br> This is private method <br>";
            return $a+$b;
        }

        protected function testprotected(){
            echo"<br> This is protected method";
        }
        private static function stateCheck(){
            echo"<br>This is private static method";
        }
        public function __call($name, $arguments)
        {
            if(method_exists($this,$name)){
                echo call_user_func_array([$this,$name],$arguments);
            //    echo $this->$name(...$arguments);
            }
            else{
                echo"<br>$name = Method not exists";
            }
        }
        public static function __callStatic($name, $arguments)
        {
            if(method_exists(__CLASS__,$name)){
                echo call_user_func_array([__CLASS__,$name],$arguments);
            }
            else{
                echo"<br>$name static method not exists";
            }   
        } 
    }
    $obj = new CallDemo();
    $obj->testPrivate(3,4);
    $obj->testProtected();
    $obj->test();
    echo"<hr>";
    CallDemo::stateCheck();
    CallDemo::test();
?>