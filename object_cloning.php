<?php
    class Toys{
        protected $name;
        protected $type;
        public function __construct($n,$t)
        {
            $this->name=$n;
            $this->type=$t;
        }
        public function getDtl(){
            echo "\n name of toy is-: $this->name";
            echo "\n type of toy is-: $this->type";

        }
        public function changeType($t)
        {
            $this-> type = $t;
        }
    }
    $t1 = new Toys('car','electric');
    $t1-> getDtl();
    $t2 = clone $t1 ; //it create refrence here when clone is not used
    $t1-> getDtl();
    $t2-> getDtl();
    
    $t2->changeType('manual'); 
    $t1-> getDtl();
    $t2-> getDtl();
?>