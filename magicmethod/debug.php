<?php
    class DebugInfoDemo{
        public $pro_name = "mcqs";
        private $pro_type = "IT";
        protected $limited ="private";
        public function __debugInfo()
        {
            return ["product_name"=>$this->pro_name];
        }
    }
    $obj = new DebugInfoDemo();
    echo"<pre>";
    print_r($obj);
    echo"<br><br>";
    var_dump($obj);
?>