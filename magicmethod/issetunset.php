<?php
    class IssetUnset{
        private $name ="singapore";
        public $color = "blue";
        public function __isset($name)
        {
            if(property_exists($this,$name)){
                echo'<br>all is wells';
            }
            else{
                // echo'<br>undefined';
            }
        }
        public function __unset($name)
        {
            if(property_exists($this,$name)){
                echo"<br>$name is deleted";
                unset($this->$name);
            }
            else
                echo'<br>undefined property';
        }
        
    }
    $obj = new IssetUnset();
    echo(isset($obj->name))?'all is well':'';
    echo(isset($obj->color))?"<br>all is well":'';
    echo(isset($obj->test))?'all is well':'';

    unset($obj->name);

?>