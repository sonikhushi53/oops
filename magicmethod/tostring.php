<?php
    class ToStringDemo{
        public $pro_name = "mcqs";
        private $pro_type = "IT";
        protected $limited ="private";
        public function __toString(){   
            print_r($this);
            return $this->pro_name;
        }
    }
    $obj = new ToStringDemo();
    echo "<pre>";
    echo $obj;
    

?>